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

/* __string_template__1d57e17fb6f64a25a35dbf3d1422d26c8d2b0e6e4a2bf4dfb26e4cf6501665fa */
class __TwigTemplate_13427d497f7b65a4498e7da055072129dce4d8291c40c87812fff92369123929 extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "  <div class=\"review-container\">
    <div class=\"reviewer-name\">
      <i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 5
                echo (($__internal_compile_0 = $context["review"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["author"] ?? null) : null);
                echo "
      &nbsp;&nbsp;&nbsp;
      <i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 7
                echo (($__internal_compile_1 = $context["review"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["date_added"] ?? null) : null);
                echo "
    </div>

    <div class=\"rating\">
      <div class=\"review-rating\">
        <div class=\"text-container\">
          ";
                // line 13
                echo (($context["text_rating"] ?? null) . " :  ");
                echo "
        </div>
        <div class=\"rating-container\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "            ";
                    if (($context["i"] < (($__internal_compile_2 = $context["review"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["rating"] ?? null) : null))) {
                        // line 18
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
            ";
                    } else {
                        // line 20
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    }
                    // line 22
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </div>
      </div>
    </div>

    <div class=\"review-content\">
      <div class=\"text-container\">
        <a href=\"";
                // line 29
                echo (($__internal_compile_3 = $context["review"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["href"] ?? null) : null);
                echo "\" target=\"_blank\">";
                echo (($__internal_compile_4 = $context["review"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</a>
      </div>
      <div>
        ";
                // line 32
                echo (($__internal_compile_5 = $context["review"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["text"] ?? null) : null);
                echo "
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo " <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 38
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 39
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>


  ";
        } else {
            // line 44
            echo "  <div class=\"mp-no-location-found\">";
            echo ($context["text_no_reviews"] ?? null);
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__1d57e17fb6f64a25a35dbf3d1422d26c8d2b0e6e4a2bf4dfb26e4cf6501665fa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  122 => 39,  118 => 38,  115 => 37,  104 => 32,  96 => 29,  88 => 23,  82 => 22,  78 => 20,  74 => 18,  71 => 17,  67 => 16,  61 => 13,  52 => 7,  47 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1d57e17fb6f64a25a35dbf3d1422d26c8d2b0e6e4a2bf4dfb26e4cf6501665fa", "");
    }
}
