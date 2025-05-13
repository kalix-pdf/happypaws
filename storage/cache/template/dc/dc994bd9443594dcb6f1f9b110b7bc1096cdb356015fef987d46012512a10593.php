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

/* __string_template__8a4d9e580c23f2d7460ed157d637144b72b4d9b2057af438f7e7bab70c265faf */
class __TwigTemplate_180adf8d520ce6b4250a803feb1c050bad3df8f2869eb88a180bd74311e029ed extends Template
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
        <select id=\"partnet_status\" class=\"form-control\" style=\"display: inline-block;width: auto;\">
          <option value=\"0\">";
        // line 7
        echo ($context["text_isnotpartner"] ?? null);
        echo "</option>
          <option value=\"1\">";
        // line 8
        echo ($context["text_ispartner"] ?? null);
        echo "</option>
        </select>

        <a href=\"";
        // line 11
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_create_seller"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button id=\"prs_action\" type=\"submit\" form=\"form-seller\" formaction=\"";
        // line 12
        echo ($context["approve"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_approve"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-thumbs-o-up\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>

      </div>
      <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 26
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 32
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 36
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 39
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 46
        echo ($context["column_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 48
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span>
                    </span>
                </div>
              </div>              
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-customer_group\">";
        // line 57
        echo ($context["column_customer_group"] ?? null);
        echo "</label>
                <select name=\"filter_customer_group_id\" id=\"input-customer_group\" class=\"form-control\" >
                  <option value=\"*\"></option>
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                  ";
            if (((($__internal_compile_0 = $context["customer_group"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["customer_group_id"] ?? null) : null) == ($context["filter_customer_group_id"] ?? null))) {
                // line 62
                echo "                  <option value=\"";
                echo (($__internal_compile_1 = $context["customer_group"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_compile_2 = $context["customer_group"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                echo "</option>
                  ";
            } else {
                // line 64
                echo "                  <option value=\"";
                echo (($__internal_compile_3 = $context["customer_group"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_4 = $context["customer_group"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</option>
                  ";
            }
            // line 66
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </select>
              </div>
            </div>

            <div class=\"col-sm-4\">

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-approved\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["entry_customer_type_info"] ?? null);
        echo "\">";
        echo ($context["entry_customer_type"] ?? null);
        echo "</span></label>
                <select id=\"view_all\" name=\"wk_viewall\" class=\"form-control\">
                  <option ";
        // line 76
        if ( !($context["wk_viewall"] ?? null)) {
            echo "selected";
        }
        echo " value=\"0\">";
        echo ($context["text_view_partners"] ?? null);
        echo "</option>
                  <option ";
        // line 77
        if ((($context["wk_viewall"] ?? null) && (($context["wk_viewall"] ?? null) == 2))) {
            echo "selected";
        }
        echo " value=\"2\">";
        echo ($context["text_view_requested"] ?? null);
        echo "</option>
                  <option ";
        // line 78
        if ((($context["wk_viewall"] ?? null) && (($context["wk_viewall"] ?? null) == 1))) {
            echo "selected";
        }
        echo " value=\"1\">";
        echo ($context["text_view_all"] ?? null);
        echo "</option>
                </select>
              </div>              
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-model\">";
        // line 84
        echo ($context["column_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_email\" value=\"";
        // line 85
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_email"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 90
        echo ($context["column_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 93
        if (($context["filter_status"] ?? null)) {
            // line 94
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 96
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 98
        echo "                  ";
        if (((($context["filter_status"] ?? null) != null) &&  !($context["filter_status"] ?? null))) {
            // line 99
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 101
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 103
        echo "                </select>
              </div>

              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 106
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>

        <form action=\"";
        // line 111
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
              <tr>
                <td width=\"2%\" style=\"text-align: center;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                <td width=\"5%\" class=\"text-center\">
                  ";
        // line 119
        if ((($context["sort"] ?? null) == "customer_id")) {
            // line 120
            echo "                    <a href=\"";
            echo ($context["sort_customerId"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sellerId"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 122
            echo "                    <a href=\"";
            echo ($context["sort_customerId"] ?? null);
            echo "\">";
            echo ($context["column_sellerId"] ?? null);
            echo "</a>
                  ";
        }
        // line 124
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 126
        if ((($context["sort"] ?? null) == "name")) {
            // line 127
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 129
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                  ";
        }
        // line 131
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 133
        if ((($context["sort"] ?? null) == "c.email")) {
            // line 134
            echo "                    <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 136
            echo "                    <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                  ";
        }
        // line 138
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 140
        if ((($context["sort"] ?? null) == "customer_group")) {
            // line 141
            echo "                    <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 143
            echo "                    <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
                  ";
        }
        // line 145
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 147
        if ((($context["sort"] ?? null) == "c.status")) {
            // line 148
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 150
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                  ";
        }
        // line 152
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 154
        if ((($context["sort"] ?? null) == "c.ip")) {
            // line 155
            echo "                    <a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 157
            echo "                    <a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>
                  ";
        }
        // line 159
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">
                  ";
        // line 161
        if ((($context["sort"] ?? null) == "c.date_added")) {
            // line 162
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 164
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                  ";
        }
        // line 166
        echo "                </td>
                <td width=\"10%\" class=\"text-center\">";
        // line 167
        echo ($context["column_login"] ?? null);
        echo "</td>
                <td class=\"text-center\" width=\"100%\">Seller Documents</td>
                ";
        // line 170
        echo "                <td width=\"18%\" class=\"text-center\">";
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>

            <tbody>
              ";
        // line 175
        if (($context["customers"] ?? null)) {
            // line 176
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 177
                echo "              <tr>
                <td style=\"text-align: center;\" class=\"text-center\">
                  ";
                // line 179
                if ((($__internal_compile_5 = $context["customer"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["selected"] ?? null) : null)) {
                    // line 180
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_6 = $context["customer"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["customer_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 182
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_7 = $context["customer"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["customer_id"] ?? null) : null);
                    echo "\" />
                  ";
                }
                // line 184
                echo "                </td>
                <td class=\"text-center\">";
                // line 185
                echo (($__internal_compile_8 = $context["customer"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["customer_id"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\"><a href=\"index.php?route=customer/customer/edit&user_token=";
                // line 186
                echo ($context["user_token"] ?? null);
                echo "&customer_id=";
                echo (($__internal_compile_9 = $context["customer"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["customer_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_10 = $context["customer"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                echo "</a></td>
                <td class=\"text-center\">";
                // line 187
                echo (($__internal_compile_11 = $context["customer"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["email"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\">";
                // line 188
                echo (($__internal_compile_12 = $context["customer"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["customer_group"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\">";
                // line 189
                echo (($__internal_compile_13 = $context["customer"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["status"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\">";
                // line 190
                echo (($__internal_compile_14 = $context["customer"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["ip"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\">";
                // line 191
                echo (($__internal_compile_15 = $context["customer"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_added"] ?? null) : null);
                echo "</td>
                <td class=\"text-center\"><b>";
                // line 192
                echo (($__internal_compile_16 = $context["customer"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_partner"] ?? null) : null);
                echo "</b></td>

                <td class=\"text-center\"><a href=\"index.php?route=customer/display&user_token=";
                // line 194
                echo ($context["user_token"] ?? null);
                echo "&customer_id=";
                echo (($__internal_compile_17 = $context["customer"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["customer_id"] ?? null) : null);
                echo "\" 
                target=\"_blank\" class=\"text-white btn btn-primary\">View Documents</a></td>

                ";
                // line 202
                echo "
                <td class=\"text-center\">
                  ";
                // line 204
                if (((($__internal_compile_18 = $context["customer"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["is_partner"] ?? null) : null) == "Normal customer")) {
                    // line 205
                    echo "                  <a onclick=\"\$(this).parents('tr').find('input[type=\\'checkbox\\']').prop('checked',true);\$('form').attr('action', '";
                    echo ($context["approve"] ?? null);
                    echo "&set_status=1'); \$('form').submit();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_approve"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-thumbs-o-up\"></i></a>
                  ";
                } else {
                    // line 207
                    echo "                    <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-thumbs-o-up\"></i></button>
                  ";
                }
                // line 209
                echo "                  <div class=\"btn-group\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_login"] ?? null);
                echo "\">
                    <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\"><i class=\"fa fa-lock\"></i></button>
                    <ul class=\"dropdown-menu pull-right\">
                      <li><a href=\"index.php?route=customer/customer/login&user_token=";
                // line 212
                echo ($context["user_token"] ?? null);
                echo "&customer_id=";
                echo (($__internal_compile_19 = $context["customer"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["customer_id"] ?? null) : null);
                echo "&store_id=0\" target=\"_blank\">";
                echo ($context["text_default"] ?? null);
                echo "</a></li>

                      ";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 215
                    echo "                        <li><a href=\"index.php?route=customer/customer/login&user_token=";
                    echo ($context["user_token"] ?? null);
                    echo "&customer_id=";
                    echo (($__internal_compile_20 = $context["customer"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["customer_id"] ?? null) : null);
                    echo "&store_id=";
                    echo (($__internal_compile_21 = $context["store"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["store_id"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_22 = $context["store"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null);
                    echo "</a></li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                    </ul>
                  </div>
                  ";
                // line 219
                if (((($__internal_compile_23 = $context["customer"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["is_partner"] ?? null) : null) != "Normal customer")) {
                    // line 220
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_24 = $context["customer"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["action"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 221
                        echo "                      <a href=\"";
                        echo (($__internal_compile_25 = $context["action"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["href"] ?? null) : null);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (($__internal_compile_26 = $context["action"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["text"] ?? null) : null);
                        echo "\" class=\"btn btn-primary\" > <i class=\"fa fa-pencil\"></i></a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 223
                    echo "                  ";
                }
                // line 224
                echo "                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "              ";
        } else {
            // line 228
            echo "              <tr>
                <td class=\"text-center\" colspan=\"12\">";
            // line 229
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 232
        echo "            </tbody>

          </table>
        </div>

      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 239
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 240
        echo ($context["results"] ?? null);
        echo "</div>
      </div>

    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
function filter() {
  url = 'index.php?route=customerpartner/partner&user_token=";
        // line 248
        echo ($context["user_token"] ?? null);
        echo "';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_email = \$('input[name=\\'filter_email\\']').val();

  if (filter_email) {
    url += '&filter_email=' + encodeURIComponent(filter_email);
  }

  var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();

  if (filter_customer_group_id != '*') {
    url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  var filter_ip = \$('input[name=\\'filter_ip\\']').val();

  if (filter_ip) {
    url += '&filter_ip=' + encodeURIComponent(filter_ip);
  }

  var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

  if (filter_date_added) {
    url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
  }

  var filter_view_all = jQuery('#view_all').val();

  if (filter_view_all) {
    url += '&view_all=' + encodeURIComponent(filter_view_all);
  }

  location = url;
}
//--></script>

<script><!--//
var url = \$('#prs_action').attr('formaction');

\$('#partnet_status').on('change',function(){
  tmpurl = url+\"&set_status=\"+\$(this).val();
  \$('#prs_action').attr('formaction',tmpurl);
});

</script>
<script type=\"text/javascript\">

\$('input[name=\\'filter_name\\']').autocomplete({
  delay: 0,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 311
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request)+'&filter_view=' +  jQuery('#view_all').val(),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.name,
            value: item.id
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_name\\']').val(item['label']);
  }

});

\$('input[name=\\'filter_email\\']').autocomplete({
  delay: 0,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 333
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' +  encodeURIComponent(request)+'&filter_view=' +  jQuery('#view_all').val(),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.email,
            value: item.id
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_email\\']').val(item['label']);
  }
});
</script>
";
        // line 350
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__8a4d9e580c23f2d7460ed157d637144b72b4d9b2057af438f7e7bab70c265faf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  799 => 350,  779 => 333,  754 => 311,  688 => 248,  677 => 240,  673 => 239,  664 => 232,  658 => 229,  655 => 228,  652 => 227,  644 => 224,  641 => 223,  630 => 221,  625 => 220,  623 => 219,  619 => 217,  604 => 215,  600 => 214,  591 => 212,  584 => 209,  580 => 207,  572 => 205,  570 => 204,  566 => 202,  558 => 194,  553 => 192,  549 => 191,  545 => 190,  541 => 189,  537 => 188,  533 => 187,  525 => 186,  521 => 185,  518 => 184,  512 => 182,  506 => 180,  504 => 179,  500 => 177,  495 => 176,  493 => 175,  484 => 170,  479 => 167,  476 => 166,  468 => 164,  458 => 162,  456 => 161,  452 => 159,  444 => 157,  434 => 155,  432 => 154,  428 => 152,  420 => 150,  410 => 148,  408 => 147,  404 => 145,  396 => 143,  386 => 141,  384 => 140,  380 => 138,  372 => 136,  362 => 134,  360 => 133,  356 => 131,  348 => 129,  338 => 127,  336 => 126,  332 => 124,  324 => 122,  314 => 120,  312 => 119,  301 => 111,  293 => 106,  288 => 103,  282 => 101,  276 => 99,  273 => 98,  267 => 96,  261 => 94,  259 => 93,  253 => 90,  243 => 85,  239 => 84,  226 => 78,  218 => 77,  210 => 76,  203 => 74,  194 => 67,  188 => 66,  180 => 64,  172 => 62,  169 => 61,  165 => 60,  159 => 57,  145 => 48,  140 => 46,  130 => 39,  125 => 36,  117 => 32,  114 => 31,  106 => 27,  104 => 26,  97 => 21,  86 => 19,  82 => 18,  77 => 16,  69 => 13,  63 => 12,  57 => 11,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8a4d9e580c23f2d7460ed157d637144b72b4d9b2057af438f7e7bab70c265faf", "");
    }
}
