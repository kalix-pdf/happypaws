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

/* account/customerpartner/customers.twig */
class __TwigTemplate_df95cd30e93ff1af8f3fe8458c466a9e8fdaee58d46680ad347e4ce1a4511cf7 extends Template
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
            // line 7
            echo "  <div class=\"container\">
";
        }
        // line 9
        echo "
  <ul class=\"breadcrumb\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "  </ul>

  <div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (($context["chkIsPartner"] ?? null)) {
            // line 30
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">
    ";
            // line 31
            echo ($context["content_top"] ?? null);
            echo "
        <h1 style=\"margin-top:10px;\">";
            // line 32
            echo ($context["heading_title"] ?? null);
            echo "</h1>

        <fieldset>
            <legend><i class=\"fa fa-list\"></i> ";
            // line 35
            echo ($context["heading_title"] ?? null);
            echo "</legend>
      ";
            // line 36
            if (($context["isMember"] ?? null)) {
                // line 37
                echo "      <div class=\"well\">
        <div class=\"row\">         
          
          <div class=\"col-sm-4\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
                // line 42
                echo ($context["text_customer"] ?? null);
                echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
                // line 43
                echo ($context["filter_name"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_customer"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />              
            </div>
          </div>

          ";
                // line 62
                echo "

        </div>
      </div>

      <div class=\"table-responsive table-scroll\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td width=\"5%\" class=\"text-center\">
                ";
                // line 72
                if ((($context["sort"] ?? null) == "c.customer_id")) {
                    // line 73
                    echo "                <a href=\"";
                    echo ($context["sort_customer_id"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["text_orderid"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 75
                    echo "                <a href=\"";
                    echo ($context["sort_customer_id"] ?? null);
                    echo "\">";
                    echo ($context["text_orderid"] ?? null);
                    echo "</a>
                ";
                }
                // line 77
                echo "              </td>
              <td width=\"20%\" class=\"text-center\">
                ";
                // line 79
                if ((($context["sort"] ?? null) == "c.firstname")) {
                    // line 80
                    echo "                <a href=\"";
                    echo ($context["sort_firstname"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["text_customer"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 82
                    echo "                <a href=\"";
                    echo ($context["sort_firstname"] ?? null);
                    echo "\">";
                    echo ($context["text_customer"] ?? null);
                    echo "</a>
                ";
                }
                // line 84
                echo "              </td>
              ";
                // line 87
                echo "              ";
                // line 88
                echo "              <td width=\"15%\" class=\"text-center\">";
                if ((($context["sort"] ?? null) == "o.date_added")) {
                    // line 89
                    echo "                <a href=\"";
                    echo ($context["sort_date"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\" >";
                    echo ($context["text_added_date"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 91
                    echo "                <a href=\"";
                    echo ($context["sort_date"] ?? null);
                    echo "\">";
                    echo ($context["text_added_date"] ?? null);
                    echo "</a>
                ";
                }
                // line 93
                echo "              </td>              
            </tr>
          </thead>
          <tbody>
            ";
                // line 97
                if (($context["customers"] ?? null)) {
                    // line 98
                    echo "         \t    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                        // line 99
                        echo "        \t\t<tr>
        \t\t    <td class=\"text-center\">";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 100);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 101);
                        echo "</td>
                    ";
                        // line 104
                        echo "                    ";
                        // line 105
                        echo "                    <td class=\"text-center\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 105);
                        echo "</td>                    
        \t\t</tr>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "            ";
                } else {
                    // line 109
                    echo "            <tr>
              <td class=\"text-center\" colspan=\"10\">";
                    // line 110
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
            </tr>
            ";
                }
                // line 113
                echo "          </tbody>
        </table>
      </div>
      <div class=\"row\" style=\"margin-top:10px;\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-6 text-left\">";
                // line 117
                echo ($context["pagination"] ?? null);
                echo "</div>
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-6 text-right\">";
                // line 118
                echo ($context["results"] ?? null);
                echo "</div>
      </div>
      ";
            } else {
                // line 121
                echo "        <div class=\"text-danger\">
          ";
                // line 122
                echo ($context["error_warning_authenticate"] ?? null);
                echo "
        </div>
      ";
            }
            // line 125
            echo "    </fieldset>
    ";
            // line 126
            echo ($context["content_bottom"] ?? null);
            echo "
    </div>
    ";
        } else {
            // line 129
            echo " ";
            echo "<h2 class='text-danger'> For Become Seller inform Admin </h2>";
            echo "
 ";
        }
        // line 131
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script type=\"text/javascript\">

function refilter(){
  location = '";
        // line 138
        echo ($context["current"] ?? null);
        echo "';
}

function filter() {
  url = '";
        // line 142
        echo ($context["current"] ?? null);
        echo "';

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_phone = \$('input[name=\\'filter_phone\\']').val();

  if (filter_phone) {
    url += '&filter_phone=' + encodeURIComponent(filter_phone);
  }

  var filter_email = \$('input[name=\\'filter_email\\']').val();

  if (filter_email) {
    url += '&filter_email=' + encodeURIComponent(filter_email);
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
        // line 173
        echo ($context["footer"] ?? null);
        echo "

<script>
var secondtag = document.querySelectorAll('.module-title')[2];
secondtag.setAttribute(\"style\", \"position: relative; right: 40px;\");

</script>";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/customers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 173,  348 => 142,  341 => 138,  330 => 131,  324 => 129,  318 => 126,  315 => 125,  309 => 122,  306 => 121,  300 => 118,  296 => 117,  290 => 113,  284 => 110,  281 => 109,  278 => 108,  268 => 105,  266 => 104,  262 => 101,  258 => 100,  255 => 99,  250 => 98,  248 => 97,  242 => 93,  234 => 91,  224 => 89,  221 => 88,  219 => 87,  216 => 84,  208 => 82,  198 => 80,  196 => 79,  192 => 77,  184 => 75,  174 => 73,  172 => 72,  160 => 62,  151 => 43,  147 => 42,  140 => 37,  138 => 36,  134 => 35,  128 => 32,  124 => 31,  119 => 30,  117 => 29,  114 => 28,  108 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  83 => 17,  79 => 16,  75 => 14,  64 => 12,  60 => 11,  56 => 9,  52 => 7,  47 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/customers.twig", "");
    }
}
