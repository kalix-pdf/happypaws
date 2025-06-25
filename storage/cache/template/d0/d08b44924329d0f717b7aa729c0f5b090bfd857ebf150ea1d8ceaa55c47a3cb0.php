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

/* __string_template__cc006f8292597e0f068763b31d5a6cc5de8b6192e79953e30643f5952f44f38b */
class __TwigTemplate_9220298adc1a679d15d2c2abde46f9c32b1423a00f6e5572a019155b6230ef65 extends Template
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

  <div class=\"row\">
    ";
            // line 12
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
                // line 13
                echo "      <div class=\"col-md-6 mb-3\">
        <div class=\"card h-100\">
          <div class=\"card-body d-flex align-items-center\">
            <input 
              class=\"form-check-input me-3\" 
              type=\"radio\" 
              name=\"payment_method\" 
              id=\"payment_";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 20);
                echo "\" 
              value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 21);
                echo "\"
              ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    echo "checked=\"checked\"";
                }
                // line 23
                echo "            />
            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "              <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 25);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 25);
                    echo "\" class=\"me-3\" style=\"width: 40px; height: auto;\">
            ";
                }
                // line 27
                echo "            <label class=\"form-check-label mb-0\" for=\"payment_";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 27);
                echo "\">
              <strong>";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 28);
                echo "</strong>
              ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                <br><small class=\"text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 30);
                    echo "</small>
              ";
                }
                // line 32
                echo "            </label>
          </div>
        </div>
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
            // line 37
            echo "  </div>
</div>

";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__cc006f8292597e0f068763b31d5a6cc5de8b6192e79953e30643f5952f44f38b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 41,  148 => 37,  130 => 32,  124 => 30,  122 => 29,  118 => 28,  113 => 27,  105 => 25,  103 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  79 => 13,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cc006f8292597e0f068763b31d5a6cc5de8b6192e79953e30643f5952f44f38b", "");
    }
}
