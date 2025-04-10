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

/* __string_template__427e8ec75d526cfaf930a4fe92e535517a6ca36e7722b64a781193a75e5a39e1 */
class __TwigTemplate_37fe84e9b1964e760c411962c54acb3e4ef530b999b13f4a7212570f72138461 extends Template
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
  <div class=\"tile-body\"><i class=\"fa fa-users\"></i>
    <h2 class=\"pull-right\">";
        // line 4
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 6
        echo ($context["online"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__427e8ec75d526cfaf930a4fe92e535517a6ca36e7722b64a781193a75e5a39e1";
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
        return new Source("", "__string_template__427e8ec75d526cfaf930a4fe92e535517a6ca36e7722b64a781193a75e5a39e1", "");
    }
}
