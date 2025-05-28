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

/* __string_template__101f3211411cc108ad17c5adb4b600512e6e2c7b74a47a752e6ff197665495dc */
class __TwigTemplate_ef662650431f8cc9f3cc31391065ad421aa78d3200e613815861a82283b0df25 extends Template
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
        echo "<div class=\"order-summary mb-4\">

  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "    <div class=\"row mb-2\">
      <div class=\"col-8\">
        <strong>";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "</strong> × ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 6);
            echo "
      </div>
      <div class=\"col-4 text-end\">
        <strong>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 9);
            echo "</strong> PHP
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
  <hr />

  <div class=\"row mb-2\">
    <div class=\"col-8\">
      <strong>Subtotal</strong>
    </div>
    <div class=\"col-4 text-end\">
      <strong>";
        // line 21
        echo ($context["product_total"] ?? null);
        echo "</strong> PHP
    </div>
  </div>

  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 26
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 26)) {
                // line 27
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                    // line 28
                    echo "        <div class=\"row mb-2\">
          <div class=\"col-8\">
            <strong>";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 30);
                    echo "</strong>
          </div>
          <div class=\"col-4 text-end\">
            <strong>";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 33);
                    echo "</strong>
          </div>
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "    ";
            } else {
                // line 38
                echo "      <div class=\"alert alert-danger alert-dismissible\">";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 38);
                echo "</div>
    ";
            }
            // line 40
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
  <hr />

  <div class=\"row\">
    <div class=\"col-8\">
      <strong>Total</strong>
    </div>
    <div class=\"col-4 text-end\">
      <strong>";
        // line 49
        echo ($context["grand_total"] ?? null);
        echo "</strong> PHP
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__101f3211411cc108ad17c5adb4b600512e6e2c7b74a47a752e6ff197665495dc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  131 => 41,  125 => 40,  119 => 38,  116 => 37,  106 => 33,  100 => 30,  96 => 28,  91 => 27,  88 => 26,  84 => 25,  77 => 21,  67 => 13,  57 => 9,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__101f3211411cc108ad17c5adb4b600512e6e2c7b74a47a752e6ff197665495dc", "");
    }
}
