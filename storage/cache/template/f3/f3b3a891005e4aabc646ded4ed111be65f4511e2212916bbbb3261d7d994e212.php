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

/* __string_template__957a02a0c1bdf14a10cf9f0913a99f1a6c903cfdf539a66fba2a35bd01590d9e */
class __TwigTemplate_2b7849d78fcafa542076bd5f4f6881a36ce3293e8fa10cff750fe03c807475c7 extends Template
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
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if (($context["addresses"] ?? null)) {
            // line 3
            echo "    <label>
      <strong><input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
        My Shipping Address</label></strong>
  <div id=\"shipping-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 9
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 9) == ($context["address_id"] ?? null))) {
                    // line 10
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 10);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 10);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 10);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 10);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 10);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 10);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 10);
                    echo "</option>
      ";
                } else {
                    // line 12
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    echo "</option>
      ";
                }
                // line 14
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
  </div>
  ";
        }
        // line 18
        echo "  <br />
  
  
</form>";
    }

    public function getTemplateName()
    {
        return "__string_template__957a02a0c1bdf14a10cf9f0913a99f1a6c903cfdf539a66fba2a35bd01590d9e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  98 => 15,  92 => 14,  74 => 12,  56 => 10,  53 => 9,  49 => 8,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__957a02a0c1bdf14a10cf9f0913a99f1a6c903cfdf539a66fba2a35bd01590d9e", "");
    }
}
