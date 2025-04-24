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

/* __string_template__44ef1bd6c1be378b572403d3278a6f84855150a26d1103affb4e4d345411deef */
class __TwigTemplate_41fea3d17c90e4f7fe07943d431d8c546d8b2418341a99a101e9f1990a5f375b extends Template
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
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"tile-body\"><i class=\"fa fa-shopping-cart\"></i>
    <h2 class=\"pull-right\">";
        // line 4
        echo ($context["low_stock_quantity"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 6
        echo ($context["low_stock_view_more"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>


";
    }

    public function getTemplateName()
    {
        return "__string_template__44ef1bd6c1be378b572403d3278a6f84855150a26d1103affb4e4d345411deef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__44ef1bd6c1be378b572403d3278a6f84855150a26d1103affb4e4d345411deef", "");
    }
}
