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

/* __string_template__0be56954d686db342f02ef89a5e387139ec8b2d2ba24aee32db5da9223ec62a3 */
class __TwigTemplate_c10b0b9efd5315324421f8942b2b94a9eda98d3d3ebf24dfd09e079154a50877 extends Template
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
        // line 19
        echo "<p><strong>";
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 21
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
";
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
        return "__string_template__0be56954d686db342f02ef89a5e387139ec8b2d2ba24aee32db5da9223ec62a3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  117 => 35,  111 => 31,  107 => 29,  103 => 27,  101 => 26,  97 => 25,  94 => 24,  92 => 23,  87 => 21,  81 => 19,  73 => 15,  67 => 14,  65 => 13,  61 => 12,  54 => 7,  50 => 6,  45 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0be56954d686db342f02ef89a5e387139ec8b2d2ba24aee32db5da9223ec62a3", "");
    }
}
