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

/* __string_template__058b19c290b3d78cd1bfec0344b6e3a24cac24f2f121d5f0c257cb88432d3470 */
class __TwigTemplate_2361f4dbf9762a2dab268e5de92b8fd5ed30b409b468913c33c1c6313f1aeb1c extends Template
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
<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 9
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control font-controls fs-3\" />
  <span>
    <button type=\"button\" class=\"btn button-search\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__058b19c290b3d78cd1bfec0344b6e3a24cac24f2f121d5f0c257cb88432d3470";
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
        return new Source("", "__string_template__058b19c290b3d78cd1bfec0344b6e3a24cac24f2f121d5f0c257cb88432d3470", "");
    }
}
