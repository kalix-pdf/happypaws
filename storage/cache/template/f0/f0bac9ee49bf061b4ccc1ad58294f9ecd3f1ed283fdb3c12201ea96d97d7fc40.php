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

/* __string_template__8291d565e90c8116e5c9ba3b789aeeff56a3117825cc22737fd480766375afac */
class __TwigTemplate_4cb137cf46c11b9c354fce5677402cd53ca57b449efd2ce3855f549dcc4ac8fd extends Template
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
        echo "
<p>LDJKAJDKASJ</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__8291d565e90c8116e5c9ba3b789aeeff56a3117825cc22737fd480766375afac";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8291d565e90c8116e5c9ba3b789aeeff56a3117825cc22737fd480766375afac", "");
    }
}
