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

/* __string_template__4ffcf877ade302ce3896302b41d09f26de1fddd8559f529b1b67550a237a2494 */
class __TwigTemplate_b88ac9173d464f8be55ea66bd5a4f5f483739cd8f983443c983c809e8693a0a4 extends Template
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
        if (($context["error_warning"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 5
        echo "<p>";
        echo ($context["text_payment_method"] ?? null);
        echo "</p>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 7
            echo "<div class=\"radio\">
  <label>
    <input type=\"radio\" name=\"payment_method\" value=\"Xendit Ph\" checked=\"checked\" />
    <input type=\"radio\" name=\"payment_method\" value=\"Cash on Delivery\" />
 
    ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 12);
            echo "
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 13)) {
                // line 14
                echo "    (";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 14);
                echo ")
    ";
            }
            // line 15
            echo " </label>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        if (($context["text_agree"] ?? null)) {
            // line 24
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">";
            // line 25
            echo ($context["text_agree"] ?? null);
            echo "
    ";
            // line 26
            if (($context["agree"] ?? null)) {
                // line 27
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 29
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    ";
            }
            // line 31
            echo "    &nbsp;
   </div>
</div>
";
        } else {
            // line 35
            echo "
";
        }
        // line 36
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__4ffcf877ade302ce3896302b41d09f26de1fddd8559f529b1b67550a237a2494";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  106 => 35,  100 => 31,  96 => 29,  92 => 27,  90 => 26,  86 => 25,  83 => 24,  81 => 23,  73 => 15,  67 => 14,  65 => 13,  61 => 12,  54 => 7,  50 => 6,  45 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4ffcf877ade302ce3896302b41d09f26de1fddd8559f529b1b67550a237a2494", "");
    }
}
