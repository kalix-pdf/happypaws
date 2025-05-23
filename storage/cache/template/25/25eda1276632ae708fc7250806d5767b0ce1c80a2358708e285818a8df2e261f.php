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

/* __string_template__8cabdeea368ace9b8ce29d0b94ce404480a89d98d5b3d9c20b26ece72b768d92 */
class __TwigTemplate_3eab0d82da58bc8404d64f80cde11fe4a02ac4f55046606e62acb2bf6d750cce extends Template
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
<ul class=\"breadcrumb\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>
  ";
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <button type=\"button\" class=\"cart-button\" onclick=\"toggleCartDropdown()\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span id=\"cart-total\">";
        // line 20
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <div id=\"cart-dropdown\" class=\"cart-dropdown\">
    ";
        // line 23
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 24
            echo "    <div class=\"cart-items\">
      <table class=\"cart-table\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "        <tr>
          <td class=\"thumb\">
            ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                    echo "\">
              <img src=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" />
            </a>
            ";
                }
                // line 34
                echo "          </td>
          <td class=\"details\">
            <a href=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "</a>
            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 38));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 39
                        echo "              <br><small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 39);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 39);
                        echo "</small>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "            ";
                }
                // line 42
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "            <br><small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 43);
                    echo "</small>
            ";
                }
                // line 45
                echo "          </td>
          <td class=\"quantity\">x ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46);
                echo "</td>
          <td class=\"price\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 47);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"cart.remove('";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 49);
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
            // line 55
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 56
                echo "        <tr>
          <td></td>
          <td>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 58);
                echo "</td>
          <td>x 1</td>
          <td>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 60);
                echo "</td>
          <td class=\"remove\">
            <button onclick=\"voucher.remove('";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 62);
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
            // line 68
            echo "      </table>
    </div>
    <div class=\"cart-totals\">
      <table>
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 73
                echo "        <tr>
          <td><strong>";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 74);
                echo "</strong></td>
          <td>";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 75);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      </table>
      <div class=\"cart-actions\">
        <a href=\"";
            // line 80
            echo ($context["cart"] ?? null);
            echo "\" class=\"view-cart\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a href=\"";
            // line 81
            echo ($context["checkout"] ?? null);
            echo "\" class=\"checkout\"><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </div>
    ";
        } else {
            // line 85
            echo "    <p class=\"empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 87
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
        return "__string_template__8cabdeea368ace9b8ce29d0b94ce404480a89d98d5b3d9c20b26ece72b768d92";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 87,  259 => 85,  250 => 81,  244 => 80,  240 => 78,  231 => 75,  227 => 74,  224 => 73,  220 => 72,  214 => 68,  202 => 62,  197 => 60,  192 => 58,  188 => 56,  183 => 55,  171 => 49,  166 => 47,  162 => 46,  159 => 45,  151 => 43,  148 => 42,  145 => 41,  134 => 39,  129 => 38,  127 => 37,  121 => 36,  117 => 34,  109 => 31,  104 => 30,  102 => 29,  98 => 27,  94 => 26,  90 => 24,  88 => 23,  82 => 20,  78 => 18,  70 => 14,  68 => 13,  65 => 12,  54 => 10,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8cabdeea368ace9b8ce29d0b94ce404480a89d98d5b3d9c20b26ece72b768d92", "");
    }
}
