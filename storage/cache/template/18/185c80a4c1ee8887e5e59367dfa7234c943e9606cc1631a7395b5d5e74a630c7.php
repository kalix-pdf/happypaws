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

/* customerpartner/transaction_form.twig */
class __TwigTemplate_dff7458a174e82d0c93f1b6eba3e6f55c70a2c954130ceb092ae02b3c875a299 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <div class=\"dropdown pull-left\" style=\"margin-right:5px\">
          <label for=\"limit_dropdown\">";
        // line 7
        echo ($context["entry_show_limit"] ?? null);
        echo "</label>
          <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
            ";
        // line 9
        echo ($context["limit"] ?? null);
        echo "
            <span class=\"caret\"></span>
          </button>
          <ul class=\"dropdown-menu\" id=\"limit_dropdown\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 13
        echo ($context["limit_ten"] ?? null);
        echo "\">10</a></li>
            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 14
        echo ($context["limit_twentyfive"] ?? null);
        echo "\">25</a></li>
            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 15
        echo ($context["limit_fifty"] ?? null);
        echo "\">50</a></li>
            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 16
        echo ($context["limit_hundred"] ?? null);
        echo "\">100</a></li>
          </ul>
        </div>
        <button type=\"submit\" form=\"form-transaction\" data-toggle=\"tooltip\" title=\"";
        // line 19
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 20
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 24);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 31
        if (($context["error_warning"] ?? null)) {
            // line 32
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 36
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 39
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">

        <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 44
        echo ($context["info_transaction_select"] ?? null);
        echo " <br>
        &nbsp;&nbsp; &nbsp;You can see Transaction Price changing after selecting / deselecting order products (with order status which you selected Complete in Marketplace module)
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>

        <form action=\"";
        // line 49
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-transaction\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              ";
        // line 53
        echo ($context["entry_seller_name"] ?? null);
        echo "
            </label>
            <div class=\"col-sm-10\">
              <input name=\"customer_id\" type=\"hidden\" value=\"";
        // line 56
        if (($context["customers"] ?? null)) {
            echo (($__internal_compile_0 = ($context["customers"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["customer_id"] ?? null) : null);
        }
        echo "\" />
              <label class=\"control-label\" name=\"\" value=\"\" >
                ";
        // line 58
        if (($context["customers"] ?? null)) {
            echo (((($__internal_compile_1 = ($context["customers"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["firstname"] ?? null) : null) . " ") . (($__internal_compile_2 = ($context["customers"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["lastname"] ?? null) : null));
        }
        // line 59
        echo "              </label>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              ";
        // line 65
        echo ($context["entry_seller_email"] ?? null);
        echo "
            </label>
            <div class=\"col-sm-10\">
              <!-- <input type=\"text\" id=\"input-amount\" readonly class=\"form-control\" name=\"amount\" value=\"";
        // line 68
        echo ($context["amount"] ?? null);
        echo "\" /> -->
              <label class=\"control-label\" name=\"\" value=\"\" >
                ";
        // line 70
        if (($context["customers"] ?? null)) {
            echo (($__internal_compile_3 = ($context["customers"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["email"] ?? null) : null);
        }
        // line 71
        echo "              </label>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              Seller Payment Method: 
            </label>
            <div class=\"col-sm-10\">
              <label class=\"control-label\" name=\"\" value=\"\" >
                ";
        // line 81
        echo ($context["seller_payment"] ?? null);
        echo "
              </label>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-amount\">
              ";
        // line 88
        echo ($context["entry_payable_amount"] ?? null);
        echo "
            </label>
            <div class=\"col-sm-10\">
              <input id=\"input-amount\" type=\"hidden\" readonly class=\"form-control\" name=\"amount\" value=\"";
        // line 91
        echo ($context["amount"] ?? null);
        echo "\" />
              <label class=\"control-label\" name=\"amount\" value=\"\" >
                ";
        // line 93
        echo ($context["amount"] ?? null);
        echo "
              </label>
            </div>
          </div>
          

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-details\">
              Transaction Number / Details: 
            </label>
            <div class=\"col-sm-10\">
              <textarea id=\"input-details\" class=\"form-control\" name=\"details\" rows=\"3\">";
        // line 104
        echo ($context["details"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <th width=\"1\"></th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 112
        echo ($context["order_id_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "op.order_id"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 113
        echo ($context["entry_order_id"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 117
        echo ($context["product_name_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "o.firstname"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 118
        echo ($context["entry_product_name"] ?? null);
        echo "
                  </a>
                </th>

                <th class=\"text-center\">
                  <a href=\"";
        // line 123
        echo ($context["commission_applied_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "c2o.commission_applied"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    Platform Fee
                  </a>
                </th>


                <th class=\"text-center\">
                  <a href=\"";
        // line 130
        echo ($context["payable_amount_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "c2o.customer"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 131
        echo ($context["entry_payable_amount"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 135
        echo ($context["quantity_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "op.quantity"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 136
        echo ($context["entry_quantity"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 140
        echo ($context["date_added_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "o.date_added"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 141
        echo ($context["entry_order_date"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 145
        echo ($context["order_status_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "os.name"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 146
        echo ($context["entry_order_status"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\">
                  <a href=\"";
        // line 150
        echo ($context["paid_status_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) == "c2o.paid_status"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\" >
                    ";
        // line 151
        echo ($context["entry_transaction_status"] ?? null);
        echo "
                  </a>
                </th>
                <th class=\"text-center\"></th>
              </thead>
              <tbody>
                <tr>
                  <td class=\"text-center\"></td>
                  <td class=\"text-center\"><input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 159
        echo ($context["order_id"] ?? null);
        echo "\" class=\"form-control\"></td>
                  <td class=\"text-center\"></td>
                  <td class=\"text-center\"></td>
                  <td class=\"text-center\"><input type=\"text\" class=\"form-control\" name=\"filter_payable_amount\" value=\"";
        // line 162
        if (array_key_exists("payable_amount", $context)) {
            echo ($context["payable_amount"] ?? null);
        }
        echo "\"></td>
                  <td class=\"text-center\"><input type=\"text\" class=\"form-control\" name=\"filter_quantity\" value=\"";
        // line 163
        if (array_key_exists("quantity", $context)) {
            echo ($context["quantity"] ?? null);
        }
        echo "\"></td>
                  <td class=\"text-center\">
                    <input type=\"text\" class=\"datetime form-control\" name=\"filter_date_added_from\" value=\"";
        // line 165
        if (array_key_exists("date_added_from", $context)) {
            echo ($context["date_added_from"] ?? null);
        }
        echo "\" placeholder=\"";
        echo ($context["entry_from"] ?? null);
        echo "\">
                    <br/>
                    <input type=\"text\" class=\"datetime form-control\" name=\"filter_date_added_to\" value=\"";
        // line 167
        if (array_key_exists("date_added_to", $context)) {
            echo ($context["date_added_to"] ?? null);
        }
        echo "\" placeholder=\"";
        echo ($context["entry_to"] ?? null);
        echo "\">
                  </td>
                  <td class=\"text-center\">
                    <select name=\"filter_order_status\" class=\"form-control\">
                      <option></option>
                      ";
        // line 172
        if (($context["order_statuses"] ?? null)) {
            // line 173
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["status"]) {
                // line 174
                echo "                            <option value=\"";
                echo (($__internal_compile_4 = $context["status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "\" ";
                if (((($__internal_compile_5 = $context["status"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null) == ($context["order_status"] ?? null))) {
                    echo "selected";
                }
                echo " >
                              ";
                // line 175
                echo (($__internal_compile_6 = $context["status"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                echo "
                            </option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                      ";
        }
        // line 179
        echo "                    </select>
                  </td>
                  <td class=\"text-center\">
                    <select name=\"filter_paid_status\" class=\"form-control\">
                      <option></option>
                      <option value=\"paid\" ";
        // line 184
        if ((($context["paid_status"] ?? null) == "paid")) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_paid"] ?? null);
        echo "</option>
                      <option value=\"notpaid\" ";
        // line 185
        if ((($context["paid_status"] ?? null) == "notpaid")) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_not_paid"] ?? null);
        echo "</option>
                    </select>
                  </td>
                  <td class=\"text-center\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"filter();\"><i class=\"fa fa-filter\"></i> Filter</button></td>
                </tr>
                ";
        // line 190
        if (($context["orders"] ?? null)) {
            // line 191
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["order"]) {
                // line 192
                echo "                    <tr>
                      <td class=\"text-center\" width=\"1\">
                        <input type=\"checkbox\" name=\"select[";
                // line 194
                echo (($__internal_compile_7 = $context["order"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["order_id"] ?? null) : null);
                echo "][]\" value=\"";
                echo (($__internal_compile_8 = $context["order"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["order_product_id"] ?? null) : null);
                echo "\" ";
                if ((($__internal_compile_9 = $context["order"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["status"] ?? null) : null)) {
                    echo "disabled='true'";
                } elseif (((($__internal_compile_10 = $context["order"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["order_status"] ?? null) : null) == ($context["marketplace_complete_order_status"] ?? null))) {
                    echo "checked='true'";
                }
                echo " />
                        <!-- <input type=\"hidden\" name=\"order_id[]\" value=\"";
                // line 195
                echo (($__internal_compile_11 = $context["order"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["order_id"] ?? null) : null);
                echo "\"> -->
                      </td>
                      <td class=\"text-center\">";
                // line 197
                echo (($__internal_compile_12 = $context["order"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["order_id"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">
                        ";
                // line 199
                echo (($__internal_compile_13 = $context["order"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["product_name"] ?? null) : null);
                echo "
                        <br/>
                        ";
                // line 201
                if ((($__internal_compile_14 = $context["order"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["product_value"] ?? null) : null)) {
                    // line 202
                    echo "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_15 = $context["order"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["product_value"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 203
                        echo "                              - <small>";
                        echo (($__internal_compile_16 = $context["option"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["value"] ?? null) : null);
                        echo "</small>
                            <br/>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo "                        ";
                }
                // line 207
                echo "                      </td>
                      <td class=\"text-center\">";
                // line 208
                echo ((($__internal_compile_17 = $context["order"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["commission_applied"] ?? null) : null) . "%");
                echo "</td>
                      <td class=\"text-center\"> ";
                // line 210
                echo "                        <input type=\"hidden\" value=\"";
                echo (($__internal_compile_18 = $context["order"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["price"] ?? null) : null);
                echo "\" id=\"price-";
                echo (($__internal_compile_19 = $context["order"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["order_product_id"] ?? null) : null);
                echo "\" />
                          ";
                // line 211
                echo (($__internal_compile_20 = $context["order"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["price"] ?? null) : null);
                echo "
                      </td>
                      <td class=\"text-center\">";
                // line 213
                echo (($__internal_compile_21 = $context["order"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["quantity"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 214
                echo (($__internal_compile_22 = $context["order"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["date_added"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">
                        <input type=\"hidden\" value=\"";
                // line 216
                echo (($__internal_compile_23 = $context["order"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["order_status"] ?? null) : null);
                echo "\" id=\"order-status-";
                echo (($__internal_compile_24 = $context["order"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["order_product_id"] ?? null) : null);
                echo "\" />
                        ";
                // line 217
                echo (($__internal_compile_25 = $context["order"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["order_status_name"] ?? null) : null);
                echo "
                      </td>
                      <td class=\"text-center\" colspan=\"2\">
                        <input type=\"hidden\" value=\"";
                // line 220
                echo (($__internal_compile_26 = $context["order"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["status"] ?? null) : null);
                echo "\" id=\"paid-status-";
                echo (($__internal_compile_27 = $context["order"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["order_product_id"] ?? null) : null);
                echo "\" />
                        ";
                // line 221
                echo (($__internal_compile_28 = $context["order"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["paid_status"] ?? null) : null);
                echo "
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                ";
        } else {
            // line 226
            echo "                    <tr><td colspan=\"10\" class=\"text-center\">";
            echo ($context["text_no_record"] ?? null);
            echo "</td></tr>
                ";
        }
        // line 228
        echo "              </tbody>
            </table>
          </div>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 232
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 233
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 240
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">


function filter() {
  url = \"index.php?route=customerpartner/transaction/addtransaction&user_token=";
        // line 246
        echo ($context["user_token"] ?? null);
        echo "&seller_id= ";
        if (($context["customers"] ?? null)) {
            echo (($__internal_compile_29 = ($context["customers"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["customer_id"] ?? null) : null);
        }
        echo "\";

  order_id = \$('input[name=\\'filter_order_id\\']').val();
  if(order_id) {
    url += '&order_id='+order_id;
  }

  payable_amount = \$('input[name=\"filter_payable_amount\"]').val();
  if(payable_amount) {
    url += '&payable_amount='+payable_amount;
  }

  quantity = \$('input[name=\"filter_quantity\"]').val();
  if(quantity) {
    url += '&quantity='+quantity;
  }

  date_added_from = \$('input[name=\"filter_date_added_from\"]').val();
  if(date_added_from) {
    url += '&date_added_from='+date_added_from;
  }

  date_added_to = \$('input[name=\"filter_date_added_to\"]').val();
  if(date_added_to) {
    url += '&date_added_to='+date_added_to;
  }

  order_status = \$('select[name=\"filter_order_status\"]').val();
  if(order_status) {
    url += '&order_status='+order_status;
  }

  paid_status = \$('select[name=\"filter_paid_status\"]').val();

  if(paid_status) {
    url += '&paid_status='+paid_status;
  }

  location = url;
}

\$( document ).ready(function() {
  setTimeout(function(){ \$('input[type=\"checkbox\"]').click();  }, 1000);
});
let total_price = 0;
\$('[name=\"amount\"]').text('";
        // line 291
        echo ($context["currency_code"] ?? null);
        echo "' + total_price);
\$('input[type=\"checkbox\"]').on('click', function (){
  if(\$(this). prop(\"checked\") == true){
    that = \$(this).parent().parent().find(\"input[id^='price']\").val();
    total_price += parseFloat(that);
  } else {
    that = \$(this).parent().parent().find(\"input[id^='price']\").val();
    total_price -= parseFloat(that);
  }
  \$('label[name=\"amount\"]').text('";
        // line 300
        echo ($context["currency_code"] ?? null);
        echo "' + total_price);
  \$('input[name=\"amount\"]').val(total_price);
});

\$('.datetime').datetimepicker({
  pickTime:true,
  format:\"YYYY-MM-DD HH:MM:SS\",
});

amount = ";
        // line 309
        echo ((($context["amount"] ?? null)) ? (($context["amount"] ?? null)) : (0));
        echo ";
mp_order_status = '";
        // line 310
        if (($context["marketplace_complete_order_status"] ?? null)) {
            echo ($context["marketplace_complete_order_status"] ?? null);
        }
        echo "';
\$('table input[type=\"checkbox\"]').on('change',function(){
  order_id = \$(this).val();
  price = \$('#price-'+order_id).val();
  order_status = \$('#order-status-'+order_id).val();
  paid_status = \$('#paid-status-'+order_id).val();
  if(order_status == mp_order_status && paid_status == 0){
    if( \$(this).is(\":checked\") ){
      amount = parseFloat(amount) + parseFloat(price);
    }else{
      amount = parseFloat(amount - price);
    }
    \$('label[name=\"amount\"]').text(amount.toFixed(2));
    \$('input[name=\"amount\"]').val(amount.toFixed(2));
  }
})

</script>
";
    }

    public function getTemplateName()
    {
        return "customerpartner/transaction_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  701 => 310,  697 => 309,  685 => 300,  673 => 291,  621 => 246,  612 => 240,  602 => 233,  598 => 232,  592 => 228,  586 => 226,  583 => 225,  573 => 221,  567 => 220,  561 => 217,  555 => 216,  550 => 214,  546 => 213,  541 => 211,  534 => 210,  530 => 208,  527 => 207,  524 => 206,  514 => 203,  509 => 202,  507 => 201,  502 => 199,  497 => 197,  492 => 195,  480 => 194,  476 => 192,  471 => 191,  469 => 190,  457 => 185,  449 => 184,  442 => 179,  439 => 178,  430 => 175,  421 => 174,  416 => 173,  414 => 172,  402 => 167,  393 => 165,  386 => 163,  380 => 162,  374 => 159,  363 => 151,  355 => 150,  348 => 146,  340 => 145,  333 => 141,  325 => 140,  318 => 136,  310 => 135,  303 => 131,  295 => 130,  281 => 123,  273 => 118,  265 => 117,  258 => 113,  250 => 112,  239 => 104,  225 => 93,  220 => 91,  214 => 88,  204 => 81,  192 => 71,  188 => 70,  183 => 68,  177 => 65,  169 => 59,  165 => 58,  158 => 56,  152 => 53,  145 => 49,  137 => 44,  129 => 39,  124 => 36,  116 => 32,  114 => 31,  107 => 26,  96 => 24,  92 => 23,  87 => 21,  81 => 20,  77 => 19,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/transaction_form.twig", "");
    }
}
