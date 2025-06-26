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

/* __string_template__aec8117b34f4858471e7005fba3c8a030bab5e131072ca9e03c27978750cf80c */
class __TwigTemplate_ae37129d367fa31765247f6da99875b493776d7aa3c2540ce721345a672a424f extends Template
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
        echo "') ? \$('#form-reviewfield').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
                <label class=\"control-label\" for=\"input-field\">";
        // line 36
        echo ($context["entry_field"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_field\" value=\"";
        // line 37
        echo ($context["filter_field"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_field"] ?? null);
        echo "\" id=\"input-field\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 42
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
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
        if (( !($context["filter_status"] ?? null) && (($context["filter_status"] ?? null) != null))) {
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
              <button type=\"button\" onclick=\"clearfilter();\" class=\"btn btn-danger pull-right\" ><i class=\"fa fa-search\"></i> ";
        // line 57
        echo ($context["button_clearfilter"] ?? null);
        echo "</button>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\" style=\"margin-right: 5%;\"><i class=\"fa fa-search\"></i> ";
        // line 58
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 62
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-reviewfield\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-center\">";
        // line 68
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 69
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 74
        if (($context["reviewfields"] ?? null)) {
            // line 75
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviewfields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reviewfield"]) {
                // line 76
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 78
                if (twig_in_filter((($__internal_compile_0 = $context["reviewfield"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["reviewfield_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 79
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["reviewfield"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["reviewfield_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 81
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["reviewfield"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["reviewfield_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 82
                echo "</td>
                  <td class=\"text-center\">";
                // line 83
                echo (($__internal_compile_3 = $context["reviewfield"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 84
                echo (($__internal_compile_4 = $context["reviewfield"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\"><a href=\"";
                // line 85
                echo (($__internal_compile_5 = $context["reviewfield"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reviewfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                ";
        } else {
            // line 89
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 90
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 93
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 98
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 99
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  function filter() {
  \turl = 'index.php?route=customerpartner/reviewfield&user_token=";
        // line 106
        echo ($context["user_token"] ?? null);
        echo "';

  \tvar filter_field = \$('input[name=\\'filter_field\\']').val();

  \tif (filter_field) {
  \t\turl += '&filter_field=' + encodeURIComponent(filter_field);
  \t}

  \tvar filter_status = \$('select[name=\\'filter_status\\']').val();

  \tif (filter_status != '*') {
  \t\turl += '&filter_status=' + encodeURIComponent(filter_status);
  \t}

  \tlocation = url;
  }

  function clearfilter() {
  \turl = 'index.php?route=customerpartner/reviewfield&user_token=";
        // line 124
        echo ($context["user_token"] ?? null);
        echo "';
  \tlocation = url;
  }
//--></script>
  </div>
";
        // line 129
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__aec8117b34f4858471e7005fba3c8a030bab5e131072ca9e03c27978750cf80c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 129,  308 => 124,  287 => 106,  277 => 99,  273 => 98,  266 => 93,  260 => 90,  257 => 89,  254 => 88,  243 => 85,  239 => 84,  235 => 83,  232 => 82,  226 => 81,  220 => 79,  218 => 78,  214 => 76,  209 => 75,  207 => 74,  200 => 70,  196 => 69,  192 => 68,  183 => 62,  176 => 58,  172 => 57,  168 => 55,  162 => 53,  156 => 51,  153 => 50,  147 => 48,  141 => 46,  139 => 45,  133 => 42,  123 => 37,  119 => 36,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aec8117b34f4858471e7005fba3c8a030bab5e131072ca9e03c27978750cf80c", "");
    }
}
