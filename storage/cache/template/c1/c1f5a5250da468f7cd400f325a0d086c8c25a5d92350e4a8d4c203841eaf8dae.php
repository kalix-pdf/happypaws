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

/* __string_template__d6fd8de86c45184f51efb06608253475d383368855ddcb791afd6fa60baa03bd */
class __TwigTemplate_2b2f27ff83ebb26132e5328f8014a8799e0952deb170d3855fbdb47b31718133 extends Template
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
    }

    public function getTemplateName()
    {
        return "__string_template__d6fd8de86c45184f51efb06608253475d383368855ddcb791afd6fa60baa03bd";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d6fd8de86c45184f51efb06608253475d383368855ddcb791afd6fa60baa03bd", "");
    }
}
