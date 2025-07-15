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

/* account/customerpartner/profile.twig */
class __TwigTemplate_e839e69aedcb9526fa367638c4c2b8d7b911ff794abfcae529a936eb636781c7 extends Template
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
        // line 2
        echo ($context["separate_column_left"] ?? null);
        echo "
";
        // line 3
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 4
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 6
            echo "  <div class=\"container\">
<style type=\"text/css\">
  .imgoption{
    display: block;
    margin-top: 5px;
    width: 14%;
  }
   .fa-home{
    margin-top: 24px;
    height: 6%;
  }
   .fa {
    display: contents !important;
  }

  .imgoption button {
    width: 100%;
  }
  @media only screen and (max-width: 767px) {
    .imgoption{
      width: 95px;
    }
  }
  .img-thumbnail {
    border: 1px solid grey;
  }
</style>
<style type=\"text/css\">
  .imgoption{
    display: block;
    margin-top: 5px;
    width: 18%;
  }

  .imgoption button {
    width: 100%;
  }
</style>

";
        }
        // line 46
        echo "
  <ul class=\"breadcrumb\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 49
            echo "    <li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </ul>
  ";
        // line 52
        if (($context["error_warning"] ?? null)) {
            // line 53
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 56
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 58
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 59
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 60
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 61
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 62
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 63
            echo "    ";
        } else {
            // line 64
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 65
            echo "    ";
        }
        // line 66
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 67
        if (($context["chkIsPartner"] ?? null)) {
            // line 68
            echo "      <h1>";
            echo ($context["heading_title"] ?? null);
            echo "
        <div class=\"pull-right\">
          <a href=\"";
            // line 70
            echo ($context["config"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"configuration\" class=\"btn btn-warning\" target=\"_blank\"><i class=\"fa fa-cog\"></i></a>
          <a href=\"";
            // line 71
            echo ($context["view_profile"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_view_profile"] ?? null);
            echo "\" class=\"btn btn-success\" target=\"_blank\"><i class=\"fa fa-user\"></i></a>
          <button type=\"submit\" form=\"form-profile\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
            // line 73
            echo ($context["back"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_back"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </h1>
      <form action=\"";
            // line 76
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-profile\" class=\"form-horizontal\">
          <legend><i class=\"fa fa-list\"></i> ";
            // line 77
            echo ($context["text_account_information"] ?? null);
            echo "</legend>
          ";
            // line 78
            if (($context["isMember"] ?? null)) {
                // line 79
                echo "          ";
                if ((array_key_exists("allowed", $context) && ($context["allowed"] ?? null))) {
                    // line 80
                    echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo ($context["text_profile_info"] ?? null);
                    echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
          ";
                }
                // line 83
                echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-profile_details\" data-toggle=\"tab\">";
                // line 84
                echo ($context["tab_profile_details"] ?? null);
                echo "</a></li>
            ";
                // line 85
                if (((twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 85) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 85)) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 85))) {
                    // line 86
                    echo "              <li><a href=\"#tab-paymentmode\" data-toggle=\"tab\">";
                    echo ($context["tab_paymentmode"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 88
                echo "            ";
                // line 89
                echo "            ";
                if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && ($context["marketplace_google_analytic_seller_status"] ?? null))) {
                    // line 90
                    echo "            <li><a href=\"#tab-analytics\" data-toggle=\"tab\">";
                    echo ($context["tab_analytics"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 92
                echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-profile_details\">
              <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                // line 95
                echo ($context["text_general"] ?? null);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-firstname\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 100
                echo ($context["text_firstname"] ?? null);
                echo "\">";
                echo ($context["text_firstname"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"firstname\" value=\"";
                // line 103
                echo (($__internal_compile_2 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["firstname"] ?? null) : null);
                echo "\" id=\"input-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-lastname\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 108
                echo ($context["text_lastname"] ?? null);
                echo "\">";
                echo ($context["text_lastname"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"lastname\" value=\"";
                // line 111
                echo (($__internal_compile_3 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["lastname"] ?? null) : null);
                echo "\" id=\"input-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-email\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 116
                echo ($context["text_email"] ?? null);
                echo "\">";
                echo ($context["text_email"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"email\" value=\"";
                // line 119
                echo (($__internal_compile_4 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["email"] ?? null) : null);
                echo "\" id=\"input-email\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-3 control-label\" for=\"input-screenname\"><span data-toggle=\"tooltip\" title=\"";
                // line 123
                echo ($context["text_sef_url"] ?? null);
                echo "\">";
                echo ($context["text_screen_name"] ?? null);
                echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"screenName\" value=\"";
                // line 125
                echo (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["screenname"] ?? null) : null);
                echo "\"  id=\"input-screenname\" class=\"form-control\" />
                  ";
                // line 126
                if ((array_key_exists("screenname_error", $context) && ($context["screenname_error"] ?? null))) {
                    // line 127
                    echo "                    <div class=\"text-danger\">
                        ";
                    // line 128
                    echo ($context["screenname_error"] ?? null);
                    echo "
                    </div>
                  ";
                }
                // line 131
                echo "                </div>
              </div>
              ";
                // line 133
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "avatar", [], "array", true, true, false, 133)) {
                    // line 134
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-avatar\"><span data-toggle=\"tooltip\" title=\"";
                    // line 135
                    echo ($context["hover_avatar"] ?? null);
                    echo "\">";
                    echo ($context["text_avatar"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"avatar-thumb-image\" src=\"";
                    // line 138
                    echo (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["avatar"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"avatar\" value=\"";
                    // line 140
                    echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["avatar_img"] ?? null) : null);
                    echo "\" id=\"avatar-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">";
                    // line 142
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 147
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "gender", [], "array", true, true, false, 147)) {
                    // line 148
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-gender\">";
                    // line 149
                    echo ($context["text_gender"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"gender\" class=\"form-control\">
                    <option value=\"#\"></option>
                    <option value=\"M\" ";
                    // line 153
                    if (((($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["gender"] ?? null) : null) == "M")) {
                        echo " ";
                        echo "selected";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_male"] ?? null);
                    echo "</option>
                    <option value=\"F\" ";
                    // line 154
                    if (((($__internal_compile_9 = ($context["partner"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["gender"] ?? null) : null) == "F")) {
                        echo " ";
                        echo "selected";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_female"] ?? null);
                    echo "</option>
                  </select>
                </div>
              </div>
              ";
                }
                // line 159
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "shortprofile", [], "array", true, true, false, 159)) {
                    // line 160
                    echo "              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-shortprofile\">";
                    // line 161
                    echo ($context["text_short_profile"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <textarea name=\"shortProfile\" id=\"input-shortprofile\" class=\"form-control\">";
                    // line 163
                    echo (($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["shortprofile"] ?? null) : null);
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 167
                echo "              <div class=\"form-group required\">
                <label class=\"col-sm-3 control-label\" for=\"input-companyName\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 169
                echo ($context["text_company_name"] ?? null);
                echo "\">";
                echo ($context["text_company_name"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"companyName\" value=\"";
                // line 172
                echo (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["companyname"] ?? null) : null);
                echo "\" id=\"input-companyName\" class=\"form-control\" />
                  ";
                // line 173
                if ((array_key_exists("companyname_error", $context) && ($context["companyname_error"] ?? null))) {
                    // line 174
                    echo "                    <div class=\"text-danger\">
                        ";
                    // line 175
                    echo ($context["companyname_error"] ?? null);
                    echo "
                    </div>
                  ";
                }
                // line 178
                echo "                </div>
              </div>
              ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "twitterid", [], "array", true, true, false, 180)) {
                    // line 181
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-twitterId\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 183
                    echo ($context["text_twitter_id"] ?? null);
                    echo "\">";
                    echo ($context["text_twitter_id"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"twitterId\" value=\"";
                    // line 186
                    echo (($__internal_compile_12 = ($context["partner"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["twitterid"] ?? null) : null);
                    echo "\" id=\"input-twitterId\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 190
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "facebookid", [], "array", true, true, false, 190)) {
                    // line 191
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-facebookId\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 193
                    echo ($context["text_facebook_id"] ?? null);
                    echo "\">";
                    echo ($context["text_facebook_id"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"facebookId\" value=\"";
                    // line 196
                    echo (($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["facebookid"] ?? null) : null);
                    echo "\" id=\"input-facebookId\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 200
                echo "                 ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "youtube", [], "array", true, true, false, 200)) {
                    // line 201
                    echo "                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-youtube\">
                      <span data-toggle=\"tooltip\" title=\"";
                    // line 203
                    echo ($context["text_youtube_id"] ?? null);
                    echo "\">";
                    echo ($context["text_youtube_id"] ?? null);
                    echo "</span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"youtube\" value=\"";
                    // line 206
                    echo (($__internal_compile_14 = ($context["partner"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["youtube"] ?? null) : null);
                    echo "\" id=\"input-youtube\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
                }
                // line 210
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "instagram", [], "array", true, true, false, 210)) {
                    // line 211
                    echo "                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-instagram\">
                      <span data-toggle=\"tooltip\" title=\"";
                    // line 213
                    echo ($context["text_instagram_id"] ?? null);
                    echo "\">";
                    echo ($context["text_instagram_id"] ?? null);
                    echo "</span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"instagram\" value=\"";
                    // line 216
                    echo (($__internal_compile_15 = ($context["partner"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["instagram"] ?? null) : null);
                    echo "\" id=\"input-instagram\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
                }
                // line 220
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companylocality", [], "array", true, true, false, 220)) {
                    // line 221
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companyLocality\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 223
                    echo ($context["text_company_locality"] ?? null);
                    echo "\">";
                    echo ($context["text_company_locality"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"companyLocality\" value=\"";
                    // line 226
                    echo (($__internal_compile_16 = ($context["partner"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["companylocality"] ?? null) : null);
                    echo "\" id=\"input-companyLocality\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 230
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "country", [], "array", true, true, false, 230)) {
                    // line 231
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-countryLogo\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 233
                    echo ($context["text_country_logo"] ?? null);
                    echo "\">";
                    echo ($context["text_country_logo"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group\"><span class=\"input-group-addon\">
                    <img class=\"wk_countrylogo\" src=\"";
                    // line 237
                    echo (("image/flags/" . twig_lower_filter($this->env, (($__internal_compile_17 = ($context["partner"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["country"] ?? null) : null))) . ".png");
                    echo "\" /></span>
                    <input id=\"countryLogo\" class=\"form-control\" type=\"hidden\" name=\"countryLogo\" value=\"";
                    // line 238
                    echo (($__internal_compile_18 = ($context["partner"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["countrylogo"] ?? null) : null);
                    echo "\"/>
                    <select id=\"country\" class=\"form-control\" name=\"country\" >
                      ";
                    // line 240
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["countr"]) {
                        echo " ";
                        if (((($__internal_compile_19 = ($context["partner"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["country"] ?? null) : null) == (($__internal_compile_20 = $context["countr"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["iso_code_2"] ?? null) : null))) {
                            // line 241
                            echo "                      <option value=\"";
                            echo (($__internal_compile_21 = $context["countr"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["iso_code_2"] ?? null) : null);
                            echo "\" selected>";
                            echo (($__internal_compile_22 = $context["countr"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 243
                            echo "
                      <option value=\"";
                            // line 244
                            echo (($__internal_compile_23 = $context["countr"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["iso_code_2"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_24 = $context["countr"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null);
                            echo "</option>
                        ";
                        }
                        // line 245
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['countr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 246
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 251
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "backgroundcolor", [], "array", true, true, false, 251)) {
                    // line 252
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-backgroundcolor\"><span data-toggle=\"tooltip\" title=\"";
                    // line 253
                    echo ($context["text_theme_background_color"] ?? null);
                    echo "\">";
                    echo ($context["text_theme_background_color"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group bgcolorpicker\">
                    <span class=\"input-group-addon\"><i></i></span>
                    <input type=\"text\" name=\"backgroundcolor\" value=\"";
                    // line 257
                    echo (($__internal_compile_25 = ($context["partner"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["backgroundcolor"] ?? null) : null);
                    echo "\"  id=\"input-backgroundcolor\" class=\"form-control\" />
                  </div>
                </div>
              </div>
              ";
                }
                // line 262
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companybanner", [], "array", true, true, false, 262)) {
                    // line 263
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companybanner\"><span data-toggle=\"tooltip\" title=\"";
                    // line 264
                    echo ($context["hover_banner"] ?? null);
                    echo "\">";
                    echo ($context["text_company_banner"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"companybanner-thumb-image\" src=\"";
                    // line 267
                    echo (($__internal_compile_26 = ($context["partner"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["companybanner"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"companybanner\" value=\"";
                    // line 269
                    echo (($__internal_compile_27 = ($context["partner"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["companybanner_img"] ?? null) : null);
                    echo "\" id=\"companybanner-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\" >";
                    // line 271
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 276
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companylogo", [], "array", true, true, false, 276)) {
                    // line 277
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companylogo\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 279
                    echo ($context["hover_company_logo"] ?? null);
                    echo "\">";
                    echo ($context["text_company_logo"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"companylogo-thumb-image\" src=\"";
                    // line 283
                    echo (($__internal_compile_28 = ($context["partner"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["companylogo"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"companylogo\" value=\"";
                    // line 285
                    echo (($__internal_compile_29 = ($context["partner"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["companylogo_img"] ?? null) : null);
                    echo "\" id=\"companylogo-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">";
                    // line 287
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 292
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companydescription", [], "array", true, true, false, 292)) {
                    // line 293
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companydescription\">";
                    // line 294
                    echo ($context["text_company_description"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <textarea name=\"companyDescription\" id=\"input-companydescription\" class=\"form-control\">";
                    // line 296
                    echo (($__internal_compile_30 = ($context["partner"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["companydescription"] ?? null) : null);
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 300
                echo "            </div>
            <div class=\"tab-pane\" id=\"tab-achivments\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-pdf\">
                    <span data-toggle=\"tooltip\" title=\"";
                // line 304
                echo ($context["entry_pdf"] ?? null);
                echo "\">";
                echo ($context["entry_pdf"] ?? null);
                echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <button type=\"button\" id=\"button-upload-achivement\" data-loading-text=\"Loading...\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Upload</button>
                    <input type=\"file\" class=\"hide\" name=\"seller_achivments\" />
                    ";
                // line 309
                if ((array_key_exists("seller_achivments_error", $context) && ($context["seller_achivments_error"] ?? null))) {
                    // line 310
                    echo "                      <div class=\"text-danger\">
                          ";
                    // line 311
                    echo ($context["seller_achivments_error"] ?? null);
                    echo "
                      </div>
                    ";
                }
                // line 314
                echo "                  </div>
                </div>
                  <div class=\"table-responsive\">
                   <table class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-center\">";
                // line 320
                echo ($context["text_aid"] ?? null);
                echo "</td>
                        <td class=\"text-center\">";
                // line 321
                echo ($context["text_aname"] ?? null);
                echo "</td>
                        <td class=\"text-center\">";
                // line 322
                echo ($context["text_action"] ?? null);
                echo "</td>
                     </tr>
                   </thead>
                   <tbody>
                      <tr>
                       ";
                // line 327
                if ((array_key_exists("achivment", $context) &&  !twig_test_empty(($context["achivment"] ?? null)))) {
                    // line 328
                    echo "                         <td class=\"text-center\">";
                    echo (($__internal_compile_31 = ($context["achivment"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null);
                    echo "</td>
                         <td class=\"text-center\">";
                    // line 329
                    echo (($__internal_compile_32 = ($context["achivment"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["path"] ?? null) : null);
                    echo "</td>
                         <td class=\"text-center\"><a href=\"";
                    // line 330
                    echo (($__internal_compile_33 = ($context["achivment"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["filepath"] ?? null) : null);
                    echo "\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-eye\"> </i></a></td>
                      ";
                } else {
                    // line 332
                    echo "                        <td class=\"text-center\" colspan=\"5\">";
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
                      ";
                }
                // line 334
                echo "                     </tr>
                   </tbody>
                 </table>
               </div>
            </div>

            ";
                // line 340
                if (((twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 340) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 340)) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 340))) {
                    // line 341
                    echo "            <div class=\"tab-pane\" id=\"tab-paymentmode\">
              <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>";
                    // line 342
                    echo ($context["text_paymentmode"] ?? null);
                    echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              </div>
              ";
                    // line 345
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 345)) {
                        // line 346
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-paypalfirst\">
                    <span data-toggle=\"tooltip\" title=\"";
                        // line 348
                        echo ($context["help_paypal_firstname"] ?? null);
                        echo "\">";
                        echo ((($context["text_paypal_"] ?? null) . " ") . ($context["text_firstname"] ?? null));
                        echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"paypalfirst\" value=\"";
                        // line 351
                        echo (($__internal_compile_34 = ($context["partner"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["paypalfirst"] ?? null) : null);
                        echo "\" id=\"input-paypalfirst\" class=\"form-control\" />
                     ";
                        // line 352
                        if (($context["firstname_error"] ?? null)) {
                            // line 353
                            echo "                      <div class=\"text-danger\">
                          ";
                            // line 354
                            echo ($context["firstname_error"] ?? null);
                            echo "
                      </div>
                    ";
                        }
                        // line 357
                        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-paypallast\">
                    <span data-toggle=\"tooltip\" title=\"";
                        // line 361
                        echo ($context["help_paypal_lastname"] ?? null);
                        echo "\">";
                        echo ((($context["text_paypal_"] ?? null) . " ") . ($context["text_lastname"] ?? null));
                        echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"paypallast\" value=\"";
                        // line 364
                        echo (($__internal_compile_35 = ($context["partner"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["paypallast"] ?? null) : null);
                        echo "\" id=\"input-paypallast\" class=\"form-control\" />
                      ";
                        // line 365
                        if (($context["lastname_error"] ?? null)) {
                            // line 366
                            echo "                        <div class=\"text-danger\">
                            ";
                            // line 367
                            echo ($context["lastname_error"] ?? null);
                            echo "
                        </div>
                      ";
                        }
                        // line 370
                        echo "                  </div>
                </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 374
                        echo ($context["text_payment_detail"] ?? null);
                        echo "\">";
                        echo ($context["text_payment_detail"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"paypalid\" value=\"";
                        // line 377
                        echo (($__internal_compile_36 = ($context["partner"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["paypalid"] ?? null) : null);
                        echo "\" id=\"input-paypalid\" class=\"form-control\" />
                  ";
                        // line 378
                        if ((array_key_exists("paypal_error", $context) && ($context["paypal_error"] ?? null))) {
                            // line 379
                            echo "                    <div class=\"text-danger\">
                        ";
                            // line 380
                            echo ($context["paypal_error"] ?? null);
                            echo "
                    </div>
                  ";
                        }
                        // line 383
                        echo "                </div>
              </div>
              ";
                    }
                    // line 386
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 386)) {
                        // line 387
                        echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 389
                        echo ($context["text_otherpayment"] ?? null);
                        echo "\">";
                        echo ($context["text_otherpayment"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea data-placeholder=\"";
                        // line 392
                        echo ($context["text_bankinfo"] ?? null);
                        echo "\" class=\"form-control\" name=\"otherpayment\">";
                        echo (($__internal_compile_37 = ($context["partner"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["otherpayment"] ?? null) : null);
                        echo "</textarea>
                </div>
              </div>
              ";
                    }
                    // line 396
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 396)) {
                        // line 397
                        echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 399
                        echo ($context["text_taxinfo"] ?? null);
                        echo "\">";
                        echo ($context["text_taxinfo"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea data-placeholder=\"";
                        // line 402
                        echo ($context["text_taxinfo"] ?? null);
                        echo "\" class=\"form-control\" name=\"taxinfo\">";
                        echo (($__internal_compile_38 = ($context["partner"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["taxinfo"] ?? null) : null);
                        echo "</textarea>
                </div>
              </div>
              ";
                    }
                    // line 406
                    echo "            </div>
            ";
                }
                // line 408
                echo "            ";
                if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && ($context["marketplace_google_analytic_seller_status"] ?? null))) {
                    // line 409
                    echo "            <div class=\"tab-pane\" id=\"tab-analytics\">
                <div class=\"form-group\">
                    <label for=\"input-analytic-id\" class=\"col-sm-3 control-label\">";
                    // line 411
                    echo ($context["entry_analytic_id"] ?? null);
                    echo "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"google_analytic_id\" placeholder=\"";
                    // line 413
                    echo ($context["entry_analytic_id"] ?? null);
                    echo "\" value=\"";
                    echo (($__internal_compile_39 = ($context["partner"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["google_analytic_id"] ?? null) : null);
                    echo "\">
                    </div>
                  </div>
            </div>
            ";
                }
                // line 418
                echo "          </div>
          ";
            } else {
                // line 420
                echo "            <div class=\"text-danger\">
              ";
                // line 421
                echo ($context["error_warning_authenticate"] ?? null);
                echo "
            </div>
          ";
            }
            // line 424
            echo "      </form>
      ";
        } else {
            // line 426
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["warning_become_seller"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button> </div>
      ";
        }
        // line 428
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 429
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script src=\"catalog/view/javascript/wk_common.js\"></script>
<script src=\"admin/view/javascript/color-picker/js/bootstrap-colorpicker.min.js\"></script>
<link href=\"admin/view/javascript/color-picker/css/bootstrap-colorpicker.min.css\" rel=\"stylesheet\">
<script>
  \$('#input-shortprofile, #input-companydescription').summernote({
    height: 300,
  });
  \$('#button-upload-achivement').on('click', function() {
    \$('input[name=\\'seller_achivments\\']').trigger('click');
  });
  \$(\"#country\").change(function() {
    var scr='image/flags/'+\$(this).val().toLowerCase()+'.png';
    \$('.wk_countrylogo').attr('src',scr)
    \$('#countryLogo').val(scr);
  });

  \$(function(){
    \$('.bgcolorpicker').colorpicker({'format':'hex'});
  });

 \$(function() {
    \$(\"input[name='seller_achivments']\").on(\"change\", function() {
      \$('.achiv').remove();
     var filethis =\$(\"input[name='seller_achivments']\");
        \$.this = this;
         var files = !!this.files ? this.files : [];
         var flag = false;
         if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
          var typefie = ['application/pdf','image/png','image/jpg','image/jpeg'];
         //var typefie = 'application/pdf';
         filethis.parent().removeClass('has-success');
         filethis.parent().removeClass('has-error');
         // check file extension
         if (typeof files[0].name !=='undefined' || typeof files[0].name !=='null'){
           namesFile = files[0].name;
           namesExtens = namesFile.split('.');
           if(namesExtens.length == 2){
              flag = true;
           }
         }
         if(flag){ 
           var count=0;
           for( let i = 0; i<typefie.length; i++){
            count++;
              if (files[0].type === typefie[i]){
                 var reader = new FileReader(); // instance of the FileReader
               reader.readAsDataURL(files[0]);
               \$(this).parent().addClass('has-success');
               var massg = files[0].name;
               massg += \"<br>";
        // line 480
        echo ($context["text_valid_achive"] ?? null);
        echo "\";
               \$(this).parent().parent().after('<div class=\"form-row text-success achiv\">'+massg+'</div>');
              }
           }
            if(count==1) {
             \$(this).after('<div class=\"text-danger achiv\"> ";
        // line 485
        echo ($context["text_valid_files_extension"] ?? null);
        echo "</div>');
             \$(this).parent().addClass('has-error');
              filethis.replaceWith(filethis.val('').clone(true))
           }
         } else {
           \$(this).after('<div class=\"text-danger achiv\"> ";
        // line 490
        echo ($context["text_valid_multiple_extension"] ?? null);
        echo "</div>');
           \$(this).parent().addClass('has-error');
            filethis.replaceWith(filethis.val('').clone(true))
         }

     });
  })

</script>
";
        // line 499
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1085 => 499,  1073 => 490,  1065 => 485,  1057 => 480,  1003 => 429,  998 => 428,  992 => 426,  988 => 424,  982 => 421,  979 => 420,  975 => 418,  965 => 413,  960 => 411,  956 => 409,  953 => 408,  949 => 406,  940 => 402,  932 => 399,  928 => 397,  925 => 396,  916 => 392,  908 => 389,  904 => 387,  901 => 386,  896 => 383,  890 => 380,  887 => 379,  885 => 378,  881 => 377,  873 => 374,  867 => 370,  861 => 367,  858 => 366,  856 => 365,  852 => 364,  844 => 361,  838 => 357,  832 => 354,  829 => 353,  827 => 352,  823 => 351,  815 => 348,  811 => 346,  809 => 345,  803 => 342,  800 => 341,  798 => 340,  790 => 334,  784 => 332,  779 => 330,  775 => 329,  770 => 328,  768 => 327,  760 => 322,  756 => 321,  752 => 320,  744 => 314,  738 => 311,  735 => 310,  733 => 309,  723 => 304,  717 => 300,  710 => 296,  705 => 294,  702 => 293,  699 => 292,  691 => 287,  686 => 285,  681 => 283,  672 => 279,  668 => 277,  665 => 276,  657 => 271,  652 => 269,  647 => 267,  639 => 264,  636 => 263,  633 => 262,  625 => 257,  616 => 253,  613 => 252,  610 => 251,  603 => 246,  597 => 245,  590 => 244,  587 => 243,  579 => 241,  573 => 240,  568 => 238,  564 => 237,  555 => 233,  551 => 231,  548 => 230,  541 => 226,  533 => 223,  529 => 221,  526 => 220,  519 => 216,  511 => 213,  507 => 211,  504 => 210,  497 => 206,  489 => 203,  485 => 201,  482 => 200,  475 => 196,  467 => 193,  463 => 191,  460 => 190,  453 => 186,  445 => 183,  441 => 181,  439 => 180,  435 => 178,  429 => 175,  426 => 174,  424 => 173,  420 => 172,  412 => 169,  408 => 167,  401 => 163,  396 => 161,  393 => 160,  390 => 159,  376 => 154,  366 => 153,  359 => 149,  356 => 148,  353 => 147,  345 => 142,  340 => 140,  335 => 138,  327 => 135,  324 => 134,  322 => 133,  318 => 131,  312 => 128,  309 => 127,  307 => 126,  303 => 125,  296 => 123,  289 => 119,  281 => 116,  273 => 111,  265 => 108,  257 => 103,  249 => 100,  241 => 95,  236 => 92,  230 => 90,  227 => 89,  225 => 88,  219 => 86,  217 => 85,  213 => 84,  210 => 83,  203 => 80,  200 => 79,  198 => 78,  194 => 77,  190 => 76,  182 => 73,  178 => 72,  172 => 71,  168 => 70,  162 => 68,  160 => 67,  153 => 66,  150 => 65,  147 => 64,  144 => 63,  141 => 62,  138 => 61,  135 => 60,  133 => 59,  128 => 58,  122 => 56,  119 => 55,  113 => 53,  111 => 52,  108 => 51,  97 => 49,  93 => 48,  89 => 46,  47 => 6,  43 => 4,  41 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/profile.twig", "");
    }
}
