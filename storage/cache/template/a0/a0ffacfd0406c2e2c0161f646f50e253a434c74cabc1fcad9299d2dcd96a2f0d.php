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

/* __string_template__0671d9c6d504078b0a60b3fed56f121af4acefcd88a234ff22657c4125b93d5b */
class __TwigTemplate_97cba09ba8604a2125b0fe256182e7e47c38f21e9de33b90773b26101d3ff6ce extends Template
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
        // line 3
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 4
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 6
            echo "  <div class=\"container\">

<style>
h2 {
  line-height: 2.1 !important;
  font-size: 20px;
}
@media screen and  (width: 768px) {
  .responsive{
    margin-top: 290%;
    margin-left: -29px;
  }
}

#tabs.nav-tabs {

  margin-bottom: 10px;
  justify-content: flex-start;
  min-width: 50px;
}
.column-right #content {
padding-right: 20px;
padding-left: 20px !important;
}
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px\\9;
    margin-left: 0px;
    margin-top: 10px;
}
table td, table th {
    border-style: unset !important;
    border-color: rgba(221, 221, 221, 1) !important;
}
table td {
    padding: 1px 15px;
}
.buttons .pull-right:only-child .btn {
    width: auto !important;
    color:white;
}
.buttons .pull-right .btn, .buttons .pull-right .tooltip {
    background-color: rgba(12,77,117,1);
    --background-color: rgba(12,77,117,1);
}

</style>
<style>
  hr{
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .label-info{
    background-color: #5bc0de;
    padding: 0px 7px;
  }

  .label-warning{
    background-color: #f0ad4e;
    padding: 0px 7px;
  }

  .label-success{
    background-color: #5cb85c;
    padding: 0px 7px;
  }

  .label-danger{
    background-color: #d9534f;
    padding: 0px 7px;
  }

  .span_margin{
    margin-top:6px;
    margin-left:3px;
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
    width:100%;
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
  .span_margin {
    margin-top: 31px;
    margin-left: 24px;
}
.allNotification{
  position:relative !important; 
  top:-11px;
}

.results {
    margin-bottom: -3px;
    margin-top: -20px !important;
    margin-left:15px !important;
}
 .textNotification  {
    margin-top: 10px !important;
    
}
</style>
";
        }
        // line 129
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 131
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 131);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 131);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "  </ul>
  ";
        // line 134
        if (($context["error_warning"] ?? null)) {
            // line 135
            echo "  <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 137
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 138
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 139
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 140
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 141
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 144
            echo "    ";
        }
        // line 145
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 146
        echo ($context["text_notifications"] ?? null);
        echo "

          <div class=\"pull-right\">
            <a href=\"";
        // line 149
        echo ($context["back"] ?? null);
        echo "\" class=\"wk-btn btn btn-default button\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
          </div>

      </h1>
      ";
        // line 153
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"content\">
      <form method=\"post\" enctype=\"multipart/form-data\" id=\"form-notification\" class=\"form-horizontal\">
        <fieldset>
          <h2 class=\"secondary-title\">";
        // line 157
        echo ($context["text_notification_information"] ?? null);
        echo "</h2>
          ";
        // line 158
        if (($context["isMember"] ?? null)) {
            // line 159
            echo "            <div class=\"well\">
                <div class=\"row\" id=\"wk-filter_div\">
                  <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"input-status\">";
            // line 162
            echo "Notification";
            echo "</label>
                    <div class=\"col-md-10\">                          
                      <select name=\"selected\" id=\"input-status\" class=\"form-control\">
                        <option value=\"all\">";
            // line 165
            echo (($context["text_all_notification"] ?? null) . " (");
            echo (($context["all_notifications"] ?? null) . ")");
            echo "</option>
                        ";
            // line 166
            if ((((array_key_exists("order_statuses", $context) && ($context["order_statuses"] ?? null)) && array_key_exists("notification_filter", $context)) && ($context["notification_filter"] ?? null))) {
                // line 167
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                    // line 168
                    echo "                            ";
                    if (twig_in_filter((($__internal_compile_0 = $context["order_status"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["order_status_id"] ?? null) : null), ($context["notification_filter"] ?? null))) {
                        // line 169
                        echo "                              <option value=\"";
                        echo (($__internal_compile_1 = $context["order_status"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["order_status_id"] ?? null) : null);
                        echo "\" ";
                        if (((array_key_exists("selected", $context) && twig_test_iterable(($context["selected"] ?? null))) && twig_in_filter((($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order_status_id"] ?? null) : null), ($context["selected"] ?? null)))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo ((($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null) . " (");
                        echo " ";
                        echo ((($__internal_compile_4 = $context["order_status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["total"] ?? null) : null) . ")");
                        echo "</option>
                            ";
                    }
                    // line 171
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                        ";
            }
            // line 173
            echo "                        <option value=\"return\">";
            echo ($context["text_return"] ?? null);
            echo "</option>
                      </select>
                    </div>
                  </div>
                </div>
            <div>
            <ul id=\"tabs\" class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-order\" id=\"tab_tab-order\" data-toggle=\"tab\">";
            // line 180
            echo ($context["tab_order"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-product\" id=\"tab_tab-product\" data-toggle=\"tab\">";
            // line 181
            echo ($context["tab_product"] ?? null);
            echo "</a></li>
              <li><a href=\"#tab-seller\" id=\"tab_tab-seller\" data-toggle=\"tab\">";
            // line 182
            echo ($context["tab_seller"] ?? null);
            echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane tab-content active\" id=\"tab-order\">
                <div class=\"all_notifications_div\">                  
                  <div class=\"notification_body\">
                    ";
            // line 188
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 189
                echo "                      <div class=\"table-responsive table-scroll\">
                        <table class=\"table\" style=\"border-left: 1px solid #eee;\">
                          <tbody>
                            ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 193
                    echo "                              <tr>
                                <td style=\"padding-left:20px;\">
                                  <li style=\"margin-left:10px;\">";
                    // line 195
                    echo $context["seller_notification"];
                    echo "</li>
                                  <hr width=\"100%;\">
                                </td>
                              </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                          </tbody>
                        </table>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-6 text-left\">";
                // line 204
                echo ($context["pagination"] ?? null);
                echo "</div>
                        <div class=\"col-sm-6 text-right\">";
                // line 205
                echo ($context["results"] ?? null);
                echo "</div>
                      </div>
                    ";
            } else {
                // line 208
                echo "                    ";
                echo ($context["text_no_notification"] ?? null);
                echo "
                  ";
            }
            // line 210
            echo "                  </div>
                </div>

              </div>

              <div class=\"tab-pane tab-content\" id=\"tab-product\">
                ";
            // line 216
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 217
                echo "                  <div class=\"table-responsive table-scroll\">
                    <table class = \"table\">
                      <tbody>
                        ";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 221
                    echo "                          <tr>
                            <td style=\"padding-left:20px;\">
                              <li style=\"margin-left:10px;\">";
                    // line 223
                    echo $context["seller_product_review"];
                    echo "</li>
                              <hr width=\"100%;\">
                            </td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "                      </tbody>
                    </table>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
                // line 232
                echo ($context["pagination_product"] ?? null);
                echo "</div>
                    <div class=\"col-sm-6 text-right\">";
                // line 233
                echo ($context["results_product"] ?? null);
                echo "</div>
                  </div>
                ";
            } else {
                // line 236
                echo "  ";
                echo ($context["text_no_notification"] ?? null);
                echo "
";
            }
            // line 238
            echo "              </div>

              <div class=\"tab-pane tab-content\" id=\"tab-seller\">
                ";
            // line 241
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 242
                echo "                  <div class=\"table-responsive table-scroll\">
                    <table class =\"table\">
                      <tbody>
                        ";
                // line 245
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 246
                    echo "                          <tr>
                            <td style=\"padding-left:20px;\">
                              <li style=\"margin-left:10px;\">";
                    // line 248
                    echo $context["seller_review"];
                    echo "</li>
                              <hr width=\"100%;\">
                            </td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "                      </tbody>
                    </table>
                  </div>
                  
                   <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
                // line 258
                echo ($context["pagination_seller"] ?? null);
                echo "</div>
                    <div class=\"col-sm-6 text-right\">";
                // line 259
                echo ($context["results_seller"] ?? null);
                echo "</div>
                  </div>
                ";
            } else {
                // line 262
                echo "  ";
                echo ($context["text_no_notification"] ?? null);
                echo "
";
            }
            // line 264
            echo "              </div>

            </div>
          ";
        } else {
            // line 268
            echo "            <div class=\"text-danger\">
              ";
            // line 269
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
            </div>
          ";
        }
        // line 272
        echo "        </fieldset>
      </form>
      </div>
      ";
        // line 275
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 276
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>
<script ";
        // line 279
        echo ($context["type"] ?? null);
        echo ">

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
        // line 292
        if ((array_key_exists("tab", $context) && ($context["tab"] ?? null))) {
            // line 293
            echo "  tab_active = 'tab_tab-";
            echo ($context["tab"] ?? null);
            echo "';
  tab_pane_active = 'tab-";
            // line 294
            echo ($context["tab"] ?? null);
            echo "';
";
        }
        // line 296
        echo "
    if (tab_active && tab_pane_active) {
      \$(\"#\"+tab_active).parent().addClass('active');
      \$(\"#\"+tab_active).parent().siblings().removeClass('active');
      \$(\"#\"+tab_pane_active).addClass('active');
      \$(\"#\"+tab_pane_active).siblings().removeClass('active');
    }

  });

</script>
<script ";
        // line 307
        echo ($context["type"] ?? null);
        echo ">
  \$('select[name=\\'selected\\']').on('change',function(){
    var options = this.value;

    var url = 'index.php?route=account/customerpartner/notification&page=";
        // line 311
        echo ($context["page"] ?? null);
        echo "';

    if (options) {
      url += '&options='+options;
    }

    location = url;
  });
</script>

";
        // line 321
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__0671d9c6d504078b0a60b3fed56f121af4acefcd88a234ff22657c4125b93d5b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 321,  574 => 311,  567 => 307,  554 => 296,  549 => 294,  544 => 293,  542 => 292,  526 => 279,  520 => 276,  516 => 275,  511 => 272,  505 => 269,  502 => 268,  496 => 264,  490 => 262,  484 => 259,  480 => 258,  473 => 253,  462 => 248,  458 => 246,  454 => 245,  449 => 242,  447 => 241,  442 => 238,  436 => 236,  430 => 233,  426 => 232,  420 => 228,  409 => 223,  405 => 221,  401 => 220,  396 => 217,  394 => 216,  386 => 210,  380 => 208,  374 => 205,  370 => 204,  364 => 200,  353 => 195,  349 => 193,  345 => 192,  340 => 189,  338 => 188,  329 => 182,  325 => 181,  321 => 180,  310 => 173,  307 => 172,  301 => 171,  287 => 169,  284 => 168,  279 => 167,  277 => 166,  272 => 165,  266 => 162,  261 => 159,  259 => 158,  255 => 157,  248 => 153,  239 => 149,  233 => 146,  228 => 145,  225 => 144,  222 => 143,  219 => 142,  216 => 141,  213 => 140,  210 => 139,  208 => 138,  203 => 137,  197 => 135,  195 => 134,  192 => 133,  181 => 131,  177 => 130,  174 => 129,  49 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0671d9c6d504078b0a60b3fed56f121af4acefcd88a234ff22657c4125b93d5b", "");
    }
}
