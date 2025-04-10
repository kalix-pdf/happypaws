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

/* __string_template__53534307c884d428197bc962ce070c6b5e61023baa4efc34241a999e67ffd106 */
class __TwigTemplate_c7da8ad0dd5dc1bdcffaf5f6f367c517030bb01ad04abcdfc2ad371aa4e22e70 extends Template
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
        echo "<style>
.close{
\tmargin-right:1%;
}
</style>
<div id=\"seller-collection\">
\t\t<div class=\"col-sm-3\">
\t\t</div>
\t\t<div class=\"col-sm-9\">
\t\t\t<!-- <p><a href=\"";
        // line 10
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\" class=\"default-work\">";
        echo ($context["text_compare"] ?? null);
        echo "</a></p> -->
\t\t\t<div class=\"col-md-2 col-sm-6 hidden-xs\">
             <div class=\"btn-group btn-group-sm\">
               <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_list"] ?? null);
        echo "\"><i class=\"fa fa-th-list\"></i></button>
               <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 14
        echo ($context["button_grid"] ?? null);
        echo "\"><i class=\"fa fa-th\"></i></button>
             </div>
        \t</div>

\t\t\t\t<div class=\"col-md-4 text-right\">
           <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 20
        echo ($context["text_product_name"] ?? null);
        echo "</label>
           <input type=\"text\" name=\"input\" value=\"";
        // line 21
        echo (((array_key_exists("product_name", $context) && ($context["product_name"] ?? null))) ? (($context["product_name"] ?? null)) : (""));
        echo "\"  class=\"form-control col-sm-3\"/>
          </div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 27
        echo ($context["text_sort"] ?? null);
        echo "</label>
            <select id=\"input-sort\" class=\"form-control\">
              
              
              
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 33
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 33) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 34
                echo "              
              
              
              <option value=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                echo "</option>
              
              
              
              ";
            } else {
                // line 42
                echo "              
              
              
              <option value=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 45);
                echo "</option>
              
              
              
              ";
            }
            // line 50
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            
            
            
            </select>
          </div>
        </div>
\t\t\t\t <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 59
        echo ($context["text_limit"] ?? null);
        echo "</label>
            <select id=\"input-limit\" class=\"form-control\">
              
              
              
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 65
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 65) == ($context["limit"] ?? null))) {
                // line 66
                echo "              
              
              
              <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 69);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 69);
                echo "</option>
              
              
              
              ";
            } else {
                // line 74
                echo "              
              
              
              <option value=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 77);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 77);
                echo "</option>
              
              
              
              ";
            }
            // line 82
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            
            
            
            </select>
          </div>
        </div>
\t\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t<!-- for category list-->
\t\t\t";
        // line 93
        if (($context["categories"] ?? null)) {
            // line 94
            echo "\t\t\t\t<column id=\"column-left\">
\t\t\t\t\t<div class=\"list-group\">
  ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 97
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 97) == ($context["category_id"] ?? null))) {
                    echo " 
  <a href=\"";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 98);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 98);
                    echo "</a> 
  ";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 100));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 101
                            echo "  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 101) == ($context["child_id"] ?? null))) {
                                // line 102
                                echo "  <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 102);
                                echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 102);
                                echo "</a> 
  ";
                            } else {
                                // line 103
                                echo " 
  <a href=\"";
                                // line 104
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 104);
                                echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 104);
                                echo "</a>
  ";
                            }
                            // line 106
                            echo "  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "  ";
                    }
                    // line 108
                    echo "  ";
                } else {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 108);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 108);
                    echo "</a>
  ";
                }
                // line 110
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>

\t\t\t\t</column>
\t\t\t";
        }
        // line 115
        echo "\t\t</div>

\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
\t\t\t";
        // line 118
        if (($context["products"] ?? null)) {
            // line 119
            echo "\t\t\t\t<div id=\"mp-products\">
\t\t\t\t\t<div id=\"seller-collection\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 123
                echo "\t\t\t\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t\t\t\t\t\t  <div class=\"product-thumb\">
\t\t\t\t\t\t\t    <div class=\"image\"><a href=\"";
                // line 125
                echo (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
                echo "\" class=\"default-work\"><img src=\"";
                echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                echo "\" title=\"";
                echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t\t\t    <div>
\t\t\t\t\t\t\t      <div class=\"caption\">
\t\t\t\t\t\t\t        <h4><a href=\"";
                // line 128
                echo (($__internal_compile_4 = $context["product"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["href"] ?? null) : null);
                echo "\" class=\"default-work\">";
                echo (($__internal_compile_5 = $context["product"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                echo "</a></h4>
\t\t\t\t\t\t\t        <p>";
                // line 129
                echo (($__internal_compile_6 = $context["product"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["description"] ?? null) : null);
                echo "</p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t        ";
                // line 130
                if ((($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["price"] ?? null) : null)) {
                    // line 131
                    echo "\t\t\t\t\t\t\t        <p class=\"price\">
\t\t\t\t\t\t\t          ";
                    // line 132
                    if ( !(($__internal_compile_8 = $context["product"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["special"] ?? null) : null)) {
                        // line 133
                        echo "\t\t\t\t\t\t\t          ";
                        echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["price"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t          ";
                    } else {
                        // line 135
                        echo "\t\t\t\t\t\t\t          <span class=\"price-new\">";
                        echo (($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["special"] ?? null) : null);
                        echo "</span> <span class=\"price-old\">";
                        echo (($__internal_compile_11 = $context["product"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["price"] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t\t          ";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t          ";
                    if ((($__internal_compile_12 = $context["product"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["tax"] ?? null) : null)) {
                        // line 138
                        echo "\t\t\t\t\t\t\t          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo (($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["tax"] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t\t          ";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t\t        </p>
\t\t\t\t\t\t\t        ";
                }
                // line 142
                echo "\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t        ";
                // line 143
                if ((($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["rating"] ?? null) : null)) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t          ";
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t          ";
                        if (((($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["rating"] ?? null) : null) < $context["i"])) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t          ";
                        } else {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t          ";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t\t          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "\t\t\t\t\t\t\t\t        ";
                }
                // line 152
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"button-group\">
                \t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 155);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                \t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 156
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                \t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 157
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 166
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 167
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 172
        echo "\t\t</div>
\t\t";
        // line 173
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 174
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 176
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__53534307c884d428197bc962ce070c6b5e61023baa4efc34241a999e67ffd106";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 176,  450 => 174,  448 => 173,  445 => 172,  437 => 167,  433 => 166,  428 => 163,  414 => 157,  408 => 156,  400 => 155,  395 => 152,  392 => 151,  386 => 150,  382 => 148,  378 => 146,  375 => 145,  369 => 144,  367 => 143,  364 => 142,  360 => 140,  352 => 138,  349 => 137,  341 => 135,  335 => 133,  333 => 132,  330 => 131,  328 => 130,  324 => 129,  318 => 128,  306 => 125,  302 => 123,  298 => 122,  293 => 119,  291 => 118,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  255 => 106,  248 => 104,  245 => 103,  237 => 102,  234 => 101,  229 => 100,  227 => 99,  221 => 98,  216 => 97,  212 => 96,  208 => 94,  206 => 93,  194 => 83,  188 => 82,  178 => 77,  173 => 74,  163 => 69,  158 => 66,  155 => 65,  151 => 64,  143 => 59,  133 => 51,  127 => 50,  117 => 45,  112 => 42,  102 => 37,  97 => 34,  94 => 33,  90 => 32,  82 => 27,  73 => 21,  69 => 20,  60 => 14,  56 => 13,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__53534307c884d428197bc962ce070c6b5e61023baa4efc34241a999e67ffd106", "");
    }
}
