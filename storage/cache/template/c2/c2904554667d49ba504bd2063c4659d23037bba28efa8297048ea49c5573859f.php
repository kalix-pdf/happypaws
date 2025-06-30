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

/* __string_template__bc9432170a26529f55f014b8bf0756cccc3d0b8ba8c7e103e4e858b51a86aa52 */
class __TwigTemplate_01f73c46cb1bb60de83e63c8259f5f83863ec2f71578f1b1883ee4c0d2105a0e extends Template
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
        // line 5
        if ((((array_key_exists("admin_analytic_id", $context) && ($context["admin_analytic_id"] ?? null)) && array_key_exists("profile_analytic", $context)) && ($context["profile_analytic"] ?? null))) {
            // line 6
            echo "
\tga('create', '";
            // line 7
            echo ($context["admin_analytic_id"] ?? null);
            echo "', 'auto', 'AdminTracker');
\tga('AdminTracker.set', 'page', current_url.replace(base_url, ''));
\tga('AdminTracker.send', 'pageview');";
        }
        // line 10
        echo "\t";
        if ((((array_key_exists("seller_analytic_id", $context) && ($context["seller_analytic_id"] ?? null)) && array_key_exists("profile_analytic", $context)) && ($context["profile_analytic"] ?? null))) {
            // line 11
            echo "\tga('create', '";
            echo ($context["seller_analytic_id"] ?? null);
            echo "', 'auto', 'SellerTracker');
\tga('SellerTracker.set', 'page', current_url.replace(base_url, ''));
\tga('SellerTracker.send', 'pageview');";
        }
        // line 14
        echo "\t\$(document).on('ajaxComplete', function(event, request, settings) { // console.log(settings.url);
\t\tvar seller_collection = 'customerpartner/profile/collection';
\t\tif (settings.url.includes(seller_collection)) {
\t\t\tvar ajaxURL = settings.url;";
        // line 17
        if ((((array_key_exists("admin_analytic_id", $context) && ($context["admin_analytic_id"] ?? null)) && array_key_exists("collection_analytic", $context)) && ($context["collection_analytic"] ?? null))) {
            // line 18
            echo "\t\t\tga('create', '";
            echo ($context["admin_analytic_id"] ?? null);
            echo "', 'auto', 'AdminTracker');
\t\t\tga('AdminTracker.set', 'page', ajaxURL.replace(base_url, ''));
\t\t\tga('AdminTracker.send', 'pageview');";
        }
        // line 21
        echo "\t\t\t";
        if ((((array_key_exists("seller_analytic_id", $context) && ($context["seller_analytic_id"] ?? null)) && array_key_exists("collection_analytic", $context)) && ($context["collection_analytic"] ?? null))) {
            // line 22
            echo "\t\t\tga('create', '";
            echo ($context["seller_analytic_id"] ?? null);
            echo "', 'auto', 'SellerTracker');
\t\t\tga('SellerTracker.set', 'page', ajaxURL.replace(base_url, ''));
\t\t\tga('SellerTracker.send', 'pageview');";
        }
        // line 25
        echo "\t\t}
\t});
</script>
<div id=\"container\" class=\"container j-container\">

  <div id=\"top\" class=\"top top-row comp-banner\" style=\"background-color:transparent;\">
        <div class=\"ms-container\">
          <div class=\"ms-inner-controls-cont\">
            <div class=\"ms-view ms-fade-flow-view\">
              <div class=\"ms-slide-container\"
                style=\"transform-style: preserve-3d; transform: translateX(0px) translateZ(0px);\">
                <div class=\"module-item module-item-1 ms-slide ms-sl-selected\" data-delay=\"2.5\"
                  style=\"height: 250px;left: 0px;opacity: 1;transform: translateZ(0px) rotateY(0deg);z-index: 2;\">
                  <div class=\"ms-slide-bgcont\" style=\"height: 100%; opacity: 1;\">                                   
                    ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["partner"] ?? null), "companylogo", [], "array", true, true, false, 39) && (($__internal_compile_0 = ($context["partner"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["companylogo"] ?? null) : null))) {
            // line 40
            echo "                    <img
                      src=\"";
            // line 41
            echo (($__internal_compile_1 = ($context["partner"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["companylogo"] ?? null) : null);
            echo "\"
                      srcset=\"";
            // line 42
            echo (($__internal_compile_2 = ($context["partner"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["companylogo"] ?? null) : null);
            echo "\"
                      alt=\"";
            // line 43
            echo (($__internal_compile_3 = ($context["partner"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["companyname"] ?? null) : null);
            echo "\" width=\"160\" height=\"60\"
                      style=\"width: 200px;height: 80px;margin-top: 0;margin-left: 0px;object-fit: cover;\">
                    ";
        }
        // line 46
        echo "                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
  </div>

\t<div class=\"\" style=\"gap: 10px;\">
\t\t<div id=\"content\">
\t\t\t<div class=\"col-md-2 col-sm-12 col-xs-12 min-profile min-profile-right\">
\t\t\t\t
\t\t\t\t\t";
        // line 248
        echo "
\t\t\t</div><!-- emd col-3 -->

\t\t\t";
        // line 251
        echo "  
\t\t\t<div class=\"col-md-12 col-sm-12 container\">
\t\t\t\t
\t\t\t\t";
        // line 255
        echo "\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("review", ($context["public_seller_profile"] ?? null)))) {
            // line 256
            echo "\t\t\t\t\t<div class=\"card my-3\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t";
            // line 259
            echo (((($context["text_reviews"] ?? null) . " (") . ((($context["feedback_total"] ?? null)) ? (($context["feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 260
            if (($context["seller_logged"] ?? null)) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t<a>Check Reviews</a>
\t\t\t\t\t\t\t\t\t";
            } elseif (            // line 262
($context["logged"] ?? null)) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn text-decoration-underline\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal-seller-review\">
\t\t\t\t\t\t\t\t\t\t\tWrite Store Review
\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t";
            }
            // line 267
            echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\">
\t\t\t\t\t\t\t\t<div id=\"prev-reviews\" style=\"width:100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 275
        echo "
\t\t\t\t";
        // line 277
        echo "\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 278
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 280
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"small\"><i class=\"fa fa-map-marker-alt\"></i> ";
            // line 281
            echo (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["city"] ?? null) : null);
            echo ", ";
            echo ($context["province"] ?? null);
            echo " ";
            echo (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["postcode"] ?? null) : null);
            echo "</p> <hr>
\t\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev small lh-1\" style=\"flex-flow: wrap; word-break: break-word;\">
\t\t\t\t\t\t\t\t<div id=\"company-description\">
\t\t\t\t\t\t\t\t\t";
            // line 284
            echo (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["companydescription"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button id=\"see-all-btn\" class=\"btn btn-link\">See All</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 291
        echo "\t\t\t\t<hr>

\t\t\t\t";
        // line 294
        echo "\t\t\t\t<ul class=\"nav nav-underline justify-content-center\" role=\"tablist\">
\t\t\t\t\t";
        // line 295
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 296
            echo "\t\t\t\t\t\t<li class=\"nav-item\">\t
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#products-tab\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t<h3 class=\"fw-bold\">";
            // line 298
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 303
        echo "\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 304
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#product-review\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t<p class=\"\">";
            // line 306
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t</p></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 310
        echo "\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"products-tab\">
\t\t\t\t\t\t<div class=\"my-4\" id=\"tab-collection\"><div class=\"category-grid no-scroll-prev\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane fade show\" id=\"product-review\">
\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"tab-content mt-4\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"tab-profile\" role=\"tabpanel\">
\t\t\t\t\t<p class=\"wk-mp-tab-content-text\">";
        // line 326
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" style=\"flex-flow: wrap; word-break: break-word;\">
\t\t\t\t\t\t";
        // line 328
        echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["shortprofile"] ?? null) : null);
        echo "
\t\t\t\t\t\t";
        // line 329
        if ((array_key_exists("informations", $context) && ($context["informations"] ?? null))) {
            // line 330
            echo "\t\t\t\t\t\t<h3 class=\"mt-3\">";
            echo ($context["text_seller_information"] ?? null);
            echo "</h3>
\t\t\t\t\t\t";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 332
                echo "\t\t\t\t\t\t<div><a href=\"";
                echo (($__internal_compile_8 = $context["information"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["href"] ?? null) : null);
                echo "\" target=\"_blank\">";
                echo (($__internal_compile_9 = $context["information"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["title"] ?? null) : null);
                echo "</a></div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "\t\t\t\t\t\t";
        }
        // line 335
        echo "\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 341
        echo "\t\t</div>
\t</div>
</div>
<!-- container -->

";
        // line 347
        echo "<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\"> 

\t\t\t<div class=\"modal-header\">
\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"myModal-seller-review\">";
        // line 352
        echo ($context["text_write_review"] ?? null);
        echo "</h1>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>

\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<label class=\"control-label\">";
        // line 360
        echo ($context["text_nickname"] ?? null);
        echo "</label><br>
\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" value=\"0\" id=\"input-name1\" autocomplete=\"off\" checked>
\t\t\t\t\t<label class=\"btn border\" for=\"input-name1\">Show my name</label>
\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" value=\"1\" id=\"input-name2\" autocomplete=\"off\">
\t\t\t\t\t<label class=\"btn border\" for=\"input-name2\">Post as Anonymous</label>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 370
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\" style=\"width: 95%;\"></textarea>
\t\t\t\t\t";
        // line 373
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 376
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 377
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 378
                echo "\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12 rating-paws\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 380
                echo (($__internal_compile_10 = $context["review_field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["field_name"] ?? null) : null);
                echo "</label><br>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse gap-1 justify-content-end\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 382
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t";
                // line 383
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(5, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"review_attributes[";
                    // line 385
                    echo (($__internal_compile_11 = $context["review_field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw stars\"></i>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 389
                echo "\t\t\t\t\t\t\t&nbsp;";
                echo ($context["entry_good"] ?? null);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "\t\t\t\t";
        }
        // line 395
        echo "\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-bs-dismiss=\"modal\">";
        // line 399
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
        // line 400
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"wk-btn btn\">";
        echo ($context["text_send"] ?? null);
        echo "</button>
\t\t\t</div>

\t\t</div> 
\t</div>
</div>



";
        // line 409
        if (($context["logged"] ?? null)) {
            // line 410
            echo "<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
            // line 417
            echo ($context["text_close"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
            // line 419
            echo ($context["text_ask_seller"] ?? null);
            echo "</h3>
\t\t\t</div>
\t\t\t<form id=\"seller-mail-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-subject\">";
            // line 424
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"subject\" style=\"width:95%;\" id=\"input-subject\" class=\"form-control\" />
\t\t\t\t\t\t";
            // line 426
            if (array_key_exists("partner", $context)) {
                // line 427
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 429
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-message\">";
            // line 431
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
            // line 439
            echo ($context["text_close"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
            // line 440
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
        // line 449
        echo "
";
        // line 507
        echo "
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t// Initialize collection display
\tloadCollection(false);

\t// Load previous reviews
\t\$.ajax({
\t\turl: '";
        // line 515
        echo ($context["feedback"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tsuccess: function (response) {
\t\t\$('#prev-reviews').html(response);
\t\t}
\t});

\t// Popup review modal
\t\$(document).on('click', '.review-button-popup', function () {
\t\t\$('#myModal-seller-review').appendTo('body').modal('show');
\t});

\t// Set hide-child default
\tlocalStorage.setItem('hide-child', 0);
\t});

\tlet collectionUrl = '";
        // line 531
        echo ($context["collection"] ?? null);
        echo "';

\tfunction loadCollection(showMenu) {
\t\$.ajax({
\t\turl: collectionUrl,
\t\tdataType: 'html',
\t\tsuccess: function (response) {
\t\tlet categoryMenu = \$(response).find('#column-left').html();

\t\t\$('#category-menu').remove();
\t\t\$('.left-panel').append(categoryMenu);

\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 543
        echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;
\t\t\$('#tab-collection').html(html);

\t\tif (showMenu) {
\t\t\t\$('#category-menu').show();
\t\t}

\t\tif (localStorage.getItem('display') === 'list') {
\t\t\t\$('#list-view').trigger('click');
\t\t} else {
\t\t\t\$('#grid-view').trigger('click');
\t\t}

\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\$('.hide-child').css('display', 'none');
\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t} else {
\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t}
\t\t}
\t\t}
\t});
\t}

\tfunction loadCollectionProduct(showMenu, data = 0) {
\t\$.ajax({
\t\turl: collectionUrl,
\t\ttype: 'POST',
\t\tdata: data,
\t\tdataType: 'html',
\t\tsuccess: function (response) {
\t\tlet categoryMenu = \$(response).find('#column-left').html();

\t\t\$('#category-menu').remove();
\t\t\$('.left-panel').append(categoryMenu);

\t\t\$('#tab-collection').html(response);

\t\tif (showMenu) {
\t\t\t\$('#category-menu').show();
\t\t}

\t\tif (localStorage.getItem('display') === 'list') {
\t\t\t\$('#list-view').trigger('click');
\t\t} else {
\t\t\t\$('#grid-view').trigger('click');
\t\t}

\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\$('.hide-child').addClass('hide');
\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t} else {
\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t}
\t\t}
\t\t}
\t});
\t}

\tdocument.getElementById('see-all-btn').addEventListener('click', function() {
\t\tvar description = document.getElementById('company-description');
\t\tdescription.classList.toggle('expanded');

\t\tvar btn = document.getElementById('see-all-btn');
\t\tif (description.classList.contains('expanded')) {
\t\t\tbtn.textContent = 'See Less';
\t\t} else {
\t\t\tbtn.textContent = 'See All';
\t\t}
\t});

\t\$.ajax({
\t\t\turl: '";
        // line 617
        echo ($context["product_feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 620
        echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#product-review').html(html);
\t\t\t}
\t\t});

\t";
        // line 636
        echo "
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


\t
\t";
        // line 668
        if (($context["showCollection"] ?? null)) {
            // line 669
            echo "\t\t\$('a[href=\"#tab-collection\"]').trigger('click');
\t";
        }
        // line 671
        echo "
\t
\t";
        // line 680
        echo "
\t";
        // line 681
        if (($context["logged"] ?? null)) {
            // line 682
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
            // line 695
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t} else {
\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\$('.alert-success').remove();
\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 700
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 702
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\tdata: \$('#seller-mail-form').serialize() + '";
            // line 703
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
        // line 720
        echo "</script>
<script type=\"text/javascript\">
\t\$.ajax({
\t\turl: '";
        // line 723
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
        // line 734
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
        // line 750
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


\t\$('body').on('change', '#seller-collection select',function() {
\tcollectionUrl = this.value;
\tloadCollection(true);
\t// \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
\t// \$('#tab-collection').load(thisvalue,function(){
\t//     \$('.remove-me').remove();
\t//   });
\t});

//   Module Update Code Start;

\tvar waitTimer = 2000;
\t\$('body').on('keyup', '#seller-collection input',function() {
\tlet el_val = this.value;
\tconsole.log(el_val);
\tsetTimeout(function () {
\t\tloadCollectionProduct(true,'product_name= '+el_val);
\t\t}, waitTimer);
\t});

\t//   Module Update Code Ends;

\t\$('body').on('click','#seller-collection-category a',function(e){
\t\tif(!\$(this).hasClass('default-work'))
\t\t\te.preventDefault();
\t\telse
\t\t\treturn;

\t\tthisvalue = this.href;
\t\t\$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
\t\t\$('#tab-collection').load(thisvalue,function(){
\t\t\t\$('.remove-me').remove();
\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\$('#list-view').trigger('click');
\t\t\t} else {
\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t}
\t\t\t});
\t});

\t";
        // line 873
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
        // line 902
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
        // line 973
        if ((($__internal_compile_12 = ($context["partner"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["companybanner"] ?? null) : null)) {
            // line 974
            echo "\t\t  background: url(\"";
            echo (($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["companybanner"] ?? null) : null);
            echo "\") no-repeat scroll center center/100% 325px rgba(0, 0, 0, 0);\t
\t\t  background-color: #e3e3e369;
\t\t";
        } elseif ((($__internal_compile_14 =         // line 976
($context["partner"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["backgroundcolor"] ?? null) : null)) {
            // line 977
            echo "\t\t  background-color: ";
            echo (($__internal_compile_15 = ($context["partner"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["backgroundcolor"] ?? null) : null);
            echo ";
\t\t";
        } else {
            // line 979
            echo "\t\t  background-color: #2BA9EF;
\t\t";
        }
        // line 981
        echo "\t\t  object-fit: contain;
\t\t  background-position:center;
\t}
</style>
";
        // line 985
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__bc9432170a26529f55f014b8bf0756cccc3d0b8ba8c7e103e4e858b51a86aa52";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1037 => 985,  1031 => 981,  1027 => 979,  1021 => 977,  1019 => 976,  1013 => 974,  1011 => 973,  937 => 902,  906 => 873,  783 => 750,  764 => 734,  750 => 723,  745 => 720,  725 => 703,  721 => 702,  716 => 700,  708 => 695,  693 => 682,  691 => 681,  688 => 680,  684 => 671,  680 => 669,  678 => 668,  644 => 636,  635 => 620,  629 => 617,  552 => 543,  537 => 531,  518 => 515,  508 => 507,  505 => 449,  493 => 440,  489 => 439,  478 => 431,  474 => 429,  468 => 427,  466 => 426,  461 => 424,  453 => 419,  448 => 417,  439 => 410,  437 => 409,  423 => 400,  419 => 399,  413 => 395,  410 => 394,  398 => 389,  386 => 385,  383 => 384,  379 => 383,  375 => 382,  370 => 380,  366 => 378,  361 => 377,  359 => 376,  354 => 373,  349 => 370,  336 => 360,  325 => 352,  318 => 347,  311 => 341,  304 => 335,  301 => 334,  290 => 332,  286 => 331,  281 => 330,  279 => 329,  275 => 328,  270 => 326,  252 => 310,  245 => 306,  241 => 304,  238 => 303,  230 => 298,  226 => 296,  224 => 295,  221 => 294,  217 => 291,  207 => 284,  197 => 281,  193 => 280,  189 => 278,  186 => 277,  183 => 275,  173 => 267,  167 => 263,  165 => 262,  162 => 261,  160 => 260,  156 => 259,  151 => 256,  148 => 255,  143 => 251,  138 => 248,  124 => 46,  118 => 43,  114 => 42,  110 => 41,  107 => 40,  105 => 39,  89 => 25,  82 => 22,  79 => 21,  72 => 18,  70 => 17,  65 => 14,  58 => 11,  55 => 10,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bc9432170a26529f55f014b8bf0756cccc3d0b8ba8c7e103e4e858b51a86aa52", "");
    }
}
