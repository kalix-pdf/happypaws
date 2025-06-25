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

/* __string_template__651bdd0f9bf0fe8e33fb5622f47d919b0d9f2c309e3d3e6fbba7c012239e6dd1 */
class __TwigTemplate_3982edee5c1ca0fcf8aa26992fb19a14381eecb74f75568d8e3bfb517523e8fd extends Template
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
  }
</style>

  ";
        // line 28
        echo "<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 33
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 34
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 45
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 46);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 53
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 54
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 55
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 56
        echo "
    ";
        // line 57
        if (($context["column_left"] ?? null)) {
            // line 58
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 60
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 61
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 62
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 66
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 67
            echo "            <div class=\"main-image text-center mb-3\">
              ";
            // line 68
            if (($context["thumb"] ?? null)) {
                // line 69
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                  <img id=\"main-image\" src=\"";
                // line 70
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px; width: 270px;\" />
                </a>
              ";
            }
            // line 73
            echo "              <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content-start\" id=\"thumbnail-list\">
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 75
                echo "                <li>
                  <a href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 76);
                echo "\" class=\"thumbnail-link\" data-large=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 76);
                echo "\">
                    <img src=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 77);
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
            // line 81
            echo "                ";
            if (($context["options"] ?? null)) {
                // line 82
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 83
                    echo "                  <li class=\"option-swatches d-flex gap-2 justify-content-center\" data-popup=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "popup", [], "any", false, false, false, 83);
                    echo "\">
                  ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 84));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 85
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 85);
                        echo "\" class=\"thumbnail-link\" data-large=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 85);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 85);
                        echo "\">
                      <img src=\"";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 86);
                        echo "\" class=\"img-thumbnail\" style=\"width: 60px; height: 60px;\" />
                    </a>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "              ";
            }
            // line 92
            echo "              </ul>
            </div>
          ";
        }
        // line 95
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">Product Specification</p>
              <p class=\"card-text\"><ul class=\"list-unstyled px-2\">
                ";
        // line 100
        if (($context["manufacturer"] ?? null)) {
            // line 101
            echo "                  <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 103
        echo "                <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
                <li>Weight: ";
        // line 104
        echo ($context["weight"] ?? null);
        echo " grams</li>
                <li>";
        // line 105
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
              </p>
            </div>
          </div>
          ";
        // line 125
        echo "
          ";
        // line 152
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3 wishlisht\">
            <button type=\"button\" class=\"btn  me-2\" title=\"";
        // line 156
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn\" title=\"";
        // line 159
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 164
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 165
        if (($context["review_status"] ?? null)) {
            // line 166
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 169
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 170
                    echo "                    <span class=\"fa fa-paw text-muted fs-4\"></span>
                  ";
                } else {
                    // line 172
                    echo "                    <span class=\"fa fa-paw stars fs-4\"></span>
                  ";
                }
                // line 174
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                <a class=\"text-decoration-none text-black\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                </p>
            </div>
          ";
        }
        // line 179
        echo "
          ";
        // line 180
        if (($context["price"] ?? null)) {
            // line 181
            echo "            <ul class=\"list-unstyled d-flex gap-3\">
              ";
            // line 182
            if ( !($context["special"] ?? null)) {
                // line 183
                echo "                <li><h2 id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 185
                echo "                <li><span class=\"text-muted text-decoration-line-through fs-4\" id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 id=\"special-price\" class=\"text-danger\">";
                // line 186
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 188
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 189
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 190
            echo "            </ul>
          ";
        }
        // line 192
        echo "
          <form id=\"product\">
            ";
        // line 194
        if (($context["options"] ?? null)) {
            // line 195
            echo "              <hr>
              <h4>";
            // line 196
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 198
                echo "                <div class=\"mb-3 d-flex gap-4\">
                  <label class=\"form-label\">";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                echo ":</label>
                  <input type=\"hidden\" name=\"option[";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                echo "]\" id=\"selectedOption";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                echo "\">
                  
                  <div class=\"d-flex flex-wrap gap-3\">
                    ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 203));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 204
                    echo "                      <div class=\"card selectable-option text-center\" style=\"width: 70px; cursor: pointer;\"
                        data-option-id=\"";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\"
                        data-option-value-id=\"";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 206);
                    echo "\"
                        data-option-name=\"";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                    echo "\"
                        data-popup=\"";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 208);
                    echo "\"
                        data-price=\"";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209);
                    echo "\">
                        <img src=\"";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 210);
                    echo "\" class=\"card-img-top\" style=\"height: 50px; object-fit: contain;\">
                        <p class=\"card-text small\">";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 211);
                    echo "</p>
                        ";
                    // line 213
                    echo "                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                  </div>
                </div>
                <div id=\"selectedPreview";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                echo "\" class=\"mb-2 text-muted\">No selection</div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "            ";
        }
        // line 221
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 223
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 224
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 227
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-lg btn-block\">";
        // line 228
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 230
        if ((($context["minimum"] ?? null) > 1)) {
            echo "`
              <div class=\"alert alert-info mt-2\">";
            // line 231
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 233
        echo "          </form>

          
        </div>
      </div>

      ";
        // line 239
        if (($context["products"] ?? null)) {
            // line 240
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 243
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 245);
                echo "\">
                  <img src=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 246);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 246);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 250);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 250);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 252);
                echo "</p>
                  ";
                // line 253
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 253)) {
                    // line 254
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 256
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 256) < $context["j"])) {
                            // line 257
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 259
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 261
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 262
                    echo "                    </div>
                  ";
                }
                // line 264
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 264)) {
                    // line 265
                    echo "                    <p class=\"price\">
                      ";
                    // line 266
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 266)) {
                        // line 267
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 267);
                        echo "
                      ";
                    } else {
                        // line 269
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 269);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 270);
                        echo "</span>
                      ";
                    }
                    // line 272
                    echo "                    </p>
                  ";
                }
                // line 274
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "        </div>
      ";
        }
        // line 280
        echo "
      ";
        // line 281
        if (($context["tags"] ?? null)) {
            // line 282
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 284
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 284);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 284);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 285
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "        </p>
      ";
        }
        // line 288
        echo "
    </main>
    ";
        // line 290
        if (($context["column_right"] ?? null)) {
            // line 291
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 293
        echo "  </div>

  <div class=\"card my-4\">
    <div class=\"card-header\">
      <p class=\"card-title\">";
        // line 297
        echo ($context["tab_description"] ?? null);
        echo "</p>
    </div>
    <div class=\"card-body px-4\">
      <p class=\"card-text\">";
        // line 300
        echo ($context["description"] ?? null);
        echo "</p>
    </div>
  </div>

  <div class=\"card my-4\">
    <div class=\"card-body\">
      ";
        // line 307
        echo "      <div class=\"card-body\">";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
  </div>

  <div class=\"card my-4 px-5 py-4\">
    ";
        // line 312
        if (($context["review_status"] ?? null)) {
            // line 313
            echo "      <div class=\"mb-3 d-flex align-items-center gap-4 \">
        <h4><strong>Product Ratings</strong></h4>
        <p class=\"mt-2\">";
            // line 315
            echo ($context["reviews"] ?? null);
            echo "</p>
      </div>
      <div class=\"p-4 border border-info-subtle rating-header\">
        <h4><strong class=\"fs-1\">";
            // line 318
            $context["full"] = twig_round(($context["rating"] ?? null), 0, "floor");
            echo " 
          ";
            // line 319
            $context["half"] = ((($context["rating"] ?? null) - ($context["full"] ?? null)) >= 0.5);
            // line 320
            echo "          ";
            echo twig_number_format_filter($this->env, ($context["rating"] ?? null), 1);
            echo "</strong> OUT OF 5</h4>
        
        ";
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 323
                echo "            ";
                if (($context["i"] <= ($context["full"] ?? null))) {
                    // line 324
                    echo "              <i class=\"fa fa-paw text-warning fs-4\"></i>
            ";
                } elseif (((                // line 325
$context["i"] == (($context["full"] ?? null) + 1)) && ($context["half"] ?? null))) {
                    // line 326
                    echo "              <i class=\"fa fa-paw text-secondary fs-4\" style=\"opacity: 0.5;\"></i>
            ";
                } else {
                    // line 328
                    echo "              <i class=\"fa fa-paw text-muted\"></i>
            ";
                }
                // line 330
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "      </div>
    ";
        }
        // line 333
        echo "    ";
        echo ($context["revieww"] ?? null);
        echo "
  </div>

   ";
        // line 336
        if (($context["review_status"] ?? null)) {
            // line 337
            echo "    <div class=\"card px-5 py-4 my-4\">
      <div id=\"tab-review\" class=\"tab-review\">
        <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
          <div id=\"review\"></div>
          <h4 class=\"mb-3\">";
            // line 341
            echo ($context["text_write"] ?? null);
            echo "</h4>

          <div class=\"mb-3\">
            <label class=\"mb-2 col-md-2\">Display Name:</label>

            <div class=\"btn-group\" role=\"group\">
              <input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" id=\"name1\" value=\"0\" autocomplete=\"off\" checked>
              <label style=\"background: white;\" class=\"btn btn-outline\" for=\"name1\">Show my name</label>

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
            // line 363
            echo ($context["entry_review"] ?? null);
            echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
          </div>

          <div class=\"mb-3\">
            <label class=\"control-label\">";
            // line 368
            echo ($context["entry_rating"] ?? null);
            echo "</label>
            <div class=\"rating-paws d-flex flex-row-reverse gap-1 justify-content-end\">
              ";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 371
                echo "                <label class=\"me-2 paw-label\">
                  <input type=\"radio\" name=\"rating\" value=\"";
                // line 372
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
            // line 376
            echo "            </div>
          </div>

          <button type=\"button\" id=\"button-review\" class=\"btn mb-4\">";
            // line 379
            echo ($context["button_continue"] ?? null);
            echo "</button>
        </form>
      </div>
    </div>
    ";
        } else {
            // line 384
            echo "      <div id=\"tab-review\">
        ";
            // line 385
            echo ($context["text_login"] ?? null);
            echo "
      </div>
    ";
        }
        // line 388
        echo "
</div>

";
        // line 392
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
        // line 414
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
        // line 486
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
        // line 496
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
        // line 524
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
        // line 615
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 617
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 619
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
        // line 687
        echo "
\$('#button-review').on('click', function (e) {
  e.preventDefault();

  var form = document.getElementById('form-review');
  var formData = new FormData(form);

  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 695
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
        // line 718
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
        // line 736
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__651bdd0f9bf0fe8e33fb5622f47d919b0d9f2c309e3d3e6fbba7c012239e6dd1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1235 => 736,  1214 => 718,  1188 => 695,  1178 => 687,  1108 => 619,  1103 => 617,  1098 => 615,  1005 => 524,  975 => 496,  962 => 486,  888 => 414,  865 => 392,  860 => 388,  854 => 385,  851 => 384,  843 => 379,  838 => 376,  826 => 372,  823 => 371,  819 => 370,  814 => 368,  806 => 363,  781 => 341,  775 => 337,  773 => 336,  766 => 333,  762 => 331,  756 => 330,  752 => 328,  748 => 326,  746 => 325,  743 => 324,  740 => 323,  736 => 322,  730 => 320,  728 => 319,  724 => 318,  718 => 315,  714 => 313,  712 => 312,  703 => 307,  694 => 300,  688 => 297,  682 => 293,  676 => 291,  674 => 290,  670 => 288,  666 => 286,  660 => 285,  651 => 284,  647 => 283,  642 => 282,  640 => 281,  637 => 280,  633 => 278,  624 => 274,  620 => 272,  615 => 270,  610 => 269,  604 => 267,  602 => 266,  599 => 265,  596 => 264,  592 => 262,  586 => 261,  582 => 259,  578 => 257,  575 => 256,  571 => 255,  568 => 254,  566 => 253,  562 => 252,  555 => 250,  546 => 246,  542 => 245,  538 => 243,  534 => 242,  528 => 240,  526 => 239,  518 => 233,  513 => 231,  509 => 230,  504 => 228,  500 => 227,  494 => 224,  490 => 223,  486 => 221,  483 => 220,  474 => 217,  470 => 215,  463 => 213,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  443 => 207,  439 => 206,  435 => 205,  432 => 204,  428 => 203,  420 => 200,  416 => 199,  413 => 198,  409 => 197,  405 => 196,  402 => 195,  400 => 194,  396 => 192,  392 => 190,  383 => 189,  374 => 188,  369 => 186,  364 => 185,  358 => 183,  356 => 182,  353 => 181,  351 => 180,  348 => 179,  340 => 175,  334 => 174,  330 => 172,  326 => 170,  323 => 169,  319 => 168,  315 => 166,  313 => 165,  309 => 164,  299 => 159,  291 => 156,  285 => 152,  282 => 125,  272 => 105,  268 => 104,  261 => 103,  251 => 101,  249 => 100,  242 => 95,  237 => 92,  234 => 91,  227 => 89,  218 => 86,  209 => 85,  205 => 84,  200 => 83,  195 => 82,  192 => 81,  180 => 77,  174 => 76,  171 => 75,  167 => 74,  164 => 73,  156 => 70,  149 => 69,  147 => 68,  144 => 67,  142 => 66,  135 => 62,  131 => 61,  128 => 60,  122 => 58,  120 => 57,  117 => 56,  114 => 55,  111 => 54,  109 => 53,  103 => 49,  92 => 46,  89 => 45,  85 => 44,  72 => 34,  68 => 33,  61 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__651bdd0f9bf0fe8e33fb5622f47d919b0d9f2c309e3d3e6fbba7c012239e6dd1", "");
    }
}
