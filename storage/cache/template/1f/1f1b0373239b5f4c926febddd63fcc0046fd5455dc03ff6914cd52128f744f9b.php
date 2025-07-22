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
class __TwigTemplate_614a5439be75b7e1bd7bdce06ce15ac4cf485d6ece633e35165776fa65cf292d extends Template
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
  <script>
console.log('Approve URL:', '";
        // line 35
        echo ($context["approve"] ?? null);
        echo "');
console.log('Reject URL:', '";
        // line 36
        echo ($context["reject"] ?? null);
        echo "');
console.log('Confirm text:', '";
        // line 37
        echo ($context["text_confirm_reject"] ?? null);
        echo "');
</script>

  <div class=\"container-fluid\">
    ";
        // line 41
        if (($context["error_warning"] ?? null)) {
            // line 42
            echo "      <div class=\"alert alert-danger\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 44
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 48
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 49
            echo "      <div class=\"alert alert-success\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 51
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 55
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-list\"></i>
          ";
        // line 60
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-seller\">";
        // line 68
        echo ($context["column_partner_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_seller\" value=\"";
        // line 70
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
        // line 78
        echo ($context["column_price"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_price\" value=\"";
        // line 79
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 85
        echo ($context["column_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 87
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
        // line 95
        echo ($context["column_model"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_model\" value=\"";
        // line 97
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
        // line 107
        echo ($context["column_quantity"] ?? null);
        echo "</label>
                <input type='text' name=\"filter_quantity\" value=\"";
        // line 108
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 112
        echo ($context["column_status"] ?? null);
        echo "</label>

                <select name=\"filter_status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 116
        if (($context["filter_status"] ?? null)) {
            // line 117
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 119
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 121
        echo "                  ";
        if (((($context["filter_status"] ?? null) != null) &&  !($context["filter_status"] ?? null))) {
            // line 122
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 124
            echo "                    <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 126
        echo "                </select>
              </div>

              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\">
                <i class=\"fa fa-search\"></i>
                ";
        // line 131
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>

          </div>
        </div>

        <form action=\"";
        // line 137
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td width=\"2%\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 144
        if ((($context["sort"] ?? null) == "c.customer_id")) {
            // line 145
            echo "                      <a href=\"";
            echo ($context["sort_seller_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_partner_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 147
            echo "                      <a href=\"";
            echo ($context["sort_seller_name"] ?? null);
            echo "\">";
            echo ($context["column_partner_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 149
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">";
        // line 150
        echo ($context["column_image"] ?? null);
        echo "</td>
                  <td width=\"20%\" class=\"text-center\">
                    ";
        // line 152
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 153
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 155
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 157
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 159
        if ((($context["sort"] ?? null) == "p.model")) {
            // line 160
            echo "                      <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 162
            echo "                      <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>
                    ";
        }
        // line 164
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 166
        if ((($context["sort"] ?? null) == "p.price")) {
            // line 167
            echo "                      <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 169
            echo "                      <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>
                    ";
        }
        // line 171
        echo "                  </td>
                  <td width=\"10%\" class=\"text-center\">
                    ";
        // line 173
        if ((($context["sort"] ?? null) == "p.quantity")) {
            // line 174
            echo "                      <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 176
            echo "                      <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>
                    ";
        }
        // line 178
        echo "                  </td>
                  <td width=\"5%\" class=\"text-center\">
                    ";
        // line 180
        if ((($context["sort"] ?? null) == "p.product_id")) {
            // line 181
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 183
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 185
        echo "                  </td>
                  <td width=\"12%\" class=\"text-center\">Subscription Type</td>
                  <td width=\"12%\" class=\"text-center\">Date Added</td>
                  <td width=\"12%\" class=\"text-center\">Duration</td>
                  <td width=\"12%\" class=\"text-center\">Date Expired</td>
                  <td width=\"12%\" class=\"text-center\">";
        // line 190
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 194
        if (($context["products"] ?? null)) {
            // line 195
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 196
                echo "                  <tr>
                    <td style=\"text-align: center;\">
                      ";
                // line 198
                if ((($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 199
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["product_id"] ?? null) : null);
                    echo "\" checked=\"checked\"/>
                      ";
                } else {
                    // line 201
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["product_id"] ?? null) : null);
                    echo "\"/>
                      ";
                }
                // line 203
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 205
                if (($context["partners"] ?? null)) {
                    // line 206
                    echo "                        <div class=\"form-group\">
                          <div class=\"input-group\">
                              <span class=\"fa fa-user\"></span>
                              ";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                        // line 210
                        echo "                                ";
                        if (((($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["customer_id"] ?? null) : null) == (($__internal_compile_4 = $context["partner"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["customer_id"] ?? null) : null))) {
                            // line 211
                            echo "                                  ";
                            echo (($__internal_compile_5 = $context["partner"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                            echo "
                                ";
                        }
                        // line 213
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                            ";
                    // line 224
                    echo "                          </div>
                        </div>
                      ";
                }
                // line 227
                echo "                    </td>
                    <td class=\"text-center\"><img src=\"";
                // line 228
                echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["image"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                echo "\" style=\"padding: 1px; border: 1px solid #DDDDDD;\"/></td>
                    <td class=\"text-center\">";
                // line 229
                echo (($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">";
                // line 230
                echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["model"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">
                      ";
                // line 232
                if ((($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["special"] ?? null) : null)) {
                    // line 233
                    echo "                        <span style=\"text-decoration: line-through;\">";
                    echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["price"] ?? null) : null);
                    echo "</span><br/>
                        <span class=\"text-danger\">";
                    // line 234
                    echo (($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["special"] ?? null) : null);
                    echo "</span>
                      ";
                } else {
                    // line 236
                    echo "                        ";
                    echo (($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["price"] ?? null) : null);
                    echo "
                      ";
                }
                // line 238
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 240
                if (((($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["quantity"] ?? null) : null) <= 0)) {
                    // line 241
                    echo "                        <span class=\"label label-warning\">";
                    echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                } elseif (((($__internal_compile_16 =                 // line 242
$context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["quantity"] ?? null) : null) <= ($context["low_stock_quantity"] ?? null))) {
                    // line 243
                    echo "                        <span class=\"label label-danger\">";
                    echo (($__internal_compile_17 = $context["product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                } else {
                    // line 245
                    echo "                        <span class=\"label label-success\">";
                    echo (($__internal_compile_18 = $context["product"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["quantity"] ?? null) : null);
                    echo "</span>
                      ";
                }
                // line 247
                echo "                    </td>
                    <td class=\"text-center\">
                      ";
                // line 249
                if ((($__internal_compile_19 = $context["product"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null)) {
                    // line 250
                    echo "                      <a data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_approve"] ?? null);
                    echo "\" class=\"btn btn-success\">
                        <i class=\"fa fa-thumbs-o-up\"></i>
                      </a>
                      ";
                } else {
                    // line 254
                    echo "                       <a data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_disapprove"] ?? null);
                    echo "\" class=\"btn btn-warning cp-pro-status\" cp-pro-id=\"";
                    echo (($__internal_compile_20 = $context["product"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["product_id"] ?? null) : null);
                    echo "\">
                        <i class=\"fa fa-thumbs-o-up\"></i>
                      </a>
                      <a data-toggle=\"tooltip\" title=\"Reject\" class=\"btn btn-danger cp-pro-reject\" cp-pro-id=\"";
                    // line 257
                    echo (($__internal_compile_21 = $context["product"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["product_id"] ?? null) : null);
                    echo "\">
                        <i class=\"fa fa-thumbs-o-down\"></i>
                      </a>
                      ";
                }
                // line 261
                echo "                    </td>
                      ";
                // line 262
                $context["product_subs"] = (($__internal_compile_22 = ($context["subscriptions"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 262)] ?? null) : null);
                // line 263
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_subs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                    echo "                    
                      <td class=\"text-center\">
                        ";
                    // line 265
                    if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 265) == 1)) {
                        // line 266
                        echo "                          Piso Per Day
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 267
$context["subscription"], "subs_type", [], "any", false, false, false, 267) == 2)) {
                        // line 268
                        echo "                          Piso Per Month
                        ";
                    } else {
                        // line 270
                        echo "                          Commission
                        ";
                    }
                    // line 272
                    echo "                      </td>
                      <td class=\"text-center\">";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 273);
                    echo "</td>
                      ";
                    // line 274
                    if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "subs_type", [], "any", false, false, false, 274) == 3)) {
                        // line 275
                        echo "                        <td class=\"text-center\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "duration", [], "any", false, false, false, 275);
                        echo "% commission</td>
                      ";
                    } else {
                        // line 277
                        echo "                        <td class=\"text-center\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "duration", [], "any", false, false, false, 277);
                        echo " days</td>
                      ";
                    }
                    // line 279
                    echo "                      <td class=\"text-center\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_expired", [], "any", false, false, false, 279);
                    echo "</td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                echo "                    <td class=\"text-center\">
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"Product preview\" class=\"btn btn-warning previewButton\" data-product-id=\"";
                // line 282
                echo (($__internal_compile_23 = $context["product"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["product_id"] ?? null) : null);
                echo "\" data-product-status=\"";
                echo (($__internal_compile_24 = $context["product"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["status"] ?? null) : null);
                echo "\">
                        <i class=\"fa fa-eye\"></i>
                      </button>

                      <div class=\"btn-group\" data-toggle=\"tooltip\" title=\"Live Product Preview\">
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\">
                          <i class=\"fa fa-television\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                          ";
                // line 291
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 292
                    echo "                            <li>
                              <a href=\"";
                    // line 293
                    echo (($__internal_compile_25 = $context["store"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["url"] ?? null) : null);
                    echo "/index.php?route=product/product&user_token=";
                    echo ($context["user_token"] ?? null);
                    echo "&product_id=";
                    echo (($__internal_compile_26 = $context["product"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["product_id"] ?? null) : null);
                    echo "&store_id=";
                    echo (($__internal_compile_27 = $context["store"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["store_id"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_28 = $context["store"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["name"] ?? null) : null);
                    echo "</a>
                            </li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                        </ul>
                      </div>

                      ";
                // line 304
                echo "                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                ";
        } else {
            // line 308
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"9\">";
            // line 309
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 312
        echo "              </tbody>
            </table>
          </div>
        </form>

        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 318
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 319
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
        // line 331
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
        // line 357
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
        // line 377
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
        // line 392
        echo (($context["column_name"] ?? null) . " : ");
        echo "' + product.product_name);
            \$('#productModel').text('";
        // line 393
        echo (($context["column_model"] ?? null) . " : ");
        echo "' + product.model);
            \$('#ProductPrice').text('";
        // line 394
        echo (($context["column_price"] ?? null) . " : ");
        echo "' + product.price);
            // \$('#Productspecial').text('";
        // line 395
        echo (($context["column_price"] ?? null) . " : ");
        echo "'+product.price);
            \$('#productQuantity').text('";
        // line 396
        echo (($context["column_quantity"] ?? null) . " : ");
        echo "' + product.quantity);
            if (product.quantity < 1) {
              \$('#productAvailability').show();
              \$('#productAvailability').text('";
        // line 399
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
        // line 413
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
        // line 472
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
        // line 495
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

      <script>
      //-->
      (function(\$wk_jq) {
          \$wk_jq('.cp-pro-status').on('click', function(){
              if(confirm(\"";
        // line 518
        echo ($context["text_confirm_approve"] ?? null);
        echo "\")){
                url = '";
        // line 519
        echo ($context["approve"] ?? null);
        echo "&product_id='+\$wk_jq(this).attr('cp-pro-id');
            \$wk_jq('#insert').attr('href',url).trigger('click');
            location = url;
              }
          });
          
          // ADD REJECT FUNCTIONALITY HERE
          \$wk_jq('.cp-pro-reject').on('click', function(){
              if(confirm(\"";
        // line 527
        echo ($context["text_confirm_reject"] ?? null);
        echo "\")){
                url = '";
        // line 528
        echo ($context["reject"] ?? null);
        echo "&product_id='+\$wk_jq(this).attr('cp-pro-id');
            location = url;
              }
          });
      })(jQuery);
      //-->
      </script>

      \$('input[name=\\'filter_seller\\']').autocomplete({
        delay: 0,
        source: function(request, response) {
          \$.ajax({
            url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 540
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
        // line 567
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
        // line 594
        echo ($context["text_confirm_approve"] ?? null);
        echo "\")){
  \t\turl = '";
        // line 595
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
        // line 603
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
        return array (  1103 => 603,  1092 => 595,  1088 => 594,  1058 => 567,  1028 => 540,  1013 => 528,  1009 => 527,  998 => 519,  994 => 518,  968 => 495,  942 => 472,  880 => 413,  863 => 399,  857 => 396,  853 => 395,  849 => 394,  845 => 393,  841 => 392,  823 => 377,  800 => 357,  771 => 331,  756 => 319,  752 => 318,  744 => 312,  738 => 309,  735 => 308,  732 => 307,  724 => 304,  719 => 296,  702 => 293,  699 => 292,  695 => 291,  681 => 282,  678 => 281,  669 => 279,  663 => 277,  657 => 275,  655 => 274,  651 => 273,  648 => 272,  644 => 270,  640 => 268,  638 => 267,  635 => 266,  633 => 265,  625 => 263,  623 => 262,  620 => 261,  613 => 257,  604 => 254,  596 => 250,  594 => 249,  590 => 247,  584 => 245,  578 => 243,  576 => 242,  571 => 241,  569 => 240,  565 => 238,  559 => 236,  554 => 234,  549 => 233,  547 => 232,  542 => 230,  538 => 229,  532 => 228,  529 => 227,  524 => 224,  522 => 214,  516 => 213,  510 => 211,  507 => 210,  503 => 209,  498 => 206,  496 => 205,  492 => 203,  486 => 201,  480 => 199,  478 => 198,  474 => 196,  469 => 195,  467 => 194,  460 => 190,  453 => 185,  445 => 183,  435 => 181,  433 => 180,  429 => 178,  421 => 176,  411 => 174,  409 => 173,  405 => 171,  397 => 169,  387 => 167,  385 => 166,  381 => 164,  373 => 162,  363 => 160,  361 => 159,  357 => 157,  349 => 155,  339 => 153,  337 => 152,  332 => 150,  329 => 149,  321 => 147,  311 => 145,  309 => 144,  299 => 137,  290 => 131,  283 => 126,  277 => 124,  271 => 122,  268 => 121,  262 => 119,  256 => 117,  254 => 116,  247 => 112,  238 => 108,  234 => 107,  219 => 97,  214 => 95,  201 => 87,  196 => 85,  185 => 79,  181 => 78,  168 => 70,  163 => 68,  152 => 60,  145 => 55,  138 => 51,  134 => 49,  131 => 48,  124 => 44,  120 => 42,  118 => 41,  111 => 37,  107 => 36,  103 => 35,  97 => 31,  86 => 28,  83 => 27,  79 => 26,  74 => 24,  65 => 20,  57 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/product_list.twig", "");
    }
}
