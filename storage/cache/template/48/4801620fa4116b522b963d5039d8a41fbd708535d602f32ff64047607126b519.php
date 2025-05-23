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

/* __string_template__f39ddc98856586dd4cf50aad0f536813ba47a5d1381c49beaeef3324992144ca */
class __TwigTemplate_6991000066c330dbcc15559e03bf610c0410a0032314ef0b09f20fb39948b64c extends Template
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
        echo "
<div id=\"cart\" class=\"cart-container\">
  <button type=\"button\" class=\"cart-button\" onclick=\"toggleCartDropdown()\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span id=\"cart-total\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <div id=\"cart-dropdown\" class=\"cart-dropdown\">
    ";
        // line 8
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 9
            echo "    <div class=\"cart-items\">
      <table class=\"cart-table\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "        <tr>
          <td class=\"thumb\">
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                    echo "\">
              <img src=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" />
            </a>
            ";
                }
                // line 19
                echo "          </td>
          <td class=\"details\">
            <a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "</a>
            ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 24
                        echo "              <br><small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                        echo "</small>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "            <br><small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 28);
                    echo "</small>
            ";
                }
                // line 30
                echo "          </td>
          <td class=\"quantity\">x ";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                echo "</td>
          <td class=\"price\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"cart.remove('";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 34);
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
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 41
                echo "        <tr>
          <td></td>
          <td>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 43);
                echo "</td>
          <td>x 1</td>
          <td>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 45);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"voucher.remove('";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 47);
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
            // line 53
            echo "      </table>
    </div>
    <div class=\"cart-totals\">
      <table>
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 58
                echo "        <tr>
          <td><strong>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 59);
                echo "</strong></td>
          <td>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 60);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      </table>
      <div class=\"cart-actions\">
        <a href=\"";
            // line 65
            echo ($context["cart"] ?? null);
            echo "\" class=\"view-cart\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a href=\"";
            // line 66
            echo ($context["checkout"] ?? null);
            echo "\" class=\"checkout\"><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </div>
    ";
        } else {
            // line 70
            echo "    <p class=\"empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 72
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
        return "__string_template__f39ddc98856586dd4cf50aad0f536813ba47a5d1381c49beaeef3324992144ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 72,  220 => 70,  211 => 66,  205 => 65,  201 => 63,  192 => 60,  188 => 59,  185 => 58,  181 => 57,  175 => 53,  163 => 47,  158 => 45,  153 => 43,  149 => 41,  144 => 40,  132 => 34,  127 => 32,  123 => 31,  120 => 30,  112 => 28,  109 => 27,  106 => 26,  95 => 24,  90 => 23,  88 => 22,  82 => 21,  78 => 19,  70 => 16,  65 => 15,  63 => 14,  59 => 12,  55 => 11,  51 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f39ddc98856586dd4cf50aad0f536813ba47a5d1381c49beaeef3324992144ca", "");
    }
}
