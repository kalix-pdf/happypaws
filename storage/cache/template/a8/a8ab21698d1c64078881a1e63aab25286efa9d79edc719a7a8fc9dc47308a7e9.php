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

/* __string_template__4eec4a5d71b101551ca4a106da169e6155138146eea05ad8b2587c9262225806 */
class __TwigTemplate_86268b0784252caafd635d1be996fb21cd7a78bcaa6be30fc043bc1a4889cda7 extends Template
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

<div id=\"review\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 5
            echo "    <div class=\"card mb-3 p-3\">
      <h5>";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6);
            echo "</h5>
      <p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 7);
            echo "</p>
      <strong>Rating: ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 8);
            echo "/5</strong><br />
      <small class=\"text-muted\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 9);
            echo "</small>

      ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 11)) {
                // line 12
                echo "        <div class=\"mt-2\">
          ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "filenames", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 14
                    echo "            <img src=\"image/";
                    echo $context["file"];
                    echo "\" width=\"100\" />
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        </div>
      ";
            }
            // line 18
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
  <div class=\"pagination-container mt-4\">
    ";
        // line 22
        echo ($context["pagination"] ?? null);
        echo "
  </div>
</div>

<script type=\"text/javascript\">
  // AJAX pagination for reviews
  \$(document).on('click', '#review .pagination a', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('fast').load(this.href, function () {
      \$(this).fadeIn('fast');
    });
  });


  // Magnific popup init
  \$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });

  // Tab panes (no issues here)
  document.querySelectorAll('[data-toggle=\"tab\"]').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active-btn'));
      button.classList.add('active-btn');
      document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
      const targetPane = document.querySelector(button.getAttribute('data-target'));
      if (targetPane) targetPane.classList.add('active');
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__4eec4a5d71b101551ca4a106da169e6155138146eea05ad8b2587c9262225806";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  96 => 20,  89 => 18,  85 => 16,  76 => 14,  72 => 13,  69 => 12,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4eec4a5d71b101551ca4a106da169e6155138146eea05ad8b2587c9262225806", "");
    }
}
