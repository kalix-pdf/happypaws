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

/* __string_template__91a72cef2354a19300291ef8c9c5f169a3081bfe9b202613159c787be0e01a48 */
class __TwigTemplate_17a9b3a0d79ed279a74c373af51af19f55da9555099ee7e20884532c8d5f93f0 extends Template
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
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 7
                        echo "    <div class=\"radio\">
    
        ";
                        // line 9
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 9);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 9);
                        echo "
    </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 12
                    echo "    ";
                } else {
                    // line 13
                    echo "    <div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 13);
                    echo "</div>
    ";
                }
                // line 15
                echo "    ";
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
        return "__string_template__91a72cef2354a19300291ef8c9c5f169a3081bfe9b202613159c787be0e01a48";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  82 => 13,  79 => 12,  68 => 9,  64 => 7,  59 => 6,  57 => 5,  54 => 4,  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__91a72cef2354a19300291ef8c9c5f169a3081bfe9b202613159c787be0e01a48", "");
    }
}
