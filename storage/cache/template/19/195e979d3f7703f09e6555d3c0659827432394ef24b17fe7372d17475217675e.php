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

/* __string_template__83ef0dfa33ba7ac674f0f5debd141151b99d0de82f547f8ad925674dd8138332 */
class __TwigTemplate_dcd5a8b190bd0302d2b0ac54bfaa2473383cd7f47c7ceba213891673428d44f6 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\" class=\"container\">
  ";
        // line 13
        echo "</div>
";
        // line 14
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__83ef0dfa33ba7ac674f0f5debd141151b99d0de82f547f8ad925674dd8138332";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  42 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__83ef0dfa33ba7ac674f0f5debd141151b99d0de82f547f8ad925674dd8138332", "");
    }
}
