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

/* __string_template__b08d55371c307b8610f6b7e23bea74807c99c37da4028c99b779d4c27f8db68a */
class __TwigTemplate_0d55c5f1211ad08432538a66a301d57763750c2ac3fe54913258bc7d083898c3 extends Template
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
            echo "\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
          The current link item
        </a>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 12) == ($context["category_id"] ?? null))) {
                    // line 13
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                    echo "\" class=\"list-group-item list-group-item-action\">A second link item</a>
            ";
                    // line 14
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                        // line 15
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 16
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                            echo "\" class=\"list-group-item list-group-item-action\">A third link item</a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "            ";
                    }
                    // line 19
                    echo "          ";
                } else {
                    // line 20
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\" class=\"list-group-item list-group-item-action\">A fourth link item</a>
          ";
                }
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>

      <div class=\"list-group border-end border-info px-3\">
        <a href=\"";
            // line 26
            echo ($context["collection_url"] ?? null);
            echo "\" class=\"list-group-item-action active\" aria-current=\"true\">All Products</a>
        
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                    // line 30
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\" class=\"list-group-item\"><i class=\"fa fa-paw me-3\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a>
            ";
                    // line 31
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                        // line 32
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 33
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 33) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo " list-group-subitem\">
                  <i class=\"fa fa-paw me-3\"></i> ";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo " 
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 37
                        echo "            ";
                    }
                    // line 38
                    echo "          ";
                } else {
                    // line 39
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                    echo "\" class=\"list-group-item list-group-item-action ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "category_id", [], "any", false, false, false, 39) == ($context["child_id"] ?? null))) {
                    }
                    echo " list-group-subitem\">
              <i class=\"fa fa-paw me-3\"></i>";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40);
                    echo "</a>
          ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>
    </div>
    ";
        }
        // line 46
        echo "  </div>

  <div class=\"col-md-9\">
    <div class=\"row mb-3\">

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 53
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 56
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 56);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 56) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 56);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "          </select>
        </div>
      </div>

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 64
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 67
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 67);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 67) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 67);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "          </select>
        </div>
      </div>

      <div class=\"d-flex justify-content-center\">
      <div class=\"col-md-9 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm px-4\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 76
        echo ($context["text_product_name"] ?? null);
        echo ": </label>
          <input type=\"text\" style=\"border-bottom: 1px solid #162F65;;\" name=\"input\" value=\"";
        // line 77
        echo (((array_key_exists("product_name", $context) && ($context["product_name"] ?? null))) ? (($context["product_name"] ?? null)) : (""));
        echo "\"  class=\"form-control col-sm-3 mx-3\"/>
        </div>
      </div>
      </div>
      
    </div>

    ";
        // line 84
        if (($context["products"] ?? null)) {
            // line 85
            echo "\t<div class=\"container\">
\t\t<div class=\"row-product\">
\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 88
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t<a href=\"";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 91);
                echo "\">
\t\t\t\t<img src=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 92);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a>
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<a class=\"text-decoration-none text-black\" href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                echo "\">
\t\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "</h4>
\t\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 97);
                echo "</p></a>

\t\t\t\t";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "\t\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t\t";
                    // line 101
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 104);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 107);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 111
                echo "
\t\t\t\t";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 115
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 115) < $context["i"])) {
                            // line 116
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 118
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 123
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 126);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 128
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 130
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 133
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
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
            // line 140
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 144
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 145
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 148
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 149
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 151
            echo "    ";
        }
        // line 152
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b08d55371c307b8610f6b7e23bea74807c99c37da4028c99b779d4c27f8db68a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 152,  438 => 151,  432 => 149,  429 => 148,  423 => 145,  419 => 144,  413 => 140,  398 => 133,  390 => 130,  385 => 128,  380 => 126,  375 => 123,  371 => 121,  365 => 120,  361 => 118,  357 => 116,  354 => 115,  350 => 114,  347 => 113,  345 => 112,  342 => 111,  338 => 109,  330 => 107,  327 => 106,  319 => 104,  313 => 102,  311 => 101,  308 => 100,  306 => 99,  301 => 97,  297 => 96,  293 => 95,  283 => 92,  279 => 91,  274 => 88,  270 => 87,  266 => 85,  264 => 84,  254 => 77,  250 => 76,  241 => 69,  228 => 67,  224 => 66,  219 => 64,  211 => 58,  198 => 56,  194 => 55,  189 => 53,  180 => 46,  175 => 43,  169 => 42,  164 => 40,  156 => 39,  153 => 38,  150 => 37,  141 => 34,  132 => 33,  127 => 32,  125 => 31,  118 => 30,  115 => 29,  111 => 28,  106 => 26,  101 => 23,  95 => 22,  89 => 20,  86 => 19,  83 => 18,  74 => 16,  69 => 15,  67 => 14,  62 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b08d55371c307b8610f6b7e23bea74807c99c37da4028c99b779d4c27f8db68a", "");
    }
}
