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

/* __string_template__a3416e620d27f513dad1e6fdeb3c5f491fb064614639031a1c2340ada25e389b */
class __TwigTemplate_3dcfa91455c87f8bed4fe403d0061850d3d2ddca0b33242e262e0525f382f2b2 extends Template
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
  .product-thumb {
    flex: 1 0 21%;
    margin-bottom: 30px;
  }
</style>

<div id=\"seller-collection\" class=\"d-flex gap-4\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 14
        if (($context["categories"] ?? null)) {
            // line 15
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 18) == ($context["category_id"] ?? null))) {
                    // line 19
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                    echo "</a>
            ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 20)) {
                        // line 21
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 22
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 22) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 23
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "            ";
                    }
                    // line 27
                    echo "          ";
                } else {
                    // line 28
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                    echo "</a>
          ";
                }
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
    </div>
    ";
        }
        // line 34
        echo "  </div>

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 42
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 45
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 45);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 45) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 45);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 54
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 57
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 57);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 57) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 57);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 65
        if (($context["products"] ?? null)) {
            // line 66
            echo "    <div class=\"product-grid-wrapper d-flex flex-wrap justify-content-between gap-5\">
      ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 68
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
        <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition h-100\">
          <div class=\"image text-center\">
            <img src=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 71);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                echo "\" class=\"img-fluid mx-auto d-block\" />
          </div>
          <div class=\"caption mt-3\">
            <h4 class=\"fs-5 text-black\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "</h4>
            <p class=\"text-break text-truncate-2\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 75);
                echo "</p>

            ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "            <p class=\"price mt-2\">
              ";
                    // line 79
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79)) {
                        // line 80
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "
              ";
                    } else {
                        // line 82
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 82);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "</span>
              ";
                    }
                    // line 84
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85);
                        echo "</span>
              ";
                    }
                    // line 87
                    echo "            </p>
            ";
                }
                // line 89
                echo "
            ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "            <div class=\"rating d-flex gap-1 fs-4\">
              ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 93
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 93) < $context["i"])) {
                            // line 94
                            echo "                  <i class=\"fa fa-paw text-muted\"></i>
                ";
                        } else {
                            // line 96
                            echo "                  <i class=\"fa fa-paw stars\"></i>
                ";
                        }
                        // line 98
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "            </div>
            ";
                }
                // line 101
                echo "          </div>

          <div class=\"button-group mt-3\">
            <button type=\"button\" onclick=\"cart.add('";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                echo "');\">
              <i class=\"fa fa-shopping-cart\"></i>
              <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 106
                echo ($context["button_cart"] ?? null);
                echo "</span>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 108
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 108);
                echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 111
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
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
            // line 118
            echo "    </div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 121
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 122
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 125
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 126
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 128
            echo "    ";
        }
        // line 129
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a3416e620d27f513dad1e6fdeb3c5f491fb064614639031a1c2340ada25e389b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 129,  357 => 128,  351 => 126,  348 => 125,  342 => 122,  338 => 121,  333 => 118,  318 => 111,  310 => 108,  305 => 106,  300 => 104,  295 => 101,  291 => 99,  285 => 98,  281 => 96,  277 => 94,  274 => 93,  270 => 92,  267 => 91,  265 => 90,  262 => 89,  258 => 87,  250 => 85,  247 => 84,  239 => 82,  233 => 80,  231 => 79,  228 => 78,  226 => 77,  221 => 75,  217 => 74,  207 => 71,  202 => 68,  198 => 67,  195 => 66,  193 => 65,  185 => 59,  172 => 57,  168 => 56,  163 => 54,  154 => 47,  141 => 45,  137 => 44,  132 => 42,  122 => 34,  117 => 31,  111 => 30,  103 => 28,  100 => 27,  97 => 26,  88 => 23,  79 => 22,  74 => 21,  72 => 20,  65 => 19,  62 => 18,  58 => 17,  54 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a3416e620d27f513dad1e6fdeb3c5f491fb064614639031a1c2340ada25e389b", "");
    }
}
