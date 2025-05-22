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

/* __string_template__0ef1fb3630516fa3c2f9b7c4dcf8d3684595ba6a58c29a6437fc62a6b845849c */
class __TwigTemplate_466b12e732c161e8018de3aaf211a8472962b687d912175625e7d944c94abe14 extends Template
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
        // line 7
        echo "
<div id=\"search\" class=\"input-group-1\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 9
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"font-controls\" />
  <span>
    <button type=\"button\" class=\"button-search\"><i class=\"fa fa-search\" style=\"color: #162f65\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__0ef1fb3630516fa3c2f9b7c4dcf8d3684595ba6a58c29a6437fc62a6b845849c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0ef1fb3630516fa3c2f9b7c4dcf8d3684595ba6a58c29a6437fc62a6b845849c", "");
    }
}
