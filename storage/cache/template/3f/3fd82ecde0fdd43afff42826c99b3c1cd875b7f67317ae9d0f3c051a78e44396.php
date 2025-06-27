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

/* __string_template__56e101dafec12ec2bf09b11854159476987374c74a66a81210ccc4e4d0728daa */
class __TwigTemplate_d39ec1773a2516ac84320ce8ecf79c02b0b66b332f44f22b187128d699c3f68a extends Template
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
  <div class=\"col-sm-3\" id=\"seller-collection-category\">
    <!-- Category sidebar temporarily disabled -->
    
    ";
        // line 11
        if (($context["categories"] ?? null)) {
            // line 12
            echo "      <column id=\"column-left\">
        <div class=\"list-group\">
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 15) == ($context["category_id"] ?? null))) {
                    // line 16
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                    echo "</a>
              ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 19) == ($context["child_id"] ?? null))) {
                                // line 20
                                echo "                    <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                                echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                                echo "</a>
                  ";
                            } else {
                                // line 22
                                echo "                    <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                                echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                                echo "</a>
                  ";
                            }
                            // line 24
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "              ";
                    }
                    // line 26
                    echo "            ";
                } else {
                    // line 27
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    echo "</a>
            ";
                }
                // line 29
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
      </column>
    ";
        }
        // line 33
        echo "   
  </div>

<div class=\"col-sm-9 col-lg-12 bg-info\">
    <div class=\"row mb-3\">

      <!-- List/Grid View Buttons -->
      ";
        // line 50
        echo "
      <!-- Search input temporarily disabled -->
      ";
        // line 60
        echo "
      <!-- Sort Dropdown -->
      <div class=\"col-md-4 col-xs-6\">
        <div class=\"form-group input-group input-group-sm ps-4\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 64
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control mx-3\">
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 67
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 67);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 67) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 67);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-4 col-xs-6\">
        <div class=\"form-group input-group input-group-sm ps-4\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 76
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control mx-3\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 79
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 79);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 79) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 79);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "    <div id=\"mp-products\">
        <div class=\"row product-page\">
          ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "            <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex\">
\t\t\t\t<div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 93);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a></div>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "</a></h4>
\t\t\t\t\t\t<p class=\"text-break text-nowrap\" >";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 96);
                echo "</p>
\t\t\t\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                    // line 101
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 104);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 107);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t<div class=\"rating d-flex gap-3 fs-4\">
\t\t\t\t\t\t\t";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 113
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 113) < $context["i"])) {
                        // line 114
                        echo "\t\t\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t\t\t";
                    } else {
                        // line 116
                        echo "\t\t\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 123
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "    </div>

</div>
    ";
        } else {
            // line 133
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 134
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 136
            echo "    ";
        }
        // line 137
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__56e101dafec12ec2bf09b11854159476987374c74a66a81210ccc4e4d0728daa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 137,  352 => 136,  346 => 134,  343 => 133,  337 => 129,  324 => 124,  318 => 123,  312 => 122,  307 => 119,  301 => 118,  297 => 116,  293 => 114,  290 => 113,  286 => 112,  283 => 111,  279 => 109,  271 => 107,  268 => 106,  260 => 104,  254 => 102,  252 => 101,  249 => 100,  246 => 99,  243 => 98,  241 => 97,  237 => 96,  231 => 95,  220 => 93,  216 => 91,  212 => 90,  208 => 88,  206 => 87,  198 => 81,  185 => 79,  181 => 78,  176 => 76,  167 => 69,  154 => 67,  150 => 66,  145 => 64,  139 => 60,  135 => 50,  126 => 33,  121 => 30,  115 => 29,  107 => 27,  104 => 26,  101 => 25,  95 => 24,  87 => 22,  79 => 20,  76 => 19,  71 => 18,  69 => 17,  62 => 16,  59 => 15,  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__56e101dafec12ec2bf09b11854159476987374c74a66a81210ccc4e4d0728daa", "");
    }
}
