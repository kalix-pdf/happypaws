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

/* __string_template__d6328fa49ab61a1be2d7658a5f1d4be4d9a49e68bde26ae5dee98a97448960e8 */
class __TwigTemplate_3623c37e6151ab535dcb64b6d00924c9a40accc4425236e2ddbee86668dccf93 extends Template
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
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js\"></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=customerpartner/map/map&user_token=";
        // line 15
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tdata = [];
\t\t\t\t\t\t
\t\t\tfor (i in json) {
\t\t\t\tdata[i] = json[i]['total'];
\t\t\t}
\t\t\t\t\t
\t\t\t\$('#vmap').vectorMap({
\t\t\t\tmap: 'world_en',
\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\tborderColor: '#FFFFFF',
\t\t\t\tcolor: '#9FD5F1',
\t\t\t\thoverOpacity: 0.7,
\t\t\t\tselectedColor: '#666666',
\t\t\t\tenableZoom: true,
\t\t\t\tshowTooltip: true,
\t\t\t\tvalues: data,
\t\t\t\tnormalizeFunction: 'polynomial',
\t\t\t\tonLabelShow: function(event, label, code) {
\t\t\t\t\tif (json[code]) {
\t\t\t\t\t\tlabel.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 37
        echo ($context["text_order"] ?? null);
        echo " ' + json[code]['total'] + '<br />' + '";
        echo ($context["text_sale"] ?? null);
        echo " ' + json[code]['amount']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});\t\t\t
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});\t\t\t
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "__string_template__d6328fa49ab61a1be2d7658a5f1d4be4d9a49e68bde26ae5dee98a97448960e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  56 => 15,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d6328fa49ab61a1be2d7658a5f1d4be4d9a49e68bde26ae5dee98a97448960e8", "");
    }
}
