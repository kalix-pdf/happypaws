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

/* __string_template__1ada8e6619a03becfae358d1c7331bb93c2d4cbd42fb4bbe9f9a2095b1c540f2 */
class __TwigTemplate_cbbd1bc95d5509f534af3bb30644afe6fb504c2044c9aba627c9ce4081fe5b7d extends Template
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
                echo "      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <div class=\"card-body d-flex align-items-center\">
            <input 
              class=\"form-check-input me-3\" 
              name=\"payment_method\" 
              id=\"payment_";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 19);
                echo "\" 
              value=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 20);
                echo "\"
              ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) {
                    echo "checked=\"checked\"";
                }
                // line 22
                echo "            />
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "              <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 24);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 24);
                    echo "\" class=\"me-3\" style=\"width: 40px; height: auto;\">
            ";
                }
                // line 26
                echo "            <label class=\"form-check-label mb-0\" for=\"payment_";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 26);
                echo "\">
              <strong>";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 27);
                echo "</strong>
              ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                <br><small class=\"text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 29);
                    echo "</small>
              ";
                }
                // line 31
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
        return "__string_template__1ada8e6619a03becfae358d1c7331bb93c2d4cbd42fb4bbe9f9a2095b1c540f2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 40,  147 => 36,  129 => 31,  123 => 29,  121 => 28,  117 => 27,  112 => 26,  104 => 24,  102 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  79 => 13,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1ada8e6619a03becfae358d1c7331bb93c2d4cbd42fb4bbe9f9a2095b1c540f2", "");
    }
}
