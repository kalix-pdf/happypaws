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

/* __string_template__0c536d65d9ea715a307cfbb2419ca0d32a39fd058f8472a365fc2517d26a6906 */
class __TwigTemplate_01668b28c13fa9077faed3b5e44266fdd5c9495778fe569011a605be9ded06db extends Template
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
                // line 134
                echo "
              ";
                // line 135
                if ((($context["sbsType"] ?? null) == 1)) {
                    // line 136
                    echo "                <li><a href=\"#tab-ppd\" data-toggle=\"tab\">Piso Per Day Per Product</a></li>
              ";
                } elseif ((                // line 137
($context["sbsType"] ?? null) == 2)) {
                    // line 138
                    echo "                <li><a href=\"#tab-ppm\" data-toggle=\"tab\">Piso Per Month Per Product</a></li>
              ";
                } elseif ((                // line 139
($context["sbsType"] ?? null) == 3)) {
                    // line 140
                    echo "                <li><a href=\"#tab-cms\" data-toggle=\"tab\">Commission Type</a></li>
              ";
                }
                // line 142
                echo "
              <!--<li><a href=\"#tab-update-reason\" data-toggle=\"tab\">";
                // line 143
                echo "</a></li>-->

            </ul>

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <ul class=\"nav nav-tabs\" id=\"languages\">
                  ";
                // line 150
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 151
                    echo "                  <li class=\"";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\">
                    <a href=\"#language";
                    // line 152
                    echo (($__internal_compile_2 = $context["language"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["language_id"] ?? null) : null);
                    echo "\" data-toggle=\"tab\">
                      <img src=\"catalog/language/";
                    // line 153
                    echo (($__internal_compile_3 = $context["language"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_compile_4 = $context["language"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["code"] ?? null) : null);
                    echo ".png\"
                        title=\"";
                    // line 154
                    echo (($__internal_compile_5 = $context["language"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                    echo "\" />
                      ";
                    // line 155
                    echo (($__internal_compile_6 = $context["language"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                    echo "</a>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "                </ul>
                <div class=\"tab-content\">
                  ";
                // line 160
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 161
                    echo "                  <div class=\"tab-pane ";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\"
                    id=\"language";
                    // line 162
                    echo (($__internal_compile_7 = $context["language"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["language_id"] ?? null) : null);
                    echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-name";
                    // line 165
                    echo (($__internal_compile_8 = $context["language"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_name"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\"
                          name=\"product_description[";
                    // line 168
                    echo (($__internal_compile_9 = $context["language"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["language_id"] ?? null) : null);
                    echo "][name]\"
                          value=\"";
                    // line 169
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_10 = $context["language"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["language_id"] ?? null) : null), [], "array", true, true, false, 169)) ? ((($__internal_compile_11 = (($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[(($__internal_compile_13 = $context["language"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null)) : (""));
                    echo "\"
                          placeholder=\"";
                    // line 170
                    echo ($context["entry_name"] ?? null);
                    echo "\" id=\"input-name";
                    echo (($__internal_compile_14 = $context["language"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["language_id"] ?? null) : null);
                    echo "\" />
                        ";
                    // line 171
                    if (twig_get_attribute($this->env, $this->source, ($context["error_name"] ?? null), (($__internal_compile_15 = $context["language"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["language_id"] ?? null) : null), [], "array", true, true, false, 171)) {
                        // line 172
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_16 = ($context["error_name"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["language"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 174
                    echo "                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-description";
                    // line 178
                    echo (($__internal_compile_18 = $context["language"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_description"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <textarea name=\"product_description[";
                    // line 180
                    echo (($__internal_compile_19 = $context["language"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["language_id"] ?? null) : null);
                    echo "][description]\"
                          placeholder=\"";
                    // line 181
                    echo ($context["entry_description"] ?? null);
                    echo "\" id=\"input-description";
                    echo (($__internal_compile_20 = $context["language"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\">";
                    // line 182
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_21 = $context["language"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["language_id"] ?? null) : null), [], "array", true, true, false, 182)) ? ((($__internal_compile_22 = (($__internal_compile_23 = ($context["product_description"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[(($__internal_compile_24 = $context["language"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["description"] ?? null) : null)) : (""));
                    echo "</textarea>
                      </div>
                    </div>

                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-meta-description";
                    // line 188
                    echo (($__internal_compile_25 = $context["language"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_meta_title"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" name=\"product_description[";
                    // line 190
                    echo (($__internal_compile_26 = $context["language"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["language_id"] ?? null) : null);
                    echo "][meta_title]\"
                          placeholder=\"";
                    // line 191
                    echo ($context["entry_meta_title"] ?? null);
                    echo "\" id=\"input-meta-description";
                    echo (($__internal_compile_27 = $context["language"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\"
                          value=\"";
                    // line 193
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_28 = $context["language"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["language_id"] ?? null) : null), [], "array", true, true, false, 193)) ? ((($__internal_compile_29 = (($__internal_compile_30 = ($context["product_description"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[(($__internal_compile_31 = $context["language"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["meta_title"] ?? null) : null)) : (""));
                    echo "\" />
                        ";
                    // line 194
                    if (twig_get_attribute($this->env, $this->source, ($context["error_meta_title"] ?? null), (($__internal_compile_32 = $context["language"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["language_id"] ?? null) : null), [], "array", true, true, false, 194)) {
                        // line 195
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_33 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[(($__internal_compile_34 = $context["language"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 197
                    echo "                      </div>
                    </div>

                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-description";
                    // line 203
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description";
                    // line 206
                    echo "                              placeholder=\"";
                    echo "\"
                              id=\"input-meta-description";
                    // line 207
                    echo "\"
                              class=\"form-control\">";
                    // line 208
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-keyword";
                    // line 215
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description[";
                    // line 217
                    echo "rows=\"5\"
                              placeholder=\"";
                    // line 218
                    echo "\"
                              class=\"form-control\">";
                    // line 219
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\" for=\"input-tag";
                    // line 225
                    echo "\"><span
                              data-toggle=\"tooltip\" title=\"";
                    // line 226
                    echo "\">";
                    echo "</span></label>
                          <div class=\"col-sm-9\">
                            <input class=\"form-control\" type=\"text\"
                              name=\"product_description[";
                    // line 229
                    echo "][tag]\"
                              value=\"";
                    // line 230
                    echo "\"
                              placeholder=\"";
                    // line 231
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
                // line 237
                echo "                </div>
                <!--tab-content-language-->
              </div>

              <div class=\"tab-pane\" id=\"tab-data\">
                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-model\">";
                // line 243
                echo ($context["entry_model"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"model\" value=\"";
                // line 245
                echo ($context["model"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_model"] ?? null);
                echo "\" id=\"input-model\"
                      class=\"form-control\" />
                      ";
                // line 247
                if (($context["error_model"] ?? null)) {
                    // line 248
                    echo "                      <div class=\"text-danger\">";
                    echo ($context["error_model"] ?? null);
                    echo "</div>
                      ";
                }
                // line 250
                echo "                  </div>
                </div>
                ";
                // line 252
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sku", [], "array", true, true, false, 252)) {
                    // line 253
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 255
                    echo ($context["help_sku"] ?? null);
                    echo "\">";
                    echo ($context["entry_sku"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sku\" value=\"";
                    // line 257
                    echo ($context["sku"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sku"] ?? null);
                    echo "\" id=\"input-sku\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 262
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "upc", [], "array", true, true, false, 262)) {
                    // line 263
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 265
                    echo ($context["help_upc"] ?? null);
                    echo "\">";
                    echo ($context["entry_upc"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"upc\" value=\"";
                    // line 267
                    echo ($context["upc"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_upc"] ?? null);
                    echo "\" id=\"input-upc\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 272
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "ean", [], "array", true, true, false, 272)) {
                    // line 273
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 275
                    echo ($context["help_ean"] ?? null);
                    echo "\">";
                    echo ($context["entry_ean"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"ean\" value=\"";
                    // line 277
                    echo ($context["ean"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_ean"] ?? null);
                    echo "\" id=\"input-ean\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 282
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "jan", [], "array", true, true, false, 282)) {
                    // line 283
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 285
                    echo ($context["help_jan"] ?? null);
                    echo "\">";
                    echo ($context["entry_jan"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"jan\" value=\"";
                    // line 287
                    echo ($context["jan"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_jan"] ?? null);
                    echo "\" id=\"input-jan\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 292
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "isbn", [], "array", true, true, false, 292)) {
                    // line 293
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 295
                    echo ($context["help_isbn"] ?? null);
                    echo "\">";
                    echo ($context["entry_isbn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"isbn\" value=\"";
                    // line 297
                    echo ($context["isbn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_isbn"] ?? null);
                    echo "\" id=\"input-isbn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 302
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "mpn", [], "array", true, true, false, 302)) {
                    // line 303
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 305
                    echo ($context["help_mpn"] ?? null);
                    echo "\">";
                    echo ($context["entry_mpn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"mpn\" value=\"";
                    // line 307
                    echo ($context["mpn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_mpn"] ?? null);
                    echo "\" id=\"input-mpn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 312
                echo "                
                ";
                // line 314
                echo "                <!--<div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-location\">";
                // line 315
                echo ($context["entry_location"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"location\" value=\"";
                // line 317
                echo ($context["location"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_location"] ?? null);
                echo "\"
                      id=\"input-location\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                // line 319
                echo ($context["prevPrice"] ?? null);
                echo "\" />
                  </div>
                </div>-->
                ";
                // line 323
                echo "                
                ";
                // line 324
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "price", [], "array", true, true, false, 324)) {
                    // line 325
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-price\">";
                    // line 326
                    echo ($context["entry_price"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"price\" value=\"";
                    // line 328
                    echo ($context["price"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" id=\"input-price\"
                      class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                    // line 330
                    echo ($context["prevPrice"] ?? null);
                    echo "\" />
                   
                  </div>
                </div>
                ";
                }
                // line 335
                echo "                <!-- membership codes starts here -->
                ";
                // line 336
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 337
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-expiring-date\">";
                    // line 338
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"expiry_date\" value=\"";
                    // line 340
                    echo ($context["expiry_date"] ?? null);
                    echo "\"
                      placeholder=\"";
                    // line 341
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "\" id=\"input-expiring-date\" class=\"form-control\" disabled />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-relist-date\">";
                    // line 345
                    echo ($context["entry_relist_duration"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"relist_duration\" class=\"form-control\" id=\"input-relist-duration\">

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-auto-relist\">";
                    // line 353
                    echo ($context["entry_auto_relist"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"checkbox\">
                      <label for=\"input-auto-relist\">
                        <input type=\"checkbox\" name=\"auto_relist\" id=\"input-auto-relist\">
                        ";
                    // line 358
                    echo ($context["entry_auto_relist_lable"] ?? null);
                    echo "
                      </label>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 364
                echo "                <!-- membership codes ends here -->
                ";
                // line 365
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "tax_class_id", [], "array", true, true, false, 365)) {
                    // line 366
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-tax-class\">";
                    // line 367
                    echo ($context["entry_tax_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                      <option value=\"0\">";
                    // line 370
                    echo ($context["text_none"] ?? null);
                    echo "</option>
                      ";
                    // line 371
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                        // line 372
                        echo "                      ";
                        if (((($__internal_compile_35 = $context["tax_class"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["tax_class_id"] ?? null) : null) == ($context["tax_class_id"] ?? null))) {
                            // line 373
                            echo "                      <option value=\"";
                            echo (($__internal_compile_36 = $context["tax_class"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["tax_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_compile_37 = $context["tax_class"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["title"] ?? null) : null);
                            echo "
                      </option>
                      ";
                        } else {
                            // line 376
                            echo "                      <option value=\"";
                            echo (($__internal_compile_38 = $context["tax_class"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["tax_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_39 = $context["tax_class"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 378
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 383
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "quantity", [], "array", true, true, false, 383)) {
                    // line 384
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-quantity\">";
                    // line 385
                    echo ($context["entry_quantity"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"quantity\" value=\"";
                    // line 387
                    echo ($context["quantity"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                      id=\"input-quantity\" class=\"form-control\" />

                    <!-- Membership code -->
                    ";
                    // line 391
                    if (((array_key_exists("wk_seller_group_status", $context) && array_key_exists("marketplace_account_menu_sequence", $context)) && twig_in_filter("membership", twig_get_array_keys_filter(($context["marketplace_account_menu_sequence"] ?? null))))) {
                        // line 392
                        echo "                    <input type=\"hidden\" name=\"prevQuantity\" id=\"prevQuantity\" value=\"";
                        echo ($context["prevQuantity"] ?? null);
                        echo "\" />
                    <a href=\"#myModalanswer\" id=\"showerror\" role=\"button\" class=\"hide tfbutton tfbuttonborder asub\"
                      data-toggle=\"modal\"></a>
                    ";
                    }
                    // line 396
                    echo "                    <!--  -->
                   
                  </div>
                </div>
                ";
                }
                // line 401
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "minimum", [], "array", true, true, false, 401)) {
                    // line 402
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 404
                    echo ($context["help_minimum"] ?? null);
                    echo "\">";
                    echo ($context["entry_minimum"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"minimum\" value=\"";
                    // line 406
                    echo ($context["minimum"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_minimum"] ?? null);
                    echo "\"
                      id=\"input-minimum\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 411
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "subtract", [], "array", true, true, false, 411)) {
                    // line 412
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-subtract\">";
                    // line 413
                    echo ($context["entry_subtract"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                      ";
                    // line 416
                    if (($context["subtract"] ?? null)) {
                        // line 417
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 418
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 420
                        echo "                      <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 421
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 423
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 427
                echo "
                ";
                // line 428
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "status", [], "array", true, true, false, 428)) {
                    // line 429
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
                    // line 430
                    echo ($context["entry_status"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
                    // line 433
                    if (($context["status"] ?? null)) {
                        // line 434
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 435
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 437
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 438
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 440
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 444
                echo "
                ";
                // line 445
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "stock_status_id", [], "array", true, true, false, 445)) {
                    // line 446
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 448
                    echo ($context["help_stock_status"] ?? null);
                    echo "\">";
                    echo ($context["entry_stock_status"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                      ";
                    // line 451
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
                        // line 452
                        echo "                      ";
                        if (((($__internal_compile_40 = $context["stock_status"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["stock_status_id"] ?? null) : null) == ($context["stock_status_id"] ?? null))) {
                            // line 453
                            echo "                      <option value=\"";
                            echo (($__internal_compile_41 = $context["stock_status"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["stock_status_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 454
                            echo (($__internal_compile_42 = $context["stock_status"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["name"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 456
                            echo "                      <option value=\"";
                            echo (($__internal_compile_43 = $context["stock_status"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["stock_status_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_44 = $context["stock_status"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 458
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 459
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 463
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "shipping", [], "array", true, true, false, 463)) {
                    // line 464
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                    // line 465
                    echo ($context["entry_shipping"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      ";
                    // line 468
                    if (($context["shipping"] ?? null)) {
                        // line 469
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
                        // line 470
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 472
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
                        // line 473
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    }
                    // line 475
                    echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
                    // line 477
                    if ( !($context["shipping"] ?? null)) {
                        // line 478
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
                        // line 479
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 481
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
                        // line 482
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    }
                    // line 484
                    echo "                    </label>
                  </div>
                </div>
                ";
                }
                // line 488
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "keyword", [], "array", true, true, false, 488)) {
                    echo "                
                ";
                    // line 489
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 490
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 492
                        echo ($context["help_keyword"] ?? null);
                        echo "\">";
                        echo ($context["entry_keyword"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\">
                        <img src=\"catalog/language/";
                        // line 496
                        echo (($__internal_compile_45 = $context["language"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["code"] ?? null) : null);
                        echo "/";
                        echo (($__internal_compile_46 = $context["language"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["code"] ?? null) : null);
                        echo ".png\"
                          title=\"";
                        // line 497
                        echo (($__internal_compile_47 = $context["language"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null);
                        echo "\" />
                      </span>
                      <input type=\"text\" name=\"keyword[";
                        // line 499
                        echo (($__internal_compile_48 = $context["language"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["language_id"] ?? null) : null);
                        echo "]\"
                        value=\"";
                        // line 500
                        echo (($__internal_compile_49 = ($context["keyword"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[(($__internal_compile_50 = $context["language"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["language_id"] ?? null) : null)] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_keyword"] ?? null);
                        echo "\"
                        id=\"input-keyword\" class=\"form-control\" />
                      ";
                        // line 502
                        if (($context["error_keyword"] ?? null)) {
                            // line 503
                            echo "                      <div class=\"text-danger\">";
                            echo ($context["error_keyword"] ?? null);
                            echo "</div>
                      ";
                        }
                        // line 505
                        echo "                      </div>
                  </div>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 509
                    echo "                ";
                }
                // line 510
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "image", [], "array", true, true, false, 510)) {
                    // line 511
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\">";
                    // line 512
                    echo ($context["entry_image"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                      <img id=\"image-thumb-image\" src=\"";
                    // line 515
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"\" title=\"\" />
                    </div>
                    <input type=\"hidden\" name=\"image\" value=\"";
                    // line 517
                    echo ($context["thumb_img"] ?? null);
                    echo "\" id=\"image-target-image\" />
                    <div class=\"btn-group imgoption\">
                      <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 524
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "date_available", [], "array", true, true, false, 524)) {
                    // line 525
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-date-available\">";
                    // line 526
                    echo ($context["entry_date_available"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group data-date\">
                      <input type=\"text\" name=\"date_available\" value=\"";
                    // line 529
                    echo ($context["date_available"] ?? null);
                    echo "\"
                        placeholder=\"";
                    // line 530
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
                // line 539
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length", [], "array", true, true, false, 539)) {
                    // line 540
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length\"><span data-toggle=\"tooltip\" title=\"This is a required field for shipping, Please input the dimension of your product. Dimensions in unit CM\">
                  Dimensions in unit cm (L x W x H)
                   </span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"row\">
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"length\" value=\"";
                    // line 547
                    echo ($context["length"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_length"] ?? null);
                    echo "\"
                          id=\"input-length\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 549
                    echo ($context["error_length"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"width\" value=\"";
                    // line 552
                    echo ($context["width"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_width"] ?? null);
                    echo "\"
                          id=\"input-width\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 554
                    echo ($context["error_width"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"height\" value=\"";
                    // line 557
                    echo ($context["height"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_height"] ?? null);
                    echo "\"
                          id=\"input-height\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 559
                    echo ($context["error_height"] ?? null);
                    echo "</div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 565
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length_class_id", [], "array", true, true, false, 565)) {
                    // line 566
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length-class\">";
                    // line 567
                    echo ($context["entry_length"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                      ";
                    // line 570
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
                        // line 571
                        echo "                      ";
                        if (((($__internal_compile_51 = $context["length_class"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["length_class_id"] ?? null) : null) == ($context["length_class_id"] ?? null))) {
                            // line 572
                            echo "                      <option value=\"";
                            echo (($__internal_compile_52 = $context["length_class"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["length_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 573
                            echo (($__internal_compile_53 = $context["length_class"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 575
                            echo "                      <option value=\"";
                            echo (($__internal_compile_54 = $context["length_class"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["length_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_55 = $context["length_class"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 577
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 578
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 582
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight", [], "array", true, true, false, 582)) {
                    // line 583
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight\">
                  <span data-toggle=\"tooltip\" title=\"weight in grams unit\">
                  Weight in unit grams</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"weight\" value=\"";
                    // line 588
                    echo ($context["weight"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_weight"] ?? null);
                    echo "\"
                      id=\"input-weight\" class=\"form-control\" />
                      <div class=\"text-danger\">";
                    // line 590
                    echo ($context["error_weight"] ?? null);
                    echo "</div>
                  </div>
                </div>
                ";
                }
                // line 594
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight_class_id", [], "array", true, true, false, 594)) {
                    // line 595
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight-class\">";
                    // line 596
                    echo ($context["entry_weight_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                      ";
                    // line 599
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
                        // line 600
                        echo "                      ";
                        if (((($__internal_compile_56 = $context["weight_class"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["weight_class_id"] ?? null) : null) == ($context["weight_class_id"] ?? null))) {
                            // line 601
                            echo "                      <option value=\"";
                            echo (($__internal_compile_57 = $context["weight_class"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["weight_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 602
                            echo (($__internal_compile_58 = $context["weight_class"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 604
                            echo "                      <option value=\"";
                            echo (($__internal_compile_59 = $context["weight_class"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["weight_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_60 = $context["weight_class"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 606
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 607
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 611
                echo "
                ";
                // line 612
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sort_order", [], "array", true, true, false, 612)) {
                    // line 613
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
                    // line 614
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sort_order\" value=\"";
                    // line 616
                    echo ($context["sort_order"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\"
                      id=\"input-sort-order\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 621
                echo "
              </div>

              <!-- link tab -->
              ";
                // line 625
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 625)) {
                    // line 626
                    echo "              <input type=\"hidden\" name=\"product_link_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-links\">
                ";
                    // line 628
                    if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "manufacturer_id", [], "array", true, true, false, 628)) {
                        // line 629
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 631
                        echo ($context["help_manufacturer"] ?? null);
                        echo "\">";
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
                        // line 633
                        echo ($context["manufacturer"] ?? null);
                        echo "\"
                      placeholder=\"";
                        // line 634
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
                        // line 635
                        echo ($context["manufacturer_id"] ?? null);
                        echo "\" />
                  </div>
                </div>
                ";
                    }
                    // line 639
                    echo "                <div class=\"form-group ";
                    if (($context["category_required"] ?? null)) {
                        echo "required";
                    }
                    echo "\">
                  <label class=\"col-sm-3 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 641
                    echo ($context["help_category"] ?? null);
                    echo "\">";
                    echo ($context["entry_category"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <a id=\"input-category\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#category-modal\"
                      style=\"margin-bottom: 10px;\">";
                    // line 644
                    echo ($context["text_addcategory"] ?? null);
                    echo " </a>
                    <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 646
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                        // line 647
                        echo "                      <div id=\"product-category";
                        echo (($__internal_compile_61 = $context["product_category"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["category_id"] ?? null) : null);
                        echo "\"><i
                          class=\"fa fa-minus-circle \"></i>";
                        // line 648
                        echo (($__internal_compile_62 = $context["product_category"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
                        // line 649
                        echo (($__internal_compile_63 = $context["product_category"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["category_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 652
                    echo "                    </div>
                    ";
                    // line 653
                    if (($context["error_category"] ?? null)) {
                        // line 654
                        echo "                    <div class=\"text-danger\">";
                        echo ($context["error_category"] ?? null);
                        echo "</div>
                    ";
                    }
                    // line 656
                    echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 660
                    echo ($context["help_filter"] ?? null);
                    echo "\">";
                    echo ($context["entry_filter"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
                    // line 662
                    echo ($context["entry_filter"] ?? null);
                    echo "\" id=\"input-filter\"
                      class=\"form-control\" />
                    <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 665
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
                        // line 666
                        echo "                      <div id=\"product-filter";
                        echo (($__internal_compile_64 = $context["product_filter"]) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["filter_id"] ?? null) : null);
                        echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                        // line 667
                        echo (($__internal_compile_65 = $context["product_filter"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
                        // line 668
                        echo (($__internal_compile_66 = $context["product_filter"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["filter_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 671
                    echo "                    </div>
                  </div>
                </div>
                ";
                    // line 674
                    if (((array_key_exists("marketplace_seller_product_store", $context) && ($context["marketplace_seller_product_store"] ?? null)) && (($context["marketplace_seller_product_store"] ?? null) == "choose_store"))) {
                        // line 675
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                        // line 676
                        echo ($context["entry_store"] ?? null);
                        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      <div class=\"checkbox\">
                        <label>
                          ";
                        // line 681
                        if (twig_in_filter(0, ($context["product_store"] ?? null))) {
                            // line 682
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" checked=\"checked\" />
                          ";
                            // line 683
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        } else {
                            // line 685
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" />
                          ";
                            // line 686
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        }
                        // line 688
                        echo "                        </label>
                      </div>
                      ";
                        // line 690
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                            // line 691
                            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
                            // line 693
                            if (twig_in_filter((($__internal_compile_67 = $context["store"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["store_id"] ?? null) : null), ($context["product_store"] ?? null))) {
                                // line 694
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_68 = $context["store"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["store_id"] ?? null) : null);
                                echo "\"
                            checked=\"checked\" />
                          ";
                                // line 696
                                echo (($__internal_compile_69 = $context["store"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null);
                                echo "
                          ";
                            } else {
                                // line 698
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_70 = $context["store"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["store_id"] ?? null) : null);
                                echo "\" />
                          ";
                                // line 699
                                echo (($__internal_compile_71 = $context["store"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["name"] ?? null) : null);
                                echo "
                          ";
                            }
                            // line 701
                            echo "                        </label>
                      </div>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 704
                        echo "                    </div>
                  </div>
                </div>
                ";
                    }
                    // line 708
                    echo "                <!--
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 711
                    echo "\">";
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
                    // line 713
                    echo "\" id=\"input-download\"
                      class=\"form-control\" />
                    <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 717
                    echo "                      <div id=\"product-download";
                    echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                    // line 719
                    echo "                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
                    echo "\" />
                      </div>
                      ";
                    // line 722
                    echo "                    </div>
                    </div>
                </div>
                -->
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 728
                    echo ($context["help_related"] ?? null);
                    echo "\">";
                    echo ($context["entry_related"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
                    // line 730
                    echo ($context["entry_related"] ?? null);
                    echo "\" id=\"input-related\"
                      class=\"form-control\" />
                    <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 733
                    $context["class"] = "odd";
                    // line 734
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                        // line 735
                        echo "                      ";
                        $context["class"] = (((($context["class"] ?? null) == "even")) ? ("odd") : ("even"));
                        // line 736
                        echo "                      <div id=\"product-related";
                        echo (($__internal_compile_72 = $context["product_related"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["product_id"] ?? null) : null);
                        echo "\" class=\"";
                        echo ($context["class"] ?? null);
                        echo "\"><i
                          class=\"fa fa-minus-circle\"></i> ";
                        // line 737
                        echo (($__internal_compile_73 = $context["product_related"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
                        // line 738
                        echo (($__internal_compile_74 = $context["product_related"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["product_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 741
                    echo "                    </div>
                  </div>
                </div>

              </div>
              ";
                }
                // line 747
                echo "
";
                // line 749
                echo "               ";
                $context["option_row"] = 0;
                // line 750
                echo "                ";
                $context["option_value_row"] = 0;
                // line 751
                echo "                <div class=\"tab-pane\" id=\"tab-custom-option\">
                  <fieldset>
                    <table id=\"option-value-table";
                // line 753
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">Option Name</td>
                          <td class=\"text-left\">";
                // line 757
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                          <td class=\"text-center\">";
                // line 758
                echo ($context["entry_image"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 759
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                          <td class=\"text-left\">";
                // line 760
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 761
                echo ($context["entry_price"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 762
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody id=\"option-value-body";
                // line 766
                echo ($context["option_row"] ?? null);
                echo "\">
                        <tr id=\"option-value-row";
                // line 767
                echo ($context["option_value_row"] ?? null);
                echo "\">
                          <td class=\"text-center\">
                            <input type=\"hidden\" name=\"product_option[";
                // line 769
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][product_option_value_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "product_option_value_id", [], "any", false, false, false, 769);
                echo "\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                // line 771
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_75 = twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "option_value_description", [], "any", false, false, false, 771)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 771)] ?? null) : null), "name", [], "any", false, false, false, 771);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\">
                            </div>
                            ";
                // line 773
                if ((($__internal_compile_76 = (($__internal_compile_77 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 773)] ?? null) : null)) {
                    // line 774
                    echo "                            <div class=\"text-danger\">";
                    echo (($__internal_compile_78 = (($__internal_compile_79 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 774)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 776
                echo "                          </td>
                          <td class=\"text-left\">
                            <a href=\"\" id=\"thumb-image";
                // line 778
                echo ($context["option_value_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                              <img src=\"";
                // line 779
                echo ($context["placeholder"] ?? null);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\">
                            </a>
                            <input type=\"hidden\" name=\"product_option[";
                // line 781
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "image", [], "any", false, false, false, 781);
                echo "\" id=\"input-image";
                echo ($context["option_value_row"] ?? null);
                echo "\">
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 784
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][quantity]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "quantity", [], "any", false, false, false, 784);
                echo "\" placeholder=\"";
                echo ($context["entry_quantity"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-left\">
                            <select name=\"product_option[";
                // line 787
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][subtract]\" class=\"form-control\">
                              <option value=\"1\" ";
                // line 788
                if (twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "subtract", [], "any", false, false, false, 788)) {
                    echo "selected";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                              <option value=\"0\" ";
                // line 789
                if ( !twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "subtract", [], "any", false, false, false, 789)) {
                    echo "selected";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "</option>
                            </select>
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 793
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "price", [], "any", false, false, false, 793);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 796
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][weight]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "weight", [], "any", false, false, false, 796);
                echo "\" placeholder=\"";
                echo ($context["entry_weight"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-right\">
                            <button type=\"button\" onclick=\"\$('#option-value-row";
                // line 799
                echo ($context["option_value_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\">
                              <i class=\"fa fa-minus-circle\"></i>
                            </button>
                          </td>
                        </tr>
                        ";
                // line 804
                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                // line 805
                echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan=\"6\"></td>
                          <td class=\"text-left\">
                            <button type=\"button\" onclick=\"addOptionValue(";
                // line 810
                echo ($context["option_row"] ?? null);
                echo ");\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\">
                              <i class=\"fa fa-plus-circle\"></i>
                            </button>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                    ";
                // line 817
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 818
                echo "                  </fieldset>
                </div>


              ";
                // line 823
                echo "              <div class=\"tab-pane\" id=\"tab-ppd\">
                <h3>You choose Piso per day per product type of subscription</h3>
                <div class=\"text-danger\">";
                // line 825
                echo ($context["warning_subs"] ?? null);
                echo "</div>
                <label>Choose how many days your product will be displayed
                <select class=\"form-control required\" id=\"subs\" name=\"subs_ppd\">
                  <option value=\"\">
                  Choose how many days
                  </option>
                  <option value=\"1\">
                  1 minute
                  </option>
                  <option value=\"5\">
                  5 days
                  </option>
                  <option value=\"10\">
                  10 days
                  </option>
                  <option value=\"15\">
                  15 days
                  </option>
                  <option value=\"20\">
                  20 days
                  </option>
                  <option value=\"25\">
                  25 days
                  </option>
                  <option value=\"30\">
                  30 days
                  </option>
                </select>
              </label>
              </div>

              <div class=\"tab-pane\" id=\"tab-ppm\">
                <h3>You choose Piso per product per month type of subscription</h3>
                <div class=\"text-danger\">";
                // line 858
                echo ($context["warning_subs"] ?? null);
                echo "</div>
                <label>Choose how many Months your product will be displayed
                <select class=\"form-control required\" id=\"subs\" name=\"subs_ppm\">
                  <option value=\"\">
                  Choose how many Months
                  </option>
                  <option value=\"1\">
                  1 Month
                  </option>
                  <option value=\"2\">
                  2 Months
                  </option>
                  <option value=\"3\">
                  3 Months
                  </option>
                  <option value=\"4\">
                  4 Months
                  </option>
                  <option value=\"5\">
                  5 Months
                  </option>
                  <option value=\"6\">
                  6 Months
                  </option>
                </select>
              </label>
              </div>

              <!-- attribute tab -->
              ";
                // line 887
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 887)) {
                    // line 888
                    echo "              <input type=\"hidden\" name=\"product_attribute_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-attribute\">
                <div class=\"table-responsive\">
                  <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 894
                    echo ($context["entry_attribute"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 895
                    echo ($context["entry_text"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>

                    ";
                    // line 900
                    $context["attribute_row"] = 0;
                    // line 901
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
                        // line 902
                        echo "                    <tbody id=\"attribute-row";
                        echo ($context["attribute_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <input type=\"text\" name=\"product_attribute[";
                        // line 905
                        echo ($context["attribute_row"] ?? null);
                        echo "][name]\"
                            value=\"";
                        // line 906
                        echo (($__internal_compile_80 = $context["product_attribute"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_attribute"] ?? null);
                        echo "\"
                            class=\"form-control\" />
                          <input type=\"hidden\" name=\"product_attribute[";
                        // line 908
                        echo ($context["attribute_row"] ?? null);
                        echo "][attribute_id]\"
                            value=\"";
                        // line 909
                        echo (($__internal_compile_81 = $context["product_attribute"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["attribute_id"] ?? null) : null);
                        echo "\" />
                        </td>
                        <td class=\"text-left\">
                          ";
                        // line 912
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 913
                            echo "                          <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                              <img src=\"catalog/language/";
                            // line 915
                            echo (($__internal_compile_82 = $context["language"]) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["code"] ?? null) : null);
                            echo "/";
                            echo (($__internal_compile_83 = $context["language"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["code"] ?? null) : null);
                            echo ".png\"
                                title=\"";
                            // line 916
                            echo (($__internal_compile_84 = $context["language"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null);
                            echo "\" />
                            </span>
                            <textarea
                              name=\"product_attribute[";
                            // line 919
                            echo ($context["attribute_row"] ?? null);
                            echo "][product_attribute_description][";
                            echo (($__internal_compile_85 = $context["language"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["language_id"] ?? null) : null);
                            echo "][text]\"
                              cols=\"40\" rows=\"5\"
                              class=\"form-control\">";
                            // line 921
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "array", false, true, false, 921), (($__internal_compile_86 = $context["language"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["language_id"] ?? null) : null), [], "array", true, true, false, 921)) ? ((($__internal_compile_87 = (($__internal_compile_88 = (($__internal_compile_89 = $context["product_attribute"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["product_attribute_description"] ?? null) : null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88[(($__internal_compile_90 = $context["language"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["text"] ?? null) : null)) : (""));
                            echo "</textarea>
                          </div>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 924
                        echo "                        </td>
                        <td class=\"text-left\">
                          <button type=\"button\"
                            onclick=\"\$('#attribute-row";
                        // line 927
                        echo ($context["attribute_row"] ?? null);
                        echo "').remove(); \$(\\'.tooltip.in\\').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 928
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button>
                        </td>
                      </tr>
                    </tbody>
                    ";
                        // line 933
                        $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
                        // line 934
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 935
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\">
                          <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 940
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
                // line 950
                echo "
              <!-- option tab -->
              ";
                // line 952
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 952)) {
                    // line 953
                    echo "              <input type=\"hidden\" name=\"product_option_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-option\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                      ";
                    // line 958
                    $context["option_row"] = 0;
                    // line 959
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 960
                        echo "
                      <li><a href=\"#tab-option";
                        // line 961
                        echo ($context["option_row"] ?? null);
                        echo "\" data-toggle=\"tab\" id=\"option";
                        echo ($context["option_row"] ?? null);
                        echo "\"><i
                            class=\"fa fa-trash\"
                            onclick=\"\$('a[href=\\'#tab-option";
                        // line 963
                        echo ($context["option_row"] ?? null);
                        echo "\\']').parent().remove(); \$('#tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "').remove(); \$('#option a:first').tab('show');\"></i>
                          ";
                        // line 964
                        echo (($__internal_compile_91 = $context["product_option"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null);
                        echo "</a></li>
                      ";
                        // line 965
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 966
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 967
                    echo "                      <li>
                        <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
                    // line 968
                    echo ($context["button_add_option"] ?? null);
                    echo "\"
                          id=\"input-option\" class=\"form-control\" />
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\">
                      ";
                    // line 975
                    $context["option_row"] = 0;
                    // line 976
                    echo "                      ";
                    $context["option_value_row"] = 0;
                    // line 977
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 978
                        echo "                      <div class=\"tab-pane\" id=\"tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "\">
                        <input type=\"hidden\" name=\"product_option[";
                        // line 979
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_id]\"
                          value=\"";
                        // line 980
                        echo (($__internal_compile_92 = $context["product_option"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["product_option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 981
                        echo ($context["option_row"] ?? null);
                        echo "][name]\"
                          value=\"";
                        // line 982
                        echo (($__internal_compile_93 = $context["product_option"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 983
                        echo ($context["option_row"] ?? null);
                        echo "][option_id]\"
                          value=\"";
                        // line 984
                        echo (($__internal_compile_94 = $context["product_option"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 985
                        echo ($context["option_row"] ?? null);
                        echo "][type]\"
                          value=\"";
                        // line 986
                        echo (($__internal_compile_95 = $context["product_option"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["type"] ?? null) : null);
                        echo "\" />
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-required";
                        // line 989
                        echo ($context["option_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_required"] ?? null);
                        echo "</label>
                          <div class=\"col-sm-9\">
                            <select name=\"product_option[";
                        // line 991
                        echo ($context["option_row"] ?? null);
                        echo "][required]\"
                              id=\"input-required";
                        // line 992
                        echo ($context["option_row"] ?? null);
                        echo "\" class=\"form-control\">
                              ";
                        // line 993
                        if ((($__internal_compile_96 = $context["product_option"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["required"] ?? null) : null)) {
                            // line 994
                            echo "                              <option value=\"1\" selected=\"selected\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\">";
                            // line 995
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        } else {
                            // line 997
                            echo "                              <option value=\"1\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                            // line 998
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        }
                        // line 1000
                        echo "                            </select>
                          </div>
                        </div>

                        ";
                        // line 1004
                        if (((($__internal_compile_97 = $context["product_option"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["type"] ?? null) : null) == "text")) {
                            // line 1005
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1007
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 1009
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 1010
                            echo (($__internal_compile_98 = $context["product_option"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 1011
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 1015
                        echo "                        ";
                        if (((($__internal_compile_99 = $context["product_option"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["type"] ?? null) : null) == "textarea")) {
                            // line 1016
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1018
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_option[";
                            // line 1020
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\" rows=\"5\"
                              placeholder=\"";
                            // line 1021
                            echo ($context["entry_option_value"] ?? null);
                            echo "\" id=\"input-value";
                            echo ($context["option_row"] ?? null);
                            echo "\"
                              class=\"form-control\">";
                            // line 1022
                            echo (($__internal_compile_100 = $context["product_option"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["option_value"] ?? null) : null);
                            echo "</textarea>
                          </div>
                        </div>
                        ";
                        }
                        // line 1026
                        echo "                        ";
                        if (((($__internal_compile_101 = $context["product_option"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["type"] ?? null) : null) == "file")) {
                            // line 1027
                            echo "                        <div class=\"form-group\" style=\"display: none;\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1029
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 1031
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 1032
                            echo (($__internal_compile_102 = $context["product_option"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 1033
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 1037
                        echo "                        ";
                        if (((($__internal_compile_103 = $context["product_option"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["type"] ?? null) : null) == "date")) {
                            // line 1038
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1040
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-3\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1043
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1044
                            echo (($__internal_compile_104 = $context["product_option"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                            // line 1045
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
                        // line 1053
                        echo "                        ";
                        if (((($__internal_compile_105 = $context["product_option"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["type"] ?? null) : null) == "time")) {
                            // line 1054
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1056
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1059
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1060
                            echo (($__internal_compile_106 = $context["product_option"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"HH:mm\" id=\"input-value";
                            // line 1061
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
                        // line 1069
                        echo "                        ";
                        if (((($__internal_compile_107 = $context["product_option"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["type"] ?? null) : null) == "datetime")) {
                            // line 1070
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1072
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1075
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1076
                            echo (($__internal_compile_108 = $context["product_option"]) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                            // line 1077
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
                        // line 1086
                        echo "                        ";
                        if ((((((($__internal_compile_109 = $context["product_option"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["type"] ?? null) : null) == "select") || ((($__internal_compile_110 = $context["product_option"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["type"] ?? null) : null) == "radio")) || ((($__internal_compile_111 = $context["product_option"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["type"] ?? null) : null) == "checkbox")) || ((($__internal_compile_112 = $context["product_option"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["type"] ?? null) : null) == "image"))) {
                            // line 1087
                            echo "                        <div class=\"table-responsive\">
                          <table id=\"option-value";
                            // line 1088
                            echo ($context["option_row"] ?? null);
                            echo "\"
                            class=\"table table-striped table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                            // line 1092
                            echo ($context["entry_option_value"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1093
                            echo ($context["entry_quantity"] ?? null);
                            echo "</td>
                                <td class=\"text-left\">";
                            // line 1094
                            echo ($context["entry_subtract"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1095
                            echo ($context["entry_price"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1096
                            echo ($context["entry_option_points"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1097
                            echo ($context["entry_weight"] ?? null);
                            echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            ";
                            // line 1101
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_113 = $context["product_option"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["product_option_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                                // line 1102
                                echo "                            <tbody id=\"option-value-row";
                                echo ($context["option_value_row"] ?? null);
                                echo "\">
                              <tr>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1105
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][option_value_id]\"
                                    style=\"min-width: 60px;\" class=\"form-control\">
                                    ";
                                // line 1107
                                if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_114 = $context["product_option"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["option_id"] ?? null) : null), [], "array", true, true, false, 1107)) {
                                    // line 1108
                                    echo "                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_115 = ($context["option_values"] ?? null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[(($__internal_compile_116 = $context["product_option"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["option_id"] ?? null) : null)] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                        // line 1109
                                        echo "                                    ";
                                        if (((($__internal_compile_117 = $context["option_value"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["option_value_id"] ?? null) : null) == (($__internal_compile_118 = $context["product_option_value"]) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["option_value_id"] ?? null) : null))) {
                                            // line 1110
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_119 = $context["option_value"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["option_value_id"] ?? null) : null);
                                            echo "\" selected=\"selected\">
                                      ";
                                            // line 1111
                                            echo (($__internal_compile_120 = $context["option_value"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["name"] ?? null) : null);
                                            echo "</option>
                                    ";
                                        } else {
                                            // line 1113
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_121 = $context["option_value"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["option_value_id"] ?? null) : null);
                                            echo "\">";
                                            echo (($__internal_compile_122 = $context["option_value"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["name"] ?? null) : null);
                                            echo "
                                    </option>
                                    ";
                                        }
                                        // line 1116
                                        echo "                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1117
                                    echo "                                    ";
                                }
                                // line 1118
                                echo "                                  </select>
                                  <input type=\"hidden\"
                                    name=\"product_option[";
                                // line 1120
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][product_option_value_id]\"
                                    value=\"";
                                // line 1121
                                echo (($__internal_compile_123 = $context["product_option_value"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["product_option_value_id"] ?? null) : null);
                                echo "\" />
                                </td>
                                <td class=\"text-right\"><input type=\"text\"
                                    name=\"product_option[";
                                // line 1124
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][quantity]\"
                                    value=\"";
                                // line 1125
                                echo (($__internal_compile_124 = $context["product_option_value"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["quantity"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1127
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][subtract]\"
                                    class=\"form-control\">
                                    ";
                                // line 1129
                                if ((($__internal_compile_125 = $context["product_option_value"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["subtract"] ?? null) : null)) {
                                    // line 1130
                                    echo "                                    <option value=\"1\" selected=\"selected\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\">";
                                    // line 1131
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                } else {
                                    // line 1133
                                    echo "                                    <option value=\"1\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
                                    // line 1134
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                }
                                // line 1136
                                echo "                                  </select></td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1138
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1140
                                if (((($__internal_compile_126 = $context["product_option_value"]) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["price_prefix"] ?? null) : null) == "+")) {
                                    // line 1141
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1143
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1145
                                echo "                                    ";
                                if (((($__internal_compile_127 = $context["product_option_value"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["price_prefix"] ?? null) : null) == "-")) {
                                    // line 1146
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1148
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1150
                                echo "                                  </select>

                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1153
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price]\"
                                    value=\"";
                                // line 1154
                                echo (($__internal_compile_128 = $context["product_option_value"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["price"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_price"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1158
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1160
                                if (((($__internal_compile_129 = $context["product_option_value"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["points_prefix"] ?? null) : null) == "+")) {
                                    // line 1161
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1163
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1165
                                echo "                                    ";
                                if (((($__internal_compile_130 = $context["product_option_value"]) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["points_prefix"] ?? null) : null) == "-")) {
                                    // line 1166
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1168
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1170
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1172
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points]\"
                                    value=\"";
                                // line 1173
                                echo (($__internal_compile_131 = $context["product_option_value"]) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131["points"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_points"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1177
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1179
                                if (((($__internal_compile_132 = $context["product_option_value"]) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["weight_prefix"] ?? null) : null) == "+")) {
                                    // line 1180
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1182
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1184
                                echo "                                    ";
                                if (((($__internal_compile_133 = $context["product_option_value"]) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["weight_prefix"] ?? null) : null) == "-")) {
                                    // line 1185
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1187
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1189
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1191
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight]\"
                                    value=\"";
                                // line 1192
                                echo (($__internal_compile_134 = $context["product_option_value"]) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134["weight"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_weight"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"\$('#option-value-row";
                                // line 1196
                                echo ($context["option_value_row"] ?? null);
                                echo "').remove();\"
                                    data-toggle=\"tooltip\" title=\"";
                                // line 1197
                                echo ($context["button_remove"] ?? null);
                                echo "\" class=\"btn btn-danger\"><i
                                      class=\"fa fa-minus-circle\"></i></button>
                                </td>
                              </tr>
                            </tbody>
                            ";
                                // line 1202
                                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                                // line 1203
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1204
                            echo "                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"addOptionValuee('";
                            // line 1208
                            echo ($context["option_row"] ?? null);
                            echo "');\"
                                    data-toggle=\"tooltip\" title=\"";
                            // line 1209
                            echo ($context["button_add_option_value"] ?? null);
                            echo "\"
                                    class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <select id=\"option-values";
                            // line 1216
                            echo ($context["option_row"] ?? null);
                            echo "\" style=\"display: none;\">
                          ";
                            // line 1217
                            if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_135 = $context["product_option"]) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["option_id"] ?? null) : null), [], "array", true, true, false, 1217)) {
                                // line 1218
                                echo "                          ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_136 = ($context["option_values"] ?? null)) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136[(($__internal_compile_137 = $context["product_option"]) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137["option_id"] ?? null) : null)] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 1219
                                    echo "                          <option value=\"";
                                    echo (($__internal_compile_138 = $context["option_value"]) && is_array($__internal_compile_138) || $__internal_compile_138 instanceof ArrayAccess ? ($__internal_compile_138["option_value_id"] ?? null) : null);
                                    echo "\">";
                                    echo (($__internal_compile_139 = $context["option_value"]) && is_array($__internal_compile_139) || $__internal_compile_139 instanceof ArrayAccess ? ($__internal_compile_139["name"] ?? null) : null);
                                    echo "</option>
                          ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1221
                                echo "                          ";
                            }
                            // line 1222
                            echo "                        </select>
                        ";
                        }
                        // line 1224
                        echo "                      </div>
                      <!--tab-pane-->
                      ";
                        // line 1226
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 1227
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1228
                    echo "                    </div>
                    <!--tab-content-->
                  </div>
                  <!--col-sm-9-->
                </div>
                <!--Row-->
              </div>
              ";
                }
                // line 1236
                echo "
              <!-- discount tab -->
              ";
                // line 1238
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 1238)) {
                    // line 1239
                    echo "              <input type=\"hidden\" name=\"product_discount_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-discount\">
                <div class=\"table-responsive\">
                  <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1245
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1246
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1247
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1248
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1249
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1250
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1254
                    $context["discount_row"] = 0;
                    // line 1255
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
                        // line 1256
                        echo "                    <tbody id=\"discount-row";
                        echo ($context["discount_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_discount[";
                        // line 1258
                        echo ($context["discount_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1260
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1261
                            echo "                            ";
                            if (((($__internal_compile_140 = $context["customer_group"]) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140["customer_group_id"] ?? null) : null) == (($__internal_compile_141 = $context["product_discount"]) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["customer_group_id"] ?? null) : null))) {
                                // line 1262
                                echo "                            <option value=\"";
                                echo (($__internal_compile_142 = $context["customer_group"]) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1263
                                echo (($__internal_compile_143 = $context["customer_group"]) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1265
                                echo "                            <option value=\"";
                                echo (($__internal_compile_144 = $context["customer_group"]) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_145 = $context["customer_group"]) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1268
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1269
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1270
                        echo ($context["discount_row"] ?? null);
                        echo "][quantity]\"
                            value=\"";
                        // line 1271
                        echo (($__internal_compile_146 = $context["product_discount"]) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146["quantity"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1273
                        echo ($context["discount_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1274
                        echo (($__internal_compile_147 = $context["product_discount"]) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_priority"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1276
                        echo ($context["discount_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1277
                        echo (($__internal_compile_148 = $context["product_discount"]) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
                        // line 1281
                        echo ($context["discount_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1282
                        echo (($__internal_compile_149 = $context["product_discount"]) && is_array($__internal_compile_149) || $__internal_compile_149 instanceof ArrayAccess ? ($__internal_compile_149["date_start"] ?? null) : null);
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
                        // line 1291
                        echo ($context["discount_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1292
                        echo (($__internal_compile_150 = $context["product_discount"]) && is_array($__internal_compile_150) || $__internal_compile_150 instanceof ArrayAccess ? ($__internal_compile_150["date_end"] ?? null) : null);
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
                        // line 1300
                        echo ($context["discount_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1301
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1305
                        $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
                        // line 1306
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1307
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"6\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1311
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
                // line 1320
                echo "
              <!--tab-special-->
              ";
                // line 1322
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 1322)) {
                    // line 1323
                    echo "              <input type=\"hidden\" name=\"product_special_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-special\">
                <div class=\"table-responsive\">
                  <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1329
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1330
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1331
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1332
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1333
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1337
                    $context["special_row"] = 0;
                    // line 1338
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
                        // line 1339
                        echo "                    <tbody id=\"special-row";
                        echo ($context["special_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_special[";
                        // line 1341
                        echo ($context["special_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1343
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1344
                            echo "                            ";
                            if (((($__internal_compile_151 = $context["customer_group"]) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["customer_group_id"] ?? null) : null) == (($__internal_compile_152 = $context["product_special"]) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152["customer_group_id"] ?? null) : null))) {
                                // line 1345
                                echo "                            <option value=\"";
                                echo (($__internal_compile_153 = $context["customer_group"]) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1346
                                echo (($__internal_compile_154 = $context["customer_group"]) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1348
                                echo "                            <option value=\"";
                                echo (($__internal_compile_155 = $context["customer_group"]) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_156 = $context["customer_group"]) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1351
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1352
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1353
                        echo ($context["special_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1354
                        echo (($__internal_compile_157 = $context["product_special"]) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1356
                        echo ($context["special_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1357
                        echo (($__internal_compile_158 = $context["product_special"]) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
                        // line 1361
                        echo ($context["special_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1362
                        echo (($__internal_compile_159 = $context["product_special"]) && is_array($__internal_compile_159) || $__internal_compile_159 instanceof ArrayAccess ? ($__internal_compile_159["date_start"] ?? null) : null);
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
                        // line 1371
                        echo ($context["special_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1372
                        echo (($__internal_compile_160 = $context["product_special"]) && is_array($__internal_compile_160) || $__internal_compile_160 instanceof ArrayAccess ? ($__internal_compile_160["date_end"] ?? null) : null);
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
                        // line 1380
                        echo ($context["special_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1381
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1385
                        $context["special_row"] = (($context["special_row"] ?? null) + 1);
                        // line 1386
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1387
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"5\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1391
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
                // line 1400
                echo "
              <!--tab-image-->
              ";
                // line 1402
                $context["image_row"] = 0;
                // line 1403
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "images", [], "array", true, true, false, 1403)) {
                    // line 1404
                    echo "              <div class=\"tab-pane\" id=\"tab-image\">
                <div class=\"table-responsive\">
                  <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1409
                    echo ($context["entry_image"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1410
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1414
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                        // line 1415
                        echo "                    <tbody id=\"image-row";
                        echo ($context["image_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                            <img id=\"thumb";
                        // line 1419
                        echo ($context["image_row"] ?? null);
                        echo "-thumb-image\"
                              src=\"";
                        // line 1420
                        echo (((($__internal_compile_161 = $context["product_image"]) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161["thumb"] ?? null) : null)) ? ((($__internal_compile_162 = $context["product_image"]) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["thumb"] ?? null) : null)) : (($context["placeholder"] ?? null)));
                        echo "\" alt=\"\"
                              title=\"\" />
                          </div>
                          <input type=\"hidden\" name=\"product_image[";
                        // line 1423
                        echo ($context["image_row"] ?? null);
                        echo "][image]\"
                            value=\"";
                        // line 1424
                        echo (($__internal_compile_163 = $context["product_image"]) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["thumg_img"] ?? null) : null);
                        echo "\" id=\"thumb";
                        echo ($context["image_row"] ?? null);
                        echo "-target-image\" />
                          <div class=\"btn-group imgoption\" style=\"width: 41%;\">
                            <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                          </div>
                        </td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
                        // line 1429
                        echo ($context["image_row"] ?? null);
                        echo "][sort_order]\"
                            value=\"";
                        // line 1430
                        echo (($__internal_compile_164 = $context["product_image"]) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164["sort_order"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                        // line 1432
                        echo ($context["image_row"] ?? null);
                        echo "').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 1433
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1437
                        $context["image_row"] = (($context["image_row"] ?? null) + 1);
                        // line 1438
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1439
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1443
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
                // line 1452
                echo "
              ";
                // line 1453
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "custom-field", [], "array", true, true, false, 1453)) {
                    // line 1454
                    echo "              <div id=\"tab-custom-field\" class=\"tab-pane\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"vtab-option\">
                      ";
                    // line 1458
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1459
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1460
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1461
                            echo "                      <li>
                        <a href=\"#wktab-option-";
                            // line 1462
                            echo ($context["tabCount"] ?? null);
                            echo "\" data-toggle=\"tab\" id=\"wkoption-";
                            echo ($context["tabCount"] ?? null);
                            echo "\"
                          field-id=\"wkoption-";
                            // line 1463
                            echo (($__internal_compile_165 = $context["tabs"]) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["fieldId"] ?? null) : null);
                            echo "\"><i class=\"fa fa-minus-circle\"
                            onclick=\"\$('#wkoption-";
                            // line 1464
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#vtab-option li a:first').trigger('click'); return false;\"></i>";
                            echo (($__internal_compile_166 = $context["tabs"]) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["fieldName"] ?? null) : null);
                            echo "</a>
                      </li>
                      ";
                            // line 1466
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            // line 1467
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1468
                        echo "                      ";
                    }
                    // line 1469
                    echo "                      <li id=\"optionSelector\">
                        <select name=\"wkcustomfield\" class=\"form-control\">
                          ";
                    // line 1471
                    if ( !twig_test_empty(($context["wkcustomFields"] ?? null))) {
                        // line 1472
                        echo "                          <option value=\"\"></option>
                          ";
                        // line 1473
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkcustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 1474
                            echo "                          <option value=\"";
                            echo (($__internal_compile_167 = $context["field"]) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167["id"] ?? null) : null);
                            echo "\" data-type=\"";
                            echo (($__internal_compile_168 = $context["field"]) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["fieldType"] ?? null) : null);
                            echo "\"
                            data-name=\"";
                            // line 1475
                            echo (($__internal_compile_169 = $context["field"]) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169["fieldName"] ?? null) : null);
                            echo "\" data-des=\"";
                            echo (($__internal_compile_170 = $context["field"]) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170["fieldDescription"] ?? null) : null);
                            echo "\"
                            title=\"";
                            // line 1476
                            echo (($__internal_compile_171 = $context["field"]) && is_array($__internal_compile_171) || $__internal_compile_171 instanceof ArrayAccess ? ($__internal_compile_171["fieldDescription"] ?? null) : null);
                            echo "\" data-isRequired=\"";
                            echo (($__internal_compile_172 = $context["field"]) && is_array($__internal_compile_172) || $__internal_compile_172 instanceof ArrayAccess ? ($__internal_compile_172["isRequired"] ?? null) : null);
                            echo "\">
                            ";
                            // line 1477
                            echo (($__internal_compile_173 = $context["field"]) && is_array($__internal_compile_173) || $__internal_compile_173 instanceof ArrayAccess ? ($__internal_compile_173["fieldName"] ?? null) : null);
                            echo "
                          </option>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1480
                        echo "                          ";
                    }
                    // line 1481
                    echo "
                        </select>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\" id=\"wk_customfieldcontent\">
                      ";
                    // line 1488
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1489
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1490
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1491
                            echo "                      <div id=\"wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "\" class=\"tab-pane\">
                        <div class=\"alert alert-info\">
                          <i class=\"fa fa-info-circle\"></i>
                          ";
                            // line 1494
                            echo (($__internal_compile_174 = $context["tabs"]) && is_array($__internal_compile_174) || $__internal_compile_174 instanceof ArrayAccess ? ($__internal_compile_174["fieldDes"] ?? null) : null);
                            echo "
                        </div>
                        ";
                            // line 1496
                            if ((array_key_exists("error", $context) && (($context["error"] ?? null) == (($__internal_compile_175 = $context["tabs"]) && is_array($__internal_compile_175) || $__internal_compile_175 instanceof ArrayAccess ? ($__internal_compile_175["fieldId"] ?? null) : null)))) {
                                // line 1497
                                echo "                        <div class=\"alert alert-danger\">
                          <i class=\"fa fa-exclamation-circle\"></i>
                          ";
                                // line 1499
                                echo ($context["error_warning_mandetory"] ?? null);
                                echo "
                        </div>
                        ";
                            }
                            // line 1502
                            echo "                        <input type=\"hidden\" name=\"product_custom_field[";
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_name]\"
                          value=\"";
                            // line 1503
                            echo (($__internal_compile_176 = $context["tabs"]) && is_array($__internal_compile_176) || $__internal_compile_176 instanceof ArrayAccess ? ($__internal_compile_176["fieldName"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1504
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_type]\"
                          value=\"";
                            // line 1505
                            echo (($__internal_compile_177 = $context["tabs"]) && is_array($__internal_compile_177) || $__internal_compile_177 instanceof ArrayAccess ? ($__internal_compile_177["fieldType"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1506
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_id]\"
                          value=\"";
                            // line 1507
                            echo (($__internal_compile_178 = $context["tabs"]) && is_array($__internal_compile_178) || $__internal_compile_178 instanceof ArrayAccess ? ($__internal_compile_178["fieldId"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1508
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_des]\"
                          value=\"";
                            // line 1509
                            echo (($__internal_compile_179 = $context["tabs"]) && is_array($__internal_compile_179) || $__internal_compile_179 instanceof ArrayAccess ? ($__internal_compile_179["fieldDes"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\"
                          name=\"product_custom_field[";
                            // line 1511
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_is_required]\"
                          value=\"";
                            // line 1512
                            echo (($__internal_compile_180 = $context["tabs"]) && is_array($__internal_compile_180) || $__internal_compile_180 instanceof ArrayAccess ? ($__internal_compile_180["isRequired"] ?? null) : null);
                            echo "\">

                        ";
                            // line 1514
                            if (((($__internal_compile_181 = $context["tabs"]) && is_array($__internal_compile_181) || $__internal_compile_181 instanceof ArrayAccess ? ($__internal_compile_181["fieldType"] ?? null) : null) == "select")) {
                                // line 1515
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_182 = $context["tabs"]) && is_array($__internal_compile_182) || $__internal_compile_182 instanceof ArrayAccess ? ($__internal_compile_182["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select option:</label>
                          <div class=\"col-sm-9\">
                            <select class=\"form-control\"
                              name=\"product_custom_field[";
                                // line 1519
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\">
                              ";
                                // line 1520
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_183 = $context["tabs"]) && is_array($__internal_compile_183) || $__internal_compile_183 instanceof ArrayAccess ? ($__internal_compile_183["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1521
                                    echo "                              <option value=\"";
                                    echo (($__internal_compile_184 = $context["options"]) && is_array($__internal_compile_184) || $__internal_compile_184 instanceof ArrayAccess ? ($__internal_compile_184["optionId"] ?? null) : null);
                                    echo "\" ";
                                    if ( !twig_test_empty((($__internal_compile_185 = $context["tabs"]) && is_array($__internal_compile_185) || $__internal_compile_185 instanceof ArrayAccess ? ($__internal_compile_185["fieldOptions"] ?? null) : null))) {
                                        // line 1522
                                        echo "                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_186 = $context["tabs"]) && is_array($__internal_compile_186) || $__internal_compile_186 instanceof ArrayAccess ? ($__internal_compile_186["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1523
                                            echo "                                ";
                                            if (((($__internal_compile_187 = $context["option"]) && is_array($__internal_compile_187) || $__internal_compile_187 instanceof ArrayAccess ? ($__internal_compile_187["optionId"] ?? null) : null) == (($__internal_compile_188 = $context["options"]) && is_array($__internal_compile_188) || $__internal_compile_188 instanceof ArrayAccess ? ($__internal_compile_188["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "selected";
                                            }
                                            // line 1524
                                            echo "                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo ">
                                ";
                                    // line 1525
                                    echo (($__internal_compile_189 = $context["options"]) && is_array($__internal_compile_189) || $__internal_compile_189 instanceof ArrayAccess ? ($__internal_compile_189["optionValue"] ?? null) : null);
                                    echo "
                              </option>
                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1528
                                echo "                            </select>
                          </div>
                        </div>

                        ";
                            } elseif ((((($__internal_compile_190 =                             // line 1532
$context["tabs"]) && is_array($__internal_compile_190) || $__internal_compile_190 instanceof ArrayAccess ? ($__internal_compile_190["fieldType"] ?? null) : null) == "checkbox") || ((($__internal_compile_191 = $context["tabs"]) && is_array($__internal_compile_191) || $__internal_compile_191 instanceof ArrayAccess ? ($__internal_compile_191["fieldType"] ?? null) : null) == "radio"))) {
                                // line 1533
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_192 = $context["tabs"]) && is_array($__internal_compile_192) || $__internal_compile_192 instanceof ArrayAccess ? ($__internal_compile_192["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"control-label col-sm-3\">Select option:</label>
                          <div class=\"col-sm-9\">
                            ";
                                // line 1536
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_193 = $context["tabs"]) && is_array($__internal_compile_193) || $__internal_compile_193 instanceof ArrayAccess ? ($__internal_compile_193["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1537
                                    echo "
                            <div class=\"radio checkbox\">
                              <label for=\"";
                                    // line 1539
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_194 = $context["options"]) && is_array($__internal_compile_194) || $__internal_compile_194 instanceof ArrayAccess ? ($__internal_compile_194["optionId"] ?? null) : null));
                                    echo "\">
                                <input type='";
                                    // line 1540
                                    echo (($__internal_compile_195 = $context["tabs"]) && is_array($__internal_compile_195) || $__internal_compile_195 instanceof ArrayAccess ? ($__internal_compile_195["fieldType"] ?? null) : null);
                                    echo "' id=\"";
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_196 = $context["options"]) && is_array($__internal_compile_196) || $__internal_compile_196 instanceof ArrayAccess ? ($__internal_compile_196["optionId"] ?? null) : null));
                                    echo "\"
                                  value=\"";
                                    // line 1541
                                    echo (($__internal_compile_197 = $context["options"]) && is_array($__internal_compile_197) || $__internal_compile_197 instanceof ArrayAccess ? ($__internal_compile_197["optionId"] ?? null) : null);
                                    echo "\"
                                  name=\"product_custom_field[";
                                    // line 1542
                                    echo ($context["wkcustom_option_row"] ?? null);
                                    echo "][custom_field_value][]\"
                                  ";
                                    // line 1543
                                    if ( !twig_test_empty((($__internal_compile_198 = $context["tabs"]) && is_array($__internal_compile_198) || $__internal_compile_198 instanceof ArrayAccess ? ($__internal_compile_198["fieldOptions"] ?? null) : null))) {
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_199 = $context["tabs"]) && is_array($__internal_compile_199) || $__internal_compile_199 instanceof ArrayAccess ? ($__internal_compile_199["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1544
                                            echo "                                  ";
                                            if (((($__internal_compile_200 = $context["option"]) && is_array($__internal_compile_200) || $__internal_compile_200 instanceof ArrayAccess ? ($__internal_compile_200["optionId"] ?? null) : null) == (($__internal_compile_201 = $context["options"]) && is_array($__internal_compile_201) || $__internal_compile_201 instanceof ArrayAccess ? ($__internal_compile_201["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "checked";
                                            }
                                            // line 1545
                                            echo "                                  ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo " />
                                ";
                                    // line 1546
                                    echo (($__internal_compile_202 = $context["options"]) && is_array($__internal_compile_202) || $__internal_compile_202 instanceof ArrayAccess ? ($__internal_compile_202["optionValue"] ?? null) : null);
                                    echo "
                              </label>
                            </div>

                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1551
                                echo "                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_203 =                             // line 1553
$context["tabs"]) && is_array($__internal_compile_203) || $__internal_compile_203 instanceof ArrayAccess ? ($__internal_compile_203["fieldType"] ?? null) : null) == "text")) {
                                // line 1554
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_204 = $context["tabs"]) && is_array($__internal_compile_204) || $__internal_compile_204 instanceof ArrayAccess ? ($__internal_compile_204["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-9\">
                            <input class=\"form-control\" type=\"text\"
                              name=\"product_custom_field[";
                                // line 1558
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                              value=\"";
                                // line 1559
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1559), "option_id", [], "array", true, true, false, 1559)) {
                                    echo " ";
                                    echo (($__internal_compile_205 = (($__internal_compile_206 = $context["tabs"]) && is_array($__internal_compile_206) || $__internal_compile_206 instanceof ArrayAccess ? ($__internal_compile_206["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_205) || $__internal_compile_205 instanceof ArrayAccess ? ($__internal_compile_205["option_id"] ?? null) : null);
                                }
                                echo "\" />
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_207 =                             // line 1562
$context["tabs"]) && is_array($__internal_compile_207) || $__internal_compile_207 instanceof ArrayAccess ? ($__internal_compile_207["fieldType"] ?? null) : null) == "textarea")) {
                                // line 1563
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_208 = $context["tabs"]) && is_array($__internal_compile_208) || $__internal_compile_208 instanceof ArrayAccess ? ($__internal_compile_208["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-9\">
                            <textarea class=\"form-control\"
                              name=\"product_custom_field[";
                                // line 1567
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\" rows=\"7\">
                                      ";
                                // line 1568
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1568), "option_id", [], "array", true, true, false, 1568)) {
                                    echo " ";
                                    echo (($__internal_compile_209 = (($__internal_compile_210 = $context["tabs"]) && is_array($__internal_compile_210) || $__internal_compile_210 instanceof ArrayAccess ? ($__internal_compile_210["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_209) || $__internal_compile_209 instanceof ArrayAccess ? ($__internal_compile_209["option_id"] ?? null) : null);
                                }
                                // line 1569
                                echo "                                    </textarea>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_211 =                             // line 1572
$context["tabs"]) && is_array($__internal_compile_211) || $__internal_compile_211 instanceof ArrayAccess ? ($__internal_compile_211["fieldType"] ?? null) : null) == "date")) {
                                // line 1573
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_212 = $context["tabs"]) && is_array($__internal_compile_212) || $__internal_compile_212 instanceof ArrayAccess ? ($__internal_compile_212["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select Date:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group date\">
                              <input type=\"text\"
                                name=\"product_custom_field[";
                                // line 1578
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1579
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1579), "option_id", [], "array", true, true, false, 1579)) {
                                    echo " ";
                                    echo (($__internal_compile_213 = (($__internal_compile_214 = $context["tabs"]) && is_array($__internal_compile_214) || $__internal_compile_214 instanceof ArrayAccess ? ($__internal_compile_214["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_213) || $__internal_compile_213 instanceof ArrayAccess ? ($__internal_compile_213["option_id"] ?? null) : null);
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
                            } elseif (((($__internal_compile_215 =                             // line 1589
$context["tabs"]) && is_array($__internal_compile_215) || $__internal_compile_215 instanceof ArrayAccess ? ($__internal_compile_215["fieldType"] ?? null) : null) == "time")) {
                                // line 1590
                                echo "                        <div class=\"form-group ";
                                if (((($__internal_compile_216 = $context["tabs"]) && is_array($__internal_compile_216) || $__internal_compile_216 instanceof ArrayAccess ? ($__internal_compile_216["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Enter Text:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group time\">
                              <input class=\"form-control\" type=\"text\"
                                name=\"product_custom_field[";
                                // line 1595
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1596
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1596), "option_id", [], "array", true, true, false, 1596)) {
                                    echo " ";
                                    echo (($__internal_compile_217 = (($__internal_compile_218 = $context["tabs"]) && is_array($__internal_compile_218) || $__internal_compile_218 instanceof ArrayAccess ? ($__internal_compile_218["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_217) || $__internal_compile_217 instanceof ArrayAccess ? ($__internal_compile_217["option_id"] ?? null) : null);
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
                            } elseif (((($__internal_compile_219 =                             // line 1605
$context["tabs"]) && is_array($__internal_compile_219) || $__internal_compile_219 instanceof ArrayAccess ? ($__internal_compile_219["fieldType"] ?? null) : null) == "datetime")) {
                                // line 1606
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_220 = $context["tabs"]) && is_array($__internal_compile_220) || $__internal_compile_220 instanceof ArrayAccess ? ($__internal_compile_220["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"col-sm-3 control-label\">Select date-time:</label>
                          <div class=\"col-sm-6\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\"
                                name=\"product_custom_field[";
                                // line 1611
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1612
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1612), "option_id", [], "array", true, true, false, 1612)) {
                                    echo " ";
                                    echo (($__internal_compile_221 = (($__internal_compile_222 = $context["tabs"]) && is_array($__internal_compile_222) || $__internal_compile_222 instanceof ArrayAccess ? ($__internal_compile_222["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_221) || $__internal_compile_221 instanceof ArrayAccess ? ($__internal_compile_221["option_id"] ?? null) : null);
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
                            // line 1623
                            echo "                      </div>
                      ";
                            // line 1624
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            echo " ";
                            $context["wkcustom_option_row"] = (($context["wkcustom_option_row"] ?? null) + 1);
                            // line 1625
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1626
                        echo "                      ";
                    }
                    // line 1627
                    echo "                    </div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1632
                echo "              <div class=\"tab-pane\" id=\"tab-update-reason\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-required\">";
                // line 1634
                echo "Select a reason";
                echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"reason\" class=\"form-control\">
                      ";
                // line 1637
                if ( !twig_test_empty(($context["reasons"] ?? null))) {
                    // line 1638
                    echo "                      <option value=\"\"></option>
                      ";
                    // line 1639
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["reasons"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 1640
                        echo "                      <option value=\"";
                        echo (($__internal_compile_223 = $context["field"]) && is_array($__internal_compile_223) || $__internal_compile_223 instanceof ArrayAccess ? ($__internal_compile_223["id"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_compile_224 = $context["field"]) && is_array($__internal_compile_224) || $__internal_compile_224 instanceof ArrayAccess ? ($__internal_compile_224["fieldDescription"] ?? null) : null);
                        echo "\"
                        ";
                        // line 1641
                        if (((array_key_exists("reason", $context) && ($context["reason"] ?? null)) && (($context["reason"] ?? null) == (($__internal_compile_225 = $context["field"]) && is_array($__internal_compile_225) || $__internal_compile_225 instanceof ArrayAccess ? ($__internal_compile_225["id"] ?? null) : null)))) {
                            echo " ";
                            echo "selected";
                        }
                        echo ">
                        ";
                        // line 1642
                        echo (($__internal_compile_226 = $context["field"]) && is_array($__internal_compile_226) || $__internal_compile_226 instanceof ArrayAccess ? ($__internal_compile_226["title"] ?? null) : null);
                        echo "
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1645
                    echo "                      ";
                }
                // line 1646
                echo "                    </select>
                  </div>
                </div>
              </div>

              ";
                // line 1651
                if ((($context["wk_pricealert_status"] ?? null) && ($context["wk_pricealert_allowed_seller"] ?? null))) {
                    // line 1652
                    echo "              <div class=\"tab-pane\" id=\"tab-pricealert\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-pricealert\">";
                    // line 1654
                    echo ($context["text_palert"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"pricealert\" id=\"input-prigetListcealert\" class=\"form-control\">
                      ";
                    // line 1657
                    if (($context["is_alert_product"] ?? null)) {
                        // line 1658
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 1659
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 1661
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 1662
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 1664
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1669
                echo "
            </div>
            <!--tab-content-->

          </form>
          ";
            } else {
                // line 1675
                echo "          <div class=\"text-danger\">
            ";
                // line 1676
                echo ($context["text_access"] ?? null);
                echo "
          </div>
          ";
            }
            // line 1679
            echo "        </fieldset>

      </div>
      <!--content-->
      ";
            // line 1683
            echo ($context["column_right"] ?? null);
            echo "
    </div>
    <!--row-->
  </div>
  <!--container-->
  ";
        }
        // line 1689
        echo "
  <div id=\"category-modal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 1695
        echo ($context["heading_category"] ?? null);
        echo "</h4>
        </div>
        <div class=\"modal-body\" style=\"overflow:auto;\">
          <div id=\"category-modal-body\" style=\"display: inline-flex;width: 100%;\"></div>
        </div>
        <div class=\"modal-footer\">
          <!-- <div class=\"pull-left\">
          <button type=\"button\" class=\"btn btn-warning\" id=\"category-modal-back\">";
        // line 1702
        echo ($context["button_back"] ?? null);
        echo "</button>
        </div> -->
          <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 1705
        echo ($context["button_close"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 1711
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 1712
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
            // line 1722
            echo ($context["entry_list_header"] ?? null);
            echo "</h3>
          <table class=\"table table-bordered table-hover\" id=\"details\">
            <thead>
              <tr>
                <td>
                  ";
            // line 1727
            echo ($context["entry_name"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1730
            echo ($context["entry_quantity"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1733
            echo ($context["entry_price"] ?? null);
            echo "
                </td>
              <tr>
            </thead>
            <tbody>
              ";
            // line 1738
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellerDetail"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 1739
                echo "              <tr>
                <td>
                  ";
                // line 1741
                echo (($__internal_compile_227 = $context["detail"]) && is_array($__internal_compile_227) || $__internal_compile_227 instanceof ArrayAccess ? ($__internal_compile_227["name"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1744
                echo (($__internal_compile_228 = $context["detail"]) && is_array($__internal_compile_228) || $__internal_compile_228 instanceof ArrayAccess ? ($__internal_compile_228["quantity"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1747
                echo (($__internal_compile_229 = $context["detail"]) && is_array($__internal_compile_229) || $__internal_compile_229 instanceof ArrayAccess ? ($__internal_compile_229["price"] ?? null) : null);
                echo "
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1751
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
        // line 1761
        echo "  <!-- script custom field -->

  <!-- membership codes starts here -->
  <script type=\"text/javascript\">
    ";
        // line 1765
        if ((array_key_exists("wk_seller_group_status", $context) && ($context["wk_seller_group_status"] ?? null))) {
            // line 1766
            echo "    listing_duration = 0;
    ";
            // line 1767
            if ((array_key_exists("relist_duration", $context) && ($context["relist_duration"] ?? null))) {
                // line 1768
                echo "    listing_duration = ";
                echo ($context["relist_duration"] ?? null);
                echo ";
    ";
            }
            // line 1770
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
        // line 1820
        echo "  </script>
  <!-- membership codes ends here -->

  <script type=\"text/javascript\">
    \$('#vtab-option a:first').tab('show');
    tabCount = '";
        // line 1825
        echo ($context["tabCount"] ?? null);
        echo "';
    wkcustom_option_row = '";
        // line 1826
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
        // line 1864
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><textarea class=\"form-control\" id=\"\" value=\"\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" row=\"7\"></textarea></div></div>';
        addtoBody(html);

      } else if (fieldType == \"text\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1871
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" /></div></div>';
        addtoBody(html);

      } else if (fieldType == \"time\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1878
        echo ($context["entry_select_time"] ?? null);
        echo "</label>';
        html +=
          '<div class=\"col-sm-6\"><div class=\"input-group time\"><input type=\"text\" name=\"product_custom_field[' +
          wkcustom_option_row +
          '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"datetime\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1888
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
        // line 1899
        echo ($context["entry_select_date"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group date\">';
        html += '<input type=\"text\" name=\"product_custom_field[";
        // line 1901
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
        // line 1991
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1992
            echo "    \$('#input-description";
            echo (($__internal_compile_230 = $context["language"]) && is_array($__internal_compile_230) || $__internal_compile_230 instanceof ArrayAccess ? ($__internal_compile_230["language_id"] ?? null) : null);
            echo "').summernote({
    height: 300,
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1996
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
        // line 2028
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 2028) && (($__internal_compile_231 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_231) || $__internal_compile_231 instanceof ArrayAccess ? ($__internal_compile_231["links"] ?? null) : null))) {
            // line 2029
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
            // line 2046
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
            // line 2094
            if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2094) && (($__internal_compile_232 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_232) || $__internal_compile_232 instanceof ArrayAccess ? ($__internal_compile_232["attribute"] ?? null) : null))) {
                // line 2095
                echo "              addCategoryAttribute(item);
              ";
            }
            // line 2097
            echo "              // <!-- membership codes starts here -->
    
    ";
            // line 2099
            if (((($context["wk_seller_group_status"] ?? null) && array_key_exists("module_wk_seller_group_single_category", $context)) && ($context["module_wk_seller_group_single_category"] ?? null))) {
                // line 2100
                echo "   
    \$('input[name=\\'category\\']').val('');
    \$('#product-category'+item['value']).remove();
    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
                // line 2107
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 2108
                    echo "  getListingDuration(item['value']);
  ";
                }
                // line 2110
                echo "  ";
            } else {
                // line 2111
                echo "  \$('input[name=\\'category\\']').val('');
  \$('#product-category' + item['value']).remove();

  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
            }
            // line 2120
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
        // line 2363
        echo "
  ";
        // line 2364
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2364) && (($__internal_compile_233 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_233) || $__internal_compile_233 instanceof ArrayAccess ? ($__internal_compile_233["attribute"] ?? null) : null))) {
            // line 2365
            echo "  <script type=\"text/javascript\">
    <!--
    var attribute_row = ";
            // line 2367
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
            // line 2456
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
      html += '    <td class=\"text-left\">';
      ";
            // line 2458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2459
                echo "      html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                echo (($__internal_compile_234 = $context["language"]) && is_array($__internal_compile_234) || $__internal_compile_234 instanceof ArrayAccess ? ($__internal_compile_234["code"] ?? null) : null);
                echo "/";
                echo (($__internal_compile_235 = $context["language"]) && is_array($__internal_compile_235) || $__internal_compile_235 instanceof ArrayAccess ? ($__internal_compile_235["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_compile_236 = $context["language"]) && is_array($__internal_compile_236) || $__internal_compile_236 instanceof ArrayAccess ? ($__internal_compile_236["name"] ?? null) : null);
                echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
                echo (($__internal_compile_237 = $context["language"]) && is_array($__internal_compile_237) || $__internal_compile_237 instanceof ArrayAccess ? ($__internal_compile_237["language_id"] ?? null) : null);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\"></textarea></div> ';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2461
            echo "      html += '    </td>';
      html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove(); \$(\\'.tooltip.in\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2462
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
        // line 2516
        echo "
  ";
        // line 2517
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2517) && (($__internal_compile_238 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_238) || $__internal_compile_238 instanceof ArrayAccess ? ($__internal_compile_238["options"] ?? null) : null))) {
            // line 2518
            echo "  <script type=\"text/javascript\">
    <!--
    var option_row = ";
            // line 2520
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

    ";
            // line 2751
            echo "    //
    -->
  </script>
  ";
        }
        // line 2755
        echo "
  ";
        // line 2756
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 2756) && (($__internal_compile_239 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_239) || $__internal_compile_239 instanceof ArrayAccess ? ($__internal_compile_239["discount"] ?? null) : null))) {
            // line 2757
            echo "  <script type=\"text/javascript\">
    <!--
    var discount_row = ";
            // line 2759
            echo ($context["discount_row"] ?? null);
            echo ";

    function addDiscount() {
      html = '<tbody id=\"discount-row' + discount_row + '\">';
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2766
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2767
                echo "      html += '    <option value=\"";
                echo (($__internal_compile_240 = $context["customer_group"]) && is_array($__internal_compile_240) || $__internal_compile_240 instanceof ArrayAccess ? ($__internal_compile_240["customer_group_id"] ?? null) : null);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_241 = $context["customer_group"]) && is_array($__internal_compile_241) || $__internal_compile_241 instanceof ArrayAccess ? ($__internal_compile_241["name"] ?? null) : null));
                echo "</option>';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2769
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2770
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2771
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2772
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2773
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2774
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2775
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
        // line 2791
        echo "
  ";
        // line 2792
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 2792) && (($__internal_compile_242 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_242) || $__internal_compile_242 instanceof ArrayAccess ? ($__internal_compile_242["special"] ?? null) : null))) {
            // line 2793
            echo "  <script type=\"text/javascript\">
    <!--
    var special_row = ";
            // line 2795
            echo ($context["special_row"] ?? null);
            echo ";

    function addSpecial() {
      html = '<tbody id=\"special-row' + special_row + '\">'
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2802
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2803
                echo "      html += '      <option value=\"";
                echo (($__internal_compile_243 = $context["customer_group"]) && is_array($__internal_compile_243) || $__internal_compile_243 instanceof ArrayAccess ? ($__internal_compile_243["customer_group_id"] ?? null) : null);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_244 = $context["customer_group"]) && is_array($__internal_compile_244) || $__internal_compile_244 instanceof ArrayAccess ? ($__internal_compile_244["name"] ?? null) : null));
                echo "</option>';
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2805
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2806
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2807
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2808
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2809
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2810
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
        // line 2826
        echo "
  <script type=\"text/javascript\">
    <!--
    var image_row = ";
        // line 2829
        echo ($context["image_row"] ?? null);
        echo ";

    function addImage() {
      html = '<tbody id=\"image-row' + image_row + '\">';
      html += '  <tr>';
      html += '  <td class=\"text-left\"><div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\"><img id=\"thumb' + image_row + '-thumb-image\" src=\"";
        // line 2834
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\"/></div><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"thumb' + image_row + '-target-image\"/><div class=\"btn-group imgoption\" style=\"width: 41%;\"><button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button></div></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2835
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2836
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
        // line 2890
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2890) && (($__internal_compile_245 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_245) || $__internal_compile_245 instanceof ArrayAccess ? ($__internal_compile_245["attribute"] ?? null) : null))) {
            // line 2891
            echo "                addCategoryAttribute(item, category_id);
                ";
        }
        // line 2893
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2893) && (($__internal_compile_246 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_246) || $__internal_compile_246 instanceof ArrayAccess ? ($__internal_compile_246["options"] ?? null) : null))) {
            // line 2894
            echo "                addCategoryOption(item, category_id);
                ";
        }
        // line 2896
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
        // line 2937
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 2938
            echo "    getListingDuration(\$(this).data(\"categoty-id\"));
    ";
        }
        // line 2940
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

// custom option
var option_value_row = ";
        // line 2960
        echo ((array_key_exists("option_value_row", $context)) ? (_twig_default_filter(($context["option_value_row"] ?? null), 1)) : (1));
        echo "; // Start at next index

function addOptionValue(option_row) {
  let html = '<tr id=\"option-value-row' + option_value_row + '\">';

  html += '<td class=\"text-center\">';
  html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\">';
  html += '  <div class=\"input-group\">';
  html += '    <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][name]\" value=\"\" placeholder=\"";
        // line 2968
        echo ($context["entry_option_value"] ?? null);
        echo "\" class=\"form-control\">';
  html += '  </div>';
  html += '</td>';

  html += '<td class=\"text-left\">';
  html += '  <a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\">';
  html += '    <img src=\"";
        // line 2974
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\">';
  html += '  </a>';
  html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\">';
  html += '</td>';

  html += '<td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2979
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\"></td>';

  html += '<td class=\"text-left\">';
  html += '  <select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
  html += '    <option value=\"1\">";
        // line 2983
        echo ($context["text_yes"] ?? null);
        echo "</option>';
  html += '    <option value=\"0\">";
        // line 2984
        echo ($context["text_no"] ?? null);
        echo "</option>';
  html += '  </select>';
  html += '</td>';

  html += '<td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2988
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\"></td>';

  html += '<td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2990
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\"></td>';

  html += '<td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2992
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';

  html += '</tr>';

  \$('#option-value-body' + option_row).append(html);
  \$('[data-toggle=\"tooltip\"]').tooltip();

  option_value_row++;
}
//-->
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
        // line 3035
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__0c536d65d9ea715a307cfbb2419ca0d32a39fd058f8472a365fc2517d26a6906";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5661 => 3035,  5615 => 2992,  5610 => 2990,  5605 => 2988,  5598 => 2984,  5594 => 2983,  5587 => 2979,  5577 => 2974,  5568 => 2968,  5557 => 2960,  5535 => 2940,  5531 => 2938,  5529 => 2937,  5486 => 2896,  5482 => 2894,  5479 => 2893,  5475 => 2891,  5473 => 2890,  5416 => 2836,  5412 => 2835,  5408 => 2834,  5400 => 2829,  5395 => 2826,  5376 => 2810,  5372 => 2809,  5368 => 2808,  5364 => 2807,  5360 => 2806,  5357 => 2805,  5346 => 2803,  5342 => 2802,  5332 => 2795,  5328 => 2793,  5326 => 2792,  5323 => 2791,  5304 => 2775,  5300 => 2774,  5296 => 2773,  5292 => 2772,  5288 => 2771,  5284 => 2770,  5281 => 2769,  5270 => 2767,  5266 => 2766,  5256 => 2759,  5252 => 2757,  5250 => 2756,  5247 => 2755,  5241 => 2751,  5130 => 2520,  5126 => 2518,  5124 => 2517,  5121 => 2516,  5064 => 2462,  5061 => 2461,  5044 => 2459,  5040 => 2458,  5035 => 2456,  4943 => 2367,  4939 => 2365,  4937 => 2364,  4934 => 2363,  4689 => 2120,  4678 => 2111,  4675 => 2110,  4671 => 2108,  4669 => 2107,  4660 => 2100,  4658 => 2099,  4654 => 2097,  4650 => 2095,  4648 => 2094,  4597 => 2046,  4578 => 2029,  4576 => 2028,  4542 => 1996,  4531 => 1992,  4527 => 1991,  4434 => 1901,  4429 => 1899,  4415 => 1888,  4402 => 1878,  4392 => 1871,  4382 => 1864,  4341 => 1826,  4337 => 1825,  4330 => 1820,  4278 => 1770,  4272 => 1768,  4270 => 1767,  4267 => 1766,  4265 => 1765,  4259 => 1761,  4247 => 1751,  4237 => 1747,  4231 => 1744,  4225 => 1741,  4221 => 1739,  4217 => 1738,  4209 => 1733,  4203 => 1730,  4197 => 1727,  4189 => 1722,  4177 => 1712,  4175 => 1711,  4166 => 1705,  4160 => 1702,  4150 => 1695,  4142 => 1689,  4133 => 1683,  4127 => 1679,  4121 => 1676,  4118 => 1675,  4110 => 1669,  4103 => 1664,  4098 => 1662,  4093 => 1661,  4088 => 1659,  4083 => 1658,  4081 => 1657,  4075 => 1654,  4071 => 1652,  4069 => 1651,  4062 => 1646,  4059 => 1645,  4050 => 1642,  4043 => 1641,  4036 => 1640,  4032 => 1639,  4029 => 1638,  4027 => 1637,  4021 => 1634,  4017 => 1632,  4010 => 1627,  4007 => 1626,  4001 => 1625,  3997 => 1624,  3994 => 1623,  3977 => 1612,  3973 => 1611,  3961 => 1606,  3959 => 1605,  3944 => 1596,  3940 => 1595,  3928 => 1590,  3926 => 1589,  3910 => 1579,  3906 => 1578,  3894 => 1573,  3892 => 1572,  3887 => 1569,  3882 => 1568,  3878 => 1567,  3867 => 1563,  3865 => 1562,  3856 => 1559,  3852 => 1558,  3841 => 1554,  3839 => 1553,  3835 => 1551,  3824 => 1546,  3814 => 1545,  3808 => 1544,  3802 => 1543,  3798 => 1542,  3794 => 1541,  3788 => 1540,  3784 => 1539,  3780 => 1537,  3776 => 1536,  3766 => 1533,  3764 => 1532,  3758 => 1528,  3749 => 1525,  3739 => 1524,  3733 => 1523,  3728 => 1522,  3723 => 1521,  3719 => 1520,  3715 => 1519,  3704 => 1515,  3702 => 1514,  3697 => 1512,  3693 => 1511,  3688 => 1509,  3684 => 1508,  3680 => 1507,  3676 => 1506,  3672 => 1505,  3668 => 1504,  3664 => 1503,  3659 => 1502,  3653 => 1499,  3649 => 1497,  3647 => 1496,  3642 => 1494,  3635 => 1491,  3630 => 1490,  3627 => 1489,  3623 => 1488,  3614 => 1481,  3611 => 1480,  3602 => 1477,  3596 => 1476,  3590 => 1475,  3583 => 1474,  3579 => 1473,  3576 => 1472,  3574 => 1471,  3570 => 1469,  3567 => 1468,  3561 => 1467,  3559 => 1466,  3550 => 1464,  3546 => 1463,  3540 => 1462,  3537 => 1461,  3532 => 1460,  3529 => 1459,  3525 => 1458,  3519 => 1454,  3517 => 1453,  3514 => 1452,  3502 => 1443,  3496 => 1439,  3490 => 1438,  3488 => 1437,  3481 => 1433,  3477 => 1432,  3470 => 1430,  3466 => 1429,  3456 => 1424,  3452 => 1423,  3446 => 1420,  3442 => 1419,  3434 => 1415,  3430 => 1414,  3423 => 1410,  3419 => 1409,  3412 => 1404,  3409 => 1403,  3407 => 1402,  3403 => 1400,  3391 => 1391,  3385 => 1387,  3379 => 1386,  3377 => 1385,  3370 => 1381,  3366 => 1380,  3353 => 1372,  3349 => 1371,  3335 => 1362,  3331 => 1361,  3322 => 1357,  3318 => 1356,  3311 => 1354,  3307 => 1353,  3304 => 1352,  3298 => 1351,  3289 => 1348,  3284 => 1346,  3279 => 1345,  3276 => 1344,  3272 => 1343,  3267 => 1341,  3261 => 1339,  3256 => 1338,  3254 => 1337,  3247 => 1333,  3243 => 1332,  3239 => 1331,  3235 => 1330,  3231 => 1329,  3223 => 1323,  3221 => 1322,  3217 => 1320,  3205 => 1311,  3199 => 1307,  3193 => 1306,  3191 => 1305,  3184 => 1301,  3180 => 1300,  3167 => 1292,  3163 => 1291,  3149 => 1282,  3145 => 1281,  3136 => 1277,  3132 => 1276,  3125 => 1274,  3121 => 1273,  3114 => 1271,  3110 => 1270,  3107 => 1269,  3101 => 1268,  3092 => 1265,  3087 => 1263,  3082 => 1262,  3079 => 1261,  3075 => 1260,  3070 => 1258,  3064 => 1256,  3059 => 1255,  3057 => 1254,  3050 => 1250,  3046 => 1249,  3042 => 1248,  3038 => 1247,  3034 => 1246,  3030 => 1245,  3022 => 1239,  3020 => 1238,  3016 => 1236,  3006 => 1228,  3000 => 1227,  2998 => 1226,  2994 => 1224,  2990 => 1222,  2987 => 1221,  2976 => 1219,  2971 => 1218,  2969 => 1217,  2965 => 1216,  2955 => 1209,  2951 => 1208,  2945 => 1204,  2939 => 1203,  2937 => 1202,  2929 => 1197,  2925 => 1196,  2916 => 1192,  2910 => 1191,  2906 => 1189,  2902 => 1187,  2898 => 1185,  2895 => 1184,  2891 => 1182,  2887 => 1180,  2885 => 1179,  2878 => 1177,  2869 => 1173,  2863 => 1172,  2859 => 1170,  2855 => 1168,  2851 => 1166,  2848 => 1165,  2844 => 1163,  2840 => 1161,  2838 => 1160,  2831 => 1158,  2822 => 1154,  2816 => 1153,  2811 => 1150,  2807 => 1148,  2803 => 1146,  2800 => 1145,  2796 => 1143,  2792 => 1141,  2790 => 1140,  2783 => 1138,  2779 => 1136,  2774 => 1134,  2769 => 1133,  2764 => 1131,  2759 => 1130,  2757 => 1129,  2750 => 1127,  2745 => 1125,  2739 => 1124,  2733 => 1121,  2727 => 1120,  2723 => 1118,  2720 => 1117,  2714 => 1116,  2705 => 1113,  2700 => 1111,  2695 => 1110,  2692 => 1109,  2687 => 1108,  2685 => 1107,  2678 => 1105,  2671 => 1102,  2667 => 1101,  2660 => 1097,  2656 => 1096,  2652 => 1095,  2648 => 1094,  2644 => 1093,  2640 => 1092,  2633 => 1088,  2630 => 1087,  2627 => 1086,  2615 => 1077,  2609 => 1076,  2605 => 1075,  2597 => 1072,  2593 => 1070,  2590 => 1069,  2579 => 1061,  2573 => 1060,  2569 => 1059,  2561 => 1056,  2557 => 1054,  2554 => 1053,  2543 => 1045,  2537 => 1044,  2533 => 1043,  2525 => 1040,  2521 => 1038,  2518 => 1037,  2511 => 1033,  2505 => 1032,  2501 => 1031,  2494 => 1029,  2490 => 1027,  2487 => 1026,  2480 => 1022,  2474 => 1021,  2470 => 1020,  2463 => 1018,  2459 => 1016,  2456 => 1015,  2449 => 1011,  2443 => 1010,  2439 => 1009,  2432 => 1007,  2428 => 1005,  2426 => 1004,  2420 => 1000,  2415 => 998,  2410 => 997,  2405 => 995,  2400 => 994,  2398 => 993,  2394 => 992,  2390 => 991,  2383 => 989,  2377 => 986,  2373 => 985,  2369 => 984,  2365 => 983,  2361 => 982,  2357 => 981,  2353 => 980,  2349 => 979,  2344 => 978,  2339 => 977,  2336 => 976,  2334 => 975,  2324 => 968,  2321 => 967,  2315 => 966,  2313 => 965,  2309 => 964,  2303 => 963,  2296 => 961,  2293 => 960,  2288 => 959,  2286 => 958,  2279 => 953,  2277 => 952,  2273 => 950,  2260 => 940,  2253 => 935,  2247 => 934,  2245 => 933,  2237 => 928,  2233 => 927,  2228 => 924,  2219 => 921,  2212 => 919,  2206 => 916,  2200 => 915,  2196 => 913,  2192 => 912,  2186 => 909,  2182 => 908,  2175 => 906,  2171 => 905,  2164 => 902,  2159 => 901,  2157 => 900,  2149 => 895,  2145 => 894,  2137 => 888,  2135 => 887,  2103 => 858,  2067 => 825,  2063 => 823,  2057 => 818,  2055 => 817,  2043 => 810,  2036 => 805,  2034 => 804,  2024 => 799,  2012 => 796,  2000 => 793,  1989 => 789,  1981 => 788,  1975 => 787,  1963 => 784,  1951 => 781,  1944 => 779,  1940 => 778,  1936 => 776,  1930 => 774,  1928 => 773,  1917 => 771,  1908 => 769,  1903 => 767,  1899 => 766,  1892 => 762,  1888 => 761,  1884 => 760,  1880 => 759,  1876 => 758,  1872 => 757,  1865 => 753,  1861 => 751,  1858 => 750,  1855 => 749,  1852 => 747,  1844 => 741,  1835 => 738,  1831 => 737,  1824 => 736,  1821 => 735,  1816 => 734,  1814 => 733,  1808 => 730,  1801 => 728,  1793 => 722,  1788 => 719,  1784 => 717,  1779 => 713,  1774 => 711,  1769 => 708,  1763 => 704,  1755 => 701,  1750 => 699,  1745 => 698,  1740 => 696,  1734 => 694,  1732 => 693,  1728 => 691,  1724 => 690,  1720 => 688,  1715 => 686,  1712 => 685,  1707 => 683,  1704 => 682,  1702 => 681,  1694 => 676,  1691 => 675,  1689 => 674,  1684 => 671,  1675 => 668,  1671 => 667,  1666 => 666,  1662 => 665,  1656 => 662,  1649 => 660,  1643 => 656,  1637 => 654,  1635 => 653,  1632 => 652,  1623 => 649,  1619 => 648,  1614 => 647,  1610 => 646,  1605 => 644,  1597 => 641,  1589 => 639,  1582 => 635,  1578 => 634,  1574 => 633,  1567 => 631,  1563 => 629,  1561 => 628,  1557 => 626,  1555 => 625,  1549 => 621,  1539 => 616,  1534 => 614,  1531 => 613,  1529 => 612,  1526 => 611,  1520 => 607,  1514 => 606,  1506 => 604,  1501 => 602,  1496 => 601,  1493 => 600,  1489 => 599,  1483 => 596,  1480 => 595,  1477 => 594,  1470 => 590,  1463 => 588,  1456 => 583,  1453 => 582,  1447 => 578,  1441 => 577,  1433 => 575,  1428 => 573,  1423 => 572,  1420 => 571,  1416 => 570,  1410 => 567,  1407 => 566,  1404 => 565,  1395 => 559,  1388 => 557,  1382 => 554,  1375 => 552,  1369 => 549,  1362 => 547,  1353 => 540,  1350 => 539,  1338 => 530,  1334 => 529,  1328 => 526,  1325 => 525,  1322 => 524,  1312 => 517,  1307 => 515,  1301 => 512,  1298 => 511,  1295 => 510,  1292 => 509,  1283 => 505,  1277 => 503,  1275 => 502,  1268 => 500,  1264 => 499,  1259 => 497,  1253 => 496,  1244 => 492,  1240 => 490,  1236 => 489,  1231 => 488,  1225 => 484,  1220 => 482,  1217 => 481,  1212 => 479,  1209 => 478,  1207 => 477,  1203 => 475,  1198 => 473,  1195 => 472,  1190 => 470,  1187 => 469,  1185 => 468,  1179 => 465,  1176 => 464,  1173 => 463,  1167 => 459,  1161 => 458,  1153 => 456,  1148 => 454,  1143 => 453,  1140 => 452,  1136 => 451,  1128 => 448,  1124 => 446,  1122 => 445,  1119 => 444,  1113 => 440,  1108 => 438,  1103 => 437,  1098 => 435,  1093 => 434,  1091 => 433,  1085 => 430,  1082 => 429,  1080 => 428,  1077 => 427,  1071 => 423,  1066 => 421,  1061 => 420,  1056 => 418,  1051 => 417,  1049 => 416,  1043 => 413,  1040 => 412,  1037 => 411,  1027 => 406,  1020 => 404,  1016 => 402,  1013 => 401,  1006 => 396,  998 => 392,  996 => 391,  987 => 387,  982 => 385,  979 => 384,  976 => 383,  970 => 379,  964 => 378,  956 => 376,  947 => 373,  944 => 372,  940 => 371,  936 => 370,  930 => 367,  927 => 366,  925 => 365,  922 => 364,  913 => 358,  905 => 353,  894 => 345,  887 => 341,  883 => 340,  878 => 338,  875 => 337,  873 => 336,  870 => 335,  862 => 330,  855 => 328,  850 => 326,  847 => 325,  845 => 324,  842 => 323,  836 => 319,  829 => 317,  824 => 315,  821 => 314,  818 => 312,  808 => 307,  801 => 305,  797 => 303,  794 => 302,  784 => 297,  777 => 295,  773 => 293,  770 => 292,  760 => 287,  753 => 285,  749 => 283,  746 => 282,  736 => 277,  729 => 275,  725 => 273,  722 => 272,  712 => 267,  705 => 265,  701 => 263,  698 => 262,  688 => 257,  681 => 255,  677 => 253,  675 => 252,  671 => 250,  665 => 248,  663 => 247,  656 => 245,  651 => 243,  643 => 237,  632 => 231,  629 => 230,  626 => 229,  620 => 226,  617 => 225,  609 => 219,  606 => 218,  603 => 217,  599 => 215,  590 => 208,  587 => 207,  583 => 206,  579 => 203,  571 => 197,  565 => 195,  563 => 194,  559 => 193,  552 => 191,  548 => 190,  541 => 188,  532 => 182,  526 => 181,  522 => 180,  515 => 178,  509 => 174,  503 => 172,  501 => 171,  495 => 170,  491 => 169,  487 => 168,  479 => 165,  473 => 162,  463 => 161,  457 => 160,  453 => 158,  444 => 155,  440 => 154,  434 => 153,  430 => 152,  420 => 151,  414 => 150,  405 => 143,  402 => 142,  398 => 140,  396 => 139,  393 => 138,  391 => 137,  388 => 136,  386 => 135,  383 => 134,  380 => 132,  374 => 130,  372 => 129,  369 => 128,  359 => 125,  356 => 124,  354 => 123,  351 => 122,  342 => 120,  339 => 119,  337 => 118,  334 => 117,  325 => 115,  322 => 114,  320 => 113,  317 => 112,  307 => 109,  304 => 108,  302 => 107,  299 => 106,  293 => 104,  291 => 103,  288 => 102,  282 => 100,  280 => 99,  277 => 98,  268 => 96,  265 => 95,  263 => 94,  254 => 92,  245 => 90,  240 => 87,  232 => 85,  224 => 83,  215 => 81,  213 => 80,  206 => 77,  204 => 76,  199 => 74,  187 => 67,  180 => 65,  174 => 62,  168 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  141 => 50,  137 => 49,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  113 => 38,  109 => 36,  107 => 35,  104 => 34,  98 => 31,  94 => 29,  92 => 28,  88 => 26,  77 => 24,  73 => 23,  69 => 21,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0c536d65d9ea715a307cfbb2419ca0d32a39fd058f8472a365fc2517d26a6906", "");
    }
}
