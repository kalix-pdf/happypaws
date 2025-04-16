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

/* __string_template__67be6782d92a9136a2c480239fbe17999a5d2fd97ab5f8371824d930dd6421d5 */
class __TwigTemplate_28597b66bc4c63a2043f8214c81e502c0f2782b15d7f572cbfa0d803e2758177 extends Template
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

<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  ";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <form action=\"index.php?route=checkout/confirm\" method=\"post\">
    <div class=\"";
        // line 23
        echo ($context["class"] ?? null);
        echo "\" id=\"content\"> ";
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">Order Summary</h4>
                </div>
                <div class=\"panel-body\"> 
                <h4 class=\"panel-title\">Shipping Address</h4>
                ";
        // line 32
        echo ($context["shipping_add"] ?? null);
        echo "
                </div>
                <div class=\"panel-body\">
                  <h4 class=\"panel-title\">Total</div>
                </div>
                <div class=\"panel-body\">";
        // line 37
        echo ($context["total"] ?? null);
        echo "</div>
                <div class=\"panel-body\">
                    <h4 class=\"panel-title\">Payment Method</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 42
        echo ($context["payment_method"] ?? null);
        echo "                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <button class=\"btn btn-primary\">Place Order</button>
    <form>
</div>
<script>
";
        // line 52
        if ( !($context["logged"] ?? null)) {
            // line 53
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 60
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 70
        echo "
</script>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__67be6782d92a9136a2c480239fbe17999a5d2fd97ab5f8371824d930dd6421d5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  170 => 70,  157 => 60,  148 => 53,  146 => 52,  133 => 42,  125 => 37,  117 => 32,  106 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__67be6782d92a9136a2c480239fbe17999a5d2fd97ab5f8371824d930dd6421d5", "");
    }
}
