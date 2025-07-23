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

/* customerpartner/order_info.twig */
class __TwigTemplate_09484ff77e2a8fee6203405381628715031696db7db30d17fe32b8ae520b309c extends Template
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
<style type=\"text/css\">
  .order-info-buttons{
    background-color: #1E91CF;
    padding: 10px;
  }
</style>
";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
     <div class=\"pull-right\">
       <a href=\"";
        // line 13
        echo ($context["label_ship"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_label_ship"] ?? null);
        echo "\">";
        echo ($context["text_label_ship"] ?? null);
        echo "</a>
       <a href=\"";
        // line 14
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_return"] ?? null);
        echo "\">";
        echo ($context["button_return"] ?? null);
        echo "</a>
       <button onclick=\"cancel_order()\" class=\"btn btn-danger cancel-button\" data-toggle=\"tooltip\" title=\"";
        // line 15
        echo ($context["button_cancel"] ?? null);
        echo "\">";
        echo ($context["button_cancel"] ?? null);
        echo "</button>
     </div>
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 28
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" colspan=\"2\">";
        // line 34
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\" style=\"width: 50%;\">";
        // line 39
        if (($context["invoice_no"] ?? null)) {
            // line 40
            echo "                <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br />
                ";
        }
        // line 42
        echo "                <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br />
                <b>";
        // line 43
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 50%;\">";
        // line 44
        if (($context["payment_method"] ?? null)) {
            // line 45
            echo "                <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br />
                ";
        }
        // line 47
        echo "                ";
        if (($context["shipping_method"] ?? null)) {
            // line 48
            echo "                <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
                ";
        }
        // line 49
        echo "</td>
            </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 56
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
              ";
        // line 57
        if (($context["shipping_address"] ?? null)) {
            // line 58
            echo "              <td class=\"text-left\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 60
        echo "            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"left\">";
        // line 64
        echo ($context["payment_address"] ?? null);
        echo "</td>
              ";
        // line 65
        if (($context["shipping_address"] ?? null)) {
            // line 66
            echo "              <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 68
        echo "            </tr>
          </tbody>
        </table>
        <form class=\"form-horizontal\" action=\"";
        // line 71
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" id=\"main-form\">
          ";
        // line 72
        $context["i"] = false;
        // line 73
        echo "          <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-scroll\">
            <thead>
              <tr>
               <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked); checked\" /></td>
                <td class=\"text-center\">";
        // line 78
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 79
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 80
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 81
        echo ($context["column_transaction_status"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 82
        echo ($context["column_seller_order_status"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 83
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 84
        echo ($context["column_total"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 85
        echo ($context["column_tracking_no"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 90
            echo "              <tr>
              <td style=\"text-align: center;\">
                  <input class=\"selection\" type=\"checkbox\" name=\"selected\" value=\"";
            // line 92
            echo (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["product_id"] ?? null) : null);
            echo "\"/>
               </td>
                <!-- file download code added -->
                <td class=\"text-center\">";
            // line 95
            echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null);
            echo "
                  ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["option"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 97
                echo "                  <br />
                  ";
                // line 98
                if (((($__internal_compile_3 = $context["option"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null) != "file")) {
                    // line 99
                    echo "                  &nbsp;<small> - ";
                    echo (($__internal_compile_4 = $context["option"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                    echo ": ";
                    echo (($__internal_compile_5 = $context["option"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null);
                    echo "</small>
                  ";
                } else {
                    // line 101
                    echo "                  &nbsp;<small> - ";
                    echo (($__internal_compile_6 = $context["option"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                    echo ": <a href=\"";
                    echo (($__internal_compile_7 = $context["option"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_8 = $context["option"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["value"] ?? null) : null);
                    echo "</a></small>
                  ";
                }
                // line 103
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                </td>
                <td class=\"text-center\">";
            // line 105
            echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["model"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\">";
            // line 106
            echo (($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["quantity"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\">";
            // line 107
            echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["paid_status"] ?? null) : null);
            echo "</td>
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                // line 109
                echo "                  ";
                if (twig_in_filter((($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["order_product_status"] ?? null) : null), $context["order_status"])) {
                    // line 110
                    echo "                  <td class=\"text-center\">";
                    echo (($__internal_compile_13 = $context["order_status"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
                    echo "</td>
                 ";
                }
                // line 112
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                <td class=\"text-center\">";
            echo (($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["price"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\">";
            // line 114
            echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["total"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\">
                  ";
            // line 116
            if ((($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tracking"] ?? null) : null)) {
                // line 117
                echo "                    ";
                echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["tracking"] ?? null) : null);
                echo "
                  ";
            } else {
                // line 119
                echo "                    <input type=\"text\" class=\"form-control\" name=\"tracking[";
                echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["product_id"] ?? null) : null);
                echo "]\" placeholder=\"";
                echo ($context["column_tracking_no"] ?? null);
                echo "\" />
                  ";
            }
            // line 121
            echo "                  ";
            $context["i"] = true;
            // line 122
            echo "                </td>
                <!-- <td class=\"text-center\"><button id=\"";
            // line 123
            echo (($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["product_id"] ?? null) : null);
            echo "\" class=\"btn btn-danger cancel-button\">Cancel</button></td>           -->
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 127
            echo "              <tr>
                <td class=\"text-center\">";
            // line 128
            echo (($__internal_compile_20 = $context["voucher"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["description"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\"></td>
                <td class=\"text-center\">1</td>
                <td class=\"text-center\">";
            // line 131
            echo (($__internal_compile_21 = $context["voucher"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["amount"] ?? null) : null);
            echo "</td>
                <td class=\"text-center\">";
            // line 132
            echo (($__internal_compile_22 = $context["voucher"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["amount"] ?? null) : null);
            echo "</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            </tbody>
          <tfoot>
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 138
            echo "            <tr>
              <td class=\"text-center\" colspan=\"7\"><b>";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 139);
            echo "</b></td>
              <td class=\"text-center\">";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 140);
            echo "</td>
              <td class=\"text-center\">
                ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 142) == "Total")) {
                // line 143
                echo "                  ";
                if ((array_key_exists("i", $context) && ($context["i"] ?? null))) {
                    echo "<input type=\"submit\" style=\"width:100%\" class=\"btn btn-info\"/>";
                }
                // line 144
                echo "                ";
            }
            // line 145
            echo "              </td>
            </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </tfoot>
          </table>
          </div>
        </form>
        <div class=\"col-xs-12\">
          <div class=\"col-sm-6 text-center\" style=\"margin: 5px 0 5px 0;\"><div id=\"order-status-button\" class=\"order-info-buttons btn-primary\">Order Status</div></div>
          <div class=\"col-sm-6 text-center\" style=\"margin: 5px 0 5px 0;\"><div id=\"order-comment-button\" class=\"order-info-buttons btn-primary\">Add Comment</div></div>
        </div>

        <div class=\"col-xs-12\" style=\"margin-top:20px;\">
          <form>
            <div class=\"form-group\" id=\"change-order-status\">
              <label class=\"col-sm-2 control-label\" for=\"input-order\">";
        // line 160
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"order_status_id\" class=\"form-control\">
                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
            // line 164
            echo "                        <option value=\"";
            echo (($__internal_compile_23 = $context["order_status"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["order_status_id"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_24 = $context["order_status"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                </select>
              </div>
            </div>

            <div class=\"form-group\" id=\"add-order-comment\" style=\"display:none\">
              <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 171
        echo ($context["entry_comment"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"comment\" cols=\"40\" rows=\"8\" class=\"form-control\" id=\"input-comment\"></textarea>
              </div>
            </div>

            <a id=\"button-history\" class=\"btn btn-primary pull-right\" style=\"margin-top:20px;\">";
        // line 177
        echo ($context["button_submit"] ?? null);
        echo "</a>


          </form>
        </div>

        <div class=\"clear\"></div>
        ";
        // line 184
        if (($context["histories"] ?? null)) {
            // line 185
            echo "        <h2>";
            echo ($context["text_history"] ?? null);
            echo "</h2>
        <div class=\"table-responsive\">
          
        <table class=\"table table-bordered table-hover table-scroll\" id=\"history\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 191
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 192
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 193
            echo ($context["column_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 198
                echo "            <tr>
              <td class=\"text-left\">";
                // line 199
                echo (($__internal_compile_25 = $context["history"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["date_added"] ?? null) : null);
                echo "</td>
              <td class=\"text-left\">";
                // line 200
                echo (($__internal_compile_26 = $context["history"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["status"] ?? null) : null);
                echo "</td>
              <td class=\"text-left\">";
                // line 201
                echo (($__internal_compile_27 = $context["history"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["comment"] ?? null) : null);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "          </tbody>
        </table>
        </div>
        ";
        }
        // line 208
        echo "      </div>
    </div>
  </div>
</div>

<script>
  function cancel_order(){
    var order_id = '";
        // line 215
        echo ($context["order_id"] ?? null);
        echo "';
    var order_status_id =  '";
        // line 216
        echo ($context["marketplace_cancel_order_status"] ?? null);
        echo "';
    var comment = '';
    var product_ids = [];
    \$(\".selection:checked\").each(function(){

      product_ids.push(\$(this).val())
    });

    change_order_status(order_id,order_status_id,product_ids,comment);
  }

  function change_order_status(order_id,order_status_id,product_ids,comment){
      \$.ajax({
      url: 'index.php?route=customerpartner/order/history&order_id='+order_id+'&user_token=";
        // line 229
        echo ($context["user_token"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'order_status_id=' +order_status_id+ '&comment=' +comment+'&product_ids='+product_ids,
      beforeSend: function() {
        \$('.alert-success, .alert-warning').remove();
        \$('#history').before('<div class=\"alert alert-warning\"><i class=\"fa fa-refresh fa-spin\"></i> ";
        // line 235
        echo ($context["text_wait"] ?? null);
        echo "</div>');

      },
      complete: function() {
        \$('.alert-warning').remove();
      },
      success: function(json) {
        \$(\".alert-danger\").remove();
        if(json['success']){
          \$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '</div>');

          var d = new Date();
          var strDate = d.getDate() + \"/\" + (d.getMonth()+1) + \"/\" + d.getFullYear();

          \$('#history').append('<tr><td class=\"text-left\">'+strDate+'</td><td class=\"text-left\">'+\$('select[name=\\'order_status_id\\'] option:selected').text()+'</td><td class=\"text-left\">'+\$('textarea[name=\\'comment\\']').val()+'</td></tr>');
          \$('textarea[name=\\'comment\\']').val('');
          location.reload();
        }else{
           \$('.breadcrumb').before('<div class=\"alert alert-danger\" id=\"order_status_error\" ><i class=\"fa fa-exclamation-circle\"></i>'+json['error']+'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
           \$('html, body').animate({ scrollTop: 0 }, 'slow');
        }
      }
    });

  }
</script>

<script>

  \$('#order-status-button').click(function(){
    \$('#add-order-comment').hide();
    \$('#change-order-status').show();
  });

  \$('#order-comment-button').click(function(){
    \$('#change-order-status').hide();
    \$('#add-order-comment').show();
  });

</script>

<script>
\$('#button-history').on('click', function() {

    var order_id = ";
        // line 279
        echo ($context["order_id"] ?? null);
        echo ";
    var order_status_id =  encodeURIComponent(\$('select[name=\\'order_status_id\\']').val());
    var comment = encodeURIComponent(\$('textarea[name=\\'comment\\']').val());
    var product_ids = [];
    \$(\".selection:checked\").each(function(){

      product_ids.push(\$(this).val())
    });

    change_order_status(order_id,order_status_id,product_ids,comment);
});
</script>
";
        // line 291
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 291,  653 => 279,  606 => 235,  597 => 229,  581 => 216,  577 => 215,  568 => 208,  562 => 204,  553 => 201,  549 => 200,  545 => 199,  542 => 198,  538 => 197,  531 => 193,  527 => 192,  523 => 191,  513 => 185,  511 => 184,  501 => 177,  492 => 171,  485 => 166,  474 => 164,  470 => 163,  464 => 160,  450 => 148,  442 => 145,  439 => 144,  434 => 143,  432 => 142,  427 => 140,  423 => 139,  420 => 138,  416 => 137,  412 => 135,  403 => 132,  399 => 131,  393 => 128,  390 => 127,  385 => 126,  376 => 123,  373 => 122,  370 => 121,  362 => 119,  356 => 117,  354 => 116,  349 => 114,  344 => 113,  338 => 112,  332 => 110,  329 => 109,  325 => 108,  321 => 107,  317 => 106,  313 => 105,  310 => 104,  304 => 103,  294 => 101,  286 => 99,  284 => 98,  281 => 97,  277 => 96,  273 => 95,  267 => 92,  263 => 90,  259 => 89,  252 => 85,  248 => 84,  244 => 83,  240 => 82,  236 => 81,  232 => 80,  228 => 79,  224 => 78,  217 => 73,  215 => 72,  211 => 71,  206 => 68,  200 => 66,  198 => 65,  194 => 64,  188 => 60,  182 => 58,  180 => 57,  176 => 56,  167 => 49,  159 => 48,  156 => 47,  148 => 45,  146 => 44,  140 => 43,  133 => 42,  125 => 40,  123 => 39,  115 => 34,  106 => 28,  98 => 22,  87 => 20,  83 => 19,  78 => 17,  71 => 15,  63 => 14,  55 => 13,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/order_info.twig", "");
    }
}
