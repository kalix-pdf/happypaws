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

/* __string_template__d5bb13dcfbed10f708dd00ea0ff7a52b84b6b58cc3471ad0a65ec3710c3ac765 */
class __TwigTemplate_fd7109010b1d53f9a58dfdc6671a46011cbeda233e4e7b6d2654dee19feaac6c extends Template
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
            <td class=\"text-left\" style=\"width: 50%\">
              ";
        // line 49
        echo ($context["logs"] ?? null);
        echo "
            </td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 51
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 53
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
        // line 60
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 61
        if (($context["shipping_address"] ?? null)) {
            // line 62
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 63
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 67
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 68
        if (($context["shipping_address"] ?? null)) {
            // line 69
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 70
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 77
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 78
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 79
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 80
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 81
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 82
        if (($context["products"] ?? null)) {
            // line 83
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 84
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 89
            echo "          <tr>
            <td class=\"text-left\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            echo "
              ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 92);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 93);
            echo "</td>
            <td class=\"text-right\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 94);
            echo "</td>
            <td class=\"text-right\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
            echo "</td>
            <td class=\"text-right\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 96);
            echo "</td>
            
                        <!-- marketplace -->
                         <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 99)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 99);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 99);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
                         
                          <a onclick = \"getProductOrderStatus(";
            // line 101
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
        // line 110
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 111
            echo "          <tr>
            <td class=\"text-left\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 112);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 115);
            echo "</td>
            <td class=\"text-right\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 116);
            echo "</td>
            ";
            // line 117
            if (($context["products"] ?? null)) {
                // line 118
                echo "            <td></td>
            ";
            }
            // line 119
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 126
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 128);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 129);
            echo "</td>
            ";
            // line 130
            if (($context["products"] ?? null)) {
                // line 131
                echo "            <td></td>
            ";
            }
            // line 132
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 138
        if (($context["comment"] ?? null)) {
            // line 139
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 142
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 147
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 152
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 153
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 157
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 158
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 159
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 164
            if (($context["histories"] ?? null)) {
                // line 165
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 166
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 167);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 168);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 169);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "        ";
            } else {
                // line 173
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 174
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 177
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 181
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 182
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 184
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 185
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<!-- marketplace -->
";
        // line 189
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 190
            echo "<div id=\"orderProductStatusModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 class=\"modal-title\">";
            // line 195
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
        // line 220
        echo "<!-- marketplace -->
                              
";
        // line 222
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d5bb13dcfbed10f708dd00ea0ff7a52b84b6b58cc3471ad0a65ec3710c3ac765";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 222,  578 => 220,  550 => 195,  543 => 190,  541 => 189,  534 => 185,  530 => 184,  523 => 182,  520 => 181,  514 => 177,  508 => 174,  505 => 173,  502 => 172,  493 => 169,  489 => 168,  485 => 167,  482 => 166,  477 => 165,  475 => 164,  467 => 159,  463 => 158,  459 => 157,  451 => 153,  448 => 152,  440 => 147,  432 => 142,  427 => 139,  425 => 138,  419 => 134,  412 => 132,  408 => 131,  406 => 130,  402 => 129,  398 => 128,  394 => 126,  390 => 125,  384 => 121,  377 => 119,  373 => 118,  371 => 117,  367 => 116,  363 => 115,  357 => 112,  354 => 111,  349 => 110,  330 => 101,  315 => 99,  309 => 96,  305 => 95,  301 => 94,  297 => 93,  286 => 92,  280 => 91,  276 => 90,  273 => 89,  269 => 88,  263 => 84,  259 => 83,  257 => 82,  253 => 81,  249 => 80,  245 => 79,  241 => 78,  237 => 77,  228 => 70,  222 => 69,  220 => 68,  216 => 67,  210 => 63,  204 => 62,  202 => 61,  198 => 60,  181 => 53,  172 => 51,  167 => 49,  161 => 46,  155 => 45,  148 => 44,  139 => 43,  130 => 37,  123 => 33,  114 => 29,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d5bb13dcfbed10f708dd00ea0ff7a52b84b6b58cc3471ad0a65ec3710c3ac765", "");
    }
}
