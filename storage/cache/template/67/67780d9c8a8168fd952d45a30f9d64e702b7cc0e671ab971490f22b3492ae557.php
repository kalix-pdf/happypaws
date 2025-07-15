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

/* account/customerpartner/header.twig */
class __TwigTemplate_139e8df59cbf2221efabf9c850727fcb29e44c7c2df239bcb2a2560edd923772 extends Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
";
        // line 30
        echo "<link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
";
        // line 35
        echo "<link href=\"catalog/view/theme/hp/stylesheet/style.css\" rel=\"stylesheet\">

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 45
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 45);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 45);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 48
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  
</head>
";
        // line 51
        if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
            echo " ";
            echo ($context["notification"] ?? null);
            echo " ";
        }
        // line 52
        echo "<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">

  <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 56
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
        // line 60
        if (($context["logged"] ?? null)) {
            // line 61
            echo "  <ul class=\"nav navbar-nav navbar-right\">
\t";
            // line 62
            if (($context["default_view_status"] ?? null)) {
                echo " 
    <li><a href=\"";
                // line 63
                echo ($context["default_view"] ?? null);
                echo "\" title=\"";
                echo ($context["text_default_view"] ?? null);
                echo "\"><i class=\"fa fa-eye-slash fa-lg\"></i>&nbsp;";
                echo ($context["text_default_view"] ?? null);
                echo "</a></li>
\t";
            }
            // line 65
            echo "
    ";
            // line 66
            if ((array_key_exists("asktoadmin", $context) && ($context["asktoadmin"] ?? null))) {
                // line 67
                echo "      <li><a data-toggle=\"modal\" data-target=\"#myModal-seller-mail\" title=\"";
                echo ($context["text_ask"] ?? null);
                echo "\"><i class=\"fa fa-question-circle fa-lg\"></i>&nbsp;";
                echo ($context["text_ask"] ?? null);
                echo "</a></li>
    ";
            }
            // line 69
            echo "
    ";
            // line 70
            if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
                // line 71
                echo "      <li><a id=\"notification\" data-toggle=\"modal\" data-target=\"#myModal-notification\" title=\"";
                echo ($context["text_notification"] ?? null);
                echo "\"></a></li>
    ";
            }
            // line 73
            echo "
    <li><a href=\"";
            // line 74
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\"><i class=\"fa fa-user fa-lg\"></i>&nbsp;";
            echo ($context["text_account"] ?? null);
            echo "</a></li>

    <li><a href=\"";
            // line 76
            echo ($context["home"] ?? null);
            echo "\" title=\"Home\"><i class=\"fa fa-home fa-lg\"></i> ";
            echo "Home";
            echo "</a></li>

    <li><a href=\"";
            // line 78
            echo ($context["logout"] ?? null);
            echo "\"> <i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span> </a> </li>
  </ul>
  ";
        }
        // line 81
        echo "</header>

";
        // line 83
        if (($context["logged"] ?? null)) {
            // line 84
            echo "\t<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
            // line 88
            echo ($context["text_close"] ?? null);
            echo "</span></button>
\t        <h3 class=\"modal-title\">";
            // line 89
            echo ($context["text_ask_question"] ?? null);
            echo "</h3>
\t      </div>
\t      <form id=\"seller-mail-form\">
\t\t      <div class=\"modal-body\">
\t\t      \t<div class=\"form-group required\">
\t\t\t        <label class=\"control-label\" for=\"input-subject\">";
            // line 94
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t        <input type=\"text\" name=\"subject\" id=\"input-subject\" class=\"form-control\" />
\t\t\t        ";
            // line 96
            if (array_key_exists("partner", $context)) {
                // line 97
                echo "\t\t\t        \t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\"/>
\t\t\t        ";
            }
            // line 99
            echo "\t\t\t    </div>
\t\t\t\t<div class=\"form-group required\">
\t\t\t        <label class=\"control-label\" for=\"input-message\">";
            // line 101
            echo ($context["text_ask"] ?? null);
            echo "</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"3\" id=\"input-message\"></textarea>
\t\t\t    </div>
\t\t\t    <div class=\"error text-center text-danger\"></div>
\t\t      </div>
\t\t  </form>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 108
            echo ($context["text_close"] ?? null);
            echo "</button>
\t        <button type=\"button\" class=\"btn btn-primary\" id=\"send-mail\">";
            // line 109
            echo ($context["text_send"] ?? null);
            echo "</button>
\t      </div>
\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
";
        }
        // line 115
        echo "<script>
  ";
        // line 116
        if (($context["logged"] ?? null)) {
            // line 117
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
            // line 130
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
    \t} else {
    \t\t\$('#send-mail').addClass('disabled');
    \t\t\$('#myModal-seller-mail').addClass('mail-procss');
    \t\t\$('.alert-success').remove();
    \t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 135
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

    \t\t\$.ajax({
    \t\t\turl: '";
            // line 138
            echo ($context["send_mail"] ?? null);
            echo "',
    \t\t\tdata: \$('#seller-mail-form').serialize()+'";
            // line 139
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
        // line 155
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 155,  371 => 139,  367 => 138,  361 => 135,  353 => 130,  338 => 117,  336 => 116,  333 => 115,  324 => 109,  320 => 108,  310 => 101,  306 => 99,  300 => 97,  298 => 96,  293 => 94,  285 => 89,  281 => 88,  275 => 84,  273 => 83,  269 => 81,  261 => 78,  254 => 76,  245 => 74,  242 => 73,  236 => 71,  234 => 70,  231 => 69,  223 => 67,  221 => 66,  218 => 65,  209 => 63,  205 => 62,  202 => 61,  200 => 60,  185 => 56,  179 => 52,  173 => 51,  169 => 49,  161 => 48,  157 => 47,  146 => 45,  142 => 44,  139 => 43,  130 => 41,  126 => 40,  113 => 38,  109 => 37,  105 => 35,  100 => 30,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/header.twig", "");
    }
}
