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

/* __string_template__e71ab7e0beecca373d2d286620cce506f5250be4c56849ec1a564c943ab3fd32 */
class __TwigTemplate_c15732499d2cab6977f8da2192a028945f660c97bc78c499e51bdc133f5e8983 extends Template
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
            echo "<head>
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
</head>
    <li class=\"dropdown\">
    <a href=\"";
            // line 28
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
            // line 34
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 35
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("profile", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 36
                    echo "                <li><a href=\"";
                    echo ($context["mp_profile"] ?? null);
                    echo "\">";
                    echo ($context["text_my_profile"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 38
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("income", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 39
                    echo "                <li><a href=\"";
                    echo ($context["mp_income"] ?? null);
                    echo "\">";
                    echo ($context["text_income"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 41
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("dashboard", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 42
                    echo "                <li><a href=\"";
                    echo ($context["mp_dashboard"] ?? null);
                    echo "\">";
                    echo ($context["text_dashboard"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 44
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("orderhistory", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 45
                    echo "                <li><a href=\"";
                    echo ($context["mp_orderhistory"] ?? null);
                    echo "\">";
                    echo ($context["text_orderhistory"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 47
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("transaction", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 48
                    echo "              <li><a href=\"";
                    echo ($context["mp_transaction"] ?? null);
                    echo "\">";
                    echo ($context["text_transaction"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 50
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("productlist", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 51
                    echo "                <li><a href=\"";
                    echo ($context["mp_productlist"] ?? null);
                    echo "\">";
                    echo ($context["text_productlist"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 53
                echo "
            ";
                // line 54
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproduct", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 55
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproduct"] ?? null);
                    echo "\">";
                    echo ($context["text_addproduct"] ?? null);
                    echo "sdsd</a></li>
            ";
                }
                // line 57
                echo "
";
                // line 59
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproductoption", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 60
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproductoption"] ?? null);
                    echo "\">Add Product Option</a></li>
            ";
                }
                // line 62
                echo "
            ";
                // line 63
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("downloads", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 64
                    echo "                <li><a href=\"";
                    echo ($context["mp_download"] ?? null);
                    echo "\">";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 66
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("manageshipping", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 67
                    echo "                <li><a href=\"";
                    echo ($context["mp_add_shipping_mod"] ?? null);
                    echo "\">";
                    echo ($context["text_wkshipping"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 69
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("asktoadmin", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 70
                    echo "                <li><a id=\"ask-to-admin\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-seller-mail\">";
                    echo ($context["text_ask_admin"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 72
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("information", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 73
                    echo "                <li><a href=\"";
                    echo ($context["mp_information"] ?? null);
                    echo "\">";
                    echo ($context["text_information"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 75
                echo "
            ";
                // line 76
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("category", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 77
                    echo "                <li><a href=\"";
                    echo ($context["mp_category"] ?? null);
                    echo "\">";
                    echo ($context["text_category"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 79
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("review", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 80
                    echo "                <li><a href=\"";
                    echo ($context["mp_review"] ?? null);
                    echo "\">";
                    echo ($context["text_review"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 82
                echo "            <li id=\"wk-notify\">
            
                <a href=\"javascript:;\" id=\"notification-li\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-notification\">";
                // line 84
                echo ($context["text_notifications"] ?? null);
                echo "
                ";
                // line 85
                if ((array_key_exists("notification_total", $context) && (($context["notification_total"] ?? null) > 0))) {
                    // line 86
                    echo "                    <span class=\"badge\">";
                    echo ($context["notification_total"] ?? null);
                    echo "</span>
                ";
                }
                // line 88
                echo "                </a>
            </li>
            <li role=\"presentation\" class=\"divider\"></li>
            ";
                // line 91
                if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
                    // line 92
                    echo "              <li><a href=\"";
                    echo ($context["separate_view"] ?? null);
                    echo "\">";
                    echo ($context["text_separate_view"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 94
                echo "          ";
            }
            // line 95
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
        return "__string_template__e71ab7e0beecca373d2d286620cce506f5250be4c56849ec1a564c943ab3fd32";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 95,  270 => 94,  262 => 92,  260 => 91,  255 => 88,  249 => 86,  247 => 85,  243 => 84,  239 => 82,  231 => 80,  228 => 79,  220 => 77,  218 => 76,  215 => 75,  207 => 73,  204 => 72,  198 => 70,  195 => 69,  187 => 67,  184 => 66,  176 => 64,  174 => 63,  171 => 62,  165 => 60,  162 => 59,  159 => 57,  151 => 55,  149 => 54,  146 => 53,  138 => 51,  135 => 50,  127 => 48,  124 => 47,  116 => 45,  113 => 44,  105 => 42,  102 => 41,  94 => 39,  91 => 38,  83 => 36,  80 => 35,  78 => 34,  67 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e71ab7e0beecca373d2d286620cce506f5250be4c56849ec1a564c943ab3fd32", "");
    }
}
