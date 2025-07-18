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

/* customerpartner/feedback.twig */
class __TwigTemplate_b487ba362a72a26153925a7d9b1d9e78436a005342aa2cb1cfc84f47e5794100 extends Template
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
        echo "<style>
\t.feedback {
\t\tfont-size: 15px;
\t}
</style>

";
        // line 7
        if (($context["feedbacks"] ?? null)) {
            // line 8
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feedbacks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 9
                echo "
\t<div class=\"review-container feedback\" id=\"feedback-wrapper\">
\t\t<div class=\"reviewer-name name\">
\t\t\t<i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 12
                echo (($__internal_compile_0 = $context["feedback"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nickname"] ?? null) : null);
                echo "
\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t<i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 14
                echo (($__internal_compile_1 = $context["feedback"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["createdate"] ?? null) : null);
                echo "
\t\t</div>

\t\t<div class=\"rating d-flex gap-3 my-3\">
\t\t\t";
                // line 18
                if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                    // line 19
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                        // line 20
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feedback"], "review_attributes", [], "array", false, true, false, 20), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 20)) {
                            // line 21
                            echo "\t\t\t\t\t<div class=\"review-rating\">
\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t\t";
                            // line 23
                            echo ((($__internal_compile_3 = $context["review_field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_name"] ?? null) : null) . " :  ");
                            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rating-container\">
\t\t\t\t\t\t\t<div class=\"rating-container fs-6\">
\t\t\t\t\t\t\t\t";
                            // line 27
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 28
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($context["i"] <= (($__internal_compile_4 = (($__internal_compile_5 = $context["feedback"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["review_attributes"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null)] ?? null) : null))) {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 31
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 33
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "\t\t\t\t";
                }
                // line 40
                echo "\t\t</div>

\t\t<div class=\"review-content\">
\t\t\t";
                // line 43
                echo (($__internal_compile_7 = $context["feedback"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["review"] ?? null) : null);
                echo "
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 47
            if (($context["pagination"] ?? null)) {
                echo "<div class=\"col-sm-6 pagination-wrapper-feedback\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 49
            echo "\t\t\t<div class=\"col-sm-6\">";
            echo ($context["results"] ?? null);
            echo "</div>
\t\t</div>
\t</div>
";
        } else {
            // line 53
            echo "\t<div class=\"mp-no-location-found\">";
            echo ($context["text_no_feedbacks"] ?? null);
            echo "</div>
";
        }
        // line 55
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/feedback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  158 => 53,  150 => 49,  143 => 47,  140 => 46,  131 => 43,  126 => 40,  123 => 39,  117 => 38,  111 => 34,  105 => 33,  101 => 31,  97 => 29,  94 => 28,  90 => 27,  83 => 23,  79 => 21,  76 => 20,  71 => 19,  69 => 18,  62 => 14,  57 => 12,  52 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/feedback.twig", "");
    }
}
