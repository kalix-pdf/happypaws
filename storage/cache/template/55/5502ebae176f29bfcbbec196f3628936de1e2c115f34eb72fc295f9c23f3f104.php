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

/* __string_template__ff51505e301d76bc1b4676202a505f594266087ba94e24ca2af17dcdedef4753 */
class __TwigTemplate_d34b574607cd856663942e17923fd2ae28f3ea49ef03dcb8f82ff4fd7a6883a1 extends Template
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
        echo ($context["review_partial"] ?? null);
        echo "
</div>


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
        return "__string_template__ff51505e301d76bc1b4676202a505f594266087ba94e24ca2af17dcdedef4753";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ff51505e301d76bc1b4676202a505f594266087ba94e24ca2af17dcdedef4753", "");
    }
}
