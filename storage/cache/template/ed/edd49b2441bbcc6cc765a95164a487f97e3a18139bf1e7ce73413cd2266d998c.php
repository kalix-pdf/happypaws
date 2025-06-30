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

/* __string_template__658f830c6111e498a45c0d08a49b4984d39819c7ba8c2967254c5aaa99824581 */
class __TwigTemplate_4232e249c34f58f40fcb385ada41eb2855a8f1d8a002a8c44c7c8d6fc17977ce extends Template
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
        echo "
<div id=\"seller-collection\">

  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 5
        if (($context["categories"] ?? null)) {
            // line 6
            echo "    <div id=\"column-left\">
        <div class=\"list-group\">
      <a href=\"#\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
        The current link item
      </a>
      <a href=\"#\" class=\"list-group-item list-group-item-action\">A second link item</a>
      <a href=\"#\" class=\"list-group-item list-group-item-action\">A third link item</a>
      <a href=\"#\" class=\"list-group-item list-group-item-action\">A fourth link item</a>
      <a href=\"#\" class=\"list-group-item list-group-item-action disabled\" aria-disabled=\"true\">A disabled link item</a>
    </div>
      <div class=\"list-group border-end border-info px-3\">
        <a href=\"";
            // line 17
            echo ($context["collection_url"] ?? null);
            echo "\" class=\"list-group-item-action active\" aria-current=\"true\">All Products</a>
        
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 20
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 20) == ($context["category_id"] ?? null))) {
                    // line 21
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\" class=\"list-group-item\"><i class=\"fa fa-paw me-3\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "</a>
            ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 24
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 24);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 24) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo " list-group-subitem\">
                  <i class=\"fa fa-paw me-3\"></i> ";
                            // line 25
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 25);
                            echo " 
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "            ";
                    }
                    // line 29
                    echo "          ";
                } else {
                    // line 30
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\" class=\"list-group-item list-group-item-action ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "category_id", [], "any", false, false, false, 30) == ($context["child_id"] ?? null))) {
                    }
                    echo " list-group-subitem\">
              <i class=\"fa fa-paw me-3\"></i>";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a>
          ";
                }
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </div>
    </div>
    ";
        }
        // line 37
        echo "  </div>

  <div class=\"col-md-9\">
    <div class=\"row mb-3\">

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 44
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 47
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 47);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 47) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 47);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </select>
        </div>
      </div>

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 55
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 58
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 58);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 58) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 58);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "          </select>
        </div>
      </div>

      <div class=\"d-flex justify-content-center\">
      <div class=\"col-md-9 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm px-4\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 67
        echo ($context["text_product_name"] ?? null);
        echo ": </label>
          <input type=\"text\" style=\"border-bottom: 1px solid #162F65;;\" name=\"input\" value=\"";
        // line 68
        echo (((array_key_exists("product_name", $context) && ($context["product_name"] ?? null))) ? (($context["product_name"] ?? null)) : (""));
        echo "\"  class=\"form-control col-sm-3 mx-3\"/>
        </div>
      </div>
      </div>
      
    </div>

    ";
        // line 75
        if (($context["products"] ?? null)) {
            // line 76
            echo "\t<div class=\"container\">
\t\t<div class=\"row-product\">
\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t<a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
                echo "\">
\t\t\t\t<img src=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 83);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a>
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<a class=\"text-decoration-none text-black\" href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\">
\t\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "</h4>
\t\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 88);
                echo "</p></a>

\t\t\t\t";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "\t\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t\t";
                    // line 92
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 95
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 95);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 97
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 97)) {
                        // line 98
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 98);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 102
                echo "
\t\t\t\t";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 106
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 106) < $context["i"])) {
                            // line 107
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 109
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 111
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 114
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 119
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 121
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\">
\t\t\t\t<i class=\"fa fa-exchange\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 135
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 136
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 139
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 140
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 142
            echo "    ";
        }
        // line 143
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__658f830c6111e498a45c0d08a49b4984d39819c7ba8c2967254c5aaa99824581";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 143,  390 => 142,  384 => 140,  381 => 139,  375 => 136,  371 => 135,  365 => 131,  350 => 124,  342 => 121,  337 => 119,  332 => 117,  327 => 114,  323 => 112,  317 => 111,  313 => 109,  309 => 107,  306 => 106,  302 => 105,  299 => 104,  297 => 103,  294 => 102,  290 => 100,  282 => 98,  279 => 97,  271 => 95,  265 => 93,  263 => 92,  260 => 91,  258 => 90,  253 => 88,  249 => 87,  245 => 86,  235 => 83,  231 => 82,  226 => 79,  222 => 78,  218 => 76,  216 => 75,  206 => 68,  202 => 67,  193 => 60,  180 => 58,  176 => 57,  171 => 55,  163 => 49,  150 => 47,  146 => 46,  141 => 44,  132 => 37,  127 => 34,  121 => 33,  116 => 31,  108 => 30,  105 => 29,  102 => 28,  93 => 25,  84 => 24,  79 => 23,  77 => 22,  70 => 21,  67 => 20,  63 => 19,  58 => 17,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__658f830c6111e498a45c0d08a49b4984d39819c7ba8c2967254c5aaa99824581", "");
    }
}
