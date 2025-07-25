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

/* customerpartner/transaction.twig */
class __TwigTemplate_691303cbeadc00e18e5e6db06af73990cf6df6f86e28d2febc98e5dec0ad3ea9 extends Template
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
        <!-- <a href=\"";
        // line 6
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> -->
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-transaction').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            <div class=\"col-sm-4\">
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

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-amount\">";
        // line 45
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_amount\" value=\"";
        // line 46
        echo ($context["filter_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 52
        echo ($context["entry_seller"] ?? null);
        echo "</label>
                <div class='input-group'>
                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 54
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_seller"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span>
                    </span>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-details\">";
        // line 61
        echo ($context["entry_details"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_details\" value=\"";
        // line 62
        echo ($context["filter_details"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_details"] ?? null);
        echo "\" id=\"input-details\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date\">";
        // line 68
        echo ($context["entry_date"] ?? null);
        echo "</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' name=\"filter_date\" value=\"";
        // line 70
        echo ($context["filter_date"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date"] ?? null);
        echo "\" id=\"input-date\" class=\"form-control date\" />
                    <span class=\"input-group-addon\">
                      <i class=\"fa fa-calendar\"></i>
                    </span>
                </div>
              </div>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 76
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>

          </div>
        </div>

        <form action=\"";
        // line 82
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-transaction\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
              <tr>
              <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>

                <td class=\"text-center\">
                  ";
        // line 90
        if ((($context["sort"] ?? null) == "ct.id")) {
            // line 91
            echo "                  <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 93
            echo "                  <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\">";
            echo ($context["entry_id"] ?? null);
            echo "</a>
                  ";
        }
        // line 95
        echo "                </td>
                <td class=\"text-center\">
                  ";
        // line 97
        if ((($context["sort"] ?? null) == "c.firstname")) {
            // line 98
            echo "                  <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_seller"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 100
            echo "                  <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["entry_seller"] ?? null);
            echo "</a>
                  ";
        }
        // line 102
        echo "                </td>

                <td class=\"text-center\">
                  ";
        // line 105
        if ((($context["sort"] ?? null) == "ct.amount")) {
            // line 106
            echo "                  <a href=\"";
            echo ($context["sort_amount"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_amount"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 108
            echo "                  <a href=\"";
            echo ($context["sort_amount"] ?? null);
            echo "\">";
            echo ($context["entry_amount"] ?? null);
            echo "</a>
                  ";
        }
        // line 110
        echo "                </td>

                <td class=\"text-center\">
                  ";
        // line 113
        if ((($context["sort"] ?? null) == "ct.details")) {
            // line 114
            echo "                  <a href=\"";
            echo ($context["sort_details"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_details"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 116
            echo "                  <a href=\"";
            echo ($context["sort_details"] ?? null);
            echo "\">";
            echo ($context["entry_details"] ?? null);
            echo "</a>
                  ";
        }
        // line 118
        echo "                </td>

    
                <td class=\"text-center\">
                  ";
        // line 122
        if ((($context["sort"] ?? null) == "ct.date_added")) {
            // line 123
            echo "                  <a href=\"";
            echo ($context["sort_date"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_date"] ?? null);
            echo "</a>
                  ";
        } else {
            // line 125
            echo "                  <a href=\"";
            echo ($context["sort_date"] ?? null);
            echo "\">";
            echo ($context["entry_date"] ?? null);
            echo "</a>
                  ";
        }
        // line 127
        echo "                </td>
                
              </tr>
            </thead>

            <tbody>
              ";
        // line 133
        if (($context["transactions"] ?? null)) {
            // line 134
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 135
                echo "                <tr>
                  <td style=\"text-align: center;\">
                    ";
                // line 137
                if ((($__internal_compile_0 = $context["result"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 138
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["result"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 140
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["result"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 142
                echo "                  </td>
                  <td class=\"text-center\" >";
                // line 143
                echo (($__internal_compile_3 = $context["result"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 144
                echo (($__internal_compile_4 = $context["result"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 145
                echo (($__internal_compile_5 = $context["result"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 146
                echo (($__internal_compile_6 = $context["result"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["details"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">";
                // line 147
                echo (($__internal_compile_7 = $context["result"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date"] ?? null) : null);
                echo "</td>
                  <td class=\"text-center\">
                    ";
                // line 149
                if (((($__internal_compile_8 = $context["result"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["details"] ?? null) : null) == "Paypal")) {
                    // line 150
                    echo "                      <a href=\"";
                    echo (($__internal_compile_9 = $context["result"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["invoice"] ?? null) : null);
                    echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_invoice_print"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                    ";
                }
                // line 152
                echo "                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "              ";
        } else {
            // line 156
            echo "              <tr>
                <td class=\"text-center\" colspan=\"7\">";
            // line 157
            echo "No records founds";
            echo "</td>
              </tr>
              ";
        }
        // line 160
        echo "            </tbody>
          </table>
        </div>
      </form>

      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 166
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 167
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

\$('.date').datetimepicker({
  pickTime: false,
  format:\"YYYY-MM-DD\"
});

function filter() {

  url = 'index.php?route=customerpartner/transaction&user_token=";
        // line 186
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

  var filter_date = \$('input[name=\\'filter_date\\']').val();

  if (filter_date) {
    url += '&filter_date=' + encodeURIComponent(filter_date);
  }

  var filter_details = \$('input[name=\\'filter_details\\']').val();

  if (filter_details) {
    url += '&filter_details=' + encodeURIComponent(filter_details);
  }

  var filter_amount = \$('input[name=\\'filter_amount\\']').val();

  if (filter_amount) {
    url += '&filter_amount=' + encodeURIComponent(filter_amount);
  }

  location = url;
}

\$('input[name=\\'filter_name\\']').autocomplete({
  delay: 0,
  source: function(request, response) {

    \$.ajax({
      url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 226
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.name,
            value: item.id
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'filter_name\\']').val(item.label);

    return false;
  },
  focus: function(item) {
      return false;
  }
});
//--></script>
";
        // line 248
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 248,  503 => 226,  460 => 186,  438 => 167,  434 => 166,  426 => 160,  420 => 157,  417 => 156,  414 => 155,  406 => 152,  398 => 150,  396 => 149,  391 => 147,  387 => 146,  383 => 145,  379 => 144,  375 => 143,  372 => 142,  366 => 140,  360 => 138,  358 => 137,  354 => 135,  349 => 134,  347 => 133,  339 => 127,  331 => 125,  321 => 123,  319 => 122,  313 => 118,  305 => 116,  295 => 114,  293 => 113,  288 => 110,  280 => 108,  270 => 106,  268 => 105,  263 => 102,  255 => 100,  245 => 98,  243 => 97,  239 => 95,  231 => 93,  221 => 91,  219 => 90,  208 => 82,  199 => 76,  188 => 70,  183 => 68,  172 => 62,  168 => 61,  156 => 54,  151 => 52,  140 => 46,  136 => 45,  127 => 41,  123 => 40,  112 => 32,  107 => 29,  99 => 25,  96 => 24,  88 => 20,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/transaction.twig", "");
    }
}
