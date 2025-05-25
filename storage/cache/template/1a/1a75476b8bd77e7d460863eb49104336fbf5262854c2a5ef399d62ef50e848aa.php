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

/* __string_template__56bf16ea98e5e7490c1491e8d5ce24f3ec9f3ca412c4bc41ff6f03a8996bcc28 */
class __TwigTemplate_7ce6749810f7bce06cb72357f90cb9b41f419b3b1c00faab470dd0b30c15c1e5 extends Template
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
<div id=\"search\" class=\"input-group w-100\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 9
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control font-controls fs-6\" />
  <span>
    <button type=\"button\" class=\"btn button-search\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__56bf16ea98e5e7490c1491e8d5ce24f3ec9f3ca412c4bc41ff6f03a8996bcc28";
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
        return new Source("", "__string_template__56bf16ea98e5e7490c1491e8d5ce24f3ec9f3ca412c4bc41ff6f03a8996bcc28", "");
    }
}
