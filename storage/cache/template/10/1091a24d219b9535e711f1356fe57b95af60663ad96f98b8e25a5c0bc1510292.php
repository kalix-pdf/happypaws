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

/* extension/module/slideshow.twig */
class __TwigTemplate_b40f51a2b580f7a5efc1a2412ee5b60309870941044c785275ce3bb65ceea1b8 extends Template
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
        echo "<div class=\"container-fluid p-0\">
  <div class=\"slideshow swiper-viewport\">
    <div id=\"slideshow";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper swiper-container\">
      <div class=\"swiper-wrapper\">

      <!-- ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "          <div class=\"swiper-slide text-center\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8)) {
                // line 9
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9);
                echo "\">
                <img src=\"catalog/view/theme/hp/image/perDay.png\" alt=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-fluid w-100\" />
              </a>
            ";
            } else {
                // line 13
                echo "              <img src=\"catalog/view/theme/hp/image/perDay.png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                echo "\" class=\"img-fluid w-100\" />
            ";
            }
            // line 15
            echo "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " --> 

      <div class=\"swiper-slide text-center\">
        <a href=\"https://example.com/banner1\">
          <img src=\"catalog/view/theme/hp/image/perDay.png\" alt=\"Banner 1\" class=\"img-fluid w-100\" />
        </a>
      </div>
      <div class=\"swiper-slide text-center\">
        <a href=\"https://example.com/banner2\">
          <img src=\"catalog/view/theme/hp/image/perMonth.png\" alt=\"Banner 2\" class=\"img-fluid w-100\" />
        </a>
      </div>
      <div class=\"swiper-slide text-center\">
        <a href=\"https://example.com/banner2\">
          <img src=\"catalog/view/theme/hp/image/AboutUs.png\" alt=\"Banner 2\" class=\"img-fluid w-100\" />
        </a>
      </div>
    </div>
      <!-- If pagination is needed -->
      <div class=\"swiper-pagination slideshow";
        // line 35
        echo ($context["module"] ?? null);
        echo "\"></div>
      <!-- Navigation buttons -->
      <div class=\"swiper-button-next\"></div>
      <div class=\"swiper-button-prev\"></div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
  \$('#slideshow";
        // line 44
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 47
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 5000,
    autoplayDisableOnInteraction: true,
\tloop: true
});
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  113 => 44,  101 => 35,  80 => 16,  73 => 15,  67 => 13,  61 => 10,  56 => 9,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/slideshow.twig", "");
    }
}
