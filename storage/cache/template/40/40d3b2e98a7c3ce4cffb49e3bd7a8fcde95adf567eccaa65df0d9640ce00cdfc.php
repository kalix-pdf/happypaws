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

/* __string_template__32d4d9a0e5aabd6b512e7564e708d32eb50645425a0f19b2aeace125228426e5 */
class __TwigTemplate_3fa97a00ca9f024949ca0f896bd62a0c527ff55e2a3262be49865b1fa8a25c01 extends Template
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
        echo "<h3 class=\"container mb-3\">Featured Products</h3>
<div class=\"container mb-5\">
  <div class=\"row product-page\">
 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex\">
    <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
      <div class=\"image\"><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-fluid mx-auto d-block\"/></a></div>
      <div class=\"caption\">
        <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "</a></h4>
        <p >";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 10);
            echo "</p>
        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 11)) {
                // line 12
                echo "        <div class=\"rating\">
          ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 14) < $context["i"])) {
                        // line 15
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 17
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 19
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </div>
        ";
            }
            // line 22
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22)) {
                // line 23
                echo "        <p class=\"price\">
          ";
                // line 24
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                    echo "
          ";
                } else {
                    // line 27
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "</span>
          ";
                }
                // line 29
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 30);
                    echo "</span>
          ";
                }
                // line 32
                echo "        </p>
        ";
            }
            // line 34
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" id=\"button-cart\" onclick=\"cart.add('";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 36);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 38
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>


<script type=\"text/javascript\">
  \$(document).ready(function () {
    \$('#button-cart').on('click', function () {
      \$.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: \$('#product').find('input[type=\"text\"], input[type=\"hidden\"], input[type=\"radio\"]:checked, input[type=\"checkbox\"]:checked, select, textarea'),
        dataType: 'json',
        beforeSend: function () {
          \$('#button-cart').prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\"></span> Adding...');
        },
        complete: function () {
          \$('#button-cart').prop('disabled', false).html('<i class=\"bi bi-cart\"></i> Add to Cart');
        },
        success: function (json) {
          \$('.alert-dismissible, .text-danger').remove();
          \$('.form-group').removeClass('has-error');

          // Show errors
          if (json['error']) {
            if (json['error']['option']) {
              for (let i in json['error']['option']) {
                let element = \$('#input-option' + i.replace('_', '-'));
                let errorHtml = '<div class=\"text-danger small\">' + json['error']['option'][i] + '</div>';
                if (element.parent().hasClass('input-group')) {
                  element.parent().after(errorHtml);
                } else {
                  element.after(errorHtml);
                }
                element.closest('.form-group').addClass('has-error');
              }
            }

            if (json['error']['recurring']) {
              \$('select[name=\"recurring_id\"]').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
            }

            return;
          }
          console.log(json);

          if (json['success']) {
            \$('.breadcrumb').after(`
              <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                <i class=\"bi bi-check-circle-fill\"></i> \${json['success']}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
            `);

            // Update cart icon (top cart button)
            \$('#cart > button').html(`
              <span id=\"cart-total\"><i class=\"bi bi-cart\"></i> \${json['total']}</span>
            `);

            // Reload cart dropdown contents
            \$('#cart').load('index.php?route=common/cart/info #cart > *');

            // Scroll to top
            \$('html, body').animate({ scrollTop: 0 }, 'smooth');
            location.reload();

          }
            },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__32d4d9a0e5aabd6b512e7564e708d32eb50645425a0f19b2aeace125228426e5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  154 => 38,  148 => 37,  142 => 36,  138 => 34,  134 => 32,  126 => 30,  123 => 29,  115 => 27,  109 => 25,  107 => 24,  104 => 23,  101 => 22,  97 => 20,  91 => 19,  87 => 17,  83 => 15,  80 => 14,  76 => 13,  73 => 12,  71 => 11,  67 => 10,  61 => 9,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__32d4d9a0e5aabd6b512e7564e708d32eb50645425a0f19b2aeace125228426e5", "");
    }
}
