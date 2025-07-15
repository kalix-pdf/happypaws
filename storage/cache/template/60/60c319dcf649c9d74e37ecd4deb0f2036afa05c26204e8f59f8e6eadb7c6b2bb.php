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
class __TwigTemplate_b927dea8ea5e50f460b59c2cc7094a43dd7a8e75657da33237b022f8a099ccaf extends Template
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
        echo ($context["separate_column_left"] ?? null);
        echo "
";
        // line 2
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 3
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 5
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
        // line 45
        echo "
  <ul class=\"breadcrumb\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 48
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
        // line 50
        echo "  </ul>
  ";
        // line 51
        if (($context["error_warning"] ?? null)) {
            // line 52
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 55
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 57
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 58
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 59
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 60
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 61
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 64
            echo "    ";
        }
        // line 65
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 66
        if (($context["chkIsPartner"] ?? null)) {
            // line 67
            echo "      <h1>";
            echo ($context["heading_title"] ?? null);
            echo "
        <div class=\"pull-right\">
          <a href=\"";
            // line 69
            echo ($context["config"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"configuration\" class=\"btn btn-warning\" target=\"_blank\"><i class=\"fa fa-cog\"></i></a>
          <a href=\"";
            // line 70
            echo ($context["view_profile"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_view_profile"] ?? null);
            echo "\" class=\"btn btn-success\" target=\"_blank\"><i class=\"fa fa-user\"></i></a>
          <button type=\"submit\" form=\"form-profile\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
            // line 72
            echo ($context["back"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_back"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </h1>
      <form action=\"";
            // line 75
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-profile\" class=\"form-horizontal\">
          <legend><i class=\"fa fa-list\"></i> ";
            // line 76
            echo ($context["text_account_information"] ?? null);
            echo "</legend>
          ";
            // line 77
            if (($context["isMember"] ?? null)) {
                // line 78
                echo "          ";
                if ((array_key_exists("allowed", $context) && ($context["allowed"] ?? null))) {
                    // line 79
                    echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo ($context["text_profile_info"] ?? null);
                    echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            </div>
          ";
                }
                // line 82
                echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-profile_details\" data-toggle=\"tab\">";
                // line 83
                echo ($context["tab_profile_details"] ?? null);
                echo "</a></li>
            ";
                // line 84
                if (((twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 84) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 84)) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 84))) {
                    // line 85
                    echo "              <li><a href=\"#tab-paymentmode\" data-toggle=\"tab\">";
                    echo ($context["tab_paymentmode"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 87
                echo "            ";
                // line 88
                echo "            ";
                if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && ($context["marketplace_google_analytic_seller_status"] ?? null))) {
                    // line 89
                    echo "            <li><a href=\"#tab-analytics\" data-toggle=\"tab\">";
                    echo ($context["tab_analytics"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 91
                echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-profile_details\">
              <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                // line 94
                echo ($context["text_general"] ?? null);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-firstname\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 99
                echo ($context["text_firstname"] ?? null);
                echo "\">";
                echo ($context["text_firstname"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"firstname\" value=\"";
                // line 102
                echo (($__internal_compile_2 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["firstname"] ?? null) : null);
                echo "\" id=\"input-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-lastname\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 107
                echo ($context["text_lastname"] ?? null);
                echo "\">";
                echo ($context["text_lastname"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"lastname\" value=\"";
                // line 110
                echo (($__internal_compile_3 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["lastname"] ?? null) : null);
                echo "\" id=\"input-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-email\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 115
                echo ($context["text_email"] ?? null);
                echo "\">";
                echo ($context["text_email"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input disabled type=\"text\" name=\"email\" value=\"";
                // line 118
                echo (($__internal_compile_4 = ($context["customer_details"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["email"] ?? null) : null);
                echo "\" id=\"input-email\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-3 control-label\" for=\"input-screenname\"><span data-toggle=\"tooltip\" title=\"";
                // line 122
                echo ($context["text_sef_url"] ?? null);
                echo "\">";
                echo ($context["text_screen_name"] ?? null);
                echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"screenName\" value=\"";
                // line 124
                echo (($__internal_compile_5 = ($context["partner"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["screenname"] ?? null) : null);
                echo "\"  id=\"input-screenname\" class=\"form-control\" />
                  ";
                // line 125
                if ((array_key_exists("screenname_error", $context) && ($context["screenname_error"] ?? null))) {
                    // line 126
                    echo "                    <div class=\"text-danger\">
                        ";
                    // line 127
                    echo ($context["screenname_error"] ?? null);
                    echo "
                    </div>
                  ";
                }
                // line 130
                echo "                </div>
              </div>
              ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "avatar", [], "array", true, true, false, 132)) {
                    // line 133
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-avatar\"><span data-toggle=\"tooltip\" title=\"";
                    // line 134
                    echo ($context["hover_avatar"] ?? null);
                    echo "\">";
                    echo ($context["text_avatar"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"avatar-thumb-image\" src=\"";
                    // line 137
                    echo (($__internal_compile_6 = ($context["partner"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["avatar"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"avatar\" value=\"";
                    // line 139
                    echo (($__internal_compile_7 = ($context["partner"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["avatar_img"] ?? null) : null);
                    echo "\" id=\"avatar-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">";
                    // line 141
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 146
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "gender", [], "array", true, true, false, 146)) {
                    // line 147
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-gender\">";
                    // line 148
                    echo ($context["text_gender"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"gender\" class=\"form-control\">
                    <option value=\"#\"></option>
                    <option value=\"M\" ";
                    // line 152
                    if (((($__internal_compile_8 = ($context["partner"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["gender"] ?? null) : null) == "M")) {
                        echo " ";
                        echo "selected";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_male"] ?? null);
                    echo "</option>
                    <option value=\"F\" ";
                    // line 153
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
                // line 158
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "shortprofile", [], "array", true, true, false, 158)) {
                    // line 159
                    echo "              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-shortprofile\">";
                    // line 160
                    echo ($context["text_short_profile"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <textarea name=\"shortProfile\" id=\"input-shortprofile\" class=\"form-control\">";
                    // line 162
                    echo (($__internal_compile_10 = ($context["partner"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["shortprofile"] ?? null) : null);
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 166
                echo "              <div class=\"form-group required\">
                <label class=\"col-sm-3 control-label\" for=\"input-companyName\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 168
                echo ($context["text_company_name"] ?? null);
                echo "\">";
                echo ($context["text_company_name"] ?? null);
                echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"companyName\" value=\"";
                // line 171
                echo (($__internal_compile_11 = ($context["partner"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["companyname"] ?? null) : null);
                echo "\" id=\"input-companyName\" class=\"form-control\" />
                  ";
                // line 172
                if ((array_key_exists("companyname_error", $context) && ($context["companyname_error"] ?? null))) {
                    // line 173
                    echo "                    <div class=\"text-danger\">
                        ";
                    // line 174
                    echo ($context["companyname_error"] ?? null);
                    echo "
                    </div>
                  ";
                }
                // line 177
                echo "                </div>
              </div>
              ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "twitterid", [], "array", true, true, false, 179)) {
                    // line 180
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-twitterId\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 182
                    echo ($context["text_twitter_id"] ?? null);
                    echo "\">";
                    echo ($context["text_twitter_id"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"twitterId\" value=\"";
                    // line 185
                    echo (($__internal_compile_12 = ($context["partner"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["twitterid"] ?? null) : null);
                    echo "\" id=\"input-twitterId\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 189
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "facebookid", [], "array", true, true, false, 189)) {
                    // line 190
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-facebookId\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 192
                    echo ($context["text_facebook_id"] ?? null);
                    echo "\">";
                    echo ($context["text_facebook_id"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"facebookId\" value=\"";
                    // line 195
                    echo (($__internal_compile_13 = ($context["partner"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["facebookid"] ?? null) : null);
                    echo "\" id=\"input-facebookId\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 199
                echo "                 ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "youtube", [], "array", true, true, false, 199)) {
                    // line 200
                    echo "                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-youtube\">
                      <span data-toggle=\"tooltip\" title=\"";
                    // line 202
                    echo ($context["text_youtube_id"] ?? null);
                    echo "\">";
                    echo ($context["text_youtube_id"] ?? null);
                    echo "</span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"youtube\" value=\"";
                    // line 205
                    echo (($__internal_compile_14 = ($context["partner"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["youtube"] ?? null) : null);
                    echo "\" id=\"input-youtube\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
                }
                // line 209
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "instagram", [], "array", true, true, false, 209)) {
                    // line 210
                    echo "                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-instagram\">
                      <span data-toggle=\"tooltip\" title=\"";
                    // line 212
                    echo ($context["text_instagram_id"] ?? null);
                    echo "\">";
                    echo ($context["text_instagram_id"] ?? null);
                    echo "</span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"instagram\" value=\"";
                    // line 215
                    echo (($__internal_compile_15 = ($context["partner"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["instagram"] ?? null) : null);
                    echo "\" id=\"input-instagram\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
                }
                // line 219
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companylocality", [], "array", true, true, false, 219)) {
                    // line 220
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companyLocality\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 222
                    echo ($context["text_company_locality"] ?? null);
                    echo "\">";
                    echo ($context["text_company_locality"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"companyLocality\" value=\"";
                    // line 225
                    echo (($__internal_compile_16 = ($context["partner"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["companylocality"] ?? null) : null);
                    echo "\" id=\"input-companyLocality\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 229
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "country", [], "array", true, true, false, 229)) {
                    // line 230
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-countryLogo\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 232
                    echo ($context["text_country_logo"] ?? null);
                    echo "\">";
                    echo ($context["text_country_logo"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group\"><span class=\"input-group-addon\">
                    <img class=\"wk_countrylogo\" src=\"";
                    // line 236
                    echo (("image/flags/" . twig_lower_filter($this->env, (($__internal_compile_17 = ($context["partner"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["country"] ?? null) : null))) . ".png");
                    echo "\" /></span>
                    <input id=\"countryLogo\" class=\"form-control\" type=\"hidden\" name=\"countryLogo\" value=\"";
                    // line 237
                    echo (($__internal_compile_18 = ($context["partner"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["countrylogo"] ?? null) : null);
                    echo "\"/>
                    <select id=\"country\" class=\"form-control\" name=\"country\" >
                      ";
                    // line 239
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["countr"]) {
                        echo " ";
                        if (((($__internal_compile_19 = ($context["partner"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["country"] ?? null) : null) == (($__internal_compile_20 = $context["countr"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["iso_code_2"] ?? null) : null))) {
                            // line 240
                            echo "                      <option value=\"";
                            echo (($__internal_compile_21 = $context["countr"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["iso_code_2"] ?? null) : null);
                            echo "\" selected>";
                            echo (($__internal_compile_22 = $context["countr"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null);
                            echo "</option>
                      ";
                        } else {
                            // line 242
                            echo "
                      <option value=\"";
                            // line 243
                            echo (($__internal_compile_23 = $context["countr"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["iso_code_2"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_compile_24 = $context["countr"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null);
                            echo "</option>
                        ";
                        }
                        // line 244
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['countr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "                    </select>
                  </div>
                </div>
              </div>
              ";
                }
                // line 250
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "backgroundcolor", [], "array", true, true, false, 250)) {
                    // line 251
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-backgroundcolor\"><span data-toggle=\"tooltip\" title=\"";
                    // line 252
                    echo ($context["text_theme_background_color"] ?? null);
                    echo "\">";
                    echo ($context["text_theme_background_color"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group bgcolorpicker\">
                    <span class=\"input-group-addon\"><i></i></span>
                    <input type=\"text\" name=\"backgroundcolor\" value=\"";
                    // line 256
                    echo (($__internal_compile_25 = ($context["partner"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["backgroundcolor"] ?? null) : null);
                    echo "\"  id=\"input-backgroundcolor\" class=\"form-control\" />
                  </div>
                </div>
              </div>
              ";
                }
                // line 261
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companybanner", [], "array", true, true, false, 261)) {
                    // line 262
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companybanner\"><span data-toggle=\"tooltip\" title=\"";
                    // line 263
                    echo ($context["hover_banner"] ?? null);
                    echo "\">";
                    echo ($context["text_company_banner"] ?? null);
                    echo "</span></label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"companybanner-thumb-image\" src=\"";
                    // line 266
                    echo (($__internal_compile_26 = ($context["partner"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["companybanner"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"companybanner\" value=\"";
                    // line 268
                    echo (($__internal_compile_27 = ($context["partner"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["companybanner_img"] ?? null) : null);
                    echo "\" id=\"companybanner-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\" >";
                    // line 270
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 275
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companylogo", [], "array", true, true, false, 275)) {
                    // line 276
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companylogo\">
                  <span data-toggle=\"tooltip\" title=\"";
                    // line 278
                    echo ($context["hover_company_logo"] ?? null);
                    echo "\">";
                    echo ($context["text_company_logo"] ?? null);
                    echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <div style=\"width:110px;height:110px;overflow:hidden\" class=\"img-thumbnail wk_upload_img\">
                    <img id=\"companylogo-thumb-image\" src=\"";
                    // line 282
                    echo (($__internal_compile_28 = ($context["partner"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["companylogo"] ?? null) : null);
                    echo "\" alt=\"\" title=\"\"/>
                  </div>
                  <input type=\"hidden\" name=\"companylogo\" value=\"";
                    // line 284
                    echo (($__internal_compile_29 = ($context["partner"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["companylogo_img"] ?? null) : null);
                    echo "\" id=\"companylogo-target-image\"/>
                  <div class=\"btn-group imgoption\">
                    <button class=\"btn btn-danger btn-sm delete_img\" type=\"button\">";
                    // line 286
                    echo ($context["text_remove"] ?? null);
                    echo "</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 291
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "companydescription", [], "array", true, true, false, 291)) {
                    // line 292
                    echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-companydescription\">";
                    // line 293
                    echo ($context["text_company_description"] ?? null);
                    echo "</label>
                <div class=\"col-sm-9\">
                  <textarea name=\"companyDescription\" id=\"input-companydescription\" class=\"form-control\">";
                    // line 295
                    echo (($__internal_compile_30 = ($context["partner"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["companydescription"] ?? null) : null);
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 299
                echo "            </div>
            <div class=\"tab-pane\" id=\"tab-achivments\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-pdf\">
                    <span data-toggle=\"tooltip\" title=\"";
                // line 303
                echo ($context["entry_pdf"] ?? null);
                echo "\">";
                echo ($context["entry_pdf"] ?? null);
                echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <button type=\"button\" id=\"button-upload-achivement\" data-loading-text=\"Loading...\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Upload</button>
                    <input type=\"file\" class=\"hide\" name=\"seller_achivments\" />
                    ";
                // line 308
                if ((array_key_exists("seller_achivments_error", $context) && ($context["seller_achivments_error"] ?? null))) {
                    // line 309
                    echo "                      <div class=\"text-danger\">
                          ";
                    // line 310
                    echo ($context["seller_achivments_error"] ?? null);
                    echo "
                      </div>
                    ";
                }
                // line 313
                echo "                  </div>
                </div>
                  <div class=\"table-responsive\">
                   <table class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-center\">";
                // line 319
                echo ($context["text_aid"] ?? null);
                echo "</td>
                        <td class=\"text-center\">";
                // line 320
                echo ($context["text_aname"] ?? null);
                echo "</td>
                        <td class=\"text-center\">";
                // line 321
                echo ($context["text_action"] ?? null);
                echo "</td>
                     </tr>
                   </thead>
                   <tbody>
                      <tr>
                       ";
                // line 326
                if ((array_key_exists("achivment", $context) &&  !twig_test_empty(($context["achivment"] ?? null)))) {
                    // line 327
                    echo "                         <td class=\"text-center\">";
                    echo (($__internal_compile_31 = ($context["achivment"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null);
                    echo "</td>
                         <td class=\"text-center\">";
                    // line 328
                    echo (($__internal_compile_32 = ($context["achivment"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["path"] ?? null) : null);
                    echo "</td>
                         <td class=\"text-center\"><a href=\"";
                    // line 329
                    echo (($__internal_compile_33 = ($context["achivment"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["filepath"] ?? null) : null);
                    echo "\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-eye\"> </i></a></td>
                      ";
                } else {
                    // line 331
                    echo "                        <td class=\"text-center\" colspan=\"5\">";
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
                      ";
                }
                // line 333
                echo "                     </tr>
                   </tbody>
                 </table>
               </div>
            </div>

            ";
                // line 339
                if (((twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 339) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 339)) || twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 339))) {
                    // line 340
                    echo "            <div class=\"tab-pane\" id=\"tab-paymentmode\">
              <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>";
                    // line 341
                    echo ($context["text_paymentmode"] ?? null);
                    echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              </div>
              ";
                    // line 344
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "paypalid", [], "array", true, true, false, 344)) {
                        // line 345
                        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-paypalfirst\">
                    <span data-toggle=\"tooltip\" title=\"";
                        // line 347
                        echo ($context["help_paypal_firstname"] ?? null);
                        echo "\">";
                        echo ((($context["text_paypal_"] ?? null) . " ") . ($context["text_firstname"] ?? null));
                        echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"paypalfirst\" value=\"";
                        // line 350
                        echo (($__internal_compile_34 = ($context["partner"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["paypalfirst"] ?? null) : null);
                        echo "\" id=\"input-paypalfirst\" class=\"form-control\" />
                     ";
                        // line 351
                        if (($context["firstname_error"] ?? null)) {
                            // line 352
                            echo "                      <div class=\"text-danger\">
                          ";
                            // line 353
                            echo ($context["firstname_error"] ?? null);
                            echo "
                      </div>
                    ";
                        }
                        // line 356
                        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-paypallast\">
                    <span data-toggle=\"tooltip\" title=\"";
                        // line 360
                        echo ($context["help_paypal_lastname"] ?? null);
                        echo "\">";
                        echo ((($context["text_paypal_"] ?? null) . " ") . ($context["text_lastname"] ?? null));
                        echo "</span>
                  </label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"paypallast\" value=\"";
                        // line 363
                        echo (($__internal_compile_35 = ($context["partner"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["paypallast"] ?? null) : null);
                        echo "\" id=\"input-paypallast\" class=\"form-control\" />
                      ";
                        // line 364
                        if (($context["lastname_error"] ?? null)) {
                            // line 365
                            echo "                        <div class=\"text-danger\">
                            ";
                            // line 366
                            echo ($context["lastname_error"] ?? null);
                            echo "
                        </div>
                      ";
                        }
                        // line 369
                        echo "                  </div>
                </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 373
                        echo ($context["text_payment_detail"] ?? null);
                        echo "\">";
                        echo ($context["text_payment_detail"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"paypalid\" value=\"";
                        // line 376
                        echo (($__internal_compile_36 = ($context["partner"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["paypalid"] ?? null) : null);
                        echo "\" id=\"input-paypalid\" class=\"form-control\" />
                  ";
                        // line 377
                        if ((array_key_exists("paypal_error", $context) && ($context["paypal_error"] ?? null))) {
                            // line 378
                            echo "                    <div class=\"text-danger\">
                        ";
                            // line 379
                            echo ($context["paypal_error"] ?? null);
                            echo "
                    </div>
                  ";
                        }
                        // line 382
                        echo "                </div>
              </div>
              ";
                    }
                    // line 385
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "otherpayment", [], "array", true, true, false, 385)) {
                        // line 386
                        echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 388
                        echo ($context["text_otherpayment"] ?? null);
                        echo "\">";
                        echo ($context["text_otherpayment"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea data-placeholder=\"";
                        // line 391
                        echo ($context["text_bankinfo"] ?? null);
                        echo "\" class=\"form-control\" name=\"otherpayment\">";
                        echo (($__internal_compile_37 = ($context["partner"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["otherpayment"] ?? null) : null);
                        echo "</textarea>
                </div>
              </div>
              ";
                    }
                    // line 395
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["allowed"] ?? null), "taxinfo", [], "array", true, true, false, 395)) {
                        // line 396
                        echo "              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-paypalid\">
                  <span data-toggle=\"tooltip\" title=\"";
                        // line 398
                        echo ($context["text_taxinfo"] ?? null);
                        echo "\">";
                        echo ($context["text_taxinfo"] ?? null);
                        echo "</span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea data-placeholder=\"";
                        // line 401
                        echo ($context["text_taxinfo"] ?? null);
                        echo "\" class=\"form-control\" name=\"taxinfo\">";
                        echo (($__internal_compile_38 = ($context["partner"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["taxinfo"] ?? null) : null);
                        echo "</textarea>
                </div>
              </div>
              ";
                    }
                    // line 405
                    echo "            </div>
            ";
                }
                // line 407
                echo "            ";
                if ((array_key_exists("marketplace_google_analytic_seller_status", $context) && ($context["marketplace_google_analytic_seller_status"] ?? null))) {
                    // line 408
                    echo "            <div class=\"tab-pane\" id=\"tab-analytics\">
                <div class=\"form-group\">
                    <label for=\"input-analytic-id\" class=\"col-sm-3 control-label\">";
                    // line 410
                    echo ($context["entry_analytic_id"] ?? null);
                    echo "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"google_analytic_id\" placeholder=\"";
                    // line 412
                    echo ($context["entry_analytic_id"] ?? null);
                    echo "\" value=\"";
                    echo (($__internal_compile_39 = ($context["partner"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["google_analytic_id"] ?? null) : null);
                    echo "\">
                    </div>
                  </div>
            </div>
            ";
                }
                // line 417
                echo "          </div>
          ";
            } else {
                // line 419
                echo "            <div class=\"text-danger\">
              ";
                // line 420
                echo ($context["error_warning_authenticate"] ?? null);
                echo "
            </div>
          ";
            }
            // line 423
            echo "      </form>
      ";
        } else {
            // line 425
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["warning_become_seller"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button> </div>
      ";
        }
        // line 427
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 428
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
        // line 479
        echo ($context["text_valid_achive"] ?? null);
        echo "\";
               \$(this).parent().parent().after('<div class=\"form-row text-success achiv\">'+massg+'</div>');
              }
           }
            if(count==1) {
             \$(this).after('<div class=\"text-danger achiv\"> ";
        // line 484
        echo ($context["text_valid_files_extension"] ?? null);
        echo "</div>');
             \$(this).parent().addClass('has-error');
              filethis.replaceWith(filethis.val('').clone(true))
           }
         } else {
           \$(this).after('<div class=\"text-danger achiv\"> ";
        // line 489
        echo ($context["text_valid_multiple_extension"] ?? null);
        echo "</div>');
           \$(this).parent().addClass('has-error');
            filethis.replaceWith(filethis.val('').clone(true))
         }

     });
  })

</script>
";
        // line 498
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
        return array (  1086 => 498,  1074 => 489,  1066 => 484,  1058 => 479,  1004 => 428,  999 => 427,  993 => 425,  989 => 423,  983 => 420,  980 => 419,  976 => 417,  966 => 412,  961 => 410,  957 => 408,  954 => 407,  950 => 405,  941 => 401,  933 => 398,  929 => 396,  926 => 395,  917 => 391,  909 => 388,  905 => 386,  902 => 385,  897 => 382,  891 => 379,  888 => 378,  886 => 377,  882 => 376,  874 => 373,  868 => 369,  862 => 366,  859 => 365,  857 => 364,  853 => 363,  845 => 360,  839 => 356,  833 => 353,  830 => 352,  828 => 351,  824 => 350,  816 => 347,  812 => 345,  810 => 344,  804 => 341,  801 => 340,  799 => 339,  791 => 333,  785 => 331,  780 => 329,  776 => 328,  771 => 327,  769 => 326,  761 => 321,  757 => 320,  753 => 319,  745 => 313,  739 => 310,  736 => 309,  734 => 308,  724 => 303,  718 => 299,  711 => 295,  706 => 293,  703 => 292,  700 => 291,  692 => 286,  687 => 284,  682 => 282,  673 => 278,  669 => 276,  666 => 275,  658 => 270,  653 => 268,  648 => 266,  640 => 263,  637 => 262,  634 => 261,  626 => 256,  617 => 252,  614 => 251,  611 => 250,  604 => 245,  598 => 244,  591 => 243,  588 => 242,  580 => 240,  574 => 239,  569 => 237,  565 => 236,  556 => 232,  552 => 230,  549 => 229,  542 => 225,  534 => 222,  530 => 220,  527 => 219,  520 => 215,  512 => 212,  508 => 210,  505 => 209,  498 => 205,  490 => 202,  486 => 200,  483 => 199,  476 => 195,  468 => 192,  464 => 190,  461 => 189,  454 => 185,  446 => 182,  442 => 180,  440 => 179,  436 => 177,  430 => 174,  427 => 173,  425 => 172,  421 => 171,  413 => 168,  409 => 166,  402 => 162,  397 => 160,  394 => 159,  391 => 158,  377 => 153,  367 => 152,  360 => 148,  357 => 147,  354 => 146,  346 => 141,  341 => 139,  336 => 137,  328 => 134,  325 => 133,  323 => 132,  319 => 130,  313 => 127,  310 => 126,  308 => 125,  304 => 124,  297 => 122,  290 => 118,  282 => 115,  274 => 110,  266 => 107,  258 => 102,  250 => 99,  242 => 94,  237 => 91,  231 => 89,  228 => 88,  226 => 87,  220 => 85,  218 => 84,  214 => 83,  211 => 82,  204 => 79,  201 => 78,  199 => 77,  195 => 76,  191 => 75,  183 => 72,  179 => 71,  173 => 70,  169 => 69,  163 => 67,  161 => 66,  154 => 65,  151 => 64,  148 => 63,  145 => 62,  142 => 61,  139 => 60,  136 => 59,  134 => 58,  129 => 57,  123 => 55,  120 => 54,  114 => 52,  112 => 51,  109 => 50,  98 => 48,  94 => 47,  90 => 45,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/profile.twig", "");
    }
}
