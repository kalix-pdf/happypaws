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
class __TwigTemplate_263d139f02004a84fcacb4e943540ed4f3432bffb3194c864101600bd792c0df extends Template
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
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo ($context["logo"] ?? null);
        echo "\">
<link href=\"catalog/view/theme/hp/stylesheet/register.css\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
</head>

<body style=\"background: url(http://localhost/hp/image/catalog/paw-bg.png);\"> 

<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 30
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <div class=\"row\">";
        // line 34
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 41
            echo "    ";
        }
        // line 42
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"register-logo\">
        <img src=\"http://localhost/hp/image/catalog/icon.png\" alt=\"Happy Paws Logo\">
      </div>
      <h1>";
        // line 46
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 47
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 48
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 50
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group required\" style=\"display: ";
        // line 51
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 52
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 54
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 54) == ($context["customer_group_id"] ?? null))) {
                // line 55
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 57);
                echo "\" checked=\"checked\" />
                  ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 58);
                echo "</label>
              </div>
              ";
            } else {
                // line 61
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 63);
                echo "\" />
                  ";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 64);
                echo "</label>
              </div>
              ";
            }
            // line 67
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
        // line 73
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                ";
        // line 74
        if (($context["error_firstname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>";
        }
        // line 75
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 79
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                ";
        // line 80
        if (($context["error_lastname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>";
        }
        // line 81
        echo "              </div>
            </div>
          </div>

          <div class=\"form-row two-col\">
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 88
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 89
        if (($context["error_email"] ?? null)) {
            // line 90
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 92
        echo "              </div>
            </div>
            <div class=\"form-group required col\">
              <div class=\"input-wrapper\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 96
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                ";
        // line 97
        if (($context["error_telephone"] ?? null)) {
            // line 98
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                ";
        }
        // line 100
        echo "              </div>
            </div>
          </div>

          ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 105
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "select")) {
                // line 106
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 106);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 110
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 117
                    echo "                ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 117)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 117) == (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117)] ?? null) : null)))) {
                        // line 118
                        echo "                
                
                
                
                <option value=\"";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 129
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 134);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 134);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 141
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "              
              
              
              
              
              </select>
              ";
                // line 148
                if ((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                    // line 149
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 150
                echo "</div>
          </div>
          ";
            }
            // line 153
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "radio")) {
                // line 154
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 158
                    echo "                <div class=\"radio\">";
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 158) == (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)))) {
                        // line 159
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 160);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 160);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 161);
                        echo "</label>
                  ";
                    } else {
                        // line 163
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 164);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 164);
                        echo "\" />
                    ";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 165);
                        echo "</label>
                  ";
                    }
                    // line 166
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "</div>
              ";
                // line 168
                if ((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) {
                    // line 169
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 170
                echo "</div>
          </div>
          ";
            }
            // line 173
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "checkbox")) {
                // line 174
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 174);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 177));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 178
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 178), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)))) {
                        // line 179
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 180);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 181);
                        echo "</label>
                  ";
                    } else {
                        // line 183
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 184);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 184);
                        echo "\" />
                    ";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 185);
                        echo "</label>
                  ";
                    }
                    // line 186
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo " </div>
              ";
                // line 188
                if ((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                    // line 189
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 190
                echo " </div>
          </div>
          ";
            }
            // line 193
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "text")) {
                // line 194
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 197);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 197);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "\" class=\"form-control\" />
              ";
                // line 198
                if ((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    // line 199
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 200
                echo " </div>
          </div>
          ";
            }
            // line 203
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "textarea")) {
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
              <textarea name=\"custom_field[";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 207);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 207);
                }
                echo "</textarea>
              ";
                // line 208
                if ((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) {
                    // line 209
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 210
                echo " </div>
          </div>
          ";
            }
            // line 213
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 213) == "file")) {
                // line 214
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 214);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 215);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 218);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 219
                if ((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null)) {
                    // line 220
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 221
                echo "</div>
          </div>
          ";
            }
            // line 224
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 224) == "date")) {
                // line 225
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 225);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 226);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 229);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 229);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 229);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 233
                if ((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null)) {
                    // line 234
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 235
                echo " </div>
          </div>
          ";
            }
            // line 238
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 238) == "time")) {
                // line 239
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 239);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 240);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 243);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 243);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 247
                if ((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null)) {
                    // line 248
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 249
                echo " </div>
          </div>
          ";
            }
            // line 252
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 252) == "datetime")) {
                // line 253
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 253);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 254);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 257
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 257);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 257);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 257);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 261
                if ((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null)) {
                    // line 262
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 263
                echo " </div>
          </div>
          ";
            }
            // line 266
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "        </fieldset>

        <legend>";
        // line 269
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"form-row two-col\">
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 273
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 274
        if (($context["error_password"] ?? null)) {
            // line 275
            echo "                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 277
        echo "            </div>
          </div>
          <div class=\"form-group required col\">
            <div class=\"input-wrapper\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 281
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 282
        if (($context["error_confirm"] ?? null)) {
            // line 283
            echo "                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 285
        echo "            </div>
          </div>
        </div>

        
        <div class=\"form-row two-col\">
          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 293
        echo ($context["text_agree"] ?? null);
        echo "
                ";
        // line 294
        if (($context["agree"] ?? null)) {
            // line 295
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" checked />
                ";
        } else {
            // line 297
            echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" />
                ";
        }
        // line 299
        echo "              </label>
              ";
        // line 300
        if (($context["error_warning"] ?? null)) {
            // line 301
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
              ";
        }
        // line 303
        echo "          </div>
        </div>

          <div class=\"form-group col\">
            <div class=\"input-wrapper\">
              <label>";
        // line 308
        echo ($context["text_newsletter"] ?? null);
        echo "
                ";
        // line 309
        if (($context["newsletter"] ?? null)) {
            // line 310
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" checked /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" /> ";
            // line 311
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        } else {
            // line 313
            echo "                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"1\" /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                  <label class=\"radio-inline\"><input type=\"radio\" name=\"newsletter\" value=\"0\" checked /> ";
            // line 314
            echo ($context["text_no"] ?? null);
            echo "</label>
                ";
        }
        // line 316
        echo "              </label><br>
          ";
        // line 317
        echo ($context["captcha"] ?? null);
        echo "
          ";
        // line 318
        if (($context["text_agree"] ?? null)) {
            // line 319
            echo "          </div>
        </div>
      </div>


        <div class=\"form-group text-right\">
          <input type=\"submit\" value=\"";
            // line 325
            echo ($context["text_register"] ?? null);
            echo "\" class=\"btn btn-primary\" />
        </div>
        ";
        }
        // line 328
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
        // line 433
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 438
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 443
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 448
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
        return array (  1140 => 448,  1132 => 443,  1124 => 438,  1116 => 433,  1009 => 328,  1003 => 325,  995 => 319,  993 => 318,  989 => 317,  986 => 316,  981 => 314,  976 => 313,  971 => 311,  966 => 310,  964 => 309,  960 => 308,  953 => 303,  947 => 301,  945 => 300,  942 => 299,  938 => 297,  934 => 295,  932 => 294,  928 => 293,  918 => 285,  912 => 283,  910 => 282,  904 => 281,  898 => 277,  892 => 275,  890 => 274,  884 => 273,  877 => 269,  873 => 267,  867 => 266,  862 => 263,  856 => 262,  854 => 261,  835 => 257,  827 => 254,  820 => 253,  817 => 252,  812 => 249,  806 => 248,  804 => 247,  785 => 243,  777 => 240,  770 => 239,  767 => 238,  762 => 235,  756 => 234,  754 => 233,  735 => 229,  727 => 226,  720 => 225,  717 => 224,  712 => 221,  706 => 220,  704 => 219,  692 => 218,  684 => 217,  679 => 215,  672 => 214,  669 => 213,  664 => 210,  658 => 209,  656 => 208,  640 => 207,  633 => 205,  626 => 204,  623 => 203,  618 => 200,  612 => 199,  610 => 198,  594 => 197,  587 => 195,  580 => 194,  577 => 193,  572 => 190,  566 => 189,  564 => 188,  561 => 187,  554 => 186,  549 => 185,  541 => 184,  538 => 183,  533 => 181,  525 => 180,  522 => 179,  519 => 178,  515 => 177,  510 => 175,  503 => 174,  500 => 173,  495 => 170,  489 => 169,  487 => 168,  484 => 167,  477 => 166,  472 => 165,  464 => 164,  461 => 163,  456 => 161,  448 => 160,  445 => 159,  442 => 158,  438 => 157,  433 => 155,  426 => 154,  423 => 153,  418 => 150,  412 => 149,  410 => 148,  402 => 142,  396 => 141,  384 => 134,  377 => 129,  365 => 122,  359 => 118,  356 => 117,  352 => 116,  343 => 110,  335 => 109,  328 => 107,  321 => 106,  318 => 105,  314 => 104,  308 => 100,  302 => 98,  300 => 97,  294 => 96,  288 => 92,  282 => 90,  280 => 89,  274 => 88,  265 => 81,  259 => 80,  253 => 79,  247 => 75,  241 => 74,  235 => 73,  222 => 67,  216 => 64,  212 => 63,  208 => 61,  202 => 58,  198 => 57,  194 => 55,  191 => 54,  187 => 53,  183 => 52,  175 => 51,  171 => 50,  166 => 48,  162 => 47,  158 => 46,  148 => 42,  145 => 41,  142 => 40,  139 => 39,  136 => 38,  133 => 37,  130 => 36,  128 => 35,  124 => 34,  120 => 32,  109 => 30,  105 => 29,  95 => 22,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/register.twig", "");
    }
}
