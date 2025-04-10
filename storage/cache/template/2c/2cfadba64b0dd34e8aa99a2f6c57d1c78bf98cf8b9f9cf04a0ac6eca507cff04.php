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

/* __string_template__dd0ad2ab4f64ad3979a38f803a80014ded85be00ac70c9da3293128c5579d853 */
class __TwigTemplate_eda2d49a94e58182b4a223c2892902790393b5eff4ee8e31c8bcfc94f38310f2 extends Template
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
        echo "<div class=\"container\">
        ";
        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 4
            echo "        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%\">
              ";
            // line 7
            echo $context["log"];
            echo "
            </td>
          </tr>
        </tbody> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        // line 15
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__dd0ad2ab4f64ad3979a38f803a80014ded85be00ac70c9da3293128c5579d853";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  61 => 12,  50 => 7,  45 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dd0ad2ab4f64ad3979a38f803a80014ded85be00ac70c9da3293128c5579d853", "");
    }
}
