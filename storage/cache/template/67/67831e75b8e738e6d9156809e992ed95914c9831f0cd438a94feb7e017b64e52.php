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

/* __string_template__197629b1f09d97fd801d1768b78bfe382bf861b31af187afb567276fb4981551 */
class __TwigTemplate_053ffcc27843682841551029ac71bea141b7204fa1ce6debc545705f94789dbc extends Template
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
  @media (max-width: 1200px) {
  #seller-collection {
    display: flex;
    flex-wrap: wrap; /* Ensures that items wrap to the next line */
    background-color: aqua; /* Optional */
  }

  #seller-collection .col-sm-3 {
    flex: 1 0 100%; /* Stacks categories on top of the product grid */
  }

  #seller-collection .col-md-9 {
    flex: 1 0 100%; /* Ensure the product grid takes full width */
  }
}

</style>

<div id=\"seller-collection\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 26
        if (($context["categories"] ?? null)) {
            // line 27
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                    // line 31
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a>
            ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 34
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 34) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 35
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 35);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "            ";
                    }
                    // line 39
                    echo "          ";
                } else {
                    // line 40
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 40);
                    echo "\" class=\"list-group-item\">";
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

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 54
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 57
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 57);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 57) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 57);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 66
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 69
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 69);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 69) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 69);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 77
        if (($context["products"] ?? null)) {
            // line 78
            echo "    <div class=\"product-grid-wrapper d-flex flex-wrap gap-2\">
      ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
        <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
          <div class=\"image text-center\">
            <img src=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 83);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "\" class=\"img-fluid mx-auto d-block\" />
          </div>
          <div class=\"caption mt-3\">
            <h4 class=\"fs-5 text-black\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "</h4>
            <p class=\"text-break text-truncate-2\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 87);
                echo "</p>

            ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "            <p class=\"price mt-2\">
              ";
                    // line 91
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        echo "
              ";
                    } else {
                        // line 94
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 94);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
                        echo "</span>
              ";
                    }
                    // line 96
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 97);
                        echo "</span>
              ";
                    }
                    // line 99
                    echo "            </p>
            ";
                }
                // line 101
                echo "
            ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "            <div class=\"rating d-flex gap-1 fs-4\">
              ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 105
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 105) < $context["i"])) {
                            // line 106
                            echo "                  <i class=\"fa fa-paw text-muted\"></i>
                ";
                        } else {
                            // line 108
                            echo "                  <i class=\"fa fa-paw stars\"></i>
                ";
                        }
                        // line 110
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "            </div>
            ";
                }
                // line 113
                echo "          </div>

          <div class=\"button-group mt-3\">
            <button type=\"button\" onclick=\"cart.add('";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 116);
                echo "');\">
              <i class=\"fa fa-shopping-cart\"></i>
              <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 118
                echo ($context["button_cart"] ?? null);
                echo "</span>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 120
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 123
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "    </div>

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
        return "__string_template__197629b1f09d97fd801d1768b78bfe382bf861b31af187afb567276fb4981551";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 141,  369 => 140,  363 => 138,  360 => 137,  354 => 134,  350 => 133,  345 => 130,  330 => 123,  322 => 120,  317 => 118,  312 => 116,  307 => 113,  303 => 111,  297 => 110,  293 => 108,  289 => 106,  286 => 105,  282 => 104,  279 => 103,  277 => 102,  274 => 101,  270 => 99,  262 => 97,  259 => 96,  251 => 94,  245 => 92,  243 => 91,  240 => 90,  238 => 89,  233 => 87,  229 => 86,  219 => 83,  214 => 80,  210 => 79,  207 => 78,  205 => 77,  197 => 71,  184 => 69,  180 => 68,  175 => 66,  166 => 59,  153 => 57,  149 => 56,  144 => 54,  134 => 46,  129 => 43,  123 => 42,  115 => 40,  112 => 39,  109 => 38,  100 => 35,  91 => 34,  86 => 33,  84 => 32,  77 => 31,  74 => 30,  70 => 29,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__197629b1f09d97fd801d1768b78bfe382bf861b31af187afb567276fb4981551", "");
    }
}
