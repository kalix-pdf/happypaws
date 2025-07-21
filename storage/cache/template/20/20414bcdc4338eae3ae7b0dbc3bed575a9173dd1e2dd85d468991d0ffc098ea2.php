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

/* account/customerpartner/income.twig */
class __TwigTemplate_79414d32048b5d20494126ae560197ef1a4349504d7d09fe5f42f9e128705ca4 extends Template
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
            echo "    <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 5
            echo "    <div class=\"container\">
";
        }
        // line 7
        echo "        <ul class=\"breadcrumb\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                <li><a href=\"";
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
        echo "        </ul>

        ";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>
        ";
        }
        // line 16
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 17
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"> </i> ";
            echo ($context["success"] ?? null);
            echo "</div>
        ";
        }
        // line 19
        echo "        <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "                ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "                ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "                ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "            ";
        }
        // line 27
        echo "        
            <div id=\"content\" class=\"";
        // line 28
        echo ($context["class"] ?? null);
        echo "\">
                ";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "
                <h1>";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <fieldset>
                    <legend><i class=\"fa fa-list\"></i> ";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</legend>
                    <div class=\"well\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-group_by\" class=\"control-label\">";
        // line 37
        echo ($context["entry_group_by"] ?? null);
        echo "</label>
                                    <select name=\"filter_display_type\" id=\"display_type\" class=\"form-control\">
                                        <option value=\"product\" ";
        // line 39
        if ((array_key_exists("filter_display_type", $context) && (($context["filter_display_type"] ?? null) == "product"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_product"] ?? null);
        echo "</option>
                                        <option value=\"order\" ";
        // line 40
        if ((array_key_exists("filter_display_type", $context) && (($context["filter_display_type"] ?? null) == "order"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_order"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"input-group_by\" class=\"control-label\">";
        // line 46
        echo ($context["entry_group_by"] ?? null);
        echo "</label>
                                    <select name=\"filter_display_group\" id=\"display_group\" class=\"form-control\">
                                        <option value=\"year\" ";
        // line 48
        if ((array_key_exists("filter_display_group", $context) && (($context["filter_display_group"] ?? null) == "year"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_yearly"] ?? null);
        echo "</option>
                                        <option value=\"month\" ";
        // line 49
        if ((array_key_exists("filter_display_group", $context) && (($context["filter_display_group"] ?? null) == "month"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_monthly"] ?? null);
        echo "</option>
                                        <option value=\"week\" ";
        // line 50
        if ((array_key_exists("filter_display_group", $context) && (($context["filter_display_group"] ?? null) == "week"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_weekly"] ?? null);
        echo "</option>
                                        <option value=\"day\" ";
        // line 51
        if ((array_key_exists("filter_display_group", $context) && (($context["filter_display_group"] ?? null) == "day"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_days"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                                <div class=\"filter_button\">
                                    <a href=\"";
        // line 55
        echo ($context["reset"] ?? null);
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left:10px;\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</a>
                                    <button class=\"btn btn-primary pull-right\" id=\"button-filter\"><i class=\"fa fa-filter\"></i> ";
        // line 56
        echo ($context["button_filter"] ?? null);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class=\"table-responsive\">
                    ";
        // line 63
        if ((array_key_exists("filter_display_type", $context) && (($context["filter_display_type"] ?? null) == "product"))) {
            // line 64
            echo "                        <table class=\"table table-bordered table-hover\" id=\"table-product\">
                            <thead>
                                <tr>
                                    <td>
                                        ";
            // line 68
            if ((($context["sort"] ?? null) == "c2o.date_added")) {
                // line 69
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 71
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            }
            // line 73
            echo "                                    </td>
                                    <td>
                                        ";
            // line 75
            if ((($context["sort"] ?? null) == "pd.name")) {
                // line 76
                echo "                                            <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_product_name"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 78
                echo "                                            <a href=\"";
                echo ($context["sort_name"] ?? null);
                echo "\">";
                echo ($context["entry_product_name"] ?? null);
                echo "</a>
                                        ";
            }
            // line 80
            echo "                                    </td>
                                    <td>
                                        ";
            // line 82
            if ((($context["sort"] ?? null) == "product_total")) {
                // line 83
                echo "                                            <a href=\"";
                echo ($context["sort_product_total"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_product_total"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 85
                echo "                                            <a href=\"";
                echo ($context["sort_product_total"] ?? null);
                echo "\">";
                echo ($context["entry_product_total"] ?? null);
                echo "</a>
                                        ";
            }
            // line 87
            echo "                                    </td>
                                    <td>
                                        ";
            // line 89
            if ((($context["sort"] ?? null) == "seller_amount")) {
                // line 90
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 92
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 94
            echo "                                    </td>
                                    <td>
                                        ";
            // line 96
            if ((($context["sort"] ?? null) == "admin_amount")) {
                // line 97
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 99
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 101
            echo "                                    </td>
                                    ";
            // line 102
            if ((array_key_exists("sbsType", $context) && (($context["sbsType"] ?? null) == 3))) {
                // line 103
                echo "                                    <td>
                                        Commission Fee
                                        ";
                // line 105
                if ((($context["sort"] ?? null) == "cms_Commission_fee")) {
                    // line 106
                    echo "                                            <a href=\"";
                    echo ($context["sort_commission_fee"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["entry_commission_fee"] ?? null);
                    echo "</a>
                                        ";
                } else {
                    // line 108
                    echo "                                            <a href=\"";
                    echo ($context["sort_commission_fee"] ?? null);
                    echo "\">";
                    echo ($context["entry_commission_fee"] ?? null);
                    echo "</a>
                                        ";
                }
                // line 110
                echo "                                    </td>
                                    ";
            }
            // line 112
            echo "                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 115
            if ((array_key_exists("income_lists", $context) && ($context["income_lists"] ?? null))) {
                // line 116
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["income_lists"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["income_list"]) {
                    // line 117
                    echo "                                       <tr>
                                           <td>";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "date_start", [], "any", false, false, false, 118);
                    echo "</td>
                                           <td>";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "name", [], "any", false, false, false, 119);
                    echo "</td>
                                           <td>";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "product_total", [], "any", false, false, false, 120);
                    echo "</td>
                                           <td>";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "seller_amount", [], "any", false, false, false, 121);
                    echo "</td>
                                           <td>";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "admin_amount", [], "any", false, false, false, 122);
                    echo "</td>
                                           ";
                    // line 123
                    if ((array_key_exists("sbsType", $context) && (($context["sbsType"] ?? null) == 3))) {
                        // line 124
                        echo "                                           <td>";
                        echo twig_get_attribute($this->env, $this->source, $context["income_list"], "cms_commission_fee", [], "any", false, false, false, 124);
                        echo "</td>
                                           ";
                    }
                    // line 126
                    echo "                                       </tr> 
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['income_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                                ";
            }
            // line 129
            echo "                            </tbody>
                        </table>  
                    ";
        } else {
            // line 132
            echo "                        <table class=\"table table-bordered table-hover\" id=\"table-order\">
                            <thead>
                                <tr>
                                    <td>
                                        ";
            // line 136
            if ((($context["sort"] ?? null) == "c2o.date_added")) {
                // line 137
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 139
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            }
            // line 141
            echo "                                    </td>
                                    <td>
                                        ";
            // line 143
            if ((($context["sort"] ?? null) == "order_total")) {
                // line 144
                echo "                                            <a href=\"";
                echo ($context["sort_order_total"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_order_total"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 146
                echo "                                            <a href=\"";
                echo ($context["sort_order_total"] ?? null);
                echo "\">";
                echo ($context["entry_order_total"] ?? null);
                echo "</a>
                                        ";
            }
            // line 148
            echo "                                    </td>
                                    <td>
                                        ";
            // line 150
            if ((($context["sort"] ?? null) == "seller_amount")) {
                // line 151
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 153
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 155
            echo "                                    </td>
                                    <td>
                                        ";
            // line 157
            if ((($context["sort"] ?? null) == "admin_amount")) {
                // line 158
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 160
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 162
            echo "                                    </td>
                                    <td>try</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 167
            if ((array_key_exists("income_lists", $context) && ($context["income_lists"] ?? null))) {
                // line 168
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["income_lists"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["income_list"]) {
                    // line 169
                    echo "                                       <tr>
                                           <td>";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "date_start", [], "any", false, false, false, 170);
                    echo "</td>
                                           <td>";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "order_total", [], "any", false, false, false, 171);
                    echo "</td>
                                           <td>";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "seller_amount", [], "any", false, false, false, 172);
                    echo "</td>
                                           <td>";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "admin_amount", [], "any", false, false, false, 173);
                    echo "</td>
                                       </tr> 
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['income_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                                ";
            }
            echo "          
                            </tbody>
                        </table>
                    ";
        }
        // line 179
        echo "                    
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 182
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 183
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
                ";
        // line 185
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
            ";
        // line 187
        echo ($context["column_right"] ?? null);
        echo "
        </div>
    </div>
    <script>
        \$(document).on('click', '#button-filter', function() {
        
            ";
        // line 193
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 194
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=pd.name" . "&order=") . ($context["order"] ?? null));
            // line 195
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "c2o.date_added")) {
            // line 196
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=c2o.date_added" . "&order=") . ($context["order"] ?? null));
            // line 197
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "product_total")) {
            // line 198
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=product_total" . "&order=") . ($context["order"] ?? null));
            // line 199
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "order_total")) {
            // line 200
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=order_total" . "&order=") . ($context["order"] ?? null));
            // line 201
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "admin_amount")) {
            // line 202
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=admin_amount" . "&order=") . ($context["order"] ?? null));
            // line 203
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "seller_amount")) {
            // line 204
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=seller_amount" . "&order=") . ($context["order"] ?? null));
            // line 205
            echo "            ";
        } else {
            // line 206
            echo "                ";
            $context["url_link"] = ("index.php?route=account/customerpartner/income&order=" . ($context["order"] ?? null));
            // line 207
            echo "            ";
        }
        // line 208
        echo "        
            var url = '";
        // line 209
        echo ($context["url_link"] ?? null);
        echo "';

            var filter_display_type = \$('select[name=\\'filter_display_type\\']').val();

            if (filter_display_type) {
                url += '&filter_display_type=' + encodeURIComponent(filter_display_type);
            }

            var filter_display_group = \$('select[name=\\'filter_display_group\\']').val();

            if (filter_display_group) {
                url += '&filter_display_group=' + encodeURIComponent(filter_display_group);
            }

            location = url;
        });        
    </script>
    ";
        // line 226
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "account/customerpartner/income.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 226,  656 => 209,  653 => 208,  650 => 207,  647 => 206,  644 => 205,  641 => 204,  638 => 203,  635 => 202,  632 => 201,  629 => 200,  626 => 199,  623 => 198,  620 => 197,  617 => 196,  614 => 195,  611 => 194,  609 => 193,  600 => 187,  595 => 185,  590 => 183,  586 => 182,  581 => 179,  573 => 176,  564 => 173,  560 => 172,  556 => 171,  552 => 170,  549 => 169,  544 => 168,  542 => 167,  535 => 162,  527 => 160,  517 => 158,  515 => 157,  511 => 155,  503 => 153,  493 => 151,  491 => 150,  487 => 148,  479 => 146,  469 => 144,  467 => 143,  463 => 141,  455 => 139,  445 => 137,  443 => 136,  437 => 132,  432 => 129,  429 => 128,  422 => 126,  416 => 124,  414 => 123,  410 => 122,  406 => 121,  402 => 120,  398 => 119,  394 => 118,  391 => 117,  386 => 116,  384 => 115,  379 => 112,  375 => 110,  367 => 108,  357 => 106,  355 => 105,  351 => 103,  349 => 102,  346 => 101,  338 => 99,  328 => 97,  326 => 96,  322 => 94,  314 => 92,  304 => 90,  302 => 89,  298 => 87,  290 => 85,  280 => 83,  278 => 82,  274 => 80,  266 => 78,  256 => 76,  254 => 75,  250 => 73,  242 => 71,  232 => 69,  230 => 68,  224 => 64,  222 => 63,  212 => 56,  206 => 55,  195 => 51,  187 => 50,  179 => 49,  171 => 48,  166 => 46,  153 => 40,  145 => 39,  140 => 37,  132 => 32,  127 => 30,  123 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  96 => 20,  91 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/income.twig", "");
    }
}
