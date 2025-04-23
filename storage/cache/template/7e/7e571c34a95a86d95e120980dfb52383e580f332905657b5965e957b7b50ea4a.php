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

/* __string_template__c5be8e702a72123f80c9ed4a5d417e2b2cc1109104de03f1cea2f334a31172ae */
class __TwigTemplate_4ba7e453749417e5b918df8811f4e9a3974b59ab004c5599819934b61184127d extends Template
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
.width-100{width:100%!important}.sell-name-up{font-weight:700}.sell-name-up:hover,.text-white{color:#fff!important}.bg-seller-info{background-color:#004e73!important}.pl-10{padding-left:10px!important}.caption .vendor-div{text-align:center;display:block;background:#fff}a.text-dark{color:#6a6a6a;text-decoration:none}.caption .vendor-div:not(.first){font-size:12px;padding:0}.category-layout .wk-product-thumb{background:#fff;border:1px solid #dde;padding:5px}.category-layout{padding:15px}.category-layout .product-thumb .caption{padding:10px 20px;min-height:105px} 
.product-thumb{overflow:hidden !important;}
.wk-mp-text-hide {
    font-size: 10px;
    font-family: Poppins, sans-serif;
    text-overflow: ellipsis;
    line-clamp: 2;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    margin-bottom: 2px;
}

@media(max-width:1192px) {
  .wk-mp-text-hide{
        width: 155px;
  }
}
@media(max-width:917px) {
  .wk-mp-text-hide{
        width: 105px;
  }
}
@media(max-width:768px) {
  .wk-mp-text-hide{
        width: 95px;
  }
}
</style>
<div class=\"title-wrapper\">
    <h3 class=\"title module-title\">";
        // line 33
        echo ($context["title"] ?? null);
        echo "</h3>\t\t
</div>
<div class=\"carousel swiper-viewport\">
  <div id=\"carousel_wk_mp\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 39
            echo "\t\t<div class=\"category-layout swiper-slide\">
\t\t\t<div class=\"product-thumb\" ";
            // line 40
            if ( !(($__internal_compile_0 = $context["partner"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["thumb"] ?? null) : null)) {
                echo " style=\"background-color:";
                echo (((twig_get_attribute($this->env, $this->source, $context["partner"], "backgroundcolor", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_1 = $context["partner"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["backgroundcolor"] ?? null) : null)))) ? ((($__internal_compile_2 = $context["partner"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["backgroundcolor"] ?? null) : null)) : ("#004d73"));
                echo "; width:220px; height:220px;\" ";
            }
            echo ">
\t\t\t\t<div class=\"image-group\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a href=\"";
            // line 43
            echo (($__internal_compile_3 = $context["partner"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sellerHref"] ?? null) : null);
            echo "\" class=\"product-img \" title=\"\">
\t\t\t\t\t\t\t";
            // line 44
            if ((($__internal_compile_4 = $context["partner"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["thumb"] ?? null) : null)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 46
                echo (($__internal_compile_5 = $context["partner"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["thumb"] ?? null) : null);
                echo "\" data-src=\"";
                echo (($__internal_compile_6 = $context["partner"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null);
                echo "\" width=\"250\" height=\"250\" alt=\"";
                echo (($__internal_compile_7 = $context["partner"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                echo "\" class=\"img-responsive img-first lazyload lazyloaded\" data-loaded=\"true\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<div class=\"vendor-div first\" ";
            // line 54
            if ((($__internal_compile_8 = $context["partner"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["country"] ?? null) : null)) {
                echo " style=\"margin-top:-5px\" ; ";
            } else {
                echo " style=\"margin-top:14px\" ; ";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 55
            echo (($__internal_compile_9 = $context["partner"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["sellerHref"] ?? null) : null);
            echo "\" class=\"wk-mp-text-hide\">";
            echo (($__internal_compile_10 = $context["partner"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"vendor-div secnd\" ";
            // line 57
            if ( !(($__internal_compile_11 = $context["partner"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["country"] ?? null) : null)) {
                echo " style=\"padding: 0 0 10px 0;\" ";
            }
            echo ">
\t\t\t\t\t";
            // line 58
            if ((($__internal_compile_12 = $context["partner"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["country"] ?? null) : null)) {
                // line 59
                echo "\t\t\t\t\t\t<p class=\"\">";
                echo "Location: ";
                echo "
\t\t\t\t\t\t\t<b class=\"font-weight-bold\">";
                // line 60
                echo (((($__internal_compile_13 = $context["partner"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["companylocality"] ?? null) : null)) ? (((($__internal_compile_14 = $context["partner"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["companylocality"] ?? null) : null) . ", ")) : (""));
                echo "
\t\t\t\t\t\t\t\t";
                // line 61
                echo (($__internal_compile_15 = $context["partner"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["country"] ?? null) : null);
                echo "</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"vendor-div third\">
\t\t\t\t\t\t";
            // line 66
            if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 66)) {
                // line 67
                echo "\t\t\t\t\t\t\t<div class=\"rating ";
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 67) == " hover")) {
                    echo "rating-hover";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"rating-stars\">
\t\t\t\t\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 70) < $context["i"])) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star-o fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star-o fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 83);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    echo ((("( " . twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 84)) . " Review") . " )");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo "No Review";
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t<div class=\"rating no-rating ";
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 92) == " hover")) {
                    echo "rating-hover";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"rating-stars\">
\t\t\t\t\t\t\t\t\t";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 95) < $context["i"])) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star-o fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-star-o fa-stack-2x\"></em>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_total", [], "any", false, false, false, 108);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 109
                    echo ((("( " . twig_get_attribute($this->env, $this->source, $context["partner"], "feedback_count", [], "any", false, false, false, 109)) . " Review") . " )");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo "No Review";
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 117
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"vendor-div fourth\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"text-dark\" href=\"";
            // line 121
            echo (($__internal_compile_16 = $context["partner"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["sellerHref"] ?? null) : null);
            echo "\" title=\"";
            echo ($context["text_total_products"] ?? null);
            echo "\">
\t\t\t\t\t\t\t";
            // line 123
            echo "\t\t\t\t\t\t\t<span class=\"btn-text text-dark\">";
            echo (($__internal_compile_17 = $context["partner"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["total_products"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 124
            echo "Product(s)";
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t</div>
  </div>
  <div class=\"swiper-pagination carousel_wk_mp\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\">
\$('#carousel_wk_mp').swiper({
\tmode: 'horizontal',
\tslidesPerView: 4,
\tslidesPerView: 4,
\tbreakpoints: {
\t\t// when window width is >= 320px
\t\t320: {
\t\tslidesPerView: 1,
\t\t// spaceBetween: 20
\t\t},
\t\t// when window width is >= 380px
\t\t380: {
\t\tslidesPerView: 1,
\t\t// spaceBetween: 30
\t\t},
\t\t// when window width is >= 480px
\t\t480: {
\t\tslidesPerView: 2,
\t\t// spaceBetween: 30
\t\t},
\t\t// when window width is >= 640px
\t\t640: {
\t\tslidesPerView: 3,
\t\t// spaceBetween: 40
\t\t}
\t},
\tpagination: '.carousel_wk_mp',
\tpaginationClickable: true,
\tnextButton: '.carousel .swiper-button-next',
    prevButton: '.carousel .swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__c5be8e702a72123f80c9ed4a5d417e2b2cc1109104de03f1cea2f334a31172ae";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 133,  305 => 124,  300 => 123,  294 => 121,  288 => 117,  282 => 113,  276 => 111,  271 => 109,  266 => 108,  264 => 107,  261 => 106,  255 => 105,  248 => 100,  242 => 96,  239 => 95,  235 => 94,  227 => 92,  221 => 88,  215 => 86,  210 => 84,  205 => 83,  203 => 82,  200 => 81,  194 => 80,  187 => 75,  181 => 71,  178 => 70,  174 => 69,  166 => 67,  164 => 66,  160 => 64,  154 => 61,  150 => 60,  145 => 59,  143 => 58,  137 => 57,  130 => 55,  122 => 54,  115 => 49,  105 => 46,  102 => 45,  100 => 44,  96 => 43,  86 => 40,  83 => 39,  79 => 38,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c5be8e702a72123f80c9ed4a5d417e2b2cc1109104de03f1cea2f334a31172ae", "");
    }
}
