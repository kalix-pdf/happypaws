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

/* __string_template__3d69e8a33fc27a5d115b65bad97476ce723e9467d8216e86ac10620288fe7201 */
class __TwigTemplate_76303b26a6552013f04e6bec4d68ed2174c523772368152bf05ed805b19f4ab9 extends Template
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
  .list-group-item:hover {
    background-color:rgb(255, 224, 162);
    color: #0d6efd;
  }

  .list-group-subitem {
    padding-left: 2rem;
    font-size: 0.95rem;
  }

  .list-group-item {
    border: none !important;
    color: #162F65;;
  }

  .list-group-item.active {
    background-color: #162F65;
    color: #f6c96d;
  }
</style>

<div class=\"list-group border-end border-info px-3\">
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25) == ($context["category_id"] ?? null))) {
                // line 26
                echo "      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                echo "\" class=\"list-group-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                echo "</a>
      
      ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 30
                        echo "          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 30);
                        echo "\"
            class=\"list-group-item ";
                        // line 31
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 31) == ($context["child_id"] ?? null))) {
                            echo "active";
                        }
                        echo " list-group-subitem\">
            <i class=\"fa fa-paw me-3\"></i> ";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                        echo "
          </a>

        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "      ";
                }
                // line 37
                echo "    ";
            } else {
                // line 38
                echo "      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                echo "</a>
    ";
            }
            // line 40
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3d69e8a33fc27a5d115b65bad97476ce723e9467d8216e86ac10620288fe7201";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  119 => 40,  111 => 38,  108 => 37,  105 => 36,  95 => 32,  89 => 31,  84 => 30,  79 => 29,  77 => 28,  69 => 26,  66 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3d69e8a33fc27a5d115b65bad97476ce723e9467d8216e86ac10620288fe7201", "");
    }
}
