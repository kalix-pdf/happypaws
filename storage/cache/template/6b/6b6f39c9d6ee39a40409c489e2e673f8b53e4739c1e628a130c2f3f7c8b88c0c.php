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

/* __string_template__fa673bd10ff0ef095561daeaca92072a1c9f03e0a12bd8fe8d9856f15e0e8695 */
class __TwigTemplate_4ba4cbaa26b789049b19910173fe0032100118de12d53616cb7fa5291a58aa7a extends Template
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

<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  ";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 15
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 16
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\"page-title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <form id=\"form-custom-checkout\" action=\"";
        // line 20
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
        
        <!-- Customer Info -->
        <h3>Customer Details</h3>
        <div class=\"form-group\">
          <label for=\"input-name\">Name</label>
          <input type=\"text\" name=\"fullname\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"input-email\">Email</label>
          <input type=\"email\" name=\"email\" class=\"form-control\" required>
        </div>

        <!-- Payment Address -->
        <h3>Billing Address</h3>
        <div class=\"form-group\">
          <label>Address</label>
          <input type=\"text\" name=\"address\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label>City</label>
          <input type=\"text\" name=\"city\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label>Postcode</label>
          <input type=\"text\" name=\"postcode\" class=\"form-control\" required>
        </div>

        <!-- Shipping Info (if required) -->
        ";
        // line 49
        if (($context["shipping_required"] ?? null)) {
            // line 50
            echo "          <h3>Shipping Method</h3>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"shipping_method\" value=\"flat.flat\" checked>
            <label class=\"form-check-label\">Flat Rate Shipping</label>
          </div>
        ";
        }
        // line 56
        echo "
        <!-- Payment Method -->
        <h3>Payment Method</h3>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"cod\" checked>
          <label class=\"form-check-label\">Cash on Delivery</label>
        </div>

        <!-- Confirm Order -->
        <h3>Order Summary</h3>
        <p>Total: <strong>";
        // line 66
        echo ($context["total"] ?? null);
        echo "</strong></p>

        <button type=\"submit\" class=\"btn btn-primary btn-lg mt-3\">Place Order</button>

      </form>

      ";
        // line 72
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 74
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__fa673bd10ff0ef095561daeaca92072a1c9f03e0a12bd8fe8d9856f15e0e8695";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 77,  159 => 74,  154 => 72,  145 => 66,  133 => 56,  125 => 50,  123 => 49,  91 => 20,  86 => 18,  81 => 16,  77 => 15,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fa673bd10ff0ef095561daeaca92072a1c9f03e0a12bd8fe8d9856f15e0e8695", "");
    }
}
