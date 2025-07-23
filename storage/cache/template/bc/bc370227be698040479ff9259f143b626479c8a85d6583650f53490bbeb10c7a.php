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
class __TwigTemplate_5740bce643c5f3d875f7702700f5dedde8aa06523cc3c0a58ddba7217b69ed98 extends Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/theme/hp/stylesheet/register.css\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
</head>

<body style=\"background: url(http://localhost/hp/image/catalog/paw-bg.png);\"> 

<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 29
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>

  <div class=\"row\">";
        // line 33
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 34
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 36
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 37
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 40
            echo "    ";
        }
        // line 41
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"register-logo\">
        <img src=\"http://localhost/hp/image/catalog/icon.png\" alt=\"Happy Paws Logo\">
      </div>
      <h1>";
        // line 45
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 46
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 47
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 49
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group required\" style=\"display: ";
        // line 50
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 51
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 53
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 53) == ($context["customer_group_id"] ?? null))) {
                // line 54
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56);
                echo "\" checked=\"checked\" />
                  ";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 57);
                echo "</label>
              </div>
              ";
            } else {
                // line 60
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 62);
                echo "\" />
                  ";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 63);
                echo "</label>
              </div>
              ";
            }
            // line 66
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
        // line 72
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                ";
        // line 73
        if (($context["error_firstname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>";
        }
        // line 74
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 78
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                ";
        // line 79
        if (($context["error_lastname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>";
        }
        // line 80
        echo "              </div>
            </div>
          </div>

          <div class=\"form-row two-col\">
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 87
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 88
        if (($context["error_email"] ?? null)) {
            // line 89
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 91
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 95
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                ";
        // line 96
        if (($context["error_telephone"] ?? null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                ";
        }
        // line 99
        echo "              </div>
            </div>
          </div>

          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 104
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "select")) {
                // line 105
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 105);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 108);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 109
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 116
                    echo "                ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 116)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 116) == (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)))) {
                        // line 117
                        echo "                
                
                
                
                <option value=\"";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 121);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 121);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 128
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 133);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 140
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "              
              
              
              
              
              </select>
              ";
                // line 147
                if ((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null)) {
                    // line 148
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null);
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
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "radio")) {
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
                    echo "                <div class=\"radio\">";
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 157) == (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null)))) {
                        // line 158
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 159);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                        echo "]\" value=\"";
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
                    <input type=\"radio\" name=\"custom_field[";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                        echo "]\" value=\"";
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
                echo "</div>
              ";
                // line 167
                if ((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    // line 168
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 169
                echo "</div>
          </div>
          ";
            }
            // line 172
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 172) == "checkbox")) {
                // line 173
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 173);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 177
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)))) {
                        // line 178
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 179);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 179);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 180);
                        echo "</label>
                  ";
                    } else {
                        // line 182
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 183);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 183);
                        echo "\" />
                    ";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 184);
                        echo "</label>
                  ";
                    }
                    // line 185
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo " </div>
              ";
                // line 187
                if ((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) {
                    // line 188
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null);
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
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 192) == "text")) {
                // line 193
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 193);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 194);
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 196);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 196);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "\" class=\"form-control\" />
              ";
                // line 197
                if ((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    // line 198
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 199
                echo " </div>
          </div>
          ";
            }
            // line 202
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "textarea")) {
                // line 203
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 203);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 206);
                }
                echo "</textarea>
              ";
                // line 207
                if ((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)) {
                    // line 208
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 209
                echo " </div>
          </div>
          ";
            }
            // line 212
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 212) == "file")) {
                // line 213
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 213);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 217);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 218
                if ((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                    // line 219
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 220
                echo "</div>
          </div>
          ";
            }
            // line 223
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 223) == "date")) {
                // line 224
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 224);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 228);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 228);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 232
                if ((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) {
                    // line 233
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 234
                echo " </div>
          </div>
          ";
            }
            // line 237
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 237) == "time")) {
                // line 238
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 238);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 242);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 242);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 242);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 246
                if ((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null)) {
                    // line 247
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 248
                echo " </div>
          </div>
          ";
            }
            // line 251
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "datetime")) {
                // line 252
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 252);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 256);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 256);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 260
                if ((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null)) {
                    // line 261
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 262
                echo " </div>
          </div>
          ";
            }
            // line 265
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "        </fieldset>

        <legend>";
        // line 268
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"form-row two-col\">
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 272
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 273
        if (($context["error_password"] ?? null)) {
            // line 274
            echo "                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 276
        echo "            </div>
          </div>
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 280
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 281
        if (($context["error_confirm"] ?? null)) {
            // line 282
            echo "                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 284
        echo "            </div>
          </div>
        </div>

        
        <div class=\"form-row two-col\">
          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 292
        echo ($context["text_agree"] ?? null);
        echo "
                ";
        // line 293
        if (($context["agree"] ?? null)) {
            // line 294
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" checked />
                ";
        } else {
            // line 296
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" />
                ";
        }
        // line 298
        echo "              </label>
              ";
        // line 299
        if (($context["error_warning"] ?? null)) {
            // line 300
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
              ";
        }
        // line 302
        echo "          </div>
        </div>

          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 307
        echo ($context["text_newsletter"] ?? null);
        echo "
                ";
        // line 308
        if (($context["newsletter"] ?? null)) {
            // line 309
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" checked /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" /> ";
            // line 310
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        } else {
            // line 312
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" checked /> ";
            // line 313
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        }
        // line 315
        echo "              </label><br>
          ";
        // line 316
        echo ($context["captcha"] ?? null);
        echo "
          ";
        // line 317
        if (($context["text_agree"] ?? null)) {
            // line 318
            echo "          </div>
        </div>
      </div>


        <div class=\"form-group text-right\">
          <input type=\"submit\" value=\"";
            // line 324
            echo ($context["text_register"] ?? null);
            echo "\" class=\"btn btn-primary\" />
        </div>
        ";
        }
        // line 327
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
        // line 432
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 437
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 442
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 447
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
        return array (  1137 => 447,  1129 => 442,  1121 => 437,  1113 => 432,  1006 => 327,  1000 => 324,  992 => 318,  990 => 317,  986 => 316,  983 => 315,  978 => 313,  973 => 312,  968 => 310,  963 => 309,  961 => 308,  957 => 307,  950 => 302,  944 => 300,  942 => 299,  939 => 298,  935 => 296,  931 => 294,  929 => 293,  925 => 292,  915 => 284,  909 => 282,  907 => 281,  901 => 280,  895 => 276,  889 => 274,  887 => 273,  881 => 272,  874 => 268,  870 => 266,  864 => 265,  859 => 262,  853 => 261,  851 => 260,  832 => 256,  824 => 253,  817 => 252,  814 => 251,  809 => 248,  803 => 247,  801 => 246,  782 => 242,  774 => 239,  767 => 238,  764 => 237,  759 => 234,  753 => 233,  751 => 232,  732 => 228,  724 => 225,  717 => 224,  714 => 223,  709 => 220,  703 => 219,  701 => 218,  689 => 217,  681 => 216,  676 => 214,  669 => 213,  666 => 212,  661 => 209,  655 => 208,  653 => 207,  637 => 206,  630 => 204,  623 => 203,  620 => 202,  615 => 199,  609 => 198,  607 => 197,  591 => 196,  584 => 194,  577 => 193,  574 => 192,  569 => 189,  563 => 188,  561 => 187,  558 => 186,  551 => 185,  546 => 184,  538 => 183,  535 => 182,  530 => 180,  522 => 179,  519 => 178,  516 => 177,  512 => 176,  507 => 174,  500 => 173,  497 => 172,  492 => 169,  486 => 168,  484 => 167,  481 => 166,  474 => 165,  469 => 164,  461 => 163,  458 => 162,  453 => 160,  445 => 159,  442 => 158,  439 => 157,  435 => 156,  430 => 154,  423 => 153,  420 => 152,  415 => 149,  409 => 148,  407 => 147,  399 => 141,  393 => 140,  381 => 133,  374 => 128,  362 => 121,  356 => 117,  353 => 116,  349 => 115,  340 => 109,  332 => 108,  325 => 106,  318 => 105,  315 => 104,  311 => 103,  305 => 99,  299 => 97,  297 => 96,  291 => 95,  285 => 91,  279 => 89,  277 => 88,  271 => 87,  262 => 80,  256 => 79,  250 => 78,  244 => 74,  238 => 73,  232 => 72,  219 => 66,  213 => 63,  209 => 62,  205 => 60,  199 => 57,  195 => 56,  191 => 54,  188 => 53,  184 => 52,  180 => 51,  172 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 45,  145 => 41,  142 => 40,  139 => 39,  136 => 38,  133 => 37,  130 => 36,  127 => 35,  125 => 34,  121 => 33,  117 => 31,  106 => 29,  102 => 28,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/register.twig", "");
    }
}
