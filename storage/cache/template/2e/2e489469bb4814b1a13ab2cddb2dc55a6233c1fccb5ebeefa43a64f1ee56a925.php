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

/* __string_template__f7713d7865a562b1fa765d76c8df80d2b631b21e9fd7c377dabab72efd69f3ba */
class __TwigTemplate_726ddffd0a70992bedc2bf2b85b2876d017f69766a1b0d449cba6673d64d2e00 extends Template
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
          <div class=\"card payment-card h-100 ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 16)) {
                    echo "selected";
                }
                echo "\" 
            data-code=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 17);
                echo "\"
            style=\"cursor: pointer; border: 2px solid transparent;\">
              
            <div class=\"card-body d-flex align-items-center\">
              ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 22);
                    echo "\" class=\"me-3\" style=\"width: 40px; height: auto;\">
              ";
                }
                // line 24
                echo "              <div>
                <strong>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 25);
                echo "</strong>
                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                  <br><small class=\"text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 27);
                    echo "</small>
                ";
                }
                // line 29
                echo "              </div>
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
            // line 34
            echo "  </div>
</div>
";
        }
        // line 37
        echo "
<script>
  document.querySelectorAll('.payment-card').forEach(function(card) {
    card.addEventListener('click', function() {
      // Remove 'selected' class and hide icons from all
      document.querySelectorAll('.payment-card').forEach(c => {
        c.classList.remove('selected');
        c.style.borderColor = 'transparent';
        c.style.backgroundColor = '';
        c.querySelector('.check-icon').style.display = 'none';
      });

      // Add 'selected' class to clicked card
      card.classList.add('selected');
      card.style.borderColor = '#007bff';
      card.style.backgroundColor = '#e9f5ff'; // light blue
      card.querySelector('.check-icon').style.display = 'block';

      // Set hidden input value
      document.getElementById('selected_payment_method').value = card.dataset.code;
    });
  });
</script>

<style>
  .payment-card.selected {
    border-color: #007bff;
    background-color: #e9f5ff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
  }

  .check-icon .badge {
    font-size: 1rem;
    padding: 0.5rem;
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "__string_template__f7713d7865a562b1fa765d76c8df80d2b631b21e9fd7c377dabab72efd69f3ba";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  143 => 34,  125 => 29,  119 => 27,  117 => 26,  113 => 25,  110 => 24,  102 => 22,  100 => 21,  93 => 17,  87 => 16,  84 => 15,  67 => 14,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f7713d7865a562b1fa765d76c8df80d2b631b21e9fd7c377dabab72efd69f3ba", "");
    }
}
