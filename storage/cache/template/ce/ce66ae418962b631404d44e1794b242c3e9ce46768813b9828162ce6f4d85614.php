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

/* __string_template__a2b4dc94ac6bc6fcdbf4edb7ca7a603b9da79d65dd648cc1a964f67ea5249957 */
class __TwigTemplate_b862cb1ec32bd28ddb62988ba63f9b1c425ffa473b2ff0375697174e794f54ec extends Template
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
</style>

  ";
        // line 19
        echo "<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 24
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 25
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 36
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 37);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 44
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 45
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 46
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 47
        echo "
    ";
        // line 48
        if (($context["column_left"] ?? null)) {
            // line 49
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 51
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 52
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 53
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 57
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 58
            echo "            <div class=\"main-image text-center mb-3\">
              ";
            // line 59
            if (($context["thumb"] ?? null)) {
                // line 60
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                  <img id=\"main-image\" src=\"";
                // line 61
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px; width: 270px;\" />
                </a>
              ";
            }
            // line 64
            echo "              <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content-start\" id=\"thumbnail-list\">
              ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 66
                echo "                <li>
                  <a href=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 67);
                echo "\" class=\"thumbnail-link\" data-large=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 67);
                echo "\">
                    <img src=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 68);
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
            // line 72
            echo "                ";
            if (($context["options"] ?? null)) {
                // line 73
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 74
                    echo "                  <li class=\"option-swatches d-flex gap-2 justify-content-center\" data-popup=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "popup", [], "any", false, false, false, 74);
                    echo "\">
                  ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 76
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 76);
                        echo "\" class=\"thumbnail-link\" data-large=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 76);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 76);
                        echo "\">
                      <img src=\"";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 77);
                        echo "\" class=\"img-thumbnail\" style=\"width: 60px; height: 60px;\" />
                    </a>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "              ";
            }
            // line 83
            echo "              </ul>
            </div>
          ";
        }
        // line 86
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">Product Specification</p>
              <p class=\"card-text\"><ul class=\"list-unstyled px-2\">
                ";
        // line 91
        if (($context["manufacturer"] ?? null)) {
            // line 92
            echo "                  <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 94
        echo "                <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
                <li>Weight: ";
        // line 95
        echo ($context["weight"] ?? null);
        echo " grams</li>
                <li>";
        // line 96
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
              </p>
            </div>
          </div>
          ";
        // line 116
        echo "
          ";
        // line 143
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3\">
            <button type=\"button\" class=\"btn btn-outline-secondary me-2\" title=\"";
        // line 147
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 150
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 155
        echo ($context["heading_title"] ?? null);
        echo "
          ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 157
            echo "                  ";
            if ((($context["rating"] ?? null) < $context["i"])) {
                // line 158
                echo "                    <span class=\"fa fa-paw text-muted fs-4\"></span>
                  ";
            } else {
                // line 160
                echo "                    <span class=\"fa fa-paw stars fs-4\"></span>
                  ";
            }
            // line 162
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                <a class=\"text-decoration-none text-black\">";
        echo ($context["reviews"] ?? null);
        echo "</a>
          </h1>
          ";
        // line 165
        if (($context["review_status"] ?? null)) {
            // line 166
            echo "            <div class=\"mt-3\">
              <p>
                
                </p>
            </div>
          ";
        }
        // line 172
        echo "
          ";
        // line 173
        if (($context["price"] ?? null)) {
            // line 174
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 175
            if ( !($context["special"] ?? null)) {
                // line 176
                echo "                <li><h2 id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 178
                echo "                <li><span class=\"text-muted text-decoration-line-through fs-4\" id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 id=\"special-price\" class=\"text-danger\">";
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
          <form id=\"product\">
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
                echo "                <div class=\"mb-3 d-flex gap-4\">
                  <label class=\"form-label\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                echo ":</label>
                  <input type=\"hidden\" name=\"option[";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                echo "]\" id=\"selectedOption";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                echo "\">
                  
                  <div class=\"d-flex flex-wrap gap-3\">
                    ";
                // line 196
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 196));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 197
                    echo "                      <div class=\"card selectable-option text-center\" style=\"width: 70px; cursor: pointer;\"
                        data-option-id=\"";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\"
                        data-option-value-id=\"";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 199);
                    echo "\"
                        data-option-name=\"";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 200);
                    echo "\"
                        data-popup=\"";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 201);
                    echo "\"
                        data-price=\"";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 202);
                    echo "\">
                        <img src=\"";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203);
                    echo "\" class=\"card-img-top\" style=\"height: 50px; object-fit: contain;\">
                        <p class=\"card-text small\">";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 204);
                    echo "</p>
                        ";
                    // line 206
                    echo "                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                  </div>
                </div>
                <div id=\"selectedPreview";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                echo "\" class=\"mb-2 text-muted\">No selection</div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "            ";
        }
        // line 214
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 216
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 217
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 220
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 221
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 223
        if ((($context["minimum"] ?? null) > 1)) {
            echo "`
              <div class=\"alert alert-info mt-2\">";
            // line 224
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 226
        echo "          </form>

          
        </div>
      </div>

      ";
        // line 232
        if (($context["products"] ?? null)) {
            // line 233
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 236
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 238);
                echo "\">
                  <img src=\"";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 239);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 239);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 243);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 245);
                echo "</p>
                  ";
                // line 246
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 246)) {
                    // line 247
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 248
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 249
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 249) < $context["j"])) {
                            // line 250
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 252
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 254
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "                    </div>
                  ";
                }
                // line 257
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 257)) {
                    // line 258
                    echo "                    <p class=\"price\">
                      ";
                    // line 259
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 259)) {
                        // line 260
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 260);
                        echo "
                      ";
                    } else {
                        // line 262
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 262);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 263
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 263);
                        echo "</span>
                      ";
                    }
                    // line 265
                    echo "                    </p>
                  ";
                }
                // line 267
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "        </div>
      ";
        }
        // line 273
        echo "
      ";
        // line 274
        if (($context["tags"] ?? null)) {
            // line 275
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 277
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 277);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 277);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 278
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "        </p>
      ";
        }
        // line 281
        echo "
    </main>
    ";
        // line 283
        if (($context["column_right"] ?? null)) {
            // line 284
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 286
        echo "  </div>

  <div class=\"card my-4\">
    <div class=\"card-header\">
      <p class=\"card-title\">";
        // line 290
        echo ($context["tab_description"] ?? null);
        echo "</p>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
        // line 293
        echo ($context["description"] ?? null);
        echo "</p>
    </div>
  </div>

  <div class=\"card my-4\">
    <div class=\"card-body\">
      ";
        // line 300
        echo "      <div class=\"card-body\">";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
  </div>

  <div class=\"card my-4 px-5 py-4\">
    ";
        // line 305
        if (($context["review_status"] ?? null)) {
            // line 306
            echo "      <div class=\"mb-3 d-flex align-items-center gap-4 \">
        <h4><strong>Product Ratings</strong></h4>
        <p class=\"mt-2\">";
            // line 308
            echo ($context["reviews"] ?? null);
            echo "</p>
      </div>
      <div class=\"p-4 border border-info-subtle rating-header\">
        <h4><strong class=\"fs-1\">";
            // line 311
            $context["full"] = twig_round(($context["rating"] ?? null), 0, "floor");
            echo " 
          ";
            // line 312
            $context["half"] = ((($context["rating"] ?? null) - ($context["full"] ?? null)) >= 0.5);
            // line 313
            echo "          ";
            echo twig_number_format_filter($this->env, ($context["rating"] ?? null), 1);
            echo "</strong> OUT OF 5</h4>
        
        ";
            // line 315
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 316
                echo "            ";
                if (($context["i"] <= ($context["full"] ?? null))) {
                    // line 317
                    echo "              <i class=\"fa fa-paw text-warning fs-4\"></i>
            ";
                } elseif (((                // line 318
$context["i"] == (($context["full"] ?? null) + 1)) && ($context["half"] ?? null))) {
                    // line 319
                    echo "              <i class=\"fa fa-paw text-secondary fs-4\" style=\"opacity: 0.5;\"></i>
            ";
                } else {
                    // line 321
                    echo "              <i class=\"fa fa-paw text-muted\"></i>
            ";
                }
                // line 323
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "      </div>
    ";
        }
        // line 326
        echo "    ";
        echo ($context["revieww"] ?? null);
        echo "
  </div>

   ";
        // line 329
        if (($context["review_status"] ?? null)) {
            // line 330
            echo "      <div id=\"tab-review\">
        <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
          <div id=\"review\"></div>
          <h5>";
            // line 333
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
            <label for=\"input-attachment\">Attach a file</label>
            <input type=\"file\" name=\"attachment\" class=\"form-control\" />
          </div>

          <div class=\"mb-3\">
            <label for=\"input-review\">";
            // line 353
            echo ($context["entry_review"] ?? null);
            echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
          </div>

          <div class=\"mb-3\">
            <label class=\"control-label\">";
            // line 358
            echo ($context["entry_rating"] ?? null);
            echo "</label>
            <div>
              ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 361
                echo "                <label class=\"me-2\">
                  <input type=\"radio\" name=\"rating\" value=\"";
                // line 362
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
            // line 365
            echo "            </div>
          </div>

          ";
            // line 368
            echo ($context["captcha"] ?? null);
            echo "
          <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
            // line 369
            echo ($context["button_continue"] ?? null);
            echo "</button>
        </form>
      </div>
    ";
        } else {
            // line 373
            echo "      <div id=\"tab-review\">
        ";
            // line 374
            echo ($context["text_login"] ?? null);
            echo "
      </div>
    ";
        }
        // line 377
        echo "
</div>

";
        // line 381
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
        // line 403
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
        // line 478
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
        // line 488
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

    lastTotalPrice = basePrice + priceDelta;
    \$('#special-price').text(formatPrice(lastTotalPrice));
  } else {
    \$('#special-price').text(formatPrice(basePrice));
  }

  console.log(\"Total price from options:\", totalPrice);
});

</script>


";
        // line 539
        echo "
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
        // line 609
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 611
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 613
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
        // line 681
        echo "
\$('#button-review').on('click', function (e) {
  e.preventDefault();

  var form = document.getElementById('form-review');
  var formData = new FormData(form);

  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 689
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
        // line 712
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
        // line 730
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__a2b4dc94ac6bc6fcdbf4edb7ca7a603b9da79d65dd648cc1a964f67ea5249957";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1208 => 730,  1187 => 712,  1161 => 689,  1151 => 681,  1081 => 613,  1076 => 611,  1071 => 609,  999 => 539,  970 => 488,  957 => 478,  880 => 403,  857 => 381,  852 => 377,  846 => 374,  843 => 373,  836 => 369,  832 => 368,  827 => 365,  816 => 362,  813 => 361,  809 => 360,  804 => 358,  796 => 353,  773 => 333,  768 => 330,  766 => 329,  759 => 326,  755 => 324,  749 => 323,  745 => 321,  741 => 319,  739 => 318,  736 => 317,  733 => 316,  729 => 315,  723 => 313,  721 => 312,  717 => 311,  711 => 308,  707 => 306,  705 => 305,  696 => 300,  687 => 293,  681 => 290,  675 => 286,  669 => 284,  667 => 283,  663 => 281,  659 => 279,  653 => 278,  644 => 277,  640 => 276,  635 => 275,  633 => 274,  630 => 273,  626 => 271,  617 => 267,  613 => 265,  608 => 263,  603 => 262,  597 => 260,  595 => 259,  592 => 258,  589 => 257,  585 => 255,  579 => 254,  575 => 252,  571 => 250,  568 => 249,  564 => 248,  561 => 247,  559 => 246,  555 => 245,  548 => 243,  539 => 239,  535 => 238,  531 => 236,  527 => 235,  521 => 233,  519 => 232,  511 => 226,  506 => 224,  502 => 223,  497 => 221,  493 => 220,  487 => 217,  483 => 216,  479 => 214,  476 => 213,  467 => 210,  463 => 208,  456 => 206,  452 => 204,  448 => 203,  444 => 202,  440 => 201,  436 => 200,  432 => 199,  428 => 198,  425 => 197,  421 => 196,  413 => 193,  409 => 192,  406 => 191,  402 => 190,  398 => 189,  395 => 188,  393 => 187,  389 => 185,  385 => 183,  376 => 182,  367 => 181,  362 => 179,  357 => 178,  351 => 176,  349 => 175,  346 => 174,  344 => 173,  341 => 172,  333 => 166,  331 => 165,  325 => 163,  319 => 162,  315 => 160,  311 => 158,  308 => 157,  304 => 156,  300 => 155,  290 => 150,  282 => 147,  276 => 143,  273 => 116,  263 => 96,  259 => 95,  252 => 94,  242 => 92,  240 => 91,  233 => 86,  228 => 83,  225 => 82,  218 => 80,  209 => 77,  200 => 76,  196 => 75,  191 => 74,  186 => 73,  183 => 72,  171 => 68,  165 => 67,  162 => 66,  158 => 65,  155 => 64,  147 => 61,  140 => 60,  138 => 59,  135 => 58,  133 => 57,  126 => 53,  122 => 52,  119 => 51,  113 => 49,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  100 => 44,  94 => 40,  83 => 37,  80 => 36,  76 => 35,  63 => 25,  59 => 24,  52 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a2b4dc94ac6bc6fcdbf4edb7ca7a603b9da79d65dd648cc1a964f67ea5249957", "");
    }
}
