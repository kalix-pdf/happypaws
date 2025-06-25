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

/* __string_template__66c51cf169a001889cc49d329451edff893bebd049017d9e2a1f7cc453beaa78 */
class __TwigTemplate_6f937029231a4869db5b0a995d8c3571daad20f1a2caad3104a8dbc429211812 extends Template
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
        // line 2
        echo ($context["revieww"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__66c51cf169a001889cc49d329451edff893bebd049017d9e2a1f7cc453beaa78";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__66c51cf169a001889cc49d329451edff893bebd049017d9e2a1f7cc453beaa78", "");
    }
}
