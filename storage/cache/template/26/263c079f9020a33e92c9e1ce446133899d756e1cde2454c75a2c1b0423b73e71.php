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

/* __string_template__697c1ff322e7a00729e152e51b04ec106f8bc069e9898da8b3a51a7556bd29d6 */
class __TwigTemplate_bfa7fc48d027c56aa39acd8f0b62c85be59d6a95618db37d0265a5b0693539a6 extends Template
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
    ";
            // line 27
            echo "    ";
            // line 28
            echo "        <i class=\"fa fa-users\"></i> 
        <span class=\"hidden-xs hidden-sm hidden-md\">Seller Profile</span> 
        <span class=\"caret\"></span>
    ";
            // line 32
            echo "        ";
            // line 33
            echo "          ";
            // line 94
            echo "        ";
            // line 95
            echo "    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__697c1ff322e7a00729e152e51b04ec106f8bc069e9898da8b3a51a7556bd29d6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 95,  76 => 94,  74 => 33,  72 => 32,  67 => 28,  65 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__697c1ff322e7a00729e152e51b04ec106f8bc069e9898da8b3a51a7556bd29d6", "");
    }
}
