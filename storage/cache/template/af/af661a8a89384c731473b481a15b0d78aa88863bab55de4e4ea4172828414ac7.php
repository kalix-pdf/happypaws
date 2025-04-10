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

/* __string_template__3ab364457fa7d1e85f3f7d3f8e583012e23cea9808104a50561453c7f66c6a8e */
class __TwigTemplate_ad75aec07ba4e0ec8b07765279dd29cfa0211c21b151f1c2df0ea4f3ec42ac4f extends Template
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
            echo "    <li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>

  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["chkIsPartner"] ?? null)) {
            // line 26
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">
    ";
            // line 27
            echo ($context["content_top"] ?? null);
            echo "
    <h1>
      ";
            // line 29
            echo ($context["heading_title"] ?? null);
            echo "
      ";
            // line 30
            if ((array_key_exists("marketplace_seller_create_order", $context) && ($context["marketplace_seller_create_order"] ?? null))) {
                // line 31
                echo "        <div class=\"pull-right\">
          <a href=\"";
                // line 32
                echo ($context["add_order"] ?? null);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_add"] ?? null);
                echo "\"><i class=\"fa fa-plus\"></i></a>
        </div>
      ";
            }
            // line 35
            echo "    </h1>

    <fieldset>
      <legend><i class=\"fa fa-list\"></i> ";
            // line 38
            echo ($context["heading_title"] ?? null);
            echo "</legend>
      ";
            // line 39
            if (($context["isMember"] ?? null)) {
                // line 40
                echo "      <div class=\"well\">
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order\">";
                // line 44
                echo ($context["text_orderid"] ?? null);
                echo "</label>
              <input type=\"text\" name=\"filter_order\" value=\"";
                // line 45
                echo ($context["filter_order"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_orderid"] ?? null);
                echo "\" id=\"input-order\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
                // line 48
                echo ($context["text_customer"] ?? null);
                echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
                // line 49
                echo ($context["filter_name"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_customer"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date\">";
                // line 55
                echo ($context["text_added_date"] ?? null);
                echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date\" value=\"";
                // line 57
                echo ($context["filter_date"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
                echo ($context["text_added_date"] ?? null);
                echo "\" id=\"input-date\" class=\"form-control date\" />
                <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
          </div>

          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
                // line 67
                echo ($context["text_status"] ?? null);
                echo "</label>
              <select name=\"filter_status\" class=\"form-control\" id=\"input-status\">
                <option value=\"*\"></option>
                ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["status"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 71
                    echo "                  <option value=\"";
                    echo (($__internal_compile_2 = $context["value"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "\" ";
                    echo ((((($context["filter_status"] ?? null) == (($__internal_compile_3 = $context["value"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null)) || (($context["filter_status"] ?? null) == (($__internal_compile_4 = $context["value"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["order_status_id"] ?? null) : null)))) ? ("selected") : (""));
                    echo " >";
                    echo (($__internal_compile_5 = $context["value"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "              </select>
            </div>
            <a onclick=\"filter();\" class=\"btn btn-primary\">";
                // line 75
                echo ($context["button_filter"] ?? null);
                echo "</a>
            <a onclick=\"refilter();\" class=\"btn btn-default\"> <i class=\"fa fa-refresh\"></i> </a>

          </div>

        </div>
      </div>

      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">
                ";
                // line 88
                if ((($context["sort"] ?? null) == "o.order_id")) {
                    // line 89
                    echo "                <a href=\"";
                    echo ($context["sort_order"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["text_orderid"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 91
                    echo "                <a href=\"";
                    echo ($context["sort_order"] ?? null);
                    echo "\">";
                    echo ($context["text_orderid"] ?? null);
                    echo "</a>
                ";
                }
                // line 93
                echo "              </td>
              <td class=\"left\">
                ";
                // line 95
                if ((($context["sort"] ?? null) == "o.firstname")) {
                    // line 96
                    echo "                <a href=\"";
                    echo ($context["sort_name"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["text_customer"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 98
                    echo "                <a href=\"";
                    echo ($context["sort_name"] ?? null);
                    echo "\">";
                    echo ($context["text_customer"] ?? null);
                    echo "</a>
                ";
                }
                // line 100
                echo "              </td>
              <td class=\"left\">";
                // line 101
                echo ($context["text_products"] ?? null);
                echo "</td>
              <td class=\"left\">";
                // line 102
                echo ($context["text_total"] ?? null);
                echo "</td>
              <td class=\"left\">";
                // line 103
                if ((($context["sort"] ?? null) == "os.name")) {
                    // line 104
                    echo "                <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\" >";
                    echo ($context["text_status"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 106
                    echo "                <a href=\"";
                    echo ($context["sort_status"] ?? null);
                    echo "\">";
                    echo ($context["text_status"] ?? null);
                    echo "</a>
                ";
                }
                // line 108
                echo "              </td>
              <td class=\"left\">";
                // line 109
                if ((($context["sort"] ?? null) == "o.date_added")) {
                    // line 110
                    echo "                <a href=\"";
                    echo ($context["sort_date"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\" >";
                    echo ($context["text_added_date"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 112
                    echo "                <a href=\"";
                    echo ($context["sort_date"] ?? null);
                    echo "\">";
                    echo ($context["text_added_date"] ?? null);
                    echo "</a>
                ";
                }
                // line 114
                echo "              </td>
              <td class=\"center\">";
                // line 115
                echo ($context["text_action"] ?? null);
                echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
                // line 119
                if (($context["orders"] ?? null)) {
                    // line 120
                    echo "         \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 121
                        echo "        \t\t\t\t<tr>
        \t\t\t\t\t<td>";
                        // line 122
                        echo (($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["order_id"] ?? null) : null);
                        echo "</td>
                  <td>";
                        // line 123
                        echo (($__internal_compile_7 = $context["item"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                        echo "</td>
                  <td>";
                        // line 124
                        echo (($__internal_compile_8 = $context["item"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["productname"] ?? null) : null);
                        echo "</td>
                  <td>";
                        // line 125
                        echo (($__internal_compile_9 = $context["item"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["total"] ?? null) : null);
                        echo "</td>
                  <td>";
                        // line 126
                        echo (($__internal_compile_10 = $context["item"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["orderstatus"] ?? null) : null);
                        echo "</td>
                  <td>";
                        // line 127
                        echo (($__internal_compile_11 = $context["item"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["date_added"] ?? null) : null);
                        echo "</td>
                  <td class=\"center\">
                  <a class=\"btn btn-primary \" href=\"";
                        // line 129
                        echo (($__internal_compile_12 = $context["item"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["orderidlink"] ?? null) : null);
                        echo "\"><i class=\"fa fa-eye\"></i></a></td>
        \t\t\t\t</tr>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "            ";
                } else {
                    // line 133
                    echo "            <tr>
              <td class=\"text-center\" colspan=\"10\">";
                    // line 134
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
            </tr>
            ";
                }
                // line 137
                echo "          </tbody>
        </table>
      </div>
      <div class=\"text-right\">";
                // line 140
                echo ($context["pagination"] ?? null);
                echo "</div>
      <div class=\"text-right\">";
                // line 141
                echo ($context["results"] ?? null);
                echo "</div>
      ";
            } else {
                // line 143
                echo "        <div class=\"text-danger\">
          ";
                // line 144
                echo ($context["error_warning_authenticate"] ?? null);
                echo "
        </div>
      ";
            }
            // line 147
            echo "    </fieldset>
    ";
            // line 148
            echo ($context["content_bottom"] ?? null);
            echo "
    </div>
    ";
        } else {
            // line 151
            echo " ";
            echo "<h2 class='text-danger'> For Become Seller inform Admin </h2>";
            echo "
 ";
        }
        // line 153
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script type=\"text/javascript\">
\$('.date').datetimepicker({
  pickTime: false
});

function refilter(){
  location = '";
        // line 163
        echo ($context["current"] ?? null);
        echo "';
}

function filter() {
  url = '";
        // line 167
        echo ($context["current"] ?? null);
        echo "';

  var filter_order = parseInt(\$('input[name=\\'filter_order\\']').val());

  if (filter_order) {
    url += '&filter_order=' + encodeURIComponent(filter_order);
  }

  var filter_name = \$('input[name=\\'filter_name\\']').val();
  var check = filter_name.search('script');
  if(check >= 0){
    alert('Please do not add the script in the field');
    return;
  }
  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  var filter_date = \$('input[name=\\'filter_date\\']').val();
  
  var check = filter_date.search('script');
  if(check >= 0){
    alert('Please do not add the script in the field');
    return;
  }
  if (filter_date) {
    url += '&filter_date=' + encodeURIComponent(filter_date);
  }

  location = url;
}
//--></script>
<script type=\"text/javascript\"><!--
\$('fieldset input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});

//--></script>
";
        // line 213
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__3ab364457fa7d1e85f3f7d3f8e583012e23cea9808104a50561453c7f66c6a8e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 213,  469 => 167,  462 => 163,  448 => 153,  442 => 151,  436 => 148,  433 => 147,  427 => 144,  424 => 143,  419 => 141,  415 => 140,  410 => 137,  404 => 134,  401 => 133,  398 => 132,  389 => 129,  384 => 127,  380 => 126,  376 => 125,  372 => 124,  368 => 123,  364 => 122,  361 => 121,  356 => 120,  354 => 119,  347 => 115,  344 => 114,  336 => 112,  326 => 110,  324 => 109,  321 => 108,  313 => 106,  303 => 104,  301 => 103,  297 => 102,  293 => 101,  290 => 100,  282 => 98,  272 => 96,  270 => 95,  266 => 93,  258 => 91,  248 => 89,  246 => 88,  230 => 75,  226 => 73,  213 => 71,  209 => 70,  203 => 67,  188 => 57,  183 => 55,  172 => 49,  168 => 48,  160 => 45,  156 => 44,  150 => 40,  148 => 39,  144 => 38,  139 => 35,  131 => 32,  128 => 31,  126 => 30,  122 => 29,  117 => 27,  112 => 26,  109 => 25,  103 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  78 => 14,  74 => 13,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3ab364457fa7d1e85f3f7d3f8e583012e23cea9808104a50561453c7f66c6a8e", "");
    }
}
