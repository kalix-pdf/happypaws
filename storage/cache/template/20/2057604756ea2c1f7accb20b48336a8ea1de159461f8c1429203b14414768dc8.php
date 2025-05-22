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

/* __string_template__4fd5e6f08fb50fe41893ac53760ff49e182776f0858b73232a544c6e24bbc8dd */
class __TwigTemplate_478e31ba3b5c3df249a7ceb0d1a7848bf6ba55b652247588d45940bc6b553f7e extends Template
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
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\" style=\"color: #162f65\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4fd5e6f08fb50fe41893ac53760ff49e182776f0858b73232a544c6e24bbc8dd";
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
        return new Source("", "__string_template__4fd5e6f08fb50fe41893ac53760ff49e182776f0858b73232a544c6e24bbc8dd", "");
    }
}
