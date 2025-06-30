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

/* __string_template__6e1b7c63a285a780dc6891b764cb39b3484e9b17657c8b8919468372764a0257 */
class __TwigTemplate_9667570bb7c5475456734a87fee953f932bdad31b79828779a7b13f6658e0ada extends Template
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
            echo "  <div class=\"review-list\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "      <div class=\"review-container mb-3 rev card prod-ratings\" id=\"product-review-wrapper\">
        <div class=\"card-body px-4\">
          <div class=\"reviewer-name card-title\">
            <i class=\"fa fa-user\"></i>&nbsp;&nbsp;&nbsp;";
                // line 7
                echo (($__internal_compile_0 = $context["review"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["author"] ?? null) : null);
                echo "
            &nbsp;&nbsp;&nbsp;
            <i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;&nbsp;";
                // line 9
                echo (($__internal_compile_1 = $context["review"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["date_added"] ?? null) : null);
                echo "
          </div>

          <div class=\"rating\">
            <div class=\"review-rating\">
              <div class=\"text-container\">
                ";
                // line 15
                echo (($context["text_rating"] ?? null) . " :  ");
                echo "
              </div>
              <div class=\"rating-container\">
                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-paw ";
                    // line 20
                    if (($context["i"] <= (($__internal_compile_2 = $context["review"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["rating"] ?? null) : null))) {
                        echo "stars";
                    } else {
                        echo "text-muted";
                    }
                    echo "\"></i>
                  </span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "              </div>
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
            ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "              <div class=\"mt-2\">
                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 34
                        echo "                  <img src=\"image/";
                        echo $context["file"];
                        echo "\" width=\"100\" class=\"review-image\" />
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "              </div>
            ";
                }
                // line 38
                echo "            <div>
              ";
                // line 39
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
            // line 44
            echo "        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 45
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 46
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      </div>
  </div>


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
        return "__string_template__6e1b7c63a285a780dc6891b764cb39b3484e9b17657c8b8919468372764a0257";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 53,  149 => 46,  145 => 45,  142 => 44,  131 => 39,  128 => 38,  124 => 36,  115 => 34,  111 => 33,  108 => 32,  106 => 31,  99 => 29,  91 => 23,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  56 => 9,  51 => 7,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6e1b7c63a285a780dc6891b764cb39b3484e9b17657c8b8919468372764a0257", "");
    }
}
