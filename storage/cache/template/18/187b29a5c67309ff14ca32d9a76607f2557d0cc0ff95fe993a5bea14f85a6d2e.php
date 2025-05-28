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

/* __string_template__cf959d33809cd0cd01656934bece8d264c46d1287f0abe1397ebd70bc569ab32 */
class __TwigTemplate_e42b545a15ef755b3d2217c6ecd92ff65e7047bfabc4cb908f4c849281445391 extends Template
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
  <a href=\"";
            // line 9
            echo ($context["address"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_address"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 10
            echo ($context["order"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
   ";
            // line 12
            echo "  <a href=\"";
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
        }
        // line 15
        echo "  ";
        if (($context["logged"] ?? null)) {
            // line 16
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__cf959d33809cd0cd01656934bece8d264c46d1287f0abe1397ebd70bc569ab32";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 18,  114 => 16,  111 => 15,  94 => 12,  88 => 10,  78 => 9,  72 => 8,  65 => 7,  63 => 6,  56 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cf959d33809cd0cd01656934bece8d264c46d1287f0abe1397ebd70bc569ab32", "");
    }
}
