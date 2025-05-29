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

/* __string_template__bfc1173cbb392836dfae4de3ca43192903c06a79000b81d6dab873b473f2bb4a */
class __TwigTemplate_bf20b572a987ad00084a71c0e2d685a036b9d6bcf4e46364a1a5859373a95801 extends Template
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
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 26
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__bfc1173cbb392836dfae4de3ca43192903c06a79000b81d6dab873b473f2bb4a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bfc1173cbb392836dfae4de3ca43192903c06a79000b81d6dab873b473f2bb4a", "");
    }
}
