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

/* __string_template__7c0756f3787ceff91a7fcafdb782fb0b42dc30b227c6ad9d626b394fa043abf4 */
class __TwigTemplate_ae7ea08341e530747abb16a66cd9db74cdf72cb1b53eac03ee4ed979676c8b13 extends Template
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
        echo "\" class=\"form-control font-controls\" />
  <span>
    <button type=\"button\" class=\"btn button-search\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__7c0756f3787ceff91a7fcafdb782fb0b42dc30b227c6ad9d626b394fa043abf4";
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
        return new Source("", "__string_template__7c0756f3787ceff91a7fcafdb782fb0b42dc30b227c6ad9d626b394fa043abf4", "");
    }
}
