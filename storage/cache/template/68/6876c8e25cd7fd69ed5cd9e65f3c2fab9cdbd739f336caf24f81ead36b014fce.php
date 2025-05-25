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

/* __string_template__07627ead5fea5d36a4eef883dbc2dd305a5a8021c9e7dbc557830a538c47a811 */
class __TwigTemplate_c1429b780e481af1f79890f3d35c313e41cfdbc7c60051704c2af581579feb66 extends Template
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
        echo "<h3 class=\"container\">Featured Products</h3>
<div class=\"container\">
  <div class=\"row product-page\">
 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex\">
    <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
      <div class=\"image card\"><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive card-img-top\" /></a>
      <div class=\"caption\">
      <div class=\"card-body\">
        <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "</a></h4>
        <p class=\"card-text\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 11);
            echo "</p>
        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 12)) {
                // line 13
                echo "        <div class=\"rating\">
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 15
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 15) < $context["i"])) {
                        // line 16
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 18
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 20
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        </div>
      </div>
      </div>
        ";
            }
            // line 25
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25)) {
                // line 26
                echo "        <p class=\"price\">
          ";
                // line 27
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                    echo "
          ";
                } else {
                    // line 30
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "</span>
          ";
                }
                // line 32
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 33);
                    echo "</span>
          ";
                }
                // line 35
                echo "        </p>
        ";
            }
            // line 37
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 40
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 41);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__07627ead5fea5d36a4eef883dbc2dd305a5a8021c9e7dbc557830a538c47a811";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 47,  157 => 41,  151 => 40,  145 => 39,  141 => 37,  137 => 35,  129 => 33,  126 => 32,  118 => 30,  112 => 28,  110 => 27,  107 => 26,  104 => 25,  98 => 21,  92 => 20,  88 => 18,  84 => 16,  81 => 15,  77 => 14,  74 => 13,  72 => 12,  68 => 11,  62 => 10,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__07627ead5fea5d36a4eef883dbc2dd305a5a8021c9e7dbc557830a538c47a811", "");
    }
}
