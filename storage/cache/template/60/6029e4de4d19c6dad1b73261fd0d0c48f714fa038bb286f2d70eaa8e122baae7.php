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

/* __string_template__fab032442cd9d398c52430bd66da95b866f3193d5c5b262d14353644c2f7f6ca */
class __TwigTemplate_0b04494aa622260983d88a75639fe69ff8406da0721c6d9bec3a00ca8f2cefd2 extends Template
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
  .thumbnail-link.selected img {
    border: 2px solid #007bff; /* Bootstrap primary */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
  }
  .card {
    box-shadow: 0 2px 2px black ;
    border: 1px solid #162F65;
  }
  .mainproduct .btn, .card .btn {
    background-color: #162F65;
    color: #f6c96d;;
  }
    @media(max-width:720px) {
\t\t\t\t.wishlisht {
\t\t\t\t\tmargin-top: 20px;
\t\t\t\t}
\t.tab-review, .btn {
    color: white !important;
  }
  }
</style>

  ";
        // line 31
        echo "<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 36
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 37
        echo ($context["cart"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"product-product\" class=\"container mb-5\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 48
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 49);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 49);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 56
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 57
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 58
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 59
        echo "
    ";
        // line 60
        if (($context["column_left"] ?? null)) {
            // line 61
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 63
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 64
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 65
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 69
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 70
            echo "            <div class=\"main-image text-center mb-3\">
              ";
            // line 71
            if (($context["thumb"] ?? null)) {
                // line 72
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                  <img id=\"main-image\" src=\"";
                // line 73
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px; width: 270px;\" />
                </a>
              ";
            }
            // line 76
            echo "              <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content-start\" id=\"thumbnail-list\">
              ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 78
                echo "                <li>
                  <a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 79);
                echo "\" class=\"thumbnail-link\" data-large=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 79);
                echo "\">
                    <img src=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 80);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" style=\"width: 80px; height: 80px;\" />
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                ";
            if (($context["options"] ?? null)) {
                // line 85
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 86
                    echo "                  <li class=\"option-swatches d-flex gap-2 justify-content-center\" data-popup=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "popup", [], "any", false, false, false, 86);
                    echo "\">
                  ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 88
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 88);
                        echo "\" class=\"thumbnail-link\" data-large=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 88);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 88);
                        echo "\">
                      <img src=\"";
                        // line 89
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 89);
                        echo "\" class=\"img-thumbnail\" style=\"width: 60px; height: 60px;\" />
                    </a>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "              ";
            }
            // line 95
            echo "              </ul>
            </div>
          ";
        }
        // line 98
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">Product Specification</p>
              <p class=\"card-text\"><ul class=\"list-unstyled px-2\">
                ";
        // line 103
        if (($context["manufacturer"] ?? null)) {
            // line 104
            echo "                  <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 106
        echo "                <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
                <li>Weight: ";
        // line 107
        echo ($context["weight"] ?? null);
        echo " grams</li>
                <li>";
        // line 108
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
              </p>
            </div>
          </div>
          ";
        // line 128
        echo "
          ";
        // line 155
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3 wishlisht\">
            <button type=\"button\" class=\"btn  me-2\" title=\"";
        // line 159
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn\" title=\"";
        // line 162
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 167
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 168
        if (($context["review_status"] ?? null)) {
            // line 169
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 172
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 173
                    echo "                    <span class=\"fa fa-paw text-muted fs-4\"></span>
                  ";
                } else {
                    // line 175
                    echo "                    <span class=\"fa fa-paw stars fs-4\"></span>
                  ";
                }
                // line 177
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                <a class=\"text-decoration-none text-black\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                </p>
            </div>
          ";
        }
        // line 182
        echo "
          ";
        // line 183
        if (($context["price"] ?? null)) {
            // line 184
            echo "            <ul class=\"list-unstyled d-flex gap-3\">
              ";
            // line 185
            if ( !($context["special"] ?? null)) {
                // line 186
                echo "                <li><h2 id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 188
                echo "                <li><span class=\"text-muted text-decoration-line-through fs-4\" id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 id=\"special-price\" class=\"text-danger\">";
                // line 189
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 191
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 192
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 193
            echo "            </ul>
          ";
        }
        // line 195
        echo "
          <form id=\"product\">
            ";
        // line 197
        if (($context["options"] ?? null)) {
            // line 198
            echo "              <hr>
              <h4>";
            // line 199
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 201
                echo "                <div class=\"mb-3 d-flex gap-4\">
                  <label class=\"form-label\">";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                echo ":</label>
                  <input type=\"hidden\" name=\"option[";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                echo "]\" id=\"selectedOption";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                echo "\">
                  
                  <div class=\"d-flex flex-wrap gap-3\">
                    ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 206));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 207
                    echo "                      <div class=\"card selectable-option text-center\" style=\"width: 70px; cursor: pointer;\"
                        data-option-id=\"";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\"
                        data-option-value-id=\"";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 209);
                    echo "\"
                        data-option-name=\"";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210);
                    echo "\"
                        data-popup=\"";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 211);
                    echo "\"
                        data-price=\"";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212);
                    echo "\">
                        <img src=\"";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213);
                    echo "\" class=\"card-img-top\" style=\"height: 50px; object-fit: contain;\">
                        <p class=\"card-text small\">";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                    echo "</p>
                        ";
                    // line 216
                    echo "                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                  </div>
                </div>
                <div id=\"selectedPreview";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                echo "\" class=\"mb-2 text-muted\">No selection</div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "            ";
        }
        // line 224
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 226
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 227
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 230
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-lg btn-block\">";
        // line 231
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 233
        if ((($context["minimum"] ?? null) > 1)) {
            echo "`
              <div class=\"alert alert-info mt-2\">";
            // line 234
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 236
        echo "          </form>

          
        </div>
      </div>

      ";
        // line 242
        if (($context["products"] ?? null)) {
            // line 243
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 246
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 248);
                echo "\">
                  <img src=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 249);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 249);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 253);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 255);
                echo "</p>
                  ";
                // line 256
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 256)) {
                    // line 257
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 259
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 259) < $context["j"])) {
                            // line 260
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 262
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 264
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 265
                    echo "                    </div>
                  ";
                }
                // line 267
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 267)) {
                    // line 268
                    echo "                    <p class=\"price\">
                      ";
                    // line 269
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 269)) {
                        // line 270
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 270);
                        echo "
                      ";
                    } else {
                        // line 272
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 272);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 273
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 273);
                        echo "</span>
                      ";
                    }
                    // line 275
                    echo "                    </p>
                  ";
                }
                // line 277
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "        </div>
      ";
        }
        // line 283
        echo "
      ";
        // line 284
        if (($context["tags"] ?? null)) {
            // line 285
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 287
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 287);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 288
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "        </p>
      ";
        }
        // line 291
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

  <div class=\"card my-4\">
    <div class=\"card-header\">
      <p class=\"card-title\">";
        // line 300
        echo ($context["tab_description"] ?? null);
        echo "</p>
    </div>
    <div class=\"card-body px-4\">
      <p class=\"card-text\">";
        // line 303
        echo ($context["description"] ?? null);
        echo "</p>
    </div>
  </div>

  <div class=\"card my-4\">
    <div class=\"card-body\">
      ";
        // line 310
        echo "      <div class=\"card-body\">";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
  </div>

  <div class=\"card my-4 px-5 py-4\">
    ";
        // line 315
        if (($context["review_status"] ?? null)) {
            // line 316
            echo "      <div class=\"mb-3 d-flex align-items-center gap-4 \">
        <h4><strong>Product Ratings</strong></h4>
        <p class=\"mt-2\">";
            // line 318
            echo ($context["reviews"] ?? null);
            echo "</p>
      </div>
      <div class=\"p-4 border border-info-subtle rating-header\">
        <h4><strong class=\"fs-1\">";
            // line 321
            $context["full"] = twig_round(($context["rating"] ?? null), 0, "floor");
            echo " 
          ";
            // line 322
            $context["half"] = ((($context["rating"] ?? null) - ($context["full"] ?? null)) >= 0.5);
            // line 323
            echo "          ";
            echo twig_number_format_filter($this->env, ($context["rating"] ?? null), 1);
            echo "</strong> OUT OF 5</h4>
        
        ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 326
                echo "            ";
                if (($context["i"] <= ($context["full"] ?? null))) {
                    // line 327
                    echo "              <i class=\"fa fa-paw text-warning fs-4\"></i>
            ";
                } elseif (((                // line 328
$context["i"] == (($context["full"] ?? null) + 1)) && ($context["half"] ?? null))) {
                    // line 329
                    echo "              <i class=\"fa fa-paw text-secondary fs-4\" style=\"opacity: 0.5;\"></i>
            ";
                } else {
                    // line 331
                    echo "              <i class=\"fa fa-paw text-muted\"></i>
            ";
                }
                // line 333
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "      </div>
    ";
        }
        // line 336
        echo "    ";
        echo ($context["revieww"] ?? null);
        echo "
  </div>

   ";
        // line 339
        if (($context["review_status"] ?? null)) {
            // line 340
            echo "    <div class=\"card px-5 py-4 my-4\">
      <div id=\"tab-review\" class=\"tab-review\">
        <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
          <div id=\"review\"></div>
          <h4 class=\"mb-3\">";
            // line 344
            echo ($context["text_write"] ?? null);
            echo "</h4>

          <div class=\"mb-3\">
            <label class=\"mb-2 col-md-2\">Display Name:</label>

            <div class=\"btn-group\" role=\"group\">
              <input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" id=\"name1\" value=\"0\" autocomplete=\"off\" checked>
              <label class=\"btn btn-outline\" for=\"name1\">Show my name</label>

              <input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" id=\"name2\" value=\"1\" autocomplete=\"off\">
              <label class=\"btn btn-outline\" for=\"name2\">Post as Anonymous</label>
            </div>
          </div>


          <div class=\"mb-3\">
          <div id=\"image-preview\" class=\"mt-2\"></div>
            <label for=\"attachments\">Attach a file</label>
            <input type=\"file\" name=\"attachments[]\" class=\"form-control\"  multiple accept=\"image/*, video/mp4\"/>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-review\">";
            // line 366
            echo ($context["entry_review"] ?? null);
            echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
          </div>

          <div class=\"mb-3\">
            <label class=\"control-label\">";
            // line 371
            echo ($context["entry_rating"] ?? null);
            echo "</label>
            <div class=\"rating-paws d-flex flex-row-reverse gap-1 justify-content-end\">
              ";
            // line 373
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 374
                echo "                <label class=\"me-2 paw-label\">
                  <input type=\"radio\" name=\"rating\" value=\"";
                // line 375
                echo $context["i"];
                echo "\"> ";
                echo $context["i"];
                echo "
                  <i class=\"fas fa-paw\"></i>
                </label>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "            </div>
          </div>

          <button type=\"button\" id=\"button-review\" class=\"btn mb-4\">";
            // line 382
            echo ($context["button_continue"] ?? null);
            echo "</button>
        </form>
      </div>
    </div>
    ";
        } else {
            // line 387
            echo "      <div id=\"tab-review\">
        ";
            // line 388
            echo ($context["text_login"] ?? null);
            echo "
      </div>
    ";
        }
        // line 391
        echo "
</div>

";
        // line 395
        echo "<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.selectable-option').forEach(function (card) {
      card.addEventListener('click', function () {
        var optionId = this.dataset.optionId;
        var optionValueId = this.dataset.optionValueId;
        var optionName = this.dataset.optionName;

        document.getElementById('selectedOption' + optionId).value = optionValueId;
        document.getElementById('selectedPreview' + optionId).innerHTML = \"Selected: \" + optionName;

        document.querySelectorAll('[data-option-id=\"' + optionId + '\"]').forEach(function (opt) {
          opt.classList.remove('border-primary', 'shadow');
        });

        this.classList.add('border-primary', 'shadow');
      });
    });
  });
</script>

";
        // line 417
        echo "
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mainImage = document.getElementById('main-image');
    
    function handleThumbnailClick(links) {
      links.forEach(function (link) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          const newSrc = this.getAttribute('data-large');
          if (mainImage) {
            mainImage.src = newSrc;
          }

          links.forEach(l => l.classList.remove('selected'));
          this.classList.add('selected');
        });
      });
    }

    const thumbnails = document.querySelectorAll('.thumbnail-link');
    const swatches = document.querySelectorAll('.option-swatch-link');

    handleThumbnailClick(thumbnails);
    handleThumbnailClick(swatches);

    if (swatches.length > 0) swatches[0].classList.add('selected');
    else if (thumbnails.length > 0) thumbnails[0].classList.add('selected');
  });
</script>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mainImage = document.getElementById('main-image');

    document.querySelectorAll('.selectable-option').forEach(card => {
      card.addEventListener('click', function () {
        const optionId = this.dataset.optionId;
        const optionValueId = this.dataset.optionValueId;
        const optionName = this.dataset.optionName;
        const imageSrc = this.dataset.popup || this.querySelector('img').src;

          mainImage.src = imageSrc;
        

        const hiddenInput = document.getElementById('selectedOption' + optionId);
        if (hiddenInput) {
          hiddenInput.value = optionValueId;
        }
        const previewText = document.getElementById('selectedPreview' + optionId);
        if (previewText) {
          previewText.textContent = 'Selected: ' + optionName;
        }

        document.querySelectorAll('[data-option-id=\"' + optionId + '\"]').forEach(el => {
          el.classList.remove('border-primary', 'border-2', 'shadow');
        });

        this.classList.add('border-primary', 'border-2', 'shadow');
      });
    });
  });
</script>


<script>
function cleanPrice(rawPrice) {
  return parseFloat(String(rawPrice).replace(/[^0-9.]/g, '')) || 0;
}

function formatPrice(price) {
  return '";
        // line 489
        echo ($context["currency_symbol"] ?? null);
        echo "' + price.toFixed(2);
}

\$('.selectable-option').on('click', function () {
  const selectedOption = \$(this);
  const optionId = selectedOption.data('option-id');
  const optionValueId = selectedOption.data('option-value-id');
  const rawPrice = \$(this).data('price');
  const priceDelta = cleanPrice(rawPrice);

  const basePrice = ";
        // line 499
        echo ((($context["special"] ?? null)) ? (($context["special_value"] ?? null)) : (($context["price_value"] ?? null)));
        echo "; 
  let lastTotalPrice = basePrice;

  if (!priceDelta) {
    basePrice = priceDelta
  }

  \$('#selectedOption' + optionId).val(optionValueId);

  let totalPrice = 0;
  let optionprice = 0;

  if (priceDelta !== null) {

    lastTotalPrice = priceDelta;
    \$('#special-price').text(formatPrice(lastTotalPrice));
    \$('#regular-price').text(formatPrice(lastTotalPrice));
  } else {
    \$('#special-price').text(formatPrice(basePrice));
    \$('#regular-price').text(formatPrice(basePrice));
  }

  console.log(\"Total price from options:\", totalPrice);
});
</script>


";
        // line 527
        echo "<script>
document.querySelector('input[name=\"attachments[]\"]').addEventListener('change', function (e) {
  const preview = document.getElementById('image-preview');
  preview.innerHTML = '';
  
  Array.from(e.target.files).forEach(file => {
    if (file.type.startsWith('image/')) {
      const reader = new FileReader();
      reader.onload = function (event) {
        const img = document.createElement('img');
        img.src = event.target.result;
        img.style.maxWidth = '100px';
        img.style.marginRight = '10px';
        img.classList.add('img-thumbnail');
        preview.appendChild(img);
      };
      reader.readAsDataURL(file);
    }
  });
});
</script>

<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart').on('click', function () {
     var specialPrice = \$('#special-price').length ? \$('#special-price').html() : null;
      \$.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: \$('#product').serialize(),
        dataType: 'json',
        beforeSend: function () {
          \$('#button-cart').button('loading');
        },
        complete: function () {
          \$('#button-cart').button('reset');
        },
        success: function (json) {
          \$('.alert-dismissible, .text-danger').remove();
          \$('.form-group').removeClass('has-error');

      if (json['error']) {
      if (json['error']['option']) {
      for (i in json['error']['option']) {
      var element = \$('#input-option' + i.replace('_', '-'));

      if (element.parent().hasClass('input-group')) {
      element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
      } else {
      element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
      }
      }
      }

if (json['error']['recurring']) {
\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
\$('.text-danger').parent().addClass('has-error');
}

    if (json['success']) {
        \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

        \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

        \$('html, body').animate({
        scrollTop: 0
        }, 'slow');

        if (specialPrice && !\$('#special-price').length) {
          \$('#regular-price').parent().after('<li><h2 id=\"special-price\" class=\"text-danger\">' + specialPrice + '</h2></li>');
        }

        \$('#cart-dropdown').load('index.php?route=common/cart/info #cart-dropdown > *');
    }
  },
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
//
\t-->
</script>

<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 618
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 620
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 622
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
<script type=\"text/javascript\">
<!--
\$('#review').delegate('.pagination a', 'click', function (e) {
  e.preventDefault();

  \$('#review').fadeOut('slow');
  \$('#review').load(this.href, function() {
    \$('#review').fadeIn('slow');
  });
});

";
        // line 690
        echo "
\$('#button-review').on('click', function (e) {
  e.preventDefault();

  var form = document.getElementById('form-review');
  var formData = new FormData(form);

  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 698
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

        \$('#form-review')[0].reset(); 
        \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 721
        echo ($context["product_id"] ?? null);
        echo "'); 
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
-->
</script>

";
        // line 739
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__fab032442cd9d398c52430bd66da95b866f3193d5c5b262d14353644c2f7f6ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1238 => 739,  1217 => 721,  1191 => 698,  1181 => 690,  1111 => 622,  1106 => 620,  1101 => 618,  1008 => 527,  978 => 499,  965 => 489,  891 => 417,  868 => 395,  863 => 391,  857 => 388,  854 => 387,  846 => 382,  841 => 379,  829 => 375,  826 => 374,  822 => 373,  817 => 371,  809 => 366,  784 => 344,  778 => 340,  776 => 339,  769 => 336,  765 => 334,  759 => 333,  755 => 331,  751 => 329,  749 => 328,  746 => 327,  743 => 326,  739 => 325,  733 => 323,  731 => 322,  727 => 321,  721 => 318,  717 => 316,  715 => 315,  706 => 310,  697 => 303,  691 => 300,  685 => 296,  679 => 294,  677 => 293,  673 => 291,  669 => 289,  663 => 288,  654 => 287,  650 => 286,  645 => 285,  643 => 284,  640 => 283,  636 => 281,  627 => 277,  623 => 275,  618 => 273,  613 => 272,  607 => 270,  605 => 269,  602 => 268,  599 => 267,  595 => 265,  589 => 264,  585 => 262,  581 => 260,  578 => 259,  574 => 258,  571 => 257,  569 => 256,  565 => 255,  558 => 253,  549 => 249,  545 => 248,  541 => 246,  537 => 245,  531 => 243,  529 => 242,  521 => 236,  516 => 234,  512 => 233,  507 => 231,  503 => 230,  497 => 227,  493 => 226,  489 => 224,  486 => 223,  477 => 220,  473 => 218,  466 => 216,  462 => 214,  458 => 213,  454 => 212,  450 => 211,  446 => 210,  442 => 209,  438 => 208,  435 => 207,  431 => 206,  423 => 203,  419 => 202,  416 => 201,  412 => 200,  408 => 199,  405 => 198,  403 => 197,  399 => 195,  395 => 193,  386 => 192,  377 => 191,  372 => 189,  367 => 188,  361 => 186,  359 => 185,  356 => 184,  354 => 183,  351 => 182,  343 => 178,  337 => 177,  333 => 175,  329 => 173,  326 => 172,  322 => 171,  318 => 169,  316 => 168,  312 => 167,  302 => 162,  294 => 159,  288 => 155,  285 => 128,  275 => 108,  271 => 107,  264 => 106,  254 => 104,  252 => 103,  245 => 98,  240 => 95,  237 => 94,  230 => 92,  221 => 89,  212 => 88,  208 => 87,  203 => 86,  198 => 85,  195 => 84,  183 => 80,  177 => 79,  174 => 78,  170 => 77,  167 => 76,  159 => 73,  152 => 72,  150 => 71,  147 => 70,  145 => 69,  138 => 65,  134 => 64,  131 => 63,  125 => 61,  123 => 60,  120 => 59,  117 => 58,  114 => 57,  112 => 56,  106 => 52,  95 => 49,  92 => 48,  88 => 47,  75 => 37,  71 => 36,  64 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fab032442cd9d398c52430bd66da95b866f3193d5c5b262d14353644c2f7f6ca", "");
    }
}
