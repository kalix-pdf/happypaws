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

/* __string_template__2e3bdd14dde310987e71eba8894b2ece40b977067ac75a33da7f5d06e03b34dd */
class __TwigTemplate_55041d9bcf3048de73a25c4702937f335f92a04479572d1b2afc80a8eab0eb2d extends Template
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
\t<div class=\"review-container feedback\">
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
\t\t<div class=\"col-sm-6 text-left\">";
                // line 15
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t
\t\t</div>

\t\t<div class=\"rating d-flex gap-3 my-3\">
\t\t\t";
                // line 20
                if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                    // line 21
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                        // line 22
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feedback"], "review_attributes", [], "array", false, true, false, 22), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 22)) {
                            // line 23
                            echo "\t\t\t\t\t<div class=\"review-rating\">
\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t\t";
                            // line 25
                            echo ((($__internal_compile_3 = $context["review_field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_name"] ?? null) : null) . " :  ");
                            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rating-container\">
\t\t\t\t\t\t\t<div class=\"rating-container fs-6\">
\t\t\t\t\t\t\t\t";
                            // line 29
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 30
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($context["i"] <= (($__internal_compile_4 = (($__internal_compile_5 = $context["feedback"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["review_attributes"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null)] ?? null) : null))) {
                                    // line 31
                                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw stars\"></i>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 33
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw text-muted\"></i>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 35
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 36
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 40
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t";
                }
                // line 42
                echo "\t\t</div>

    <div class=\"review-content\">
        ";
                // line 45
                echo (($__internal_compile_7 = $context["feedback"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["review"] ?? null) : null);
                echo "
    </div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-right\">";
            // line 50
            echo ($context["results"] ?? null);
            echo "</div>
\t</div>

\t";
        } else {
            // line 54
            echo "\t\t<div class=\"mp-no-location-found\">";
            echo ($context["text_no_feedbacks"] ?? null);
            echo "</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__2e3bdd14dde310987e71eba8894b2ece40b977067ac75a33da7f5d06e03b34dd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  149 => 50,  146 => 49,  136 => 45,  131 => 42,  128 => 41,  122 => 40,  116 => 36,  110 => 35,  106 => 33,  102 => 31,  99 => 30,  95 => 29,  88 => 25,  84 => 23,  81 => 22,  76 => 21,  74 => 20,  66 => 15,  62 => 14,  57 => 12,  52 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2e3bdd14dde310987e71eba8894b2ece40b977067ac75a33da7f5d06e03b34dd", "");
    }
}
