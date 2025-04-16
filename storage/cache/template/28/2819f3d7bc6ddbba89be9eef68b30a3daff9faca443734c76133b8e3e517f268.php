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

/* __string_template__ad492e425c62dbb172d0191b1f0ec008c7752ee02db43e817de31c022eb3ef4d */
class __TwigTemplate_2e55d47eb9fec8678e86c5a73351bd95bebc4af2095ea65dce78f21ff2b1dfd4 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "    <h4>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2);
            echo " x";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 2);
            echo " - <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 2);
            echo "</strong></h4> <br>
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["shipping_method"] ?? null), "quote", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                // line 4
                echo "    <div class=\"radio\">
    <label> ";
                // line 5
                if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 6
                    echo "        ";
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 6);
                    // line 7
                    echo "        <input type=\"radio\" name=\"shipping_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 7);
                    echo "\" checked=\"checked\" />
        ";
                } else {
                    // line 9
                    echo "        <input type=\"radio\" name=\"shipping_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 9);
                    echo "\" />
        ";
                }
                // line 11
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 11);
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 11);
                echo "</label>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "__string_template__ad492e425c62dbb172d0191b1f0ec008c7752ee02db43e817de31c022eb3ef4d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 9,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ad492e425c62dbb172d0191b1f0ec008c7752ee02db43e817de31c022eb3ef4d", "");
    }
}
