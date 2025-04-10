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

/* __string_template__6d52f907da49051f2de21ae7860ae0140d074e0ea30e0f435a20124daa0ac25f */
class __TwigTemplate_1b816e527339645c0c7b55e23d85976e9daf8d94eeccb9317b0ae865f3ae4c9f extends Template
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
            if (twig_in_filter((($__internal_compile_2 = ($context["product"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order_product_status"] ?? null) : null), ($context["order_status"] ?? null))) {
                // line 52
                echo "                  <h2 class=\"text-center\">";
                echo (($__internal_compile_3 = ($context["order_status"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null);
                echo "</h2>
                 ";
            }
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
                    if ((((($__internal_compile_4 = $context["product"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["order_product_status"] ?? null) : null) == ($context["marketplace_cancel_order_status"] ?? null)) || (array_key_exists("marketplace_complete_order_status", $context) && ((($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_product_status"] ?? null) : null) == ($context["marketplace_complete_order_status"] ?? null))))) {
                        // line 116
                        echo "                <td></td>
              ";
                    } else {
                        // line 118
                        echo "                <td style=\"text-align: center;\">
                  <input data-status-id=\"";
                        // line 119
                        echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["order_product_status"] ?? null) : null);
                        echo "\" class=\"selection\" type=\"checkbox\" name=\"selected\" value=\"";
                        echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["product_id"] ?? null) : null);
                        echo "\"/>
                </td>
              ";
                    }
                    // line 122
                    echo "                <!-- file download code added -->
                <td class=\"text-left\">";
                    // line 123
                    echo (($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null);
                    echo "
                  ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 125
                        echo "                  <br />
                  ";
                        // line 126
                        if (((($__internal_compile_10 = $context["option"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) != "file")) {
                            // line 127
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_11 = $context["option"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null);
                            echo ": ";
                            echo (($__internal_compile_12 = $context["option"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["value"] ?? null) : null);
                            echo "</small>
                  ";
                        } else {
                            // line 129
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_13 = $context["option"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
                            echo ": <a href=\"";
                            echo (($__internal_compile_14 = $context["option"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["href"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_15 = $context["option"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["value"] ?? null) : null);
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
                    echo (($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["model"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 134
                    echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["quantity"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 135
                    echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["paid_status"] ?? null) : null);
                    echo "</td>
                 ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                        // line 137
                        echo "                 ";
                        if (twig_in_filter((($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["order_product_status"] ?? null) : null), $context["order_status"])) {
                            // line 138
                            echo "                  <td class=\"text-center\">";
                            echo (($__internal_compile_20 = $context["order_status"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["name"] ?? null) : null);
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
                    echo (($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["price"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 142
                    echo (($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["total"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">
                  ";
                    // line 144
                    if ((($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["tracking"] ?? null) : null)) {
                        // line 145
                        echo "                    ";
                        echo (($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["tracking"] ?? null) : null);
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
                    echo (($__internal_compile_25 = $context["product"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["product_id"] ?? null) : null);
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
                    echo (($__internal_compile_26 = $context["voucher"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["description"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
                    // line 159
                    echo (($__internal_compile_27 = $context["voucher"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["amount"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 160
                    echo (($__internal_compile_28 = $context["voucher"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["amount"] ?? null) : null);
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
                    echo (($__internal_compile_29 = $context["total"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["title"] ?? null) : null);
                    echo "</b></td>
                  <td class=\"text-right\">";
                    // line 168
                    echo (($__internal_compile_30 = $context["total"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["text"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-right\">
                    ";
                    // line 170
                    if (((($__internal_compile_31 = $context["total"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["title"] ?? null) : null) == "Total")) {
                        // line 171
                        echo "                      ";
                        if ((($__internal_compile_32 = ($context["product"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["tracking"] ?? null) : null)) {
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
                            if (((($__internal_compile_33 = $context["order_status"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["order_status_id"] ?? null) : null) == ($context["order_status_id"] ?? null))) {
                                // line 198
                                echo "                          <option value=\"";
                                echo (($__internal_compile_34 = $context["order_status"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["order_status_id"] ?? null) : null);
                                echo "\" selected=\"selected\">";
                                echo (($__internal_compile_35 = $context["order_status"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["name"] ?? null) : null);
                                echo "</option>
                        ";
                            } else {
                                // line 200
                                echo "                          <option value=\"";
                                echo (($__internal_compile_36 = $context["order_status"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["order_status_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_37 = $context["order_status"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["name"] ?? null) : null);
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
                        echo (($__internal_compile_38 = $context["history"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["date_added"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 241
                        echo (($__internal_compile_39 = $context["history"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["status"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 242
                        echo (($__internal_compile_40 = $context["history"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["comment"] ?? null) : null);
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
                echo (($__internal_compile_41 = $context["sequence"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["order_status_id"] ?? null) : null);
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
                echo (($__internal_compile_42 = $context["value"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["order_status_id"] ?? null) : null);
                echo " == value) {
             \$(\"#order_status_id\").append('<option value=\"";
                // line 307
                echo (($__internal_compile_43 = $context["value"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_44 = $context["value"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null);
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
        return "__string_template__6d52f907da49051f2de21ae7860ae0140d074e0ea30e0f435a20124daa0ac25f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 395,  922 => 378,  880 => 339,  869 => 330,  855 => 319,  851 => 318,  848 => 317,  846 => 316,  839 => 311,  836 => 310,  825 => 307,  820 => 306,  815 => 305,  813 => 304,  778 => 271,  768 => 268,  763 => 267,  761 => 266,  751 => 260,  745 => 258,  739 => 255,  735 => 253,  729 => 250,  726 => 249,  723 => 248,  718 => 245,  709 => 242,  705 => 241,  701 => 240,  698 => 239,  694 => 238,  687 => 234,  683 => 233,  679 => 232,  671 => 228,  669 => 227,  664 => 224,  657 => 220,  648 => 215,  642 => 213,  636 => 211,  634 => 210,  627 => 205,  624 => 204,  617 => 202,  609 => 200,  601 => 198,  598 => 197,  593 => 196,  591 => 195,  585 => 192,  575 => 185,  571 => 184,  568 => 183,  566 => 182,  561 => 179,  553 => 176,  550 => 175,  547 => 174,  545 => 173,  542 => 172,  539 => 171,  537 => 170,  532 => 168,  528 => 167,  525 => 166,  521 => 165,  517 => 163,  508 => 160,  504 => 159,  498 => 156,  495 => 155,  490 => 154,  481 => 151,  478 => 150,  474 => 149,  469 => 148,  467 => 147,  461 => 145,  459 => 144,  454 => 142,  449 => 141,  443 => 140,  437 => 138,  434 => 137,  430 => 136,  426 => 135,  422 => 134,  418 => 133,  415 => 132,  409 => 131,  399 => 129,  391 => 127,  389 => 126,  386 => 125,  382 => 124,  378 => 123,  375 => 122,  367 => 119,  364 => 118,  360 => 116,  358 => 115,  355 => 114,  351 => 113,  346 => 110,  342 => 108,  338 => 107,  334 => 106,  330 => 105,  326 => 104,  322 => 103,  318 => 102,  310 => 97,  304 => 93,  298 => 91,  296 => 90,  292 => 89,  286 => 85,  280 => 83,  278 => 82,  274 => 81,  265 => 74,  257 => 73,  254 => 72,  246 => 70,  244 => 69,  238 => 68,  231 => 67,  223 => 65,  221 => 64,  213 => 59,  208 => 56,  206 => 55,  203 => 54,  197 => 52,  194 => 51,  189 => 49,  186 => 48,  184 => 47,  180 => 46,  174 => 42,  165 => 40,  160 => 39,  154 => 37,  152 => 36,  145 => 34,  139 => 33,  133 => 32,  128 => 30,  123 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 18,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6d52f907da49051f2de21ae7860ae0140d074e0ea30e0f435a20124daa0ac25f", "");
    }
}
