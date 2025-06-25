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

/* __string_template__d5fd9c0fb33f2fbf49e4a7f7ee7866a3b847a84e22506543356fe05a3b0a5810 */
class __TwigTemplate_efda24571fc494b14baa4a5eadc97940b40c09a7c760d9c00961bafd18f891a5 extends Template
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
<div id=\"account-order\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>
  </nav>
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 23
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 25
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 29
            echo "    ";
        }
        // line 30
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <table class=\"table custom-table\" style=\"color:white;\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 35
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">
              ";
        // line 41
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 42
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 43
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo " <br/>
              <b>Tracking Number</b> ";
        // line 44
        echo ($context["tracking_number"] ?? null);
        echo "
            </td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 46
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 48
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
        // line 61
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
        // line 69
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 70
        if (($context["shipping_address"] ?? null)) {
            // line 71
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 72
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 76
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 77
        if (($context["shipping_address"] ?? null)) {
            // line 78
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 79
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 86
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 87
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 88
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 89
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 90
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 91
        if (($context["products"] ?? null)) {
            // line 92
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 93
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 98
            echo "          <tr>
            <td class=\"text-left\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
            echo "
              ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 101);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 101);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 102);
            echo "</td>
            <td class=\"text-right\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 103);
            echo "</td>
            <td class=\"text-right\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
            echo "</td>
            <td class=\"text-right\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 105);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 106
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 106)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 106);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 106);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 110
            echo "          <tr>
            <td class=\"text-left\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 111);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 114);
            echo "</td>
            <td class=\"text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 115);
            echo "</td>
            ";
            // line 116
            if (($context["products"] ?? null)) {
                // line 117
                echo "            <td></td>
            ";
            }
            // line 118
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 125
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 127);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 128);
            echo "</td>
            ";
            // line 129
            if (($context["products"] ?? null)) {
                // line 130
                echo "            <td></td>
            ";
            }
            // line 131
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 137
        if (($context["comment"] ?? null)) {
            // line 138
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 141
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 146
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 151
        echo "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 153
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 155
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 156
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 158
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d5fd9c0fb33f2fbf49e4a7f7ee7866a3b847a84e22506543356fe05a3b0a5810";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 158,  453 => 156,  449 => 155,  442 => 153,  438 => 151,  430 => 146,  422 => 141,  417 => 138,  415 => 137,  409 => 133,  402 => 131,  398 => 130,  396 => 129,  392 => 128,  388 => 127,  384 => 125,  380 => 124,  374 => 120,  367 => 118,  363 => 117,  361 => 116,  357 => 115,  353 => 114,  347 => 111,  344 => 110,  339 => 109,  320 => 106,  316 => 105,  312 => 104,  308 => 103,  304 => 102,  293 => 101,  287 => 100,  283 => 99,  280 => 98,  276 => 97,  270 => 93,  266 => 92,  264 => 91,  260 => 90,  256 => 89,  252 => 88,  248 => 87,  244 => 86,  235 => 79,  229 => 78,  227 => 77,  223 => 76,  217 => 72,  211 => 71,  209 => 70,  205 => 69,  194 => 61,  171 => 48,  162 => 46,  157 => 44,  151 => 43,  144 => 42,  135 => 41,  126 => 35,  119 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  92 => 23,  87 => 22,  79 => 18,  76 => 17,  68 => 13,  66 => 12,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d5fd9c0fb33f2fbf49e4a7f7ee7866a3b847a84e22506543356fe05a3b0a5810", "");
    }
}
