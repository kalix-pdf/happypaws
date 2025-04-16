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

/* __string_template__632ad03e5be3308d777b4928db21756c6a75fa7cebb5c35d82f837b914e0aae2 */
class __TwigTemplate_b2fcbd03f82a5da319a8922a0b194176317d2ea9b01da0851fece5c5981bf68b extends Template
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
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 7
            echo "<div class=\"radio\">
  <label>
    <input type=\"radio\" name=\"payment_method\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9);
            echo "\"
             ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) {
                echo "checked=\"checked\"";
            }
            echo " />
      ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 11);
            echo "
      ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 12)) {
                // line 13
                echo "        (";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 13);
                echo ")
      ";
            }
            // line 15
            echo "    </label>
</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
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
        return "__string_template__632ad03e5be3308d777b4928db21756c6a75fa7cebb5c35d82f837b914e0aae2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  134 => 35,  128 => 31,  124 => 29,  120 => 27,  118 => 26,  114 => 25,  111 => 24,  109 => 23,  93 => 15,  87 => 13,  85 => 12,  81 => 11,  75 => 10,  71 => 9,  67 => 7,  50 => 6,  45 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__632ad03e5be3308d777b4928db21756c6a75fa7cebb5c35d82f837b914e0aae2", "");
    }
}
