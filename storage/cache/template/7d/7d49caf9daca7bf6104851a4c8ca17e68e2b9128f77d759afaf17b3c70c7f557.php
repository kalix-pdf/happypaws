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

/* __string_template__388c84b016abbee8307d7eb149b1584875b0a6a3860b5bfd9c56d2ac93fce81d */
class __TwigTemplate_50c46d68cbf317b1885c8d23de59054f3370db02715fb642ecc6b781bd2397bd extends Template
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
        echo ($context["log_content"] ?? null);
        echo "</pre>
    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__388c84b016abbee8307d7eb149b1584875b0a6a3860b5bfd9c56d2ac93fce81d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__388c84b016abbee8307d7eb149b1584875b0a6a3860b5bfd9c56d2ac93fce81d", "");
    }
}
