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

/* __string_template__6f737288c4f4b5780ce766f0a6fe9dff299f8de1aa27ca04ad6dc54e991df1ce */
class __TwigTemplate_c2d538e40b488c572bd8d02e4711497c6055454c80e5ecd88545acd538d206a2 extends Template
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
\t
</style>

";
        // line 5
        if (($context["feedbacks"] ?? null)) {
            // line 6
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feedbacks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 7
                echo "
\t<div class=\"review-container feedback small\">
\t\t<div class=\"reviewer-name name\" >
\t\t\t<i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 10
                echo (($__internal_compile_0 = $context["feedback"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nickname"] ?? null) : null);
                echo "
\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t<i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 12
                echo (($__internal_compile_1 = $context["feedback"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["createdate"] ?? null) : null);
                echo "
\t\t</div>

\t\t<div class=\"rating d-flex gap-3\">
\t\t\t";
                // line 16
                if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                    // line 17
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                        // line 18
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feedback"], "review_attributes", [], "array", false, true, false, 18), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 18)) {
                            // line 19
                            echo "\t\t\t\t\t<div class=\"review-rating\">
\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t\t";
                            // line 21
                            echo ((($__internal_compile_3 = $context["review_field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_name"] ?? null) : null) . " :  ");
                            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rating-container\">
\t\t\t\t\t\t\t<div class=\"rating-container fs-4\">
\t\t\t\t\t\t\t\t";
                            // line 25
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 26
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($context["i"] < (($__internal_compile_4 = (($__internal_compile_5 = $context["feedback"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["review_attributes"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null)] ?? null) : null))) {
                                    // line 27
                                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 31
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 32
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t";
                }
                // line 38
                echo "\t\t</div>

    <div class=\"review-content mt-3\">
        ";
                // line 41
                echo (($__internal_compile_7 = $context["feedback"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["review"] ?? null) : null);
                echo "
    </div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 46
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 47
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>



\t";
        } else {
            // line 53
            echo "\t\t<div class=\"mp-no-location-found\">";
            echo ($context["text_no_feedbacks"] ?? null);
            echo "</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__6f737288c4f4b5780ce766f0a6fe9dff299f8de1aa27ca04ad6dc54e991df1ce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  146 => 47,  142 => 46,  139 => 45,  129 => 41,  124 => 38,  121 => 37,  115 => 36,  109 => 32,  103 => 31,  99 => 29,  95 => 27,  92 => 26,  88 => 25,  81 => 21,  77 => 19,  74 => 18,  69 => 17,  67 => 16,  60 => 12,  55 => 10,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6f737288c4f4b5780ce766f0a6fe9dff299f8de1aa27ca04ad6dc54e991df1ce", "");
    }
}
