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

/* __string_template__361e76457765f7b6785328ab80b28c70158fda2f5e709fe9a52beec411a46b1f */
class __TwigTemplate_f58196cc42361bdd75e27b6956829ffff9301611090ae9132cecb57d2909eb0c extends Template
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
<div id=\"common-maintenance\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">";
        // line 4
        echo ($context["message"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 7
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__361e76457765f7b6785328ab80b28c70158fda2f5e709fe9a52beec411a46b1f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__361e76457765f7b6785328ab80b28c70158fda2f5e709fe9a52beec411a46b1f", "");
    }
}
