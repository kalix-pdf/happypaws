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

/* __string_template__a2c24511cb9692b46954e464af39f93d876a621cc6c67ad863224c46a9725ad0 */
class __TwigTemplate_c06d759fb43975ad74e0c6ac06e783576391dce14ce03869c995caf88e2aaae1 extends Template
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
                echo "    <div class=\"card mb-3\">
      ";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 5);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 6
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 9
                echo "
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 11);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 12);
                echo "</p>
        <p class=\"card-text\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 13);
                echo "</p>

        <div class=\"mb-2\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        // line 18
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    } else {
                        // line 20
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    }
                    // line 22
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 28
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__a2c24511cb9692b46954e464af39f93d876a621cc6c67ad863224c46a9725ad0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  109 => 28,  99 => 23,  93 => 22,  89 => 20,  85 => 18,  82 => 17,  78 => 16,  72 => 13,  68 => 12,  64 => 11,  60 => 9,  54 => 6,  49 => 5,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a2c24511cb9692b46954e464af39f93d876a621cc6c67ad863224c46a9725ad0", "");
    }
}
