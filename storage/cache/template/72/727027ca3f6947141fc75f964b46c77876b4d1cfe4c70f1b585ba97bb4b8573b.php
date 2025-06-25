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

/* __string_template__b046b1d686d3ba69b5a878909db8baf57d507d76a8b1b10c0874d420d38efedd */
class __TwigTemplate_7a1035480c461377996b4bedbf870b087abe3e67c3eb732884943f07741d7b91 extends Template
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 52
            echo "  <h3>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</h3>
";
        }
        // line 54
        echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 55
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right d-flex justify-content-end\">";
        // line 56
        echo ($context["results"] ?? null);
        echo "
    ";
        // line 57
        if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
            // line 58
            echo "      <a href=\"";
            echo ($context["pagination_url"] ?? null);
            echo (($context["current_page"] ?? null) + 1);
            echo "\" class=\"btn btn-outline-primary ms-3\">Next</a>
    ";
        }
        // line 60
        echo "  </div>
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
        return "__string_template__b046b1d686d3ba69b5a878909db8baf57d507d76a8b1b10c0874d420d38efedd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  184 => 58,  182 => 57,  178 => 56,  174 => 55,  171 => 54,  165 => 52,  155 => 47,  152 => 46,  146 => 43,  142 => 42,  139 => 41,  133 => 38,  129 => 36,  126 => 35,  123 => 34,  119 => 32,  110 => 29,  105 => 28,  101 => 27,  98 => 26,  96 => 25,  92 => 24,  88 => 23,  85 => 22,  79 => 21,  75 => 19,  71 => 17,  68 => 16,  64 => 15,  59 => 13,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b046b1d686d3ba69b5a878909db8baf57d507d76a8b1b10c0874d420d38efedd", "");
    }
}
