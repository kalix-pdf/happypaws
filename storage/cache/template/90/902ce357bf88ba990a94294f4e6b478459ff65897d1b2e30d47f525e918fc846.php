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

/* __string_template__0ce3fcbd8d430c3c01cb839df802a39233769e7d725f0b1b0b8de1c9f81df2c6 */
class __TwigTemplate_7b1571e79960015ef0f5e4206bf137cc26e3c2bd5a3336e4a6aa7885421e12ab extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"admin/view/javascript/jquery/jquery-3.7.0.min.js\"></script>
<script type=\"text/javascript\" src=\"admin/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"admin/view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"admin/view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        // line 18
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 19
            echo "<link href=\"admin/view/stylesheet/bootstrap-a.css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"admin/view/stylesheet/stylesheet-a.css\" rel=\"stylesheet\" media=\"screen\" />
";
        } else {
            // line 22
            echo "<link href=\"admin/view/stylesheet/bootstrap.css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"admin/view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 25
        echo "<script src=\"admin/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"admin/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"admin/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"admin/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"admin/view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 31
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 31);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 31);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 31);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 34);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 34);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<script src=\"admin/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 38
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<link type=\"text/css\" href=\"catalog/view/theme/default/stylesheet/MP/separate_seller.css\" rel=\"stylesheet\" media=\"screen\" />
<style>
.imgoption {
    display: block;
    margin-top: 5px;
    width: 110px;
}
.imgoption .delete_img {
    width: 110px;
}
</style>
</head>
";
        // line 52
        if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
            echo " ";
            echo ($context["notification"] ?? null);
            echo " ";
        }
        // line 53
        echo "<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">

  <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 57
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" style=\"max-height: 24px;\" /><span class=\"hidden\">";
        echo ($context["name"] ?? null);
        echo "</span></a></div>

  <a id=\"button-menu\"><span class=\"fa fa-bars\"></span></a>

  ";
        // line 61
        if (($context["logged"] ?? null)) {
            // line 62
            echo "  <ul class=\"nav navbar-nav navbar-right\">
\t";
            // line 63
            if (($context["default_view_status"] ?? null)) {
                echo " 
    <li><a href=\"";
                // line 64
                echo ($context["default_view"] ?? null);
                echo "\" title=\"";
                echo ($context["text_default_view"] ?? null);
                echo "\"><i class=\"fa fa-eye-slash fa-lg\"></i>&nbsp;";
                echo ($context["text_default_view"] ?? null);
                echo "</a></li>
\t";
            }
            // line 66
            echo "
    ";
            // line 67
            if ((array_key_exists("asktoadmin", $context) && ($context["asktoadmin"] ?? null))) {
                // line 68
                echo "      <li><a data-toggle=\"modal\" data-target=\"#myModal-seller-mail\" title=\"";
                echo ($context["text_ask"] ?? null);
                echo "\"><i class=\"fa fa-question-circle fa-lg\"></i>&nbsp;";
                echo ($context["text_ask"] ?? null);
                echo "</a></li>
    ";
            }
            // line 70
            echo "
    ";
            // line 71
            if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
                // line 72
                echo "      <li><a id=\"notification\" data-toggle=\"modal\" data-target=\"#myModal-notification\" title=\"";
                echo ($context["text_notification"] ?? null);
                echo "\"></a></li>
    ";
            }
            // line 74
            echo "
    <li><a href=\"";
            // line 75
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\"><i class=\"fa fa-user fa-lg\"></i>&nbsp;";
            echo ($context["text_account"] ?? null);
            echo "</a></li>

    <li><a href=\"";
            // line 77
            echo ($context["home"] ?? null);
            echo "\" title=\"Home\"><i class=\"fa fa-home fa-lg\"></i> ";
            echo "Home";
            echo "</a></li>

    <li><a href=\"";
            // line 79
            echo ($context["logout"] ?? null);
            echo "\"> <i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span> </a> </li>
  </ul>
  ";
        }
        // line 82
        echo "</header>

";
        // line 84
        if (($context["logged"] ?? null)) {
            // line 85
            echo "\t<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
            // line 89
            echo ($context["text_close"] ?? null);
            echo "</span></button>
\t        <h3 class=\"modal-title\">";
            // line 90
            echo ($context["text_ask_question"] ?? null);
            echo "</h3>
\t      </div>
\t      <form id=\"seller-mail-form\">
\t\t      <div class=\"modal-body\">
\t\t      \t<div class=\"form-group required\">
\t\t\t        <label class=\"control-label\" for=\"input-subject\">";
            // line 95
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t        <input type=\"text\" name=\"subject\" id=\"input-subject\" class=\"form-control\" />
\t\t\t        ";
            // line 97
            if (array_key_exists("partner", $context)) {
                // line 98
                echo "\t\t\t        \t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\"/>
\t\t\t        ";
            }
            // line 100
            echo "\t\t\t    </div>
\t\t\t\t<div class=\"form-group required\">
\t\t\t        <label class=\"control-label\" for=\"input-message\">";
            // line 102
            echo ($context["text_ask"] ?? null);
            echo "</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"3\" id=\"input-message\"></textarea>
\t\t\t    </div>
\t\t\t    <div class=\"error text-center text-danger\"></div>
\t\t      </div>
\t\t  </form>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 109
            echo ($context["text_close"] ?? null);
            echo "</button>
\t        <button type=\"button\" class=\"btn btn-primary\" id=\"send-mail\">";
            // line 110
            echo ($context["text_send"] ?? null);
            echo "</button>
\t      </div>
\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
";
        }
        // line 116
        echo "<script>
  ";
        // line 117
        if (($context["logged"] ?? null)) {
            // line 118
            echo "    \$('#send-mail').on('click',function(){
    \tf = 0;
    \t\$('.alert').remove();
    \t\$('#myModal-seller-mail input[type=\\'text\\'],#myModal-seller-mail textarea').each(function () {
    \t\tif (\$(this).val() == '') {
    \t\t\t\$(this).parent().addClass('has-error');
    \t\t\tf++;
    \t\t}else{
    \t\t\t\$(this).parent().removeClass('has-error');
    \t\t}
    \t});

    \tif (f > 0) {
    \t\t\$('#myModal-seller-mail .error').text('";
            // line 131
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
    \t} else {
    \t\t\$('#send-mail').addClass('disabled');
    \t\t\$('#myModal-seller-mail').addClass('mail-procss');
    \t\t\$('.alert-success').remove();
    \t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 136
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

    \t\t\$.ajax({
    \t\t\turl: '";
            // line 139
            echo ($context["send_mail"] ?? null);
            echo "',
    \t\t\tdata: \$('#seller-mail-form').serialize()+'";
            // line 140
            echo ($context["mail_for"] ?? null);
            echo "',
    \t\t\ttype: 'post',
    \t\t\tdataType: 'json',
    \t\t\tcomplete: function () {
    \t\t\t\t\$('#send-mail').removeClass('disabled');
    \t\t\t\t\$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(function () {
    \t\t\t\t\tif(this.type != 'hidden'){
    \t\t\t\t\t  \$(this).val('');
    \t\t\t\t\t  \$(this).text('');
    \t\t\t\t\t}
    \t\t\t\t});
    \t\t\t}
    \t\t});
    \t}
    });
  ";
        }
        // line 156
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0ce3fcbd8d430c3c01cb839df802a39233769e7d725f0b1b0b8de1c9f81df2c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 156,  358 => 140,  354 => 139,  348 => 136,  340 => 131,  325 => 118,  323 => 117,  320 => 116,  311 => 110,  307 => 109,  297 => 102,  293 => 100,  287 => 98,  285 => 97,  280 => 95,  272 => 90,  268 => 89,  262 => 85,  260 => 84,  256 => 82,  248 => 79,  241 => 77,  232 => 75,  229 => 74,  223 => 72,  221 => 71,  218 => 70,  210 => 68,  208 => 67,  205 => 66,  196 => 64,  192 => 63,  189 => 62,  187 => 61,  172 => 57,  166 => 53,  160 => 52,  146 => 40,  137 => 38,  133 => 37,  130 => 36,  119 => 34,  115 => 33,  102 => 31,  98 => 30,  91 => 25,  86 => 22,  81 => 19,  79 => 18,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0ce3fcbd8d430c3c01cb839df802a39233769e7d725f0b1b0b8de1c9f81df2c6", "");
    }
}
