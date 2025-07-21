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

/* account/customerpartner/review_list.twig */
class __TwigTemplate_357bbf8306de84cc28fe8296851465f5ee72d7b660fe66f551197a0704abf4bd extends Template
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
  .review-filter label[for=\"input-status\"] {
    margin-left:15%;
  }
  .review-filter .input-group-btn > .button {
    line-height: 20px;
  }
  @media only screen and (max-width: 767px) {
    #input-status {
      margin-left: 0;
      margin-right: 0;
      width: 95%;
    }
    .oc2 .form-horizontal .form-group label {
      width: auto;
    }
    .oc2 fieldset label + input.form-control, #input-status, .oc2 .form-horizontal .form-group label + div {
      width: 95%;
      float: none;
      /* check */
    }
    .pull-right {
      float: right;
      /* check */
    }
    #content #button-filter {
      margin: 15px 5%;
    }
    .review-filter label[for=\"input-status\"] {
      margin-left: 0;
    }
    .review-filter .date > input {
      min-width: auto;
    }
    .table-responsive {
      overflow: auto;
    }
  }
  @media only screen and (max-width: 480px) {
    #input-status {
      margin-left: 0;
      margin-right: 0;
      width: 100%;
    }
    button[onclick=\"clearfilter();\"] {
        margin-top: 0px !important;
    }
    fieldset .table-responsive {
      overflow: auto !important;
    }
    .pull-right {
      float: none !important;
      /* check */
    }
    #content #button-filter {
      margin-left: 0;
      margin-right: 0;
    }
  }
  @media only screen and (min-width: 480px) {
    .col-sm-4{
      width: 33.33%;
    }
    .review-filter .row:first-child{
      display: inline-flex;
    }
  }
</style>
  <ul class=\"breadcrumb\">
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 80
            echo "      <li>
        <a href=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 81);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 81);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  </ul>
  ";
        // line 85
        if (($context["error_warning"] ?? null)) {
            // line 86
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 88
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 89
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 91
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 92
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 93
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 94
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 95
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 96
            echo "    ";
        } else {
            // line 97
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 98
            echo "    ";
        }
        // line 99
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 100
        if (($context["chkIsPartner"] ?? null)) {
            // line 101
            echo "      <h1>";
            echo ($context["heading_title"] ?? null);
            echo "
        <div class=\"pull-right\">
          ";
            // line 103
            if (($context["marketplace_sellereditreview"] ?? null)) {
                // line 104
                echo "            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
          ";
            }
            // line 106
            echo "        </div>
      </h1>
      <div class=\"well\">
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
            // line 112
            echo ($context["entry_customer"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
            // line 113
            echo ($context["filter_customer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer"] ?? null);
            echo "\" id=\"input-author\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
            // line 118
            echo ($context["entry_status"] ?? null);
            echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"*\"></option>
                ";
            // line 121
            if (($context["filter_status"] ?? null)) {
                // line 122
                echo "                <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 124
                echo "                <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                ";
            }
            // line 126
            echo "                ";
            if (( !($context["filter_status"] ?? null) &&  !(null === ($context["filter_status"] ?? null)))) {
                // line 127
                echo "                <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            } else {
                // line 129
                echo "                <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                ";
            }
            // line 131
            echo "              </select>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
            // line 136
            echo ($context["entry_createdate"] ?? null);
            echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_createdate\" value=\"";
            // line 138
            echo ($context["filter_createdate"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_createdate"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
            // line 143
            echo ($context["button_filter"] ?? null);
            echo "</button>
            <button type=\"button\" onclick=\"clearfilter();\" class=\"btn btn-danger pull-right\" style=\"margin-right:5%;\"><i class=\"fa fa-search\"></i> ";
            // line 144
            echo ($context["button_clear_filter"] ?? null);
            echo "</button>
          </div>
        </div>
      </div>
      <form action=\"";
            // line 148
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                <td class=\"text-left\">";
            // line 154
            if ((((($context["sort"] ?? null) == "r.author") || (($context["sort"] ?? null) == "c2f.customer_id")) || (($context["sort"] ?? null) == "c2f.createdate"))) {
                // line 155
                echo "                  <a href=\"";
                echo ($context["sort_customer"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_customer"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 157
                echo "                  <a href=\"";
                echo ($context["sort_customer"] ?? null);
                echo "\">";
                echo ($context["column_customer"] ?? null);
                echo "</a>
                  ";
            }
            // line 158
            echo "</td>
                <td class=\"text-left\">";
            // line 159
            if ((($context["sort"] ?? null) == "r.status")) {
                // line 160
                echo "                  <a href=\"";
                echo ($context["sort_status"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 162
                echo "                  <a href=\"";
                echo ($context["sort_status"] ?? null);
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a>
                  ";
            }
            // line 163
            echo "</td>
                <td class=\"text-left\">";
            // line 164
            if ((($context["sort"] ?? null) == "r.createdate")) {
                // line 165
                echo "                  <a href=\"";
                echo ($context["sort_createdate"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_createdate"] ?? null);
                echo "</a>
                  ";
            } else {
                // line 167
                echo "                  <a href=\"";
                echo ($context["sort_createdate"] ?? null);
                echo "\">";
                echo ($context["column_createdate"] ?? null);
                echo "</a>
                  ";
            }
            // line 168
            echo "</td>
                <td class=\"text-right\">";
            // line 169
            echo ($context["column_action"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 173
            if (($context["reviews"] ?? null)) {
                // line 174
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 175
                    echo "              <tr>
                <td class=\"text-center\">";
                    // line 176
                    if (twig_in_filter((($__internal_compile_0 = $context["review"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["review_id"] ?? null) : null), ($context["selected"] ?? null))) {
                        // line 177
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_1 = $context["review"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["review_id"] ?? null) : null);
                        echo "\" checked=\"checked\" />
                  ";
                    } else {
                        // line 179
                        echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_2 = $context["review"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["review_id"] ?? null) : null);
                        echo "\" />
                  ";
                    }
                    // line 180
                    echo "</td>
                <td class=\"text-left\">";
                    // line 181
                    echo (($__internal_compile_3 = $context["review"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["customer_name"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 182
                    echo (($__internal_compile_4 = $context["review"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 183
                    echo (($__internal_compile_5 = $context["review"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["createdate"] ?? null) : null);
                    echo "</td>
                <td class=\"text-center\">
                  ";
                    // line 185
                    if ((($__internal_compile_6 = $context["review"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["approve"] ?? null) : null)) {
                        // line 186
                        echo "                    <a href=\"";
                        echo (($__internal_compile_7 = $context["review"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["approve"] ?? null) : null);
                        echo "\" class=\"wk-btn btn btn-success button\">
                      <i class=\"fa fa-thumbs-o-up\"></i>
                    </a>
                    <a href=\"";
                        // line 189
                        echo (($__internal_compile_8 = $context["review"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["edit"] ?? null) : null);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"wk-btn btn btn-primary button\">
                      <i class=\"fa fa-pencil\"></i>
                    </a>                      
                  ";
                    } else {
                        // line 193
                        echo "                    <a href=\"";
                        echo (($__internal_compile_9 = $context["review"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["edit"] ?? null) : null);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"wk-btn btn btn-primary button\">
                      <i class=\"fa fa-pencil\"></i>
                    </a>
                  ";
                    }
                    // line 197
                    echo "                </td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "              ";
            } else {
                // line 201
                echo "              <tr>
                <td class=\"text-center\" colspan=\"5\">";
                // line 202
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
              ";
            }
            // line 205
            echo "            </tbody>
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 210
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 211
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 214
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["warning_become_seller"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button> </div>
      ";
        }
        // line 216
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 217
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--

function clearfilter() {
  url = 'index.php?route=account/customerpartner/review';
  location = url;
}

\$('#button-filter').on('click', function() {
url = 'index.php?route=account/customerpartner/review';

var filter_customer = \$('input[name=\\'filter_customer\\']').val();

if (filter_customer) {
  url += '&filter_customer=' + encodeURIComponent(filter_customer);
}

var filter_status = \$('select[name=\\'filter_status\\']').val();

if (filter_status != '*') {
  url += '&filter_status=' + encodeURIComponent(filter_status);
}

var filter_createdate = \$('input[name=\\'filter_createdate\\']').val();

if (filter_createdate) {
  url += '&filter_createdate=' + encodeURIComponent(filter_createdate);
}

location = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
pickTime: false
});
//--></script>
<script>
  \$('input[name=\\'filter_customer\\']').autocomplete({
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
    \$('input[name=\\'filter_customer\\']').val(item['label']);
  }
});
</script>
";
        // line 276
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 276,  505 => 217,  500 => 216,  494 => 214,  488 => 211,  484 => 210,  477 => 205,  471 => 202,  468 => 201,  465 => 200,  457 => 197,  447 => 193,  438 => 189,  431 => 186,  429 => 185,  424 => 183,  420 => 182,  416 => 181,  413 => 180,  407 => 179,  401 => 177,  399 => 176,  396 => 175,  391 => 174,  389 => 173,  382 => 169,  379 => 168,  371 => 167,  361 => 165,  359 => 164,  356 => 163,  348 => 162,  338 => 160,  336 => 159,  333 => 158,  325 => 157,  315 => 155,  313 => 154,  304 => 148,  297 => 144,  293 => 143,  283 => 138,  278 => 136,  271 => 131,  265 => 129,  259 => 127,  256 => 126,  250 => 124,  244 => 122,  242 => 121,  236 => 118,  226 => 113,  222 => 112,  214 => 106,  206 => 104,  204 => 103,  198 => 101,  196 => 100,  189 => 99,  186 => 98,  183 => 97,  180 => 96,  177 => 95,  174 => 94,  171 => 93,  169 => 92,  164 => 91,  158 => 89,  155 => 88,  149 => 86,  147 => 85,  144 => 84,  133 => 81,  130 => 80,  126 => 79,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/review_list.twig", "");
    }
}
