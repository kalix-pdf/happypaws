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

/* __string_template__6cbfd0128b23a4d89607538da39de678d41c80c50314830a614e3fc6f9a04961 */
class __TwigTemplate_28448cd1d2763c2614a3b72c219d59fff6ed2fd06bc7a172c6371c3da5e46416 extends Template
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
        echo "\" class=\"font-controls rounded-20\" />
  <span>
    <button type=\"button\" class=\"button-search\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6cbfd0128b23a4d89607538da39de678d41c80c50314830a614e3fc6f9a04961";
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
        return new Source("", "__string_template__6cbfd0128b23a4d89607538da39de678d41c80c50314830a614e3fc6f9a04961", "");
    }
}
