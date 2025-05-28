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

/* __string_template__d0585c058ab2cf1a6952927897cdae7a9df48541568147e5ee6f56ae28d902f7 */
class __TwigTemplate_e0afdfca0f9fa9a74040b398891e869a690078cc1db44355d38aa38093595855 extends Template
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
            echo "  <div class=\"alert alert-warning alert-dismissible\">
    <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 3
            echo ($context["error_warning"] ?? null);
            echo "
  </div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (($context["payment_methods"] ?? null)) {
            // line 8
            echo "  <div class=\"form-group\">
    <p class=\"mb-2\">";
            // line 9
            echo ($context["text_payment_method"] ?? null);
            echo "</p>

    ";
            // line 11
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
                // line 12
                echo "      <div class=\"form-check mb-2\">
        <input 
          class=\"form-check-input\" 
          type=\"radio\" 
          name=\"payment_method\" 
          id=\"payment_";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 17);
                echo "\" 
          value=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 18);
                echo "\"
          ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 19)) {
                    echo "checked=\"checked\"";
                }
                // line 20
                echo "        />
        <label class=\"form-check-label\" for=\"payment_";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 21);
                echo "\">
          ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 22);
                echo "
          ";
                // line 27
                echo "        </label>
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
            // line 30
            echo "  </div>
";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d0585c058ab2cf1a6952927897cdae7a9df48541568147e5ee6f56ae28d902f7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  124 => 30,  108 => 27,  104 => 22,  100 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  78 => 12,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d0585c058ab2cf1a6952927897cdae7a9df48541568147e5ee6f56ae28d902f7", "");
    }
}
