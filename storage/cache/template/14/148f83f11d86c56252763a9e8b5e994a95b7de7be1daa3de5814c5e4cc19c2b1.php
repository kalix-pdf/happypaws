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

/* __string_template__d9b3868fd60476cb579ffeaa366532b67254996984819055a15d0c428d0d86d1 */
class __TwigTemplate_64fcc354849073cd07a57f0eea61293459dd6dc461479b9596d241d8394d65ea extends Template
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
        <div class=\"mb-2\">
            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 14) < $context["i"])) {
                        // line 15
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 17
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-4\"></i></span>
              ";
                    }
                    // line 19
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "          </div>
        <h5 class=\"card-title\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 21);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 22);
                echo "</p>
        <p class=\"card-text\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 23);
                echo "</p>
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
        return "__string_template__d9b3868fd60476cb579ffeaa366532b67254996984819055a15d0c428d0d86d1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  109 => 28,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  81 => 19,  77 => 17,  73 => 15,  70 => 14,  66 => 13,  60 => 9,  54 => 6,  49 => 5,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d9b3868fd60476cb579ffeaa366532b67254996984819055a15d0c428d0d86d1", "");
    }
}
