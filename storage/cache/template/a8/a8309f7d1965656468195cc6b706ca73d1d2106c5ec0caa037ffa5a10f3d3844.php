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

/* __string_template__c1932dd47273a0bb7802d600a581663b4e878031cf4aa8824ffef506a2ac9e91 */
class __TwigTemplate_aaf0e6ac0888570f7edfd376ae6b0f310e28189c3fb44cbc7806124cd084c8e3 extends Template
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
            echo "<style>
ul.wk li a{
color : #000;
padding :5px;
}
.open>.dropdown-menu.wk{
right : auto;
}
header{
z-index : 99 !important;
}
header .links .wk a{
display:block;
text-align :left;
}
</style>
    <li class=\"dropdown\"><a href=\"";
            // line 18
            echo ($context["menusell"] ?? null);
            echo "\" title=\"";
            echo ($context["text_sell_header"] ?? null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_sell_header"] ?? null);
            echo "</span> <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 20
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 21
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("profile", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 22
                    echo "                <li><a href=\"";
                    echo ($context["mp_profile"] ?? null);
                    echo "\">";
                    echo ($context["text_my_profile"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("income", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 25
                    echo "                <li><a href=\"";
                    echo ($context["mp_income"] ?? null);
                    echo "\">";
                    echo ($context["text_income"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 27
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("dashboard", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 28
                    echo "                <li><a href=\"";
                    echo ($context["mp_dashboard"] ?? null);
                    echo "\">";
                    echo ($context["text_dashboard"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 30
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("orderhistory", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 31
                    echo "                <li><a href=\"";
                    echo ($context["mp_orderhistory"] ?? null);
                    echo "\">";
                    echo ($context["text_orderhistory"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 33
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("transaction", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 34
                    echo "              <li><a href=\"";
                    echo ($context["mp_transaction"] ?? null);
                    echo "\">";
                    echo ($context["text_transaction"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 36
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("productlist", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 37
                    echo "                <li><a href=\"";
                    echo ($context["mp_productlist"] ?? null);
                    echo "\">";
                    echo ($context["text_productlist"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 39
                echo "
            ";
                // line 40
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproduct", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 41
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproduct"] ?? null);
                    echo "\">";
                    echo ($context["text_addproduct"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 43
                echo "
            ";
                // line 44
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("downloads", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 45
                    echo "                <li><a href=\"";
                    echo ($context["mp_download"] ?? null);
                    echo "\">";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 47
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("manageshipping", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 48
                    echo "                <li><a href=\"";
                    echo ($context["mp_add_shipping_mod"] ?? null);
                    echo "\">";
                    echo ($context["text_wkshipping"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 50
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("asktoadmin", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 51
                    echo "                <li><a id=\"ask-to-admin\" data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">";
                    echo ($context["text_ask_admin"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 53
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("information", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 54
                    echo "                <li><a href=\"";
                    echo ($context["mp_information"] ?? null);
                    echo "\">";
                    echo ($context["text_information"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 56
                echo "
            ";
                // line 57
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("category", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 58
                    echo "                <li><a href=\"";
                    echo ($context["mp_category"] ?? null);
                    echo "\">";
                    echo ($context["text_category"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 60
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("review", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 61
                    echo "                <li><a href=\"";
                    echo ($context["mp_review"] ?? null);
                    echo "\">";
                    echo ($context["text_review"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 63
                echo "            <li id=\"wk-notify\">
            
                <a href=\"javascript:;\" id=\"notification-li\" data-toggle=\"modal\" data-target=\"#myModal-notification\">";
                // line 65
                echo ($context["text_notifications"] ?? null);
                echo "
                ";
                // line 66
                if ((array_key_exists("notification_total", $context) && (($context["notification_total"] ?? null) > 0))) {
                    // line 67
                    echo "                    <span class=\"badge\">";
                    echo ($context["notification_total"] ?? null);
                    echo "</span>
                ";
                }
                // line 69
                echo "                </a>
            </li>
            <li role=\"presentation\" class=\"divider\"></li>
            ";
                // line 72
                if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
                    // line 73
                    echo "              <li><a href=\"";
                    echo ($context["separate_view"] ?? null);
                    echo "\">";
                    echo ($context["text_separate_view"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 75
                echo "          ";
            }
            // line 76
            echo "            <li><a href=\"";
            echo ($context["menusell"] ?? null);
            echo "\">";
            echo ($context["text_sell_header"] ?? null);
            echo "</a></li>
        </ul>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__c1932dd47273a0bb7802d600a581663b4e878031cf4aa8824ffef506a2ac9e91";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 76,  246 => 75,  238 => 73,  236 => 72,  231 => 69,  225 => 67,  223 => 66,  219 => 65,  215 => 63,  207 => 61,  204 => 60,  196 => 58,  194 => 57,  191 => 56,  183 => 54,  180 => 53,  174 => 51,  171 => 50,  163 => 48,  160 => 47,  152 => 45,  150 => 44,  147 => 43,  139 => 41,  137 => 40,  134 => 39,  126 => 37,  123 => 36,  115 => 34,  112 => 33,  104 => 31,  101 => 30,  93 => 28,  90 => 27,  82 => 25,  79 => 24,  71 => 22,  68 => 21,  66 => 20,  57 => 18,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c1932dd47273a0bb7802d600a581663b4e878031cf4aa8824ffef506a2ac9e91", "");
    }
}
