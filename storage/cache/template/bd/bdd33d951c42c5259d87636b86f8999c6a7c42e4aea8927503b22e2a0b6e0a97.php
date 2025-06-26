<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__b0b6062c502a8c46c57ad0e146d9ee38b8355f3fd279a0dff7c756260c126fe1 */
class __TwigTemplate_3cc0f2fd7700f18ef83443e34ed8af58a734000a7ff667e209639cf4215acee3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>
.pagination {
  margin-top: 20px;
}

.pagination .page-link {
  color: #333;
  border: 1px solid #ddd;
  margin: 0 3px;
}

.pagination .page-link:hover {
  background-color: #f8f9fa;
  border-color: #aaa;
}

.pagination .active .page-link {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

</style>

<div class=\"container\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 27
            echo "    <div class=\"card mb-3 p-3\">
        <h5>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 28);
            echo "</h5>
        <p>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 29);
            echo "</p>
        <strong>Rating: ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 30);
            echo "/5</strong><br />
        <small class=\"text-muted\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 31);
            echo "</small>

        ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 33)) {
                // line 34
                echo "        <div class=\"mt-2\">
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 36
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        </div>
        ";
            }
            // line 40
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <div class=\"pagination-wrapper mt-4 d-flex justify-content-center\">
        ";
        // line 43
        echo ($context["pagination"] ?? null);
        echo "
    </div>    
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__b0b6062c502a8c46c57ad0e146d9ee38b8355f3fd279a0dff7c756260c126fe1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  117 => 42,  110 => 40,  106 => 38,  97 => 36,  93 => 35,  90 => 34,  88 => 33,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b0b6062c502a8c46c57ad0e146d9ee38b8355f3fd279a0dff7c756260c126fe1", "");
    }
}
