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

/* __string_template__564969c14a40f4076c55734e6871900b48ee83c66b356480e7b0c0710bb120d3 */
class __TwigTemplate_333c8e4e8fb9ee069aad409b6735e0db664543769907553ddfde8c62ffb765a6 extends Template
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
</style>

<div id=\"seller-collection\" class=\"d-flex gap-4\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 10
        if (($context["categories"] ?? null)) {
            // line 11
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 14) == ($context["category_id"] ?? null))) {
                    // line 15
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>
            ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 18
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 18) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 19
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "          ";
                } else {
                    // line 24
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                    echo "</a>
          ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </div>
    </div>
    ";
        }
        // line 30
        echo "  </div>

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 38
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 41
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 41);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 41) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 41);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 50
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 53
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 53);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 53) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 53);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 61
        if (($context["products"] ?? null)) {
            // line 62
            echo "    <div class=\"product-grid-wrapper d-flex flex-wrap justify-content-between gap-5\">
      ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
        <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition h-100\">
          <div class=\"image text-center\">
            <img src=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 67);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\" class=\"img-fluid mx-auto d-block\" />
          </div>
          <div class=\"caption mt-3\">
            <h4 class=\"fs-5 text-black\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "</h4>
            <p class=\"text-break text-truncate-2\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 71);
                echo "</p>

            ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "            <p class=\"price mt-2\">
              ";
                    // line 75
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                        echo "
              ";
                    } else {
                        // line 78
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                        echo "</span>
              ";
                    }
                    // line 80
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 81);
                        echo "</span>
              ";
                    }
                    // line 83
                    echo "            </p>
            ";
                }
                // line 85
                echo "
            ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "            <div class=\"rating d-flex gap-1 fs-4\">
              ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 89
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89) < $context["i"])) {
                            // line 90
                            echo "                  <i class=\"fa fa-paw text-muted\"></i>
                ";
                        } else {
                            // line 92
                            echo "                  <i class=\"fa fa-paw stars\"></i>
                ";
                        }
                        // line 94
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "            </div>
            ";
                }
                // line 97
                echo "          </div>

          <div class=\"button-group mt-3\">
            <button type=\"button\" onclick=\"cart.add('";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 100);
                echo "');\">
              <i class=\"fa fa-shopping-cart\"></i>
              <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 102
                echo ($context["button_cart"] ?? null);
                echo "</span>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 104
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 107
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
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
            // line 114
            echo "    </div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 117
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 118
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 121
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 122
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 124
            echo "    ";
        }
        // line 125
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__564969c14a40f4076c55734e6871900b48ee83c66b356480e7b0c0710bb120d3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 125,  353 => 124,  347 => 122,  344 => 121,  338 => 118,  334 => 117,  329 => 114,  314 => 107,  306 => 104,  301 => 102,  296 => 100,  291 => 97,  287 => 95,  281 => 94,  277 => 92,  273 => 90,  270 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  254 => 83,  246 => 81,  243 => 80,  235 => 78,  229 => 76,  227 => 75,  224 => 74,  222 => 73,  217 => 71,  213 => 70,  203 => 67,  198 => 64,  194 => 63,  191 => 62,  189 => 61,  181 => 55,  168 => 53,  164 => 52,  159 => 50,  150 => 43,  137 => 41,  133 => 40,  128 => 38,  118 => 30,  113 => 27,  107 => 26,  99 => 24,  96 => 23,  93 => 22,  84 => 19,  75 => 18,  70 => 17,  68 => 16,  61 => 15,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__564969c14a40f4076c55734e6871900b48ee83c66b356480e7b0c0710bb120d3", "");
    }
}
