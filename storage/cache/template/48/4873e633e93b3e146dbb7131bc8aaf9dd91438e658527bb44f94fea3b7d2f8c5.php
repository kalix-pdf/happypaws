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

/* __string_template__3214af32b47663c600732b6b1f9b91fd3cf827bec1a8afad6fb80093313f59a2 */
class __TwigTemplate_698041147b0e2867c3d422759ba67a4fea6271afc6cac82ee6913b0ed243a98b extends Template
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

  <input type=\"hidden\" name=\"payment_method\" id=\"selected_payment_method\" value=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["payment_methods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "code", [], "any", false, false, false, 11);
            echo "\" />

  <div class=\"row\">
    ";
            // line 14
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
                // line 15
                echo "      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <div class=\"card payment-card h-100 ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) {
                    echo "selected";
                }
                echo "\" 
            data-code=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 18);
                echo "\"
            style=\"cursor: pointer; border: 2px solid transparent;\">
              
            <div class=\"card-body d-flex align-items-center\">
              ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 23);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 23);
                    echo "\" class=\"me-3\" style=\"width: 40px; height: auto;\">
              ";
                }
                // line 25
                echo "              <div>
                <strong>";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 26);
                echo "</strong>
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                  <br><small class=\"text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 28);
                    echo "</small>
                ";
                }
                // line 30
                echo "              </div>
            </div>
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
            // line 36
            echo "  </div>
</div>

";
        }
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__3214af32b47663c600732b6b1f9b91fd3cf827bec1a8afad6fb80093313f59a2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  145 => 36,  126 => 30,  120 => 28,  118 => 27,  114 => 26,  111 => 25,  103 => 23,  101 => 22,  94 => 18,  88 => 17,  84 => 15,  67 => 14,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3214af32b47663c600732b6b1f9b91fd3cf827bec1a8afad6fb80093313f59a2", "");
    }
}
