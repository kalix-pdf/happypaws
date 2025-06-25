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

/* __string_template__aee1cc201747b5586014d7d6c089d833393fa5289383609fe51dae2971712aa6 */
class __TwigTemplate_cba0eadda56764129f614de79fcac348cf35c82cdaeaab25a938a0633af8d453 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-wishlist\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>
  </nav>
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row wishlist\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 27
        if (($context["products"] ?? null)) {
            // line 28
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 32
            echo ($context["column_image"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 33
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 34
            echo ($context["column_model"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 35
            echo ($context["column_stock"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 36
            echo ($context["column_price"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 37
            echo ($context["column_action"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "          <tr>
            <td class=\"text-center\">";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
                echo "</a></td>
            <td class=\"text-left\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 46);
                echo "</td>
            <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 47);
                echo "</td>
            <td class=\"text-right\">";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                        echo "
                ";
                    } else {
                        // line 51
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 52
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" style=\"background-color: #162F65; color: #f6c96d;\" onclick=\"cart.add('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 54);
                echo "\" data-toggle=\"tooltip\" style=\"background-color: #162F65; color: #f6c96d;\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 62
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 64
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 65
        echo ($context["continue"] ?? null);
        echo "\" style=\"background-color: #162F65; color: #f6c96d;\" class=\"btn\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 68
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 70
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__aee1cc201747b5586014d7d6c089d833393fa5289383609fe51dae2971712aa6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 70,  251 => 68,  247 => 67,  240 => 65,  237 => 64,  231 => 62,  224 => 57,  213 => 54,  207 => 53,  204 => 52,  194 => 51,  188 => 50,  185 => 49,  183 => 48,  179 => 47,  175 => 46,  169 => 45,  155 => 44,  152 => 43,  148 => 42,  140 => 37,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  114 => 28,  112 => 27,  108 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  81 => 18,  76 => 17,  68 => 13,  66 => 12,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aee1cc201747b5586014d7d6c089d833393fa5289383609fe51dae2971712aa6", "");
    }
}
