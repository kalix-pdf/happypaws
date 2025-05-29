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

/* __string_template__62c17cfdd22dd68d2f5f4e507fb3526bbe54360ec5d573b1fdd17531de14d70c */
class __TwigTemplate_f7f2505677d3b9f5cfaf8a1d2f178edd4a8dfe682b231994da93aa0ede8f7c2f extends Template
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
        ";
            // line 96
            echo "    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__62c17cfdd22dd68d2f5f4e507fb3526bbe54360ec5d573b1fdd17531de14d70c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 96,  67 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__62c17cfdd22dd68d2f5f4e507fb3526bbe54360ec5d573b1fdd17531de14d70c", "");
    }
}
