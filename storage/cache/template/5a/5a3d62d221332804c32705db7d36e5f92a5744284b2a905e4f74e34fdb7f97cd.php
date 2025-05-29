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

/* __string_template__90d7f622f7ffb75d5bfc41203b81951054c6798a7c4bfba827fe451bd9bd4d0a */
class __TwigTemplate_17faa4bca809285740013d0e92e0db9306628a207a769d4148da2be949fd51ac extends Template
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
    <a href=\"";
            // line 27
            echo ($context["menusell"] ?? null);
            echo "\" title=\"";
            echo ($context["text_sell_header"] ?? null);
            echo "\" class=\"dropdown-toggle btn\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Seller Profile</span> <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 29
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 30
                echo "            ";
                // line 52
                echo "
";
                // line 54
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("addproductoption", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 55
                    echo "                <li><a href=\"";
                    echo ($context["mp_addproductoption"] ?? null);
                    echo "\">Add Product Option</a></li>
            ";
                }
                // line 57
                echo "
            ";
                // line 58
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("downloads", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 59
                    echo "                <li><a href=\"";
                    echo ($context["mp_download"] ?? null);
                    echo "\">";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 61
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("manageshipping", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 62
                    echo "                <li><a href=\"";
                    echo ($context["mp_add_shipping_mod"] ?? null);
                    echo "\">";
                    echo ($context["text_wkshipping"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 64
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("asktoadmin", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 65
                    echo "                <li><a id=\"ask-to-admin\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-seller-mail\">";
                    echo ($context["text_ask_admin"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 67
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("information", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 68
                    echo "                <li><a href=\"";
                    echo ($context["mp_information"] ?? null);
                    echo "\">";
                    echo ($context["text_information"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 70
                echo "
            ";
                // line 71
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("category", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 72
                    echo "                <li><a href=\"";
                    echo ($context["mp_category"] ?? null);
                    echo "\">";
                    echo ($context["text_category"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 74
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter("review", ($context["marketplace_allowed_account_menu"] ?? null)))) {
                    // line 75
                    echo "                <li><a href=\"";
                    echo ($context["mp_review"] ?? null);
                    echo "\">";
                    echo ($context["text_review"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 77
                echo "            <li id=\"wk-notify\">
            
                <a href=\"javascript:;\" id=\"notification-li\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-notification\">";
                // line 79
                echo ($context["text_notifications"] ?? null);
                echo "
                ";
                // line 80
                if ((array_key_exists("notification_total", $context) && (($context["notification_total"] ?? null) > 0))) {
                    // line 81
                    echo "                    <span class=\"badge\">";
                    echo ($context["notification_total"] ?? null);
                    echo "</span>
                ";
                }
                // line 83
                echo "                </a>
            </li>
            <li role=\"presentation\" class=\"divider\"></li>
            ";
                // line 86
                if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
                    // line 87
                    echo "              <li><a href=\"";
                    echo ($context["separate_view"] ?? null);
                    echo "\">";
                    echo ($context["text_separate_view"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 89
                echo "          ";
            }
            // line 90
            echo "            <li><a href=\"";
            echo ($context["menusell"] ?? null);
            echo "\">";
            echo ($context["text_sell_header"] ?? null);
            echo "</a></li>
        </ul>
    
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__90d7f622f7ffb75d5bfc41203b81951054c6798a7c4bfba827fe451bd9bd4d0a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 90,  188 => 89,  180 => 87,  178 => 86,  173 => 83,  167 => 81,  165 => 80,  161 => 79,  157 => 77,  149 => 75,  146 => 74,  138 => 72,  136 => 71,  133 => 70,  125 => 68,  122 => 67,  116 => 65,  113 => 64,  105 => 62,  102 => 61,  94 => 59,  92 => 58,  89 => 57,  83 => 55,  80 => 54,  77 => 52,  75 => 30,  73 => 29,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__90d7f622f7ffb75d5bfc41203b81951054c6798a7c4bfba827fe451bd9bd4d0a", "");
    }
}
