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

/* __string_template__1322894882c697270811beaaa237e773cad361dd7617c72bba10a5a0172f1d6e */
class __TwigTemplate_1e71be70e9853773914f5639f73aa46899018b402f3465ff6737776fd10fcc3c extends Template
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
            echo "      
    <div class=\"card\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 34
            echo ($context["column_image"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 35
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 36
            echo ($context["column_model"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 37
            echo ($context["column_stock"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 38
            echo ($context["column_price"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 39
            echo ($context["column_action"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 45
                echo "          <tr>
            <td class=\"text-center\">";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "</a></td>
            <td class=\"text-left\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 48);
                echo "</td>
            <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 49);
                echo "</td>
            <td class=\"text-right\">";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51)) {
                        // line 52
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                        echo "
                ";
                    } else {
                        // line 53
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 54
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" style=\"background-color: #162F65; color: #f6c96d;\" onclick=\"cart.add('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 56);
                echo "\" data-toggle=\"tooltip\" style=\"background-color: #162F65; color: #f6c96d;\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 64
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 66
        echo "      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 68
        echo ($context["continue"] ?? null);
        echo "\" style=\"background-color: #162F65; color: #f6c96d;\" class=\"btn\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 70
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 71
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__1322894882c697270811beaaa237e773cad361dd7617c72bba10a5a0172f1d6e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 73,  254 => 71,  250 => 70,  243 => 68,  239 => 66,  233 => 64,  226 => 59,  215 => 56,  209 => 55,  206 => 54,  196 => 53,  190 => 52,  187 => 51,  185 => 50,  181 => 49,  177 => 48,  171 => 47,  157 => 46,  154 => 45,  150 => 44,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  114 => 28,  112 => 27,  108 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  81 => 18,  76 => 17,  68 => 13,  66 => 12,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1322894882c697270811beaaa237e773cad361dd7617c72bba10a5a0172f1d6e", "");
    }
}
