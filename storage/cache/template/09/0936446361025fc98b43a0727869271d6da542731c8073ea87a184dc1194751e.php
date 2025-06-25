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

/* __string_template__bed0ba44ed13a340ce420291ad09eb2c17e3a241bf41914ac2af69f8c876044b */
class __TwigTemplate_09f0d8c925a91fb6e2346a3d2780828f3b61eda0e00f2f3f12d626f1061a7cbc extends Template
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
        // line 7
        echo "
";
        // line 8
        if (($context["reviews"] ?? null)) {
            // line 9
            echo "  
  ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 11
                echo "    <div class=\"mb-1 rev\">
      <div class=\"card-body px-4\">
        <h5 class=\"card-title\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 13);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 16
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                        // line 17
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 19
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw stars fs-4\"></i></span>
              ";
                    }
                    // line 21
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 23);
                echo "</p>
        <p class=\"card-text me-5\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 24);
                echo "</p>
      ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "        <div class=\"attachments mt-2 d-flex flex-wrap\">
        ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 28
                        echo "          <a href=\"image/";
                        echo $context["file"];
                        echo "\" target=\"_blank\" class=\"me-2 mb-2\">
            <img src=\"image/";
                        // line 29
                        echo $context["file"];
                        echo "\" class=\"img-thumbnail\" style=\"max-width: 100px;\" />
          </a>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "      </div>
      ";
                }
                // line 34
                echo "      ";
                if ((($context["seller_is_logged"] ?? null) == ($context["is_logged"] ?? null))) {
                    // line 35
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "          <div class=\"mt-3 p-3 bg-light border-start border-info border-3\">
            <strong>Seller's Reply:</strong>
            <p>";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 38);
                        echo "</p>
          </div>
        ";
                    } else {
                        // line 41
                        echo "          <div class=\"mt-3\">
            <textarea class=\"form-control mb-2 border-info\" id=\"reply-text-";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 42);
                        echo "\" placeholder=\"Reply as seller...\"></textarea>
            <button class=\"btn\" onclick=\"submitReply(";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 43);
                        echo ")\">Submit Reply</button>
          </div>
        ";
                    }
                    // line 46
                    echo "      ";
                }
                // line 47
                echo "      </div>
    </div>
    <hr class=\"border border-info border-1 opacity-50\">
    ";
                // line 54
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 56
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 58
        echo "
<script>
  function submitReply(reviewId) {
    const replyText = document.getElementById('reply-text-' + reviewId).value;
    const formData = 'review_id=' + reviewId + '&reply=' + encodeURIComponent(replyText);

    fetch('index.php?route=product/product/reply', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert(data.success);
        location.reload();
      } else {
        alert(data.error || 'An error occurred.');
      }
    });
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bed0ba44ed13a340ce420291ad09eb2c17e3a241bf41914ac2af69f8c876044b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  161 => 56,  154 => 54,  149 => 47,  146 => 46,  140 => 43,  136 => 42,  133 => 41,  127 => 38,  123 => 36,  120 => 35,  117 => 34,  113 => 32,  104 => 29,  99 => 28,  95 => 27,  92 => 26,  90 => 25,  86 => 24,  82 => 23,  79 => 22,  73 => 21,  69 => 19,  65 => 17,  62 => 16,  58 => 15,  53 => 13,  49 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bed0ba44ed13a340ce420291ad09eb2c17e3a241bf41914ac2af69f8c876044b", "");
    }
}
