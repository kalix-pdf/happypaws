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

/* __string_template__a599247e9984e6b5e89c6a20108f606111dc468b2a5729f3a22b98b08f79dd05 */
class __TwigTemplate_3f7dd3a5ef6caef13bb2dbce6d19650f55a32d8cafb6d86c66666fac205a2d5b extends Template
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
        echo "<h3 class=\"mb-4\">All Reviews</h3>

";
        // line 3
        if (($context["reviews"] ?? null)) {
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 5
                echo "    <div class=\"card mb-3 p-3\">
      <h5>";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6);
                echo "</h5>
      <p>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 7);
                echo "</p>
      <strong>Rating: ";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 8);
                echo "/5</strong><br />
      <small class=\"text-muted\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 9);
                echo "</small>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
  <div class=\"pagination-container mt-4\">
    ";
            // line 14
            echo ($context["pagination"] ?? null);
            echo "
  </div>

";
        } else {
            // line 18
            echo "  <p>No reviews found for this product.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a599247e9984e6b5e89c6a20108f606111dc468b2a5729f3a22b98b08f79dd05";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  76 => 14,  72 => 12,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a599247e9984e6b5e89c6a20108f606111dc468b2a5729f3a22b98b08f79dd05", "");
    }
}
