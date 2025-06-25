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

/* __string_template__9e2cda306bfdf5fada067c0f964523e49be8759895c10a1690c2a166da0a4a3c */
class __TwigTemplate_c23fc041032956aa00831dd58281c6e2a3cb60ffb598d1130639454522583d0b extends Template
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
<h3 class=\"mb-4\">All Reviews</h3>

";
        // line 4
        if (($context["reviews"] ?? null)) {
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "    <div class=\"card mb-3 p-3\">
      <h5>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "</h5>
      <p>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 8);
                echo "</p>
      <strong>Rating: ";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9);
                echo "/5</strong><br />
      <small class=\"text-muted\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 10);
                echo "</small>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 14
            echo "  <p>No reviews found for this product.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__9e2cda306bfdf5fada067c0f964523e49be8759895c10a1690c2a166da0a4a3c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  50 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9e2cda306bfdf5fada067c0f964523e49be8759895c10a1690c2a166da0a4a3c", "");
    }
}
