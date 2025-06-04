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

/* __string_template__1eefbc49aebe0314cde6439a1a761bf5a64303d5d2af1f9185bbe4fc2a693310 */
class __TwigTemplate_3590a758f34d8db48f2bbc023f3c3a037851fa8351582c0a73937a7658a7c460 extends Template
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
            echo "  <div>4.8 OUT OF 5</div>
  
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 5
                echo "    <div class=\"mb-4\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 10
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 10) < $context["i"])) {
                        // line 11
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 13
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-4\"></i></span>
              ";
                    }
                    // line 15
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 17);
                echo "</p>
        <p class=\"card-text\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 18);
                echo "</p>
      ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 20);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 21);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 24
                echo "      </div>
      
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
        return "__string_template__1eefbc49aebe0314cde6439a1a761bf5a64303d5d2af1f9185bbe4fc2a693310";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  111 => 29,  101 => 24,  95 => 21,  90 => 20,  88 => 19,  84 => 18,  80 => 17,  77 => 16,  71 => 15,  67 => 13,  63 => 11,  60 => 10,  56 => 9,  51 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1eefbc49aebe0314cde6439a1a761bf5a64303d5d2af1f9185bbe4fc2a693310", "");
    }
}
