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

/* __string_template__ec42a55d28a1e64aa32f9459b5633e683be1fe49f04e712a22933ddc4b5b92d6 */
class __TwigTemplate_2eac381b0e8334b68a3df997e167fe31f87d0e45324031efab517030c8ef0691 extends Template
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
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "          <div class=\"swiper-slide text-center\">
            ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
                <img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-fluid w-100\" />
              </a>
            ";
            } else {
                // line 12
                echo "              <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-fluid w-100\" />
            ";
            }
            // line 14
            echo "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </div>
      <!-- If pagination is needed -->
      <div class=\"swiper-pagination slideshow";
        // line 18
        echo ($context["module"] ?? null);
        echo "\"></div>
      <!-- Navigation buttons -->
      <div class=\"swiper-button-next\"></div>
      <div class=\"swiper-button-prev\"></div>
    </div>
  </div>
</div>

<script>
  const swiper";
        // line 27
        echo ($context["module"] ?? null);
        echo " = new Swiper('#slideshow";
        echo ($context["module"] ?? null);
        echo "', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 10500,
      disableOnInteraction: true,
    },
    pagination: {
      el: '.slideshow";
        // line 36
        echo ($context["module"] ?? null);
        echo "',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ec42a55d28a1e64aa32f9459b5633e683be1fe49f04e712a22933ddc4b5b92d6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  99 => 27,  87 => 18,  83 => 16,  76 => 14,  68 => 12,  60 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ec42a55d28a1e64aa32f9459b5633e683be1fe49f04e712a22933ddc4b5b92d6", "");
    }
}
