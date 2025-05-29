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

/* __string_template__8bc1204fc92a469b3101947fd6fcfc6179a80fa0309706e2914582e74174f45a */
class __TwigTemplate_09eecd87a3266a0c6ff1ee7ca22a2756e5145c356464098e94f7671efecefa59 extends Template
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

    public function getTemplateName()
    {
        return "__string_template__8bc1204fc92a469b3101947fd6fcfc6179a80fa0309706e2914582e74174f45a";
    }

    public function getDebugInfo()
    {
        return array (  77 => 95,  75 => 94,  73 => 33,  71 => 32,  69 => 31,  66 => 29,  64 => 28,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8bc1204fc92a469b3101947fd6fcfc6179a80fa0309706e2914582e74174f45a", "");
    }
}
