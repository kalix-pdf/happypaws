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

/* __string_template__c612e76a84b554f0b589bb466bbff37340b75d0dfae0de8a342622b3f2bba217 */
class __TwigTemplate_c6938eff1df370b683ac4bad74b12fcd460f01797eae7f68af6ba41416b80fab extends Template
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
            // line 2
            echo "
";
            // line 26
            echo "
    <li class=\"dropdown\">
    ";
            // line 29
            echo "        ";
            // line 30
            echo "        <span class=\"hidden-xs hidden-sm hidden-md\">Seller Profile</span> 
        ";
            // line 32
            echo "    ";
            // line 33
            echo "        ";
            // line 34
            echo "          ";
            // line 95
            echo "        ";
            // line 96
            echo "    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__c612e76a84b554f0b589bb466bbff37340b75d0dfae0de8a342622b3f2bba217";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 96,  57 => 95,  55 => 34,  53 => 33,  51 => 32,  48 => 30,  46 => 29,  42 => 26,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c612e76a84b554f0b589bb466bbff37340b75d0dfae0de8a342622b3f2bba217", "");
    }
}
