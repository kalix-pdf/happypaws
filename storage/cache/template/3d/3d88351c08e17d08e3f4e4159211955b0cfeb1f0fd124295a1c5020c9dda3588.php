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

/* __string_template__a9f0f4740413d00acce4c11eeb6265a74adca42ad21ddbfb588f63881dcbef45 */
class __TwigTemplate_ecbf63e88175ca80c5505455c5eefce055b99f5e6bb188bae1e99279dd547046 extends Template
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 29
            echo "    <div class=\"card mb-3 p-3\">
        <h5>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 30);
            echo "</h5>
        <p>";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 31);
            echo "</p>
        <strong>Rating: ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 32);
            echo "/5</strong><br />
        <small class=\"text-muted\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 33);
            echo "</small>

        ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 35)) {
                // line 36
                echo "        <div class=\"mt-2\">
            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 38
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </div>
        ";
            }
            // line 42
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    <div class=\"pagination-wrapper mt-4 d-flex justify-content-center\">
        ";
        // line 45
        echo ($context["pagination"] ?? null);
        echo "
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a9f0f4740413d00acce4c11eeb6265a74adca42ad21ddbfb588f63881dcbef45";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  119 => 44,  112 => 42,  108 => 40,  99 => 38,  95 => 37,  92 => 36,  90 => 35,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  70 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a9f0f4740413d00acce4c11eeb6265a74adca42ad21ddbfb588f63881dcbef45", "");
    }
}
