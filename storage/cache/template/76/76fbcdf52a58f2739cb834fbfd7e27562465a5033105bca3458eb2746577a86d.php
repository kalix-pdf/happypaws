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

/* __string_template__2271b8f210e46b0c9b4ea0d29a676196c0e26a69e834eb6ae317362ad60a75c7 */
class __TwigTemplate_29a5967513c284f8dd438b49670d6db5e5393a887d3fb5c2da5eeb5becb96cb1 extends Template
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
        if (($context["error_warning"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 4
        if (($context["shipping_methods"] ?? null)) {
            // line 5
            echo "<p>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 7
                echo "<p><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 7);
                echo "</strong></p>
";
                // line 8
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 8)) {
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 9));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 10
                        echo "<div class=\"radio\">
  <label> ";
                        // line 11
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 12
                            echo "    ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12);
                            // line 13
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13);
                            echo "\" checked=\"checked\" />
    ";
                        } else {
                            // line 15
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 15);
                            echo "\" />
    ";
                        }
                        // line 17
                        echo "    ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 17);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 17);
                        echo "</label>
</div>

        ";
                        // line 20
                        if (((($__internal_compile_0 = $context["quote"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["code"] ?? null) : null) == "wk_custom_shipping.wk_custom_shipping")) {
                            // line 21
                            echo "          
        ";
                            // line 22
                            if (((array_key_exists("priority_shipping", $context) && ($context["priority_shipping"] ?? null)) &&  !twig_test_empty(($context["priority_shipping"] ?? null)))) {
                                echo " 
         <p><strong>";
                                // line 23
                                echo ($context["text_priority"] ?? null);
                                echo "</strong></p>
         ";
                                // line 24
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["priority_shipping"] ?? null));
                                foreach ($context['_seq'] as $context["key"] => $context["shipping"]) {
                                    echo " 
             ";
                                    // line 25
                                    if (twig_test_iterable($context["shipping"])) {
                                        echo " 
                 <strong>";
                                        // line 26
                                        if (twig_get_attribute($this->env, $this->source, $context["shipping"], "name", [], "array", true, true, false, 26)) {
                                            echo " ";
                                            echo (($__internal_compile_1 = $context["shipping"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null);
                                            echo " ";
                                        }
                                        echo "</strong>
               ";
                                        // line 27
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["shipping"]);
                                        foreach ($context['_seq'] as $context["keys"] => $context["priority"]) {
                                            echo " 
                   ";
                                            // line 28
                                            if (($context["keys"] == "high")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 30
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_2 = $context["priority"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_high"] ?? null);
                                                echo " : ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 30) && (($__internal_compile_3 = $context["priority"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["day"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_4 = $context["priority"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["day"] ?? null) : null);
                                                    echo " ";
                                                } else {
                                                    echo " ";
                                                    echo "0";
                                                    echo " ";
                                                }
                                                echo " ";
                                                echo ($context["text_day"] ?? null);
                                                echo " : ";
                                                echo ($context["text_charges"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 30) && (($__internal_compile_5 = $context["priority"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_6 = $context["priority"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 33
                                            echo " 
                   ";
                                            // line 34
                                            if (($context["keys"] == "medium")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 36
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_7 = $context["priority"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_medium"] ?? null);
                                                echo " : ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " -";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 36) && (($__internal_compile_8 = $context["priority"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["day"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_9 = $context["priority"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["day"] ?? null) : null);
                                                    echo " ";
                                                } else {
                                                    echo " ";
                                                    echo "0";
                                                    echo " ";
                                                }
                                                echo " ";
                                                echo ($context["text_day"] ?? null);
                                                echo " : ";
                                                echo ($context["text_charges"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 36) && (($__internal_compile_10 = $context["priority"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_11 = $context["priority"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 39
                                            echo " 
                   ";
                                            // line 40
                                            if (($context["keys"] == "low")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 42
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_12 = $context["priority"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_low"] ?? null);
                                                echo ": ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 42) && (($__internal_compile_13 = $context["priority"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["day"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_14 = $context["priority"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["day"] ?? null) : null);
                                                    echo " ";
                                                } else {
                                                    echo " ";
                                                    echo "0";
                                                    echo " ";
                                                }
                                                echo " ";
                                                echo ($context["text_day"] ?? null);
                                                echo " :  ";
                                                echo ($context["text_charges"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 42) && (($__internal_compile_15 = $context["priority"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_16 = $context["priority"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 45
                                            echo " 
             ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['priority'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 47
                                        echo "             ";
                                    }
                                    // line 48
                                    echo "             ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 49
                                echo "             ";
                            }
                            // line 50
                            echo "         ";
                            if ((array_key_exists("seller_custom_shipping", $context) && ($context["seller_custom_shipping"] ?? null))) {
                                // line 51
                                echo "           <div class=\"table-responsive\" style=\"width:50%;\">
            <table class=\"table table-stripped table-bordered table-hover\">
               <thead>
                 <tr>
                   <th class=\"text-left\">";
                                // line 55
                                echo ($context["text_seller_name"] ?? null);
                                echo "</th>
                   <th class=\"text-right\">";
                                // line 56
                                echo ($context["text_seller_shipping"] ?? null);
                                echo "</th>
                   ";
                                // line 57
                                if ((array_key_exists("event_shipping_amount", $context) && ($context["event_shipping_amount"] ?? null))) {
                                    // line 58
                                    echo "                     <th class=\"text-right\">";
                                    echo ($context["text_event_amount"] ?? null);
                                    echo "</th>
                   ";
                                }
                                // line 60
                                echo "                 </tr>
               </thead>
               <tbody>
               ";
                                // line 63
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["seller_custom_shipping"] ?? null));
                                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                                    // line 64
                                    echo "                 <tr>
                     <td class=\"text-left\">";
                                    // line 65
                                    echo $context["key"];
                                    echo "</td>
                     <td class=\"text-right\">";
                                    // line 66
                                    echo twig_get_attribute($this->env, $this->source, $context["value"], "shipping_price", [], "any", false, false, false, 66);
                                    echo "</td>
                     ";
                                    // line 67
                                    if ((array_key_exists("event_shipping_amount", $context) && ($context["event_shipping_amount"] ?? null))) {
                                        // line 68
                                        echo "                     <td class=\"text-right\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["value"], "prefix", [], "any", false, false, false, 68);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["value"], "event_shipping_amount", [], "any", false, false, false, 68);
                                        echo "</td>
                     ";
                                    }
                                    // line 70
                                    echo "                 </tr>
               ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 72
                                echo "         
               </tbody>
             </table>
           </div>
         ";
                            }
                            // line 77
                            echo "       ";
                        }
                        // line 78
                        echo "        
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 81
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 81);
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 85
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 87
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-method\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2271b8f210e46b0c9b4ea0d29a676196c0e26a69e834eb6ae317362ad60a75c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 87,  363 => 85,  352 => 81,  344 => 78,  341 => 77,  334 => 72,  327 => 70,  319 => 68,  317 => 67,  313 => 66,  309 => 65,  306 => 64,  302 => 63,  297 => 60,  291 => 58,  289 => 57,  285 => 56,  281 => 55,  275 => 51,  272 => 50,  269 => 49,  263 => 48,  260 => 47,  253 => 45,  220 => 42,  215 => 40,  212 => 39,  179 => 36,  174 => 34,  171 => 33,  138 => 30,  133 => 28,  127 => 27,  119 => 26,  115 => 25,  109 => 24,  105 => 23,  101 => 22,  98 => 21,  96 => 20,  87 => 17,  81 => 15,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  63 => 9,  61 => 8,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2271b8f210e46b0c9b4ea0d29a676196c0e26a69e834eb6ae317362ad60a75c7", "");
    }
}
