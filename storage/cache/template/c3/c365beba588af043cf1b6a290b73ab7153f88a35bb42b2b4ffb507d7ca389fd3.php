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

/* __string_template__9a60fdb893b09ba5498ee1046d3b3139744ac311a7fbf9a978e7209581fd8591 */
class __TwigTemplate_e7afcff955421f4571f8aa1cff8883a881edfc3976770dcf8cb80653dbcab1bf extends Template
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
        if (($context["feedbacks"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feedbacks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 3
                echo "
\t<div class=\"review-container\">
    <div class=\"reviewer-name\">
      <i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 6
                echo (($__internal_compile_0 = $context["feedback"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nickname"] ?? null) : null);
                echo "
\t\t\t&nbsp;&nbsp;&nbsp;
      <i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 8
                echo (($__internal_compile_1 = $context["feedback"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["createdate"] ?? null) : null);
                echo "
    </div>

\t\t<div class=\"rating\">
\t\t\t";
                // line 12
                if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                    // line 13
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                        // line 14
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feedback"], "review_attributes", [], "array", false, true, false, 14), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 14)) {
                            // line 15
                            echo "\t\t\t\t\t<div class=\"review-rating\">
\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t\t";
                            // line 17
                            echo ((($__internal_compile_3 = $context["review_field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_name"] ?? null) : null) . " :  ");
                            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rating-container\">
\t\t\t\t\t\t\t<div class=\"rating-container\">
\t\t\t\t\t\t\t\t";
                            // line 21
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 22
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($context["i"] < (($__internal_compile_4 = (($__internal_compile_5 = $context["feedback"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["review_attributes"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null)] ?? null) : null))) {
                                    // line 23
                                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 25
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 27
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 28
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 32
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t";
                }
                // line 34
                echo "\t\t</div>

    <div class=\"review-content\">
        ";
                // line 37
                echo (($__internal_compile_7 = $context["feedback"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["review"] ?? null) : null);
                echo "
    </div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 42
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 43
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>



\t";
        } else {
            // line 49
            echo "\t\t<div class=\"mp-no-location-found\">";
            echo ($context["text_no_feedbacks"] ?? null);
            echo "</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__9a60fdb893b09ba5498ee1046d3b3139744ac311a7fbf9a978e7209581fd8591";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  140 => 43,  136 => 42,  133 => 41,  123 => 37,  118 => 34,  115 => 33,  109 => 32,  103 => 28,  97 => 27,  93 => 25,  89 => 23,  86 => 22,  82 => 21,  75 => 17,  71 => 15,  68 => 14,  63 => 13,  61 => 12,  54 => 8,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9a60fdb893b09ba5498ee1046d3b3139744ac311a7fbf9a978e7209581fd8591", "");
    }
}
