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

/* account/customerpartner/dashboards/chart.twig */
class __TwigTemplate_ffbf6e8565d3a259f87d12d2610bcde52ad954aab4c7f562b582f49065fcc16c extends Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\" style=\"background-color:#ffffff\">
    <div class=\"pull-right\" style=\"position: relative;\">
      <a href=\"#\" class=\"dropdown-toggle\" id=\"chart_div\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar\"></i> <i class=\"caret\"></i></a>
      <ul id=\"range\" class=\"dropdown-menu dropdown-menu-right\" style=\"z-index:9;\">
        <li><a href=\"day\">";
        // line 6
        echo ($context["text_day"] ?? null);
        echo "</a></li>
        <li><a href=\"week\">";
        // line 7
        echo ($context["text_week"] ?? null);
        echo "</a></li>
        <li class=\"active\"><a href=\"month\">";
        // line 8
        echo ($context["text_month"] ?? null);
        echo "</a></li>
        <li><a href=\"year\">";
        // line 9
        echo ($context["text_year"] ?? null);
        echo "</a></li>
      </ul>
    </div>
    <h3 class=\"panel-title\" style=\"font-size:18px;color:#4F4F4F\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<script type=\"text/javascript\" src=\"admin/view/javascript/jquery/flot/jquery.flot.js\"></script> 
<script type=\"text/javascript\" src=\"admin/view/javascript/jquery/flot/jquery.flot.resize.min.js\"></script>
<script type=\"text/javascript\">
  \$(document).on('click','#chart_div',function(){
    \$(this).parent().find('ul#range').toggle();
  });
  \$(document).ready(function(){
    \$('#chart-sale table').addClass('table-responsive table-bordered');
  });

  \$('#range a').on('click', function(e) {
  \te.preventDefault();

  \t\$(this).parent().parent().find('li').removeClass('active');

  \t\$(this).parent().addClass('active');

  \t\$.ajax({
  \t\ttype: 'get',
  \t\turl: 'index.php?route=account/customerpartner/dashboards/chart/chart&range=' + \$(this).attr('href'),
  \t\tdataType: 'json',
  \t\tsuccess: function(json) {
        
         if (typeof json['order'] == 'undefined') { return false; }
\t\t\t
          var option = {\t
            shadowSize: 0,
            colors: ['#9FD5F1', '#1065D2'],
            bars: { 
              show: true,
              fill: true,
              lineWidth: 1
            },
            grid: {
              backgroundColor: '#FFFFFF',
              hoverable: true
            },
            points: {
              show: false
            },
            xaxis: {
              show: true,
                    ticks: json['xaxis']
            }
          }
          
          \$.plot('#chart-sale', [json['order'], json['customer']], option);\t
              
          \$('#chart-sale').bind('plothover', function(event, pos, item) {
            \$('.tooltip').remove();
            
            if (item) {
              \$('<div id=\"tooltip\" class=\"tooltip top in\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');
              
              \$('#tooltip').css({
                position: 'absolute',
                left: item.pageX - (\$('#tooltip').outerWidth() / 2),
                top: item.pageY - \$('#tooltip').outerHeight(),
                pointer: 'cusror'
              }).fadeIn('slow');\t
              
              \$('#chart-sale').css('cursor', 'pointer');\t\t
              } else {
              \$('#chart-sale').css('cursor', 'auto');
            }
          });

          \$('#chart-sale table').addClass('table-responsive table-bordered');
       
  \t\t},
      error: function(xhr, ajaxOptions, thrownError) {
         alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
  \t});
    
  });
  \$('#range .active a').trigger('click');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/dashboards/chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/dashboards/chart.twig", "");
    }
}
