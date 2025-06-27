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

/* __string_template__7702a1e8712c7ec46fd894ba7202d776d3cd74aba99a324b8dddcbe611ec3c8e */
class __TwigTemplate_bb70db96d58d0295dc4f43cc2ac8874220c5f128d5d31cd84ee197d29ce3a2ac extends Template
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
                echo "\">Seller Dashboard</a>
    <a class=\"btn\" href=\"index.php?route=customerpartner/profile&seller_id=";
                // line 4
                echo ($context["seller"] ?? null);
                echo "&tab=profile\">Seller Profile</a>
";
            } else {
                // line 6
                echo "    <a class=\"btn\" href=\"";
                echo ($context["menusell"] ?? null);
                echo "\">Be a MeowChant!</a>
";
            }
        }
        // line 104
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__7702a1e8712c7ec46fd894ba7202d776d3cd74aba99a324b8dddcbe611ec3c8e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 104,  51 => 6,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7702a1e8712c7ec46fd894ba7202d776d3cd74aba99a324b8dddcbe611ec3c8e", "");
    }
}
