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

/* __string_template__f38f733e803630a316409b7722368755fc50a42ecf93a153cecd770e35f5fc37 */
class __TwigTemplate_71ef392cc6943770b1bba9159bac2b765f06d9c306b87f0301ca172d104de5a0 extends Template
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
                echo "        <div class=\"col-md-3 mb-1 container\">
          <div 
            class=\"card payment-card h-100 position-relative ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) {
                    echo "selected";
                }
                echo "\" 
            data-code=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 18);
                echo "\"
            style=\"cursor: pointer; border: 2px solid transparent; transition: all 0.3s ease;\">
            
            <div class=\"card-body text-align-center d-flex align-items-center\">
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
            <div class=\"check-icon position-absolute top-0 end-0 p-2\" ";
                // line 32
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    echo "style=\"display: none;\"";
                }
                echo ">
              <span class=\"badge bg-primary rounded-circle\">✓</span>
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
            // line 38
            echo "    </div>
  </div>
";
        }
        // line 41
        echo "
<script>
  document.querySelectorAll('.payment-card').forEach(function(card) {
    card.addEventListener('click', function () {
      document.querySelectorAll('.payment-card').forEach(c => {
        c.classList.remove('selected');
        c.style.borderColor = 'transparent';
        c.style.backgroundColor = '';
        const checkIcon = c.querySelector('.check-icon');
        if (checkIcon) checkIcon.style.display = 'none';
      });

      card.classList.add('selected');
      card.style.borderColor = '#007bff';
      card.style.backgroundColor = '#e9f5ff';
      const checkIcon = card.querySelector('.check-icon');
      if (checkIcon) checkIcon.style.display = 'block';

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
        return "__string_template__f38f733e803630a316409b7722368755fc50a42ecf93a153cecd770e35f5fc37";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  152 => 38,  130 => 32,  126 => 30,  120 => 28,  118 => 27,  114 => 26,  111 => 25,  103 => 23,  101 => 22,  94 => 18,  88 => 17,  84 => 15,  67 => 14,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f38f733e803630a316409b7722368755fc50a42ecf93a153cecd770e35f5fc37", "");
    }
}
