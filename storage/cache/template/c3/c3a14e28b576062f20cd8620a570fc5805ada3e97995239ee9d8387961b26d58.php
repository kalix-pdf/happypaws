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

/* __string_template__e0553f27939800e71c7494aad834b424cc473e0bba64d3cad87907b033396b70 */
class __TwigTemplate_7470f1f52d6737e4f1b17a75d64ad05065f7fc5677fb2d927c780b5d9ea8e8dc extends Template
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
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    <div id=\"content\" class=\"";
        // line 23
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 24
        echo ($context["content_top"] ?? null);
        echo "

      <h1 class=\"page-title\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <form id=\"form-custom-checkout\" action=\"";
        // line 28
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
        // line 57
        if (($context["shipping_required"] ?? null)) {
            // line 58
            echo "          <h3>Shipping Method</h3>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"shipping_method\" value=\"flat.flat\" checked>
            <label class=\"form-check-label\">Flat Rate Shipping</label>
          </div>
        ";
        }
        // line 64
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
        // line 74
        echo ($context["total"] ?? null);
        echo "</strong></p>

        <button type=\"submit\" class=\"btn btn-primary btn-lg mt-3\">Place Order</button>

      </form>

      ";
        // line 80
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 82
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>
";
        // line 85
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__e0553f27939800e71c7494aad834b424cc473e0bba64d3cad87907b033396b70";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 85,  182 => 82,  177 => 80,  168 => 74,  156 => 64,  148 => 58,  146 => 57,  114 => 28,  109 => 26,  104 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e0553f27939800e71c7494aad834b424cc473e0bba64d3cad87907b033396b70", "");
    }
}
