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

/* __string_template__a624eeefddece6aa4a764364fc43f22d7f5f527a4d67cd5794361968550483e2 */
class __TwigTemplate_951677f5c1e36d27794458af80cf93564fe39c6040705ec665172a993713e62b extends Template
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
        // line 7
        echo "
<div id=\"cart\" class=\"cart-container position-relative\">
  <button type=\"button\" class=\"btn btn-dark cart-button\" onclick=\"toggleCartDropdown()\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span id=\"cart-total\">";
        // line 11
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <div id=\"cart-dropdown\" class=\"cart-dropdown d-none\">
    ";
        // line 14
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 15
            echo "    <div class=\"cart-items\">
      <table class=\"cart-table\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "        <tr>
          <td class=\"thumb\">
            ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\">
              <img src=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    echo "\" />
            </a>
            ";
                }
                // line 25
                echo "          </td>
          <td class=\"details\">
            <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "</a>
            ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 30
                        echo "              <br><small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 30);
                        echo "</small>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            <br><small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small>
            ";
                }
                // line 36
                echo "          </td>
          <td class=\"quantity\">x ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
                echo "</td>
          <td class=\"price\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"cart.remove('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 40);
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
            // line 46
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 47
                echo "        <tr>
          <td></td>
          <td>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 49);
                echo "</td>
          <td>x 1</td>
          <td>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 51);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"voucher.remove('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 53);
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
            // line 59
            echo "      </table>
    </div>
    <div class=\"cart-totals\">
      <table>
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 64
                echo "        <tr>
          <td><strong>";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 65);
                echo "</strong></td>
          <td>";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 66);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      </table>
      <div class=\"cart-actions\">
        <a href=\"";
            // line 71
            echo ($context["cart"] ?? null);
            echo "\" class=\"view-cart\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a href=\"";
            // line 72
            echo ($context["checkout"] ?? null);
            echo "\" class=\"checkout\"><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </div>
    ";
        } else {
            // line 76
            echo "    <p class=\"empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 78
        echo "  </div>
</div>

<script>
  function toggleCartDropdown() {
    const dropdown = document.getElementById('cart-dropdown');
    dropdown.classList.toggle('d-none');
  }

  document.addEventListener('click', function(event) {
    const cart = document.getElementById('cart');
    const dropdown = document.getElementById('cart-dropdown');
    if (!cart.contains(event.target)) {
      dropdown.classList.add('d-none');
    }
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a624eeefddece6aa4a764364fc43f22d7f5f527a4d67cd5794361968550483e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 78,  220 => 76,  211 => 72,  205 => 71,  201 => 69,  192 => 66,  188 => 65,  185 => 64,  181 => 63,  175 => 59,  163 => 53,  158 => 51,  153 => 49,  149 => 47,  144 => 46,  132 => 40,  127 => 38,  123 => 37,  120 => 36,  112 => 34,  109 => 33,  106 => 32,  95 => 30,  90 => 29,  88 => 28,  82 => 27,  78 => 25,  70 => 22,  65 => 21,  63 => 20,  59 => 18,  55 => 17,  51 => 15,  49 => 14,  43 => 11,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a624eeefddece6aa4a764364fc43f22d7f5f527a4d67cd5794361968550483e2", "");
    }
}
