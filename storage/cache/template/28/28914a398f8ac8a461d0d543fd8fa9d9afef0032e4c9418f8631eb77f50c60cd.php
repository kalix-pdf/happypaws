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

/* __string_template__8c74d3a83fdb98c7118ebf5b5021eb50461954fdf8ec637dcee4655e4c1f07e9 */
class __TwigTemplate_43183efe4f9c2e1012a90fbf51279a5153bbfb5d59c6375b3f0b19ccf9c01a1c extends Template
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
            echo "        ";
            // line 30
            echo "        ";
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
        return "__string_template__8c74d3a83fdb98c7118ebf5b5021eb50461954fdf8ec637dcee4655e4c1f07e9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 95,  78 => 94,  76 => 33,  74 => 32,  72 => 31,  70 => 30,  68 => 29,  66 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8c74d3a83fdb98c7118ebf5b5021eb50461954fdf8ec637dcee4655e4c1f07e9", "");
    }
}
