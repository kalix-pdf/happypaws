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
class __TwigTemplate_96e74e9f20d53c9a75fe9cd4362a2dcf2c498c493d1b1de757370d06b5ea5d9d extends Template
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
                                    <td>
                                        Commission Fee
                                        ";
            // line 104
            if ((($context["sort"] ?? null) == "cms_Commission_fee")) {
                // line 105
                echo "                                            <a href=\"";
                echo ($context["sort_commission_fee"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_commission_fee"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 107
                echo "                                            <a href=\"";
                echo ($context["sort_commission_fee"] ?? null);
                echo "\">";
                echo ($context["entry_commission_fee"] ?? null);
                echo "</a>
                                        ";
            }
            // line 109
            echo "                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 113
            if ((array_key_exists("income_lists", $context) && ($context["income_lists"] ?? null))) {
                // line 114
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["income_lists"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["income_list"]) {
                    // line 115
                    echo "                                       <tr>
                                           <td>";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "date_start", [], "any", false, false, false, 116);
                    echo "</td>
                                           <td>";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "name", [], "any", false, false, false, 117);
                    echo "</td>
                                           <td>";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "product_total", [], "any", false, false, false, 118);
                    echo "</td>
                                           <td>";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "seller_amount", [], "any", false, false, false, 119);
                    echo "</td>
                                           <td>";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "admin_amount", [], "any", false, false, false, 120);
                    echo "</td>
                                           <td>";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "cms_commission_fee", [], "any", false, false, false, 121);
                    echo "</td>
                                       </tr> 
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['income_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                                ";
            }
            // line 125
            echo "                            </tbody>
                        </table>  
                    ";
        } else {
            // line 128
            echo "                        <table class=\"table table-bordered table-hover\" id=\"table-order\">
                            <thead>
                                <tr>
                                    <td>
                                        ";
            // line 132
            if ((($context["sort"] ?? null) == "c2o.date_added")) {
                // line 133
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 135
                echo "                                            <a href=\"";
                echo ($context["sort_date"] ?? null);
                echo "\">";
                echo ($context["entry_date_added"] ?? null);
                echo "</a>
                                        ";
            }
            // line 137
            echo "                                    </td>
                                    <td>
                                        ";
            // line 139
            if ((($context["sort"] ?? null) == "order_total")) {
                // line 140
                echo "                                            <a href=\"";
                echo ($context["sort_order_total"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_order_total"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 142
                echo "                                            <a href=\"";
                echo ($context["sort_order_total"] ?? null);
                echo "\">";
                echo ($context["entry_order_total"] ?? null);
                echo "</a>
                                        ";
            }
            // line 144
            echo "                                    </td>
                                    <td>
                                        ";
            // line 146
            if ((($context["sort"] ?? null) == "seller_amount")) {
                // line 147
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 149
                echo "                                            <a href=\"";
                echo ($context["sort_seller_amount"] ?? null);
                echo "\">";
                echo ($context["entry_seller_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 151
            echo "                                    </td>
                                    <td>
                                        ";
            // line 153
            if ((($context["sort"] ?? null) == "admin_amount")) {
                // line 154
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            } else {
                // line 156
                echo "                                            <a href=\"";
                echo ($context["sort_admin_amount"] ?? null);
                echo "\">";
                echo ($context["entry_admin_amount"] ?? null);
                echo "</a>
                                        ";
            }
            // line 158
            echo "                                    </td>
                                    <td>try</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 163
            if ((array_key_exists("income_lists", $context) && ($context["income_lists"] ?? null))) {
                // line 164
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["income_lists"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["income_list"]) {
                    // line 165
                    echo "                                       <tr>
                                           <td>";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "date_start", [], "any", false, false, false, 166);
                    echo "</td>
                                           <td>";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "order_total", [], "any", false, false, false, 167);
                    echo "</td>
                                           <td>";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "seller_amount", [], "any", false, false, false, 168);
                    echo "</td>
                                           <td>";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["income_list"], "admin_amount", [], "any", false, false, false, 169);
                    echo "</td>
                                       </tr> 
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['income_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                                ";
            }
            echo "          
                            </tbody>
                        </table>
                    ";
        }
        // line 175
        echo "                    
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 178
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 179
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
                ";
        // line 181
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
            ";
        // line 183
        echo ($context["column_right"] ?? null);
        echo "
        </div>
    </div>
    <script>
        \$(document).on('click', '#button-filter', function() {
        
            ";
        // line 189
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 190
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=pd.name" . "&order=") . ($context["order"] ?? null));
            // line 191
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "c2o.date_added")) {
            // line 192
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=c2o.date_added" . "&order=") . ($context["order"] ?? null));
            // line 193
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "product_total")) {
            // line 194
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=product_total" . "&order=") . ($context["order"] ?? null));
            // line 195
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "order_total")) {
            // line 196
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=order_total" . "&order=") . ($context["order"] ?? null));
            // line 197
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "admin_amount")) {
            // line 198
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=admin_amount" . "&order=") . ($context["order"] ?? null));
            // line 199
            echo "            ";
        } elseif ((($context["sort"] ?? null) == "seller_amount")) {
            // line 200
            echo "                ";
            $context["url_link"] = (("index.php?route=account/customerpartner/income&sort=seller_amount" . "&order=") . ($context["order"] ?? null));
            // line 201
            echo "            ";
        } else {
            // line 202
            echo "                ";
            $context["url_link"] = ("index.php?route=account/customerpartner/income&order=" . ($context["order"] ?? null));
            // line 203
            echo "            ";
        }
        // line 204
        echo "        
            var url = '";
        // line 205
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
        // line 222
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
        return array (  663 => 222,  643 => 205,  640 => 204,  637 => 203,  634 => 202,  631 => 201,  628 => 200,  625 => 199,  622 => 198,  619 => 197,  616 => 196,  613 => 195,  610 => 194,  607 => 193,  604 => 192,  601 => 191,  598 => 190,  596 => 189,  587 => 183,  582 => 181,  577 => 179,  573 => 178,  568 => 175,  560 => 172,  551 => 169,  547 => 168,  543 => 167,  539 => 166,  536 => 165,  531 => 164,  529 => 163,  522 => 158,  514 => 156,  504 => 154,  502 => 153,  498 => 151,  490 => 149,  480 => 147,  478 => 146,  474 => 144,  466 => 142,  456 => 140,  454 => 139,  450 => 137,  442 => 135,  432 => 133,  430 => 132,  424 => 128,  419 => 125,  416 => 124,  407 => 121,  403 => 120,  399 => 119,  395 => 118,  391 => 117,  387 => 116,  384 => 115,  379 => 114,  377 => 113,  371 => 109,  363 => 107,  353 => 105,  351 => 104,  346 => 101,  338 => 99,  328 => 97,  326 => 96,  322 => 94,  314 => 92,  304 => 90,  302 => 89,  298 => 87,  290 => 85,  280 => 83,  278 => 82,  274 => 80,  266 => 78,  256 => 76,  254 => 75,  250 => 73,  242 => 71,  232 => 69,  230 => 68,  224 => 64,  222 => 63,  212 => 56,  206 => 55,  195 => 51,  187 => 50,  179 => 49,  171 => 48,  166 => 46,  153 => 40,  145 => 39,  140 => 37,  132 => 32,  127 => 30,  123 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  96 => 20,  91 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/income.twig", "");
    }
}
