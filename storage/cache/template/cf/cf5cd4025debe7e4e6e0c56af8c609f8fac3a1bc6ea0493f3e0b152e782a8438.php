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

/* __string_template__e0382db0e2f950a7ad5b5f2430402e4efedf780ac097d34dcbde7651064d8f2c */
class __TwigTemplate_6d91bbda02723ffb707942b393693d019a341b9d11cf35ff92a7161ace1d492e extends Template
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
  <label>";
            // line 8
            if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                // line 9
                echo "    ";
                $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9);
                // line 10
                echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10);
                echo "\" checked=\"checked\" />
    ";
            } else {
                // line 12
                echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 12);
                echo "\" />
    ";
            }
            // line 14
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 14);
            echo "
    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 15)) {
                // line 16
                echo "    (";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 16);
                echo ")
    ";
            }
            // line 17
            echo " </label>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "<p><strong>";
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 23
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
";
        // line 25
        if (($context["text_agree"] ?? null)) {
            // line 26
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">";
            // line 27
            echo ($context["text_agree"] ?? null);
            echo "
    ";
            // line 28
            if (($context["agree"] ?? null)) {
                // line 29
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 31
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    ";
            }
            // line 33
            echo "    &nbsp;
    <input type=\"button\" value=\"";
            // line 34
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
        }
        // line 38
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__e0382db0e2f950a7ad5b5f2430402e4efedf780ac097d34dcbde7651064d8f2c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  128 => 34,  125 => 33,  121 => 31,  117 => 29,  115 => 28,  111 => 27,  108 => 26,  106 => 25,  101 => 23,  95 => 21,  87 => 17,  81 => 16,  79 => 15,  74 => 14,  68 => 12,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  50 => 6,  45 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e0382db0e2f950a7ad5b5f2430402e4efedf780ac097d34dcbde7651064d8f2c", "");
    }
}
