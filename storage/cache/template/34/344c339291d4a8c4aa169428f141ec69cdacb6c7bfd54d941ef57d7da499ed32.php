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

/* __string_template__8b62730648b61ad32e7a6a7bc7268af83835c9f988b5eda293d97f42879ce4d7 */
class __TwigTemplate_14efab49be814ff37155d56c7117fc0786b3298bc42bd03c49fd3ef06aafbb42 extends Template
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
        $this->loadTemplate("product/all_review_partial.twig", "__string_template__8b62730648b61ad32e7a6a7bc7268af83835c9f988b5eda293d97f42879ce4d7", 3)->display($context);
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
        // line 18
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__8b62730648b61ad32e7a6a7bc7268af83835c9f988b5eda293d97f42879ce4d7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8b62730648b61ad32e7a6a7bc7268af83835c9f988b5eda293d97f42879ce4d7", "");
    }
}
