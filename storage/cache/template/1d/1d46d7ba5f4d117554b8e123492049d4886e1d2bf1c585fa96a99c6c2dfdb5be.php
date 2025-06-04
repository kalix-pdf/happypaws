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

/* __string_template__c492845be7213ca416e84108f20bf5d39241440651939470a6f2793282e99d1d */
class __TwigTemplate_a88fca4be7f00f7e26ea2cbc13883ded4620a0ceae6f5bff67a612292d3bf8a7 extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">Image</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 8
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 9
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 10
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "      <tr>
        <td><a href=\"index.php?route=customerpartner/profile&seller_id=";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "seller_id", [], "any", false, false, false, 16);
            echo "\">
          ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["product"], "store", [], "any", false, false, false, 17)) {
                // line 18
                echo "            <h4 class=\"panel-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "store", [], "any", false, false, false, 18);
                echo "</h4>
          ";
            }
            // line 20
            echo "          <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 20);
            echo "\" class=\"img-thumbnail\" style=\"max-width: 100px;\" />
          </a>
        </td>

        <td class=\"text-left\">
          <a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
            echo "</a>
          ";
            // line 26
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 26)) {
                echo " 
            <span class=\"text-danger\">***</span> 
          ";
            }
            // line 29
            echo "          
          ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 30)) {
                // line 31
                echo "            <br/><small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 31);
                echo "</small>
          ";
            }
            // line 33
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                // line 34
                echo "            <br/><span class=\"label label-info\">";
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
            <small>";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35);
                echo "</small>
          ";
            }
            // line 37
            echo "        </td>

        <td class=\"text-left\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 39);
            echo "</td>

        <td class=\"text-left\">
          <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
            <input type=\"text\" name=\"quantity[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43);
            echo "\" size=\"1\" class=\"form-control\" />
            <span class=\"input-group-btn\">
              <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 45
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-refresh\"></i>
              </button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 48
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 48);
            echo "');\">
                <i class=\"fa fa-times-circle\"></i>
              </button>
            </span>
          </div>
        </td>

        <td class=\"text-right\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
            echo "</td>
        <td class=\"text-right\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 56);
            echo "</td>
      </tr>
      <tr>
        <td>Variations:</td>
        <td>
          ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 61)) {
                // line 62
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 63
                    echo "              <small><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63);
                    echo ": </strong> </br>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 63);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "          ";
            }
            // line 66
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
      ";
        // line 89
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c492845be7213ca416e84108f20bf5d39241440651939470a6f2793282e99d1d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 89,  208 => 69,  200 => 66,  197 => 65,  186 => 63,  181 => 62,  179 => 61,  171 => 56,  167 => 55,  155 => 48,  149 => 45,  142 => 43,  135 => 39,  131 => 37,  126 => 35,  121 => 34,  118 => 33,  112 => 31,  110 => 30,  107 => 29,  101 => 26,  95 => 25,  86 => 20,  80 => 18,  78 => 17,  74 => 16,  71 => 15,  67 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c492845be7213ca416e84108f20bf5d39241440651939470a6f2793282e99d1d", "");
    }
}
