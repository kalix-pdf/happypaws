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

/* customerpartner/order_list.twig */
class __TwigTemplate_721f4d1e4a6a97926237eb0b737d7312676eb47b9aef6dffbcb73828f3dfa928 extends Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"pull-right\">
          <select id=\"order_access\" class=\"form-control\" style=\"display: inline-block;width: auto;\">
            <option value=\"0\">";
        // line 8
        echo ($context["text_access"] ?? null);
        echo "</option>
            <option value=\"1\">";
        // line 9
        echo ($context["text_notaccess"] ?? null);
        echo "</option>
          </select>
          <button id=\"button_access\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_save"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
        // line 12
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\">";
        echo ($context["button_cancel"] ?? null);
        echo "</a>
       </div>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 24
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-order-id\">";
        // line 31
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 32
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-customer\">";
        // line 35
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 36
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-order-access\">";
        // line 40
        echo ($context["column_seller_access"] ?? null);
        echo "</label>
                <select name=\"filter_order_access\" id=\"input-order-access\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 43
        if ((($context["filter_order_access"] ?? null) == "1")) {
            // line 44
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_access"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 46
            echo "                  <option value=\"1\">";
            echo ($context["text_access"] ?? null);
            echo "</option>
                  ";
        }
        // line 48
        echo "                  ";
        if ((($context["filter_order_access"] ?? null) == "0")) {
            // line 49
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_notaccess"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 51
            echo "                  <option value=\"0\">";
            echo ($context["text_notaccess"] ?? null);
            echo "</option>
                  ";
        }
        // line 53
        echo "                </select>
              </div>

            </div>
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-order-status\">";
        // line 59
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                <select name=\"filter_order_status\" id=\"input-order-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 62
        if ((($context["filter_order_status"] ?? null) == "0")) {
            // line 63
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 65
            echo "                  <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                  ";
        }
        // line 67
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 68
            echo "                  ";
            if (((($__internal_compile_0 = $context["order_status"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["order_status_id"] ?? null) : null) == ($context["filter_order_status"] ?? null))) {
                // line 69
                echo "                  <option value=\"";
                echo (($__internal_compile_1 = $context["order_status"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                echo "</option>
                  ";
            } else {
                // line 71
                echo "                  <option value=\"";
                echo (($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_4 = $context["order_status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</option>
                  ";
            }
            // line 73
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-total\">";
        // line 77
        echo ($context["entry_total"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_total\" value=\"";
        // line 78
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 83
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 85
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-modified\">";
        // line 91
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 93
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 99
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
        <form method=\"post\" enctype=\"multipart/form-data\" id=\"form-order\" action=\"";
        // line 104
        echo ($context["access"] ?? null);
        echo "\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-center\">
                    ";
        // line 111
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 112
            echo "                      <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 114
            echo "                      <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                    ";
        }
        // line 115
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 117
        if ((($context["sort"] ?? null) == "customer")) {
            // line 118
            echo "                      <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 120
            echo "                      <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                    ";
        }
        // line 121
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 123
        if ((($context["sort"] ?? null) == "status")) {
            // line 124
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 126
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 127
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 129
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 130
            echo "                      <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 132
            echo "                      <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
                    ";
        }
        // line 133
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 135
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 136
            echo "                      <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 138
            echo "                      <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 139
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 141
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 142
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 144
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        }
        // line 145
        echo "</td>
                    <td class=\"text-center\">
                    ";
        // line 147
        if ((($context["sort"] ?? null) == "access")) {
            // line 148
            echo "                      <a href=\"";
            echo ($context["sort_access"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_seller_access"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 150
            echo "                      <a href=\"";
            echo ($context["sort_access"] ?? null);
            echo "\">";
            echo ($context["column_seller_access"] ?? null);
            echo "</a>
                    ";
        }
        // line 151
        echo "</td>
                  <td class=\"text-center\">";
        // line 152
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 156
        if (($context["orders"] ?? null)) {
            // line 157
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 158
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 159
                if (twig_in_filter((($__internal_compile_5 = $context["order"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 160
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_6 = $context["order"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["order_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 162
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_7 = $context["order"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["order_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 163
                echo "</td>
                  <td class=\"text-center\">";
                // line 164
                echo (($__internal_compile_8 = $context["order"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["order_id"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 165
                echo (($__internal_compile_9 = $context["order"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["customer"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 166
                echo (($__internal_compile_10 = $context["order"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["status"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 167
                echo (($__internal_compile_11 = $context["order"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["total"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 168
                echo (($__internal_compile_12 = $context["order"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["date_added"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 169
                echo (($__internal_compile_13 = $context["order"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["date_modified"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 170
                echo (((($__internal_compile_14 = $context["order"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["seller_access"] ?? null) : null)) ? (($context["text_access"] ?? null)) : (($context["text_notaccess"] ?? null)));
                echo "</td>
                  <td class=\"text-center\">
                  ";
                // line 172
                if ((($__internal_compile_15 = $context["order"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["seller_access"] ?? null) : null)) {
                    // line 173
                    echo "                   <a onclick=\"\$(this).parents('tr').find('input[type=\\'checkbox\\']').prop('checked',true);\$('#form-order').attr('action', '";
                    echo (($__internal_compile_16 = $context["order"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["access"] ?? null) : null);
                    echo "'); \$('#form-order').submit();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_notaccess"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-thumbs-o-down\"></i></a>
                   <a href=\"";
                    // line 174
                    echo (($__internal_compile_17 = $context["order"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["view"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_view"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                  ";
                } else {
                    // line 176
                    echo "                   <a onclick=\"\$(this).parents('tr').find('input[type=\\'checkbox\\']').prop('checked',true);\$('#form-order').attr('action', '";
                    echo (($__internal_compile_18 = $context["order"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["access"] ?? null) : null);
                    echo "'); \$('#form-order').submit();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_access"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-thumbs-o-up\"></i></a>
                   <a href=\"";
                    // line 177
                    echo (($__internal_compile_19 = $context["order"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["view"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_view"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                  ";
                }
                // line 179
                echo "                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                ";
        } else {
            // line 182
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"9\">";
            // line 183
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 186
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 191
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 192
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--

  \$(\"#button_access\").on('click', function(){

     var url = \$('#form-order').attr('action');

     var tmpurl = url+ \"&seller_access=\" + \$('#order_access').val();

     \$('#form-order').attr('action', tmpurl);

     \$('#form-order').submit();

  });

  \$('#button-filter').on('click', function() {
    url = 'index.php?route=customerpartner/order&user_token=";
        // line 212
        echo ($context["user_token"] ?? null);
        echo "';

    var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

    if (filter_order_id) {
      url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
    }

    var filter_customer = \$('input[name=\\'filter_customer\\']').val();

    if (filter_customer) {
      url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_order_status = \$('select[name=\\'filter_order_status\\']').val();

    if (filter_order_status != '*') {
      url += '&filter_order_status=' + encodeURIComponent(filter_order_status);
    }

    var filter_order_access = \$('select[name=\\'filter_order_access\\']').val();

    if (filter_order_access != '*') {
      url += '&filter_order_access=' + encodeURIComponent(filter_order_access);
    }

    var filter_total = \$('input[name=\\'filter_total\\']').val();

    if (filter_total) {
      url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
      url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }

    location = url;
  });
//--></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  pickTime: false
});
//--></script></div>
";
        // line 266
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 266,  607 => 212,  584 => 192,  580 => 191,  573 => 186,  567 => 183,  564 => 182,  561 => 181,  554 => 179,  547 => 177,  540 => 176,  533 => 174,  526 => 173,  524 => 172,  519 => 170,  515 => 169,  511 => 168,  507 => 167,  503 => 166,  499 => 165,  495 => 164,  492 => 163,  486 => 162,  480 => 160,  478 => 159,  475 => 158,  470 => 157,  468 => 156,  461 => 152,  458 => 151,  450 => 150,  440 => 148,  438 => 147,  434 => 145,  426 => 144,  416 => 142,  414 => 141,  410 => 139,  402 => 138,  392 => 136,  390 => 135,  386 => 133,  378 => 132,  368 => 130,  366 => 129,  362 => 127,  354 => 126,  344 => 124,  342 => 123,  338 => 121,  330 => 120,  320 => 118,  318 => 117,  314 => 115,  306 => 114,  296 => 112,  294 => 111,  284 => 104,  276 => 99,  265 => 93,  260 => 91,  249 => 85,  244 => 83,  234 => 78,  230 => 77,  225 => 74,  219 => 73,  211 => 71,  203 => 69,  200 => 68,  195 => 67,  189 => 65,  183 => 63,  181 => 62,  175 => 59,  167 => 53,  161 => 51,  155 => 49,  152 => 48,  146 => 46,  140 => 44,  138 => 43,  132 => 40,  123 => 36,  119 => 35,  111 => 32,  107 => 31,  97 => 24,  89 => 18,  78 => 16,  74 => 15,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/order_list.twig", "");
    }
}
