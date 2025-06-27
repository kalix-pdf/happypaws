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

/* __string_template__41015b6b7dca0e38e9c0f4fe58cd03a3df4fdaa8a809513db8a342409a10519d */
class __TwigTemplate_821ecd138ee39be6cbffc080549f574541f41258bb3daa8005bad8e3601bf39a extends Template
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
            echo "    <div class=\"d-flex flex-wrap gap-5\">
      ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex\">
    <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
      <div class=\"image\"><a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a></div>
      <div class=\"caption\">
        <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "</a></h4>
        <p >";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 76);
                echo "</p>
        ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "        <div class=\"rating d-flex gap-3 fs-4\">
          ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 80
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 80) < $context["i"])) {
                            // line 81
                            echo "          <i class=\"fa fa-paw text-muted\"></i>
          ";
                        } else {
                            // line 83
                            echo "          <i class=\"fa fa-paw stars\"></i>
          ";
                        }
                        // line 85
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "        </div>
        ";
                }
                // line 88
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "        <p class=\"price\">
          ";
                    // line 90
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
                        echo "
          ";
                    } else {
                        // line 93
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93);
                        echo "</span>
          ";
                    }
                    // line 95
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 95)) {
                        // line 96
                        echo "          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 96);
                        echo "</span>
          ";
                    }
                    // line 98
                    echo "        </p>
        ";
                }
                // line 100
                echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 103
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 104
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    </div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 112
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 113
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 116
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 117
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 119
            echo "    ";
        }
        // line 120
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__41015b6b7dca0e38e9c0f4fe58cd03a3df4fdaa8a809513db8a342409a10519d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 120,  350 => 119,  344 => 117,  341 => 116,  335 => 113,  331 => 112,  326 => 109,  313 => 104,  307 => 103,  301 => 102,  297 => 100,  293 => 98,  285 => 96,  282 => 95,  274 => 93,  268 => 91,  266 => 90,  263 => 89,  260 => 88,  256 => 86,  250 => 85,  246 => 83,  242 => 81,  239 => 80,  235 => 79,  232 => 78,  230 => 77,  226 => 76,  220 => 75,  209 => 73,  205 => 71,  201 => 70,  198 => 69,  196 => 68,  188 => 62,  175 => 60,  171 => 59,  166 => 57,  157 => 50,  144 => 48,  140 => 47,  135 => 45,  125 => 37,  120 => 34,  114 => 33,  106 => 31,  103 => 30,  100 => 29,  91 => 26,  82 => 25,  77 => 24,  75 => 23,  68 => 22,  65 => 21,  61 => 20,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__41015b6b7dca0e38e9c0f4fe58cd03a3df4fdaa8a809513db8a342409a10519d", "");
    }
}
