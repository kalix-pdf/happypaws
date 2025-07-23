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
class __TwigTemplate_e7ed79ab8a0714e142083f52d3f0c7a32bb753a113358b1c7a2c2d736abf4805 extends Template
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
        echo "<style>
.list-group-item.active {
    background-color: #162F65;
  }
</style>

";
        // line 7
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 8
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 9
                echo "    ";
                // line 10
                echo "    <a class=\"btn\" href=\"";
                echo ($context["separate_view"] ?? null);
                echo "\">";
                echo ($context["text_separate_view"] ?? null);
                echo "</a>
    <a class=\"btn\" href=\"";
                // line 11
                echo ($context["seller_profile"] ?? null);
                echo "\">Seller Profile</a>
    
";
            } else {
                // line 14
                echo "    <li class=\"list-group-item list-group-item-action ";
                if ((($context["route"] ?? null) == "account/customerpartner/become_partner")) {
                    echo "active text-white";
                }
                echo "\">
        <a class=\"btn\" href=\"";
                // line 15
                echo ($context["mp_want_partner"] ?? null);
                echo "\">Be a MeowChant!</a>
    </li>
";
            }
        }
        // line 114
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
        return array (  78 => 114,  71 => 15,  64 => 14,  58 => 11,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/sellmenu.twig", "");
    }
}
