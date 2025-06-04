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

/* __string_template__eef2b902648037b482162019077e1f21f2bd00ba6750cee329e53fe549c4bb43 */
class __TwigTemplate_7659a8f6ff5430c217207cdd1fa2fb68826b750715f8729b53a3e33951489ae0 extends Template
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
            echo "  <h2 class=\"my-4\">Reviews</h2>
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "    <div class=\"card mb-3\">
      ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 7);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 10
                echo "

      <div class=\"card-body\">
        <div class=\"mb-2\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 15
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 15) < $context["i"])) {
                        // line 16
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    } else {
                        // line 18
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                    }
                    // line 20
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "          </div>
        <h5 class=\"card-title\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 22);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 23);
                echo "</p>
        <p class=\"card-text\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 24);
                echo "</p>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 29
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 31
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__eef2b902648037b482162019077e1f21f2bd00ba6750cee329e53fe549c4bb43";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  111 => 29,  100 => 24,  96 => 23,  92 => 22,  89 => 21,  83 => 20,  79 => 18,  75 => 16,  72 => 15,  68 => 14,  62 => 10,  56 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__eef2b902648037b482162019077e1f21f2bd00ba6750cee329e53fe549c4bb43", "");
    }
}
