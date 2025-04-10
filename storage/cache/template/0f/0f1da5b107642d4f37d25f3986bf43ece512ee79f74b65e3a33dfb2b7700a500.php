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

/* __string_template__ee4237a96168c31b2bf5157563bbf0a34715a4f74088367919df81f0a84bd597 */
class __TwigTemplate_9686628aeb12c122003887e303bed260510e8dc326ed7e61246718ab65f770e0 extends Template
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
        echo ($context["separate_column_left"] ?? null);
        echo "
";
        // line 2
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 3
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 5
            echo "  <div class=\"container\">
";
        }
        // line 7
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "    <li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 15
        echo "  ";
        if (($context["warning"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["warning"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"row\" id=\"main-content\">";
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
        echo "  ";
        if (($context["chkIsPartner"] ?? null)) {
            // line 27
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">
    ";
            // line 28
            echo ($context["content_top"] ?? null);
            echo "
    <h1>
      ";
            // line 30
            echo ($context["heading_title"] ?? null);
            echo "
      <div class=\"pull-right\">
        <a href=\"";
            // line 32
            echo ($context["continue"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_back"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        <a href=\"";
            // line 33
            echo ($context["order_invoice"] ?? null);
            echo "\" data-toggle=\"tooltip\" class=\"btn btn-primary\" target=\"_blank\" title=\"";
            echo ($context["button_invoice"] ?? null);
            echo "\"><i class=\"fa fa-print\"></i></a>
        <a href=\"";
            // line 34
            echo ($context["shipping_note"] ?? null);
            echo "\" data-toggle=\"tooltip\" class=\"btn btn-primary\" target=\"_blank\" title=\"";
            echo ($context["button_dispatch"] ?? null);
            echo "\"><i class=\"fa fa-truck\"></i></a>

        ";
            // line 36
            if (($context["marketplace_cancel_order_status"] ?? null)) {
                // line 37
                echo "          <button onclick=\"cancel_order()\" class=\"btn btn-danger cancel-button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cancel"] ?? null);
                echo "\">Cancel</button>
        ";
            }
            // line 39
            echo "         ";
            if ((array_key_exists("seller_shipping", $context) && ($context["seller_shipping"] ?? null))) {
                echo " 
        <a href = \"";
                // line 40
                echo ($context["custom_shipping_label"] ?? null);
                echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_label"] ?? null);
                echo "\" target=\"_blank\">";
                echo ($context["button_label"] ?? null);
                echo "</a>
        ";
            }
            // line 42
            echo "      </div>
    </h1>

    <fieldset>
      <legend><i class=\"fa fa-list\"></i> ";
            // line 46
            echo ($context["heading_title"] ?? null);
            echo "</legend>
      ";
            // line 47
            if ((($context["column_seller_order_status"] ?? null) == "Pending")) {
                // line 48
                echo "      <a href=\"\" class=\"btn btn-danger pull-right\">Decline</a>
      <a href=\"index.php?route=extension/flashexpress_api/sendOrderToFlashExpress&order_id=";
                // line 49
                echo ($context["order_id"] ?? null);
                echo "\" class=\"btn btn-primary pull-right m-3\">Accept</a>
      ";
            }
            // line 51
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 52
                echo "        <h2 class=\"text-center\">";
                echo (($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                echo "</h2>           
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
      ";
            // line 55
            if (( !($context["errorPage"] ?? null) && ($context["isMember"] ?? null))) {
                // line 56
                echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" colspan=\"2\">";
                // line 59
                echo ($context["text_order_detail"] ?? null);
                echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\" style=\"width: 50%;\">";
                // line 64
                if (($context["invoice_no"] ?? null)) {
                    // line 65
                    echo "                <b>";
                    echo ($context["text_invoice_no"] ?? null);
                    echo "</b> ";
                    echo ($context["invoice_no"] ?? null);
                    echo "<br />
                ";
                }
                // line 67
                echo "                <b>";
                echo ($context["text_order_id"] ?? null);
                echo "</b> #";
                echo ($context["order_id"] ?? null);
                echo "<br />
                <b>";
                // line 68
                echo ($context["text_date_added"] ?? null);
                echo "</b> ";
                echo ($context["date_added"] ?? null);
                echo "</td>
              <td class=\"text-left\" style=\"width: 50%;\">";
                // line 69
                if (($context["payment_method"] ?? null)) {
                    // line 70
                    echo "                <b>";
                    echo ($context["text_payment_method"] ?? null);
                    echo "</b> ";
                    echo ($context["payment_method"] ?? null);
                    echo "<br />
                ";
                }
                // line 72
                echo "                ";
                if (($context["shipping_method"] ?? null)) {
                    // line 73
                    echo "                <b>";
                    echo ($context["text_shipping_method"] ?? null);
                    echo "</b> ";
                    echo ($context["shipping_method"] ?? null);
                    echo "
                ";
                }
                // line 74
                echo "</td>
            </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
                // line 81
                echo ($context["text_payment_address"] ?? null);
                echo "</td>
              ";
                // line 82
                if (($context["shipping_address"] ?? null)) {
                    // line 83
                    echo "              <td class=\"text-left\">";
                    echo ($context["text_shipping_address"] ?? null);
                    echo "</td>
              ";
                }
                // line 85
                echo "            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"left\">";
                // line 89
                echo ($context["payment_address"] ?? null);
                echo "</td>
              ";
                // line 90
                if (($context["shipping_address"] ?? null)) {
                    // line 91
                    echo "              <td class=\"text-left\">";
                    echo ($context["shipping_address"] ?? null);
                    echo "</td>
              ";
                }
                // line 93
                echo "            </tr>
          </tbody>
        </table>

        <form class=\"form-horizontal\" action=\"";
                // line 97
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" id=\"main-form\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
               <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked); checked\" /></td>
                <td class=\"text-left\">";
                // line 102
                echo ($context["column_name"] ?? null);
                echo "</td>
                <td class=\"text-left\">";
                // line 103
                echo ($context["column_model"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 104
                echo ($context["column_quantity"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 105
                echo ($context["column_transaction_status"] ?? null);
                echo "</td>
                <td class=\"text-center\">";
                // line 106
                echo ($context["column_seller_order_status"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 107
                echo ($context["column_price"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 108
                echo ($context["column_total"] ?? null);
                echo "</td>
                ";
                // line 110
                echo "              </tr>
            </thead>
            <tbody>
              ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 114
                    echo "              <tr>
             ";
                    // line 115
                    if ((((($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_product_status"] ?? null) : null) == ($context["marketplace_cancel_order_status"] ?? null)) || (array_key_exists("marketplace_complete_order_status", $context) && ((($__internal_compile_4 = $context["product"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["order_product_status"] ?? null) : null) == ($context["marketplace_complete_order_status"] ?? null))))) {
                        // line 116
                        echo "                <td></td>
              ";
                    } else {
                        // line 118
                        echo "                <td style=\"text-align: center;\">
                  <input data-status-id=\"";
                        // line 119
                        echo (($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_product_status"] ?? null) : null);
                        echo "\" class=\"selection\" type=\"checkbox\" name=\"selected\" value=\"";
                        echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["product_id"] ?? null) : null);
                        echo "\"/>
                </td>
              ";
                    }
                    // line 122
                    echo "                <!-- file download code added -->
                <td class=\"text-left\">";
                    // line 123
                    echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                    echo "
                  ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 125
                        echo "                  <br />
                  ";
                        // line 126
                        if (((($__internal_compile_9 = $context["option"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null) != "file")) {
                            // line 127
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_10 = $context["option"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                            echo ": ";
                            echo (($__internal_compile_11 = $context["option"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["value"] ?? null) : null);
                            echo "</small>
                  ";
                        } else {
                            // line 129
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_12 = $context["option"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["name"] ?? null) : null);
                            echo ": <a href=\"";
                            echo (($__internal_compile_13 = $context["option"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["href"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_14 = $context["option"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["value"] ?? null) : null);
                            echo "</a></small>
                  ";
                        }
                        // line 131
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "                </td>
                <td class=\"text-left\">";
                    // line 133
                    echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["model"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 134
                    echo (($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["quantity"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 135
                    echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["paid_status"] ?? null) : null);
                    echo "</td>
                 ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                        // line 137
                        echo "                 ";
                        if (twig_in_filter((($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["order_product_status"] ?? null) : null), $context["order_status"])) {
                            // line 138
                            echo "                  <td class=\"text-center\">";
                            echo (($__internal_compile_19 = $context["order_status"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["name"] ?? null) : null);
                            echo "</td>
                 ";
                        }
                        // line 140
                        echo "                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                <td class=\"text-right\">";
                    echo (($__internal_compile_20 = $context["product"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["price"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 142
                    echo (($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["total"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">
                  ";
                    // line 144
                    if ((($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["tracking"] ?? null) : null)) {
                        // line 145
                        echo "                    ";
                        echo (($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["tracking"] ?? null) : null);
                        echo "
                  ";
                    } else {
                        // line 147
                        echo "                    ";
                        // line 148
                        echo "                    <!-- <button type=\"submit\" class=\"btn btn-primary pull-right\" style=\"margin-top:3px;\">";
                        echo ($context["button_submit"] ?? null);
                        echo "</button> -->
                  ";
                        // line 149
                        $context["i"] = twig_constant("true");
                        echo " ";
                    }
                    // line 150
                    echo "                </td>
                <!-- <td class=\"text-center\"><button id=\"";
                    // line 151
                    echo (($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["product_id"] ?? null) : null);
                    echo "\" class=\"btn btn-danger cancel-button\">Cancel</button></td>           -->
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 155
                    echo "              <tr>
                <td class=\"text-left\">";
                    // line 156
                    echo (($__internal_compile_25 = $context["voucher"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["description"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
                    // line 159
                    echo (($__internal_compile_26 = $context["voucher"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["amount"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 160
                    echo (($__internal_compile_27 = $context["voucher"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["amount"] ?? null) : null);
                    echo "</td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "            </tbody>
          <tfoot>
              ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 166
                    echo "                <tr>
                  <td class=\"text-right\" colspan=\"7\"><b>";
                    // line 167
                    echo (($__internal_compile_28 = $context["total"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["title"] ?? null) : null);
                    echo "</b></td>
                  <td class=\"text-right\">";
                    // line 168
                    echo (($__internal_compile_29 = $context["total"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["text"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-right\">
                    ";
                    // line 170
                    if (((($__internal_compile_30 = $context["total"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["title"] ?? null) : null) == "Total")) {
                        // line 171
                        echo "                      ";
                        if ((($__internal_compile_31 = ($context["product"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["tracking"] ?? null) : null)) {
                            // line 172
                            echo "                      ";
                        } else {
                            // line 173
                            echo "                      ";
                            // line 174
                            echo "                      ";
                        }
                        // line 175
                        echo "                    ";
                    }
                    // line 176
                    echo "                  </td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "            </tfoot>
          </table>
        </form>
        ";
                // line 182
                if (($context["wksellerorderstatus"] ?? null)) {
                    // line 183
                    echo "        <div class=\"col-xs-12\">
          <div class=\"col-sm-6 text-center\"><div id=\"order-status-button\" class=\"order-info-buttons btn-primary\">";
                    // line 184
                    echo ($context["column_seller_order_status"] ?? null);
                    echo "</div></div>
          <div class=\"col-sm-6 text-center\"><div id=\"order-comment-button\" class=\"order-info-buttons btn-primary\">";
                    // line 185
                    echo ($context["text_comment"] ?? null);
                    echo "</div></div>
        </div>

        <div class=\"col-xs-12\" style=\"margin-top:20px;\">
            
          <form>
            <div class=\"form-group\" id=\"change-order-status\">
              <label class=\"col-sm-2 control-label\" for=\"input-order\">";
                    // line 192
                    echo ($context["entry_order_status"] ?? null);
                    echo "</label>
              <div class=\"col-sm-10\">
                <select id=\"order_status_id\" name=\"order_status_id\" class=\"form-control\">
                  ";
                    // line 195
                    if (($context["wksellerorderstatus"] ?? null)) {
                        // line 196
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
                        foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                            // line 197
                            echo "                        ";
                            if (((($__internal_compile_32 = $context["order_status"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["order_status_id"] ?? null) : null) == ($context["order_status_id"] ?? null))) {
                                // line 198
                                echo "                          <option value=\"";
                                echo (($__internal_compile_33 = $context["order_status"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["order_status_id"] ?? null) : null);
                                echo "\" selected=\"selected\">";
                                echo (($__internal_compile_34 = $context["order_status"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null);
                                echo "</option>
                        ";
                            } else {
                                // line 200
                                echo "                          <option value=\"";
                                echo (($__internal_compile_35 = $context["order_status"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["order_status_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_36 = $context["order_status"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["name"] ?? null) : null);
                                echo "</option>
                        ";
                            }
                            // line 202
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 204
                        echo "                  ";
                    }
                    // line 205
                    echo "                </select>
              </div>
            </div>

            <div class=\"form-group\" id=\"add-order-comment\" style=\"display:none\">
            ";
                    // line 210
                    if ((array_key_exists("marketplace_available_order_status", $context) && ($context["marketplace_available_order_status"] ?? null))) {
                        // line 211
                        echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                        echo ($context["history_info"] ?? null);
                        echo "</div>
          ";
                    } else {
                        // line 213
                        echo "            <div class=\"alert alert-danger\" id=\"\"><i class=\"fa fa-exclamation-circle\"></i> ";
                        echo ($context["order_status_info"] ?? null);
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" >&times;</button></div>
          ";
                    }
                    // line 215
                    echo "              <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
                    echo ($context["entry_comment"] ?? null);
                    echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"comment\" cols=\"40\" rows=\"8\" class=\"form-control\" id=\"input-comment\"></textarea>
              </div>
            </div>
              <a id=\"button-history\" class=\"btn btn-primary pull-right\" style=\"margin-top:20px;\">";
                    // line 220
                    echo ($context["button_submit"] ?? null);
                    echo "</a>
          </form>
        </div>
        ";
                }
                // line 224
                echo "
        <div class=\"clear\"></div>

        ";
                // line 227
                if (($context["histories"] ?? null)) {
                    // line 228
                    echo "        <h2>";
                    echo ($context["text_history"] ?? null);
                    echo "</h2>
        <table class=\"table table-bordered table-hover\" id=\"history\">
          <thead>
            <tr>
              <td class=\"text-left\">";
                    // line 232
                    echo ($context["column_date_added"] ?? null);
                    echo "</td>
              <td class=\"text-left\">";
                    // line 233
                    echo ($context["column_status"] ?? null);
                    echo "</td>
              <td class=\"text-left\">";
                    // line 234
                    echo ($context["column_comment"] ?? null);
                    echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
                    // line 238
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                        // line 239
                        echo "            <tr>
              <td class=\"text-left\">";
                        // line 240
                        echo (($__internal_compile_37 = $context["history"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["date_added"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 241
                        echo (($__internal_compile_38 = $context["history"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["status"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 242
                        echo (($__internal_compile_39 = $context["history"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["comment"] ?? null) : null);
                        echo "</td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "          </tbody>
        </table>
        ";
                }
                // line 248
                echo "        ";
            } else {
                // line 249
                echo "        <div>
          ";
                // line 250
                echo ($context["error_page_order"] ?? null);
                echo "
        </div>
        ";
            }
            // line 253
            echo "
    </fieldset>
      ";
            // line 255
            echo ($context["content_bottom"] ?? null);
            echo "
    </div>
    ";
        } else {
            // line 258
            echo " ";
            echo ($context["text_become_seller"] ?? null);
            echo "
 ";
        }
        // line 260
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script>
var order_status_sequence = [];
";
        // line 266
        if ((array_key_exists("marketplace_order_status_sequence", $context) && ($context["marketplace_order_status_sequence"] ?? null))) {
            // line 267
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["sequence"]) {
                // line 268
                echo "    order_status_sequence.push(";
                echo (($__internal_compile_40 = $context["sequence"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["order_status_id"] ?? null) : null);
                echo ");
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 271
        echo "
  \$(':checkbox').change(function(){
    var status_ids = [];
    var index_array = [];

    \$(\".selection:checked\").each(function(){
      status_ids.push(\$(this).attr('data-status-id'));
    });

    if (status_ids.length > 0) {
      \$(\"#order_status_id\").children('option').remove();
      \$.each(order_status_sequence,function(index,value){
        \$.each(status_ids,function(i,v){
           if (value == v) {
              index_array.push(index);
           }
        });
      });

      max_change_status_id = Math.max.apply(null, index_array);
      changeOrderStatusSequence(max_change_status_id);
    }
  });

function changeOrderStatusSequence (max_change_status_id){
    var final_order_sequence = [];
    \$.each(order_status_sequence,function(index,value){
      if (index >= max_change_status_id) {
          final_order_sequence.push(value);
      }
    });

    \$.each(final_order_sequence,function(index,value){
      ";
        // line 304
        if ((array_key_exists("marketplace_order_status_sequence", $context) && ($context["marketplace_order_status_sequence"] ?? null))) {
            // line 305
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 306
                echo "          if (";
                echo (($__internal_compile_41 = $context["value"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["order_status_id"] ?? null) : null);
                echo " == value) {
             \$(\"#order_status_id\").append('<option value=\"";
                // line 307
                echo (($__internal_compile_42 = $context["value"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_43 = $context["value"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["name"] ?? null) : null);
                echo "</option>');
          }
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            echo "      ";
        }
        // line 311
        echo "    });
}
</script>

<script>
";
        // line 316
        if (($context["marketplace_cancel_order_status"] ?? null)) {
            // line 317
            echo "  function cancel_order(){
    var order_id = ";
            // line 318
            echo ($context["order_id"] ?? null);
            echo ";
    var order_status_id =  ";
            // line 319
            echo ($context["marketplace_cancel_order_status"] ?? null);
            echo ";
    var comment = '';
    var product_ids = [];
    \$(\".selection:checked\").each(function(){

      product_ids.push(\$(this).val())
    });

    change_order_status(order_id,order_status_id,product_ids,comment);
  }
 ";
        }
        // line 330
        echo "
  function change_order_status(order_id,order_status_id,product_ids,comment){
      \$.ajax({
      url: 'index.php?route=account/customerpartner/orderinfo/history&order_id='+order_id+'',
      type: 'post',
      dataType: 'json',
      data: 'order_status_id=' +order_status_id+ '&comment=' +comment+'&product_ids='+product_ids,
      beforeSend: function() {
        \$('.alert-success, .alert-warning').remove();
        \$('#history').before('<div class=\"alert alert-warning\"><i class=\"fa fa-refresh fa-spin\"></i> ";
        // line 339
        echo ($context["text_wait"] ?? null);
        echo "</div>');

      },
      complete: function() {
        \$('.alert-warning').remove();
      },
      success: function(json) {
        \$('.alert-danger').remove();
        if(json['success']){
          \$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '</div>');

          var d = new Date();
          var strDate = d.getDate() + \"/\" + (d.getMonth()+1) + \"/\" + d.getFullYear();

          \$('#history').append('<tr><td class=\"text-left\">'+strDate+'</td><td class=\"text-left\">'+\$('select[name=\\'order_status_id\\'] option:selected').text()+'</td><td class=\"text-left\">'+\$('textarea[name=\\'comment\\']').val()+'</td></tr>');
          \$('textarea[name=\\'comment\\']').val('');
          location.reload();
        }else{
           \$('#main-content').before('<div class=\"alert alert-danger\" id=\"order_status_error\" ><i class=\"fa fa-exclamation-circle\"></i>'+json['error']+'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
        // line 378
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
<style type=\"text/css\">
  .order-info-buttons{
    background-color: blue;
    padding: 10px;
  }
</style>
";
        // line 395
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__ee4237a96168c31b2bf5157563bbf0a34715a4f74088367919df81f0a84bd597";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  947 => 395,  927 => 378,  885 => 339,  874 => 330,  860 => 319,  856 => 318,  853 => 317,  851 => 316,  844 => 311,  841 => 310,  830 => 307,  825 => 306,  820 => 305,  818 => 304,  783 => 271,  773 => 268,  768 => 267,  766 => 266,  756 => 260,  750 => 258,  744 => 255,  740 => 253,  734 => 250,  731 => 249,  728 => 248,  723 => 245,  714 => 242,  710 => 241,  706 => 240,  703 => 239,  699 => 238,  692 => 234,  688 => 233,  684 => 232,  676 => 228,  674 => 227,  669 => 224,  662 => 220,  653 => 215,  647 => 213,  641 => 211,  639 => 210,  632 => 205,  629 => 204,  622 => 202,  614 => 200,  606 => 198,  603 => 197,  598 => 196,  596 => 195,  590 => 192,  580 => 185,  576 => 184,  573 => 183,  571 => 182,  566 => 179,  558 => 176,  555 => 175,  552 => 174,  550 => 173,  547 => 172,  544 => 171,  542 => 170,  537 => 168,  533 => 167,  530 => 166,  526 => 165,  522 => 163,  513 => 160,  509 => 159,  503 => 156,  500 => 155,  495 => 154,  486 => 151,  483 => 150,  479 => 149,  474 => 148,  472 => 147,  466 => 145,  464 => 144,  459 => 142,  454 => 141,  448 => 140,  442 => 138,  439 => 137,  435 => 136,  431 => 135,  427 => 134,  423 => 133,  420 => 132,  414 => 131,  404 => 129,  396 => 127,  394 => 126,  391 => 125,  387 => 124,  383 => 123,  380 => 122,  372 => 119,  369 => 118,  365 => 116,  363 => 115,  360 => 114,  356 => 113,  351 => 110,  347 => 108,  343 => 107,  339 => 106,  335 => 105,  331 => 104,  327 => 103,  323 => 102,  315 => 97,  309 => 93,  303 => 91,  301 => 90,  297 => 89,  291 => 85,  285 => 83,  283 => 82,  279 => 81,  270 => 74,  262 => 73,  259 => 72,  251 => 70,  249 => 69,  243 => 68,  236 => 67,  228 => 65,  226 => 64,  218 => 59,  213 => 56,  211 => 55,  208 => 54,  199 => 52,  194 => 51,  189 => 49,  186 => 48,  184 => 47,  180 => 46,  174 => 42,  165 => 40,  160 => 39,  154 => 37,  152 => 36,  145 => 34,  139 => 33,  133 => 32,  128 => 30,  123 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 18,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ee4237a96168c31b2bf5157563bbf0a34715a4f74088367919df81f0a84bd597", "");
    }
}
