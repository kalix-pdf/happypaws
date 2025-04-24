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

/* __string_template__554fe5d2f7ced8bcbda5cbc16a6c2a5370a314a7b4007e72f0a0f45f14eda942 */
class __TwigTemplate_6953dd62e68978b9965b594900edc9c5383b908e8fb28b334ce41893f12b04e5 extends Template
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
        if (($context["chkIsPartner"] ?? null)) {
            // line 3
            echo "
";
            // line 4
            if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
                // line 5
                echo "<div class=\"container-fluid\" id=\"content\">
  ";
            } else {
                // line 7
                echo "  <div class=\"container\">
    <style>
      ul#nav_tabs{
        align-items: flex-start;
        display: flex;
        flex-wrap: nowrap;
        list-style: none;
        /* margin: 1rem 0; */
        overflow-y: hidden;
        overflow-x: unset;
        width: auto;
      }
    </style>
    ";
            }
            // line 21
            echo "
    <ul class=\"breadcrumb\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 24
                echo "      <li><a href=\"";
                echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>

    ";
            // line 28
            if (($context["error_warning"] ?? null)) {
                // line 29
                echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\">
      </i>";
                // line 31
                echo ($context["error_warning"] ?? null);
                echo "
    </div>
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if (($context["marketplace_product_reapprove"] ?? null)) {
                // line 36
                echo "    <div class=\"alert alert-info\">
      <i class=\"fa fa-info-circle\"></i>
      ";
                // line 38
                echo ($context["marketplace_product_reapprove"] ?? null);
                echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if (($context["success"] ?? null)) {
                // line 44
                echo "    <div class=\"alert alert-success\">
      <i class=\"fa fa-check-circle\"> </i> ";
                // line 45
                echo ($context["success"] ?? null);
                echo "
    </div>
    ";
            }
            // line 48
            echo "
    <div class=\"row\">";
            // line 49
            echo ($context["column_left"] ?? null);
            echo "
      ";
            // line 50
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 51
                echo "      ";
                $context["class"] = "col-sm-6";
                // line 52
                echo "      ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 53
                echo "      ";
                $context["class"] = "col-sm-9";
                // line 54
                echo "      ";
            } else {
                // line 55
                echo "      ";
                $context["class"] = "col-sm-12";
                // line 56
                echo "      ";
            }
            // line 57
            echo "
      <div id=\"content\" class=\"";
            // line 58
            echo ($context["class"] ?? null);
            echo "\">
        ";
            // line 59
            echo ($context["content_top"] ?? null);
            echo "

        <h1>
          ";
            // line 62
            echo ($context["heading_title"] ?? null);
            echo "
          <div class=\"pull-right\">
            <a onclick=\"\$('#form-save').submit();\" data-toggle=\"tooltip\"
              class=\"btn ";
            // line 65
            echo ((($context["product_id"] ?? null)) ? ("btn-info") : ("btn-success"));
            echo "\" title=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"submit\"><i
                class=\"fa fa-save\"></i></a>
            <a href=\"";
            // line 67
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_back"] ?? null);
            echo "\" class=\"btn btn-default\"
              data-original-title=\"Cancel\"><i class=\"fa fa-reply\"></i></a>
          </div>
        </h1>

        <fieldset>

          <legend><i class=\"fa fa-pencil\"></i> ";
            // line 74
            echo ($context["heading_title"] ?? null);
            echo "</legend>

          ";
            // line 76
            if (( !array_key_exists("access_error", $context) && ($context["isMember"] ?? null))) {
                // line 77
                echo "          <form action=\"";
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-save\"
            class=\"form-horizontal\">

            ";
                // line 80
                if ((array_key_exists("wk_seller_group_status", $context) && ($context["wk_seller_group_status"] ?? null))) {
                    // line 81
                    echo "            <input type=\"hidden\" value=\"";
                    if ((array_key_exists("isClone", $context) && ($context["isClone"] ?? null))) {
                        echo " ";
                        echo ($context["isClone"] ?? null);
                    }
                    echo "\"
              name=\"clone\">
            <input type=\"hidden\" value=\"";
                    // line 83
                    if ((array_key_exists("isRelist", $context) && ($context["isRelist"] ?? null))) {
                        echo " ";
                        echo ($context["isRelist"] ?? null);
                    }
                    echo "\"
              name=\"relist\">
            <input type=\"hidden\" value=\"";
                    // line 85
                    if ((array_key_exists("isEdit", $context) && ($context["isEdit"] ?? null))) {
                        echo " ";
                        echo ($context["isEdit"] ?? null);
                    }
                    echo "\" name=\"edit\">
            ";
                }
                // line 87
                echo "
            <ul class=\"nav nav-tabs\" id=\"nav_tabs\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"
                  style=\"";
                // line 90
                if (($context["error_general_tab"] ?? null)) {
                    echo " border-color: red;color:red;";
                }
                echo "\">";
                echo ($context["tab_general"] ?? null);
                echo "</a></li>
              <li><a href=\"#tab-data\" data-toggle=\"tab\"
                  style=\"";
                // line 92
                if (($context["error_data_tab"] ?? null)) {
                    echo " border-color: red;color:red;";
                }
                echo "\">";
                echo ($context["tab_data"] ?? null);
                echo "</a></li>

              ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 94)) {
                    // line 95
                    echo "              <li><a href=\"#tab-links\" data-toggle=\"tab\"
                  style=\"";
                    // line 96
                    if (($context["error_link_tab"] ?? null)) {
                        echo " border-color: red;color:red;";
                    }
                    echo "\">";
                    echo ($context["tab_links"] ?? null);
                    echo "</a></li>
              ";
                }
                // line 98
                echo "
              ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 99)) {
                    // line 100
                    echo "              <li> <a href=\"#tab-attribute\" data-toggle=\"tab\">";
                    echo ($context["tab_attribute"] ?? null);
                    echo "</a></li>
              ";
                }
                // line 102
                echo "
              ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 103)) {
                    // line 104
                    echo "              <li><a href=\"#tab-option\" data-toggle=\"tab\">";
                    echo ($context["tab_option"] ?? null);
                    echo "</a></li>
              ";
                }
                // line 106
                echo "
              ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 107)) {
                    // line 108
                    echo "              <li> <a href=\"#tab-discount\" data-toggle=\"tab\"
                  style=\"";
                    // line 109
                    if (($context["error_discount_tab"] ?? null)) {
                        echo " border-color: red;color:red;";
                    }
                    echo "\">";
                    echo ($context["tab_discount"] ?? null);
                    echo "</a>
              </li>
              ";
                }
                // line 112
                echo "
              ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 113)) {
                    // line 114
                    echo "              <li><a href=\"#tab-special\" data-toggle=\"tab\"
                  style=\"";
                    // line 115
                    if (($context["error_special_tab"] ?? null)) {
                        echo " border-color: red;color:red;";
                    }
                    echo "\">";
                    echo ($context["tab_special"] ?? null);
                    echo "</a></li>
              ";
                }
                // line 117
                echo "
              ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "images", [], "array", true, true, false, 118)) {
                    // line 119
                    echo "              <li> <a href=\"#tab-image\" data-toggle=\"tab\"
                  style=\"";
                    // line 120
                    if (($context["error_image_tab"] ?? null)) {
                        echo " border-color: red;color:red;";
                    }
                    echo "\">";
                    echo ($context["tab_image"] ?? null);
                    echo "</a> </li>
              ";
                }
                // line 122
                echo "
              ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "custom-field", [], "array", true, true, false, 123)) {
                    // line 124
                    echo "              <li><a href=\"#tab-custom-field\" data-toggle=\"tab\"
                  style=\"";
                    // line 125
                    if (($context["error_custom_tab"] ?? null)) {
                        echo " border-color: red;color:red;";
                    }
                    echo "\">";
                    echo ($context["text_custom_field"] ?? null);
                    echo "</a>
              </li>
              ";
                }
                // line 128
                echo "
              ";
                // line 129
                if ((($context["wk_pricealert_status"] ?? null) && ($context["wk_pricealert_allowed_seller"] ?? null))) {
                    // line 130
                    echo "              <li><a href=\"#tab-pricealert\" data-toggle=\"tab\">";
                    echo ($context["tab_palert"] ?? null);
                    echo "</a></li>
              ";
                }
                // line 132
                echo "
              ";
                // line 133
                if ((($context["sbsType"] ?? null) == 1)) {
                    // line 134
                    echo "                <li><a href=\"#tab-ppd\" data-toggle=\"tab\">Piso Per Day Per Product</a></li>
              ";
                } elseif ((                // line 135
($context["sbsType"] ?? null) == 2)) {
                    // line 136
                    echo "                <li><a href=\"#tab-ppm\" data-toggle=\"tab\">Piso Per Month Per Product</a></li>
              ";
                } elseif ((                // line 137
($context["sbsType"] ?? null) == 3)) {
                    // line 138
                    echo "                <li><a href=\"#tab-cms\" data-toggle=\"tab\">Commission Type</a></li>
              ";
                }
                // line 140
                echo "              <!--<li><a href=\"#tab-update-reason\" data-toggle=\"tab\">";
                echo "</a></li>-->

            </ul>

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <ul class=\"nav nav-tabs\" id=\"languages\">
                  ";
                // line 147
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 148
                    echo "                  <li class=\"";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\">
                    <a href=\"#language";
                    // line 149
                    echo (($__internal_compile_2 = $context["language"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["language_id"] ?? null) : null);
                    echo "\" data-toggle=\"tab\">
                      <img src=\"catalog/language/";
                    // line 150
                    echo (($__internal_compile_3 = $context["language"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_compile_4 = $context["language"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["code"] ?? null) : null);
                    echo ".png\"
                        title=\"";
                    // line 151
                    echo (($__internal_compile_5 = $context["language"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                    echo "\" />
                      ";
                    // line 152
                    echo (($__internal_compile_6 = $context["language"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                    echo "</a>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                </ul>
                <div class=\"tab-content\">
                  ";
                // line 157
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 158
                    echo "                  <div class=\"tab-pane ";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\"
                    id=\"language";
                    // line 159
                    echo (($__internal_compile_7 = $context["language"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["language_id"] ?? null) : null);
                    echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-name";
                    // line 162
                    echo (($__internal_compile_8 = $context["language"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_name"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\"
                          name=\"product_description[";
                    // line 165
                    echo (($__internal_compile_9 = $context["language"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["language_id"] ?? null) : null);
                    echo "][name]\"
                          value=\"";
                    // line 166
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_10 = $context["language"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["language_id"] ?? null) : null), [], "array", true, true, false, 166)) ? ((($__internal_compile_11 = (($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[(($__internal_compile_13 = $context["language"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null)) : (""));
                    echo "\"
                          placeholder=\"";
                    // line 167
                    echo ($context["entry_name"] ?? null);
                    echo "\" id=\"input-name";
                    echo (($__internal_compile_14 = $context["language"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["language_id"] ?? null) : null);
                    echo "\" />
                        ";
                    // line 168
                    if (twig_get_attribute($this->env, $this->source, ($context["error_name"] ?? null), (($__internal_compile_15 = $context["language"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["language_id"] ?? null) : null), [], "array", true, true, false, 168)) {
                        // line 169
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_16 = ($context["error_name"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["language"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 171
                    echo "                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-description";
                    // line 175
                    echo (($__internal_compile_18 = $context["language"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_description"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <textarea name=\"product_description[";
                    // line 177
                    echo (($__internal_compile_19 = $context["language"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["language_id"] ?? null) : null);
                    echo "][description]\"
                          placeholder=\"";
                    // line 178
                    echo ($context["entry_description"] ?? null);
                    echo "\" id=\"input-description";
                    echo (($__internal_compile_20 = $context["language"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\">";
                    // line 179
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_21 = $context["language"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["language_id"] ?? null) : null), [], "array", true, true, false, 179)) ? ((($__internal_compile_22 = (($__internal_compile_23 = ($context["product_description"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[(($__internal_compile_24 = $context["language"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["description"] ?? null) : null)) : (""));
                    echo "</textarea>
                      </div>
                    </div>

                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-meta-description";
                    // line 185
                    echo (($__internal_compile_25 = $context["language"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_meta_title"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" name=\"product_description[";
                    // line 187
                    echo (($__internal_compile_26 = $context["language"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["language_id"] ?? null) : null);
                    echo "][meta_title]\"
                          placeholder=\"";
                    // line 188
                    echo ($context["entry_meta_title"] ?? null);
                    echo "\" id=\"input-meta-description";
                    echo (($__internal_compile_27 = $context["language"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\"
                          value=\"";
                    // line 190
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_28 = $context["language"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["language_id"] ?? null) : null), [], "array", true, true, false, 190)) ? ((($__internal_compile_29 = (($__internal_compile_30 = ($context["product_description"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[(($__internal_compile_31 = $context["language"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["meta_title"] ?? null) : null)) : (""));
                    echo "\" />
                        ";
                    // line 191
                    if (twig_get_attribute($this->env, $this->source, ($context["error_meta_title"] ?? null), (($__internal_compile_32 = $context["language"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["language_id"] ?? null) : null), [], "array", true, true, false, 191)) {
                        // line 192
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_33 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[(($__internal_compile_34 = $context["language"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 194
                    echo "                      </div>
                    </div>

                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-description";
                    // line 200
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description";
                    // line 203
                    echo "                              placeholder=\"";
                    echo "\"
                              id=\"input-meta-description";
                    // line 204
                    echo "\"
                              class=\"form-control\">";
                    // line 205
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-keyword";
                    // line 212
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description[";
                    // line 214
                    echo "rows=\"5\"
                              placeholder=\"";
                    // line 215
                    echo "\"
                              class=\"form-control\">";
                    // line 216
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\" for=\"input-tag";
                    // line 222
                    echo "\"><span
                              data-toggle=\"tooltip\" title=\"";
                    // line 223
                    echo "\">";
                    echo "</span></label>
                          <div class=\"col-sm-9\">
                            <input class=\"form-control\" type=\"text\"
                              name=\"product_description[";
                    // line 226
                    echo "][tag]\"
                              value=\"";
                    // line 227
                    echo "\"
                              placeholder=\"";
                    // line 228
                    echo "\" />
                          </div>
                        </div>
                    -->
                  </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                </div>
                <!--tab-content-language-->
              </div>

              <div class=\"tab-pane\" id=\"tab-data\">
                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-model\">";
                // line 240
                echo ($context["entry_model"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"model\" value=\"";
                // line 242
                echo ($context["model"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_model"] ?? null);
                echo "\" id=\"input-model\"
                      class=\"form-control\" />
                      ";
                // line 244
                if (($context["error_model"] ?? null)) {
                    // line 245
                    echo "                      <div class=\"text-danger\">";
                    echo ($context["error_model"] ?? null);
                    echo "</div>
                      ";
                }
                // line 247
                echo "                  </div>
                </div>
                ";
                // line 249
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sku", [], "array", true, true, false, 249)) {
                    // line 250
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 252
                    echo ($context["help_sku"] ?? null);
                    echo "\">";
                    echo ($context["entry_sku"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sku\" value=\"";
                    // line 254
                    echo ($context["sku"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sku"] ?? null);
                    echo "\" id=\"input-sku\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 259
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "upc", [], "array", true, true, false, 259)) {
                    // line 260
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 262
                    echo ($context["help_upc"] ?? null);
                    echo "\">";
                    echo ($context["entry_upc"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"upc\" value=\"";
                    // line 264
                    echo ($context["upc"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_upc"] ?? null);
                    echo "\" id=\"input-upc\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 269
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "ean", [], "array", true, true, false, 269)) {
                    // line 270
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 272
                    echo ($context["help_ean"] ?? null);
                    echo "\">";
                    echo ($context["entry_ean"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"ean\" value=\"";
                    // line 274
                    echo ($context["ean"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_ean"] ?? null);
                    echo "\" id=\"input-ean\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 279
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "jan", [], "array", true, true, false, 279)) {
                    // line 280
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 282
                    echo ($context["help_jan"] ?? null);
                    echo "\">";
                    echo ($context["entry_jan"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"jan\" value=\"";
                    // line 284
                    echo ($context["jan"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_jan"] ?? null);
                    echo "\" id=\"input-jan\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 289
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "isbn", [], "array", true, true, false, 289)) {
                    // line 290
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 292
                    echo ($context["help_isbn"] ?? null);
                    echo "\">";
                    echo ($context["entry_isbn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"isbn\" value=\"";
                    // line 294
                    echo ($context["isbn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_isbn"] ?? null);
                    echo "\" id=\"input-isbn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 299
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "mpn", [], "array", true, true, false, 299)) {
                    // line 300
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 302
                    echo ($context["help_mpn"] ?? null);
                    echo "\">";
                    echo ($context["entry_mpn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"mpn\" value=\"";
                    // line 304
                    echo ($context["mpn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_mpn"] ?? null);
                    echo "\" id=\"input-mpn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 309
                echo "                
                ";
                // line 311
                echo "                <!--<div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-location\">";
                // line 312
                echo ($context["entry_location"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"location\" value=\"";
                // line 314
                echo ($context["location"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_location"] ?? null);
                echo "\"
                      id=\"input-location\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                // line 316
                echo ($context["prevPrice"] ?? null);
                echo "\" />
                  </div>
                </div>-->
                ";
                // line 320
                echo "                
                ";
                // line 321
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "price", [], "array", true, true, false, 321)) {
                    // line 322
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-price\">";
                    // line 323
                    echo ($context["entry_price"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"price\" value=\"";
                    // line 325
                    echo ($context["price"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" id=\"input-price\"
                      class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                    // line 327
                    echo ($context["prevPrice"] ?? null);
                    echo "\" />
                   
                  </div>
                </div>
                ";
                }
                // line 332
                echo "                <!-- membership codes starts here -->
                ";
                // line 333
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 334
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-expiring-date\">";
                    // line 335
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"expiry_date\" value=\"";
                    // line 337
                    echo ($context["expiry_date"] ?? null);
                    echo "\"
                      placeholder=\"";
                    // line 338
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "\" id=\"input-expiring-date\" class=\"form-control\" disabled />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-relist-date\">";
                    // line 342
                    echo ($context["entry_relist_duration"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"relist_duration\" class=\"form-control\" id=\"input-relist-duration\">

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-auto-relist\">";
                    // line 350
                    echo ($context["entry_auto_relist"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"checkbox\">
                      <label for=\"input-auto-relist\">
                        <input type=\"checkbox\" name=\"auto_relist\" id=\"input-auto-relist\">
                        ";
                    // line 355
                    echo ($context["entry_auto_relist_lable"] ?? null);
                    echo "
                      </label>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 361
                echo "                <!-- membership codes ends here -->
                ";
                // line 362
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "tax_class_id", [], "array", true, true, false, 362)) {
                    // line 363
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-tax-class\">";
                    // line 364
                    echo ($context["entry_tax_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                      <option value=\"0\">";
                    // line 367
                    echo ($context["text_none"] ?? null);
                    echo "</option>
                      ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                        // line 369
                        echo "                      ";
                        if (((($__internal_compile_35 = $context["tax_class"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["tax_class_id"] ?? null) : null) == ($context["tax_class_id"] ?? null))) {
                            // line 370
                            echo "                      <option value=\"";
                            echo (($__internal_compile_36 = $context["tax_class"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["tax_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_compile_37 = $context["tax_class"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["title"] ?? null) : null);
                            echo "
                      </option>
                      ";
                        } else {
                            // line 373
                            echo "                      <option value=\"";
                            echo (($__internal_compile_38 = $context["tax_class"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["tax_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_39 = $context["tax_class"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 375
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 376
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 380
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "quantity", [], "array", true, true, false, 380)) {
                    // line 381
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-quantity\">";
                    // line 382
                    echo ($context["entry_quantity"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"quantity\" value=\"";
                    // line 384
                    echo ($context["quantity"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                      id=\"input-quantity\" class=\"form-control\" />

                    <!-- Membership code -->
                    ";
                    // line 388
                    if (((array_key_exists("wk_seller_group_status", $context) && array_key_exists("marketplace_account_menu_sequence", $context)) && twig_in_filter("membership", twig_get_array_keys_filter(($context["marketplace_account_menu_sequence"] ?? null))))) {
                        // line 389
                        echo "                    <input type=\"hidden\" name=\"prevQuantity\" id=\"prevQuantity\" value=\"";
                        echo ($context["prevQuantity"] ?? null);
                        echo "\" />
                    <a href=\"#myModalanswer\" id=\"showerror\" role=\"button\" class=\"hide tfbutton tfbuttonborder asub\"
                      data-toggle=\"modal\"></a>
                    ";
                    }
                    // line 393
                    echo "                    <!--  -->
                   
                  </div>
                </div>
                ";
                }
                // line 398
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "minimum", [], "array", true, true, false, 398)) {
                    // line 399
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 401
                    echo ($context["help_minimum"] ?? null);
                    echo "\">";
                    echo ($context["entry_minimum"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"minimum\" value=\"";
                    // line 403
                    echo ($context["minimum"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_minimum"] ?? null);
                    echo "\"
                      id=\"input-minimum\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 408
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "subtract", [], "array", true, true, false, 408)) {
                    // line 409
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-subtract\">";
                    // line 410
                    echo ($context["entry_subtract"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                      ";
                    // line 413
                    if (($context["subtract"] ?? null)) {
                        // line 414
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 415
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 417
                        echo "                      <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 418
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 420
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 424
                echo "
                ";
                // line 425
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "status", [], "array", true, true, false, 425)) {
                    // line 426
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
                    // line 427
                    echo ($context["entry_status"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
                    // line 430
                    if (($context["status"] ?? null)) {
                        // line 431
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 432
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 434
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 435
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 437
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 441
                echo "
                ";
                // line 442
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "stock_status_id", [], "array", true, true, false, 442)) {
                    // line 443
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 445
                    echo ($context["help_stock_status"] ?? null);
                    echo "\">";
                    echo ($context["entry_stock_status"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                      ";
                    // line 448
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
                        // line 449
                        echo "                      ";
                        if (((($__internal_compile_40 = $context["stock_status"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["stock_status_id"] ?? null) : null) == ($context["stock_status_id"] ?? null))) {
                            // line 450
                            echo "                      <option value=\"";
                            echo (($__internal_compile_41 = $context["stock_status"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["stock_status_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 451
                            echo (($__internal_compile_42 = $context["stock_status"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["name"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 453
                            echo "                      <option value=\"";
                            echo (($__internal_compile_43 = $context["stock_status"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["stock_status_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_44 = $context["stock_status"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 455
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 456
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 460
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "shipping", [], "array", true, true, false, 460)) {
                    // line 461
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                    // line 462
                    echo ($context["entry_shipping"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      ";
                    // line 465
                    if (($context["shipping"] ?? null)) {
                        // line 466
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
                        // line 467
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 469
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
                        // line 470
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    }
                    // line 472
                    echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
                    // line 474
                    if ( !($context["shipping"] ?? null)) {
                        // line 475
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
                        // line 476
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 478
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
                        // line 479
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    }
                    // line 481
                    echo "                    </label>
                  </div>
                </div>
                ";
                }
                // line 485
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "keyword", [], "array", true, true, false, 485)) {
                    echo "                
                ";
                    // line 486
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 487
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 489
                        echo ($context["help_keyword"] ?? null);
                        echo "\">";
                        echo ($context["entry_keyword"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\">
                        <img src=\"catalog/language/";
                        // line 493
                        echo (($__internal_compile_45 = $context["language"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["code"] ?? null) : null);
                        echo "/";
                        echo (($__internal_compile_46 = $context["language"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["code"] ?? null) : null);
                        echo ".png\"
                          title=\"";
                        // line 494
                        echo (($__internal_compile_47 = $context["language"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null);
                        echo "\" />
                      </span>
                      <input type=\"text\" name=\"keyword[";
                        // line 496
                        echo (($__internal_compile_48 = $context["language"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["language_id"] ?? null) : null);
                        echo "]\"
                        value=\"";
                        // line 497
                        echo (($__internal_compile_49 = ($context["keyword"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[(($__internal_compile_50 = $context["language"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["language_id"] ?? null) : null)] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_keyword"] ?? null);
                        echo "\"
                        id=\"input-keyword\" class=\"form-control\" />
                      ";
                        // line 499
                        if (($context["error_keyword"] ?? null)) {
                            // line 500
                            echo "                      <div class=\"text-danger\">";
                            echo ($context["error_keyword"] ?? null);
                            echo "</div>
                      ";
                        }
                        // line 502
                        echo "                      </div>
                  </div>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 506
                    echo "                ";
                }
                // line 507
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "image", [], "array", true, true, false, 507)) {
                    // line 508
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\">";
                    // line 509
                    echo ($context["entry_image"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                      <img id=\"image-thumb-image\" src=\"";
                    // line 512
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"\" title=\"\" />
                    </div>
                    <input type=\"hidden\" name=\"image\" value=\"";
                    // line 514
                    echo ($context["thumb_img"] ?? null);
                    echo "\" id=\"image-target-image\" />
                    <div class=\"btn-group imgoption\">
                      <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 521
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "date_available", [], "array", true, true, false, 521)) {
                    // line 522
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-date-available\">";
                    // line 523
                    echo ($context["entry_date_available"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group data-date\">
                      <input type=\"text\" name=\"date_available\" value=\"";
                    // line 526
                    echo ($context["date_available"] ?? null);
                    echo "\"
                        placeholder=\"";
                    // line 527
                    echo ($context["entry_date_available"] ?? null);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\"
                        class=\"form-control\" />
                      <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 536
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length", [], "array", true, true, false, 536)) {
                    // line 537
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length\"><span data-toggle=\"tooltip\" title=\"This is a required field for shipping, Please input the dimension of your product. Dimensions in unit CM\">
                  Dimensions in unit cm (L x W x H)
                   </span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"row\">
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"length\" value=\"";
                    // line 544
                    echo ($context["length"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_length"] ?? null);
                    echo "\"
                          id=\"input-length\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 546
                    echo ($context["error_length"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"width\" value=\"";
                    // line 549
                    echo ($context["width"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_width"] ?? null);
                    echo "\"
                          id=\"input-width\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 551
                    echo ($context["error_width"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"height\" value=\"";
                    // line 554
                    echo ($context["height"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_height"] ?? null);
                    echo "\"
                          id=\"input-height\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 556
                    echo ($context["error_height"] ?? null);
                    echo "</div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 562
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length_class_id", [], "array", true, true, false, 562)) {
                    // line 563
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length-class\">";
                    // line 564
                    echo ($context["entry_length"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                      ";
                    // line 567
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
                        // line 568
                        echo "                      ";
                        if (((($__internal_compile_51 = $context["length_class"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["length_class_id"] ?? null) : null) == ($context["length_class_id"] ?? null))) {
                            // line 569
                            echo "                      <option value=\"";
                            echo (($__internal_compile_52 = $context["length_class"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["length_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 570
                            echo (($__internal_compile_53 = $context["length_class"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 572
                            echo "                      <option value=\"";
                            echo (($__internal_compile_54 = $context["length_class"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["length_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_55 = $context["length_class"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 574
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 575
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 579
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight", [], "array", true, true, false, 579)) {
                    // line 580
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight\">
                  <span data-toggle=\"tooltip\" title=\"weight in grams unit\">
                  Weight in unit grams</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"weight\" value=\"";
                    // line 585
                    echo ($context["weight"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_weight"] ?? null);
                    echo "\"
                      id=\"input-weight\" class=\"form-control\" />
                      <div class=\"text-danger\">";
                    // line 587
                    echo ($context["error_weight"] ?? null);
                    echo "</div>
                  </div>
                </div>
                ";
                }
                // line 591
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight_class_id", [], "array", true, true, false, 591)) {
                    // line 592
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight-class\">";
                    // line 593
                    echo ($context["entry_weight_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                      ";
                    // line 596
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
                        // line 597
                        echo "                      ";
                        if (((($__internal_compile_56 = $context["weight_class"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["weight_class_id"] ?? null) : null) == ($context["weight_class_id"] ?? null))) {
                            // line 598
                            echo "                      <option value=\"";
                            echo (($__internal_compile_57 = $context["weight_class"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["weight_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 599
                            echo (($__internal_compile_58 = $context["weight_class"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 601
                            echo "                      <option value=\"";
                            echo (($__internal_compile_59 = $context["weight_class"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["weight_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_60 = $context["weight_class"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 603
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 604
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 608
                echo "
                ";
                // line 609
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sort_order", [], "array", true, true, false, 609)) {
                    // line 610
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
                    // line 611
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sort_order\" value=\"";
                    // line 613
                    echo ($context["sort_order"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\"
                      id=\"input-sort-order\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 618
                echo "
              </div>

              <!-- link tab -->
              ";
                // line 622
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 622)) {
                    // line 623
                    echo "              <input type=\"hidden\" name=\"product_link_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-links\">
                ";
                    // line 625
                    if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "manufacturer_id", [], "array", true, true, false, 625)) {
                        // line 626
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 628
                        echo ($context["help_manufacturer"] ?? null);
                        echo "\">";
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
                        // line 630
                        echo ($context["manufacturer"] ?? null);
                        echo "\"
                      placeholder=\"";
                        // line 631
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
                        // line 632
                        echo ($context["manufacturer_id"] ?? null);
                        echo "\" />
                  </div>
                </div>
                ";
                    }
                    // line 636
                    echo "                <div class=\"form-group ";
                    if (($context["category_required"] ?? null)) {
                        echo "required";
                    }
                    echo "\">
                  <label class=\"col-sm-3 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 638
                    echo ($context["help_category"] ?? null);
                    echo "\">";
                    echo ($context["entry_category"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <a id=\"input-category\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#category-modal\"
                      style=\"margin-bottom: 10px;\">";
                    // line 641
                    echo ($context["text_addcategory"] ?? null);
                    echo " </a>
                    <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 643
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                        // line 644
                        echo "                      <div id=\"product-category";
                        echo (($__internal_compile_61 = $context["product_category"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["category_id"] ?? null) : null);
                        echo "\"><i
                          class=\"fa fa-minus-circle \"></i>";
                        // line 645
                        echo (($__internal_compile_62 = $context["product_category"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
                        // line 646
                        echo (($__internal_compile_63 = $context["product_category"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["category_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 649
                    echo "                    </div>
                    ";
                    // line 650
                    if (($context["error_category"] ?? null)) {
                        // line 651
                        echo "                    <div class=\"text-danger\">";
                        echo ($context["error_category"] ?? null);
                        echo "</div>
                    ";
                    }
                    // line 653
                    echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 657
                    echo ($context["help_filter"] ?? null);
                    echo "\">";
                    echo ($context["entry_filter"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
                    // line 659
                    echo ($context["entry_filter"] ?? null);
                    echo "\" id=\"input-filter\"
                      class=\"form-control\" />
                    <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 662
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
                        // line 663
                        echo "                      <div id=\"product-filter";
                        echo (($__internal_compile_64 = $context["product_filter"]) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["filter_id"] ?? null) : null);
                        echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                        // line 664
                        echo (($__internal_compile_65 = $context["product_filter"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
                        // line 665
                        echo (($__internal_compile_66 = $context["product_filter"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["filter_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 668
                    echo "                    </div>
                  </div>
                </div>
                ";
                    // line 671
                    if (((array_key_exists("marketplace_seller_product_store", $context) && ($context["marketplace_seller_product_store"] ?? null)) && (($context["marketplace_seller_product_store"] ?? null) == "choose_store"))) {
                        // line 672
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                        // line 673
                        echo ($context["entry_store"] ?? null);
                        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      <div class=\"checkbox\">
                        <label>
                          ";
                        // line 678
                        if (twig_in_filter(0, ($context["product_store"] ?? null))) {
                            // line 679
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" checked=\"checked\" />
                          ";
                            // line 680
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        } else {
                            // line 682
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" />
                          ";
                            // line 683
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        }
                        // line 685
                        echo "                        </label>
                      </div>
                      ";
                        // line 687
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                            // line 688
                            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
                            // line 690
                            if (twig_in_filter((($__internal_compile_67 = $context["store"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["store_id"] ?? null) : null), ($context["product_store"] ?? null))) {
                                // line 691
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_68 = $context["store"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["store_id"] ?? null) : null);
                                echo "\"
                            checked=\"checked\" />
                          ";
                                // line 693
                                echo (($__internal_compile_69 = $context["store"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null);
                                echo "
                          ";
                            } else {
                                // line 695
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_70 = $context["store"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["store_id"] ?? null) : null);
                                echo "\" />
                          ";
                                // line 696
                                echo (($__internal_compile_71 = $context["store"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["name"] ?? null) : null);
                                echo "
                          ";
                            }
                            // line 698
                            echo "                        </label>
                      </div>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 701
                        echo "                    </div>
                  </div>
                </div>
                ";
                    }
                    // line 705
                    echo "                <!--
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 708
                    echo "\">";
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
                    // line 710
                    echo "\" id=\"input-download\"
                      class=\"form-control\" />
                    <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 714
                    echo "                      <div id=\"product-download";
                    echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                    // line 716
                    echo "                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
                    echo "\" />
                      </div>
                      ";
                    // line 719
                    echo "                    </div>
                    </div>
                </div>
                -->
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 725
                    echo ($context["help_related"] ?? null);
                    echo "\">";
                    echo ($context["entry_related"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
                    // line 727
                    echo ($context["entry_related"] ?? null);
                    echo "\" id=\"input-related\"
                      class=\"form-control\" />
                    <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 730
                    $context["class"] = "odd";
                    // line 731
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                        // line 732
                        echo "                      ";
                        $context["class"] = (((($context["class"] ?? null) == "even")) ? ("odd") : ("even"));
                        // line 733
                        echo "                      <div id=\"product-related";
                        echo (($__internal_compile_72 = $context["product_related"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["product_id"] ?? null) : null);
                        echo "\" class=\"";
                        echo ($context["class"] ?? null);
                        echo "\"><i
                          class=\"fa fa-minus-circle\"></i> ";
                        // line 734
                        echo (($__internal_compile_73 = $context["product_related"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
                        // line 735
                        echo (($__internal_compile_74 = $context["product_related"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["product_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 738
                    echo "                    </div>
                  </div>
                </div>

              </div>
              ";
                }
                // line 744
                echo "

              ";
                // line 747
                echo "              <div class=\"tab-pane\" id=\"tab-ppd\">
                <h1>You choose Piso per day per product type of subscription</h1>
                <labe>Choose how many days your product will be displayed
                <select class=\"form-control required\">
                  <option>
                  Choose how many days
                  </option>
                  <option>
                  1 minute
                  </option>
                  <option>
                  5 days
                  </option>
                  <option>
                  10 days
                  </option>
                  <option>
                  15 days
                  </option>
                  <option>
                  20 days
                  </option>
                  <option>
                  25 days
                  </option>
                  <option>
                  30 days
                  </option>
                </select>
              </label>
              </div>

              <!-- attribute tab -->
              ";
                // line 780
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 780)) {
                    // line 781
                    echo "              <input type=\"hidden\" name=\"product_attribute_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-attribute\">
                <div class=\"table-responsive\">
                  <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 787
                    echo ($context["entry_attribute"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 788
                    echo ($context["entry_text"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>

                    ";
                    // line 793
                    $context["attribute_row"] = 0;
                    // line 794
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
                        // line 795
                        echo "                    <tbody id=\"attribute-row";
                        echo ($context["attribute_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <input type=\"text\" name=\"product_attribute[";
                        // line 798
                        echo ($context["attribute_row"] ?? null);
                        echo "][name]\"
                            value=\"";
                        // line 799
                        echo (($__internal_compile_75 = $context["product_attribute"]) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["name"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_attribute"] ?? null);
                        echo "\"
                            class=\"form-control\" />
                          <input type=\"hidden\" name=\"product_attribute[";
                        // line 801
                        echo ($context["attribute_row"] ?? null);
                        echo "][attribute_id]\"
                            value=\"";
                        // line 802
                        echo (($__internal_compile_76 = $context["product_attribute"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["attribute_id"] ?? null) : null);
                        echo "\" />
                        </td>
                        <td class=\"text-left\">
                          ";
                        // line 805
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 806
                            echo "                          <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                              <img src=\"catalog/language/";
                            // line 808
                            echo (($__internal_compile_77 = $context["language"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["code"] ?? null) : null);
                            echo "/";
                            echo (($__internal_compile_78 = $context["language"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["code"] ?? null) : null);
                            echo ".png\"
                                title=\"";
                            // line 809
                            echo (($__internal_compile_79 = $context["language"]) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["name"] ?? null) : null);
                            echo "\" />
                            </span>
                            <textarea
                              name=\"product_attribute[";
                            // line 812
                            echo ($context["attribute_row"] ?? null);
                            echo "][product_attribute_description][";
                            echo (($__internal_compile_80 = $context["language"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["language_id"] ?? null) : null);
                            echo "][text]\"
                              cols=\"40\" rows=\"5\"
                              class=\"form-control\">";
                            // line 814
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "array", false, true, false, 814), (($__internal_compile_81 = $context["language"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["language_id"] ?? null) : null), [], "array", true, true, false, 814)) ? ((($__internal_compile_82 = (($__internal_compile_83 = (($__internal_compile_84 = $context["product_attribute"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["product_attribute_description"] ?? null) : null)) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83[(($__internal_compile_85 = $context["language"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["text"] ?? null) : null)) : (""));
                            echo "</textarea>
                          </div>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 817
                        echo "                        </td>
                        <td class=\"text-left\">
                          <button type=\"button\"
                            onclick=\"\$('#attribute-row";
                        // line 820
                        echo ($context["attribute_row"] ?? null);
                        echo "').remove(); \$(\\'.tooltip.in\\').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 821
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button>
                        </td>
                      </tr>
                    </tbody>
                    ";
                        // line 826
                        $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
                        // line 827
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 828
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\">
                          <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 833
                    echo ($context["button_add_attribute"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-plus-circle\"></i></button>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!--table-responsive-->
              </div>
              ";
                }
                // line 843
                echo "
              <!-- option tab -->
              ";
                // line 845
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 845)) {
                    // line 846
                    echo "              <input type=\"hidden\" name=\"product_option_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-option\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                      ";
                    // line 851
                    $context["option_row"] = 0;
                    // line 852
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 853
                        echo "
                      <li><a href=\"#tab-option";
                        // line 854
                        echo ($context["option_row"] ?? null);
                        echo "\" data-toggle=\"tab\" id=\"option";
                        echo ($context["option_row"] ?? null);
                        echo "\"><i
                            class=\"fa fa-trash\"
                            onclick=\"\$('a[href=\\'#tab-option";
                        // line 856
                        echo ($context["option_row"] ?? null);
                        echo "\\']').parent().remove(); \$('#tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "').remove(); \$('#option a:first').tab('show');\"></i>
                          ";
                        // line 857
                        echo (($__internal_compile_86 = $context["product_option"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["name"] ?? null) : null);
                        echo "</a></li>
                      ";
                        // line 858
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 859
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 860
                    echo "                      <li>
                        <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
                    // line 861
                    echo ($context["button_add_option"] ?? null);
                    echo "\"
                          id=\"input-option\" class=\"form-control\" />
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\">
                      ";
                    // line 868
                    $context["option_row"] = 0;
                    // line 869
                    echo "                      ";
                    $context["option_value_row"] = 0;
                    // line 870
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 871
                        echo "                      <div class=\"tab-pane\" id=\"tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "\">
                        <input type=\"hidden\" name=\"product_option[";
                        // line 872
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_id]\"
                          value=\"";
                        // line 873
                        echo (($__internal_compile_87 = $context["product_option"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["product_option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 874
                        echo ($context["option_row"] ?? null);
                        echo "][name]\"
                          value=\"";
                        // line 875
                        echo (($__internal_compile_88 = $context["product_option"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["name"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 876
                        echo ($context["option_row"] ?? null);
                        echo "][option_id]\"
                          value=\"";
                        // line 877
                        echo (($__internal_compile_89 = $context["product_option"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 878
                        echo ($context["option_row"] ?? null);
                        echo "][type]\"
                          value=\"";
                        // line 879
                        echo (($__internal_compile_90 = $context["product_option"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["type"] ?? null) : null);
                        echo "\" />
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-required";
                        // line 882
                        echo ($context["option_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_required"] ?? null);
                        echo "</label>
                          <div class=\"col-sm-9\">
                            <select name=\"product_option[";
                        // line 884
                        echo ($context["option_row"] ?? null);
                        echo "][required]\"
                              id=\"input-required";
                        // line 885
                        echo ($context["option_row"] ?? null);
                        echo "\" class=\"form-control\">
                              ";
                        // line 886
                        if ((($__internal_compile_91 = $context["product_option"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["required"] ?? null) : null)) {
                            // line 887
                            echo "                              <option value=\"1\" selected=\"selected\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\">";
                            // line 888
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        } else {
                            // line 890
                            echo "                              <option value=\"1\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                            // line 891
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        }
                        // line 893
                        echo "                            </select>
                          </div>
                        </div>

                        ";
                        // line 897
                        if (((($__internal_compile_92 = $context["product_option"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["type"] ?? null) : null) == "text")) {
                            // line 898
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 900
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 902
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 903
                            echo (($__internal_compile_93 = $context["product_option"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 904
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 908
                        echo "                        ";
                        if (((($__internal_compile_94 = $context["product_option"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["type"] ?? null) : null) == "textarea")) {
                            // line 909
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 911
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_option[";
                            // line 913
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\" rows=\"5\"
                              placeholder=\"";
                            // line 914
                            echo ($context["entry_option_value"] ?? null);
                            echo "\" id=\"input-value";
                            echo ($context["option_row"] ?? null);
                            echo "\"
                              class=\"form-control\">";
                            // line 915
                            echo (($__internal_compile_95 = $context["product_option"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["option_value"] ?? null) : null);
                            echo "</textarea>
                          </div>
                        </div>
                        ";
                        }
                        // line 919
                        echo "                        ";
                        if (((($__internal_compile_96 = $context["product_option"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["type"] ?? null) : null) == "file")) {
                            // line 920
                            echo "                        <div class=\"form-group\" style=\"display: none;\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 922
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 924
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 925
                            echo (($__internal_compile_97 = $context["product_option"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 926
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 930
                        echo "                        ";
                        if (((($__internal_compile_98 = $context["product_option"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["type"] ?? null) : null) == "date")) {
                            // line 931
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 933
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-3\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                            // line 936
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 937
                            echo (($__internal_compile_99 = $context["product_option"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                            // line 938
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                        }
                        // line 946
                        echo "                        ";
                        if (((($__internal_compile_100 = $context["product_option"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["type"] ?? null) : null) == "time")) {
                            // line 947
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 949
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                            // line 952
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 953
                            echo (($__internal_compile_101 = $context["product_option"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"HH:mm\" id=\"input-value";
                            // line 954
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                        }
                        // line 962
                        echo "                        ";
                        if (((($__internal_compile_102 = $context["product_option"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["type"] ?? null) : null) == "datetime")) {
                            // line 963
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 965
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                            // line 968
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 969
                            echo (($__internal_compile_103 = $context["product_option"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                            // line 970
                            echo ($context["option_row"] ?? null);
                            echo "\"
                                class=\"form-control\" />
                              <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                        }
                        // line 979
                        echo "                        ";
                        if ((((((($__internal_compile_104 = $context["product_option"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["type"] ?? null) : null) == "select") || ((($__internal_compile_105 = $context["product_option"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["type"] ?? null) : null) == "radio")) || ((($__internal_compile_106 = $context["product_option"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["type"] ?? null) : null) == "checkbox")) || ((($__internal_compile_107 = $context["product_option"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["type"] ?? null) : null) == "image"))) {
                            // line 980
                            echo "                        <div class=\"table-responsive\">
                          <table id=\"option-value";
                            // line 981
                            echo ($context["option_row"] ?? null);
                            echo "\"
                            class=\"table table-striped table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                            // line 985
                            echo ($context["entry_option_value"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 986
                            echo ($context["entry_quantity"] ?? null);
                            echo "</td>
                                <td class=\"text-left\">";
                            // line 987
                            echo ($context["entry_subtract"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 988
                            echo ($context["entry_price"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 989
                            echo ($context["entry_option_points"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 990
                            echo ($context["entry_weight"] ?? null);
                            echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            ";
                            // line 994
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_108 = $context["product_option"]) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["product_option_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                                // line 995
                                echo "                            <tbody id=\"option-value-row";
                                echo ($context["option_value_row"] ?? null);
                                echo "\">
                              <tr>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 998
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][option_value_id]\"
                                    style=\"min-width: 60px;\" class=\"form-control\">
                                    ";
                                // line 1000
                                if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_109 = $context["product_option"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["option_id"] ?? null) : null), [], "array", true, true, false, 1000)) {
                                    // line 1001
                                    echo "                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_110 = ($context["option_values"] ?? null)) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110[(($__internal_compile_111 = $context["product_option"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["option_id"] ?? null) : null)] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                        // line 1002
                                        echo "                                    ";
                                        if (((($__internal_compile_112 = $context["option_value"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["option_value_id"] ?? null) : null) == (($__internal_compile_113 = $context["product_option_value"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["option_value_id"] ?? null) : null))) {
                                            // line 1003
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_114 = $context["option_value"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["option_value_id"] ?? null) : null);
                                            echo "\" selected=\"selected\">
                                      ";
                                            // line 1004
                                            echo (($__internal_compile_115 = $context["option_value"]) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["name"] ?? null) : null);
                                            echo "</option>
                                    ";
                                        } else {
                                            // line 1006
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_116 = $context["option_value"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["option_value_id"] ?? null) : null);
                                            echo "\">";
                                            echo (($__internal_compile_117 = $context["option_value"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null);
                                            echo "
                                    </option>
                                    ";
                                        }
                                        // line 1009
                                        echo "                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1010
                                    echo "                                    ";
                                }
                                // line 1011
                                echo "                                  </select>
                                  <input type=\"hidden\"
                                    name=\"product_option[";
                                // line 1013
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][product_option_value_id]\"
                                    value=\"";
                                // line 1014
                                echo (($__internal_compile_118 = $context["product_option_value"]) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["product_option_value_id"] ?? null) : null);
                                echo "\" />
                                </td>
                                <td class=\"text-right\"><input type=\"text\"
                                    name=\"product_option[";
                                // line 1017
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][quantity]\"
                                    value=\"";
                                // line 1018
                                echo (($__internal_compile_119 = $context["product_option_value"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["quantity"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1020
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][subtract]\"
                                    class=\"form-control\">
                                    ";
                                // line 1022
                                if ((($__internal_compile_120 = $context["product_option_value"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["subtract"] ?? null) : null)) {
                                    // line 1023
                                    echo "                                    <option value=\"1\" selected=\"selected\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\">";
                                    // line 1024
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                } else {
                                    // line 1026
                                    echo "                                    <option value=\"1\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
                                    // line 1027
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                }
                                // line 1029
                                echo "                                  </select></td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1031
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1033
                                if (((($__internal_compile_121 = $context["product_option_value"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["price_prefix"] ?? null) : null) == "+")) {
                                    // line 1034
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1036
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1038
                                echo "                                    ";
                                if (((($__internal_compile_122 = $context["product_option_value"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["price_prefix"] ?? null) : null) == "-")) {
                                    // line 1039
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1041
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1043
                                echo "                                  </select>

                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1046
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price]\"
                                    value=\"";
                                // line 1047
                                echo (($__internal_compile_123 = $context["product_option_value"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["price"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_price"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1051
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1053
                                if (((($__internal_compile_124 = $context["product_option_value"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["points_prefix"] ?? null) : null) == "+")) {
                                    // line 1054
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1056
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1058
                                echo "                                    ";
                                if (((($__internal_compile_125 = $context["product_option_value"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["points_prefix"] ?? null) : null) == "-")) {
                                    // line 1059
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1061
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1063
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1065
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points]\"
                                    value=\"";
                                // line 1066
                                echo (($__internal_compile_126 = $context["product_option_value"]) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["points"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_points"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1070
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1072
                                if (((($__internal_compile_127 = $context["product_option_value"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["weight_prefix"] ?? null) : null) == "+")) {
                                    // line 1073
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1075
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1077
                                echo "                                    ";
                                if (((($__internal_compile_128 = $context["product_option_value"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["weight_prefix"] ?? null) : null) == "-")) {
                                    // line 1078
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1080
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1082
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1084
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight]\"
                                    value=\"";
                                // line 1085
                                echo (($__internal_compile_129 = $context["product_option_value"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["weight"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_weight"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"\$('#option-value-row";
                                // line 1089
                                echo ($context["option_value_row"] ?? null);
                                echo "').remove();\"
                                    data-toggle=\"tooltip\" title=\"";
                                // line 1090
                                echo ($context["button_remove"] ?? null);
                                echo "\" class=\"btn btn-danger\"><i
                                      class=\"fa fa-minus-circle\"></i></button>
                                </td>
                              </tr>
                            </tbody>
                            ";
                                // line 1095
                                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                                // line 1096
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1097
                            echo "                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"addOptionValue('";
                            // line 1101
                            echo ($context["option_row"] ?? null);
                            echo "');\"
                                    data-toggle=\"tooltip\" title=\"";
                            // line 1102
                            echo ($context["button_add_option_value"] ?? null);
                            echo "\"
                                    class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <select id=\"option-values";
                            // line 1109
                            echo ($context["option_row"] ?? null);
                            echo "\" style=\"display: none;\">
                          ";
                            // line 1110
                            if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_130 = $context["product_option"]) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["option_id"] ?? null) : null), [], "array", true, true, false, 1110)) {
                                // line 1111
                                echo "                          ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_131 = ($context["option_values"] ?? null)) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131[(($__internal_compile_132 = $context["product_option"]) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["option_id"] ?? null) : null)] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 1112
                                    echo "                          <option value=\"";
                                    echo (($__internal_compile_133 = $context["option_value"]) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["option_value_id"] ?? null) : null);
                                    echo "\">";
                                    echo (($__internal_compile_134 = $context["option_value"]) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134["name"] ?? null) : null);
                                    echo "</option>
                          ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1114
                                echo "                          ";
                            }
                            // line 1115
                            echo "                        </select>
                        ";
                        }
                        // line 1117
                        echo "                      </div>
                      <!--tab-pane-->
                      ";
                        // line 1119
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 1120
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1121
                    echo "                    </div>
                    <!--tab-content-->
                  </div>
                  <!--col-sm-9-->
                </div>
                <!--Row-->
              </div>
              ";
                }
                // line 1129
                echo "
              <!-- discount tab -->
              ";
                // line 1131
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 1131)) {
                    // line 1132
                    echo "              <input type=\"hidden\" name=\"product_discount_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-discount\">
                <div class=\"table-responsive\">
                  <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1138
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1139
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1140
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1141
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1142
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1143
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1147
                    $context["discount_row"] = 0;
                    // line 1148
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
                        // line 1149
                        echo "                    <tbody id=\"discount-row";
                        echo ($context["discount_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_discount[";
                        // line 1151
                        echo ($context["discount_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1153
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1154
                            echo "                            ";
                            if (((($__internal_compile_135 = $context["customer_group"]) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["customer_group_id"] ?? null) : null) == (($__internal_compile_136 = $context["product_discount"]) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136["customer_group_id"] ?? null) : null))) {
                                // line 1155
                                echo "                            <option value=\"";
                                echo (($__internal_compile_137 = $context["customer_group"]) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1156
                                echo (($__internal_compile_138 = $context["customer_group"]) && is_array($__internal_compile_138) || $__internal_compile_138 instanceof ArrayAccess ? ($__internal_compile_138["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1158
                                echo "                            <option value=\"";
                                echo (($__internal_compile_139 = $context["customer_group"]) && is_array($__internal_compile_139) || $__internal_compile_139 instanceof ArrayAccess ? ($__internal_compile_139["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_140 = $context["customer_group"]) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1161
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1162
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1163
                        echo ($context["discount_row"] ?? null);
                        echo "][quantity]\"
                            value=\"";
                        // line 1164
                        echo (($__internal_compile_141 = $context["product_discount"]) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["quantity"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1166
                        echo ($context["discount_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1167
                        echo (($__internal_compile_142 = $context["product_discount"]) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_priority"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1169
                        echo ($context["discount_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1170
                        echo (($__internal_compile_143 = $context["product_discount"]) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
                        // line 1174
                        echo ($context["discount_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1175
                        echo (($__internal_compile_144 = $context["product_discount"]) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["date_start"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_date_start"] ?? null);
                        echo "\"
                              data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
                        // line 1184
                        echo ($context["discount_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1185
                        echo (($__internal_compile_145 = $context["product_discount"]) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["date_end"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_date_end"] ?? null);
                        echo "\"
                              data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\"
                            onclick=\"\$('#discount-row";
                        // line 1193
                        echo ($context["discount_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1194
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1198
                        $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
                        // line 1199
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1200
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"6\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1204
                    echo ($context["button_add_discount"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!--tab-discount-->
              ";
                }
                // line 1213
                echo "
              <!--tab-special-->
              ";
                // line 1215
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 1215)) {
                    // line 1216
                    echo "              <input type=\"hidden\" name=\"product_special_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-special\">
                <div class=\"table-responsive\">
                  <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1222
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1223
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1224
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1225
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1226
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1230
                    $context["special_row"] = 0;
                    // line 1231
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
                        // line 1232
                        echo "                    <tbody id=\"special-row";
                        echo ($context["special_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_special[";
                        // line 1234
                        echo ($context["special_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1236
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1237
                            echo "                            ";
                            if (((($__internal_compile_146 = $context["customer_group"]) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146["customer_group_id"] ?? null) : null) == (($__internal_compile_147 = $context["product_special"]) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["customer_group_id"] ?? null) : null))) {
                                // line 1238
                                echo "                            <option value=\"";
                                echo (($__internal_compile_148 = $context["customer_group"]) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1239
                                echo (($__internal_compile_149 = $context["customer_group"]) && is_array($__internal_compile_149) || $__internal_compile_149 instanceof ArrayAccess ? ($__internal_compile_149["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1241
                                echo "                            <option value=\"";
                                echo (($__internal_compile_150 = $context["customer_group"]) && is_array($__internal_compile_150) || $__internal_compile_150 instanceof ArrayAccess ? ($__internal_compile_150["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_151 = $context["customer_group"]) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1244
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1245
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1246
                        echo ($context["special_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1247
                        echo (($__internal_compile_152 = $context["product_special"]) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1249
                        echo ($context["special_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1250
                        echo (($__internal_compile_153 = $context["product_special"]) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
                        // line 1254
                        echo ($context["special_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1255
                        echo (($__internal_compile_154 = $context["product_special"]) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["date_start"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_date_start"] ?? null);
                        echo "\"
                              data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
                        // line 1264
                        echo ($context["special_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1265
                        echo (($__internal_compile_155 = $context["product_special"]) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155["date_end"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_date_end"] ?? null);
                        echo "\"
                              data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\"
                            onclick=\"\$('#special-row";
                        // line 1273
                        echo ($context["special_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1274
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1278
                        $context["special_row"] = (($context["special_row"] ?? null) + 1);
                        // line 1279
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1280
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"5\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1284
                    echo ($context["button_add_special"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!--tab-special-->
              ";
                }
                // line 1293
                echo "
              <!--tab-image-->
              ";
                // line 1295
                $context["image_row"] = 0;
                // line 1296
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "images", [], "array", true, true, false, 1296)) {
                    // line 1297
                    echo "              <div class=\"tab-pane\" id=\"tab-image\">
                <div class=\"table-responsive\">
                  <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1302
                    echo ($context["entry_image"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1303
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1307
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                        // line 1308
                        echo "                    <tbody id=\"image-row";
                        echo ($context["image_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                            <img id=\"thumb";
                        // line 1312
                        echo ($context["image_row"] ?? null);
                        echo "-thumb-image\"
                              src=\"";
                        // line 1313
                        echo (((($__internal_compile_156 = $context["product_image"]) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["thumb"] ?? null) : null)) ? ((($__internal_compile_157 = $context["product_image"]) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["thumb"] ?? null) : null)) : (($context["placeholder"] ?? null)));
                        echo "\" alt=\"\"
                              title=\"\" />
                          </div>
                          <input type=\"hidden\" name=\"product_image[";
                        // line 1316
                        echo ($context["image_row"] ?? null);
                        echo "][image]\"
                            value=\"";
                        // line 1317
                        echo (($__internal_compile_158 = $context["product_image"]) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158["thumg_img"] ?? null) : null);
                        echo "\" id=\"thumb";
                        echo ($context["image_row"] ?? null);
                        echo "-target-image\" />
                          <div class=\"btn-group imgoption\" style=\"width: 41%;\">
                            <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                          </div>
                        </td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
                        // line 1322
                        echo ($context["image_row"] ?? null);
                        echo "][sort_order]\"
                            value=\"";
                        // line 1323
                        echo (($__internal_compile_159 = $context["product_image"]) && is_array($__internal_compile_159) || $__internal_compile_159 instanceof ArrayAccess ? ($__internal_compile_159["sort_order"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                        // line 1325
                        echo ($context["image_row"] ?? null);
                        echo "').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 1326
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1330
                        $context["image_row"] = (($context["image_row"] ?? null) + 1);
                        // line 1331
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1332
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1336
                    echo ($context["button_add_image"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!--tab-image-->
              ";
                }
                // line 1345
                echo "
              ";
                // line 1346
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "custom-field", [], "array", true, true, false, 1346)) {
                    // line 1347
                    echo "              <div id=\"tab-custom-field\" class=\"tab-pane\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"vtab-option\">
                      ";
                    // line 1351
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1352
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1353
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1354
                            echo "                      <li>
                        <a href=\"#wktab-option-";
                            // line 1355
                            echo ($context["tabCount"] ?? null);
                            echo "\" data-toggle=\"tab\" id=\"wkoption-";
                            echo ($context["tabCount"] ?? null);
                            echo "\"
                          field-id=\"wkoption-";
                            // line 1356
                            echo (($__internal_compile_160 = $context["tabs"]) && is_array($__internal_compile_160) || $__internal_compile_160 instanceof ArrayAccess ? ($__internal_compile_160["fieldId"] ?? null) : null);
                            echo "\"><i class=\"fa fa-minus-circle\"
                            onclick=\"\$('#wkoption-";
                            // line 1357
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#vtab-option li a:first').trigger('click'); return false;\"></i>";
                            echo (($__internal_compile_161 = $context["tabs"]) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161["fieldName"] ?? null) : null);
                            echo "</a>
                      </li>
                      ";
                            // line 1359
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            // line 1360
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1361
                        echo "                      ";
                    }
                    // line 1362
                    echo "                      <li id=\"optionSelector\">
                        <select name=\"wkcustomfield\" class=\"form-control\">
                          ";
                    // line 1364
                    if ( !twig_test_empty(($context["wkcustomFields"] ?? null))) {
                        // line 1365
                        echo "                          <option value=\"\"></option>
                          ";
                        // line 1366
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkcustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 1367
                            echo "                          <option value=\"";
                            echo (($__internal_compile_162 = $context["field"]) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["id"] ?? null) : null);
                            echo "\" data-type=\"";
                            echo (($__internal_compile_163 = $context["field"]) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["fieldType"] ?? null) : null);
                            echo "\"
                            data-name=\"";
                            // line 1368
                            echo (($__internal_compile_164 = $context["field"]) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164["fieldName"] ?? null) : null);
                            echo "\" data-des=\"";
                            echo (($__internal_compile_165 = $context["field"]) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["fieldDescription"] ?? null) : null);
                            echo "\"
                            title=\"";
                            // line 1369
                            echo (($__internal_compile_166 = $context["field"]) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["fieldDescription"] ?? null) : null);
                            echo "\" data-isRequired=\"";
                            echo (($__internal_compile_167 = $context["field"]) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167["isRequired"] ?? null) : null);
                            echo "\">
                            ";
                            // line 1370
                            echo (($__internal_compile_168 = $context["field"]) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["fieldName"] ?? null) : null);
                            echo "
                          </option>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1373
                        echo "                          ";
                    }
                    // line 1374
                    echo "
                        </select>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\" id=\"wk_customfieldcontent\">
                      ";
                    // line 1381
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1382
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1383
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1384
                            echo "                      <div id=\"wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "\" class=\"tab-pane\">
                        <div class=\"alert alert-info\">
                          <i class=\"fa fa-info-circle\"></i>
                          ";
                            // line 1387
                            echo (($__internal_compile_169 = $context["tabs"]) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169["fieldDes"] ?? null) : null);
                            echo "
                        </div>
                        ";
                            // line 1389
                            if ((array_key_exists("error", $context) && (($context["error"] ?? null) == (($__internal_compile_170 = $context["tabs"]) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170["fieldId"] ?? null) : null)))) {
                                // line 1390
                                echo "                        <div class=\"alert alert-danger\">
                          <i class=\"fa fa-exclamation-circle\"></i>
                          ";
                                // line 1392
                                echo ($context["error_warning_mandetory"] ?? null);
                                echo "
                        </div>
                        ";
                            }
                            // line 1395
                            echo "                        <input type=\"hidden\" name=\"product_custom_field[";
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_name]\"
                          value=\"";
                            // line 1396
                            echo (($__internal_compile_171 = $context["tabs"]) && is_array($__internal_compile_171) || $__internal_compile_171 instanceof ArrayAccess ? ($__internal_compile_171["fieldName"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1397
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_type]\"
                          value=\"";
                            // line 1398
                            echo (($__internal_compile_172 = $context["tabs"]) && is_array($__internal_compile_172) || $__internal_compile_172 instanceof ArrayAccess ? ($__internal_compile_172["fieldType"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1399
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_id]\"
                          value=\"";
                            // line 1400
                            echo (($__internal_compile_173 = $context["tabs"]) && is_array($__internal_compile_173) || $__internal_compile_173 instanceof ArrayAccess ? ($__internal_compile_173["fieldId"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1401
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_des]\"
                          value=\"";
                            // line 1402
                            echo (($__internal_compile_174 = $context["tabs"]) && is_array($__internal_compile_174) || $__internal_compile_174 instanceof ArrayAccess ? ($__internal_compile_174["fieldDes"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\"
                          name=\"product_custom_field[";
                            // line 1404
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_is_required]\"
                          value=\"";
                            // line 1405
                            echo (($__internal_compile_175 = $context["tabs"]) && is_array($__internal_compile_175) || $__internal_compile_175 instanceof ArrayAccess ? ($__internal_compile_175["isRequired"] ?? null) : null);
                            echo "\">

                        ";
                            // line 1407
                            if (((($__internal_compile_176 = $context["tabs"]) && is_array($__internal_compile_176) || $__internal_compile_176 instanceof ArrayAccess ? ($__internal_compile_176["fieldType"] ?? null) : null) == "select")) {
                                // line 1408
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_177 = $context["tabs"]) && is_array($__internal_compile_177) || $__internal_compile_177 instanceof ArrayAccess ? ($__internal_compile_177["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select option:</label>
                          <div class=\"col-sm-9\">
                            <select class=\"form-control\"
                              name=\"product_custom_field[";
                                // line 1412
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\">
                              ";
                                // line 1413
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_178 = $context["tabs"]) && is_array($__internal_compile_178) || $__internal_compile_178 instanceof ArrayAccess ? ($__internal_compile_178["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1414
                                    echo "                              <option value=\"";
                                    echo (($__internal_compile_179 = $context["options"]) && is_array($__internal_compile_179) || $__internal_compile_179 instanceof ArrayAccess ? ($__internal_compile_179["optionId"] ?? null) : null);
                                    echo "\" ";
                                    if ( !twig_test_empty((($__internal_compile_180 = $context["tabs"]) && is_array($__internal_compile_180) || $__internal_compile_180 instanceof ArrayAccess ? ($__internal_compile_180["fieldOptions"] ?? null) : null))) {
                                        // line 1415
                                        echo "                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_181 = $context["tabs"]) && is_array($__internal_compile_181) || $__internal_compile_181 instanceof ArrayAccess ? ($__internal_compile_181["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1416
                                            echo "                                ";
                                            if (((($__internal_compile_182 = $context["option"]) && is_array($__internal_compile_182) || $__internal_compile_182 instanceof ArrayAccess ? ($__internal_compile_182["optionId"] ?? null) : null) == (($__internal_compile_183 = $context["options"]) && is_array($__internal_compile_183) || $__internal_compile_183 instanceof ArrayAccess ? ($__internal_compile_183["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "selected";
                                            }
                                            // line 1417
                                            echo "                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo ">
                                ";
                                    // line 1418
                                    echo (($__internal_compile_184 = $context["options"]) && is_array($__internal_compile_184) || $__internal_compile_184 instanceof ArrayAccess ? ($__internal_compile_184["optionValue"] ?? null) : null);
                                    echo "
                              </option>
                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1421
                                echo "                            </select>
                          </div>
                        </div>

                        ";
                            } elseif ((((($__internal_compile_185 =                             // line 1425
$context["tabs"]) && is_array($__internal_compile_185) || $__internal_compile_185 instanceof ArrayAccess ? ($__internal_compile_185["fieldType"] ?? null) : null) == "checkbox") || ((($__internal_compile_186 = $context["tabs"]) && is_array($__internal_compile_186) || $__internal_compile_186 instanceof ArrayAccess ? ($__internal_compile_186["fieldType"] ?? null) : null) == "radio"))) {
                                // line 1426
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_187 = $context["tabs"]) && is_array($__internal_compile_187) || $__internal_compile_187 instanceof ArrayAccess ? ($__internal_compile_187["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"control-label col-sm-3\">Select option:</label>
                          <div class=\"col-sm-9\">
                            ";
                                // line 1429
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_188 = $context["tabs"]) && is_array($__internal_compile_188) || $__internal_compile_188 instanceof ArrayAccess ? ($__internal_compile_188["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1430
                                    echo "
                            <div class=\"radio checkbox\">
                              <label for=\"";
                                    // line 1432
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_189 = $context["options"]) && is_array($__internal_compile_189) || $__internal_compile_189 instanceof ArrayAccess ? ($__internal_compile_189["optionId"] ?? null) : null));
                                    echo "\">
                                <input type='";
                                    // line 1433
                                    echo (($__internal_compile_190 = $context["tabs"]) && is_array($__internal_compile_190) || $__internal_compile_190 instanceof ArrayAccess ? ($__internal_compile_190["fieldType"] ?? null) : null);
                                    echo "' id=\"";
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_191 = $context["options"]) && is_array($__internal_compile_191) || $__internal_compile_191 instanceof ArrayAccess ? ($__internal_compile_191["optionId"] ?? null) : null));
                                    echo "\"
                                  value=\"";
                                    // line 1434
                                    echo (($__internal_compile_192 = $context["options"]) && is_array($__internal_compile_192) || $__internal_compile_192 instanceof ArrayAccess ? ($__internal_compile_192["optionId"] ?? null) : null);
                                    echo "\"
                                  name=\"product_custom_field[";
                                    // line 1435
                                    echo ($context["wkcustom_option_row"] ?? null);
                                    echo "][custom_field_value][]\"
                                  ";
                                    // line 1436
                                    if ( !twig_test_empty((($__internal_compile_193 = $context["tabs"]) && is_array($__internal_compile_193) || $__internal_compile_193 instanceof ArrayAccess ? ($__internal_compile_193["fieldOptions"] ?? null) : null))) {
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_194 = $context["tabs"]) && is_array($__internal_compile_194) || $__internal_compile_194 instanceof ArrayAccess ? ($__internal_compile_194["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1437
                                            echo "                                  ";
                                            if (((($__internal_compile_195 = $context["option"]) && is_array($__internal_compile_195) || $__internal_compile_195 instanceof ArrayAccess ? ($__internal_compile_195["optionId"] ?? null) : null) == (($__internal_compile_196 = $context["options"]) && is_array($__internal_compile_196) || $__internal_compile_196 instanceof ArrayAccess ? ($__internal_compile_196["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "checked";
                                            }
                                            // line 1438
                                            echo "                                  ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo " />
                                ";
                                    // line 1439
                                    echo (($__internal_compile_197 = $context["options"]) && is_array($__internal_compile_197) || $__internal_compile_197 instanceof ArrayAccess ? ($__internal_compile_197["optionValue"] ?? null) : null);
                                    echo "
                              </label>
                            </div>

                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1444
                                echo "                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_198 =                             // line 1446
$context["tabs"]) && is_array($__internal_compile_198) || $__internal_compile_198 instanceof ArrayAccess ? ($__internal_compile_198["fieldType"] ?? null) : null) == "text")) {
                                // line 1447
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_199 = $context["tabs"]) && is_array($__internal_compile_199) || $__internal_compile_199 instanceof ArrayAccess ? ($__internal_compile_199["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-9\">
                            <input class=\"form-control\" type=\"text\"
                              name=\"product_custom_field[";
                                // line 1451
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                              value=\"";
                                // line 1452
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1452), "option_id", [], "array", true, true, false, 1452)) {
                                    echo " ";
                                    echo (($__internal_compile_200 = (($__internal_compile_201 = $context["tabs"]) && is_array($__internal_compile_201) || $__internal_compile_201 instanceof ArrayAccess ? ($__internal_compile_201["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_200) || $__internal_compile_200 instanceof ArrayAccess ? ($__internal_compile_200["option_id"] ?? null) : null);
                                }
                                echo "\" />
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_202 =                             // line 1455
$context["tabs"]) && is_array($__internal_compile_202) || $__internal_compile_202 instanceof ArrayAccess ? ($__internal_compile_202["fieldType"] ?? null) : null) == "textarea")) {
                                // line 1456
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_203 = $context["tabs"]) && is_array($__internal_compile_203) || $__internal_compile_203 instanceof ArrayAccess ? ($__internal_compile_203["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-9\">
                            <textarea class=\"form-control\"
                              name=\"product_custom_field[";
                                // line 1460
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\" rows=\"7\">
                                      ";
                                // line 1461
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1461), "option_id", [], "array", true, true, false, 1461)) {
                                    echo " ";
                                    echo (($__internal_compile_204 = (($__internal_compile_205 = $context["tabs"]) && is_array($__internal_compile_205) || $__internal_compile_205 instanceof ArrayAccess ? ($__internal_compile_205["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_204) || $__internal_compile_204 instanceof ArrayAccess ? ($__internal_compile_204["option_id"] ?? null) : null);
                                }
                                // line 1462
                                echo "                                    </textarea>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_206 =                             // line 1465
$context["tabs"]) && is_array($__internal_compile_206) || $__internal_compile_206 instanceof ArrayAccess ? ($__internal_compile_206["fieldType"] ?? null) : null) == "date")) {
                                // line 1466
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_207 = $context["tabs"]) && is_array($__internal_compile_207) || $__internal_compile_207 instanceof ArrayAccess ? ($__internal_compile_207["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select Date:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group date\">
                              <input type=\"text\"
                                name=\"product_custom_field[";
                                // line 1471
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1472
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1472), "option_id", [], "array", true, true, false, 1472)) {
                                    echo " ";
                                    echo (($__internal_compile_208 = (($__internal_compile_209 = $context["tabs"]) && is_array($__internal_compile_209) || $__internal_compile_209 instanceof ArrayAccess ? ($__internal_compile_209["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_208) || $__internal_compile_208 instanceof ArrayAccess ? ($__internal_compile_208["option_id"] ?? null) : null);
                                }
                                echo "\"
                                class=\"form-control\">
                              <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\">
                                  <i class=\"fa fa-calendar\"></i>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_210 =                             // line 1482
$context["tabs"]) && is_array($__internal_compile_210) || $__internal_compile_210 instanceof ArrayAccess ? ($__internal_compile_210["fieldType"] ?? null) : null) == "time")) {
                                // line 1483
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_211 = $context["tabs"]) && is_array($__internal_compile_211) || $__internal_compile_211 instanceof ArrayAccess ? ($__internal_compile_211["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group time\">
                              <input class=\"form-control\" type=\"text\"
                                name=\"product_custom_field[";
                                // line 1488
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1489
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1489), "option_id", [], "array", true, true, false, 1489)) {
                                    echo " ";
                                    echo (($__internal_compile_212 = (($__internal_compile_213 = $context["tabs"]) && is_array($__internal_compile_213) || $__internal_compile_213 instanceof ArrayAccess ? ($__internal_compile_213["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_212) || $__internal_compile_212 instanceof ArrayAccess ? ($__internal_compile_212["option_id"] ?? null) : null);
                                }
                                echo "\">
                              <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\">
                                  <i class=\"fa fa-clock-o\"></i>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_214 =                             // line 1498
$context["tabs"]) && is_array($__internal_compile_214) || $__internal_compile_214 instanceof ArrayAccess ? ($__internal_compile_214["fieldType"] ?? null) : null) == "datetime")) {
                                // line 1499
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_215 = $context["tabs"]) && is_array($__internal_compile_215) || $__internal_compile_215 instanceof ArrayAccess ? ($__internal_compile_215["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select date-time:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\"
                                name=\"product_custom_field[";
                                // line 1504
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1505
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1505), "option_id", [], "array", true, true, false, 1505)) {
                                    echo " ";
                                    echo (($__internal_compile_216 = (($__internal_compile_217 = $context["tabs"]) && is_array($__internal_compile_217) || $__internal_compile_217 instanceof ArrayAccess ? ($__internal_compile_217["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_216) || $__internal_compile_216 instanceof ArrayAccess ? ($__internal_compile_216["option_id"] ?? null) : null);
                                }
                                echo "\"
                                class=\"form-control\">
                              <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\">
                                  <i class=\"fa fa-clock-o\"></i>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                        ";
                            }
                            // line 1516
                            echo "                      </div>
                      ";
                            // line 1517
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            echo " ";
                            $context["wkcustom_option_row"] = (($context["wkcustom_option_row"] ?? null) + 1);
                            // line 1518
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1519
                        echo "                      ";
                    }
                    // line 1520
                    echo "                    </div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1525
                echo "              <div class=\"tab-pane\" id=\"tab-update-reason\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-required\">";
                // line 1527
                echo "Select a reason";
                echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"reason\" class=\"form-control\">
                      ";
                // line 1530
                if ( !twig_test_empty(($context["reasons"] ?? null))) {
                    // line 1531
                    echo "                      <option value=\"\"></option>
                      ";
                    // line 1532
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["reasons"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 1533
                        echo "                      <option value=\"";
                        echo (($__internal_compile_218 = $context["field"]) && is_array($__internal_compile_218) || $__internal_compile_218 instanceof ArrayAccess ? ($__internal_compile_218["id"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_compile_219 = $context["field"]) && is_array($__internal_compile_219) || $__internal_compile_219 instanceof ArrayAccess ? ($__internal_compile_219["fieldDescription"] ?? null) : null);
                        echo "\"
                        ";
                        // line 1534
                        if (((array_key_exists("reason", $context) && ($context["reason"] ?? null)) && (($context["reason"] ?? null) == (($__internal_compile_220 = $context["field"]) && is_array($__internal_compile_220) || $__internal_compile_220 instanceof ArrayAccess ? ($__internal_compile_220["id"] ?? null) : null)))) {
                            echo " ";
                            echo "selected";
                        }
                        echo ">
                        ";
                        // line 1535
                        echo (($__internal_compile_221 = $context["field"]) && is_array($__internal_compile_221) || $__internal_compile_221 instanceof ArrayAccess ? ($__internal_compile_221["title"] ?? null) : null);
                        echo "
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1538
                    echo "                      ";
                }
                // line 1539
                echo "                    </select>
                  </div>
                </div>
              </div>

              ";
                // line 1544
                if ((($context["wk_pricealert_status"] ?? null) && ($context["wk_pricealert_allowed_seller"] ?? null))) {
                    // line 1545
                    echo "              <div class=\"tab-pane\" id=\"tab-pricealert\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-pricealert\">";
                    // line 1547
                    echo ($context["text_palert"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"pricealert\" id=\"input-prigetListcealert\" class=\"form-control\">
                      ";
                    // line 1550
                    if (($context["is_alert_product"] ?? null)) {
                        // line 1551
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 1552
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 1554
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 1555
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 1557
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1562
                echo "
            </div>
            <!--tab-content-->

          </form>
          ";
            } else {
                // line 1568
                echo "          <div class=\"text-danger\">
            ";
                // line 1569
                echo ($context["text_access"] ?? null);
                echo "
          </div>
          ";
            }
            // line 1572
            echo "        </fieldset>

      </div>
      <!--content-->
      ";
            // line 1576
            echo ($context["column_right"] ?? null);
            echo "
    </div>
    <!--row-->
  </div>
  <!--container-->
  ";
        }
        // line 1582
        echo "
  <div id=\"category-modal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 1588
        echo ($context["heading_category"] ?? null);
        echo "</h4>
        </div>
        <div class=\"modal-body\" style=\"overflow:auto;\">
          <div id=\"category-modal-body\" style=\"display: inline-flex;width: 100%;\"></div>
        </div>
        <div class=\"modal-footer\">
          <!-- <div class=\"pull-left\">
          <button type=\"button\" class=\"btn btn-warning\" id=\"category-modal-back\">";
        // line 1595
        echo ($context["button_back"] ?? null);
        echo "</button>
        </div> -->
          <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 1598
        echo ($context["button_close"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 1604
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 1605
            echo "  <div id=\"myModalanswer\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h3 id=\"myModalLabel\"></h3>
        </div>
        <div class=\"modal-body\">
          <span id=\"alert\" class=\"text-danger\"></span>
          <h3 id=\"wk-open-list\">";
            // line 1615
            echo ($context["entry_list_header"] ?? null);
            echo "</h3>
          <table class=\"table table-bordered table-hover\" id=\"details\">
            <thead>
              <tr>
                <td>
                  ";
            // line 1620
            echo ($context["entry_name"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1623
            echo ($context["entry_quantity"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1626
            echo ($context["entry_price"] ?? null);
            echo "
                </td>
              <tr>
            </thead>
            <tbody>
              ";
            // line 1631
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellerDetail"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 1632
                echo "              <tr>
                <td>
                  ";
                // line 1634
                echo (($__internal_compile_222 = $context["detail"]) && is_array($__internal_compile_222) || $__internal_compile_222 instanceof ArrayAccess ? ($__internal_compile_222["name"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1637
                echo (($__internal_compile_223 = $context["detail"]) && is_array($__internal_compile_223) || $__internal_compile_223 instanceof ArrayAccess ? ($__internal_compile_223["quantity"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1640
                echo (($__internal_compile_224 = $context["detail"]) && is_array($__internal_compile_224) || $__internal_compile_224 instanceof ArrayAccess ? ($__internal_compile_224["price"] ?? null) : null);
                echo "
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1644
            echo "            </tbody>
          </table>
        </div>
        <div class=\"modal-footer\">
          <button class=\"btn closebtn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"closeButton\">Close</button>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 1654
        echo "  <!-- script custom field -->

  <!-- membership codes starts here -->
  <script type=\"text/javascript\">
    ";
        // line 1658
        if ((array_key_exists("wk_seller_group_status", $context) && ($context["wk_seller_group_status"] ?? null))) {
            // line 1659
            echo "    listing_duration = 0;
    ";
            // line 1660
            if ((array_key_exists("relist_duration", $context) && ($context["relist_duration"] ?? null))) {
                // line 1661
                echo "    listing_duration = ";
                echo ($context["relist_duration"] ?? null);
                echo ";
    ";
            }
            // line 1663
            echo "    var count = 0;

    function getListingDuration(gld_category_id) {
      \$.ajax({
        url: 'index.php?route=account/customerpartner/wk_membership_catalog/getListingDuration',
        data: {category_id: gld_category_id},
        type: 'post',
        methodType: 'json',
        success: function(data) {

          \$('#alert-danger').remove();
          \$('#alert-info').remove();
          html = '';
          if (data) {
            for (var i = 1; i <= data; i++) {
              html += '<option value=\"' + i + '\"';
              if (listing_duration == i) {
                html += ' selected ';
              }
              html += '>' + i + ' day(s)</option>';
            };
            \$('#input-relist-duration').html(html);
            if (count != 0) {
              \$('.breadcrumb').after(
                '<div class=\"alert alert-info\" id=\"alert-info\"><i class=\"fa fa-info-circle\"></i> Listing duration has been refreshed as per category selection, please check it again.<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button></div>'
              );
            } else {
              count++;
            }
          } else {
            html += '<option></option>';
            \$('#input-relist-duration').html(html);
            \$('.breadcrumb').after(
              '<div class=\"alert alert-danger\" id=\"alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> Warning: No more listing duration is available!</div>'
            );
            \$('body').animate({
              scrollTop: 0,
            }, 'slow');
          }
        }
      });
    }
    var category = \$('input[name=\"product_category[]\"]').val();
    console.log(category);
    if (typeof category != 'undefined') {
      getListingDuration(category);
    } else {
      getListingDuration(0);
    }
    ";
        }
        // line 1713
        echo "  </script>
  <!-- membership codes ends here -->

  <script type=\"text/javascript\">
    \$('#vtab-option a:first').tab('show');
    tabCount = '";
        // line 1718
        echo ($context["tabCount"] ?? null);
        echo "';
    wkcustom_option_row = '";
        // line 1719
        echo ($context["wkcustom_option_row"] ?? null);
        echo "';
    \$('select[name=\"wkcustomfield\"]').on('change', function() {
      value = \$(this).val();
      if (value == '') {
        return;
      }

      if (\$('body').find('[field-id = wkoption-' + value + ']').length) {
        return;
      }
      fieldType = \$('option:selected', this).attr('data-type');
      fieldName = \$('option:selected', this).attr('data-name');
      fieldDes = \$('option:selected', this).attr('data-des');
      fieldIsRequired = \$('option:selected', this).attr('data-isRequired');
      tab = '<li><a href=\"#wktab-option-' + tabCount + '\" data-toggle=\"tab\" id=\"wkoption-' + tabCount +
        '\" field-id = \"wkoption-' + value + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#wkoption-' + tabCount +
        '\\').remove(); \$(\\'#wktab-option-' + tabCount +
        '\\').remove(); \$(\\'#vtab-option a:first\\').trigger(\\'click\\'); return false;\" /></i>&nbsp;' + fieldName +
        '</a></li>';
      \$('#optionSelector').before(tab);
      html = '';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row +
        '][custom_field_name]\" value=\"' + fieldName + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row +
        '][custom_field_type]\" value=\"' + fieldType + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row +
        '][custom_field_id]\" value=\"' + value + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row +
        '][custom_field_des]\" value=\"' + fieldDes + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row +
        '][custom_field_is_required]\" value=\"' + fieldIsRequired + '\">';
      if (fieldIsRequired == 'yes') {
        required = 'required';
      } else {
        required = '';
      }
      if (fieldType == \"textarea\") {

        html += '<div class=\"form-group '+required+' \"><label class=\"col-sm-3 control-label\">";
        // line 1757
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><textarea class=\"form-control\" id=\"\" value=\"\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" row=\"7\"></textarea></div></div>';
        addtoBody(html);

      } else if (fieldType == \"text\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1764
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" /></div></div>';
        addtoBody(html);

      } else if (fieldType == \"time\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1771
        echo ($context["entry_select_time"] ?? null);
        echo "</label>';
        html +=
          '<div class=\"col-sm-6\"><div class=\"input-group time\"><input type=\"text\" name=\"product_custom_field[' +
          wkcustom_option_row +
          '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"datetime\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1781
        echo ($context["entry_select_datetime"] ?? null);
        echo "</label>';
        html +=
          '<div class=\"col-sm-6\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_custom_field[' +
          wkcustom_option_row +
          '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"date\") {

        html += '<div class=\"form-group ' + required + '\">';
        html += '<label class=\"col-sm-3 control-label\">";
        // line 1792
        echo ($context["entry_select_date"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group date\">';
        html += '<input type=\"text\" name=\"product_custom_field[";
        // line 1794
        echo ($context["wkcustom_option_row"] ?? null);
        echo "][custom_field_value][]\" class=\"form-control\">';
        html +=
          '<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div></div>';

        addtoBody(html);

      } else {
        \$.ajax({
          url: 'index.php?route=account/customerpartner/addproduct/getOptions',
          data: '&value=' + value,
          dataType: 'json',
          type: 'post',
          success: function(data) {
            innerHtml = '';
            if (fieldType == \"select\") {
              html += '<div class=\"form-group ' + required +
                '\"><label class=\"col-sm-3 control-label\">Options</label><div class=\"col-sm-9\" >';
            } else {
              html += '<div class=\"form-group ' + required +
                '\"><label class=\"control-label\">Options</label><div>';
            }
            \$.each(data, function(key, val) {
              if (fieldType == \"select\") {
                innerHtml += '<option value=\"' + val.optionId + '\">' + val.optionValue + '</option>'
              } else if (fieldType == \"checkbox\") {

                html += '<div class=\"radio checkbox\"><label for=\"' + wkcustom_option_row + val.optionId +
                  '\"><input type=' + fieldType + ' id=\"' + wkcustom_option_row + val.optionId +
                  '\" value=\"' + val.optionId + '\" name=\"product_custom_field[' + wkcustom_option_row +
                  '][custom_field_value][]\">' + val.optionValue + '</lable></div>';

              } else {

                html += '<div class=\"radio checkbox\"><label for=\"' + wkcustom_option_row + val.optionId +
                  '\"><input type=' + fieldType + ' id=\"' + wkcustom_option_row + val.optionId +
                  '\" value=\"' + val.optionId + '\" value=\"' + val.optionId +
                  '\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\">' +
                  val.optionValue + '</lable></div>';

              }
            });
            if (fieldType == \"select\") {
              html += '<select class=\"form-control\" name=\"product_custom_field[' + wkcustom_option_row +
                '][custom_field_value][]\">' + innerHtml + '</select>';
            }
            addtoBody(html);
          }
        })
      }
    });

    function addtoBody(html) {
      html = '<div id=\"wktab-option-' + tabCount +
        '\" class=\"tab-pane\"><div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ' + fieldDes + '</div>' +
        html + '</div></div></div>';
      \$('#wk_customfieldcontent').append(html);
      \$('#wkoption-' + tabCount).trigger('click');
      tabCount++;
      wkcustom_option_row++;

      \$('.date').datetimepicker({
        pickTime: false
      });

      \$('.time').datetimepicker({
        pickDate: false
      });

      \$('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
      });
    }
    \$('.date').datetimepicker({
      pickTime: false
    });

    \$('.time').datetimepicker({
      pickDate: false
    });

    \$('.datetime').datetimepicker({
      pickDate: true,
      pickTime: true
    });
  </script>
  <!-- script end here -->
  <script src=\"catalog/view/javascript/wk_common.js\"></script>
  <script type=\"text/javascript\">
    <!--
    ";
        // line 1884
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1885
            echo "    \$('#input-description";
            echo (($__internal_compile_225 = $context["language"]) && is_array($__internal_compile_225) || $__internal_compile_225 instanceof ArrayAccess ? ($__internal_compile_225["language_id"] ?? null) : null);
            echo "').summernote({
    height: 300,
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1889
        echo "
    \$('.data-date').datetimepicker({
      pickTime: false
    });

    \$('.tab-content').on('click', '.click-file', function() {
      \$(this).prev().trigger('click');
    })

    \$(function() {
      \$(\"body\").on(\"change\", \"input[type='file']\", function() {
        \$.this = this;
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; /* no file selected, or no FileReader support */
        if (/^image/.test(files[0].type)) {
          /* only image file */
          var reader = new FileReader(); /* instance of the FileReader */
          reader.readAsDataURL(files[0]); /* read the local file */

          reader.onloadend = function() {
            /* set image to display only */
            src = this.result;
            \$(\$.this).next().attr('src', src);
          }
        }
      });
    });

    //
    -->
  </script>

  ";
        // line 1921
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 1921) && (($__internal_compile_226 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_226) || $__internal_compile_226 instanceof ArrayAccess ? ($__internal_compile_226["links"] ?? null) : null))) {
            // line 1922
            echo "  <script type=\"text/javascript\">
    <!--
    \$('input[name=\\'manufacturer\\']').click(function() {
      \$(this).autocomplete(\"search\");
    });
    // Manufacturer
    \$('input[name=\\'manufacturer\\']').autocomplete({
      minLength: 0,
      delay: 101,
      source: function(request, response) {
        \$.ajax({
          url: 'index.php?route=customerpartner/autocomplete/manufacturer&filter_name=' + encodeURIComponent(
            request),
          dataType: 'json',
          success: function(json) {
            json.unshift({
              manufacturer_id: 0,
              name: '";
            // line 1939
            echo ($context["text_none"] ?? null);
            echo "'
            });
            response(\$.map(json, function(item) {
              return {
                label: item['name'],
                value: item['manufacturer_id']
              }
            }));
          }
        });
      },
      select: function(item) {
        \$('input[name=\\'manufacturer\\']').val(item['label']);
        \$('input[name=\\'manufacturer_id\\']').val(item['value']);

        return false;
      },
      focus: function(item) {
        return false;
      }
    });


    \$('input[name=\\'category\\']').click(function() {
      \$(this).next('ul').remove();
      \$(this).autocomplete(\"search\");
    });

    // Category
    \$('input[name=\\'category\\']').autocomplete({
          minLength: 0,
          delay: 101,
          source: function(request, response) {
            \$.ajax({
              url: 'index.php?route=customerpartner/autocomplete/category&filter_name=' + encodeURIComponent(
                request),
              dataType: 'json',
              success: function(json) {
                response(\$.map(json, function(item) {
                  return {
                    label: item['name'],
                    value: item['category_id']
                  }
                }));
              }
            });
          },
          select: function(item) {
              ";
            // line 1987
            if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 1987) && (($__internal_compile_227 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_227) || $__internal_compile_227 instanceof ArrayAccess ? ($__internal_compile_227["attribute"] ?? null) : null))) {
                // line 1988
                echo "              addCategoryAttribute(item);
              ";
            }
            // line 1990
            echo "              // <!-- membership codes starts here -->
    
    ";
            // line 1992
            if (((($context["wk_seller_group_status"] ?? null) && array_key_exists("module_wk_seller_group_single_category", $context)) && ($context["module_wk_seller_group_single_category"] ?? null))) {
                // line 1993
                echo "   
    \$('input[name=\\'category\\']').val('');
    \$('#product-category'+item['value']).remove();
    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
                // line 2000
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 2001
                    echo "  getListingDuration(item['value']);
  ";
                }
                // line 2003
                echo "  ";
            } else {
                // line 2004
                echo "  \$('input[name=\\'category\\']').val('');
  \$('#product-category' + item['value']).remove();

  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
            }
            // line 2013
            echo "  //
  <!-- membership codes ends here -->

  return false;
  },
  focus: function(item) {
  return false;
  }
  });
  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
  let that = parseInt(\$(this).siblings(\"input[type='hidden']\").val());
  let bool = false;
  let bool1 = false;
  let arr = [];
  let arr1 = [];
  \$.map(obj, function (value, index){
  if( obj.length == 0 )
  obj = value.filter(function(n){ return n != undefined });
  });

  \$.map(objOption, function (value, index){
  if( objOption.length == 0 )
  objOption = value.filter(function(n){ return n != undefined });
  });

  \$.map(obj, function (value, index){
  if( value != undefined && typeof value != undefined ){
  if( value['category_id'] == that) {
  console.log('a ' + value.attribute_id);
  \$.each(value.attribute_id, function (index_in, value_in){
  \$.map(\$('#attribute').find(\"tbody\"), function (value_in_in, index_in_in){

  \$.map(\$(value_in_in).find(\"input[type='hidden']\"), function (val, i){
  if( parseInt(val['value']) == parseInt(value_in) ) {
  let k = \$(value_in_in['id'])['selector'];
  arr.push(parseInt(value_in));

  \$('.categoryAttribute'+that+'#' + k).remove();

  return bool = true;
  }
  })
  });
  });
  }
  }
  if( bool ){
  if( arr.length > 0 ) {
  \$.map(arr, function(val, i){
  if(attr_ids.includes(val)){
  \$.map(attr_ids, function(val_in, i_in){
  if( val == val_in ){
  delete attr_ids[i_in];
  }
  })
  }
  })
  }
  attr_ids = attr_ids.filter(function(n){ return n != undefined });
  obj.splice(index, 1);
  return true;
  }
  });
  \$.map(objOption, function (value, index){
  if( value != undefined && typeof value != undefined ){
  if( value['category_id'] == that) {
  \$.each(value.option_id, function (index_in, value_in){
  \$.map(\$('#option').find(\"li#optionli\"), function (value_in_in, index_in_in){
  \$.map(\$('div.tab-pane'+\$(value_in_in).find('a').attr('href')).find('input[name=\"product_option['+\$(value_in_in).find('a').attr('href').replace('#tab-option','')+'][option_id]\"]'),
  function(val,i){
  if( parseInt(val['value']) == parseInt(value_in) ) {
  arr1.push(parseInt(value_in));

  \$('a[href=\"'+\$(value_in_in).find('a').attr('href')+'\"]#categoryOption'+that).parent().remove();
  \$('.categoryOption'+that +''+\$(value_in_in).find('a').attr('href')).remove();

  \$('#option a:first').tab('show');
  return bool1 = true;
  }
  });
  });
  });
  }
  }
  if( bool1 ){
  if( arr1.length > 0 ) {
  \$.map(arr1, function(val, i){
  if(option_ids.includes(val)){
  \$.map(option_ids, function(val_in, i_in){
  if( val == val_in ){
  delete option_ids[i_in];
  }
  })
  }
  })
  }
  option_ids = option_ids.filter(function(n){ return n != undefined });
  objOption.splice(index, 1);
  return true;
  }
  });

  \$(this).parent().remove();
  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  });

  \$('input[name=\\'filter\\']').click(function(){
  \$(this).autocomplete(\"search\");
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
  \$.ajax({
  url: 'index.php?route=customerpartner/autocomplete/filter&filter_name=' + encodeURIComponent(request),
  dataType: 'json',
  success: function(json) {
  response(\$.map(json, function(item) {
  return {
  label: item['name'],
  value: item['filter_id']
  }
  }));
  }
  });
  },
  select: function(item) {
  \$('input[name=\\'filter\\']').val('');
  \$('#product-filter' + item['value']).remove();

  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-filter div:odd').attr('class', 'odd');
  \$('#product-filter div:even').attr('class', 'even');

  return false;
  },
  focus: function(item) {
  return false;
  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#product-filter div:odd').attr('class', 'odd');
  \$('#product-filter div:even').attr('class', 'even');
  });

  \$('input[name=\\'download\\']').click(function(){
  \$(this).autocomplete(\"search\");
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
  \$.ajax({
  url: 'index.php?route=customerpartner/autocomplete/download&filter_name=' + encodeURIComponent(request),
  dataType: 'json',
  success: function(json) {
  response(\$.map(json, function(item) {
  return {
  label: item['name'],
  value: item['download_id']
  }
  }));
  }
  });
  },
  select: function(item) {
  \$('input[name=\\'download\\']').val('');
  \$('#product-download' + item['value']).remove();

  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-download div:odd').attr('class', 'odd');
  \$('#product-download div:even').attr('class', 'even');

  return false;
  },
  focus: function(item) {
  return false;
  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#product-download div:odd').attr('class', 'odd');
  \$('#product-download div:even').attr('class', 'even');
  });

  \$('input[name=\\'related\\']').click(function(){
  \$(this).autocomplete(\"search\");
  });
  // Related
  \$('input[name=\\'related\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
  \$.ajax({
  url: 'index.php?route=customerpartner/autocomplete/product&filter_name=' + encodeURIComponent(request),
  dataType: 'json',
  success: function(json) {
  response(\$.map(json, function(item) {
  return {
  label: item['name'],
  value: item['product_id']
  }
  }));
  }
  });
  },
  select: function(item) {
  \$('input[name=\\'related\\']').val('');
  \$('#product-related' + item['value']).remove();

  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-related div:odd').attr('class', 'odd');
  \$('#product-related div:even').attr('class', 'even');

  return false;
  },
  focus: function(item) {
  return false;
  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#product-related div:odd').attr('class', 'odd');
  \$('#product-related div:even').attr('class', 'even');
  });
  //-->
  </script>
  ";
        }
        // line 2256
        echo "
  ";
        // line 2257
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2257) && (($__internal_compile_228 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_228) || $__internal_compile_228 instanceof ArrayAccess ? ($__internal_compile_228["attribute"] ?? null) : null))) {
            // line 2258
            echo "  <script type=\"text/javascript\">
    <!--
    var attribute_row = ";
            // line 2260
            echo ($context["attribute_row"] ?? null);
            echo ";
    let obj = [];
    let increment = 0;
    let attr_ids = [];

    function addCategoryAttribute(item, id = '') {
      let bool = false;
      let copyAttributes = [];
      if (item.value) {
        \$.ajax({
          url: 'index.php?route=customerpartner/autocomplete/categoryAttribute&category_id=' + item.value,
          dataType: 'json',
          success: function(json) {
            let array = [];
            array['category_id'] = item.value;
            array['attribute_id'] = [];
            \$.each(json, function(index, value) {
              let val = parseInt(value['attribute_id']);
              if (array) {
                \$.map(obj, function(value_in, index_in) {
                  if (value_in != undefined && value_in['attribute_id'] == val) {
                    bool = true;
                  }
                });
                if (bool) {
                  return;
                }
              }
              if (attr_ids.includes(val)) {
                copyAttributes.push(val);
              } else {
                attr_ids.push(val);
              }

              array['attribute_id'].push(val);
            })
            if (!increment) {
              obj[increment] = array;
              increment++;
            } else {
              let bool2 = false;
              obj = obj.filter(function(n) { return n != undefined });
              // console.log(obj, 'new');
              \$.map(obj, function(value, index) {
                if (value != null || value != undefined) {
                  if (obj.length == 0) {
                    return true;
                  }
                  if (value.category_id == item.value) {
                    bool2 = true;
                    bool = true;
                  }
                }
              })
              if (!bool2) {
                obj[increment] = array;
                increment++;
              }
            }
            \$.each(json, function() {
              let attr_id = parseInt(this.attribute_id);
              let bool_in = false;
              \$.map(copyAttributes, function(value, index) {
                if (typeof value != 'number')
                  return true;
                // console.log(typeof attr_id, 'attr_id', attr_id, value);
                if (attr_id == value) {
                  delete copyAttributes[index];
                  return bool_in = true;
                }
              })
              if (bool_in) {
                copyAttributes = copyAttributes.filter(function(n) { return n != undefined });
                return true;
              }
              addAttribute(id);
              var category_attribute_row = attribute_row - 1;
              \$('input[name=\\'product_attribute[' + category_attribute_row + '][name]\\']').val(this.name);
              \$('input[name=\\'product_attribute[' + category_attribute_row + '][attribute_id]\\']').val(this
                .attribute_id);
            });
          }
        });
      }
    }

    function addAttribute(id = '') {
      html = '<tbody id=\"attribute-row' + attribute_row + '\" class=\"categoryAttribute' + id + '\">';
      html += '  <tr>';
      html += '    <td class=\"text-left\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
            // line 2349
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
      html += '    <td class=\"text-left\">';
      ";
            // line 2351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2352
                echo "      html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                echo (($__internal_compile_229 = $context["language"]) && is_array($__internal_compile_229) || $__internal_compile_229 instanceof ArrayAccess ? ($__internal_compile_229["code"] ?? null) : null);
                echo "/";
                echo (($__internal_compile_230 = $context["language"]) && is_array($__internal_compile_230) || $__internal_compile_230 instanceof ArrayAccess ? ($__internal_compile_230["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_compile_231 = $context["language"]) && is_array($__internal_compile_231) || $__internal_compile_231 instanceof ArrayAccess ? ($__internal_compile_231["name"] ?? null) : null);
                echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
                echo (($__internal_compile_232 = $context["language"]) && is_array($__internal_compile_232) || $__internal_compile_232 instanceof ArrayAccess ? ($__internal_compile_232["language_id"] ?? null) : null);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\"></textarea></div> ';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2354
            echo "      html += '    </td>';
      html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove(); \$(\\'.tooltip.in\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2355
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '  </tr>';
      html += '</tbody>';

      \$('#attribute tfoot').before(html);

      attributeautocomplete(attribute_row);

      \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').click(function() {
        \$(this).autocomplete(\"search\");
      });

      attribute_row++;
    }

    function attributeautocomplete(attribute_row) {
      \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
        minLength: 0,
        delay: 101,
        source: function(request, response) {
          \$.ajax({
            url: 'index.php?route=customerpartner/autocomplete/attribute&filter_name=' + encodeURIComponent(
              request),
            dataType: 'json',
            success: function(json) {
              response(\$.map(json, function(item) {
                return {
                  category: item.attribute_group,
                  label: item.name,
                  value: item.attribute_id
                }
              }));
            }
          });
        },
        select: function(item) {
          \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
          \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);

          return false;
        },
        focus: function(item) {
          return false;
        }
      });
    }

    \$('#attribute tbody').each(function(index, element) {
      attributeautocomplete(index);
    });
    //
    -->
  </script>
  ";
        }
        // line 2409
        echo "
  ";
        // line 2410
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2410) && (($__internal_compile_233 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_233) || $__internal_compile_233 instanceof ArrayAccess ? ($__internal_compile_233["options"] ?? null) : null))) {
            // line 2411
            echo "  <script type=\"text/javascript\">
    <!--
    var option_row = ";
            // line 2413
            echo ($context["option_row"] ?? null);
            echo ";
    let options = [];
    let uniqeOptions = [];
    let option_ids = [];
    let objOption = [];
    let incrementOption = 0;

    function addCategoryOption(elem, id = '') {
      let bool1 = false;
      let copyOptions = [];
      \$.ajax({
        url: 'index.php?route=customerpartner/autocomplete/categoryOptions&category_id=' + elem.value,
        dataType: 'json',
        success: function(json) {
          let arrayOption = [];
          arrayOption['category_id'] = elem.value;
          arrayOption['option_id'] = [];
          \$.each(json, function(index, value) {
            let val = parseInt(value['value']);
            if (arrayOption) {
              \$.map(objOption, function(value_in, index_in) {
                if (value_in != undefined && value_in['value'] == val) {
                  bool1 = true;
                }
              });
              if (bool1) {
                return;
              }
            }
            if (option_ids.includes(val)) {
              copyOptions.push(val);
            } else {
              option_ids.push(val);
            }

            arrayOption['option_id'].push(val);
          })
          if (!incrementOption) {
            objOption[incrementOption] = arrayOption;
            incrementOption++;
          } else {
            let bool3 = false;
            objOption = objOption.filter(function(n) { return n != undefined });
            // console.log(obj, 'new');
            \$.map(objOption, function(value, index) {
              if (value != null || value != undefined) {
                if (objOption.length == 0) {
                  return true;
                }
                if (value.category_id == elem.value) {
                  bool3 = true;
                  bool1 = true;
                }
              }
            })
            if (!bool3) {
              objOption[incrementOption] = arrayOption;
              incrementOption++;
            }
          }

          \$.each(json, function(index, value) {
            let flg = true;
            if (value['value'] != undefined) {
              option = {};
              option = {
                option_id: value['value'],
                name: value['label'],
              };
              options.push(option);
            }
            console.log(value);
            _addOptions(value, id);
          });
        }
      });
    }

    \$('input[name=\\'option\\']').autocomplete({
      minLength: 0,
      delay: 101,
      source: function(request, response) {
        \$.ajax({
          url: 'index.php?route=customerpartner/autocomplete/option&filter_name=' + encodeURIComponent(
            request),
          dataType: 'json',
          success: function(json) {
            response(\$.map(json, function(item) {
              return {
                category: item.category,
                label: item.name,
                value: item.option_id,
                type: item.type,
                option_value: item.option_value
              }
            }));
          }
        });
      },
      select: function(item) {
        _addOptions(item);
        return false;
      },
      focus: function(item) {
        return false;
      }
    });

    function _addOptions(item, id = '') {
      html = '';
      html = '<div class=\"tab-pane categoryOption' + id + '\" id=\"tab-option' + option_row + '\">';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] +
        '\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-3 control-label\" for=\"input-required' + option_row + '\">";
            // line 2531
            echo ($context["entry_required"] ?? null);
            echo "</label>';
      html += '   <div class=\"col-sm-9\"><select name=\"product_option[' + option_row +
        '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
      html += '       <option value=\"1\">";
            // line 2534
            echo ($context["text_yes"] ?? null);
            echo "</option>';
      html += '       <option value=\"0\">";
            // line 2535
            echo ($context["text_no"] ?? null);
            echo "</option>';
      html += '   </select></div>';
      html += ' </div>';

      if (item['type'] == 'text') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2541
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2542
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'textarea') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2548
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><textarea name=\"product_option[' + option_row + '][option_value]\" rows=\"5\" placeholder=\"";
            // line 2549
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
        html += ' </div>';
      }

      if (item['type'] == 'file') {
        html += ' <div class=\"form-group\" style=\"display: none;\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2555
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2556
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'date') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2562
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2563
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'time') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2569
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2570
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'datetime') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2576
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2577
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] ==
        'image') {
        html += '<div class=\"table-responsive\">';
        html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
        html += '    <thead>';
        html += '      <tr>';
        html += '        <td class=\"text-left\">";
            // line 2587
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2588
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-left\">";
            // line 2589
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2590
            echo ($context["entry_price"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2591
            echo ($context["entry_option_points"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2592
            echo ($context["entry_weight"] ?? null);
            echo "</td>';
        html += '        <td></td>';
        html += '      </tr>';
        html += '    </thead>';
        html += '    <tbody>';
        html += '    </tbody>';
        html += '    <tfoot>';
        html += '      <tr>';
        html += '        <td colspan=\"6\"></td>';
        html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
            // line 2601
            echo ($context["button_add_option_value"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
        html += '      </tr>';
        html += '    </tfoot>';
        html += '  </table>';
        html += '</div>';

        html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

        for (i = 0; i < item['option_value'].length; i++) {
          html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i][
            'name'
          ] + '</option>';
        }

        html += '  </select>';
        html += '</div>';
      }

      \$('#tab-option .tab-content').append(html);

      \$('#option > li:last-child').before('<li id=\"optionli\"><a href=\"#tab-option' + option_row +
        '\" data-toggle=\"tab\" id=\"categoryOption' + id +
        '\"><i class=\"fa fa-trash\" onclick=\"\$(\\'a[href=\\\\\\'#tab-option' + option_row +
        '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row +
        '\\').remove(); \$(\\'#option a:first\\').tab(\\'show\\')\"></i> ' + item['label'] + '</li>');

      \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

      \$('.date').datetimepicker({
        pickTime: false
      });

      \$('.time').datetimepicker({
        pickDate: false
      });

      \$('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
      });

      option_row++;
    }
    //
    -->
  </script>
  <script type=\"text/javascript\">
    <!--
    var option_value_row = ";
            // line 2649
            echo ($context["option_value_row"] ?? null);
            echo ";


    function addOptionValue(option_row) {
      html = '<tbody id=\"option-value-row' + option_value_row + '\">';
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][option_value_id]\" style=\"min-width: 60px;\" class=\"form-control\">';
      html += \$('#option-values' + option_row).html();
      html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2660
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][subtract]\" class=\"form-control\">';
      html += '    <option value=\"1\">";
            // line 2663
            echo ($context["text_yes"] ?? null);
            echo "</option>';
      html += '    <option value=\"0\">";
            // line 2664
            echo ($context["text_no"] ?? null);
            echo "</option>';
      html += '  </select></td>';
      html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][price_prefix]\" class=\"form-control\">';
      html += '    <option value=\"+\">+</option>';
      html += '    <option value=\"-\">-</option>';
      html += '  </select>';
      html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
            // line 2671
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][points_prefix]\" class=\"form-control\">';
      html += '    <option value=\"+\">+</option>';
      html += '    <option value=\"-\">-</option>';
      html += '  </select>';
      html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
            // line 2677
            echo ($context["entry_points"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' +
        option_value_row + '][weight_prefix]\" class=\"form-control\">';
      html += '    <option value=\"+\">+</option>';
      html += '    <option value=\"-\">-</option>';
      html += '  </select>';
      html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
            // line 2683
            echo ($context["entry_weight"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2684
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';
      html += '</tbody>;';

      \$('#option-value' + option_row + ' tfoot').before(html);

      option_value_row++;
    }
    //
    -->
  </script>
  ";
        }
        // line 2696
        echo "
  ";
        // line 2697
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 2697) && (($__internal_compile_234 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_234) || $__internal_compile_234 instanceof ArrayAccess ? ($__internal_compile_234["discount"] ?? null) : null))) {
            // line 2698
            echo "  <script type=\"text/javascript\">
    <!--
    var discount_row = ";
            // line 2700
            echo ($context["discount_row"] ?? null);
            echo ";

    function addDiscount() {
      html = '<tbody id=\"discount-row' + discount_row + '\">';
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2707
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2708
                echo "      html += '    <option value=\"";
                echo (($__internal_compile_235 = $context["customer_group"]) && is_array($__internal_compile_235) || $__internal_compile_235 instanceof ArrayAccess ? ($__internal_compile_235["customer_group_id"] ?? null) : null);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_236 = $context["customer_group"]) && is_array($__internal_compile_236) || $__internal_compile_236 instanceof ArrayAccess ? ($__internal_compile_236["name"] ?? null) : null));
                echo "</option>';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2710
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2711
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2712
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2713
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2714
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2715
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2716
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';
      html += '</tbody>';

      \$('#discount tfoot').before(html);

      \$('.date').datetimepicker({
        pickTime: false
      });

      discount_row++;
    }
    //
    -->
  </script>
  ";
        }
        // line 2732
        echo "
  ";
        // line 2733
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 2733) && (($__internal_compile_237 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_237) || $__internal_compile_237 instanceof ArrayAccess ? ($__internal_compile_237["special"] ?? null) : null))) {
            // line 2734
            echo "  <script type=\"text/javascript\">
    <!--
    var special_row = ";
            // line 2736
            echo ($context["special_row"] ?? null);
            echo ";

    function addSpecial() {
      html = '<tbody id=\"special-row' + special_row + '\">'
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2743
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2744
                echo "      html += '      <option value=\"";
                echo (($__internal_compile_238 = $context["customer_group"]) && is_array($__internal_compile_238) || $__internal_compile_238 instanceof ArrayAccess ? ($__internal_compile_238["customer_group_id"] ?? null) : null);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_239 = $context["customer_group"]) && is_array($__internal_compile_239) || $__internal_compile_239 instanceof ArrayAccess ? ($__internal_compile_239["name"] ?? null) : null));
                echo "</option>';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2746
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2747
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2748
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2749
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2750
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2751
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';
      html += '</tbody>';

      \$('#special tfoot').before(html);

      \$('.date').datetimepicker({
        pickTime: false
      });

      special_row++;
    }
    //
    -->
  </script>
  ";
        }
        // line 2767
        echo "
  <script type=\"text/javascript\">
    <!--
    var image_row = ";
        // line 2770
        echo ($context["image_row"] ?? null);
        echo ";

    function addImage() {
      html = '<tbody id=\"image-row' + image_row + '\">';
      html += '  <tr>';
      html += '  <td class=\"text-left\"><div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\"><img id=\"thumb' + image_row + '-thumb-image\" src=\"";
        // line 2775
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\"/></div><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"thumb' + image_row + '-target-image\"/><div class=\"btn-group imgoption\" style=\"width: 41%;\"><button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button></div></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2776
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2777
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';
      html += '</tbody>';

      \$('#images tfoot').before(html);

      image_row++;

    }
    //
    -->
  </script>
  <script type=\"text/javascript\">
    <!--
    \$('#language a:first').tab('show');
    \$('#option a:first').tab('show');
    //
    -->
  </script>
</div>

<!-- membership codes starts here -->

<!-- membership codes ends here -->
<script>
  var wk_addproduct = {
    'choose_categories': [],
    'getcategories': function(category_id) {
      \$.ajax({
        url: 'index.php?route=account/customerpartner/addproduct/getcategories&category_id=' + category_id,
        type: 'get',
        dataType: 'json',
        success: function(json) {
          if (json['categories']) {
            let length = \$('.category-box').length;
            if (length > 1) {
              let x = parseInt(\$('.category-box:nth-child(' + length + ') > .wk_pd_category').attr(
                'data-categoty-id'));
              if (x == parseInt(json['categories'][0]['category_id'])) {
                return;
              }
            }
            var html = '';
            html += '<div class=\"category-box\">';
            \$(json['categories']).each(function(index, value) {
              html += '<p class=\"wk_pd_category\" data-categoty-id = \"' + value.category_id + '\">' + value
                .name + '</p>';
            });
            html += '</div>';
            \$(document).find(\"#category-modal-body\").append(html);
          } else {
            if (wk_addproduct.choose_categories) {
              \$(wk_addproduct.choose_categories).each(function(index, item) {

                ";
        // line 2831
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2831) && (($__internal_compile_240 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_240) || $__internal_compile_240 instanceof ArrayAccess ? ($__internal_compile_240["attribute"] ?? null) : null))) {
            // line 2832
            echo "                addCategoryAttribute(item, category_id);
                ";
        }
        // line 2834
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2834) && (($__internal_compile_241 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_241) || $__internal_compile_241 instanceof ArrayAccess ? ($__internal_compile_241["options"] ?? null) : null))) {
            // line 2835
            echo "                addCategoryOption(item, category_id);
                ";
        }
        // line 2837
        echo "
                \$(document).find('#product-category' + item['value']).remove();

                \$(document).find('#product-category').append('<div id=\"product-category' + item['value'] +
                  '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] +
                  '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] +
                  '\" /></div>');

                \$(document).find('#product-category div:odd').attr('class', 'odd');
                \$(document).find('#product-category div:even').attr('class', 'even');
              });

              \$(document).find(\"#category-modal\").modal(\"hide\");
            }
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    },
  };

  \$(document).delegate('#input-category', 'click', function() {
    wk_addproduct.choose_categories = [];
    \$(document).find(\"#category-modal-body\").empty();
    wk_addproduct.getcategories(0);
  });

  \$(document).delegate('.wk_pd_category', 'click', function() {
    wk_addproduct.choose_categories = [];
    \$(this).parent(\".category-box\").nextAll().remove();
    \$(this).parent(\".category-box\").find(\".wk_pd_category\").removeClass('wk_category_select');
    \$(this).addClass('wk_category_select');

    \$(\$(document).find(\".category-box > .wk_category_select\")).each(function(index, value) {
      var wk_category = {label: \$(value).text(),value: \$(value).data(\"categoty-id\")};
      wk_addproduct.choose_categories.push(wk_category);
    });

    wk_addproduct.getcategories(\$(this).data(\"categoty-id\"));
    ";
        // line 2878
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 2879
            echo "    getListingDuration(\$(this).data(\"categoty-id\"));
    ";
        }
        // line 2881
        echo "  });

  \$(document).delegate('.fa-minus-circle', 'click', function() {
    \$(this).parent().remove();
    \$(document).find('#product-category div:odd').attr('class', 'odd');
    \$(document).find('#product-category div:even').attr('class', 'even');

    var categories = [];
    \$('input[name=\"product_category[]\"]').each(function() {
      categories.push(\$(this).val());
    });
    if (typeof categories != 'undefined' && categories.length) {
      getListingDuration(categories);
    } else {
      getListingDuration(0);
    }

  });
</script>
<style type=\"text/css\">
  .imgoption {
    display: block;
    margin-top: 5px;
    width: 18%;
  }

  .imgoption button {
    width: 100%;
  }

  .category-box {
    min-width: 20%;
    padding: 20px;
    height: 200px;
    background-color: #f3f3f3;
    margin-right: 3px;
    border: 2px solid #ede9e4;
    border-radius: 7px;
    float: left;
    position: relative;
    overflow-y: auto;
    margin-top: 0;
    box-sizing: border-box;
  }

  .wk_category_select {
    color: blue;
  }
</style>
";
        // line 2930
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__554fe5d2f7ced8bcbda5cbc16a6c2a5370a314a7b4007e72f0a0f45f14eda942";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5596 => 2930,  5545 => 2881,  5541 => 2879,  5539 => 2878,  5496 => 2837,  5492 => 2835,  5489 => 2834,  5485 => 2832,  5483 => 2831,  5426 => 2777,  5422 => 2776,  5418 => 2775,  5410 => 2770,  5405 => 2767,  5386 => 2751,  5382 => 2750,  5378 => 2749,  5374 => 2748,  5370 => 2747,  5367 => 2746,  5356 => 2744,  5352 => 2743,  5342 => 2736,  5338 => 2734,  5336 => 2733,  5333 => 2732,  5314 => 2716,  5310 => 2715,  5306 => 2714,  5302 => 2713,  5298 => 2712,  5294 => 2711,  5291 => 2710,  5280 => 2708,  5276 => 2707,  5266 => 2700,  5262 => 2698,  5260 => 2697,  5257 => 2696,  5242 => 2684,  5238 => 2683,  5229 => 2677,  5220 => 2671,  5210 => 2664,  5206 => 2663,  5200 => 2660,  5186 => 2649,  5135 => 2601,  5123 => 2592,  5119 => 2591,  5115 => 2590,  5111 => 2589,  5107 => 2588,  5103 => 2587,  5090 => 2577,  5086 => 2576,  5077 => 2570,  5073 => 2569,  5064 => 2563,  5060 => 2562,  5051 => 2556,  5047 => 2555,  5038 => 2549,  5034 => 2548,  5025 => 2542,  5021 => 2541,  5012 => 2535,  5008 => 2534,  5002 => 2531,  4881 => 2413,  4877 => 2411,  4875 => 2410,  4872 => 2409,  4815 => 2355,  4812 => 2354,  4795 => 2352,  4791 => 2351,  4786 => 2349,  4694 => 2260,  4690 => 2258,  4688 => 2257,  4685 => 2256,  4440 => 2013,  4429 => 2004,  4426 => 2003,  4422 => 2001,  4420 => 2000,  4411 => 1993,  4409 => 1992,  4405 => 1990,  4401 => 1988,  4399 => 1987,  4348 => 1939,  4329 => 1922,  4327 => 1921,  4293 => 1889,  4282 => 1885,  4278 => 1884,  4185 => 1794,  4180 => 1792,  4166 => 1781,  4153 => 1771,  4143 => 1764,  4133 => 1757,  4092 => 1719,  4088 => 1718,  4081 => 1713,  4029 => 1663,  4023 => 1661,  4021 => 1660,  4018 => 1659,  4016 => 1658,  4010 => 1654,  3998 => 1644,  3988 => 1640,  3982 => 1637,  3976 => 1634,  3972 => 1632,  3968 => 1631,  3960 => 1626,  3954 => 1623,  3948 => 1620,  3940 => 1615,  3928 => 1605,  3926 => 1604,  3917 => 1598,  3911 => 1595,  3901 => 1588,  3893 => 1582,  3884 => 1576,  3878 => 1572,  3872 => 1569,  3869 => 1568,  3861 => 1562,  3854 => 1557,  3849 => 1555,  3844 => 1554,  3839 => 1552,  3834 => 1551,  3832 => 1550,  3826 => 1547,  3822 => 1545,  3820 => 1544,  3813 => 1539,  3810 => 1538,  3801 => 1535,  3794 => 1534,  3787 => 1533,  3783 => 1532,  3780 => 1531,  3778 => 1530,  3772 => 1527,  3768 => 1525,  3761 => 1520,  3758 => 1519,  3752 => 1518,  3748 => 1517,  3745 => 1516,  3728 => 1505,  3724 => 1504,  3712 => 1499,  3710 => 1498,  3695 => 1489,  3691 => 1488,  3679 => 1483,  3677 => 1482,  3661 => 1472,  3657 => 1471,  3645 => 1466,  3643 => 1465,  3638 => 1462,  3633 => 1461,  3629 => 1460,  3618 => 1456,  3616 => 1455,  3607 => 1452,  3603 => 1451,  3592 => 1447,  3590 => 1446,  3586 => 1444,  3575 => 1439,  3565 => 1438,  3559 => 1437,  3553 => 1436,  3549 => 1435,  3545 => 1434,  3539 => 1433,  3535 => 1432,  3531 => 1430,  3527 => 1429,  3517 => 1426,  3515 => 1425,  3509 => 1421,  3500 => 1418,  3490 => 1417,  3484 => 1416,  3479 => 1415,  3474 => 1414,  3470 => 1413,  3466 => 1412,  3455 => 1408,  3453 => 1407,  3448 => 1405,  3444 => 1404,  3439 => 1402,  3435 => 1401,  3431 => 1400,  3427 => 1399,  3423 => 1398,  3419 => 1397,  3415 => 1396,  3410 => 1395,  3404 => 1392,  3400 => 1390,  3398 => 1389,  3393 => 1387,  3386 => 1384,  3381 => 1383,  3378 => 1382,  3374 => 1381,  3365 => 1374,  3362 => 1373,  3353 => 1370,  3347 => 1369,  3341 => 1368,  3334 => 1367,  3330 => 1366,  3327 => 1365,  3325 => 1364,  3321 => 1362,  3318 => 1361,  3312 => 1360,  3310 => 1359,  3301 => 1357,  3297 => 1356,  3291 => 1355,  3288 => 1354,  3283 => 1353,  3280 => 1352,  3276 => 1351,  3270 => 1347,  3268 => 1346,  3265 => 1345,  3253 => 1336,  3247 => 1332,  3241 => 1331,  3239 => 1330,  3232 => 1326,  3228 => 1325,  3221 => 1323,  3217 => 1322,  3207 => 1317,  3203 => 1316,  3197 => 1313,  3193 => 1312,  3185 => 1308,  3181 => 1307,  3174 => 1303,  3170 => 1302,  3163 => 1297,  3160 => 1296,  3158 => 1295,  3154 => 1293,  3142 => 1284,  3136 => 1280,  3130 => 1279,  3128 => 1278,  3121 => 1274,  3117 => 1273,  3104 => 1265,  3100 => 1264,  3086 => 1255,  3082 => 1254,  3073 => 1250,  3069 => 1249,  3062 => 1247,  3058 => 1246,  3055 => 1245,  3049 => 1244,  3040 => 1241,  3035 => 1239,  3030 => 1238,  3027 => 1237,  3023 => 1236,  3018 => 1234,  3012 => 1232,  3007 => 1231,  3005 => 1230,  2998 => 1226,  2994 => 1225,  2990 => 1224,  2986 => 1223,  2982 => 1222,  2974 => 1216,  2972 => 1215,  2968 => 1213,  2956 => 1204,  2950 => 1200,  2944 => 1199,  2942 => 1198,  2935 => 1194,  2931 => 1193,  2918 => 1185,  2914 => 1184,  2900 => 1175,  2896 => 1174,  2887 => 1170,  2883 => 1169,  2876 => 1167,  2872 => 1166,  2865 => 1164,  2861 => 1163,  2858 => 1162,  2852 => 1161,  2843 => 1158,  2838 => 1156,  2833 => 1155,  2830 => 1154,  2826 => 1153,  2821 => 1151,  2815 => 1149,  2810 => 1148,  2808 => 1147,  2801 => 1143,  2797 => 1142,  2793 => 1141,  2789 => 1140,  2785 => 1139,  2781 => 1138,  2773 => 1132,  2771 => 1131,  2767 => 1129,  2757 => 1121,  2751 => 1120,  2749 => 1119,  2745 => 1117,  2741 => 1115,  2738 => 1114,  2727 => 1112,  2722 => 1111,  2720 => 1110,  2716 => 1109,  2706 => 1102,  2702 => 1101,  2696 => 1097,  2690 => 1096,  2688 => 1095,  2680 => 1090,  2676 => 1089,  2667 => 1085,  2661 => 1084,  2657 => 1082,  2653 => 1080,  2649 => 1078,  2646 => 1077,  2642 => 1075,  2638 => 1073,  2636 => 1072,  2629 => 1070,  2620 => 1066,  2614 => 1065,  2610 => 1063,  2606 => 1061,  2602 => 1059,  2599 => 1058,  2595 => 1056,  2591 => 1054,  2589 => 1053,  2582 => 1051,  2573 => 1047,  2567 => 1046,  2562 => 1043,  2558 => 1041,  2554 => 1039,  2551 => 1038,  2547 => 1036,  2543 => 1034,  2541 => 1033,  2534 => 1031,  2530 => 1029,  2525 => 1027,  2520 => 1026,  2515 => 1024,  2510 => 1023,  2508 => 1022,  2501 => 1020,  2496 => 1018,  2490 => 1017,  2484 => 1014,  2478 => 1013,  2474 => 1011,  2471 => 1010,  2465 => 1009,  2456 => 1006,  2451 => 1004,  2446 => 1003,  2443 => 1002,  2438 => 1001,  2436 => 1000,  2429 => 998,  2422 => 995,  2418 => 994,  2411 => 990,  2407 => 989,  2403 => 988,  2399 => 987,  2395 => 986,  2391 => 985,  2384 => 981,  2381 => 980,  2378 => 979,  2366 => 970,  2360 => 969,  2356 => 968,  2348 => 965,  2344 => 963,  2341 => 962,  2330 => 954,  2324 => 953,  2320 => 952,  2312 => 949,  2308 => 947,  2305 => 946,  2294 => 938,  2288 => 937,  2284 => 936,  2276 => 933,  2272 => 931,  2269 => 930,  2262 => 926,  2256 => 925,  2252 => 924,  2245 => 922,  2241 => 920,  2238 => 919,  2231 => 915,  2225 => 914,  2221 => 913,  2214 => 911,  2210 => 909,  2207 => 908,  2200 => 904,  2194 => 903,  2190 => 902,  2183 => 900,  2179 => 898,  2177 => 897,  2171 => 893,  2166 => 891,  2161 => 890,  2156 => 888,  2151 => 887,  2149 => 886,  2145 => 885,  2141 => 884,  2134 => 882,  2128 => 879,  2124 => 878,  2120 => 877,  2116 => 876,  2112 => 875,  2108 => 874,  2104 => 873,  2100 => 872,  2095 => 871,  2090 => 870,  2087 => 869,  2085 => 868,  2075 => 861,  2072 => 860,  2066 => 859,  2064 => 858,  2060 => 857,  2054 => 856,  2047 => 854,  2044 => 853,  2039 => 852,  2037 => 851,  2030 => 846,  2028 => 845,  2024 => 843,  2011 => 833,  2004 => 828,  1998 => 827,  1996 => 826,  1988 => 821,  1984 => 820,  1979 => 817,  1970 => 814,  1963 => 812,  1957 => 809,  1951 => 808,  1947 => 806,  1943 => 805,  1937 => 802,  1933 => 801,  1926 => 799,  1922 => 798,  1915 => 795,  1910 => 794,  1908 => 793,  1900 => 788,  1896 => 787,  1888 => 781,  1886 => 780,  1851 => 747,  1847 => 744,  1839 => 738,  1830 => 735,  1826 => 734,  1819 => 733,  1816 => 732,  1811 => 731,  1809 => 730,  1803 => 727,  1796 => 725,  1788 => 719,  1783 => 716,  1779 => 714,  1774 => 710,  1769 => 708,  1764 => 705,  1758 => 701,  1750 => 698,  1745 => 696,  1740 => 695,  1735 => 693,  1729 => 691,  1727 => 690,  1723 => 688,  1719 => 687,  1715 => 685,  1710 => 683,  1707 => 682,  1702 => 680,  1699 => 679,  1697 => 678,  1689 => 673,  1686 => 672,  1684 => 671,  1679 => 668,  1670 => 665,  1666 => 664,  1661 => 663,  1657 => 662,  1651 => 659,  1644 => 657,  1638 => 653,  1632 => 651,  1630 => 650,  1627 => 649,  1618 => 646,  1614 => 645,  1609 => 644,  1605 => 643,  1600 => 641,  1592 => 638,  1584 => 636,  1577 => 632,  1573 => 631,  1569 => 630,  1562 => 628,  1558 => 626,  1556 => 625,  1552 => 623,  1550 => 622,  1544 => 618,  1534 => 613,  1529 => 611,  1526 => 610,  1524 => 609,  1521 => 608,  1515 => 604,  1509 => 603,  1501 => 601,  1496 => 599,  1491 => 598,  1488 => 597,  1484 => 596,  1478 => 593,  1475 => 592,  1472 => 591,  1465 => 587,  1458 => 585,  1451 => 580,  1448 => 579,  1442 => 575,  1436 => 574,  1428 => 572,  1423 => 570,  1418 => 569,  1415 => 568,  1411 => 567,  1405 => 564,  1402 => 563,  1399 => 562,  1390 => 556,  1383 => 554,  1377 => 551,  1370 => 549,  1364 => 546,  1357 => 544,  1348 => 537,  1345 => 536,  1333 => 527,  1329 => 526,  1323 => 523,  1320 => 522,  1317 => 521,  1307 => 514,  1302 => 512,  1296 => 509,  1293 => 508,  1290 => 507,  1287 => 506,  1278 => 502,  1272 => 500,  1270 => 499,  1263 => 497,  1259 => 496,  1254 => 494,  1248 => 493,  1239 => 489,  1235 => 487,  1231 => 486,  1226 => 485,  1220 => 481,  1215 => 479,  1212 => 478,  1207 => 476,  1204 => 475,  1202 => 474,  1198 => 472,  1193 => 470,  1190 => 469,  1185 => 467,  1182 => 466,  1180 => 465,  1174 => 462,  1171 => 461,  1168 => 460,  1162 => 456,  1156 => 455,  1148 => 453,  1143 => 451,  1138 => 450,  1135 => 449,  1131 => 448,  1123 => 445,  1119 => 443,  1117 => 442,  1114 => 441,  1108 => 437,  1103 => 435,  1098 => 434,  1093 => 432,  1088 => 431,  1086 => 430,  1080 => 427,  1077 => 426,  1075 => 425,  1072 => 424,  1066 => 420,  1061 => 418,  1056 => 417,  1051 => 415,  1046 => 414,  1044 => 413,  1038 => 410,  1035 => 409,  1032 => 408,  1022 => 403,  1015 => 401,  1011 => 399,  1008 => 398,  1001 => 393,  993 => 389,  991 => 388,  982 => 384,  977 => 382,  974 => 381,  971 => 380,  965 => 376,  959 => 375,  951 => 373,  942 => 370,  939 => 369,  935 => 368,  931 => 367,  925 => 364,  922 => 363,  920 => 362,  917 => 361,  908 => 355,  900 => 350,  889 => 342,  882 => 338,  878 => 337,  873 => 335,  870 => 334,  868 => 333,  865 => 332,  857 => 327,  850 => 325,  845 => 323,  842 => 322,  840 => 321,  837 => 320,  831 => 316,  824 => 314,  819 => 312,  816 => 311,  813 => 309,  803 => 304,  796 => 302,  792 => 300,  789 => 299,  779 => 294,  772 => 292,  768 => 290,  765 => 289,  755 => 284,  748 => 282,  744 => 280,  741 => 279,  731 => 274,  724 => 272,  720 => 270,  717 => 269,  707 => 264,  700 => 262,  696 => 260,  693 => 259,  683 => 254,  676 => 252,  672 => 250,  670 => 249,  666 => 247,  660 => 245,  658 => 244,  651 => 242,  646 => 240,  638 => 234,  627 => 228,  624 => 227,  621 => 226,  615 => 223,  612 => 222,  604 => 216,  601 => 215,  598 => 214,  594 => 212,  585 => 205,  582 => 204,  578 => 203,  574 => 200,  566 => 194,  560 => 192,  558 => 191,  554 => 190,  547 => 188,  543 => 187,  536 => 185,  527 => 179,  521 => 178,  517 => 177,  510 => 175,  504 => 171,  498 => 169,  496 => 168,  490 => 167,  486 => 166,  482 => 165,  474 => 162,  468 => 159,  458 => 158,  452 => 157,  448 => 155,  439 => 152,  435 => 151,  429 => 150,  425 => 149,  415 => 148,  409 => 147,  399 => 140,  395 => 138,  393 => 137,  390 => 136,  388 => 135,  385 => 134,  383 => 133,  380 => 132,  374 => 130,  372 => 129,  369 => 128,  359 => 125,  356 => 124,  354 => 123,  351 => 122,  342 => 120,  339 => 119,  337 => 118,  334 => 117,  325 => 115,  322 => 114,  320 => 113,  317 => 112,  307 => 109,  304 => 108,  302 => 107,  299 => 106,  293 => 104,  291 => 103,  288 => 102,  282 => 100,  280 => 99,  277 => 98,  268 => 96,  265 => 95,  263 => 94,  254 => 92,  245 => 90,  240 => 87,  232 => 85,  224 => 83,  215 => 81,  213 => 80,  206 => 77,  204 => 76,  199 => 74,  187 => 67,  180 => 65,  174 => 62,  168 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  141 => 50,  137 => 49,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  113 => 38,  109 => 36,  107 => 35,  104 => 34,  98 => 31,  94 => 29,  92 => 28,  88 => 26,  77 => 24,  73 => 23,  69 => 21,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__554fe5d2f7ced8bcbda5cbc16a6c2a5370a314a7b4007e72f0a0f45f14eda942", "");
    }
}
