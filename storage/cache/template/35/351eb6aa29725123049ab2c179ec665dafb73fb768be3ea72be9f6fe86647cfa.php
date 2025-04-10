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

/* __string_template__f8f42df55f3e19f36d1fc897a8d8d811b6aee3c7d2d5e749348a27e3170bfeb4 */
class __TwigTemplate_fd59390a433c38ab03eb35d37d4bd4922d0a057186005e539a45e2c69fa69b64 extends Template
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
        echo "<div class=\"container\">
        <h2>Webhook Request Data</h2>
        <pre>";
        // line 3
        echo ($context["webhook_data"] ?? null);
        echo "</pre>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["webhook_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["webhooks"]) {
            // line 5
            echo "            <p>";
            echo twig_get_attribute($this->env, $this->source, $context["webhooks"], "sign", [], "any", false, false, false, 5);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webhooks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f8f42df55f3e19f36d1fc897a8d8d811b6aee3c7d2d5e749348a27e3170bfeb4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f8f42df55f3e19f36d1fc897a8d8d811b6aee3c7d2d5e749348a27e3170bfeb4", "");
    }
}
