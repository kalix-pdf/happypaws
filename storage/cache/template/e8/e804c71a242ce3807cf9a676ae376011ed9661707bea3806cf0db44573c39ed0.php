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

/* __string_template__360c1acae78b42e596e33bef45f1dc90ac97c8ae5dc8b958d278038da26c94a9 */
class __TwigTemplate_ffd8bf63a3d6517d8ea7721164b4eb81f69827e912a5420cafe949f38751218b extends Template
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

<div class=\"container\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 30
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ol>
  </nav>

    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 38
            echo "    <div class=\"card mb-3 p-3\">
        <h5>";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 39);
            echo "</h5>
        <p>";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 40);
            echo "</p>
        <strong>Rating: ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 41);
            echo "/5</strong><br />
        <small class=\"text-muted\">";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 42);
            echo "</small>

        ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 44)) {
                // line 45
                echo "        <div class=\"mt-2\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 47
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </div>
        ";
            }
            // line 51
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    <div class=\"pagination-wrapper mt-4 d-flex justify-content-center\">
        ";
        // line 54
        echo ($context["pagination"] ?? null);
        echo "
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__360c1acae78b42e596e33bef45f1dc90ac97c8ae5dc8b958d278038da26c94a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  143 => 53,  136 => 51,  132 => 49,  123 => 47,  119 => 46,  116 => 45,  114 => 44,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  94 => 38,  90 => 37,  85 => 34,  74 => 31,  71 => 30,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__360c1acae78b42e596e33bef45f1dc90ac97c8ae5dc8b958d278038da26c94a9", "");
    }
}
