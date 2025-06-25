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

/* __string_template__329b65834d2e56f938a044f1ea4575a59bf1a297ee85c48e41ad7a1e8ea0fbc6 */
class __TwigTemplate_374ec8fa4b3eb336188298a49ccf4b8a24e51e99e34c5a0dab2d3be69af22106 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<h3 class=\"mb-4\">All Reviews</h3>

";
        // line 4
        if (($context["reviews"] ?? null)) {
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "    <div class=\"card mb-3 p-3\">
      <h5>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "</h5>
      <p>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 8);
                echo "</p>
      <strong>Rating: ";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9);
                echo "/5</strong><br />
      <small class=\"text-muted\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 10);
                echo "</small>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "
  <div class=\"pagination-container mt-4\">
    ";
            // line 15
            echo ($context["pagination"] ?? null);
            echo "
  </div>

";
        } else {
            // line 19
            echo "  <p>No reviews found for this product.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__329b65834d2e56f938a044f1ea4575a59bf1a297ee85c48e41ad7a1e8ea0fbc6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  78 => 15,  74 => 13,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  50 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__329b65834d2e56f938a044f1ea4575a59bf1a297ee85c48e41ad7a1e8ea0fbc6", "");
    }
}
