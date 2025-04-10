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

/* __string_template__0844ff1b44c90fa2e1075dec923c983344ba305fa1613a27728f11ee47a88fbd */
class __TwigTemplate_df8c5ea11bfc7912bb9d8a772886c1f127b22149b73eb52f8ce6980bbcf58c17 extends Template
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
            <td class=\"text-left\" style=\"width: 50%;\">
              ";
        // line 43
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 44
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 45
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo " <br/>
              <b>Tracking Number</b> ";
        // line 46
        echo ($context["tracking_number"] ?? null);
        echo "
            </td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 48
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 50
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
              ";
        // line 63
        echo ($context["logs"] ?? null);
        echo "
            </td>
          </tr>
        </tbody> 
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 71
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 72
        if (($context["shipping_address"] ?? null)) {
            // line 73
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 74
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 78
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 79
        if (($context["shipping_address"] ?? null)) {
            // line 80
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 81
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 88
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 89
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 90
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 91
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 92
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 93
        if (($context["products"] ?? null)) {
            // line 94
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 95
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 100
            echo "          <tr>
            <td class=\"text-left\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
            echo "
              ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 103);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 103);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 104);
            echo "</td>
            <td class=\"text-right\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 105);
            echo "</td>
            <td class=\"text-right\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 106);
            echo "</td>
            <td class=\"text-right\">";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 107);
            echo "</td>
            
                        <!-- marketplace -->
                         <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 110)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 110);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 110);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
                         
                          <a onclick = \"getProductOrderStatus(";
            // line 112
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
        // line 121
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 122
            echo "          <tr>
            <td class=\"text-left\">";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 123);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 126);
            echo "</td>
            <td class=\"text-right\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 127);
            echo "</td>
            ";
            // line 128
            if (($context["products"] ?? null)) {
                // line 129
                echo "            <td></td>
            ";
            }
            // line 130
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 137
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 139);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 140);
            echo "</td>
            ";
            // line 141
            if (($context["products"] ?? null)) {
                // line 142
                echo "            <td></td>
            ";
            }
            // line 143
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 149
        if (($context["comment"] ?? null)) {
            // line 150
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 153
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 158
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 163
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 164
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 168
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 169
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 170
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 175
            if (($context["histories"] ?? null)) {
                // line 176
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 177
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 178);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 179);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 180);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "        ";
            } else {
                // line 184
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 185
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 188
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 192
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 193
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 195
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 196
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<!-- marketplace -->
";
        // line 200
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 201
            echo "<div id=\"orderProductStatusModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 class=\"modal-title\">";
            // line 206
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
        // line 231
        echo "<!-- marketplace -->
                              
";
        // line 233
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0844ff1b44c90fa2e1075dec923c983344ba305fa1613a27728f11ee47a88fbd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 233,  589 => 231,  561 => 206,  554 => 201,  552 => 200,  545 => 196,  541 => 195,  534 => 193,  531 => 192,  525 => 188,  519 => 185,  516 => 184,  513 => 183,  504 => 180,  500 => 179,  496 => 178,  493 => 177,  488 => 176,  486 => 175,  478 => 170,  474 => 169,  470 => 168,  462 => 164,  459 => 163,  451 => 158,  443 => 153,  438 => 150,  436 => 149,  430 => 145,  423 => 143,  419 => 142,  417 => 141,  413 => 140,  409 => 139,  405 => 137,  401 => 136,  395 => 132,  388 => 130,  384 => 129,  382 => 128,  378 => 127,  374 => 126,  368 => 123,  365 => 122,  360 => 121,  341 => 112,  326 => 110,  320 => 107,  316 => 106,  312 => 105,  308 => 104,  297 => 103,  291 => 102,  287 => 101,  284 => 100,  280 => 99,  274 => 95,  270 => 94,  268 => 93,  264 => 92,  260 => 91,  256 => 90,  252 => 89,  248 => 88,  239 => 81,  233 => 80,  231 => 79,  227 => 78,  221 => 74,  215 => 73,  213 => 72,  209 => 71,  198 => 63,  175 => 50,  166 => 48,  161 => 46,  155 => 45,  148 => 44,  139 => 43,  130 => 37,  123 => 33,  114 => 29,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0844ff1b44c90fa2e1075dec923c983344ba305fa1613a27728f11ee47a88fbd", "");
    }
}
