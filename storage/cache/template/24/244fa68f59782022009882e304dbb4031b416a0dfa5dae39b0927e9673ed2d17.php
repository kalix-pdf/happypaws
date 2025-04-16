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

/* __string_template__57f09af9bdd6293da99d4b61433b602b877c246d88e52ca239e76d81d05d3c50 */
class __TwigTemplate_720f1ace74c662b92d5b17d56dc4c04a093c1ae20101ec455d2bfc6725c6db98 extends Template
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
    <h4>";
            // line 3
            echo twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "title", [], "any", false, false, false, 3);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "text", [], "any", false, false, false, 3);
            echo "</h4>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "__string_template__57f09af9bdd6293da99d4b61433b602b877c246d88e52ca239e76d81d05d3c50";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__57f09af9bdd6293da99d4b61433b602b877c246d88e52ca239e76d81d05d3c50", "");
    }
}
