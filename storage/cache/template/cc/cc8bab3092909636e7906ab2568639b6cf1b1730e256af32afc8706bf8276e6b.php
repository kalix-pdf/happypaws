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

/* __string_template__5962f14134991309c4793a35a7e67544af2cfa8ab5611321fe43f47bf319b3f9 */
class __TwigTemplate_1779658839d40ac46ce0f6ef3823bda6b4c1ee9427f5fe9af9eda5cc1ab86672 extends Template
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
    <a class=\"btn\" href=\"";
                // line 4
                echo ($context["seller_profile"] ?? null);
                echo "\">Seller Profile</a>
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
        return "__string_template__5962f14134991309c4793a35a7e67544af2cfa8ab5611321fe43f47bf319b3f9";
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
        return new Source("", "__string_template__5962f14134991309c4793a35a7e67544af2cfa8ab5611321fe43f47bf319b3f9", "");
    }
}
