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

/* customerpartner/product_list.twig */
class __TwigTemplate_017da3cecdcb591a84554ce26c1890006dcdb1c5eabfe06da80f2a880fdb4c16 extends Template
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
  <style type=\"text/css\">
    @media screen and (max-width: 786px) {
      #productImage {
        width: 100%;
      }
      #preview-image-container {
        width: 100%;
      }
    }

  </style>
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 17
        echo ($context["insert"] ?? null);
        echo "\" id=\"insert\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-plus\"></i>
        </a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 20
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\">
          <i class=\"fa fa-trash-o\"></i>
        </button>
      </div>
      <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
            echo "          <li>
            <a href=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 28);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 36
        if (($context["error_warning"] ?? null)) {
            // line 37
            echo "      <div class=\"alert alert-danger\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 43
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 44
            echo "      <div class=\"alert alert-success\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 46
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 50
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-list\"></i>
          ";
        // line 55
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-seller\">";
        // line 63
        echo ($context["column_partner_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_seller\" value=\"";
        // line 65
        echo ($context["filter_seller"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_partner_name"] ?? null);
        echo "\" id=\"input-seller\" class=\"form-control\"/>
                  <span class=\"input-group-addon\">
                    <span class=\"fa fa-angle-double-down\"></span>
                  </span>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-price\">";
        // line 73
        echo ($context["column_price"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_price\" value=\"";
        // line 74
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 80
        echo ($context["column_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 82
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <span class=\"input-group-addon\">
                    <span class=\"fa fa-angle-double-down\"></span>
                  </span>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-model\">";
        // line 90
        echo ($context["column_model"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_model\" value=\"";
        // line 92
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  <span class=\"input-group-addon\">
                    <span class=\"fa fa-angle-double-down\"></span>
                  </span>
                </div>
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 102
        echo ($context["column_quantity"] ?? null);
        echo "</label>
                <input type='text' name=\"filter_quantity\" value=\"";
        // line 103
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 107
        echo ($context["column_status"] ?? null);
        echo "</label>

                <select name=\"filter_status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 111
        if (($context["filter_status"] ?? null)) {
            // line 112
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 114
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 116
        echo "                  ";
        if (((($context["filter_status"] ?? null) != null) &&  !($context["filter_status"] ?? null))) {
            // line 117
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 119
            echo "                    <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 121
        echo "                </select>
              </div>

              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\">
                <i class=\"fa fa-search\"></i>
                ";
        // line 126
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>

          </div>
        </div>

        <form action=\"";
        // line 132
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td width=\"2%\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 139
        if ((($context["sort"] ?? null) == "c.customer_id")) {
            // line 140
            echo "                      <a href=\"";
            echo ($context["sort_seller_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_partner_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 142
            echo "                      <a href=\"";
            echo ($context["sort_seller_name"] ?? null);
            echo "\">";
            echo ($context["column_partner_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 144
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">";
        // line 145
        echo ($context["column_image"] ?? null);
        echo "</td>
                  <td width=\"20%\" class=\"text-center\">
                    ";
        // line 147
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 148
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 150
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 152
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 154
        if ((($context["sort"] ?? null) == "p.model")) {
            // line 155
            echo "                      <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 157
            echo "                      <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                    ";
        }
        // line 159
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 161
        if ((($context["sort"] ?? null) == "p.price")) {
            // line 162
            echo "                      <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 164
            echo "                      <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                    ";
        }
        // line 166
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 168
        if ((($context["sort"] ?? null) == "p.quantity")) {
            // line 169
            echo "                      <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 171
            echo "                      <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                    ";
        }
        // line 173
        echo "                  </td>
                  <td width=\"5%\" class=\"text-center\">
                    ";
        // line 175
        if ((($context["sort"] ?? null) == "p.product_id")) {
            // line 176
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 178
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 180
        echo "                  </td>
                  <td width=\"12%\" class=\"text-center\">Subscription Type</td>
                  <td width=\"12%\" class=\"text-center\">Date Added</td>
                  <td width=\"12%\" class=\"text-center\">Duration</td>
                  <td width=\"12%\" class=\"text-center\">Date Expired</td>
                  <td width=\"12%\" class=\"text-center\">";
        // line 185
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 189
        if (($context["products"] ?? null)) {
            // line 190
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 191
                echo "                  <tr>
                    <td style=\"text-align: center;\">
                      ";
                // line 193
                if ((($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 194
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["product_id"] ?? null) : null);
                    echo "\" checked=\"checked\"/>
                      ";
                } else {
                    // line 196
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["product_id"] ?? null) : null);
                    echo "\"/>
                      ";
                }
                // line 198
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 200
                if (($context["partners"] ?? null)) {
                    // line 201
                    echo "                        <div class=\"form-group\">
                          <div class=\"input-group\">
                              <span class=\"fa fa-user\"></span>
                              ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                        // line 205
                        echo "                                ";
                        if (((($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["customer_id"] ?? null) : null) == (($__internal_compile_4 = $context["partner"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["customer_id"] ?? null) : null))) {
                            // line 206
                            echo "                                  ";
                            echo (($__internal_compile_5 = $context["partner"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                            echo "
                                ";
                        }
                        // line 208
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "                            ";
                    // line 219
                    echo "                          </div>
                        </div>
                      ";
                }
                // line 222
                echo "                    </td>
                    <td class=\"text-center\"><img src=\"";
                // line 223
                echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["image"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                echo "\" style=\"padding: 1px; border: 1px solid #DDDDDD;\"/></td>
                    <td class=\"text-center\">";
                // line 224
                echo (($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">";
                // line 225
                echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["model"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">
                      ";
                // line 227
                if ((($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["special"] ?? null) : null)) {
                    // line 228
                    echo "                        <span style=\"text-decoration: line-through;\">";
                    echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["price"] ?? null) : null);
                    echo "</span><br/>
                        <span class=\"text-danger\">";
                    // line 229
                    echo (($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["special"] ?? null) : null);
                    echo "</span>
                      ";
                } else {
                    // line 231
                    echo "                        ";
                    echo (($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["price"] ?? null) : null);
                    echo "
                      ";
                }
                // line 233
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 235
                if (((($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["quantity"] ?? null) : null) <= 0)) {
                    // line 236
                    echo "                        <span class=\"label label-warning\">";
                    echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                } elseif (((($__internal_compile_16 =                 // line 237
$context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["quantity"] ?? null) : null) <= ($context["low_stock_quantity"] ?? null))) {
                    // line 238
                    echo "                        <span class=\"label label-danger\">";
                    echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                } else {
                    // line 240
                    echo "                        <span class=\"label label-success\">";
                    echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                }
                // line 242
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 244
                if ((($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null)) {
                    // line 245
                    echo "                      <a data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_approve"] ?? null);
                    echo "\" class=\"btn btn-success\">
                        <i class=\"fa fa-thumbs-o-up\"></i>
                      </a>
                      ";
                } else {
                    // line 249
                    echo "                       <a data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_disapprove"] ?? null);
                    echo "\" class=\"btn btn-warning cp-pro-status\" cp-pro-id=\"";
                    echo (($__internal_compile_20 = $context["product"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["product_id"] ?? null) : null);
                    echo "\">
                        <i class=\"fa fa-thumbs-o-up\"></i>
                      </a>
                      ";
                }
                // line 253
                echo "                    </td>
                      ";
                // line 254
                $context["product_subs"] = (($__internal_compile_21 = ($context["subscriptions"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 254)] ?? null) : null);
                // line 255
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_subs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                    echo "                    
                      <td class=\"text-center\">
                        ";
                    // line 257
                    if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 257) == 1)) {
                        // line 258
                        echo "                          Piso Per Day
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 259
$context["subscription"], "subs_type", [], "any", false, false, false, 259) == 2)) {
                        // line 260
                        echo "                          Piso Per Month
                        ";
                    } else {
                        // line 262
                        echo "                          Commission
                        ";
                    }
                    // line 264
                    echo "                      </td>
                      <td class=\"text-center\">";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 265);
                    echo "</td>
                      ";
                    // line 266
                    if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 266) == 3)) {
                        // line 267
                        echo "                        <td class=\"text-center\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "duration", [], "any", false, false, false, 267);
                        echo "% commission</td>
                      ";
                    } else {
                        // line 269
                        echo "                        <td class=\"text-center\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "duration", [], "any", false, false, false, 269);
                        echo " days</td>
                      ";
                    }
                    // line 271
                    echo "                      <td class=\"text-center\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_expired", [], "any", false, false, false, 271);
                    echo "</td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                    <td class=\"text-center\">
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"Product preview\" class=\"btn btn-warning previewButton\" data-product-id=\"";
                // line 274
                echo (($__internal_compile_22 = $context["product"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["product_id"] ?? null) : null);
                echo "\" data-product-status=\"";
                echo (($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["status"] ?? null) : null);
                echo "\">
                        <i class=\"fa fa-eye\"></i>
                      </button>

                      <div class=\"btn-group\" data-toggle=\"tooltip\" title=\"Live Product Preview\">
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\">
                          <i class=\"fa fa-television\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                          ";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 284
                    echo "                            <li>
                              <a href=\"";
                    // line 285
                    echo (($__internal_compile_24 = $context["store"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["url"] ?? null) : null);
                    echo "/index.php?route=product/product&user_token=";
                    echo ($context["user_token"] ?? null);
                    echo "&product_id=";
                    echo (($__internal_compile_25 = $context["product"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["product_id"] ?? null) : null);
                    echo "&store_id=";
                    echo (($__internal_compile_26 = $context["store"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["store_id"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_27 = $context["store"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["name"] ?? null) : null);
                    echo "</a>
                            </li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "                        </ul>
                      </div>

                      ";
                // line 296
                echo "                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "                ";
        } else {
            // line 300
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"9\">";
            // line 301
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 304
        echo "              </tbody>
            </table>
          </div>
        </form>

        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 310
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 311
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>

    <div id=\"productPreviewModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
            <h4>";
        // line 323
        echo "Product Preview";
        echo "</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"img-thumbnail\" id=\"preview-image-container\">
                  <img id=\"productImage\" src=\"\">
                </div>
              </div>
              <div class=\"col-sm-6\">
                <ul class=\"list-group\">
                  <li class=\"list-group-item\" id=\"productName\"></li>
                  <li class=\"list-group-item\" id=\"productModel\"></li>
                  <li class=\"list-group-item\" id=\"ProductPrice\"></li>
                  <li class=\"list-group-item\" id=\"productQuantity\"></li>
                  <li class=\"list-group-item\" id=\"productAvailability\"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"modalButton\" class=\"btn btn-success cp-pro-status\" cp-pro-id=\"\">
                <i class=\"fa fa-thumbs-o-up\"></i>
              </button>
              <button class=\"btn btn-default\" type=\"button\" data-dismiss=\"modal\">
                ";
        // line 349
        echo "close";
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type=\"text/javascript\">
      \$('.previewButton').on('click', function() {
        var caller = \$(this);
        product_id = \$(this).data('product-id');
        product_status = \$(this).data('product-status');
        \$('#modalButton').attr({'cp-pro-id': product_id});
        if (product_status) {
          \$('#modalButton').attr('disabled', true);
        } else {
          \$('#modalButton').removeAttr('disabled');
        }

        \$.ajax({
          url: 'index.php?route=customerpartner/product/getProduct&user_token=";
        // line 369
        echo ($context["user_token"] ?? null);
        echo "',
          data: {
            product_id: product_id
          },
          method: 'post',
          dataType: 'json',
          beforeSend: function() {
            caller.attr('disabled', true).children('i').removeClass('fa-eye').addClass('fa-spinner fa-spin');
          },
          success: function(product) {
            if (product.image) {
              \$('#productImage').attr({'src': product.image, 'alt': product.name});
            } else {
              \$('#productImage').attr({'src': '../image/no_image.png', 'alt': product.name});
            }
            \$('#productName').text('";
        // line 384
        echo (($context["column_name"] ?? null) . " : ");
        echo "' + product.product_name);
            \$('#productModel').text('";
        // line 385
        echo (($context["column_model"] ?? null) . " : ");
        echo "' + product.model);
            \$('#ProductPrice').text('";
        // line 386
        echo (($context["column_price"] ?? null) . " : ");
        echo "' + product.price);
            // \$('#Productspecial').text('";
        // line 387
        echo (($context["column_price"] ?? null) . " : ");
        echo "'+product.price);
            \$('#productQuantity').text('";
        // line 388
        echo (($context["column_quantity"] ?? null) . " : ");
        echo "' + product.quantity);
            if (product.quantity < 1) {
              \$('#productAvailability').show();
              \$('#productAvailability').text('";
        // line 391
        echo (($context["column_availability"] ?? null) . " : ");
        echo "' + product.stock_status_name);
            } else {
              \$('#productAvailability').hide();
            }
            caller.removeAttr('disabled').children('i').removeClass('fa-spinner fa-spin').addClass('fa-eye');
            \$('#productPreviewModal').modal();
          }
        });
      });
    </script>

    <script type=\"text/javascript\">
      <!--
      function filter() {
        url = 'index.php?route=customerpartner/product&user_token=";
        // line 405
        echo ($context["user_token"] ?? null);
        echo "';

        var filter_name = \$('input[name=\\'filter_name\\']').val();

        if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
        }

        var filter_seller = \$('input[name=\\'filter_seller\\']').val();

        if (filter_seller) {
          url += '&filter_seller=' + encodeURIComponent(filter_seller);
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

      //-->
    </script>
    <script type=\"text/javascript\">
      <!--
      \$('#form input').keydown(function(e) {
        if (e.keyCode == 13) {
          filter();
        }
      });

      //-->
    </script>
    <script type=\"text/javascript\">
      <!--
      \$('input[name=\\'filter_name\\']').autocomplete({
        delay: 0,
        source: function(request, response) {
          \$.ajax({
            url: 'index.php?route=customerpartner/product/autocomplete&user_token=";
        // line 464
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
              response(\$.map(json, function(item) {
                return {label: item.name, value: item.product_id}
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
        delay: 0,
        source: function(request, response) {
          \$.ajax({
            url: 'index.php?route=customerpartner/product/autocomplete&user_token=";
        // line 487
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
              response(\$.map(json, function(item) {
                return {label: item.model, value: item.product_id}
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

      \$('input[name=\\'filter_seller\\']').autocomplete({
        delay: 0,
        source: function(request, response) {
          \$.ajax({
            url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 510
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
              response(\$.map(json, function(item) {
                return {label: item.name, value: item.id}
              }));
            }
          });
        },
        select: function(item) {
          \$('input[name=\\'filter_seller\\']').val(item.label);

          return false;
        },
        focus: function(item) {
          return false;
        }
      });

      //change product seller after change seller
      \$('.partner_change').on('change', function() {
        thisthis = this;
        \$('.alert').remove();
        spanHtml = \$(this).prev().html();
        \$(this).prev().html('<i class=\"fa fa-spinner fa-spin\"></i>');

        \$.ajax({
          url: 'index.php?route=customerpartner/partner/updateProductSeller&user_token=";
        // line 537
        echo ($context["user_token"] ?? null);
        echo "',
          data: 'product_id=' + encodeURIComponent(\$(this).parents('td').prev('td').children('input').val()) + '&partner_id=' + encodeURIComponent(this.value),
          dataType: 'json',
          success: function(json) {
            html = '';
            if (json['success']) {
              html = '<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'];
              html += '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>';
              html += '</div>';
            } else if (json['error']) {
              html = '<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['success'];
              html += '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>';
              html += '</div>';
            }
            \$('.panel').before(html);
            \$(thisthis).prev().html(spanHtml);

          }
        });
      });

      //-->
    </script>
    <script>
      <!--//
(function(\$wk_jq) {
\t\$wk_jq('.cp-pro-status').on('click', function(){
\t\tif(confirm(\"";
        // line 564
        echo ($context["text_confirm_approve"] ?? null);
        echo "\")){
  \t\turl = '";
        // line 565
        echo ($context["approve"] ?? null);
        echo "&product_id='+\$wk_jq(this).attr('cp-pro-id');
      \$wk_jq('#insert').attr('href',url).trigger('click');
      location = url;
\t\t}
\t});
})(jQuery);
//-->
    </script>
    ";
        // line 573
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1049 => 573,  1038 => 565,  1034 => 564,  1004 => 537,  974 => 510,  948 => 487,  922 => 464,  860 => 405,  843 => 391,  837 => 388,  833 => 387,  829 => 386,  825 => 385,  821 => 384,  803 => 369,  780 => 349,  751 => 323,  736 => 311,  732 => 310,  724 => 304,  718 => 301,  715 => 300,  712 => 299,  704 => 296,  699 => 288,  682 => 285,  679 => 284,  675 => 283,  661 => 274,  658 => 273,  649 => 271,  643 => 269,  637 => 267,  635 => 266,  631 => 265,  628 => 264,  624 => 262,  620 => 260,  618 => 259,  615 => 258,  613 => 257,  605 => 255,  603 => 254,  600 => 253,  590 => 249,  582 => 245,  580 => 244,  576 => 242,  570 => 240,  564 => 238,  562 => 237,  557 => 236,  555 => 235,  551 => 233,  545 => 231,  540 => 229,  535 => 228,  533 => 227,  528 => 225,  524 => 224,  518 => 223,  515 => 222,  510 => 219,  508 => 209,  502 => 208,  496 => 206,  493 => 205,  489 => 204,  484 => 201,  482 => 200,  478 => 198,  472 => 196,  466 => 194,  464 => 193,  460 => 191,  455 => 190,  453 => 189,  446 => 185,  439 => 180,  431 => 178,  421 => 176,  419 => 175,  415 => 173,  407 => 171,  397 => 169,  395 => 168,  391 => 166,  383 => 164,  373 => 162,  371 => 161,  367 => 159,  359 => 157,  349 => 155,  347 => 154,  343 => 152,  335 => 150,  325 => 148,  323 => 147,  318 => 145,  315 => 144,  307 => 142,  297 => 140,  295 => 139,  285 => 132,  276 => 126,  269 => 121,  263 => 119,  257 => 117,  254 => 116,  248 => 114,  242 => 112,  240 => 111,  233 => 107,  224 => 103,  220 => 102,  205 => 92,  200 => 90,  187 => 82,  182 => 80,  171 => 74,  167 => 73,  154 => 65,  149 => 63,  138 => 55,  131 => 50,  124 => 46,  120 => 44,  117 => 43,  110 => 39,  106 => 37,  104 => 36,  97 => 31,  86 => 28,  83 => 27,  79 => 26,  74 => 24,  65 => 20,  57 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/product_list.twig", "");
    }
}
