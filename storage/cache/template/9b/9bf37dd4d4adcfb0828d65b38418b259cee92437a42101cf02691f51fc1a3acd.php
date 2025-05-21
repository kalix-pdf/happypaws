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

/* __string_template__3d45839f6673ee000ae23c51cff0853b8aabf0e709ec389c7a9eecab2e8d32fc */
class __TwigTemplate_2c79137dc9c25b3109fd8b403c216e2c5ff63c677798be57789384698871b790 extends Template
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
<div id=\"common-home\" class=\"container bg-secondary\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"alert alert-info\">
                <h4>Welcome to our store!</h4>
                <p>Explore our latest products and offers.</p>
            </div>
        </div>
    </div>
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 20
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 22
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__3d45839f6673ee000ae23c51cff0853b8aabf0e709ec389c7a9eecab2e8d32fc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  82 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3d45839f6673ee000ae23c51cff0853b8aabf0e709ec389c7a9eecab2e8d32fc", "");
    }
}
