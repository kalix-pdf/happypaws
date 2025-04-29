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

/* __string_template__3d21569049b0553d07c932974a13c76c8cc9ae763f7e1d31d5b7fdbe73becb67 */
class __TwigTemplate_40f6565a77b2337b8c5cba4d319fa29f2695bff4628252eeb9fecc25ba615052 extends Template
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
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                <td class=\"text-left\">";
            // line 109
            if ((($context["sort"] ?? null) == "pd.name")) {
                // line 110
                echo "                  <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo twig_replace_filter(($context["column_name"] ?? null), [" " => ""]);
                echo "</a>
                  ";
            } else {
                // line 112
                echo "                  <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\">";
                echo twig_replace_filter(($context["column_name"] ?? null), [" " => ""]);
                echo "</a>
                  ";
            }
            // line 113
            echo "</td>
                <td class=\"text-left\">";
            // line 114
            if ((($context["sort"] ?? null) == "p.model")) {
                // line 115
                echo "                  <a href=\"";
                echo ($context["sort_model"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_model"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 117
                echo "                  <a href=\"";
                echo ($context["sort_model"] ?? null);
                echo "\">";
                echo ($context["column_model"] ?? null);
                echo "</a>
                  ";
            }
            // line 118
            echo "</td>
                <td class=\"text-left\">";
            // line 119
            if ((($context["sort"] ?? null) == "p.price")) {
                // line 120
                echo "                  <a href=\"";
                echo ($context["sort_price"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_price"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 122
                echo "                  <a href=\"";
                echo ($context["sort_price"] ?? null);
                echo "\">";
                echo ($context["column_price"] ?? null);
                echo "</a>
                  ";
            }
            // line 123
            echo "</td>
                <td class=\"text-right\">";
            // line 124
            if ((($context["sort"] ?? null) == "p.quantity")) {
                // line 125
                echo "                  <a href=\"";
                echo ($context["sort_quantity"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_quantity"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 127
                echo "                  <a href=\"";
                echo ($context["sort_quantity"] ?? null);
                echo "\">";
                echo ($context["column_quantity"] ?? null);
                echo "</a>
                  ";
            }
            // line 128
            echo "</td>
               <!-- membership codes starts here -->
                 ";
            // line 130
            if (array_key_exists("module_wk_seller_group_status", $context)) {
                // line 131
                echo "                  <td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "p.status")) {
                    // line 132
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 134
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                }
                // line 136
                echo "                  </td>
                ";
            } else {
                // line 138
                echo "                  <td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "p.status")) {
                    // line 139
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 141
                    echo "                    <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\">";
                    echo ($context["column_status"] ?? null);
                    echo "</a>
                    ";
                }
                // line 143
                echo "                  </td>
                ";
            }
            // line 145
            echo "                 <!-- membership codes ends here -->

                <td class=\"text-right\">";
            // line 147
            echo ($context["column_sold"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 148
            echo ($context["column_earned"] ?? null);
            echo "</td>
                <td class=\"text-right\">Subscription type</td>
                <td class=\"text-right\">Duration</td>
                <td class=\"text-right\">Date Added</td>
                ";
            // line 153
            echo "              </tr>
            </thead>
            <tbody>
              ";
            // line 156
            if ((($context["products"] ?? null) && ($context["subscriptions"] ?? null))) {
                // line 157
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 158
                    echo "              <tr>
                <td style=\"text-align: center;\">";
                    // line 159
                    if ((($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["selected"] ?? null) : null)) {
                        // line 160
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["product_id"] ?? null) : null);
                        echo "\" checked=\"checked\" />
                  ";
                    } else {
                        // line 162
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_4 = $context["product"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["product_id"] ?? null) : null);
                        echo "\" />
                  ";
                    }
                    // line 163
                    echo "</td>
                <td class=\"text-left\">
                  <img src=\"";
                    // line 165
                    echo (($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null);
                    echo "\" style=\"padding: 1px; border: 1px solid #DDDDDD;\" class=\"img-thumbnail\" />
                  &nbsp;
                  ";
                    // line 167
                    if ((($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null)) {
                        // line 168
                        echo "                    <a href=\"";
                        echo (($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["productLink"] ?? null) : null);
                        echo "\"> ";
                        echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
                        echo "</a>
                  ";
                    } else {
                        // line 170
                        echo "                    ";
                        echo (($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                        echo "
                  ";
                    }
                    // line 172
                    echo "
                </td>

                <td class=\"text-left\">";
                    // line 175
                    echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["model"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 176
                    if ((($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["special"] ?? null) : null)) {
                        // line 177
                        echo "                  <span style=\"text-decoration: line-through;\">";
                        echo (($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["price"] ?? null) : null);
                        echo "</span><br/>
                  <span class=\"text-danger\">";
                        // line 178
                        echo (($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["special"] ?? null) : null);
                        echo "</span>
                  ";
                    } else {
                        // line 180
                        echo "                  ";
                        echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["price"] ?? null) : null);
                        echo "
                  ";
                    }
                    // line 181
                    echo "</td>
                <td class=\"text-right\">";
                    // line 182
                    if (((($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["quantity"] ?? null) : null) <= 0)) {
                        // line 183
                        echo "                  <span class=\"label label-warning\">";
                        echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    } elseif (((($__internal_compile_18 =                     // line 184
$context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["quantity"] ?? null) : null) <= ($context["low_stock_quantity"] ?? null))) {
                        // line 185
                        echo "                  <span class=\"label label-danger\">";
                        echo (($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    } else {
                        // line 187
                        echo "                  <span class=\"label label-success\">";
                        echo (($__internal_compile_20 = $context["product"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["quantity"] ?? null) : null);
                        echo "</span>
                  ";
                    }
                    // line 188
                    echo "</td>

                   <!-- Membership code -->
                ";
                    // line 191
                    $context["status"] = "Undefined status";
                    // line 192
                    echo "                ";
                    if (array_key_exists("module_wk_seller_group_status", $context)) {
                        // line 193
                        echo "                  ";
                        if (((($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["current_status"] ?? null) : null) == "active")) {
                            // line 194
                            echo "                  ";
                            $context["bg_color"] = "text-success bg-success";
                            // line 195
                            echo "                  ";
                            $context["status"] = "active";
                            // line 196
                            echo "                  ";
                        } elseif (((($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["current_status"] ?? null) : null) == "inactive")) {
                            // line 197
                            echo "                  ";
                            $context["bg_color"] = "text-warning bg-warning";
                            // line 198
                            echo "                  ";
                            $context["status"] = "In-active";
                            // line 199
                            echo "                  ";
                        } elseif (((($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["current_status"] ?? null) : null) == "expired")) {
                            // line 200
                            echo "                  ";
                            $context["bg_color"] = "text-info bg-info";
                            // line 201
                            echo "                  ";
                            $context["status"] = "Expired";
                            // line 202
                            echo "                  ";
                        } elseif (((($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["current_status"] ?? null) : null) == "disabled")) {
                            // line 203
                            echo "                  ";
                            $context["bg_color"] = "text-danger bg-danger";
                            // line 204
                            echo "                  ";
                            $context["status"] = ($context["text_disabled"] ?? null);
                            // line 205
                            echo "                  ";
                        }
                        // line 206
                        echo "
                  <td class=\"text-left ";
                        // line 207
                        echo ($context["bg_color"] ?? null);
                        echo "\">
                    ";
                        // line 208
                        echo ($context["status"] ?? null);
                        echo "
                  </td>

                ";
                    } else {
                        // line 212
                        echo "                <td class=\"text-left\">";
                        echo (((($__internal_compile_25 = $context["product"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["status"] ?? null) : null)) ? ("Approved") : ("Approval Pending"));
                        echo "</td>
                ";
                    }
                    // line 214
                    echo "                <!--  -->
                <td class=\"text-right\">
                  <a ";
                    // line 216
                    if ((($__internal_compile_26 = $context["product"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["sold"] ?? null) : null)) {
                        echo " href=\"";
                        echo (($__internal_compile_27 = $context["product"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["soldlink"] ?? null) : null);
                        echo "\" ";
                    }
                    echo " style=\"text-decoration:none;\" />
                    ";
                    // line 217
                    if (((($__internal_compile_28 = $context["product"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["sold"] ?? null) : null) <= 0)) {
                        // line 218
                        echo "                    <span class=\"label label-danger\">";
                        echo (($__internal_compile_29 = $context["product"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    } elseif (((($__internal_compile_30 =                     // line 219
$context["product"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["sold"] ?? null) : null) <= 5)) {
                        // line 220
                        echo "                    <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_soldlist_info"] ?? null);
                        echo "\">";
                        echo (($__internal_compile_31 = $context["product"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    } else {
                        // line 222
                        echo "                    <span class=\"label label-success\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_soldlist_info"] ?? null);
                        echo "\">";
                        echo (($__internal_compile_32 = $context["product"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["sold"] ?? null) : null);
                        echo "</span>
                    ";
                    }
                    // line 223
                    echo "</td>
                  </a>
                </td>
                <td class=\"text-right\">
                  <span class=\"text-success\">";
                    // line 227
                    echo (($__internal_compile_33 = $context["product"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["totalearn"] ?? null) : null);
                    echo "</span>
                </td>

                  ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subscriptions"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                        // line 231
                        echo "                      <td class=\"text-center\">
                          ";
                        // line 232
                        if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 232) == 1)) {
                            // line 233
                            echo "                              Piso Per Day
                          ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 234
$context["subscription"], "subs_type", [], "any", false, false, false, 234) == 2)) {
                            // line 235
                            echo "                              Piso Per Month
                          ";
                        } else {
                            // line 237
                            echo "                              Unknown
                          ";
                        }
                        // line 239
                        echo "                      </td>
                        <td class=\"text-center\">";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "duration", [], "any", false, false, false, 240);
                        echo "</td>
                        <td>";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 241);
                        echo "</td>
            
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    echo "                <!-- membership codes starts here -->
                ";
                    // line 292
                    echo "                 <!-- membership codes ends here -->
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "              ";
            } else {
                // line 296
                echo "              <tr>
                <td class=\"text-center\" colspan=\"10\">";
                // line 297
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
              ";
            }
            // line 300
            echo "            </tbody>
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 305
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 306
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 309
            echo "        <div class=\"text-danger\">
          ";
            // line 310
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
        </div>
      ";
        }
        // line 313
        echo "    </fieldset>

    ";
        // line 315
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 317
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#form-product').submit(function(){
    if (\$(this).attr('action').indexOf('delete',1) != -1) {
        if (!confirm('";
        // line 324
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
        // line 425
        if ((($context["marketplace_product_purchase_limit_qra_seller"] ?? null) || ($context["marketplace_product_purchase_limit_pra_seller"] ?? null))) {
            // line 426
            echo "<div class=\"modal fade\" id=\"mpRestriction\" role=\"dialog\" tabindex='-1'>
  <div class=\"modal-dialog modal-sm\" style=\"width:600px;\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <p class=\"modal-title\" id=\"wkmodalheader\"><h3>";
            // line 433
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
            // line 441
            echo ($context["text_res_based"] ?? null);
            echo "</td>
                 <td> ";
            // line 442
            echo ($context["text_res_quant"] ?? null);
            echo "</td>
                 <td> ";
            // line 443
            echo ($context["text_res_price"] ?? null);
            echo "</td>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <tr>
                   <td> ";
            // line 449
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
            // line 450
            echo ($context["marketplace_product_purchase_limit"] ?? null);
            echo "</td>
                   <td> ";
            // line 451
            echo ($context["marketplace_product_purchase_price_limit"] ?? null);
            echo "</td>
                 </tr>
               </tr>
             </tbody>
           </table>
         </div>
        ";
            // line 457
            if (($context["marketplace_product_purchase_limit_pra_seller"] ?? null)) {
                // line 458
                echo "          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-price\"><span data-toggle=\"tooltip\" title=\"";
                // line 459
                echo ($context["help_res_price"] ?? null);
                echo "\"><strong>";
                echo ($context["entry_res_price"] ?? null);
                echo "</strong></span></label>
            <div class=\"col-sm-4\">
                <select name=\"restrcition_price_status\" class=\"form-control\" id=\"restrcition_price_status\">
                  <option value=\"1\" ";
                // line 462
                if (($context["restriction_price_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo "> ";
                echo ($context["text_enabled"] ?? null);
                echo " </option>
                  <option value=\"0\" ";
                // line 463
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
                // line 468
                echo ($context["restriction_price"] ?? null);
                echo "\" name=\"restrcition_price\" id=\"restrcition-price\">
                <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
              </div>
            </div>
          </div>
        ";
            } else {
                // line 474
                echo "          <div class=\"form-group\">
            <div class=\"col-sm-2\">
            </div>
            <div class=\"col-sm-10\">
              <h5 class=\"text-info\"> ";
                // line 478
                echo ($context["config_res_price"] ?? null);
                echo "</h5>
           </div>
         </div>
        ";
            }
            // line 482
            echo "         ";
            if (($context["marketplace_product_purchase_limit_qra_seller"] ?? null)) {
                // line 483
                echo "          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-price\"><span data-toggle=\"tooltip\" title=\"";
                // line 484
                echo ($context["help_res_quant"] ?? null);
                echo "\"><strong>";
                echo ($context["entry_res_quant"] ?? null);
                echo "</strong></span></label>
            <div class=\"col-sm-4\">
                <select name=\"restrcition_quant_status\" class=\"form-control\" id=\"restrcition-quant-status\">
                  <option value=\"1\" ";
                // line 487
                if (($context["restriction_quant_status"] ?? null)) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo "> ";
                echo ($context["text_enabled"] ?? null);
                echo " </option>
                  <option value=\"0\" ";
                // line 488
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
                // line 493
                echo ($context["restriction_quant"] ?? null);
                echo "\" name=\"restrcition_quant\" id=\"restrcition-quant\">
                <span class=\"input-group-addon\"><i class=\"fa fa-sort-numeric-asc\"></i></span>
              </div>
            </div>
          </div>
        ";
            } else {
                // line 499
                echo "          <div class=\"form-group\">
            <div class=\"col-sm-2\">
            </div>
            <div class=\"col-sm-10\">
              <h4 class=\"text-info\"> ";
                // line 503
                echo ($context["config_res_quant"] ?? null);
                echo " </h4>
           </div>
         </div>
        ";
            }
            // line 507
            echo "          <div class=\"form-group\">
            <div class=\"text-center\"><button type=\"button\" class=\"btn btn-success\" id=\"submit-config\"><i class=\"fa fa-check\"></i> ";
            // line 508
            echo ($context["button_res_submit"] ?? null);
            echo "</button></div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" id=\"button-close\" data-dismiss=\"modal\">";
            // line 513
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
            // line 545
            echo "Invalid Price value";
            echo "</div>');
          }
          if(typeof price !== 'undefined' && flag && price > 5000) {
            flag = false;
            \$(_priceThis).parent().addClass('has-error');
            \$(_priceThis).parent().after('<div class=\"text-danger\">";
            // line 550
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
            // line 559
            echo "Invalid Quantity value";
            echo "</div>');
          }

          if(typeof quantStatus !== 'undefined' && flag && quantity > 100) {
            flag = false;
            \$(_quantThis).parent().addClass('has-error');
            \$(_quantThis).parent().after('<div class=\"text-danger\">";
            // line 565
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
            // line 592
            echo "Invalid Quantity value";
            echo "</div>');
                  } else if(json['error_price']) {
                      \$(_priceThis).parent().addClass('has-error');
                    \$(_priceThis).parent().after('<div class=\"text-danger\">";
            // line 595
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
        // line 608
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__3d21569049b0553d07c932974a13c76c8cc9ae763f7e1d31d5b7fdbe73becb67";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1201 => 608,  1185 => 595,  1179 => 592,  1149 => 565,  1140 => 559,  1128 => 550,  1120 => 545,  1085 => 513,  1077 => 508,  1074 => 507,  1067 => 503,  1061 => 499,  1052 => 493,  1038 => 488,  1028 => 487,  1020 => 484,  1017 => 483,  1014 => 482,  1007 => 478,  1001 => 474,  992 => 468,  978 => 463,  968 => 462,  960 => 459,  957 => 458,  955 => 457,  946 => 451,  942 => 450,  931 => 449,  922 => 443,  918 => 442,  914 => 441,  903 => 433,  894 => 426,  892 => 425,  788 => 324,  778 => 317,  773 => 315,  769 => 313,  763 => 310,  760 => 309,  754 => 306,  750 => 305,  743 => 300,  737 => 297,  734 => 296,  731 => 295,  723 => 292,  720 => 244,  711 => 241,  707 => 240,  704 => 239,  700 => 237,  696 => 235,  694 => 234,  691 => 233,  689 => 232,  686 => 231,  682 => 230,  676 => 227,  670 => 223,  662 => 222,  654 => 220,  652 => 219,  647 => 218,  645 => 217,  637 => 216,  633 => 214,  627 => 212,  620 => 208,  616 => 207,  613 => 206,  610 => 205,  607 => 204,  604 => 203,  601 => 202,  598 => 201,  595 => 200,  592 => 199,  589 => 198,  586 => 197,  583 => 196,  580 => 195,  577 => 194,  574 => 193,  571 => 192,  569 => 191,  564 => 188,  558 => 187,  552 => 185,  550 => 184,  545 => 183,  543 => 182,  540 => 181,  534 => 180,  529 => 178,  524 => 177,  522 => 176,  518 => 175,  513 => 172,  507 => 170,  499 => 168,  497 => 167,  490 => 165,  486 => 163,  480 => 162,  474 => 160,  472 => 159,  469 => 158,  464 => 157,  462 => 156,  457 => 153,  450 => 148,  446 => 147,  442 => 145,  438 => 143,  430 => 141,  420 => 139,  417 => 138,  413 => 136,  405 => 134,  395 => 132,  392 => 131,  390 => 130,  386 => 128,  378 => 127,  368 => 125,  366 => 124,  363 => 123,  355 => 122,  345 => 120,  343 => 119,  340 => 118,  332 => 117,  322 => 115,  320 => 114,  317 => 113,  309 => 112,  299 => 110,  297 => 109,  287 => 102,  278 => 96,  274 => 94,  268 => 92,  262 => 90,  259 => 89,  253 => 87,  247 => 85,  245 => 84,  239 => 81,  228 => 75,  224 => 74,  214 => 69,  209 => 67,  198 => 61,  194 => 60,  184 => 55,  179 => 53,  173 => 49,  171 => 48,  167 => 47,  159 => 42,  153 => 41,  149 => 40,  145 => 39,  142 => 38,  138 => 36,  136 => 35,  130 => 32,  125 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  98 => 21,  94 => 20,  91 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3d21569049b0553d07c932974a13c76c8cc9ae763f7e1d31d5b7fdbe73becb67", "");
    }
}
