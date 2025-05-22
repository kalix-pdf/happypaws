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

/* __string_template__15f633e89ebea2a5198a1b8802eeda7f5849ba6cbf3780f1c1f1d32bca0d58bd */
class __TwigTemplate_5ddb6f62326615e8aa787b2c282c58e545541bff0a94d7155a1568db6ed41f0d extends Template
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
<div id=\"common-home\" class=\"container-main\">
  <div class=\"row\">
    ";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">";
        // line 5
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 6
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 9
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__15f633e89ebea2a5198a1b8802eeda7f5849ba6cbf3780f1c1f1d32bca0d58bd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  52 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__15f633e89ebea2a5198a1b8802eeda7f5849ba6cbf3780f1c1f1d32bca0d58bd", "");
    }
}
