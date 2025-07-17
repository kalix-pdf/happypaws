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

/* account/customerpartner/dashboards/sale.twig */
class __TwigTemplate_0a6bd04b06928369a6d8385b606931aa35056da095437167899cdd00c303caeb extends Template
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
        echo "<style type=\"text/css\">
\t.popover {
\t\tcolor: #666;
\t\tz-index:9999;
\t\twidth:100%;
\t}
</style>
<div class=\"tile tile-primary\" id=\"tab-sales-wk\">
\t<div class=\"tile-heading\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "
\t\t<span class=\"pull-right\">
\t\t\t";
        // line 11
        if ((($context["percentage"] ?? null) > 0)) {
            // line 12
            echo "\t\t\t\t<i class=\"fa fa-caret-up\"></i>
\t\t\t";
        } elseif ((        // line 13
($context["percentage"] ?? null) < 0)) {
            // line 14
            echo "\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        echo ($context["percentage"] ?? null);
        echo "%</span>
\t</div>
\t<div class=\"tile-body\">
\t\t<i class=\"fa fa-credit-card\"></i>
\t\t<h2 class=\"pull-right\" id=\"popover\" data-toggle=\"popover\" data-trigger=\"hover\">";
        // line 20
        echo ($context["total"] ?? null);
        echo "</h2>
\t</div>
\t<div class=\"tile-footer\">
\t\t<a href=\"";
        // line 23
        echo ($context["sale"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a>
\t</div>
</div>

<script type=\"text/javascript\">
\t\$('#toggle-order').on('click', function () {
\t\t
    \t\$('a[href=\"#tab-order\"]').trigger('click');
  \t});

jQuery(document).ready(function () {
  \$(document).find('#tab-sales-wk').parent().css('z-index','9');
  var html = '';
  html += '<table class=\"table table-responsive table-bordered table-striped\">';
  html += '<tr><td>Admin Charges</td><td> ";
        // line 37
        echo ($context["admin_amount"] ?? null);
        echo "</td></tr>';
  html += '<tr><td>Paid Balance</td><td> ";
        // line 38
        echo ($context["paid_amount"] ?? null);
        echo "</td></tr>';
  html += '<tr><td>Payable Balance</td><td> ";
        // line 39
        echo ($context["payable_amount"] ?? null);
        echo "</td></tr>';
  html += '<tr><td>Total Sale</td><td> ";
        // line 40
        echo ($context["total"] ?? null);
        echo "</td></tr>';
  html += '</table>';

  \$('#popover').popover({
\thtml: true,
\tsanitize : false,
\tplacement: 'bottom',
    title: '";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "',
    content: html,
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/dashboards/sale.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  77 => 23,  71 => 20,  63 => 16,  59 => 14,  57 => 13,  54 => 12,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/dashboards/sale.twig", "");
    }
}
