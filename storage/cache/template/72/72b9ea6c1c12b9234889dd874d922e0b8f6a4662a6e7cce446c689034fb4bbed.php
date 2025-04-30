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

/* __string_template__a1cdfbfa3201c60112549dbf203007e42e75af533ac83a0e84d6d3824bfadb9f */
class __TwigTemplate_53dd8e3188f69e7246da079fddc862819ac0939febbf76b95556e624333c3c23 extends Template
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
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 2
            echo "  <div class=\"tab-pane\" id=\"tab-custom-field\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <ul class=\"nav nav-pills nav-stacked\" id=\"vtab-option\">
          ";
            // line 6
            $context["tabCount"] = 0;
            // line 7
            echo "          ";
            if ((array_key_exists("wkPreCustomFields", $context) && ($context["wkPreCustomFields"] ?? null))) {
                // line 8
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                    // line 9
                    echo "              <li>
                <a href=\"#wktab-option-";
                    // line 10
                    echo ($context["tabCount"] ?? null);
                    echo "\" data-toggle=\"tab\" id=\"wkoption-";
                    echo ($context["tabCount"] ?? null);
                    echo "\" field-id=\"wkoption-";
                    echo (($__internal_compile_0 = $context["tabs"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["fieldId"] ?? null) : null);
                    echo "\">
                  <i class=\"fa fa-minus-circle\" onclick=\"\$('#wkoption-";
                    // line 11
                    echo ($context["tabCount"] ?? null);
                    echo "').remove(); \$('#wktab-option-";
                    echo ($context["tabCount"] ?? null);
                    echo "').remove(); \$('#vtab-option li a:first').trigger('click'); return false;\"></i>";
                    echo (($__internal_compile_1 = $context["tabs"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["fieldName"] ?? null) : null);
                    echo "></a>
              </li>
              ";
                    // line 13
                    $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "          ";
            }
            // line 16
            echo "          <li id=\"optionSelector\">
            <select name=\"wkcustomfield\" class=\"form-control\">
              ";
            // line 18
            if ((array_key_exists("wkcustomFields", $context) && ($context["wkcustomFields"] ?? null))) {
                // line 19
                echo "                <option value=\"\"></option>
                ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["wkcustomFields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 21
                    echo "                  <option value=\"";
                    echo (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" data-type=\"";
                    echo (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["fieldType"] ?? null) : null);
                    echo "\" data-name=\"";
                    echo (($__internal_compile_4 = $context["field"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["fieldName"] ?? null) : null);
                    echo "\" data-des=\"";
                    echo (($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["fieldDescription"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["fieldDescription"] ?? null) : null);
                    echo "\" data-isRequired=\"";
                    echo (($__internal_compile_7 = $context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["isRequired"] ?? null) : null);
                    echo "\">
                    ";
                    // line 22
                    echo (($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["fieldName"] ?? null) : null);
                    echo "
                  </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "              ";
            }
            // line 26
            echo "            </select>
          </li>
        </ul>
      </div>

      <div class=\"col-sm-9\">
        <div class=\"tab-content\" id=\"wk_customfieldcontent\">
          ";
            // line 33
            $context["tabCount"] = 0;
            // line 34
            echo "          ";
            $context["wkcustom_option_row"] = 0;
            // line 35
            echo "          ";
            if ((array_key_exists("wkPreCustomFields", $context) && ($context["wkPreCustomFields"] ?? null))) {
                // line 36
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["wkPreCustomFields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tabs"]) {
                    // line 37
                    echo "              <div id=\"wktab-option-";
                    echo ($context["tabCount"] ?? null);
                    echo "\" class=\"tab-pane\">
                <div class=\"alert alert-info\">
                  <i class=\"fa fa-info-circle\"></i>
                  ";
                    // line 40
                    echo (($__internal_compile_9 = $context["tabs"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["fieldDes"] ?? null) : null);
                    echo "
                </div>
                ";
                    // line 42
                    if ((array_key_exists("error", $context) && (($context["error"] ?? null) == (($__internal_compile_10 = $context["tabs"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["fieldId"] ?? null) : null)))) {
                        // line 43
                        echo "                  <div class=\"alert alert-danger\">
                    <i class=\"fa fa-exclamation-circle\"></i>
                    ";
                        // line 45
                        echo ($context["error_warning_mandetory"] ?? null);
                        echo "
                  </div>
                ";
                    }
                    // line 48
                    echo "                <input type=\"hidden\" name=\"product_custom_field[";
                    echo ($context["wkcustom_option_ro"] ?? null);
                    echo "][custom_field_name]\" value=\"";
                    echo (($__internal_compile_11 = $context["tabs"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["fieldName"] ?? null) : null);
                    echo "\">
                <input type=\"hidden\" name=\"product_custom_field[";
                    // line 49
                    echo ($context["wkcustom_option_row"] ?? null);
                    echo "][custom_field_type]\" value=\"";
                    echo (($__internal_compile_12 = $context["tabs"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["fieldType"] ?? null) : null);
                    echo "\">
                <input type=\"hidden\" name=\"product_custom_field[";
                    // line 50
                    echo ($context["wkcustom_option_row"] ?? null);
                    echo "][custom_field_id]\" value=\"";
                    echo (($__internal_compile_13 = $context["tabs"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["fieldId"] ?? null) : null);
                    echo "\">
                <input type=\"hidden\" name=\"product_custom_field[";
                    // line 51
                    echo ($context["wkcustom_option_row"] ?? null);
                    echo "][custom_field_des]\" value=\"";
                    echo (($__internal_compile_14 = $context["tabs"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["fieldDes"] ?? null) : null);
                    echo "\">
                <input type=\"hidden\" name=\"product_custom_field[";
                    // line 52
                    echo ($context["wkcustom_option_row"] ?? null);
                    echo "][custom_field_is_required]\" value=\"";
                    echo (($__internal_compile_15 = $context["tabs"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["isRequired"] ?? null) : null);
                    echo "\">

                ";
                    // line 54
                    if (((($__internal_compile_16 = $context["tabs"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["fieldType"] ?? null) : null) == "select")) {
                        // line 55
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_17 = $context["tabs"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo "\">
                    <label class=\"col-sm-3 control-label\">Select option:</label>
                    <div class=\"col-sm-9\">
                      <select class=\"form-control\" name=\"product_custom_field[";
                        // line 58
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\">
                        ";
                        // line 59
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_18 = $context["tabs"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["preFieldOptions"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                            // line 60
                            echo "                          <option value=\"";
                            echo (($__internal_compile_19 = $context["options"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["optionId"] ?? null) : null);
                            echo "\" ";
                            if ((($__internal_compile_20 = $context["tabs"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["fieldOptions"] ?? null) : null)) {
                                echo " ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = $context["tabs"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["fieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    echo " ";
                                    if (((($__internal_compile_22 = $context["option"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["optionId"] ?? null) : null) == (($__internal_compile_23 = $context["options"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["optionId"] ?? null) : null))) {
                                        echo "selected";
                                    }
                                    echo " ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                echo " ";
                            }
                            echo ">
                            ";
                            // line 61
                            echo (($__internal_compile_24 = $context["options"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["optionValue"] ?? null) : null);
                            echo "
                          </option>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                      </select>
                    </div>
                  </div>
                ";
                    } elseif ((((($__internal_compile_25 =                     // line 67
$context["tabs"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["fieldType"] ?? null) : null) == "checkbox") || ((($__internal_compile_26 = $context["tabs"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["fieldType"] ?? null) : null) == "radio"))) {
                        // line 68
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_27 = $context["tabs"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"control-label col-sm-3\">Select option:</label>
                    <div class=\"col-sm-9\">
                      ";
                        // line 71
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_28 = $context["tabs"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["preFieldOptions"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                            // line 72
                            echo "                        <div class=\"radio checkbox\">
                          <label for=\"";
                            // line 73
                            echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_29 = $context["options"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["optionId"] ?? null) : null));
                            echo "\">
                            <input
                              type='";
                            // line 75
                            echo (($__internal_compile_30 = $context["tabs"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["
                              fieldType"] ?? null) : null);
                            // line 76
                            echo "'
                              id=\"";
                            // line 77
                            echo (($context["wkcustom_option_row"] ?? null) . (($__internal_compile_31 = $context["options"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["optionId"] ?? null) : null));
                            echo "\"
                              value=\"";
                            // line 78
                            echo (($__internal_compile_32 = $context["options"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["optionId"] ?? null) : null);
                            echo "\"
                              name=\"product_custom_field[";
                            // line 79
                            echo ($context["wkcustom_option_row"] ?? null);
                            echo "][custom_field_value][]\"
                              ";
                            // line 80
                            if ((($__internal_compile_33 = $context["tabs"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["fieldOptions"] ?? null) : null)) {
                                // line 81
                                echo "                              ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_compile_34 = $context["tabs"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["fieldOptions"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 82
                                    echo "                              ";
                                    if (((($__internal_compile_35 = $context["option"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["optionId"] ?? null) : null) == (($__internal_compile_36 = $context["options"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["optionId"] ?? null) : null))) {
                                        // line 83
                                        echo "                              ";
                                        echo "checked";
                                        echo "
                              ";
                                    }
                                    // line 85
                                    echo "                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 86
                                echo "                              ";
                            }
                            echo "/>
                            ";
                            // line 87
                            echo (($__internal_compile_37 = $context["options"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["optionValue"] ?? null) : null);
                            echo "
                          </label>
                        </div>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                    </div>
                  </div>
                ";
                    } elseif (((($__internal_compile_38 =                     // line 93
$context["tabs"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["fieldType"] ?? null) : null) == "text")) {
                        // line 94
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_39 = $context["tabs"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"col-sm-3 control-label\">Enter Text:</label>
                    <div class=\"col-sm-9\">
                      <input class=\"form-control\" type=\"text\" name=\"product_custom_field[";
                        // line 97
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\" value=\"";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 97), "option_id", [], "array", true, true, false, 97)) {
                            echo (($__internal_compile_40 = (($__internal_compile_41 = $context["tabs"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["option_id"] ?? null) : null);
                        }
                        echo "\"/>
                    </div>
                  </div>
                ";
                    } elseif (((($__internal_compile_42 =                     // line 100
$context["tabs"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["fieldType"] ?? null) : null) == "textarea")) {
                        // line 101
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_43 = $context["tabs"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"col-sm-3 control-label\">Enter Text:</label>
                    <div class=\"col-sm-9\">
                      <textarea class=\"form-control\" name=\"product_custom_field[";
                        // line 104
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\" rows=\"7\">
                        ";
                        // line 105
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 105), "option_id", [], "array", true, true, false, 105)) {
                            // line 106
                            echo "                          ";
                            echo (($__internal_compile_44 = (($__internal_compile_45 = $context["tabs"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["option_id"] ?? null) : null);
                            echo "
                        ";
                        }
                        // line 108
                        echo "                      </textarea>
                    </div>
                  </div>
                ";
                    } elseif (((($__internal_compile_46 =                     // line 111
$context["tabs"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["fieldType"] ?? null) : null) == "date")) {
                        // line 112
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_47 = $context["tabs"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"col-sm-3 control-label\">Select Date:</label>
                    <div class=\"col-sm-6\">
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"product_custom_field[";
                        // line 116
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\" value=\"";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 116), "option_id", [], "array", true, true, false, 116)) {
                            echo (($__internal_compile_48 = (($__internal_compile_49 = $context["tabs"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["option_id"] ?? null) : null);
                        }
                        echo "\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\">
                            <i class=\"fa fa-calendar\"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                ";
                    } elseif (((($__internal_compile_50 =                     // line 125
$context["tabs"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["fieldType"] ?? null) : null) == "time")) {
                        // line 126
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_51 = $context["tabs"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"col-sm-3 control-label\">Enter Text:</label>
                    <div class=\"col-sm-6\">
                      <div class=\"input-group time\">
                        <input class=\"form-control\" type=\"text\" name=\"product_custom_field[";
                        // line 130
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\" value=\"";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 130), "option_id", [], "array", true, true, false, 130)) {
                            echo (($__internal_compile_52 = (($__internal_compile_53 = $context["tabs"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["option_id"] ?? null) : null);
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
                    } elseif (((($__internal_compile_54 =                     // line 139
$context["tabs"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["fieldType"] ?? null) : null) == "datetime")) {
                        // line 140
                        echo "                  <div class=\"form-group ";
                        if (((($__internal_compile_55 = $context["tabs"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["isRequired"] ?? null) : null) == "yes")) {
                            echo "required";
                        }
                        echo " \">
                    <label class=\"col-sm-3 control-label\">Select date-time:</label>
                    <div class=\"col-sm-6\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"product_custom_field[";
                        // line 144
                        echo ($context["wkcustom_option_row"] ?? null);
                        echo "][custom_field_value][]\" value=\"";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tabs"], "fieldOptions", [], "array", false, true, false, 144), "option_id", [], "array", true, true, false, 144)) {
                            echo (($__internal_compile_56 = (($__internal_compile_57 = $context["tabs"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["fieldOptions"] ?? null) : null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["option_id"] ?? null) : null);
                        }
                        echo "\" class=\"form-control\">
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
                    // line 154
                    echo "              </div>
              ";
                    // line 155
                    $context["tabCount"] = (($context["tabCount"] ?? null) + 1);
                    // line 156
                    echo "              ";
                    $context["wkcustom_option_row"] = (($context["wkcustom_option_row"] ?? null) + 1);
                    // line 157
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "          ";
            }
            // line 159
            echo "        </div>
      </div>

    </div>
  </div>
  <script type=\"text/javascript\">

    \$('#vtab-option a:first').tab('show');
    tabCount = '";
            // line 167
            echo ($context["tabCount"] ?? null);
            echo "';
    wkcustom_option_row = '";
            // line 168
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
      tab = '<li><a href=\"#wktab-option-' + tabCount + '\" data-toggle=\"tab\" id=\"wkoption-' + tabCount + '\" field-id = \"wkoption-' + value + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#wkoption-' + tabCount + '\\').remove(); \$(\\'#wktab-option-' + tabCount + '\\').remove(); \$(\\'#vtab-option a:first\\').trigger(\\'click\\'); return false;\" /></i>&nbsp;' + fieldName + '</a></li>';
      \$('#optionSelector').before(tab);
      html = '';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_name]\" value=\"' + fieldName + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_type]\" value=\"' + fieldType + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_id]\" value=\"' + value + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_des]\" value=\"' + fieldDes + '\">';
      html += '<input type=\"hidden\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_is_required]\" value=\"' + fieldIsRequired + '\">';
      if (fieldIsRequired == 'yes') {
        required = 'required';
      } else {
        required = '';
      }
      if (fieldType == \"textarea\") {

        html += '<div class=\"form-group ' + required + ' \"><label class=\"col-sm-3 control-label\">";
            // line 197
            echo ($context["entry_enter_text"] ?? null);
            echo "</label>';
        html += '<div class=\"col-sm-9\"><textarea class=\"form-control\" id=\"\" value=\"\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\" row=\"7\"></textarea></div></div>';
        addtoBody(html);

      } else if (fieldType == \"text\") {

        html += '<div class=\"form-group ' + required + '\"><label class=\"col-sm-3 control-label\">";
            // line 203
            echo ($context["entry_enter_text"] ?? null);
            echo "</label>';
        html += '<div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\" /></div></div>';
        addtoBody(html);

      } else if (fieldType == \"time\") {

        html += '<div class=\"form-group ' + required + '\"><label class=\"col-sm-3 control-label\">";
            // line 209
            echo ($context["entry_select_time"] ?? null);
            echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group time\"><input type=\"text\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"datetime\") {

        html += '<div class=\"form-group ' + required + '\"><label class=\"col-sm-3 control-label\">";
            // line 216
            echo ($context["entry_select_datetime"] ?? null);
            echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\" class=\"form-control\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button</span></div</div></div>';

        addtoBody(html);

      } else if (fieldType == \"date\") {

        html += '<div class=\"form-group ' + required + '\">';
        html += '<label class=\"col-sm-3 control-label\">";
            // line 224
            echo ($context["entry_select_date"] ?? null);
            echo "</label>';
        html += '<div class=\"col-sm-6\"><div class=\"input-group date\">';
        html += '<input type=\"text\" name=\"product_custom_field[";
            // line 226
            echo ($context["wkcustom_option_row"] ?? null);
            echo "][custom_field_value][]\" class=\"form-control\">';
        html += '<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div></div>';

        addtoBody(html);

      } else {
        \$.ajax({
          url: 'index.php?route=wkcustomfield/wkcustomfield/getOptions&user_token=";
            // line 233
            echo ($context["user_token"] ?? null);
            echo "',
          data: '&value=' + value,
          dataType: 'json',
          type: 'post',
          success: function(data) {
            innerHtml = '';
            if (fieldType == \"select\") {
              html += '<div class=\"form-group ' + required + '\"><label class=\"col-sm-3 control-label\">Options</label><div class=\"col-sm-9\" >';
            } else {
              html += '<div class=\"form-group ' + required + '\"><label class=\"control-label\">Options</label><div>';
            }
            \$.each(data, function(key, val) {
              if (fieldType == \"select\") {
                innerHtml += '<option value=\"' + val.optionId + '\">' + val.optionValue + '</option>'
              } else if (fieldType == \"checkbox\") {

                html += '<div class=\"radio checkbox\"><label for=\"' + wkcustom_option_row + val.optionId + '\"><input type=' + fieldType + ' id=\"' + wkcustom_option_row + val.optionId + '\" value=\"' + val.optionId + '\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\">' + val.optionValue + '</lable></div>';

              } else {

                html += '<div class=\"radio checkbox\"><label for=\"' + wkcustom_option_row + val.optionId + '\"><input type=' + fieldType + ' id=\"' + wkcustom_option_row + val.optionId + '\" value=\"' + val.optionId + '\" value=\"' + val.optionId + '\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\">' + val.optionValue + '</lable></div>';

              }
            });
            if (fieldType == \"select\") {
              html += '<select class=\"form-control\" name=\"product_custom_field[' + wkcustom_option_row + '][custom_field_value][]\">' + innerHtml + '</select>';
            }
            addtoBody(html);
          }
        })
      }
    });

    function addtoBody(html) {
      html = '<div id=\"wktab-option-' + tabCount + '\" class=\"tab-pane\"><div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ' + fieldDes + '</div>' + html + '</div></div></div>';
      \$('#wk_customfieldcontent').append(html);
      \$('#wkoption-' + tabCount).trigger('click');
      tabCount++;
      wkcustom_option_row++;

      \$('.date').datetimepicker({pickTime: false});

      \$('.time').datetimepicker({pickDate: false});

      \$('.datetime').datetimepicker({pickDate: true, pickTime: true});
    }
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a1cdfbfa3201c60112549dbf203007e42e75af533ac83a0e84d6d3824bfadb9f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 233,  582 => 226,  577 => 224,  566 => 216,  556 => 209,  547 => 203,  538 => 197,  506 => 168,  502 => 167,  492 => 159,  489 => 158,  483 => 157,  480 => 156,  478 => 155,  475 => 154,  458 => 144,  448 => 140,  446 => 139,  430 => 130,  420 => 126,  418 => 125,  402 => 116,  392 => 112,  390 => 111,  385 => 108,  379 => 106,  377 => 105,  373 => 104,  364 => 101,  362 => 100,  352 => 97,  343 => 94,  341 => 93,  337 => 91,  327 => 87,  322 => 86,  316 => 85,  310 => 83,  307 => 82,  302 => 81,  300 => 80,  296 => 79,  292 => 78,  288 => 77,  285 => 76,  282 => 75,  277 => 73,  274 => 72,  270 => 71,  261 => 68,  259 => 67,  254 => 64,  245 => 61,  223 => 60,  219 => 59,  215 => 58,  206 => 55,  204 => 54,  197 => 52,  191 => 51,  185 => 50,  179 => 49,  172 => 48,  166 => 45,  162 => 43,  160 => 42,  155 => 40,  148 => 37,  143 => 36,  140 => 35,  137 => 34,  135 => 33,  126 => 26,  123 => 25,  114 => 22,  99 => 21,  95 => 20,  92 => 19,  90 => 18,  86 => 16,  83 => 15,  77 => 14,  75 => 13,  66 => 11,  58 => 10,  55 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a1cdfbfa3201c60112549dbf203007e42e75af533ac83a0e84d6d3824bfadb9f", "");
    }
}
