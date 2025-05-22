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

/* __string_template__c1a12131c12809de058d0d3316077e49d74962898dd33a5fcbd31340ce070e1c */
class __TwigTemplate_df59be21fcea3efd5ca6ea7187356d45a88819e8dfe897558c91ed2a1605d8f2 extends Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"></button><i class=\"fa fa-search\"></i>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c1a12131c12809de058d0d3316077e49d74962898dd33a5fcbd31340ce070e1c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c1a12131c12809de058d0d3316077e49d74962898dd33a5fcbd31340ce070e1c", "");
    }
}
