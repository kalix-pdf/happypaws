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

/* __string_template__8c4191374e55943730ad6aafbdb8a5190252204e812dbe6185b2f6c0c6be435c */
class __TwigTemplate_cc474800cc3212dfbf27817ca64dc93525d385c2de8bdb699389a00494ac5287 extends Template
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
        return "__string_template__8c4191374e55943730ad6aafbdb8a5190252204e812dbe6185b2f6c0c6be435c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 104,  47 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8c4191374e55943730ad6aafbdb8a5190252204e812dbe6185b2f6c0c6be435c", "");
    }
}
