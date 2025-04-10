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

/* __string_template__4b789023d77e369ef778b86c8157b7a795f1d570558f4d9b94dd3e5d9034f7a2 */
class __TwigTemplate_b1d23b5946d9e1f9c731b593d7f26f241d8d36e3043878fcac4485cc82d42bbc extends Template
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
        echo "<div class=\"container\">
        ";
        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 4
            echo "        <pre>";
            echo $context["log"];
            echo "</pre>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        // line 9
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4b789023d77e369ef778b86c8157b7a795f1d570558f4d9b94dd3e5d9034f7a2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  54 => 6,  45 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4b789023d77e369ef778b86c8157b7a795f1d570558f4d9b94dd3e5d9034f7a2", "");
    }
}
