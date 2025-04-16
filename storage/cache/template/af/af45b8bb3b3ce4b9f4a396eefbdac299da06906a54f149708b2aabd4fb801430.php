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

/* __string_template__3a6dd56765117190e9c5ef4d420278bba46190cec5b47b37da16cb2bfb82bffa */
class __TwigTemplate_f99b6639cef8178a2a56a1bb33d21adeb6a327a9ad978438c9a82d7e0af67efd extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "    <h4>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2);
            echo " x";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 2);
            echo " - <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 2);
            echo "</strong></h4> <br>
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 4
                echo "
";
                // line 5
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 5)) {
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 7
                        echo "<div class=\"radio\">
  <label> ";
                        // line 8
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 9
                            echo "    ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 9);
                            // line 10
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 10);
                            echo "\" checked=\"checked\" />
    ";
                        } else {
                            // line 12
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12);
                            echo "\" />
    ";
                        }
                        // line 14
                        echo "    ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 14);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 14);
                        echo "</label>
</div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 18
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 18);
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "__string_template__3a6dd56765117190e9c5ef4d420278bba46190cec5b47b37da16cb2bfb82bffa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  83 => 14,  77 => 12,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  59 => 6,  57 => 5,  54 => 4,  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3a6dd56765117190e9c5ef4d420278bba46190cec5b47b37da16cb2bfb82bffa", "");
    }
}
