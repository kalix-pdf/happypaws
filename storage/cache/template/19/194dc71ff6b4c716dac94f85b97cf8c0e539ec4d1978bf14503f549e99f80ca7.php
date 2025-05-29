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

/* __string_template__cb3ef976f25d925ce3d3ddde8d38e5dca39b03a1dd45d6ceb5354e315884963b */
class __TwigTemplate_29cfc2d562a884d746c705e221776f778bb166a4fab05f4eb874a4061c4f0af2 extends Template
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
            // line 26
            echo "    <li class=\"dropdown\">
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
        return "__string_template__cb3ef976f25d925ce3d3ddde8d38e5dca39b03a1dd45d6ceb5354e315884963b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 93,  244 => 92,  236 => 90,  234 => 89,  229 => 86,  223 => 84,  221 => 83,  217 => 82,  213 => 80,  205 => 78,  202 => 77,  194 => 75,  192 => 74,  189 => 73,  181 => 71,  178 => 70,  172 => 68,  169 => 67,  161 => 65,  158 => 64,  150 => 62,  148 => 61,  145 => 60,  139 => 58,  137 => 57,  134 => 56,  126 => 54,  124 => 53,  121 => 52,  113 => 50,  110 => 49,  102 => 47,  99 => 46,  91 => 44,  88 => 43,  80 => 41,  77 => 40,  69 => 38,  66 => 37,  58 => 35,  55 => 34,  53 => 33,  42 => 27,  39 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cb3ef976f25d925ce3d3ddde8d38e5dca39b03a1dd45d6ceb5354e315884963b", "");
    }
}
