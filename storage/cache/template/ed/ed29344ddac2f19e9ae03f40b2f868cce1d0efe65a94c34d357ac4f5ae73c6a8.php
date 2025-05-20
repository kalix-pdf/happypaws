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

/* __string_template__3df4f30e8e89cf577e5503e1efb4b00c75a8b4bf682be9bbbadd543ec502d648 */
class __TwigTemplate_b3740a40ed0c5d806777cea761a73e3e0c5dcc72bd9d16350a5105f87b7e7bc5 extends Template
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
<div id=\"common-home\" class=\"container\">
  ";
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 12
        echo ($context["column_right"] ?? null);
        echo "</div> 
</div>
";
        // line 14
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__3df4f30e8e89cf577e5503e1efb4b00c75a8b4bf682be9bbbadd543ec502d648";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  50 => 12,  42 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3df4f30e8e89cf577e5503e1efb4b00c75a8b4bf682be9bbbadd543ec502d648", "");
    }
}
