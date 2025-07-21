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

/* customerpartner/reason_list.twig */
class __TwigTemplate_23afccbeec52189733e25b8a34a56ecc7d90471d9268dc7f761abc93d78c6816 extends Template
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
          <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-reason').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-5\">
              <div class=\"form-group\">
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-5\">
              <div class=\"form-group\">
                <select name=\"filter_status\" class=\"form-control\" id=\"input-status\">
                  <option value=\"*\"></option>
                  ";
        // line 45
        if (($context["filter_status"] ?? null)) {
            // line 46
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 48
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 50
        echo "                  ";
        if (( !(null === ($context["filter_status"] ?? null)) &&  !($context["filter_status"] ?? null))) {
            // line 51
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 55
        echo "                </select>
              </div>
            </div>

            <div class=\"col-sm-1\">
              <div class=\"form-group\">
                <a  id=\"button-filter\" class=\"btn btn-primary pull-right\">";
        // line 61
        echo ($context["button_filter"] ?? null);
        echo "</a>
              </div>
            </div>
            <div class=\"col-sm-1\">
              <div class=\"form-group\">
                <a id=\"button-filter-clear\" class=\"btn btn-danger pull-right\">";
        // line 66
        echo ($context["button_clear_filter"] ?? null);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 71
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-reason\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-center\">";
        // line 77
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 78
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 80
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 81
        echo "</td>
                  <td class=\"text-center\">";
        // line 82
        echo ($context["entry_status"] ?? null);
        echo "</td>

                  <td class=\"text-center\">";
        // line 84
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 88
        if ((array_key_exists("reasons", $context) && ($context["reasons"] ?? null))) {
            // line 89
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reasons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 90
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 91
                if (twig_in_filter((($__internal_compile_2 = $context["reason"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["reason_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 92
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_3 = $context["reason"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["reason_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 94
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_4 = $context["reason"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["reason_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 95
                echo "</td>
                  <td class=\"text-center\">";
                // line 96
                echo (($__internal_compile_5 = $context["reason"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["title"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 97
                echo (((($__internal_compile_6 = $context["reason"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null)) ? (($context["text_enabled"] ?? null)) : (($context["text_disabled"] ?? null)));
                echo "</td>
                  <td class=\"text-center\"><a href=\"";
                // line 98
                echo (($__internal_compile_7 = $context["reason"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                ";
        } else {
            // line 102
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 103
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 106
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 111
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 112
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-filter-clear').on('click', clear_inputs);

  function clear_inputs() {
    url = 'index.php?route=customerpartner/reason&user_token=";
        // line 121
        echo ($context["user_token"] ?? null);
        echo "';
    location = url;
  }

  \$('#button-filter').on('click', function() {
\turl = 'index.php?route=customerpartner/reason&user_token=";
        // line 126
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
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
        // line 152
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

  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 172
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
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
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
</script></div>
";
        // line 189
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/reason_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 189,  371 => 172,  348 => 152,  319 => 126,  311 => 121,  299 => 112,  295 => 111,  288 => 106,  282 => 103,  279 => 102,  276 => 101,  265 => 98,  261 => 97,  257 => 96,  254 => 95,  248 => 94,  242 => 92,  240 => 91,  237 => 90,  232 => 89,  230 => 88,  223 => 84,  218 => 82,  215 => 81,  207 => 80,  197 => 78,  195 => 77,  186 => 71,  178 => 66,  170 => 61,  162 => 55,  156 => 53,  150 => 51,  147 => 50,  141 => 48,  135 => 46,  133 => 45,  120 => 37,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/reason_list.twig", "");
    }
}
