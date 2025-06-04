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

/* __string_template__56ae9227ac77e2549d8cc2fa1ac188209c45c98e0bc960e38fce567f95865dd7 */
class __TwigTemplate_6c1edfce72af453783beeec25b8731361f9cf5eafff05935c1430639a64f42da extends Template
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
        <div class=\"mb-2\">
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 7
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 7) < $context["i"])) {
                        // line 8
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-2\"></i></span>
              ";
                    } else {
                        // line 10
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-2\"></i></span>
              ";
                    }
                    // line 12
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "          </div>
        <h5 class=\"card-title\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 14);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 15);
                echo "</p>
        <p class=\"card-text\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 16);
                echo "</p>
      </div>
      ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 19);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 20);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 23
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 26
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 28
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__56ae9227ac77e2549d8cc2fa1ac188209c45c98e0bc960e38fce567f95865dd7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  107 => 26,  99 => 23,  93 => 20,  88 => 19,  86 => 18,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  64 => 12,  60 => 10,  56 => 8,  53 => 7,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__56ae9227ac77e2549d8cc2fa1ac188209c45c98e0bc960e38fce567f95865dd7", "");
    }
}
