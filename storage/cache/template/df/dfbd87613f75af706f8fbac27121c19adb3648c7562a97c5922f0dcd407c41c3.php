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

/* __string_template__218a6572805f385ac6c8c3425dd87e8e63993722b0d9c069e64fcbbfcf851484 */
class __TwigTemplate_7cda5429e06fa209b9886cf6b9377ead4ac5a2e56c247297b608da727ed3ae95 extends Template
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
                echo "  <div class=\"review-container mb-1 rev card prod-ratings\">
  <div class=\"card-body px-4\">
    <div class=\"reviewer-name card-title\">
      <i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 6
                echo (($__internal_compile_0 = $context["review"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["author"] ?? null) : null);
                echo " 
      &nbsp;&nbsp;&nbsp;
      <i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 8
                echo (($__internal_compile_1 = $context["review"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["date_added"] ?? null) : null);
                echo "
    </div>

    <div class=\"rating\">
      <div class=\"review-rating\">
        <div class=\"text-container\">
          ";
                // line 14
                echo (($context["text_rating"] ?? null) . " :  ");
                echo "
        </div>
        <div class=\"rating-container\">
          ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 18
                    echo "            ";
                    if (($context["i"] < (($__internal_compile_2 = $context["review"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["rating"] ?? null) : null))) {
                        // line 19
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-paw stars\"></i></span>
            ";
                    } else {
                        // line 21
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted\"></i></span>
            ";
                    }
                    // line 23
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        </div>
      </div>
    </div>

    <div class=\"review-content\">
      <div class=\"text-container\">
        <a href=\"";
                // line 30
                echo (($__internal_compile_3 = $context["review"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["href"] ?? null) : null);
                echo "\" target=\"_blank\">";
                echo (($__internal_compile_4 = $context["review"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</a>
      </div>
      ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "        <div class=\"mt-2\">
            ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 35
                        echo "            <img src=\"image/";
                        echo $context["file"];
                        echo "\" width=\"100\" />
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "        </div>
      ";
                }
                // line 39
                echo "      <div>
        ";
                // line 40
                echo (($__internal_compile_5 = $context["review"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["text"] ?? null) : null);
                echo "
      </div>
    </div>
  </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  <div class=\"row\">
\t  <div class=\"col-sm-6 text-left\">";
            // line 47
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t<div class=\"col-sm-6 text-right\">";
            // line 48
            echo ($context["results"] ?? null);
            echo "</div>
\t</div>


  ";
        } else {
            // line 53
            echo "  <div class=\"mp-no-location-found\">";
            echo ($context["text_no_reviews"] ?? null);
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__218a6572805f385ac6c8c3425dd87e8e63993722b0d9c069e64fcbbfcf851484";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  148 => 48,  144 => 47,  141 => 46,  129 => 40,  126 => 39,  122 => 37,  113 => 35,  109 => 34,  106 => 33,  104 => 32,  97 => 30,  89 => 24,  83 => 23,  79 => 21,  75 => 19,  72 => 18,  68 => 17,  62 => 14,  53 => 8,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__218a6572805f385ac6c8c3425dd87e8e63993722b0d9c069e64fcbbfcf851484", "");
    }
}
