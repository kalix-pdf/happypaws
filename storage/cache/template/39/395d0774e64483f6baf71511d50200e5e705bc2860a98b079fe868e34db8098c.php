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

/* account/customerpartner/productlist.twig */
class __TwigTemplate_213020353269c4502dbe9fb58eaf73c951b534e9f45c1c3f840e9dace3746250 extends Template
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
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 16
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"> </i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 19
        echo "
  <div class=\"row\">";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
  <div id=\"content\" class=\"";
        // line 29
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 30
        echo ($context["content_top"] ?? null);
        echo "
    <h1>
      ";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "
      <div class=\"pull-right\">

        ";
        // line 35
        if ((($context["marketplace_product_purchase_limit_qra_seller"] ?? null) || ($context["marketplace_product_purchase_limit_pra_seller"] ?? null))) {
            // line 36
            echo "            <button type=\"button\" data-keyboard=\"true\" class=\"btn btn-danger\" data-toggle=\"modal\" id=\"restrcition\" data-target=\"#mpRestriction\" title=\"Manage restriction on the purchase\"><i class=\"fa fa-ban\"></i></button>
        ";
        }
        // line 38
        echo "
        <a href=\"";
        // line 39
        echo ($context["reason"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"Manage Reasons\" class=\"btn btn-success\"><i class=\"fa fa-th-list\" aria-hidden=\"true\"></i></a>
        <a href=\"";
        // line 40
        echo ($context["top_link"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"top searched items\" class=\"btn btn-info\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
        <a href=\"";
        // line 41
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <a onclick=\"\$('#form-product').submit();\" data-toggle=\"tooltip\" class=\"btn btn-danger\"  title=\"";
        // line 42
        echo ($context["button_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a>
      </div>
    </h1>

    <fieldset>
      <legend><i class=\"fa fa-list\"></i> ";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</legend>
      ";
        // line 48
        if (($context["isMember"] ?? null)) {
            // line 49
            echo "      <div class=\"well\">
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
            // line 53
            echo ($context["column_name"] ?? null);
            echo "</label>
              <div class='input-group'>
                <input type=\"text\" name=\"filter_name\" value=\"";
            // line 55
            echo ($context["filter_name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
                <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span></span>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
            // line 60
            echo ($context["column_price"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
            // line 61
            echo ($context["filter_price"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_price"] ?? null);
            echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
            // line 67
            echo ($context["column_model"] ?? null);
            echo "</label>
              <div class='input-group'>
                <input type=\"text\" name=\"filter_model\" value=\"";
            // line 69
            echo ($context["filter_model"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_model"] ?? null);
            echo "\" id=\"input-model\" class=\"form-control\" />
                <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span></span>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
            // line 74
            echo ($context["column_quantity"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
            // line 75
            echo ($context["filter_quantity"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_quantity"] ?? null);
            echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
            // line 81
            echo ($context["column_status"] ?? null);
            echo "</label>
              <select name=\"filter_status\" class=\"form-control\" id=\"input-status\">
                <option value=\"*\"></option>
                ";
            // line 84
            if (($context["filter_status"] ?? null)) {
                // line 85
                echo "                <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 87
                echo "                <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            }
            // line 89
            echo "                ";
            if (( !(null === ($context["filter_status"] ?? null)) &&  !($context["filter_status"] ?? null))) {
                // line 90
                echo "                <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 92
                echo "                <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            }
            // line 94
            echo "              </select>
            </div>
            <a onclick=\"filter();\" class=\"btn btn-primary pull-right\">";
            // line 96
            echo ($context["button_filter"] ?? null);
            echo "</a>
          </div>

        </div>
      </div>

      <form action=\"";
            // line 102
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
        <div class=\"table-responsive\">
          <h4 class=\"text-center\">Your Products' duration will start after the Admin's Approval</h4>
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                <td class=\"text-left\">";
            // line 110
            if ((($context["sort"] ?? null) == "pd.name")) {
                // line 111
                echo "                  <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo twig_replace_filter(($context["column_name"] ?? null), [" " => ""]);
                echo "</a>
                  ";
            } else {
                // line 113
                echo "                  <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\">";
                echo twig_replace_filter(($context["column_name"] ?? null), [" " => ""]);
                echo "</a>
                  ";
            }
            // line 114
            echo "</td>
                <td class=\"text-left\">";
            // line 115
            if ((($context["sort"] ?? null) == "p.model")) {
                // line 116
                echo "                  <a href=\"";
                echo ($context["sort_model"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_model"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 118
                echo "                  <a href=\"";
                echo ($context["sort_model"] ?? null);
                echo "\">";
                echo ($context["column_model"] ?? null);
                echo "</a>
                  ";
            }
            // line 119
            echo "</td>
                <td class=\"text-left\">";
            // line 120
            if ((($context["sort"] ?? null) == "p.price")) {
                // line 121
                echo "                  <a href=\"";
                echo ($context["sort_price"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_price"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 123
                echo "                  <a href=\"";
                echo ($context["sort_price"] ?? null);
                echo "\">";
                echo ($context["column_price"] ?? null);
                echo "</a>
                  ";
            }
            // line 124
            echo "</td>
                <td class=\"text-right\">";
            // line 125
            if ((($context["sort"] ?? null) == "p.quantity")) {
                // line 126
                echo "                  <a href=\"";
                echo ($context["sort_quantity"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_quantity"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 128
                echo "                  <a href=\"";
                echo ($context["sort_quantity"] ?? null);
                echo "\">";
                echo ($context["column_quantity"] ?? null);
                echo "</a>
                  ";
            }
            // line 129
            echo "</td>
               <!-- membership codes starts here -->
                 ";
            // line 131
            if (array_key_exists("module_wk_seller_group_status", $context)) {
                // line 132
                echo "                  <td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "p.status")) {
                    // line 133
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 135
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                }
                // line 137
                echo "                  </td>
                ";
            } else {
                // line 139
                echo "                  <td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "p.status")) {
                    // line 140
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 142
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                }
                // line 144
                echo "                  </td>
                ";
            }
            // line 146
            echo "                 <!-- membership codes ends here -->
                ";
            // line 147
            $context["product_subs"] = (($__internal_compile_2 = ($context["subscriptions"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 147)] ?? null) : null);
            // line 148
            echo "                      ";
            if ( !twig_test_empty(($context["product_subs"] ?? null))) {
                // line 149
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_subs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                    // line 150
                    echo "                            <td class=\"text-right\">";
                    echo ($context["column_sold"] ?? null);
                    echo "</td>
                            <td class=\"text-right\">";
                    // line 151
                    echo ($context["column_earned"] ?? null);
                    echo "</td>
                            <td class=\"text-right\">Subscription type</td>
                            ";
                    // line 153
                    if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 153) == 3)) {
                        // line 154
                        echo "                              <td class=\"text-right\">Commission %</td>
                            ";
                    } else {
                        // line 156
                        echo "                              <td class=\"text-right\">Duration</td>
                              <td class=\"text-right\">Date Added</td>
                              <td class=\"text-right\">Date Approved</td>
                              <td class=\"text-right\">Date Expired</td>
                            ";
                    }
                    // line 161
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "                      ";
            }
            // line 163
            echo "                </tr>
            </thead>
            <tbody>
              ";
            // line 166
            if ((($context["products"] ?? null) && ($context["subscriptions"] ?? null))) {
                // line 167
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 168
                    echo "              <tr>
                <td style=\"text-align: center;\">";
                    // line 169
                    if ((($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["selected"] ?? null) : null)) {
                        // line 170
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_4 = $context["product"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["product_id"] ?? null) : null);
                        echo "\" checked=\"checked\" />
                  ";
                    } else {
                        // line 172
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["product_id"] ?? null) : null);
                        echo "\" />
                  ";
                    }
                    // line 173
                    echo "</td>
                <td class=\"text-left\">
                  <img src=\"";
                    // line 175
                    echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["thumb"] ?? null) : null);
                    echo "\" style=\"padding: 1px; border: 1px solid #DDDDDD;\" class=\"img-thumbnail\" />
                  &nbsp;
                  ";
                    // line 177
                    if ((($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["status"] ?? null) : null)) {
                        // line 178
                        echo "                    <a href=\"";
                        echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["productLink"] ?? null) : null);
                        echo "\"> ";
                        echo (($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                        echo "</a>
                  ";
                    } else {
                        // line 180
                        echo "                    ";
                        echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null);
                        echo "
                  ";
                    }
                    // line 182
                    echo "
                </td>

                <td class=\"text-left\">";
                    // line 185
                    echo (($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["model"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 186
                    if ((($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["special"] ?? null) : null)) {
                        // line 187
                        echo "                  <span style=\"text-decoration: line-through;\">";
                        echo (($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["price"] ?? null) : null);
                        echo "</span><br/>
                  <span class=\"text-danger\">";
                        // line 188
                        echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["special"] ?? null) : null);
                        echo "</span>
                  ";
                    } else {
                        // line 190
                        echo "                  ";
                        echo (($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["price"] ?? null) : null);
                        echo "
                  ";
                    }
                    // line 191
                    echo "</td>
                <td class=\"text-right\">";
                    // line 192
                    if (((($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["quantity"] ?? null) : null) <= 0)) {
                        // line 193
                        echo "                  <span class=\"label label-warning\">";
                        echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    } elseif (((($__internal_compile_19 =                     // line 194
$context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["quantity"] ?? null) : null) <= ($context["low_stock_quantity"] ?? null))) {
                        // line 195
                        echo "                  <span class=\"label label-danger\">";
                        echo (($__internal_compile_20 = $context["product"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    } else {
                        // line 197
                        echo "                  <span class=\"label label-success\">";
                        echo (($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    }
                    // line 198
                    echo "</td>

                   <!-- Membership code -->
                ";
                    // line 201
                    $context["status"] = "Undefined status";
                    // line 202
                    echo "                ";
                    if (array_key_exists("module_wk_seller_group_status", $context)) {
                        // line 203
                        echo "                  ";
                        if (((($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["current_status"] ?? null) : null) == "active")) {
                            // line 204
                            echo "                  ";
                            $context["bg_color"] = "text-success bg-success";
                            // line 205
                            echo "                  ";
                            $context["status"] = "active";
                            // line 206
                            echo "                  ";
                        } elseif (((($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["current_status"] ?? null) : null) == "inactive")) {
                            // line 207
                            echo "                  ";
                            $context["bg_color"] = "text-warning bg-warning";
                            // line 208
                            echo "                  ";
                            $context["status"] = "In-active";
                            // line 209
                            echo "                  ";
                        } elseif (((($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["current_status"] ?? null) : null) == "expired")) {
                            // line 210
                            echo "                  ";
                            $context["bg_color"] = "text-info bg-info";
                            // line 211
                            echo "                  ";
                            $context["status"] = "Expired";
                            // line 212
                            echo "                  ";
                        } elseif (((($__internal_compile_25 = $context["product"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["current_status"] ?? null) : null) == "disabled")) {
                            // line 213
                            echo "                  ";
                            $context["bg_color"] = "text-danger bg-danger";
                            // line 214
                            echo "                  ";
                            $context["status"] = ($context["text_disabled"] ?? null);
                            // line 215
                            echo "                  ";
                        }
                        // line 216
                        echo "
                  <td class=\"text-left ";
                        // line 217
                        echo ($context["bg_color"] ?? null);
                        echo "\">
                    ";
                        // line 218
                        echo ($context["status"] ?? null);
                        echo "
                  </td>

                ";
                    } else {
                        // line 222
                        echo "                <td class=\"text-left\">
                  ";
                        // line 223
                        if ((($__internal_compile_26 = $context["product"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["status"] ?? null) : null)) {
                            // line 224
                            echo "                    <span class=\"badge text-success\">Approved</span>
                  ";
                        } else {
                            // line 226
                            echo "                    <span class=\"badge text-danger\">Approval Pending</span>
                  ";
                        }
                        // line 228
                        echo "                </td>
                ";
                    }
                    // line 230
                    echo "                <!--  -->
                <td class=\"text-right\">
                  <a ";
                    // line 232
                    if ((($__internal_compile_27 = $context["product"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["sold"] ?? null) : null)) {
                        echo " href=\"";
                        echo (($__internal_compile_28 = $context["product"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["soldlink"] ?? null) : null);
                        echo "\" ";
                    }
                    echo " style=\"text-decoration:none;\" />
                    ";
                    // line 233
                    if (((($__internal_compile_29 = $context["product"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["sold"] ?? null) : null) <= 0)) {
                        // line 234
                        echo "                    <span class=\"label label-danger\">";
                        echo (($__internal_compile_30 = $context["product"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    } elseif (((($__internal_compile_31 =                     // line 235
$context["product"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["sold"] ?? null) : null) <= 5)) {
                        // line 236
                        echo "                    <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_soldlist_info"] ?? null);
                        echo "\">";
                        echo (($__internal_compile_32 = $context["product"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    } else {
                        // line 238
                        echo "                    <span class=\"label label-success\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_soldlist_info"] ?? null);
                        echo "\">";
                        echo (($__internal_compile_33 = $context["product"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    }
                    // line 239
                    echo "</td>
                  </a>
                </td>
                <td class=\"text-right\">
                  <span class=\"text-success\">";
                    // line 243
                    echo (($__internal_compile_34 = $context["product"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["totalearn"] ?? null) : null);
                    echo "</span>
                </td>
                                
                                    ";
                    // line 246
                    if ((twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "subs_type", [], "any", false, false, false, 246) == 1)) {
                        // line 247
                        echo "                                      <td class=\"text-center\"> Piso Per Day</td>
                                        <td class=\"text-center\">";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "duration", [], "any", false, false, false, 248);
                        echo " Days</td>
                                        <td class=\"text-center\">";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_added", [], "any", false, false, false, 249);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 250
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_approved", [], "any", false, false, false, 250);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_expired", [], "any", false, false, false, 251);
                        echo "</td>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 252
($context["subscription"] ?? null), "subs_type", [], "any", false, false, false, 252) == 2)) {
                        // line 253
                        echo "                                      <td class=\"text-center\"> Piso Per Month </td>
                                        <td class=\"text-center\">";
                        // line 254
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "duration", [], "any", false, false, false, 254);
                        echo " Days</td>
                                        <td class=\"text-center\">";
                        // line 255
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_added", [], "any", false, false, false, 255);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_approved", [], "any", false, false, false, 256);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "date_expired", [], "any", false, false, false, 257);
                        echo "</td>
                                    ";
                    } else {
                        // line 259
                        echo "                                    ";
                    }
                    // line 260
                    echo "                                
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "              ";
            } else {
                // line 264
                echo "              <tr>
                <td class=\"text-center\" colspan=\"10\">";
                // line 265
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
              ";
            }
            // line 268
            echo "            </tbody>
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 273
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 274
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 277
            echo "        <div class=\"text-danger\">
          ";
            // line 278
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
        </div>
      ";
        }
        // line 281
        echo "    </fieldset>

    ";
        // line 283
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 285
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#form-product').submit(function(){
    if (\$(this).attr('action').indexOf('delete',1) != -1) {
        if (!confirm('";
        // line 292
        echo ($context["text_confirm"] ?? null);
        echo "')) {
            return false;
        }
    }
});

function filter() {
  url = 'index.php?route=account/customerpartner/productlist';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_model = \$('input[name=\\'filter_model\\']').val();

  if (filter_model) {
    url += '&filter_model=' + encodeURIComponent(filter_model);
  }

  var filter_price = \$('input[name=\\'filter_price\\']').val();

  if (filter_price) {
    url += '&filter_price=' + encodeURIComponent(filter_price);
  }

  var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

  if (filter_quantity) {
    url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  location = url;
}
//--></script>
<script type=\"text/javascript\"><!--
\$('.row input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
  delay: 500,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=customerpartner/autocomplete/product&filter_type=customerpartner_&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.name,
            value: item.product_id
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'filter_name\\']').val(item.label);
    return false;
  },
  focus: function(item) {
    return false;
  }
});

\$('input[name=\\'filter_model\\']').autocomplete({
  delay: 500,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=customerpartner/autocomplete/product&filter_type=customerpartner_&filter_model=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.model,
            value: item.product_id
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'filter_model\\']').val(item.label);
    return false;
  },
  focus: function(item) {
    return false;
  }
});
//--></script>

";
        // line 393
        if ((($context["marketplace_product_purchase_limit_qra_seller"] ?? null) || ($context["marketplace_product_purchase_limit_pra_seller"] ?? null))) {
            // line 394
            echo "<div class=\"modal fade\" id=\"mpRestriction\" role=\"dialog\" tabindex='-1'>
  <div class=\"modal-dialog modal-sm\" style=\"width:600px;\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <p class=\"modal-title\" id=\"wkmodalheader\"><h3>";
            // line 401
            echo ($context["text_rsetting"] ?? null);
            echo "</i></h3></p>
      </div>
      <div class=\"modal-body\" id=\"wkmodalbody\">
        <form class=\"form-horizontal\" id=\"form-restriction\" method=\"post\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
             <thead>
               <tr>
                 <td> ";
            // line 409
            echo ($context["text_res_based"] ?? null);
            echo "</td>
                 <td> ";
            // line 410
            echo ($context["text_res_quant"] ?? null);
            echo "</td>
                 <td> ";
            // line 411
            echo ($context["text_res_price"] ?? null);
            echo "</td>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <tr>
                   <td> ";
            // line 417
            if (($context["marketplace_product_purchase_limit_based_on"] ?? null)) {
                echo " ";
                echo ($context["text_pres_quant"] ?? null);
                echo " ";
            } else {
                echo " ";
                echo ($context["text_pres_toatl"] ?? null);
            }
            echo "</td>
                   <td> ";
            // line 418
            echo ($context["marketplace_product_purchase_limit"] ?? null);
            echo "</td>
                   <td> ";
            // line 419
            echo ($context["marketplace_product_purchase_price_limit"] ?? null);
            echo "</td>
                 </tr>
               </tr>
             </tbody>
           </table>
         </div>
        ";
            // line 425
            if (($context["marketplace_product_purchase_limit_pra_seller"] ?? null)) {
                // line 426
                echo "          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-price\"><span data-toggle=\"tooltip\" title=\"";
                // line 427
                echo ($context["help_res_price"] ?? null);
                echo "\"><strong>";
                echo ($context["entry_res_price"] ?? null);
                echo "</strong></span></label>
            <div class=\"col-sm-4\">
                <select name=\"restrcition_price_status\" class=\"form-control\" id=\"restrcition_price_status\">
                  <option value=\"1\" ";
                // line 430
                if (($context["restriction_price_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo "> ";
                echo ($context["text_enabled"] ?? null);
                echo " </option>
                  <option value=\"0\" ";
                // line 431
                if ( !($context["restriction_price_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo "> ";
                echo ($context["text_disabled"] ?? null);
                echo " </option>
                </select>
            </div>
            <div class=\"col-sm-5\">
              <div class=\"input-group\">
                <input type=\"number\" onkeypress=\"return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 \" class=\"form-control\" value=\"";
                // line 436
                echo ($context["restriction_price"] ?? null);
                echo "\" name=\"restrcition_price\" id=\"restrcition-price\">
                <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
              </div>
            </div>
          </div>
        ";
            } else {
                // line 442
                echo "          <div class=\"form-group\">
            <div class=\"col-sm-2\">
            </div>
            <div class=\"col-sm-10\">
              <h5 class=\"text-info\"> ";
                // line 446
                echo ($context["config_res_price"] ?? null);
                echo "</h5>
           </div>
         </div>
        ";
            }
            // line 450
            echo "         ";
            if (($context["marketplace_product_purchase_limit_qra_seller"] ?? null)) {
                // line 451
                echo "          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-price\"><span data-toggle=\"tooltip\" title=\"";
                // line 452
                echo ($context["help_res_quant"] ?? null);
                echo "\"><strong>";
                echo ($context["entry_res_quant"] ?? null);
                echo "</strong></span></label>
            <div class=\"col-sm-4\">
                <select name=\"restrcition_quant_status\" class=\"form-control\" id=\"restrcition-quant-status\">
                  <option value=\"1\" ";
                // line 455
                if (($context["restriction_quant_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo "> ";
                echo ($context["text_enabled"] ?? null);
                echo " </option>
                  <option value=\"0\" ";
                // line 456
                if ( !($context["restriction_quant_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo " </option>
                </select>
            </div>
            <div class=\"col-sm-5\">
              <div class=\"input-group\">
                <input type=\"number\" onkeypress=\"return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 \" class=\"form-control\" value=\"";
                // line 461
                echo ($context["restriction_quant"] ?? null);
                echo "\" name=\"restrcition_quant\" id=\"restrcition-quant\">
                <span class=\"input-group-addon\"><i class=\"fa fa-sort-numeric-asc\"></i></span>
              </div>
            </div>
          </div>
        ";
            } else {
                // line 467
                echo "          <div class=\"form-group\">
            <div class=\"col-sm-2\">
            </div>
            <div class=\"col-sm-10\">
              <h4 class=\"text-info\"> ";
                // line 471
                echo ($context["config_res_quant"] ?? null);
                echo " </h4>
           </div>
         </div>
        ";
            }
            // line 475
            echo "          <div class=\"form-group\">
            <div class=\"text-center\"><button type=\"button\" class=\"btn btn-success\" id=\"submit-config\"><i class=\"fa fa-check\"></i> ";
            // line 476
            echo ($context["button_res_submit"] ?? null);
            echo "</button></div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" id=\"button-close\" data-dismiss=\"modal\">";
            // line 481
            echo ($context["button_close"] ?? null);
            echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
   url = 'index.php?route=account/customerpartner/productlist';
  // var form_data = \$('#form-quote').serializeArray();
   const _PRICE_REGEX = /^\\d+(,\\d{3})*(\\.\\d{1,4})?\$/
   const _QUANT_REGEX = /^\\d+(,\\d{3})*?\$/
   var _pStatusThis = \$('#restrcition_price_status')
   var _priceThis = \$('#restrcition-price')
   var _qStatusThis = \$('#restrcition-quant-status')
   var _quantThis = \$('#restrcition-quant')
   var _submitButon = \$('#submit-config')
   \$(_submitButon).on('click',function() {
      // remove the error then proceed
      \$('.alert,.text-danger').remove();
      \$(_priceThis).parent().removeClass('has-error');
      \$(_quantThis).parent().removeClass('has-error');
      // store all teh input fileds values
       var priceStatus = \$(_pStatusThis).val()
       var price = \$(_priceThis).val()
       var quantStatus = \$(_qStatusThis).val()
       var quantity = \$(_quantThis).val()
       var flag = true;

       //validation for the price
       if (typeof priceStatus !== 'undefined' || typeof priceStatus !== 'null' && (typeof price !== 'undefined' || typeof price !== 'null') ) {
          if(typeof priceStatus !== 'undefined' && !_PRICE_REGEX.test(price)) {
            flag = false;
            \$(_priceThis).parent().addClass('has-error');
            \$(_priceThis).parent().after('<div class=\"text-danger\">";
            // line 513
            echo "Invalid Price value";
            echo "</div>');
          }
          if(typeof price !== 'undefined' && flag && price > 5000) {
            flag = false;
            \$(_priceThis).parent().addClass('has-error');
            \$(_priceThis).parent().after('<div class=\"text-danger\">";
            // line 518
            echo "You can not add Price Restriction amount more than 5000";
            echo "</div>');
          }
        }
        //validation for the quantity
        if (typeof quantStatus !== 'undefined' || typeof quantStatus !== 'null' && (typeof quantity !== 'undefined' || typeof quantity !== 'null') ) {

          if(typeof quantStatus !== 'undefined' && !_QUANT_REGEX.test(quantity) ) {
            flag = false;
            \$(_quantThis).parent().addClass('has-error');
            \$(_quantThis).parent().after('<div class=\"text-danger\">";
            // line 527
            echo "Invalid Quantity value";
            echo "</div>');
          }

          if(typeof quantStatus !== 'undefined' && flag && quantity > 100) {
            flag = false;
            \$(_quantThis).parent().addClass('has-error');
            \$(_quantThis).parent().after('<div class=\"text-danger\">";
            // line 533
            echo "You can not add Quantity Restriction value more than 100";
            echo "</div>');
          }  
        }
        if (flag) {
           \$.ajax({
               url: 'index.php?route=account/customerpartner/restriction/update',
               type: 'post',
               data: {priceStatus,price,quantStatus, quantity},
               // data: {name,email,iname, iemail, price, currency, product_id,form_data},
               dataType: 'json',
               beforeSend: function() {
                 // \$(_submitButon).button('loading');
               },
               complete: function() {
                   // \$(_submitButon).button('reset');
               },
               success: function(json) {
                 \$('.alert,.text-danger').remove();
                 \$(_priceThis).parent().removeClass('has-error');
                 \$(_quantThis).parent().removeClass('has-error');
                  if (json['success']) {

                       \$('#content').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                       \$('#button-close').trigger('click');
                       location = url;
                   } else if (json['error_qunat']) {
                       \$(_quantThis).parent().addClass('has-error');
                     \$(_quantThis).parent().after('<div class=\"text-danger\">";
            // line 560
            echo "Invalid Quantity value";
            echo "</div>');
                  } else if(json['error_price']) {
                      \$(_priceThis).parent().addClass('has-error');
                    \$(_priceThis).parent().after('<div class=\"text-danger\">";
            // line 563
            echo "Invalid Quantity value";
            echo "</div>');
                 }

               },
               error: function(xhr, ajaxOptions, thrownError) {
                   alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
               }
           });
        }

   })
</script>
";
        }
        // line 576
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/productlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1248 => 576,  1232 => 563,  1226 => 560,  1196 => 533,  1187 => 527,  1175 => 518,  1167 => 513,  1132 => 481,  1124 => 476,  1121 => 475,  1114 => 471,  1108 => 467,  1099 => 461,  1085 => 456,  1075 => 455,  1067 => 452,  1064 => 451,  1061 => 450,  1054 => 446,  1048 => 442,  1039 => 436,  1025 => 431,  1015 => 430,  1007 => 427,  1004 => 426,  1002 => 425,  993 => 419,  989 => 418,  978 => 417,  969 => 411,  965 => 410,  961 => 409,  950 => 401,  941 => 394,  939 => 393,  835 => 292,  825 => 285,  820 => 283,  816 => 281,  810 => 278,  807 => 277,  801 => 274,  797 => 273,  790 => 268,  784 => 265,  781 => 264,  778 => 263,  770 => 260,  767 => 259,  762 => 257,  758 => 256,  754 => 255,  750 => 254,  747 => 253,  745 => 252,  741 => 251,  737 => 250,  733 => 249,  729 => 248,  726 => 247,  724 => 246,  718 => 243,  712 => 239,  704 => 238,  696 => 236,  694 => 235,  689 => 234,  687 => 233,  679 => 232,  675 => 230,  671 => 228,  667 => 226,  663 => 224,  661 => 223,  658 => 222,  651 => 218,  647 => 217,  644 => 216,  641 => 215,  638 => 214,  635 => 213,  632 => 212,  629 => 211,  626 => 210,  623 => 209,  620 => 208,  617 => 207,  614 => 206,  611 => 205,  608 => 204,  605 => 203,  602 => 202,  600 => 201,  595 => 198,  589 => 197,  583 => 195,  581 => 194,  576 => 193,  574 => 192,  571 => 191,  565 => 190,  560 => 188,  555 => 187,  553 => 186,  549 => 185,  544 => 182,  538 => 180,  530 => 178,  528 => 177,  521 => 175,  517 => 173,  511 => 172,  505 => 170,  503 => 169,  500 => 168,  495 => 167,  493 => 166,  488 => 163,  485 => 162,  479 => 161,  472 => 156,  468 => 154,  466 => 153,  461 => 151,  456 => 150,  451 => 149,  448 => 148,  446 => 147,  443 => 146,  439 => 144,  431 => 142,  421 => 140,  418 => 139,  414 => 137,  406 => 135,  396 => 133,  393 => 132,  391 => 131,  387 => 129,  379 => 128,  369 => 126,  367 => 125,  364 => 124,  356 => 123,  346 => 121,  344 => 120,  341 => 119,  333 => 118,  323 => 116,  321 => 115,  318 => 114,  310 => 113,  300 => 111,  298 => 110,  287 => 102,  278 => 96,  274 => 94,  268 => 92,  262 => 90,  259 => 89,  253 => 87,  247 => 85,  245 => 84,  239 => 81,  228 => 75,  224 => 74,  214 => 69,  209 => 67,  198 => 61,  194 => 60,  184 => 55,  179 => 53,  173 => 49,  171 => 48,  167 => 47,  159 => 42,  153 => 41,  149 => 40,  145 => 39,  142 => 38,  138 => 36,  136 => 35,  130 => 32,  125 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  98 => 21,  94 => 20,  91 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/productlist.twig", "");
    }
}
