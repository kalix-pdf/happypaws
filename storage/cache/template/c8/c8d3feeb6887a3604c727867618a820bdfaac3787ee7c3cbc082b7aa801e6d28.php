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

/* __string_template__bf3edbf2f99a5085486cc88baf34ee24f9947faa04e72651abfcb4b2624756c2 */
class __TwigTemplate_70fb6d36de5c4afcd31965506a620b18cc6a2191420a5d61400475f6de7e3cca extends Template
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

\t<div class=\"min-profile-wk-mp bg-dark\" style=\"gap: 10px;\">
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
\t\t\t\t\t\t<div class=\"min-contact\" style=\"text-align: start;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 136
        if (((($__internal_compile_12 = ($context["partner"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["telephone"] ?? null) : null) && ($context["telephone"] ?? null))) {
            // line 137
            echo "\t\t\t\t\t\t\t\t<div class=\"card-div seller-mobile\">
\t\t\t\t\t\t\t\t\t<div class=\"card-div-first\"><span></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-div-scnd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
            // line 140
            echo (($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["telephone"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_14 = ($context["partner"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["telephone"] ?? null) : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 144
        echo "
\t\t\t\t\t\t\t";
        // line 145
        if (((($__internal_compile_15 = ($context["partner"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["email"] ?? null) : null) && ($context["email"] ?? null))) {
            // line 146
            echo "\t\t\t\t\t\t\t\t<div class=\"card-div seller-email\">
\t\t\t\t\t\t\t\t\t<div class=\"card-div-first\"><span></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-div-scnd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 149
            echo (($__internal_compile_16 = ($context["partner"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["email"] ?? null) : null);
            echo "\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 150
            echo (($__internal_compile_17 = ($context["partner"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["email"] ?? null) : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 156
        echo "
\t\t\t\t\t\t\t";
        // line 157
        if ((($__internal_compile_18 = ($context["partner"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["companylocality"] ?? null) : null)) {
            // line 158
            echo "\t\t\t\t\t\t\t\t<div class=\"card-div seller-location\">
\t\t\t\t\t\t\t\t\t<div class=\"card-div-first\"><span></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-div-scnd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.google.com/maps/place/";
            // line 161
            echo (($__internal_compile_19 = ($context["partner"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["companylocality"] ?? null) : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 162
            echo (($__internal_compile_20 = ($context["partner"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["companylocality"] ?? null) : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["achivment"] ?? null), "filepath", [], "array", true, true, false, 169) && (($__internal_compile_21 = ($context["achivment"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["filepath"] ?? null) : null))) {
            // line 170
            echo "\t\t\t\t\t\t\t\t<div class=\"card-div seller-achivment\">
\t\t\t\t\t\t\t\t\t<div class=\"card-div-first\"><span></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-div-scnd\" style=\"text-align: end;display: flex;align-items: center; justify-content: space-between;gap:5px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"achivment-span-file\">";
            // line 173
            echo twig_get_attribute($this->env, $this->source, ($context["achivment"] ?? null), "basename", [], "any", false, false, false, 173);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 174
            echo (($__internal_compile_22 = ($context["achivment"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["filepath"] ?? null) : null);
            echo "\" target=\"_blank\" class=\"wk-btn btn btn-sm btn-info\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 181
        echo "
\t\t\t\t\t\t\t";
        // line 182
        if (($context["marketplace_customercontactseller"] ?? null)) {
            // line 183
            echo "\t\t\t\t\t\t\t\t<div class=\"card-div\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"card-div-scnd connect-icons\">
\t\t\t\t\t\t\t\t\t\t";
            // line 185
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "facebookid", [], "array", true, true, false, 185) && (($__internal_compile_23 = ($context["partner"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["facebookid"] ?? null) : null))) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://facebook.com/";
                // line 187
                echo (($__internal_compile_24 = ($context["partner"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["facebookid"] ?? null) : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-square zoom\" style=\"color:#395185\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "twitterid", [], "array", true, true, false, 193) && (($__internal_compile_25 = ($context["partner"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["twitterid"] ?? null) : null))) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://twitter.com/";
                // line 195
                echo (($__internal_compile_26 = ($context["partner"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["twitterid"] ?? null) : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter zoom\" style=\"color:#55ACEE\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "linkedId", [], "array", true, true, false, 201) && (($__internal_compile_27 = ($context["partner"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["linkedId"] ?? null) : null))) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://";
                // line 203
                echo (($__internal_compile_28 = ($context["partner"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["linkedId"] ?? null) : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin-square zoom\" style=\"color:#398185\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 209
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "instagram", [], "array", true, true, false, 209) && (($__internal_compile_29 = ($context["partner"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["instagram"] ?? null) : null))) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/";
                // line 211
                echo (($__internal_compile_30 = ($context["partner"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["instagram"] ?? null) : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram zoom\" aria-hidden=\"true\" style=\"color:#CD929B\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 217
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 218
            if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "youtube", [], "array", true, true, false, 218) && (($__internal_compile_31 = ($context["partner"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["youtube"] ?? null) : null))) {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/c/";
                // line 220
                echo (($__internal_compile_32 = ($context["partner"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["youtube"] ?? null) : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play zoom\" aria-hidden=\"true\" style=\"color:#FF0000\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 225
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 226
            if (($context["logged"] ?? null)) {
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o zoom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 234
                echo ($context["login"] ?? null);
                echo "\" data-toggle=\"tooltip-hover\" data-original-title=\"";
                echo ($context["text_login_contact"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope zoom\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- connect-icons -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 243
        echo "
\t\t\t\t\t\t\t<div id=\"tab-location\" class=\"card-div\"></div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 249
        echo "
\t\t\t</div><!-- emd col-3 -->

\t\t\t";
        // line 253
        echo "\t\t\t<div class=\"col-md-10 col-sm-12 col-xs-12 min-profile min-profile-right\" style=\"border: 1px solid #dde;padding-left: 15px;padding-right: 15px;border-radius: 10px;\">
\t\t\t\t<div class=\"module module-categories module-categories-wk-mp  module-categories- align-to-content\">
\t\t\t\t\t<div class=\"module-body\" id=\"wk-mp-body\">
\t\t\t\t\t\t<div class=\"tab-container\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-profile\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/profile.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">";
        // line 261
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
        // line 265
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 266
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-store\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/about.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">";
            // line 269
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 273
        echo "
\t\t\t\t\t\t\t\t";
        // line 274
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 275
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-collection\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/collection.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 279
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 284
        echo "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("review", ($context["public_seller_profile"] ?? null)))) {
            // line 285
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-reviews\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/review.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 289
            echo (((($context["text_reviews"] ?? null) . " (") . ((($context["feedback_total"] ?? null)) ? (($context["feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 294
        echo "\t\t\t\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 295
            echo "\t\t\t\t\t\t\t\t<li class=\"mp-list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-product-reviews\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<center><img src=\"image/MP/product.png\" /></center>
\t\t\t\t\t\t\t\t\t\t&nbsp;<p class=\"wk-mp-tab-text\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 304
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
        // line 314
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\" style=\"flex-flow: wrap;word-break: break-word;\">
\t\t\t\t\t\t\t";
        // line 316
        echo (($__internal_compile_33 = ($context["partner"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["shortprofile"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t";
        // line 326
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-profile -->
\t\t\t\t\t";
        // line 329
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 330
            echo "\t\t\t\t\t<div id=\"tab-store\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-2\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">";
            // line 332
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\" style=\"flex-flow: wrap;word-break: break-word;\">
\t\t\t\t\t\t\t";
            // line 334
            echo (($__internal_compile_34 = ($context["partner"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["companydescription"] ?? null) : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-store -->
\t\t\t\t\t";
        }
        // line 339
        echo "
\t\t\t\t\t";
        // line 340
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("review", ($context["public_seller_profile"] ?? null)))) {
            // line 341
            echo "\t\t\t\t\t<div id=\"tab-reviews\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-3\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 344
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
        // line 352
        echo "
\t\t\t\t\t";
        // line 353
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 354
            echo "\t\t\t\t\t<div id=\"tab-product-reviews\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-4\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 357
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-product-reviews -->
\t\t\t\t\t";
        }
        // line 363
        echo "
\t\t\t\t\t";
        // line 364
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 365
            echo "\t\t\t\t\t<div id=\"tab-collection\" class=\"module-item module-item-1 tab-pane\"
\t\t\t\t\t\tid=\"categories-6527a7b2cadc3-tab-5\">
\t\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">
\t\t\t\t\t\t\t";
            // line 368
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" data-loaded=\"true\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- tab-collection -->
\t\t\t\t\t";
        }
        // line 374
        echo "\t\t\t\t\t<div id=\"dummy-collection\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 378
        echo "\t\t</div>
\t</div>
</div>
<!-- container -->

";
        // line 383
        if (($context["logged"] ?? null)) {
            // line 384
            echo "<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
            // line 391
            echo ($context["text_close"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
            // line 393
            echo ($context["text_ask_seller"] ?? null);
            echo "</h3>
\t\t\t</div>
\t\t\t<form id=\"seller-mail-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-subject\">";
            // line 398
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"subject\" style=\"width:95%;\" id=\"input-subject\" class=\"form-control\" />
\t\t\t\t\t\t";
            // line 400
            if (array_key_exists("partner", $context)) {
                // line 401
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 403
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-message\">";
            // line 405
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
            // line 413
            echo ($context["text_close"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
            // line 414
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
        // line 423
        echo "
<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 431
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 433
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\"
\t\t\t\t\t\t\t\t>";
        // line 440
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" style=\"max-width:95% !important;\" id=\"input-name\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 447
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" style=\"width:95%;\" class=\"form-control\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t";
        // line 451
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 454
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 455
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 456
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 458
                echo (($__internal_compile_35 = $context["review_field"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["field_name"] ?? null) : null);
                echo "</label>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display: inline-block;\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 462
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t";
                // line 463
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 464
                    echo "\t\t\t\t\t\t\t<input type=\"radio\" id=\"review_attributes[";
                    echo (($__internal_compile_36 = $context["review_field"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["field_id"] ?? null) : null);
                    echo "]\"
\t\t\t\t\t\t\t\tname=\"review_attributes[";
                    // line 465
                    echo (($__internal_compile_37 = $context["review_field"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 467
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
            // line 471
            echo "\t\t\t\t\t";
        }
        // line 472
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 474
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
        // line 475
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 476
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
        // line 500
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
        // line 553
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
        // line 564
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
        // line 633
        echo ($context["feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\t\$('#prev-reviews').html(response);
\t\t\t}
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 641
        echo ($context["product_feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 644
        echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-product-reviews').html(html);
\t\t\t}
\t\t});

\t\tloadCollection(false);

\t})(jQuery)

\t
\t";
        // line 655
        if (($context["showCollection"] ?? null)) {
            // line 656
            echo "\t\t\$('a[href=\"#tab-collection\"]').trigger('click');
\t";
        }
        // line 658
        echo "
\t
\t";
        // line 667
        echo "
\t";
        // line 668
        if (($context["logged"] ?? null)) {
            // line 669
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
            // line 682
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t} else {
\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\$('.alert-success').remove();
\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 687
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 689
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\tdata: \$('#seller-mail-form').serialize() + '";
            // line 690
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
        // line 707
        echo "</script>
<script type=\"text/javascript\">
\t\$.ajax({
\t\turl: '";
        // line 710
        echo ($context["loadLocation"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tsuccess: function(response) {
\t\t\t\$('#tab-location').html(response);
\t\t}
\t});

\tlocalocation = false;
\t\$('#main-tab li').on('click', function() {
\t\t\tif (!localocation) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 721
        echo ($context["loadLocation"] ?? null);
        echo "',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\$('#tab-location').html(response);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tlocalocation = true;
\t\t\t}
\t\t})

\t\t/**
   \t\t* [To store feedback]
\t\t* @return {none} [It will not return anything just reflect the form if unsuccessful and empty the form if successful]
\t\t*/
\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: '";
        // line 737
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
        // line 860
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
        // line 889
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
        // line 960
        if ((($__internal_compile_38 = ($context["partner"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["companybanner"] ?? null) : null)) {
            // line 961
            echo "\t\t  background: url(\"";
            echo (($__internal_compile_39 = ($context["partner"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["companybanner"] ?? null) : null);
            echo "\") no-repeat scroll center center/100% 325px rgba(0, 0, 0, 0);\t
\t\t  background-color: #e3e3e369;
\t\t";
        } elseif ((($__internal_compile_40 =         // line 963
($context["partner"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["backgroundcolor"] ?? null) : null)) {
            // line 964
            echo "\t\t  background-color: ";
            echo (($__internal_compile_41 = ($context["partner"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["backgroundcolor"] ?? null) : null);
            echo ";
\t\t";
        } else {
            // line 966
            echo "\t\t  background-color: #2BA9EF;
\t\t";
        }
        // line 968
        echo "\t\t  object-fit: contain;
\t\t  background-position:center;
\t}
</style>
";
        // line 972
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__bf3edbf2f99a5085486cc88baf34ee24f9947faa04e72651abfcb4b2624756c2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1500 => 972,  1494 => 968,  1490 => 966,  1484 => 964,  1482 => 963,  1476 => 961,  1474 => 960,  1400 => 889,  1369 => 860,  1246 => 737,  1227 => 721,  1213 => 710,  1208 => 707,  1188 => 690,  1184 => 689,  1179 => 687,  1171 => 682,  1156 => 669,  1154 => 668,  1151 => 667,  1147 => 658,  1143 => 656,  1141 => 655,  1127 => 644,  1121 => 641,  1110 => 633,  1038 => 564,  1024 => 553,  968 => 500,  941 => 476,  937 => 475,  933 => 474,  929 => 472,  926 => 471,  915 => 467,  905 => 465,  900 => 464,  896 => 463,  892 => 462,  885 => 458,  881 => 456,  876 => 455,  874 => 454,  868 => 451,  861 => 447,  851 => 440,  841 => 433,  836 => 431,  826 => 423,  814 => 414,  810 => 413,  799 => 405,  795 => 403,  789 => 401,  787 => 400,  782 => 398,  774 => 393,  769 => 391,  760 => 384,  758 => 383,  751 => 378,  746 => 374,  737 => 368,  732 => 365,  730 => 364,  727 => 363,  718 => 357,  713 => 354,  711 => 353,  708 => 352,  697 => 344,  692 => 341,  690 => 340,  687 => 339,  679 => 334,  674 => 332,  670 => 330,  668 => 329,  663 => 326,  659 => 316,  654 => 314,  642 => 304,  634 => 299,  628 => 295,  625 => 294,  617 => 289,  611 => 285,  608 => 284,  600 => 279,  594 => 275,  592 => 274,  589 => 273,  582 => 269,  577 => 266,  575 => 265,  568 => 261,  558 => 253,  553 => 249,  546 => 243,  540 => 239,  530 => 234,  527 => 233,  519 => 227,  517 => 226,  514 => 225,  506 => 220,  503 => 219,  501 => 218,  498 => 217,  489 => 211,  486 => 210,  484 => 209,  481 => 208,  473 => 203,  470 => 202,  468 => 201,  465 => 200,  457 => 195,  454 => 194,  452 => 193,  449 => 192,  441 => 187,  438 => 186,  436 => 185,  432 => 183,  430 => 182,  427 => 181,  417 => 174,  413 => 173,  408 => 170,  406 => 169,  403 => 168,  394 => 162,  390 => 161,  385 => 158,  383 => 157,  380 => 156,  371 => 150,  367 => 149,  362 => 146,  360 => 145,  357 => 144,  348 => 140,  343 => 137,  341 => 136,  332 => 129,  326 => 127,  323 => 126,  317 => 125,  313 => 123,  309 => 121,  306 => 120,  302 => 119,  296 => 118,  293 => 117,  286 => 115,  280 => 114,  276 => 112,  272 => 110,  269 => 109,  265 => 108,  258 => 107,  256 => 106,  253 => 105,  250 => 104,  244 => 102,  241 => 101,  238 => 100,  236 => 99,  231 => 98,  229 => 97,  217 => 96,  213 => 95,  201 => 86,  192 => 82,  186 => 81,  182 => 79,  176 => 77,  173 => 76,  167 => 74,  164 => 73,  162 => 72,  153 => 65,  145 => 63,  143 => 62,  136 => 57,  123 => 45,  117 => 42,  113 => 41,  109 => 40,  106 => 39,  104 => 38,  88 => 24,  81 => 21,  78 => 20,  71 => 17,  69 => 16,  64 => 13,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf3edbf2f99a5085486cc88baf34ee24f9947faa04e72651abfcb4b2624756c2", "");
    }
}
