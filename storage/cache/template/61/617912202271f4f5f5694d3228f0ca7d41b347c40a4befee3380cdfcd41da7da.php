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

/* __string_template__6046fde992a1d4b226aa89e254c419fa6ed01717a6a9dc31dcd3b5da2bb25a0a */
class __TwigTemplate_6434ebb5a6ebe459876aaf29f60e667eb9c7dc4e8ade4caaca124a8f6c357c1a extends Template
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
  ";
        // line 8
        echo "<header class=\"py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\" >";
        // line 13
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts \">";
        // line 14
        echo ($context["cart"] ?? null);
        echo "</div>
          
        </div>
      </div>
    </div>
  </div>
</header> 

<div id=\"product-product\" class=\"container mb-5\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 26
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 34
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 35
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 36
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 37
        echo "
    ";
        // line 38
        if (($context["column_left"] ?? null)) {
            // line 39
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 41
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 42
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 43
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 47
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 48
            echo "            <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content\">
              ";
            // line 49
            if (($context["thumb"] ?? null)) {
                // line 50
                echo "                <li>
                  <a href=\"";
                // line 51
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                    <img src=\"";
                // line 52
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px;\"/>
                  </a>
                </li>
              ";
            }
            // line 56
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 57
                echo "                <li>
                  <a href=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 58);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                    <img src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 59);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\"/>
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </ul>
          ";
        }
        // line 65
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">";
        // line 68
        echo ($context["tab_description"] ?? null);
        echo "</p>
              <p class=\"card-text\">";
        // line 69
        echo ($context["description"] ?? null);
        echo "</p>
            </div>
          </div>
          ";
        // line 87
        echo "
          ";
        // line 151
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3\">
            <button type=\"button\" class=\"btn btn-outline-secondary me-2\" title=\"";
        // line 155
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 158
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 163
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 165
        if (($context["manufacturer"] ?? null)) {
            // line 166
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 168
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>Weight: ";
        // line 169
        echo ($context["weight"] ?? null);
        echo " grams</li>
            <li>";
        // line 170
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 173
        if (($context["price"] ?? null)) {
            // line 174
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 175
            if ( !($context["special"] ?? null)) {
                // line 176
                echo "                <li><h2>";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 178
                echo "                <li><span class=\"text-muted text-decoration-line-through\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 class=\"text-danger\">";
                // line 179
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 181
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 182
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 183
            echo "            </ul>
          ";
        }
        // line 185
        echo "
          <form>
            ";
        // line 187
        if (($context["options"] ?? null)) {
            // line 188
            echo "              <hr>
              <h4>";
            // line 189
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 191
                echo "                <div class=\"mb-3\">
                  <label class=\"form-label\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                echo "</label>
                  <div>
                    ";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 194));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 195
                    echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 196);
                    echo "\">
                        <label class=\"form-check-label\">
                          ";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 198);
                    echo "
                          ";
                    // line 199
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199)) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 199);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199);
                        echo ")";
                    }
                    // line 200
                    echo "                        </label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "            ";
        }
        // line 207
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 209
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 210
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 213
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 214
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 216
        if ((($context["minimum"] ?? null) > 1)) {
            // line 217
            echo "              <div class=\"alert alert-info mt-2\">";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 219
        echo "          </form>

          ";
        // line 221
        if (($context["review_status"] ?? null)) {
            // line 222
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 225
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 226
                    echo "                    <span class=\"fa fa-star-o text-warning\"></span>
                  ";
                } else {
                    // line 228
                    echo "                    <span class=\"fa fa-star text-warning\"></span>
                  ";
                }
                // line 230
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                / 
                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            // line 233
            echo ($context["text_write"] ?? null);
            echo "</a>
              </p>
            </div>
          ";
        }
        // line 237
        echo "        </div>
      </div>

      ";
        // line 240
        if (($context["products"] ?? null)) {
            // line 241
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 244
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 246);
                echo "\">
                  <img src=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 247);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 247);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 251);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 251);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 253);
                echo "</p>
                  ";
                // line 254
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 254)) {
                    // line 255
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 256
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 257
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 257) < $context["j"])) {
                            // line 258
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 260
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 262
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 263
                    echo "                    </div>
                  ";
                }
                // line 265
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 265)) {
                    // line 266
                    echo "                    <p class=\"price\">
                      ";
                    // line 267
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 267)) {
                        // line 268
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 268);
                        echo "
                      ";
                    } else {
                        // line 270
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 270);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 271);
                        echo "</span>
                      ";
                    }
                    // line 273
                    echo "                    </p>
                  ";
                }
                // line 275
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "        </div>
      ";
        }
        // line 281
        echo "
      ";
        // line 282
        if (($context["tags"] ?? null)) {
            // line 283
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 285
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 285);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 285);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 286
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "        </p>
      ";
        }
        // line 289
        echo "
      ";
        // line 290
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>

    ";
        // line 293
        if (($context["column_right"] ?? null)) {
            // line 294
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 296
        echo "  </div>
</div>


<script
\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
dataType: 'json',
beforeSend: function () {
\$('#recurring-description').html('');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
\$('#recurring-description').html(json['success']);
}
}
});
});
//
\t-->
</script>
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
</script>

<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 398
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 400
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 402
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//
\t-->
</script>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=   ";
        // line 471
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 480
        echo ($context["product_id"] ?? null);
        echo "',
type: 'post',
dataType: 'json',
data: formData,
contentType: false,
processData: false,
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\$('#form-review')[0].reset(); // Clear all form fields including file input
}
}
});
});


\$(document).ready(function () {
\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
//
\t-->
</script>
";
        // line 521
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__6046fde992a1d4b226aa89e254c419fa6ed01717a6a9dc31dcd3b5da2bb25a0a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  853 => 521,  809 => 480,  797 => 471,  725 => 402,  720 => 400,  715 => 398,  611 => 296,  605 => 294,  603 => 293,  597 => 290,  594 => 289,  590 => 287,  584 => 286,  575 => 285,  571 => 284,  566 => 283,  564 => 282,  561 => 281,  557 => 279,  548 => 275,  544 => 273,  539 => 271,  534 => 270,  528 => 268,  526 => 267,  523 => 266,  520 => 265,  516 => 263,  510 => 262,  506 => 260,  502 => 258,  499 => 257,  495 => 256,  492 => 255,  490 => 254,  486 => 253,  479 => 251,  470 => 247,  466 => 246,  462 => 244,  458 => 243,  452 => 241,  450 => 240,  445 => 237,  438 => 233,  432 => 231,  426 => 230,  422 => 228,  418 => 226,  415 => 225,  411 => 224,  407 => 222,  405 => 221,  401 => 219,  395 => 217,  393 => 216,  388 => 214,  384 => 213,  378 => 210,  374 => 209,  370 => 207,  367 => 206,  359 => 203,  351 => 200,  344 => 199,  340 => 198,  333 => 196,  330 => 195,  326 => 194,  321 => 192,  318 => 191,  314 => 190,  310 => 189,  307 => 188,  305 => 187,  301 => 185,  297 => 183,  288 => 182,  279 => 181,  274 => 179,  269 => 178,  263 => 176,  261 => 175,  258 => 174,  256 => 173,  248 => 170,  244 => 169,  237 => 168,  227 => 166,  225 => 165,  220 => 163,  210 => 158,  202 => 155,  196 => 151,  193 => 87,  187 => 69,  183 => 68,  178 => 65,  174 => 63,  162 => 59,  156 => 58,  153 => 57,  148 => 56,  139 => 52,  133 => 51,  130 => 50,  128 => 49,  125 => 48,  123 => 47,  116 => 43,  112 => 42,  109 => 41,  103 => 39,  101 => 38,  98 => 37,  95 => 36,  92 => 35,  90 => 34,  84 => 30,  73 => 27,  70 => 26,  66 => 25,  52 => 14,  48 => 13,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6046fde992a1d4b226aa89e254c419fa6ed01717a6a9dc31dcd3b5da2bb25a0a", "");
    }
}
