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

/* __string_template__69626b6be8931e178faf1798be5b807de3079c0b9772b98a96305f6bddb9ce18 */
class __TwigTemplate_2e8c7e5f6beb5261bc32bb2453c66704cbe0dc069ccfce9108b4d10969475c89 extends Template
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
        echo "\" class=\"font-controls\" />
  <span>
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\" style=\"color: #162f65\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__69626b6be8931e178faf1798be5b807de3079c0b9772b98a96305f6bddb9ce18";
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
        return new Source("", "__string_template__69626b6be8931e178faf1798be5b807de3079c0b9772b98a96305f6bddb9ce18", "");
    }
}
