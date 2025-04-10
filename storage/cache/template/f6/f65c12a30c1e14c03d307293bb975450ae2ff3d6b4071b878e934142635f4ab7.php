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

/* __string_template__adaaa5d36cb11a273e7dae50223a2de328537e578261d76c1c67ff956eb740dc */
class __TwigTemplate_22bbaa048f05821b61a58b64ab617bd2db9bb7e80f6935bbcd2d8e2b3b40695b extends Template
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
        echo "<h2>Received Webhook Request</h2>

    ";
        // line 5
        echo "
    <h3>Parsed JSON Data:</h3>
    <pre>";
        // line 7
        echo ($context["parsed"] ?? null);
        echo "</pre>";
    }

    public function getTemplateName()
    {
        return "__string_template__adaaa5d36cb11a273e7dae50223a2de328537e578261d76c1c67ff956eb740dc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__adaaa5d36cb11a273e7dae50223a2de328537e578261d76c1c67ff956eb740dc", "");
    }
}
