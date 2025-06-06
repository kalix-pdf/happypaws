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

/* __string_template__5130f83cf50c6b895106130e85b387a0eb4bb5b371cf5510df7eaa6f0114d61b */
class __TwigTemplate_a6da830e9d1052ecc8958b20543a73083a136ba154fa68ec3394fd9e3e0908aa extends Template
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

\t\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t\t<div class=\"d-flex gap-5\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "thumb", [], "array", true, true, false, 46) && (($__internal_compile_2 = ($context["partner"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["thumb"] ?? null) : null))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo (($__internal_compile_3 = ($context["partner"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["firstname"] ?? null) : null);
                echo "\" class=\"img-fluid rounded-2\" style=\"height:100px;object-fit:content;\">
\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"fs-3 text-center\" style=\"overflow-wrap:break-word;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companyname", [], "array", true, true, false, 54) && (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["companyname"] ?? null) : null))) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["full_name"] = (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["companyname"] ?? null) : null);
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["companyname"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["full_name"] = (((($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["firstname"] ?? null) : null) . " ") . (($__internal_compile_9 = ($context["partner"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lastname"] ?? null) : null));
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo (((($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["firstname"] ?? null) : null) . " ") . (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lastname"] ?? null) : null));
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo " SHOP
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"container\" ";
            // line 63
            if ((twig_length_filter($this->env, ($context["full_name"] ?? null)) < 12)) {
                echo " style=\"margin-bottom:5px;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info w-100\" href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "sellerHref", [], "any", false, false, false, 64);
            echo "\">";
            echo "View Store";
            echo "</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
            // line 70
            echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"border-start border-info d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"px-4\"><p>Store Products: <strong>";
            // line 76
            echo (twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "total_products", [], "any", false, false, false, 76) . " Product(s)");
            echo " </strong></p>
\t\t\t\t\t\t<p>";
            // line 77
            echo "Store rating: ";
            echo " <strong>
\t\t\t\t\t\t\t<div class=\"card-div-scnd ";
            // line 78
            if (($context["feedback_total"] ?? null)) {
                echo "rating";
            } else {
                echo "rating no-rating";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 78) == " hover")) {
                echo "rating-hover";
            }
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 79
            $context["giveReview"] = 0;
            // line 80
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["customer_id"] ?? null) != ($context["seller_id"] ?? null))) {
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 81
                if (($context["logged"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["give_review"] ?? null)) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["giveReview"] = (0 + 1);
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t</div></strong>
\t\t\t\t\t\t\t";
            // line 88
            if (($context["feedback_total"] ?? null)) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                if (($context["giveReview"] ?? null)) {
                    echo "review-button-popup ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["feedback_total"] ?? null) < $context["i"])) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
                echo ($context["feedback_total"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 100
                if (($context["giveReview"] ?? null)) {
                    echo "review-button-popup ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["feedback_total"] ?? null) < $context["i"])) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
                // line 109
                echo ($context["feedback_total"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 156
            echo "\t\t\t\t\t";
            // line 265
            echo "\t\t\t\t</div>
\t\t
\t\t\t";
            // line 278
            echo "\t\t</div>
\t";
        }
        // line 280
        echo "</div>

<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 289
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 291
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 297
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">\t
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 303
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\"class=\"form-control\"></textarea>
\t\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t\t";
        // line 306
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 310
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 311
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 312
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 315
                echo (($__internal_compile_12 = $context["review_field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["field_name"] ?? null) : null);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 318
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 320
                    echo "\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"review_attributes[";
                    echo (($__internal_compile_13 = $context["review_field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["field_id"] ?? null) : null);
                    echo "]\"
\t\t\t\t\t\t\t\t\tname=\"review_attributes[";
                    // line 321
                    echo (($__internal_compile_14 = $context["review_field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
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
            // line 328
            echo "\t\t\t\t\t";
        }
        // line 329
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 331
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review-mp\" data-loading-text=\"";
        // line 332
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 333
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
        // line 345
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 347
        echo "Hi ";
        echo "
\t\t\t\t\t";
        // line 348
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "firstname", [], "array", true, true, false, 348)) {
            // line 349
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_15 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["firstname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 351
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "lastname", [], "array", true, true, false, 351)) {
            // line 352
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_16 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["lastname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 354
        echo "\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 358
        if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
            // line 359
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 362
            echo ($context["text_order"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 365
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 366
            echo ($context["processing_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 367
            echo ($context["text_processing_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 370
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 371
            echo ($context["complete_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 372
            echo ($context["text_complete_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 375
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 376
            echo ($context["return_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 377
            echo ($context["text_return"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 380
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 381
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 382
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 383
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_notification"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 386
                echo ($context["view_all"] ?? null);
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 390
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 393
        echo "\t\t\t\t";
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 394
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 397
            echo ($context["text_product"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 400
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 401
            echo ($context["product_stock_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 402
            echo ($context["text_stock"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 405
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 406
            echo ($context["review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 407
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 410
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 411
            echo ($context["approval_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 412
            echo ($context["text_approval"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 415
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 416
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 417
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 418
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_product_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 420
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 421
                echo (($context["view_all"] ?? null) . "&tab=product");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 425
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 428
        echo "\t\t\t\t";
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 429
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 432
            echo ($context["text_entry_seller"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 435
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 436
            echo ($context["seller_review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 437
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 440
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 441
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 442
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 443
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 445
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 446
                echo (($context["view_all"] ?? null) . "&tab=seller");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 450
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 452
        echo "\t\t\t\t";
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !($context["seller_notifications"] ?? null) &&  !($context["seller_product_reviews"] ?? null)) &&  !($context["seller_reviews"] ?? null)))) {
            // line 453
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<h4>";
            // line 454
            echo ($context["text_no_notification"] ?? null);
            echo "</h4>
\t\t\t\t\t</center>
\t\t\t\t";
        }
        // line 457
        echo "\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 460
        echo ($context["view_all"] ?? null);
        echo "\" class=\"wk-btn btn btn-primary button\" style=\"color:white;\">";
        echo ($context["text_view_all_notificatins"] ?? null);
        echo "</a>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default button\" data-dismiss=\"modal\">";
        // line 461
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
        // line 479
        if ((twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "backgroundcolor", [], "array", true, true, false, 479) && (($__internal_compile_17 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["backgroundcolor"] ?? null) : null))) {
            // line 480
            echo "\t\t\tbackground-color: ";
            echo (($__internal_compile_18 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["backgroundcolor"] ?? null) : null);
            echo "
\t\t\t;
\t\t";
        } else {
            // line 483
            echo "\t\t\tbackground-color: #FF4D45;
\t\t";
        }
        // line 485
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
        // line 513
        if ((((array_key_exists("launchModal", $context) && ($context["launchModal"] ?? null)) && array_key_exists("sellerProfile", $context)) && ($context["sellerProfile"] ?? null))) {
            // line 514
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 sellerBackground\" style=\"\">
\t\t\t\t\t\t\t<div class=\"seller-dp\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 517
            echo (($__internal_compile_19 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["avatar"] ?? null) : null);
            echo "\" alt=\"";
            echo (((($__internal_compile_20 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["firstname"] ?? null) : null) . " ") . (($__internal_compile_21 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["lastname"] ?? null) : null));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"seller_detail_stripe\" style=\"\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 521
            echo (((($context["text_welcome"] ?? null) . (($__internal_compile_22 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["firstname"] ?? null) : null)) . " ") . (($__internal_compile_23 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["lastname"] ?? null) : null));
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 527
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t";
        // line 529
        if ((twig_get_attribute($this->env, $this->source, ($context["lowStockProducts"] ?? null), "products", [], "array", true, true, false, 529) && (($__internal_compile_24 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["products"] ?? null) : null))) {
            // line 530
            echo "\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t\t<h3>";
            // line 532
            echo ($context["text_low_stock"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 538
            echo ($context["text_productname"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 539
            echo ($context["text_model"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 540
            echo ($context["text_quantity"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 544
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["products"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lowStockProduct"]) {
                // line 545
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 547
                echo (($__internal_compile_26 = $context["lowStockProduct"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 550
                echo (($__internal_compile_27 = $context["lowStockProduct"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 553
                echo (($__internal_compile_28 = $context["lowStockProduct"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["quantity"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lowStockProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 557
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((array_key_exists("totalProductsLowStock", $context) && (($context["totalProductsLowStock"] ?? null) > 5))) {
                // line 558
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 560
                echo ($context["moreProductUrl"] ?? null);
                echo "\" class=\"btn btn-info btn-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 566
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- table responsive -->
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<!-- low stock field set -->
\t\t\t\t\t\t";
        }
        // line 573
        echo "\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t<h3>";
        // line 575
        echo ($context["text_most_viewed"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 581
        echo ($context["text_productname"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 582
        echo ($context["text_model"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 583
        echo ($context["text_views"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 587
        if ((array_key_exists("mostViewedProducts", $context) && ($context["mostViewedProducts"] ?? null))) {
            // line 588
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mostViewedProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mostViewedProduct"]) {
                // line 589
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 591
                echo (($__internal_compile_29 = $context["mostViewedProduct"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 594
                echo (($__internal_compile_30 = $context["mostViewedProduct"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 597
                echo (($__internal_compile_31 = $context["mostViewedProduct"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["viewed"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostViewedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 601
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 602
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 604
            echo ($context["text_more_work"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 608
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
        // line 621
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
        // line 635
        if (array_key_exists("chkIsPartner", $context)) {
            // line 636
            echo "
\t";
        } elseif ( !        // line 637
array_key_exists("partner", $context)) {
            // line 638
            echo "\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(document).find('aside#column-right .box').parent().css('display','none');
\t\t});
\t</script>
";
        }
        // line 644
        echo "<script>
\tvar launchModal = ";
        // line 645
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
        // line 660
        if (array_key_exists("partner", $context)) {
            // line 661
            echo "\t\t\$(document).ready(function () {
\t\t\tif (\$('#content').hasClass('col-sm-12')) {
\t\t\t\t\$('.marketplace .row .product-seller').addClass('";
            // line 663
            echo ($context["addClass"] ?? null);
            echo "');
\t\t\t}
\t\t});
\t";
        }
        // line 667
        echo "
\t";
        // line 668
        if ((($context["contact_mail"] ?? null) && ($context["logged"] ?? null))) {
            // line 669
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
            // line 684
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
            // line 698
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t\t} else {
\t\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>   ";
            // line 703
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
            // line 706
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\t\tdata: \$('#seller-mail-form').serialize() +'";
            // line 707
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
        // line 723
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
        // line 736
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
        return "__string_template__5130f83cf50c6b895106130e85b387a0eb4bb5b371cf5510df7eaa6f0114d61b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1195 => 736,  1180 => 723,  1161 => 707,  1157 => 706,  1151 => 703,  1143 => 698,  1127 => 684,  1115 => 669,  1113 => 668,  1110 => 667,  1103 => 663,  1099 => 661,  1097 => 660,  1079 => 645,  1076 => 644,  1068 => 638,  1066 => 637,  1063 => 636,  1061 => 635,  1044 => 621,  1029 => 608,  1022 => 604,  1018 => 602,  1015 => 601,  1005 => 597,  999 => 594,  993 => 591,  989 => 589,  984 => 588,  982 => 587,  975 => 583,  971 => 582,  967 => 581,  958 => 575,  954 => 573,  945 => 566,  936 => 560,  932 => 558,  929 => 557,  919 => 553,  913 => 550,  907 => 547,  903 => 545,  899 => 544,  892 => 540,  888 => 539,  884 => 538,  875 => 532,  871 => 530,  869 => 529,  865 => 527,  856 => 521,  847 => 517,  842 => 514,  840 => 513,  810 => 485,  806 => 483,  799 => 480,  797 => 479,  776 => 461,  770 => 460,  765 => 457,  759 => 454,  756 => 453,  753 => 452,  749 => 450,  740 => 446,  737 => 445,  728 => 443,  724 => 442,  721 => 441,  719 => 440,  713 => 437,  709 => 436,  705 => 435,  699 => 432,  694 => 429,  691 => 428,  686 => 425,  677 => 421,  674 => 420,  665 => 418,  661 => 417,  658 => 416,  656 => 415,  650 => 412,  646 => 411,  642 => 410,  636 => 407,  632 => 406,  628 => 405,  622 => 402,  618 => 401,  614 => 400,  608 => 397,  603 => 394,  600 => 393,  595 => 390,  586 => 386,  583 => 385,  574 => 383,  570 => 382,  567 => 381,  565 => 380,  559 => 377,  555 => 376,  551 => 375,  545 => 372,  541 => 371,  537 => 370,  531 => 367,  527 => 366,  523 => 365,  517 => 362,  512 => 359,  510 => 358,  504 => 354,  498 => 352,  495 => 351,  489 => 349,  487 => 348,  483 => 347,  478 => 345,  463 => 333,  459 => 332,  455 => 331,  451 => 329,  448 => 328,  436 => 323,  426 => 321,  421 => 320,  417 => 319,  413 => 318,  407 => 315,  402 => 312,  397 => 311,  395 => 310,  388 => 306,  382 => 303,  373 => 297,  364 => 291,  359 => 289,  348 => 280,  344 => 278,  340 => 265,  338 => 156,  332 => 111,  326 => 109,  323 => 108,  317 => 107,  313 => 105,  309 => 103,  306 => 102,  302 => 101,  296 => 100,  293 => 99,  286 => 97,  280 => 96,  276 => 94,  272 => 92,  269 => 91,  265 => 90,  258 => 89,  256 => 88,  253 => 87,  250 => 86,  244 => 84,  241 => 83,  238 => 82,  236 => 81,  231 => 80,  229 => 79,  217 => 78,  213 => 77,  209 => 76,  201 => 70,  193 => 64,  187 => 63,  182 => 60,  176 => 59,  173 => 58,  167 => 56,  164 => 55,  162 => 54,  155 => 49,  147 => 47,  145 => 46,  137 => 40,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  123 => 30,  115 => 28,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  92 => 22,  89 => 21,  86 => 20,  80 => 17,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5130f83cf50c6b895106130e85b387a0eb4bb5b371cf5510df7eaa6f0114d61b", "");
    }
}
