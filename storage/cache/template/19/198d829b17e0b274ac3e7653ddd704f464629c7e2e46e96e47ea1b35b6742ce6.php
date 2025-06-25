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

/* __string_template__2e70b4ca2944cb82929f65105d6a14fb9537c0d0cb0f2b98265150aa877687f8 */
class __TwigTemplate_bdc416fadff36c93310d7aae974578f8ad7fce590c455f92e51c092a01846d76 extends Template
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
        } else {
            // line 13
            echo "  <p>No reviews found for this product.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__2e70b4ca2944cb82929f65105d6a14fb9537c0d0cb0f2b98265150aa877687f8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2e70b4ca2944cb82929f65105d6a14fb9537c0d0cb0f2b98265150aa877687f8", "");
    }
}
