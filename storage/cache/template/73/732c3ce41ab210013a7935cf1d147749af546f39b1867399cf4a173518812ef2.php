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

/* account/customerpartner/addproduct.twig */
class __TwigTemplate_e97a64be4c239042cc26b8e2c00b559b6adb6019f65bf0c74508ca66c6ce7f1d extends Template
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
              <li><a href=\"#tab-subscription\" data-toggle=\"tab\">Subscription Type</a></li>
              <!--<li><a href=\"#tab-update-reason\" data-toggle=\"tab\">";
                // line 134
                echo "</a></li>-->

            </ul>

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <ul class=\"nav nav-tabs\" id=\"languages\">
                  ";
                // line 141
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 142
                    echo "                  <li class=\"";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\">
                    <a href=\"#language";
                    // line 143
                    echo (($__internal_compile_2 = $context["language"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["language_id"] ?? null) : null);
                    echo "\" data-toggle=\"tab\">
                      <img src=\"catalog/language/";
                    // line 144
                    echo (($__internal_compile_3 = $context["language"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_compile_4 = $context["language"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["code"] ?? null) : null);
                    echo ".png\"
                        title=\"";
                    // line 145
                    echo (($__internal_compile_5 = $context["language"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                    echo "\" />
                      ";
                    // line 146
                    echo (($__internal_compile_6 = $context["language"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                    echo "</a>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                </ul>
                <div class=\"tab-content\">
                  ";
                // line 151
                $context["count"] = 0;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 152
                    echo "                  <div class=\"tab-pane ";
                    if ((($context["count"] ?? null) == 0)) {
                        echo " ";
                        echo "active";
                    }
                    echo " ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    echo "\"
                    id=\"language";
                    // line 153
                    echo (($__internal_compile_7 = $context["language"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["language_id"] ?? null) : null);
                    echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-name";
                    // line 156
                    echo (($__internal_compile_8 = $context["language"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_name"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\"
                          name=\"product_description[";
                    // line 159
                    echo (($__internal_compile_9 = $context["language"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["language_id"] ?? null) : null);
                    echo "][name]\"
                          value=\"";
                    // line 160
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_10 = $context["language"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["language_id"] ?? null) : null), [], "array", true, true, false, 160)) ? ((($__internal_compile_11 = (($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[(($__internal_compile_13 = $context["language"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null)) : (""));
                    echo "\"
                          placeholder=\"";
                    // line 161
                    echo ($context["entry_name"] ?? null);
                    echo "\" id=\"input-name";
                    echo (($__internal_compile_14 = $context["language"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["language_id"] ?? null) : null);
                    echo "\" />
                        ";
                    // line 162
                    if (twig_get_attribute($this->env, $this->source, ($context["error_name"] ?? null), (($__internal_compile_15 = $context["language"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["language_id"] ?? null) : null), [], "array", true, true, false, 162)) {
                        // line 163
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_16 = ($context["error_name"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["language"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 165
                    echo "                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-description";
                    // line 169
                    echo (($__internal_compile_18 = $context["language"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_description"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <textarea name=\"product_description[";
                    // line 171
                    echo (($__internal_compile_19 = $context["language"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["language_id"] ?? null) : null);
                    echo "][description]\"
                          placeholder=\"";
                    // line 172
                    echo ($context["entry_description"] ?? null);
                    echo "\" id=\"input-description";
                    echo (($__internal_compile_20 = $context["language"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\">";
                    // line 173
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_21 = $context["language"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["language_id"] ?? null) : null), [], "array", true, true, false, 173)) ? ((($__internal_compile_22 = (($__internal_compile_23 = ($context["product_description"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[(($__internal_compile_24 = $context["language"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["description"] ?? null) : null)) : (""));
                    echo "</textarea>
                      </div>
                    </div>

                    <div class=\"form-group required\">
                      <label class=\"col-sm-3 control-label\"
                        for=\"input-meta-description";
                    // line 179
                    echo (($__internal_compile_25 = $context["language"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["entry_meta_title"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"text\" name=\"product_description[";
                    // line 181
                    echo (($__internal_compile_26 = $context["language"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["language_id"] ?? null) : null);
                    echo "][meta_title]\"
                          placeholder=\"";
                    // line 182
                    echo ($context["entry_meta_title"] ?? null);
                    echo "\" id=\"input-meta-description";
                    echo (($__internal_compile_27 = $context["language"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["language_id"] ?? null) : null);
                    echo "\"
                          class=\"form-control\"
                          value=\"";
                    // line 184
                    echo ((twig_get_attribute($this->env, $this->source, ($context["product_description"] ?? null), (($__internal_compile_28 = $context["language"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["language_id"] ?? null) : null), [], "array", true, true, false, 184)) ? ((($__internal_compile_29 = (($__internal_compile_30 = ($context["product_description"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[(($__internal_compile_31 = $context["language"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["meta_title"] ?? null) : null)) : (""));
                    echo "\" />
                        ";
                    // line 185
                    if (twig_get_attribute($this->env, $this->source, ($context["error_meta_title"] ?? null), (($__internal_compile_32 = $context["language"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["language_id"] ?? null) : null), [], "array", true, true, false, 185)) {
                        // line 186
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_33 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[(($__internal_compile_34 = $context["language"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["language_id"] ?? null) : null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 188
                    echo "                      </div>
                    </div>

                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-description";
                    // line 194
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description";
                    // line 197
                    echo "                              placeholder=\"";
                    echo "\"
                              id=\"input-meta-description";
                    // line 198
                    echo "\"
                              class=\"form-control\">";
                    // line 199
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-meta-keyword";
                    // line 206
                    echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_description[";
                    // line 208
                    echo "rows=\"5\"
                              placeholder=\"";
                    // line 209
                    echo "\"
                              class=\"form-control\">";
                    // line 210
                    echo "</textarea>
                          </div>
                        </div>
                    -->
                    <!--
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\" for=\"input-tag";
                    // line 216
                    echo "\"><span
                              data-toggle=\"tooltip\" title=\"";
                    // line 217
                    echo "\">";
                    echo "</span></label>
                          <div class=\"col-sm-9\">
                            <input class=\"form-control\" type=\"text\"
                              name=\"product_description[";
                    // line 220
                    echo "][tag]\"
                              value=\"";
                    // line 221
                    echo "\"
                              placeholder=\"";
                    // line 222
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
                // line 228
                echo "                </div>
                <!--tab-content-language-->
              </div>

              <div class=\"tab-pane\" id=\"tab-data\">
                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-model\">";
                // line 234
                echo ($context["entry_model"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"model\" value=\"";
                // line 236
                echo ($context["model"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_model"] ?? null);
                echo "\" id=\"input-model\"
                      class=\"form-control\" />
                      ";
                // line 238
                if (($context["error_model"] ?? null)) {
                    // line 239
                    echo "                      <div class=\"text-danger\">";
                    echo ($context["error_model"] ?? null);
                    echo "</div>
                      ";
                }
                // line 241
                echo "                  </div>
                </div>
                ";
                // line 243
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sku", [], "array", true, true, false, 243)) {
                    // line 244
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 246
                    echo ($context["help_sku"] ?? null);
                    echo "\">";
                    echo ($context["entry_sku"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sku\" value=\"";
                    // line 248
                    echo ($context["sku"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sku"] ?? null);
                    echo "\" id=\"input-sku\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 253
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "upc", [], "array", true, true, false, 253)) {
                    // line 254
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 256
                    echo ($context["help_upc"] ?? null);
                    echo "\">";
                    echo ($context["entry_upc"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"upc\" value=\"";
                    // line 258
                    echo ($context["upc"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_upc"] ?? null);
                    echo "\" id=\"input-upc\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 263
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "ean", [], "array", true, true, false, 263)) {
                    // line 264
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 266
                    echo ($context["help_ean"] ?? null);
                    echo "\">";
                    echo ($context["entry_ean"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"ean\" value=\"";
                    // line 268
                    echo ($context["ean"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_ean"] ?? null);
                    echo "\" id=\"input-ean\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 273
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "jan", [], "array", true, true, false, 273)) {
                    // line 274
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 276
                    echo ($context["help_jan"] ?? null);
                    echo "\">";
                    echo ($context["entry_jan"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"jan\" value=\"";
                    // line 278
                    echo ($context["jan"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_jan"] ?? null);
                    echo "\" id=\"input-jan\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 283
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "isbn", [], "array", true, true, false, 283)) {
                    // line 284
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 286
                    echo ($context["help_isbn"] ?? null);
                    echo "\">";
                    echo ($context["entry_isbn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"isbn\" value=\"";
                    // line 288
                    echo ($context["isbn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_isbn"] ?? null);
                    echo "\" id=\"input-isbn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 293
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "mpn", [], "array", true, true, false, 293)) {
                    // line 294
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 296
                    echo ($context["help_mpn"] ?? null);
                    echo "\">";
                    echo ($context["entry_mpn"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"mpn\" value=\"";
                    // line 298
                    echo ($context["mpn"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_mpn"] ?? null);
                    echo "\" id=\"input-mpn\"
                      class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 303
                echo "                
                ";
                // line 305
                echo "                <!--<div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-location\">";
                // line 306
                echo ($context["entry_location"] ?? null);
                echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"location\" value=\"";
                // line 308
                echo ($context["location"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_location"] ?? null);
                echo "\"
                      id=\"input-location\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                // line 310
                echo ($context["prevPrice"] ?? null);
                echo "\" />
                  </div>
                </div>-->
                ";
                // line 314
                echo "                
                ";
                // line 315
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "price", [], "array", true, true, false, 315)) {
                    // line 316
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-price\">";
                    // line 317
                    echo ($context["entry_price"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"price\" value=\"";
                    // line 319
                    echo ($context["price"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" id=\"input-price\"
                      class=\"form-control\" />
                    <input type=\"hidden\" name=\"prevPrice\" value=\"";
                    // line 321
                    echo ($context["prevPrice"] ?? null);
                    echo "\" />
                   
                  </div>
                </div>
                ";
                }
                // line 326
                echo "                <!-- membership codes starts here -->
                ";
                // line 327
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 328
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-expiring-date\">";
                    // line 329
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"expiry_date\" value=\"";
                    // line 331
                    echo ($context["expiry_date"] ?? null);
                    echo "\"
                      placeholder=\"";
                    // line 332
                    echo ($context["entry_expiring_date"] ?? null);
                    echo "\" id=\"input-expiring-date\" class=\"form-control\" disabled />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-relist-date\">";
                    // line 336
                    echo ($context["entry_relist_duration"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"relist_duration\" class=\"form-control\" id=\"input-relist-duration\">

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-auto-relist\">";
                    // line 344
                    echo ($context["entry_auto_relist"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"checkbox\">
                      <label for=\"input-auto-relist\">
                        <input type=\"checkbox\" name=\"auto_relist\" id=\"input-auto-relist\">
                        ";
                    // line 349
                    echo ($context["entry_auto_relist_lable"] ?? null);
                    echo "
                      </label>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 355
                echo "                <!-- membership codes ends here -->
                ";
                // line 356
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "tax_class_id", [], "array", true, true, false, 356)) {
                    // line 357
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-tax-class\">";
                    // line 358
                    echo ($context["entry_tax_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                      <option value=\"0\">";
                    // line 361
                    echo ($context["text_none"] ?? null);
                    echo "</option>
                      ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                        // line 363
                        echo "                      ";
                        if (((($__internal_compile_35 = $context["tax_class"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["tax_class_id"] ?? null) : null) == ($context["tax_class_id"] ?? null))) {
                            // line 364
                            echo "                      <option value=\"";
                            echo (($__internal_compile_36 = $context["tax_class"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["tax_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_compile_37 = $context["tax_class"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["title"] ?? null) : null);
                            echo "
                      </option>
                      ";
                        } else {
                            // line 367
                            echo "                      <option value=\"";
                            echo (($__internal_compile_38 = $context["tax_class"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["tax_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_39 = $context["tax_class"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 369
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 370
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 374
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "quantity", [], "array", true, true, false, 374)) {
                    // line 375
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-quantity\">";
                    // line 376
                    echo ($context["entry_quantity"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"quantity\" value=\"";
                    // line 378
                    echo ($context["quantity"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                      id=\"input-quantity\" class=\"form-control\" />

                    <!-- Membership code -->
                    ";
                    // line 382
                    if (((array_key_exists("wk_seller_group_status", $context) && array_key_exists("marketplace_account_menu_sequence", $context)) && twig_in_filter("membership", twig_get_array_keys_filter(($context["marketplace_account_menu_sequence"] ?? null))))) {
                        // line 383
                        echo "                    <input type=\"hidden\" name=\"prevQuantity\" id=\"prevQuantity\" value=\"";
                        echo ($context["prevQuantity"] ?? null);
                        echo "\" />
                    <a href=\"#myModalanswer\" id=\"showerror\" role=\"button\" class=\"hide tfbutton tfbuttonborder asub\"
                      data-toggle=\"modal\"></a>
                    ";
                    }
                    // line 387
                    echo "                    <!--  -->
                   
                  </div>
                </div>
                ";
                }
                // line 392
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "minimum", [], "array", true, true, false, 392)) {
                    // line 393
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 395
                    echo ($context["help_minimum"] ?? null);
                    echo "\">";
                    echo ($context["entry_minimum"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"minimum\" value=\"";
                    // line 397
                    echo ($context["minimum"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_minimum"] ?? null);
                    echo "\"
                      id=\"input-minimum\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 402
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "subtract", [], "array", true, true, false, 402)) {
                    // line 403
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-subtract\">";
                    // line 404
                    echo ($context["entry_subtract"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                      ";
                    // line 407
                    if (($context["subtract"] ?? null)) {
                        // line 408
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 409
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 411
                        echo "                      <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 412
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 414
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 418
                echo "
                ";
                // line 419
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "status", [], "array", true, true, false, 419)) {
                    // line 420
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
                    // line 421
                    echo ($context["entry_status"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
                    // line 424
                    if (($context["status"] ?? null)) {
                        // line 425
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 426
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 428
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enabled"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 429
                        echo ($context["text_disabled"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 431
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 435
                echo "
                ";
                // line 436
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "stock_status_id", [], "array", true, true, false, 436)) {
                    // line 437
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 439
                    echo ($context["help_stock_status"] ?? null);
                    echo "\">";
                    echo ($context["entry_stock_status"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                      ";
                    // line 442
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
                        // line 443
                        echo "                      ";
                        if (((($__internal_compile_40 = $context["stock_status"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["stock_status_id"] ?? null) : null) == ($context["stock_status_id"] ?? null))) {
                            // line 444
                            echo "                      <option value=\"";
                            echo (($__internal_compile_41 = $context["stock_status"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["stock_status_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 445
                            echo (($__internal_compile_42 = $context["stock_status"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["name"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 447
                            echo "                      <option value=\"";
                            echo (($__internal_compile_43 = $context["stock_status"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["stock_status_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_44 = $context["stock_status"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 449
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 450
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 454
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "shipping", [], "array", true, true, false, 454)) {
                    // line 455
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                    // line 456
                    echo ($context["entry_shipping"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      ";
                    // line 459
                    if (($context["shipping"] ?? null)) {
                        // line 460
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
                        // line 461
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 463
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
                        // line 464
                        echo ($context["text_yes"] ?? null);
                        echo "
                      ";
                    }
                    // line 466
                    echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
                    // line 468
                    if ( !($context["shipping"] ?? null)) {
                        // line 469
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
                        // line 470
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    } else {
                        // line 472
                        echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
                        // line 473
                        echo ($context["text_no"] ?? null);
                        echo "
                      ";
                    }
                    // line 475
                    echo "                    </label>
                  </div>
                </div>
                ";
                }
                // line 479
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "keyword", [], "array", true, true, false, 479)) {
                    echo "                
                ";
                    // line 480
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 481
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 483
                        echo ($context["help_keyword"] ?? null);
                        echo "\">";
                        echo ($context["entry_keyword"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\">
                        <img src=\"catalog/language/";
                        // line 487
                        echo (($__internal_compile_45 = $context["language"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["code"] ?? null) : null);
                        echo "/";
                        echo (($__internal_compile_46 = $context["language"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["code"] ?? null) : null);
                        echo ".png\"
                          title=\"";
                        // line 488
                        echo (($__internal_compile_47 = $context["language"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null);
                        echo "\" />
                      </span>
                      <input type=\"text\" name=\"keyword[";
                        // line 490
                        echo (($__internal_compile_48 = $context["language"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["language_id"] ?? null) : null);
                        echo "]\"
                        value=\"";
                        // line 491
                        echo (($__internal_compile_49 = ($context["keyword"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[(($__internal_compile_50 = $context["language"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["language_id"] ?? null) : null)] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_keyword"] ?? null);
                        echo "\"
                        id=\"input-keyword\" class=\"form-control\" />
                      ";
                        // line 493
                        if (($context["error_keyword"] ?? null)) {
                            // line 494
                            echo "                      <div class=\"text-danger\">";
                            echo ($context["error_keyword"] ?? null);
                            echo "</div>
                      ";
                        }
                        // line 496
                        echo "                      </div>
                  </div>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 500
                    echo "                ";
                }
                // line 501
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "image", [], "array", true, true, false, 501)) {
                    // line 502
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-keyword\">";
                    // line 503
                    echo ($context["entry_image"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                      <img id=\"image-thumb-image\" src=\"";
                    // line 506
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"\" title=\"\" />
                    </div>
                    <input type=\"hidden\" name=\"image\" value=\"";
                    // line 508
                    echo ($context["thumb_img"] ?? null);
                    echo "\" id=\"image-target-image\" />
                    <div class=\"btn-group imgoption\">
                      <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 515
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "date_available", [], "array", true, true, false, 515)) {
                    // line 516
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-date-available\">";
                    // line 517
                    echo ($context["entry_date_available"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"input-group data-date\">
                      <input type=\"text\" name=\"date_available\" value=\"";
                    // line 520
                    echo ($context["date_available"] ?? null);
                    echo "\"
                        placeholder=\"";
                    // line 521
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
                // line 530
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length", [], "array", true, true, false, 530)) {
                    // line 531
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length\"><span data-toggle=\"tooltip\" title=\"This is a required field for shipping, Please input the dimension of your product. Dimensions in unit CM\">
                  Dimensions in unit cm (L x W x H)
                   </span></label>
                  <div class=\"col-sm-9\">
                    <div class=\"row\">
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"length\" value=\"";
                    // line 538
                    echo ($context["length"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_length"] ?? null);
                    echo "\"
                          id=\"input-length\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 540
                    echo ($context["error_length"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"width\" value=\"";
                    // line 543
                    echo ($context["width"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_width"] ?? null);
                    echo "\"
                          id=\"input-width\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 545
                    echo ($context["error_width"] ?? null);
                    echo "</div>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"height\" value=\"";
                    // line 548
                    echo ($context["height"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_height"] ?? null);
                    echo "\"
                          id=\"input-height\" class=\"form-control\" />
                          <div class=\"text-danger\">";
                    // line 550
                    echo ($context["error_height"] ?? null);
                    echo "</div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                }
                // line 556
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "length_class_id", [], "array", true, true, false, 556)) {
                    // line 557
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-length-class\">";
                    // line 558
                    echo ($context["entry_length"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                      ";
                    // line 561
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
                        // line 562
                        echo "                      ";
                        if (((($__internal_compile_51 = $context["length_class"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["length_class_id"] ?? null) : null) == ($context["length_class_id"] ?? null))) {
                            // line 563
                            echo "                      <option value=\"";
                            echo (($__internal_compile_52 = $context["length_class"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["length_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 564
                            echo (($__internal_compile_53 = $context["length_class"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 566
                            echo "                      <option value=\"";
                            echo (($__internal_compile_54 = $context["length_class"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["length_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_55 = $context["length_class"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 568
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 569
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 573
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight", [], "array", true, true, false, 573)) {
                    // line 574
                    echo "                <div class=\"form-group required\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight\">
                  <span data-toggle=\"tooltip\" title=\"weight in grams unit\">
                  Weight in unit grams</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"weight\" value=\"";
                    // line 579
                    echo ($context["weight"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["help_weight"] ?? null);
                    echo "\"
                      id=\"input-weight\" class=\"form-control\" />
                      <div class=\"text-danger\">";
                    // line 581
                    echo ($context["error_weight"] ?? null);
                    echo "</div>
                  </div>
                </div>
                ";
                }
                // line 585
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "weight_class_id", [], "array", true, true, false, 585)) {
                    // line 586
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-weight-class\">";
                    // line 587
                    echo ($context["entry_weight_class"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                      ";
                    // line 590
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
                        // line 591
                        echo "                      ";
                        if (((($__internal_compile_56 = $context["weight_class"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["weight_class_id"] ?? null) : null) == ($context["weight_class_id"] ?? null))) {
                            // line 592
                            echo "                      <option value=\"";
                            echo (($__internal_compile_57 = $context["weight_class"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["weight_class_id"] ?? null) : null);
                            echo "\" selected=\"selected\">
                        ";
                            // line 593
                            echo (($__internal_compile_58 = $context["weight_class"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["title"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 595
                            echo "                      <option value=\"";
                            echo (($__internal_compile_59 = $context["weight_class"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["weight_class_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_60 = $context["weight_class"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["title"] ?? null) : null);
                            echo "</option>
                      ";
                        }
                        // line 597
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 598
                    echo "                    </select>
                  </div>
                </div>
                ";
                }
                // line 602
                echo "
                ";
                // line 603
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "sort_order", [], "array", true, true, false, 603)) {
                    // line 604
                    echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
                    // line 605
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"sort_order\" value=\"";
                    // line 607
                    echo ($context["sort_order"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\"
                      id=\"input-sort-order\" class=\"form-control\" />
                  </div>
                </div>
                ";
                }
                // line 612
                echo "
              </div>

              <!-- link tab -->
              ";
                // line 616
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 616)) {
                    // line 617
                    echo "              <input type=\"hidden\" name=\"product_link_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-links\">
                ";
                    // line 619
                    if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproductcolumn"] ?? null), "manufacturer_id", [], "array", true, true, false, 619)) {
                        // line 620
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                      title=\"";
                        // line 622
                        echo ($context["help_manufacturer"] ?? null);
                        echo "\">";
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
                        // line 624
                        echo ($context["manufacturer"] ?? null);
                        echo "\"
                      placeholder=\"";
                        // line 625
                        echo ($context["entry_manufacturer"] ?? null);
                        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
                        // line 626
                        echo ($context["manufacturer_id"] ?? null);
                        echo "\" />
                  </div>
                </div>
                ";
                    }
                    // line 630
                    echo "                <div class=\"form-group ";
                    if (($context["category_required"] ?? null)) {
                        echo "required";
                    }
                    echo "\">
                  <label class=\"col-sm-3 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 632
                    echo ($context["help_category"] ?? null);
                    echo "\">";
                    echo ($context["entry_category"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <a id=\"input-category\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#category-modal\"
                      style=\"margin-bottom: 10px;\">";
                    // line 635
                    echo ($context["text_addcategory"] ?? null);
                    echo " </a>
                    <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 637
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                        // line 638
                        echo "                      <div id=\"product-category";
                        echo (($__internal_compile_61 = $context["product_category"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["category_id"] ?? null) : null);
                        echo "\"><i
                          class=\"fa fa-minus-circle \"></i>";
                        // line 639
                        echo (($__internal_compile_62 = $context["product_category"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
                        // line 640
                        echo (($__internal_compile_63 = $context["product_category"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["category_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 643
                    echo "                    </div>
                    ";
                    // line 644
                    if (($context["error_category"] ?? null)) {
                        // line 645
                        echo "                    <div class=\"text-danger\">";
                        echo ($context["error_category"] ?? null);
                        echo "</div>
                    ";
                    }
                    // line 647
                    echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 651
                    echo ($context["help_filter"] ?? null);
                    echo "\">";
                    echo ($context["entry_filter"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
                    // line 653
                    echo ($context["entry_filter"] ?? null);
                    echo "\" id=\"input-filter\"
                      class=\"form-control\" />
                    <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 656
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
                        // line 657
                        echo "                      <div id=\"product-filter";
                        echo (($__internal_compile_64 = $context["product_filter"]) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["filter_id"] ?? null) : null);
                        echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                        // line 658
                        echo (($__internal_compile_65 = $context["product_filter"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
                        // line 659
                        echo (($__internal_compile_66 = $context["product_filter"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["filter_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 662
                    echo "                    </div>
                  </div>
                </div>
                ";
                    // line 665
                    if (((array_key_exists("marketplace_seller_product_store", $context) && ($context["marketplace_seller_product_store"] ?? null)) && (($context["marketplace_seller_product_store"] ?? null) == "choose_store"))) {
                        // line 666
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
                        // line 667
                        echo ($context["entry_store"] ?? null);
                        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      <div class=\"checkbox\">
                        <label>
                          ";
                        // line 672
                        if (twig_in_filter(0, ($context["product_store"] ?? null))) {
                            // line 673
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" checked=\"checked\" />
                          ";
                            // line 674
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        } else {
                            // line 676
                            echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"0\" />
                          ";
                            // line 677
                            echo ($context["text_default"] ?? null);
                            echo "
                          ";
                        }
                        // line 679
                        echo "                        </label>
                      </div>
                      ";
                        // line 681
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                            // line 682
                            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
                            // line 684
                            if (twig_in_filter((($__internal_compile_67 = $context["store"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["store_id"] ?? null) : null), ($context["product_store"] ?? null))) {
                                // line 685
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_68 = $context["store"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["store_id"] ?? null) : null);
                                echo "\"
                            checked=\"checked\" />
                          ";
                                // line 687
                                echo (($__internal_compile_69 = $context["store"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null);
                                echo "
                          ";
                            } else {
                                // line 689
                                echo "                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                                echo (($__internal_compile_70 = $context["store"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["store_id"] ?? null) : null);
                                echo "\" />
                          ";
                                // line 690
                                echo (($__internal_compile_71 = $context["store"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["name"] ?? null) : null);
                                echo "
                          ";
                            }
                            // line 692
                            echo "                        </label>
                      </div>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 695
                        echo "                    </div>
                  </div>
                </div>
                ";
                    }
                    // line 699
                    echo "                <!--
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 702
                    echo "\">";
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
                    // line 704
                    echo "\" id=\"input-download\"
                      class=\"form-control\" />
                    <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 708
                    echo "                      <div id=\"product-download";
                    echo "\"><i class=\"fa fa-minus-circle\"></i>
                        ";
                    // line 710
                    echo "                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
                    echo "\" />
                      </div>
                      ";
                    // line 713
                    echo "                    </div>
                    </div>
                </div>
                -->
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                      title=\"";
                    // line 719
                    echo ($context["help_related"] ?? null);
                    echo "\">";
                    echo ($context["entry_related"] ?? null);
                    echo "</span></label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
                    // line 721
                    echo ($context["entry_related"] ?? null);
                    echo "\" id=\"input-related\"
                      class=\"form-control\" />
                    <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
                    // line 724
                    $context["class"] = "odd";
                    // line 725
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                        // line 726
                        echo "                      ";
                        $context["class"] = (((($context["class"] ?? null) == "even")) ? ("odd") : ("even"));
                        // line 727
                        echo "                      <div id=\"product-related";
                        echo (($__internal_compile_72 = $context["product_related"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["product_id"] ?? null) : null);
                        echo "\" class=\"";
                        echo ($context["class"] ?? null);
                        echo "\"><i
                          class=\"fa fa-minus-circle\"></i> ";
                        // line 728
                        echo (($__internal_compile_73 = $context["product_related"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["name"] ?? null) : null);
                        echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
                        // line 729
                        echo (($__internal_compile_74 = $context["product_related"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["product_id"] ?? null) : null);
                        echo "\" />
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 732
                    echo "                    </div>
                  </div>
                </div>

              </div>
              ";
                }
                // line 738
                echo "
";
                // line 740
                echo "               ";
                $context["option_row"] = 0;
                // line 741
                echo "                ";
                $context["option_value_row"] = 0;
                // line 742
                echo "                <div class=\"tab-pane\" id=\"tab-custom-option\">
                  <fieldset>
                    <table id=\"option-value-table";
                // line 744
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">Option Name</td>
                          <td class=\"text-left\">";
                // line 748
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                          <td class=\"text-center\">";
                // line 749
                echo ($context["entry_image"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 750
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                          <td class=\"text-left\">";
                // line 751
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 752
                echo ($context["entry_price"] ?? null);
                echo "</td>
                          <td class=\"text-right\">";
                // line 753
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody id=\"option-value-body";
                // line 757
                echo ($context["option_row"] ?? null);
                echo "\">
                        <tr id=\"option-value-row";
                // line 758
                echo ($context["option_value_row"] ?? null);
                echo "\">
                          <td class=\"text-center\">
                            <input type=\"hidden\" name=\"product_option[";
                // line 760
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][product_option_value_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "product_option_value_id", [], "any", false, false, false, 760);
                echo "\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                // line 762
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_75 = twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "option_value_description", [], "any", false, false, false, 762)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 762)] ?? null) : null), "name", [], "any", false, false, false, 762);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\">
                            </div>
                            ";
                // line 764
                if ((($__internal_compile_76 = (($__internal_compile_77 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 764)] ?? null) : null)) {
                    // line 765
                    echo "                            <div class=\"text-danger\">";
                    echo (($__internal_compile_78 = (($__internal_compile_79 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 765)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 767
                echo "                          </td>
                          <td class=\"text-left\">
                            <a href=\"\" id=\"thumb-image";
                // line 769
                echo ($context["option_value_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                              <img src=\"";
                // line 770
                echo ($context["placeholder"] ?? null);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\">
                            </a>
                            <input type=\"hidden\" name=\"product_option[";
                // line 772
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "image", [], "any", false, false, false, 772);
                echo "\" id=\"input-image";
                echo ($context["option_value_row"] ?? null);
                echo "\">
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 775
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][quantity]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "quantity", [], "any", false, false, false, 775);
                echo "\" placeholder=\"";
                echo ($context["entry_quantity"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-left\">
                            <select name=\"product_option[";
                // line 778
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][subtract]\" class=\"form-control\">
                              <option value=\"1\" ";
                // line 779
                if (twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "subtract", [], "any", false, false, false, 779)) {
                    echo "selected";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                              <option value=\"0\" ";
                // line 780
                if ( !twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "subtract", [], "any", false, false, false, 780)) {
                    echo "selected";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "</option>
                            </select>
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 784
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "price", [], "any", false, false, false, 784);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-right\">
                            <input type=\"text\" name=\"product_option[";
                // line 787
                echo ($context["option_row"] ?? null);
                echo "][product_option_value][";
                echo ($context["option_value_row"] ?? null);
                echo "][weight]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product_option_value"] ?? null), "weight", [], "any", false, false, false, 787);
                echo "\" placeholder=\"";
                echo ($context["entry_weight"] ?? null);
                echo "\" class=\"form-control\">
                          </td>
                          <td class=\"text-right\">
                            <button type=\"button\" onclick=\"\$('#option-value-row";
                // line 790
                echo ($context["option_value_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\">
                              <i class=\"fa fa-minus-circle\"></i>
                            </button>
                          </td>
                        </tr>
                        ";
                // line 795
                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                // line 796
                echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan=\"6\"></td>
                          <td class=\"text-left\">
                            <button type=\"button\" onclick=\"addOptionValue(";
                // line 801
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
                // line 808
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 809
                echo "                  </fieldset>
                </div>


              ";
                // line 814
                echo "
              <div class=\"tab-pane\" id=\"tab-subscription\">
                <div class=\"text-danger\"> ";
                // line 816
                echo ($context["warning_subs"] ?? null);
                echo " </div>
                <div class=\"text-danger\"> ";
                // line 817
                echo ($context["warning"] ?? null);
                echo " </div>
                <h2>Select Subscription Type</h2>
                <select class=\"form-control required\" id=\"subs\" name=\"subscription\">
                  <option value=\"\">-- Select Subscription --</option>
                  <option value=\"ppd\">Piso Per Day Per Product</option>
                  <option value=\"ppm\">Piso Per Product Per Month</option>
                  <option value=\"commission\">Commission Type</option>
                </select>
              
                <div id=\"ppd-section\" class=\"subscription-section\" style=\"display: none;\">
                  <h3>You choose Piso per day per product type of subscription</h3>
                  <div class=\"text-danger\">";
                // line 828
                echo ($context["warning_subs"] ?? null);
                echo "</div>
                  <label>Choose how many days your product will be displayed
                    <select class=\"form-control required\" id=\"subs_for_ppd\" name=\"subs_ppd\">
                      <option value=\"\">Choose how many days</option>
                      <option value=\"5\">5 days</option>
                      <option value=\"10\">10 days</option>
                      <option value=\"15\">15 days</option>
                      <option value=\"20\">20 days</option>
                      <option value=\"25\">25 days</option>
                    </select>
                  </label>
                </div>

                <div id=\"ppm-section\" class=\"subscription-section\" style=\"display: none;\">
                  <h3>You choose Piso per product per month type of subscription</h3>
                  <div class=\"text-danger\">";
                // line 843
                echo ($context["warning_subs"] ?? null);
                echo "</div>
                  <label>Choose how many Months your product will be displayed
                    <select class=\"form-control required\" id=\"subs_for_ppm\" name=\"subs_ppm\">
                      <option value=\"\">Choose how many Months</option>
                      <option value=\"1\">1 Month</option>
                      <option value=\"2\">2 Months</option>
                      <option value=\"3\">3 Months</option>
                      <option value=\"4\">4 Months</option>
                      <option value=\"5\">5 Months</option>
                      <option value=\"6\">6 Months</option>
                    </select>
                  </label>
                </div>

                <div id=\"commission-section\" class=\"subscription-section\" style=\"display: none;\">
                  <label class=\"control-label\" for=\"cms\">Your commission is 5% for every successful transition</label>
                  <input type=\"hidden\" class=\"form-group\" value=\"5\" name=\"subs_cms\"/>
                </div>
              </div>

              <!-- attribute tab -->
              ";
                // line 864
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 864)) {
                    // line 865
                    echo "              <input type=\"hidden\" name=\"product_attribute_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-attribute\">
                <div class=\"table-responsive\">
                  <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 871
                    echo ($context["entry_attribute"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 872
                    echo ($context["entry_text"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>

                    ";
                    // line 877
                    $context["attribute_row"] = 0;
                    // line 878
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
                        // line 879
                        echo "                    <tbody id=\"attribute-row";
                        echo ($context["attribute_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <input type=\"text\" name=\"product_attribute[";
                        // line 882
                        echo ($context["attribute_row"] ?? null);
                        echo "][name]\"
                            value=\"";
                        // line 883
                        echo (($__internal_compile_80 = $context["product_attribute"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_attribute"] ?? null);
                        echo "\"
                            class=\"form-control\" />
                          <input type=\"hidden\" name=\"product_attribute[";
                        // line 885
                        echo ($context["attribute_row"] ?? null);
                        echo "][attribute_id]\"
                            value=\"";
                        // line 886
                        echo (($__internal_compile_81 = $context["product_attribute"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["attribute_id"] ?? null) : null);
                        echo "\" />
                        </td>
                        <td class=\"text-left\">
                          ";
                        // line 889
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 890
                            echo "                          <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                              <img src=\"catalog/language/";
                            // line 892
                            echo (($__internal_compile_82 = $context["language"]) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["code"] ?? null) : null);
                            echo "/";
                            echo (($__internal_compile_83 = $context["language"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["code"] ?? null) : null);
                            echo ".png\"
                                title=\"";
                            // line 893
                            echo (($__internal_compile_84 = $context["language"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null);
                            echo "\" />
                            </span>
                            <textarea
                              name=\"product_attribute[";
                            // line 896
                            echo ($context["attribute_row"] ?? null);
                            echo "][product_attribute_description][";
                            echo (($__internal_compile_85 = $context["language"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["language_id"] ?? null) : null);
                            echo "][text]\"
                              cols=\"40\" rows=\"5\"
                              class=\"form-control\">";
                            // line 898
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "array", false, true, false, 898), (($__internal_compile_86 = $context["language"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["language_id"] ?? null) : null), [], "array", true, true, false, 898)) ? ((($__internal_compile_87 = (($__internal_compile_88 = (($__internal_compile_89 = $context["product_attribute"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["product_attribute_description"] ?? null) : null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88[(($__internal_compile_90 = $context["language"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["text"] ?? null) : null)) : (""));
                            echo "</textarea>
                          </div>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 901
                        echo "                        </td>
                        <td class=\"text-left\">
                          <button type=\"button\"
                            onclick=\"\$('#attribute-row";
                        // line 904
                        echo ($context["attribute_row"] ?? null);
                        echo "').remove(); \$(\\'.tooltip.in\\').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 905
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button>
                        </td>
                      </tr>
                    </tbody>
                    ";
                        // line 910
                        $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
                        // line 911
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 912
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\">
                          <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 917
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
                // line 927
                echo "
              <!-- option tab -->
              ";
                // line 929
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 929)) {
                    // line 930
                    echo "              <input type=\"hidden\" name=\"product_option_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-option\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                      ";
                    // line 935
                    $context["option_row"] = 0;
                    // line 936
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 937
                        echo "
                      <li><a href=\"#tab-option";
                        // line 938
                        echo ($context["option_row"] ?? null);
                        echo "\" data-toggle=\"tab\" id=\"option";
                        echo ($context["option_row"] ?? null);
                        echo "\"><i
                            class=\"fa fa-trash\"
                            onclick=\"\$('a[href=\\'#tab-option";
                        // line 940
                        echo ($context["option_row"] ?? null);
                        echo "\\']').parent().remove(); \$('#tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "').remove(); \$('#option a:first').tab('show');\"></i>
                          ";
                        // line 941
                        echo (($__internal_compile_91 = $context["product_option"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null);
                        echo "</a></li>
                      ";
                        // line 942
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 943
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 944
                    echo "                      <li>
                        <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
                    // line 945
                    echo ($context["button_add_option"] ?? null);
                    echo "\"
                          id=\"input-option\" class=\"form-control\" />
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\">
                      ";
                    // line 952
                    $context["option_row"] = 0;
                    // line 953
                    echo "                      ";
                    $context["option_value_row"] = 0;
                    // line 954
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 955
                        echo "                      <div class=\"tab-pane\" id=\"tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "\">
                        <input type=\"hidden\" name=\"product_option[";
                        // line 956
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_id]\"
                          value=\"";
                        // line 957
                        echo (($__internal_compile_92 = $context["product_option"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["product_option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 958
                        echo ($context["option_row"] ?? null);
                        echo "][name]\"
                          value=\"";
                        // line 959
                        echo (($__internal_compile_93 = $context["product_option"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 960
                        echo ($context["option_row"] ?? null);
                        echo "][option_id]\"
                          value=\"";
                        // line 961
                        echo (($__internal_compile_94 = $context["product_option"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 962
                        echo ($context["option_row"] ?? null);
                        echo "][type]\"
                          value=\"";
                        // line 963
                        echo (($__internal_compile_95 = $context["product_option"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["type"] ?? null) : null);
                        echo "\" />
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-required";
                        // line 966
                        echo ($context["option_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_required"] ?? null);
                        echo "</label>
                          <div class=\"col-sm-9\">
                            <select name=\"product_option[";
                        // line 968
                        echo ($context["option_row"] ?? null);
                        echo "][required]\"
                              id=\"input-required";
                        // line 969
                        echo ($context["option_row"] ?? null);
                        echo "\" class=\"form-control\">
                              ";
                        // line 970
                        if ((($__internal_compile_96 = $context["product_option"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["required"] ?? null) : null)) {
                            // line 971
                            echo "                              <option value=\"1\" selected=\"selected\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\">";
                            // line 972
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        } else {
                            // line 974
                            echo "                              <option value=\"1\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                            // line 975
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        }
                        // line 977
                        echo "                            </select>
                          </div>
                        </div>

                        ";
                        // line 981
                        if (((($__internal_compile_97 = $context["product_option"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["type"] ?? null) : null) == "text")) {
                            // line 982
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 984
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 986
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 987
                            echo (($__internal_compile_98 = $context["product_option"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 988
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 992
                        echo "                        ";
                        if (((($__internal_compile_99 = $context["product_option"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["type"] ?? null) : null) == "textarea")) {
                            // line 993
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 995
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_option[";
                            // line 997
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\" rows=\"5\"
                              placeholder=\"";
                            // line 998
                            echo ($context["entry_option_value"] ?? null);
                            echo "\" id=\"input-value";
                            echo ($context["option_row"] ?? null);
                            echo "\"
                              class=\"form-control\">";
                            // line 999
                            echo (($__internal_compile_100 = $context["product_option"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["option_value"] ?? null) : null);
                            echo "</textarea>
                          </div>
                        </div>
                        ";
                        }
                        // line 1003
                        echo "                        ";
                        if (((($__internal_compile_101 = $context["product_option"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["type"] ?? null) : null) == "file")) {
                            // line 1004
                            echo "                        <div class=\"form-group\" style=\"display: none;\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1006
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 1008
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 1009
                            echo (($__internal_compile_102 = $context["product_option"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 1010
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 1014
                        echo "                        ";
                        if (((($__internal_compile_103 = $context["product_option"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["type"] ?? null) : null) == "date")) {
                            // line 1015
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1017
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-3\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1020
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1021
                            echo (($__internal_compile_104 = $context["product_option"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                            // line 1022
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
                        // line 1030
                        echo "                        ";
                        if (((($__internal_compile_105 = $context["product_option"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["type"] ?? null) : null) == "time")) {
                            // line 1031
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1033
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1036
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1037
                            echo (($__internal_compile_106 = $context["product_option"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"HH:mm\" id=\"input-value";
                            // line 1038
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
                        // line 1046
                        echo "                        ";
                        if (((($__internal_compile_107 = $context["product_option"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["type"] ?? null) : null) == "datetime")) {
                            // line 1047
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1049
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1052
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1053
                            echo (($__internal_compile_108 = $context["product_option"]) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                            // line 1054
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
                        // line 1063
                        echo "                        ";
                        if ((((((($__internal_compile_109 = $context["product_option"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["type"] ?? null) : null) == "select") || ((($__internal_compile_110 = $context["product_option"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["type"] ?? null) : null) == "radio")) || ((($__internal_compile_111 = $context["product_option"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["type"] ?? null) : null) == "checkbox")) || ((($__internal_compile_112 = $context["product_option"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["type"] ?? null) : null) == "image"))) {
                            // line 1064
                            echo "                        <div class=\"table-responsive\">
                          <table id=\"option-value";
                            // line 1065
                            echo ($context["option_row"] ?? null);
                            echo "\"
                            class=\"table table-striped table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                            // line 1069
                            echo ($context["entry_option_value"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1070
                            echo ($context["entry_quantity"] ?? null);
                            echo "</td>
                                <td class=\"text-left\">";
                            // line 1071
                            echo ($context["entry_subtract"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1072
                            echo ($context["entry_price"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1073
                            echo ($context["entry_option_points"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1074
                            echo ($context["entry_weight"] ?? null);
                            echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            ";
                            // line 1078
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_113 = $context["product_option"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["product_option_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                                // line 1079
                                echo "                            <tbody id=\"option-value-row";
                                echo ($context["option_value_row"] ?? null);
                                echo "\">
                              <tr>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1082
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][option_value_id]\"
                                    style=\"min-width: 60px;\" class=\"form-control\">
                                    ";
                                // line 1084
                                if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_114 = $context["product_option"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["option_id"] ?? null) : null), [], "array", true, true, false, 1084)) {
                                    // line 1085
                                    echo "                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_115 = ($context["option_values"] ?? null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[(($__internal_compile_116 = $context["product_option"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["option_id"] ?? null) : null)] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                        // line 1086
                                        echo "                                    ";
                                        if (((($__internal_compile_117 = $context["option_value"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["option_value_id"] ?? null) : null) == (($__internal_compile_118 = $context["product_option_value"]) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["option_value_id"] ?? null) : null))) {
                                            // line 1087
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_119 = $context["option_value"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["option_value_id"] ?? null) : null);
                                            echo "\" selected=\"selected\">
                                      ";
                                            // line 1088
                                            echo (($__internal_compile_120 = $context["option_value"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["name"] ?? null) : null);
                                            echo "</option>
                                    ";
                                        } else {
                                            // line 1090
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_121 = $context["option_value"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["option_value_id"] ?? null) : null);
                                            echo "\">";
                                            echo (($__internal_compile_122 = $context["option_value"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["name"] ?? null) : null);
                                            echo "
                                    </option>
                                    ";
                                        }
                                        // line 1093
                                        echo "                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1094
                                    echo "                                    ";
                                }
                                // line 1095
                                echo "                                  </select>
                                  <input type=\"hidden\"
                                    name=\"product_option[";
                                // line 1097
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][product_option_value_id]\"
                                    value=\"";
                                // line 1098
                                echo (($__internal_compile_123 = $context["product_option_value"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["product_option_value_id"] ?? null) : null);
                                echo "\" />
                                </td>
                                <td class=\"text-right\"><input type=\"text\"
                                    name=\"product_option[";
                                // line 1101
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][quantity]\"
                                    value=\"";
                                // line 1102
                                echo (($__internal_compile_124 = $context["product_option_value"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["quantity"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1104
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][subtract]\"
                                    class=\"form-control\">
                                    ";
                                // line 1106
                                if ((($__internal_compile_125 = $context["product_option_value"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["subtract"] ?? null) : null)) {
                                    // line 1107
                                    echo "                                    <option value=\"1\" selected=\"selected\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\">";
                                    // line 1108
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                } else {
                                    // line 1110
                                    echo "                                    <option value=\"1\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
                                    // line 1111
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                }
                                // line 1113
                                echo "                                  </select></td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1115
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1117
                                if (((($__internal_compile_126 = $context["product_option_value"]) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["price_prefix"] ?? null) : null) == "+")) {
                                    // line 1118
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1120
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1122
                                echo "                                    ";
                                if (((($__internal_compile_127 = $context["product_option_value"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["price_prefix"] ?? null) : null) == "-")) {
                                    // line 1123
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1125
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1127
                                echo "                                  </select>

                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1130
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price]\"
                                    value=\"";
                                // line 1131
                                echo (($__internal_compile_128 = $context["product_option_value"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["price"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_price"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1135
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1137
                                if (((($__internal_compile_129 = $context["product_option_value"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["points_prefix"] ?? null) : null) == "+")) {
                                    // line 1138
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1140
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1142
                                echo "                                    ";
                                if (((($__internal_compile_130 = $context["product_option_value"]) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["points_prefix"] ?? null) : null) == "-")) {
                                    // line 1143
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1145
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1147
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1149
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points]\"
                                    value=\"";
                                // line 1150
                                echo (($__internal_compile_131 = $context["product_option_value"]) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131["points"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_points"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1154
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1156
                                if (((($__internal_compile_132 = $context["product_option_value"]) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["weight_prefix"] ?? null) : null) == "+")) {
                                    // line 1157
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1159
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1161
                                echo "                                    ";
                                if (((($__internal_compile_133 = $context["product_option_value"]) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["weight_prefix"] ?? null) : null) == "-")) {
                                    // line 1162
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1164
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1166
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1168
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight]\"
                                    value=\"";
                                // line 1169
                                echo (($__internal_compile_134 = $context["product_option_value"]) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134["weight"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_weight"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"\$('#option-value-row";
                                // line 1173
                                echo ($context["option_value_row"] ?? null);
                                echo "').remove();\"
                                    data-toggle=\"tooltip\" title=\"";
                                // line 1174
                                echo ($context["button_remove"] ?? null);
                                echo "\" class=\"btn btn-danger\"><i
                                      class=\"fa fa-minus-circle\"></i></button>
                                </td>
                              </tr>
                            </tbody>
                            ";
                                // line 1179
                                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                                // line 1180
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1181
                            echo "                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"addOptionValue('";
                            // line 1185
                            echo ($context["option_row"] ?? null);
                            echo "');\"
                                    data-toggle=\"tooltip\" title=\"";
                            // line 1186
                            echo ($context["button_add_option_value"] ?? null);
                            echo "\"
                                    class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <select id=\"option-values";
                            // line 1193
                            echo ($context["option_row"] ?? null);
                            echo "\" style=\"display: none;\">
                          ";
                            // line 1194
                            if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_135 = $context["product_option"]) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["option_id"] ?? null) : null), [], "array", true, true, false, 1194)) {
                                // line 1195
                                echo "                          ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_136 = ($context["option_values"] ?? null)) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136[(($__internal_compile_137 = $context["product_option"]) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137["option_id"] ?? null) : null)] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 1196
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
                                // line 1198
                                echo "                          ";
                            }
                            // line 1199
                            echo "                        </select>
                        ";
                        }
                        // line 1201
                        echo "                      </div>
                      <!--tab-pane-->
                      ";
                        // line 1203
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 1204
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1205
                    echo "                    </div>
                    <!--tab-content-->
                  </div>
                  <!--col-sm-9-->
                </div>
                <!--Row-->
              </div>
              ";
                }
                // line 1213
                echo "
              <!-- discount tab -->
              ";
                // line 1215
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 1215)) {
                    // line 1216
                    echo "              <input type=\"hidden\" name=\"product_discount_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-discount\">
                <div class=\"table-responsive\">
                  <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1222
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1223
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1224
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1225
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1226
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1227
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1231
                    $context["discount_row"] = 0;
                    // line 1232
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
                        // line 1233
                        echo "                    <tbody id=\"discount-row";
                        echo ($context["discount_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_discount[";
                        // line 1235
                        echo ($context["discount_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1237
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1238
                            echo "                            ";
                            if (((($__internal_compile_140 = $context["customer_group"]) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140["customer_group_id"] ?? null) : null) == (($__internal_compile_141 = $context["product_discount"]) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["customer_group_id"] ?? null) : null))) {
                                // line 1239
                                echo "                            <option value=\"";
                                echo (($__internal_compile_142 = $context["customer_group"]) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1240
                                echo (($__internal_compile_143 = $context["customer_group"]) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1242
                                echo "                            <option value=\"";
                                echo (($__internal_compile_144 = $context["customer_group"]) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_145 = $context["customer_group"]) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1245
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1246
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1247
                        echo ($context["discount_row"] ?? null);
                        echo "][quantity]\"
                            value=\"";
                        // line 1248
                        echo (($__internal_compile_146 = $context["product_discount"]) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146["quantity"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1250
                        echo ($context["discount_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1251
                        echo (($__internal_compile_147 = $context["product_discount"]) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_priority"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1253
                        echo ($context["discount_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1254
                        echo (($__internal_compile_148 = $context["product_discount"]) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
                        // line 1258
                        echo ($context["discount_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1259
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
                        // line 1268
                        echo ($context["discount_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1269
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
                        // line 1277
                        echo ($context["discount_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1278
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1282
                        $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
                        // line 1283
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1284
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"6\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1288
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
                // line 1297
                echo "
              <!--tab-special-->
              ";
                // line 1299
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 1299)) {
                    // line 1300
                    echo "              <input type=\"hidden\" name=\"product_special_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-special\">
                <div class=\"table-responsive\">
                  <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1306
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1307
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1308
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1309
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1310
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1314
                    $context["special_row"] = 0;
                    // line 1315
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
                        // line 1316
                        echo "                    <tbody id=\"special-row";
                        echo ($context["special_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_special[";
                        // line 1318
                        echo ($context["special_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1320
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1321
                            echo "                            ";
                            if (((($__internal_compile_151 = $context["customer_group"]) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["customer_group_id"] ?? null) : null) == (($__internal_compile_152 = $context["product_special"]) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152["customer_group_id"] ?? null) : null))) {
                                // line 1322
                                echo "                            <option value=\"";
                                echo (($__internal_compile_153 = $context["customer_group"]) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1323
                                echo (($__internal_compile_154 = $context["customer_group"]) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1325
                                echo "                            <option value=\"";
                                echo (($__internal_compile_155 = $context["customer_group"]) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_156 = $context["customer_group"]) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1328
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1329
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1330
                        echo ($context["special_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1331
                        echo (($__internal_compile_157 = $context["product_special"]) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1333
                        echo ($context["special_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1334
                        echo (($__internal_compile_158 = $context["product_special"]) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
                        // line 1338
                        echo ($context["special_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1339
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
                        // line 1348
                        echo ($context["special_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1349
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
                        // line 1357
                        echo ($context["special_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1358
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1362
                        $context["special_row"] = (($context["special_row"] ?? null) + 1);
                        // line 1363
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1364
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"5\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1368
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
                // line 1377
                echo "
              <!--tab-image-->
              ";
                // line 1379
                $context["image_row"] = 0;
                // line 1380
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "images", [], "array", true, true, false, 1380)) {
                    // line 1381
                    echo "              <div class=\"tab-pane\" id=\"tab-image\">
                <div class=\"table-responsive\">
                  <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1386
                    echo ($context["entry_image"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1387
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1391
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                        // line 1392
                        echo "                    <tbody id=\"image-row";
                        echo ($context["image_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                            <img id=\"thumb";
                        // line 1396
                        echo ($context["image_row"] ?? null);
                        echo "-thumb-image\"
                              src=\"";
                        // line 1397
                        echo (((($__internal_compile_161 = $context["product_image"]) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161["thumb"] ?? null) : null)) ? ((($__internal_compile_162 = $context["product_image"]) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["thumb"] ?? null) : null)) : (($context["placeholder"] ?? null)));
                        echo "\" alt=\"\"
                              title=\"\" />
                          </div>
                          <input type=\"hidden\" name=\"product_image[";
                        // line 1400
                        echo ($context["image_row"] ?? null);
                        echo "][image]\"
                            value=\"";
                        // line 1401
                        echo (($__internal_compile_163 = $context["product_image"]) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["thumg_img"] ?? null) : null);
                        echo "\" id=\"thumb";
                        echo ($context["image_row"] ?? null);
                        echo "-target-image\" />
                          <div class=\"btn-group imgoption\" style=\"width: 41%;\">
                            <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                          </div>
                        </td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
                        // line 1406
                        echo ($context["image_row"] ?? null);
                        echo "][sort_order]\"
                            value=\"";
                        // line 1407
                        echo (($__internal_compile_164 = $context["product_image"]) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164["sort_order"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                        // line 1409
                        echo ($context["image_row"] ?? null);
                        echo "').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 1410
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1414
                        $context["image_row"] = (($context["image_row"] ?? null) + 1);
                        // line 1415
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1416
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1420
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
                // line 1429
                echo "
              ";
                // line 1430
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "custom-field", [], "array", true, true, false, 1430)) {
                    // line 1431
                    echo "              <div id=\"tab-custom-field\" class=\"tab-pane\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"vtab-option\">
                      ";
                    // line 1435
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1436
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1437
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1438
                            echo "                      <li>
                        <a href=\"#wktab-option-";
                            // line 1439
                            echo ($context["tabCount"] ?? null);
                            echo "\" data-toggle=\"tab\" id=\"wkoption-";
                            echo ($context["tabCount"] ?? null);
                            echo "\"
                          field-id=\"wkoption-";
                            // line 1440
                            echo (($__internal_compile_165 = $context["tabs"]) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["fieldId"] ?? null) : null);
                            echo "\"><i class=\"fa fa-minus-circle\"
                            onclick=\"\$('#wkoption-";
                            // line 1441
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#vtab-option li a:first').trigger('click'); return false;\"></i>";
                            echo (($__internal_compile_166 = $context["tabs"]) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["fieldName"] ?? null) : null);
                            echo "</a>
                      </li>
                      ";
                            // line 1443
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            // line 1444
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1445
                        echo "                      ";
                    }
                    // line 1446
                    echo "                      <li id=\"optionSelector\">
                        <select name=\"wkcustomfield\" class=\"form-control\">
                          ";
                    // line 1448
                    if ( !twig_test_empty(($context["wkcustomFields"] ?? null))) {
                        // line 1449
                        echo "                          <option value=\"\"></option>
                          ";
                        // line 1450
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkcustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 1451
                            echo "                          <option value=\"";
                            echo (($__internal_compile_167 = $context["field"]) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167["id"] ?? null) : null);
                            echo "\" data-type=\"";
                            echo (($__internal_compile_168 = $context["field"]) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["fieldType"] ?? null) : null);
                            echo "\"
                            data-name=\"";
                            // line 1452
                            echo (($__internal_compile_169 = $context["field"]) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169["fieldName"] ?? null) : null);
                            echo "\" data-des=\"";
                            echo (($__internal_compile_170 = $context["field"]) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170["fieldDescription"] ?? null) : null);
                            echo "\"
                            title=\"";
                            // line 1453
                            echo (($__internal_compile_171 = $context["field"]) && is_array($__internal_compile_171) || $__internal_compile_171 instanceof ArrayAccess ? ($__internal_compile_171["fieldDescription"] ?? null) : null);
                            echo "\" data-isRequired=\"";
                            echo (($__internal_compile_172 = $context["field"]) && is_array($__internal_compile_172) || $__internal_compile_172 instanceof ArrayAccess ? ($__internal_compile_172["isRequired"] ?? null) : null);
                            echo "\">
                            ";
                            // line 1454
                            echo (($__internal_compile_173 = $context["field"]) && is_array($__internal_compile_173) || $__internal_compile_173 instanceof ArrayAccess ? ($__internal_compile_173["fieldName"] ?? null) : null);
                            echo "
                          </option>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1457
                        echo "                          ";
                    }
                    // line 1458
                    echo "
                        </select>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\" id=\"wk_customfieldcontent\">
                      ";
                    // line 1465
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1466
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1467
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1468
                            echo "                      <div id=\"wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "\" class=\"tab-pane\">
                        <div class=\"alert alert-info\">
                          <i class=\"fa fa-info-circle\"></i>
                          ";
                            // line 1471
                            echo (($__internal_compile_174 = $context["tabs"]) && is_array($__internal_compile_174) || $__internal_compile_174 instanceof ArrayAccess ? ($__internal_compile_174["fieldDes"] ?? null) : null);
                            echo "
                        </div>
                        ";
                            // line 1473
                            if ((array_key_exists("error", $context) && (($context["error"] ?? null) == (($__internal_compile_175 = $context["tabs"]) && is_array($__internal_compile_175) || $__internal_compile_175 instanceof ArrayAccess ? ($__internal_compile_175["fieldId"] ?? null) : null)))) {
                                // line 1474
                                echo "                        <div class=\"alert alert-danger\">
                          <i class=\"fa fa-exclamation-circle\"></i>
                          ";
                                // line 1476
                                echo ($context["error_warning_mandetory"] ?? null);
                                echo "
                        </div>
                        ";
                            }
                            // line 1479
                            echo "                        <input type=\"hidden\" name=\"product_custom_field[";
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_name]\"
                          value=\"";
                            // line 1480
                            echo (($__internal_compile_176 = $context["tabs"]) && is_array($__internal_compile_176) || $__internal_compile_176 instanceof ArrayAccess ? ($__internal_compile_176["fieldName"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1481
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_type]\"
                          value=\"";
                            // line 1482
                            echo (($__internal_compile_177 = $context["tabs"]) && is_array($__internal_compile_177) || $__internal_compile_177 instanceof ArrayAccess ? ($__internal_compile_177["fieldType"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1483
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_id]\"
                          value=\"";
                            // line 1484
                            echo (($__internal_compile_178 = $context["tabs"]) && is_array($__internal_compile_178) || $__internal_compile_178 instanceof ArrayAccess ? ($__internal_compile_178["fieldId"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1485
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_des]\"
                          value=\"";
                            // line 1486
                            echo (($__internal_compile_179 = $context["tabs"]) && is_array($__internal_compile_179) || $__internal_compile_179 instanceof ArrayAccess ? ($__internal_compile_179["fieldDes"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\"
                          name=\"product_custom_field[";
                            // line 1488
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_is_required]\"
                          value=\"";
                            // line 1489
                            echo (($__internal_compile_180 = $context["tabs"]) && is_array($__internal_compile_180) || $__internal_compile_180 instanceof ArrayAccess ? ($__internal_compile_180["isRequired"] ?? null) : null);
                            echo "\">

                        ";
                            // line 1491
                            if (((($__internal_compile_181 = $context["tabs"]) && is_array($__internal_compile_181) || $__internal_compile_181 instanceof ArrayAccess ? ($__internal_compile_181["fieldType"] ?? null) : null) == "select")) {
                                // line 1492
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
                                // line 1496
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\">
                              ";
                                // line 1497
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_183 = $context["tabs"]) && is_array($__internal_compile_183) || $__internal_compile_183 instanceof ArrayAccess ? ($__internal_compile_183["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1498
                                    echo "                              <option value=\"";
                                    echo (($__internal_compile_184 = $context["options"]) && is_array($__internal_compile_184) || $__internal_compile_184 instanceof ArrayAccess ? ($__internal_compile_184["optionId"] ?? null) : null);
                                    echo "\" ";
                                    if ( !twig_test_empty((($__internal_compile_185 = $context["tabs"]) && is_array($__internal_compile_185) || $__internal_compile_185 instanceof ArrayAccess ? ($__internal_compile_185["fieldOptions"] ?? null) : null))) {
                                        // line 1499
                                        echo "                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_186 = $context["tabs"]) && is_array($__internal_compile_186) || $__internal_compile_186 instanceof ArrayAccess ? ($__internal_compile_186["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1500
                                            echo "                                ";
                                            if (((($__internal_compile_187 = $context["option"]) && is_array($__internal_compile_187) || $__internal_compile_187 instanceof ArrayAccess ? ($__internal_compile_187["optionId"] ?? null) : null) == (($__internal_compile_188 = $context["options"]) && is_array($__internal_compile_188) || $__internal_compile_188 instanceof ArrayAccess ? ($__internal_compile_188["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "selected";
                                            }
                                            // line 1501
                                            echo "                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo ">
                                ";
                                    // line 1502
                                    echo (($__internal_compile_189 = $context["options"]) && is_array($__internal_compile_189) || $__internal_compile_189 instanceof ArrayAccess ? ($__internal_compile_189["optionValue"] ?? null) : null);
                                    echo "
                              </option>
                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1505
                                echo "                            </select>
                          </div>
                        </div>

                        ";
                            } elseif ((((($__internal_compile_190 =                             // line 1509
$context["tabs"]) && is_array($__internal_compile_190) || $__internal_compile_190 instanceof ArrayAccess ? ($__internal_compile_190["fieldType"] ?? null) : null) == "checkbox") || ((($__internal_compile_191 = $context["tabs"]) && is_array($__internal_compile_191) || $__internal_compile_191 instanceof ArrayAccess ? ($__internal_compile_191["fieldType"] ?? null) : null) == "radio"))) {
                                // line 1510
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_192 = $context["tabs"]) && is_array($__internal_compile_192) || $__internal_compile_192 instanceof ArrayAccess ? ($__internal_compile_192["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"control-label col-sm-3\">Select option:</label>
                          <div class=\"col-sm-9\">
                            ";
                                // line 1513
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_193 = $context["tabs"]) && is_array($__internal_compile_193) || $__internal_compile_193 instanceof ArrayAccess ? ($__internal_compile_193["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1514
                                    echo "
                            <div class=\"radio checkbox\">
                              <label for=\"";
                                    // line 1516
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_194 = $context["options"]) && is_array($__internal_compile_194) || $__internal_compile_194 instanceof ArrayAccess ? ($__internal_compile_194["optionId"] ?? null) : null));
                                    echo "\">
                                <input type='";
                                    // line 1517
                                    echo (($__internal_compile_195 = $context["tabs"]) && is_array($__internal_compile_195) || $__internal_compile_195 instanceof ArrayAccess ? ($__internal_compile_195["fieldType"] ?? null) : null);
                                    echo "' id=\"";
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_196 = $context["options"]) && is_array($__internal_compile_196) || $__internal_compile_196 instanceof ArrayAccess ? ($__internal_compile_196["optionId"] ?? null) : null));
                                    echo "\"
                                  value=\"";
                                    // line 1518
                                    echo (($__internal_compile_197 = $context["options"]) && is_array($__internal_compile_197) || $__internal_compile_197 instanceof ArrayAccess ? ($__internal_compile_197["optionId"] ?? null) : null);
                                    echo "\"
                                  name=\"product_custom_field[";
                                    // line 1519
                                    echo ($context["wkcustom_option_row"] ?? null);
                                    echo "][custom_field_value][]\"
                                  ";
                                    // line 1520
                                    if ( !twig_test_empty((($__internal_compile_198 = $context["tabs"]) && is_array($__internal_compile_198) || $__internal_compile_198 instanceof ArrayAccess ? ($__internal_compile_198["fieldOptions"] ?? null) : null))) {
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_199 = $context["tabs"]) && is_array($__internal_compile_199) || $__internal_compile_199 instanceof ArrayAccess ? ($__internal_compile_199["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1521
                                            echo "                                  ";
                                            if (((($__internal_compile_200 = $context["option"]) && is_array($__internal_compile_200) || $__internal_compile_200 instanceof ArrayAccess ? ($__internal_compile_200["optionId"] ?? null) : null) == (($__internal_compile_201 = $context["options"]) && is_array($__internal_compile_201) || $__internal_compile_201 instanceof ArrayAccess ? ($__internal_compile_201["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "checked";
                                            }
                                            // line 1522
                                            echo "                                  ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo " />
                                ";
                                    // line 1523
                                    echo (($__internal_compile_202 = $context["options"]) && is_array($__internal_compile_202) || $__internal_compile_202 instanceof ArrayAccess ? ($__internal_compile_202["optionValue"] ?? null) : null);
                                    echo "
                              </label>
                            </div>

                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1528
                                echo "                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_203 =                             // line 1530
$context["tabs"]) && is_array($__internal_compile_203) || $__internal_compile_203 instanceof ArrayAccess ? ($__internal_compile_203["fieldType"] ?? null) : null) == "text")) {
                                // line 1531
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
                                // line 1535
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                              value=\"";
                                // line 1536
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1536), "option_id", [], "array", true, true, false, 1536)) {
                                    echo " ";
                                    echo (($__internal_compile_205 = (($__internal_compile_206 = $context["tabs"]) && is_array($__internal_compile_206) || $__internal_compile_206 instanceof ArrayAccess ? ($__internal_compile_206["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_205) || $__internal_compile_205 instanceof ArrayAccess ? ($__internal_compile_205["option_id"] ?? null) : null);
                                }
                                echo "\" />
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_207 =                             // line 1539
$context["tabs"]) && is_array($__internal_compile_207) || $__internal_compile_207 instanceof ArrayAccess ? ($__internal_compile_207["fieldType"] ?? null) : null) == "textarea")) {
                                // line 1540
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
                                // line 1544
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\" rows=\"7\">
                                      ";
                                // line 1545
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1545), "option_id", [], "array", true, true, false, 1545)) {
                                    echo " ";
                                    echo (($__internal_compile_209 = (($__internal_compile_210 = $context["tabs"]) && is_array($__internal_compile_210) || $__internal_compile_210 instanceof ArrayAccess ? ($__internal_compile_210["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_209) || $__internal_compile_209 instanceof ArrayAccess ? ($__internal_compile_209["option_id"] ?? null) : null);
                                }
                                // line 1546
                                echo "                                    </textarea>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_211 =                             // line 1549
$context["tabs"]) && is_array($__internal_compile_211) || $__internal_compile_211 instanceof ArrayAccess ? ($__internal_compile_211["fieldType"] ?? null) : null) == "date")) {
                                // line 1550
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
                                // line 1555
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1556
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1556), "option_id", [], "array", true, true, false, 1556)) {
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
                            } elseif (((($__internal_compile_215 =                             // line 1566
$context["tabs"]) && is_array($__internal_compile_215) || $__internal_compile_215 instanceof ArrayAccess ? ($__internal_compile_215["fieldType"] ?? null) : null) == "time")) {
                                // line 1567
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
                                // line 1572
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1573
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1573), "option_id", [], "array", true, true, false, 1573)) {
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
                            } elseif (((($__internal_compile_219 =                             // line 1582
$context["tabs"]) && is_array($__internal_compile_219) || $__internal_compile_219 instanceof ArrayAccess ? ($__internal_compile_219["fieldType"] ?? null) : null) == "datetime")) {
                                // line 1583
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
                                // line 1588
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1589
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1589), "option_id", [], "array", true, true, false, 1589)) {
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
                            // line 1600
                            echo "                      </div>
                      ";
                            // line 1601
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            echo " ";
                            $context["wkcustom_option_row"] = (($context["wkcustom_option_row"] ?? null) + 1);
                            // line 1602
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1603
                        echo "                      ";
                    }
                    // line 1604
                    echo "                    </div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1609
                echo "              <div class=\"tab-pane\" id=\"tab-update-reason\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-required\">";
                // line 1611
                echo "Select a reason";
                echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"reason\" class=\"form-control\">
                      ";
                // line 1614
                if ( !twig_test_empty(($context["reasons"] ?? null))) {
                    // line 1615
                    echo "                      <option value=\"\"></option>
                      ";
                    // line 1616
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["reasons"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 1617
                        echo "                      <option value=\"";
                        echo (($__internal_compile_223 = $context["field"]) && is_array($__internal_compile_223) || $__internal_compile_223 instanceof ArrayAccess ? ($__internal_compile_223["id"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_compile_224 = $context["field"]) && is_array($__internal_compile_224) || $__internal_compile_224 instanceof ArrayAccess ? ($__internal_compile_224["fieldDescription"] ?? null) : null);
                        echo "\"
                        ";
                        // line 1618
                        if (((array_key_exists("reason", $context) && ($context["reason"] ?? null)) && (($context["reason"] ?? null) == (($__internal_compile_225 = $context["field"]) && is_array($__internal_compile_225) || $__internal_compile_225 instanceof ArrayAccess ? ($__internal_compile_225["id"] ?? null) : null)))) {
                            echo " ";
                            echo "selected";
                        }
                        echo ">
                        ";
                        // line 1619
                        echo (($__internal_compile_226 = $context["field"]) && is_array($__internal_compile_226) || $__internal_compile_226 instanceof ArrayAccess ? ($__internal_compile_226["title"] ?? null) : null);
                        echo "
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1622
                    echo "                      ";
                }
                // line 1623
                echo "                    </select>
                  </div>
                </div>
              </div>

              ";
                // line 1628
                if ((($context["wk_pricealert_status"] ?? null) && ($context["wk_pricealert_allowed_seller"] ?? null))) {
                    // line 1629
                    echo "              <div class=\"tab-pane\" id=\"tab-pricealert\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-pricealert\">";
                    // line 1631
                    echo ($context["text_palert"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"pricealert\" id=\"input-prigetListcealert\" class=\"form-control\">
                      ";
                    // line 1634
                    if (($context["is_alert_product"] ?? null)) {
                        // line 1635
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 1636
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 1638
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 1639
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 1641
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1646
                echo "
            </div>
            <!--tab-content-->

          </form>
          ";
            } else {
                // line 1652
                echo "          <div class=\"text-danger\">
            ";
                // line 1653
                echo ($context["text_access"] ?? null);
                echo "
          </div>
          ";
            }
            // line 1656
            echo "        </fieldset>

      </div>
      <!--content-->
      ";
            // line 1660
            echo ($context["column_right"] ?? null);
            echo "
    </div>
    <!--row-->
  </div>
  <!--container-->
  ";
        }
        // line 1666
        echo "
  <div id=\"category-modal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 1672
        echo ($context["heading_category"] ?? null);
        echo "</h4>
        </div>
        <div class=\"modal-body\" style=\"overflow:auto;\">
          <div id=\"category-modal-body\" style=\"display: inline-flex;width: 100%;\"></div>
        </div>
        <div class=\"modal-footer\">
          <!-- <div class=\"pull-left\">
          <button type=\"button\" class=\"btn btn-warning\" id=\"category-modal-back\">";
        // line 1679
        echo ($context["button_back"] ?? null);
        echo "</button>
        </div> -->
          <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 1682
        echo ($context["button_close"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 1688
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 1689
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
            // line 1699
            echo ($context["entry_list_header"] ?? null);
            echo "</h3>
          <table class=\"table table-bordered table-hover\" id=\"details\">
            <thead>
              <tr>
                <td>
                  ";
            // line 1704
            echo ($context["entry_name"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1707
            echo ($context["entry_quantity"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1710
            echo ($context["entry_price"] ?? null);
            echo "
                </td>
              <tr>
            </thead>
            <tbody>
              ";
            // line 1715
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellerDetail"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 1716
                echo "              <tr>
                <td>
                  ";
                // line 1718
                echo (($__internal_compile_227 = $context["detail"]) && is_array($__internal_compile_227) || $__internal_compile_227 instanceof ArrayAccess ? ($__internal_compile_227["name"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1721
                echo (($__internal_compile_228 = $context["detail"]) && is_array($__internal_compile_228) || $__internal_compile_228 instanceof ArrayAccess ? ($__internal_compile_228["quantity"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1724
                echo (($__internal_compile_229 = $context["detail"]) && is_array($__internal_compile_229) || $__internal_compile_229 instanceof ArrayAccess ? ($__internal_compile_229["price"] ?? null) : null);
                echo "
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1728
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
        // line 1738
        echo "  <!-- script custom field -->

  <!-- membership codes starts here -->
  <script type=\"text/javascript\">
    ";
        // line 1742
        if ((array_key_exists("wk_seller_group_status", $context) && ($context["wk_seller_group_status"] ?? null))) {
            // line 1743
            echo "    listing_duration = 0;
    ";
            // line 1744
            if ((array_key_exists("relist_duration", $context) && ($context["relist_duration"] ?? null))) {
                // line 1745
                echo "    listing_duration = ";
                echo ($context["relist_duration"] ?? null);
                echo ";
    ";
            }
            // line 1747
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
        // line 1797
        echo "  </script>
  <!-- membership codes ends here -->

  <script type=\"text/javascript\">
    \$('#vtab-option a:first').tab('show');
    tabCount = '";
        // line 1802
        echo ($context["tabCount"] ?? null);
        echo "';
    wkcustom_option_row = '";
        // line 1803
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
        // line 1841
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><textarea class=\"form-control\" id=\"\" value=\"\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" row=\"7\"></textarea></div></div>';
        addtoBody(html);

      } else if (fieldType == \"text\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1848
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" /></div></div>';
        addtoBody(html);

      } else if (fieldType == \"time\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1855
        echo ($context["entry_select_time"] ?? null);
        echo "</label>';
        html +=
          '<div class=\"col-sm-6\"><div class=\"input-group time\"><input type=\"text\" name=\"product_custom_field[' +
          wkcustom_option_row +
          '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"datetime\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1865
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
        // line 1876
        echo ($context["entry_select_date"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group date\">';
        html += '<input type=\"text\" name=\"product_custom_field[";
        // line 1878
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
        // line 1968
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1969
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
        // line 1973
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
        // line 2005
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 2005) && (($__internal_compile_231 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_231) || $__internal_compile_231 instanceof ArrayAccess ? ($__internal_compile_231["links"] ?? null) : null))) {
            // line 2006
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
            // line 2023
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
            // line 2071
            if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2071) && (($__internal_compile_232 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_232) || $__internal_compile_232 instanceof ArrayAccess ? ($__internal_compile_232["attribute"] ?? null) : null))) {
                // line 2072
                echo "              addCategoryAttribute(item);
              ";
            }
            // line 2074
            echo "              // <!-- membership codes starts here -->
    
    ";
            // line 2076
            if (((($context["wk_seller_group_status"] ?? null) && array_key_exists("module_wk_seller_group_single_category", $context)) && ($context["module_wk_seller_group_single_category"] ?? null))) {
                // line 2077
                echo "   
    \$('input[name=\\'category\\']').val('');
    \$('#product-category'+item['value']).remove();
    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
                // line 2084
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 2085
                    echo "  getListingDuration(item['value']);
  ";
                }
                // line 2087
                echo "  ";
            } else {
                // line 2088
                echo "  \$('input[name=\\'category\\']').val('');
  \$('#product-category' + item['value']).remove();

  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
            }
            // line 2097
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
        // line 2340
        echo "
  ";
        // line 2341
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2341) && (($__internal_compile_233 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_233) || $__internal_compile_233 instanceof ArrayAccess ? ($__internal_compile_233["attribute"] ?? null) : null))) {
            // line 2342
            echo "  <script type=\"text/javascript\">
    <!--
    var attribute_row = ";
            // line 2344
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
            // line 2433
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
      html += '    <td class=\"text-left\">';
      ";
            // line 2435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2436
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
            // line 2438
            echo "      html += '    </td>';
      html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove(); \$(\\'.tooltip.in\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2439
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
        // line 2493
        echo "
  ";
        // line 2494
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2494) && (($__internal_compile_238 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_238) || $__internal_compile_238 instanceof ArrayAccess ? ($__internal_compile_238["options"] ?? null) : null))) {
            // line 2495
            echo "  <script type=\"text/javascript\">
    <!--
    var option_row = ";
            // line 2497
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
            // line 2615
            echo ($context["entry_required"] ?? null);
            echo "</label>';
      html += '   <div class=\"col-sm-9\"><select name=\"product_option[' + option_row +
        '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
      html += '       <option value=\"1\">";
            // line 2618
            echo ($context["text_yes"] ?? null);
            echo "</option>';
      html += '       <option value=\"0\">";
            // line 2619
            echo ($context["text_no"] ?? null);
            echo "</option>';
      html += '   </select></div>';
      html += ' </div>';

      if (item['type'] == 'text') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2625
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2626
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'textarea') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2632
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><textarea name=\"product_option[' + option_row + '][option_value]\" rows=\"5\" placeholder=\"";
            // line 2633
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
        html += ' </div>';
      }

      if (item['type'] == 'file') {
        html += ' <div class=\"form-group\" style=\"display: none;\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2639
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2640
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'date') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2646
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2647
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'time') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2653
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2654
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'datetime') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2660
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2661
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
            // line 2671
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2672
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-left\">";
            // line 2673
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2674
            echo ($context["entry_price"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2675
            echo ($context["entry_option_points"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2676
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
            // line 2685
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
var option_value_row = ";
            // line 2733
            echo ($context["option_value_row"] ?? null);
            echo ";

function addOptionValue(option_row) {
    let html = '<tr id=\"option-value-row' + option_value_row + '\">';
    
    // Option select
    html += '<td class=\"text-left\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\" style=\"min-width:60px;\">';
    html += \$('#option-values' + option_row).html();
    html += '</select>';
    html += '<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" />';
    html += '</td>';

    // Quantity
    html += '<td class=\"text-right\">';
    html += '<input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2748
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Subtract
    html += '<td class=\"text-left\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
    html += '<option value=\"1\">";
            // line 2754
            echo ($context["text_yes"] ?? null);
            echo "</option>';
    html += '<option value=\"0\">";
            // line 2755
            echo ($context["text_no"] ?? null);
            echo "</option>';
    html += '</select>';
    html += '</td>';

    // Price
    html += '<td class=\"text-right\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
    html += '<option value=\"+\">+</option>';
    html += '<option value=\"-\">-</option>';
    html += '</select>';
    html += '<input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
            // line 2765
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Points
    html += '<td class=\"text-right\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
    html += '<option value=\"+\">+</option>';
    html += '<option value=\"-\">-</option>';
    html += '</select>';
    html += '<input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
            // line 2774
            echo ($context["entry_points"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Weight
    html += '<td class=\"text-right\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
    html += '<option value=\"+\">+</option>';
    html += '<option value=\"-\">-</option>';
    html += '</select>';
    html += '<input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
            // line 2783
            echo ($context["entry_weight"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Remove Button
    html += '<td class=\"text-left\">';
    html += '<button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2788
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">';
    html += '<i class=\"fa fa-minus-circle\"></i>';
    html += '</button>';
    html += '</td>';

    html += '</tr>';

    \$('#option-value' + option_row + ' tfoot').before(html);

    option_value_row++;
}
</script>


  ";
        }
        // line 2803
        echo "
  ";
        // line 2804
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 2804) && (($__internal_compile_239 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_239) || $__internal_compile_239 instanceof ArrayAccess ? ($__internal_compile_239["discount"] ?? null) : null))) {
            // line 2805
            echo "  <script type=\"text/javascript\">
    <!--
    var discount_row = ";
            // line 2807
            echo ($context["discount_row"] ?? null);
            echo ";

    function addDiscount() {
      html = '<tbody id=\"discount-row' + discount_row + '\">';
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2814
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2815
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
            // line 2817
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2818
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2819
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2820
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2821
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2822
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2823
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
        // line 2839
        echo "
  ";
        // line 2840
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 2840) && (($__internal_compile_242 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_242) || $__internal_compile_242 instanceof ArrayAccess ? ($__internal_compile_242["special"] ?? null) : null))) {
            // line 2841
            echo "  <script type=\"text/javascript\">
    <!--
    var special_row = ";
            // line 2843
            echo ($context["special_row"] ?? null);
            echo ";

    function addSpecial() {
      html = '<tbody id=\"special-row' + special_row + '\">'
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2850
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2851
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
            // line 2853
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2854
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2855
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2856
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2857
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2858
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
        // line 2874
        echo "
  <script type=\"text/javascript\">
    <!--
    var image_row = ";
        // line 2877
        echo ($context["image_row"] ?? null);
        echo ";

    function addImage() {
      html = '<tbody id=\"image-row' + image_row + '\">';
      html += '  <tr>';
      html += '  <td class=\"text-left\"><div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\"><img id=\"thumb' + image_row + '-thumb-image\" src=\"";
        // line 2882
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\"/></div><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"thumb' + image_row + '-target-image\"/><div class=\"btn-group imgoption\" style=\"width: 41%;\"><button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button></div></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2883
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2884
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
        // line 2938
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2938) && (($__internal_compile_245 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_245) || $__internal_compile_245 instanceof ArrayAccess ? ($__internal_compile_245["attribute"] ?? null) : null))) {
            // line 2939
            echo "                addCategoryAttribute(item, category_id);
                ";
        }
        // line 2941
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2941) && (($__internal_compile_246 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_246) || $__internal_compile_246 instanceof ArrayAccess ? ($__internal_compile_246["options"] ?? null) : null))) {
            // line 2942
            echo "                addCategoryOption(item, category_id);
                ";
        }
        // line 2944
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
        // line 2985
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 2986
            echo "    getListingDuration(\$(this).data(\"categoty-id\"));
    ";
        }
        // line 2988
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

//-->
</script>

<script>
  document.getElementById('subs').addEventListener('change', function () {
    const value = this.value;

    document.querySelectorAll('.subscription-section').forEach(section => {
      section.style.display = 'none';
      section.querySelectorAll('select, input').forEach(el => el.disabled = true);
    });

    if (value === 'ppd') {
      const section = document.getElementById('ppd-section');
      section.style.display = 'block';
      section.querySelectorAll('select, input').forEach(el => el.disabled = false);
    } else if (value === 'ppm') {
      const section = document.getElementById('ppm-section');
      section.style.display = 'block';
      section.querySelectorAll('select, input').forEach(el => el.disabled = false);
    } else if (value === 'commission') {
      const section = document.getElementById('commission-section');
      section.style.display = 'block';
      section.querySelectorAll('input').forEach(el => el.disabled = false);
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
        // line 3071
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "account/customerpartner/addproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5873 => 3071,  5788 => 2988,  5784 => 2986,  5782 => 2985,  5739 => 2944,  5735 => 2942,  5732 => 2941,  5728 => 2939,  5726 => 2938,  5669 => 2884,  5665 => 2883,  5661 => 2882,  5653 => 2877,  5648 => 2874,  5629 => 2858,  5625 => 2857,  5621 => 2856,  5617 => 2855,  5613 => 2854,  5610 => 2853,  5599 => 2851,  5595 => 2850,  5585 => 2843,  5581 => 2841,  5579 => 2840,  5576 => 2839,  5557 => 2823,  5553 => 2822,  5549 => 2821,  5545 => 2820,  5541 => 2819,  5537 => 2818,  5534 => 2817,  5523 => 2815,  5519 => 2814,  5509 => 2807,  5505 => 2805,  5503 => 2804,  5500 => 2803,  5482 => 2788,  5474 => 2783,  5462 => 2774,  5450 => 2765,  5437 => 2755,  5433 => 2754,  5424 => 2748,  5406 => 2733,  5355 => 2685,  5343 => 2676,  5339 => 2675,  5335 => 2674,  5331 => 2673,  5327 => 2672,  5323 => 2671,  5310 => 2661,  5306 => 2660,  5297 => 2654,  5293 => 2653,  5284 => 2647,  5280 => 2646,  5271 => 2640,  5267 => 2639,  5258 => 2633,  5254 => 2632,  5245 => 2626,  5241 => 2625,  5232 => 2619,  5228 => 2618,  5222 => 2615,  5101 => 2497,  5097 => 2495,  5095 => 2494,  5092 => 2493,  5035 => 2439,  5032 => 2438,  5015 => 2436,  5011 => 2435,  5006 => 2433,  4914 => 2344,  4910 => 2342,  4908 => 2341,  4905 => 2340,  4660 => 2097,  4649 => 2088,  4646 => 2087,  4642 => 2085,  4640 => 2084,  4631 => 2077,  4629 => 2076,  4625 => 2074,  4621 => 2072,  4619 => 2071,  4568 => 2023,  4549 => 2006,  4547 => 2005,  4513 => 1973,  4502 => 1969,  4498 => 1968,  4405 => 1878,  4400 => 1876,  4386 => 1865,  4373 => 1855,  4363 => 1848,  4353 => 1841,  4312 => 1803,  4308 => 1802,  4301 => 1797,  4249 => 1747,  4243 => 1745,  4241 => 1744,  4238 => 1743,  4236 => 1742,  4230 => 1738,  4218 => 1728,  4208 => 1724,  4202 => 1721,  4196 => 1718,  4192 => 1716,  4188 => 1715,  4180 => 1710,  4174 => 1707,  4168 => 1704,  4160 => 1699,  4148 => 1689,  4146 => 1688,  4137 => 1682,  4131 => 1679,  4121 => 1672,  4113 => 1666,  4104 => 1660,  4098 => 1656,  4092 => 1653,  4089 => 1652,  4081 => 1646,  4074 => 1641,  4069 => 1639,  4064 => 1638,  4059 => 1636,  4054 => 1635,  4052 => 1634,  4046 => 1631,  4042 => 1629,  4040 => 1628,  4033 => 1623,  4030 => 1622,  4021 => 1619,  4014 => 1618,  4007 => 1617,  4003 => 1616,  4000 => 1615,  3998 => 1614,  3992 => 1611,  3988 => 1609,  3981 => 1604,  3978 => 1603,  3972 => 1602,  3968 => 1601,  3965 => 1600,  3948 => 1589,  3944 => 1588,  3932 => 1583,  3930 => 1582,  3915 => 1573,  3911 => 1572,  3899 => 1567,  3897 => 1566,  3881 => 1556,  3877 => 1555,  3865 => 1550,  3863 => 1549,  3858 => 1546,  3853 => 1545,  3849 => 1544,  3838 => 1540,  3836 => 1539,  3827 => 1536,  3823 => 1535,  3812 => 1531,  3810 => 1530,  3806 => 1528,  3795 => 1523,  3785 => 1522,  3779 => 1521,  3773 => 1520,  3769 => 1519,  3765 => 1518,  3759 => 1517,  3755 => 1516,  3751 => 1514,  3747 => 1513,  3737 => 1510,  3735 => 1509,  3729 => 1505,  3720 => 1502,  3710 => 1501,  3704 => 1500,  3699 => 1499,  3694 => 1498,  3690 => 1497,  3686 => 1496,  3675 => 1492,  3673 => 1491,  3668 => 1489,  3664 => 1488,  3659 => 1486,  3655 => 1485,  3651 => 1484,  3647 => 1483,  3643 => 1482,  3639 => 1481,  3635 => 1480,  3630 => 1479,  3624 => 1476,  3620 => 1474,  3618 => 1473,  3613 => 1471,  3606 => 1468,  3601 => 1467,  3598 => 1466,  3594 => 1465,  3585 => 1458,  3582 => 1457,  3573 => 1454,  3567 => 1453,  3561 => 1452,  3554 => 1451,  3550 => 1450,  3547 => 1449,  3545 => 1448,  3541 => 1446,  3538 => 1445,  3532 => 1444,  3530 => 1443,  3521 => 1441,  3517 => 1440,  3511 => 1439,  3508 => 1438,  3503 => 1437,  3500 => 1436,  3496 => 1435,  3490 => 1431,  3488 => 1430,  3485 => 1429,  3473 => 1420,  3467 => 1416,  3461 => 1415,  3459 => 1414,  3452 => 1410,  3448 => 1409,  3441 => 1407,  3437 => 1406,  3427 => 1401,  3423 => 1400,  3417 => 1397,  3413 => 1396,  3405 => 1392,  3401 => 1391,  3394 => 1387,  3390 => 1386,  3383 => 1381,  3380 => 1380,  3378 => 1379,  3374 => 1377,  3362 => 1368,  3356 => 1364,  3350 => 1363,  3348 => 1362,  3341 => 1358,  3337 => 1357,  3324 => 1349,  3320 => 1348,  3306 => 1339,  3302 => 1338,  3293 => 1334,  3289 => 1333,  3282 => 1331,  3278 => 1330,  3275 => 1329,  3269 => 1328,  3260 => 1325,  3255 => 1323,  3250 => 1322,  3247 => 1321,  3243 => 1320,  3238 => 1318,  3232 => 1316,  3227 => 1315,  3225 => 1314,  3218 => 1310,  3214 => 1309,  3210 => 1308,  3206 => 1307,  3202 => 1306,  3194 => 1300,  3192 => 1299,  3188 => 1297,  3176 => 1288,  3170 => 1284,  3164 => 1283,  3162 => 1282,  3155 => 1278,  3151 => 1277,  3138 => 1269,  3134 => 1268,  3120 => 1259,  3116 => 1258,  3107 => 1254,  3103 => 1253,  3096 => 1251,  3092 => 1250,  3085 => 1248,  3081 => 1247,  3078 => 1246,  3072 => 1245,  3063 => 1242,  3058 => 1240,  3053 => 1239,  3050 => 1238,  3046 => 1237,  3041 => 1235,  3035 => 1233,  3030 => 1232,  3028 => 1231,  3021 => 1227,  3017 => 1226,  3013 => 1225,  3009 => 1224,  3005 => 1223,  3001 => 1222,  2993 => 1216,  2991 => 1215,  2987 => 1213,  2977 => 1205,  2971 => 1204,  2969 => 1203,  2965 => 1201,  2961 => 1199,  2958 => 1198,  2947 => 1196,  2942 => 1195,  2940 => 1194,  2936 => 1193,  2926 => 1186,  2922 => 1185,  2916 => 1181,  2910 => 1180,  2908 => 1179,  2900 => 1174,  2896 => 1173,  2887 => 1169,  2881 => 1168,  2877 => 1166,  2873 => 1164,  2869 => 1162,  2866 => 1161,  2862 => 1159,  2858 => 1157,  2856 => 1156,  2849 => 1154,  2840 => 1150,  2834 => 1149,  2830 => 1147,  2826 => 1145,  2822 => 1143,  2819 => 1142,  2815 => 1140,  2811 => 1138,  2809 => 1137,  2802 => 1135,  2793 => 1131,  2787 => 1130,  2782 => 1127,  2778 => 1125,  2774 => 1123,  2771 => 1122,  2767 => 1120,  2763 => 1118,  2761 => 1117,  2754 => 1115,  2750 => 1113,  2745 => 1111,  2740 => 1110,  2735 => 1108,  2730 => 1107,  2728 => 1106,  2721 => 1104,  2716 => 1102,  2710 => 1101,  2704 => 1098,  2698 => 1097,  2694 => 1095,  2691 => 1094,  2685 => 1093,  2676 => 1090,  2671 => 1088,  2666 => 1087,  2663 => 1086,  2658 => 1085,  2656 => 1084,  2649 => 1082,  2642 => 1079,  2638 => 1078,  2631 => 1074,  2627 => 1073,  2623 => 1072,  2619 => 1071,  2615 => 1070,  2611 => 1069,  2604 => 1065,  2601 => 1064,  2598 => 1063,  2586 => 1054,  2580 => 1053,  2576 => 1052,  2568 => 1049,  2564 => 1047,  2561 => 1046,  2550 => 1038,  2544 => 1037,  2540 => 1036,  2532 => 1033,  2528 => 1031,  2525 => 1030,  2514 => 1022,  2508 => 1021,  2504 => 1020,  2496 => 1017,  2492 => 1015,  2489 => 1014,  2482 => 1010,  2476 => 1009,  2472 => 1008,  2465 => 1006,  2461 => 1004,  2458 => 1003,  2451 => 999,  2445 => 998,  2441 => 997,  2434 => 995,  2430 => 993,  2427 => 992,  2420 => 988,  2414 => 987,  2410 => 986,  2403 => 984,  2399 => 982,  2397 => 981,  2391 => 977,  2386 => 975,  2381 => 974,  2376 => 972,  2371 => 971,  2369 => 970,  2365 => 969,  2361 => 968,  2354 => 966,  2348 => 963,  2344 => 962,  2340 => 961,  2336 => 960,  2332 => 959,  2328 => 958,  2324 => 957,  2320 => 956,  2315 => 955,  2310 => 954,  2307 => 953,  2305 => 952,  2295 => 945,  2292 => 944,  2286 => 943,  2284 => 942,  2280 => 941,  2274 => 940,  2267 => 938,  2264 => 937,  2259 => 936,  2257 => 935,  2250 => 930,  2248 => 929,  2244 => 927,  2231 => 917,  2224 => 912,  2218 => 911,  2216 => 910,  2208 => 905,  2204 => 904,  2199 => 901,  2190 => 898,  2183 => 896,  2177 => 893,  2171 => 892,  2167 => 890,  2163 => 889,  2157 => 886,  2153 => 885,  2146 => 883,  2142 => 882,  2135 => 879,  2130 => 878,  2128 => 877,  2120 => 872,  2116 => 871,  2108 => 865,  2106 => 864,  2082 => 843,  2064 => 828,  2050 => 817,  2046 => 816,  2042 => 814,  2036 => 809,  2034 => 808,  2022 => 801,  2015 => 796,  2013 => 795,  2003 => 790,  1991 => 787,  1979 => 784,  1968 => 780,  1960 => 779,  1954 => 778,  1942 => 775,  1930 => 772,  1923 => 770,  1919 => 769,  1915 => 767,  1909 => 765,  1907 => 764,  1896 => 762,  1887 => 760,  1882 => 758,  1878 => 757,  1871 => 753,  1867 => 752,  1863 => 751,  1859 => 750,  1855 => 749,  1851 => 748,  1844 => 744,  1840 => 742,  1837 => 741,  1834 => 740,  1831 => 738,  1823 => 732,  1814 => 729,  1810 => 728,  1803 => 727,  1800 => 726,  1795 => 725,  1793 => 724,  1787 => 721,  1780 => 719,  1772 => 713,  1767 => 710,  1763 => 708,  1758 => 704,  1753 => 702,  1748 => 699,  1742 => 695,  1734 => 692,  1729 => 690,  1724 => 689,  1719 => 687,  1713 => 685,  1711 => 684,  1707 => 682,  1703 => 681,  1699 => 679,  1694 => 677,  1691 => 676,  1686 => 674,  1683 => 673,  1681 => 672,  1673 => 667,  1670 => 666,  1668 => 665,  1663 => 662,  1654 => 659,  1650 => 658,  1645 => 657,  1641 => 656,  1635 => 653,  1628 => 651,  1622 => 647,  1616 => 645,  1614 => 644,  1611 => 643,  1602 => 640,  1598 => 639,  1593 => 638,  1589 => 637,  1584 => 635,  1576 => 632,  1568 => 630,  1561 => 626,  1557 => 625,  1553 => 624,  1546 => 622,  1542 => 620,  1540 => 619,  1536 => 617,  1534 => 616,  1528 => 612,  1518 => 607,  1513 => 605,  1510 => 604,  1508 => 603,  1505 => 602,  1499 => 598,  1493 => 597,  1485 => 595,  1480 => 593,  1475 => 592,  1472 => 591,  1468 => 590,  1462 => 587,  1459 => 586,  1456 => 585,  1449 => 581,  1442 => 579,  1435 => 574,  1432 => 573,  1426 => 569,  1420 => 568,  1412 => 566,  1407 => 564,  1402 => 563,  1399 => 562,  1395 => 561,  1389 => 558,  1386 => 557,  1383 => 556,  1374 => 550,  1367 => 548,  1361 => 545,  1354 => 543,  1348 => 540,  1341 => 538,  1332 => 531,  1329 => 530,  1317 => 521,  1313 => 520,  1307 => 517,  1304 => 516,  1301 => 515,  1291 => 508,  1286 => 506,  1280 => 503,  1277 => 502,  1274 => 501,  1271 => 500,  1262 => 496,  1256 => 494,  1254 => 493,  1247 => 491,  1243 => 490,  1238 => 488,  1232 => 487,  1223 => 483,  1219 => 481,  1215 => 480,  1210 => 479,  1204 => 475,  1199 => 473,  1196 => 472,  1191 => 470,  1188 => 469,  1186 => 468,  1182 => 466,  1177 => 464,  1174 => 463,  1169 => 461,  1166 => 460,  1164 => 459,  1158 => 456,  1155 => 455,  1152 => 454,  1146 => 450,  1140 => 449,  1132 => 447,  1127 => 445,  1122 => 444,  1119 => 443,  1115 => 442,  1107 => 439,  1103 => 437,  1101 => 436,  1098 => 435,  1092 => 431,  1087 => 429,  1082 => 428,  1077 => 426,  1072 => 425,  1070 => 424,  1064 => 421,  1061 => 420,  1059 => 419,  1056 => 418,  1050 => 414,  1045 => 412,  1040 => 411,  1035 => 409,  1030 => 408,  1028 => 407,  1022 => 404,  1019 => 403,  1016 => 402,  1006 => 397,  999 => 395,  995 => 393,  992 => 392,  985 => 387,  977 => 383,  975 => 382,  966 => 378,  961 => 376,  958 => 375,  955 => 374,  949 => 370,  943 => 369,  935 => 367,  926 => 364,  923 => 363,  919 => 362,  915 => 361,  909 => 358,  906 => 357,  904 => 356,  901 => 355,  892 => 349,  884 => 344,  873 => 336,  866 => 332,  862 => 331,  857 => 329,  854 => 328,  852 => 327,  849 => 326,  841 => 321,  834 => 319,  829 => 317,  826 => 316,  824 => 315,  821 => 314,  815 => 310,  808 => 308,  803 => 306,  800 => 305,  797 => 303,  787 => 298,  780 => 296,  776 => 294,  773 => 293,  763 => 288,  756 => 286,  752 => 284,  749 => 283,  739 => 278,  732 => 276,  728 => 274,  725 => 273,  715 => 268,  708 => 266,  704 => 264,  701 => 263,  691 => 258,  684 => 256,  680 => 254,  677 => 253,  667 => 248,  660 => 246,  656 => 244,  654 => 243,  650 => 241,  644 => 239,  642 => 238,  635 => 236,  630 => 234,  622 => 228,  611 => 222,  608 => 221,  605 => 220,  599 => 217,  596 => 216,  588 => 210,  585 => 209,  582 => 208,  578 => 206,  569 => 199,  566 => 198,  562 => 197,  558 => 194,  550 => 188,  544 => 186,  542 => 185,  538 => 184,  531 => 182,  527 => 181,  520 => 179,  511 => 173,  505 => 172,  501 => 171,  494 => 169,  488 => 165,  482 => 163,  480 => 162,  474 => 161,  470 => 160,  466 => 159,  458 => 156,  452 => 153,  442 => 152,  436 => 151,  432 => 149,  423 => 146,  419 => 145,  413 => 144,  409 => 143,  399 => 142,  393 => 141,  384 => 134,  380 => 132,  374 => 130,  372 => 129,  369 => 128,  359 => 125,  356 => 124,  354 => 123,  351 => 122,  342 => 120,  339 => 119,  337 => 118,  334 => 117,  325 => 115,  322 => 114,  320 => 113,  317 => 112,  307 => 109,  304 => 108,  302 => 107,  299 => 106,  293 => 104,  291 => 103,  288 => 102,  282 => 100,  280 => 99,  277 => 98,  268 => 96,  265 => 95,  263 => 94,  254 => 92,  245 => 90,  240 => 87,  232 => 85,  224 => 83,  215 => 81,  213 => 80,  206 => 77,  204 => 76,  199 => 74,  187 => 67,  180 => 65,  174 => 62,  168 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  141 => 50,  137 => 49,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  113 => 38,  109 => 36,  107 => 35,  104 => 34,  98 => 31,  94 => 29,  92 => 28,  88 => 26,  77 => 24,  73 => 23,  69 => 21,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/addproduct.twig", "");
    }
}
