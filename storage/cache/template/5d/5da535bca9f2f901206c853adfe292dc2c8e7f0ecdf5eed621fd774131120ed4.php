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

/* __string_template__e3d9d28ec02f4dab0db698ff708bc7074e659af06d94ce2f919fab4c46d3dd90 */
class __TwigTemplate_94c28a9c14ebd901152b85c868afc7ef843860ea6ecc86fbd3a6901bafed6073 extends Template
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
        echo "<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link href=\"";
        // line 4
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\category.css\" rel=\"stylesheet\" />
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\navbar\\shoppingcart.css\" rel=\"stylesheet\" />
<div id=\"cart\" class=\"cart-container\">
  <button type=\"button\" class=\"cart-button\" onclick=\"toggleCartDropdown()\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span id=\"cart-total\">";
        // line 10
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <div id=\"cart-dropdown\" class=\"cart-dropdown\">
    ";
        // line 13
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 14
            echo "    <div class=\"cart-items\">
    <ul class=\"breadcrumb\">
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 17
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
      <table class=\"cart-table\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "        <tr>
          <td class=\"thumb\">
            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                    echo "\">
              <img src=\"";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "\" />
            </a>
            ";
                }
                // line 29
                echo "          </td>
          <td class=\"details\">
            <a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</a>
            ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 34
                        echo "              <br><small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 34);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 34);
                        echo "</small>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "            <br><small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38);
                    echo "</small>
            ";
                }
                // line 40
                echo "          </td>
          <td class=\"quantity\">x ";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                echo "</td>
          <td class=\"price\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 42);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"cart.remove('";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 44);
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
            // line 50
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 51
                echo "        <tr>
          <td></td>
          <td>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 53);
                echo "</td>
          <td>x 1</td>
          <td>";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 55);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"voucher.remove('";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 57);
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
            // line 63
            echo "      </table>
    </div>
    <div class=\"cart-totals\">
      <table>
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 68
                echo "        <tr>
          <td><strong>";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 69);
                echo "</strong></td>
          <td>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 70);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      </table>
      <div class=\"cart-actions\">
        <a href=\"";
            // line 75
            echo ($context["cart"] ?? null);
            echo "\" class=\"view-cart\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a href=\"";
            // line 76
            echo ($context["checkout"] ?? null);
            echo "\" class=\"checkout\"><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </div>
    ";
        } else {
            // line 80
            echo "    <p class=\"empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 82
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
        return "__string_template__e3d9d28ec02f4dab0db698ff708bc7074e659af06d94ce2f919fab4c46d3dd90";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 82,  247 => 80,  238 => 76,  232 => 75,  228 => 73,  219 => 70,  215 => 69,  212 => 68,  208 => 67,  202 => 63,  190 => 57,  185 => 55,  180 => 53,  176 => 51,  171 => 50,  159 => 44,  154 => 42,  150 => 41,  147 => 40,  139 => 38,  136 => 37,  133 => 36,  122 => 34,  117 => 33,  115 => 32,  109 => 31,  105 => 29,  97 => 26,  92 => 25,  90 => 24,  86 => 22,  82 => 21,  78 => 19,  67 => 17,  63 => 16,  59 => 14,  57 => 13,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e3d9d28ec02f4dab0db698ff708bc7074e659af06d94ce2f919fab4c46d3dd90", "");
    }
}
