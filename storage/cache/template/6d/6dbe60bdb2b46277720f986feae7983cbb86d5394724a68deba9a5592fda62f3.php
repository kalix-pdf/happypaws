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

/* __string_template__dd31bc6ad54a83ffb92cfcea203016d96389409bd44cc9ebf6328f5783e26bc2 */
class __TwigTemplate_327b9d9b50dc9d0f7b0dd1d7c701c879d53576eac9f25b42a55f1c161f1b8cd9 extends Template
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
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 7);
                    echo "\" style=\"max-width: 250px;\"></a>
      ";
                }
                // line 9
                echo "      </td>
  </tr>
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 12);
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 13);
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 16);
                echo "</p>
      ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 18
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 18) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 19
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
            // line 23
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 24
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 25
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 28
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__dd31bc6ad54a83ffb92cfcea203016d96389409bd44cc9ebf6328f5783e26bc2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  110 => 25,  106 => 24,  103 => 23,  89 => 19,  82 => 18,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  59 => 9,  54 => 7,  49 => 6,  47 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dd31bc6ad54a83ffb92cfcea203016d96389409bd44cc9ebf6328f5783e26bc2", "");
    }
}
