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

/* mail/register.twig */
class __TwigTemplate_8184676fd7db9db451767b15a3b4e72015f0dd43fb0b5f4200417c53836088f4 extends Template
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
        echo ($context["text_welcome"] ?? null);
        echo "

";
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            echo ($context["text_login"] ?? null);
            echo "

";
            // line 6
            echo ($context["login"] ?? null);
            echo "

";
            // line 8
            echo ($context["text_service"] ?? null);
            echo "

";
            // line 10
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 11
            echo ($context["store"] ?? null);
            echo "
";
        } else {
            // line 13
            echo ($context["text_approval"] ?? null);
            echo "

";
            // line 15
            echo ($context["login"] ?? null);
            echo "

";
            // line 17
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 18
            echo ($context["store"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  78 => 17,  73 => 15,  68 => 13,  63 => 11,  59 => 10,  54 => 8,  49 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/register.twig", "");
    }
}
