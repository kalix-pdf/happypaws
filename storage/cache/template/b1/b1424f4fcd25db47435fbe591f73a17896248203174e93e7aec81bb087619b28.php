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

/* __string_template__22744aaa1dae61d21d90e8418a5dc6351a548185b4743d27c518e957b4e46a41 */
class __TwigTemplate_21d5876625677b5cd9a3db208d2dda36c2520ef52b45c1517f817ea6f2f659fe extends Template
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
            echo "  
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "    <div class=\"mb-1\">
      <div class=\"card-body px-4\">
        <h5 class=\"card-title\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 9
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9) < $context["i"])) {
                        // line 10
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 12
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw stars fs-4\"></i></span>
              ";
                    }
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 16);
                echo "</p>
        <p class=\"card-text me-5\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 17);
                echo "</p>
      ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "        <div class=\"attachments mt-2 d-flex flex-wrap\">
        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 21
                        echo "          <a href=\"image/";
                        echo $context["file"];
                        echo "\" target=\"_blank\" class=\"me-2 mb-2\">
            <img src=\"image/";
                        // line 22
                        echo $context["file"];
                        echo "\" class=\"img-thumbnail\" style=\"max-width: 100px;\" />
          </a>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "      </div>
      ";
                }
                // line 27
                echo "      </div>
    </div>
    <hr class=\"border border-info border-1 opacity-50\">
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 32
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__22744aaa1dae61d21d90e8418a5dc6351a548185b4743d27c518e957b4e46a41";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  124 => 32,  114 => 27,  110 => 25,  101 => 22,  96 => 21,  92 => 20,  89 => 19,  87 => 18,  83 => 17,  79 => 16,  76 => 15,  70 => 14,  66 => 12,  62 => 10,  59 => 9,  55 => 8,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__22744aaa1dae61d21d90e8418a5dc6351a548185b4743d27c518e957b4e46a41", "");
    }
}
