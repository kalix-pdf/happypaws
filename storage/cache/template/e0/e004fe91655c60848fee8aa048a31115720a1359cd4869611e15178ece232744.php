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

/* __string_template__8a0db2baff9fc82dd7f54037d1c2f01329a27826f1eef33c69094b12fa258b3c */
class __TwigTemplate_92f95c714917d46f295959bf63e668ad19d5bd710920301f929cc8ea42539ebf extends Template
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
\t#seller-collection {
\t\tdisplay: flex;
  \t}
  }

</style>

<div id=\"seller-collection\" class=\"gap-4\">
  <!-- Category Sidebar -->
  <div class=\"col-md-3\" id=\"seller-collection-category\">
    ";
        // line 16
        if (($context["categories"] ?? null)) {
            // line 17
            echo "    <div id=\"column-left\">
      <div class=\"list-group\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 20
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 20) == ($context["category_id"] ?? null))) {
                    // line 21
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "</a>
            ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 24
                            echo "                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 24);
                            echo "\" class=\"list-group-item ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 24) == ($context["child_id"] ?? null))) {
                                echo "active";
                            }
                            echo "\">
                  &nbsp;&nbsp;&nbsp;- ";
                            // line 25
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 25);
                            echo "
                </a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "            ";
                    }
                    // line 29
                    echo "          ";
                } else {
                    // line 30
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a>
          ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      </div>
    </div>
    ";
        }
        // line 36
        echo "  </div>

  <!-- Product Grid Section -->
  <div class=\"col-md-9\">
    <div class=\"row mb-3\">
      <!-- Sort Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 44
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-2\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 47
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 47);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 47) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 47);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-6 col-sm-12 mb-2\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 56
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-2\">
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 59
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 59);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 59) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 59);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "    <div class=\"product-grid-wrapper d-flex flex-wrap justify-content-between\">
      ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 70
                echo "      <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4\">
        <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition\" style=\"width: 250px;\">
          <div class=\"image text-center\">
            <img src=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "\" class=\"img-fluid mx-auto d-block\" />
          </div>
          <div class=\"caption mt-3\">
            <h4 class=\"fs-5 text-black\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                echo "</h4>
            <p class=\"text-break text-truncate-2\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 77);
                echo "</p>

            ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "            <p class=\"price mt-2\">
              ";
                    // line 81
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "
              ";
                    } else {
                        // line 84
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 84);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                        echo "</span>
              ";
                    }
                    // line 86
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 87);
                        echo "</span>
              ";
                    }
                    // line 89
                    echo "            </p>
            ";
                }
                // line 91
                echo "
            ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "            <div class=\"rating d-flex gap-1 fs-4\">
              ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 95
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 95) < $context["i"])) {
                            // line 96
                            echo "                  <i class=\"fa fa-paw text-muted\"></i>
                ";
                        } else {
                            // line 98
                            echo "                  <i class=\"fa fa-paw stars\"></i>
                ";
                        }
                        // line 100
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "            </div>
            ";
                }
                // line 103
                echo "          </div>

          <div class=\"button-group mt-3\">
            <button type=\"button\" onclick=\"cart.add('";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                echo "');\">
              <i class=\"fa fa-shopping-cart\"></i>
              <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 108
                echo ($context["button_cart"] ?? null);
                echo "</span>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 110
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
                echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 113
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
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
            // line 120
            echo "    </div>

    <div class=\"row mt-4\">
      <div class=\"col-sm-6 text-left\">";
            // line 123
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 124
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        } else {
            // line 127
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 128
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 130
            echo "    ";
        }
        // line 131
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8a0db2baff9fc82dd7f54037d1c2f01329a27826f1eef33c69094b12fa258b3c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 131,  359 => 130,  353 => 128,  350 => 127,  344 => 124,  340 => 123,  335 => 120,  320 => 113,  312 => 110,  307 => 108,  302 => 106,  297 => 103,  293 => 101,  287 => 100,  283 => 98,  279 => 96,  276 => 95,  272 => 94,  269 => 93,  267 => 92,  264 => 91,  260 => 89,  252 => 87,  249 => 86,  241 => 84,  235 => 82,  233 => 81,  230 => 80,  228 => 79,  223 => 77,  219 => 76,  209 => 73,  204 => 70,  200 => 69,  197 => 68,  195 => 67,  187 => 61,  174 => 59,  170 => 58,  165 => 56,  156 => 49,  143 => 47,  139 => 46,  134 => 44,  124 => 36,  119 => 33,  113 => 32,  105 => 30,  102 => 29,  99 => 28,  90 => 25,  81 => 24,  76 => 23,  74 => 22,  67 => 21,  64 => 20,  60 => 19,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8a0db2baff9fc82dd7f54037d1c2f01329a27826f1eef33c69094b12fa258b3c", "");
    }
}
