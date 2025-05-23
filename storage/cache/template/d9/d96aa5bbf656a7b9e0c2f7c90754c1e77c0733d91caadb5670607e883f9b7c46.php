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

/* __string_template__7787ef527582a3230ca5dacd683b32dd99931f37243986ac40d3a77b5acf80e7 */
class __TwigTemplate_769ff57d91cbace3f20f674e4fb0fe58da75a1c9d5e2e999d40363b3ef20aa69 extends Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\category.css\" rel=\"stylesheet\" />
</head>

<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
  <div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 26
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 27
            echo "      <div class=\"row row-header-category\"> ";
            if (($context["thumb"] ?? null)) {
                // line 28
                echo "        <div class=\"col-sm-2 img-container-category\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 30
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 31
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 33
            echo "        <div class=\"refine-search-group\">
         ";
            // line 34
            if (($context["categories"] ?? null)) {
                // line 35
                echo "      <h3>";
                echo ($context["text_refine"] ?? null);
                echo "</h3>
      ";
                // line 36
                if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                    // line 37
                    echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul class=\"refine-searches-list\">
            ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 41
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "          </ul>
        </div>
      </div>
      ";
                } else {
                    // line 47
                    echo "      <div class=\"row\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 48
                        echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                        // line 50
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["category"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 51
                            echo "            <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 51);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 51);
                            echo "</a></li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "          </ul>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "</div>
      <br/>
      ";
                }
                // line 58
                echo "      ";
            }
            // line 59
            echo "        </div>
        </div>
      <hr>
      ";
        }
        // line 63
        echo "      ";
        // line 88
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 89
            echo "      <div class=\"row product-row-menu\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 93
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 97
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6 sorting\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 101
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 104
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 104) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 105
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 105);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 105);
                    echo "</option>
              ";
                } else {
                    // line 107
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 107);
                    echo "</option>
              ";
                }
                // line 109
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6 showing\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 115
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 118
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 118) == ($context["limit"] ?? null))) {
                    // line 119
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 119);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 119);
                    echo "</option>
              ";
                } else {
                    // line 121
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 121);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 121);
                    echo "</option>
              ";
                }
                // line 123
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row product-row\"> ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 131);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"product-infos-list-group\">
              <div class=\"caption\">
                <h4><a href=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 134);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "</a></h4>
                <p class=\"product-description\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 135);
                echo "</p>
                ";
                // line 136
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137)) {
                        // line 138
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 138);
                        echo "
                  ";
                    } else {
                        // line 139
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "</span> ";
                    }
                    // line 140
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 140)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 140);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 142
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 144) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 145
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 146
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 148);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 149
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 150
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 157
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 158
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 161
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 162
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 164
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 167
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 168
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 170
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__7787ef527582a3230ca5dacd683b32dd99931f37243986ac40d3a77b5acf80e7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 170,  477 => 168,  472 => 167,  464 => 164,  458 => 162,  455 => 161,  449 => 158,  445 => 157,  441 => 155,  427 => 150,  421 => 149,  413 => 148,  409 => 146,  400 => 145,  393 => 144,  388 => 143,  385 => 142,  373 => 140,  366 => 139,  360 => 138,  357 => 137,  355 => 136,  351 => 135,  345 => 134,  333 => 131,  329 => 129,  325 => 128,  319 => 124,  313 => 123,  305 => 121,  297 => 119,  294 => 118,  290 => 117,  285 => 115,  278 => 110,  272 => 109,  264 => 107,  256 => 105,  253 => 104,  249 => 103,  244 => 101,  235 => 97,  228 => 93,  224 => 92,  219 => 89,  216 => 88,  214 => 63,  208 => 59,  205 => 58,  200 => 55,  192 => 53,  181 => 51,  177 => 50,  173 => 48,  168 => 47,  162 => 43,  151 => 41,  147 => 40,  142 => 37,  140 => 36,  135 => 35,  133 => 34,  130 => 33,  124 => 31,  121 => 30,  111 => 28,  108 => 27,  106 => 26,  102 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  75 => 17,  71 => 16,  68 => 15,  57 => 13,  53 => 12,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7787ef527582a3230ca5dacd683b32dd99931f37243986ac40d3a77b5acf80e7", "");
    }
}
