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

/* __string_template__5d1f85f7727ce2415dc4d5e53c2a8b85624461e3655d136c5d64800704f604fa */
class __TwigTemplate_84b9aaf0a681dc545f849e983779a36926296ba2d13bee406b37747cef425d59 extends Template
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
<style>
.width-100{width:100%!important}.sell-name-up{font-weight:700}.sell-name-up:hover,.text-white{color:#fff!important}.bg-seller-info{background-color:#004e73!important}.pl-10{padding-left:10px!important}.caption .vendor-div{text-align:center;display:block;background:#fff}a.text-dark{color:#6a6a6a;text-decoration:none}.caption .vendor-div:not(.first){font-size:12px;padding:0}.category-layout .product-thumb{background:#fff;border:1px solid #dde;padding:5px}.category-layout{padding:15px}.category-layout .product-thumb .caption{padding:10px 20px;min-height:105px} 
.wk-mp-text-hide {
    font-size: 14px;
    text-overflow: ellipsis;
    line-clamp: 2;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    margin-bottom: 2px;
}
</style>
<div class=\"container\">
  <div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"text-center\">
        <h1 class=\"text-info\">";
        // line 26
        echo ($context["sell_header"] ?? null);
        echo "</h1>
        <a href=\"index.php?route=account/register\" type=\"button\" class=\"btn btn-primary btn-lg\">
          ";
        // line 28
        echo ($context["sell_title"] ?? null);
        echo "
        </a>
      </div>
      <br/>
      ";
        // line 32
        if (($context["tabs"] ?? null)) {
            // line 33
            echo "      <ul class=\"nav nav-tabs\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 35
                echo "            <li ";
                if ( !$context["key"]) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo ("#tab-" . $context["key"]);
                echo "\" data-toggle=\"tab\">";
                echo (($__internal_compile_0 = $context["value"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["hrefValue"] ?? null) : null);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 40
                echo "          <div id=\"";
                echo ("tab-" . $context["key"]);
                echo "\" class=\"tab-pane ";
                if ( !$context["key"]) {
                    echo "active";
                }
                echo "\">";
                echo (($__internal_compile_1 = $context["value"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["description"] ?? null) : null);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </div>
      ";
        }
        // line 44
        echo "      <br/>
      
      
      
      ";
        // line 48
        if (($context["showpartners"] ?? null)) {
            // line 49
            echo "
        <div class=\"title-wrapper\">
            <h3 class=\"title module-title\">";
            // line 51
            echo ($context["text_long_time_seller"] ?? null);
            echo "</h3>\t\t
        </div>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 54
                echo "            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
              <div class=\"product-thumb\" ";
                // line 55
                if ( !(($__internal_compile_2 = $context["partner"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["thumb"] ?? null) : null)) {
                    echo " style=\"background-color:";
                    echo (((twig_get_attribute($this->env, $this->source, $context["partner"], "backgroundcolor", [], "array", true, true, false, 55) &&  !(null === (($__internal_compile_3 = $context["partner"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["backgroundcolor"] ?? null) : null)))) ? ((($__internal_compile_4 = $context["partner"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["backgroundcolor"] ?? null) : null)) : ("#004d73"));
                    echo "; width:220px; height:220px;\" ";
                }
                echo ">
                <div class=\"image-group\">
                  <div class=\"image\">
                    <a href=\"";
                // line 58
                echo (($__internal_compile_5 = $context["partner"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sellerHref"] ?? null) : null);
                echo "\" class=\"product-img \" title=\"\">
                      ";
                // line 59
                if ((($__internal_compile_6 = $context["partner"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null)) {
                    // line 60
                    echo "                        <div>
                          <img src=\"";
                    // line 61
                    echo (($__internal_compile_7 = $context["partner"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["thumb"] ?? null) : null);
                    echo "\" data-src=\"";
                    echo (($__internal_compile_8 = $context["partner"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["thumb"] ?? null) : null);
                    echo "\" width=\"250\" height=\"250\" alt=\"";
                    echo (($__internal_compile_9 = $context["partner"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
                    echo "\" class=\"img-responsive img-first lazyload lazyloaded\" data-loaded=\"true\">
                        </div>
                      ";
                }
                // line 64
                echo "                    </a>
                  </div>
                </div>

                <div class=\"caption\" ";
                // line 68
                if ((($__internal_compile_10 = $context["partner"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["country"] ?? null) : null)) {
                    echo " style=\"min-height: 120px;\" ";
                } else {
                    echo " style=\"min-height: 100px;\" ";
                }
                echo ">
                  <div class=\"vendor-div first\" ";
                // line 69
                if ((($__internal_compile_11 = $context["partner"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["country"] ?? null) : null)) {
                    echo " style=\"margin-top:-5px\" ; ";
                } else {
                    echo " style=\"margin-top:14px\" ; ";
                }
                echo ">
                    <a href=\"";
                // line 70
                echo (($__internal_compile_12 = $context["partner"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["sellerHref"] ?? null) : null);
                echo "\" class=\"wk-mp-text-hide\" title=\"";
                echo (($__internal_compile_13 = $context["partner"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
                echo "\" >";
                echo (($__internal_compile_14 = $context["partner"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null);
                echo "</a>
                  </div>
                  <div class=\"vendor-div secnd\" ";
                // line 72
                if ( !(($__internal_compile_15 = $context["partner"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["country"] ?? null) : null)) {
                    echo " style=\"padding: 0 0 10px 0;\" ";
                }
                echo ">
                  ";
                // line 73
                if ((($__internal_compile_16 = $context["partner"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["country"] ?? null) : null)) {
                    // line 74
                    echo "                    <p class=\"\">";
                    echo ($context["text_location_mp"] ?? null);
                    echo "
                      <b class=\"font-weight-bold\">";
                    // line 75
                    echo (((($__internal_compile_17 = $context["partner"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["companylocality"] ?? null) : null)) ? (((($__internal_compile_18 = $context["partner"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["companylocality"] ?? null) : null) . ", ")) : (""));
                    echo "
                        ";
                    // line 76
                    echo (($__internal_compile_19 = $context["partner"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["country"] ?? null) : null);
                    echo "</b>
                    </p>
                  ";
                }
                // line 79
                echo "                  </div>
                  <div class=\"vendor-div third\">
                    ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                      <div class=\"rating ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 82) == " hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                        <div class=\"rating-stars\">
                          ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 85
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 85) < $context["i"])) {
                            // line 86
                            echo "                              <span class=\"fa fa-stack\">
                                <em class=\"fa fa-star-o fa-stack-2x\"></em>
                              </span>
                            ";
                        } else {
                            // line 90
                            echo "                              <span class=\"fa fa-stack\">
                                <em class=\"fa fa-star fa-stack-2x\"></em>
                                <em class=\"fa fa-star-o fa-stack-2x\"></em>
                              </span>
                            ";
                        }
                        // line 95
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                          <span>
                            ";
                    // line 97
                    if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 97)) {
                        // line 98
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 98);
                        echo "
                              ";
                        // line 99
                        echo ((("( " . twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 99)) . ($context["text_review"] ?? null)) . " )");
                        echo "
                            ";
                    } else {
                        // line 101
                        echo "                              ";
                        echo ($context["text_no_review"] ?? null);
                        echo "
                            ";
                    }
                    // line 103
                    echo "                          </span>
                        </div>
                      </div>
                    ";
                } else {
                    // line 107
                    echo "                      <div class=\"rating no-rating ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 107) == " hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                        <div class=\"rating-stars\">
                          ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 110
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 110) < $context["i"])) {
                            // line 111
                            echo "                              <span class=\"fa fa-stack\">
                                <em class=\"fa fa-star-o fa-stack-2x\"></em>
                              </span>
                            ";
                        } else {
                            // line 115
                            echo "                              <span class=\"fa fa-stack\">
                                <em class=\"fa fa-star fa-stack-2x\"></em>
                                <em class=\"fa fa-star-o fa-stack-2x\"></em>
                              </span>
                            ";
                        }
                        // line 120
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                          <span>
                            ";
                    // line 122
                    if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 122)) {
                        // line 123
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 123);
                        echo "
                              ";
                        // line 124
                        echo ((("( " . twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 124)) . ($context["text_review"] ?? null)) . " )");
                        echo "
                            ";
                    } else {
                        // line 126
                        echo "                              ";
                        echo ($context["text_no_review"] ?? null);
                        echo "
                            ";
                    }
                    // line 128
                    echo "                          </span>
                        </div>
                      </div>
                    ";
                }
                // line 132
                echo "
                  </div>
                  <div class=\"vendor-div fourth\">
                    <a
                      class=\"text-dark\" href=\"";
                // line 136
                echo (($__internal_compile_20 = $context["partner"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["sellerHref"] ?? null) : null);
                echo "\" title=\"";
                echo ($context["text_total_products"] ?? null);
                echo "\">
                      ";
                // line 138
                echo "                      <span class=\"btn-text text-dark\">";
                echo (($__internal_compile_21 = $context["partner"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["total_products"] ?? null) : null);
                echo "
                        ";
                // line 139
                echo ($context["text_products"] ?? null);
                echo "</span>
                    </a>
                  </div>


                </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "          </div>
          
        <script type=\"text/javascript\">
          \$('#carousel_wk_mp').swiper({
            mode: 'horizontal',
            slidesPerView: 4,
            breakpoints: {
              // when window width is >= 320px
              320: {
                slidesPerView: 1,
                // spaceBetween: 20
              },
              // when window width is >= 380px
              380: {
                slidesPerView: 1,
                // spaceBetween: 30
              },
              // when window width is >= 480px
              480: {
                slidesPerView: 2,
                // spaceBetween: 30
              },
              // when window width is >= 640px
              640: {
                slidesPerView: 3,
                // spaceBetween: 40
              }
            },
            pagination: '.carousel_wk_mp',
            paginationClickable: true,
            nextButton: '.carousel .swiper-button-next',
            prevButton: '.carousel .swiper-button-prev',
            // autoplay: 2500,
            // loop: true
          });
        </script>
      ";
        }
        // line 185
        echo "

      ";
        // line 187
        if (($context["showproducts"] ?? null)) {
            // line 188
            echo "      <h3><b>";
            echo ($context["text_latest_product"] ?? null);
            echo "</b></h3>
      <div class=\"row\">
        <div class=\"col-sm-2 hidden-xs\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 192
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 193
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        ";
            // line 199
            echo "        ";
            // line 204
            echo "        <div class=\"col-sm-2 col-sm-offset-2 text-right\">
          <label class=\"control-label\" for=\"input-sort\">";
            // line 205
            echo ($context["text_sort"] ?? null);
            echo "</label>
        </div>
        <div class=\"col-sm-4 text-right\">
          <select id=\"input-sort\" class=\"form-control col-sm-3\" onchange=\"location = this.value;\">
            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 210
                echo "            ";
                if (((($__internal_compile_22 = $context["sorts"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["value"] ?? null) : null) == ((($context["sort"] ?? null) . "-") . ($context["order"] ?? null)))) {
                    // line 211
                    echo "            <option value=\"";
                    echo (($__internal_compile_23 = $context["sorts"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["href"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_compile_24 = $context["sorts"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["text"] ?? null) : null);
                    echo "</option>
            ";
                } else {
                    // line 213
                    echo "            <option value=\"";
                    echo (($__internal_compile_25 = $context["sorts"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_26 = $context["sorts"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["text"] ?? null) : null);
                    echo "</option>
            ";
                }
                // line 215
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "          </select>
        </div>
        <div class=\"col-sm-1 text-right\">
          <label class=\"control-label\" for=\"input-limit\">";
            // line 219
            echo ($context["text_limit"] ?? null);
            echo "</label>
        </div>
        <div class=\"col-sm-1 text-right\">
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 224
                echo "            ";
                if (((($__internal_compile_27 = $context["limits"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["value"] ?? null) : null) == ($context["limit"] ?? null))) {
                    // line 225
                    echo "            <option value=\"";
                    echo (($__internal_compile_28 = $context["limits"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["href"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_compile_29 = $context["limits"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["text"] ?? null) : null);
                    echo "</option>
            ";
                } else {
                    // line 227
                    echo "            <option value=\"";
                    echo (($__internal_compile_30 = $context["limits"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_31 = $context["limits"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["text"] ?? null) : null);
                    echo "</option>
            ";
                }
                // line 229
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "          </select>
        </div>
      </div>
      <br>
      <div class=\"row\">
        ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latest"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 236
                echo "        <div class=\"product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12\">
          <div class=\"product-thumb seller-thumb\" id=\"";
                // line 237
                echo (($__internal_compile_32 = $context["product"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["product_id"] ?? null) : null);
                echo "\">
            <div class=\"image\"><a href=\"";
                // line 238
                echo (($__internal_compile_33 = $context["product"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["href"] ?? null) : null);
                echo "\"><img src=\"";
                echo (($__internal_compile_34 = $context["product"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_compile_35 = $context["product"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["name"] ?? null) : null);
                echo "\" title=\"";
                echo (($__internal_compile_36 = $context["product"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["name"] ?? null) : null);
                echo "\" class=\"img-responsive\" /></a></div>
            <div style=\"position: relative;\">
              <div class=\"caption\">
                <h4><a href=\"";
                // line 241
                echo (($__internal_compile_37 = $context["product"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_38 = $context["product"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["name"] ?? null) : null);
                echo "</a></h4>
                <p>";
                // line 242
                echo (($__internal_compile_39 = $context["product"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["description"] ?? null) : null);
                echo "</p>               
                ";
                // line 243
                if ((($__internal_compile_40 = $context["product"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["price"] ?? null) : null)) {
                    // line 244
                    echo "                <p class=\"price\">
                  ";
                    // line 245
                    if ( !(($__internal_compile_41 = $context["product"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["special"] ?? null) : null)) {
                        // line 246
                        echo "                  ";
                        echo (($__internal_compile_42 = $context["product"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["price"] ?? null) : null);
                        echo "
                  ";
                    } else {
                        // line 248
                        echo "                  <span class=\"price-new\">";
                        echo (($__internal_compile_43 = $context["product"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["special"] ?? null) : null);
                        echo "</span> <span class=\"price-old\">";
                        echo (($__internal_compile_44 = $context["product"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["price"] ?? null) : null);
                        echo "</span>
                  ";
                    }
                    // line 250
                    echo "                  ";
                    if ((($__internal_compile_45 = $context["product"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["tax"] ?? null) : null)) {
                        // line 251
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo (($__internal_compile_46 = $context["product"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["tax"] ?? null) : null);
                        echo "</span>
                  ";
                    }
                    // line 253
                    echo "                </p>
                ";
                }
                // line 255
                echo "                 ";
                if ((($__internal_compile_47 = $context["product"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["rating"] ?? null) : null)) {
                    // line 256
                    echo "                <div class=\"rating\">
                  ";
                    // line 257
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 258
                        echo "                  ";
                        if (((($__internal_compile_48 = $context["product"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["rating"] ?? null) : null) < $context["i"])) {
                            // line 259
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 261
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 263
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "                </div>
                ";
                }
                // line 266
                echo "              </div>
              ";
                // line 267
                if ((array_key_exists("showpartnerdetails", $context) && ($context["showpartnerdetails"] ?? null))) {
                    // line 268
                    echo "              <div id=\"wk_seller_info_container\" class=\"wk_seller_info\">
                <div style=\"padding: 10px;background-color: #f8f8f8;border-top: 8px solid orange;\">
                  <div id=\"wk_seller_info_profpic\">
                    <img src=\"";
                    // line 271
                    echo (($__internal_compile_49 = $context["product"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["avatar"] ?? null) : null);
                    echo "\" width=\"100%\" height=\"100%\" style=\"vertical-align:baseline;\">
                  </div>
                  <div id=\"wk_seller_info_box\">
                    <h4 style=\"margin-bottom: 15px;margin-top: 0px;font-size: 13px;\"><b>";
                    // line 274
                    echo ($context["text_seller"] ?? null);
                    echo "</b></h4>
                    <a href=\"";
                    // line 275
                    echo (($__internal_compile_50 = $context["product"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["sellerHref"] ?? null) : null);
                    echo "\"><p style=\"margin:0; line-height: 15px;\"><b>";
                    echo (($__internal_compile_51 = $context["product"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["seller_name"] ?? null) : null);
                    echo "</b></p></a>
                    ";
                    // line 276
                    if ((($__internal_compile_52 = $context["product"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["country"] ?? null) : null)) {
                        // line 277
                        echo "                    <p style=\"max-width:135px;line-height:14px;\">";
                        echo ($context["text_from"] ?? null);
                        echo "
                        <span data-toggle=\"tooltip\" title=\"";
                        // line 278
                        echo ($context["text_from"] ?? null);
                        echo "\"><i class=\"fa fa-home\"></i></span>
                        <b>";
                        // line 279
                        echo (($__internal_compile_53 = $context["product"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["country"] ?? null) : null);
                        echo "</b>
                      </p>
                    ";
                    }
                    // line 282
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 286
                echo "              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 287
                echo (($__internal_compile_54 = $context["product"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["product_id"] ?? null) : null);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 288
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo (($__internal_compile_55 = $context["product"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["product_id"] ?? null) : null);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 289
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo (($__internal_compile_56 = $context["product"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["product_id"] ?? null) : null);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 297
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 298
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 301
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 302
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>
var seller_display = function (data){
  thisid = data.currentTarget.id; //get id of current selector
  \$('#'+ thisid + ' .wk_seller_info').slideDown();
  \$('#'+ thisid).unbind('mouseenter');
}
var seller_hide = function (data){
  thisid = data.currentTarget.id; //get id of current selector
  \$('#'+ thisid + ' .wk_seller_info').slideUp('slow',function(){
    \$('.seller-thumb').bind('mouseenter',seller_display);
  });
}

\$('.seller-thumb').bind({'mouseenter' : seller_display,'mouseleave':seller_hide });

</script>
";
        // line 320
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__5d1f85f7727ce2415dc4d5e53c2a8b85624461e3655d136c5d64800704f604fa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 320,  767 => 302,  762 => 301,  756 => 298,  752 => 297,  748 => 295,  734 => 289,  728 => 288,  722 => 287,  719 => 286,  713 => 282,  707 => 279,  703 => 278,  698 => 277,  696 => 276,  690 => 275,  686 => 274,  680 => 271,  675 => 268,  673 => 267,  670 => 266,  666 => 264,  660 => 263,  656 => 261,  652 => 259,  649 => 258,  644 => 257,  641 => 256,  638 => 255,  634 => 253,  626 => 251,  623 => 250,  615 => 248,  609 => 246,  607 => 245,  604 => 244,  602 => 243,  598 => 242,  592 => 241,  580 => 238,  576 => 237,  573 => 236,  569 => 235,  562 => 230,  556 => 229,  548 => 227,  540 => 225,  537 => 224,  533 => 223,  526 => 219,  521 => 216,  515 => 215,  507 => 213,  499 => 211,  496 => 210,  492 => 209,  485 => 205,  482 => 204,  480 => 199,  474 => 193,  470 => 192,  462 => 188,  460 => 187,  456 => 185,  417 => 148,  402 => 139,  397 => 138,  391 => 136,  385 => 132,  379 => 128,  373 => 126,  368 => 124,  363 => 123,  361 => 122,  358 => 121,  352 => 120,  345 => 115,  339 => 111,  336 => 110,  332 => 109,  324 => 107,  318 => 103,  312 => 101,  307 => 99,  302 => 98,  300 => 97,  297 => 96,  291 => 95,  284 => 90,  278 => 86,  275 => 85,  271 => 84,  263 => 82,  261 => 81,  257 => 79,  251 => 76,  247 => 75,  242 => 74,  240 => 73,  234 => 72,  225 => 70,  217 => 69,  209 => 68,  203 => 64,  193 => 61,  190 => 60,  188 => 59,  184 => 58,  174 => 55,  171 => 54,  167 => 53,  162 => 51,  158 => 49,  156 => 48,  150 => 44,  146 => 42,  131 => 40,  127 => 39,  123 => 37,  108 => 35,  104 => 34,  101 => 33,  99 => 32,  92 => 28,  87 => 26,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  59 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5d1f85f7727ce2415dc4d5e53c2a8b85624461e3655d136c5d64800704f604fa", "");
    }
}
