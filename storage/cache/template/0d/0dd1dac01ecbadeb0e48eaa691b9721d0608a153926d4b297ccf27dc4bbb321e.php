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

/* __string_template__0d15007fe9718958a4a74545b870a8b9436e6b1fb9cd4db546022b1e1187dae7 */
class __TwigTemplate_82ff62e6bec2222c2b41298ce0b16793a6d7a10cc33dcc43ef6af0f497288a5b extends Template
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
        $this->loadTemplate("product/all_review_partial.twig", "__string_template__0d15007fe9718958a4a74545b870a8b9436e6b1fb9cd4db546022b1e1187dae7", 3)->display($context);
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
    }

    public function getTemplateName()
    {
        return "__string_template__0d15007fe9718958a4a74545b870a8b9436e6b1fb9cd4db546022b1e1187dae7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0d15007fe9718958a4a74545b870a8b9436e6b1fb9cd4db546022b1e1187dae7", "");
    }
}
