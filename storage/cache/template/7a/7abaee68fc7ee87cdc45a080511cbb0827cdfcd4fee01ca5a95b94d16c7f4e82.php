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

/* __string_template__32466efe636f7d57ffef644fa25dfc3666a5a48286d760e766ae39d3804438f4 */
class __TwigTemplate_35172bd0d63d763d6a2d68bee0323765c6a3883610d2503d7cda45636a62406b extends Template
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
      <td>";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "        <img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6);
                    echo "\" style=\"max-width: 250px;\">
      ";
                }
                // line 8
                echo "      </td>
  </tr>
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 11);
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 12);
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 15);
                echo "</p>
      ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 18
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
            // line 22
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 23
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 24
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 27
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__32466efe636f7d57ffef644fa25dfc3666a5a48286d760e766ae39d3804438f4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  106 => 24,  102 => 23,  99 => 22,  85 => 18,  78 => 17,  74 => 16,  70 => 15,  64 => 12,  60 => 11,  55 => 8,  49 => 6,  47 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__32466efe636f7d57ffef644fa25dfc3666a5a48286d760e766ae39d3804438f4", "");
    }
}
