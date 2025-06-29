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

/* __string_template__7b1886fcb140e04f45990526c8f9bcd50e43a973e0b2d4bb64604dc104023f53 */
class __TwigTemplate_096be14c87fc7c879cbf722079c2ce69b8f80715fe12a72246da58836da64339 extends Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-seller\">";
        // line 36
        echo ($context["entry_seller"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_seller\" value=\"";
        // line 37
        echo ($context["filter_seller"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_seller"] ?? null);
        echo "\" id=\"input-seller\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-author\">";
        // line 40
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 41
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 49
        if (($context["filter_status"] ?? null)) {
            // line 50
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 52
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 54
        echo "                  ";
        if (( !($context["filter_status"] ?? null) && (($context["filter_status"] ?? null) != null))) {
            // line 55
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 57
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 59
        echo "                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 62
        echo ($context["entry_createdate"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_createdate\" value=\"";
        // line 64
        echo ($context["filter_createdate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_createdate"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 73
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-center\">
                    ";
        // line 80
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 81
            echo "                      <a href=\"";
            echo ($context["sort_seller"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_seller"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 83
            echo "                      <a href=\"";
            echo ($context["sort_seller"] ?? null);
            echo "\">";
            echo ($context["column_seller"] ?? null);
            echo "</a>
                    ";
        }
        // line 84
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 86
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 87
            echo "                      <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 89
            echo "                      <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                    ";
        }
        // line 90
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 92
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 93
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 95
            echo "                      <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 96
        echo "</td>
                  <td class=\"text-center\">
                    ";
        // line 98
        if ((($context["sort"] ?? null) == "r.createdate")) {
            // line 99
            echo "                      <a href=\"";
            echo ($context["sort_createdate"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_createdate"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 101
            echo "                      <a href=\"";
            echo ($context["sort_createdate"] ?? null);
            echo "\">";
            echo ($context["column_createdate"] ?? null);
            echo "</a>
                    ";
        }
        // line 102
        echo "</td>
                  <td class=\"text-center\">";
        // line 103
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 107
        if (($context["reviews"] ?? null)) {
            // line 108
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 109
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 111
                if (twig_in_filter((($__internal_compile_0 = $context["review"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["review_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 112
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["review"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["review_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 114
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["review"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["review_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 115
                echo "</td>
                  <td class=\"text-center\">";
                // line 116
                echo (($__internal_compile_3 = $context["review"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 117
                echo (($__internal_compile_4 = $context["review"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["customer_name"] ?? null) : null);
                echo " aa</td>
                  <td class=\"text-center\">";
                // line 118
                echo (($__internal_compile_5 = $context["review"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 119
                echo (($__internal_compile_6 = $context["review"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["createdate"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\"><a href=\"";
                // line 120
                echo (($__internal_compile_7 = $context["review"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ";
        } else {
            // line 124
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 125
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 128
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 133
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 134
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=customerpartner/review&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_seller = \$('input[name=\\'filter_seller\\']').val();

\tif (filter_seller) {
\t\turl += '&filter_seller=' + encodeURIComponent(filter_seller);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tvar filter_createdate = \$('input[name=\\'filter_createdate\\']').val();

\tif (filter_createdate) {
\t\turl += '&filter_createdate=' + encodeURIComponent(filter_createdate);
\t}

\tlocation = url;
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script>
<script>
    \$('input[name=\\'filter_customer\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 179
        echo ($context["user_token"] ?? null);
        echo "&filter_customer=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_customer\\']').val(item['label']);
    }
  });

  \$('input[name=\\'filter_seller\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 199
        echo ($context["user_token"] ?? null);
        echo "&filter_seller=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_seller\\']').val(item['label']);
    }
  });
</script></div>
";
        // line 216
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7b1886fcb140e04f45990526c8f9bcd50e43a973e0b2d4bb64604dc104023f53";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 216,  471 => 199,  448 => 179,  407 => 141,  397 => 134,  393 => 133,  386 => 128,  380 => 125,  377 => 124,  374 => 123,  363 => 120,  359 => 119,  355 => 118,  351 => 117,  347 => 116,  344 => 115,  338 => 114,  332 => 112,  330 => 111,  326 => 109,  321 => 108,  319 => 107,  312 => 103,  309 => 102,  301 => 101,  291 => 99,  289 => 98,  285 => 96,  277 => 95,  267 => 93,  265 => 92,  261 => 90,  253 => 89,  243 => 87,  241 => 86,  237 => 84,  229 => 83,  219 => 81,  217 => 80,  207 => 73,  200 => 69,  190 => 64,  185 => 62,  180 => 59,  174 => 57,  168 => 55,  165 => 54,  159 => 52,  153 => 50,  151 => 49,  145 => 46,  135 => 41,  131 => 40,  123 => 37,  119 => 36,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7b1886fcb140e04f45990526c8f9bcd50e43a973e0b2d4bb64604dc104023f53", "");
    }
}
