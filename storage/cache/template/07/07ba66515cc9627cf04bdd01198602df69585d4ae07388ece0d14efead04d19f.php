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

/* __string_template__c708010e3a4565c367bd065d1981848280a1a00e7a8329beb42cddf28ba128c4 */
class __TwigTemplate_5c329dced7ba5a963f6780ae88f3d3e4eedbca8c5989735458a022339def896e extends Template
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
        echo "<div id=\"product-product\" class=\"container mb-5\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 20
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 21
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 22
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 23
        echo "
    ";
        // line 24
        if (($context["column_left"] ?? null)) {
            // line 25
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 27
        echo "
    <main id=\"content\" class=\"d-grid gap-0 row-gap-3\" style=\"grid-template-columns: 1fr 1fr 1fr 1fr;\">
      ";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 33
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 34
            echo "            <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content\">
              ";
            // line 35
            if (($context["thumb"] ?? null)) {
                // line 36
                echo "                <li>
                  <a href=\"";
                // line 37
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                    <img src=\"";
                // line 38
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px;\"/>
                  </a>
                </li>
              ";
            }
            // line 42
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                echo "                <li>
                  <a href=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                    <img src=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
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
            // line 49
            echo "            </ul>
          ";
        }
        // line 51
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">";
        // line 54
        echo ($context["tab_description"] ?? null);
        echo "</p>
              <p class=\"card-text\">";
        // line 55
        echo ($context["description"] ?? null);
        echo "</p>
            </div>
          </div>
          ";
        // line 73
        echo "
          ";
        // line 137
        echo "        </div>

        <div class=\"col-md-6 bg-info\">
          <div class=\"d-flex mb-3\">
            <button type=\"button\" class=\"btn btn-outline-secondary me-2\" title=\"";
        // line 141
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 144
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange text-primary\"></i>
            </button>
          </div>

          <h1>";
        // line 149
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 151
        if (($context["manufacturer"] ?? null)) {
            // line 152
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 154
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>Weight: ";
        // line 155
        echo ($context["weight"] ?? null);
        echo " grams</li>
            <li>";
        // line 156
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 159
        if (($context["price"] ?? null)) {
            // line 160
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 161
            if ( !($context["special"] ?? null)) {
                // line 162
                echo "                <li><h2>";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 164
                echo "                <li><span class=\"text-muted text-decoration-line-through\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 class=\"text-danger\">";
                // line 165
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 167
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 168
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 169
            echo "            </ul>
          ";
        }
        // line 171
        echo "
          <form>
            ";
        // line 173
        if (($context["options"] ?? null)) {
            // line 174
            echo "              <hr>
              <h4>";
            // line 175
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 177
                echo "                <div class=\"mb-3\">
                  <label class=\"form-label\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                echo "</label>
                  <div>
                    ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 180));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 181
                    echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"option[";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                    echo "\">
                        <label class=\"form-check-label\">
                          ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                    echo "
                          ";
                    // line 185
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185)) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                        echo ")";
                    }
                    // line 186
                    echo "                        </label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "            ";
        }
        // line 193
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 195
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 196
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 199
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 200
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 202
        if ((($context["minimum"] ?? null) > 1)) {
            // line 203
            echo "              <div class=\"alert alert-info mt-2\">";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 205
        echo "          </form>

          ";
        // line 207
        if (($context["review_status"] ?? null)) {
            // line 208
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 211
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 212
                    echo "                    <span class=\"fa fa-star-o text-warning\"></span>
                  ";
                } else {
                    // line 214
                    echo "                    <span class=\"fa fa-star text-warning\"></span>
                  ";
                }
                // line 216
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                / 
                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            // line 219
            echo ($context["text_write"] ?? null);
            echo "</a>
              </p>
            </div>
          ";
        }
        // line 223
        echo "        </div>
      </div>

      ";
        // line 226
        if (($context["products"] ?? null)) {
            // line 227
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 230
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 232);
                echo "\">
                  <img src=\"";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 233);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 233);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 237);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 239);
                echo "</p>
                  ";
                // line 240
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 242
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 243
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 243) < $context["j"])) {
                            // line 244
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 246
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 248
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 249
                    echo "                    </div>
                  ";
                }
                // line 251
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "                    <p class=\"price\">
                      ";
                    // line 253
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 253)) {
                        // line 254
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 254);
                        echo "
                      ";
                    } else {
                        // line 256
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 256);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 257);
                        echo "</span>
                      ";
                    }
                    // line 259
                    echo "                    </p>
                  ";
                }
                // line 261
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "        </div>
      ";
        }
        // line 267
        echo "
      ";
        // line 268
        if (($context["tags"] ?? null)) {
            // line 269
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 271
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 271);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 271);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 272
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "        </p>
      ";
        }
        // line 275
        echo "
      ";
        // line 276
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>

    ";
        // line 279
        if (($context["column_right"] ?? null)) {
            // line 280
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 282
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
        // line 384
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 386
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 388
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
        // line 457
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 466
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
        // line 507
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__c708010e3a4565c367bd065d1981848280a1a00e7a8329beb42cddf28ba128c4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 507,  786 => 466,  774 => 457,  702 => 388,  697 => 386,  692 => 384,  588 => 282,  582 => 280,  580 => 279,  574 => 276,  571 => 275,  567 => 273,  561 => 272,  552 => 271,  548 => 270,  543 => 269,  541 => 268,  538 => 267,  534 => 265,  525 => 261,  521 => 259,  516 => 257,  511 => 256,  505 => 254,  503 => 253,  500 => 252,  497 => 251,  493 => 249,  487 => 248,  483 => 246,  479 => 244,  476 => 243,  472 => 242,  469 => 241,  467 => 240,  463 => 239,  456 => 237,  447 => 233,  443 => 232,  439 => 230,  435 => 229,  429 => 227,  427 => 226,  422 => 223,  415 => 219,  409 => 217,  403 => 216,  399 => 214,  395 => 212,  392 => 211,  388 => 210,  384 => 208,  382 => 207,  378 => 205,  372 => 203,  370 => 202,  365 => 200,  361 => 199,  355 => 196,  351 => 195,  347 => 193,  344 => 192,  336 => 189,  328 => 186,  321 => 185,  317 => 184,  310 => 182,  307 => 181,  303 => 180,  298 => 178,  295 => 177,  291 => 176,  287 => 175,  284 => 174,  282 => 173,  278 => 171,  274 => 169,  265 => 168,  256 => 167,  251 => 165,  246 => 164,  240 => 162,  238 => 161,  235 => 160,  233 => 159,  225 => 156,  221 => 155,  214 => 154,  204 => 152,  202 => 151,  197 => 149,  187 => 144,  179 => 141,  173 => 137,  170 => 73,  164 => 55,  160 => 54,  155 => 51,  151 => 49,  139 => 45,  133 => 44,  130 => 43,  125 => 42,  116 => 38,  110 => 37,  107 => 36,  105 => 35,  102 => 34,  100 => 33,  93 => 29,  89 => 27,  83 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  70 => 20,  64 => 16,  53 => 13,  50 => 12,  46 => 11,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c708010e3a4565c367bd065d1981848280a1a00e7a8329beb42cddf28ba128c4", "");
    }
}
