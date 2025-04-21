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

/* __string_template__525420d9640f8809f55c2fdf23a646a8c94634172b8a05ff2108f41ae07e8187 */
class __TwigTemplate_fc40feaaee54a78a22fde5bbc3474b0bf1c0ea0503da333cd1f1e15863c670eb extends Template
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
        echo "<div class=\"modal fade\" id=\"myModal-notification\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
        // line 5
        echo ($context["text_close"] ?? null);
        echo "</span></button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 6
        echo "Hi ";
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "firstname", [], "array", true, true, false, 6)) {
            echo (($__internal_compile_0 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["firstname"] ?? null) : null);
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "lastname", [], "array", true, true, false, 6)) {
            echo (($__internal_compile_1 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["lastname"] ?? null) : null);
        }
        echo "</h3>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t  ";
        // line 10
        if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
            // line 11
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 13
            echo ($context["text_order"] ?? null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 14
            echo ($context["view_all"] ?? null);
            echo "\"><span id=\"processing_status_total\" class=\"label label-warning\" style=\"margin-right: 5px;\">";
            echo ($context["processing_status_total"] ?? null);
            echo "</span>";
            echo ($context["text_processing_status"] ?? null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 15
            echo ($context["view_all"] ?? null);
            echo "\"><span id=\"complete_status_total\" class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo ($context["complete_status_total"] ?? null);
            echo "</span>";
            echo ($context["text_complete_status"] ?? null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 16
            echo ($context["view_all"] ?? null);
            echo "\"><span id=\"return_total\" class=\"label label-danger\" style=\"margin-right: 5px;\">";
            echo ($context["return_total"] ?? null);
            echo "</span>";
            echo ($context["text_return"] ?? null);
            echo "</a></li>
\t\t\t      </ul>
\t\t\t      ";
            // line 18
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 19
                echo "\t\t\t        <ul id=\"seller_notifications\">
\t\t\t          ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 21
                    echo "\t\t\t            <li>";
                    echo $context["seller_notification"];
                    echo "</li>
\t\t\t          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo ($context["view_all"] ?? null);
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
\t\t\t        </ul>
\t\t\t      ";
            }
            // line 26
            echo "\t\t\t    </div>
\t\t\t    <hr/>
\t\t\t  ";
        }
        // line 29
        echo "\t\t\t  ";
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 30
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 32
            echo ($context["text_product"] ?? null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 33
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\"><span id=\"product_stock_total\" class=\"label label-warning\" style=\"margin-right: 5px;\">";
            echo ($context["product_stock_total"] ?? null);
            echo "</span>";
            echo ($context["text_stock"] ?? null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 34
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\"><span id=\"review_total\" class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo ($context["review_total"] ?? null);
            echo "</span>";
            echo ($context["text_entry_review"] ?? null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 35
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\"><span id=\"approval_total\" class=\"label label-danger\" style=\"margin-right: 5px;\">";
            echo ($context["approval_total"] ?? null);
            echo "</span>";
            echo ($context["text_approval"] ?? null);
            echo "</a></li>
\t\t\t      </ul>
\t\t\t      ";
            // line 37
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 38
                echo "\t\t\t        <ul id=\"seller_product_reviews\">
\t\t\t          ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 40
                    echo "\t\t\t            <li>";
                    echo $context["seller_product_review"];
                    echo "</li>
\t\t\t          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo (($context["view_all"] ?? null) . "&tab=product");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
\t\t\t        </ul>
\t\t\t      ";
            }
            // line 45
            echo "\t\t\t    </div>
\t\t\t    <hr/>
\t\t\t  ";
        }
        // line 48
        echo "\t\t\t  ";
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 49
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 51
            echo ($context["text_entry_seller"] ?? null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 52
            echo (($context["view_all"] ?? null) . "&tab=seller");
            echo "\"><span id=\"seller_review_total\" class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo ($context["seller_review_total"] ?? null);
            echo "</span>";
            echo ($context["text_entry_review"] ?? null);
            echo "</a></li>
\t\t\t      </ul>
\t\t\t      ";
            // line 54
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 55
                echo "\t\t\t        <ul id=\"seller_reviews\">
\t\t\t          ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 57
                    echo "\t\t\t            <li>";
                    echo $context["seller_review"];
                    echo "</li>
\t\t\t          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo (($context["view_all"] ?? null) . "&tab=seller");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
\t\t\t        </ul>
\t\t\t      ";
            }
            // line 62
            echo "\t\t\t    </div>
\t\t\t  ";
        }
        // line 64
        echo "\t\t\t  ";
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !($context["seller_notifications"] ?? null) &&  !($context["seller_product_reviews"] ?? null)) &&  !($context["seller_reviews"] ?? null)))) {
            // line 65
            echo "\t\t\t    <center><h4>";
            echo ($context["text_no_notification"] ?? null);
            echo "</h4></center>
\t\t\t  ";
        }
        // line 67
        echo "\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 70
        echo ($context["view_all"] ?? null);
        echo "\" class=\"btn btn-primary button\" style=\"color:white;\">";
        echo ($context["text_view_all_notificatins"] ?? null);
        echo "</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-default button\" data-dismiss=\"modal\">";
        // line 71
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type=\"text/javascript\">
\$(document).ready(function () {
function wk_notify(){
\t\$.ajax({
\t  url: 'index.php?route=account/customerpartner/notification/notifications&json_notification=true',
\t  type: 'get',
\t  methodType: 'json',
\t  success: function(data) {

\t\t\tif(data['notification_total']){
\t\t\t  if (data['separate_view']) {
\t\t\t    \$(\"#notification\").html('<span class=\"label label-danger pull-left\">' + data['notification_total'] + '</span> <img src=\"admin/view/image/notify.png\" title=\"";
        // line 88
        echo ($context["text_notifications"] ?? null);
        echo "\">');
\t\t\t  } else {
\t\t\t    \$(\"#notification\").html('";
        // line 90
        echo ($context["text_notifications"] ?? null);
        echo "'+' <span class=\"badge\">'+data['notification_total']+'<span>');
\t\t\t  }
\t\t\t} else {
\t\t\t  if (data['separate_view']) {
\t\t\t    \$(\"#notification\").html('<img src=\"admin/view/image/notify.png\" title=\"";
        // line 94
        echo ($context["text_notifications"] ?? null);
        echo "\">');
\t\t\t  } else {
\t\t\t    \$(\"#notification\").text('";
        // line 96
        echo ($context["text_notifications"] ?? null);
        echo "');
\t\t\t  }
\t\t\t}

\t\t\t\$( \"span\" ).each( function( index, element ){
\t\t\t\tvar span_id = \$( this ).attr('id');
\t\t\t\tif(span_id && data[span_id]){
\t\t\t\t\t\$(\"#\"+span_id).text(data[span_id]);
\t\t\t\t}
\t\t\t});

\t\t\t\$( \"ul\" ).each( function( index, element ){
\t\t\t\tvar ul_id = \$( this ).attr('id');
\t\t\t\tif(ul_id && data[ul_id]){
\t\t\t\t\tvar html = '';
\t\t\t\t\tfor (var i = 0; i < data[ul_id].length; i++) {
\t\t\t\t\t\thtml += '<li>' + data[ul_id][i] + '</li>';
\t\t\t\t\t}
\t\t\t\t\tif(ul_id == 'seller_product_reviews'){
\t\t\t\t\t\thtml += '<li style=\"display: block; overflow: auto;\"><a href=\"";
        // line 115
        echo ($context["view_all"] ?? null);
        echo "&tab=product\">";
        echo ($context["text_view_all"] ?? null);
        echo "</a></li>';
\t\t\t\t\t} else if (ul_id == 'seller_reviews') {
\t\t\t\t\t\thtml += '<li style=\"display: block; overflow: auto;\"><a href=\"";
        // line 117
        echo ($context["view_all"] ?? null);
        echo "&tab=seller\">";
        echo ($context["text_view_all"] ?? null);
        echo "</a></li>';
\t\t\t\t\t} else{
\t\t\t\t\t\thtml += '<li style=\"display: block; overflow: auto;\"><a href=\"";
        // line 119
        echo ($context["view_all"] ?? null);
        echo "\">";
        echo ($context["text_view_all"] ?? null);
        echo "</a></li>';
\t\t\t\t\t}
\t\t\t\t\t\$(\"#\"+ul_id).html(html);
\t\t\t\t}
\t\t\t});
\t  }
\t});
}
setInterval(wk_notify, 30000);
wk_notify();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__525420d9640f8809f55c2fdf23a646a8c94634172b8a05ff2108f41ae07e8187";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 119,  333 => 117,  326 => 115,  304 => 96,  299 => 94,  292 => 90,  287 => 88,  267 => 71,  261 => 70,  256 => 67,  250 => 65,  247 => 64,  243 => 62,  234 => 59,  225 => 57,  221 => 56,  218 => 55,  216 => 54,  207 => 52,  203 => 51,  199 => 49,  196 => 48,  191 => 45,  182 => 42,  173 => 40,  169 => 39,  166 => 38,  164 => 37,  155 => 35,  147 => 34,  139 => 33,  135 => 32,  131 => 30,  128 => 29,  123 => 26,  114 => 23,  105 => 21,  101 => 20,  98 => 19,  96 => 18,  87 => 16,  79 => 15,  71 => 14,  67 => 13,  63 => 11,  61 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__525420d9640f8809f55c2fdf23a646a8c94634172b8a05ff2108f41ae07e8187", "");
    }
}
