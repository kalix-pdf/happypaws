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

/* __string_template__ffa1f7e6644e02aa6c210e0979e48fff499e8b46ab51cef8fd3021d2e73fc03d */
class __TwigTemplate_bc75a8c48352e9d3b336380598e82b74c4150162cc9fda78bc7d771191321807 extends Template
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 6
                echo "<p><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 6);
                echo "</strong></p>
";
                // line 7
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 7)) {
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 8));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 9
                        echo "<div class=\"radio\">
  <label> ";
                        // line 10
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 10) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 11
                            echo "    ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11);
                            // line 12
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12);
                            echo "\" checked=\"checked\" />
    ";
                        } else {
                            // line 14
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 14);
                            echo "\" />
    ";
                        }
                        // line 16
                        echo "    ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 16);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 16);
                        echo "</label>
</div>

        ";
                        // line 19
                        if (((($__internal_compile_0 = $context["quote"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["code"] ?? null) : null) == "wk_custom_shipping.wk_custom_shipping")) {
                            // line 20
                            echo "          
        ";
                            // line 21
                            if (((array_key_exists("priority_shipping", $context) && ($context["priority_shipping"] ?? null)) &&  !twig_test_empty(($context["priority_shipping"] ?? null)))) {
                                echo " 
         <p><strong>";
                                // line 22
                                echo ($context["text_priority"] ?? null);
                                echo "</strong></p>
         ";
                                // line 23
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["priority_shipping"] ?? null));
                                foreach ($context['_seq'] as $context["key"] => $context["shipping"]) {
                                    echo " 
             ";
                                    // line 24
                                    if (twig_test_iterable($context["shipping"])) {
                                        echo " 
                 <strong>";
                                        // line 25
                                        if (twig_get_attribute($this->env, $this->source, $context["shipping"], "name", [], "array", true, true, false, 25)) {
                                            echo " ";
                                            echo (($__internal_compile_1 = $context["shipping"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null);
                                            echo " ";
                                        }
                                        echo "</strong>
               ";
                                        // line 26
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["shipping"]);
                                        foreach ($context['_seq'] as $context["keys"] => $context["priority"]) {
                                            echo " 
                   ";
                                            // line 27
                                            if (($context["keys"] == "high")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 29
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_2 = $context["priority"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_high"] ?? null);
                                                echo " : ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 29) && (($__internal_compile_3 = $context["priority"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["day"] ?? null) : null))) {
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
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 29) && (($__internal_compile_5 = $context["priority"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_6 = $context["priority"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 32
                                            echo " 
                   ";
                                            // line 33
                                            if (($context["keys"] == "medium")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 35
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_7 = $context["priority"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_medium"] ?? null);
                                                echo " : ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " -";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 35) && (($__internal_compile_8 = $context["priority"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["day"] ?? null) : null))) {
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
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 35) && (($__internal_compile_10 = $context["priority"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_11 = $context["priority"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 38
                                            echo " 
                   ";
                                            // line 39
                                            if (($context["keys"] == "low")) {
                                                echo " 
                     <div class =\"radio\">
                       <label><input type=\"radio\" class = \"priority\" name=\"shipping_priority[";
                                                // line 41
                                                echo $context["key"];
                                                echo "]\" value=\"";
                                                echo (($__internal_compile_12 = $context["priority"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["amount"] ?? null) : null);
                                                echo "\" />";
                                                echo ($context["entry_low"] ?? null);
                                                echo ": ";
                                                echo ($context["text_duration"] ?? null);
                                                echo " - ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "day", [], "array", true, true, false, 41) && (($__internal_compile_13 = $context["priority"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["day"] ?? null) : null))) {
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
                                                if ((twig_get_attribute($this->env, $this->source, $context["priority"], "text", [], "array", true, true, false, 41) && (($__internal_compile_15 = $context["priority"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["text"] ?? null) : null))) {
                                                    echo " ";
                                                    echo (($__internal_compile_16 = $context["priority"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["text"] ?? null) : null);
                                                    echo " ";
                                                }
                                                echo " 
                         </label>
                     </div>
                   ";
                                            }
                                            // line 44
                                            echo " 
             ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['priority'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 46
                                        echo "             ";
                                    }
                                    // line 47
                                    echo "             ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 48
                                echo "             ";
                            }
                            // line 49
                            echo "         ";
                            if ((array_key_exists("seller_custom_shipping", $context) && ($context["seller_custom_shipping"] ?? null))) {
                                // line 50
                                echo "           <div class=\"table-responsive\" style=\"width:50%;\">
            <table class=\"table table-stripped table-bordered table-hover\">
               <thead>
                 <tr>
                   <th class=\"text-left\">";
                                // line 54
                                echo ($context["text_seller_name"] ?? null);
                                echo "</th>
                   <th class=\"text-right\">";
                                // line 55
                                echo ($context["text_seller_shipping"] ?? null);
                                echo "</th>
                   ";
                                // line 56
                                if ((array_key_exists("event_shipping_amount", $context) && ($context["event_shipping_amount"] ?? null))) {
                                    // line 57
                                    echo "                     <th class=\"text-right\">";
                                    echo ($context["text_event_amount"] ?? null);
                                    echo "</th>
                   ";
                                }
                                // line 59
                                echo "                 </tr>
               </thead>
               <tbody>
               ";
                                // line 62
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["seller_custom_shipping"] ?? null));
                                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                                    // line 63
                                    echo "                 <tr>
                     <td class=\"text-left\">";
                                    // line 64
                                    echo $context["key"];
                                    echo "</td>
                     <td class=\"text-right\">";
                                    // line 65
                                    echo twig_get_attribute($this->env, $this->source, $context["value"], "shipping_price", [], "any", false, false, false, 65);
                                    echo "</td>
                     ";
                                    // line 66
                                    if ((array_key_exists("event_shipping_amount", $context) && ($context["event_shipping_amount"] ?? null))) {
                                        // line 67
                                        echo "                     <td class=\"text-right\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["value"], "prefix", [], "any", false, false, false, 67);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["value"], "event_shipping_amount", [], "any", false, false, false, 67);
                                        echo "</td>
                     ";
                                    }
                                    // line 69
                                    echo "                 </tr>
               ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 71
                                echo "         
               </tbody>
             </table>
           </div>
         ";
                            }
                            // line 76
                            echo "       ";
                        }
                        // line 77
                        echo "        
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 80
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 80);
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 84
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ffa1f7e6644e02aa6c210e0979e48fff499e8b46ab51cef8fd3021d2e73fc03d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 84,  347 => 80,  339 => 77,  336 => 76,  329 => 71,  322 => 69,  314 => 67,  312 => 66,  308 => 65,  304 => 64,  301 => 63,  297 => 62,  292 => 59,  286 => 57,  284 => 56,  280 => 55,  276 => 54,  270 => 50,  267 => 49,  264 => 48,  258 => 47,  255 => 46,  248 => 44,  215 => 41,  210 => 39,  207 => 38,  174 => 35,  169 => 33,  166 => 32,  133 => 29,  128 => 27,  122 => 26,  114 => 25,  110 => 24,  104 => 23,  100 => 22,  96 => 21,  93 => 20,  91 => 19,  82 => 16,  76 => 14,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  56 => 7,  51 => 6,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ffa1f7e6644e02aa6c210e0979e48fff499e8b46ab51cef8fd3021d2e73fc03d", "");
    }
}
