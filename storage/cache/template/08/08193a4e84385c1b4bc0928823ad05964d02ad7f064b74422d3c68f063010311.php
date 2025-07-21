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

/* customerpartner/mail_list.twig */
class __TwigTemplate_65c969c9084af92b8429f077b52a9db96964dfd49bc0d202bddbc1998cd125dd extends Template
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
        <button id=\"btn-clone\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_clone"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-clone\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-transaction').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-id\">";
        // line 41
        echo ($context["entry_id"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_id\" value=\"";
        // line 42
        echo ($context["filter_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_id"] ?? null);
        echo "\" id=\"input-id\" class=\"form-control\" />
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-message\">";
        // line 46
        echo ($context["entry_message"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_message\" value=\"";
        // line 47
        echo ($context["filter_message"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\" />
              </div>

            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 54
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 55
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-subject\">";
        // line 61
        echo ($context["entry_subject"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_subject\" value=\"";
        // line 62
        echo ($context["filter_subject"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subject"] ?? null);
        echo "\" id=\"input-subject\" class=\"form-control\" />
              </div>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 64
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>

        <form action=\"";
        // line 69
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-transaction\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
              <tr>
              <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                <td class=\"text-center\">
                  ";
        // line 77
        if ((($context["sort"] ?? null) == "id")) {
            // line 78
            echo "                  <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 80
            echo "                  <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                  ";
        }
        // line 82
        echo "                </td>
                <td class=\"text-center\">
                  ";
        // line 84
        if ((($context["sort"] ?? null) == "name")) {
            // line 85
            echo "                  <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 87
            echo "                  <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</a>
                  ";
        }
        // line 89
        echo "                </td>

                <td class=\"text-center\">
                  ";
        // line 92
        if ((($context["sort"] ?? null) == "subject")) {
            // line 93
            echo "                  <a href=\"";
            echo ($context["sort_subject"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_subject"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 95
            echo "                  <a href=\"";
            echo ($context["sort_subject"] ?? null);
            echo "\">";
            echo ($context["entry_subject"] ?? null);
            echo "</a>
                  ";
        }
        // line 97
        echo "                </td>

                <td class=\"text-center\">
                  ";
        // line 100
        if ((($context["sort"] ?? null) == "message")) {
            // line 101
            echo "                  <a href=\"";
            echo ($context["sort_message"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_message"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 103
            echo "                  <a href=\"";
            echo ($context["sort_message"] ?? null);
            echo "\">";
            echo ($context["entry_message"] ?? null);
            echo "</a>
                  ";
        }
        // line 105
        echo "                </td>

                <td class=\"text-center\">";
        // line 107
        echo ($context["entry_action"] ?? null);
        echo "</td>
              </tr>
            </thead>

            <tbody>
              ";
        // line 112
        if (($context["mails"] ?? null)) {
            // line 113
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 114
                echo "                <tr>
                  <td style=\"text-align: center;\">
                    ";
                // line 116
                if ((($__internal_compile_0 = $context["result"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 117
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["result"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 119
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["result"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 121
                echo "                  </td>
                  <td class=\"text-center\" >";
                // line 122
                echo (($__internal_compile_3 = $context["result"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 123
                echo (($__internal_compile_4 = $context["result"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 124
                echo (($__internal_compile_5 = $context["result"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["subject"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 125
                echo (($__internal_compile_6 = $context["result"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["message"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">
                      <a href=\"";
                // line 127
                echo (($__internal_compile_7 = $context["result"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["action"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>

                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "              ";
        } else {
            // line 133
            echo "              <tr>
                <td class=\"text-center\" colspan=\"6\">";
            // line 134
            echo ($context["entry_no_records"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 137
        echo "            </tbody>
          </table>
        </div>
      </form>

      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 143
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 144
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#form input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});

\$('#btn-clone').on('click', function() {
  if(confirm('";
        // line 157
        echo ($context["text_confirm"] ?? null);
        echo "')) {
    location = 'index.php?route=customerpartner/mails/clone&user_token=";
        // line 158
        echo ($context["user_token"] ?? null);
        echo "';
  }
});


function filter() {

  url = 'index.php?route=customerpartner/mails&user_token=";
        // line 165
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

  var filter_subject = \$('input[name=\\'filter_subject\\']').val();

  if (filter_subject) {
    url += '&filter_subject=' + encodeURIComponent(filter_subject);
  }

  var filter_message = \$('input[name=\\'filter_message\\']').val();

  if (filter_message) {
    url += '&filter_message=' + encodeURIComponent(filter_message);
  }

  location = url;
}
//--></script>
";
        // line 194
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/mail_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 194,  419 => 165,  409 => 158,  405 => 157,  389 => 144,  385 => 143,  377 => 137,  371 => 134,  368 => 133,  365 => 132,  352 => 127,  347 => 125,  343 => 124,  339 => 123,  335 => 122,  332 => 121,  326 => 119,  320 => 117,  318 => 116,  314 => 114,  309 => 113,  307 => 112,  299 => 107,  295 => 105,  287 => 103,  277 => 101,  275 => 100,  270 => 97,  262 => 95,  252 => 93,  250 => 92,  245 => 89,  237 => 87,  227 => 85,  225 => 84,  221 => 82,  213 => 80,  203 => 78,  201 => 77,  190 => 69,  182 => 64,  175 => 62,  171 => 61,  160 => 55,  156 => 54,  144 => 47,  140 => 46,  131 => 42,  127 => 41,  116 => 33,  111 => 30,  103 => 26,  100 => 25,  92 => 21,  90 => 20,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/mail_list.twig", "");
    }
}
