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

/* __string_template__1acf0b074a4fc0904dbb6dab2ca9a34ba87a27373266ef4422107e461d051654 */
class __TwigTemplate_5bd11fd3f01e70ecb6666f7ffc2b25560dcc1747d82d3816ffec2338c9400fe2 extends Template
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
  <a href=\"";
            // line 11
            echo ($context["transaction"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
  ";
            // line 13
            echo "  ";
            // line 14
            echo "  ";
            // line 15
            echo "  
  ";
        }
        // line 17
        echo "  ";
        if (($context["logged"] ?? null)) {
            // line 18
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1acf0b074a4fc0904dbb6dab2ca9a34ba87a27373266ef4422107e461d051654";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  111 => 18,  108 => 17,  104 => 15,  102 => 14,  100 => 13,  94 => 11,  88 => 10,  78 => 9,  72 => 8,  65 => 7,  63 => 6,  56 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1acf0b074a4fc0904dbb6dab2ca9a34ba87a27373266ef4422107e461d051654", "");
    }
}
