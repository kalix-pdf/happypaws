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

/* __string_template__6709a431c555770931641ab212736f0e59f9437fa8dcab371584cb7546b0da72 */
class __TwigTemplate_018acc41e0589f964216c7e2d577faf5d9c298ee31d85d545f51ab76fc6bf2cf extends Template
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
            }
            // line 5
            echo "<a href=\"";
            echo ($context["menusell"] ?? null);
            echo "\">Be a MeowChant!</a>
";
        }
        // line 102
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__6709a431c555770931641ab212736f0e59f9437fa8dcab371584cb7546b0da72";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 102,  47 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6709a431c555770931641ab212736f0e59f9437fa8dcab371584cb7546b0da72", "");
    }
}
