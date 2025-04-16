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

/* __string_template__f4edad9fc5b6fb668de24f3a951c76661f3f5a90b0e8aee57fddea23f841dbee */
class __TwigTemplate_a6337eee5c8b15a9a7bb026818322aab608b81b03be6e8ddbfc50996213a9cc7 extends Template
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
        echo "    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\" id=\"content\"> ";
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 23
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
        // line 31
        echo ($context["shipping_add"] ?? null);
        echo "
                </div>
                <div class=\"panel-body\">
                    <h4 class=\"panel-title\">Payment Method</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 37
        echo ($context["payment_method"] ?? null);
        echo "                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class=\"button btn-primary\">
    Place Order
    </div>
</div>
<script>
";
        // line 48
        if ( !($context["logged"] ?? null)) {
            // line 49
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 56
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
        // line 66
        echo "</script>
";
        // line 67
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__f4edad9fc5b6fb668de24f3a951c76661f3f5a90b0e8aee57fddea23f841dbee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 67,  162 => 66,  149 => 56,  140 => 49,  138 => 48,  124 => 37,  115 => 31,  104 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f4edad9fc5b6fb668de24f3a951c76661f3f5a90b0e8aee57fddea23f841dbee", "");
    }
}
