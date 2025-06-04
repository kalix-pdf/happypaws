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

/* __string_template__241de1519b667767129b3b1321dac3d12e8e6aef45a5f528dfa36d1d2fc3a162 */
class __TwigTemplate_dcbc988cc3b23f056201794ae2b10f871df344d543731a13e113a5f43626ec5f extends Template
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
            echo "  <h2>Reviews</h2>
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
        <h5 class=\"card-title\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 12);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 13);
                echo "</p>
        <p class=\"card-text\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 14);
                echo "</p>

        <div class=\"mb-2\">
          ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 18
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 18) < $context["i"])) {
                        // line 19
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    } else {
                        // line 21
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    }
                    // line 23
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        </div>
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
        return "__string_template__241de1519b667767129b3b1321dac3d12e8e6aef45a5f528dfa36d1d2fc3a162";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  111 => 29,  101 => 24,  95 => 23,  91 => 21,  87 => 19,  84 => 18,  80 => 17,  74 => 14,  70 => 13,  66 => 12,  62 => 10,  56 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__241de1519b667767129b3b1321dac3d12e8e6aef45a5f528dfa36d1d2fc3a162", "");
    }
}
