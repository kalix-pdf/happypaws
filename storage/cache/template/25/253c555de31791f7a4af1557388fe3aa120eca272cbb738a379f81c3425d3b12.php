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

/* __string_template__085c901ea8610076077f83534a8ef826b3760dcf4e3cac20fd0176f6dea8a0d9 */
class __TwigTemplate_db1053708cf6ba15122897f2de897770b6873063a14025572bccd512bc8975dc extends Template
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
        echo "
\t\t<div class=\"row\">
\t\t  <div class=\"col-lg-4 col-md-4 col-sm-6\">";
        // line 3
        echo ($context["order"] ?? null);
        echo "</div>
\t\t  <div class=\"col-lg-4 col-md-4 col-sm-6\">";
        // line 4
        echo ($context["sale"] ?? null);
        echo "</div>
\t\t  <div class=\"col-lg-4 col-md-4 col-sm-6\">";
        // line 5
        echo ($context["customer"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col-lg-6 col-md-12 col-sx-12 col-sm-12\">";
        // line 8
        echo ($context["seller_map"] ?? null);
        echo "</div>
\t\t  <div class=\"col-lg-6 col-md-12 col-sx-12 col-sm-12\">";
        // line 9
        echo ($context["chart"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col-lg-12 col-md-12 col-sm-12 col-sx-12\"> ";
        // line 12
        echo ($context["recent"] ?? null);
        echo " </div>
\t\t</div>
 ";
    }

    public function getTemplateName()
    {
        return "__string_template__085c901ea8610076077f83534a8ef826b3760dcf4e3cac20fd0176f6dea8a0d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 9,  55 => 8,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__085c901ea8610076077f83534a8ef826b3760dcf4e3cac20fd0176f6dea8a0d9", "");
    }
}
