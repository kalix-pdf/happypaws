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

/* __string_template__4f91612bff484953850e58c92df478ae1f510b18388a7335913d668b46e37c8f */
class __TwigTemplate_9beb79f2472f62406813d001dc37d2bf804cae9ea15d763fe4e5e5320de52d39 extends Template
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
  .close {
    margin-right: 1%;
  }
  @media (min-width: 1200px) {
\t#seller-collection {
\t\tdisplay: flex;
\t\tgap: 20px;
  \t}
\t.row-product {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tcolumn-gap: 75px;
\t}
  }

</style>

<div id=\"seller-collection\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 22
        if (($context["categories"] ?? null)) {
            // line 23
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 26) == ($context["category_id"] ?? null))) {
                    // line 27
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    echo "</a>
            ";
                    // line 28
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 30
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 30);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 30) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 31
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "            ";
                    }
                    // line 35
                    echo "          ";
                } else {
                    // line 36
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    echo "</a>
          ";
                }
                // line 38
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </div>
    </div>
    ";
        }
        // line 42
        echo "  </div>

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 50
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 53
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 53);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 53) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 53);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 62
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 65
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 65);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 65) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 65);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 73
        if (($context["products"] ?? null)) {
            // line 74
            echo "\t<div class=\"container\">
\t\t<div class=\"row-product\">
\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 77
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t<a href=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                echo "\">
\t\t\t\t<img src=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 81);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a>
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<a class=\"text-decoration-none text-black\" href=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
                echo "\">
\t\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
                echo "</h4>
\t\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 86);
                echo "</p></a>

\t\t\t\t";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "\t\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t\t";
                    // line 90
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 93
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 95)) {
                        // line 96
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 96);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 100
                echo "
\t\t\t\t";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 104) < $context["i"])) {
                            // line 105
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 107
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 109
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 112
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 117
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 119
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 122
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
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
            // line 129
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 133
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 134
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 137
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 138
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 140
            echo "    ";
        }
        // line 141
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__4f91612bff484953850e58c92df478ae1f510b18388a7335913d668b46e37c8f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 141,  375 => 140,  369 => 138,  366 => 137,  360 => 134,  356 => 133,  350 => 129,  335 => 122,  327 => 119,  322 => 117,  317 => 115,  312 => 112,  308 => 110,  302 => 109,  298 => 107,  294 => 105,  291 => 104,  287 => 103,  284 => 102,  282 => 101,  279 => 100,  275 => 98,  267 => 96,  264 => 95,  256 => 93,  250 => 91,  248 => 90,  245 => 89,  243 => 88,  238 => 86,  234 => 85,  230 => 84,  220 => 81,  216 => 80,  211 => 77,  207 => 76,  203 => 74,  201 => 73,  193 => 67,  180 => 65,  176 => 64,  171 => 62,  162 => 55,  149 => 53,  145 => 52,  140 => 50,  130 => 42,  125 => 39,  119 => 38,  111 => 36,  108 => 35,  105 => 34,  96 => 31,  87 => 30,  82 => 29,  80 => 28,  73 => 27,  70 => 26,  66 => 25,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4f91612bff484953850e58c92df478ae1f510b18388a7335913d668b46e37c8f", "");
    }
}
