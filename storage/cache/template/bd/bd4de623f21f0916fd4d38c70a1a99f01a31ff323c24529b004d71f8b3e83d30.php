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

/* __string_template__651be45ecf59ccf76f02892320ef6d582dc4a759811a2af5d98da8e1114b4a1b */
class __TwigTemplate_edeca9f0e00bf9a6460c1d8e3a7866acf84d4308e256725b319aeee1a5badec4 extends Template
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
        echo "
<script>
\tvar base_url = location.origin;
\tvar current_url = location.href;";
        // line 4
        if ((((array_key_exists("admin_analytic_id", $context) && ($context["admin_analytic_id"] ?? null)) && array_key_exists("profile_analytic", $context)) && ($context["profile_analytic"] ?? null))) {
            // line 5
            echo "
\tga('create', '";
            // line 6
            echo ($context["admin_analytic_id"] ?? null);
            echo "', 'auto', 'AdminTracker');
\tga('AdminTracker.set', 'page', current_url.replace(base_url, ''));
\tga('AdminTracker.send', 'pageview');";
        }
        // line 9
        echo "\t";
        if ((((array_key_exists("seller_analytic_id", $context) && ($context["seller_analytic_id"] ?? null)) && array_key_exists("profile_analytic", $context)) && ($context["profile_analytic"] ?? null))) {
            // line 10
            echo "\tga('create', '";
            echo ($context["seller_analytic_id"] ?? null);
            echo "', 'auto', 'SellerTracker');
\tga('SellerTracker.set', 'page', current_url.replace(base_url, ''));
\tga('SellerTracker.send', 'pageview');";
        }
        // line 13
        echo "\t\$(document).on('ajaxComplete', function(event, request, settings) { // console.log(settings.url);
\t\tvar seller_collection = 'customerpartner/profile/collection';
\t\tif (settings.url.includes(seller_collection)) {
\t\t\tvar ajaxURL = settings.url;";
        // line 16
        if ((((array_key_exists("admin_analytic_id", $context) && ($context["admin_analytic_id"] ?? null)) && array_key_exists("collection_analytic", $context)) && ($context["collection_analytic"] ?? null))) {
            // line 17
            echo "\t\t\tga('create', '";
            echo ($context["admin_analytic_id"] ?? null);
            echo "', 'auto', 'AdminTracker');
\t\t\tga('AdminTracker.set', 'page', ajaxURL.replace(base_url, ''));
\t\t\tga('AdminTracker.send', 'pageview');";
        }
        // line 20
        echo "\t\t\t";
        if ((((array_key_exists("seller_analytic_id", $context) && ($context["seller_analytic_id"] ?? null)) && array_key_exists("collection_analytic", $context)) && ($context["collection_analytic"] ?? null))) {
            // line 21
            echo "\t\t\tga('create', '";
            echo ($context["seller_analytic_id"] ?? null);
            echo "', 'auto', 'SellerTracker');
\t\t\tga('SellerTracker.set', 'page', ajaxURL.replace(base_url, ''));
\t\t\tga('SellerTracker.send', 'pageview');";
        }
        // line 24
        echo "\t\t}
\t});
</script>
<div id=\"container\" class=\"container j-container\">

  <div id=\"top\" class=\"top top-row\" style=\"background-color:transparent;border: none;\">
        <div class=\"ms-container\">
          <div class=\"ms-inner-controls-cont\">
            <div class=\"ms-view ms-fade-flow-view\">
              <div class=\"ms-slide-container\"
                style=\"transform-style: preserve-3d; transform: translateX(0px) translateZ(0px);\">
                <div class=\"module-item module-item-1 ms-slide ms-sl-selected\" data-delay=\"2.5\"
                  style=\"height: 250px;left: 0px;opacity: 1;transform: translateZ(0px) rotateY(0deg);z-index: 2;\">
                  <div class=\"ms-slide-bgcont\" style=\"height: 100%; opacity: 1;\">                                   
                    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companylogo", [], "array", true, true, false, 38) && (($__internal_compile_0 = ($context["partner"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["companylogo"] ?? null) : null))) {
            // line 39
            echo "                    <img
                      src=\"";
            // line 40
            echo (($__internal_compile_1 = ($context["partner"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["companylogo"] ?? null) : null);
            echo "\"
                      srcset=\"";
            // line 41
            echo (($__internal_compile_2 = ($context["partner"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["companylogo"] ?? null) : null);
            echo "\"
                      alt=\"";
            // line 42
            echo (($__internal_compile_3 = ($context["partner"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["companyname"] ?? null) : null);
            echo "\" width=\"160\" height=\"60\"
                      style=\"width: 200px;height: 80px;margin-top: 0;margin-left: 0px;object-fit: cover;\">
                    ";
        }
        // line 45
        echo "                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
  </div>

\t<div class=\"min-profile-wk-mp\" style=\"gap: 10px;\">
\t\t<div id=\"content\">
\t\t\t<div class=\"col-md-2 col-sm-12 col-xs-12 min-profile min-profile-left\" style=\"height:fit-content;padding:0 0 0 0;\">
\t\t\t\t";
        // line 57
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"product-thumb product-wrapper\" style=\"\">
\t\t\t\t\t\t<div class=\"wk-new\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "avatar", [], "array", true, true, false, 62) && (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["avatar"] ?? null) : null))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["avatar"] ?? null) : null);
            echo "\" alt=\"";
            echo (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["firstname"] ?? null) : null);
            echo "\" class=\"image-seller zoom\" style=\"height:100px;object-fit:content;\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"upper-detail\">
\t\t\t\t\t\t\t\t\t<div class=\"wk-right wk-title\">
\t\t\t\t\t\t\t\t\t\t<p style=\"overflow-wrap:break-word;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companyname", [], "array", true, true, false, 72) && (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["companyname"] ?? null) : null))) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["full_name"] = (($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["companyname"] ?? null) : null);
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo (($__internal_compile_9 = ($context["partner"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["companyname"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["full_name"] = (((($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["firstname"] ?? null) : null) . " ") . (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lastname"] ?? null) : null));
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["full_name"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"wk-right wk-link\" ";
        // line 81
        if ((twig_length_filter($this->env, ($context["full_name"] ?? null)) < 12)) {
            echo " style=\"margin-top:10px; margin-bottom:10px;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo ($context["sellerHref"] ?? null);
        echo "\">";
        echo ($context["text_view_store"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"wk-right wk-product-count\">
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 86
        echo (($context["seller_total_products"] ?? null) . ($context["text_products_counts"] ?? null));
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"min-contact\" style=\"text-align: start;\">
\t\t\t\t\t\t\t<div class=\"card-div seller-rating\">
\t\t\t\t\t\t\t\t<div class=\"card-div-first\">";
        // line 95
        echo ($context["text_store_rating"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"card-div-scnd ";
        // line 96
        if (($context["feedback_total"] ?? null)) {
            echo "rating";
        } else {
            echo "rating no-rating";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 96), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 96) == " hover")) {
            echo "rating-hover";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 97
        $context["giveReview"] = 0;
        // line 98
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["customer_id"] ?? null) != ($context["seller_id"] ?? null))) {
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            if (($context["logged"] ?? null)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["give_review"] ?? null)) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["giveReview"] = (0 + 1);
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 106
        if (($context["feedback_total"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"rating-stars ";
            if (($context["giveReview"] ?? null)) {
                echo "review-button-popup ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["feedback_total"] ?? null) < $context["i"])) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
            echo ($context["feedback_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-stars ";
            // line 118
            if (($context["giveReview"] ?? null)) {
                echo "review-button-popup ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["feedback_total"] ?? null) < $context["i"])) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "
\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#E69500; font-size:14px; font-weight:600;\" id=\"rating-text\">&nbsp;";
            // line 127
            echo ($context["feedback_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        // line 137
        echo "
\t\t\t</div><!-- emd col-3 -->

\t\t\t";
        // line 141
        echo "\t\t\t<div class=\"col-md-10 col-sm-12 col-xs-12 min-profile min-profile-right\" style=\"border: 1px solid #dde;padding-left: 15px;padding-right: 15px;border-radius: 10px;\">
\t\t\t\t<div class=\"module module-categories module-categories-wk-mp  module-categories- align-to-content\">
\t\t\t\t\t<div class=\"module-body\" id=\"wk-mp-body\">
\t\t\t\t\t\t<div class=\"tab-container\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-profile\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/profile.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">";
        // line 149
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
        // line 153
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 154
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-store\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/about.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">";
            // line 157
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 161
        echo "
\t\t\t\t\t\t\t\t";
        // line 162
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 163
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-collection\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/collection.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 167
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("review", ($context["public_seller_profile"] ?? null)))) {
            // line 173
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-reviews\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/review.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 177
            echo (((($context["text_reviews"] ?? null) . " (") . ((($context["feedback_total"] ?? null)) ? (($context["feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 183
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-product-reviews\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/product.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 187
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div id=\"tab-profile\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-1\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">";
        // line 202
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\" style=\"flex-flow: wrap;word-break: break-word;\">
\t\t\t\t\t\t\t";
        // line 204
        echo (($__internal_compile_12 = ($context["partner"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["shortprofile"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t";
        // line 214
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-profile -->
\t\t\t\t\t";
        // line 217
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 218
            echo "\t\t\t\t\t<div id=\"tab-store\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-2\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">";
            // line 220
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\" style=\"flex-flow: wrap;word-break: break-word;\">
\t\t\t\t\t\t\t";
            // line 222
            echo (($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["companydescription"] ?? null) : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-store -->
\t\t\t\t\t";
        }
        // line 227
        echo "
\t\t\t\t\t";
        // line 228
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("review", ($context["public_seller_profile"] ?? null)))) {
            // line 229
            echo "\t\t\t\t\t<div id=\"tab-reviews\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-3\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 232
            echo (((($context["text_reviews"] ?? null) . " (") . ((($context["feedback_total"] ?? null)) ? (($context["feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\">
\t\t\t\t\t\t\t<div id=\"prev-reviews\" style=\"width:100%;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-reviews -->
\t\t\t\t\t";
        }
        // line 240
        echo "
\t\t\t\t\t";
        // line 241
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 242
            echo "\t\t\t\t\t<div id=\"tab-product-reviews\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-4\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 245
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-product-reviews -->
\t\t\t\t\t";
        }
        // line 251
        echo "
\t\t\t\t\t";
        // line 252
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 253
            echo "\t\t\t\t\t<div id=\"tab-collection\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-5\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 256
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-collection -->
\t\t\t\t\t";
        }
        // line 262
        echo "\t\t\t\t\t<div id=\"dummy-collection\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 266
        echo "\t\t</div>
\t</div>
</div>
<!-- container -->

";
        // line 271
        if (($context["logged"] ?? null)) {
            // line 272
            echo "<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
            // line 279
            echo ($context["text_close"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
            // line 281
            echo ($context["text_ask_seller"] ?? null);
            echo "</h3>
\t\t\t</div>
\t\t\t<form id=\"seller-mail-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-subject\">";
            // line 286
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"subject\" style=\"width:95%;\" id=\"input-subject\" class=\"form-control\" />
\t\t\t\t\t\t";
            // line 288
            if (array_key_exists("partner", $context)) {
                // line 289
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-message\">";
            // line 293
            echo ($context["text_ask"] ?? null);
            echo "</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" style=\"width:95%;\" rows=\"3\"
\t\t\t\t\t\t\tid=\"input-message\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"error text-center\"></div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
            // line 301
            echo ($context["text_close"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
            // line 302
            echo ($context["text_send"] ?? null);
            echo "</button>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
";
        }
        // line 311
        echo "
<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 319
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 321
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\"
\t\t\t\t\t\t\t\t>";
        // line 328
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" style=\"max-width:95% !important;\" id=\"input-name\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 335
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" style=\"width:95%;\" class=\"form-control\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t";
        // line 339
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 342
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 343
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 344
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 346
                echo (($__internal_compile_14 = $context["review_field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["field_name"] ?? null) : null);
                echo "</label>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display: inline-block;\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 350
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 352
                    echo "\t\t\t\t\t\t\t<input type=\"radio\" id=\"review_attributes[";
                    echo (($__internal_compile_15 = $context["review_field"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["field_id"] ?? null) : null);
                    echo "]\"
\t\t\t\t\t\t\t\tname=\"review_attributes[";
                    // line 353
                    echo (($__internal_compile_16 = $context["review_field"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 355
                echo "\t\t\t\t\t\t\t&nbsp;";
                echo ($context["entry_good"] ?? null);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            echo "\t\t\t\t\t";
        }
        // line 360
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 362
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
        // line 363
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 364
        echo ($context["text_send"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
\t<!-- /.modal-content -->
</div><!-- /.modal -->

<script type=\"text/javascript\">
\t\$(document).find('.review-button-popup').on('click', function() {
\t\t\$('#myModal-seller-review').appendTo('body').modal();
\t\t\$(document).find('#myModal-seller-review').modal('show');
\t});
\t\$('.nav-tabs li a').on('click', function() {
\t\tif (\$(this).attr('href')) {
\t\t\tlocalStorage.setItem(\"tab-active\", \$(this).attr('href'))
\t\t}
\t});

\t\$(document).ready(function() {
\t\tlocalStorage.setItem('hide-child', 0);
\t\tvar tabe_start = window.location.search.split('?')[1];

\t\tif(tabe_start == 'tab=profile') {
\t\t\tlocalStorage.setItem(\"tab-active\",'');
\t\t\t
\t\t\thistory.pushState(null, '', '";
        // line 388
        echo ($context["sellerHrefLocation"] ?? null);
        echo "');  
\t\t\t
\t\t}
\t\tvar tab_active = '#tab-profile';

\t\tif (localStorage.getItem(\"tab-active\")) {
\t\t\ttab_active = localStorage.getItem(\"tab-active\");
\t\t}

\t\tif (tab_active) {
\t\t\t\$('a[href=\"' + tab_active + '\"]').parent().addClass('active');
\t\t\t\$('a[href=\"' + tab_active + '\"]').parent().siblings().removeClass('active');
\t\t\t\$(tab_active).addClass('active');
\t\t\t\$(tab_active).siblings().removeClass('active');

\t\t\tvar src = \$('a[href=\"' + tab_active + '\"]').find('img').attr('src');
\t\t\tif (src) {
\t\t\t\tsrc = src.substring(0, src.indexOf('.'));

\t\t\t\tsrc = src + '-active.png';

\t\t\t\t\$('a[href=\"' + tab_active + '\"]').find('img').attr('src', src);
\t\t\t}

\t\t}
\t});
</script>
<script type=\"text/javascript\">
\t\$('.mp-list-group-item a').on('click', function() {
\t\tvar src = \$(this).find('img').attr('src');
\t\tif (src.substring(0, src.indexOf('-'))) {
\t\t\tsrc = src.substring(0, src.indexOf('-'));
\t\t} else {
\t\t\tsrc = src.substring(0, src.indexOf('.'));
\t\t}
\t\tsrc = src + '-active.png';

\t\t\$(this).find('img').attr('src', src)

\t\t\$(\$(this).parent().siblings().find('img')).each(function(index, value) {
\t\t\tvar sibling_src = \$(this).attr('src');

\t\t\tif (sibling_src.substring(0, sibling_src.indexOf('-'))) {
\t\t\t\tsibling_src = sibling_src.substring(0, sibling_src.indexOf('-'));
\t\t\t} else {
\t\t\t\tsibling_src = sibling_src.substring(0, sibling_src.indexOf('.'));
\t\t\t}
\t\t\tsibling_src = sibling_src + '.png';

\t\t\t\$(this).attr('src', sibling_src)
\t\t});
\t});

\tcollectionUrl = '";
        // line 441
        echo ($context["collection"] ?? null);
        echo "';
\t// alert(collectionUrl);
\tfunction loadCollection(showMenu) {
\t\t\$.ajax({
\t\t\turl: collectionUrl,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tcategoryMenu = \$(response).find('#column-left').html();
\t\t\t\t\$('#category-menu').remove();
\t\t\t\t\$('.left-panel').append(categoryMenu);

\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 452
        echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-collection').html(html);
\t\t\t\tif (showMenu) {
\t\t\t\t\t\$('#category-menu').show();
\t\t\t\t}
\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t} else {
\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t}

\t\t\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\t\t\t\$('.hide-child').css('display', 'none');
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t\t\t} else {
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t})
\t}
\tfunction loadCollectionProduct(showMenu,data = 0){
  \$.ajax({
    url : collectionUrl,
    type:'POST',
    data:data,
    dataType: 'html',
    success: function(response) {
      categoryMenu = \$(response).find('#column-left').html();
      \$('#category-menu').remove();
      \$('.left-panel').append(categoryMenu);
      \$('#tab-collection').html(response);
      if(showMenu) {
        \$('#category-menu').show();
      }
      if (localStorage.getItem('display') == 'list') {
        \$('#list-view').trigger('click');
      } else {
        \$('#grid-view').trigger('click');
      }

      if (\$('#category-menu li').hasClass('hide-child')) {
        if (localStorage.getItem(\"hide-child\") == 1) {
          \$('.hide-child').addClass('hide');
          localStorage.setItem('hide-child', 0);
        } else{
          localStorage.setItem('hide-child', 1);
        }
      }
    }
  })
}
\t(function(\$) {
\t\t\$('#main-tab li').on('click', function() {
\t\t\ttab = \$(this).children('a').data('tab');
\t\t\t\$('.mp-list-group li').removeClass('mp-active');
\t\t\t\$(this).addClass('mp-active');
\t\t\t\$('.mp-tab-content').removeClass('mp-tab-active');
\t\t\t\$(tab).addClass('mp-tab-active');
\t\t\tif (tab == '#tab-collection') {
\t\t\t\t\$('#category-menu').show();
\t\t\t} else {
\t\t\t\t\$('#category-menu').hide();
\t\t\t}
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 521
        echo ($context["feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\t\$('#prev-reviews').html(response);
\t\t\t}
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 529
        echo ($context["product_feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 532
        echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-product-reviews').html(html);
\t\t\t}
\t\t});

\t\tloadCollection(false);

\t})(jQuery)

\t
\t";
        // line 543
        if (($context["showCollection"] ?? null)) {
            // line 544
            echo "\t\t\$('a[href=\"#tab-collection\"]').trigger('click');
\t";
        }
        // line 546
        echo "
\t
\t";
        // line 555
        echo "
\t";
        // line 556
        if (($context["logged"] ?? null)) {
            // line 557
            echo "\t\$('#send-mail').on('click', function() {
\t\tf = 0;
\t\t\$('#myModal-seller-mail input[type=\\'text\\'],#myModal-seller-mail textarea').each(function() {
\t\t\tif (\$(this).val() == '') {
\t\t\t\t\$(this).parent().addClass('has-error');
\t\t\t\tf++;
\t\t\t} else {
\t\t\t\t\$(this).parent().removeClass('has-error');
\t\t\t}
\t\t});

\t\tif (f > 0) {
\t\t\t\$('#myModal-seller-mail .error').addClass('text-danger');
\t\t\t\$('#myModal-seller-mail .error').text('";
            // line 570
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t} else {
\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\$('.alert-success').remove();
\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 575
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 577
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\tdata: \$('#seller-mail-form').serialize() + '";
            // line 578
            echo ($context["mail_for"] ?? null);
            echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#send-mail').removeClass('disabled');
\t\t\t\t\t\$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(
\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\tif (this.type != 'hidden') {
\t\t\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t\t\t\t\$(this).text('');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t";
        }
        // line 595
        echo "</script>
<script type=\"text/javascript\">
\t";
        // line 618
        echo "
\t\t/**
   \t\t* [To store feedback]
\t\t* @return {none} [It will not return anything just reflect the form if unsuccessful and empty the form if successful]
\t\t*/
\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: '";
        // line 625
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
<script>
\t// Product List
\t\$('body').on('click', '#list-view', function() {
\t\t\$('#content .product-layout > .clearfix').remove();

\t\t\$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');

\t\tlocalStorage.setItem('display', 'list');
\t});

\t// Product Grid
\t\$('body').on('click', '#grid-view', function() {
\t\t\$('#content .product-layout > .clearfix').remove();

\t\t// What a shame bootstrap does not take into account dynamically loaded columns
\t\tcols = \$('#column-right, #column-left').length;

\t\tif (cols == 2) {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(2)').after('<div class=\"clearfix visible-md visible-sm\"></div>');
\t\t} else if (cols == 1) {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(3)').after('<div class=\"clearfix visible-lg\"></div>');
\t\t} else {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(3)').after('<div class=\"clearfix\"></div>');
\t\t}

\t\tlocalStorage.setItem('display', 'grid');
\t});

\tif (localStorage.getItem('display') == 'list') {
\t\t\$('#list-view').trigger('click');
\t} else {
\t\t\$('#grid-view').trigger('click');
\t}


\$('body').on('change', '#seller-collection select',function() {
  collectionUrl = this.value;
  loadCollection(true);
  // \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
  // \$('#tab-collection').load(thisvalue,function(){
  //     \$('.remove-me').remove();
  //   });
});

//   Module Update Code Start;

var waitTimer = 2000;
\$('body').on('keyup', '#seller-collection input',function() {
   let el_val = this.value;
   console.log(el_val);
   setTimeout(function () {
      loadCollectionProduct(true,'product_name= '+el_val);
    }, waitTimer);
});

//   Module Update Code Ends;

\$('body').on('click','#seller-collection a',function(e){
  if(!\$(this).hasClass('default-work'))
    e.preventDefault();
  else
    return;

  thisvalue = this.href;
  \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
  \$('#tab-collection').load(thisvalue,function(){
      \$('.remove-me').remove();
      if (localStorage.getItem('display') == 'list') {
        \$('#list-view').trigger('click');
      } else {
        \$('#grid-view').trigger('click');
      }
    });
});

\t";
        // line 748
        echo "
\t/*\$('body').on('click', '#seller-collection .pagination a', function(e) {
\t    if (!\$(this).hasClass('default-work'))
\t       e.preventDefault();
\t     else
\t       return;

\t     thisvalue = this.href;
\t    \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
\t    \$('#tab-collection').load(thisvalue, function() {
\t       \$('.remove-me').remove();
\t       if (localStorage.getItem('display') == 'list') {
\t       \$('#list-view').trigger('click');
\t       } else {
\t         \$('#grid-view').trigger('click');
\t       }
\t     });
\t   });*/
\tfunction loadCollection_collection(showMenu, collectionUrl) {


\t\t\$.ajax({
\t\t\turl: collectionUrl,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tcategoryMenu = \$(response).find('#column-left').html();
\t\t\t\t\$('#category-menu').remove();
\t\t\t\t\$('.left-panel').append(categoryMenu);
\t\t\t\t
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 777
        echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-collection').html(html);
\t\t\t\tif (showMenu) {
\t\t\t\t\t\$('#category-menu').show();
\t\t\t\t}
\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t} else {
\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t}

\t\t\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\t\t\t\$('.hide-child').css('display', 'none');
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t\t\t} else {
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t})
\t}
\t\$('body').on('click', 'div.stepper .fa-angle-up', function(e) {
\t\tvar val_input = parseInt(parseInt(\$(this).parent().parent().find('input[name=\"quantity\"]').val()) + 1);
\t\t\$(this).parent().parent().find('input[name=\"quantity\"]').val(val_input);

\t});
\t\$('body').on('click', 'div.stepper .fa-angle-down', function(e) {
\t\tif (\$(this).parent().parent().find('input[name=\"quantity\"]').val() > 1) {
\t\t\tvar val_input = \$(this).parent().parent().find('input[name=\"quantity\"]').val() - 1;
\t\t\t\$(this).parent().parent().find('input[name=\"quantity\"]').val(val_input);
\t\t}
\t});

\t

  // Grid / List toggle
\t\$(document).on('click', '.grid-list .view-btn', function () {
\t\tconst \$this = \$(this);
\t\tconst \$products = \$('.main-products');
\t\tconst view = \$this.data('view');
\t\tconst current = \$products.hasClass('product-grid') ? 'grid' : 'list';

\t\t\$this.tooltip('hide');

\t\tif (view !== current) {
\t\t\t\$products.addClass('no-transitions').removeClass('product-' + current).addClass('product-' + view);

\t\t\tsetTimeout(function () {
\t\t\t\t\$products.removeClass('no-transitions');
\t\t\t}, 1);

\t\t\tconst d = new Date;
\t\t\td.setTime(d.getTime() + 24 * 60 * 60 * 1000 * 365);

\t\t\tif (view === 'list') {
\t\t\t\tdocument.cookie = 'view=list;path=/;expires=' + d.toGMTString();
\t\t\t} else {
\t\t\t\tdocument.cookie = 'view=grid;path=/;expires=' + d.toGMTString();
\t\t\t}
\t\t}

\t\t\$('.grid-list .view-btn').removeClass('active');
\t\t\$this.addClass('active');
\t});

</script>
<style type=\"text/css\">
\t
\t.ms-slide-bgcont {
\t\t";
        // line 848
        if ((($__internal_compile_17 = ($context["partner"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["companybanner"] ?? null) : null)) {
            // line 849
            echo "\t\t  background: url(\"";
            echo (($__internal_compile_18 = ($context["partner"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["companybanner"] ?? null) : null);
            echo "\") no-repeat scroll center center/100% 325px rgba(0, 0, 0, 0);\t
\t\t  background-color: #e3e3e369;
\t\t";
        } elseif ((($__internal_compile_19 =         // line 851
($context["partner"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["backgroundcolor"] ?? null) : null)) {
            // line 852
            echo "\t\t  background-color: ";
            echo (($__internal_compile_20 = ($context["partner"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["backgroundcolor"] ?? null) : null);
            echo ";
\t\t";
        } else {
            // line 854
            echo "\t\t  background-color: #2BA9EF;
\t\t";
        }
        // line 856
        echo "\t\t  object-fit: contain;
\t\t  background-position:center;
\t}
</style>
";
        // line 860
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__651be45ecf59ccf76f02892320ef6d582dc4a759811a2af5d98da8e1114b4a1b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 860,  1257 => 856,  1253 => 854,  1247 => 852,  1245 => 851,  1239 => 849,  1237 => 848,  1163 => 777,  1132 => 748,  1009 => 625,  1000 => 618,  996 => 595,  976 => 578,  972 => 577,  967 => 575,  959 => 570,  944 => 557,  942 => 556,  939 => 555,  935 => 546,  931 => 544,  929 => 543,  915 => 532,  909 => 529,  898 => 521,  826 => 452,  812 => 441,  756 => 388,  729 => 364,  725 => 363,  721 => 362,  717 => 360,  714 => 359,  703 => 355,  693 => 353,  688 => 352,  684 => 351,  680 => 350,  673 => 346,  669 => 344,  664 => 343,  662 => 342,  656 => 339,  649 => 335,  639 => 328,  629 => 321,  624 => 319,  614 => 311,  602 => 302,  598 => 301,  587 => 293,  583 => 291,  577 => 289,  575 => 288,  570 => 286,  562 => 281,  557 => 279,  548 => 272,  546 => 271,  539 => 266,  534 => 262,  525 => 256,  520 => 253,  518 => 252,  515 => 251,  506 => 245,  501 => 242,  499 => 241,  496 => 240,  485 => 232,  480 => 229,  478 => 228,  475 => 227,  467 => 222,  462 => 220,  458 => 218,  456 => 217,  451 => 214,  447 => 204,  442 => 202,  430 => 192,  422 => 187,  416 => 183,  413 => 182,  405 => 177,  399 => 173,  396 => 172,  388 => 167,  382 => 163,  380 => 162,  377 => 161,  370 => 157,  365 => 154,  363 => 153,  356 => 149,  346 => 141,  341 => 137,  332 => 129,  326 => 127,  323 => 126,  317 => 125,  313 => 123,  309 => 121,  306 => 120,  302 => 119,  296 => 118,  293 => 117,  286 => 115,  280 => 114,  276 => 112,  272 => 110,  269 => 109,  265 => 108,  258 => 107,  256 => 106,  253 => 105,  250 => 104,  244 => 102,  241 => 101,  238 => 100,  236 => 99,  231 => 98,  229 => 97,  217 => 96,  213 => 95,  201 => 86,  192 => 82,  186 => 81,  182 => 79,  176 => 77,  173 => 76,  167 => 74,  164 => 73,  162 => 72,  153 => 65,  145 => 63,  143 => 62,  136 => 57,  123 => 45,  117 => 42,  113 => 41,  109 => 40,  106 => 39,  104 => 38,  88 => 24,  81 => 21,  78 => 20,  71 => 17,  69 => 16,  64 => 13,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__651be45ecf59ccf76f02892320ef6d582dc4a759811a2af5d98da8e1114b4a1b", "");
    }
}
