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

/* __string_template__e43ebb2ee70a34bee576c934651b39aa816e2ef383229d46a92ad7985c5a274a */
class __TwigTemplate_39126cac1c5bffb9faf85a02930757a1d9d2a06a4e24bdfcfe2c85e21a8c8ccd extends Template
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
                echo "<p><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 4);
                echo "</strong></p>
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
        return "__string_template__e43ebb2ee70a34bee576c934651b39aa816e2ef383229d46a92ad7985c5a274a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  85 => 14,  79 => 12,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  61 => 6,  59 => 5,  54 => 4,  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e43ebb2ee70a34bee576c934651b39aa816e2ef383229d46a92ad7985c5a274a", "");
    }
}
