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

/* __string_template__7b1192f24f3940406ca3c3eb853ec17e983f44bea26f7ec468d8771bb641036c */
class __TwigTemplate_96efbed0a40beb4cb343ca176f6f3dc00356e18b21be06a774e05eae31cef6f7 extends Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        if (($context["reviews"] ?? null)) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "<table class=\"table table-striped table-bordered\">
  <tr>
      <td>";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 7);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 8);
                    echo "\" style=\"max-width: 250px;\"></a>
      ";
                }
                // line 10
                echo "      </td>
  </tr>
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 13);
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 14);
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 17);
                echo "</p>
      ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 19) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 20
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
            // line 24
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 25
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 26
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 29
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7b1192f24f3940406ca3c3eb853ec17e983f44bea26f7ec468d8771bb641036c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  120 => 29,  114 => 26,  110 => 25,  107 => 24,  93 => 20,  86 => 19,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  63 => 10,  58 => 8,  53 => 7,  51 => 6,  47 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7b1192f24f3940406ca3c3eb853ec17e983f44bea26f7ec468d8771bb641036c", "");
    }
}
