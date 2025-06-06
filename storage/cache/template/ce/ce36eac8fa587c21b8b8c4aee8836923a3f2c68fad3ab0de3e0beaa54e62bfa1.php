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

/* __string_template__2ae834851bd4e6bb4966b626943ebabc79f79229aec31bdf9e0cc91bdb05c7c7 */
class __TwigTemplate_c3570365ed755af3347ba32f31f6a41b48b4d9cde01768fad3d30226ed6f2d0a extends Template
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
        echo "<style>
</style>
<div class=\"box\">
\t";
        // line 4
        if (array_key_exists("chkIsPartner", $context)) {
            // line 5
            echo "\t\t<div class=\"list-group\">
\t\t\t";
            // line 6
            if (($context["chkIsPartner"] ?? null)) {
                // line 7
                echo "\t\t\t\t";
                if (((array_key_exists("marketplace_account_menu_sequence", $context) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                    // line 8
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["marketplace_account_menu_sequence"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["menu_option"]) {
                        // line 9
                        echo "\t\t\t\t\t\t\t";
                        if (((array_key_exists("marketplace_allowed_account_menu", $context) && ($context["marketplace_allowed_account_menu"] ?? null)) && twig_in_filter($context["key"], ($context["marketplace_allowed_account_menu"] ?? null)))) {
                            // line 10
                            echo "\t\t\t\t\t\t\t\t";
                            if (($context["key"] == "asktoadmin")) {
                                // line 11
                                echo "\t\t\t\t\t\t\t\t\t<a id=\"ask-to-admin\" class=\"list-group-item\"  data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 12
                                echo $context["menu_option"];
                                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 15
                                echo "\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, ($context["account_menu_href"] ?? null), $context["key"], [], "array", true, true, false, 15) && (($__internal_compile_0 = ($context["account_menu_href"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null))) {
                                    // line 16
                                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo (($__internal_compile_1 = ($context["account_menu_href"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null);
                                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 17
                                    echo $context["menu_option"];
                                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 20
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 21
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 22
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t";
                if ((array_key_exists("hasApplied", $context) && ($context["hasApplied"] ?? null))) {
                    // line 26
                    echo "\t\t\t\t\t<a href=\"";
                    echo ($context["want_partner"] ?? null);
                    echo "\" class=\"list-group-item\">";
                    echo ($context["text_becomePartner"] ?? null);
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t\t<a href=\"";
                    echo ($context["want_partner"] ?? null);
                    echo "\" class=\"list-group-item\">";
                    echo ($context["text_becomePartner"] ?? null);
                    echo "</a>
\t\t\t\t";
                }
                // line 30
                echo "\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        } elseif (        // line 32
array_key_exists("partner", $context)) {
            // line 33
            echo "\t\t";
            $context["addClass"] = "col-lg-3 col-md-3 col-sm-6";
            // line 34
            echo "\t\t<style>
\t\t\t";
            // line 40
            echo "\t\t</style>
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12 px-3\">
\t\t\t\t<div>
\t\t\t\t\t<div class=\"d-flex px-4 gap-5\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "thumb", [], "array", true, true, false, 47) && (($__internal_compile_2 = ($context["partner"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["thumb"] ?? null) : null))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo (($__internal_compile_3 = ($context["partner"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["firstname"] ?? null) : null);
                echo "\" class=\"img-fluid rounded-2\" style=\"height:100px;object-fit:content;\">
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"fs-3\" style=\"overflow-wrap:break-word;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companyname", [], "array", true, true, false, 57) && (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["companyname"] ?? null) : null))) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["full_name"] = (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["companyname"] ?? null) : null);
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["companyname"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["full_name"] = (((($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["firstname"] ?? null) : null) . " ") . (($__internal_compile_9 = ($context["partner"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lastname"] ?? null) : null));
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo (((($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["firstname"] ?? null) : null) . " ") . (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lastname"] ?? null) : null));
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"wk-right wk-link\" ";
            // line 66
            if ((twig_length_filter($this->env, ($context["full_name"] ?? null)) < 12)) {
                echo " style=\"margin-top:10px; margin-bottom:10px;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "sellerHref", [], "any", false, false, false, 67);
            echo "\">";
            echo "View Store";
            echo "</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"wk-right wk-product-count\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 71
            echo (twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "total_products", [], "any", false, false, false, 71) . " Product(s)");
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"min-contact\" style=\"text-align: start;\">
\t\t\t\t\t\t<div class=\"card-div seller-rating\">
\t\t\t\t\t\t\t<div class=\"card-div-first\">";
            // line 80
            echo "Store rating: ";
            echo "</div>
\t\t\t\t\t\t\t<div class=\"card-div-scnd ";
            // line 81
            if (($context["feedback_total"] ?? null)) {
                echo "rating";
            } else {
                echo "rating no-rating";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 81), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 81) == " hover")) {
                echo "rating-hover";
            }
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 82
            $context["giveReview"] = 0;
            // line 83
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["customer_id"] ?? null) != ($context["seller_id"] ?? null))) {
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 84
                if (($context["logged"] ?? null)) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["give_review"] ?? null)) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["giveReview"] = (0 + 1);
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "
\t\t\t\t\t\t\t\t";
            // line 91
            if (($context["feedback_total"] ?? null)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<div class=\"rating-stars ";
                if (($context["giveReview"] ?? null)) {
                    echo "review-button-popup ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["feedback_total"] ?? null) < $context["i"])) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
                echo ($context["feedback_total"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"rating-stars ";
                // line 103
                if (($context["giveReview"] ?? null)) {
                    echo "review-button-popup ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["feedback_total"] ?? null) < $context["i"])) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
                // line 112
                echo ($context["feedback_total"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 228
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t";
            // line 242
            echo "\t\t</div>
\t";
        }
        // line 244
        echo "</div>

<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 253
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 255
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 261
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">\t
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 267
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\"class=\"form-control\"></textarea>
\t\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t\t";
        // line 270
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 274
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 275
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 276
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 279
                echo (($__internal_compile_12 = $context["review_field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["field_name"] ?? null) : null);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 282
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"review_attributes[";
                    echo (($__internal_compile_13 = $context["review_field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["field_id"] ?? null) : null);
                    echo "]\"
\t\t\t\t\t\t\t\t\tname=\"review_attributes[";
                    // line 285
                    echo (($__internal_compile_14 = $context["review_field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "\t\t\t\t\t\t\t\t&nbsp;";
                echo ($context["entry_good"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "\t\t\t\t\t";
        }
        // line 293
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 295
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review-mp\" data-loading-text=\"";
        // line 296
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 297
        echo ($context["text_send"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
\t<!-- /.modal-content -->
</div><!-- /.modal -->

<div class=\"modal fade\" id=\"myModal-notification\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 309
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 311
        echo "Hi ";
        echo "
\t\t\t\t\t";
        // line 312
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "firstname", [], "array", true, true, false, 312)) {
            // line 313
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_15 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["firstname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "lastname", [], "array", true, true, false, 315)) {
            // line 316
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_16 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["lastname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 318
        echo "\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 322
        if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
            // line 323
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 326
            echo ($context["text_order"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 329
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 330
            echo ($context["processing_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 331
            echo ($context["text_processing_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 334
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 335
            echo ($context["complete_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 336
            echo ($context["text_complete_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 339
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 340
            echo ($context["return_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 341
            echo ($context["text_return"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 344
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 345
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 346
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_notification"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 350
                echo ($context["view_all"] ?? null);
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 354
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 357
        echo "\t\t\t\t";
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 358
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 361
            echo ($context["text_product"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 364
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 365
            echo ($context["product_stock_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 366
            echo ($context["text_stock"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 369
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 370
            echo ($context["review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 371
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 374
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 375
            echo ($context["approval_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 376
            echo ($context["text_approval"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 379
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 380
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 381
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_product_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 384
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 385
                echo (($context["view_all"] ?? null) . "&tab=product");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 389
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 392
        echo "\t\t\t\t";
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 393
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 396
            echo ($context["text_entry_seller"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 399
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 400
            echo ($context["seller_review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 401
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 404
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 405
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 407
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 410
                echo (($context["view_all"] ?? null) . "&tab=seller");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 414
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 416
        echo "\t\t\t\t";
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !($context["seller_notifications"] ?? null) &&  !($context["seller_product_reviews"] ?? null)) &&  !($context["seller_reviews"] ?? null)))) {
            // line 417
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<h4>";
            // line 418
            echo ($context["text_no_notification"] ?? null);
            echo "</h4>
\t\t\t\t\t</center>
\t\t\t\t";
        }
        // line 421
        echo "\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 424
        echo ($context["view_all"] ?? null);
        echo "\" class=\"wk-btn btn btn-primary button\" style=\"color:white;\">";
        echo ($context["text_view_all_notificatins"] ?? null);
        echo "</a>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default button\" data-dismiss=\"modal\">";
        // line 425
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<style type=\"text/css\">
\t#myModal-notification li {
\t\tfont-family: monospace;
\t}

\t/*\t.modal-dialog {
\t\twidth: 500px;
\t}*/
\t.sellerBackground {
\t\t";
        // line 443
        if ((twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "backgroundcolor", [], "array", true, true, false, 443) && (($__internal_compile_17 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["backgroundcolor"] ?? null) : null))) {
            // line 444
            echo "\t\t\tbackground-color: ";
            echo (($__internal_compile_18 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["backgroundcolor"] ?? null) : null);
            echo "
\t\t\t;
\t\t";
        } else {
            // line 447
            echo "\t\t\tbackground-color: #FF4D45;
\t\t";
        }
        // line 449
        echo "\t\theight: 200px;
\t\ttext-align: center;
\t}

\t.seller_detail_stripe {
\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\tbox-shadow: 0 0 1px 1px rgba(255, 255, 255, 0.2);
\t\theight: 30px;
\t\tmargin-top: 5px;
\t\twidth: 100%;
\t}

\t.seller_detail_stripe p {
\t\tcolor: #fff;
\t\tfont-size: 18px;
\t\tline-height: 30px;
\t}

\t.seller-dp {
\t\theight: 100px;
\t\tmargin-top: 35px;
\t}
</style>

<div class=\"modal fade\" id=\"myModal-seller-info\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"border-radius:0px\">
\t\t\t<div class=\"modal-body\" style=\"padding-top:0px\">
\t\t\t\t";
        // line 477
        if ((((array_key_exists("launchModal", $context) && ($context["launchModal"] ?? null)) && array_key_exists("sellerProfile", $context)) && ($context["sellerProfile"] ?? null))) {
            // line 478
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 sellerBackground\" style=\"\">
\t\t\t\t\t\t\t<div class=\"seller-dp\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 481
            echo (($__internal_compile_19 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["avatar"] ?? null) : null);
            echo "\" alt=\"";
            echo (((($__internal_compile_20 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["firstname"] ?? null) : null) . " ") . (($__internal_compile_21 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["lastname"] ?? null) : null));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"seller_detail_stripe\" style=\"\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 485
            echo (((($context["text_welcome"] ?? null) . (($__internal_compile_22 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["firstname"] ?? null) : null)) . " ") . (($__internal_compile_23 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["lastname"] ?? null) : null));
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 491
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t";
        // line 493
        if ((twig_get_attribute($this->env, $this->source, ($context["lowStockProducts"] ?? null), "products", [], "array", true, true, false, 493) && (($__internal_compile_24 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["products"] ?? null) : null))) {
            // line 494
            echo "\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t\t<h3>";
            // line 496
            echo ($context["text_low_stock"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 502
            echo ($context["text_productname"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 503
            echo ($context["text_model"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 504
            echo ($context["text_quantity"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["products"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lowStockProduct"]) {
                // line 509
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 511
                echo (($__internal_compile_26 = $context["lowStockProduct"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 514
                echo (($__internal_compile_27 = $context["lowStockProduct"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 517
                echo (($__internal_compile_28 = $context["lowStockProduct"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["quantity"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lowStockProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((array_key_exists("totalProductsLowStock", $context) && (($context["totalProductsLowStock"] ?? null) > 5))) {
                // line 522
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 524
                echo ($context["moreProductUrl"] ?? null);
                echo "\" class=\"btn btn-info btn-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 530
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- table responsive -->
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<!-- low stock field set -->
\t\t\t\t\t\t";
        }
        // line 537
        echo "\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t<h3>";
        // line 539
        echo ($context["text_most_viewed"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 545
        echo ($context["text_productname"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 546
        echo ($context["text_model"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 547
        echo ($context["text_views"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 551
        if ((array_key_exists("mostViewedProducts", $context) && ($context["mostViewedProducts"] ?? null))) {
            // line 552
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mostViewedProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mostViewedProduct"]) {
                // line 553
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 555
                echo (($__internal_compile_29 = $context["mostViewedProduct"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 558
                echo (($__internal_compile_30 = $context["mostViewedProduct"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 561
                echo (($__internal_compile_31 = $context["mostViewedProduct"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["viewed"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostViewedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 565
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 566
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 568
            echo ($context["text_more_work"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 572
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<!-- view fieldset -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- col-sm-12 -->
\t\t\t\t</div>
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-danger btn-sm\" style=\"margin-top:10px;\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t";
        // line 585
        echo ($context["text_close"] ?? null);
        echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- row -->
\t\t\t</div>
\t\t\t<!-- modal-body -->
\t\t</div>
\t\t<!-- modal-content -->
\t</div>
\t<!-- modal-dialog -->
</div>
<!-- modal -->
\t";
        // line 599
        if (array_key_exists("chkIsPartner", $context)) {
            // line 600
            echo "
\t";
        } elseif ( !        // line 601
array_key_exists("partner", $context)) {
            // line 602
            echo "\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(document).find('aside#column-right .box').parent().css('display','none');
\t\t});
\t</script>
";
        }
        // line 608
        echo "<script>
\tvar launchModal = ";
        // line 609
        echo ((($context["launchModal"] ?? null)) ? (($context["launchModal"] ?? null)) : (0));
        echo ";
\t\$(document).ready(function () {

\t\t\$(document).on('click','a[data-target=\"#myModal-seller-mail\"]',function(){
\t\t\t\$('#myModal-seller-mail').appendTo('body').modal();
\t\t\t\$('#myModal-seller-mail').modal('show');
\t\t});

\t\t\t\t
\t\t// myModal-seller-mail
\t\t// \$('#myModal-seller-info').modal();
\t\tif (launchModal && window.innerWidth > 767) {
\t\t\t\$('#myModal-seller-info').appendTo('body').modal();
\t\t}
\t});
\t";
        // line 624
        if (array_key_exists("partner", $context)) {
            // line 625
            echo "\t\t\$(document).ready(function () {
\t\t\tif (\$('#content').hasClass('col-sm-12')) {
\t\t\t\t\$('.marketplace .row .product-seller').addClass('";
            // line 627
            echo ($context["addClass"] ?? null);
            echo "');
\t\t\t}
\t\t});
\t";
        }
        // line 631
        echo "
\t";
        // line 632
        if ((($context["contact_mail"] ?? null) && ($context["logged"] ?? null))) {
            // line 633
            echo "
\t\t\$(document).find('.wk-menu li a').each(function(i,v){
\t\t\tif(\$(v).attr('id') == 'ask-to-admin menu-ask-to-admin') {
\t\t\t\t\$(v).on('click',function(){
\t\t\t\t\t\$('#myModal-seller-mail').appendTo('body').modal();
\t\t\t\t\t\$('#myModal-seller-mail').modal('show');
\t\t\t\t});
\t\t\t}
\t\t});

\t\t";
            // line 648
            echo "
\t\t\$('#send-mail').on('click', function () {
\t\t\tf = 0;
\t\t\t\$('.alert').remove();
\t\t\t\$('#myModal-seller-mail input[type=\\'text\\'],#myModal-seller-mail textarea').each(function () {
\t\t\t\tif (\$(this).val().trim() == '') {
\t\t\t\t\t\$(this).parent().addClass('has-error');
\t\t\t\t\tf ++;
\t\t\t\t} else {
\t\t\t\t\t\$(this).parent().removeClass('has-error');
\t\t\t\t}
\t\t\t});

\t\t\tif (f > 0) {
\t\t\t\t\$('#myModal-seller-mail .error').text('";
            // line 662
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t\t} else {
\t\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>   ";
            // line 667
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
            // line 670
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\t\tdata: \$('#seller-mail-form').serialize() +'";
            // line 671
            echo ($context["mail_for"] ?? null);
            echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$('#send-mail').removeClass('disabled');
\t\t\t\t\t\t\$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(function () {
\t\t\t\t\t\t\tif (this.type != 'hidden') {
\t\t\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t\t\t\t\$(this).text('');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});
\t";
        }
        // line 687
        echo "
\t\$(document).find('.review-button-popup').on('click', function() {
\t\t
\t\t\$('#myModal-seller-review').appendTo('body').modal();
\t\t\$(document).find('#myModal-seller-review').modal('show');
\t});

\t/**
   \t* [To store feedback]
\t* @return {none} [It will not return anything just reflect the form if unsuccessful and empty the form if successful]
\t*/
\t\$(document).on('click','#button-review-mp', function() {
\t\t\$.ajax({
\t\t\turl: '";
        // line 700
        echo ($context["writeFeedback"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#seller_review_form input[type=\\'text\\'],input[type=\\'radio\\']:checked,textarea'),

\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-feedback').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-feedback').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review-modal').before(
\t\t\t\t\t\t'<div class=\"alert alert-danger warning\" style=\"width:95%;\"><i class=\"fa fa-exclamation-circle\"></i> ' +
\t\t\t\t\t\tjson['error'] +
\t\t\t\t\t\t'<button class=\"close\" type=\"button\" data-dismiss=\"alert\" >&times;</button></div>'
\t\t\t\t\t\t);
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\t\$('#review-modal').prepend(
\t\t\t\t\t\t'<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i> ' +
\t\t\t\t\t\tjson['success'] + '</div>');
\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'price_rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('input[name=\\'quality_rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('input[name=\\'value_rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2ae834851bd4e6bb4966b626943ebabc79f79229aec31bdf9e0cc91bdb05c7c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1198 => 700,  1183 => 687,  1164 => 671,  1160 => 670,  1154 => 667,  1146 => 662,  1130 => 648,  1118 => 633,  1116 => 632,  1113 => 631,  1106 => 627,  1102 => 625,  1100 => 624,  1082 => 609,  1079 => 608,  1071 => 602,  1069 => 601,  1066 => 600,  1064 => 599,  1047 => 585,  1032 => 572,  1025 => 568,  1021 => 566,  1018 => 565,  1008 => 561,  1002 => 558,  996 => 555,  992 => 553,  987 => 552,  985 => 551,  978 => 547,  974 => 546,  970 => 545,  961 => 539,  957 => 537,  948 => 530,  939 => 524,  935 => 522,  932 => 521,  922 => 517,  916 => 514,  910 => 511,  906 => 509,  902 => 508,  895 => 504,  891 => 503,  887 => 502,  878 => 496,  874 => 494,  872 => 493,  868 => 491,  859 => 485,  850 => 481,  845 => 478,  843 => 477,  813 => 449,  809 => 447,  802 => 444,  800 => 443,  779 => 425,  773 => 424,  768 => 421,  762 => 418,  759 => 417,  756 => 416,  752 => 414,  743 => 410,  740 => 409,  731 => 407,  727 => 406,  724 => 405,  722 => 404,  716 => 401,  712 => 400,  708 => 399,  702 => 396,  697 => 393,  694 => 392,  689 => 389,  680 => 385,  677 => 384,  668 => 382,  664 => 381,  661 => 380,  659 => 379,  653 => 376,  649 => 375,  645 => 374,  639 => 371,  635 => 370,  631 => 369,  625 => 366,  621 => 365,  617 => 364,  611 => 361,  606 => 358,  603 => 357,  598 => 354,  589 => 350,  586 => 349,  577 => 347,  573 => 346,  570 => 345,  568 => 344,  562 => 341,  558 => 340,  554 => 339,  548 => 336,  544 => 335,  540 => 334,  534 => 331,  530 => 330,  526 => 329,  520 => 326,  515 => 323,  513 => 322,  507 => 318,  501 => 316,  498 => 315,  492 => 313,  490 => 312,  486 => 311,  481 => 309,  466 => 297,  462 => 296,  458 => 295,  454 => 293,  451 => 292,  439 => 287,  429 => 285,  424 => 284,  420 => 283,  416 => 282,  410 => 279,  405 => 276,  400 => 275,  398 => 274,  391 => 270,  385 => 267,  376 => 261,  367 => 255,  362 => 253,  351 => 244,  347 => 242,  342 => 228,  335 => 114,  329 => 112,  326 => 111,  320 => 110,  316 => 108,  312 => 106,  309 => 105,  305 => 104,  299 => 103,  296 => 102,  289 => 100,  283 => 99,  279 => 97,  275 => 95,  272 => 94,  268 => 93,  261 => 92,  259 => 91,  256 => 90,  253 => 89,  247 => 87,  244 => 86,  241 => 85,  239 => 84,  234 => 83,  232 => 82,  220 => 81,  216 => 80,  204 => 71,  195 => 67,  189 => 66,  185 => 64,  179 => 62,  176 => 61,  170 => 59,  167 => 58,  165 => 57,  156 => 50,  148 => 48,  146 => 47,  137 => 40,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  123 => 30,  115 => 28,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  92 => 22,  89 => 21,  86 => 20,  80 => 17,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2ae834851bd4e6bb4966b626943ebabc79f79229aec31bdf9e0cc91bdb05c7c7", "");
    }
}
