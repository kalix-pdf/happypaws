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

/* __string_template__36b1da6ae43a7ec2f955b15403778455d889c931a78a464e3ca247863817f713 */
class __TwigTemplate_df76d4a729a4ee2989d603cae919cd913be96936d3ddb764550ebd09bd5deecf extends Template
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
\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "</h4>
\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 85);
                echo "</p>

\t\t\t\t";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t";
                    // line 89
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89)) {
                        // line 90
                        echo "\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "
\t\t\t\t";
                    } else {
                        // line 92
                        echo "\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        echo "</span>
\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 95);
                        echo "</span>
\t\t\t\t";
                    }
                    // line 97
                    echo "\t\t\t\t</p>
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
        return "__string_template__36b1da6ae43a7ec2f955b15403778455d889c931a78a464e3ca247863817f713";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 140,  371 => 139,  365 => 137,  362 => 136,  356 => 133,  352 => 132,  346 => 128,  331 => 121,  323 => 118,  318 => 116,  313 => 114,  308 => 111,  304 => 109,  298 => 108,  294 => 106,  290 => 104,  287 => 103,  283 => 102,  280 => 101,  278 => 100,  275 => 99,  271 => 97,  263 => 95,  260 => 94,  252 => 92,  246 => 90,  244 => 89,  241 => 88,  239 => 87,  234 => 85,  230 => 84,  220 => 81,  216 => 80,  211 => 77,  207 => 76,  203 => 74,  201 => 73,  193 => 67,  180 => 65,  176 => 64,  171 => 62,  162 => 55,  149 => 53,  145 => 52,  140 => 50,  130 => 42,  125 => 39,  119 => 38,  111 => 36,  108 => 35,  105 => 34,  96 => 31,  87 => 30,  82 => 29,  80 => 28,  73 => 27,  70 => 26,  66 => 25,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__36b1da6ae43a7ec2f955b15403778455d889c931a78a464e3ca247863817f713", "");
    }
}
