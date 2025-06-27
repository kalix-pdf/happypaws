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

/* __string_template__fcf146f649dcb626c7fbf1d308bc7dced20cf41ce600a1005ca19f38e8cbb051 */
class __TwigTemplate_7715c7bd93cb38dd019e1e614112536dac9ac41ae098d6e030cd06dc3eb1cc97 extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">

      <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
        <ul class=\"nav nav-tabs\">
          <!-- <li><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li> -->
          <li class=\"active\"><a href=\"#tab-dashboard\" data-toggle=\"tab\">";
        // line 34
        echo "Dashboard";
        echo "  <i class=\"fa fa-spinner fa-spin remove-me\"></i></a></li>
          <li class=\"\"><a href=\"#tab-profile\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_info"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-commission\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_commission"] ?? null);
        echo "</a></li>
          <!-- <li><a href=\"#tab-order\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_order"] ?? null);
        echo "</a></li> -->
          <!-- <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_transaction"] ?? null);
        echo "</a></li> -->
          <li><a href=\"#tab-location\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_location"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
        </ul>

        <div class=\"tab-content\">

          <!-- <div class=\"tab-pane active\" id=\"tab-general\"></div> -->

          <div id=\"tab-dashboard\" class=\"tab-pane active\">

          </div>

          <div class=\"tab-pane \" id=\"tab-profile\">

            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 53
        echo ($context["tab_profile_info"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-screenname\"><span data-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["entry_screenname_info"] ?? null);
        echo "\">";
        echo ($context["entry_screenname"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[screenname]\" value=\"";
        // line 60
        echo ($context["screenname"] ?? null);
        echo "\"  id=\"input-screenname\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-image\"><span data-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["entry_avatar_info"] ?? null);
        echo "\">";
        echo ($context["entry_avatar"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <a href=\"\" id=\"thumb-image-avatar\" data-toggle=\"image\" class=\"img-thumbnail\">
                  <img src=\"";
        // line 68
        echo ($context["avatar_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                </a>
                <input type=\"hidden\" name=\"customer[avatar]\" value=\"";
        // line 70
        echo ($context["avatar"] ?? null);
        echo "\" id=\"input-image-avatar\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-gender\">";
        // line 75
        echo ($context["entry_gender"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"customer[gender]\" class=\"form-control\">
                  <option> </option>
                  <option value=\"M\" ";
        // line 79
        if ((($context["gender"] ?? null) == "M")) {
            echo "selected";
        }
        echo " > Male </option>
                  <option value=\"F\" ";
        // line 80
        if ((($context["gender"] ?? null) == "F")) {
            echo "selected";
        }
        echo " > Female </option>
                </select>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-shortprofile\">";
        // line 86
        echo ($context["entry_profile"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"customer[shortprofile]\" id=\"input-shortprofile\" class=\"form-control\">";
        // line 88
        echo ($context["shortprofile"] ?? null);
        echo "</textarea>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-companyname\">";
        // line 93
        echo ($context["entry_company"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[companyname]\" value=\"";
        // line 95
        echo ($context["companyname"] ?? null);
        echo "\"  id=\"input-companyname\" class=\"form-control\" />
                ";
        // line 96
        if (($context["error_companyname"] ?? null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_companyname"] ?? null);
            echo "</div>
                ";
        }
        // line 99
        echo "              </div>
            </div>


            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-twitterid\">";
        // line 104
        echo ($context["entry_twitter"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[twitterid]\" value=\"";
        // line 106
        echo ($context["twitterid"] ?? null);
        echo "\"  id=\"input-twitterid\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-facebookid\">";
        // line 111
        echo ($context["entry_facebook"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[facebookid]\" value=\"";
        // line 113
        echo ($context["facebookid"] ?? null);
        echo "\"  id=\"input-facebookid\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-companylocality\">";
        // line 118
        echo ($context["entry_locality"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[companylocality]\" value=\"";
        // line 120
        echo ($context["companylocality"] ?? null);
        echo "\"  id=\"input-companylocality\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 125
        echo ($context["entry_country"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <span class=\"input-group-addon\"><i>
                    <img src=\"../image/flags/";
        // line 129
        echo twig_lower_filter($this->env, ($context["country"] ?? null));
        echo ".png\" id=\"country\">
                  </i></span>
                  <select name=\"customer[country]\" id=\"input-country\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 133
        if (($context["countries"] ?? null)) {
            // line 134
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value_country"]) {
                // line 135
                echo "                        ";
                if (((($__internal_compile_0 = $context["value_country"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["iso_code_2"] ?? null) : null) == ($context["country"] ?? null))) {
                    // line 136
                    echo "                            <option value=\"";
                    echo (($__internal_compile_1 = $context["value_country"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["iso_code_2"] ?? null) : null);
                    echo "\" selected>";
                    echo (($__internal_compile_2 = $context["value_country"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "</option>
                        ";
                } else {
                    // line 138
                    echo "                            <option value=\"";
                    echo (($__internal_compile_3 = $context["value_country"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["iso_code_2"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_4 = $context["value_country"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
                    echo "</option>
                        ";
                }
                // line 140
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
        }
        // line 142
        echo "                  </select>
                </div>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-backgroundcolor\"><span data-toggle=\"tooltip\" title=\"";
        // line 148
        echo ($context["entry_theme"] ?? null);
        echo "\">";
        echo ($context["entry_theme"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"input-group colorpicker\">
                  <span class=\"input-group-addon\"><i></i></span>
                  <input type=\"text\" name=\"customer[backgroundcolor]\" value=\"";
        // line 152
        echo ($context["backgroundcolor"] ?? null);
        echo "\"  id=\"input-backgroundcolor\" class=\"form-control\" />
                </div>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-image\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo ($context["entry_banner_info"] ?? null);
        echo "\">";
        echo ($context["entry_banner"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <a href=\"\" id=\"thumb-image-companybanner\" data-toggle=\"image\" class=\"img-thumbnail\">
                  <img src=\"";
        // line 161
        echo ($context["companybanner_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                </a>
                <input type=\"hidden\" name=\"customer[companybanner]\" value=\"";
        // line 163
        echo ($context["companybanner"] ?? null);
        echo "\" id=\"input-image-companybanner\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-image\"><span data-toggle=\"tooltip\" title=\"";
        // line 168
        echo ($context["entry_logo_info"] ?? null);
        echo "\">";
        echo ($context["entry_logo"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <a href=\"\" id=\"thumb-image-companylogo\" data-toggle=\"image\" class=\"img-thumbnail\">
                  <img src=\"";
        // line 171
        echo ($context["companylogo_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                </a>
                <input type=\"hidden\" name=\"customer[companylogo]\" value=\"";
        // line 173
        echo ($context["companylogo"] ?? null);
        echo "\" id=\"input-image-companylogo\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-companydescription\">";
        // line 178
        echo ($context["entry_store"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"customer[companydescription]\" id=\"input-companydescription\" class=\"form-control\">";
        // line 180
        echo ($context["companydescription"] ?? null);
        echo "</textarea>
              </div>
            </div>

          </div>

          <!-- transaction -->
          <!-- <div class=\"tab-pane\" id=\"tab-transaction\">

            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 189
        echo ($context["tab_transaction_info"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>

            <div id=\"transaction\"></div>
            <br/>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 196
        echo ($context["entry_description"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" placeholder=\"";
        // line 198
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 203
        echo ($context["entry_amount"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"amount\" placeholder=\"";
        // line 205
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"text-right\">
              <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
        // line 210
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_add_transaction"] ?? null);
        echo "</button>
            </div>
          </div> -->

          <!-- order -->
          <div class=\"tab-pane\" id=\"tab-order\">

            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 217
        echo ($context["tab_order_info"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>

            <div class=\"panel panel-default\">

              <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 224
        echo ($context["tab_order"] ?? null);
        echo "</h3>
              </div>

              <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-right\">";
        // line 231
        echo ($context["entry_orderid"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 232
        echo ($context["entry_name"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 233
        echo ($context["entry_products"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 234
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 235
        echo twig_replace_filter(($context["entry_status"] ?? null), [":" => ""]);
        echo "</td>
                      <td class=\"text-left\">";
        // line 236
        echo ($context["entry_total"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 237
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 241
        if ((array_key_exists("partner_orders", $context) && ($context["partner_orders"] ?? null))) {
            // line 242
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partner_orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner_order"]) {
                // line 243
                echo "                        <tr>
                          <td class=\"text-right\">";
                // line 244
                echo (($__internal_compile_5 = $context["partner_order"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["order_id"] ?? null) : null);
                echo "</td>
                          <td class=\"text-left\">";
                // line 245
                echo (($__internal_compile_6 = $context["partner_order"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                echo "</td>
                          <td class=\"text-left\">
                            ";
                // line 247
                if (twig_get_attribute($this->env, $this->source, $context["partner_order"], "productname", [], "array", true, true, false, 247)) {
                    // line 248
                    echo "                              ";
                    echo twig_slice($this->env, (($__internal_compile_7 = $context["partner_order"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["productname"] ?? null) : null), 0,  -2);
                    echo "
                            ";
                }
                // line 250
                echo "                          </td>
                          <td class=\"text-left\">";
                // line 251
                echo (($__internal_compile_8 = $context["partner_order"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_added"] ?? null) : null);
                echo "</td>
                          <td class=\"text-left\">";
                // line 252
                echo (($__internal_compile_9 = $context["partner_order"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["orderstatus"] ?? null) : null);
                echo "</td>
                          <td class=\"text-left\">
                            ";
                // line 254
                if (twig_get_attribute($this->env, $this->source, $context["partner_order"], "total", [], "array", true, true, false, 254)) {
                    // line 255
                    echo "                              ";
                    echo (($__internal_compile_10 = $context["partner_order"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["total"] ?? null) : null);
                    echo "
                            ";
                }
                // line 257
                echo "                          </td>
                          <td class=\"text-left\">
                            <a href=\"";
                // line 259
                echo (($__internal_compile_11 = $context["partner_order"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["view"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                            <a href=\"";
                // line 260
                echo (($__internal_compile_12 = $context["partner_order"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner_order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "                    ";
        } else {
            // line 265
            echo "                      <tr><td class=\"text-center\" colspan=\"7\">";
            echo ($context["text_no_results"] ?? null);
            echo "</td></tr>
                    ";
        }
        // line 267
        echo "                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <!-- tab commission -->
          <div class=\"tab-pane\" id=\"tab-commission\">
            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 276
        echo ($context["tab_commission_info"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 280
        echo ($context["entry_commission"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"customer[commission]\" value=\"";
        // line 283
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  <span class=\"input-group-addon\"> <b>%</b> </span>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-paypalfirst\">";
        // line 289
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"paypalfirst\" value=\"";
        // line 291
        echo ($context["paypalfirst"] ?? null);
        echo "\"  placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-paypalfirst\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-paypallast\">";
        // line 295
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"paypallast\" value=\"";
        // line 297
        echo ($context["paypallast"] ?? null);
        echo "\"  placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-paypallast\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-paypalid\">";
        // line 301
        echo ($context["entry_paypalid"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"customer[paypalid]\" value=\"";
        // line 303
        echo ($context["paypalid"] ?? null);
        echo "\"  placeholder=\"";
        echo ($context["entry_paypalid"] ?? null);
        echo "\" id=\"input-paypalid\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-otherpayment\">";
        // line 307
        echo ($context["entry_otherinfo"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"customer[otherpayment]\" placeholder=\"";
        // line 309
        echo ($context["entry_otherinfo"] ?? null);
        echo "\" id=\"input-otherpayment\" class=\"form-control\">";
        echo ($context["otherpayment"] ?? null);
        echo "</textarea>
              </div>
            </div>

            <div class=\"form-group\">
             <label class=\"col-sm-2 control-label\" for=\"input-taxinfo\">";
        // line 314
        echo ($context["entry_othertaxinfo"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"customer[taxinfo]\" placeholder=\"";
        // line 316
        echo ($context["entry_othertaxinfo"] ?? null);
        echo "\" id=\"input-taxinfo\" class=\"form-control\">";
        echo ($context["taxinfo"] ?? null);
        echo "</textarea>
              </div>
            </div>
          </div>

          <!-- tab product -->
          <div class=\"tab-pane\" id=\"tab-product\">
            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 323
        echo ($context["tab_product_info"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"></label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"filter_name\" placeholder=\"";
        // line 330
        echo ($context["entry_product_name"] ?? null);
        echo "\" value=\"";
        if ((array_key_exists("filter_name", $context) && ($context["filter_name"] ?? null))) {
            echo ($context["filter_name"] ?? null);
        }
        echo "\" id=\"input-screenname\" class=\"form-control\" />
              </div>
              <div class=\"col-sm-1\">
                <button type=\"button\" onclick=\"filter();\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 333
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 338
        echo ($context["entry_product_id_info"] ?? null);
        echo "\">";
        echo ($context["entry_product_id"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-9\">
                <div class=\"well well-sm\" style=\"height:300px;overflow:auto\" id=\"product-well\">
                  ";
        // line 341
        if (($context["admin_products"] ?? null)) {
            // line 342
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["admin_products"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["admin_product"]) {
                // line 343
                echo "                      <div class=\"checkbox\">
                        <label for=\"admin_product";
                // line 344
                echo (($__internal_compile_13 = $context["admin_product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["product_id"] ?? null) : null);
                echo "\">
                          <input type=\"checkbox\" name=\"product_ids[]\" value=\"";
                // line 345
                echo (($__internal_compile_14 = $context["admin_product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["product_id"] ?? null) : null);
                echo "\" id=\"admin_product";
                echo (($__internal_compile_15 = $context["admin_product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["product_id"] ?? null) : null);
                echo "\" ";
                if ((($context["product_ids"] ?? null) && twig_in_filter((($__internal_compile_16 = $context["admin_product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["product_id"] ?? null) : null), ($context["product_ids"] ?? null)))) {
                    echo "checked";
                }
                echo " />
                          ";
                // line 346
                echo (($__internal_compile_17 = $context["admin_product"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null);
                echo "
                        </label>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['admin_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                  ";
        } else {
            // line 351
            echo "                  ";
            echo ($context["text_no_product_assign"] ?? null);
            echo "
                  ";
        }
        // line 353
        echo "                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\" id=\"ajax_paginatin\">";
        // line 357
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\" id=\"ajax_results\">";
        // line 358
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>

          <!-- tab location -->
          <div class=\"tab-pane\" id=\"tab-location\">

          </div>

        </div>

      </form>
    </div>
  </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\"><!--

\$('#tab-dashboard').load(\"index.php?route=customerpartner/dashboard&user_token=";
        // line 379
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "\",function(){
      \$('.remove-me').remove();
    });

\$('#input-shortprofile, #input-companydescription').summernote({height: 300});

// Product
\$('input[name=\\'product\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=customerpartner/product/autocomplete&user_token=";
        // line 389
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request)+'&filter_for_seller=1',
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'product\\']').val('');

    \$('#product-product' + item['value']).remove();

    \$('#product-product').append('<div id=\"product-id' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_ids[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});


\$('#transaction').delegate('.pagination a', 'click', function(e) {
  \$('#transaction').load(this.href);

  return false;
});

\$('#transaction').load('index.php?route=customerpartner/partner/transaction&user_token=";
        // line 421
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\$('#button-transaction').on('click', function() {
  \$.ajax({
    url: 'index.php?route=customerpartner/partner/transaction&user_token=";
        // line 425
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'html',
    data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
    beforeSend: function() {
      \$('#button-transaction').button('loading');
    },
    complete: function() {
      \$('#button-transaction').button('reset');
    },
    success: function(html) {
      \$('#tab-transaction .alert').remove();

      \$('#transaction').html(html);

      \$('#tab-transaction input[name=\\'amount\\']').val('');
      \$('#tab-transaction input[name=\\'description\\']').val('');
    }
  });
});

\$('#input-country').on('change',function(){
  newSrc = \"../image/flags/\"+this.value+\".png\";
  \$('#country').attr('src',newSrc.toLowerCase());
})

localocation = false;
\$('a[href=\\'#tab-location\\']').on('click',function(){
  if(!localocation){
    \$(this).append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');

     \$.ajax({
      url: '";
        // line 457
        echo twig_replace_filter(($context["loadLocation"] ?? null), ["amp;" => ""]);
        echo "',
      dataType: 'html',
      success: function(response) {
        \$('#tab-location').html(response);
        \$('.remove-me').remove();
      }
    });
    localocation = true;
  }
})

//--></script>
<link href=\"view/javascript/color-picker/css/bootstrap-colorpicker.min.css\" rel=\"stylesheet\">
<script src=\"view/javascript/color-picker/js/bootstrap-colorpicker.min.js\"></script>
<script type=\"text/javascript\">
\$(function(){
    \$('.colorpicker').colorpicker();
});
</script>

<script type=\"text/javascript\">

  function ajax_pagination(url) {
    \$.ajax({
      url: url,
      dataType: 'json',
      success: function(response) {
        \$('#product-well').html('');

        var html = '';

        if (response['admin_products']) {
          response['admin_products'].forEach(function(admin_product) {

            html += '<div class=\"checkbox\">';
            html += '<label for=\"admin_product'+admin_product['product_id']+'\">';
            html += '<input type=\"checkbox\" name=\"product_ids[]\" value=\"'+admin_product['product_id']+'\" id=\"admin_product'+admin_product['product_id']+'\"/>';
            html += admin_product['name'];
            html += '</label>';
            html += '</div>';
          });
        } else {
          html += '";
        // line 499
        echo ($context["text_no_product_assign"] ?? null);
        echo "';
        }

        \$('#product-well').html(html);

        \$('#ajax_paginatin').html(response['pagination']);

        \$('#ajax_results').html(response['results']);
      }
    });
  }

  \$('body').on('click','.pagination li a',function(event){

    event.preventDefault();

    var url = \$(this).attr('href').replace(\"/update\", \"/pagination\");

    var filter_name = \$('input[name=\\'filter_name\\']').val();

  \tif (filter_name) {
  \t\turl += '&filter_name=' + encodeURIComponent(filter_name);
  \t}

    ajax_pagination(url);

  });

  function filter() {
  \turl = 'index.php?route=customerpartner/partner/pagination&user_token=";
        // line 528
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "';

  \tvar filter_name = \$('input[name=\\'filter_name\\']').val().trim();

  \tif (filter_name) {
  \t\turl += '&filter_name=' + encodeURIComponent(filter_name);
  \t}
    ajax_pagination(url);
  }
</script>
";
        // line 538
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__fcf146f649dcb626c7fbf1d308bc7dced20cf41ce600a1005ca19f38e8cbb051";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1026 => 538,  1011 => 528,  979 => 499,  934 => 457,  897 => 425,  888 => 421,  853 => 389,  838 => 379,  814 => 358,  810 => 357,  804 => 353,  798 => 351,  795 => 350,  785 => 346,  775 => 345,  771 => 344,  768 => 343,  763 => 342,  761 => 341,  753 => 338,  745 => 333,  735 => 330,  725 => 323,  713 => 316,  708 => 314,  698 => 309,  693 => 307,  684 => 303,  679 => 301,  670 => 297,  665 => 295,  656 => 291,  651 => 289,  640 => 283,  634 => 280,  627 => 276,  616 => 267,  610 => 265,  607 => 264,  595 => 260,  589 => 259,  585 => 257,  579 => 255,  577 => 254,  572 => 252,  568 => 251,  565 => 250,  559 => 248,  557 => 247,  552 => 245,  548 => 244,  545 => 243,  540 => 242,  538 => 241,  531 => 237,  527 => 236,  523 => 235,  519 => 234,  515 => 233,  511 => 232,  507 => 231,  497 => 224,  487 => 217,  475 => 210,  467 => 205,  462 => 203,  454 => 198,  449 => 196,  439 => 189,  427 => 180,  422 => 178,  414 => 173,  407 => 171,  399 => 168,  391 => 163,  384 => 161,  376 => 158,  367 => 152,  358 => 148,  350 => 142,  347 => 141,  341 => 140,  333 => 138,  325 => 136,  322 => 135,  317 => 134,  315 => 133,  308 => 129,  301 => 125,  293 => 120,  288 => 118,  280 => 113,  275 => 111,  267 => 106,  262 => 104,  255 => 99,  249 => 97,  247 => 96,  243 => 95,  238 => 93,  230 => 88,  225 => 86,  214 => 80,  208 => 79,  201 => 75,  193 => 70,  186 => 68,  178 => 65,  170 => 60,  163 => 58,  155 => 53,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  106 => 31,  98 => 26,  93 => 23,  85 => 19,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fcf146f649dcb626c7fbf1d308bc7dced20cf41ce600a1005ca19f38e8cbb051", "");
    }
}
