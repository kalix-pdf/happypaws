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

/* __string_template__bf12d979c78bb75d3011bff30f052356294f8e3dc73ca2000b393217554bc948 */
class __TwigTemplate_e26d8c141d8feb44b54b8f0b2d6fd0b5ba8f938b01aa2e534050c566b5ed5a5c extends Template
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
        return "__string_template__bf12d979c78bb75d3011bff30f052356294f8e3dc73ca2000b393217554bc948";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf12d979c78bb75d3011bff30f052356294f8e3dc73ca2000b393217554bc948", "");
    }
}
