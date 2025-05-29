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

/* __string_template__31076bc4e8e74c72d1244314268a0b7d232582e3150120c99984ea80d7f5a21c */
class __TwigTemplate_e51f7e5f275010eb3b1d75860b1214c2539d1d76b9df7a122776e40d2406ad95 extends Template
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
        ";
            // line 33
            echo "          ";
            // line 94
            echo "        </ul>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__31076bc4e8e74c72d1244314268a0b7d232582e3150120c99984ea80d7f5a21c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 94,  76 => 33,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__31076bc4e8e74c72d1244314268a0b7d232582e3150120c99984ea80d7f5a21c", "");
    }
}
