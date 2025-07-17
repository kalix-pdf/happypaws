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

/* account/customerpartner/transaction.twig */
class __TwigTemplate_cea210271469d76c8c080f563fde22f0de7130321ad663893b7965e76d31ba66 extends Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["separate_column_left"] ?? null);
        echo "
";
        // line 3
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 4
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 6
            echo "  <div class=\"container\">
";
        }
        // line 8
        echo "<style>
  table{
    color: black;
  }
</style>
  <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>

  <div class=\"row\">";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "
  ";
        // line 28
        if (($context["error_warning"] ?? null)) {
            // line 29
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 31
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 32
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"> </i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 34
        echo "
  <div id=\"content\" class=\"";
        // line 35
        echo ($context["class"] ?? null);
        echo "\">
  ";
        // line 36
        echo ($context["content_top"] ?? null);
        echo "
  <h1>";
        // line 37
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <fieldset>
    <legend><i class=\"fa fa-list\"></i> ";
        // line 39
        echo ($context["text_transactionList"] ?? null);
        echo "</legend>
      ";
        // line 40
        if (($context["isMember"] ?? null)) {
            // line 41
            echo "      <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-id\">";
            // line 45
            echo ($context["entry_id"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"filter_id\" value=\"";
            // line 46
            echo ($context["filter_id"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_transactionId"] ?? null);
            echo "\" id=\"input-id\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-amount\">";
            // line 49
            echo ($context["entry_amount"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"filter_amount\" value=\"";
            // line 50
            echo ($context["filter_amount"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_transactionAmount"] ?? null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-details\">";
            // line 55
            echo ($context["entry_details"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"filter_details\" value=\"";
            // line 56
            echo ($context["filter_details"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_transactionDetails"] ?? null);
            echo "\" id=\"input-details\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date\">";
            // line 59
            echo ($context["entry_date"] ?? null);
            echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date\" value=\"";
            // line 61
            echo ($context["filter_date"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
            echo ($context["text_transactionDate"] ?? null);
            echo "\" id=\"input-date\" class=\"form-control date\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
              <a onclick=\"filter();\" class=\"btn btn-primary pull-right\">";
            // line 67
            echo ($context["button_filter"] ?? null);
            echo "</a>
            </div>
          </div>
        </div>

        <form method=\"post\" enctype=\"multipart/form-data\" id=\"form-transaction\">
        <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">
                ";
            // line 78
            if (((($context["sort"] ?? null) == "ct.id") || (($context["sort"] ?? null) == "cc.id"))) {
                // line 79
                echo "                <a href=\"";
                echo ($context["sort_id"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_id"] ?? null);
                echo "</a>
                ";
            } else {
                // line 81
                echo "                <a href=\"";
                echo ($context["sort_id"] ?? null);
                echo "\">";
                echo ($context["entry_id"] ?? null);
                echo "</a>
                ";
            }
            // line 83
            echo "              </td>
              <td class=\"text-left\">
                ";
            // line 85
            if ((($context["sort"] ?? null) == "ct.amount")) {
                // line 86
                echo "                <a href=\"";
                echo ($context["sort_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_amount"] ?? null);
                echo "</a>
                ";
            } else {
                // line 88
                echo "                <a href=\"";
                echo ($context["sort_amount"] ?? null);
                echo "\">";
                echo ($context["entry_amount"] ?? null);
                echo "</a>
                ";
            }
            // line 90
            echo "              </td>

              <td class=\"text-left\">
                ";
            // line 93
            if ((($context["sort"] ?? null) == "ct.details")) {
                // line 94
                echo "                <a href=\"";
                echo ($context["sort_details"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_details"] ?? null);
                echo "</a>
                ";
            } else {
                // line 96
                echo "                <a href=\"";
                echo ($context["sort_details"] ?? null);
                echo "\">";
                echo ($context["entry_details"] ?? null);
                echo "</a>
                ";
            }
            // line 98
            echo "              </td>
              <td class=\"text-left\">
                ";
            // line 100
            if ((($context["sort"] ?? null) == "ct.date_added")) {
                // line 101
                echo "                <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_date"] ?? null);
                echo "</a>
                ";
            } else {
                // line 103
                echo "                <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\">";
                echo ($context["entry_date"] ?? null);
                echo "</a>
                ";
            }
            // line 105
            echo "              </td>
            </tr>
          </thead>

          <tbody>
            ";
            // line 110
            if (($context["transactions"] ?? null)) {
                // line 111
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 112
                    echo "              <tr>
                <td class=\"text-left\" >";
                    // line 113
                    echo (($__internal_compile_0 = $context["result"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 114
                    echo (($__internal_compile_1 = $context["result"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["value"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 115
                    echo (($__internal_compile_2 = $context["result"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["details"] ?? null) : null);
                    echo "</td>
                <td class=\"text-left\">";
                    // line 116
                    echo (($__internal_compile_3 = $context["result"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date"] ?? null) : null);
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "            ";
            } else {
                // line 120
                echo "            <tr>
              <td class=\"text-center\" colspan=\"4\">";
                // line 121
                echo ($context["text_no_records"] ?? null);
                echo "</td>
            </tr>
            ";
            }
            // line 124
            echo "          </tbody>
        </table>
        </div>
      </form>
      <div class=\"text-right\">";
            // line 128
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"text-right\">";
            // line 129
            echo ($context["results"] ?? null);
            echo "</div>
      ";
        } else {
            // line 131
            echo "        <div class=\"text-danger\">
          ";
            // line 132
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
        </div>
      ";
        }
        // line 135
        echo "    </fieldset>
  ";
        // line 136
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 138
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script type=\"text/javascript\">
\$('.date').datetimepicker({
  pickTime: false
});

\$('#form-transaction input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});

function filter() {

  url = 'index.php?route=account/customerpartner/transaction';

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
//--></script>
";
        // line 184
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 184,  397 => 138,  392 => 136,  389 => 135,  383 => 132,  380 => 131,  375 => 129,  371 => 128,  365 => 124,  359 => 121,  356 => 120,  353 => 119,  344 => 116,  340 => 115,  336 => 114,  332 => 113,  329 => 112,  324 => 111,  322 => 110,  315 => 105,  307 => 103,  297 => 101,  295 => 100,  291 => 98,  283 => 96,  273 => 94,  271 => 93,  266 => 90,  258 => 88,  248 => 86,  246 => 85,  242 => 83,  234 => 81,  224 => 79,  222 => 78,  208 => 67,  197 => 61,  192 => 59,  184 => 56,  180 => 55,  170 => 50,  166 => 49,  158 => 46,  154 => 45,  148 => 41,  146 => 40,  142 => 39,  137 => 37,  133 => 36,  129 => 35,  126 => 34,  120 => 32,  117 => 31,  111 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  86 => 20,  82 => 19,  78 => 17,  67 => 15,  63 => 14,  55 => 8,  51 => 6,  47 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/transaction.twig", "");
    }
}
