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

/* __string_template__8e969f05890cc6dde9bffdc7cb4804c71b7f24e4bba38e96b8b548089c9eeb9e */
class __TwigTemplate_4001d5c885b7527ed77d918f499f5aa13432e4a70bf63b9ce38ecceb0a25e051 extends Template
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
        echo ($context["back"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"li_font_family\"><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"li_font_family\" class=\"active\"><a href=\"#tab-order\" id=\"tab_tab-order\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
          <li class=\"li_font_family\"><a href=\"#tab-product\" id=\"tab_tab-product\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
          <li class=\"li_font_family\"><a href=\"#tab-seller\" id=\"tab_tab-seller\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_seller"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-order\">
            ";
        // line 37
        if ((array_key_exists("all_notifications", $context) && ($context["all_notifications"] ?? null))) {
            // line 38
            echo "              <div class=\"all_notifications_div\">
                <div class=\"notification_filter\">
                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" value=\"all\" name=\"selected[]\" ";
            // line 42
            if (((array_key_exists("selected", $context) && twig_test_iterable(($context["selected"] ?? null))) && twig_in_filter("all", ($context["selected"] ?? null)))) {
                echo "checked=\"checked\"";
            }
            echo " />
                    <span class=\"label label-info pull-right span_margin\">";
            // line 43
            echo ($context["all_notifications"] ?? null);
            echo "</span>";
            echo ($context["text_all_notification"] ?? null);
            echo "
                  </label>
                </div>

                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" value=\"return\" name=\"selected[]\" ";
            // line 49
            if (((array_key_exists("selected", $context) && twig_test_iterable(($context["selected"] ?? null))) && twig_in_filter("return", ($context["selected"] ?? null)))) {
                echo "checked=\"checked\"";
            }
            echo "  />
                    <span class=\"label label-danger pull-right span_margin\">";
            // line 50
            echo ($context["return_total"] ?? null);
            echo "</span>";
            echo ($context["text_return"] ?? null);
            echo "
                  </label>
                </div>

                ";
            // line 54
            if ((((array_key_exists("order_statuses", $context) && ($context["order_statuses"] ?? null)) && array_key_exists("notification_filter", $context)) && ($context["notification_filter"] ?? null))) {
                // line 55
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                    // line 56
                    echo "                    ";
                    if (twig_in_filter((($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order_status_id"] ?? null) : null), ($context["notification_filter"] ?? null))) {
                        // line 57
                        echo "                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" value=\"";
                        // line 59
                        echo (($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_status_id"] ?? null) : null);
                        echo "\" name=\"selected[]\" ";
                        if (((array_key_exists("selected", $context) && twig_test_iterable(($context["selected"] ?? null))) && twig_in_filter((($__internal_compile_4 = $context["order_status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["order_status_id"] ?? null) : null), ($context["selected"] ?? null)))) {
                            echo "checked=\"checked\"";
                        }
                        echo " />
                        <span class=\"label label-success pull-right span_margin\">";
                        // line 60
                        echo (($__internal_compile_5 = $context["order_status"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["total"] ?? null) : null);
                        echo "</span>";
                        echo (($__internal_compile_6 = $context["order_status"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                        echo "
                      </label>
                    </div>
                    ";
                    }
                    // line 64
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                ";
            }
            // line 66
            echo "              </div>

              <div class=\"notification_body\">
                <div class=\"table-responsive\">
                  <table style=\"border-left: 1px solid #eee;\">
                    <tbody>
                      ";
            // line 72
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 73
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 74
                    echo "                        <tr>
                          <td style=\"padding-left:20px;\">
                            <li class=\"li_font_family\" style=\"margin-left:10px;\">";
                    // line 76
                    echo $context["seller_notification"];
                    echo "</li>
                            <hr width=\"700px;\">
                          </td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                      ";
            }
            // line 82
            echo "                    </tbody>
                  </table>
                </div>
                <div class=\"row\">
                  <div class=\"col-sm-6 text-left\">";
            // line 86
            echo ($context["pagination"] ?? null);
            echo "</div>
                  <div class=\"col-sm-6 text-right\">";
            // line 87
            echo ($context["results"] ?? null);
            echo "</div>
                </div>
              </div>
            </div>
            ";
        } else {
            // line 92
            echo "              ";
            echo ($context["text_no_notification"] ?? null);
            echo "
            ";
        }
        // line 94
        echo "          </div>

          <div class=\"tab-pane\" id=\"tab-product\">
            ";
        // line 97
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 98
            echo "              <div class=\"table-responsive\">
                <table>
                  <tbody>
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                // line 102
                echo "                      <tr>
                        <td style=\"padding-left:20px;\">
                          <li class=\"li_font_family\" style=\"margin-left:10px;\">";
                // line 104
                echo $context["seller_product_review"];
                echo "</li>
                          <hr width=\"700px;\">
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                  </tbody>
                </table>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 113
            echo ($context["pagination_product"] ?? null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 114
            echo ($context["results_product"] ?? null);
            echo "</div>
              </div>
              ";
        } else {
            // line 117
            echo "                ";
            echo ($context["text_no_notification"] ?? null);
            echo "
              ";
        }
        // line 119
        echo "          </div>

          <div class=\"tab-pane\" id=\"tab-seller\">
            ";
        // line 122
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 123
            echo "              <div class=\"table-responsive\">
                <table>
                  <tbody>
                    ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                // line 127
                echo "                      <tr>
                        <td style=\"padding-left:20px;\">
                          <li class=\"li_font_family\" style=\"margin-left:10px;\">";
                // line 129
                echo $context["seller_review"];
                echo "</li>
                          <hr width=\"700px;\">
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                  </tbody>
                </table>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 138
            echo ($context["pagination_seller"] ?? null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 139
            echo ($context["results_seller"] ?? null);
            echo "</div>
              </div>
              ";
        } else {
            // line 142
            echo "                ";
            echo ($context["text_no_notification"] ?? null);
            echo "
              ";
        }
        // line 144
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">

  \$('.nav-tabs li a').on('click',function(){
    if (\$(this).attr('id')) {
      localStorage.setItem(\"tab-active\",\$(this).attr('id'))
      localStorage.setItem(\"tab-pane-active\",\$(this).attr('id').substring(4))
    }
  });

  \$(document).ready(function(){
    var tab_active = localStorage.getItem(\"tab-active\");
    var tab_pane_active = localStorage.getItem(\"tab-pane-active\");

";
        // line 165
        if ((array_key_exists("tab", $context) && ($context["tab"] ?? null))) {
            // line 166
            echo "  tab_active = 'tab_tab-";
            echo ($context["tab"] ?? null);
            echo "';
  tab_pane_active = 'tab-";
            // line 167
            echo ($context["tab"] ?? null);
            echo "';
";
        }
        // line 169
        echo "
    if (tab_active && tab_pane_active) {
      \$(\"#\"+tab_active).parent().addClass('active');
      \$(\"#\"+tab_active).parent().siblings().removeClass('active');
      \$(\"#\"+tab_pane_active).addClass('active');
      \$(\"#\"+tab_pane_active).siblings().removeClass('active');
    }

  });

</script>

<script type=\"text/javascript\">
  \$('input[name*=\\'selected\\']').on('click',function(){
    var options = '';
    \$('input[name*=\\'selected\\']:checked').each(function(index,item){
        options += ','+\$(item).val();
    });

    var url = 'index.php?route=customerpartner/notification&page=";
        // line 188
        echo ($context["page"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "';

    if (options) {
      url += '&options='+options.substr(1);
    }

    location = url;
  });
</script>
<style>
  .li_font_family{
    //font-family: monospace;
  }

  .span_margin{
    margin-top:4px;
  }

  .all_notifications_div{
    display:inline-flex;
    width: 100%;
  }
  .notification_filter{
    width:20%;
    font-size:15px;
  }

  .notification_body{
    width:80%;
  }
  @media screen and (max-width: 700px) {
    .all_notifications_div{
      display: inline;
    }

    .notification_filter{
      width:100%;
    }

    .notification_body{
      width:100%;
    }
  }
</style>
";
        // line 232
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__8e969f05890cc6dde9bffdc7cb4804c71b7f24e4bba38e96b8b548089c9eeb9e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 232,  417 => 188,  396 => 169,  391 => 167,  386 => 166,  384 => 165,  361 => 144,  355 => 142,  349 => 139,  345 => 138,  339 => 134,  328 => 129,  324 => 127,  320 => 126,  315 => 123,  313 => 122,  308 => 119,  302 => 117,  296 => 114,  292 => 113,  286 => 109,  275 => 104,  271 => 102,  267 => 101,  262 => 98,  260 => 97,  255 => 94,  249 => 92,  241 => 87,  237 => 86,  231 => 82,  228 => 81,  217 => 76,  213 => 74,  208 => 73,  206 => 72,  198 => 66,  195 => 65,  189 => 64,  180 => 60,  172 => 59,  168 => 57,  165 => 56,  160 => 55,  158 => 54,  149 => 50,  143 => 49,  132 => 43,  126 => 42,  120 => 38,  118 => 37,  111 => 33,  107 => 32,  103 => 31,  95 => 26,  90 => 23,  82 => 19,  80 => 18,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8e969f05890cc6dde9bffdc7cb4804c71b7f24e4bba38e96b8b548089c9eeb9e", "");
    }
}
