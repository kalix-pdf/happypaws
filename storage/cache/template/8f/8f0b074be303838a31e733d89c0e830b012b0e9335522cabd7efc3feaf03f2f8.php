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

/* __string_template__e484f46c32477e710f94f817cdc3f824f5f32ec6dda95a91c7f9c7dd5a73d57c */
class __TwigTemplate_e81f46ac7b4d6a0eb8f7c2a9be83a6f5b8f7bd8bf5b73a5083948bcff7ecb2a7 extends Template
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
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "    <tr>
      <td class=\"text-left\"><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
        &nbsp;<small> - ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 18);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 18);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 19)) {
                echo " <br/>
        <span class=\"label label-info\">";
                // line 20
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 20);
                echo "</small> ";
            }
            echo "</td>
      <td class=\"text-left\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 21);
            echo "</td>
      <td class=\"text-right\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22);
            echo "</td>
      <td class=\"text-right\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
            echo "</td>
      <td class=\"text-right\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 24);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 28
            echo "    <tr>
      <td class=\"text-left\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 29);
            echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 32);
            echo "</td>
      <td class=\"text-right\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 33);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </tbody>
    
    ";
        // line 47
        echo "    
  </table>
</div>
";
        // line 50
        echo ($context["payment"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__e484f46c32477e710f94f817cdc3f824f5f32ec6dda95a91c7f9c7dd5a73d57c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  159 => 47,  155 => 36,  146 => 33,  142 => 32,  136 => 29,  133 => 28,  128 => 27,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  99 => 20,  94 => 19,  85 => 18,  75 => 17,  72 => 16,  68 => 15,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e484f46c32477e710f94f817cdc3f824f5f32ec6dda95a91c7f9c7dd5a73d57c", "");
    }
}
