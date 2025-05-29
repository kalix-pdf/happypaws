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

/* __string_template__d1d3130dab01ce7a57db7e2514b7d02f5050856468f05fe7f2485708fbc7d860 */
class __TwigTemplate_15e73ea9cf8ce0e562d94275e415363f35628a65a482930c64db49a4534f613e extends Template
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
                echo "\">Seller Profile</a></li>
";
            } else {
                // line 5
                echo "    <a href=\"";
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
        return "__string_template__d1d3130dab01ce7a57db7e2514b7d02f5050856468f05fe7f2485708fbc7d860";
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
        return new Source("", "__string_template__d1d3130dab01ce7a57db7e2514b7d02f5050856468f05fe7f2485708fbc7d860", "");
    }
}
