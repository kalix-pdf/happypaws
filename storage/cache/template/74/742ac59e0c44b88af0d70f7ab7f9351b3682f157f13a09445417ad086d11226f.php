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

/* __string_template__a678cbabab2544a8b316d2f8083491c59622bb6154193ad1d13a18f9f04d6677 */
class __TwigTemplate_cef66cefb90ad8bfddd0ac9232f42b34844c03e88c2f5b3a1eb76bf3f089a291 extends Template
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
  .card {
    box-shadow: 0 2px 4px black;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  .card-header {
    background-color: #f8f9fa;
    font-weight: bold;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
  }
  .card-body {
    padding: 15px;
  }
</style>

";
        // line 18
        echo ($context["header"] ?? null);
        echo "

<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 25
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 26
        echo ($context["cart"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>


<form action=\"index.php?route=checkout/place_order\" method=\"POST\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 38
            echo "      <li class=\"breadcrumb-item\">
        <a class=\"text-decoration-none text-black\" href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 39);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 39);
            echo "</a>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ol>
  </nav>

  ";
        // line 45
        if (($context["error_warning"] ?? null)) {
            // line 46
            echo "  <div class=\"container\">
    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 48
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  </div>
  ";
        }
        // line 53
        echo "
  <div class=\"container px-4\" id=\"content\">
    ";
        // line 55
        echo ($context["content_top"] ?? null);
        echo "
    <h2 class=\"mb-3\">HappyPaws | ";
        // line 56
        echo ($context["heading_title"] ?? null);
        echo "</h2>

    <div class=\"card mb-3\">
      <div class=\"card-header\">Shipping Address</div>
      <div class=\"card-body px-4\"> 
        <h4 class=\"panel-title\">Address</h4>
        ";
        // line 62
        echo ($context["shipping_add"] ?? null);
        echo "
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\">Order Summary</div>
      <div class=\"card-body px-4\"> 
        <div class=\"card-text\">";
        // line 69
        echo ($context["order_summary"] ?? null);
        echo "</div>
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\">Shipping Option</div>
      <div class=\"card-body px-4\"> 
        <div class=\"card-text\">";
        // line 76
        echo ($context["shipping_method"] ?? null);
        echo "</div>
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\">Payment Method</div>
      <div class=\"card-body px-4\"> 
        <div class=\"card-text\">";
        // line 83
        echo ($context["payment_method"] ?? null);
        echo "</div>
      </div>
    </div>

    <div class=\"card text-bg-light border-warning mb-3\">
      <div class=\"card-header\">Payment Details</div>
      <div class=\"card-body px-4\"> 
        <div class=\"card-text\">";
        // line 90
        echo ($context["payment_details"] ?? null);
        echo "</div>
      </div>
      <div class=\"text-end px-4\">
        <button class=\"btn btn-primary mb-4 px-3 py-2 fs-5\" type=\"submit\">Place Order</button>
      </div>
    </div>
    
  </div>
</form>

<script>
";
        // line 101
        if ( !($context["logged"] ?? null)) {
            // line 102
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 109
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 119
        echo "
</script>
";
        // line 121
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__a678cbabab2544a8b316d2f8083491c59622bb6154193ad1d13a18f9f04d6677";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 121,  216 => 119,  203 => 109,  194 => 102,  192 => 101,  178 => 90,  168 => 83,  158 => 76,  148 => 69,  138 => 62,  129 => 56,  125 => 55,  121 => 53,  113 => 48,  109 => 46,  107 => 45,  102 => 42,  91 => 39,  88 => 38,  84 => 37,  70 => 26,  66 => 25,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a678cbabab2544a8b316d2f8083491c59622bb6154193ad1d13a18f9f04d6677", "");
    }
}
