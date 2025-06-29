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

/* __string_template__ab462a7efffae0ffd73d54dbbd50e4c401fdee6c10947641f9c69e1e546b7d15 */
class __TwigTemplate_598feb4ba047b068db5046824ec97c75a0c28c2cdbdc005c7d05d4727a2ff85c extends Template
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
\t\t\t\t\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t";
            // line 260
            echo (((($context["text_reviews"] ?? null) . " (") . ((($context["feedback_total"] ?? null)) ? (($context["feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn text-decoration-underline\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t\tWrite Store Review
\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div><hr>
\t\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev\">
\t\t\t\t\t\t\t\t<div id=\"prev-reviews\" style=\"width:100%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 272
        echo "
\t\t\t\t";
        // line 274
        echo "\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("store", ($context["public_seller_profile"] ?? null)))) {
            // line 275
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 277
            echo ($context["text_store"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"small\"><i class=\"fa fa-map-marker-alt\"></i> ";
            // line 278
            echo (($__internal_compile_4 = ($context["partner"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["city"] ?? null) : null);
            echo ", ";
            echo ($context["province"] ?? null);
            echo " ";
            echo (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["postcode"] ?? null) : null);
            echo "</p> <hr>
\t\t\t\t\t\t\t<div class=\"category-grid no-scroll-prev small lh-1\" style=\"flex-flow: wrap; word-break: break-word;\">
\t\t\t\t\t\t\t\t<div id=\"company-description\">
\t\t\t\t\t\t\t\t\t";
            // line 281
            echo (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["companydescription"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button id=\"see-all-btn\" class=\"btn btn-link\">See All</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 288
        echo "\t\t\t\t<hr>

\t\t\t\t";
        // line 291
        echo "\t\t\t\t<ul class=\"nav nav-underline justify-content-center\" role=\"tablist\">
\t\t\t\t\t";
        // line 292
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("collection", ($context["public_seller_profile"] ?? null)))) {
            // line 293
            echo "\t\t\t\t\t\t<li class=\"nav-item\">\t
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#products-tab\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t<h3 class=\"fw-bold\">";
            // line 295
            echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 300
        echo "\t\t\t\t\t";
        if ((array_key_exists("public_seller_profile", $context) && twig_in_filter("productReview", ($context["public_seller_profile"] ?? null)))) {
            // line 301
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#product-review\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t<p class=\"\">";
            // line 303
            echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
            echo "
\t\t\t\t\t\t\t</p></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 307
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
        // line 323
        echo ($context["text_profile"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"category-grid no-scroll-prev\" style=\"flex-flow: wrap; word-break: break-word;\">
\t\t\t\t\t\t";
        // line 325
        echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["shortprofile"] ?? null) : null);
        echo "
\t\t\t\t\t\t";
        // line 326
        if ((array_key_exists("informations", $context) && ($context["informations"] ?? null))) {
            // line 327
            echo "\t\t\t\t\t\t<h3 class=\"mt-3\">";
            echo ($context["text_seller_information"] ?? null);
            echo "</h3>
\t\t\t\t\t\t";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 329
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
            // line 331
            echo "\t\t\t\t\t\t";
        }
        // line 332
        echo "\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t";
        // line 340
        echo "\t\t</div>
\t</div>
</div>
<!-- container -->

";
        // line 345
        if (($context["logged"] ?? null)) {
            // line 346
            echo "<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
            // line 353
            echo ($context["text_close"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
            // line 355
            echo ($context["text_ask_seller"] ?? null);
            echo "</h3>
\t\t\t</div>
\t\t\t<form id=\"seller-mail-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-subject\">";
            // line 360
            echo ($context["text_subject"] ?? null);
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"subject\" style=\"width:95%;\" id=\"input-subject\" class=\"form-control\" />
\t\t\t\t\t\t";
            // line 362
            if (array_key_exists("partner", $context)) {
                // line 363
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"seller\" value=\"";
                echo ($context["seller_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-message\">";
            // line 367
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
            // line 375
            echo ($context["text_close"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
            // line 376
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
        // line 385
        echo "
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Modal title</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"myModal-seller-review\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\" style=\"padding:12px;\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t<span class=\"sr-only\">";
        // line 411
        echo ($context["text_close"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 413
        echo ($context["text_write_review"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"review-modal\">
\t\t\t\t<form class=\"form-horizontal\" id=\"seller_review_form\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\"
\t\t\t\t\t\t\t\t>";
        // line 420
        echo ($context["text_nickname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" style=\"max-width:95% !important;\" id=\"input-name\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
        // line 427
        echo ($context["text_review"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" style=\"width:95%;\" class=\"form-control\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"help-block pull-right\">
\t\t\t\t\t\t\t";
        // line 431
        echo ($context["text_note"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 434
        if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
            // line 435
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                // line 436
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 438
                echo (($__internal_compile_10 = $context["review_field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["field_name"] ?? null) : null);
                echo "</label>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display: inline-block;\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 442
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t";
                // line 443
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 444
                    echo "\t\t\t\t\t\t\t<input type=\"radio\" id=\"review_attributes[";
                    echo (($__internal_compile_11 = $context["review_field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["field_id"] ?? null) : null);
                    echo "]\"
\t\t\t\t\t\t\t\tname=\"review_attributes[";
                    // line 445
                    echo (($__internal_compile_12 = $context["review_field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["field_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo $context["i"];
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 447
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
            // line 451
            echo "\t\t\t\t\t";
        }
        // line 452
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 454
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
        // line 455
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\tclass=\"wk-btn btn btn-primary\">";
        // line 456
        echo ($context["text_send"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
\t<!-- /.modal-content -->
</div><!-- /.modal -->

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t// Initialize collection display
\tloadCollection(false);

\t// Load previous reviews
\t\$.ajax({
\t\turl: '";
        // line 469
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
        // line 485
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
        // line 497
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
        // line 571
        echo ($context["product_feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 574
        echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#product-review').html(html);
\t\t\t}
\t\t});

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
        // line 611
        if (($context["showCollection"] ?? null)) {
            // line 612
            echo "\t\t\$('a[href=\"#tab-collection\"]').trigger('click');
\t";
        }
        // line 614
        echo "
\t
\t";
        // line 623
        echo "
\t";
        // line 624
        if (($context["logged"] ?? null)) {
            // line 625
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
            // line 638
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t} else {
\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\$('.alert-success').remove();
\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 643
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 645
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\tdata: \$('#seller-mail-form').serialize() + '";
            // line 646
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
        // line 663
        echo "</script>
<script type=\"text/javascript\">
\t\$.ajax({
\t\turl: '";
        // line 666
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
        // line 677
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
        // line 693
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
        // line 816
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
        // line 845
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
        // line 916
        if ((($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["companybanner"] ?? null) : null)) {
            // line 917
            echo "\t\t  background: url(\"";
            echo (($__internal_compile_14 = ($context["partner"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["companybanner"] ?? null) : null);
            echo "\") no-repeat scroll center center/100% 325px rgba(0, 0, 0, 0);\t
\t\t  background-color: #e3e3e369;
\t\t";
        } elseif ((($__internal_compile_15 =         // line 919
($context["partner"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["backgroundcolor"] ?? null) : null)) {
            // line 920
            echo "\t\t  background-color: ";
            echo (($__internal_compile_16 = ($context["partner"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["backgroundcolor"] ?? null) : null);
            echo ";
\t\t";
        } else {
            // line 922
            echo "\t\t  background-color: #2BA9EF;
\t\t";
        }
        // line 924
        echo "\t\t  object-fit: contain;
\t\t  background-position:center;
\t}
</style>
";
        // line 928
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__ab462a7efffae0ffd73d54dbbd50e4c401fdee6c10947641f9c69e1e546b7d15";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1042 => 928,  1036 => 924,  1032 => 922,  1026 => 920,  1024 => 919,  1018 => 917,  1016 => 916,  942 => 845,  911 => 816,  788 => 693,  769 => 677,  755 => 666,  750 => 663,  730 => 646,  726 => 645,  721 => 643,  713 => 638,  698 => 625,  696 => 624,  693 => 623,  689 => 614,  685 => 612,  683 => 611,  643 => 574,  637 => 571,  560 => 497,  545 => 485,  526 => 469,  510 => 456,  506 => 455,  502 => 454,  498 => 452,  495 => 451,  484 => 447,  474 => 445,  469 => 444,  465 => 443,  461 => 442,  454 => 438,  450 => 436,  445 => 435,  443 => 434,  437 => 431,  430 => 427,  420 => 420,  410 => 413,  405 => 411,  377 => 385,  365 => 376,  361 => 375,  350 => 367,  346 => 365,  340 => 363,  338 => 362,  333 => 360,  325 => 355,  320 => 353,  311 => 346,  309 => 345,  302 => 340,  293 => 332,  290 => 331,  279 => 329,  275 => 328,  270 => 327,  268 => 326,  264 => 325,  259 => 323,  241 => 307,  234 => 303,  230 => 301,  227 => 300,  219 => 295,  215 => 293,  213 => 292,  210 => 291,  206 => 288,  196 => 281,  186 => 278,  182 => 277,  178 => 275,  175 => 274,  172 => 272,  157 => 260,  151 => 256,  148 => 255,  143 => 251,  138 => 248,  124 => 46,  118 => 43,  114 => 42,  110 => 41,  107 => 40,  105 => 39,  89 => 25,  82 => 22,  79 => 21,  72 => 18,  70 => 17,  65 => 14,  58 => 11,  55 => 10,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ab462a7efffae0ffd73d54dbbd50e4c401fdee6c10947641f9c69e1e546b7d15", "");
    }
}
