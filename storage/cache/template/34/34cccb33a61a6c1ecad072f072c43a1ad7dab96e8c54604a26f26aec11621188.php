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

/* __string_template__fdd4050e48b76a9d2865abbef09b94ba264186787d08c25795c1753955b9f097 */
class __TwigTemplate_fe84999a796eaab543b8b54a212e13fb4a675a83e6ef3d12fbf73628b0cb62ce extends Template
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
        echo "\" id=\"insert\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
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
                <label class=\"control-label\" for=\"input-category\">";
        // line 40
        echo ($context["column_category_filter"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_category\" value=\"";
        // line 41
        echo ($context["filter_category"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_category_filter"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 42
        echo ($context["filter_category_id"] ?? null);
        echo "\" />
              </div>
            </div>

            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-attribute\">";
        // line 48
        echo ($context["column_name"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_option\" value=\"";
        // line 49
        echo ($context["filter_option"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_name"] ?? null);
        echo "\" id=\"input-attribute\" class=\"form-control\" />
                <input type=\"hidden\" name=\"filter_option_id\" value=\"";
        // line 50
        echo ($context["filter_option_id"] ?? null);
        echo "\" />
              </div>
              <button type=\"button\" onclick=\"clearfilter();\" class=\"btn btn-danger pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 52
        echo ($context["button_clear_filter"] ?? null);
        echo "</button>
              <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\" style=\"margin-right: 5%;\"><i class=\"fa fa-search\"></i> ";
        // line 53
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>

        <form action=\"";
        // line 58
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
    \t\t\t        <td class=\"text-center\">";
        // line 64
        echo ($context["column_category"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 65
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 66
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody id=\"option_body\">

              </tbody>
              <tfoot>
                <tr><td colspan=\"11\" class=\"alert-info text-center\" id=\"categoryFoot\"></td></tr>
              </tfoot>
        </table>
        </div>
      </form>

    <div class=\"row\">

    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--

\$('input[name=\\'filter_option\\']').autocomplete({
  delay: 0,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 98
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item.name,
            value: item.option_id
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'filter_option\\']').val(item.label);
    \$('input[name=\\'filter_option_id\\']').val(item.value);
    return false;
  },
  focus: function(item) {
      return false;
  }
});

\$('input[name=\\'filter_category\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 123
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
    \$('input[name=\\'filter_category\\']').val(item['label']);
    \$('input[name=\\'filter_category_id\\']').val(item['value']);
  }
});


let filter_option_id   = '',
    filter_category_id = '',
    filter_option      = '',
    filter_category    = '',
    order              = 'ASC',
    sort               = 'pd.name',
    page               = 1,
    start              = 0,
    end                = 10,
    product_listed     = 0,
    product_prev       = 0,
    all                = false,
    in_process         = false,
    checkEvent         = 1;

function clearfilter() {
  \$('input[name=\\'filter_category\\']').val('');
  \$('input[name=\\'filter_category_id\\']').val('');
  \$('input[name=\\'filter_option\\']').val('');
  \$('input[name=\\'filter_option_id\\']').val('');
  filter_option_id   = '',
  filter_category_id = '',
  filter_option      = '',
  filter_category    = '',
  order              = 'ASC',
  sort               = 'pd.name',
  page               = 1,
  start              = 0,
  end                = 10;
  \$('#option_body').html('<tr></tr>');
  \$('#categoryFoot').empty();
  _loadData();
}

function filter() {
  filter_category      =  \$('input[name=\\'filter_category\\']').val();
  filter_category_id   =  \$('input[name=\\'filter_category_id\\']').val();
  filter_option        =  \$('input[name=\\'filter_option\\']').val();
  filter_option_id     =  \$('input[name=\\'filter_option_id\\']').val();
  order              = 'ASC',
  sort               = 'pd.name',
  page               = 1,
  start              = 0,
  end                = 10,
  product_listed     = 0,
  product_prev       = 0,
  all                = false,
  in_process         = false,
  checkEvent         = 1;
  \$('#option_body').html('<tr></tr>');
  \$('#categoryFoot').empty();
  _loadData();
}

function _loadData() {
  var elem = {
    filter_category    : filter_category,
    filter_category_id : filter_category_id,
    filter_option      : filter_option,
    filter_option_id   : filter_option_id,
    start              : start,
    end                : end,
    order              : order,
    sort               : sort,
    page               : page,
  };

  \$.ajax({
    url      : 'index.php?route=customerpartner/optionmapping/_loadData&user_token=";
        // line 211
        echo ($context["user_token"] ?? null);
        echo "',
    data     :  elem,
    type     : 'post',
    dataType : 'json',
    beforeSend: function () {
      \$('#categoryFoot').append(' <i class=\"fa fa-spin fa-spinner\"></i>');
      in_process = true;
    },
    success: function(json) {
      in_process = false;
      if (json['success']) {
        var htm = '';
        var category = json['categories'];
        for (var i = 0; i < category.length; i++) {
          product_listed++;
          htm += '<tr cashier-id=\"' + category[i]['category_id'] + '\">';
          if(\$('#allcheckbox').is(':checked')) {
            htm += '  <td class=\"text-center\"><input type=\"checkbox\" checked name=\"selected[]\" value=\"' + category[i]['category_id'] + '\" /></td>';
          } else {
            htm += '  <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"' + category[i]['category_id'] + '\" /></td>';
          }
          htm += '  <td class=\"text-center\">' + category[i]['name'] + '         </td>';
          htm += '  <td class=\"text-center\">' + category[i]['option_name'] + '         </td>';

          htm += '  <td class=\"text-center\">';
          htm += '<a class=\"btn\" href =\"' + category[i]['action'] + '\"  data-toggle=\"tooltip\" title=\"";
        // line 236
        echo ($context["button_edit"] ?? null);
        echo "\" style=\"background-color:rgb(10,10,10);color: white;border: 0px none; border-radius: 0px;\">  ";
        echo ($context["button_edit"] ?? null);
        echo " ';
          htm += ' <i class=\"fa fa-pencil\"></i></a></td>';
          htm += '</tr>';
          if (product_listed == json['product_total']) {
            all = true;
          }
        }

        \$('#option_body').append(htm);
        \$('#categoryFoot').text('Showing ' + product_listed + ' of ' + json['total']);
      } else {
        \$('#option_body').append('<tr></tr>');
        \$('#categoryFoot').text('There are no more option mapping available');
      }
    },
    error: function () {
      // in_process = false;
      // location = 'index.php?route=customerpartner/optionmapping&user_token=";
        // line 253
        echo ($context["user_token"] ?? null);
        echo "';
    }
  });
}

\$(window).on('scroll', function () {
  var diff = \$(document).height() - \$(window).height();
  var foot_hight = diff - \$(window).scrollTop();
  if ((foot_hight < 200) && !in_process) {
    start = product_listed;
    if (product_listed && (product_listed != product_prev) && !all) {
      _loadData();
      product_prev = product_listed;
    }
  };
});

_loadData();

//--></script>

";
        // line 274
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__fdd4050e48b76a9d2865abbef09b94ba264186787d08c25795c1753955b9f097";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 274,  390 => 253,  368 => 236,  340 => 211,  249 => 123,  221 => 98,  186 => 66,  182 => 65,  178 => 64,  169 => 58,  161 => 53,  157 => 52,  152 => 50,  146 => 49,  142 => 48,  133 => 42,  127 => 41,  123 => 40,  112 => 32,  107 => 29,  99 => 25,  96 => 24,  88 => 20,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fdd4050e48b76a9d2865abbef09b94ba264186787d08c25795c1753955b9f097", "");
    }
}
