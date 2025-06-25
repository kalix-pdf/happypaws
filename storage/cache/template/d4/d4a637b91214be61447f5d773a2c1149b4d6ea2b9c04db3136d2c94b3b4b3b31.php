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

/* __string_template__f0c2f56ea950d7eac155c4639a1e6b8eef117b1af642b40cbfd55173615c136e */
class __TwigTemplate_65812b36b6a15b41d01f187eaa575cd568193a3b261bf4e8e405fb782e0296e5 extends Template
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
        echo ($context["header"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__f0c2f56ea950d7eac155c4639a1e6b8eef117b1af642b40cbfd55173615c136e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f0c2f56ea950d7eac155c4639a1e6b8eef117b1af642b40cbfd55173615c136e", "");
    }
}
