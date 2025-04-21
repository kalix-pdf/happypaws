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

/* __string_template__938966598563e6cb8c71292dad697944a8e7ced9262ac3cdf7279c780c0220f8 */
class __TwigTemplate_c9b023e4043a118b3d11c1b32f91410d83b753050d42de1d20f54a1a478a387c extends Template
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
  ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "      <p>Attachment:
        <a href=\"";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 7);
                    echo "\" target=\"_blank\">Download</a>
      </p>
    ";
                }
                // line 10
                echo "    <td style=\"width: 50%;\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 10);
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 11);
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 14);
                echo "</p>
      ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 16
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 17
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
            // line 21
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 22
            echo ($context["pagination"] ?? null);
            echo "</div>
  <div class=\"col-sm-6 text-right\">";
            // line 23
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 26
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__938966598563e6cb8c71292dad697944a8e7ced9262ac3cdf7279c780c0220f8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  105 => 23,  101 => 22,  98 => 21,  84 => 17,  77 => 16,  73 => 15,  69 => 14,  63 => 11,  58 => 10,  52 => 7,  49 => 6,  47 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__938966598563e6cb8c71292dad697944a8e7ced9262ac3cdf7279c780c0220f8", "");
    }
}
