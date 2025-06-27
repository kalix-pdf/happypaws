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

/* __string_template__d25d37d9d928400eb0e7cafe41dfd2a1cdb5a0b86fee7a4d01c98173cc93892d */
class __TwigTemplate_ab8fec93edafa5d0f4765b47254d47e4652f7d8e211ed2fc92ad7e839ef0d285 extends Template
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

<div id=\"seller-collection\" class=\"d-flex\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 12
        if (($context["categories"] ?? null)) {
            // line 13
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                    // line 17
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
            ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 20) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 21
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "            ";
                    }
                    // line 25
                    echo "          ";
                } else {
                    // line 26
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    echo "</a>
          ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      </div>
    </div>
    ";
        }
        // line 32
        echo "  </div>

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 40
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 43
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 43);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 43) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 43);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
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
    </div>

    <!-- Product Grid -->
    ";
        // line 63
        if (($context["products"] ?? null)) {
            // line 64
            echo "    <div class=\"product-grid-wrapper d-flex flex-wrap gap-2\">
      ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
        <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
          <div class=\"image text-center\">
            <img src=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 69);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" class=\"img-fluid mx-auto d-block\" />
          </div>
          <div class=\"caption mt-3\">
            <h4 class=\"fs-5 text-black\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 72);
                echo "</h4>
            <p class=\"text-break text-truncate-2\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 73);
                echo "</p>

            ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "            <p class=\"price mt-2\">
              ";
                    // line 77
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                        echo "
              ";
                    } else {
                        // line 80
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "</span>
              ";
                    }
                    // line 82
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 83);
                        echo "</span>
              ";
                    }
                    // line 85
                    echo "            </p>
            ";
                }
                // line 87
                echo "
            ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "            <div class=\"rating d-flex gap-1 fs-4\">
              ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 91
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91) < $context["i"])) {
                            // line 92
                            echo "                  <i class=\"fa fa-paw text-muted\"></i>
                ";
                        } else {
                            // line 94
                            echo "                  <i class=\"fa fa-paw stars\"></i>
                ";
                        }
                        // line 96
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "            </div>
            ";
                }
                // line 99
                echo "          </div>

          <div class=\"button-group mt-3\">
            <button type=\"button\" onclick=\"cart.add('";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "');\">
              <i class=\"fa fa-shopping-cart\"></i>
              <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 104
                echo ($context["button_cart"] ?? null);
                echo "</span>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 106
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 109
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 109);
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
            // line 116
            echo "    </div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 119
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 120
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 123
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 124
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 126
            echo "    ";
        }
        // line 127
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d25d37d9d928400eb0e7cafe41dfd2a1cdb5a0b86fee7a4d01c98173cc93892d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 127,  355 => 126,  349 => 124,  346 => 123,  340 => 120,  336 => 119,  331 => 116,  316 => 109,  308 => 106,  303 => 104,  298 => 102,  293 => 99,  289 => 97,  283 => 96,  279 => 94,  275 => 92,  272 => 91,  268 => 90,  265 => 89,  263 => 88,  260 => 87,  256 => 85,  248 => 83,  245 => 82,  237 => 80,  231 => 78,  229 => 77,  226 => 76,  224 => 75,  219 => 73,  215 => 72,  205 => 69,  200 => 66,  196 => 65,  193 => 64,  191 => 63,  183 => 57,  170 => 55,  166 => 54,  161 => 52,  152 => 45,  139 => 43,  135 => 42,  130 => 40,  120 => 32,  115 => 29,  109 => 28,  101 => 26,  98 => 25,  95 => 24,  86 => 21,  77 => 20,  72 => 19,  70 => 18,  63 => 17,  60 => 16,  56 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d25d37d9d928400eb0e7cafe41dfd2a1cdb5a0b86fee7a4d01c98173cc93892d", "");
    }
}
