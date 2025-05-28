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

/* __string_template__ff31a1404e1df5fec09af861123829afc2c0a1a72846bc998b06f7cfbfd4cdbe */
class __TwigTemplate_77a9cc3bd96ad4673e1c052dc849b8e647b1eb2d9028edb465c1453ed3655b6b extends Template
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
        echo "  
  ";
        // line 6
        if (($context["logged"] ?? null)) {
            // line 7
            echo "  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
      My Account
    </button>
    <ul class=\"dropdown-menu\">
      <li><a class=\"dropdown-item\" href=\"";
            // line 12
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 13
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 14
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 15
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
    </ul>
  </div>
  ";
            // line 24
            echo "  ";
            // line 25
            echo "  ";
            // line 26
            echo "  ";
            // line 27
            echo "  
  ";
        }
        // line 29
        echo "  ";
        if (($context["logged"] ?? null)) {
            // line 30
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ff31a1404e1df5fec09af861123829afc2c0a1a72846bc998b06f7cfbfd4cdbe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  107 => 30,  104 => 29,  100 => 27,  98 => 26,  96 => 25,  94 => 24,  86 => 15,  80 => 14,  74 => 13,  68 => 12,  61 => 7,  59 => 6,  56 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ff31a1404e1df5fec09af861123829afc2c0a1a72846bc998b06f7cfbfd4cdbe", "");
    }
}
