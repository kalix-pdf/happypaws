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

/* __string_template__0b956249ea163c92a98551ba55383575bacf21dfe78ddde65be721f6d5e116a6 */
class __TwigTemplate_c632face4b99ce1eb64c12066b076c3d680eded649c7a6dcdd32172879ad9da4 extends Template
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
   <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
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
        return "__string_template__0b956249ea163c92a98551ba55383575bacf21dfe78ddde65be721f6d5e116a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 12,  46 => 11,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0b956249ea163c92a98551ba55383575bacf21dfe78ddde65be721f6d5e116a6", "");
    }
}
