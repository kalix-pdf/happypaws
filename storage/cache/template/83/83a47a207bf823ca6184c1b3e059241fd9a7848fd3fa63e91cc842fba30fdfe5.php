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

/* customerpartner/review.twig */
class __TwigTemplate_aa7f3efe4704d069cada471366957e32941c4ff08125341d8eb7be5dbe62c31e extends Template
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
.pagination {
  margin-top: 20px;
  margin-bottom: 10px;
}

.pagination .page-link {
  color: #333;
  border: 1px solid #ddd;
  margin: 0 3px;
}

.pagination .page-link:hover {
  background-color: #f8f9fa;
  border-color: #aaa;
}

.pagination .active .page-link {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

</style>

<div class=\"container\" id=\"product-review-wrapper\">
  ";
        // line 27
        if (($context["reviews"] ?? null)) {
            // line 28
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 29
                echo "    <div class=\"card mb-3 p-3\">
        <h5>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 30);
                echo "</h5>
        <p>";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 31);
                echo "</p>
        <strong>Rating: ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 32);
                echo "/5</strong><br />
        <small class=\"text-muted\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 33);
                echo "</small>

        ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "        <div class=\"mt-2\">
            ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 37));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 38
                        echo "            <img src=\"image/";
                        echo $context["file"];
                        echo "\" width=\"100\" />
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "        </div>
        ";
                }
                // line 42
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "  ";
        } else {
            // line 45
            echo "    <h1>No Reviews!</h1>
  ";
        }
        // line 47
        echo "    <div class=\"pagination-wrapper mt-4 d-flex justify-content-center\">
        ";
        // line 48
        echo ($context["pagination"] ?? null);
        echo "
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "customerpartner/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  128 => 47,  124 => 45,  121 => 44,  114 => 42,  110 => 40,  101 => 38,  97 => 37,  94 => 36,  92 => 35,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  72 => 29,  67 => 28,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/review.twig", "");
    }
}
