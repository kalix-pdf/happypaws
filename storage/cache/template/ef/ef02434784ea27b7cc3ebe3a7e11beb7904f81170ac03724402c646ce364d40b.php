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

/* __string_template__2548203a40f9e3e8fb9a26725895aa8326770b9ee97b693ef2d35648d2d271ee */
class __TwigTemplate_b56c3315202260894b3d1ef68302293db039f428247e6fec1b85f85ef928b577 extends Template
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
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 3
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
    url: 'index.php?route=extension/payment/xendit/confirm',
    type: 'post',
    dataType: 'json',
    success: function(json) {
        if (json.redirect) {
            window.location.href = json.redirect;
        }
    },
    error: function(xhr, status, error) {
        alert('Payment failed. Please try again.');
    }
});

});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2548203a40f9e3e8fb9a26725895aa8326770b9ee97b693ef2d35648d2d271ee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2548203a40f9e3e8fb9a26725895aa8326770b9ee97b693ef2d35648d2d271ee", "");
    }
}
