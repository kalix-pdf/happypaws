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

/* __string_template__d32d79912eb6b28a0969645c193a80f56301ef1329b75cf30c57ee63508395c5 */
class __TwigTemplate_5f60e60c1ef42fb6d8d33c2a22856223cb84652fe14fe3ce9e25c53004f4c37c extends Template
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
        return "__string_template__d32d79912eb6b28a0969645c193a80f56301ef1329b75cf30c57ee63508395c5";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d32d79912eb6b28a0969645c193a80f56301ef1329b75cf30c57ee63508395c5", "");
    }
}
