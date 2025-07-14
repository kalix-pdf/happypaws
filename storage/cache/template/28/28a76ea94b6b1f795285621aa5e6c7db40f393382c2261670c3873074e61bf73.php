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

/* customerpartner/collection.twig */
class __TwigTemplate_ff343a30de809acac240179a93bacb142cac6bb41d133f2b70a83935a0051df0 extends Template
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
      <div class=\"list-group border-end border-info px-3\">
        <a href=\"";
            // line 8
            echo ($context["collection_url"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action ";
            if ((($context["category_id"] ?? null) == 0)) {
                echo "active";
            }
            echo "\">
          All Products
        </a>
        
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                    // line 14
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                    echo "\" class=\"list-group-item active\">
              <i class=\"fa fa-paw me-3\"></i> ";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "
            </a>
            ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 19);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 19) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo " list-group-subitem\">
                  <i class=\"fa fa-paw me-3\"></i> ";
                            // line 20
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "            ";
                    }
                    // line 24
                    echo "          ";
                } else {
                    // line 25
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
                    echo "\" class=\"list-group-item ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25) == ($context["category_id"] ?? null))) {
                        echo "active";
                    }
                    echo "\">
              <i class=\"fa fa-paw me-3\"></i> ";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    echo "
            </a>
          ";
                }
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </div>
    </div>
  ";
        }
        // line 33
        echo "  </div>


  <div class=\"col-md-9\">
    <div class=\"row mb-3\">

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 41
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 44
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 44) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "          </select>
        </div>
      </div>

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 52
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 55
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 55);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 55) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 55);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "          </select>
        </div>
      </div>

      <div class=\"d-flex justify-content-center\">
      <div class=\"col-md-9 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm px-4\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 64
        echo ($context["text_product_name"] ?? null);
        echo ": </label>
          <input type=\"text\" style=\"border-bottom: 1px solid #162F65;;\" name=\"input\" value=\"";
        // line 65
        echo (((array_key_exists("product_name", $context) && ($context["product_name"] ?? null))) ? (($context["product_name"] ?? null)) : (""));
        echo "\"  class=\"form-control col-sm-3 mx-3\"/>
        </div>
      </div>
      </div>
      
    </div>

    ";
        // line 72
        if (($context["products"] ?? null)) {
            // line 73
            echo "\t<div class=\"container\">
\t\t<div class=\"row-product\">
\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t<a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                echo "\">
\t\t\t\t<img src=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a>
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<a class=\"text-decoration-none text-black\" href=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
                echo "\">
\t\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "</h4>
\t\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 85);
                echo "</p></a>

\t\t\t\t";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "\t\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t\t";
                    // line 89
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89)) {
                        // line 90
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 92
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 95);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 97
                    echo "\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 99
                echo "
\t\t\t\t";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 103
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 103) < $context["i"])) {
                            // line 104
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 106
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 108
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 111
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 116
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 118
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 121
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
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
            // line 128
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 132
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 133
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 136
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 137
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 139
            echo "    ";
        }
        // line 140
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customerpartner/collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 140,  393 => 139,  387 => 137,  384 => 136,  378 => 133,  374 => 132,  368 => 128,  353 => 121,  345 => 118,  340 => 116,  335 => 114,  330 => 111,  326 => 109,  320 => 108,  316 => 106,  312 => 104,  309 => 103,  305 => 102,  302 => 101,  300 => 100,  297 => 99,  293 => 97,  285 => 95,  282 => 94,  274 => 92,  268 => 90,  266 => 89,  263 => 88,  261 => 87,  256 => 85,  252 => 84,  248 => 83,  238 => 80,  234 => 79,  229 => 76,  225 => 75,  221 => 73,  219 => 72,  209 => 65,  205 => 64,  196 => 57,  183 => 55,  179 => 54,  174 => 52,  166 => 46,  153 => 44,  149 => 43,  144 => 41,  134 => 33,  129 => 30,  123 => 29,  117 => 26,  108 => 25,  105 => 24,  102 => 23,  93 => 20,  84 => 19,  79 => 18,  77 => 17,  72 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/collection.twig", "");
    }
}
