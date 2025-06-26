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

/* __string_template__e9c6f5a9c872cdb41a754783e4759ea983c868f9d708f339c560d48e9891fdee */
class __TwigTemplate_f78d6b8f3255a7afb8bb54e599206ace510cab97ba7727d7bd041dd9151d45b7 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 2
            echo "  <div class=\"card mb-3 p-3\">
    <h5>";
            // line 3
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 3);
            echo "</h5>
    <p>";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 4);
            echo "</p>
    <strong>Rating: ";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 5);
            echo "/5</strong><br />
    <small class=\"text-muted\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
            echo "</small>

    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 8)) {
                // line 9
                echo "      <div class=\"mt-2\">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 11
                    echo "          <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "      </div>
    ";
            }
            // line 15
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
<div class=\"pagination-container mt-4\">
  ";
        // line 19
        echo ($context["pagination"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e9c6f5a9c872cdb41a754783e4759ea983c868f9d708f339c560d48e9891fdee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  90 => 17,  83 => 15,  79 => 13,  70 => 11,  66 => 10,  63 => 9,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e9c6f5a9c872cdb41a754783e4759ea983c868f9d708f339c560d48e9891fdee", "");
    }
}
