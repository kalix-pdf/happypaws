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

/* __string_template__a9c7db0bb0279edfa57674a244c67933b3d9fb913765b04896618c5ae9e8d33f */
class __TwigTemplate_3f100fc8a70656e9fdcf8bae3537373057501c56404f7d9af49f10a9456b3666 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container py-4\">
  <h3 class=\"mb-4\">All Reviews</h3>

  ";
        // line 5
        if (($context["reviews"] ?? null)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 7
                echo "      <div class=\"card mb-3 p-3\">
        <h5>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 8);
                echo "</h5>
        <p>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                echo "</p>
        <strong>Rating: ";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 10);
                echo "/5</strong><br />
        <small class=\"text-muted\">";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 11);
                echo "</small>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
    <div class=\"pagination-container mt-4\">
      ";
            // line 16
            echo ($context["pagination"] ?? null);
            echo "
    </div>
  ";
        } else {
            // line 19
            echo "    <p>No reviews found for this product.</p>
  ";
        }
        // line 21
        echo "</div>
";
        // line 22
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__a9c7db0bb0279edfa57674a244c67933b3d9fb913765b04896618c5ae9e8d33f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  89 => 21,  85 => 19,  79 => 16,  75 => 14,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a9c7db0bb0279edfa57674a244c67933b3d9fb913765b04896618c5ae9e8d33f", "");
    }
}
