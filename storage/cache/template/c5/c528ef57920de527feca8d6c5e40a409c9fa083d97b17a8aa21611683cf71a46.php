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

/* __string_template__be97f0da1ade8be7573825aa6e8087de76408082cd4e134ddefd8e03762e288b */
class __TwigTemplate_df1118aa7ed0833b9d5debbb539e229dd37f8e528ad63a5770b94ee9314ef511 extends Template
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
        echo ($context["revieww"] ?? null);
        echo " prod id";
    }

    public function getTemplateName()
    {
        return "__string_template__be97f0da1ade8be7573825aa6e8087de76408082cd4e134ddefd8e03762e288b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__be97f0da1ade8be7573825aa6e8087de76408082cd4e134ddefd8e03762e288b", "");
    }
}
