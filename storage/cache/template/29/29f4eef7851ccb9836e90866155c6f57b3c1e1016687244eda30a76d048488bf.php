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

/* __string_template__44ee8ac3bd66194164e64a9c0ffa1a9f9fa7497594a502dcf93c1242142b3cfc */
class __TwigTemplate_0e1bed13123da812b20e4bab89b24333ce89658c4f02f5f943fcffd0d1df06bc extends Template
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
                echo "
    <div>4.8 OUT OF 5</div>

    <div class=\"mb-4\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 8);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 11
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 11) < $context["i"])) {
                        // line 12
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 14
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-4\"></i></span>
              ";
                    }
                    // line 16
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 18);
                echo "</p>
        <p class=\"card-text\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 19);
                echo "</p>
      ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 21);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 22);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 25
                echo "      </div>
      
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 30
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__44ee8ac3bd66194164e64a9c0ffa1a9f9fa7497594a502dcf93c1242142b3cfc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  111 => 30,  101 => 25,  95 => 22,  90 => 21,  88 => 20,  84 => 19,  80 => 18,  77 => 17,  71 => 16,  67 => 14,  63 => 12,  60 => 11,  56 => 10,  51 => 8,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__44ee8ac3bd66194164e64a9c0ffa1a9f9fa7497594a502dcf93c1242142b3cfc", "");
    }
}
