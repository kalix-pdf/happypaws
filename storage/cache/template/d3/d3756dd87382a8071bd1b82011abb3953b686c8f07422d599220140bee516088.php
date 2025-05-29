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

/* __string_template__9b58d95331d8f83d20f1fa01d096a2cba8f388ed0071d9a97c246f69a9d89486 */
class __TwigTemplate_0964c6d96d8e5f7e3b6e0de439ee6efbfe0ab1e95778f6bbb45291860903c550 extends Template
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
        echo "<div id=\"product-product\" class=\"container\">
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

  <div class=\"row\">
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
    <main id=\"content\" class=\"col-md-";
        // line 28
        echo ($context["mainCol"] ?? null);
        echo "\">
      ";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6 container\">
          ";
        // line 33
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 34
            echo "            <ul class=\"list-unstyled d-flex flex-wrap gap-2\">
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
                echo "\" class=\"img-fluid\"/>
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
          <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
              <p class=\"card-text\">";
        // line 54
        echo ($context["tab_description"] ?? null);
        echo "</p>
            </div>
          </div>
          ";
        // line 72
        echo "
          <div class=\"tab-content mt-3\">
            <div class=\"tab-pane fade show active\" id=\"tab-description\">";
        // line 74
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 75
        if (($context["attribute_groups"] ?? null)) {
            // line 76
            echo "              <div class=\"tab-pane fade\" id=\"tab-specification\">
                <table class=\"table table-bordered\">
                  ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 79
                echo "                    <thead>
                      <tr><th colspan=\"2\">";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 80);
                echo "</th></tr>
                    </thead>
                    <tbody>
                      ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 84
                    echo "                        <tr>
                          <td>";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 85);
                    echo "</td>
                          <td>";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 86);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                </table>
              </div>
            ";
        }
        // line 94
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 95
            echo "              <div class=\"tab-pane fade\" id=\"tab-review\">
                <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
                  <div id=\"review\"></div>
                  <h5>";
            // line 98
            echo ($context["text_write"] ?? null);
            echo "</h5>
                  ";
            // line 99
            if (($context["review_guest"] ?? null)) {
                // line 100
                echo "                    <div class=\"mb-3\">
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
                // line 116
                echo ($context["entry_review"] ?? null);
                echo "</label>
                      <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    </div>
                    <div class=\"mb-3\">
                      <label class=\"control-label\">";
                // line 120
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                      <div>
                        ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 123
                    echo "                          <label class=\"me-2\"><input type=\"radio\" name=\"rating\" value=\"";
                    echo $context["i"];
                    echo "\"> ";
                    echo $context["i"];
                    echo "</label>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                      </div>
                    </div>
                    ";
                // line 127
                echo ($context["captcha"] ?? null);
                echo "
                    <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
                // line 128
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  ";
            } else {
                // line 130
                echo "                    ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 132
            echo "                </form>
              </div>
            ";
        }
        // line 135
        echo "          </div>
        </div>

        <div class=\"col-md-6\">
          <div class=\"d-flex mb-3\">
            <button type=\"button\" class=\"btn btn-outline-secondary me-2\" title=\"";
        // line 140
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 143
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange text-primary\"></i>
            </button>
          </div>

          <h1>";
        // line 148
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 150
        if (($context["manufacturer"] ?? null)) {
            // line 151
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 153
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>Weight: ";
        // line 154
        echo ($context["weight"] ?? null);
        echo " grams</li>
            <li>";
        // line 155
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 158
        if (($context["price"] ?? null)) {
            // line 159
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 160
            if ( !($context["special"] ?? null)) {
                // line 161
                echo "                <li><h2>";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 163
                echo "                <li><span class=\"text-muted text-decoration-line-through\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 class=\"text-danger\">";
                // line 164
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 166
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 167
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 168
            echo "            </ul>
          ";
        }
        // line 170
        echo "
          <form>
            ";
        // line 172
        if (($context["options"] ?? null)) {
            // line 173
            echo "              <hr>
              <h4>";
            // line 174
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 176
                echo "                <div class=\"mb-3\">
                  <label class=\"form-label\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 177);
                echo "</label>
                  <div>
                    ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 179));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 180
                    echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"option[";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 181);
                    echo "\">
                        <label class=\"form-check-label\">
                          ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                    echo "
                          ";
                    // line 184
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184);
                        echo ")";
                    }
                    // line 185
                    echo "                        </label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "            ";
        }
        // line 192
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 194
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 195
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 198
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 199
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 201
        if ((($context["minimum"] ?? null) > 1)) {
            // line 202
            echo "              <div class=\"alert alert-info mt-2\">";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 204
        echo "          </form>

          ";
        // line 206
        if (($context["review_status"] ?? null)) {
            // line 207
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 210
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 211
                    echo "                    <span class=\"fa fa-star-o text-warning\"></span>
                  ";
                } else {
                    // line 213
                    echo "                    <span class=\"fa fa-star text-warning\"></span>
                  ";
                }
                // line 215
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                / 
                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            // line 218
            echo ($context["text_write"] ?? null);
            echo "</a>
              </p>
            </div>
          ";
        }
        // line 222
        echo "        </div>
      </div>

      ";
        // line 225
        if (($context["products"] ?? null)) {
            // line 226
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 229
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
                echo "\">
                  <img src=\"";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 232);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 232);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 236);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 238);
                echo "</p>
                  ";
                // line 239
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 239)) {
                    // line 240
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 241
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 242
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 242) < $context["j"])) {
                            // line 243
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 245
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 247
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 248
                    echo "                    </div>
                  ";
                }
                // line 250
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "                    <p class=\"price\">
                      ";
                    // line 252
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 252)) {
                        // line 253
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 253);
                        echo "
                      ";
                    } else {
                        // line 255
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 255);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 256);
                        echo "</span>
                      ";
                    }
                    // line 258
                    echo "                    </p>
                  ";
                }
                // line 260
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "        </div>
      ";
        }
        // line 266
        echo "
      ";
        // line 267
        if (($context["tags"] ?? null)) {
            // line 268
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 270
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 270);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 270);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 271
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "        </p>
      ";
        }
        // line 274
        echo "
      ";
        // line 275
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>

    ";
        // line 278
        if (($context["column_right"] ?? null)) {
            // line 279
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 281
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
        // line 383
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 385
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 387
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
        // line 456
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 465
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
        // line 506
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__9b58d95331d8f83d20f1fa01d096a2cba8f388ed0071d9a97c246f69a9d89486";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 506,  925 => 465,  913 => 456,  841 => 387,  836 => 385,  831 => 383,  727 => 281,  721 => 279,  719 => 278,  713 => 275,  710 => 274,  706 => 272,  700 => 271,  691 => 270,  687 => 269,  682 => 268,  680 => 267,  677 => 266,  673 => 264,  664 => 260,  660 => 258,  655 => 256,  650 => 255,  644 => 253,  642 => 252,  639 => 251,  636 => 250,  632 => 248,  626 => 247,  622 => 245,  618 => 243,  615 => 242,  611 => 241,  608 => 240,  606 => 239,  602 => 238,  595 => 236,  586 => 232,  582 => 231,  578 => 229,  574 => 228,  568 => 226,  566 => 225,  561 => 222,  554 => 218,  548 => 216,  542 => 215,  538 => 213,  534 => 211,  531 => 210,  527 => 209,  523 => 207,  521 => 206,  517 => 204,  511 => 202,  509 => 201,  504 => 199,  500 => 198,  494 => 195,  490 => 194,  486 => 192,  483 => 191,  475 => 188,  467 => 185,  460 => 184,  456 => 183,  449 => 181,  446 => 180,  442 => 179,  437 => 177,  434 => 176,  430 => 175,  426 => 174,  423 => 173,  421 => 172,  417 => 170,  413 => 168,  404 => 167,  395 => 166,  390 => 164,  385 => 163,  379 => 161,  377 => 160,  374 => 159,  372 => 158,  364 => 155,  360 => 154,  353 => 153,  343 => 151,  341 => 150,  336 => 148,  326 => 143,  318 => 140,  311 => 135,  306 => 132,  300 => 130,  295 => 128,  291 => 127,  287 => 125,  276 => 123,  272 => 122,  267 => 120,  260 => 116,  242 => 100,  240 => 99,  236 => 98,  231 => 95,  228 => 94,  223 => 91,  216 => 89,  207 => 86,  203 => 85,  200 => 84,  196 => 83,  190 => 80,  187 => 79,  183 => 78,  179 => 76,  177 => 75,  173 => 74,  169 => 72,  163 => 54,  158 => 51,  154 => 49,  142 => 45,  136 => 44,  133 => 43,  128 => 42,  119 => 38,  113 => 37,  110 => 36,  108 => 35,  105 => 34,  103 => 33,  96 => 29,  92 => 28,  89 => 27,  83 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  70 => 20,  64 => 16,  53 => 13,  50 => 12,  46 => 11,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9b58d95331d8f83d20f1fa01d096a2cba8f388ed0071d9a97c246f69a9d89486", "");
    }
}
