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

/* __string_template__8573f178fb09a290ca213bbc40937a2bfc7e0ff497f1ca10c6fcac9645babc7a */
class __TwigTemplate_04e028b157f59a85d0fb683202ee7dca24ccc7d81100dbdddbe5671da545d71b extends Template
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
        echo " bg-dark\">
      ";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-md-6\">
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
          <ul class=\"nav nav-tabs mt-3\" role=\"tablist\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab-description\">";
        // line 54
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 56
        if (($context["attribute_groups"] ?? null)) {
            // line 57
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab-specification\">";
            // line 58
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
              </li>
            ";
        }
        // line 61
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 62
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab-review\">";
            // line 63
            echo ($context["tab_review"] ?? null);
            echo "</a>
              </li>
            ";
        }
        // line 66
        echo "          </ul>

          <div class=\"tab-content mt-3\">
            <div class=\"tab-pane fade show active\" id=\"tab-description\">";
        // line 69
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 70
        if (($context["attribute_groups"] ?? null)) {
            // line 71
            echo "              <div class=\"tab-pane fade\" id=\"tab-specification\">
                <table class=\"table table-bordered\">
                  ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 74
                echo "                    <thead>
                      <tr><th colspan=\"2\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 75);
                echo "</th></tr>
                    </thead>
                    <tbody>
                      ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 79
                    echo "                        <tr>
                          <td>";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 80);
                    echo "</td>
                          <td>";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 81);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                </table>
              </div>
            ";
        }
        // line 89
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 90
            echo "              <div class=\"tab-pane fade\" id=\"tab-review\">
                <form class=\"mt-3\" id=\"form-review\" method=\"post\" enctype=\"multipart/form-data\">
                  <div id=\"review\"></div>
                  <h5>";
            // line 93
            echo ($context["text_write"] ?? null);
            echo "</h5>
                  ";
            // line 94
            if (($context["review_guest"] ?? null)) {
                // line 95
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
                // line 111
                echo ($context["entry_review"] ?? null);
                echo "</label>
                      <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    </div>
                    <div class=\"mb-3\">
                      <label class=\"control-label\">";
                // line 115
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                      <div>
                        ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 118
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
                // line 120
                echo "                      </div>
                    </div>
                    ";
                // line 122
                echo ($context["captcha"] ?? null);
                echo "
                    <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
                // line 123
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  ";
            } else {
                // line 125
                echo "                    ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 127
            echo "                </form>
              </div>
            ";
        }
        // line 130
        echo "          </div>
        </div>

        <div class=\"col-md-6\">
          <div class=\"d-flex mb-3\">
            <button type=\"button\" class=\"btn btn-outline-secondary me-2\" title=\"";
        // line 135
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-heart text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 138
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
              <i class=\"fa fa-exchange text-primary\"></i>
            </button>
          </div>

          <h1>";
        // line 143
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 145
        if (($context["manufacturer"] ?? null)) {
            // line 146
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo ": <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 148
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo ": ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>Weight: ";
        // line 149
        echo ($context["weight"] ?? null);
        echo " grams</li>
            <li>";
        // line 150
        echo ($context["text_stock"] ?? null);
        echo ": ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 153
        if (($context["price"] ?? null)) {
            // line 154
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 155
            if ( !($context["special"] ?? null)) {
                // line 156
                echo "                <li><h2>";
                echo ($context["price"] ?? null);
                echo "</h2></li>
              ";
            } else {
                // line 158
                echo "                <li><span class=\"text-muted text-decoration-line-through\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2 class=\"text-danger\">";
                // line 159
                echo ($context["special"] ?? null);
                echo "</h2></li>
              ";
            }
            // line 161
            echo "              ";
            if (($context["tax"] ?? null)) {
                echo "<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>";
            }
            // line 162
            echo "              ";
            if (($context["points"] ?? null)) {
                echo "<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>";
            }
            // line 163
            echo "            </ul>
          ";
        }
        // line 165
        echo "
          <form>
            ";
        // line 167
        if (($context["options"] ?? null)) {
            // line 168
            echo "              <hr>
              <h4>";
            // line 169
            echo ($context["text_option"] ?? null);
            echo "</h4>
              ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 171
                echo "                <div class=\"mb-3\">
                  <label class=\"form-label\">";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                echo "</label>
                  <div>
                    ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 174));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 175
                    echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"option[";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 176);
                    echo "\">
                        <label class=\"form-check-label\">
                          ";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 178);
                    echo "
                          ";
                    // line 179
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179)) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 179);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179);
                        echo ")";
                    }
                    // line 180
                    echo "                        </label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "            ";
        }
        // line 187
        echo "
            <div class=\"mb-3\">
              <label for=\"input-quantity\">";
        // line 189
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"number\" id=\"input-quantity\" name=\"quantity\" value=\"";
        // line 190
        echo ($context["minimum"] ?? null);
        echo "\" class=\"form-control\" />
            </div>

            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 193
        echo ($context["product_id"] ?? null);
        echo "\">
            <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 194
        echo ($context["button_cart"] ?? null);
        echo "</button>

            ";
        // line 196
        if ((($context["minimum"] ?? null) > 1)) {
            // line 197
            echo "              <div class=\"alert alert-info mt-2\">";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 199
        echo "          </form>

          ";
        // line 201
        if (($context["review_status"] ?? null)) {
            // line 202
            echo "            <div class=\"mt-3\">
              <p>
                ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 205
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 206
                    echo "                    <span class=\"fa fa-star-o text-warning\"></span>
                  ";
                } else {
                    // line 208
                    echo "                    <span class=\"fa fa-star text-warning\"></span>
                  ";
                }
                // line 210
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>
                / 
                <a href=\"#tab-review\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            // line 213
            echo ($context["text_write"] ?? null);
            echo "</a>
              </p>
            </div>
          ";
        }
        // line 217
        echo "        </div>
      </div>

      ";
        // line 220
        if (($context["products"] ?? null)) {
            // line 221
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 224
                echo "            <div class=\"col-md-3 col-sm-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 226);
                echo "\">
                  <img src=\"";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 227);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 227);
                echo "\">
                </a>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                    <a href=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 231);
                echo "</a>
                  </h5>
                  <p class=\"card-text\">";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 233);
                echo "</p>
                  ";
                // line 234
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 234)) {
                    // line 235
                    echo "                    <div class=\"rating mb-2\">
                      ";
                    // line 236
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 237
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 237) < $context["j"])) {
                            // line 238
                            echo "                          <span class=\"fa fa-star-o text-warning\"></span>
                        ";
                        } else {
                            // line 240
                            echo "                          <span class=\"fa fa-star text-warning\"></span>
                        ";
                        }
                        // line 242
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo "                    </div>
                  ";
                }
                // line 245
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 245)) {
                    // line 246
                    echo "                    <p class=\"price\">
                      ";
                    // line 247
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 247)) {
                        // line 248
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 248);
                        echo "
                      ";
                    } else {
                        // line 250
                        echo "                        <span class=\"text-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 250);
                        echo "</span>
                        <span class=\"text-muted text-decoration-line-through\">";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 251);
                        echo "</span>
                      ";
                    }
                    // line 253
                    echo "                    </p>
                  ";
                }
                // line 255
                echo "                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "        </div>
      ";
        }
        // line 261
        echo "
      ";
        // line 262
        if (($context["tags"] ?? null)) {
            // line 263
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 265
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 265);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ", ";
                }
                // line 266
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "        </p>
      ";
        }
        // line 269
        echo "
      ";
        // line 270
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>

    ";
        // line 273
        if (($context["column_right"] ?? null)) {
            // line 274
            echo "      <aside class=\"col-md-3\">";
            echo ($context["column_right"] ?? null);
            echo "</aside>
    ";
        }
        // line 276
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
        // line 378
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 380
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 382
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
        // line 451
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 460
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
        // line 501
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__8573f178fb09a290ca213bbc40937a2bfc7e0ff497f1ca10c6fcac9645babc7a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  992 => 501,  948 => 460,  936 => 451,  864 => 382,  859 => 380,  854 => 378,  750 => 276,  744 => 274,  742 => 273,  736 => 270,  733 => 269,  729 => 267,  723 => 266,  714 => 265,  710 => 264,  705 => 263,  703 => 262,  700 => 261,  696 => 259,  687 => 255,  683 => 253,  678 => 251,  673 => 250,  667 => 248,  665 => 247,  662 => 246,  659 => 245,  655 => 243,  649 => 242,  645 => 240,  641 => 238,  638 => 237,  634 => 236,  631 => 235,  629 => 234,  625 => 233,  618 => 231,  609 => 227,  605 => 226,  601 => 224,  597 => 223,  591 => 221,  589 => 220,  584 => 217,  577 => 213,  571 => 211,  565 => 210,  561 => 208,  557 => 206,  554 => 205,  550 => 204,  546 => 202,  544 => 201,  540 => 199,  534 => 197,  532 => 196,  527 => 194,  523 => 193,  517 => 190,  513 => 189,  509 => 187,  506 => 186,  498 => 183,  490 => 180,  483 => 179,  479 => 178,  472 => 176,  469 => 175,  465 => 174,  460 => 172,  457 => 171,  453 => 170,  449 => 169,  446 => 168,  444 => 167,  440 => 165,  436 => 163,  427 => 162,  418 => 161,  413 => 159,  408 => 158,  402 => 156,  400 => 155,  397 => 154,  395 => 153,  387 => 150,  383 => 149,  376 => 148,  366 => 146,  364 => 145,  359 => 143,  349 => 138,  341 => 135,  334 => 130,  329 => 127,  323 => 125,  318 => 123,  314 => 122,  310 => 120,  299 => 118,  295 => 117,  290 => 115,  283 => 111,  265 => 95,  263 => 94,  259 => 93,  254 => 90,  251 => 89,  246 => 86,  239 => 84,  230 => 81,  226 => 80,  223 => 79,  219 => 78,  213 => 75,  210 => 74,  206 => 73,  202 => 71,  200 => 70,  196 => 69,  191 => 66,  185 => 63,  182 => 62,  179 => 61,  173 => 58,  170 => 57,  168 => 56,  163 => 54,  158 => 51,  154 => 49,  142 => 45,  136 => 44,  133 => 43,  128 => 42,  119 => 38,  113 => 37,  110 => 36,  108 => 35,  105 => 34,  103 => 33,  96 => 29,  92 => 28,  89 => 27,  83 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  70 => 20,  64 => 16,  53 => 13,  50 => 12,  46 => 11,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8573f178fb09a290ca213bbc40937a2bfc7e0ff497f1ca10c6fcac9645babc7a", "");
    }
}
