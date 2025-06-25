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

/* __string_template__d445e38f7848aaac814c8349534fc88a7eca35f205d9ef13ae4ec24fadb6a73f */
class __TwigTemplate_25badfca7d2430c3a8a49af37a253c592713e7c7a455941177c696c9d1ab56e4 extends Template
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
  .rev .btn {
    background-color: #162F65;
    color: #f6c96d;;
}
</style>

";
        // line 8
        if (($context["reviews"] ?? null)) {
            // line 9
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 10
                echo "    <div class=\"card mb-1 rev\">
      <div class=\"card-body px-4\">
        <h5 class=\"card-title\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 12);
                echo "</h5>
        <div class=\"mb-2\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 15
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 15) < $context["i"])) {
                        // line 16
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw text-muted fs-4\"></i></span>
              ";
                    } else {
                        // line 18
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-paw stars fs-4\"></i></span>
              ";
                    }
                    // line 20
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "          </div>
        <p class=\"card-subtitle text-muted mb-2\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 22);
                echo "</p>
        <p class=\"card-text me-5\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 23);
                echo "</p>
      ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "        <div class=\"attachments mt-2 d-flex flex-wrap\">
        ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "attachments", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 27
                        echo "          <a href=\"image/";
                        echo $context["file"];
                        echo "\" target=\"_blank\" class=\"me-2 mb-2\">
            <img src=\"image/";
                        // line 28
                        echo $context["file"];
                        echo "\" class=\"img-thumbnail\" style=\"max-width: 100px;\" />
          </a>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "      </div>
      ";
                }
                // line 33
                echo "      ";
                if ((($context["seller_is_logged"] ?? null) == ($context["is_logged"] ?? null))) {
                    // line 34
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 34)) {
                        // line 35
                        echo "          <div class=\"mt-3 p-3 bg-light border-start border-info border-3\">
            <strong>Seller's Reply:</strong>
            <p>";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "seller_reply", [], "any", false, false, false, 37);
                        echo "</p>
          </div>
        ";
                    } else {
                        // line 40
                        echo "          <div class=\"mt-3\">
            <textarea class=\"form-control mb-2 border-info\" id=\"reply-text-";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 41);
                        echo "\" placeholder=\"Reply as seller...\"></textarea>
            <button class=\"btn reply-btn\" onclick=\"submitReply(";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 42);
                        echo ")\">Submit Reply</button>
          </div>
        ";
                    }
                    // line 45
                    echo "      ";
                }
                // line 46
                echo "      </div>
    </div>
    <hr class=\"border border-info border-1 opacity-50\">
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 51
            echo "  <h3>No reviews found.</h3>
";
        }
        // line 53
        echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 54
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right d-flex justify-content-end\">";
        // line 55
        echo ($context["results"] ?? null);
        echo "</div>
</div>


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
        return "__string_template__d445e38f7848aaac814c8349534fc88a7eca35f205d9ef13ae4ec24fadb6a73f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  170 => 54,  167 => 53,  163 => 51,  153 => 46,  150 => 45,  144 => 42,  140 => 41,  137 => 40,  131 => 37,  127 => 35,  124 => 34,  121 => 33,  117 => 31,  108 => 28,  103 => 27,  99 => 26,  96 => 25,  94 => 24,  90 => 23,  86 => 22,  83 => 21,  77 => 20,  73 => 18,  69 => 16,  66 => 15,  62 => 14,  57 => 12,  53 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d445e38f7848aaac814c8349534fc88a7eca35f205d9ef13ae4ec24fadb6a73f", "");
    }
}
