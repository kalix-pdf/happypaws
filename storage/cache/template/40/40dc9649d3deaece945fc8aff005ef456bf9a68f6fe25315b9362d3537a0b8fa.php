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

/* __string_template__b4fa30de1692261f9f526173b7edc68a8e6cb51c613c815e1f253c2e2809d8ee */
class __TwigTemplate_77904997b4f77b51545526df557b90d4a11098692c5bab37938efb0fde7c38c6 extends Template
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
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 3
                echo "    <a class=\"btn\" href=\"";
                echo ($context["mp_profile"] ?? null);
                echo "\">Seller Profile</a>
";
            } else {
                // line 5
                echo "    <a class=\"btn\" href=\"";
                echo ($context["menusell"] ?? null);
                echo "\">Be a MeowChant!</a>
";
            }
        }
        // line 103
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__b4fa30de1692261f9f526173b7edc68a8e6cb51c613c815e1f253c2e2809d8ee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 103,  47 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b4fa30de1692261f9f526173b7edc68a8e6cb51c613c815e1f253c2e2809d8ee", "");
    }
}
