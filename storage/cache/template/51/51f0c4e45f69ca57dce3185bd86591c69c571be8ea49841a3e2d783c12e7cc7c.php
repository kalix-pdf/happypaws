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

/* __string_template__df9f4ce9863f283ab9463b4b039d8e59e7556fa27d47c13468f9b7598894d2a7 */
class __TwigTemplate_3053f320feaa9467c2dd34b4a6698c1c7c40e788b745a6be98def269a6de60f6 extends Template
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
        echo "<div id=\"cart\" class=\"cart-container\">
  <button type=\"button\" class=\"cart-button\" onclick=\"toggleCartDropdown()\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span id=\"cart-total\">";
        // line 4
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <div id=\"cart-dropdown\" class=\"cart-dropdown\">
    ";
        // line 7
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 8
            echo "    <div class=\"cart-items\">
      <table class=\"cart-table\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "        <tr>
          <td class=\"thumb\">
            ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                    echo "\">
              <img src=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" />
            </a>
            ";
                }
                // line 18
                echo "          </td>
          <td class=\"details\">
            <a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "</a>
            ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 23
                        echo "              <br><small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 23);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 23);
                        echo "</small>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "            <br><small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27);
                    echo "</small>
            ";
                }
                // line 29
                echo "          </td>
          <td class=\"quantity\">x ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 30);
                echo "</td>
          <td class=\"price\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 31);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"cart.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                echo "');\">
              <i class=\"fa fa-times\"></i>
            </button>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 40
                echo "        <tr>
          <td></td>
          <td>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 42);
                echo "</td>
          <td>x 1</td>
          <td>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 44);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"voucher.remove('";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 46);
                echo "');\">
              <i class=\"fa fa-times\"></i>
            </button>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </table>
    </div>
    <div class=\"cart-totals\">
      <table>
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 57
                echo "        <tr>
          <td><strong>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 58);
                echo "</strong></td>
          <td>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 59);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </table>
      <div class=\"cart-actions\">
        <a href=\"";
            // line 64
            echo ($context["cart"] ?? null);
            echo "\" class=\"view-cart\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a href=\"";
            // line 65
            echo ($context["checkout"] ?? null);
            echo "\" class=\"checkout\"><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </div>
    ";
        } else {
            // line 69
            echo "    <p class=\"empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 71
        echo "  </div>
</div>

<script>
  function toggleCartDropdown() {
    var dropdown = document.getElementById('cart-dropdown');
    dropdown.classList.toggle('active');
  }

  // Optional: Close the dropdown when clicking outside
  document.addEventListener('click', function(event) {
    var cart = document.getElementById('cart');
    if (!cart.contains(event.target)) {
      document.getElementById('cart-dropdown').classList.remove('active');
    }
  });
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__df9f4ce9863f283ab9463b4b039d8e59e7556fa27d47c13468f9b7598894d2a7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 71,  219 => 69,  210 => 65,  204 => 64,  200 => 62,  191 => 59,  187 => 58,  184 => 57,  180 => 56,  174 => 52,  162 => 46,  157 => 44,  152 => 42,  148 => 40,  143 => 39,  131 => 33,  126 => 31,  122 => 30,  119 => 29,  111 => 27,  108 => 26,  105 => 25,  94 => 23,  89 => 22,  87 => 21,  81 => 20,  77 => 18,  69 => 15,  64 => 14,  62 => 13,  58 => 11,  54 => 10,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__df9f4ce9863f283ab9463b4b039d8e59e7556fa27d47c13468f9b7598894d2a7", "");
    }
}
