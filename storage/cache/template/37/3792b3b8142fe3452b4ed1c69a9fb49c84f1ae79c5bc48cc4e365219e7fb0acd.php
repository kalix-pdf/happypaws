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

/* __string_template__9a7719681665e85d2b25d1a9394bc2cac537291c87f056c1e9883b765d24d4a2 */
class __TwigTemplate_ac505dcf64a1c26340d08602b3fd7caadd786b2a824525e811d58fedc10bf493 extends Template
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
        return "__string_template__9a7719681665e85d2b25d1a9394bc2cac537291c87f056c1e9883b765d24d4a2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 95,  75 => 94,  73 => 33,  71 => 32,  66 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9a7719681665e85d2b25d1a9394bc2cac537291c87f056c1e9883b765d24d4a2", "");
    }
}
