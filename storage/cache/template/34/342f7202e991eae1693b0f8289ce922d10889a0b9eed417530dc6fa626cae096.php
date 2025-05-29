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

/* __string_template__fbf0efc27128e6f8b2f01e7d8b5416163046f92cb0c2dda1d7d834760c29e6b7 */
class __TwigTemplate_8ba65ed7cc1b01201f94885f74d7b2729f4f55a0baae49982cad0bba16f904c9 extends Template
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
    ";
            // line 28
            echo "        ";
            // line 29
            echo "        <span class=\"hidden-xs hidden-sm hidden-md\">Seller Profile</span> 
        ";
            // line 31
            echo "    ";
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
        return "__string_template__fbf0efc27128e6f8b2f01e7d8b5416163046f92cb0c2dda1d7d834760c29e6b7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 95,  77 => 94,  75 => 33,  73 => 32,  71 => 31,  68 => 29,  66 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fbf0efc27128e6f8b2f01e7d8b5416163046f92cb0c2dda1d7d834760c29e6b7", "");
    }
}
