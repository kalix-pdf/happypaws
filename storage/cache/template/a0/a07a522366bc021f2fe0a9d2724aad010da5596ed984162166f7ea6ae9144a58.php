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

/* __string_template__b2389bbe61efad5b7df5520ecb3c794dd01f56fa29591be91924ec618b1eadc5 */
class __TwigTemplate_1cbcc32ed59a8b6ff682317306ab82a1416c31f13971c5712a90b238e06f2b6a extends Template
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
        if (($context["review_status"] ?? null)) {
            // line 2
            echo "    <div class=\"my-4 d-flex align-items-center gap-3\">
      <h2>Product Ratings</h2>
      <p class=\"mt-2\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 5
                echo "        ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 6
                    echo "          <span class=\"fa fa-paw text-muted fs-2\"></span>
        ";
                } else {
                    // line 8
                    echo "          <span class=\"fa fa-paw text-warning fs-2\"></span>
        ";
                }
                // line 10
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        <a onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
      </p>
    </div>
";
        }
        // line 15
        echo "
";
        // line 16
        if (($context["reviews"] ?? null)) {
            // line 17
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 18
                echo "    <div class=\"card mb-4\">
      ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "        <a href=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 20);
                    echo "\" target=\"_blank\">
          <img src=\"image/";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "attachment", [], "any", false, false, false, 21);
                    echo "\" class=\"img-fluid card-img-top\" style=\"max-width: 150px;\" />
        </a>
      ";
                }
                // line 24
                echo "

      <div class=\"card-body\">
        <div class=\"mb-2\">
            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 29
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 29) < $context["i"])) {
                        // line 30
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-2\"></i></span>
              ";
                    } else {
                        // line 32
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-warning fs-2\"></i></span>
              ";
                    }
                    // line 34
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "          </div>
        <h5 class=\"card-title\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 36);
                echo "</h5>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 37);
                echo "</p>
        <p class=\"card-text\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 38);
                echo "</p>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 43
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 45
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__b2389bbe61efad5b7df5520ecb3c794dd01f56fa29591be91924ec618b1eadc5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  147 => 43,  136 => 38,  132 => 37,  128 => 36,  125 => 35,  119 => 34,  115 => 32,  111 => 30,  108 => 29,  104 => 28,  98 => 24,  92 => 21,  87 => 20,  85 => 19,  82 => 18,  77 => 17,  75 => 16,  72 => 15,  64 => 11,  58 => 10,  54 => 8,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b2389bbe61efad5b7df5520ecb3c794dd01f56fa29591be91924ec618b1eadc5", "");
    }
}
