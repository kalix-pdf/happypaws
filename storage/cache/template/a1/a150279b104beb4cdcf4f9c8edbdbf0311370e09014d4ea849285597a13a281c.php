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

/* __string_template__ae64b9b877f1f752500fe10324acbbeee024618a870e9ad9b0aee8810787949b */
class __TwigTemplate_6c56f085e78cf79efa0daf41e278dee8e76e9a84ba0e616117f4a08c872eec2e extends Template
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
<style>
.table {
  color: white;
  background-color: aqua;
}
</style>

<div id=\"account-order\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ol>
  </nav>
  ";
        // line 19
        if (($context["success"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "  <div class=\"row mb-4\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 30
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 32
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 33
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 36
            echo "    ";
        }
        // line 37
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 38
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <table class=\"table custom-table\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 42
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">
              ";
        // line 48
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 49
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 50
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo " <br/>
              <b>Tracking Number</b> ";
        // line 51
        echo ($context["tracking_number"] ?? null);
        echo "
            </td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 53
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 55
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">Tracking status</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%\">
              <b>";
        // line 68
        echo ($context["logs"] ?? null);
        echo "</b>
            </td>
          </tr>
        </tbody> 
      </table>
      <table class=\"table custom-table\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 76
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 77
        if (($context["shipping_address"] ?? null)) {
            // line 78
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 79
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 83
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 84
        if (($context["shipping_address"] ?? null)) {
            // line 85
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 86
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 93
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 94
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 95
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 96
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 97
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 98
        if (($context["products"] ?? null)) {
            // line 99
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 100
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 105
            echo "          <tr>
            <td class=\"text-left\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
            echo "
              ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 108);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 108);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 109);
            echo "</td>
            <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 110);
            echo "</td>
            <td class=\"text-right\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
            echo "</td>
            <td class=\"text-right\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 112);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 113)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 113);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" style=\"background-color: #162F65; color: #f6c96d;\" class=\"btn\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " 
            ";
            // line 115
            echo "          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 118
            echo "          <tr>
            <td class=\"text-left\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 119);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 122);
            echo "</td>
            <td class=\"text-right\">";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 123);
            echo "</td>
            ";
            // line 124
            if (($context["products"] ?? null)) {
                // line 125
                echo "            <td></td>
            ";
            }
            // line 126
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 133
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 135);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 136);
            echo "</td>
            ";
            // line 137
            if (($context["products"] ?? null)) {
                // line 138
                echo "            <td></td>
            ";
            }
            // line 139
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 145
        if (($context["comment"] ?? null)) {
            // line 146
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 149
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 154
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 159
        echo "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 161
        echo ($context["continue"] ?? null);
        echo "\" style=\"background-color: #162F65; color: #f6c96d;\" class=\"btn\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 163
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 164
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 166
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__ae64b9b877f1f752500fe10324acbbeee024618a870e9ad9b0aee8810787949b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 166,  458 => 164,  454 => 163,  447 => 161,  443 => 159,  435 => 154,  427 => 149,  422 => 146,  420 => 145,  414 => 141,  407 => 139,  403 => 138,  401 => 137,  397 => 136,  393 => 135,  389 => 133,  385 => 132,  379 => 128,  372 => 126,  368 => 125,  366 => 124,  362 => 123,  358 => 122,  352 => 119,  349 => 118,  344 => 117,  337 => 115,  327 => 113,  323 => 112,  319 => 111,  315 => 110,  311 => 109,  300 => 108,  294 => 107,  290 => 106,  287 => 105,  283 => 104,  277 => 100,  273 => 99,  271 => 98,  267 => 97,  263 => 96,  259 => 95,  255 => 94,  251 => 93,  242 => 86,  236 => 85,  234 => 84,  230 => 83,  224 => 79,  218 => 78,  216 => 77,  212 => 76,  201 => 68,  178 => 55,  169 => 53,  164 => 51,  158 => 50,  151 => 49,  142 => 48,  133 => 42,  126 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  99 => 30,  94 => 29,  86 => 25,  83 => 24,  75 => 20,  73 => 19,  69 => 17,  58 => 14,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ae64b9b877f1f752500fe10324acbbeee024618a870e9ad9b0aee8810787949b", "");
    }
}
