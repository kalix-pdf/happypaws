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

/* __string_template__e0d14dc7793ca2cb3d4f2a8ee8ba058b4aef8de4de0cf7f87c5ccf19c7ec822e */
class __TwigTemplate_3969cab8ca9fa11ee338c8488dafdfeebf681e7af347b294ae6c01e0c37ad8ee extends Template
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                echo "     
          ";
                // line 48
                if (twig_in_filter(($context["order_status_by_order"] ?? null), $context["order_status"])) {
                    // line 49
                    echo "            ";
                    if (((($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null) == "Pending")) {
                        // line 50
                        echo "              <a href=\"\" class=\"btn btn-danger pull-right\">Decline</a>
              <a href=\"index.php?route=extension/flashexpress_api&order_id=";
                        // line 51
                        echo ($context["order_id"] ?? null);
                        echo "\" class=\"btn btn-primary pull-right m-3\">Accept</a>
            ";
                    }
                    // line 53
                    echo "            ";
                    if (((($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null) == "Canceled")) {
                        // line 54
                        echo "              <div class=\"alert alert-info alert-dismissible\">
              <i class=\"fa fa-exclamation-circle\"></i> Your buyer canceled their order  
              </div>
            ";
                    }
                    // line 58
                    echo "            ";
                    if (((($__internal_compile_4 = $context["order_status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null) == "Processing")) {
                        // line 59
                        echo "              ";
                        if (($context["download_label_link"] ?? null)) {
                            // line 60
                            echo "                  <a href=\"";
                            echo ($context["download_label_link"] ?? null);
                            echo "\" target=\"_blank\" class=\"btn btn-primary\">Download Label</a>
              ";
                        }
                        // line 62
                        echo "              <div class=\"alert alert-info alert-dismissible\">
              <i class=\"fa fa-exclamation-circle\"></i> Please prepare the parcel and wait for the courier to pick it up  
              </div>
            ";
                    }
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
      ";
            // line 69
            if (( !($context["errorPage"] ?? null) && ($context["isMember"] ?? null))) {
                // line 70
                echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" colspan=\"2\">";
                // line 73
                echo ($context["text_order_detail"] ?? null);
                echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\" style=\"width: 50%;\">";
                // line 78
                if (($context["invoice_no"] ?? null)) {
                    // line 79
                    echo "                <b>";
                    echo ($context["text_invoice_no"] ?? null);
                    echo "</b> ";
                    echo ($context["invoice_no"] ?? null);
                    echo "<br />
                ";
                }
                // line 81
                echo "                <b>";
                echo ($context["text_order_id"] ?? null);
                echo "</b> #";
                echo ($context["order_id"] ?? null);
                echo "<br />
                <b>";
                // line 82
                echo ($context["text_date_added"] ?? null);
                echo "</b> ";
                echo ($context["date_added"] ?? null);
                echo "</td>
              <td class=\"text-left\" style=\"width: 50%;\">";
                // line 83
                if (($context["payment_method"] ?? null)) {
                    // line 84
                    echo "                <b>";
                    echo ($context["text_payment_method"] ?? null);
                    echo "</b> ";
                    echo ($context["payment_method"] ?? null);
                    echo "<br />
                ";
                }
                // line 86
                echo "                ";
                if (($context["shipping_method"] ?? null)) {
                    // line 87
                    echo "                <b>";
                    echo ($context["text_shipping_method"] ?? null);
                    echo "</b> ";
                    echo ($context["shipping_method"] ?? null);
                    echo "
                ";
                }
                // line 88
                echo "</td>
            </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
                // line 95
                echo ($context["text_payment_address"] ?? null);
                echo "</td>
              ";
                // line 96
                if (($context["shipping_address"] ?? null)) {
                    // line 97
                    echo "              <td class=\"text-left\">";
                    echo ($context["text_shipping_address"] ?? null);
                    echo "</td>
              ";
                }
                // line 99
                echo "            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"left\">";
                // line 103
                echo ($context["payment_address"] ?? null);
                echo "</td>
              ";
                // line 104
                if (($context["shipping_address"] ?? null)) {
                    // line 105
                    echo "              <td class=\"text-left\">";
                    echo ($context["shipping_address"] ?? null);
                    echo "</td>
              ";
                }
                // line 107
                echo "            </tr>
          </tbody>
        </table>

        <form class=\"form-horizontal\" action=\"";
                // line 111
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" id=\"main-form\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
               <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked); checked\" /></td>
                <td class=\"text-left\">";
                // line 116
                echo ($context["column_name"] ?? null);
                echo "</td>
                <td class=\"text-left\">";
                // line 117
                echo ($context["column_model"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 118
                echo ($context["column_quantity"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 119
                echo ($context["column_transaction_status"] ?? null);
                echo "</td>
                <td class=\"text-center\">";
                // line 120
                echo ($context["column_seller_order_status"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 121
                echo ($context["column_price"] ?? null);
                echo "</td>
                <td class=\"text-right\">";
                // line 122
                echo ($context["column_total"] ?? null);
                echo "</td>
                ";
                // line 124
                echo "              </tr>
            </thead>
            <tbody>
              ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 128
                    echo "              <tr>
             ";
                    // line 129
                    if ((((($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_product_status"] ?? null) : null) == ($context["marketplace_cancel_order_status"] ?? null)) || (array_key_exists("marketplace_complete_order_status", $context) && ((($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["order_product_status"] ?? null) : null) == ($context["marketplace_complete_order_status"] ?? null))))) {
                        // line 130
                        echo "                <td></td>
              ";
                    } else {
                        // line 132
                        echo "                <td style=\"text-align: center;\">
                  <input data-status-id=\"";
                        // line 133
                        echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["order_product_status"] ?? null) : null);
                        echo "\" class=\"selection\" type=\"checkbox\" name=\"selected\" value=\"";
                        echo (($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["product_id"] ?? null) : null);
                        echo "\"/>
                </td>
              ";
                    }
                    // line 136
                    echo "                <!-- file download code added -->
                <td class=\"text-left\">";
                    // line 137
                    echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
                    echo "
                  ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 139
                        echo "                  <br />
                  ";
                        // line 140
                        if (((($__internal_compile_11 = $context["option"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["type"] ?? null) : null) != "file")) {
                            // line 141
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_12 = $context["option"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["name"] ?? null) : null);
                            echo ": ";
                            echo (($__internal_compile_13 = $context["option"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["value"] ?? null) : null);
                            echo "</small>
                  ";
                        } else {
                            // line 143
                            echo "                  &nbsp;<small> - ";
                            echo (($__internal_compile_14 = $context["option"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null);
                            echo ": <a href=\"";
                            echo (($__internal_compile_15 = $context["option"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["href"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_16 = $context["option"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["value"] ?? null) : null);
                            echo "</a></small>
                  ";
                        }
                        // line 145
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                </td>
                <td class=\"text-left\">";
                    // line 147
                    echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["model"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 148
                    echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["quantity"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 149
                    echo (($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["paid_status"] ?? null) : null);
                    echo "</td>
                 ";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                        // line 151
                        echo "                 ";
                        if (twig_in_filter(($context["order_status_by_order"] ?? null), $context["order_status"])) {
                            // line 152
                            echo "                    <td class=\"text-center\">";
                            echo (($__internal_compile_20 = $context["order_status"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["name"] ?? null) : null);
                            echo "</td>
                 ";
                        }
                        // line 154
                        echo "                 ";
                        // line 157
                        echo "                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                <td class=\"text-right\">";
                    echo (($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["price"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 159
                    echo (($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["total"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">
                  ";
                    // line 161
                    if ((($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["tracking"] ?? null) : null)) {
                        // line 162
                        echo "                    ";
                        echo (($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["tracking"] ?? null) : null);
                        echo "
                  ";
                    } else {
                        // line 164
                        echo "                    ";
                        // line 165
                        echo "                    <!-- <button type=\"submit\" class=\"btn btn-primary pull-right\" style=\"margin-top:3px;\">";
                        echo ($context["button_submit"] ?? null);
                        echo "</button> -->
                  ";
                        // line 166
                        $context["i"] = twig_constant("true");
                        echo " ";
                    }
                    // line 167
                    echo "                </td>
                <!-- <td class=\"text-center\"><button id=\"";
                    // line 168
                    echo (($__internal_compile_25 = $context["product"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["product_id"] ?? null) : null);
                    echo "\" class=\"btn btn-danger cancel-button\">Cancel</button></td>           -->
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 172
                    echo "              <tr>
                <td class=\"text-left\">";
                    // line 173
                    echo (($__internal_compile_26 = $context["voucher"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["description"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
                    // line 176
                    echo (($__internal_compile_27 = $context["voucher"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["amount"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 177
                    echo (($__internal_compile_28 = $context["voucher"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["amount"] ?? null) : null);
                    echo "</td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "            </tbody>
          <tfoot>
              ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 183
                    echo "                <tr>
                  <td class=\"text-right\" colspan=\"7\"><b>";
                    // line 184
                    echo (($__internal_compile_29 = $context["total"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["title"] ?? null) : null);
                    echo "</b></td>
                  <td class=\"text-right\">";
                    // line 185
                    echo (($__internal_compile_30 = $context["total"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["text"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-right\">
                    ";
                    // line 187
                    if (((($__internal_compile_31 = $context["total"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["title"] ?? null) : null) == "Total")) {
                        // line 188
                        echo "                      ";
                        if ((($__internal_compile_32 = ($context["product"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["tracking"] ?? null) : null)) {
                            // line 189
                            echo "                      ";
                        } else {
                            // line 190
                            echo "                      ";
                            // line 191
                            echo "                      ";
                        }
                        // line 192
                        echo "                    ";
                    }
                    // line 193
                    echo "                  </td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "            </tfoot>
          </table>
        </form>
        ";
                // line 199
                if (($context["wksellerorderstatus"] ?? null)) {
                    // line 200
                    echo "        <div class=\"col-xs-12\">
          <div class=\"col-sm-6 text-center\"><div id=\"order-status-button\" class=\"order-info-buttons btn-primary\">";
                    // line 201
                    echo ($context["column_seller_order_status"] ?? null);
                    echo "</div></div>
          <div class=\"col-sm-6 text-center\"><div id=\"order-comment-button\" class=\"order-info-buttons btn-primary\">";
                    // line 202
                    echo ($context["text_comment"] ?? null);
                    echo "</div></div>
        </div>

        <div class=\"col-xs-12\" style=\"margin-top:20px;\">
            
          <form>
            <div class=\"form-group\" id=\"change-order-status\">
              <label class=\"col-sm-2 control-label\" for=\"input-order\">";
                    // line 209
                    echo ($context["entry_order_status"] ?? null);
                    echo "</label>
              <div class=\"col-sm-10\">
                <select id=\"order_status_id\" name=\"order_status_id\" class=\"form-control\">
                  ";
                    // line 212
                    if (($context["wksellerorderstatus"] ?? null)) {
                        // line 213
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
                        foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                            // line 214
                            echo "                        ";
                            if (((($__internal_compile_33 = $context["order_status"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["order_status_id"] ?? null) : null) == ($context["order_status_id"] ?? null))) {
                                // line 215
                                echo "                          <option value=\"";
                                echo (($__internal_compile_34 = $context["order_status"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["order_status_id"] ?? null) : null);
                                echo "\" selected=\"selected\">";
                                echo (($__internal_compile_35 = $context["order_status"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["name"] ?? null) : null);
                                echo "</option>
                        ";
                            } else {
                                // line 217
                                echo "                          <option value=\"";
                                echo (($__internal_compile_36 = $context["order_status"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["order_status_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_37 = $context["order_status"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["name"] ?? null) : null);
                                echo "</option>
                        ";
                            }
                            // line 219
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 221
                        echo "                  ";
                    }
                    // line 222
                    echo "                </select>
              </div>
            </div>

            <div class=\"form-group\" id=\"add-order-comment\" style=\"display:none\">
            ";
                    // line 227
                    if ((array_key_exists("marketplace_available_order_status", $context) && ($context["marketplace_available_order_status"] ?? null))) {
                        // line 228
                        echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                        echo ($context["history_info"] ?? null);
                        echo "</div>
          ";
                    } else {
                        // line 230
                        echo "            <div class=\"alert alert-danger\" id=\"\"><i class=\"fa fa-exclamation-circle\"></i> ";
                        echo ($context["order_status_info"] ?? null);
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" >&times;</button></div>
          ";
                    }
                    // line 232
                    echo "              <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
                    echo ($context["entry_comment"] ?? null);
                    echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"comment\" cols=\"40\" rows=\"8\" class=\"form-control\" id=\"input-comment\"></textarea>
              </div>
            </div>
              <a id=\"button-history\" class=\"btn btn-primary pull-right\" style=\"margin-top:20px;\">";
                    // line 237
                    echo ($context["button_submit"] ?? null);
                    echo "</a>
          </form>
        </div>
        ";
                }
                // line 241
                echo "
        <div class=\"clear\"></div>

        ";
                // line 244
                if (($context["histories"] ?? null)) {
                    // line 245
                    echo "        <h2>";
                    echo ($context["text_history"] ?? null);
                    echo "</h2>
        <table class=\"table table-bordered table-hover\" id=\"history\">
          <thead>
            <tr>
              <td class=\"text-left\">";
                    // line 249
                    echo ($context["column_date_added"] ?? null);
                    echo "</td>
              <td class=\"text-left\">";
                    // line 250
                    echo ($context["column_status"] ?? null);
                    echo "</td>
              <td class=\"text-left\">";
                    // line 251
                    echo ($context["column_comment"] ?? null);
                    echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                        // line 256
                        echo "            <tr>
              <td class=\"text-left\">";
                        // line 257
                        echo (($__internal_compile_38 = $context["history"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["date_added"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 258
                        echo (($__internal_compile_39 = $context["history"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["status"] ?? null) : null);
                        echo "</td>
              <td class=\"text-left\">";
                        // line 259
                        echo (($__internal_compile_40 = $context["history"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["comment"] ?? null) : null);
                        echo "</td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 262
                    echo "          </tbody>
        </table>
        ";
                }
                // line 265
                echo "        ";
            } else {
                // line 266
                echo "        <div>
          ";
                // line 267
                echo ($context["error_page_order"] ?? null);
                echo "
        </div>
        ";
            }
            // line 270
            echo "
    </fieldset>
      ";
            // line 272
            echo ($context["content_bottom"] ?? null);
            echo "
    </div>
    ";
        } else {
            // line 275
            echo " ";
            echo ($context["text_become_seller"] ?? null);
            echo "
 ";
        }
        // line 277
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script>
var order_status_sequence = [];
";
        // line 283
        if ((array_key_exists("marketplace_order_status_sequence", $context) && ($context["marketplace_order_status_sequence"] ?? null))) {
            // line 284
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["sequence"]) {
                // line 285
                echo "    order_status_sequence.push(";
                echo (($__internal_compile_41 = $context["sequence"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["order_status_id"] ?? null) : null);
                echo ");
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 288
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
        // line 321
        if ((array_key_exists("marketplace_order_status_sequence", $context) && ($context["marketplace_order_status_sequence"] ?? null))) {
            // line 322
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 323
                echo "          if (";
                echo (($__internal_compile_42 = $context["value"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["order_status_id"] ?? null) : null);
                echo " == value) {
             \$(\"#order_status_id\").append('<option value=\"";
                // line 324
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
            // line 327
            echo "      ";
        }
        // line 328
        echo "    });
}
</script>

<script>
";
        // line 333
        if (($context["marketplace_cancel_order_status"] ?? null)) {
            // line 334
            echo "  function cancel_order(){
    var order_id = ";
            // line 335
            echo ($context["order_id"] ?? null);
            echo ";
    var order_status_id =  ";
            // line 336
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
        // line 347
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
        // line 356
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
        // line 395
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
        // line 412
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__e0d14dc7793ca2cb3d4f2a8ee8ba058b4aef8de4de0cf7f87c5ccf19c7ec822e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  980 => 412,  960 => 395,  918 => 356,  907 => 347,  893 => 336,  889 => 335,  886 => 334,  884 => 333,  877 => 328,  874 => 327,  863 => 324,  858 => 323,  853 => 322,  851 => 321,  816 => 288,  806 => 285,  801 => 284,  799 => 283,  789 => 277,  783 => 275,  777 => 272,  773 => 270,  767 => 267,  764 => 266,  761 => 265,  756 => 262,  747 => 259,  743 => 258,  739 => 257,  736 => 256,  732 => 255,  725 => 251,  721 => 250,  717 => 249,  709 => 245,  707 => 244,  702 => 241,  695 => 237,  686 => 232,  680 => 230,  674 => 228,  672 => 227,  665 => 222,  662 => 221,  655 => 219,  647 => 217,  639 => 215,  636 => 214,  631 => 213,  629 => 212,  623 => 209,  613 => 202,  609 => 201,  606 => 200,  604 => 199,  599 => 196,  591 => 193,  588 => 192,  585 => 191,  583 => 190,  580 => 189,  577 => 188,  575 => 187,  570 => 185,  566 => 184,  563 => 183,  559 => 182,  555 => 180,  546 => 177,  542 => 176,  536 => 173,  533 => 172,  528 => 171,  519 => 168,  516 => 167,  512 => 166,  507 => 165,  505 => 164,  499 => 162,  497 => 161,  492 => 159,  487 => 158,  481 => 157,  479 => 154,  473 => 152,  470 => 151,  466 => 150,  462 => 149,  458 => 148,  454 => 147,  451 => 146,  445 => 145,  435 => 143,  427 => 141,  425 => 140,  422 => 139,  418 => 138,  414 => 137,  411 => 136,  403 => 133,  400 => 132,  396 => 130,  394 => 129,  391 => 128,  387 => 127,  382 => 124,  378 => 122,  374 => 121,  370 => 120,  366 => 119,  362 => 118,  358 => 117,  354 => 116,  346 => 111,  340 => 107,  334 => 105,  332 => 104,  328 => 103,  322 => 99,  316 => 97,  314 => 96,  310 => 95,  301 => 88,  293 => 87,  290 => 86,  282 => 84,  280 => 83,  274 => 82,  267 => 81,  259 => 79,  257 => 78,  249 => 73,  244 => 70,  242 => 69,  239 => 68,  233 => 67,  230 => 66,  224 => 62,  218 => 60,  215 => 59,  212 => 58,  206 => 54,  203 => 53,  198 => 51,  195 => 50,  192 => 49,  190 => 48,  184 => 47,  180 => 46,  174 => 42,  165 => 40,  160 => 39,  154 => 37,  152 => 36,  145 => 34,  139 => 33,  133 => 32,  128 => 30,  123 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 18,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e0d14dc7793ca2cb3d4f2a8ee8ba058b4aef8de4de0cf7f87c5ccf19c7ec822e", "");
    }
}
