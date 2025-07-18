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

/* checkout/shipping_method.twig */
class __TwigTemplate_98f72ca0059e4657a6f76fcd56dc16d5653beaedbc581d215ecc30de4f1a108e extends Template
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
        if (($context["shipping_methods"] ?? null)) {
            // line 8
            echo "  <div class=\"form-group\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 10
                echo "      <p class=\"font-weight-bold\">";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 10);
                echo "</p>

      ";
                // line 12
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "        <div class=\"shipping-options mb-3\">
          ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 15
                        echo "            <div class=\"form-check\">
              <input 
                class=\"form-check-input\" 
                type=\"radio\" 
                name=\"shipping_method\" 
                id=\"shipping_";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 20);
                        echo "\" 
                value=\"";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 21);
                        echo "\"
                ";
                        // line 22
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 22) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 23
                            echo "                  checked=\"checked\"
                  ";
                            // line 24
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 24);
                            // line 25
                            echo "                ";
                        }
                        // line 26
                        echo "              />
              <label class=\"form-check-label\" for=\"shipping_";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 27);
                        echo "\">
                ";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 28);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 28);
                        echo "
              </label>
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "        </div>
      ";
                } else {
                    // line 34
                    echo "        <div class=\"alert alert-danger alert-dismissible\">
          ";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 35);
                    echo "
        </div>
      ";
                }
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  132 => 38,  126 => 35,  123 => 34,  119 => 32,  107 => 28,  103 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  75 => 15,  71 => 14,  68 => 13,  66 => 12,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/shipping_method.twig", "");
    }
}
