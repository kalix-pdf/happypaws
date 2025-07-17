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

/* extension/module/marketplace.twig */
class __TwigTemplate_be43d9a20ee794183bcc35c7e499f16e539c2fc7d35c3a7ebb32dfb6c587cc71 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <style type=\"text/css\">
  .img-thumbnail-default{
    height: 100px;
    width: 100px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 3px;
    line-height: 1.42857;
    max-width: 100px;
    padding: 4px;
    transition: all 0.2s ease-in-out 0s;
    cursor: pointer;
  }

  #text-mp{
    font-size: 30px;
  }

  #text-version{
    font-size: 12px;
  }

  .mp-button{
    background-color: #0667B4;
    color: white;
    border-radius: 2px;
    font-size: 12px;
  }

  .mp-button:focus{
    outline: none !important;
  }

  .mp-demo{
    background-color: #2196F3;
  }

  .mp-save{
    background-color: rgb(77, 188, 96);
  }

  .mp-cancel{
    background-color: #E15959;
  }

  .mp-addon{
    background-color: #4285F4;
    color: #FFF;
    border-color: #4285F4;
  }

  .nav-tabs {
      border-bottom: 1px solid #4285F4;
  }

  .nav.nav-tabs > li > a:hover, .nav-tabs > li > a:hover{
    background-color: #4285F4;
    border-color: #4285F4;
    color: white;
    outline: medium none !important;
  }

  .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus {
    background-color: #FFFFFF;
    border: 1px solid #4285F4;
    border-bottom-color: #FFFFFF !important;
    outline: medium none !important;
    color: black;
  }

  .fa-minus-circle{
    cursor: pointer;
  }

  .dropdown-menu{
    max-height: 500px;
    overflow: auto;
  }
</style>
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"http://webkul.com/blog/opencart-marketplace-multi-vendor-module/\" target=\"_blank\" title=\"";
        // line 85
        echo ($context["text_blog_help"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-lg mp-button\">";
        echo ($context["text_blog"] ?? null);
        echo "</a>
        <a href=\"https://webkul.uvdesk.com/\" target=\"_blank\" title=\"";
        // line 86
        echo ($context["text_ticket_help"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-lg mp-button mp-demo\">";
        echo ($context["text_ticket"] ?? null);
        echo "</a>
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 87
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-lg mp-button mp-save\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 88
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-lg mp-button mp-cancel\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 89
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 92
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 92);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 92);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12 text-center\">
        <div class=\"text-center\" id=\"text-mp\">";
        // line 100
        echo ($context["heading_title"] ?? null);
        echo "</div>
      </div>
      <div class=\"col-sm-12 text-center\">
        <div class=\"text-center\" id=\"text-version\">Version 5.0.0.0</div>
      </div>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 109
        if (($context["error_warning"] ?? null)) {
            // line 110
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 114
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 115
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 119
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 121
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">

      <!--   <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 126
        echo ($context["text_info"] ?? null);
        echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div> -->

        <form action=\"";
        // line 130
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-module_marketplace_status\">";
        // line 133
        echo ($context["text_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_marketplace_status\" id=\"input-module_marketplace_status\" class=\"form-control\">
                <option value=\"0\" ";
        // line 136
        if ((array_key_exists("module_marketplace_status", $context) && (($context["module_marketplace_status"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                <option value=\"1\"  ";
        // line 137
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-marketplace_store\">";
        // line 143
        echo ($context["text_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"marketplace_store\" id=\"input-marketplace_store\" class=\"form-control\">
                ";
        // line 146
        if ((array_key_exists("stores", $context) && ($context["stores"] ?? null))) {
            // line 147
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 148
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148);
                echo "\" ";
                if ((array_key_exists("marketplace_store", $context) && (($context["marketplace_store"] ?? null) == twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148)))) {
                    echo "selected";
                }
                echo "   >";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 148);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                ";
        }
        // line 151
        echo "              </select>
            </div>
          </div>

          <br/>

          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 158
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-commission\" data-toggle=\"tab\">";
        // line 159
        echo ($context["tab_commission"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 160
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-advncd\" data-toggle=\"tab\">";
        // line 161
        echo "Advanced";
        echo "</a></li>
            <li><a href=\"#tab-order\" data-toggle=\"tab\">";
        // line 162
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 163
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-sell\" data-toggle=\"tab\">";
        // line 164
        echo ($context["tab_sell"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-profile\" data-toggle=\"tab\">";
        // line 165
        echo ($context["tab_profile"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mod-config\" data-toggle=\"tab\">";
        // line 166
        echo ($context["tab_mod_config"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 167
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-paypal\" data-toggle=\"tab\">";
        // line 168
        echo ($context["tab_paypal"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-analytics\" data-toggle=\"tab\">";
        // line 169
        echo ($context["tab_analytics"] ?? null);
        echo "</a></li>
          </ul>

          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail\"><span data-toggle=\"tooltip\" title=\"";
        // line 175
        echo ($context["entry_admin_mailinfo"] ?? null);
        echo "\">";
        echo ($context["entry_admin_mail"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_adminmail\" ";
        // line 177
        if (array_key_exists("marketplace_adminmail", $context)) {
            echo " value=\"";
            echo ($context["marketplace_adminmail"] ?? null);
            echo "\" ";
        }
        echo "  id=\"input-mail\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-contactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 181
        echo ($context["entry_default_imageinfo"] ?? null);
        echo "\">";
        echo ($context["entry_default_image"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"file\" class=\"hide\" name=\"marketplace_default_image\" />
                  <input type=\"hidden\" name=\"marketplace_default_image_name\" value=\"";
        // line 184
        if (array_key_exists("marketplace_default_image_name", $context)) {
            echo ($context["marketplace_default_image_name"] ?? null);
        }
        echo "  \" />
                  <div class=\"img-thumbnail-default\" id=\"default-image\">
                    ";
        // line 186
        if ((array_key_exists("marketplace_default_image", $context) && ($context["marketplace_default_image"] ?? null))) {
            // line 187
            echo "                      <img src=\"";
            echo ($context["marketplace_default_image"] ?? null);
            echo "\" id=\"default-image-view\" />
                    ";
        }
        // line 189
        echo "                  </div>
                  ";
        // line 190
        if ((array_key_exists("marketplace_default_image", $context) && ($context["marketplace_default_image"] ?? null))) {
            // line 191
            echo "                    <div style=\"width:100px\">
                      <button class=\"btn btn-danger btn-sm\" id=\"removeimg\" type=\"button\" style=\"margin-top: 5px;width: 100%;\">";
            // line 192
            echo ($context["entry_remove"] ?? null);
            echo "</button>
                    </div>
                  ";
        }
        // line 195
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-becomepartnerinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 198
        echo ($context["entry_becomepartnerinfo"] ?? null);
        echo "\">";
        echo ($context["entry_becomepartner"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_becomepartnerregistration\" id=\"input-becomepartnerinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 201
        if ((array_key_exists("marketplace_becomepartnerregistration", $context) && (($context["marketplace_becomepartnerregistration"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 202
        if ((array_key_exists("marketplace_becomepartnerregistration", $context) && ($context["marketplace_becomepartnerregistration"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-partnerapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 208
        echo ($context["entry_partnerapprovinfo"] ?? null);
        echo "\">";
        echo ($context["entry_partnerapprov"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_partnerapprov\" id=\"input-partnerapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 211
        if ((array_key_exists("marketplace_partnerapprov", $context) && (($context["marketplace_partnerapprov"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 212
        if ((array_key_exists("marketplace_partnerapprov", $context) && ($context["marketplace_partnerapprov"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-productapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo ($context["entry_productapprovinfo"] ?? null);
        echo "\">";
        echo ($context["entry_productapprov"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_productapprov\" id=\"input-productapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 221
        if ((array_key_exists("marketplace_productapprov", $context) && (($context["marketplace_productapprov"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 222
        if ((array_key_exists("marketplace_productapprov", $context) && ($context["marketplace_productapprov"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-categoryapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 228
        echo ($context["entry_categoryapprovinfo"] ?? null);
        echo "\">";
        echo ($context["entry_categoryapprov"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_categoryapprov\" id=\"input-categoryapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 231
        if ((array_key_exists("marketplace_categoryapprov", $context) && (($context["marketplace_categoryapprov"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 232
        if ((array_key_exists("marketplace_categoryapprov", $context) && ($context["marketplace_categoryapprov"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-informationapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 238
        echo ($context["entry_informationapprovinfo"] ?? null);
        echo "\">";
        echo ($context["entry_informationapprov"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_informationapprov\" id=\"input-informationapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 241
        if ((array_key_exists("marketplace_informationapprov", $context) && (($context["marketplace_informationapprov"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 242
        if ((array_key_exists("marketplace_informationapprov", $context) && ($context["marketplace_informationapprov"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellereditreview\"><span data-toggle=\"tooltip\" title=\"";
        // line 248
        echo ($context["entry_sellereditreviewinfo"] ?? null);
        echo "\">";
        echo ($context["entry_sellereditreview"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellereditreview\" id=\"input-sellereditreview\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 251
        if ((array_key_exists("marketplace_sellereditreview", $context) && (($context["marketplace_sellereditreview"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 252
        if ((array_key_exists("marketplace_sellereditreview", $context) && ($context["marketplace_sellereditreview"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-contactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 258
        echo ($context["entry_customer_contact_sellerinfo"] ?? null);
        echo "\">";
        echo ($context["entry_customer_contact_seller"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_customercontactseller\" id=\"input-contactseller\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 261
        if ((array_key_exists("marketplace_customercontactseller", $context) && (($context["marketplace_customercontactseller"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 262
        if ((array_key_exists("marketplace_customercontactseller", $context) && ($context["marketplace_customercontactseller"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellernamecart\"><span data-toggle=\"tooltip\" title=\"";
        // line 268
        echo ($context["entry_seller_name_cart_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_name_cart"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_name_cart_status\" id=\"input-sellernamecart\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 271
        if ((array_key_exists("marketplace_seller_name_cart_status", $context) && (($context["marketplace_seller_name_cart_status"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 272
        if ((array_key_exists("marketplace_seller_name_cart_status", $context) && ($context["marketplace_seller_name_cart_status"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 278
        echo ($context["entry_mail_admin_customer_contact_sellerinfo"] ?? null);
        echo "\">";
        echo ($context["entry_mail_admin_customer_contact_seller"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mailadmincustomercontactseller\" id=\"input-admincustomercontactseller\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 281
        if ((array_key_exists("marketplace_mailadmincustomercontactseller", $context) && (($context["marketplace_mailadmincustomercontactseller"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 282
        if ((array_key_exists("marketplace_mailadmincustomercontactseller", $context) && ($context["marketplace_mailadmincustomercontactseller"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

                <input type=\"hidden\" class=\"hide\" name=\"marketplace_separate_view\" value=\"1\" />
              ";
        // line 297
        echo "
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" >
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 300
        echo ($context["entry_notification_filter_help"] ?? null);
        echo "\">
                    ";
        // line 301
        echo ($context["entry_notification_filter"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    ";
        // line 306
        if ((array_key_exists("order_statuses", $context) && ($context["order_statuses"] ?? null))) {
            // line 307
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                // line 308
                echo "                        <div class=\"checkbox\">
                          <label for=\"notification_filter_";
                // line 309
                echo (($__internal_compile_0 = $context["order_status"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["order_status_id"] ?? null) : null);
                echo "\">
                            <input type=\"checkbox\" name=\"marketplace_notification_filter[]\" value=\"";
                // line 310
                echo (($__internal_compile_1 = $context["order_status"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["order_status_id"] ?? null) : null);
                echo "\" id=\"notification_filter_";
                echo (($__internal_compile_2 = $context["order_status"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order_status_id"] ?? null) : null);
                echo "\" ";
                if (((array_key_exists("marketplace_notification_filter", $context) && ($context["marketplace_notification_filter"] ?? null)) && twig_in_filter((($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_status_id"] ?? null) : null), ($context["marketplace_notification_filter"] ?? null)))) {
                    echo "checked";
                }
                echo " />
                            ";
                // line 311
                echo (($__internal_compile_4 = $context["order_status"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                echo "
                          </label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                    ";
        }
        // line 316
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 317
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>
                </div>
              </div>

            </div>
            <!-- comission tab -->
            <div class=\"tab-pane\" id=\"tab-commission\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 325
        echo ($context["entry_commission_info"] ?? null);
        echo "\">";
        echo ($context["entry_commission"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group\"><span class=\"input-group-addon mp-addon mp-addon\">%</span>
                     <input type=\"number\" min=\"0\" name=\"marketplace_commission\" ";
        // line 328
        if (array_key_exists("marketplace_commission", $context)) {
            echo " value=\"";
            echo ($context["marketplace_commission"] ?? null);
            echo "\" ";
        }
        echo "  id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission-unit_price\"><span data-toggle=\"tooltip\" title=\"";
        // line 334
        echo ($context["entry_commission_unit_price_info"] ?? null);
        echo "\">";
        echo ($context["entry_commission_unit_price"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_commission_unit_price\" id=\"input-commission-unit_price\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 337
        if ((array_key_exists("marketplace_commission_unit_price", $context) && (($context["marketplace_commission_unit_price"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 338
        if ((array_key_exists("marketplace_commission_unit_price", $context) && ($context["marketplace_commission_unit_price"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission-tax\"><span data-toggle=\"tooltip\" title=\"";
        // line 344
        echo ($context["entry_commission_tax_info"] ?? null);
        echo "\">";
        echo ($context["entry_commission_tax"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_commission_tax\" id=\"input-commission-tax\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 347
        if ((array_key_exists("marketplace_commission_tax", $context) && (($context["marketplace_commission_tax"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 348
        if ((array_key_exists("marketplace_commission_tax", $context) && ($context["marketplace_commission_tax"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commissionworkedon\"><span data-toggle=\"tooltip\" title=\"";
        // line 354
        echo ($context["entry_commission_workedinfo"] ?? null);
        echo "\">";
        echo ($context["entry_commission_worked"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"checkbox\" name=\"marketplace_commissionworkedon\" value=\"1\" ";
        // line 356
        if ((array_key_exists("marketplace_commissionworkedon", $context) && ($context["marketplace_commissionworkedon"] ?? null))) {
            echo "checked";
        }
        echo " id=\"input-commissionworkedon\" class=\"form-control\" style=\"margin: 10px 0 0 0;\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\"  title=\"";
        // line 361
        echo ($context["entry_commission_addinfo"] ?? null);
        echo "\">";
        echo ($context["entry_commission_add"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 366
        if (((array_key_exists("marketplace_commission_add", $context) && twig_test_iterable(($context["marketplace_commission_add"] ?? null))) && twig_in_filter("category", ($context["marketplace_commission_add"] ?? null)))) {
            // line 367
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category]\" value=\"category\" checked=\"checked\" />
                        ";
        } else {
            // line 369
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category]\" value=\"category\" />
                        ";
        }
        // line 371
        echo "                        ";
        echo ($context["entry_category"] ?? null);
        echo "
                      </label>
                    </div>
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 376
        if (((array_key_exists("marketplace_commission_add", $context) && twig_test_iterable(($context["marketplace_commission_add"] ?? null))) && twig_in_filter("category_child", ($context["marketplace_commission_add"] ?? null)))) {
            // line 377
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category_child]\" value=\"category_child\" checked=\"checked\" />
                        ";
        } else {
            // line 379
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category_child]\" value=\"category_child\" />
                        ";
        }
        // line 381
        echo "                        ";
        echo ($context["entry_category_child"] ?? null);
        echo "
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 389
        echo ($context["entry_priority_commissioninfo"] ?? null);
        echo "\">";
        echo ($context["entry_priority_commission"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">

                  <ul class=\"nav nav-pills nav-stacked\" id=\"sortable\">
                    ";
        // line 393
        if (( !array_key_exists("marketplace_boxcommission", $context) || (($context["marketplace_boxcommission"] ?? null) == 0))) {
            // line 394
            echo "                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[fixed]\" value=\"fixed\" />
                        ";
            // line 396
            echo ($context["entry_fixed"] ?? null);
            echo "</a>
                      </li>
                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[category]\" value=\"fixed\" />
                        ";
            // line 400
            echo ($context["entry_category"] ?? null);
            echo "</a>
                      </li>
                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[category_child]\" value=\"fixed\"/>
                        ";
            // line 404
            echo ($context["entry_category_child"] ?? null);
            echo "</a>
                      </li>
                    ";
        } else {
            // line 407
            echo "                      ";
            if ((array_key_exists("marketplace_boxcommission", $context) && ($context["marketplace_boxcommission"] ?? null))) {
                // line 408
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["marketplace_boxcommission"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["box"]) {
                    // line 409
                    echo "                          <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                            <input type=\"hidden\" name=\"marketplace_boxcommission[";
                    // line 410
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo $context["key"];
                    echo "\"/>
                            ";
                    // line 411
                    if (($context["key"] == "fixed")) {
                        // line 412
                        echo "                              ";
                        echo ($context["entry_fixed"] ?? null);
                        echo "
                            ";
                    } elseif ((                    // line 413
$context["key"] == "category")) {
                        // line 414
                        echo "                              ";
                        echo ($context["entry_category"] ?? null);
                        echo "
                            ";
                    } elseif ((                    // line 415
$context["key"] == "category_child")) {
                        // line 416
                        echo "                              ";
                        echo ($context["entry_category_child"] ?? null);
                        echo "
                            ";
                    }
                    // line 418
                    echo "                            </a>
                          </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['box'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 421
                echo "                      ";
            }
            // line 422
            echo "                    ";
        }
        // line 423
        echo "                  </ul>
                </div>
              </div>
            </div>


            <!-- product tab -->
            <div class=\"tab-pane\" id=\"tab-product\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerProductStore\"><span data-toggle=\"tooltip\" title=\"";
        // line 432
        echo ($context["entry_seller_product_store_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_product_store"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_product_store\" id=\"input-sellerProductStore\" class=\"form-control\">
                    ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seller_product_store"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 436
            echo "                    <option value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_seller_product_store", $context) && ($context["key"] == ($context["marketplace_seller_product_store"] ?? null)))) {
                echo "selected";
            }
            echo " >";
            echo $context["value"];
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-auto-generate-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 443
        echo ($context["entry_auto_generate_sku_info"] ?? null);
        echo "\">";
        echo ($context["entry_auto_generate_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_auto_generate_sku\" id=\"input-auto-generate-sku\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 446
        if ((array_key_exists("marketplace_auto_generate_sku", $context) && (($context["marketplace_auto_generate_sku"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 447
        if ((array_key_exists("marketplace_auto_generate_sku", $context) && ($context["marketplace_auto_generate_sku"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-low-stock-info\"><span data-toggle=\"tooltip\" title=\"";
        // line 453
        echo ($context["entry_low_stock_notification_info"] ?? null);
        echo "\">";
        echo ($context["entry_low_stock_notification"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_low_stock_notification\" id=\"input-low-stock-info\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 456
        if ((array_key_exists("marketplace_low_stock_notification", $context) && (($context["marketplace_low_stock_notification"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 457
        if ((array_key_exists("marketplace_low_stock_notification", $context) && ($context["marketplace_low_stock_notification"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-low-stock-quantity\"><span data-toggle=\"tooltip\" title=\"";
        // line 463
        echo ($context["entry_low_stock_quantity_info"] ?? null);
        echo "\">";
        echo ($context["entry_low_stock_quantity"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_low_stock_quantity\" ";
        // line 465
        if (array_key_exists("marketplace_low_stock_quantity", $context)) {
            echo "value=\"";
            echo ($context["marketplace_low_stock_quantity"] ?? null);
            echo "\"";
        }
        echo " id =\"input-low-stock-quantity\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 470
        echo ($context["entry_alowed_product_columnsinfo"] ?? null);
        echo "\">";
        echo ($context["entry_alowed_product_columns"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_table"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 474
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 476
            if (((array_key_exists("marketplace_allowedproductcolumn", $context) && twig_test_iterable(($context["marketplace_allowedproductcolumn"] ?? null))) && twig_in_filter($context["value"], ($context["marketplace_allowedproductcolumn"] ?? null)))) {
                // line 477
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedproductcolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 479
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedproductcolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 481
            echo "                          ";
            echo twig_replace_filter($context["value"], ["_" => " "]);
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 485
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 486
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>
                </div>
              </div>


              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 492
        echo ($context["entry_alowed_product_tabsinfo"] ?? null);
        echo "\">";
        echo ($context["entry_alowed_product_tabs"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 496
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 498
            if (((array_key_exists("marketplace_allowedproducttabs", $context) && twig_test_iterable(($context["marketplace_allowedproducttabs"] ?? null))) && twig_in_filter($context["value"], ($context["marketplace_allowedproducttabs"] ?? null)))) {
                // line 499
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedproducttabs[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 501
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedproducttabs[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 503
            echo "                          ";
            echo twig_replace_filter($context["value"], ["_" => " "]);
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        echo "
                  </div>
                  <a class=\"selectAll\">";
        // line 509
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>

                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_seller_category_required\"><span data-toggle=\"tooltip\" title=\"";
        // line 515
        echo ($context["entry_category_required_info"] ?? null);
        echo "\">";
        echo ($context["entry_category_required"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_category_required\" id=\"input-marketplace_seller_category_required\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 518
        if ((array_key_exists("marketplace_seller_category_required", $context) && (($context["marketplace_seller_category_required"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 519
        if ((array_key_exists("marketplace_seller_category_required", $context) && ($context["marketplace_seller_category_required"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-allowed-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 525
        echo ($context["entry_seller_category_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_allowed_seller_category_type\" id=\"input-allowed-category\" class=\"form-control\">
                    ";
        // line 528
        if ((array_key_exists("marketplace_allowed_seller_category_type", $context) && ($context["marketplace_allowed_seller_category_type"] ?? null))) {
            echo "selected";
            echo "
                    <option value=\"1\" selected=\"selected\">";
            // line 529
            echo ($context["text_all_category"] ?? null);
            echo "</option>
                    <option value=\"0\" >";
            // line 530
            echo ($context["text_selected_category"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 532
            echo "                    <option value=\"1\" >";
            echo ($context["text_all_category"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 533
            echo ($context["text_selected_category"] ?? null);
            echo "</option>
                    ";
        }
        // line 535
        echo "                  </select>
                </div>
                <div class=\"col-sm-9 col-sm-offset-3\">
                  <input type=\"text\" name=\"category\" value=\"\"  class=\"form-control\" />
                  <div id=\"allowed-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 540
        if ((array_key_exists("marketplace_allowed_categories", $context) && ($context["marketplace_allowed_categories"] ?? null))) {
            // line 541
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_allowed_categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["marketplace_allowed_category"]) {
                // line 542
                echo "                          <div id=\"allowed-category";
                echo $context["key"];
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $context["marketplace_allowed_category"];
                echo "
                            <input type=\"hidden\" name=\"marketplace_allowed_categories[";
                // line 543
                echo $context["key"];
                echo "]\" value=\"";
                echo $context["marketplace_allowed_category"];
                echo "\" />
                            <input class=\"allowed_categories\" type=\"hidden\" value=\"";
                // line 544
                echo $context["key"];
                echo "\" />
                          </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['marketplace_allowed_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 547
            echo "                    ";
        }
        // line 548
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-noofimages\">";
        // line 552
        echo ($context["entry_no_of_images"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_noofimages\" ";
        // line 554
        if (array_key_exists("marketplace_noofimages", $context)) {
            echo " value=\"";
            echo ($context["marketplace_noofimages"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["text_no_img"] ?? null);
        echo "\" id=\"input-noofimages\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-imageex\"><span data-toggle=\"tooltip\" title=\"";
        // line 559
        echo ($context["entry_image_exinfo"] ?? null);
        echo "\">";
        echo ($context["entry_image_ex"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_imageex\" ";
        // line 561
        if (array_key_exists("marketplace_imageex", $context)) {
            echo " value=\"";
            echo ($context["marketplace_imageex"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"jpg,jpeg,png\" id=\"input-imageex\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-imagesize\"><span data-toggle=\"tooltip\" title=\"";
        // line 566
        echo ($context["wkentry_pimagesizeinfo"] ?? null);
        echo "\">";
        echo ($context["wkentry_pimagesize"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_imagesize\" ";
        // line 568
        if (array_key_exists("marketplace_imagesize", $context)) {
            echo " value=\"";
            echo ($context["marketplace_imagesize"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["text_in_kbs"] ?? null);
        echo "\" id=\"input-imagesize\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-download_ex\"><span data-toggle=\"tooltip\" title=\"";
        // line 573
        echo ($context["entry_download_exinfo"] ?? null);
        echo "\">";
        echo ($context["entry_download_ex"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_downloadex\" ";
        // line 575
        if (array_key_exists("marketplace_downloadex", $context)) {
            echo " value=\"";
            echo ($context["marketplace_downloadex"] ?? null);
            echo "\" ";
        }
        echo "  placeholder=\"zip,jpg,jpeg\" id=\"input-download_ex\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-download_size\"><span data-toggle=\"tooltip\" title=\"";
        // line 580
        echo ($context["entry_download_sizeinfo"] ?? null);
        echo "\">";
        echo ($context["entry_download_size"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_downloadsize\" ";
        // line 582
        if (array_key_exists("marketplace_downloadsize", $context)) {
            echo " value=\"";
            echo ($context["marketplace_downloadsize"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["text_in_kbs"] ?? null);
        echo "\" id=\"input-download_size\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-productaddemail\"><span data-toggle=\"tooltip\" title=\"";
        // line 587
        echo ($context["entry_product_add_emailinfo"] ?? null);
        echo "\">";
        echo ($context["entry_product_add_email"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_productaddemail\" id=\"input-productaddemail\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 590
        if ((array_key_exists("marketplace_productaddemail", $context) && (($context["marketplace_productaddemail"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 591
        if ((array_key_exists("marketplace_productaddemail", $context) && ($context["marketplace_productaddemail"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-product-reapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 597
        echo ($context["entry_product_reapproveinfo"] ?? null);
        echo "\">";
        echo ($context["entry_product_reapprove"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_product_reapprove\" id=\"input-product-reapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 600
        if ((array_key_exists("marketplace_product_reapprove", $context) && (($context["marketplace_product_reapprove"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 601
        if ((array_key_exists("marketplace_product_reapprove", $context) && ($context["marketplace_product_reapprove"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerdeleteproduct\"><span data-toggle=\"tooltip\" title=\"";
        // line 607
        echo ($context["entry_customer_delete_productinfo"] ?? null);
        echo "\">";
        echo ($context["entry_customer_delete_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerdeleteproduct\" id=\"input-sellerdeleteproduct\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 610
        if ((array_key_exists("marketplace_sellerdeleteproduct", $context) && (($context["marketplace_sellerdeleteproduct"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 611
        if ((array_key_exists("marketplace_sellerdeleteproduct", $context) && ($context["marketplace_sellerdeleteproduct"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerproductdelete\"><span data-toggle=\"tooltip\" title=\"";
        // line 617
        echo ($context["entry_sellerProductDeleteInfo"] ?? null);
        echo "\">";
        echo ($context["entry_sellerProductDelete"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerproductdelete\" id=\"input-sellerproductdelete\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 620
        if ((array_key_exists("marketplace_sellerproductdelete", $context) && (($context["marketplace_sellerproductdelete"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 621
        if ((array_key_exists("marketplace_sellerproductdelete", $context) && ($context["marketplace_sellerproductdelete"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerproductshow\"><span data-toggle=\"tooltip\" title=\"";
        // line 627
        echo ($context["entry_sellerProductVisibleInfo"] ?? null);
        echo "\">";
        echo ($context["entry_sellerProductVisible"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerproductshow\" id=\"input-sellerproductshow\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 630
        if ((array_key_exists("marketplace_sellerproductshow", $context) && (($context["marketplace_sellerproductshow"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 631
        if ((array_key_exists("marketplace_sellerproductshow", $context) && ($context["marketplace_sellerproductshow"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerbuyproduct\"><span data-toggle=\"tooltip\" title=\"";
        // line 637
        echo ($context["entry_sellerBuyProductInfo"] ?? null);
        echo "\">";
        echo ($context["entry_sellerBuyProduct"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerbuyproduct\" id=\"input-sellerbuyproduct\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 640
        if ((array_key_exists("marketplace_sellerbuyproduct", $context) && (($context["marketplace_sellerbuyproduct"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 641
        if ((array_key_exists("marketplace_sellerbuyproduct", $context) && ($context["marketplace_sellerbuyproduct"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

            </div>
            <!-- product tab -->
             <div class=\"tab-pane\" id=\"tab-advncd\">
               <!--  Upgrade---->
               <fieldset>
                 <legend>";
        // line 651
        echo ($context["entry_fs_restrcition_quant"] ?? null);
        echo "</legend>

                 <div class=\"form-group\">
                   <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_qra_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 654
        echo ($context["help_qra_seller"] ?? null);
        echo "\">";
        echo ($context["entry_qra_seller"] ?? null);
        echo "</span></label>
                   <div class=\"col-sm-9\">
                     <select name=\"marketplace_product_purchase_limit_qra_seller\" id=\"marketplace_product_purchase_limit_qra_seller\" class=\"form-control quantonly\">
                       <option value=\"0\" ";
        // line 657
        if ((array_key_exists("marketplace_product_purchase_limit_qra_seller", $context) &&  !($context["marketplace_product_purchase_limit_qra_seller"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                       <option value=\"1\" ";
        // line 658
        if ((array_key_exists("marketplace_product_purchase_limit_qra_seller", $context) && ($context["marketplace_product_purchase_limit_qra_seller"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                     </select>
                   </div>
                 </div>

                   <div class=\"form-group\">
                     <label class=\"col-sm-3 control-label\" for=\"input-low-stock-info\"><span data-toggle=\"tooltip\" title=\"";
        // line 664
        echo ($context["help_product_purchase_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_purchase_limit_based_on"] ?? null);
        echo "</span></label>
                     <div class=\"col-sm-9\">
                       <select name=\"marketplace_product_purchase_limit_based_on\" id=\"input-purchase-limit-based-on\" class=\"form-control quantonly\">
                         <option value=\"0\" ";
        // line 667
        if ((array_key_exists("marketplace_product_purchase_limit_based_on", $context) &&  !($context["marketplace_product_purchase_limit_based_on"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_product_quant"] ?? null);
        echo " </option>
                         <option value=\"1\" ";
        // line 668
        if ((array_key_exists("marketplace_product_purchase_limit_based_on", $context) && ($context["marketplace_product_purchase_limit_based_on"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_product_num"] ?? null);
        echo " </option>
                       </select>
                     </div>
                   </div>

                   <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-low-stock-quantity\"><span data-toggle=\"tooltip\" title=\"";
        // line 674
        echo ($context["entry_product_purchase_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_purchase_limit"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"2\" name=\"marketplace_product_purchase_limit\" ";
        // line 676
        if (array_key_exists("marketplace_product_purchase_limit", $context)) {
            echo "value=\"";
            echo ($context["marketplace_product_purchase_limit"] ?? null);
            echo "\"";
        }
        echo " id =\"input-low-stock-quantity\" class=\"form-control\"/>
                    </div>
                  </div>

               </fieldset>

               <fieldset>
                 <legend>";
        // line 683
        echo ($context["entry_fs_restrcition_price"] ?? null);
        echo "</legend>

                  <div class=\"form-group\">
                   <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_pra_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 686
        echo ($context["help_pra_seller"] ?? null);
        echo "\">";
        echo ($context["entry_p_seller"] ?? null);
        echo "</span></label>
                   <div class=\"col-sm-9\">
                     <select name=\"marketplace_product_purchase_limit_pra_seller\" id=\"marketplace_product_purchase_limit_pra_seller\" class=\"form-control quantonly\">
                       <option value=\"0\" ";
        // line 689
        if ((array_key_exists("marketplace_product_purchase_limit_pra_seller", $context) &&  !($context["marketplace_product_purchase_limit_pra_seller"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                       <option value=\"1\" ";
        // line 690
        if ((array_key_exists("marketplace_product_purchase_limit_pra_seller", $context) && ($context["marketplace_product_purchase_limit_pra_seller"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                     </select>
                   </div>
                 </div>

                   <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_price_limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 696
        echo ($context["help_pra_price"] ?? null);
        echo "\">";
        echo ($context["entry_pra_price"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"2\" name=\"marketplace_product_purchase_price_limit\" ";
        // line 698
        if (array_key_exists("marketplace_product_purchase_price_limit", $context)) {
            echo "value=\"";
            echo ($context["marketplace_product_purchase_price_limit"] ?? null);
            echo "\"";
        }
        echo " id =\"marketplace_product_purchase_price_limit\" class=\"form-control\"/>
                    </div>
                  </div>

               </fieldset>
                <fieldset>
                 <legend>";
        // line 704
        echo ($context["entry_pr_priority"] ?? null);
        echo "</legend>

                 <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_priority\"><span data-toggle=\"tooltip\" title=\"";
        // line 707
        echo ($context["help_pr_priority"] ?? null);
        echo "\">";
        echo ($context["entry_pr_priority"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <select name=\"marketplace_product_purchase_limit_priority\" id=\"marketplace_product_purchase_limit_priority\" class=\"form-control quantonly\">
                      <option value=\"0\" ";
        // line 710
        if ((array_key_exists("marketplace_product_purchase_limit_priority", $context) &&  !($context["marketplace_product_purchase_limit_priority"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["entry_fs_restrcition_quant"] ?? null);
        echo " </option>
                      <option value=\"1\" ";
        // line 711
        if ((array_key_exists("marketplace_product_purchase_limit_priority", $context) && ($context["marketplace_product_purchase_limit_priority"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["entry_fs_restrcition_price"] ?? null);
        echo " </option>
                    </select>
                  </div>
                </div>
                 </fieldset>
               <!-- fieldset>
                 <legend>";
        // line 717
        echo ($context["entry_scf"] ?? null);
        echo "</legend>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_scf-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["entry_scf"] ?? null);
        echo "\">";
        echo ($context["help_scf"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_scf_status\" id=\"input-marketplace_scf-status\" class=\"form-control quantonly\">
                    <option value=\"0\" ";
        // line 722
        if ((array_key_exists("marketplace_scf_status", $context) &&  !($context["marketplace_scf_status"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 723
        if ((array_key_exists("marketplace_scf_status", $context) && ($context["marketplace_scf_status"] ?? null))) {
            echo " ";
            echo "selected";
        }
        echo "> ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div> </fieldset -->
              <!-- <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_scf-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 728
        echo "Allow Seller Layered Filter on Category page";
        echo "\">";
        echo "Seller Filter";
        echo "</span></label>
                <div class=\"col-sm-9\">

                </div>
              </div> -->
                <!--  Upgrade -->
             </div>

            <!-- order tab -->
            <div class=\"tab-pane\" id=\"tab-order\">
             <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-seller-manage-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 739
        echo ($context["entry_seller_manage_order_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_manage_order"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_manage_order\" id=\"input-seller-manage-order\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 742
        if ((array_key_exists("marketplace_seller_manage_order", $context) && (($context["marketplace_seller_manage_order"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 743
        if ((array_key_exists("marketplace_seller_manage_order", $context) && ($context["marketplace_seller_manage_order"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
             </div>
             <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-seller-manage-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 748
        echo ($context["entry_seller_create_order_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_create_order"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_create_order\" id=\"input-seller-create-order\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 751
        if ((array_key_exists("marketplace_seller_create_order", $context) && (($context["marketplace_seller_create_order"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 752
        if ((array_key_exists("marketplace_seller_create_order", $context) && ($context["marketplace_seller_create_order"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
             </div>
             <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-orderstatusinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 757
        echo ($context["wkentry_seller_order_statusinfo"] ?? null);
        echo "\">";
        echo ($context["wkentry_seller_order_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerorderstatus\" id=\"input-orderstatusinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 760
        if ((array_key_exists("marketplace_sellerorderstatus", $context) && (($context["marketplace_sellerorderstatus"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 761
        if ((array_key_exists("marketplace_sellerorderstatus", $context) && ($context["marketplace_sellerorderstatus"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mailtosellerinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 767
        echo ($context["entry_mailtosellerinfo"] ?? null);
        echo "\">";
        echo ($context["wkentry_mailtoseller"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mailtoseller\" id=\"input-mailtosellerinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 770
        if ((array_key_exists("marketplace_mailtoseller", $context) && (($context["marketplace_mailtoseller"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 771
        if ((array_key_exists("marketplace_mailtoseller", $context) && ($context["marketplace_mailtoseller"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-orderstatusnotifyadmin\"><span data-toggle=\"tooltip\" title=\"";
        // line 777
        echo ($context["wkentry_seller_order_status_notify_admin_info"] ?? null);
        echo "\">";
        echo ($context["wkentry_seller_order_status_notify_admin"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_adminnotify\" id=\"input-orderstatusnotifyadmin\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 780
        if ((array_key_exists("marketplace_adminnotify", $context) && (($context["marketplace_adminnotify"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 781
        if ((array_key_exists("marketplace_adminnotify", $context) && ($context["marketplace_adminnotify"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-availableorderstatusinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 787
        echo ($context["wkentry_seller_available_order_statusinfo"] ?? null);
        echo "\">";
        echo ($context["wkentry_seller_available_order_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    ";
        // line 790
        if ((array_key_exists("order_statuses", $context) && ($context["order_statuses"] ?? null))) {
            // line 791
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                // line 792
                echo "                        <div class=\"checkbox available_order_status\">
                          <label for=\"available_order_status_";
                // line 793
                echo (($__internal_compile_5 = $context["order_status"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_status_id"] ?? null) : null);
                echo "\">
                            <input type=\"checkbox\" name=\"marketplace_available_order_status[]\" value=\"";
                // line 794
                echo (($__internal_compile_6 = $context["order_status"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["order_status_id"] ?? null) : null);
                echo "\" id=\"available_order_status_";
                echo (($__internal_compile_7 = $context["order_status"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["order_status_id"] ?? null) : null);
                echo "\" ";
                if (((array_key_exists("marketplace_available_order_status", $context) && ($context["marketplace_available_order_status"] ?? null)) && twig_in_filter((($__internal_compile_8 = $context["order_status"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["order_status_id"] ?? null) : null), ($context["marketplace_available_order_status"] ?? null)))) {
                    echo "checked";
                }
                echo " />
                            ";
                // line 795
                echo (($__internal_compile_9 = $context["order_status"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
                echo "
                          </label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 799
            echo "                    ";
        }
        // line 800
        echo "                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 806
        echo ($context["wkentry_seller_order_status_sequenceinfo"] ?? null);
        echo "\">
                    ";
        // line 807
        echo ($context["wkentry_seller_order_status_sequence"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"orderstatus\">
                      ";
        // line 813
        if ((array_key_exists("marketplace_order_status_sequence", $context) && ($context["marketplace_order_status_sequence"] ?? null))) {
            // line 814
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_order_status_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 815
                echo "                          <li id='";
                echo (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, "order_status_sequence_", "value", [], "any", false, false, false, 815)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["order_status_id"] ?? null) : null);
                echo "' >
                            <a style=\"cursor:grab\">
                              <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                              <input type=\"hidden\" name=\"marketplace_order_status_sequence[";
                // line 818
                echo (($__internal_compile_11 = $context["value"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["order_status_id"] ?? null) : null);
                echo "][order_status_id]\" value=\"";
                echo (($__internal_compile_12 = $context["value"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["order_status_id"] ?? null) : null);
                echo "\"/>
                              <input type=\"hidden\" name=\"marketplace_order_status_sequence[";
                // line 819
                echo (($__internal_compile_13 = $context["value"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["order_status_id"] ?? null) : null);
                echo "][name]\" value=\"";
                echo (($__internal_compile_14 = $context["value"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null);
                echo "\" />
                              ";
                // line 820
                echo (($__internal_compile_15 = $context["value"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null);
                echo "
                            </a>
                          </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 824
            echo "                      ";
        }
        // line 825
        echo "                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 830
        echo ($context["entry_complete_order_statusinfo"] ?? null);
        echo "\">";
        echo ($context["entry_complete_order_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_complete_order_status\" id=\"input-admincustomercontactseller\" class=\"form-control\">
                    <option></option>
                    ";
        // line 834
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 835
            echo "                      <option value=\"";
            echo (($__internal_compile_16 = $context["order_status"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["order_status_id"] ?? null) : null);
            echo "\" ";
            if ((array_key_exists("marketplace_complete_order_status", $context) && (($context["marketplace_complete_order_status"] ?? null) == (($__internal_compile_17 = $context["order_status"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["order_status_id"] ?? null) : null)))) {
                echo "selected";
            }
            echo " >";
            echo (($__internal_compile_18 = $context["order_status"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["name"] ?? null) : null);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 837
        echo "                  </select>
                </div>
              </div>
               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 841
        echo ($context["entry_proccessing_order_statusinfo"] ?? null);
        echo "\">";
        echo ($context["entry_proccessing_order_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_proccessing_order_status\" id=\"input-admincustomercontactseller\" class=\"form-control\">
                    <option></option>
                    ";
        // line 845
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 846
            echo "                      <option value=\"";
            echo (($__internal_compile_19 = $context["order_status"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["order_status_id"] ?? null) : null);
            echo "\" ";
            if ((array_key_exists("marketplace_proccessing_order_status", $context) && (($context["marketplace_proccessing_order_status"] ?? null) == (($__internal_compile_20 = $context["order_status"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["order_status_id"] ?? null) : null)))) {
                echo "selected";
            }
            echo " >";
            echo (($__internal_compile_21 = $context["order_status"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["name"] ?? null) : null);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        echo "                  </select>
                </div>
              </div>
               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-cancelorderstatus\"><span data-toggle=\"tooltip\" title=\"";
        // line 852
        echo ($context["entry_cancel_order_statusinfo"] ?? null);
        echo "\">";
        echo ($context["entry_cancel_order_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_cancel_order_status\" id=\"input-cancelorderstatus\" class=\"form-control\">
                    <option></option>
                    ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 857
            echo "                      <option value=\"";
            echo (($__internal_compile_22 = $context["order_status"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["order_status_id"] ?? null) : null);
            echo "\" ";
            if ((array_key_exists("marketplace_cancel_order_status", $context) && (($context["marketplace_cancel_order_status"] ?? null) == (($__internal_compile_23 = $context["order_status"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["order_status_id"] ?? null) : null)))) {
                echo "selected";
            }
            echo " >";
            echo (($__internal_compile_24 = $context["order_status"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 859
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 863
        echo ($context["entry_seller_shipping_methodinfo"] ?? null);
        echo "\">";
        echo ($context["entry_seller_shipping_method"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\"  style=\"height:150px;overflow:auto\">
                    ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 867
            echo "                      <div class=\"checkbox\">
                        <label>
                          <input name=\"marketplace_allowed_shipping_method[]\" type=\"checkbox\" value=\"";
            // line 869
            echo (((($__internal_compile_25 = $context["shipping_method"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["code"] ?? null) : null) . ".") . (($__internal_compile_26 = $context["shipping_method"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["code"] ?? null) : null));
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_shipping_method", $context) && twig_in_filter((((($__internal_compile_27 = $context["shipping_method"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["code"] ?? null) : null) . ".") . (($__internal_compile_28 = $context["shipping_method"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["code"] ?? null) : null)), ($context["marketplace_allowed_shipping_method"] ?? null)))) {
                echo "checked";
            }
            echo " />
                          ";
            // line 870
            echo (($__internal_compile_29 = $context["shipping_method"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null);
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 874
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-min-cart-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 878
        echo ($context["entry_min_cart_value_info"] ?? null);
        echo "\">";
        echo ($context["entry_min_cart_value"] ?? null);
        echo "</span></label>
                 <div class=\"col-sm-9\">
                   <div class=\"input-group\"><span class=\"input-group-addon mp-addon mp-addon\">";
        // line 880
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
                      <input type=\"number\" min=\"0\" name=\"marketplace_min_cart_value\" ";
        // line 881
        if (array_key_exists("marketplace_min_cart_value", $context)) {
            echo " value=\"";
            echo ($context["marketplace_min_cart_value"] ?? null);
            echo "\" ";
        }
        echo " id =\"input-min-cart-value\" class=\"form-control\"/>
                   </div>
                 </div>
              </div>
              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-product-quantity-restriction\"><span data-toggle=\"tooltip\" title=\"";
        // line 886
        echo ($context["entry_product_quantity_restriction_info"] ?? null);
        echo "\">";
        echo ($context["entry_product_quantity_restriction"] ?? null);
        echo "</span></label>
                 <div class=\"col-sm-9\">
                   <input type=\"number\" min=\"0\" name=\"marketplace_product_quantity_restriction\" ";
        // line 888
        if (array_key_exists("marketplace_product_quantity_restriction", $context)) {
            echo " value=\"";
            echo ($context["marketplace_product_quantity_restriction"] ?? null);
            echo "\" ";
        }
        echo " id =\"input-product-quantity-restriction\" class=\"form-control\"/>
                 </div>
              </div>
            </div>

            <!-- seo tab -->
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 895
        echo ($context["entry_mpinfo"] ?? null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-useseo\"><span data-toggle=\"tooltip\" title=\"";
        // line 900
        echo ($context["entry_mpinfo"] ?? null);
        echo "\">";
        echo ($context["entry_useseo"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_useseo\" id=\"input-useseo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 903
        if ((array_key_exists("marketplace_useseo", $context) && (($context["marketplace_useseo"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 904
        if ((array_key_exists("marketplace_useseo", $context) && ($context["marketplace_useseo"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>


              <ul class=\"nav nav-tabs\">
                <!-- <li ><a href=\"#tab-seochild\" data-toggle=\"tab\">";
        // line 911
        echo ($context["tab_mpseo"] ?? null);
        echo "</a></li> -->
                <li class=\"active\"><a href=\"#tab-seoauto\" data-toggle=\"tab\">";
        // line 912
        echo ($context["tab_defaultseo"] ?? null);
        echo "</a></li>
                <li ><a href=\"#tab-productseo\" data-toggle=\"tab\">";
        // line 913
        echo ($context["tab_productseo"] ?? null);
        echo "</a></li>
              </ul>

              <div class=\"tab-content\">

                <!-- <div class=\"tab-pane\" id=\"tab-seochild\">                </div> -->

                <div class=\"tab-pane active\" id=\"tab-seoauto\">
                  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 921
        echo ($context["entry_addseomoreinfo"] ?? null);
        echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                  </div>

                  <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 928
        echo ($context["entry_route"] ?? null);
        echo "</td>
                        <td class=\"text-left\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 929
        echo ($context["entry_store_help"] ?? null);
        echo "\">";
        echo ($context["entry_store"] ?? null);
        echo "</span></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 934
        $context["seoCount"] = 0;
        // line 935
        echo "                      ";
        if (((array_key_exists("marketplace_SefUrlspath", $context) && twig_test_iterable(($context["marketplace_SefUrlspath"] ?? null))) && ($context["marketplace_SefUrlspath"] ?? null))) {
            // line 936
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_SefUrlspath"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["wkSefUrls"]) {
                // line 937
                echo "                          <tr id=\"tr-";
                echo ($context["seoCount"] ?? null);
                echo "\">
                            <td class=\"text-left\">
                              <select name=\"marketplace_SefUrlspath[";
                // line 939
                echo ($context["seoCount"] ?? null);
                echo "]\" class=\"form-control\">
                                ";
                // line 940
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["paths"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                    // line 941
                    echo "                                  ";
                    if (($context["path"] == $context["wkSefUrls"])) {
                        // line 942
                        echo "                                    <option value=\"";
                        echo $context["wkSefUrls"];
                        echo "\" selected >  ";
                        echo $context["wkSefUrls"];
                        echo " </option>
                                  ";
                    } else {
                        // line 944
                        echo "                                    <option value=\"";
                        echo $context["path"];
                        echo "\">  ";
                        echo $context["path"];
                        echo " </option>
                                  ";
                    }
                    // line 946
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 947
                echo "                              </select>
                            </td>

                            <td class=\"text-left\">
                              <input type=\"text\" class=\"form-control\" name=\"marketplace_SefUrlsvalue[";
                // line 951
                echo ($context["seoCount"] ?? null);
                echo "]\" value=\"";
                echo (($__internal_compile_30 = ($context["marketplace_SefUrlsvalue"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["key"]] ?? null) : null);
                echo "\"/>
                            </td>

                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#tr-";
                // line 954
                echo ($context["seoCount"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                // line 956
                $context["seoCount"] = (($context["seoCount"] ?? null) + 1);
                // line 957
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['wkSefUrls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 958
            echo "                      ";
        }
        // line 959
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" id=\"addSeo\" data-toggle=\"tooltip\" title=\"";
        // line 963
        echo ($context["entry_addmore"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div id=\"tab-productseo\" class=\"tab-pane\">
                  <input type=\"hidden\" name=\"marketplace_product_seo_name\" value=\"screenname\" id=\"";
        // line 969
        echo ($context["marketplace_product_seo_name"] ?? null);
        echo "\">
               
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 973
        echo ($context["entry_seo_display_formatinfo"] ?? null);
        echo "\">
                        ";
        // line 974
        echo ($context["entry_seo_display_format"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <select class=\"form-control\" name=\"marketplace_product_seo_format\">
                        <option value=\"1\" ";
        // line 979
        if ((array_key_exists("marketplace_product_seo_format", $context) && (($context["marketplace_product_seo_format"] ?? null) == 1))) {
            echo "selected";
        }
        echo ">";
        echo ($context["entry_only_product"] ?? null);
        echo "</option>
                        <option value=\"2\" ";
        // line 980
        if ((array_key_exists("marketplace_product_seo_format", $context) && (($context["marketplace_product_seo_format"] ?? null) == 2))) {
            echo "selected";
        }
        echo ">";
        echo ($context["entry_seller_and_product"] ?? null);
        echo "</option>
                        ";
        // line 982
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 987
        echo ($context["entry_seo_default_nameinfo"] ?? null);
        echo "\">
                        ";
        // line 988
        echo ($context["entry_seo_default_name"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"marketplace_product_seo_default_name\" value=\"";
        // line 992
        if ((array_key_exists("marketplace_product_seo_default_name", $context) && ($context["marketplace_product_seo_default_name"] ?? null))) {
            echo ($context["marketplace_product_seo_default_name"] ?? null);
        }
        echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 997
        echo ($context["entry_seo_default_name_productinfo"] ?? null);
        echo "\">
                        ";
        // line 998
        echo ($context["entry_seo_default_name_product"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" name=\"marketplace_product_seo_product_name\"  value=\"1\" ";
        // line 1004
        if ((array_key_exists("marketplace_product_seo_product_name", $context) && ($context["marketplace_product_seo_product_name"] ?? null))) {
            echo "checked";
        }
        echo " />
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1011
        echo ($context["entry_seo_add_page_extensioninfo"] ?? null);
        echo "\">
                        ";
        // line 1012
        echo ($context["entry_seo_add_page_extension"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"marketplace_product_seo_page_ext\" value=\"";
        // line 1016
        if ((array_key_exists("marketplace_product_seo_page_ext", $context) && ($context["marketplace_product_seo_page_ext"] ?? null))) {
            echo ($context["marketplace_product_seo_page_ext"] ?? null);
        }
        echo "\" />
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <!-- sell tab -->
            <div class=\"tab-pane\" id=\"tab-sell\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1028
        echo ($context["entry_sellinfo"] ?? null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-sellgeneral\" data-toggle=\"tab\">";
        // line 1033
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-selltab\" data-toggle=\"tab\">";
        // line 1034
        echo ($context["tab_tab"] ?? null);
        echo "</a></li>
              </ul>

              <div class=\"tab-content\">

                <div class=\"tab-pane active\" id=\"tab-sellgeneral\">

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 1042
        echo ($context["wkentry_sellh"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      ";
        // line 1044
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1045
            echo "                        <div class=\"input-group\" style=\"margin-bottom:10px;\"><span class=\"input-group-addon mp-addon\"><img  src=\"language/";
            echo (($__internal_compile_31 = $context["language"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["code"] ?? null) : null);
            echo "/";
            echo (($__internal_compile_32 = $context["language"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_compile_33 = $context["language"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["name"] ?? null) : null);
            echo "\" /></span>
                          <input type=\"text\" name=\"marketplace_sellheader[";
            // line 1046
            echo (($__internal_compile_34 = $context["language"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["marketplace_sellheader"] ?? null), (($__internal_compile_35 = $context["language"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["language_id"] ?? null) : null), [], "array", true, true, false, 1046)) ? ((($__internal_compile_36 = ($context["marketplace_sellheader"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[(($__internal_compile_37 = $context["language"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1049
        echo "                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 1053
        echo ($context["wkentry_sellb"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      ";
        // line 1055
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1056
            echo "                        <div class=\"input-group\" style=\"margin-bottom:10px;\"><span class=\"input-group-addon mp-addon\"><img  src=\"language/";
            echo (($__internal_compile_38 = $context["language"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["code"] ?? null) : null);
            echo "/";
            echo (($__internal_compile_39 = $context["language"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_compile_40 = $context["language"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["name"] ?? null) : null);
            echo "\" /></span>
                          <input type=\"text\" name=\"marketplace_sellbuttontitle[";
            // line 1057
            echo (($__internal_compile_41 = $context["language"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["marketplace_sellbuttontitle"] ?? null), (($__internal_compile_42 = $context["language"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["language_id"] ?? null) : null), [], "array", true, true, false, 1057)) ? ((($__internal_compile_43 = ($context["marketplace_sellbuttontitle"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[(($__internal_compile_44 = $context["language"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1060
        echo "                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-showpartners\">";
        // line 1064
        echo ($context["wkentry_show_partner"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <select name=\"marketplace_showpartners\" id=\"input-showpartners\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 1067
        if ((array_key_exists("marketplace_showpartners", $context) && (($context["marketplace_showpartners"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                        <option value=\"1\" ";
        // line 1068
        if ((array_key_exists("marketplace_showpartners", $context) && ($context["marketplace_showpartners"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-showproducts\">";
        // line 1074
        echo ($context["wkentry_show_products"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <select name=\"marketplace_showproducts\" id=\"input-showproducts\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 1077
        if ((array_key_exists("marketplace_showproducts", $context) && (($context["marketplace_showproducts"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                        <option value=\"1\" ";
        // line 1078
        if ((array_key_exists("marketplace_showproducts", $context) && ($context["marketplace_showproducts"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1085
        echo ($context["entry_partner_list_limit_info"] ?? null);
        echo "\">
                        ";
        // line 1086
        echo ($context["entry_partner_list_limit"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"0\" name=\"marketplace_seller_list_limit\" ";
        // line 1090
        if (array_key_exists("marketplace_seller_list_limit", $context)) {
            echo " value=\"";
            echo ($context["marketplace_seller_list_limit"] ?? null);
            echo "\" ";
        }
        echo "  id=\"input-sellerlist\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1095
        echo ($context["entry_partner_product_list_limit_info"] ?? null);
        echo "\">
                        ";
        // line 1096
        echo ($context["entry_partner_product_list_limit"] ?? null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"0\" name=\"marketplace_seller_product_list_limit\" ";
        // line 1100
        if (array_key_exists("marketplace_seller_product_list_limit", $context)) {
            echo " value=\"";
            echo ($context["marketplace_seller_product_list_limit"] ?? null);
            echo "\" ";
        }
        echo "  id=\"input-sellerlist\" class=\"form-control\" />
                    </div>
                  </div>

                </div>

                <div class=\"tab-pane\" id=\"tab-selltab\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <ul class=\"nav nav-pills nav-stacked\" id=\"module\">
                        ";
        // line 1110
        if (twig_get_attribute($this->env, $this->source, ($context["marketplace_tab"] ?? null), "heading", [], "array", true, true, false, 1110)) {
            // line 1111
            echo "                          ";
            // line 1113
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (($__internal_compile_45 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["heading"] ?? null) : null)));
            foreach ($context['_seq'] as $context["tabRow"] => $context["tabtitle"]) {
                // line 1114
                echo "                          <li>
                            <a href=\"#tab-module";
                // line 1115
                echo $context["tabRow"];
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-module";
                echo $context["tabRow"];
                echo "\\']').parent().remove(); \$('#tab-module";
                echo $context["tabRow"];
                echo "').remove(); \$('#module a:first').tab('show');\"></i> ";
                echo ((twig_get_attribute($this->env, $this->source, $context["tabtitle"], ($context["config_language_id"] ?? null), [], "array", true, true, false, 1115)) ? ((($__internal_compile_46 = $context["tabtitle"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[($context["config_language_id"] ?? null)] ?? null) : null)) : (((($context["tab_module"] ?? null) . " ") . $context["tabRow"])));
                echo "</a>
                          </li>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tabRow'], $context['tabtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1118
            echo "                        ";
        }
        // line 1119
        echo "                        <li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["wkentry_add_tab"] ?? null);
        echo "</a></li>
                      </ul>
                    </div>

                    <div class=\"col-sm-9\">
                      <div class=\"tab-content\">
                        ";
        // line 1125
        if (twig_get_attribute($this->env, $this->source, ($context["marketplace_tab"] ?? null), "heading", [], "array", true, true, false, 1125)) {
            // line 1126
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_47 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["heading"] ?? null) : null));
            foreach ($context['_seq'] as $context["tabRow"] => $context["tabtitle"]) {
                // line 1127
                echo "                        <div class=\"tab-pane\" id=\"tab-module";
                echo $context["tabRow"];
                echo "\">
                          <ul class=\"nav nav-tabs\" id=\"language";
                // line 1128
                echo $context["tabRow"];
                echo "\">
                            ";
                // line 1129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1130
                    echo "                            <li><a href=\"#tab-module";
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_48 = $context["language"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["language_id"] ?? null) : null);
                    echo "\" data-toggle=\"tab\"><img  src=\"language/";
                    echo (($__internal_compile_49 = $context["language"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_compile_50 = $context["language"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["code"] ?? null) : null);
                    echo ".png\" title=\"";
                    echo (($__internal_compile_51 = $context["language"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["name"] ?? null) : null);
                    echo "\" /> ";
                    echo (($__internal_compile_52 = $context["language"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["name"] ?? null) : null);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1132
                echo "                          </ul>
                          <div class=\"tab-content\">
                            ";
                // line 1134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1135
                    echo "                            <div class=\"tab-pane\" id=\"tab-module";
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_53 = $context["language"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["language_id"] ?? null) : null);
                    echo "\">
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-heading";
                    // line 1137
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_54 = $context["language"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["text_tab_title"] ?? null);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"marketplace_tab[heading][";
                    // line 1139
                    echo $context["tabRow"];
                    echo "][";
                    echo (($__internal_compile_55 = $context["language"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["language_id"] ?? null) : null);
                    echo "]\" placeholder=\"";
                    echo ($context["text_tab_title"] ?? null);
                    echo "\" value=\"";
                    echo (((($__internal_compile_56 = $context["tabtitle"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[(($__internal_compile_57 = $context["language"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["language_id"] ?? null) : null)] ?? null) : null)) ? ((($__internal_compile_58 = $context["tabtitle"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[(($__internal_compile_59 = $context["language"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                    echo "\" class=\"form-control\" id=\"input-heading";
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_60 = $context["language"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["language_id"] ?? null) : null);
                    echo "\" />
                                </div>
                              </div>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-description";
                    // line 1143
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_61 = $context["language"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["language_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["wkentry_selld"] ?? null);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"marketplace_tab[description][";
                    // line 1145
                    echo $context["tabRow"];
                    echo "][";
                    echo (($__internal_compile_62 = $context["language"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["language_id"] ?? null) : null);
                    echo "]\" placeholder=\"";
                    echo ($context["wkentry_selld"] ?? null);
                    echo "\" id=\"input-description";
                    echo $context["tabRow"];
                    echo "-language";
                    echo (($__internal_compile_63 = $context["language"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["language_id"] ?? null) : null);
                    echo "\" class=\"form-control summernote\">";
                    echo (((($__internal_compile_64 = (($__internal_compile_65 = (($__internal_compile_66 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["description"] ?? null) : null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[$context["tabRow"]] ?? null) : null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_67 = $context["language"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["language_id"] ?? null) : null)] ?? null) : null)) ? ((($__internal_compile_68 = (($__internal_compile_69 = (($__internal_compile_70 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["description"] ?? null) : null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[$context["tabRow"]] ?? null) : null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[(($__internal_compile_71 = $context["language"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                    echo "</textarea>
                                </div>
                              </div>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1150
                echo "                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tabRow'], $context['tabtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1153
            echo "                        ";
        }
        // line 1154
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- profile tab -->
            <div class=\"tab-pane\" id=\"tab-profile\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1164
        echo ($context["text_info_profile"] ?? null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1169
        echo ($context["entry_alowed_profile_columnsinfo"] ?? null);
        echo "\">";
        echo ($context["entry_alowed_profile_columns"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 1172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profile_table"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1173
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 1175
            if (((array_key_exists("marketplace_allowedprofilecolumn", $context) && twig_test_iterable(($context["marketplace_allowedprofilecolumn"] ?? null))) && twig_in_filter($context["value"], ($context["marketplace_allowedprofilecolumn"] ?? null)))) {
                // line 1176
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedprofilecolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 1178
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedprofilecolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 1180
            echo "                          ";
            echo twig_replace_filter($context["value"], ["_" => " "]);
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1184
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 1185
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1189
        echo ($context["entry_allowed_public_profile_columnsinfo"] ?? null);
        echo "\">";
        echo ($context["entry_allowed_public_profile_columns"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 1192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicSellerProfile"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 1193
            echo "                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" name=\"marketplace_allowed_public_seller_profile[";
            // line 1195
            echo $context["key"];
            echo "]\" value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_public_seller_profile", $context) && twig_in_filter($context["key"], ($context["marketplace_allowed_public_seller_profile"] ?? null)))) {
                echo "checked";
            }
            echo " />
                                ";
            // line 1196
            echo $context["option"];
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1200
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 1201
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">
                    ";
        // line 1206
        echo ($context["entry_seller_email"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" name=\"marketplace_profile_email\">
                      <option value=\"0\" ";
        // line 1210
        if ((array_key_exists("marketplace_profile_email", $context) && (($context["marketplace_profile_email"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                      <option value=\"1\" ";
        // line 1211
        if ((array_key_exists("marketplace_profile_email", $context) && ($context["marketplace_profile_email"] ?? null))) {
            echo "selected";
        }
        echo "  >";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    </select>
                  </div>
              </div>
              <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">
                    ";
        // line 1217
        echo ($context["entry_seller_telephone"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" name=\"marketplace_profile_telephone\">
                      <option value=\"0\" ";
        // line 1221
        if ((array_key_exists("marketplace_profile_telephone", $context) && (($context["marketplace_profile_telephone"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                      <option value=\"1\" ";
        // line 1222
        if ((array_key_exists("marketplace_profile_telephone", $context) && ($context["marketplace_profile_telephone"] ?? null))) {
            echo "selected";
        }
        echo " >";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    </select>
                  </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-review-only-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1227
        echo ($context["entry_review_only_order_info"] ?? null);
        echo "\">";
        echo ($context["entry_review_only_order"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_review_only_order\" id=\"input-review-only-order\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 1230
        if ((array_key_exists("marketplace_review_only_order", $context) && (($context["marketplace_review_only_order"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 1231
        if ((array_key_exists("marketplace_review_only_order", $context) && ($context["marketplace_review_only_order"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-seller-info-hide\"><span data-toggle=\"tooltip\" title=\"";
        // line 1236
        echo ($context["entry_seller_info_hide_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_info_hide"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_info_hide\" id=\"input-seller-info-hide\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 1239
        if ((array_key_exists("marketplace_seller_info_hide", $context) && (($context["marketplace_seller_info_hide"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                    <option value=\"1\" ";
        // line 1240
        if ((array_key_exists("marketplace_seller_info_hide", $context) && ($context["marketplace_seller_info_hide"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                  </select>
                </div>
              </div>

            </div>

            <!-- module configuration tab -->

            <div class=\"tab-pane\" id=\"tab-mod-config\">
              <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                  <a href=\"#mod-account\" data-toggle=\"tab\">
                    ";
        // line 1253
        echo ($context["tab_mod_config_account"] ?? null);
        echo "
                  </a>
                </li>
                <li>
                  <a href=\"#mod-product\" data-toggle=\"tab\">
                    ";
        // line 1258
        echo ($context["tab_mod_config_product"] ?? null);
        echo "
                  </a>
                </li>
              </ul>
                <div class=\"tab-content\">
                  <div id=\"mod-account\" class=\"tab-pane active\">
                    <div class=\"form-group hidden\">
                      <label class=\"col-sm-3 control-label\" for=\"input-seller-redirect-seperate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1265
        echo ($context["entry_seller_redirect_seperate_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_redirect_seperate"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_seller_redirect_seperate\" id=\"input-seller-redirect-seperate\" class=\"form-control\">                          
                          <option value=\"1\" ";
        // line 1268
        if ((array_key_exists("marketplace_seller_redirect_seperate", $context) && ($context["marketplace_seller_redirect_seperate"] ?? null))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\">
                        <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1274
        echo ($context["entry_allowed_account_menuinfo"] ?? null);
        echo "\">
                          ";
        // line 1275
        echo ($context["entry_allowed_account_menu"] ?? null);
        echo "
                        </span>
                      </label>
                      <div class=\"col-sm-9\">
                        <div class=\"well well-sm\" style=\"height:150px;overflow:auto\" >
                          ";
        // line 1280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["account_menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 1281
            echo "                            <div class=\"checkbox\">
                              <label>
                                <input type=\"checkbox\" name=\"marketplace_allowed_account_menu[";
            // line 1283
            echo $context["key"];
            echo "]\" value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_account_menu", $context) && twig_in_filter($context["key"], ($context["marketplace_allowed_account_menu"] ?? null)))) {
                echo "checked";
            }
            echo " />
                                ";
            // line 1284
            echo $context["value"];
            echo "
                              </label>
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1288
        echo "                        </div>
                        <a class=\"selectAll\">";
        // line 1289
        echo ($context["entry_selectall"] ?? null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo ($context["entry_deselectall"] ?? null);
        echo "</a>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\">
                        <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1294
        echo ($context["entry_account_menu_sequenceinfo"] ?? null);
        echo "\">
                          ";
        // line 1295
        echo ($context["entry_account_menu_sequence"] ?? null);
        echo "
                        </span>
                      </label>
                      <div class=\"col-sm-9\">
                        <div class=\"well\">
                          <ul class=\"nav nav-pills nav-stacked\" id=\"acct_menu_sortable\">
                            ";
        // line 1301
        if ( !array_key_exists("marketplace_account_menu_sequence", $context)) {
            // line 1302
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_menu"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 1303
                echo "                                <li>
                                  <a style=\"cursor:grab\">
                                    <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                    <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                // line 1306
                echo $context["key"];
                echo "]\" value=\"";
                echo $context["key"];
                echo "\" />
                                    ";
                // line 1307
                echo $context["value"];
                echo "
                                  </a>
                                </li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1311
            echo "                            ";
        } else {
            // line 1312
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketplace_account_menu_sequence"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["sequence"]) {
                // line 1313
                echo "                                ";
                if (twig_in_filter($context["sequence"], ($context["account_menu"] ?? null))) {
                    // line 1314
                    echo "                                  <li>
                                    <a style=\"cursor:grab\">
                                      <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                      <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                    // line 1317
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo (($__internal_compile_72 = ($context["account_menu"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[$context["key"]] ?? null) : null);
                    echo "\"/>
                                      ";
                    // line 1318
                    echo (($__internal_compile_73 = ($context["account_menu"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73[$context["key"]] ?? null) : null);
                    echo "
                                    </a>
                                  </li>
                                ";
                }
                // line 1322
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1323
            echo "
                              ";
            // line 1324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_menu"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 1325
                echo "                                ";
                if (!twig_in_filter($context["menu"], ($context["marketplace_account_menu_sequence"] ?? null))) {
                    // line 1326
                    echo "                                  <li>
                                    <a style=\"cursor:grab\">
                                      <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                      <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                    // line 1329
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo (($__internal_compile_74 = ($context["account_menu"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74[$context["key"]] ?? null) : null);
                    echo "\"/>
                                      ";
                    // line 1330
                    echo (($__internal_compile_75 = ($context["account_menu"] ?? null)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[$context["key"]] ?? null) : null);
                    echo "
                                    </a>
                                  </li>
                                ";
                }
                // line 1334
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1335
            echo "
                            ";
        }
        // line 1337
        echo "                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id=\"mod-product\" class=\"tab-pane\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" ><span data-toggle=\"tooltip\" title=\"";
        // line 1344
        echo ($context["entry_product_name_displayinfo"] ?? null);
        echo "\">";
        echo ($context["entry_product_name_display"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_product_name_display\" class=\"form-control\">
                          <option value=\"sn\" ";
        // line 1347
        if ((array_key_exists("marketplace_product_name_display", $context) && (($context["marketplace_product_name_display"] ?? null) == "sn"))) {
            echo "selected";
        }
        echo " >";
        echo "Seller Name";
        echo "</option>
                          <option value=\"cn\" ";
        // line 1348
        if ((array_key_exists("marketplace_product_name_display", $context) && (($context["marketplace_product_name_display"] ?? null) == "cn"))) {
            echo "selected";
        }
        echo ">";
        echo "Shop name";
        echo "</option>
                          <option value=\"sncn\" ";
        // line 1349
        if ((array_key_exists("marketplace_product_name_display", $context) && (($context["marketplace_product_name_display"] ?? null) == "sncn"))) {
            echo "selected";
        }
        echo ">";
        echo "Seller and Shop name";
        echo "</option>
                        </select>
                      </div>
                    </div>
                    ";
        // line 1362
        echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1363
        echo ($context["entry_product_image_displayinfo"] ?? null);
        echo "\">";
        echo ($context["entry_product_image_display"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_product_image_display\" id=\"input-mail_partner_request\" class=\"form-control\">
                          <option value=\"avatar\" ";
        // line 1366
        if ((array_key_exists("marketplace_product_image_display", $context) && (($context["marketplace_product_image_display"] ?? null) == "avatar"))) {
            echo "selected";
        }
        echo "  >";
        echo "Avatar";
        echo " </option>
                          <option value=\"companylogo\" ";
        // line 1367
        if ((array_key_exists("marketplace_product_image_display", $context) && (($context["marketplace_product_image_display"] ?? null) == "companylogo"))) {
            echo "selected";
        }
        echo "  >";
        echo "Company Logo";
        echo " </option>
                          <option value=\"companybanner\" ";
        // line 1368
        if ((array_key_exists("marketplace_product_image_display", $context) && (($context["marketplace_product_image_display"] ?? null) == "companybanner"))) {
            echo "selected";
        }
        echo " >";
        echo "Company banner";
        echo " </option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-seller-info-by-module\"><span data-toggle=\"tooltip\" title=\"";
        // line 1373
        echo ($context["entry_seller_info_by_module_info"] ?? null);
        echo "\">";
        echo ($context["entry_seller_info_by_module"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_seller_info_by_module\" id=\"input-seller-info-by-module\" class=\"form-control\">
                          <option value=\"0\" ";
        // line 1376
        if ((array_key_exists("marketplace_seller_info_by_module", $context) && (($context["marketplace_seller_info_by_module"] ?? null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
                          <option value=\"1\" ";
        // line 1377
        if ((array_key_exists("marketplace_seller_info_by_module", $context) && ($context["marketplace_seller_info_by_module"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- mail tab -->
            <div class=\"tab-pane\" id=\"tab-mail\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1388
        echo ($context["text_info_mail"] ?? null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1394
        echo ($context["entry_mail_keywords"] ?? null);
        echo "\" >
                    ";
        // line 1395
        echo ($context["entry_mail_keywords"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea class=\"form-control\" name=\"marketplace_mail_keywords\" style=\"height:150px\">";
        // line 1399
        if (array_key_exists("marketplace_mail_keywords", $context)) {
            echo ($context["marketplace_mail_keywords"] ?? null);
        } else {
            echo "{order}";
            echo "
";
            // line 1400
            echo "{message}";
            echo "
";
            // line 1401
            echo "{subject}";
            echo "
";
            // line 1402
            echo "{commission}";
            echo "
";
            // line 1403
            echo "{product_name}";
            echo "
";
            // line 1404
            echo "{product_quantity}";
            echo "
";
            // line 1405
            echo "{customer_name}";
            echo "
";
            // line 1406
            echo "{seller_name}";
            echo "
";
            // line 1407
            echo "{config_logo}";
            echo "
";
            // line 1408
            echo "{config_icon}";
            echo "
";
            // line 1409
            echo "{config_currency}";
            echo "
";
            // line 1410
            echo "{config_image}";
            echo "
";
            // line 1411
            echo "{config_name}";
            echo "
";
            // line 1412
            echo "{config_owner}";
            echo "
";
            // line 1413
            echo "{config_address}";
            echo "
";
            // line 1414
            echo "{config_geocode}";
            echo "
";
            // line 1415
            echo "{config_email}";
            echo "
";
            // line 1416
            echo "{config_telephone}";
            echo "
";
            // line 1417
            echo "{seller_id}";
            echo "
";
        }
        // line 1418
        echo "</textarea>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_request\"><span data-toggle=\"tooltip\" title=\"";
        // line 1423
        echo ($context["entry_mail_partner_request_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_partner_request"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_request\" id=\"input-mail_partner_request\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1427
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1428
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1429
                echo "                      <option value=\"";
                echo (($__internal_compile_76 = $context["mail"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_partner_request"] ?? null) == (($__internal_compile_77 = $context["mail"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_78 = $context["mail"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1431
            echo "                    ";
        }
        // line 1432
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1437
        echo ($context["entry_mail_partner_admin_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_partner_admin"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_admin\" id=\"input-mail_partner_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1441
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1442
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1443
                echo "                      <option value=\"";
                echo (($__internal_compile_79 = $context["mail"]) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_partner_admin"] ?? null) == (($__internal_compile_80 = $context["mail"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_81 = $context["mail"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1445
            echo "                    ";
        }
        // line 1446
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_approve\"><span data-toggle=\"tooltip\" title=\"";
        // line 1451
        echo ($context["entry_mail_partner_approve_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_partner_approve"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_approve\" id=\"input-mail_partner_approve\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1455
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1456
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1457
                echo "                      <option value=\"";
                echo (($__internal_compile_82 = $context["mail"]) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_partner_approve"] ?? null) == (($__internal_compile_83 = $context["mail"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_84 = $context["mail"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1459
            echo "                    ";
        }
        // line 1460
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_request\"><span data-toggle=\"tooltip\" title=\"";
        // line 1465
        echo ($context["entry_mail_product_request_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_product_request"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_request\" id=\"input-mail_product_request\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1469
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1470
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1471
                echo "                      <option value=\"";
                echo (($__internal_compile_85 = $context["mail"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_product_request"] ?? null) == (($__internal_compile_86 = $context["mail"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_87 = $context["mail"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1473
            echo "                    ";
        }
        // line 1474
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1479
        echo ($context["entry_mail_product_admin_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_product_admin"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_admin\" id=\"input-mail_product_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1483
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1484
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1485
                echo "                      <option value=\"";
                echo (($__internal_compile_88 = $context["mail"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_product_admin"] ?? null) == (($__internal_compile_89 = $context["mail"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_90 = $context["mail"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1487
            echo "                    ";
        }
        // line 1488
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_approve\"><span data-toggle=\"tooltip\" title=\"";
        // line 1493
        echo ($context["entry_mail_product_approve_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_product_approve"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_approve\" id=\"input-mail_product_approve\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1497
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1498
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1499
                echo "                      <option value=\"";
                echo (($__internal_compile_91 = $context["mail"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_product_approve"] ?? null) == (($__internal_compile_92 = $context["mail"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_93 = $context["mail"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1501
            echo "                    ";
        }
        // line 1502
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_transaction\"><span data-toggle=\"tooltip\" title=\"";
        // line 1507
        echo ($context["entry_mail_transaction_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_transaction"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_transaction\" id=\"input-mail_transaction\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1511
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1512
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1513
                echo "                      <option value=\"";
                echo (($__internal_compile_94 = $context["mail"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_transaction"] ?? null) == (($__internal_compile_95 = $context["mail"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_96 = $context["mail"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1515
            echo "                    ";
        }
        // line 1516
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1521
        echo ($context["entry_mail_order_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_order"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_order\" id=\"input-mail_order\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1525
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1526
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1527
                echo "                      <option value=\"";
                echo (($__internal_compile_97 = $context["mail"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_order"] ?? null) == (($__internal_compile_98 = $context["mail"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_99 = $context["mail"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1529
            echo "                    ";
        }
        // line 1530
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-marketplace_mail_order_status_change\"><span data-toggle=\"tooltip\" title=\"";
        // line 1534
        echo ($context["entry_order_status_change_mail_info"] ?? null);
        echo "\">";
        echo ($context["entry_order_status_change_mail"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-9\">
                <select name=\"marketplace_mail_order_status_change\" id=\"input-marketplace_mail_order_status_change\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 1538
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1539
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1540
                echo "                    <option value=\"";
                echo (($__internal_compile_100 = $context["mail"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_order_status_change"] ?? null) == (($__internal_compile_101 = $context["mail"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_102 = $context["mail"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["name"] ?? null) : null);
                echo " </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1542
            echo "                  ";
        }
        // line 1543
        echo "                </select>
              </div>
            </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_cutomer_to_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 1548
        echo ($context["entry_mail_cutomer_to_seller_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_cutomer_to_seller"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_cutomer_to_seller\" id=\"input-mail_cutomer_to_seller\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1552
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1553
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1554
                echo "                      <option value=\"";
                echo (($__internal_compile_103 = $context["mail"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_cutomer_to_seller"] ?? null) == (($__internal_compile_104 = $context["mail"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_105 = $context["mail"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1556
            echo "                    ";
        }
        // line 1557
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_to_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1562
        echo ($context["entry_mail_seller_to_admin_info"] ?? null);
        echo "\">";
        echo ($context["entry_mail_seller_to_admin"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_to_admin\" id=\"input-mail_seller_to_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1566
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1567
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1568
                echo "                      <option value=\"";
                echo (($__internal_compile_106 = $context["mail"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_seller_to_admin"] ?? null) == (($__internal_compile_107 = $context["mail"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_108 = $context["mail"]) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1570
            echo "                    ";
        }
        // line 1571
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_admin_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1577
        echo ($context["entry_mail_edit_product_admininfo"] ?? null);
        echo "\">
                    ";
        // line 1578
        echo ($context["entry_mail_edit_product_admin"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_admin_on_edit\" id=\"input-mail_admin_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1584
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1585
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1586
                echo "                      <option value=\"";
                echo (($__internal_compile_109 = $context["mail"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_admin_on_edit"] ?? null) == (($__internal_compile_110 = $context["mail"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_111 = $context["mail"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1588
            echo "                    ";
        }
        // line 1589
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1595
        echo ($context["entry_mail_edit_product_sellerinfo"] ?? null);
        echo "\">
                    ";
        // line 1596
        echo ($context["entry_mail_edit_product_seller"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_on_edit\" id=\"input-mail_seller_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1602
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1603
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1604
                echo "                      <option value=\"";
                echo (($__internal_compile_112 = $context["mail"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_seller_on_edit"] ?? null) == (($__internal_compile_113 = $context["mail"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_114 = $context["mail"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1606
            echo "                    ";
        }
        // line 1607
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1613
        echo ($context["entry_mail_low_stock_sellerinfo"] ?? null);
        echo "\">
                    ";
        // line 1614
        echo ($context["entry_mail_low_stock_seller"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_low_stock\" id=\"input-mail_seller_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1620
        if ((array_key_exists("mails", $context) && ($context["mails"] ?? null))) {
            // line 1621
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1622
                echo "                      <option value=\"";
                echo (($__internal_compile_115 = $context["mail"]) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["id"] ?? null) : null);
                echo "\" ";
                if ((($context["marketplace_mail_seller_low_stock"] ?? null) == (($__internal_compile_116 = $context["mail"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["id"] ?? null) : null))) {
                    echo "selected";
                }
                echo ">  ";
                echo (($__internal_compile_117 = $context["mail"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1624
            echo "                    ";
        }
        // line 1625
        echo "                  </select>
                </div>
              </div>
            </div>

            <!-- paypal tab -->
            <div class=\"tab-pane\" id=\"tab-paypal\">

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-demo\">";
        // line 1634
        echo ($context["entry_mode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"marketplace_paypal_mode\" id=\"input-live-demo\" class=\"form-control\">
                    ";
        // line 1637
        if ((array_key_exists("marketplace_paypal_mode", $context) && ($context["marketplace_paypal_mode"] ?? null))) {
            // line 1638
            echo "                    <option value=\"1\"  selected=\"selected\">";
            echo ($context["wkentry_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" >";
            // line 1639
            echo ($context["wkentry_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 1641
            echo "                    <option value=\"1\">";
            echo ($context["wkentry_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 1642
            echo ($context["wkentry_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 1644
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-username\">";
        // line 1649
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_user\" ";
        // line 1651
        if (array_key_exists("marketplace_paypal_user", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_user"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"entry-username\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 1656
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_password\" ";
        // line 1658
        if (array_key_exists("marketplace_paypal_password", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_password"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"entry-password\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-client_id\">";
        // line 1663
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_client_id\" ";
        // line 1665
        if (array_key_exists("marketplace_paypal_client_id", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_client_id"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_client_id"] ?? null);
        echo "\" id=\"entry-client_id\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-client_secret\">";
        // line 1670
        echo ($context["entry_client_secret"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_client_secret_id\" ";
        // line 1672
        if (array_key_exists("marketplace_paypal_client_secret_id", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_client_secret_id"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_client_secret"] ?? null);
        echo "\" id=\"entry-client_secret\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-appid\">";
        // line 1677
        echo ($context["entry_appid"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_appid\" ";
        // line 1679
        if (array_key_exists("marketplace_paypal_appid", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_appid"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_appid"] ?? null);
        echo "\" id=\"entry-appid\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-email-subject\">";
        // line 1684
        echo ($context["entry_email_subject"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_email_subject\" ";
        // line 1686
        if (array_key_exists("marketplace_paypal_email_subject", $context)) {
            echo " value=\"";
            echo ($context["marketplace_paypal_email_subject"] ?? null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo ($context["entry_email_subject"] ?? null);
        echo "\" id=\"entry-email-subject\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <!-- paypal tab end-->
<!-- Google Analytics tab -->
<div class=\"tab-pane\" id=\"tab-analytics\">
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\" for=\"input-seller-manage-analytic\"><span data-toggle=\"tooltip\" title=\"";
        // line 1694
        echo ($context["help_seller_analytic"] ?? null);
        echo "\">";
        echo ($context["entry_seller_analytic"] ?? null);
        echo "</span></label>
    <div class=\"col-sm-9\">
      <select name=\"marketplace_google_analytic_seller_status\" id=\"input-seller-manage-analytic\" class=\"form-control\">
        <option value=\"0\" ";
        // line 1697
        if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && (($context["marketplace_google_analytic_seller_status"] ?? null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo ($context["text_disabled"] ?? null);
        echo " </option>
        <option value=\"1\" ";
        // line 1698
        if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && ($context["marketplace_google_analytic_seller_status"] ?? null))) {
            echo "selected";
        }
        echo " >  ";
        echo ($context["text_enabled"] ?? null);
        echo " </option>
      </select>
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"input-analytic-id\" class=\"col-sm-3 control-label\">";
        // line 1703
        echo ($context["entry_analytic_id"] ?? null);
        echo "</label>
    <div class=\"col-sm-9\">
      <input type=\"text\" class=\"form-control\" name=\"marketplace_google_analytic_id\" placeholder=\"";
        // line 1705
        echo ($context["entry_analytic_id"] ?? null);
        echo "\" value=\"";
        echo ($context["marketplace_google_analytic_id"] ?? null);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"input-alloed-analytic-page\" class=\"col-sm-3 control-label\">
      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1710
        echo ($context["help_analytic_pages"] ?? null);
        echo "\">
        ";
        // line 1711
        echo ($context["entry_analytic_pages"] ?? null);
        echo "
      </span>
    </label>
    <div class=\"col-sm-9\">
      <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
        ";
        // line 1716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytic_allowed_page"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 1717
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"marketplace_google_analytic_allowed_page[";
            // line 1719
            echo $context["key"];
            echo "]\" value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_google_analytic_allowed_page", $context) && twig_in_filter($context["key"], ($context["marketplace_google_analytic_allowed_page"] ?? null)))) {
                echo "checked";
            }
            echo " />
              ";
            // line 1720
            echo $context["value"];
            echo "
            </label>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1724
        echo "      </div>
    </div>
  </div>
</div>
<!-- Google Analytics tab end-->
          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\"><!--

\$('.available_order_status > label > input[type=\"checkbox\"]').on('click', function(){
  order_status_id = \$(this).val();
  order_status_name = \$.trim(\$(this).parent('label').text());
  if(\$(this).is(':checked')) {
    html = '';
    html += '<li id=\"order_status_sequence_'+order_status_id+'\"><a style=\"cursor:grab\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span><input type=\"hidden\" name=\"marketplace_order_status_sequence['+order_status_id+'][order_status_id]\" value=\"'+order_status_id+'\"/><input type=\"hidden\" name=\"marketplace_order_status_sequence['+order_status_id+'][name]\" value=\"'+order_status_name+'\"/>'+order_status_name+'</a></li>';

    \$('#orderstatus').append(html);
  } else {
    \$('#order_status_sequence_'+order_status_id).remove();
  }
});

\$('#default-image').on('click',function(){
  \$(this).prevAll('input[type=\"file\"]').trigger('click');
});

\$('#removeimg').on('click',function(){
  confirmation = confirm(\"Are you sure?\");
  if(confirmation) {
    \$('#default-image-view').remove();
    \$('input[name=\"marketplace_default_image_name\"]').val('');
  }
});

\$(function(){
  \$(\"input[name='marketplace_default_image']\").on(\"change\", function()
   {
    \$.this = this;
       var files = !!this.files ? this.files : [];
       if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

       if (/^image/.test( files[0].type)){ // only image file
           var reader = new FileReader(); // instance of the FileReader
           reader.readAsDataURL(files[0]); // read the local file

           reader.onloadend = function(){ // set image to display only
              \$(\$.this).nextAll('#default-image').html();
              \$(\$.this).nextAll('#default-image').html('<img src=\"\" id=\"default-image-view\" height=\"90px\" width=\"90px\" />');
               src = this.result;
               \$(\$.this).nextAll('div').children('img').attr('src',src);
           }
       }
   });
})

\$('input[name=\"marketplace_divide_shipping\"]').on('change',function(){
  \$('.alert').remove();
  if(\$(this).is(':checked')){
    \$('.panel').before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 1787
        echo ($context["text_divide_shipping"] ?? null);
        echo "<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button></div>');
    \$('html, body').animate({scrollTop:0},'slow');
  }
})

//To print tab name from current used language's text box
\$(\"body\").on(\"keyup\",\".row .tab-content input[type='text']\",function(){
  tabId = \$(this).attr('id').split('-')[1].replace('heading','');
  html = '<i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module'+tabId+'\\\\\\']\\').parent().remove(); \$(\\'#tab-module'+tabId+'\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ';
  html += \$(this).val();
  \$('a[href=#tab-module'+tabId+']').html(html);
});

\$('#module li:first-child a').tab('show');
  ";
        // line 1801
        if (twig_get_attribute($this->env, $this->source, ($context["marketplace_tab"] ?? null), "heading", [], "array", true, true, false, 1801)) {
            // line 1802
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_118 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["heading"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["module"]) {
                // line 1803
                echo "      \$('#language";
                echo $context["key"];
                echo " li:first-child a').tab('show');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1805
            echo "  ";
        }
        // line 1806
        echo "
var module_row = ";
        // line 1807
        echo ((twig_get_attribute($this->env, $this->source, ($context["marketplace_tab"] ?? null), "heading", [], "array", true, true, false, 1807)) ? ((max(twig_get_array_keys_filter((($__internal_compile_119 = ($context["marketplace_tab"] ?? null)) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["heading"] ?? null) : null))) + 1)) : (0));
        echo ";

function addModule() {
  var token = Math.random().toString(36).substr(2);

  html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">';
  html += '  <ul class=\"nav nav-tabs\" id=\"language' + token + '\">';
    ";
        // line 1814
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1815
            echo "    html += '    <li><a href=\"#tab-module' + token + '-language";
            echo (($__internal_compile_120 = $context["language"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><img  src=\"language/";
            echo (($__internal_compile_121 = $context["language"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["code"] ?? null) : null);
            echo "/";
            echo (($__internal_compile_122 = $context["language"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_compile_123 = $context["language"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_compile_124 = $context["language"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["name"] ?? null) : null);
            echo "</a></li>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1817
        echo "  html += '  </ul>';

  html += '  <div class=\"tab-content\">';

  ";
        // line 1821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1822
            echo "  html += '    <div class=\"tab-pane\" id=\"tab-module' + token + '-language";
            echo (($__internal_compile_125 = $context["language"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["language_id"] ?? null) : null);
            echo "\">';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-3 control-label\" for=\"input-heading' + token + '-language";
            // line 1824
            echo (($__internal_compile_126 = $context["language"]) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["text_tab_title"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\"><input type=\"text\" name=\"marketplace_tab[heading]['+module_row+'][";
            // line 1825
            echo (($__internal_compile_127 = $context["language"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["text_tab_title"] ?? null);
            echo "\" id=\"input-heading' + token + '-language";
            echo (($__internal_compile_128 = $context["language"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["language_id"] ?? null) : null);
            echo "\" value=\"\" class=\"form-control\"/></div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-3 control-label\" for=\"input-description' + token + '-language";
            // line 1828
            echo (($__internal_compile_129 = $context["language"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["wkentry_selld"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\"><textarea name=\"marketplace_tab[description]['+module_row+'][";
            // line 1829
            echo (($__internal_compile_130 = $context["language"]) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["wkentry_selld"] ?? null);
            echo "\" id=\"input-description' + token + '-language";
            echo (($__internal_compile_131 = $context["language"]) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131["language_id"] ?? null) : null);
            echo "\"  class=\"form-control summernote\"></textarea></div>';
  html += '      </div>';
  html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1833
        echo "
  html += '  </div>';
  html += '</div>';

  \$('.tab-content:first-child').prepend(html);

  \$('button[data-event=\\'showImageDialog\\']').attr('data-toggle', 'image').removeAttr('data-event');

  \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 1841
        echo ($context["tab_module"] ?? null);
        echo " ' + module_row + '</a></li>');

  \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show');

  \$('#language' + token + ' li:first-child a').tab('show');

  dyanmicSummernote();

  module_row++;
}
//--></script>

<script type=\"text/javascript\"><!--
seoCount = '";
        // line 1854
        echo ($context["seoCount"] ?? null);
        echo "';
\$('#addSeo').on('click',function(){
  html = '<tr id=\"tr-'+seoCount+'\">';
  html +=   '<td class=\"text-left\">';
  html +=     '<select name=\"marketplace_SefUrlspath['+seoCount+']\" class=\"form-control\">';
  html +=          '";
        // line 1859
        if ((array_key_exists("paths", $context) && ($context["paths"] ?? null))) {
            echo "';
  html +=            '";
            // line 1860
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                echo "';
  html +=               '<option value=\"";
                // line 1861
                echo $context["path"];
                echo "\">  ";
                echo $context["path"];
                echo " </option>';
  html +=             '";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1862
            echo "';
  html +=           '";
        }
        // line 1863
        echo "';
  html +=      '</select>';
  html +=   '</td><td class=\"text-left\">';
  html +=      ' <input type=\"text\" name=\"marketplace_SefUrlsvalue['+seoCount+']\" class=\"form-control\" value=\"\"/>';
  html +=   '</td><td class=\"text-left\">';
  html +=      '<button type=\"button\" onclick=\"\$(\\'#tr-'+seoCount+'\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1868
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
  html +=   '</td>';
  html += '</tr>';

  \$('#route tbody').append(html);
  seoCount++;
});

\$('.selectAll').on('click',function(){
  \$(this).prev('div').find('input[type=\"checkbox\"]').prop('checked',true);
})

\$('.deselectAll').on('click',function(){
  \$(this).prevAll('div').find('input[type=\"checkbox\"]').prop('checked',false);
})
</script>
<script src=\"view/javascript/jquery-ui/jquery-sortable-min.js\"></script>
<script type=\"text/javascript\"><!--
\$(function() {
  \$( \"#sortable\" ).sortable();
  \$( \"#sortable\" ).disableSelection();
  \$( \"#orderstatus\" ).sortable();
  \$( \"#orderstatus\" ).disableSelection();
  \$( \"#acct_menu_sortable\" ).sortable();
  \$( \"#acct_menu_sortable\" ).disableSelection();
});
//--></script>
<script>
  // Allowed Seller Category
  var allowed_categories = [];
  \$('input[name = \\'category\\']').on('click', function(){

    allowed_categories = [];
    \$('.allowed_categories').each(function(){

      allowed_categories.push(\$(this).val());

    });
  });
  \$('input[name=\\'category\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/marketplace/autocomplete&user_token=";
        // line 1910
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        type: 'post',
        dataType: 'json',
        data: {allowed_categories},
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['category_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'category\\']').val('');

      \$('#allowed-category' + item['value']).remove();

      \$('#allowed-category').append('<div id=\"allowed-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"marketplace_allowed_categories[' +item['value'] +']\" value=\"' + item['label'] + '\" /><input class=\"allowed_categories\" type=\"hidden\" value=\"' + item['value'] + '\" /></div>');
    }
  });
  \$('#allowed-category').delegate('.fa-minus-circle', 'click', function() {
    \$(this).parent().remove();
  });
</script>

<script type=\"text/javascript\">
  \$('#input-marketplace_store').on('change',function(){
    location = \"index.php?route=extension/module/marketplace&user_token=";
        // line 1939
        echo ($context["user_token"] ?? null);
        echo "&store_id=\"+\$(this).val();
  });
</script>

";
        // line 1943
        echo ($context["footer"] ?? null);
        echo "
<script src=\"view/javascript/summernote/webkul_summernote.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/marketplace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4774 => 1943,  4767 => 1939,  4735 => 1910,  4690 => 1868,  4683 => 1863,  4679 => 1862,  4669 => 1861,  4663 => 1860,  4659 => 1859,  4651 => 1854,  4635 => 1841,  4625 => 1833,  4611 => 1829,  4605 => 1828,  4595 => 1825,  4589 => 1824,  4583 => 1822,  4579 => 1821,  4573 => 1817,  4556 => 1815,  4552 => 1814,  4542 => 1807,  4539 => 1806,  4536 => 1805,  4527 => 1803,  4522 => 1802,  4520 => 1801,  4503 => 1787,  4438 => 1724,  4428 => 1720,  4418 => 1719,  4414 => 1717,  4410 => 1716,  4402 => 1711,  4398 => 1710,  4388 => 1705,  4383 => 1703,  4371 => 1698,  4363 => 1697,  4355 => 1694,  4338 => 1686,  4333 => 1684,  4319 => 1679,  4314 => 1677,  4300 => 1672,  4295 => 1670,  4281 => 1665,  4276 => 1663,  4262 => 1658,  4257 => 1656,  4243 => 1651,  4238 => 1649,  4231 => 1644,  4226 => 1642,  4221 => 1641,  4216 => 1639,  4211 => 1638,  4209 => 1637,  4203 => 1634,  4192 => 1625,  4189 => 1624,  4174 => 1622,  4169 => 1621,  4167 => 1620,  4158 => 1614,  4154 => 1613,  4146 => 1607,  4143 => 1606,  4128 => 1604,  4123 => 1603,  4121 => 1602,  4112 => 1596,  4108 => 1595,  4100 => 1589,  4097 => 1588,  4082 => 1586,  4077 => 1585,  4075 => 1584,  4066 => 1578,  4062 => 1577,  4054 => 1571,  4051 => 1570,  4036 => 1568,  4031 => 1567,  4029 => 1566,  4020 => 1562,  4013 => 1557,  4010 => 1556,  3995 => 1554,  3990 => 1553,  3988 => 1552,  3979 => 1548,  3972 => 1543,  3969 => 1542,  3954 => 1540,  3949 => 1539,  3947 => 1538,  3938 => 1534,  3932 => 1530,  3929 => 1529,  3914 => 1527,  3909 => 1526,  3907 => 1525,  3898 => 1521,  3891 => 1516,  3888 => 1515,  3873 => 1513,  3868 => 1512,  3866 => 1511,  3857 => 1507,  3850 => 1502,  3847 => 1501,  3832 => 1499,  3827 => 1498,  3825 => 1497,  3816 => 1493,  3809 => 1488,  3806 => 1487,  3791 => 1485,  3786 => 1484,  3784 => 1483,  3775 => 1479,  3768 => 1474,  3765 => 1473,  3750 => 1471,  3745 => 1470,  3743 => 1469,  3734 => 1465,  3727 => 1460,  3724 => 1459,  3709 => 1457,  3704 => 1456,  3702 => 1455,  3693 => 1451,  3686 => 1446,  3683 => 1445,  3668 => 1443,  3663 => 1442,  3661 => 1441,  3652 => 1437,  3645 => 1432,  3642 => 1431,  3627 => 1429,  3622 => 1428,  3620 => 1427,  3611 => 1423,  3604 => 1418,  3599 => 1417,  3595 => 1416,  3591 => 1415,  3587 => 1414,  3583 => 1413,  3579 => 1412,  3575 => 1411,  3571 => 1410,  3567 => 1409,  3563 => 1408,  3559 => 1407,  3555 => 1406,  3551 => 1405,  3547 => 1404,  3543 => 1403,  3539 => 1402,  3535 => 1401,  3531 => 1400,  3524 => 1399,  3517 => 1395,  3513 => 1394,  3504 => 1388,  3486 => 1377,  3478 => 1376,  3470 => 1373,  3458 => 1368,  3450 => 1367,  3442 => 1366,  3434 => 1363,  3431 => 1362,  3420 => 1349,  3412 => 1348,  3404 => 1347,  3396 => 1344,  3387 => 1337,  3383 => 1335,  3377 => 1334,  3370 => 1330,  3364 => 1329,  3359 => 1326,  3356 => 1325,  3352 => 1324,  3349 => 1323,  3343 => 1322,  3336 => 1318,  3330 => 1317,  3325 => 1314,  3322 => 1313,  3317 => 1312,  3314 => 1311,  3304 => 1307,  3298 => 1306,  3293 => 1303,  3288 => 1302,  3286 => 1301,  3277 => 1295,  3273 => 1294,  3263 => 1289,  3260 => 1288,  3250 => 1284,  3240 => 1283,  3236 => 1281,  3232 => 1280,  3224 => 1275,  3220 => 1274,  3207 => 1268,  3199 => 1265,  3189 => 1258,  3181 => 1253,  3161 => 1240,  3153 => 1239,  3145 => 1236,  3133 => 1231,  3125 => 1230,  3117 => 1227,  3105 => 1222,  3097 => 1221,  3090 => 1217,  3077 => 1211,  3069 => 1210,  3062 => 1206,  3052 => 1201,  3049 => 1200,  3039 => 1196,  3029 => 1195,  3025 => 1193,  3021 => 1192,  3013 => 1189,  3004 => 1185,  3001 => 1184,  2990 => 1180,  2982 => 1178,  2974 => 1176,  2972 => 1175,  2968 => 1173,  2964 => 1172,  2956 => 1169,  2948 => 1164,  2936 => 1154,  2933 => 1153,  2925 => 1150,  2904 => 1145,  2895 => 1143,  2878 => 1139,  2869 => 1137,  2861 => 1135,  2857 => 1134,  2853 => 1132,  2834 => 1130,  2830 => 1129,  2826 => 1128,  2821 => 1127,  2816 => 1126,  2814 => 1125,  2804 => 1119,  2801 => 1118,  2786 => 1115,  2783 => 1114,  2778 => 1113,  2776 => 1111,  2774 => 1110,  2757 => 1100,  2750 => 1096,  2746 => 1095,  2734 => 1090,  2727 => 1086,  2723 => 1085,  2709 => 1078,  2701 => 1077,  2695 => 1074,  2682 => 1068,  2674 => 1067,  2668 => 1064,  2662 => 1060,  2649 => 1057,  2640 => 1056,  2636 => 1055,  2631 => 1053,  2625 => 1049,  2612 => 1046,  2603 => 1045,  2599 => 1044,  2594 => 1042,  2583 => 1034,  2579 => 1033,  2571 => 1028,  2554 => 1016,  2547 => 1012,  2543 => 1011,  2531 => 1004,  2522 => 998,  2518 => 997,  2508 => 992,  2501 => 988,  2497 => 987,  2490 => 982,  2482 => 980,  2474 => 979,  2466 => 974,  2462 => 973,  2455 => 969,  2446 => 963,  2440 => 959,  2437 => 958,  2431 => 957,  2429 => 956,  2422 => 954,  2414 => 951,  2408 => 947,  2402 => 946,  2394 => 944,  2386 => 942,  2383 => 941,  2379 => 940,  2375 => 939,  2369 => 937,  2364 => 936,  2361 => 935,  2359 => 934,  2349 => 929,  2345 => 928,  2335 => 921,  2324 => 913,  2320 => 912,  2316 => 911,  2302 => 904,  2294 => 903,  2286 => 900,  2278 => 895,  2264 => 888,  2257 => 886,  2245 => 881,  2241 => 880,  2234 => 878,  2228 => 874,  2218 => 870,  2210 => 869,  2206 => 867,  2202 => 866,  2194 => 863,  2188 => 859,  2173 => 857,  2169 => 856,  2160 => 852,  2154 => 848,  2139 => 846,  2135 => 845,  2126 => 841,  2120 => 837,  2105 => 835,  2101 => 834,  2092 => 830,  2085 => 825,  2082 => 824,  2072 => 820,  2066 => 819,  2060 => 818,  2053 => 815,  2048 => 814,  2046 => 813,  2037 => 807,  2033 => 806,  2025 => 800,  2022 => 799,  2012 => 795,  2002 => 794,  1998 => 793,  1995 => 792,  1990 => 791,  1988 => 790,  1980 => 787,  1967 => 781,  1959 => 780,  1951 => 777,  1938 => 771,  1930 => 770,  1922 => 767,  1909 => 761,  1901 => 760,  1893 => 757,  1881 => 752,  1873 => 751,  1865 => 748,  1853 => 743,  1845 => 742,  1837 => 739,  1821 => 728,  1808 => 723,  1799 => 722,  1791 => 719,  1786 => 717,  1772 => 711,  1763 => 710,  1755 => 707,  1749 => 704,  1736 => 698,  1729 => 696,  1715 => 690,  1706 => 689,  1698 => 686,  1692 => 683,  1678 => 676,  1671 => 674,  1657 => 668,  1648 => 667,  1640 => 664,  1626 => 658,  1617 => 657,  1609 => 654,  1603 => 651,  1586 => 641,  1578 => 640,  1570 => 637,  1557 => 631,  1549 => 630,  1541 => 627,  1528 => 621,  1520 => 620,  1512 => 617,  1499 => 611,  1491 => 610,  1483 => 607,  1470 => 601,  1462 => 600,  1454 => 597,  1441 => 591,  1433 => 590,  1425 => 587,  1411 => 582,  1404 => 580,  1392 => 575,  1385 => 573,  1371 => 568,  1364 => 566,  1352 => 561,  1345 => 559,  1331 => 554,  1326 => 552,  1320 => 548,  1317 => 547,  1308 => 544,  1302 => 543,  1295 => 542,  1290 => 541,  1288 => 540,  1281 => 535,  1276 => 533,  1271 => 532,  1266 => 530,  1262 => 529,  1257 => 528,  1249 => 525,  1236 => 519,  1228 => 518,  1220 => 515,  1209 => 509,  1205 => 507,  1194 => 503,  1186 => 501,  1178 => 499,  1176 => 498,  1172 => 496,  1168 => 495,  1160 => 492,  1149 => 486,  1146 => 485,  1135 => 481,  1127 => 479,  1119 => 477,  1117 => 476,  1113 => 474,  1109 => 473,  1101 => 470,  1089 => 465,  1082 => 463,  1069 => 457,  1061 => 456,  1053 => 453,  1040 => 447,  1032 => 446,  1024 => 443,  1017 => 438,  1002 => 436,  998 => 435,  990 => 432,  979 => 423,  976 => 422,  973 => 421,  965 => 418,  959 => 416,  957 => 415,  952 => 414,  950 => 413,  945 => 412,  943 => 411,  937 => 410,  934 => 409,  929 => 408,  926 => 407,  920 => 404,  913 => 400,  906 => 396,  902 => 394,  900 => 393,  891 => 389,  879 => 381,  875 => 379,  871 => 377,  869 => 376,  860 => 371,  856 => 369,  852 => 367,  850 => 366,  840 => 361,  830 => 356,  823 => 354,  810 => 348,  802 => 347,  794 => 344,  781 => 338,  773 => 337,  765 => 334,  752 => 328,  744 => 325,  731 => 317,  728 => 316,  725 => 315,  715 => 311,  705 => 310,  701 => 309,  698 => 308,  693 => 307,  691 => 306,  683 => 301,  679 => 300,  674 => 297,  661 => 282,  653 => 281,  645 => 278,  632 => 272,  624 => 271,  616 => 268,  603 => 262,  595 => 261,  587 => 258,  574 => 252,  566 => 251,  558 => 248,  545 => 242,  537 => 241,  529 => 238,  516 => 232,  508 => 231,  500 => 228,  487 => 222,  479 => 221,  471 => 218,  458 => 212,  450 => 211,  442 => 208,  429 => 202,  421 => 201,  413 => 198,  408 => 195,  402 => 192,  399 => 191,  397 => 190,  394 => 189,  388 => 187,  386 => 186,  379 => 184,  371 => 181,  360 => 177,  353 => 175,  344 => 169,  340 => 168,  336 => 167,  332 => 166,  328 => 165,  324 => 164,  320 => 163,  316 => 162,  312 => 161,  308 => 160,  304 => 159,  300 => 158,  291 => 151,  288 => 150,  273 => 148,  268 => 147,  266 => 146,  260 => 143,  247 => 137,  239 => 136,  233 => 133,  227 => 130,  220 => 126,  212 => 121,  208 => 119,  200 => 115,  197 => 114,  189 => 110,  187 => 109,  175 => 100,  167 => 94,  156 => 92,  152 => 91,  147 => 89,  141 => 88,  137 => 87,  131 => 86,  125 => 85,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/marketplace.twig", "");
    }
}
