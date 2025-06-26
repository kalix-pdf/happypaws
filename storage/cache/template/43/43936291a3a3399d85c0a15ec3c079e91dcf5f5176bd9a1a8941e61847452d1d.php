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

/* __string_template__a2d445426b821b295c293f3934007840ccc5c43ff00ec668246c812da9dfe647 */
class __TwigTemplate_32199b72353c6c65945dee06d5d10e0ec8340b0d30e9ebdd66434aaf8adb2160 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_add"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo ($context["help_customer"] ?? null);
        echo "\">";
        echo ($context["entry_customer"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customer\" value=\"";
        // line 31
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 32
        echo ($context["customer_id"] ?? null);
        echo "\" />
              ";
        // line 33
        if (($context["error_customer"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_customer"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo ($context["help_seller"] ?? null);
        echo "\">";
        echo ($context["entry_seller"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"seller\" value=\"";
        // line 41
        echo ($context["seller"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_seller"] ?? null);
        echo "\" id=\"input-seller\" class=\"form-control\" />
              <input type=\"hidden\" name=\"seller_id\" value=\"";
        // line 42
        echo ($context["seller_id"] ?? null);
        echo "\" />
              ";
        // line 43
        if (($context["error_seller"] ?? null)) {
            // line 44
            echo "              <div class=\"text-danger\">";
            echo ($context["error_seller"] ?? null);
            echo "</div>
              ";
        }
        // line 46
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 49
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 51
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
              ";
        // line 52
        if (($context["error_text"] ?? null)) {
            // line 53
            echo "              <div class=\"text-danger\">";
            echo ($context["error_text"] ?? null);
            echo "</div>
              ";
        }
        // line 55
        echo "            </div>
          </div>

          ";
        // line 58
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 60
                echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-";
                // line 61
                echo (($__internal_compile_0 = $context["review_field"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_name"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_1 = $context["review_field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_name"] ?? null) : null);
                echo "</label>
                <div class=\"col-sm-10\">
                  ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "                    <label class=\"radio-inline\">
                      ";
                    // line 65
                    if ((twig_get_attribute($this->env, $this->source, ($context["review_attributes"] ?? null), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 65) && ((($__internal_compile_3 = ($context["review_attributes"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(($__internal_compile_4 = $context["review_field"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_id"] ?? null) : null)] ?? null) : null) == $context["i"]))) {
                        // line 66
                        echo "                      <input type=\"radio\" name=\"review_attributes[";
                        echo (($__internal_compile_5 = $context["review_field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo $context["i"];
                        echo "\" checked=\"checked\" />
                      ";
                        // line 67
                        echo $context["i"];
                        echo "
                      ";
                    } else {
                        // line 69
                        echo "                      <input type=\"radio\" name=\"review_attributes[";
                        echo (($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo $context["i"];
                        echo "\" />
                      ";
                        // line 70
                        echo $context["i"];
                        echo "
                      ";
                    }
                    // line 72
                    echo "                    </label>
              \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "          ";
        }
        // line 78
        echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 79
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 82
        if (($context["status"] ?? null)) {
            // line 83
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 84
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 86
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 89
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  ";
        // line 97
        if (($context["customer_id"] ?? null)) {
            // line 98
            echo "     var customer_id = ";
            echo ($context["customer_id"] ?? null);
            echo ";
  ";
        } else {
            // line 100
            echo "     var customer_id = '';
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        if (($context["seller_id"] ?? null)) {
            // line 104
            echo "     var seller_id = ";
            echo ($context["seller_id"] ?? null);
            echo ";
  ";
        } else {
            // line 106
            echo "     var seller_id = '';
  ";
        }
        // line 108
        echo "  // var customer_id = '';
  // var seller_id = '';
  \$('input[name=\\'customer\\']').autocomplete({
  \t'source': function(request, response) {
  \t\t\$.ajax({
  \t\t\turl: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "&filter_customer=' +  encodeURIComponent(request)+'&seller_id='+seller_id,
  \t\t\tdataType: 'json',
  \t\t\tsuccess: function(json) {
  \t\t\t\tresponse(\$.map(json, function(item) {
  \t\t\t\t\treturn {
  \t\t\t\t\t\tlabel: item['name'],
  \t\t\t\t\t\tvalue: item['customer_id']
  \t\t\t\t\t}
  \t\t\t\t}));
  \t\t\t}
  \t\t});
  \t},
  \t'select': function(item) {
      
  \t\t\$('input[name=\\'customer\\']').val(item['label']);
  \t\t\$('input[name=\\'customer_id\\']').val(item['value']);
      customer_id = item['value'];
  \t}
  });

  \$('input[name=\\'seller\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 136
        echo ($context["user_token"] ?? null);
        echo "&filter_seller=' +  encodeURIComponent(request)+'&customer_id='+customer_id,
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      
      \$('input[name=\\'seller\\']').val(item['label']);
      \$('input[name=\\'seller_id\\']').val(item['value']);
      seller_id = item['value'];
    }
  });
//--></script></div>
";
        // line 156
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__a2d445426b821b295c293f3934007840ccc5c43ff00ec668246c812da9dfe647";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 156,  360 => 136,  334 => 113,  327 => 108,  323 => 106,  317 => 104,  315 => 103,  312 => 102,  308 => 100,  302 => 98,  300 => 97,  290 => 89,  285 => 87,  280 => 86,  275 => 84,  270 => 83,  268 => 82,  262 => 79,  259 => 78,  256 => 77,  248 => 74,  241 => 72,  236 => 70,  229 => 69,  224 => 67,  217 => 66,  215 => 65,  212 => 64,  208 => 63,  201 => 61,  198 => 60,  193 => 59,  191 => 58,  186 => 55,  180 => 53,  178 => 52,  172 => 51,  167 => 49,  162 => 46,  156 => 44,  154 => 43,  150 => 42,  144 => 41,  137 => 39,  132 => 36,  126 => 34,  124 => 33,  120 => 32,  114 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a2d445426b821b295c293f3934007840ccc5c43ff00ec668246c812da9dfe647", "");
    }
}
