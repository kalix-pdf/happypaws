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

/* __string_template__ef64a24b41df92222b47e8eb00ae73b83235bdf746b06ec92e2ccf2d4aa3a7ce */
class __TwigTemplate_09f75131a09ad6999e768d245a492c05d345bbda4673d9a7ee97e8ba22b0e0e9 extends Template
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
  margin-bottom: 10px;
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 28
            echo "    <div class=\"card mb-3 p-3\">
        <h5>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 29);
            echo "</h5>
        <p>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 30);
            echo "</p>
        <strong>Rating: ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 31);
            echo "/5</strong><br />
        <small class=\"text-muted\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 32);
            echo "</small>

        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 34)) {
                // line 35
                echo "        <div class=\"mt-2\">
            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 37
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </div>
        ";
            }
            // line 41
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    <div class=\"pagination-wrapper mt-4 d-flex justify-content-center\">
        ";
        // line 44
        echo ($context["pagination"] ?? null);
        echo "
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__ef64a24b41df92222b47e8eb00ae73b83235bdf746b06ec92e2ccf2d4aa3a7ce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  118 => 43,  111 => 41,  107 => 39,  98 => 37,  94 => 36,  91 => 35,  89 => 34,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  69 => 28,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ef64a24b41df92222b47e8eb00ae73b83235bdf746b06ec92e2ccf2d4aa3a7ce", "");
    }
}
