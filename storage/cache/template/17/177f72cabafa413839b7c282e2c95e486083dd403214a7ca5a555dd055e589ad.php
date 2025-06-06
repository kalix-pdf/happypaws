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

/* __string_template__d145310898dc6d11402743b6966e81cb16d65f65f95b577451ed2360d90060c2 */
class __TwigTemplate_0f911dcf30f21a59212f88ae50a5c2dc251785844be7f881bc8d581c7a53cb0b extends Template
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
\t\t\t@media(max-width:720px) {
\t\t\t\t.separator {
\t\t\t\t\tborder-top: 1px solid #162F65 !important;
\t\t\t\t\tborder-left: none !important;
\t\t\t\t\tpadding-left: 0 !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy-4 align-items-center\">
\t\t\t\t<div class=\"col-12 col-lg-6 d-flex gap-4 align-items-start\">
\t\t\t\t\t";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "thumb", [], "array", true, true, false, 47) && (($__internal_compile_2 = ($context["partner"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["thumb"] ?? null) : null))) {
                // line 48
                echo "\t\t\t\t\t\t<img src=\"";
                echo (($__internal_compile_3 = ($context["partner"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["firstname"] ?? null) : null);
                echo "\" class=\"img-fluid rounded-2\" style=\"height:100px; width:100px; object-fit:cover;\">
\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t<p class=\"fs-4 mb-2\" style=\"overflow-wrap:break-word;\">
\t\t\t\t\t\t\t";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companyname", [], "array", true, true, false, 52) && (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["companyname"] ?? null) : null))) {
                // line 53
                echo "\t\t\t\t\t\t\t";
                $context["full_name"] = (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["companyname"] ?? null) : null);
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["companyname"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t\t\t";
                $context["full_name"] = (((($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["firstname"] ?? null) : null) . " ") . (($__internal_compile_9 = ($context["partner"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lastname"] ?? null) : null));
                // line 57
                echo "\t\t\t\t\t\t\t\t";
                echo (((($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["firstname"] ?? null) : null) . " ") . (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lastname"] ?? null) : null));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 58
            echo " SHOP
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"w-100 ";
            // line 60
            if ((twig_length_filter($this->env, ($context["full_name"] ?? null)) < 12)) {
                echo " mb-1 ";
            } else {
                echo " mb-3 ";
            }
            echo "\">
\t\t\t\t\t\t\t<a class=\"btn w-100\" href=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "sellerHref", [], "any", false, false, false, 61);
            echo "\">View Store</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-6 pt-3 pt-lg-0 ps-lg-4 separator\" style=\"border-left: 1px solid #162f65;\">
\t\t\t\t\t<div class=\"d-flex gap-3\">\t\t\t
\t\t\t\t\t\t<div class=\"text-start text-lg-start\">
\t\t\t\t\t\t\t<p class=\"mb-1\">Store Products:</p>
\t\t\t\t\t\t\t<p class=\"mb-1\">Store Rating:</p>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"mb-1\"><strong>";
            // line 72
            echo (twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "total_products", [], "any", false, false, false, 72) . " Product(s)");
            echo "</strong></p>
\t\t\t\t\t\t\t<span>";
            // line 73
            echo ($context["feedback_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 74
            $context["giveReview"] = 0;
            // line 75
            echo "\t\t\t\t\t\t\t";
            if ((((($context["customer_id"] ?? null) != ($context["seller_id"] ?? null)) && ($context["logged"] ?? null)) && ($context["give_review"] ?? null))) {
                // line 76
                echo "\t\t\t\t\t\t\t\t";
                $context["giveReview"] = 1;
                // line 77
                echo "\t\t\t\t\t\t\t";
            }
            // line 78
            echo "
\t\t\t\t\t\t\t<div class=\"";
            // line 79
            if (($context["feedback_total"] ?? null)) {
                echo "rating";
            } else {
                echo "rating no-rating";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 79) == " hover")) {
                echo "rating-hover";
            }
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"";
            // line 80
            if (($context["giveReview"] ?? null)) {
                echo "review-button-popup";
            }
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["feedback_total"] ?? null) < $context["i"])) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


";
            // line 114
            echo "
\t\t\t\t\t";
            // line 156
            echo "\t\t\t\t\t";
            // line 265
            echo "\t\t
\t\t\t";
            // line 277
            echo "\t\t</div>
\t";
        }
        // line 279
        echo "</div>

<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 288
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 290
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 296
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">\t
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 302
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\"class=\"form-control\"></textarea>
\t\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t\t";
        // line 305
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 328
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 330
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review-mp\" data-loading-text=\"";
        // line 331
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 332
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
        // line 344
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 346
        echo "Hi ";
        echo "
\t\t\t\t\t";
        // line 347
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "firstname", [], "array", true, true, false, 347)) {
            // line 348
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_12 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["firstname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 350
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "lastname", [], "array", true, true, false, 350)) {
            // line 351
            echo "\t\t\t\t\t\t";
            echo (($__internal_compile_13 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["lastname"] ?? null) : null);
            echo "
\t\t\t\t\t";
        }
        // line 353
        echo "\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 357
        if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
            // line 358
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 361
            echo ($context["text_order"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 364
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 365
            echo ($context["processing_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 366
            echo ($context["text_processing_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 369
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 370
            echo ($context["complete_status_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 371
            echo ($context["text_complete_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 374
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 375
            echo ($context["return_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 376
            echo ($context["text_return"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 379
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 380
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 381
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_notification"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 384
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 385
                echo ($context["view_all"] ?? null);
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
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 393
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 396
            echo ($context["text_product"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 399
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            // line 400
            echo ($context["product_stock_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 401
            echo ($context["text_stock"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 404
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 405
            echo ($context["review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 406
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 409
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            // line 410
            echo ($context["approval_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 411
            echo ($context["text_approval"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 414
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 415
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 417
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_product_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 420
                echo (($context["view_all"] ?? null) . "&tab=product");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 424
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 427
        echo "\t\t\t\t";
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 428
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\" style=\"font-size:15px;\">
\t\t\t\t\t\t\t\t<b>";
            // line 431
            echo ($context["text_entry_seller"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;margin-right:40px;margin-top:5px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 434
            echo ($context["view_all"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"margin-right: 5px;\">";
            // line 435
            echo ($context["seller_review_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
            // line 436
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            // line 439
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 440
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 441
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 442
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo $context["seller_review"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 444
                echo "\t\t\t\t\t\t\t\t<li style=\"display: block; overflow: auto;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 445
                echo (($context["view_all"] ?? null) . "&tab=seller");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 449
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 451
        echo "\t\t\t\t";
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !($context["seller_notifications"] ?? null) &&  !($context["seller_product_reviews"] ?? null)) &&  !($context["seller_reviews"] ?? null)))) {
            // line 452
            echo "\t\t\t\t\t<center>
\t\t\t\t\t\t<h4>";
            // line 453
            echo ($context["text_no_notification"] ?? null);
            echo "</h4>
\t\t\t\t\t</center>
\t\t\t\t";
        }
        // line 456
        echo "\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 459
        echo ($context["view_all"] ?? null);
        echo "\" class=\"wk-btn btn btn-primary button\" style=\"color:white;\">";
        echo ($context["text_view_all_notificatins"] ?? null);
        echo "</a>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default button\" data-dismiss=\"modal\">";
        // line 460
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
        // line 478
        if ((twig_get_attribute($this->env, $this->source, ($context["sellerProfile"] ?? null), "backgroundcolor", [], "array", true, true, false, 478) && (($__internal_compile_14 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["backgroundcolor"] ?? null) : null))) {
            // line 479
            echo "\t\t\tbackground-color: ";
            echo (($__internal_compile_15 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["backgroundcolor"] ?? null) : null);
            echo "
\t\t\t;
\t\t";
        } else {
            // line 482
            echo "\t\t\tbackground-color: #FF4D45;
\t\t";
        }
        // line 484
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
        // line 512
        if ((((array_key_exists("launchModal", $context) && ($context["launchModal"] ?? null)) && array_key_exists("sellerProfile", $context)) && ($context["sellerProfile"] ?? null))) {
            // line 513
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 sellerBackground\" style=\"\">
\t\t\t\t\t\t\t<div class=\"seller-dp\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 516
            echo (($__internal_compile_16 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["avatar"] ?? null) : null);
            echo "\" alt=\"";
            echo (((($__internal_compile_17 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["firstname"] ?? null) : null) . " ") . (($__internal_compile_18 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["lastname"] ?? null) : null));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"seller_detail_stripe\" style=\"\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 520
            echo (((($context["text_welcome"] ?? null) . (($__internal_compile_19 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["firstname"] ?? null) : null)) . " ") . (($__internal_compile_20 = ($context["sellerProfile"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["lastname"] ?? null) : null));
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 526
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t";
        // line 528
        if ((twig_get_attribute($this->env, $this->source, ($context["lowStockProducts"] ?? null), "products", [], "array", true, true, false, 528) && (($__internal_compile_21 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["products"] ?? null) : null))) {
            // line 529
            echo "\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t\t<h3>";
            // line 531
            echo ($context["text_low_stock"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 537
            echo ($context["text_productname"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 538
            echo ($context["text_model"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 539
            echo ($context["text_quantity"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 543
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_22 = ($context["lowStockProducts"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["products"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lowStockProduct"]) {
                // line 544
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 546
                echo (($__internal_compile_23 = $context["lowStockProduct"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 549
                echo (($__internal_compile_24 = $context["lowStockProduct"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 552
                echo (($__internal_compile_25 = $context["lowStockProduct"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["quantity"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lowStockProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 556
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((array_key_exists("totalProductsLowStock", $context) && (($context["totalProductsLowStock"] ?? null) > 5))) {
                // line 557
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 559
                echo ($context["moreProductUrl"] ?? null);
                echo "\" class=\"btn btn-info btn-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmore
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 565
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- table responsive -->
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<!-- low stock field set -->
\t\t\t\t\t\t";
        }
        // line 572
        echo "\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<lagend>
\t\t\t\t\t\t\t\t<h3>";
        // line 574
        echo ($context["text_most_viewed"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</lagend>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 580
        echo ($context["text_productname"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 581
        echo ($context["text_model"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 582
        echo ($context["text_views"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 586
        if ((array_key_exists("mostViewedProducts", $context) && ($context["mostViewedProducts"] ?? null))) {
            // line 587
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mostViewedProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mostViewedProduct"]) {
                // line 588
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 590
                echo (($__internal_compile_26 = $context["mostViewedProduct"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 593
                echo (($__internal_compile_27 = $context["mostViewedProduct"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["model"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 596
                echo (($__internal_compile_28 = $context["mostViewedProduct"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["viewed"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostViewedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 600
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 601
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 603
            echo ($context["text_more_work"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 607
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
        // line 620
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
        // line 634
        if (array_key_exists("chkIsPartner", $context)) {
            // line 635
            echo "
\t";
        } elseif ( !        // line 636
array_key_exists("partner", $context)) {
            // line 637
            echo "\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(document).find('aside#column-right .box').parent().css('display','none');
\t\t});
\t</script>
";
        }
        // line 643
        echo "<script>
\tvar launchModal = ";
        // line 644
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
        // line 659
        if (array_key_exists("partner", $context)) {
            // line 660
            echo "\t\t\$(document).ready(function () {
\t\t\tif (\$('#content').hasClass('col-sm-12')) {
\t\t\t\t\$('.marketplace .row .product-seller').addClass('";
            // line 662
            echo ($context["addClass"] ?? null);
            echo "');
\t\t\t}
\t\t});
\t";
        }
        // line 666
        echo "
\t";
        // line 667
        if ((($context["contact_mail"] ?? null) && ($context["logged"] ?? null))) {
            // line 668
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
            // line 683
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
            // line 697
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t\t} else {
\t\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>   ";
            // line 702
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
            // line 705
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\t\tdata: \$('#seller-mail-form').serialize() +'";
            // line 706
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
        // line 722
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
        // line 735
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
        return "__string_template__d145310898dc6d11402743b6966e81cb16d65f65f95b577451ed2360d90060c2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1084 => 735,  1069 => 722,  1050 => 706,  1046 => 705,  1040 => 702,  1032 => 697,  1016 => 683,  1004 => 668,  1002 => 667,  999 => 666,  992 => 662,  988 => 660,  986 => 659,  968 => 644,  965 => 643,  957 => 637,  955 => 636,  952 => 635,  950 => 634,  933 => 620,  918 => 607,  911 => 603,  907 => 601,  904 => 600,  894 => 596,  888 => 593,  882 => 590,  878 => 588,  873 => 587,  871 => 586,  864 => 582,  860 => 581,  856 => 580,  847 => 574,  843 => 572,  834 => 565,  825 => 559,  821 => 557,  818 => 556,  808 => 552,  802 => 549,  796 => 546,  792 => 544,  788 => 543,  781 => 539,  777 => 538,  773 => 537,  764 => 531,  760 => 529,  758 => 528,  754 => 526,  745 => 520,  736 => 516,  731 => 513,  729 => 512,  699 => 484,  695 => 482,  688 => 479,  686 => 478,  665 => 460,  659 => 459,  654 => 456,  648 => 453,  645 => 452,  642 => 451,  638 => 449,  629 => 445,  626 => 444,  617 => 442,  613 => 441,  610 => 440,  608 => 439,  602 => 436,  598 => 435,  594 => 434,  588 => 431,  583 => 428,  580 => 427,  575 => 424,  566 => 420,  563 => 419,  554 => 417,  550 => 416,  547 => 415,  545 => 414,  539 => 411,  535 => 410,  531 => 409,  525 => 406,  521 => 405,  517 => 404,  511 => 401,  507 => 400,  503 => 399,  497 => 396,  492 => 393,  489 => 392,  484 => 389,  475 => 385,  472 => 384,  463 => 382,  459 => 381,  456 => 380,  454 => 379,  448 => 376,  444 => 375,  440 => 374,  434 => 371,  430 => 370,  426 => 369,  420 => 366,  416 => 365,  412 => 364,  406 => 361,  401 => 358,  399 => 357,  393 => 353,  387 => 351,  384 => 350,  378 => 348,  376 => 347,  372 => 346,  367 => 344,  352 => 332,  348 => 331,  344 => 330,  340 => 328,  333 => 305,  327 => 302,  318 => 296,  309 => 290,  304 => 288,  293 => 279,  289 => 277,  286 => 265,  284 => 156,  281 => 114,  270 => 88,  264 => 87,  260 => 85,  256 => 83,  253 => 82,  249 => 81,  243 => 80,  231 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  217 => 74,  213 => 73,  209 => 72,  195 => 61,  187 => 60,  183 => 58,  177 => 57,  174 => 56,  168 => 54,  165 => 53,  163 => 52,  159 => 50,  151 => 48,  149 => 47,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  123 => 30,  115 => 28,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  92 => 22,  89 => 21,  86 => 20,  80 => 17,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d145310898dc6d11402743b6966e81cb16d65f65f95b577451ed2360d90060c2", "");
    }
}
