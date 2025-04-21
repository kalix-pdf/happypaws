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

/* __string_template__e2fb6a82925c036347225940971998e590974ecbf2c01b4e84acb483acc45acf */
class __TwigTemplate_fe6c8dc85b978e3d9a5a8d3053ac68db7de5cc4b443be1ebcee965214a2bef97 extends Template
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<table class=\"table table-striped table-bordered\">
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                echo "</strong></td>
    <td>";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "      <img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 7);
                    echo "\" style=\"max-width: 100px;\">
    ";
                }
                // line 8
                echo "</td>
    <td class=\"text-right\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 9);
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 12);
                echo "</p>
      ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 14) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 15
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
  </tr>
</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 20
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 21
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 24
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e2fb6a82925c036347225940971998e590974ecbf2c01b4e84acb483acc45acf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  104 => 21,  100 => 20,  97 => 19,  83 => 15,  76 => 14,  72 => 13,  68 => 12,  62 => 9,  59 => 8,  53 => 7,  51 => 6,  47 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e2fb6a82925c036347225940971998e590974ecbf2c01b4e84acb483acc45acf", "");
    }
}
