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

/* account/customerpartner/dashboard.twig */
class __TwigTemplate_4fa966285e02b736f9023535dbd0ae1eafacc4880109a0f5683b0e60047a1d7c extends Template
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
  .col-lg-4,
  .col-md-4,
  .col-sm-4 {
    display: inline-block;
    width: 32.79%;
  }

  .col-lg-6,
  .col-md-6,
  .col-sm-6 {
    display: inline-block;
    width: 48.79%;
  }
  .fa {
    display: contents !important;
  }

  .col-sm-8{
    display: inline-block;
    width: 66.67%;
  }
  .fa-home{
    margin-top: 24px;
    height: 6%;
  }

  h2{
      font-size: 27px;
      font-weight: normal;
      padding: 10px;
      color: black;
    }
    .open>.dropdown-menu{
      display: block;
      right: 0;
      left: auto;
    }
    .tooltip-inner{
      background-color: #fff;
    }
    .tooltip-inner .table>tbody>tr>td{
      border-top: 1px solid #ddd;
    }
    .tooltip{
      border-radius: 5px;
      border: 1px solid grey;
    }
    @media only screen and (max-width: 767px) {
      .wk_lowstock_more {
        margin: 25px 0px 0px;
      }
      .dashboard-block-2 .col-sm-4, .dashboard-block-1 .col-lg-4.col-md-4.col-sm-4 {
        height: 255px;
      }
      .dashboard-block-2 .col-sm-8 {
        float: right;
      }
      .dashboard-block-2 .col-sm-8 {
        width: 65.67%;
      }
      .wk_order_status_box .row .col-sm-6:nth-child(1) {
        width: 75%
      }
      .wk_order_status_box .row .col-sm-6:nth-child(2) {
        width: 20%;
      }
    }
    @media only screen and (max-width: 480px) {
      .col-lg-4, .col-md-4, .col-sm-4, .dashboard-block-2 .col-sm-8 {
        width: 100%;
      }
      .wk_order_status_box .col-sm-6 a {
        font-size: 14px;
      }
    }
</style>
  <ul class=\"breadcrumb\">
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 86
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 86);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 86);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "  </ul>
 ";
        // line 89
        if (($context["error_warning"] ?? null)) {
            // line 90
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 92
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 93
            echo "  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"> </i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 95
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 96
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 97
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 98
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 99
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 100
            echo "    ";
        } else {
            // line 101
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 102
            echo "    ";
        }
        // line 103
        echo "    <div id=\"content\" style=\"background-color: #eef4f7;\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    \t<h2>";
        // line 104
        echo ($context["heading_title_dashboard"] ?? null);
        echo "</h2>
        ";
        // line 105
        if (($context["isMember"] ?? null)) {
            // line 106
            echo "            ";
            if (($context["chkIsPartner"] ?? null)) {
                // line 107
                echo "              <div class=\"row\">
                  <div class=\"col-md-3 col-xs-3 col-sm-3 col-lg-4\">";
                // line 108
                echo ($context["order"] ?? null);
                echo "</div>
                  <div class=\"col-md-3 col-xs-3 col-sm-3 col-lg-4\">";
                // line 109
                echo ($context["sale"] ?? null);
                echo "</div>
                  <div class=\"col-md-3 col-xs-3 col-sm-3 col-lg-4\">";
                // line 110
                echo ($context["customer"] ?? null);
                echo "</div>
              </div>
              <div class=\"row\" style=\"margin-top: 10px;\">
                  <div class=\"col-sm-4\">";
                // line 113
                echo ($context["low_stock"] ?? null);
                echo "</div>
                  <div class=\"col-sm-8\">
                    ";
                // line 115
                echo ($context["order_status"] ?? null);
                echo "
                  </div>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-sx-12\">";
                // line 119
                echo ($context["chart"] ?? null);
                echo "</div>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-sx-12\">";
                // line 122
                echo ($context["map"] ?? null);
                echo "</div>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-sx-12\"> ";
                // line 125
                echo ($context["recent"] ?? null);
                echo " </div>
              </div>
            ";
            }
            // line 128
            echo "        ";
        } else {
            // line 129
            echo "      <div class=\"text-danger\">
        ";
            // line 130
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
      </div>
      ";
        }
        // line 133
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 134
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\">
  jQuery(document).ready(function(){
    \$('.low_stock_row').on('mouseenter', function(){
      var src = \$(this).find('img').attr('src');
      src = src.substr(0,14);
      src = src + '-active.png';
      \$(this).find('img').attr('src',src);
    });

    \$('.low_stock_row').on('mouseleave', function(){
      var src = \$(this).find('img').attr('src');
      src = src.substr(0,14);
      src = src + '.png';
      \$(this).find('img').attr('src',src);
    });
  })
</script>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 153,  272 => 134,  267 => 133,  261 => 130,  258 => 129,  255 => 128,  249 => 125,  243 => 122,  237 => 119,  230 => 115,  225 => 113,  219 => 110,  215 => 109,  211 => 108,  208 => 107,  205 => 106,  203 => 105,  199 => 104,  192 => 103,  189 => 102,  186 => 101,  183 => 100,  180 => 99,  177 => 98,  174 => 97,  172 => 96,  167 => 95,  161 => 93,  158 => 92,  152 => 90,  150 => 89,  147 => 88,  136 => 86,  132 => 85,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/dashboard.twig", "");
    }
}
