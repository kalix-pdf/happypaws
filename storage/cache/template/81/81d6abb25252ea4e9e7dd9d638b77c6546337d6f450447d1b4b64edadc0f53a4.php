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

/* __string_template__407a630b2e65adc5d2d469acbdc2209efc5ad47f8de9f0271d4da4d2936c99a0 */
class __TwigTemplate_84b92ece0497b228d06748dec82747dbe64b068fc9a09b0700fdc6aa62ea20bd extends Template
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
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 3
            echo "    <div class=\"card mb-3 p-3\">
        <h5>";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 4);
            echo "</h5>
        <p>";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 5);
            echo "</p>
        <strong>Rating: ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 6);
            echo "/5</strong><br />
        <small class=\"text-muted\">";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 7);
            echo "</small>

        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 9)) {
                // line 10
                echo "        <div class=\"mt-2\">
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 12
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        </div>
        ";
            }
            // line 16
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <div class=\"pagination-container mt-4\">
    ";
        // line 19
        echo ($context["pagination"] ?? null);
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__407a630b2e65adc5d2d469acbdc2209efc5ad47f8de9f0271d4da4d2936c99a0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  93 => 18,  86 => 16,  82 => 14,  73 => 12,  69 => 11,  66 => 10,  64 => 9,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__407a630b2e65adc5d2d469acbdc2209efc5ad47f8de9f0271d4da4d2936c99a0", "");
    }
}
