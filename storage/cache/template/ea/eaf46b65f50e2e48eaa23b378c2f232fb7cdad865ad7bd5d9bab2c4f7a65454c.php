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

/* __string_template__2b2c595039985822e84ca0da1c8417c7ab9d0bb9af257c9c1beee1d9f1af73cd */
class __TwigTemplate_00f29f667bd8441f4a1b233d33d6bcc52d52df3f98d0baa62c35420e633ffbd5 extends Template
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
  }

</style>

<div id=\"seller-collection\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 17
        if (($context["categories"] ?? null)) {
            // line 18
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 21) == ($context["category_id"] ?? null))) {
                    // line 22
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                    echo "</a>
            ";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 25
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 25) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 26
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "          ";
                } else {
                    // line 31
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                    echo "\" class=\"list-group-item\">";
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

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 45
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 48
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 48);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 48) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 48);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 57
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 60
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 60);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 60) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 60);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 68
        if (($context["products"] ?? null)) {
            // line 69
            echo "\t<div class=\"container\">
\t\t<div class=\"d-flex flex-wrap gap-5\">
\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                echo "\t\t<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
\t\t\t<div class=\"image text-center\">
\t\t\t\t<img src=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" class=\"img-fluid mx-auto d-block\" />
\t\t\t</div>
\t\t\t<div class=\"caption mt-3\">
\t\t\t\t<h4 class=\"fs-5 text-black\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "</h4>
\t\t\t\t<p class=\"text-break text-truncate-2\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 79);
                echo "</p>

\t\t\t\t";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t<p class=\"price mt-2\">
\t\t\t\t";
                    // line 83
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83)) {
                        // line 84
                        echo "\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                        echo "
\t\t\t\t";
                    } else {
                        // line 86
                        echo "\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                        echo "</span>
\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 89);
                        echo "</span>
\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t</p>
\t\t\t\t";
                }
                // line 93
                echo "
\t\t\t\t";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "\t\t\t\t<div class=\"rating d-flex gap-1 fs-4\">
\t\t\t\t";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 97
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97) < $context["i"])) {
                            // line 98
                            echo "\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t";
                        } else {
                            // line 100
                            echo "\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t";
                        }
                        // line 102
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t</div>

\t\t\t<div class=\"button-group mt-3\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 108);
                echo "');\">
\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 110
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 112
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                echo "');\">
\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 115
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
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
            // line 122
            echo "    \t</div>
\t</div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 126
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 127
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 130
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 131
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 133
            echo "    ";
        }
        // line 134
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2b2c595039985822e84ca0da1c8417c7ab9d0bb9af257c9c1beee1d9f1af73cd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 134,  362 => 133,  356 => 131,  353 => 130,  347 => 127,  343 => 126,  337 => 122,  322 => 115,  314 => 112,  309 => 110,  304 => 108,  299 => 105,  295 => 103,  289 => 102,  285 => 100,  281 => 98,  278 => 97,  274 => 96,  271 => 95,  269 => 94,  266 => 93,  262 => 91,  254 => 89,  251 => 88,  243 => 86,  237 => 84,  235 => 83,  232 => 82,  230 => 81,  225 => 79,  221 => 78,  211 => 75,  206 => 72,  202 => 71,  198 => 69,  196 => 68,  188 => 62,  175 => 60,  171 => 59,  166 => 57,  157 => 50,  144 => 48,  140 => 47,  135 => 45,  125 => 37,  120 => 34,  114 => 33,  106 => 31,  103 => 30,  100 => 29,  91 => 26,  82 => 25,  77 => 24,  75 => 23,  68 => 22,  65 => 21,  61 => 20,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2b2c595039985822e84ca0da1c8417c7ab9d0bb9af257c9c1beee1d9f1af73cd", "");
    }
}
