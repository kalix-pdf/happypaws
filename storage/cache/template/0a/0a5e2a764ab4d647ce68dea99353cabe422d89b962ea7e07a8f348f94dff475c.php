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

/* __string_template__48fabcd6aa202b83ce65205128f54c5ee44ccbef0ef9ab26a9a511db5a2d2fad */
class __TwigTemplate_77eed0daaae73335fa0022240cece60c48d580cefe4dab821fcd2a3c17960688 extends Template
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
\t<div class=\"row\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 21
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 23
            echo "\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 28
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-6";
            // line 30
            echo "\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-8";
            // line 32
            echo "\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 34
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 35
            echo "\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t";
            // line 36
            if (($context["thumb"] ?? null)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                // line 38
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
            // line 41
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
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
                // line 48
                echo "\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 53
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 55
        if (($context["attribute_groups"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 57
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 62
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 67
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t";
        // line 68
        if (($context["attribute_groups"] ?? null)) {
            // line 69
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 75);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 82);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 83);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" enctype=\"multipart/form-data\" id=\"form-review\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 95
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t\t";
            // line 96
            if (($context["review_guest"] ?? null)) {
                // line 97
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
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-attachment\">Attach a file</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"attachment\" id=\"input-attachment\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>

                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 122
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    ";
                // line 125
                echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12 rating\">
                    <label class=\"control-label\">";
                // line 129
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 130
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
                // line 140
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 142
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 145
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 149
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 151
            echo "              </form>
            </div>
            ";
        }
        // line 153
        echo "</div>
        </div>
        ";
        // line 155
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 156
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 157
            echo "        ";
        } else {
            // line 158
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 159
            echo "        ";
        }
        // line 160
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 162
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\" style=\"color: #162F65\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 163
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\" style=\"color: #162F65\"></i></button>
          </div>
          <h1>";
        // line 165
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 167
        if (($context["manufacturer"] ?? null)) {
            // line 168
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 170
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>weight: ";
        // line 171
        echo ($context["weight"] ?? null);
        echo " grams</li>
            ";
        // line 172
        if (($context["reward"] ?? null)) {
            // line 173
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 175
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 177
        if (($context["price"] ?? null)) {
            // line 178
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 179
            if ( !($context["special"] ?? null)) {
                // line 180
                echo "            <li>
              <h2>";
                // line 181
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 184
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2>";
                // line 186
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 189
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 190
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 192
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 193
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 195
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 196
                echo "            <li>
              <hr>
            </li>
            ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 200
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 200);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 200);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "            ";
            }
            // line 203
            echo "          </ul>
          ";
        }
        // line 205
        echo "          <div id=\"product\"> 
          ";
        // line 206
        if (($context["options"] ?? null)) {
            // line 207
            echo "            <hr>
            <h3>";
            // line 208
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 210
                echo "            ";
                // line 211
                echo "            ";
                // line 223
                echo "            ";
                // line 224
                echo "            
            <div class=\"form-group";
                // line 225
                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) {
                    echo " required ";
                }
                echo "\">
              <label class=\"control-label\">";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                echo "</label>
              <div id=\"input-option";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                echo "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 227));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 228
                    echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 230);
                    echo "\" />
                    ";
                    // line 231
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 231)) {
                        echo " <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 231);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 231);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 231)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 231);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 231);
                            echo " ";
                        }
                        echo "\" class=\"img-thumbnail\" /> ";
                    }
                    echo "                  
                    ";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 232);
                    echo "
                    ";
                    // line 233
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 233)) {
                        // line 234
                        echo "                    (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 234);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234);
                        echo ")
                    ";
                    }
                    // line 235
                    echo " </label>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 237
                echo " </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "          ";
        }
        // line 241
        echo "           
            ";
        // line 242
        if (($context["recurrings"] ?? null)) {
            // line 243
            echo "            <hr>
            <h3>";
            // line 244
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 247
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 249
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 249);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 249);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 255
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 256
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 257
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 258
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 260
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 262
        if ((($context["minimum"] ?? null) > 1)) {
            // line 263
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 264
        echo "</div>
          ";
        // line 265
        if (($context["review_status"] ?? null)) {
            // line 266
            echo "          <div class=\"rating\">
            <p>";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 268
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 269
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
        // line 271
        echo " </div>
      </div>
      ";
        // line 273
        if (($context["products"] ?? null)) {
            // line 274
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 275
            $context["i"] = 0;
            // line 276
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 277
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 278
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 279
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 280
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 281
                    echo "        ";
                } else {
                    // line 282
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 283
                    echo "        ";
                }
                // line 284
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 286);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 286);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 286);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 286);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 288
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 288);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 288);
                echo "</a></h4>
              <p>";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 289);
                echo "</p>
              ";
                // line 290
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 290)) {
                    // line 291
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 292
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 292) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 293
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 295
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 295)) {
                    // line 296
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 296)) {
                        // line 297
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 297);
                        echo "
                ";
                    } else {
                        // line 298
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 298);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 298);
                        echo "</span> ";
                    }
                    // line 299
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 299)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 299);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 300
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 302
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 302);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 302);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 303
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 303);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 304
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 304);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 308
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 309
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 310
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 311
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 312
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 313
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 315
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 316
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 318
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 319
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 321
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 321);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 321);
                    echo "</a>,
        ";
                } else {
                    // line 322
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 322);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 322);
                    echo "</a> ";
                }
                // line 323
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 325
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 326
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
        // line 426
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 428
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 430
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
        // line 499
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 508
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
        // line 549
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__48fabcd6aa202b83ce65205128f54c5ee44ccbef0ef9ab26a9a511db5a2d2fad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1198 => 549,  1154 => 508,  1142 => 499,  1070 => 430,  1065 => 428,  1060 => 426,  957 => 326,  952 => 325,  943 => 323,  936 => 322,  926 => 321,  922 => 320,  917 => 319,  914 => 318,  905 => 316,  902 => 315,  898 => 313,  896 => 312,  893 => 311,  891 => 310,  888 => 309,  886 => 308,  877 => 304,  871 => 303,  863 => 302,  859 => 300,  847 => 299,  840 => 298,  834 => 297,  831 => 296,  828 => 295,  819 => 293,  812 => 292,  807 => 291,  805 => 290,  801 => 289,  795 => 288,  784 => 286,  778 => 284,  775 => 283,  772 => 282,  769 => 281,  766 => 280,  763 => 279,  760 => 278,  757 => 277,  752 => 276,  750 => 275,  745 => 274,  743 => 273,  739 => 271,  725 => 269,  718 => 268,  714 => 267,  711 => 266,  709 => 265,  706 => 264,  700 => 263,  698 => 262,  691 => 260,  686 => 258,  682 => 257,  678 => 256,  675 => 255,  669 => 251,  658 => 249,  654 => 248,  650 => 247,  644 => 244,  641 => 243,  639 => 242,  636 => 241,  633 => 240,  625 => 237,  617 => 235,  610 => 234,  608 => 233,  604 => 232,  586 => 231,  580 => 230,  576 => 228,  570 => 227,  566 => 226,  560 => 225,  557 => 224,  555 => 223,  553 => 211,  551 => 210,  547 => 209,  543 => 208,  540 => 207,  538 => 206,  535 => 205,  531 => 203,  528 => 202,  517 => 200,  513 => 199,  508 => 196,  505 => 195,  497 => 193,  494 => 192,  486 => 190,  483 => 189,  477 => 186,  471 => 184,  465 => 181,  462 => 180,  460 => 179,  457 => 178,  455 => 177,  447 => 175,  439 => 173,  437 => 172,  433 => 171,  426 => 170,  416 => 168,  414 => 167,  409 => 165,  402 => 163,  396 => 162,  390 => 160,  387 => 159,  384 => 158,  381 => 157,  378 => 156,  376 => 155,  372 => 153,  367 => 151,  361 => 149,  352 => 145,  346 => 142,  341 => 140,  328 => 130,  324 => 129,  318 => 125,  313 => 122,  304 => 115,  302 => 114,  289 => 97,  287 => 96,  283 => 95,  278 => 92,  275 => 91,  270 => 88,  263 => 86,  254 => 83,  250 => 82,  247 => 81,  243 => 80,  235 => 75,  230 => 72,  226 => 71,  222 => 69,  220 => 68,  216 => 67,  212 => 65,  206 => 62,  203 => 61,  200 => 60,  194 => 57,  191 => 56,  189 => 55,  184 => 53,  180 => 51,  176 => 49,  173 => 48,  160 => 45,  154 => 44,  151 => 43,  146 => 42,  143 => 41,  129 => 38,  126 => 37,  124 => 36,  121 => 35,  119 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  100 => 28,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  72 => 19,  68 => 18,  64 => 16,  53 => 13,  50 => 12,  46 => 11,  41 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__48fabcd6aa202b83ce65205128f54c5ee44ccbef0ef9ab26a9a511db5a2d2fad", "");
    }
}
