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

/* __string_template__fcfbbe5e9daf9df0c591bf1a099bedcc7f34f8ada8ea42b18f96baa6137949c0 */
class __TwigTemplate_0ad784b00fe95a92beb9b205c7d0ac8e85eef9714e60a8ea6c949b38dc6fd495 extends Template
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
        echo (($__internal_compile_0 = ($context["webhook_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sign"] ?? null) : null);
        echo "</pre>
    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__fcfbbe5e9daf9df0c591bf1a099bedcc7f34f8ada8ea42b18f96baa6137949c0";
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
        return new Source("", "__string_template__fcfbbe5e9daf9df0c591bf1a099bedcc7f34f8ada8ea42b18f96baa6137949c0", "");
    }
}
