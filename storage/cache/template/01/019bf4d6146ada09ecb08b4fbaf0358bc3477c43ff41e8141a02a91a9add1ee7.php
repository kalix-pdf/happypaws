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

/* __string_template__095c30200779e1afc6da83196c3bdccaad4695fd621850fb1a1089bce46ae663 */
class __TwigTemplate_bcd312bd043f482acbb7419a42eb722691f8bb60dad32c81fa2fc39f59949c29 extends Template
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
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link href=\"";
        // line 5
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\category.css\" rel=\"stylesheet\" />
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\product.css\" rel=\"stylesheet\" />
<div id=\"product-product\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
\t<div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 19
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 26
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-6";
            // line 28
            echo "\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t";
            $context["class"] = "col-sm-8";
            // line 30
            echo "\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 32
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 33
            echo "\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t";
            // line 34
            if (($context["thumb"] ?? null)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                // line 36
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
            // line 39
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 42);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 43);
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
                // line 46
                echo "\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 53
        if (($context["attribute_groups"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 55
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 60
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 65
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t";
        // line 66
        if (($context["attribute_groups"] ?? null)) {
            // line 67
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 73);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 80);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 81);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" enctype=\"multipart/form-data\" id=\"form-review\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 93
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t\t";
            // line 94
            if (($context["review_guest"] ?? null)) {
                // line 95
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
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-attachment\">Attach a file</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"attachment\" id=\"input-attachment\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>

                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 120
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    ";
                // line 123
                echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12 rating\">
                    <label class=\"control-label\">";
                // line 127
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 128
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
                // line 138
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 140
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 143
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 147
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 149
            echo "              </form>
            </div>
            ";
        }
        // line 151
        echo "</div>
        </div>
        ";
        // line 153
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 154
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 155
            echo "        ";
        } else {
            // line 156
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 157
            echo "        ";
        }
        // line 158
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 160
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\" style=\"color: #162F65\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 161
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\" style=\"color: #162F65\"></i></button>
          </div>
          <h1>";
        // line 163
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 165
        if (($context["manufacturer"] ?? null)) {
            // line 166
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 168
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            <li>weight: ";
        // line 169
        echo ($context["weight"] ?? null);
        echo " grams</li>
            ";
        // line 170
        if (($context["reward"] ?? null)) {
            // line 171
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 173
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 175
        if (($context["price"] ?? null)) {
            // line 176
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 177
            if ( !($context["special"] ?? null)) {
                // line 178
                echo "            <li>
              <h2>";
                // line 179
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 182
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2>";
                // line 184
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 187
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 188
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 190
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 191
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 193
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 194
                echo "            <li>
              <hr>
            </li>
            ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 198
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 198);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 198);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "            ";
            }
            // line 201
            echo "          </ul>
          ";
        }
        // line 203
        echo "          <div id=\"product\"> 
          ";
        // line 204
        if (($context["options"] ?? null)) {
            // line 205
            echo "            <hr>
            <h3>";
            // line 206
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 208
                echo "            ";
                // line 209
                echo "            ";
                // line 221
                echo "            ";
                // line 222
                echo "            
            <div class=\"form-group";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                    echo " required ";
                }
                echo "\">
              <label class=\"control-label\">";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                echo "</label>
              <div id=\"input-option";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                echo "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 225));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 226
                    echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 228);
                    echo "\" />
                    ";
                    // line 229
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 229)) {
                        echo " <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 229);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 229);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 229)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 229);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 229);
                            echo " ";
                        }
                        echo "\" class=\"img-thumbnail\" /> ";
                    }
                    echo "                  
                    ";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 230);
                    echo "
                    ";
                    // line 231
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 231)) {
                        // line 232
                        echo "                    (";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 232);
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 232);
                        echo ")
                    ";
                    }
                    // line 233
                    echo " </label>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                echo " </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "          ";
        }
        // line 239
        echo "           
            ";
        // line 240
        if (($context["recurrings"] ?? null)) {
            // line 241
            echo "            <hr>
            <h3>";
            // line 242
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 245
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 247
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 247);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 247);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 253
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 254
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 255
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 256
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 258
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 260
        if ((($context["minimum"] ?? null) > 1)) {
            // line 261
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 262
        echo "</div>
          ";
        // line 263
        if (($context["review_status"] ?? null)) {
            // line 264
            echo "          <div class=\"rating\">
            <p>";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 266
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 267
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
        // line 269
        echo " </div>
      </div>
      ";
        // line 271
        if (($context["products"] ?? null)) {
            // line 272
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 273
            $context["i"] = 0;
            // line 274
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 275
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 276
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 277
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 278
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 279
                    echo "        ";
                } else {
                    // line 280
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 281
                    echo "        ";
                }
                // line 282
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 284
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 284);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 284);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 284);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 284);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 286);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 286);
                echo "</a></h4>
              <p>";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 287);
                echo "</p>
              ";
                // line 288
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 288)) {
                    // line 289
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 290
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 290) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 291
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 293
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 293)) {
                    // line 294
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 294)) {
                        // line 295
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 295);
                        echo "
                ";
                    } else {
                        // line 296
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 296);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 296);
                        echo "</span> ";
                    }
                    // line 297
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 297)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 297);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 298
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 300);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 300);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 301
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 301);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 302
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 302);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 306
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 307
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 308
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 309
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 310
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 311
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 313
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 314
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 316
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 317
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 319
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 319);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 319);
                    echo "</a>,
        ";
                } else {
                    // line 320
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 320);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 320);
                    echo "</a> ";
                }
                // line 321
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 323
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 324
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
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart').on('click', function () {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
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

\$('#cart > ul').load('index.php?route=common/cart/info ul li');
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
        // line 413
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 415
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 417
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
        // line 486
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function (e) {
e.preventDefault();

var form = document.getElementById('form-review');
var formData = new FormData(form);

\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 495
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
        // line 536
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__095c30200779e1afc6da83196c3bdccaad4695fd621850fb1a1089bce46ae663";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1192 => 536,  1148 => 495,  1136 => 486,  1064 => 417,  1059 => 415,  1054 => 413,  962 => 324,  957 => 323,  948 => 321,  941 => 320,  931 => 319,  927 => 318,  922 => 317,  919 => 316,  910 => 314,  907 => 313,  903 => 311,  901 => 310,  898 => 309,  896 => 308,  893 => 307,  891 => 306,  882 => 302,  876 => 301,  868 => 300,  864 => 298,  852 => 297,  845 => 296,  839 => 295,  836 => 294,  833 => 293,  824 => 291,  817 => 290,  812 => 289,  810 => 288,  806 => 287,  800 => 286,  789 => 284,  783 => 282,  780 => 281,  777 => 280,  774 => 279,  771 => 278,  768 => 277,  765 => 276,  762 => 275,  757 => 274,  755 => 273,  750 => 272,  748 => 271,  744 => 269,  730 => 267,  723 => 266,  719 => 265,  716 => 264,  714 => 263,  711 => 262,  705 => 261,  703 => 260,  696 => 258,  691 => 256,  687 => 255,  683 => 254,  680 => 253,  674 => 249,  663 => 247,  659 => 246,  655 => 245,  649 => 242,  646 => 241,  644 => 240,  641 => 239,  638 => 238,  630 => 235,  622 => 233,  615 => 232,  613 => 231,  609 => 230,  591 => 229,  585 => 228,  581 => 226,  575 => 225,  571 => 224,  565 => 223,  562 => 222,  560 => 221,  558 => 209,  556 => 208,  552 => 207,  548 => 206,  545 => 205,  543 => 204,  540 => 203,  536 => 201,  533 => 200,  522 => 198,  518 => 197,  513 => 194,  510 => 193,  502 => 191,  499 => 190,  491 => 188,  488 => 187,  482 => 184,  476 => 182,  470 => 179,  467 => 178,  465 => 177,  462 => 176,  460 => 175,  452 => 173,  444 => 171,  442 => 170,  438 => 169,  431 => 168,  421 => 166,  419 => 165,  414 => 163,  407 => 161,  401 => 160,  395 => 158,  392 => 157,  389 => 156,  386 => 155,  383 => 154,  381 => 153,  377 => 151,  372 => 149,  366 => 147,  357 => 143,  351 => 140,  346 => 138,  333 => 128,  329 => 127,  323 => 123,  318 => 120,  309 => 113,  307 => 112,  294 => 95,  292 => 94,  288 => 93,  283 => 90,  280 => 89,  275 => 86,  268 => 84,  259 => 81,  255 => 80,  252 => 79,  248 => 78,  240 => 73,  235 => 70,  231 => 69,  227 => 67,  225 => 66,  221 => 65,  217 => 63,  211 => 60,  208 => 59,  205 => 58,  199 => 55,  196 => 54,  194 => 53,  189 => 51,  185 => 49,  181 => 47,  178 => 46,  165 => 43,  159 => 42,  156 => 41,  151 => 40,  148 => 39,  134 => 36,  131 => 35,  129 => 34,  126 => 33,  124 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  105 => 26,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  77 => 17,  73 => 16,  70 => 15,  59 => 12,  56 => 11,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__095c30200779e1afc6da83196c3bdccaad4695fd621850fb1a1089bce46ae663", "");
    }
}
