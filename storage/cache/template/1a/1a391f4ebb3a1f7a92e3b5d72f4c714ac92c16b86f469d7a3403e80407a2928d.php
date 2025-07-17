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

/* account/customerpartner/dashboards/low_stock.twig */
class __TwigTemplate_64a11fe6a8ce61342b38bda7b6eab8d8a84691d14800fd211c07722a3612153c extends Template
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
        return "account/customerpartner/dashboards/low_stock.twig";
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
        return new Source("", "account/customerpartner/dashboards/low_stock.twig", "");
    }
}
