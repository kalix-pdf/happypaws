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
class __TwigTemplate_524703d3b3e7fc486df3d071cf4ee2adca2456664648db467e89dbf6056dcfb7 extends Template
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
                <h2>Select Subscription Type</h2>
                <select class=\"form-control required\" id=\"subs\" name=\"subscription\">
                  <option value=\"\">-- Select Subscription --</option>
                  <option value=\"ppd\">Piso Per Day Per Product</option>
                  <option value=\"ppm\">Piso Per Product Per Month</option>
                  <option value=\"commission\">Commission Type</option>
                </select>
              </div>

              <div id=\"ppd-section\" class=\"subscription-section\" style=\"display: none;\">
                <h3>You choose Piso per day per product type of subscription</h3>
                <div class=\"text-danger\">";
                // line 827
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

              <div id=\"ppm-section\" class=\"subscription-section\" style=\"display: none;\">
                <h3>You choose Piso per product per month type of subscription</h3>
                <div class=\"text-danger\">";
                // line 860
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

              <div class=\"cms-section\" id=\"subscription-section\" style=\"display: none;\">
                </h3>Your commission is 5%</h3>
              </div>

              <!-- attribute tab -->
              ";
                // line 893
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 893)) {
                    // line 894
                    echo "              <input type=\"hidden\" name=\"product_attribute_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-attribute\">
                <div class=\"table-responsive\">
                  <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 900
                    echo ($context["entry_attribute"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 901
                    echo ($context["entry_text"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>

                    ";
                    // line 906
                    $context["attribute_row"] = 0;
                    // line 907
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
                        // line 908
                        echo "                    <tbody id=\"attribute-row";
                        echo ($context["attribute_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <input type=\"text\" name=\"product_attribute[";
                        // line 911
                        echo ($context["attribute_row"] ?? null);
                        echo "][name]\"
                            value=\"";
                        // line 912
                        echo (($__internal_compile_80 = $context["product_attribute"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_attribute"] ?? null);
                        echo "\"
                            class=\"form-control\" />
                          <input type=\"hidden\" name=\"product_attribute[";
                        // line 914
                        echo ($context["attribute_row"] ?? null);
                        echo "][attribute_id]\"
                            value=\"";
                        // line 915
                        echo (($__internal_compile_81 = $context["product_attribute"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["attribute_id"] ?? null) : null);
                        echo "\" />
                        </td>
                        <td class=\"text-left\">
                          ";
                        // line 918
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 919
                            echo "                          <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                              <img src=\"catalog/language/";
                            // line 921
                            echo (($__internal_compile_82 = $context["language"]) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["code"] ?? null) : null);
                            echo "/";
                            echo (($__internal_compile_83 = $context["language"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["code"] ?? null) : null);
                            echo ".png\"
                                title=\"";
                            // line 922
                            echo (($__internal_compile_84 = $context["language"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null);
                            echo "\" />
                            </span>
                            <textarea
                              name=\"product_attribute[";
                            // line 925
                            echo ($context["attribute_row"] ?? null);
                            echo "][product_attribute_description][";
                            echo (($__internal_compile_85 = $context["language"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["language_id"] ?? null) : null);
                            echo "][text]\"
                              cols=\"40\" rows=\"5\"
                              class=\"form-control\">";
                            // line 927
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "array", false, true, false, 927), (($__internal_compile_86 = $context["language"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["language_id"] ?? null) : null), [], "array", true, true, false, 927)) ? ((($__internal_compile_87 = (($__internal_compile_88 = (($__internal_compile_89 = $context["product_attribute"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["product_attribute_description"] ?? null) : null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88[(($__internal_compile_90 = $context["language"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["text"] ?? null) : null)) : (""));
                            echo "</textarea>
                          </div>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 930
                        echo "                        </td>
                        <td class=\"text-left\">
                          <button type=\"button\"
                            onclick=\"\$('#attribute-row";
                        // line 933
                        echo ($context["attribute_row"] ?? null);
                        echo "').remove(); \$(\\'.tooltip.in\\').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 934
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button>
                        </td>
                      </tr>
                    </tbody>
                    ";
                        // line 939
                        $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
                        // line 940
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 941
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\">
                          <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 946
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
                // line 956
                echo "
              <!-- option tab -->
              ";
                // line 958
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 958)) {
                    // line 959
                    echo "              <input type=\"hidden\" name=\"product_option_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-option\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                      ";
                    // line 964
                    $context["option_row"] = 0;
                    // line 965
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 966
                        echo "
                      <li><a href=\"#tab-option";
                        // line 967
                        echo ($context["option_row"] ?? null);
                        echo "\" data-toggle=\"tab\" id=\"option";
                        echo ($context["option_row"] ?? null);
                        echo "\"><i
                            class=\"fa fa-trash\"
                            onclick=\"\$('a[href=\\'#tab-option";
                        // line 969
                        echo ($context["option_row"] ?? null);
                        echo "\\']').parent().remove(); \$('#tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "').remove(); \$('#option a:first').tab('show');\"></i>
                          ";
                        // line 970
                        echo (($__internal_compile_91 = $context["product_option"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null);
                        echo "</a></li>
                      ";
                        // line 971
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 972
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 973
                    echo "                      <li>
                        <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
                    // line 974
                    echo ($context["button_add_option"] ?? null);
                    echo "\"
                          id=\"input-option\" class=\"form-control\" />
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\">
                      ";
                    // line 981
                    $context["option_row"] = 0;
                    // line 982
                    echo "                      ";
                    $context["option_value_row"] = 0;
                    // line 983
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                        // line 984
                        echo "                      <div class=\"tab-pane\" id=\"tab-option";
                        echo ($context["option_row"] ?? null);
                        echo "\">
                        <input type=\"hidden\" name=\"product_option[";
                        // line 985
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_id]\"
                          value=\"";
                        // line 986
                        echo (($__internal_compile_92 = $context["product_option"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["product_option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 987
                        echo ($context["option_row"] ?? null);
                        echo "][name]\"
                          value=\"";
                        // line 988
                        echo (($__internal_compile_93 = $context["product_option"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 989
                        echo ($context["option_row"] ?? null);
                        echo "][option_id]\"
                          value=\"";
                        // line 990
                        echo (($__internal_compile_94 = $context["product_option"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["option_id"] ?? null) : null);
                        echo "\" />
                        <input type=\"hidden\" name=\"product_option[";
                        // line 991
                        echo ($context["option_row"] ?? null);
                        echo "][type]\"
                          value=\"";
                        // line 992
                        echo (($__internal_compile_95 = $context["product_option"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["type"] ?? null) : null);
                        echo "\" />
                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-required";
                        // line 995
                        echo ($context["option_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_required"] ?? null);
                        echo "</label>
                          <div class=\"col-sm-9\">
                            <select name=\"product_option[";
                        // line 997
                        echo ($context["option_row"] ?? null);
                        echo "][required]\"
                              id=\"input-required";
                        // line 998
                        echo ($context["option_row"] ?? null);
                        echo "\" class=\"form-control\">
                              ";
                        // line 999
                        if ((($__internal_compile_96 = $context["product_option"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["required"] ?? null) : null)) {
                            // line 1000
                            echo "                              <option value=\"1\" selected=\"selected\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\">";
                            // line 1001
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        } else {
                            // line 1003
                            echo "                              <option value=\"1\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                            // line 1004
                            echo ($context["text_no"] ?? null);
                            echo "</option>
                              ";
                        }
                        // line 1006
                        echo "                            </select>
                          </div>
                        </div>

                        ";
                        // line 1010
                        if (((($__internal_compile_97 = $context["product_option"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["type"] ?? null) : null) == "text")) {
                            // line 1011
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1013
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 1015
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 1016
                            echo (($__internal_compile_98 = $context["product_option"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 1017
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 1021
                        echo "                        ";
                        if (((($__internal_compile_99 = $context["product_option"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["type"] ?? null) : null) == "textarea")) {
                            // line 1022
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1024
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <textarea name=\"product_option[";
                            // line 1026
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\" rows=\"5\"
                              placeholder=\"";
                            // line 1027
                            echo ($context["entry_option_value"] ?? null);
                            echo "\" id=\"input-value";
                            echo ($context["option_row"] ?? null);
                            echo "\"
                              class=\"form-control\">";
                            // line 1028
                            echo (($__internal_compile_100 = $context["product_option"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["option_value"] ?? null) : null);
                            echo "</textarea>
                          </div>
                        </div>
                        ";
                        }
                        // line 1032
                        echo "                        ";
                        if (((($__internal_compile_101 = $context["product_option"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["type"] ?? null) : null) == "file")) {
                            // line 1033
                            echo "                        <div class=\"form-group\" style=\"display: none;\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1035
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"product_option[";
                            // line 1037
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                              value=\"";
                            // line 1038
                            echo (($__internal_compile_102 = $context["product_option"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                              id=\"input-value";
                            // line 1039
                            echo ($context["option_row"] ?? null);
                            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                        ";
                        }
                        // line 1043
                        echo "                        ";
                        if (((($__internal_compile_103 = $context["product_option"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["type"] ?? null) : null) == "date")) {
                            // line 1044
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1046
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-3\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1049
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1050
                            echo (($__internal_compile_104 = $context["product_option"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                            // line 1051
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
                        // line 1059
                        echo "                        ";
                        if (((($__internal_compile_105 = $context["product_option"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["type"] ?? null) : null) == "time")) {
                            // line 1060
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1062
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1065
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1066
                            echo (($__internal_compile_106 = $context["product_option"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"HH:mm\" id=\"input-value";
                            // line 1067
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
                        // line 1075
                        echo "                        ";
                        if (((($__internal_compile_107 = $context["product_option"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["type"] ?? null) : null) == "datetime")) {
                            // line 1076
                            echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-3 control-label\"
                            for=\"input-value";
                            // line 1078
                            echo ($context["option_row"] ?? null);
                            echo "\">";
                            echo ($context["entry_option_value"] ?? null);
                            echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                            // line 1081
                            echo ($context["option_row"] ?? null);
                            echo "][option_value]\"
                                value=\"";
                            // line 1082
                            echo (($__internal_compile_108 = $context["product_option"]) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["option_value"] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["entry_option_value"] ?? null);
                            echo "\"
                                data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                            // line 1083
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
                        // line 1092
                        echo "                        ";
                        if ((((((($__internal_compile_109 = $context["product_option"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["type"] ?? null) : null) == "select") || ((($__internal_compile_110 = $context["product_option"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["type"] ?? null) : null) == "radio")) || ((($__internal_compile_111 = $context["product_option"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["type"] ?? null) : null) == "checkbox")) || ((($__internal_compile_112 = $context["product_option"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["type"] ?? null) : null) == "image"))) {
                            // line 1093
                            echo "                        <div class=\"table-responsive\">
                          <table id=\"option-value";
                            // line 1094
                            echo ($context["option_row"] ?? null);
                            echo "\"
                            class=\"table table-striped table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                            // line 1098
                            echo ($context["entry_option_value"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1099
                            echo ($context["entry_quantity"] ?? null);
                            echo "</td>
                                <td class=\"text-left\">";
                            // line 1100
                            echo ($context["entry_subtract"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1101
                            echo ($context["entry_price"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1102
                            echo ($context["entry_option_points"] ?? null);
                            echo "</td>
                                <td class=\"text-right\">";
                            // line 1103
                            echo ($context["entry_weight"] ?? null);
                            echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            ";
                            // line 1107
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_113 = $context["product_option"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["product_option_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                                // line 1108
                                echo "                            <tbody id=\"option-value-row";
                                echo ($context["option_value_row"] ?? null);
                                echo "\">
                              <tr>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1111
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][option_value_id]\"
                                    style=\"min-width: 60px;\" class=\"form-control\">
                                    ";
                                // line 1113
                                if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_114 = $context["product_option"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["option_id"] ?? null) : null), [], "array", true, true, false, 1113)) {
                                    // line 1114
                                    echo "                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_115 = ($context["option_values"] ?? null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[(($__internal_compile_116 = $context["product_option"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["option_id"] ?? null) : null)] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                        // line 1115
                                        echo "                                    ";
                                        if (((($__internal_compile_117 = $context["option_value"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["option_value_id"] ?? null) : null) == (($__internal_compile_118 = $context["product_option_value"]) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["option_value_id"] ?? null) : null))) {
                                            // line 1116
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_119 = $context["option_value"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["option_value_id"] ?? null) : null);
                                            echo "\" selected=\"selected\">
                                      ";
                                            // line 1117
                                            echo (($__internal_compile_120 = $context["option_value"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["name"] ?? null) : null);
                                            echo "</option>
                                    ";
                                        } else {
                                            // line 1119
                                            echo "                                    <option value=\"";
                                            echo (($__internal_compile_121 = $context["option_value"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["option_value_id"] ?? null) : null);
                                            echo "\">";
                                            echo (($__internal_compile_122 = $context["option_value"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["name"] ?? null) : null);
                                            echo "
                                    </option>
                                    ";
                                        }
                                        // line 1122
                                        echo "                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 1123
                                    echo "                                    ";
                                }
                                // line 1124
                                echo "                                  </select>
                                  <input type=\"hidden\"
                                    name=\"product_option[";
                                // line 1126
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][product_option_value_id]\"
                                    value=\"";
                                // line 1127
                                echo (($__internal_compile_123 = $context["product_option_value"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["product_option_value_id"] ?? null) : null);
                                echo "\" />
                                </td>
                                <td class=\"text-right\"><input type=\"text\"
                                    name=\"product_option[";
                                // line 1130
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][quantity]\"
                                    value=\"";
                                // line 1131
                                echo (($__internal_compile_124 = $context["product_option_value"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["quantity"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
                                <td class=\"text-left\"><select
                                    name=\"product_option[";
                                // line 1133
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][subtract]\"
                                    class=\"form-control\">
                                    ";
                                // line 1135
                                if ((($__internal_compile_125 = $context["product_option_value"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["subtract"] ?? null) : null)) {
                                    // line 1136
                                    echo "                                    <option value=\"1\" selected=\"selected\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\">";
                                    // line 1137
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                } else {
                                    // line 1139
                                    echo "                                    <option value=\"1\">";
                                    echo ($context["text_yes"] ?? null);
                                    echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
                                    // line 1140
                                    echo ($context["text_no"] ?? null);
                                    echo "</option>
                                    ";
                                }
                                // line 1142
                                echo "                                  </select></td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1144
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1146
                                if (((($__internal_compile_126 = $context["product_option_value"]) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["price_prefix"] ?? null) : null) == "+")) {
                                    // line 1147
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1149
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1151
                                echo "                                    ";
                                if (((($__internal_compile_127 = $context["product_option_value"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["price_prefix"] ?? null) : null) == "-")) {
                                    // line 1152
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1154
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1156
                                echo "                                  </select>

                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1159
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][price]\"
                                    value=\"";
                                // line 1160
                                echo (($__internal_compile_128 = $context["product_option_value"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["price"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_price"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1164
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1166
                                if (((($__internal_compile_129 = $context["product_option_value"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["points_prefix"] ?? null) : null) == "+")) {
                                    // line 1167
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1169
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1171
                                echo "                                    ";
                                if (((($__internal_compile_130 = $context["product_option_value"]) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["points_prefix"] ?? null) : null) == "-")) {
                                    // line 1172
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1174
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1176
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1178
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][points]\"
                                    value=\"";
                                // line 1179
                                echo (($__internal_compile_131 = $context["product_option_value"]) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131["points"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_points"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-right\"><select
                                    name=\"product_option[";
                                // line 1183
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight_prefix]\"
                                    class=\"form-control\">
                                    ";
                                // line 1185
                                if (((($__internal_compile_132 = $context["product_option_value"]) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["weight_prefix"] ?? null) : null) == "+")) {
                                    // line 1186
                                    echo "                                    <option value=\"+\" selected=\"selected\">+</option>
                                    ";
                                } else {
                                    // line 1188
                                    echo "                                    <option value=\"+\">+</option>
                                    ";
                                }
                                // line 1190
                                echo "                                    ";
                                if (((($__internal_compile_133 = $context["product_option_value"]) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["weight_prefix"] ?? null) : null) == "-")) {
                                    // line 1191
                                    echo "                                    <option value=\"-\" selected=\"selected\">-</option>
                                    ";
                                } else {
                                    // line 1193
                                    echo "                                    <option value=\"-\">-</option>
                                    ";
                                }
                                // line 1195
                                echo "                                  </select>
                                  <input type=\"text\"
                                    name=\"product_option[";
                                // line 1197
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][weight]\"
                                    value=\"";
                                // line 1198
                                echo (($__internal_compile_134 = $context["product_option_value"]) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134["weight"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo ($context["entry_weight"] ?? null);
                                echo "\"
                                    class=\"form-control\" />
                                </td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"\$('#option-value-row";
                                // line 1202
                                echo ($context["option_value_row"] ?? null);
                                echo "').remove();\"
                                    data-toggle=\"tooltip\" title=\"";
                                // line 1203
                                echo ($context["button_remove"] ?? null);
                                echo "\" class=\"btn btn-danger\"><i
                                      class=\"fa fa-minus-circle\"></i></button>
                                </td>
                              </tr>
                            </tbody>
                            ";
                                // line 1208
                                $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                                // line 1209
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1210
                            echo "                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-left\">
                                  <button type=\"button\" onclick=\"addOptionValue('";
                            // line 1214
                            echo ($context["option_row"] ?? null);
                            echo "');\"
                                    data-toggle=\"tooltip\" title=\"";
                            // line 1215
                            echo ($context["button_add_option_value"] ?? null);
                            echo "\"
                                    class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <select id=\"option-values";
                            // line 1222
                            echo ($context["option_row"] ?? null);
                            echo "\" style=\"display: none;\">
                          ";
                            // line 1223
                            if (twig_get_attribute($this->env, $this->source, ($context["option_values"] ?? null), (($__internal_compile_135 = $context["product_option"]) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["option_id"] ?? null) : null), [], "array", true, true, false, 1223)) {
                                // line 1224
                                echo "                          ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_136 = ($context["option_values"] ?? null)) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136[(($__internal_compile_137 = $context["product_option"]) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137["option_id"] ?? null) : null)] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 1225
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
                                // line 1227
                                echo "                          ";
                            }
                            // line 1228
                            echo "                        </select>
                        ";
                        }
                        // line 1230
                        echo "                      </div>
                      <!--tab-pane-->
                      ";
                        // line 1232
                        $context["option_row"] = (($context["option_row"] ?? null) + 1);
                        // line 1233
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1234
                    echo "                    </div>
                    <!--tab-content-->
                  </div>
                  <!--col-sm-9-->
                </div>
                <!--Row-->
              </div>
              ";
                }
                // line 1242
                echo "
              <!-- discount tab -->
              ";
                // line 1244
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 1244)) {
                    // line 1245
                    echo "              <input type=\"hidden\" name=\"product_discount_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-discount\">
                <div class=\"table-responsive\">
                  <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1251
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1252
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1253
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1254
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1255
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1256
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1260
                    $context["discount_row"] = 0;
                    // line 1261
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
                        // line 1262
                        echo "                    <tbody id=\"discount-row";
                        echo ($context["discount_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_discount[";
                        // line 1264
                        echo ($context["discount_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1266
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1267
                            echo "                            ";
                            if (((($__internal_compile_140 = $context["customer_group"]) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140["customer_group_id"] ?? null) : null) == (($__internal_compile_141 = $context["product_discount"]) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["customer_group_id"] ?? null) : null))) {
                                // line 1268
                                echo "                            <option value=\"";
                                echo (($__internal_compile_142 = $context["customer_group"]) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1269
                                echo (($__internal_compile_143 = $context["customer_group"]) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1271
                                echo "                            <option value=\"";
                                echo (($__internal_compile_144 = $context["customer_group"]) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_145 = $context["customer_group"]) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1274
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1275
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1276
                        echo ($context["discount_row"] ?? null);
                        echo "][quantity]\"
                            value=\"";
                        // line 1277
                        echo (($__internal_compile_146 = $context["product_discount"]) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146["quantity"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1279
                        echo ($context["discount_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1280
                        echo (($__internal_compile_147 = $context["product_discount"]) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_priority"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                        // line 1282
                        echo ($context["discount_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1283
                        echo (($__internal_compile_148 = $context["product_discount"]) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
                        // line 1287
                        echo ($context["discount_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1288
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
                        // line 1297
                        echo ($context["discount_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1298
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
                        // line 1306
                        echo ($context["discount_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1307
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1311
                        $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
                        // line 1312
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1313
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"6\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1317
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
                // line 1326
                echo "
              <!--tab-special-->
              ";
                // line 1328
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 1328)) {
                    // line 1329
                    echo "              <input type=\"hidden\" name=\"product_special_tab\" value=\"1\">
              <div class=\"tab-pane\" id=\"tab-special\">
                <div class=\"table-responsive\">
                  <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1335
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:70px\">";
                    // line 1336
                    echo ($context["entry_priority"] ?? null);
                    echo "</td>
                        <td class=\"text-right\" style=\"min-width:80px\">";
                    // line 1337
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1338
                    echo ($context["entry_date_start"] ?? null);
                    echo "</td>
                        <td class=\"text-left\">";
                    // line 1339
                    echo ($context["entry_date_end"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1343
                    $context["special_row"] = 0;
                    // line 1344
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
                        // line 1345
                        echo "                    <tbody id=\"special-row";
                        echo ($context["special_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\"><select name=\"product_special[";
                        // line 1347
                        echo ($context["special_row"] ?? null);
                        echo "][customer_group_id]\"
                            class=\"form-control\">
                            ";
                        // line 1349
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 1350
                            echo "                            ";
                            if (((($__internal_compile_151 = $context["customer_group"]) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["customer_group_id"] ?? null) : null) == (($__internal_compile_152 = $context["product_special"]) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152["customer_group_id"] ?? null) : null))) {
                                // line 1351
                                echo "                            <option value=\"";
                                echo (($__internal_compile_153 = $context["customer_group"]) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["customer_group_id"] ?? null) : null);
                                echo "\" selected=\"selected\">
                              ";
                                // line 1352
                                echo (($__internal_compile_154 = $context["customer_group"]) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["name"] ?? null) : null);
                                echo "</option>
                            ";
                            } else {
                                // line 1354
                                echo "                            <option value=\"";
                                echo (($__internal_compile_155 = $context["customer_group"]) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155["customer_group_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_compile_156 = $context["customer_group"]) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["name"] ?? null) : null);
                                echo "
                            </option>
                            ";
                            }
                            // line 1357
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1358
                        echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1359
                        echo ($context["special_row"] ?? null);
                        echo "][priority]\"
                            value=\"";
                        // line 1360
                        echo (($__internal_compile_157 = $context["product_special"]) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["priority"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                        // line 1362
                        echo ($context["special_row"] ?? null);
                        echo "][price]\"
                            value=\"";
                        // line 1363
                        echo (($__internal_compile_158 = $context["product_special"]) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158["price"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
                        // line 1367
                        echo ($context["special_row"] ?? null);
                        echo "][date_start]\"
                              value=\"";
                        // line 1368
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
                        // line 1377
                        echo ($context["special_row"] ?? null);
                        echo "][date_end]\"
                              value=\"";
                        // line 1378
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
                        // line 1386
                        echo ($context["special_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\"
                            title=\"";
                        // line 1387
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1391
                        $context["special_row"] = (($context["special_row"] ?? null) + 1);
                        // line 1392
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1393
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"5\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1397
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
                // line 1406
                echo "
              <!--tab-image-->
              ";
                // line 1408
                $context["image_row"] = 0;
                // line 1409
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "images", [], "array", true, true, false, 1409)) {
                    // line 1410
                    echo "              <div class=\"tab-pane\" id=\"tab-image\">
                <div class=\"table-responsive\">
                  <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
                    // line 1415
                    echo ($context["entry_image"] ?? null);
                    echo "</td>
                        <td class=\"text-right\">";
                    // line 1416
                    echo ($context["entry_sort_order"] ?? null);
                    echo "</td>
                        <td></td>
                      </tr>
                    </thead>
                    ";
                    // line 1420
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                        // line 1421
                        echo "                    <tbody id=\"image-row";
                        echo ($context["image_row"] ?? null);
                        echo "\">
                      <tr>
                        <td class=\"text-left\">
                          <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                            <img id=\"thumb";
                        // line 1425
                        echo ($context["image_row"] ?? null);
                        echo "-thumb-image\"
                              src=\"";
                        // line 1426
                        echo (((($__internal_compile_161 = $context["product_image"]) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161["thumb"] ?? null) : null)) ? ((($__internal_compile_162 = $context["product_image"]) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["thumb"] ?? null) : null)) : (($context["placeholder"] ?? null)));
                        echo "\" alt=\"\"
                              title=\"\" />
                          </div>
                          <input type=\"hidden\" name=\"product_image[";
                        // line 1429
                        echo ($context["image_row"] ?? null);
                        echo "][image]\"
                            value=\"";
                        // line 1430
                        echo (($__internal_compile_163 = $context["product_image"]) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["thumg_img"] ?? null) : null);
                        echo "\" id=\"thumb";
                        echo ($context["image_row"] ?? null);
                        echo "-target-image\" />
                          <div class=\"btn-group imgoption\" style=\"width: 41%;\">
                            <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button>
                          </div>
                        </td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
                        // line 1435
                        echo ($context["image_row"] ?? null);
                        echo "][sort_order]\"
                            value=\"";
                        // line 1436
                        echo (($__internal_compile_164 = $context["product_image"]) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164["sort_order"] ?? null) : null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "\"
                            class=\"form-control\" /></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                        // line 1438
                        echo ($context["image_row"] ?? null);
                        echo "').remove();\"
                            data-toggle=\"tooltip\" title=\"";
                        // line 1439
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i
                              class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                    </tbody>
                    ";
                        // line 1443
                        $context["image_row"] = (($context["image_row"] ?? null) + 1);
                        // line 1444
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1445
                    echo "                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                            title=\"";
                    // line 1449
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
                // line 1458
                echo "
              ";
                // line 1459
                if (twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "custom-field", [], "array", true, true, false, 1459)) {
                    // line 1460
                    echo "              <div id=\"tab-custom-field\" class=\"tab-pane\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"vtab-option\">
                      ";
                    // line 1464
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1465
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1466
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1467
                            echo "                      <li>
                        <a href=\"#wktab-option-";
                            // line 1468
                            echo ($context["tabCount"] ?? null);
                            echo "\" data-toggle=\"tab\" id=\"wkoption-";
                            echo ($context["tabCount"] ?? null);
                            echo "\"
                          field-id=\"wkoption-";
                            // line 1469
                            echo (($__internal_compile_165 = $context["tabs"]) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["fieldId"] ?? null) : null);
                            echo "\"><i class=\"fa fa-minus-circle\"
                            onclick=\"\$('#wkoption-";
                            // line 1470
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "').remove(); \$('#vtab-option li a:first').trigger('click'); return false;\"></i>";
                            echo (($__internal_compile_166 = $context["tabs"]) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["fieldName"] ?? null) : null);
                            echo "</a>
                      </li>
                      ";
                            // line 1472
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            // line 1473
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1474
                        echo "                      ";
                    }
                    // line 1475
                    echo "                      <li id=\"optionSelector\">
                        <select name=\"wkcustomfield\" class=\"form-control\">
                          ";
                    // line 1477
                    if ( !twig_test_empty(($context["wkcustomFields"] ?? null))) {
                        // line 1478
                        echo "                          <option value=\"\"></option>
                          ";
                        // line 1479
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkcustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 1480
                            echo "                          <option value=\"";
                            echo (($__internal_compile_167 = $context["field"]) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167["id"] ?? null) : null);
                            echo "\" data-type=\"";
                            echo (($__internal_compile_168 = $context["field"]) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["fieldType"] ?? null) : null);
                            echo "\"
                            data-name=\"";
                            // line 1481
                            echo (($__internal_compile_169 = $context["field"]) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169["fieldName"] ?? null) : null);
                            echo "\" data-des=\"";
                            echo (($__internal_compile_170 = $context["field"]) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170["fieldDescription"] ?? null) : null);
                            echo "\"
                            title=\"";
                            // line 1482
                            echo (($__internal_compile_171 = $context["field"]) && is_array($__internal_compile_171) || $__internal_compile_171 instanceof ArrayAccess ? ($__internal_compile_171["fieldDescription"] ?? null) : null);
                            echo "\" data-isRequired=\"";
                            echo (($__internal_compile_172 = $context["field"]) && is_array($__internal_compile_172) || $__internal_compile_172 instanceof ArrayAccess ? ($__internal_compile_172["isRequired"] ?? null) : null);
                            echo "\">
                            ";
                            // line 1483
                            echo (($__internal_compile_173 = $context["field"]) && is_array($__internal_compile_173) || $__internal_compile_173 instanceof ArrayAccess ? ($__internal_compile_173["fieldName"] ?? null) : null);
                            echo "
                          </option>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1486
                        echo "                          ";
                    }
                    // line 1487
                    echo "
                        </select>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-sm-9\">
                    <div class=\"tab-content\" id=\"wk_customfieldcontent\">
                      ";
                    // line 1494
                    $context["tabCount"] = 0;
                    echo " ";
                    $context["wkcustom_option_row"] = 0;
                    // line 1495
                    echo "                      ";
                    if ( !twig_test_empty(($context["wkPreCustomFields"] ?? null))) {
                        // line 1496
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                            // line 1497
                            echo "                      <div id=\"wktab-option-";
                            echo ($context["tabCount"] ?? null);
                            echo "\" class=\"tab-pane\">
                        <div class=\"alert alert-info\">
                          <i class=\"fa fa-info-circle\"></i>
                          ";
                            // line 1500
                            echo (($__internal_compile_174 = $context["tabs"]) && is_array($__internal_compile_174) || $__internal_compile_174 instanceof ArrayAccess ? ($__internal_compile_174["fieldDes"] ?? null) : null);
                            echo "
                        </div>
                        ";
                            // line 1502
                            if ((array_key_exists("error", $context) && (($context["error"] ?? null) == (($__internal_compile_175 = $context["tabs"]) && is_array($__internal_compile_175) || $__internal_compile_175 instanceof ArrayAccess ? ($__internal_compile_175["fieldId"] ?? null) : null)))) {
                                // line 1503
                                echo "                        <div class=\"alert alert-danger\">
                          <i class=\"fa fa-exclamation-circle\"></i>
                          ";
                                // line 1505
                                echo ($context["error_warning_mandetory"] ?? null);
                                echo "
                        </div>
                        ";
                            }
                            // line 1508
                            echo "                        <input type=\"hidden\" name=\"product_custom_field[";
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_name]\"
                          value=\"";
                            // line 1509
                            echo (($__internal_compile_176 = $context["tabs"]) && is_array($__internal_compile_176) || $__internal_compile_176 instanceof ArrayAccess ? ($__internal_compile_176["fieldName"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1510
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_type]\"
                          value=\"";
                            // line 1511
                            echo (($__internal_compile_177 = $context["tabs"]) && is_array($__internal_compile_177) || $__internal_compile_177 instanceof ArrayAccess ? ($__internal_compile_177["fieldType"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1512
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_id]\"
                          value=\"";
                            // line 1513
                            echo (($__internal_compile_178 = $context["tabs"]) && is_array($__internal_compile_178) || $__internal_compile_178 instanceof ArrayAccess ? ($__internal_compile_178["fieldId"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\" name=\"product_custom_field[";
                            // line 1514
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_des]\"
                          value=\"";
                            // line 1515
                            echo (($__internal_compile_179 = $context["tabs"]) && is_array($__internal_compile_179) || $__internal_compile_179 instanceof ArrayAccess ? ($__internal_compile_179["fieldDes"] ?? null) : null);
                            echo "\">
                        <input type=\"hidden\"
                          name=\"product_custom_field[";
                            // line 1517
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_is_required]\"
                          value=\"";
                            // line 1518
                            echo (($__internal_compile_180 = $context["tabs"]) && is_array($__internal_compile_180) || $__internal_compile_180 instanceof ArrayAccess ? ($__internal_compile_180["isRequired"] ?? null) : null);
                            echo "\">

                        ";
                            // line 1520
                            if (((($__internal_compile_181 = $context["tabs"]) && is_array($__internal_compile_181) || $__internal_compile_181 instanceof ArrayAccess ? ($__internal_compile_181["fieldType"] ?? null) : null) == "select")) {
                                // line 1521
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
                                // line 1525
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\">
                              ";
                                // line 1526
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_183 = $context["tabs"]) && is_array($__internal_compile_183) || $__internal_compile_183 instanceof ArrayAccess ? ($__internal_compile_183["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1527
                                    echo "                              <option value=\"";
                                    echo (($__internal_compile_184 = $context["options"]) && is_array($__internal_compile_184) || $__internal_compile_184 instanceof ArrayAccess ? ($__internal_compile_184["optionId"] ?? null) : null);
                                    echo "\" ";
                                    if ( !twig_test_empty((($__internal_compile_185 = $context["tabs"]) && is_array($__internal_compile_185) || $__internal_compile_185 instanceof ArrayAccess ? ($__internal_compile_185["fieldOptions"] ?? null) : null))) {
                                        // line 1528
                                        echo "                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_186 = $context["tabs"]) && is_array($__internal_compile_186) || $__internal_compile_186 instanceof ArrayAccess ? ($__internal_compile_186["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1529
                                            echo "                                ";
                                            if (((($__internal_compile_187 = $context["option"]) && is_array($__internal_compile_187) || $__internal_compile_187 instanceof ArrayAccess ? ($__internal_compile_187["optionId"] ?? null) : null) == (($__internal_compile_188 = $context["options"]) && is_array($__internal_compile_188) || $__internal_compile_188 instanceof ArrayAccess ? ($__internal_compile_188["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "selected";
                                            }
                                            // line 1530
                                            echo "                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo ">
                                ";
                                    // line 1531
                                    echo (($__internal_compile_189 = $context["options"]) && is_array($__internal_compile_189) || $__internal_compile_189 instanceof ArrayAccess ? ($__internal_compile_189["optionValue"] ?? null) : null);
                                    echo "
                              </option>
                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1534
                                echo "                            </select>
                          </div>
                        </div>

                        ";
                            } elseif ((((($__internal_compile_190 =                             // line 1538
$context["tabs"]) && is_array($__internal_compile_190) || $__internal_compile_190 instanceof ArrayAccess ? ($__internal_compile_190["fieldType"] ?? null) : null) == "checkbox") || ((($__internal_compile_191 = $context["tabs"]) && is_array($__internal_compile_191) || $__internal_compile_191 instanceof ArrayAccess ? ($__internal_compile_191["fieldType"] ?? null) : null) == "radio"))) {
                                // line 1539
                                echo "                        <div class=\"form-group  ";
                                if (((($__internal_compile_192 = $context["tabs"]) && is_array($__internal_compile_192) || $__internal_compile_192 instanceof ArrayAccess ? ($__internal_compile_192["isRequired"] ?? null) : null) == "yes")) {
                                    echo " ";
                                    echo "required";
                                }
                                echo "\">
                          <label class=\"control-label col-sm-3\">Select option:</label>
                          <div class=\"col-sm-9\">
                            ";
                                // line 1542
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_193 = $context["tabs"]) && is_array($__internal_compile_193) || $__internal_compile_193 instanceof ArrayAccess ? ($__internal_compile_193["preFieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                                    // line 1543
                                    echo "
                            <div class=\"radio checkbox\">
                              <label for=\"";
                                    // line 1545
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_194 = $context["options"]) && is_array($__internal_compile_194) || $__internal_compile_194 instanceof ArrayAccess ? ($__internal_compile_194["optionId"] ?? null) : null));
                                    echo "\">
                                <input type='";
                                    // line 1546
                                    echo (($__internal_compile_195 = $context["tabs"]) && is_array($__internal_compile_195) || $__internal_compile_195 instanceof ArrayAccess ? ($__internal_compile_195["fieldType"] ?? null) : null);
                                    echo "' id=\"";
                                    echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_196 = $context["options"]) && is_array($__internal_compile_196) || $__internal_compile_196 instanceof ArrayAccess ? ($__internal_compile_196["optionId"] ?? null) : null));
                                    echo "\"
                                  value=\"";
                                    // line 1547
                                    echo (($__internal_compile_197 = $context["options"]) && is_array($__internal_compile_197) || $__internal_compile_197 instanceof ArrayAccess ? ($__internal_compile_197["optionId"] ?? null) : null);
                                    echo "\"
                                  name=\"product_custom_field[";
                                    // line 1548
                                    echo ($context["wkcustom_option_row"] ?? null);
                                    echo "][custom_field_value][]\"
                                  ";
                                    // line 1549
                                    if ( !twig_test_empty((($__internal_compile_198 = $context["tabs"]) && is_array($__internal_compile_198) || $__internal_compile_198 instanceof ArrayAccess ? ($__internal_compile_198["fieldOptions"] ?? null) : null))) {
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_199 = $context["tabs"]) && is_array($__internal_compile_199) || $__internal_compile_199 instanceof ArrayAccess ? ($__internal_compile_199["fieldOptions"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                            // line 1550
                                            echo "                                  ";
                                            if (((($__internal_compile_200 = $context["option"]) && is_array($__internal_compile_200) || $__internal_compile_200 instanceof ArrayAccess ? ($__internal_compile_200["optionId"] ?? null) : null) == (($__internal_compile_201 = $context["options"]) && is_array($__internal_compile_201) || $__internal_compile_201 instanceof ArrayAccess ? ($__internal_compile_201["optionId"] ?? null) : null))) {
                                                echo " ";
                                                echo "checked";
                                            }
                                            // line 1551
                                            echo "                                  ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " ";
                                    }
                                    echo " />
                                ";
                                    // line 1552
                                    echo (($__internal_compile_202 = $context["options"]) && is_array($__internal_compile_202) || $__internal_compile_202 instanceof ArrayAccess ? ($__internal_compile_202["optionValue"] ?? null) : null);
                                    echo "
                              </label>
                            </div>

                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1557
                                echo "                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_203 =                             // line 1559
$context["tabs"]) && is_array($__internal_compile_203) || $__internal_compile_203 instanceof ArrayAccess ? ($__internal_compile_203["fieldType"] ?? null) : null) == "text")) {
                                // line 1560
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
                                // line 1564
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                              value=\"";
                                // line 1565
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1565), "option_id", [], "array", true, true, false, 1565)) {
                                    echo " ";
                                    echo (($__internal_compile_205 = (($__internal_compile_206 = $context["tabs"]) && is_array($__internal_compile_206) || $__internal_compile_206 instanceof ArrayAccess ? ($__internal_compile_206["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_205) || $__internal_compile_205 instanceof ArrayAccess ? ($__internal_compile_205["option_id"] ?? null) : null);
                                }
                                echo "\" />
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_207 =                             // line 1568
$context["tabs"]) && is_array($__internal_compile_207) || $__internal_compile_207 instanceof ArrayAccess ? ($__internal_compile_207["fieldType"] ?? null) : null) == "textarea")) {
                                // line 1569
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
                                // line 1573
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\" rows=\"7\">
                                      ";
                                // line 1574
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1574), "option_id", [], "array", true, true, false, 1574)) {
                                    echo " ";
                                    echo (($__internal_compile_209 = (($__internal_compile_210 = $context["tabs"]) && is_array($__internal_compile_210) || $__internal_compile_210 instanceof ArrayAccess ? ($__internal_compile_210["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_209) || $__internal_compile_209 instanceof ArrayAccess ? ($__internal_compile_209["option_id"] ?? null) : null);
                                }
                                // line 1575
                                echo "                                    </textarea>
                          </div>
                        </div>
                        ";
                            } elseif (((($__internal_compile_211 =                             // line 1578
$context["tabs"]) && is_array($__internal_compile_211) || $__internal_compile_211 instanceof ArrayAccess ? ($__internal_compile_211["fieldType"] ?? null) : null) == "date")) {
                                // line 1579
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
                                // line 1584
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1585
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1585), "option_id", [], "array", true, true, false, 1585)) {
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
                            } elseif (((($__internal_compile_215 =                             // line 1595
$context["tabs"]) && is_array($__internal_compile_215) || $__internal_compile_215 instanceof ArrayAccess ? ($__internal_compile_215["fieldType"] ?? null) : null) == "time")) {
                                // line 1596
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
                                // line 1601
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1602
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1602), "option_id", [], "array", true, true, false, 1602)) {
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
                            } elseif (((($__internal_compile_219 =                             // line 1611
$context["tabs"]) && is_array($__internal_compile_219) || $__internal_compile_219 instanceof ArrayAccess ? ($__internal_compile_219["fieldType"] ?? null) : null) == "datetime")) {
                                // line 1612
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
                                // line 1617
                                echo ($context["wkcustom_option_row"] ?? null);
                                echo "][custom_field_value][]\"
                                value=\"";
                                // line 1618
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 1618), "option_id", [], "array", true, true, false, 1618)) {
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
                            // line 1629
                            echo "                      </div>
                      ";
                            // line 1630
                            $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                            echo " ";
                            $context["wkcustom_option_row"] = (($context["wkcustom_option_row"] ?? null) + 1);
                            // line 1631
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1632
                        echo "                      ";
                    }
                    // line 1633
                    echo "                    </div>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1638
                echo "              <div class=\"tab-pane\" id=\"tab-update-reason\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-required\">";
                // line 1640
                echo "Select a reason";
                echo "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"reason\" class=\"form-control\">
                      ";
                // line 1643
                if ( !twig_test_empty(($context["reasons"] ?? null))) {
                    // line 1644
                    echo "                      <option value=\"\"></option>
                      ";
                    // line 1645
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["reasons"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 1646
                        echo "                      <option value=\"";
                        echo (($__internal_compile_223 = $context["field"]) && is_array($__internal_compile_223) || $__internal_compile_223 instanceof ArrayAccess ? ($__internal_compile_223["id"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_compile_224 = $context["field"]) && is_array($__internal_compile_224) || $__internal_compile_224 instanceof ArrayAccess ? ($__internal_compile_224["fieldDescription"] ?? null) : null);
                        echo "\"
                        ";
                        // line 1647
                        if (((array_key_exists("reason", $context) && ($context["reason"] ?? null)) && (($context["reason"] ?? null) == (($__internal_compile_225 = $context["field"]) && is_array($__internal_compile_225) || $__internal_compile_225 instanceof ArrayAccess ? ($__internal_compile_225["id"] ?? null) : null)))) {
                            echo " ";
                            echo "selected";
                        }
                        echo ">
                        ";
                        // line 1648
                        echo (($__internal_compile_226 = $context["field"]) && is_array($__internal_compile_226) || $__internal_compile_226 instanceof ArrayAccess ? ($__internal_compile_226["title"] ?? null) : null);
                        echo "
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1651
                    echo "                      ";
                }
                // line 1652
                echo "                    </select>
                  </div>
                </div>
              </div>

              ";
                // line 1657
                if ((($context["wk_pricealert_status"] ?? null) && ($context["wk_pricealert_allowed_seller"] ?? null))) {
                    // line 1658
                    echo "              <div class=\"tab-pane\" id=\"tab-pricealert\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-pricealert\">";
                    // line 1660
                    echo ($context["text_palert"] ?? null);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"pricealert\" id=\"input-prigetListcealert\" class=\"form-control\">
                      ";
                    // line 1663
                    if (($context["is_alert_product"] ?? null)) {
                        // line 1664
                        echo "                      <option value=\"1\" selected=\"selected\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\">";
                        // line 1665
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    } else {
                        // line 1667
                        echo "                      <option value=\"1\">";
                        echo ($context["text_enable"] ?? null);
                        echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                        // line 1668
                        echo ($context["text_disable"] ?? null);
                        echo "</option>
                      ";
                    }
                    // line 1670
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 1675
                echo "
            </div>
            <!--tab-content-->

          </form>
          ";
            } else {
                // line 1681
                echo "          <div class=\"text-danger\">
            ";
                // line 1682
                echo ($context["text_access"] ?? null);
                echo "
          </div>
          ";
            }
            // line 1685
            echo "        </fieldset>

      </div>
      <!--content-->
      ";
            // line 1689
            echo ($context["column_right"] ?? null);
            echo "
    </div>
    <!--row-->
  </div>
  <!--container-->
  ";
        }
        // line 1695
        echo "
  <div id=\"category-modal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">";
        // line 1701
        echo ($context["heading_category"] ?? null);
        echo "</h4>
        </div>
        <div class=\"modal-body\" style=\"overflow:auto;\">
          <div id=\"category-modal-body\" style=\"display: inline-flex;width: 100%;\"></div>
        </div>
        <div class=\"modal-footer\">
          <!-- <div class=\"pull-left\">
          <button type=\"button\" class=\"btn btn-warning\" id=\"category-modal-back\">";
        // line 1708
        echo ($context["button_back"] ?? null);
        echo "</button>
        </div> -->
          <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 1711
        echo ($context["button_close"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 1717
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 1718
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
            // line 1728
            echo ($context["entry_list_header"] ?? null);
            echo "</h3>
          <table class=\"table table-bordered table-hover\" id=\"details\">
            <thead>
              <tr>
                <td>
                  ";
            // line 1733
            echo ($context["entry_name"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1736
            echo ($context["entry_quantity"] ?? null);
            echo "
                </td>
                <td>
                  ";
            // line 1739
            echo ($context["entry_price"] ?? null);
            echo "
                </td>
              <tr>
            </thead>
            <tbody>
              ";
            // line 1744
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellerDetail"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 1745
                echo "              <tr>
                <td>
                  ";
                // line 1747
                echo (($__internal_compile_227 = $context["detail"]) && is_array($__internal_compile_227) || $__internal_compile_227 instanceof ArrayAccess ? ($__internal_compile_227["name"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1750
                echo (($__internal_compile_228 = $context["detail"]) && is_array($__internal_compile_228) || $__internal_compile_228 instanceof ArrayAccess ? ($__internal_compile_228["quantity"] ?? null) : null);
                echo "
                </td>
                <td>
                  ";
                // line 1753
                echo (($__internal_compile_229 = $context["detail"]) && is_array($__internal_compile_229) || $__internal_compile_229 instanceof ArrayAccess ? ($__internal_compile_229["price"] ?? null) : null);
                echo "
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1757
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
        // line 1767
        echo "  <!-- script custom field -->

  <!-- membership codes starts here -->
  <script type=\"text/javascript\">
    ";
        // line 1771
        if ((array_key_exists("wk_seller_group_status", $context) && ($context["wk_seller_group_status"] ?? null))) {
            // line 1772
            echo "    listing_duration = 0;
    ";
            // line 1773
            if ((array_key_exists("relist_duration", $context) && ($context["relist_duration"] ?? null))) {
                // line 1774
                echo "    listing_duration = ";
                echo ($context["relist_duration"] ?? null);
                echo ";
    ";
            }
            // line 1776
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
        // line 1826
        echo "  </script>
  <!-- membership codes ends here -->

  <script type=\"text/javascript\">
    \$('#vtab-option a:first').tab('show');
    tabCount = '";
        // line 1831
        echo ($context["tabCount"] ?? null);
        echo "';
    wkcustom_option_row = '";
        // line 1832
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
        // line 1870
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><textarea class=\"form-control\" id=\"\" value=\"\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" row=\"7\"></textarea></div></div>';
        addtoBody(html);

      } else if (fieldType == \"text\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1877
        echo ($context["entry_enter_text"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" name=\"product_custom_field[' +
          wkcustom_option_row + '][custom_field_value][]\" /></div></div>';
        addtoBody(html);

      } else if (fieldType == \"time\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1884
        echo ($context["entry_select_time"] ?? null);
        echo "</label>';
        html +=
          '<div class=\"col-sm-6\"><div class=\"input-group time\"><input type=\"text\" name=\"product_custom_field[' +
          wkcustom_option_row +
          '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"datetime\") {

        html += '<div class=\"form-group '+required+'\"><label class=\"col-sm-3 control-label\">";
        // line 1894
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
        // line 1905
        echo ($context["entry_select_date"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group date\">';
        html += '<input type=\"text\" name=\"product_custom_field[";
        // line 1907
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
        // line 1997
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1998
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
        // line 2002
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
        // line 2034
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "links", [], "array", true, true, false, 2034) && (($__internal_compile_231 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_231) || $__internal_compile_231 instanceof ArrayAccess ? ($__internal_compile_231["links"] ?? null) : null))) {
            // line 2035
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
            // line 2052
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
            // line 2100
            if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2100) && (($__internal_compile_232 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_232) || $__internal_compile_232 instanceof ArrayAccess ? ($__internal_compile_232["attribute"] ?? null) : null))) {
                // line 2101
                echo "              addCategoryAttribute(item);
              ";
            }
            // line 2103
            echo "              // <!-- membership codes starts here -->
    
    ";
            // line 2105
            if (((($context["wk_seller_group_status"] ?? null) && array_key_exists("module_wk_seller_group_single_category", $context)) && ($context["module_wk_seller_group_single_category"] ?? null))) {
                // line 2106
                echo "   
    \$('input[name=\\'category\\']').val('');
    \$('#product-category'+item['value']).remove();
    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
                // line 2113
                if (($context["wk_seller_group_status"] ?? null)) {
                    // line 2114
                    echo "  getListingDuration(item['value']);
  ";
                }
                // line 2116
                echo "  ";
            } else {
                // line 2117
                echo "  \$('input[name=\\'category\\']').val('');
  \$('#product-category' + item['value']).remove();

  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' +
    item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');

  \$('#product-category div:odd').attr('class', 'odd');
  \$('#product-category div:even').attr('class', 'even');
  ";
            }
            // line 2126
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
        // line 2369
        echo "
  ";
        // line 2370
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2370) && (($__internal_compile_233 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_233) || $__internal_compile_233 instanceof ArrayAccess ? ($__internal_compile_233["attribute"] ?? null) : null))) {
            // line 2371
            echo "  <script type=\"text/javascript\">
    <!--
    var attribute_row = ";
            // line 2373
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
            // line 2462
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
      html += '    <td class=\"text-left\">';
      ";
            // line 2464
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2465
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
            // line 2467
            echo "      html += '    </td>';
      html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove(); \$(\\'.tooltip.in\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2468
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
        // line 2522
        echo "
  ";
        // line 2523
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2523) && (($__internal_compile_238 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_238) || $__internal_compile_238 instanceof ArrayAccess ? ($__internal_compile_238["options"] ?? null) : null))) {
            // line 2524
            echo "  <script type=\"text/javascript\">
    <!--
    var option_row = ";
            // line 2526
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
            // line 2644
            echo ($context["entry_required"] ?? null);
            echo "</label>';
      html += '   <div class=\"col-sm-9\"><select name=\"product_option[' + option_row +
        '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
      html += '       <option value=\"1\">";
            // line 2647
            echo ($context["text_yes"] ?? null);
            echo "</option>';
      html += '       <option value=\"0\">";
            // line 2648
            echo ($context["text_no"] ?? null);
            echo "</option>';
      html += '   </select></div>';
      html += ' </div>';

      if (item['type'] == 'text') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2654
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2655
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'textarea') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2661
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><textarea name=\"product_option[' + option_row + '][option_value]\" rows=\"5\" placeholder=\"";
            // line 2662
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
        html += ' </div>';
      }

      if (item['type'] == 'file') {
        html += ' <div class=\"form-group\" style=\"display: none;\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2668
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2669
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }

      if (item['type'] == 'date') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2675
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2676
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'time') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2682
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2683
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }

      if (item['type'] == 'datetime') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-3 control-label\" for=\"input-value' + option_row + '\">";
            // line 2689
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
        html += '   <div class=\"col-sm-9\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][option_value]\" value=\"\" placeholder=\"";
            // line 2690
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
            // line 2700
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2701
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-left\">";
            // line 2702
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2703
            echo ($context["entry_price"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2704
            echo ($context["entry_option_points"] ?? null);
            echo "</td>';
        html += '        <td class=\"text-right\">";
            // line 2705
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
            // line 2714
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
            // line 2762
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
            // line 2777
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Subtract
    html += '<td class=\"text-left\">';
    html += '<select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
    html += '<option value=\"1\">";
            // line 2783
            echo ($context["text_yes"] ?? null);
            echo "</option>';
    html += '<option value=\"0\">";
            // line 2784
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
            // line 2794
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
            // line 2803
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
            // line 2812
            echo ($context["entry_weight"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '</td>';

    // Remove Button
    html += '<td class=\"text-left\">';
    html += '<button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2817
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
        // line 2832
        echo "
  ";
        // line 2833
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "discount", [], "array", true, true, false, 2833) && (($__internal_compile_239 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_239) || $__internal_compile_239 instanceof ArrayAccess ? ($__internal_compile_239["discount"] ?? null) : null))) {
            // line 2834
            echo "  <script type=\"text/javascript\">
    <!--
    var discount_row = ";
            // line 2836
            echo ($context["discount_row"] ?? null);
            echo ";

    function addDiscount() {
      html = '<tbody id=\"discount-row' + discount_row + '\">';
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2843
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2844
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
            // line 2846
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 2847
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2848
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2849
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2850
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2851
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2852
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
        // line 2868
        echo "
  ";
        // line 2869
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "special", [], "array", true, true, false, 2869) && (($__internal_compile_242 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_242) || $__internal_compile_242 instanceof ArrayAccess ? ($__internal_compile_242["special"] ?? null) : null))) {
            // line 2870
            echo "  <script type=\"text/javascript\">
    <!--
    var special_row = ";
            // line 2872
            echo ($context["special_row"] ?? null);
            echo ";

    function addSpecial() {
      html = '<tbody id=\"special-row' + special_row + '\">'
      html += '<tr>';
      html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row +
        '][customer_group_id]\" class=\"form-control\">';
      ";
            // line 2879
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2880
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
            // line 2882
            echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
            // line 2883
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"0.00\" placeholder=\"";
            // line 2884
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 2885
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 2886
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 2887
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
        // line 2903
        echo "
  <script type=\"text/javascript\">
    <!--
    var image_row = ";
        // line 2906
        echo ($context["image_row"] ?? null);
        echo ";

    function addImage() {
      html = '<tbody id=\"image-row' + image_row + '\">';
      html += '  <tr>';
      html += '  <td class=\"text-left\"><div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\"><img id=\"thumb' + image_row + '-thumb-image\" src=\"";
        // line 2911
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\"/></div><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"thumb' + image_row + '-target-image\"/><div class=\"btn-group imgoption\" style=\"width: 41%;\"><button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">Remove</button></div></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2912
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2913
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
        // line 2967
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "attribute", [], "array", true, true, false, 2967) && (($__internal_compile_245 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_245) || $__internal_compile_245 instanceof ArrayAccess ? ($__internal_compile_245["attribute"] ?? null) : null))) {
            // line 2968
            echo "                addCategoryAttribute(item, category_id);
                ";
        }
        // line 2970
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["mp_allowproducttabs"] ?? null), "options", [], "array", true, true, false, 2970) && (($__internal_compile_246 = ($context["mp_allowproducttabs"] ?? null)) && is_array($__internal_compile_246) || $__internal_compile_246 instanceof ArrayAccess ? ($__internal_compile_246["options"] ?? null) : null))) {
            // line 2971
            echo "                addCategoryOption(item, category_id);
                ";
        }
        // line 2973
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
        // line 3014
        if (($context["wk_seller_group_status"] ?? null)) {
            // line 3015
            echo "    getListingDuration(\$(this).data(\"categoty-id\"));
    ";
        }
        // line 3017
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

    document.querySelectorAll('.subscription-section').forEach(el => el.style.display = 'none');

    if (value === 'ppd') {
      document.getElementById('ppd-section').style.display = 'block';
    } else if (value === 'ppm') {
      document.getElementById('ppm-section').style.display = 'block';
    } else if (value === 'commission') {
      document.getElementById('commission-section').style.display = 'block';
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
        // line 3089
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
        return array (  5885 => 3089,  5811 => 3017,  5807 => 3015,  5805 => 3014,  5762 => 2973,  5758 => 2971,  5755 => 2970,  5751 => 2968,  5749 => 2967,  5692 => 2913,  5688 => 2912,  5684 => 2911,  5676 => 2906,  5671 => 2903,  5652 => 2887,  5648 => 2886,  5644 => 2885,  5640 => 2884,  5636 => 2883,  5633 => 2882,  5622 => 2880,  5618 => 2879,  5608 => 2872,  5604 => 2870,  5602 => 2869,  5599 => 2868,  5580 => 2852,  5576 => 2851,  5572 => 2850,  5568 => 2849,  5564 => 2848,  5560 => 2847,  5557 => 2846,  5546 => 2844,  5542 => 2843,  5532 => 2836,  5528 => 2834,  5526 => 2833,  5523 => 2832,  5505 => 2817,  5497 => 2812,  5485 => 2803,  5473 => 2794,  5460 => 2784,  5456 => 2783,  5447 => 2777,  5429 => 2762,  5378 => 2714,  5366 => 2705,  5362 => 2704,  5358 => 2703,  5354 => 2702,  5350 => 2701,  5346 => 2700,  5333 => 2690,  5329 => 2689,  5320 => 2683,  5316 => 2682,  5307 => 2676,  5303 => 2675,  5294 => 2669,  5290 => 2668,  5281 => 2662,  5277 => 2661,  5268 => 2655,  5264 => 2654,  5255 => 2648,  5251 => 2647,  5245 => 2644,  5124 => 2526,  5120 => 2524,  5118 => 2523,  5115 => 2522,  5058 => 2468,  5055 => 2467,  5038 => 2465,  5034 => 2464,  5029 => 2462,  4937 => 2373,  4933 => 2371,  4931 => 2370,  4928 => 2369,  4683 => 2126,  4672 => 2117,  4669 => 2116,  4665 => 2114,  4663 => 2113,  4654 => 2106,  4652 => 2105,  4648 => 2103,  4644 => 2101,  4642 => 2100,  4591 => 2052,  4572 => 2035,  4570 => 2034,  4536 => 2002,  4525 => 1998,  4521 => 1997,  4428 => 1907,  4423 => 1905,  4409 => 1894,  4396 => 1884,  4386 => 1877,  4376 => 1870,  4335 => 1832,  4331 => 1831,  4324 => 1826,  4272 => 1776,  4266 => 1774,  4264 => 1773,  4261 => 1772,  4259 => 1771,  4253 => 1767,  4241 => 1757,  4231 => 1753,  4225 => 1750,  4219 => 1747,  4215 => 1745,  4211 => 1744,  4203 => 1739,  4197 => 1736,  4191 => 1733,  4183 => 1728,  4171 => 1718,  4169 => 1717,  4160 => 1711,  4154 => 1708,  4144 => 1701,  4136 => 1695,  4127 => 1689,  4121 => 1685,  4115 => 1682,  4112 => 1681,  4104 => 1675,  4097 => 1670,  4092 => 1668,  4087 => 1667,  4082 => 1665,  4077 => 1664,  4075 => 1663,  4069 => 1660,  4065 => 1658,  4063 => 1657,  4056 => 1652,  4053 => 1651,  4044 => 1648,  4037 => 1647,  4030 => 1646,  4026 => 1645,  4023 => 1644,  4021 => 1643,  4015 => 1640,  4011 => 1638,  4004 => 1633,  4001 => 1632,  3995 => 1631,  3991 => 1630,  3988 => 1629,  3971 => 1618,  3967 => 1617,  3955 => 1612,  3953 => 1611,  3938 => 1602,  3934 => 1601,  3922 => 1596,  3920 => 1595,  3904 => 1585,  3900 => 1584,  3888 => 1579,  3886 => 1578,  3881 => 1575,  3876 => 1574,  3872 => 1573,  3861 => 1569,  3859 => 1568,  3850 => 1565,  3846 => 1564,  3835 => 1560,  3833 => 1559,  3829 => 1557,  3818 => 1552,  3808 => 1551,  3802 => 1550,  3796 => 1549,  3792 => 1548,  3788 => 1547,  3782 => 1546,  3778 => 1545,  3774 => 1543,  3770 => 1542,  3760 => 1539,  3758 => 1538,  3752 => 1534,  3743 => 1531,  3733 => 1530,  3727 => 1529,  3722 => 1528,  3717 => 1527,  3713 => 1526,  3709 => 1525,  3698 => 1521,  3696 => 1520,  3691 => 1518,  3687 => 1517,  3682 => 1515,  3678 => 1514,  3674 => 1513,  3670 => 1512,  3666 => 1511,  3662 => 1510,  3658 => 1509,  3653 => 1508,  3647 => 1505,  3643 => 1503,  3641 => 1502,  3636 => 1500,  3629 => 1497,  3624 => 1496,  3621 => 1495,  3617 => 1494,  3608 => 1487,  3605 => 1486,  3596 => 1483,  3590 => 1482,  3584 => 1481,  3577 => 1480,  3573 => 1479,  3570 => 1478,  3568 => 1477,  3564 => 1475,  3561 => 1474,  3555 => 1473,  3553 => 1472,  3544 => 1470,  3540 => 1469,  3534 => 1468,  3531 => 1467,  3526 => 1466,  3523 => 1465,  3519 => 1464,  3513 => 1460,  3511 => 1459,  3508 => 1458,  3496 => 1449,  3490 => 1445,  3484 => 1444,  3482 => 1443,  3475 => 1439,  3471 => 1438,  3464 => 1436,  3460 => 1435,  3450 => 1430,  3446 => 1429,  3440 => 1426,  3436 => 1425,  3428 => 1421,  3424 => 1420,  3417 => 1416,  3413 => 1415,  3406 => 1410,  3403 => 1409,  3401 => 1408,  3397 => 1406,  3385 => 1397,  3379 => 1393,  3373 => 1392,  3371 => 1391,  3364 => 1387,  3360 => 1386,  3347 => 1378,  3343 => 1377,  3329 => 1368,  3325 => 1367,  3316 => 1363,  3312 => 1362,  3305 => 1360,  3301 => 1359,  3298 => 1358,  3292 => 1357,  3283 => 1354,  3278 => 1352,  3273 => 1351,  3270 => 1350,  3266 => 1349,  3261 => 1347,  3255 => 1345,  3250 => 1344,  3248 => 1343,  3241 => 1339,  3237 => 1338,  3233 => 1337,  3229 => 1336,  3225 => 1335,  3217 => 1329,  3215 => 1328,  3211 => 1326,  3199 => 1317,  3193 => 1313,  3187 => 1312,  3185 => 1311,  3178 => 1307,  3174 => 1306,  3161 => 1298,  3157 => 1297,  3143 => 1288,  3139 => 1287,  3130 => 1283,  3126 => 1282,  3119 => 1280,  3115 => 1279,  3108 => 1277,  3104 => 1276,  3101 => 1275,  3095 => 1274,  3086 => 1271,  3081 => 1269,  3076 => 1268,  3073 => 1267,  3069 => 1266,  3064 => 1264,  3058 => 1262,  3053 => 1261,  3051 => 1260,  3044 => 1256,  3040 => 1255,  3036 => 1254,  3032 => 1253,  3028 => 1252,  3024 => 1251,  3016 => 1245,  3014 => 1244,  3010 => 1242,  3000 => 1234,  2994 => 1233,  2992 => 1232,  2988 => 1230,  2984 => 1228,  2981 => 1227,  2970 => 1225,  2965 => 1224,  2963 => 1223,  2959 => 1222,  2949 => 1215,  2945 => 1214,  2939 => 1210,  2933 => 1209,  2931 => 1208,  2923 => 1203,  2919 => 1202,  2910 => 1198,  2904 => 1197,  2900 => 1195,  2896 => 1193,  2892 => 1191,  2889 => 1190,  2885 => 1188,  2881 => 1186,  2879 => 1185,  2872 => 1183,  2863 => 1179,  2857 => 1178,  2853 => 1176,  2849 => 1174,  2845 => 1172,  2842 => 1171,  2838 => 1169,  2834 => 1167,  2832 => 1166,  2825 => 1164,  2816 => 1160,  2810 => 1159,  2805 => 1156,  2801 => 1154,  2797 => 1152,  2794 => 1151,  2790 => 1149,  2786 => 1147,  2784 => 1146,  2777 => 1144,  2773 => 1142,  2768 => 1140,  2763 => 1139,  2758 => 1137,  2753 => 1136,  2751 => 1135,  2744 => 1133,  2739 => 1131,  2733 => 1130,  2727 => 1127,  2721 => 1126,  2717 => 1124,  2714 => 1123,  2708 => 1122,  2699 => 1119,  2694 => 1117,  2689 => 1116,  2686 => 1115,  2681 => 1114,  2679 => 1113,  2672 => 1111,  2665 => 1108,  2661 => 1107,  2654 => 1103,  2650 => 1102,  2646 => 1101,  2642 => 1100,  2638 => 1099,  2634 => 1098,  2627 => 1094,  2624 => 1093,  2621 => 1092,  2609 => 1083,  2603 => 1082,  2599 => 1081,  2591 => 1078,  2587 => 1076,  2584 => 1075,  2573 => 1067,  2567 => 1066,  2563 => 1065,  2555 => 1062,  2551 => 1060,  2548 => 1059,  2537 => 1051,  2531 => 1050,  2527 => 1049,  2519 => 1046,  2515 => 1044,  2512 => 1043,  2505 => 1039,  2499 => 1038,  2495 => 1037,  2488 => 1035,  2484 => 1033,  2481 => 1032,  2474 => 1028,  2468 => 1027,  2464 => 1026,  2457 => 1024,  2453 => 1022,  2450 => 1021,  2443 => 1017,  2437 => 1016,  2433 => 1015,  2426 => 1013,  2422 => 1011,  2420 => 1010,  2414 => 1006,  2409 => 1004,  2404 => 1003,  2399 => 1001,  2394 => 1000,  2392 => 999,  2388 => 998,  2384 => 997,  2377 => 995,  2371 => 992,  2367 => 991,  2363 => 990,  2359 => 989,  2355 => 988,  2351 => 987,  2347 => 986,  2343 => 985,  2338 => 984,  2333 => 983,  2330 => 982,  2328 => 981,  2318 => 974,  2315 => 973,  2309 => 972,  2307 => 971,  2303 => 970,  2297 => 969,  2290 => 967,  2287 => 966,  2282 => 965,  2280 => 964,  2273 => 959,  2271 => 958,  2267 => 956,  2254 => 946,  2247 => 941,  2241 => 940,  2239 => 939,  2231 => 934,  2227 => 933,  2222 => 930,  2213 => 927,  2206 => 925,  2200 => 922,  2194 => 921,  2190 => 919,  2186 => 918,  2180 => 915,  2176 => 914,  2169 => 912,  2165 => 911,  2158 => 908,  2153 => 907,  2151 => 906,  2143 => 901,  2139 => 900,  2131 => 894,  2129 => 893,  2093 => 860,  2057 => 827,  2042 => 814,  2036 => 809,  2034 => 808,  2022 => 801,  2015 => 796,  2013 => 795,  2003 => 790,  1991 => 787,  1979 => 784,  1968 => 780,  1960 => 779,  1954 => 778,  1942 => 775,  1930 => 772,  1923 => 770,  1919 => 769,  1915 => 767,  1909 => 765,  1907 => 764,  1896 => 762,  1887 => 760,  1882 => 758,  1878 => 757,  1871 => 753,  1867 => 752,  1863 => 751,  1859 => 750,  1855 => 749,  1851 => 748,  1844 => 744,  1840 => 742,  1837 => 741,  1834 => 740,  1831 => 738,  1823 => 732,  1814 => 729,  1810 => 728,  1803 => 727,  1800 => 726,  1795 => 725,  1793 => 724,  1787 => 721,  1780 => 719,  1772 => 713,  1767 => 710,  1763 => 708,  1758 => 704,  1753 => 702,  1748 => 699,  1742 => 695,  1734 => 692,  1729 => 690,  1724 => 689,  1719 => 687,  1713 => 685,  1711 => 684,  1707 => 682,  1703 => 681,  1699 => 679,  1694 => 677,  1691 => 676,  1686 => 674,  1683 => 673,  1681 => 672,  1673 => 667,  1670 => 666,  1668 => 665,  1663 => 662,  1654 => 659,  1650 => 658,  1645 => 657,  1641 => 656,  1635 => 653,  1628 => 651,  1622 => 647,  1616 => 645,  1614 => 644,  1611 => 643,  1602 => 640,  1598 => 639,  1593 => 638,  1589 => 637,  1584 => 635,  1576 => 632,  1568 => 630,  1561 => 626,  1557 => 625,  1553 => 624,  1546 => 622,  1542 => 620,  1540 => 619,  1536 => 617,  1534 => 616,  1528 => 612,  1518 => 607,  1513 => 605,  1510 => 604,  1508 => 603,  1505 => 602,  1499 => 598,  1493 => 597,  1485 => 595,  1480 => 593,  1475 => 592,  1472 => 591,  1468 => 590,  1462 => 587,  1459 => 586,  1456 => 585,  1449 => 581,  1442 => 579,  1435 => 574,  1432 => 573,  1426 => 569,  1420 => 568,  1412 => 566,  1407 => 564,  1402 => 563,  1399 => 562,  1395 => 561,  1389 => 558,  1386 => 557,  1383 => 556,  1374 => 550,  1367 => 548,  1361 => 545,  1354 => 543,  1348 => 540,  1341 => 538,  1332 => 531,  1329 => 530,  1317 => 521,  1313 => 520,  1307 => 517,  1304 => 516,  1301 => 515,  1291 => 508,  1286 => 506,  1280 => 503,  1277 => 502,  1274 => 501,  1271 => 500,  1262 => 496,  1256 => 494,  1254 => 493,  1247 => 491,  1243 => 490,  1238 => 488,  1232 => 487,  1223 => 483,  1219 => 481,  1215 => 480,  1210 => 479,  1204 => 475,  1199 => 473,  1196 => 472,  1191 => 470,  1188 => 469,  1186 => 468,  1182 => 466,  1177 => 464,  1174 => 463,  1169 => 461,  1166 => 460,  1164 => 459,  1158 => 456,  1155 => 455,  1152 => 454,  1146 => 450,  1140 => 449,  1132 => 447,  1127 => 445,  1122 => 444,  1119 => 443,  1115 => 442,  1107 => 439,  1103 => 437,  1101 => 436,  1098 => 435,  1092 => 431,  1087 => 429,  1082 => 428,  1077 => 426,  1072 => 425,  1070 => 424,  1064 => 421,  1061 => 420,  1059 => 419,  1056 => 418,  1050 => 414,  1045 => 412,  1040 => 411,  1035 => 409,  1030 => 408,  1028 => 407,  1022 => 404,  1019 => 403,  1016 => 402,  1006 => 397,  999 => 395,  995 => 393,  992 => 392,  985 => 387,  977 => 383,  975 => 382,  966 => 378,  961 => 376,  958 => 375,  955 => 374,  949 => 370,  943 => 369,  935 => 367,  926 => 364,  923 => 363,  919 => 362,  915 => 361,  909 => 358,  906 => 357,  904 => 356,  901 => 355,  892 => 349,  884 => 344,  873 => 336,  866 => 332,  862 => 331,  857 => 329,  854 => 328,  852 => 327,  849 => 326,  841 => 321,  834 => 319,  829 => 317,  826 => 316,  824 => 315,  821 => 314,  815 => 310,  808 => 308,  803 => 306,  800 => 305,  797 => 303,  787 => 298,  780 => 296,  776 => 294,  773 => 293,  763 => 288,  756 => 286,  752 => 284,  749 => 283,  739 => 278,  732 => 276,  728 => 274,  725 => 273,  715 => 268,  708 => 266,  704 => 264,  701 => 263,  691 => 258,  684 => 256,  680 => 254,  677 => 253,  667 => 248,  660 => 246,  656 => 244,  654 => 243,  650 => 241,  644 => 239,  642 => 238,  635 => 236,  630 => 234,  622 => 228,  611 => 222,  608 => 221,  605 => 220,  599 => 217,  596 => 216,  588 => 210,  585 => 209,  582 => 208,  578 => 206,  569 => 199,  566 => 198,  562 => 197,  558 => 194,  550 => 188,  544 => 186,  542 => 185,  538 => 184,  531 => 182,  527 => 181,  520 => 179,  511 => 173,  505 => 172,  501 => 171,  494 => 169,  488 => 165,  482 => 163,  480 => 162,  474 => 161,  470 => 160,  466 => 159,  458 => 156,  452 => 153,  442 => 152,  436 => 151,  432 => 149,  423 => 146,  419 => 145,  413 => 144,  409 => 143,  399 => 142,  393 => 141,  384 => 134,  380 => 132,  374 => 130,  372 => 129,  369 => 128,  359 => 125,  356 => 124,  354 => 123,  351 => 122,  342 => 120,  339 => 119,  337 => 118,  334 => 117,  325 => 115,  322 => 114,  320 => 113,  317 => 112,  307 => 109,  304 => 108,  302 => 107,  299 => 106,  293 => 104,  291 => 103,  288 => 102,  282 => 100,  280 => 99,  277 => 98,  268 => 96,  265 => 95,  263 => 94,  254 => 92,  245 => 90,  240 => 87,  232 => 85,  224 => 83,  215 => 81,  213 => 80,  206 => 77,  204 => 76,  199 => 74,  187 => 67,  180 => 65,  174 => 62,  168 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  141 => 50,  137 => 49,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  120 => 42,  113 => 38,  109 => 36,  107 => 35,  104 => 34,  98 => 31,  94 => 29,  92 => 28,  88 => 26,  77 => 24,  73 => 23,  69 => 21,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/addproduct.twig", "");
    }
}
