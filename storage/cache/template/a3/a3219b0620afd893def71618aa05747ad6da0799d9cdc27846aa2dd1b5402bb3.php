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

/* __string_template__ed30cd4260d94f5b115faaacb726134e5246876971a9c0f51627ec8001105971 */
class __TwigTemplate_b506938c076d1a547ab1273cf03d54dc526a239c27e7fcbf3fccebedb3c91cc2 extends Template
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
            echo "  
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "    <div class=\"mb-1\">
      <div class=\"card-body px-4\">
        <h5 class=\"card-title\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 9
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9) < $context["i"])) {
                        // line 10
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 12
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw stars fs-4\"></i></span>
              ";
                    }
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 16);
                echo "</p>
        <p class=\"card-text me-5\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 17);
                echo "</p>
      ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "        <div class=\"attachments mt-2 d-flex flex-wrap\">
        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 21
                        echo "          <a href=\"image/";
                        echo $context["file"];
                        echo "\" target=\"_blank\" class=\"me-2 mb-2\">
            <img src=\"image/";
                        // line 22
                        echo $context["file"];
                        echo "\" class=\"img-thumbnail\" style=\"max-width: 100px;\" />
          </a>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "      </div>
      ";
                }
                // line 27
                echo "      ";
                if ((($context["seller_is_logged"] ?? null) == ($context["is_logged"] ?? null))) {
                    // line 28
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "          <div class=\"mt-3 p-3 bg-light border-start border-info border-3\">
            <strong>Seller's Reply:</strong>
            <p>";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 31);
                        echo "</p>
          </div>
        ";
                    } else {
                        // line 34
                        echo "          <div class=\"mt-3\">
            <textarea class=\"form-control mb-2\" id=\"reply-text-";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 35);
                        echo "\" placeholder=\"Reply as seller...\"></textarea>
            <button class=\"btn btn-primary btn-sm\" onclick=\"submitReply(";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 36);
                        echo ")\">Submit Reply</button>
          </div>
        ";
                    }
                    // line 39
                    echo "      ";
                }
                // line 40
                echo "      </div>
    </div>
    <hr class=\"border border-info border-1 opacity-50\">
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 45
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 47
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__ed30cd4260d94f5b115faaacb726134e5246876971a9c0f51627ec8001105971";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  156 => 45,  146 => 40,  143 => 39,  137 => 36,  133 => 35,  130 => 34,  124 => 31,  120 => 29,  117 => 28,  114 => 27,  110 => 25,  101 => 22,  96 => 21,  92 => 20,  89 => 19,  87 => 18,  83 => 17,  79 => 16,  76 => 15,  70 => 14,  66 => 12,  62 => 10,  59 => 9,  55 => 8,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ed30cd4260d94f5b115faaacb726134e5246876971a9c0f51627ec8001105971", "");
    }
}
