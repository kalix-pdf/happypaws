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

/* __string_template__48e428af9c8de2741b4ae964eaeb5724a34ded6431ba073130ffe53ccfc8db74 */
class __TwigTemplate_797fccc35ee91131938980e19e5a74ee53c7395094e21a88b87016706a7c648f extends Template
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
<style>
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
    .dropdown-menu li a {
        display: block;
        padding: 10px 16px;
        color: #333;
        text-decoration: none;
    }

    </style>
    <li class=\"dropdown\">
    <a href=\"";
            // line 27
            echo ($context["menusell"] ?? null);
            echo "\" title=\"";
            echo ($context["text_sell_header"] ?? null);
            echo "\" class=\"dropdown-toggle btn\" data-bs-toggle=\"dropdown\">
        <i class=\"fa fa-users\"></i> 
        <span class=\"hidden-xs hidden-sm hidden-md\">Seller Profile</span> 
        <span class=\"caret\"></span>
    </a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 33
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 34
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("profile", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo ($context["mp_profile"] ?? null);
                    echo "\">";
                    echo ($context["text_my_profile"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 37
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("income", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 38
                    echo "                <li><a href=\"";
                    echo ($context["mp_income"] ?? null);
                    echo "\">";
                    echo ($context["text_income"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 40
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("dashboard", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 41
                    echo "                <li><a href=\"";
                    echo ($context["mp_dashboard"] ?? null);
                    echo "\">";
                    echo ($context["text_dashboard"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 43
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("orderhistory", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 44
                    echo "                <li><a href=\"";
                    echo ($context["mp_orderhistory"] ?? null);
                    echo "\">";
                    echo ($context["text_orderhistory"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 46
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("transaction", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 47
                    echo "              <li><a href=\"";
                    echo ($context["mp_transaction"] ?? null);
                    echo "\">";
                    echo ($context["text_transaction"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 49
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("productlist", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 50
                    echo "                <li><a href=\"";
                    echo ($context["mp_productlist"] ?? null);
                    echo "\">";
                    echo ($context["text_productlist"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 52
                echo "
            ";
                // line 53
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproduct", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 54
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproduct"] ?? null);
                    echo "\">";
                    echo ($context["text_addproduct"] ?? null);
                    echo "sdsd</a></li>
            ";
                }
                // line 56
                echo "
            ";
                // line 57
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproductoption", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 58
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproductoption"] ?? null);
                    echo "\">Add Product Option</a></li>
            ";
                }
                // line 60
                echo "
            ";
                // line 61
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("downloads", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 62
                    echo "                <li><a href=\"";
                    echo ($context["mp_download"] ?? null);
                    echo "\">";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 64
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("manageshipping", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 65
                    echo "                <li><a href=\"";
                    echo ($context["mp_add_shipping_mod"] ?? null);
                    echo "\">";
                    echo ($context["text_wkshipping"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 67
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("asktoadmin", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 68
                    echo "                <li><a id=\"ask-to-admin\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-seller-mail\">";
                    echo ($context["text_ask_admin"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 70
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("information", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 71
                    echo "                <li><a href=\"";
                    echo ($context["mp_information"] ?? null);
                    echo "\">";
                    echo ($context["text_information"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 73
                echo "
            ";
                // line 74
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("category", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 75
                    echo "                <li><a href=\"";
                    echo ($context["mp_category"] ?? null);
                    echo "\">";
                    echo ($context["text_category"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 77
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("review", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 78
                    echo "                <li><a href=\"";
                    echo ($context["mp_review"] ?? null);
                    echo "\">";
                    echo ($context["text_review"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 80
                echo "            <li id=\"wk-notify\">
            
                <a href=\"javascript:;\" id=\"notification-li\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-notification\">";
                // line 82
                echo ($context["text_notifications"] ?? null);
                echo "
                ";
                // line 83
                if ((array_key_exists("notification_total", $context) && (($context["notification_total"] ?? null) > 0))) {
                    // line 84
                    echo "                    <span class=\"badge\">";
                    echo ($context["notification_total"] ?? null);
                    echo "</span>
                ";
                }
                // line 86
                echo "                </a>
            </li>
            <li role=\"presentation\" class=\"divider\"></li>
            ";
                // line 89
                if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
                    // line 90
                    echo "              <li><a href=\"";
                    echo ($context["separate_view"] ?? null);
                    echo "\">";
                    echo ($context["text_separate_view"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 92
                echo "          ";
            }
            // line 93
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
        return "__string_template__48e428af9c8de2741b4ae964eaeb5724a34ded6431ba073130ffe53ccfc8db74";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 93,  268 => 92,  260 => 90,  258 => 89,  253 => 86,  247 => 84,  245 => 83,  241 => 82,  237 => 80,  229 => 78,  226 => 77,  218 => 75,  216 => 74,  213 => 73,  205 => 71,  202 => 70,  196 => 68,  193 => 67,  185 => 65,  182 => 64,  174 => 62,  172 => 61,  169 => 60,  163 => 58,  161 => 57,  158 => 56,  150 => 54,  148 => 53,  145 => 52,  137 => 50,  134 => 49,  126 => 47,  123 => 46,  115 => 44,  112 => 43,  104 => 41,  101 => 40,  93 => 38,  90 => 37,  82 => 35,  79 => 34,  77 => 33,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__48e428af9c8de2741b4ae964eaeb5724a34ded6431ba073130ffe53ccfc8db74", "");
    }
}
