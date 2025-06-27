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

/* __string_template__740cdedd0963e016f586b994e5e0b6f3d46d9e746d66b415eca5c5a54b47cafe */
class __TwigTemplate_37e84637f7b1e57a5f324d71a68b9dc69f3124d5dfeebffe1b689096cfdcf835 extends Template
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
        echo ($context["addshipping"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
                <label class=\"control-label\" for=\"input-name\">";
        // line 41
        echo ($context["customer_name"] ?? null);
        echo "</label>
                <div class='input-group'>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 43
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["customer_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  <span class=\"input-group-addon\"><span class=\"fa fa-angle-double-down\"></span>
                    </span>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-country\">";
        // line 49
        echo ($context["shipping_country"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_country\" value=\"";
        // line 50
        echo ($context["filter_country"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["shipping_country"] ?? null);
        echo "\" id=\"input-country\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-weight_from\">";
        // line 53
        echo ($context["weight_from"] ?? null);
        echo "</label>
                <input type='text' name=\"filter_weight_from\" value=\"";
        // line 54
        echo ($context["filter_weight_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["weight_from"] ?? null);
        echo "\" id=\"input-weight_from\" class=\"form-control date\" />
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-zip_to\">";
        // line 60
        echo ($context["zip_to"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_zip_to\" value=\"";
        // line 61
        echo ($context["filter_zip_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["zip_to"] ?? null);
        echo "\" id=\"input-zip_to\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-zip_from\">";
        // line 64
        echo ($context["zip_from"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_zip_from\" value=\"";
        // line 65
        echo ($context["filter_zip_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["zip_from"] ?? null);
        echo "\" id=\"input-zip_from\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-city\">";
        // line 68
        echo ($context["city"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_city\" value=\"";
        // line 69
        echo ($context["filter_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["city"] ?? null);
        echo "\" id=\"input-city\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-price\">";
        // line 75
        echo ($context["price"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_price\" value=\"";
        // line 76
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-weight_to\">";
        // line 79
        echo ($context["weight_to"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_weight_to\" value=\"";
        // line 80
        echo ($context["filter_weight_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["weight_to"] ?? null);
        echo "\" id=\"input-weight_to\" class=\"form-control\" />
              </div>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 82
        echo ($context["button_filter"] ?? null);
        echo "</button>
              <button type=\"button\" onclick=\"clearfilter();\" class=\"btn btn-danger pull-right\" style=\"margin-right: 5%;\"><i class=\"fa fa-search\"></i> ";
        // line 83
        echo ($context["button_clear_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>

        <form action=\"";
        // line 88
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">

          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-center\">
                    ";
        // line 96
        if ((($context["sort"] ?? null) == "name")) {
            // line 97
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["customer_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 99
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["customer_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 101
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 103
        if ((($context["sort"] ?? null) == "cs.country_code")) {
            // line 104
            echo "                    <a href=\"";
            echo ($context["sort_country_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["shipping_country"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 106
            echo "                    <a href=\"";
            echo ($context["sort_country_code"] ?? null);
            echo "\">";
            echo ($context["shipping_country"] ?? null);
            echo "</a>
                    ";
        }
        // line 108
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 110
        if ((($context["sort"] ?? null) == "cs.zip_from")) {
            // line 111
            echo "                    <a href=\"";
            echo ($context["sort_zip_from"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["zip_from"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 113
            echo "                    <a href=\"";
            echo ($context["sort_zip_from"] ?? null);
            echo "\">";
            echo ($context["zip_from"] ?? null);
            echo "</a>
                    ";
        }
        // line 115
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 117
        if ((($context["sort"] ?? null) == "cs.zip_to")) {
            // line 118
            echo "                    <a href=\"";
            echo ($context["sort_zip_to"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["zip_to"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 120
            echo "                    <a href=\"";
            echo ($context["sort_zip_to"] ?? null);
            echo "\">";
            echo ($context["zip_to"] ?? null);
            echo "</a>
                    ";
        }
        // line 122
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 124
        if ((($context["sort"] ?? null) == "cs.city")) {
            // line 125
            echo "                    <a href=\"";
            echo ($context["sort_city"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["city"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 127
            echo "                    <a href=\"";
            echo ($context["sort_city"] ?? null);
            echo "\">";
            echo ($context["city"] ?? null);
            echo "</a>
                    ";
        }
        // line 129
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 131
        if ((($context["sort"] ?? null) == "cs.price")) {
            // line 132
            echo "                    <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["price"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 134
            echo "                    <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["price"] ?? null);
            echo "</a>
                    ";
        }
        // line 136
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 138
        if ((($context["sort"] ?? null) == "cs.weight_from")) {
            // line 139
            echo "                    <a href=\"";
            echo ($context["sort_weight_from"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["weight_from"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 141
            echo "                    <a href=\"";
            echo ($context["sort_weight_from"] ?? null);
            echo "\">";
            echo ($context["weight_from"] ?? null);
            echo "</a>
                    ";
        }
        // line 143
        echo "                  </td>
                  <td class=\"text-center\">
                    ";
        // line 145
        if ((($context["sort"] ?? null) == "cs.weight_to")) {
            // line 146
            echo "                    <a href=\"";
            echo ($context["sort_weight_to"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["weight_to"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 148
            echo "                    <a href=\"";
            echo ($context["sort_weight_to"] ?? null);
            echo "\">";
            echo ($context["weight_to"] ?? null);
            echo "</a>
                    ";
        }
        // line 150
        echo "                  </td>
                  <td class=\"text-center\">";
        // line 151
        echo ($context["max_days"] ?? null);
        echo "</td>
                </tr>
              </thead>

              <tbody>
                ";
        // line 156
        if (($context["result_shipping"] ?? null)) {
            // line 157
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result_shipping"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result_shippings"]) {
                // line 158
                echo "                  <tr>
                    <td style=\"text-align: center;\">
                      ";
                // line 160
                if ((($__internal_compile_0 = $context["result_shippings"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["selected"] ?? null) : null)) {
                    // line 161
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_1 = $context["result_shippings"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 163
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_2 = $context["result_shippings"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />
                      ";
                }
                // line 165
                echo "                    </td>
                      <td class=\"text-center\" >";
                // line 166
                echo (($__internal_compile_3 = $context["result_shippings"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 167
                echo (($__internal_compile_4 = $context["result_shippings"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["countey"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\" >";
                // line 168
                echo (($__internal_compile_5 = $context["result_shippings"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["zip_from"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 169
                echo (($__internal_compile_6 = $context["result_shippings"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["zip_to"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 170
                echo (($__internal_compile_7 = $context["result_shippings"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["city"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 171
                echo (($__internal_compile_8 = $context["result_shippings"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["price"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 172
                echo (($__internal_compile_9 = $context["result_shippings"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["weight_from"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 173
                echo (($__internal_compile_10 = $context["result_shippings"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["weight_to"] ?? null) : null);
                echo "</td>
                      <td class=\"text-center\">";
                // line 174
                echo (($__internal_compile_11 = $context["result_shippings"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["max_days"] ?? null) : null);
                echo "</td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result_shippings'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                ";
        } else {
            // line 178
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"13\">";
            // line 179
            echo "no records founds";
            echo "</td>
                </tr>
                ";
        }
        // line 182
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 187
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 188
        echo ($context["results"] ?? null);
        echo "</div>
        </div>

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

  url = 'index.php?route=customerpartner/shipping&user_token=";
        // line 206
        echo ($context["user_token"] ?? null);
        echo "';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_country = \$('input[name=\\'filter_country\\']').val();

  if (filter_country) {
    url += '&filter_country=' + encodeURIComponent(filter_country);
  }

  var filter_price = \$('input[name=\\'filter_price\\']').val();

  if (filter_price) {
    url += '&filter_price=' + encodeURIComponent(filter_price);
  }

  var filter_zip_to = \$('input[name=\\'filter_zip_to\\']').val();

  if (filter_zip_to) {
    url += '&filter_zip_to=' + encodeURIComponent(filter_zip_to);
  }

  var filter_zip_from = \$('input[name=\\'filter_zip_from\\']').val();

  if (filter_zip_from) {
    url += '&filter_zip_from=' + encodeURIComponent(filter_zip_from);
  }

  var filter_city = \$('input[name=\\'filter_city\\']').val();

  if (filter_city) {
    url += '&filter_city=' + encodeURIComponent(filter_city);
  }

  var filter_weight_to = \$('input[name=\\'filter_weight_to\\']').val();

  if (filter_weight_to) {
    url += '&filter_weight_to=' + encodeURIComponent(filter_weight_to);
  }

  var filter_weight_from = \$('input[name=\\'filter_weight_from\\']').val();

  if (filter_weight_from) {
    url += '&filter_weight_from=' + encodeURIComponent(filter_weight_from);
  }

  location = url;
}

function clearfilter() {
  url = 'index.php?route=customerpartner/shipping&user_token=";
        // line 260
        echo ($context["user_token"] ?? null);
        echo "';
  location = url;
}

\$('input[name=\\'filter_name\\']').autocomplete({
  delay: 0,
  source: function(request, response) {

    \$.ajax({
      url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 269
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
        // line 291
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__740cdedd0963e016f586b994e5e0b6f3d46d9e746d66b415eca5c5a54b47cafe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 291,  633 => 269,  621 => 260,  564 => 206,  543 => 188,  539 => 187,  532 => 182,  526 => 179,  523 => 178,  520 => 177,  511 => 174,  507 => 173,  503 => 172,  499 => 171,  495 => 170,  491 => 169,  487 => 168,  483 => 167,  479 => 166,  476 => 165,  470 => 163,  464 => 161,  462 => 160,  458 => 158,  453 => 157,  451 => 156,  443 => 151,  440 => 150,  432 => 148,  422 => 146,  420 => 145,  416 => 143,  408 => 141,  398 => 139,  396 => 138,  392 => 136,  384 => 134,  374 => 132,  372 => 131,  368 => 129,  360 => 127,  350 => 125,  348 => 124,  344 => 122,  336 => 120,  326 => 118,  324 => 117,  320 => 115,  312 => 113,  302 => 111,  300 => 110,  296 => 108,  288 => 106,  278 => 104,  276 => 103,  272 => 101,  264 => 99,  254 => 97,  252 => 96,  241 => 88,  233 => 83,  229 => 82,  222 => 80,  218 => 79,  210 => 76,  206 => 75,  195 => 69,  191 => 68,  183 => 65,  179 => 64,  171 => 61,  167 => 60,  156 => 54,  152 => 53,  144 => 50,  140 => 49,  129 => 43,  124 => 41,  112 => 32,  107 => 29,  99 => 25,  96 => 24,  88 => 20,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__740cdedd0963e016f586b994e5e0b6f3d46d9e746d66b415eca5c5a54b47cafe", "");
    }
}
