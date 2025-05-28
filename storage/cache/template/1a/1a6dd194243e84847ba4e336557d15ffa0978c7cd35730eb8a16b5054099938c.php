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

/* __string_template__1eefa94f83be818bb1a8aa159902557e4ebdf50510ef5b82725c1ef87652200c */
class __TwigTemplate_9eb9abea6ade820304c8d5f9ba1db9dc1201e880a45e5df5a17f74a32a46e7ac extends Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">Forgot Password</a>
  ";
        }
        // line 5
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 6
        if (($context["logged"] ?? null)) {
            // line 7
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 8
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 10
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_download"] ?? null);
        echo "</a><a href=\"";
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_reward"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_return"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 11
        if (($context["logged"] ?? null)) {
            // line 12
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1eefa94f83be818bb1a8aa159902557e4ebdf50510ef5b82725c1ef87652200c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 14,  120 => 12,  118 => 11,  79 => 10,  72 => 8,  65 => 7,  63 => 6,  56 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1eefa94f83be818bb1a8aa159902557e4ebdf50510ef5b82725c1ef87652200c", "");
    }
}
