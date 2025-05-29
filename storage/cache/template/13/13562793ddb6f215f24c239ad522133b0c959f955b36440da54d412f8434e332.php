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

/* __string_template__60964c803f73fd262b863c1107705f6341feba484e488b6f0742c76a8a7b22b9 */
class __TwigTemplate_8f2308317b63dca5308bbf6e18500ef38d7f067013e499a4d1e22729fd639bad extends Template
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
            // line 3
            echo "    <a href=\"";
            echo ($context["mp_profile"] ?? null);
            echo "\"></a></li>
";
        }
        // line 101
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__60964c803f73fd262b863c1107705f6341feba484e488b6f0742c76a8a7b22b9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 101,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__60964c803f73fd262b863c1107705f6341feba484e488b6f0742c76a8a7b22b9", "");
    }
}
