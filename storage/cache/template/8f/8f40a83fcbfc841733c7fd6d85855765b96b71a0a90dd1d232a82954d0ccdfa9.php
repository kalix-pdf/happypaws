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

/* __string_template__33e5b68e73987b52082b824feed3bdae5d71ec08d11ca671f33d6d74680c59a5 */
class __TwigTemplate_2c82f1d0c81468744655b2218dfdd5d6696803827204247c46f40003b24d4022 extends Template
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
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 57
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 58
        if (($context["shipping_address"] ?? null)) {
            // line 59
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 60
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 64
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 65
        if (($context["shipping_address"] ?? null)) {
            // line 66
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 67
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 74
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 75
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 76
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 77
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 78
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 81
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            echo "          <tr>
            <td class=\"text-left\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
            echo "
              ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 89);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 90);
            echo "</td>
            <td class=\"text-right\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 91);
            echo "</td>
            <td class=\"text-right\">";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
            echo "</td>
            <td class=\"text-right\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 93);
            echo "</td>
            
                        <!-- marketplace -->
                         <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 96)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 96);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 96);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
                         
                          <a onclick = \"getProductOrderStatus(";
            // line 98
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
        // line 107
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 108
            echo "          <tr>
            <td class=\"text-left\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 109);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 112);
            echo "</td>
            <td class=\"text-right\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 113);
            echo "</td>
            ";
            // line 114
            if (($context["products"] ?? null)) {
                // line 115
                echo "            <td></td>
            ";
            }
            // line 116
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 123
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 125);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 126);
            echo "</td>
            ";
            // line 127
            if (($context["products"] ?? null)) {
                // line 128
                echo "            <td></td>
            ";
            }
            // line 129
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 135
        if (($context["comment"] ?? null)) {
            // line 136
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 139
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 144
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 149
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 150
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 154
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 155
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 156
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 161
            if (($context["histories"] ?? null)) {
                // line 162
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 163
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 164);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 165);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 166);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "        ";
            } else {
                // line 170
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 171
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 174
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 178
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 179
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 181
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 182
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<!-- marketplace -->
";
        // line 186
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 187
            echo "<div id=\"orderProductStatusModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 class=\"modal-title\">";
            // line 192
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
        // line 217
        echo "<!-- marketplace -->
                              
";
        // line 219
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__33e5b68e73987b52082b824feed3bdae5d71ec08d11ca671f33d6d74680c59a5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 219,  572 => 217,  544 => 192,  537 => 187,  535 => 186,  528 => 182,  524 => 181,  517 => 179,  514 => 178,  508 => 174,  502 => 171,  499 => 170,  496 => 169,  487 => 166,  483 => 165,  479 => 164,  476 => 163,  471 => 162,  469 => 161,  461 => 156,  457 => 155,  453 => 154,  445 => 150,  442 => 149,  434 => 144,  426 => 139,  421 => 136,  419 => 135,  413 => 131,  406 => 129,  402 => 128,  400 => 127,  396 => 126,  392 => 125,  388 => 123,  384 => 122,  378 => 118,  371 => 116,  367 => 115,  365 => 114,  361 => 113,  357 => 112,  351 => 109,  348 => 108,  343 => 107,  324 => 98,  309 => 96,  303 => 93,  299 => 92,  295 => 91,  291 => 90,  280 => 89,  274 => 88,  270 => 87,  267 => 86,  263 => 85,  257 => 81,  253 => 80,  251 => 79,  247 => 78,  243 => 77,  239 => 76,  235 => 75,  231 => 74,  222 => 67,  216 => 66,  214 => 65,  210 => 64,  204 => 60,  198 => 59,  196 => 58,  192 => 57,  175 => 50,  166 => 48,  161 => 46,  155 => 45,  148 => 44,  139 => 43,  130 => 37,  123 => 33,  114 => 29,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__33e5b68e73987b52082b824feed3bdae5d71ec08d11ca671f33d6d74680c59a5", "");
    }
}
