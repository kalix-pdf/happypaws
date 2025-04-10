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

/* __string_template__10c7a8d5c76035c1cb5410c0c9aabdbf7261e6caf9b60a4e6088275f96978ffc */
class __TwigTemplate_afb0d1ae24d25ae30469f3e45f502ab66f6cba1cc9a2d0123f81a125da246232 extends Template
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
        <h2>Webhook Request Data</h2>
        <pre>";
        // line 3
        echo ($context["logs"] ?? null);
        echo "</pre>
        ";
        // line 7
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__10c7a8d5c76035c1cb5410c0c9aabdbf7261e6caf9b60a4e6088275f96978ffc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__10c7a8d5c76035c1cb5410c0c9aabdbf7261e6caf9b60a4e6088275f96978ffc", "");
    }
}
