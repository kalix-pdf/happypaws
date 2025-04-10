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

/* __string_template__dd158d98c1c453ad7ea1a9959fcc15f1c9b72342b9b9301438ac77c3be930201 */
class __TwigTemplate_22a67e9f6f4ab499703678eb9f4ec7eaacbc04b7ab9239dff4335567264d69db extends Template
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
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">                    
                    
                      <div class=\"pull-right\">
                        <a href=\"";
        // line 29
        echo ($context["sold_invoice"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-primary wk-btn btn-md\" style=\"margin-bottom:5px;font-size: 10px;\" target=\"_blank\" title=\"";
        echo "Print Invoice";
        echo "\"><i class=\"fa fa-print\"></i></a>
                      </div>
                    
                  
      <h2>";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 37
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 42
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 43
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 44
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 45
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 47
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
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 54
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 55
        if (($context["shipping_address"] ?? null)) {
            // line 56
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 57
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 61
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 62
        if (($context["shipping_address"] ?? null)) {
            // line 63
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 64
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 71
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 72
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 73
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 74
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 75
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 76
        if (($context["products"] ?? null)) {
            // line 77
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 78
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 83
            echo "          <tr>
            <td class=\"text-left\">";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
            echo "
              ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 86);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 87);
            echo "</td>
            <td class=\"text-right\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 88);
            echo "</td>
            <td class=\"text-right\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
            echo "</td>
            <td class=\"text-right\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 90);
            echo "</td>
            
                        <!-- marketplace -->
                         <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 93
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 93)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 93);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 93);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
                         
                          <a onclick = \"getProductOrderStatus(";
            // line 95
            echo (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["order_id"] ?? null) : null);
            echo ",";
            echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["product_id"] ?? null) : null);
            echo ")\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_order_detail"] ?? null);
            echo "\" class=\"btn btn-primary\">
                            <i class=\"fa fa-truck\"></i></a>
                            <button class=\"hide\" href=\"#orderProductStatusModal\" data-toggle=\"modal\" id=\"statusButton\"></button>

                         </td>
                        
                              
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 105
            echo "          <tr>
            <td class=\"text-left\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 106);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 109);
            echo "</td>
            <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 110);
            echo "</td>
            ";
            // line 111
            if (($context["products"] ?? null)) {
                // line 112
                echo "            <td></td>
            ";
            }
            // line 113
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 120
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 122);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 123);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 132
        if (($context["comment"] ?? null)) {
            // line 133
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 136
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 141
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 146
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 147
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 151
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 152
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 153
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 158
            if (($context["histories"] ?? null)) {
                // line 159
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 160
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 161);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 162);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 163);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "        ";
            } else {
                // line 167
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 168
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 171
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 175
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 176
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 178
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 179
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<!-- marketplace -->
";
        // line 183
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 184
            echo "<div id=\"orderProductStatusModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 class=\"modal-title\">";
            // line 189
            echo ($context["text_tracking"] ?? null);
            echo "</h3>
        </div>
        <div class=\"modal-body\" id=\"orderProductStatusModalBody\">

        </div>
        <div class=\"modal-footer\">
          <button class=\"btn closebtn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"closeButton\">Close</button>
        </div>
      </div>
  </div>
</div>
<script>
  function getProductOrderStatus (order_id,product_id) {
          \$.ajax({
            url: 'index.php?route=account/customerpartner/order_detail&order_id='+order_id+'&product_id='+product_id,
            type: 'get',
            methodType: 'html',
            success: function(html) {
              \$('#orderProductStatusModalBody').html(html);
              \$('#statusButton').click();
            }
          });
  }
</script>
";
        }
        // line 214
        echo "<!-- marketplace -->
                              
";
        // line 216
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__dd158d98c1c453ad7ea1a9959fcc15f1c9b72342b9b9301438ac77c3be930201";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 216,  566 => 214,  538 => 189,  531 => 184,  529 => 183,  522 => 179,  518 => 178,  511 => 176,  508 => 175,  502 => 171,  496 => 168,  493 => 167,  490 => 166,  481 => 163,  477 => 162,  473 => 161,  470 => 160,  465 => 159,  463 => 158,  455 => 153,  451 => 152,  447 => 151,  439 => 147,  436 => 146,  428 => 141,  420 => 136,  415 => 133,  413 => 132,  407 => 128,  400 => 126,  396 => 125,  394 => 124,  390 => 123,  386 => 122,  382 => 120,  378 => 119,  372 => 115,  365 => 113,  361 => 112,  359 => 111,  355 => 110,  351 => 109,  345 => 106,  342 => 105,  337 => 104,  318 => 95,  303 => 93,  297 => 90,  293 => 89,  289 => 88,  285 => 87,  274 => 86,  268 => 85,  264 => 84,  261 => 83,  257 => 82,  251 => 78,  247 => 77,  245 => 76,  241 => 75,  237 => 74,  233 => 73,  229 => 72,  225 => 71,  216 => 64,  210 => 63,  208 => 62,  204 => 61,  198 => 57,  192 => 56,  190 => 55,  186 => 54,  169 => 47,  160 => 45,  154 => 44,  147 => 43,  138 => 42,  130 => 37,  123 => 33,  114 => 29,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dd158d98c1c453ad7ea1a9959fcc15f1c9b72342b9b9301438ac77c3be930201", "");
    }
}
