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

/* __string_template__38a2534f411781223d438f0e0b98be7cdc739ba0c6437e2f1538bf2fe4b2a9bf */
class __TwigTemplate_0731ce12243acf656dadd22a99854a80893a30f06c475403ec3163a26ac58179 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<style>
.table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>thead>tr>th {
    border: 0px solid #ddd !important;
}
</style>
<div class=\"container\">
<table class=\"table table-bordered\">
      <thead>
       <h1>
         <div class=\"pull-right\">
          <button type=\"button\" id = \"print-button\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 24
        echo ($context["text_print_label"] ?? null);
        echo "\" onclick=\"printLabel();\" style = \"float:right;\"><i class=\"fa fa-print\"></i></button>
         </div>
       </h1>
    </thead>
  </table>
  
 ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "<div style=\"page-break-after: always;\">
  <table class=\"table\">
      <tbody>
      <tr>
      <td>
       <img src=\"";
            // line 36
            echo ($context["store_image"] ?? null);
            echo "\" alt = \"";
            echo ($context["text_image"] ?? null);
            echo "\">
         <div class=\"pull-right\">
              <strong>";
            // line 38
            echo (($__internal_compile_0 = ($context["order_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["store_name"] ?? null) : null);
            echo "</strong><br />
                ";
            // line 39
            echo (($__internal_compile_1 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["firstname"] ?? null) : null);
            echo " ";
            echo (($__internal_compile_2 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["lastname"] ?? null) : null);
            echo "</br>
                ";
            // line 40
            echo (($__internal_compile_3 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["companyname"] ?? null) : null);
            echo "</br>
                ";
            // line 41
            echo (($__internal_compile_4 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["address_1"] ?? null) : null);
            echo ", ";
            echo (($__internal_compile_5 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["city"] ?? null) : null);
            echo "</br>
                ";
            // line 42
            echo (($__internal_compile_6 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["state"] ?? null) : null);
            echo "</br>
                ";
            // line 43
            echo (($__internal_compile_7 = ($context["seller_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["country"] ?? null) : null);
            echo "
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <table class=\"table table-bordered\">
    <thead style=\"background-color:grey;border: 0px \">
      <tr>
        <th style=\"\">
            <b style=\"color:white;\">";
            // line 53
            echo ($context["text_invoice_no"] ?? null);
            echo "
            ";
            // line 54
            if (($context["invoice_no"] ?? null)) {
                // line 55
                echo "             ";
                echo ($context["invoice_no"] ?? null);
                echo "
            ";
            }
            // line 57
            echo "            </b> <br />
            <b style=\"color:white;\">";
            // line 58
            echo ($context["text_order_id"] ?? null);
            echo " ";
            echo ($context["order_id"] ?? null);
            echo "</b> <br />
            <b style=\"color:white;\">";
            // line 59
            echo "Order date : ";
            echo " ";
            echo ($context["date_added"] ?? null);
            echo " </b><br />
        </th>
         <th style=\"\">
         </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"width: 50%;\"><b>";
            // line 67
            echo ($context["text_billing_address"] ?? null);
            echo "</b></td>
        <td style=\"width: 50%;\"><b>";
            // line 68
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td><address>
          ";
            // line 74
            echo ($context["payment_address"] ?? null);
            echo "
          <br/>  
         </address></td>
         <td><address>
            ";
            // line 78
            echo ($context["shipping_address"] ?? null);
            echo "
          </address>
        </td>
      </tr>
    </tfoot>
  </table>
  <table class=\"table table-bordered\">
    <tbody>
      <tr>
        <td style=\"width: 50%;\"><b>";
            // line 87
            echo ($context["text_payment_method"] ?? null);
            echo "</b></td>
        <td style=\"width: 50%;\"><b>";
            // line 88
            echo ($context["text_shipping_method"] ?? null);
            echo "</b></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td><address>
          ";
            // line 94
            echo ($context["payment_method"] ?? null);
            echo "
          <br/>
         </address></td>
         <td><address>
            ";
            // line 98
            echo ($context["shipping_method"] ?? null);
            echo "
            <br/>
            <br/>
            <br/>
            ( <b>";
            // line 102
            echo ($context["entry_total_ship_charge"] ?? null);
            echo "</b> ";
            echo ($context["shipping_applied"] ?? null);
            echo ")
          </address>
        </td>
      </tr>
    </tfoot>
  </table>
  <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td class=\"text-right\"><b>";
            // line 111
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 112
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 113
            echo ($context["column_model"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
       
        <tr>
          <td class=\"text-right\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 119);
            echo "</td>
          <td>";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
            echo "
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 122
                echo "            <br />
            &nbsp;<small> - ";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 123);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "</td>
          <td>";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 125);
            echo "</td>
        </tr>
       
      </tbody>
    </table>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "</div>
</body>
<script>

function printLabel(){
  // \$('#print-button').addClass(\"hide\");
  window.print();
}
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__38a2534f411781223d438f0e0b98be7cdc739ba0c6437e2f1538bf2fe4b2a9bf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 132,  289 => 125,  286 => 124,  276 => 123,  273 => 122,  269 => 121,  265 => 120,  261 => 119,  252 => 113,  248 => 112,  244 => 111,  230 => 102,  223 => 98,  216 => 94,  207 => 88,  203 => 87,  191 => 78,  184 => 74,  175 => 68,  171 => 67,  158 => 59,  152 => 58,  149 => 57,  143 => 55,  141 => 54,  137 => 53,  124 => 43,  120 => 42,  114 => 41,  110 => 40,  104 => 39,  100 => 38,  93 => 36,  86 => 31,  82 => 30,  73 => 24,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__38a2534f411781223d438f0e0b98be7cdc739ba0c6437e2f1538bf2fe4b2a9bf", "");
    }
}
