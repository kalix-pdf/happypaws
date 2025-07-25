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

/* account/customerpartner/information_list.twig */
class __TwigTemplate_bab37ee9e2098c62b9f7362598215ae80500ca2cd889be0f0d8c1f6cae031aac extends Template
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
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li>
        <a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
  ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\"></i>";
            // line 16
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-success\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 21
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
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
            echo ($context["heading_title"] ?? null);
            echo "
        <div class=\"pull-right\">
          <a href=\"";
            // line 35
            echo ($context["add"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 36
            echo ($context["button_delete"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo ($context["text_confirm"] ?? null);
            echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
      </h1>
            <div class=\"well\">
        <div class=\"row\">
          <div class=\"col-sm-5\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"filter_name\" value=\"";
            // line 43
            echo ($context["filter_name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"col-sm-5\">
            <div class=\"form-group\">
              <select name=\"filter_status\" class=\"form-control\" id=\"input-status\">
                <option value=\"*\">";
            // line 50
            echo ($context["column_status"] ?? null);
            echo "</option>
                ";
            // line 51
            if (($context["filter_status"] ?? null)) {
                // line 52
                echo "                <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 54
                echo "                <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            }
            // line 56
            echo "                ";
            if (( !(null === ($context["filter_status"] ?? null)) &&  !($context["filter_status"] ?? null))) {
                // line 57
                echo "                <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 59
                echo "                <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            }
            // line 61
            echo "              </select>
            </div>
          </div>

          <div class=\"col-sm-1\">
            <div class=\"form-group\">
              <a onclick=\"filter();\" class=\"btn btn-primary pull-right\">";
            // line 67
            echo ($context["button_filter"] ?? null);
            echo "</a>
            </div>
          </div>
          <div class=\"col-sm-1\">
            <div class=\"form-group\">
              <a onclick=\"clearfilter();\" class=\"btn btn-danger pull-right\">";
            // line 72
            echo ($context["button_clear_filter"] ?? null);
            echo "</a>
            </div>
          </div>
        </div>
      </div>
      <form action=\"";
            // line 77
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                <td class=\"text-left\">";
            // line 83
            if ((($context["sort"] ?? null) == "id.title")) {
                // line 84
                echo "                  <a href=\"";
                echo ($context["sort_title"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_title"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 86
                echo "                  <a href=\"";
                echo ($context["sort_title"] ?? null);
                echo "\">";
                echo ($context["column_title"] ?? null);
                echo "</a>
                  ";
            }
            // line 87
            echo "</td>
                <td class=\"text-left\">";
            // line 88
            echo ($context["entry_status"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 89
            if ((($context["sort"] ?? null) == "i.sort_order")) {
                // line 90
                echo "                  <a href=\"";
                echo ($context["sort_sort_order"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_sort_order"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 92
                echo "                  <a href=\"";
                echo ($context["sort_sort_order"] ?? null);
                echo "\">";
                echo ($context["column_sort_order"] ?? null);
                echo "</a>
                  ";
            }
            // line 93
            echo "</td>
                <td class=\"text-right\">";
            // line 94
            echo ($context["column_action"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 98
            if ((array_key_exists("informations", $context) && ($context["informations"] ?? null))) {
                // line 99
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 100
                    echo "              <tr>
                <td class=\"text-center\">";
                    // line 101
                    if (twig_in_filter((($__internal_compile_0 = $context["information"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["information_id"] ?? null) : null), ($context["selected"] ?? null))) {
                        // line 102
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_1 = $context["information"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["information_id"] ?? null) : null);
                        echo "\" checked=\"checked\" />
                  ";
                    } else {
                        // line 104
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_2 = $context["information"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["information_id"] ?? null) : null);
                        echo "\" />
                  ";
                    }
                    // line 105
                    echo "</td>
                <td class=\"text-left\">";
                    // line 106
                    echo (($__internal_compile_3 = $context["information"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["title"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 107
                    echo (((($__internal_compile_4 = $context["information"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null)) ? (($context["text_enabled"] ?? null)) : (($context["text_disabled"] ?? null)));
                    echo "</td>
                <td class=\"text-right\">";
                    // line 108
                    echo (($__internal_compile_5 = $context["information"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sort_order"] ?? null) : null);
                    echo "</td>
                <td class=\"text-right\"><a href=\"";
                    // line 109
                    echo (($__internal_compile_6 = $context["information"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["edit"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "              ";
            } else {
                // line 113
                echo "              <tr>
                <td class=\"text-center\" colspan=\"5\">";
                // line 114
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
              ";
            }
            // line 117
            echo "            </tbody>
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 122
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 123
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 126
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["warning_become_seller"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button> </div>
      ";
        }
        // line 128
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 129
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--

function filter() {
  url = 'index.php?route=account/customerpartner/information';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  location = url;
}

function clearfilter() {
    url = 'index.php?route=account/customerpartner/information';
    location = url;
  }
//--></script>
";
        // line 156
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/information_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 156,  381 => 129,  376 => 128,  370 => 126,  364 => 123,  360 => 122,  353 => 117,  347 => 114,  344 => 113,  341 => 112,  330 => 109,  326 => 108,  322 => 107,  318 => 106,  315 => 105,  309 => 104,  303 => 102,  301 => 101,  298 => 100,  293 => 99,  291 => 98,  284 => 94,  281 => 93,  273 => 92,  263 => 90,  261 => 89,  257 => 88,  254 => 87,  246 => 86,  236 => 84,  234 => 83,  225 => 77,  217 => 72,  209 => 67,  201 => 61,  195 => 59,  189 => 57,  186 => 56,  180 => 54,  174 => 52,  172 => 51,  168 => 50,  156 => 43,  144 => 36,  138 => 35,  132 => 33,  130 => 32,  123 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  103 => 24,  98 => 23,  93 => 21,  89 => 19,  86 => 18,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/information_list.twig", "");
    }
}
