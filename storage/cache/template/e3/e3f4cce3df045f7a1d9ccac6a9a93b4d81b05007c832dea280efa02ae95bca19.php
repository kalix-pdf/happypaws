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

/* customerpartner/sellmenu.twig */
class __TwigTemplate_2a709faf066e6bbd70da628b13d0a74187f4c857e7dd0a103c251736b525180c extends Template
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
                echo "    ";
                // line 4
                echo "    <a class=\"btn\" href=\"";
                echo ($context["separate_view"] ?? null);
                echo "\">";
                echo ($context["text_separate_view"] ?? null);
                echo "</a>
    <a class=\"btn\" href=\"";
                // line 5
                echo ($context["seller_profile"] ?? null);
                echo "\">Seller Profile</a>
    
";
            } else {
                // line 8
                echo "    <a class=\"btn ";
                if ((($context["route"] ?? null) == "account/customerpartner/become_partner")) {
                    echo "active text-white";
                }
                echo "\" href=\"";
                echo ($context["mp_want_partner"] ?? null);
                echo "\">Be a MeowChant!</a>
";
            }
        }
        // line 106
        echo " 
";
    }

    public function getTemplateName()
    {
        return "customerpartner/sellmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 106,  56 => 8,  50 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/sellmenu.twig", "");
    }
}
