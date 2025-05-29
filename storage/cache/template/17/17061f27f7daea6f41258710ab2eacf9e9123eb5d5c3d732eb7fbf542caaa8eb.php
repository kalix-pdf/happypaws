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

/* __string_template__fb5f19e14e00c2a5fc5261756db2c2b2ac963ac16539868d5e2fe8580fb0190e */
class __TwigTemplate_b483ebb3d7f0cee6d1cbae43409c4c95b4ee56a722f22140ac09bfcbc9196cf7 extends Template
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
\t<nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
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
\t<div class=\"row\">
  ";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 22
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 24
            echo "\t\t";
        } else {
            // line 25
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 26
            echo "\t\t";
        }
        // line 27
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 29
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 30
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-6";
            // line 31
            echo "\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-8";
            // line 33
            echo "\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 35
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 36
            echo "\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t";
            // line 37
            if (($context["thumb"] ?? null)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                // line 39
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 45);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 46);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 54
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 56
        if (($context["attribute_groups"] ?? null)) {
            // line 57
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 58
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 63
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 68
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t";
        // line 69
        if (($context["attribute_groups"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 76);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 81));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 83);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 84);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" enctype=\"multipart/form-data\" id=\"form-review\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 96
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t\t";
            // line 97
            if (($context["review_guest"] ?? null)) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Display Name:</label><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"is_anonymous\" id=\"show_name\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"show_name\">Show my name</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"is_anonymous\" id=\"anonymous\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"anonymous\">Post as Anonymous</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-attachment\">Attach a file</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"attachment\" id=\"input-attachment\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>

                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 123
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    ";
                // line 126
                echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12 rating\">
                    <label class=\"control-label\">";
                // line 130
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 131
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 141
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 143
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 146
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 150
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 152
            echo "              </form>
            </div>
            ";
        }
        // line 154
        echo "</div>
        </div>
        ";
        // line 156
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 157
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 158
            echo "        ";
        } else {
            // line 159
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 160
            echo "        ";
        }
        // line 161
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 163
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\" style=\"color: #162F65\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 164
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\" style=\"color: #162F65\"></i></button>
          </div>
          <h1>";
        // line 166
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 168
        if (($context["manufacturer"] ?? null)) {
            // line 169
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 171
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>weight: ";
        // line 172
        echo ($context["weight"] ?? null);
        echo " grams</li>
            ";
        // line 173
        if (($context["reward"] ?? null)) {
            // line 174
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 176
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 178
        if (($context["price"] ?? null)) {
            // line 179
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 180
            if ( !($context["special"] ?? null)) {
                // line 181
                echo "            <li>
              <h2>";
                // line 182
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 185
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2>";
                // line 187
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 190
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 191
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 193
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 194
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 196
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 197
                echo "            <li>
              <hr>
            </li>
            ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 201
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 201);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 201);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "            ";
            }
            // line 204
            echo "          </ul>
          ";
        }
        // line 206
        echo "          <div id=\"product\"> 
          ";
        // line 207
        if (($context["options"] ?? null)) {
            // line 208
            echo "            <hr>
            <h3>";
            // line 209
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 211
                echo "            ";
                // line 212
                echo "            ";
                // line 224
                echo "            ";
                // line 225
                echo "            
            <div class=\"form-group";
                // line 226
                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 226)) {
                    echo " required ";
                }
                echo "\">
              <label class=\"control-label\">";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 227);
                echo "</label>
              <div id=\"input-option";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                echo "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 228));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 229
                    echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 231);
                    echo "\" />
                    ";
                    // line 232
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 232)) {
                        echo " <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 232);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 232);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 232)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 232);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 232);
                            echo " ";
                        }
                        echo "\" class=\"img-thumbnail\" /> ";
                    }
                    echo "                  
                    ";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 233);
                    echo "
                    ";
                    // line 234
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234)) {
                        // line 235
                        echo "                    (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 235);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235);
                        echo ")
                    ";
                    }
                    // line 236
                    echo " </label>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                echo " </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "          ";
        }
        // line 242
        echo "           
            ";
        // line 243
        if (($context["recurrings"] ?? null)) {
            // line 244
            echo "            <hr>
            <h3>";
            // line 245
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 248
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 250
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 250);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 250);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 256
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 257
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 258
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 259
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 261
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 263
        if ((($context["minimum"] ?? null) > 1)) {
            // line 264
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 265
        echo "</div>
          ";
        // line 266
        if (($context["review_status"] ?? null)) {
            // line 267
            echo "          <div class=\"rating\">
            <p>";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 269
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 270
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
          </div>
          ";
        }
        // line 272
        echo " </div>
      </div>
      ";
        // line 274
        if (($context["products"] ?? null)) {
            // line 275
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 276
            $context["i"] = 0;
            // line 277
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 278
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 279
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 280
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 281
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 282
                    echo "        ";
                } else {
                    // line 283
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 284
                    echo "        ";
                }
                // line 285
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 287);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 287);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 287);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 287);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 289);
                echo "</a></h4>
              <p>";
                // line 290
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 290);
                echo "</p>
              ";
                // line 291
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 291)) {
                    // line 292
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 293
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 293) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 294
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 296
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 296)) {
                    // line 297
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 297)) {
                        // line 298
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 298);
                        echo "
                ";
                    } else {
                        // line 299
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 299);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 299);
                        echo "</span> ";
                    }
                    // line 300
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 300)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 300);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 301
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 303);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 303);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 304
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 304);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 305
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 305);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 309
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 310
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 311
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 312
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 313
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 314
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 316
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 317
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 319
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 320
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 322
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 322);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 322);
                    echo "</a>,
        ";
                } else {
                    // line 323
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 323);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 323);
                    echo "</a> ";
                }
                // line 324
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 326
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 327
        echo ($context["column_right"] ?? null);
        echo "</div>
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
        // line 427
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 429
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 431
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
        // line 500
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 509
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
        // line 550
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__fb5f19e14e00c2a5fc5261756db2c2b2ac963ac16539868d5e2fe8580fb0190e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1199 => 550,  1155 => 509,  1143 => 500,  1071 => 431,  1066 => 429,  1061 => 427,  958 => 327,  953 => 326,  944 => 324,  937 => 323,  927 => 322,  923 => 321,  918 => 320,  915 => 319,  906 => 317,  903 => 316,  899 => 314,  897 => 313,  894 => 312,  892 => 311,  889 => 310,  887 => 309,  878 => 305,  872 => 304,  864 => 303,  860 => 301,  848 => 300,  841 => 299,  835 => 298,  832 => 297,  829 => 296,  820 => 294,  813 => 293,  808 => 292,  806 => 291,  802 => 290,  796 => 289,  785 => 287,  779 => 285,  776 => 284,  773 => 283,  770 => 282,  767 => 281,  764 => 280,  761 => 279,  758 => 278,  753 => 277,  751 => 276,  746 => 275,  744 => 274,  740 => 272,  726 => 270,  719 => 269,  715 => 268,  712 => 267,  710 => 266,  707 => 265,  701 => 264,  699 => 263,  692 => 261,  687 => 259,  683 => 258,  679 => 257,  676 => 256,  670 => 252,  659 => 250,  655 => 249,  651 => 248,  645 => 245,  642 => 244,  640 => 243,  637 => 242,  634 => 241,  626 => 238,  618 => 236,  611 => 235,  609 => 234,  605 => 233,  587 => 232,  581 => 231,  577 => 229,  571 => 228,  567 => 227,  561 => 226,  558 => 225,  556 => 224,  554 => 212,  552 => 211,  548 => 210,  544 => 209,  541 => 208,  539 => 207,  536 => 206,  532 => 204,  529 => 203,  518 => 201,  514 => 200,  509 => 197,  506 => 196,  498 => 194,  495 => 193,  487 => 191,  484 => 190,  478 => 187,  472 => 185,  466 => 182,  463 => 181,  461 => 180,  458 => 179,  456 => 178,  448 => 176,  440 => 174,  438 => 173,  434 => 172,  427 => 171,  417 => 169,  415 => 168,  410 => 166,  403 => 164,  397 => 163,  391 => 161,  388 => 160,  385 => 159,  382 => 158,  379 => 157,  377 => 156,  373 => 154,  368 => 152,  362 => 150,  353 => 146,  347 => 143,  342 => 141,  329 => 131,  325 => 130,  319 => 126,  314 => 123,  305 => 116,  303 => 115,  290 => 98,  288 => 97,  284 => 96,  279 => 93,  276 => 92,  271 => 89,  264 => 87,  255 => 84,  251 => 83,  248 => 82,  244 => 81,  236 => 76,  231 => 73,  227 => 72,  223 => 70,  221 => 69,  217 => 68,  213 => 66,  207 => 63,  204 => 62,  201 => 61,  195 => 58,  192 => 57,  190 => 56,  185 => 54,  181 => 52,  177 => 50,  174 => 49,  161 => 46,  155 => 45,  152 => 44,  147 => 43,  144 => 42,  130 => 39,  127 => 38,  125 => 37,  122 => 36,  120 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  101 => 29,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  73 => 20,  69 => 19,  64 => 16,  53 => 13,  50 => 12,  46 => 11,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fb5f19e14e00c2a5fc5261756db2c2b2ac963ac16539868d5e2fe8580fb0190e", "");
    }
}
