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

/* __string_template__57159ea7a37061bc9ec1629cfeaafa7efdbb038e22c2ffb165f72dd2ab3cd5b9 */
class __TwigTemplate_3de968959a4532b3d8af5043b944983db6716f3e79f42ad245d8823f42028d85 extends Template
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
        echo " <span class=\"pull-right\">
    ";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            echo " 
    <i class=\"fa fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            echo "    <i class=\"fa fa-caret-down\"></i>
    ";
        }
        // line 8
        echo "    ";
        echo ($context["percentage"] ?? null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-shopping-cart\"></i>
    <h2 class=\"pull-right\">";
        // line 10
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__57159ea7a37061bc9ec1629cfeaafa7efdbb038e22c2ffb165f72dd2ab3cd5b9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  61 => 10,  55 => 8,  51 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__57159ea7a37061bc9ec1629cfeaafa7efdbb038e22c2ffb165f72dd2ab3cd5b9", "");
    }
}
