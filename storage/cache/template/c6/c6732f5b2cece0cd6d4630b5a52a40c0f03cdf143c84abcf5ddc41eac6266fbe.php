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

/* __string_template__50d1de42f1f5aa37945091a4e63be50a87edad9da46d3b3284a8726c4221e04d */
class __TwigTemplate_feb6d683cdfb32745fb822ed61f8d5592a3bc70797c3b7ea3b166e9627b85311 extends Template
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
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a> 
        ";
        // line 7
        echo "        ";
        // line 8
        echo "      </div>
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
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 40
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 46
        if ((($context["sort"] ?? null) == "name")) {
            // line 47
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 49
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 50
        echo "</td>
                      <td class=\"text-left\">";
        // line 51
        if ((($context["sort"] ?? null) == "author")) {
            // line 52
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 54
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        }
        // line 55
        echo "</td>
                      <td class=\"text-left\">";
        // line 56
        if ((($context["sort"] ?? null) == "version")) {
            // line 57
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 59
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        }
        // line 60
        echo "</td>
                      <td class=\"text-left\">";
        // line 61
        if ((($context["sort"] ?? null) == "status")) {
            // line 62
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 64
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 65
        echo "</td>
                      <td class=\"text-left\">";
        // line 66
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 67
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 69
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 70
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        if (($context["modifications"] ?? null)) {
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 77
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 78
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 78), ($context["selected"] ?? null))) {
                    // line 79
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 79);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 81
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 81);
                    echo "\" />
                        ";
                }
                // line 82
                echo "</td>
                      <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 83);
                echo "</td>
                      <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 84);
                echo "</td>
                      <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 85);
                echo "</td>
                      <td class=\"text-left\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "status", [], "any", false, false, false, 86);
                echo "</td>
                      <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 87);
                echo "</td>
                      <td class=\"text-right\">";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 89);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                } else {
                    // line 91
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                        ";
                }
                // line 93
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 94);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 96
                    echo "                        ";
                    // line 97
                    echo "                        ";
                }
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    ";
        } else {
            // line 101
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 102
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 105
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 110
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 111
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 116
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-center\"><a href=\"";
        // line 118
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__50d1de42f1f5aa37945091a4e63be50a87edad9da46d3b3284a8726c4221e04d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 125,  379 => 118,  374 => 116,  366 => 111,  362 => 110,  355 => 105,  349 => 102,  346 => 101,  343 => 100,  333 => 97,  331 => 96,  323 => 94,  320 => 93,  316 => 91,  308 => 89,  306 => 88,  302 => 87,  298 => 86,  294 => 85,  290 => 84,  286 => 83,  283 => 82,  277 => 81,  271 => 79,  269 => 78,  266 => 77,  261 => 76,  259 => 75,  252 => 71,  249 => 70,  241 => 69,  231 => 67,  229 => 66,  226 => 65,  218 => 64,  208 => 62,  206 => 61,  203 => 60,  195 => 59,  185 => 57,  183 => 56,  180 => 55,  172 => 54,  162 => 52,  160 => 51,  157 => 50,  149 => 49,  139 => 47,  137 => 46,  128 => 40,  121 => 36,  117 => 35,  110 => 31,  103 => 28,  95 => 24,  92 => 23,  84 => 19,  82 => 18,  76 => 14,  65 => 12,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__50d1de42f1f5aa37945091a4e63be50a87edad9da46d3b3284a8726c4221e04d", "");
    }
}
