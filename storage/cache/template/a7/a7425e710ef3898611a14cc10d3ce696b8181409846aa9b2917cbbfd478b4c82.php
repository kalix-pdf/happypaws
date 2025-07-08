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

/* __string_template__c6ea9fb5684443d9dea6cd5bb35948d4e58ad4427c751bac18e874bd06fc2d97 */
class __TwigTemplate_8f377784a91a0bd6b650cfa88e5c94c9da2b159d6c45b2df33903874124c37de extends Template
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
<div class=\"custom-header-bar py-3\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-end\">
      <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
        <div class=\"search-cart d-flex justify-content-end align-items-center\">
          <div class=\"search flex-grow me-2\">";
        // line 7
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"carts\">";
        // line 8
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </ol>
  </nav>

  <div class=\"row p-3 rounded-3 mainproduct\">
    ";
        // line 27
        $context["left"] = ((($context["column_left"] ?? null)) ? (1) : (0));
        // line 28
        echo "    ";
        $context["right"] = ((($context["column_right"] ?? null)) ? (1) : (0));
        // line 29
        echo "    ";
        $context["mainCol"] = (12 - ((($context["left"] ?? null) + ($context["right"] ?? null)) * 3));
        // line 30
        echo "
    ";
        // line 31
        if (($context["column_left"] ?? null)) {
            // line 32
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 34
        echo "
    <main id=\"content\" class=\"col-md-";
        // line 35
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 36
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 card\">
          ";
        // line 40
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 41
            echo "            <div class=\"main-image text-center mb-3\">
              ";
            // line 42
            if (($context["thumb"] ?? null)) {
                // line 43
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                  <img id=\"main-image\" src=\"";
                // line 44
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid card-img-top\" style=\"height: 270px; width: 270px;\" />
                </a>
              ";
            }
            // line 47
            echo "              <ul class=\"list-unstyled d-flex flex-wrap gap-2 justify-content-start\" id=\"thumbnail-list\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 49
                echo "                <li>
                  <a href=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 50);
                echo "\" class=\"thumbnail-link\" data-large=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 50);
                echo "\">
                    <img src=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 51);
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
            // line 55
            echo "                ";
            if (($context["options"] ?? null)) {
                // line 56
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 57
                    echo "                  <li class=\"option-swatches d-flex gap-2 justify-content-center\" data-popup=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["option_value"] ?? null), "popup", [], "any", false, false, false, 57);
                    echo "\">
                  ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 59
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 59);
                        echo "\" class=\"thumbnail-link\" data-large=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 59);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 59);
                        echo "\">
                      <img src=\"";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 60);
                        echo "\" class=\"img-thumbnail\" style=\"width: 60px; height: 60px;\" />
                    </a>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "              ";
            }
            // line 66
            echo "              </ul>
            </div>
          ";
        }
        // line 69
        echo "
          <div>
            <div class=\"card-body\">
              <p class=\"card-header\">Product Specification</p>
              <p class=\"card-text\"><ul class=\"list-unstyled px-2\">
                ";
        // line 74
        if (($context["manufacturer"] ?? null)) {
            // line 75
            echo "                  <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 77
        echo "                <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
                <li>Weight: ";
        // line 78
        echo ($context["weight"] ?? null);
        echo " grams</li>
                <li>";
        // line 79
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
              </p>
            </div>
          </div>
          ";
        // line 99
        echo "
          ";
        // line 126
        echo "        </div>

        <div class=\"col-md-6 px-4\">
          <div class=\"d-flex mb-3 wishlisht\">
            <button type=\"button\" class=\"btn  me-2\" title=\"";
        // line 130
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart\"></i>
            </button>
            <button type=\"button\" class=\"btn\" title=\"";
        // line 133
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange\"></i>
            </button>
          </div>

          <h1>";
        // line 138
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 139
        if (($context["review_status"] ?? null)) {
            // line 140
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 143
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 144
                    echo "                    <span class=\"fa fa-paw text-muted fs-4\"></span>
                  ";
                } else {
                    // line 146
                    echo "                    <span class=\"fa fa-paw stars fs-4\"></span>
                  ";
                }
                // line 148
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                <a class=\"text-decoration-none text-black\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                </p>
            </div>
          ";
        }
        // line 153
        echo "
          ";
        // line 154
        if (($context["price"] ?? null)) {
            // line 155
            echo "            <ul class=\"list-unstyled d-flex gap-3\">
              ";
            // line 156
            if ( !($context["special"] ?? null)) {
                // line 157
                echo "                <li><h2 id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 159
                echo "                <li><span class=\"text-muted text-decoration-line-through fs-4\" id=\"regular-price\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 id=\"special-price\" class=\"text-danger\">";
                // line 160
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 162
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 163
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 164
            echo "            </ul>
          ";
        }
        // line 166
        echo "
          <form id=\"product\">
            ";
        // line 168
        if (($context["options"] ?? null)) {
            // line 169
            echo "            <div id=\"original-variation-slot\">
              <hr>
              <h4>";
            // line 171
            echo ($context["text_option"] ?? null);
            echo "</h4>
              <div id=\"product-variation-wrapper\" class=\"product-variations\">
                ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 174
                echo "                  <div class=\"mb-3 d-flex gap-4 product-variations\">
                    <label class=\"form-label\">";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 175);
                echo ":</label>
                    <input type=\"hidden\" name=\"option[";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                echo "]\" id=\"selectedOption";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                echo "\">
                    
                    <div class=\"d-flex flex-wrap gap-3\">
                      ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 179));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 180
                    echo "                        <div class=\"card selectable-option text-center\" style=\"width: 70px; cursor: pointer;\"
                          data-option-id=\"";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\"
                          data-option-value-id=\"";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                    echo "\"
                          data-option-name=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                    echo "\"
                          data-popup=\"";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "popup", [], "any", false, false, false, 184);
                    echo "\"
                          data-price=\"";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                    echo "\">
                          <img src=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 186);
                    echo "\" class=\"card-img-top\" style=\"height: 50px; object-fit: contain;\">
                          <p class=\"card-text small\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                    echo "</p>
                          ";
                    // line 189
                    echo "                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                    </div>
                  </div>
                  <div id=\"selectedPreview";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                echo "\" class=\"mb-2 text-muted\">No selection</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "              </div>
            </div>
            ";
        }
        // line 198
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 200
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 201
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 204
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-lg btn-block\">";
        // line 205
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 207
        if ((($context["minimum"] ?? null) > 1)) {
            echo "`
              <div class=\"alert alert-info mt-2\">";
            // line 208
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 210
        echo "
            ";
        // line 212
        echo "            <div class=\"modal fade\" id=\"confirmAddToCartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content rounded-3\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalLabel\">Confirm Add to Cart</h5>
                  </div>
                  <div class=\"modal-body\">
                    <div id=\"modal-summary\">
                      <strong>Product: </strong>";
        // line 220
        echo ($context["heading_title"] ?? null);
        echo "<br>
                      <strong>Price:</strong> <span id=\"modal-price\">";
        // line 221
        echo ($context["currency_symbol"] ?? null);
        echo ((($context["special"] ?? null)) ? (($context["special_value"] ?? null)) : (($context["price_value"] ?? null)));
        echo "</span>
                    </div>
                    <div id=\"modal-variation-container\"></div>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" id=\"confirmAddToCartBtn\" class=\"btn\">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          
        </div>
      </div>

      ";
        // line 237
        if (($context["products"] ?? null)) {
            // line 238
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 241
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 243);
                echo "\">
                  <img src=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 244);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 244);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 248);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 250);
                echo "</p>
                  ";
                // line 251
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 253
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 254
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 254) < $context["j"])) {
                            // line 255
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 257
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 259
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 260
                    echo "                    </div>
                  ";
                }
                // line 262
                echo "                  
                  ";
                // line 263
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["address"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["adress_info"]) {
                    echo "s
                    <div><p>To ";
                    // line 264
                    echo ($context["zone"] ?? null);
                    echo ", ";
                    echo ($context["city"] ?? null);
                    echo " City</p></div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress_info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 266
                echo "                  
                  ";
                // line 267
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

  <div class=\"card my-4 shop\">
    <div class=\"card-body\">
      <div class=\"card-body\">";
        // line 309
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
  </div>

  <div class=\"card my-4 px-5 py-4 prod-ratings\">
    ";
        // line 314
        if (($context["review_status"] ?? null)) {
            // line 315
            echo "      <div class=\"mb-3 d-flex align-items-center gap-4 \">
        <h4><strong>Product Ratings</strong></h4>
        <p class=\"mt-2\">";
            // line 317
            echo ($context["reviews"] ?? null);
            echo "</p>
      </div>
      <div class=\"p-4 border border-info-subtle rating-header\">
        <h4><strong class=\"fs-1\">";
            // line 320
            $context["full"] = twig_round(($context["rating"] ?? null), 0, "floor");
            echo " 
          ";
            // line 321
            $context["half"] = ((($context["rating"] ?? null) - ($context["full"] ?? null)) >= 0.5);
            // line 322
            echo "          ";
            echo twig_number_format_filter($this->env, ($context["rating"] ?? null), 1);
            echo "</strong> OUT OF 5</h4>
        
        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 325
                echo "            ";
                if (($context["i"] <= ($context["full"] ?? null))) {
                    // line 326
                    echo "              <i class=\"fa fa-paw text-warning fs-4\"></i>
            ";
                } elseif (((                // line 327
$context["i"] == (($context["full"] ?? null) + 1)) && ($context["half"] ?? null))) {
                    // line 328
                    echo "              <i class=\"fa fa-paw text-secondary fs-4\" style=\"opacity: 0.5;\"></i>
            ";
                } else {
                    // line 330
                    echo "              <i class=\"fa fa-paw text-muted\"></i>
            ";
                }
                // line 332
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "      </div>
    ";
        }
        // line 335
        echo "    <a href=\"index.php?route=product/allreview&product_id=";
        echo ($context["product_id"] ?? null);
        echo "\" class=\"text-decoration-none text-black\">";
        echo ($context["revieww"] ?? null);
        echo "</a>
  </div>

    ";
        // line 338
        if ((($context["seller_is_logged"] ?? null) == ($context["is_logged"] ?? null))) {
            // line 339
            echo "      <div id=\"tab-review\">
        <div class=\"card p-4\"> 
        <div class=\"container\">You can't review your own product</div>
        </div>
      </div>
    ";
        } elseif (        // line 344
($context["is_logged"] ?? null)) {
            // line 345
            echo "      <div class=\"card px-5 py-4 my-4\">
        <div id=\"tab-review\" class=\"tab-review\">
          <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
            <div id=\"review\"></div>
            <h4 class=\"mb-3\">";
            // line 349
            echo ($context["text_write"] ?? null);
            echo "</h4>

            <div class=\"mb-3\">
              <label class=\"mb-2 col-md-2\">Display Name:</label>
              <div class=\"btn-group\" role=\"group\">
                <input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" id=\"name1\" value=\"0\" autocomplete=\"off\" checked>
                <label class=\"btn border\" for=\"name1\">Show my name</label>

                <input type=\"radio\" class=\"btn-check\" name=\"is_anonymous\" id=\"name2\" value=\"1\" autocomplete=\"off\">
                <label class=\"btn border\" for=\"name2\">Post as Anonymous</label>
              </div>
            </div>


            <div class=\"mb-3\">
            <div id=\"image-preview\" class=\"mt-2\"></div>
              <label for=\"attachments\">Attach a file</label>
              <input type=\"file\" name=\"attachments[]\" class=\"form-control\"  multiple accept=\"image/*, video/mp4\"/>
            </div>

            <div class=\"mb-3\">
              <label for=\"input-review\">";
            // line 370
            echo ($context["entry_review"] ?? null);
            echo "</label>
              <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
            </div>

            <div class=\"mb-3\">
              <label class=\"control-label\">";
            // line 375
            echo ($context["entry_rating"] ?? null);
            echo "</label>
              <div class=\"rating-paws d-flex flex-row-reverse gap-1 justify-content-end\">
                ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 378
                echo "                  <label class=\"me-2 paw-label\">
                    <input type=\"radio\" name=\"rating\" value=\"";
                // line 379
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
            // line 383
            echo "              </div>
            </div>

            <button type=\"button\" id=\"button-review\" class=\"btn mb-4\">";
            // line 386
            echo ($context["button_continue"] ?? null);
            echo "</button>
          </form>
        </div>
      </div>
    ";
        } else {
            // line 391
            echo "      <div id=\"tab-review\">
        <div class=\"card p-4\"> 
        <div class=\"container\">";
            // line 393
            echo ($context["text_login"] ?? null);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 397
        echo "

</div>

";
        // line 402
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
        // line 424
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
        // line 496
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
        // line 506
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
      \$('#modal-price').text(formatPrice(lastTotalPrice));
    } else {
      \$('#special-price').text(formatPrice(basePrice));
      \$('#regular-price').text(formatPrice(basePrice));
      \$('#modal-price').text(formatPrice(basePrice));
    }

    console.log(\"Total price from options:\", totalPrice);
  });
</script>


";
        // line 536
        echo "<script>
document.addEventListener('DOMContentLoaded', function () {
  const fileInput = document.querySelector('input[name=\"attachments[]\"]');
  const preview = document.getElementById('image-preview');

  if (fileInput && preview) {
    fileInput.addEventListener('change', function (e) {
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
  }
});
</script>

<script type=\"text/javascript\">
  \$('#button-cart').on('click', function (e) {
    e.preventDefault();

    let originalContainer = \$('#product-variation-wrapper');
    var productName = \$('#content h1').text(); 
    var quantity = \$('#input-quantity').val();

    \$('#modal-variation-container').append(originalContainer);

    \$('#confirmAddToCartModal').modal('show');
  });


  \$('#confirmAddToCartModal').on('hidden.bs.modal', function () {
    \$('#original-variation-slot').append(\$('#product-variation-wrapper'));
  });
  

  \$('#confirmAddToCartBtn').on('click', function () {
    \$('#confirmAddToCartModal').modal('hide');
    document.activeElement.blur();
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

          \$('.text-danger').parent().addClass('has-error');
        }

        if (json['success']) {
          \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

          \$('html, body').animate({ scrollTop: 0 }, 'slow');

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

</script>


";
        // line 711
        echo "
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 715
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 717
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 719
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
        // line 787
        echo "
\$('#button-review').on('click', function (e) {
  e.preventDefault();

  var form = document.getElementById('form-review');
  var formData = new FormData(form);

  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 795
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
        // line 818
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
        // line 836
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__c6ea9fb5684443d9dea6cd5bb35948d4e58ad4427c751bac18e874bd06fc2d97";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1305 => 836,  1284 => 818,  1258 => 795,  1248 => 787,  1178 => 719,  1173 => 717,  1168 => 715,  1162 => 711,  1050 => 536,  1018 => 506,  1005 => 496,  931 => 424,  908 => 402,  902 => 397,  895 => 393,  891 => 391,  883 => 386,  878 => 383,  866 => 379,  863 => 378,  859 => 377,  854 => 375,  846 => 370,  822 => 349,  816 => 345,  814 => 344,  807 => 339,  805 => 338,  796 => 335,  792 => 333,  786 => 332,  782 => 330,  778 => 328,  776 => 327,  773 => 326,  770 => 325,  766 => 324,  760 => 322,  758 => 321,  754 => 320,  748 => 317,  744 => 315,  742 => 314,  734 => 309,  725 => 303,  719 => 300,  713 => 296,  707 => 294,  705 => 293,  701 => 291,  697 => 289,  691 => 288,  682 => 287,  678 => 286,  673 => 285,  671 => 284,  668 => 283,  664 => 281,  655 => 277,  651 => 275,  646 => 273,  641 => 272,  635 => 270,  633 => 269,  630 => 268,  628 => 267,  625 => 266,  615 => 264,  609 => 263,  606 => 262,  602 => 260,  596 => 259,  592 => 257,  588 => 255,  585 => 254,  581 => 253,  578 => 252,  576 => 251,  572 => 250,  565 => 248,  556 => 244,  552 => 243,  548 => 241,  544 => 240,  538 => 238,  536 => 237,  516 => 221,  512 => 220,  502 => 212,  499 => 210,  494 => 208,  490 => 207,  485 => 205,  481 => 204,  475 => 201,  471 => 200,  467 => 198,  462 => 195,  454 => 193,  450 => 191,  443 => 189,  439 => 187,  435 => 186,  431 => 185,  427 => 184,  423 => 183,  419 => 182,  415 => 181,  412 => 180,  408 => 179,  400 => 176,  396 => 175,  393 => 174,  389 => 173,  384 => 171,  380 => 169,  378 => 168,  374 => 166,  370 => 164,  361 => 163,  352 => 162,  347 => 160,  342 => 159,  336 => 157,  334 => 156,  331 => 155,  329 => 154,  326 => 153,  318 => 149,  312 => 148,  308 => 146,  304 => 144,  301 => 143,  297 => 142,  293 => 140,  291 => 139,  287 => 138,  277 => 133,  269 => 130,  263 => 126,  260 => 99,  250 => 79,  246 => 78,  239 => 77,  229 => 75,  227 => 74,  220 => 69,  215 => 66,  212 => 65,  205 => 63,  196 => 60,  187 => 59,  183 => 58,  178 => 57,  173 => 56,  170 => 55,  158 => 51,  152 => 50,  149 => 49,  145 => 48,  142 => 47,  134 => 44,  127 => 43,  125 => 42,  122 => 41,  120 => 40,  113 => 36,  109 => 35,  106 => 34,  100 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  87 => 27,  81 => 23,  70 => 20,  67 => 19,  63 => 18,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c6ea9fb5684443d9dea6cd5bb35948d4e58ad4427c751bac18e874bd06fc2d97", "");
    }
}
