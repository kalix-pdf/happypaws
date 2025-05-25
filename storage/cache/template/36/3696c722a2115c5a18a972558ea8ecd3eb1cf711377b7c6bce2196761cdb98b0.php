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

/* __string_template__bd90558a5ff3a6310830d39fb9130d389f81e8a83b663b9e2e08fde5b50b81e0 */
class __TwigTemplate_96230f9b1d924a397bdb28fabe9769ef3a110e75e8ce4b0ea053633a2d864325 extends Template
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
            echo "\" class=\"img-responsive card-img-top\" /></a></div>
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
        ";
            }
            // line 24
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <p class=\"price\">
          ";
                // line 26
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "
          ";
                } else {
                    // line 29
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    echo "</span>
          ";
                }
                // line 31
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32);
                    echo "</span>
          ";
                }
                // line 34
                echo "        </p>
        ";
            }
            // line 36
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 39
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 40
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
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
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bd90558a5ff3a6310830d39fb9130d389f81e8a83b663b9e2e08fde5b50b81e0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  156 => 40,  150 => 39,  144 => 38,  140 => 36,  136 => 34,  128 => 32,  125 => 31,  117 => 29,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  98 => 21,  92 => 20,  88 => 18,  84 => 16,  81 => 15,  77 => 14,  74 => 13,  72 => 12,  68 => 11,  62 => 10,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bd90558a5ff3a6310830d39fb9130d389f81e8a83b663b9e2e08fde5b50b81e0", "");
    }
}
