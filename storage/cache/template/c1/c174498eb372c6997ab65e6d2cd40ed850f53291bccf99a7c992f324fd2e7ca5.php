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

/* __string_template__1874e780fb13bd8de4c8bebec1b070c086d3265755c45ba4649cb35a7744fc9c */
class __TwigTemplate_365b2ff03e119b14462da85b8b59fa1b1e74077754e0657a8033a6939d6f1421 extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "    <div class=\"card mb-4\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 8
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 8) < $context["i"])) {
                        // line 9
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 11
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-4\"></i></span>
              ";
                    }
                    // line 13
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 15);
                echo "</p>
        <p class=\"card-text\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 16);
                echo "</p>
      ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 18);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 19);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 22
                echo "      </div>
      
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 27
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 29
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__1874e780fb13bd8de4c8bebec1b070c086d3265755c45ba4649cb35a7744fc9c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  108 => 27,  98 => 22,  92 => 19,  87 => 18,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  68 => 13,  64 => 11,  60 => 9,  57 => 8,  53 => 7,  48 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1874e780fb13bd8de4c8bebec1b070c086d3265755c45ba4649cb35a7744fc9c", "");
    }
}
