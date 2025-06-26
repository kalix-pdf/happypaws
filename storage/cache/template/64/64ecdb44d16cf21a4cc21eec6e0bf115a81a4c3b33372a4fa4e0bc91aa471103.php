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

/* __string_template__90ee91bc289fdd39e4b9968f0f7847b2b422f31a68f0a8fdcc02bc3956c2a611 */
class __TwigTemplate_794e5f3b787178ef81fa9d6fe94f4d0b31179c0c416d038ebc845022883b885b extends Template
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
        // line 3
        $this->loadTemplate("product/all_review_partial.twig", "__string_template__90ee91bc289fdd39e4b9968f0f7847b2b422f31a68f0a8fdcc02bc3956c2a611", 3)->display($context);
        // line 4
        echo "</div>


<script type=\"text/javascript\">
  // AJAX pagination for reviews
  \$(document).on('click', '#review .pagination a', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('fast').load(this.href, function () {
      \$(this).fadeIn('fast');
    });
  });


</script>


";
        // line 21
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__90ee91bc289fdd39e4b9968f0f7847b2b422f31a68f0a8fdcc02bc3956c2a611";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__90ee91bc289fdd39e4b9968f0f7847b2b422f31a68f0a8fdcc02bc3956c2a611", "");
    }
}
