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

/* __string_template__8d05f253b8a343777432400ace31f9c56b1e9ad836154d13529f9e7a5d9fdf7c */
class __TwigTemplate_34374882efce39520e90597c2bf6d20ca3cc0b297c4d2650412e8fda243dc616 extends Template
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
        <!-- \"All Products\" Button -->
        <a href=\"";
            // line 9
            echo ($context["collection_url"] ?? null);
            echo "&category_id=0&id=";
            echo ($context["seller_id"] ?? null);
            echo "\" class=\"list-group-item ";
            if ((($context["category_id"] ?? null) == 0)) {
                echo "active";
            }
            echo "\">All Products</a>
        
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 12) == ($context["category_id"] ?? null))) {
                    // line 13
                    echo "            <!-- Category is Active -->
            <a href=\"";
                    // line 14
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
                            echo "                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 19) == ($context["child_id"] ?? null))) {
                                // line 20
                                echo "                  <!-- Child is Active -->
                  <a href=\"";
                                // line 21
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 21);
                                echo "\" class=\"list-group-item active list-group-subitem\">
                    <i class=\"fa fa-paw me-3\"></i> ";
                                // line 22
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                                echo "
                  </a>
                ";
                            } else {
                                // line 25
                                echo "                  <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                                echo "\" class=\"list-group-item list-group-subitem\">
                    <i class=\"fa fa-paw me-3\"></i> ";
                                // line 26
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                                echo "
                  </a>
                ";
                            }
                            // line 29
                            echo "              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        echo "            ";
                    }
                    // line 31
                    echo "          ";
                } else {
                    // line 32
                    echo "            <!-- Category is not Active -->
            <a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\" class=\"list-group-item ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "category_id", [], "any", false, false, false, 33) == ($context["child_id"] ?? null))) {
                        echo "active";
                    }
                    echo "\">
              <i class=\"fa fa-paw me-3\"></i> ";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    echo "
            </a>
          ";
                }
                // line 37
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </div>
    </div>
  ";
        }
        // line 41
        echo "</div>

  <div class=\"col-md-9\">
    <div class=\"row mb-3\">

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 48
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 51
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 51);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 51) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 51);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </select>
        </div>
      </div>

      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 59
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 62
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 62);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 62) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 62);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "          </select>
        </div>
      </div>

      <div class=\"d-flex justify-content-center\">
      <div class=\"col-md-9 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm px-4\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 71
        echo ($context["text_product_name"] ?? null);
        echo ": </label>
          <input type=\"text\" style=\"border-bottom: 1px solid #162F65;;\" name=\"input\" value=\"";
        // line 72
        echo (((array_key_exists("product_name", $context) && ($context["product_name"] ?? null))) ? (($context["product_name"] ?? null)) : (""));
        echo "\"  class=\"form-control col-sm-3 mx-3\"/>
        </div>
      </div>
      </div>
      
    </div>

    ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "\t<div class=\"container\">
\t\t<div class=\"row-product\">
\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t<a href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\">
\t\t\t\t<img src=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 87);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a>
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<a class=\"text-decoration-none text-black\" href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
                echo "\">
\t\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 91);
                echo "</h4>
\t\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 92);
                echo "</p></a>

\t\t\t\t";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "\t\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t\t";
                    // line 96
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 99
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 102);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 106
                echo "
\t\t\t\t";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 110
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 110) < $context["i"])) {
                            // line 111
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 113
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 115
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 118
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 123
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 125
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 128
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
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
            // line 135
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 139
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 140
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 143
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 144
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 146
            echo "    ";
        }
        // line 147
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8d05f253b8a343777432400ace31f9c56b1e9ad836154d13529f9e7a5d9fdf7c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 147,  412 => 146,  406 => 144,  403 => 143,  397 => 140,  393 => 139,  387 => 135,  372 => 128,  364 => 125,  359 => 123,  354 => 121,  349 => 118,  345 => 116,  339 => 115,  335 => 113,  331 => 111,  328 => 110,  324 => 109,  321 => 108,  319 => 107,  316 => 106,  312 => 104,  304 => 102,  301 => 101,  293 => 99,  287 => 97,  285 => 96,  282 => 95,  280 => 94,  275 => 92,  271 => 91,  267 => 90,  257 => 87,  253 => 86,  248 => 83,  244 => 82,  240 => 80,  238 => 79,  228 => 72,  224 => 71,  215 => 64,  202 => 62,  198 => 61,  193 => 59,  185 => 53,  172 => 51,  168 => 50,  163 => 48,  154 => 41,  149 => 38,  143 => 37,  137 => 34,  129 => 33,  126 => 32,  123 => 31,  120 => 30,  114 => 29,  108 => 26,  103 => 25,  97 => 22,  93 => 21,  90 => 20,  87 => 19,  82 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  65 => 12,  61 => 11,  50 => 9,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8d05f253b8a343777432400ace31f9c56b1e9ad836154d13529f9e7a5d9fdf7c", "");
    }
}
