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

/* account/customerpartner/review_form.twig */
class __TwigTemplate_a8e672bf00b8b99a02aa1b8903c40406a189b81735e40db71b3daeb0296dccf3 extends Template
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
        echo ($context["separate_column_left"] ?? null);
        echo "
";
        // line 2
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 3
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 5
            echo "  <div class=\"container\">
";
        }
        // line 7
        echo "<style>
.dropdown-menu {
  position: absolute !important;
}
</style>
  <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "      <li>
        <a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
  ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 22
        echo "
  <div class=\"row\">";
        // line 23
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 32
        if (($context["chkIsPartner"] ?? null)) {
            // line 33
            echo "      <h1>";
            echo ($context["text_edit"] ?? null);
            echo "
        <div class=\"pull-right\">
          ";
            // line 35
            if (($context["marketplace_sellereditreview"] ?? null)) {
                // line 36
                echo "            <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_save"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          ";
            }
            // line 38
            echo "          <a href=\"";
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </h1>

      <form action=\"";
            // line 42
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-customer\"><span data-toggle=\"tooltip\" title=\"";
            // line 44
            echo ($context["help_customer"] ?? null);
            echo "\">";
            echo ($context["entry_customer"] ?? null);
            echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"customer\" value=\"";
            // line 46
            echo ($context["customer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer"] ?? null);
            echo "\" id=\"input-customer\" class=\"form-control\" />
            <input type=\"hidden\" name=\"customer_id\" value=\"";
            // line 47
            echo ($context["customer_id"] ?? null);
            echo "\" />
            ";
            // line 48
            if (($context["error_customer"] ?? null)) {
                // line 49
                echo "            <div class=\"text-danger\">";
                echo ($context["error_customer"] ?? null);
                echo "</div>
            ";
            }
            // line 51
            echo "          </div>
        </div>

        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-text\">";
            // line 55
            echo ($context["entry_text"] ?? null);
            echo "</label>
          <div class=\"col-sm-10\">
            <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
            // line 57
            echo ($context["entry_text"] ?? null);
            echo "\" id=\"input-text\" class=\"form-control\">";
            echo ($context["text"] ?? null);
            echo "</textarea>
            ";
            // line 58
            if (($context["error_text"] ?? null)) {
                // line 59
                echo "            <div class=\"text-danger\">";
                echo ($context["error_text"] ?? null);
                echo "</div>
            ";
            }
            // line 61
            echo "          </div>
        </div>

        ";
            // line 64
            if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                // line 65
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                    // line 66
                    echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 67
                    echo (($__internal_compile_0 = $context["review_field"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_name"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_1 = $context["review_field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_name"] ?? null) : null);
                    echo "</label>
              <div class=\"col-sm-10\">
                ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 70
                        echo "                  <label class=\"radio-inline\">
                    ";
                        // line 71
                        if ((twig_get_attribute($this->env, $this->source, ($context["review_attributes"] ?? null), (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_id"] ?? null) : null), [], "array", true, true, false, 71) && ((($__internal_compile_3 = ($context["review_attributes"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(($__internal_compile_4 = $context["review_field"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_id"] ?? null) : null)] ?? null) : null) == $context["i"]))) {
                            // line 72
                            echo "                    <input type=\"radio\" name=\"review_attributes[";
                            echo (($__internal_compile_5 = $context["review_field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field_id"] ?? null) : null);
                            echo "]\" value=\"";
                            echo $context["i"];
                            echo "\" checked=\"checked\" />
                    ";
                            // line 73
                            echo $context["i"];
                            echo "
                    ";
                        } else {
                            // line 75
                            echo "                    <input type=\"radio\" name=\"review_attributes[";
                            echo (($__internal_compile_6 = $context["review_field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_id"] ?? null) : null);
                            echo "]\" value=\"";
                            echo $context["i"];
                            echo "\" />
                    ";
                            // line 76
                            echo $context["i"];
                            echo "
                    ";
                        }
                        // line 78
                        echo "                  </label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "              </div>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "        ";
            }
            // line 84
            echo "        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 85
            echo ($context["entry_status"] ?? null);
            echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
            // line 88
            if (($context["status"] ?? null)) {
                // line 89
                echo "              <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
              <option value=\"0\">";
                // line 90
                echo ($context["text_disabled"] ?? null);
                echo "</option>
              ";
            } else {
                // line 92
                echo "              <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
              <option value=\"0\" selected=\"selected\">";
                // line 93
                echo ($context["text_disabled"] ?? null);
                echo "</option>
              ";
            }
            // line 95
            echo "            </select>
          </div>
        </div>
      </form>

      ";
        }
        // line 101
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 102
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 105
        if (($context["customer_id"] ?? null)) {
            // line 106
            echo "   var customer_id = ";
            echo ($context["customer_id"] ?? null);
            echo ";
";
        } else {
            // line 108
            echo "   var customer_id = '';
";
        }
        // line 110
        echo "
\$('input[name=\\'customer\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/customerpartner/review/autocomplete&filter_customer=' +  encodeURIComponent(request),
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

    \$('input[name=\\'customer\\']').val(item['label']);
    \$('input[name=\\'customer_id\\']').val(item['value']);
    customer_id = item['value'];
  }
});

//--></script>
";
        // line 135
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 135,  339 => 110,  335 => 108,  329 => 106,  327 => 105,  321 => 102,  316 => 101,  308 => 95,  303 => 93,  298 => 92,  293 => 90,  288 => 89,  286 => 88,  280 => 85,  277 => 84,  274 => 83,  266 => 80,  259 => 78,  254 => 76,  247 => 75,  242 => 73,  235 => 72,  233 => 71,  230 => 70,  226 => 69,  219 => 67,  216 => 66,  211 => 65,  209 => 64,  204 => 61,  198 => 59,  196 => 58,  190 => 57,  185 => 55,  179 => 51,  173 => 49,  171 => 48,  167 => 47,  161 => 46,  154 => 44,  149 => 42,  139 => 38,  133 => 36,  131 => 35,  125 => 33,  123 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  89 => 22,  83 => 20,  81 => 19,  78 => 18,  67 => 15,  64 => 14,  60 => 13,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/review_form.twig", "");
    }
}
