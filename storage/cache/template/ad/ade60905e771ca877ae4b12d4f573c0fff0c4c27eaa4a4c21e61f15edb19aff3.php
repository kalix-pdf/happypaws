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

/* __string_template__d7a46af1bd404310de45dd4f766adddc85d283ab9d1bd6aa358bc291a98b9d2a */
class __TwigTemplate_5431b5e2fefa60373206cdc8eaa3f17ed2abb4cf1d4dc35f542f44df47dee23d extends Template
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
\t
  }
</style>

  ";
        // line 29
        echo "<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 34
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 35
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
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 46
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 47);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 54
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 55
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 56
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 57
        echo "
    ";
        // line 58
        if (($context["column_left"] ?? null)) {
            // line 59
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 61
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 62
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 63
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 67
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 68
            echo "            <div class=\"main-image text-center mb-3\">
              ";
            // line 69
            if (($context["thumb"] ?? null)) {
                // line 70
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                  <img id=\"main-image\" src=\"";
                // line 71
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px; width: 270px;\" />
                </a>
              ";
            }
            // line 74
            echo "              <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content-start\" id=\"thumbnail-list\">
              ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 76
                echo "                <li>
                  <a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 77);
                echo "\" class=\"thumbnail-link\" data-large=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 77);
                echo "\">
                    <img src=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 78);
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
            // line 82
            echo "                ";
            if (($context["options"] ?? null)) {
                // line 83
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 84
                    echo "                  <li class=\"option-swatches d-flex gap-2 justify-content-center\" data-popup=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "popup", [], "any", false, false, false, 84);
                    echo "\">
                  ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 86
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 86);
                        echo "\" class=\"thumbnail-link\" data-large=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 86);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 86);
                        echo "\">
                      <img src=\"";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 87);
                        echo "\" class=\"img-thumbnail\" style=\"width: 60px; height: 60px;\" />
                    </a>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              ";
            }
            // line 93
            echo "              </ul>
            </div>
          ";
        }
        // line 96
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">Product Specification</p>
              <p class=\"card-text\"><ul class=\"list-unstyled px-2\">
                ";
        // line 101
        if (($context["manufacturer"] ?? null)) {
            // line 102
            echo "                  <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 104
        echo "                <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
                <li>Weight: ";
        // line 105
        echo ($context["weight"] ?? null);
        echo " grams</li>
                <li>";
        // line 106
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
              </p>
            </div>
          </div>
          ";
        // line 126
        echo "
          ";
        // line 153
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3 wishlisht\">
            <button type=\"button\" class=\"btn  me-2\" title=\"";
        // line 157
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn\" title=\"";
        // line 160
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 165
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 166
        if (($context["review_status"] ?? null)) {
            // line 167
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 170
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 171
                    echo "                    <span class=\"fa fa-paw text-muted fs-4\"></span>
                  ";
                } else {
                    // line 173
                    echo "                    <span class=\"fa fa-paw stars fs-4\"></span>
                  ";
                }
                // line 175
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                <a class=\"text-decoration-none text-black\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                </p>
            </div>
          ";
        }
        // line 180
        echo "
          ";
        // line 181
        if (($context["price"] ?? null)) {
            // line 182
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 183
            if ( !($context["special"] ?? null)) {
                // line 184
                echo "                <li><h2 id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 186
                echo "                <li><span class=\"text-muted text-decoration-line-through fs-4\" id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 id=\"special-price\" class=\"text-danger\">";
                // line 187
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 189
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 190
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 191
            echo "            </ul>
          ";
        }
        // line 193
        echo "
          <form id=\"product\">
            ";
        // line 195
        if (($context["options"] ?? null)) {
            // line 196
            echo "              <hr>
              <h4>";
            // line 197
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 199
                echo "                <div class=\"mb-3 d-flex gap-4\">
                  <label class=\"form-label\">";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 200);
                echo ":</label>
                  <input type=\"hidden\" name=\"option[";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                echo "]\" id=\"selectedOption";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                echo "\">
                  
                  <div class=\"d-flex flex-wrap gap-3\">
                    ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 205
                    echo "                      <div class=\"card selectable-option text-center\" style=\"width: 70px; cursor: pointer;\"
                        data-option-id=\"";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\"
                        data-option-value-id=\"";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 207);
                    echo "\"
                        data-option-name=\"";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                    echo "\"
                        data-popup=\"";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 209);
                    echo "\"
                        data-price=\"";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 210);
                    echo "\">
                        <img src=\"";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 211);
                    echo "\" class=\"card-img-top\" style=\"height: 50px; object-fit: contain;\">
                        <p class=\"card-text small\">";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 212);
                    echo "</p>
                        ";
                    // line 214
                    echo "                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "                  </div>
                </div>
                <div id=\"selectedPreview";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                echo "\" class=\"mb-2 text-muted\">No selection</div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 224
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 225
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 228
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-lg btn-block\">";
        // line 229
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 231
        if ((($context["minimum"] ?? null) > 1)) {
            echo "`
              <div class=\"alert alert-info mt-2\">";
            // line 232
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 234
        echo "          </form>

          
        </div>
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
    </main>
    ";
        // line 291
        if (($context["column_right"] ?? null)) {
            // line 292
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 294
        echo "  </div>

  <div class=\"card my-4\">
    <div class=\"card-header\">
      <p class=\"card-title\">";
        // line 298
        echo ($context["tab_description"] ?? null);
        echo "</p>
    </div>
    <div class=\"card-body px-4\">
      <p class=\"card-text\">";
        // line 301
        echo ($context["description"] ?? null);
        echo "</p>
    </div>
  </div>

  <div class=\"card my-4\">
    <div class=\"card-body\">
      ";
        // line 308
        echo "      <div class=\"card-body\">";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
  </div>

  <div class=\"card my-4 px-5 py-4\">
    ";
        // line 313
        if (($context["review_status"] ?? null)) {
            // line 314
            echo "      <div class=\"mb-3 d-flex align-items-center gap-4 \">
        <h4><strong>Product Ratings</strong></h4>
        <p class=\"mt-2\">";
            // line 316
            echo ($context["reviews"] ?? null);
            echo "</p>
      </div>
      <div class=\"p-4 border border-info-subtle rating-header\">
        <h4><strong class=\"fs-1\">";
            // line 319
            $context["full"] = twig_round(($context["rating"] ?? null), 0, "floor");
            echo " 
          ";
            // line 320
            $context["half"] = ((($context["rating"] ?? null) - ($context["full"] ?? null)) >= 0.5);
            // line 321
            echo "          ";
            echo twig_number_format_filter($this->env, ($context["rating"] ?? null), 1);
            echo "</strong> OUT OF 5</h4>
        
        ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 324
                echo "            ";
                if (($context["i"] <= ($context["full"] ?? null))) {
                    // line 325
                    echo "              <i class=\"fa fa-paw text-warning fs-4\"></i>
            ";
                } elseif (((                // line 326
$context["i"] == (($context["full"] ?? null) + 1)) && ($context["half"] ?? null))) {
                    // line 327
                    echo "              <i class=\"fa fa-paw text-secondary fs-4\" style=\"opacity: 0.5;\"></i>
            ";
                } else {
                    // line 329
                    echo "              <i class=\"fa fa-paw text-muted\"></i>
            ";
                }
                // line 331
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "      </div>
    ";
        }
        // line 334
        echo "    ";
        echo ($context["revieww"] ?? null);
        echo "
  </div>

   ";
        // line 337
        if (($context["review_status"] ?? null)) {
            // line 338
            echo "      <div id=\"tab-review\">
        <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
          <div id=\"review\"></div>
          <h5>";
            // line 341
            echo ($context["text_write"] ?? null);
            echo "</h5>

          <div class=\"mb-3\">
            <label>Display Name:</label>
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"is_anonymous\" value=\"0\" checked>
              <label class=\"form-check-label\">Show my name</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"is_anonymous\" value=\"1\">
              <label class=\"form-check-label\">Post as Anonymous</label>
            </div>
          </div>

          <div class=\"mb-3\">
          <div id=\"image-preview\" class=\"mt-2\"></div>
            <label for=\"attachments\">Attach a file</label>
            <input type=\"file\" name=\"attachments[]\" class=\"form-control\"  multiple accept=\"image/*, video/mp4\"/>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-review\">";
            // line 362
            echo ($context["entry_review"] ?? null);
            echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
          </div>

          <div class=\"mb-3\">
            <label class=\"control-label\">";
            // line 367
            echo ($context["entry_rating"] ?? null);
            echo "</label>
            <div>
              ";
            // line 369
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 370
                echo "                <label class=\"me-2\">
                  <input type=\"radio\" name=\"rating\" value=\"";
                // line 371
                echo $context["i"];
                echo "\"> ";
                echo $context["i"];
                echo "
                </label>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "            </div>
          </div>

          <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
            // line 377
            echo ($context["button_continue"] ?? null);
            echo "</button>
        </form>
      </div>
    ";
        } else {
            // line 381
            echo "      <div id=\"tab-review\">
        ";
            // line 382
            echo ($context["text_login"] ?? null);
            echo "
      </div>
    ";
        }
        // line 385
        echo "
</div>

";
        // line 389
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
        // line 411
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
  } else {
    \$('#special-price').text(formatPrice(basePrice));
  }

  console.log(\"Total price from options:\", totalPrice);
});

</script>


";
        // line 523
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
        // line 614
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 616
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 618
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
        // line 686
        echo "
\$('#button-review').on('click', function (e) {
  e.preventDefault();

  var form = document.getElementById('form-review');
  var formData = new FormData(form);

  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 694
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
        // line 717
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
        // line 735
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d7a46af1bd404310de45dd4f766adddc85d283ab9d1bd6aa358bc291a98b9d2a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1234 => 735,  1213 => 717,  1187 => 694,  1177 => 686,  1107 => 618,  1102 => 616,  1097 => 614,  1004 => 523,  975 => 496,  962 => 486,  885 => 411,  862 => 389,  857 => 385,  851 => 382,  848 => 381,  841 => 377,  836 => 374,  825 => 371,  822 => 370,  818 => 369,  813 => 367,  805 => 362,  781 => 341,  776 => 338,  774 => 337,  767 => 334,  763 => 332,  757 => 331,  753 => 329,  749 => 327,  747 => 326,  744 => 325,  741 => 324,  737 => 323,  731 => 321,  729 => 320,  725 => 319,  719 => 316,  715 => 314,  713 => 313,  704 => 308,  695 => 301,  689 => 298,  683 => 294,  677 => 292,  675 => 291,  671 => 289,  667 => 287,  661 => 286,  652 => 285,  648 => 284,  643 => 283,  641 => 282,  638 => 281,  634 => 279,  625 => 275,  621 => 273,  616 => 271,  611 => 270,  605 => 268,  603 => 267,  600 => 266,  597 => 265,  593 => 263,  587 => 262,  583 => 260,  579 => 258,  576 => 257,  572 => 256,  569 => 255,  567 => 254,  563 => 253,  556 => 251,  547 => 247,  543 => 246,  539 => 244,  535 => 243,  529 => 241,  527 => 240,  519 => 234,  514 => 232,  510 => 231,  505 => 229,  501 => 228,  495 => 225,  491 => 224,  487 => 222,  484 => 221,  475 => 218,  471 => 216,  464 => 214,  460 => 212,  456 => 211,  452 => 210,  448 => 209,  444 => 208,  440 => 207,  436 => 206,  433 => 205,  429 => 204,  421 => 201,  417 => 200,  414 => 199,  410 => 198,  406 => 197,  403 => 196,  401 => 195,  397 => 193,  393 => 191,  384 => 190,  375 => 189,  370 => 187,  365 => 186,  359 => 184,  357 => 183,  354 => 182,  352 => 181,  349 => 180,  341 => 176,  335 => 175,  331 => 173,  327 => 171,  324 => 170,  320 => 169,  316 => 167,  314 => 166,  310 => 165,  300 => 160,  292 => 157,  286 => 153,  283 => 126,  273 => 106,  269 => 105,  262 => 104,  252 => 102,  250 => 101,  243 => 96,  238 => 93,  235 => 92,  228 => 90,  219 => 87,  210 => 86,  206 => 85,  201 => 84,  196 => 83,  193 => 82,  181 => 78,  175 => 77,  172 => 76,  168 => 75,  165 => 74,  157 => 71,  150 => 70,  148 => 69,  145 => 68,  143 => 67,  136 => 63,  132 => 62,  129 => 61,  123 => 59,  121 => 58,  118 => 57,  115 => 56,  112 => 55,  110 => 54,  104 => 50,  93 => 47,  90 => 46,  86 => 45,  73 => 35,  69 => 34,  62 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d7a46af1bd404310de45dd4f766adddc85d283ab9d1bd6aa358bc291a98b9d2a", "");
    }
}
