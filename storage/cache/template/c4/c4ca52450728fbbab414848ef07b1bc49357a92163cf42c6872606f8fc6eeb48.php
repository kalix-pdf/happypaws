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

/* __string_template__c5b5dbcc213ce4ed7668c1f31c24c770400968705ff28ac215fec0fcec883a5c */
class __TwigTemplate_f154396515b6aee59b89f80eebaed031f7952e906027ba0f0ba51738211608b5 extends Template
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
  .popover{
    color: #666;
    ";
        // line 6
        echo "  }
</style>
<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"pull-right\">
    ";
        // line 10
        if ((($context["percentage"] ?? null) > 0)) {
            // line 11
            echo "    <i class=\"fa fa-caret-up\"></i>
    ";
        } elseif ((        // line 12
($context["percentage"] ?? null) < 0)) {
            // line 13
            echo "    <i class=\"fa fa-caret-down\"></i>
    ";
        }
        // line 15
        echo "    ";
        echo ($context["percentage"] ?? null);
        echo "% </span></div>
  <div class=\"tile-body\" id=\"popover\" data-toggle=\"popover\" data-trigger=\"hover\"><i class=\"fa fa-credit-card\"></i>
    <h2 class=\"pull-right\">";
        // line 17
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"></div>
</div>

<script type=\"text/javascript\">

  \$('#toggle-order').on('click',function(){
    \$('a[href=\"#tab-order\"]').trigger('click');
  })

  jQuery(document).ready(function(){
    html = '';
    html += '<table class=\"table table-responsive table-bordered table-striped\">';
    html += '<table class=\"table table-responsive table-bordered table-striped\">';
    html += '<tr style=\"background:#fff;\"><td style=\"color:#000; font-weight:bold;\">Total Sale</td><td style=\"color:#69b572; font-weight:bold;\"> ";
        // line 32
        echo ($context["total"] ?? null);
        echo "</td></tr>';
    html += '<tr style=\"background:#fff;\"><td style=\"color:#000; font-weight:bold;\">Your Income</td><td style=\"color:#22ade2; font-weight:bold;\"> ";
        // line 33
        echo ($context["seller_amount"] ?? null);
        echo "</td></tr>';
    html += '<tr style=\"background:#fff;\"><td style=\"color:#000; font-weight:bold;\">Admin Commission</td><td  style=\"color:#f37587;\">- ";
        // line 34
        echo ($context["admin_amount"] ?? null);
        echo "</td></tr>';
    html += '<tr style=\"background:#fff;\"><td style=\"color:#000; font-weight:bold;\">Paid Balance</td><td style=\"color:#9C27B0;\"> ";
        // line 35
        echo ($context["paid_amount"] ?? null);
        echo "</td></tr>';
    html += '<tr style=\"background:#fff;\"><td style=\"color:#000;font-weight:bold;\">Remaining Balance</td><td style=\"color:#FF9800;font-weight:bold;\"> ";
        // line 36
        echo ($context["payable_amount"] ?? null);
        echo "</td></tr>';
    html += '</table>';
    \$('#popover').popover(
              {
                html : true,
                content : html,
                //title: '";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "',
                
                placement : 'top',
              }
          );
  })

</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c5b5dbcc213ce4ed7668c1f31c24c770400968705ff28ac215fec0fcec883a5c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  68 => 17,  62 => 15,  58 => 13,  56 => 12,  53 => 11,  51 => 10,  47 => 9,  42 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c5b5dbcc213ce4ed7668c1f31c24c770400968705ff28ac215fec0fcec883a5c", "");
    }
}
