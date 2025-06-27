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

/* __string_template__b1d79b5e15126756c23ffc5ae6c8f1856c90b958b4bce4ef42de493a4b5669ef */
class __TwigTemplate_d21e56e8c1cca0c56e9a9effba4f9f7ef0b65a5850be806c6d6a723baa644f2e extends Template
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
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-commission').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
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
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-id\">";
        // line 40
        echo ($context["entry_id"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_id\" value=\"";
        // line 41
        echo ($context["filter_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_id"] ?? null);
        echo "\" id=\"input-id\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 47
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 49
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span></span>
                </div>
              </div>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 53
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>

        <form action=\"";
        // line 58
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-commission\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                  <td class=\"text-center\">
                    ";
        // line 66
        if ((($context["sort"] ?? null) == "cc.id")) {
            // line 67
            echo "                    <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 69
            echo "                    <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                    ";
        }
        // line 71
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 73
        if ((($context["sort"] ?? null) == "cd.name")) {
            // line 74
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_category"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 76
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["entry_category"] ?? null);
            echo "</a>
                    ";
        }
        // line 78
        echo "                  </td>
                  <td class=\"text-center\">";
        // line 79
        echo ($context["entry_value"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 80
        echo ($context["entry_action"] ?? null);
        echo "</td>
                </tr>
              </thead>

              <tbody>
                ";
        // line 85
        if (($context["commission"] ?? null)) {
            // line 86
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commission"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 87
                echo "                  <tr>
                    <td style=\"text-align: center;\">
                      ";
                // line 89
                if ((($__internal_compile_0 = $context["result"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 90
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["result"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 92
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["result"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />
                      ";
                }
                // line 94
                echo "                    </td>
                    <td class=\"text-center\" >";
                // line 95
                echo (($__internal_compile_3 = $context["result"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">";
                // line 96
                echo (($__internal_compile_4 = $context["result"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">";
                // line 97
                echo (($__internal_compile_5 = $context["result"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null);
                echo "</td>
                    <td class=\"text-center\">
                      <a href=\"";
                // line 99
                echo (($__internal_compile_6 = $context["result"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["action"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["entry_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                ";
        } else {
            // line 104
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 105
            echo "No records founds";
            echo "</td>
                </tr>
                ";
        }
        // line 108
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 113
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 114
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#form input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});

function filter() {
  url = 'index.php?route=customerpartner/commission&user_token=";
        // line 128
        echo ($context["user_token"] ?? null);
        echo "';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_id = \$('input[name=\\'filter_id\\']').val();

  if (filter_id) {
    url += '&filter_id=' + encodeURIComponent(filter_id);
  }

  location = url;
}

// category
\$('input[name=\\'filter_name\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 149
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_name\\']').val(item['label']);
  }
});

//--></script>
";
        // line 167
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__b1d79b5e15126756c23ffc5ae6c8f1856c90b958b4bce4ef42de493a4b5669ef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 167,  347 => 149,  323 => 128,  306 => 114,  302 => 113,  295 => 108,  289 => 105,  286 => 104,  283 => 103,  271 => 99,  266 => 97,  262 => 96,  258 => 95,  255 => 94,  249 => 92,  243 => 90,  241 => 89,  237 => 87,  232 => 86,  230 => 85,  222 => 80,  218 => 79,  215 => 78,  207 => 76,  197 => 74,  195 => 73,  191 => 71,  183 => 69,  173 => 67,  171 => 66,  160 => 58,  152 => 53,  143 => 49,  138 => 47,  127 => 41,  123 => 40,  112 => 32,  107 => 29,  99 => 25,  96 => 24,  88 => 20,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b1d79b5e15126756c23ffc5ae6c8f1856c90b958b4bce4ef42de493a4b5669ef", "");
    }
}
