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

/* account/register.twig */
class __TwigTemplate_9fdb56a8ceea37d18b43699e63ce5bf3c5220576921eef08f73916bf0a282747 extends Template
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
        echo "<!DOCTYPE html>
<link href=\"catalog/view/theme/hp/stylesheet/register.css\" rel=\"stylesheet\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 3
        echo ($context["logo"] ?? null);
        echo "\">

<body style=\"background: url(http://localhost/hp/image/catalog/paw-bg.png);\"> 
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>

  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"register-logo\">
        <img src=\"http://localhost/hp/image/catalog/icon.png\" alt=\"Happy Paws Logo\">
      </div>
      <h1>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 26
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 29
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group required\" style=\"display: ";
        // line 30
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 31
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 33
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 33) == ($context["customer_group_id"] ?? null))) {
                // line 34
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 36);
                echo "\" checked=\"checked\" />
                  ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 37);
                echo "</label>
              </div>
              ";
            } else {
                // line 40
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 42);
                echo "\" />
                  ";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 43);
                echo "</label>
              </div>
              ";
            }
            // line 46
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>

          <div class=\"form-row two-col\">
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 52
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                ";
        // line 53
        if (($context["error_firstname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>";
        }
        // line 54
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 58
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                ";
        // line 59
        if (($context["error_lastname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>";
        }
        // line 60
        echo "              </div>
            </div>
          </div>

          <div class=\"form-row two-col\">
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 67
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 68
        if (($context["error_email"] ?? null)) {
            // line 69
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 71
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 75
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                ";
        // line 76
        if (($context["error_telephone"] ?? null)) {
            // line 77
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                ";
        }
        // line 79
        echo "              </div>
            </div>
          </div>

          ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 84
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 84) == "select")) {
                // line 85
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 85);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 86);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 88);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 89
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    echo "                ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)))) {
                        // line 97
                        echo "                
                
                
                
                <option value=\"";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 101);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 108
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 120
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "              
              
              
              
              
              </select>
              ";
                // line 127
                if ((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) {
                    // line 128
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 129
                echo "</div>
          </div>
          ";
            }
            // line 132
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "radio")) {
                // line 133
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 133);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 137
                    echo "                <div class=\"radio\">";
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 137) == (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)))) {
                        // line 138
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        echo "</label>
                  ";
                    } else {
                        // line 142
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 143);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143);
                        echo "\" />
                    ";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 144);
                        echo "</label>
                  ";
                    }
                    // line 145
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "</div>
              ";
                // line 147
                if ((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null)) {
                    // line 148
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 149
                echo "</div>
          </div>
          ";
            }
            // line 152
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "checkbox")) {
                // line 153
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 153);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 156));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 157
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 157), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null)))) {
                        // line 158
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 159);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 159);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 160);
                        echo "</label>
                  ";
                    } else {
                        // line 162
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163);
                        echo "\" />
                    ";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 164);
                        echo "</label>
                  ";
                    }
                    // line 165
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo " </div>
              ";
                // line 167
                if ((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    // line 168
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 169
                echo " </div>
          </div>
          ";
            }
            // line 172
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 172) == "text")) {
                // line 173
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 173);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 176);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 176);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"form-control\" />
              ";
                // line 177
                if ((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) {
                    // line 178
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 179
                echo " </div>
          </div>
          ";
            }
            // line 182
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 182) == "textarea")) {
                // line 183
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 183);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 186);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 186);
                }
                echo "</textarea>
              ";
                // line 187
                if ((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) {
                    // line 188
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 189
                echo " </div>
          </div>
          ";
            }
            // line 192
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 192) == "file")) {
                // line 193
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 193);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 194);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 197);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 198
                if ((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    // line 199
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 200
                echo "</div>
          </div>
          ";
            }
            // line 203
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "date")) {
                // line 204
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 204);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 208);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 208);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 212
                if ((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) {
                    // line 213
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 214
                echo " </div>
          </div>
          ";
            }
            // line 217
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 217) == "time")) {
                // line 218
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 218);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 219);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 222);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 222);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 222);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 226
                if ((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    // line 227
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 228
                echo " </div>
          </div>
          ";
            }
            // line 231
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "datetime")) {
                // line 232
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 232);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 236);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 236);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 236);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 240
                if ((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240)] ?? null) : null)) {
                    // line 241
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 242
                echo " </div>
          </div>
          ";
            }
            // line 245
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "        </fieldset>

        <legend>";
        // line 248
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"form-row two-col\">
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 252
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 253
        if (($context["error_password"] ?? null)) {
            // line 254
            echo "                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 256
        echo "            </div>
          </div>
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 260
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 261
        if (($context["error_confirm"] ?? null)) {
            // line 262
            echo "                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 264
        echo "            </div>
          </div>
        </div>

        
        <div class=\"form-row two-col\">
          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 272
        echo ($context["text_agree"] ?? null);
        echo "
                ";
        // line 273
        if (($context["agree"] ?? null)) {
            // line 274
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" checked />
                ";
        } else {
            // line 276
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" />
                ";
        }
        // line 278
        echo "              </label>
              ";
        // line 279
        if (($context["error_warning"] ?? null)) {
            // line 280
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
              ";
        }
        // line 282
        echo "          </div>
        </div>

          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 287
        echo ($context["text_newsletter"] ?? null);
        echo "
                ";
        // line 288
        if (($context["newsletter"] ?? null)) {
            // line 289
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" checked /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" /> ";
            // line 290
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        } else {
            // line 292
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" checked /> ";
            // line 293
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        }
        // line 295
        echo "              </label><br>
          ";
        // line 296
        echo ($context["captcha"] ?? null);
        echo "
          ";
        // line 297
        if (($context["text_agree"] ?? null)) {
            // line 298
            echo "          </div>
        </div>
      </div>


        <div class=\"form-group text-right\">
          <input type=\"submit\" value=\"";
            // line 304
            echo ($context["text_register"] ?? null);
            echo "\" class=\"btn btn-primary\" />
        </div>
        ";
        }
        // line 307
        echo "      </form>
      </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 412
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 417
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 422
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 427
        echo ($context["footer"] ?? null);
        echo " 

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1084 => 427,  1076 => 422,  1068 => 417,  1060 => 412,  953 => 307,  947 => 304,  939 => 298,  937 => 297,  933 => 296,  930 => 295,  925 => 293,  920 => 292,  915 => 290,  910 => 289,  908 => 288,  904 => 287,  897 => 282,  891 => 280,  889 => 279,  886 => 278,  882 => 276,  878 => 274,  876 => 273,  872 => 272,  862 => 264,  856 => 262,  854 => 261,  848 => 260,  842 => 256,  836 => 254,  834 => 253,  828 => 252,  821 => 248,  817 => 246,  811 => 245,  806 => 242,  800 => 241,  798 => 240,  779 => 236,  771 => 233,  764 => 232,  761 => 231,  756 => 228,  750 => 227,  748 => 226,  729 => 222,  721 => 219,  714 => 218,  711 => 217,  706 => 214,  700 => 213,  698 => 212,  679 => 208,  671 => 205,  664 => 204,  661 => 203,  656 => 200,  650 => 199,  648 => 198,  636 => 197,  628 => 196,  623 => 194,  616 => 193,  613 => 192,  608 => 189,  602 => 188,  600 => 187,  584 => 186,  577 => 184,  570 => 183,  567 => 182,  562 => 179,  556 => 178,  554 => 177,  538 => 176,  531 => 174,  524 => 173,  521 => 172,  516 => 169,  510 => 168,  508 => 167,  505 => 166,  498 => 165,  493 => 164,  485 => 163,  482 => 162,  477 => 160,  469 => 159,  466 => 158,  463 => 157,  459 => 156,  454 => 154,  447 => 153,  444 => 152,  439 => 149,  433 => 148,  431 => 147,  428 => 146,  421 => 145,  416 => 144,  408 => 143,  405 => 142,  400 => 140,  392 => 139,  389 => 138,  386 => 137,  382 => 136,  377 => 134,  370 => 133,  367 => 132,  362 => 129,  356 => 128,  354 => 127,  346 => 121,  340 => 120,  328 => 113,  321 => 108,  309 => 101,  303 => 97,  300 => 96,  296 => 95,  287 => 89,  279 => 88,  272 => 86,  265 => 85,  262 => 84,  258 => 83,  252 => 79,  246 => 77,  244 => 76,  238 => 75,  232 => 71,  226 => 69,  224 => 68,  218 => 67,  209 => 60,  203 => 59,  197 => 58,  191 => 54,  185 => 53,  179 => 52,  166 => 46,  160 => 43,  156 => 42,  152 => 40,  146 => 37,  142 => 36,  138 => 34,  135 => 33,  131 => 32,  127 => 31,  119 => 30,  115 => 29,  110 => 27,  106 => 26,  102 => 25,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/register.twig", "");
    }
}
