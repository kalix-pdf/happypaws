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

/* __string_template__0b859ef067d46e3332cf80eff710a8bcad100f4f0ba3dd6b7b0a87371fc90e76 */
class __TwigTemplate_5a0ba13a7c00ca11e43c2ca44481f44f4cfaa6f67110b11c4ac9de8bd36b7ae0 extends Template
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

<div id=\"product-search\" class=\"container\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
  </nav>
  
  <div class=\"d-flex justify-content-center search-main-container\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 15
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"row\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
              <form class=\"d-flex flex-column gap-4 align-items-center\">
                <h1 class=\"text-center\">";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                
                <div class=\"d-flex flex-wrap justify-content-center gap-3 w-100\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 24
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control border-bottom border-black mx-4 w-50\" />
                    <label class=\"control-label\" for=\"input-search\">";
        // line 25
        echo ($context["entry_search"] ?? null);
        echo "</label>
                    <div>
                    <select name=\"category_id\" class=\"form-control w-auto\" id=\"category-select\">
                      <option value=\"0\">";
        // line 28
        echo ($context["text_category"] ?? null);
        echo "</option>
                      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 30
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                // line 31
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 31);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 31);
                echo "</option>
                        ";
            } else {
                // line 33
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 33);
                echo "</option>
                        ";
            }
            // line 35
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 36
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36) == ($context["category_id"] ?? null))) {
                    // line 37
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 37);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 37);
                    echo "</option>
                          ";
                } else {
                    // line 39
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 39);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 39);
                    echo "</option>
                          ";
                }
                // line 41
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 42
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42) == ($context["category_id"] ?? null))) {
                        // line 43
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 43);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 43);
                        echo "</option>
                            ";
                    } else {
                        // line 45
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 45);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 45);
                        echo "</option>
                            ";
                    }
                    // line 47
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                    </div>
                  </div>
  
                  <input type=\"button\" value=\"";
        // line 54
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
                </div>

                <div class=\"d-flex flex-wrap justify-content-center gap-4 my-3\">
                  <div>
                    <label class=\"checkbox-inline\">
                      <input type=\"checkbox\" name=\"sub_category\" value=\"1\" ";
        // line 60
        if (($context["sub_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                      ";
        // line 61
        echo ($context["text_sub_category"] ?? null);
        echo "
                    </label>
                  </div>
                  <div>
                    <label class=\"checkbox-inline\">
                      <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" ";
        // line 66
        if (($context["description"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                      ";
        // line 67
        echo ($context["entry_description"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

        
      <h2>";
        // line 79
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 80
        if (($context["products"] ?? null)) {
            // line 81
            echo "      <div class=\"row product-row-menu gy-2 mb-4\">
        ";
            // line 88
            echo "        <div class=\"col-md-3 col-sm-6\">
          <a href=\"";
            // line 89
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"text-black text-decoration-none btn btn-link  \">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
        </div>
        <div class=\"col-md-4 col-xs-6 sorting\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 93
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 96
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 96) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 97
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 97);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 97);
                    echo "</option>
              ";
                } else {
                    // line 99
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 99);
                    echo "</option>
              ";
                }
                // line 101
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6 showing\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 107
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 110
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 110) == ($context["limit"] ?? null))) {
                    // line 111
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 111);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 111);
                    echo "</option>
              ";
                } else {
                    // line 113
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 113);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 113);
                    echo "</option>
              ";
                }
                // line 115
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row product-row\">
        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                echo "        <div class=\"product-layout col-lg-3 col-md-6 col-sm-12 mb-4\">
          <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
            <div class=\"image\"><a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 124);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 124);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 124);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 124);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"product-infos-list-group\">
              <div class=\"caption\">
                <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 127);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 127);
                echo "</a></h4>
                <p>";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 128);
                echo "</p>
                ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "                <p class=\"price\">
                  ";
                    // line 131
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 131)) {
                        // line 132
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132);
                        echo "
                  ";
                    } else {
                        // line 134
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 134);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "</span>
                  ";
                    }
                    // line 136
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 136)) {
                        // line 137
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 137);
                        echo "</span>
                  ";
                    }
                    // line 139
                    echo "                </p>
                ";
                }
                // line 141
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                <div class=\"rating\">
                  ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 144) < $context["i"])) {
                            // line 145
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 147
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 149
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                </div>
                ";
                }
                // line 152
                echo "              </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 154);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 154);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 155
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 156
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
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
            // line 162
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 164
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 165
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 168
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 170
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 171
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 220
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__0b859ef067d46e3332cf80eff710a8bcad100f4f0ba3dd6b7b0a87371fc90e76";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 220,  499 => 171,  494 => 170,  488 => 168,  482 => 165,  478 => 164,  474 => 162,  460 => 156,  454 => 155,  446 => 154,  442 => 152,  438 => 150,  432 => 149,  428 => 147,  424 => 145,  421 => 144,  417 => 143,  414 => 142,  411 => 141,  407 => 139,  399 => 137,  396 => 136,  388 => 134,  382 => 132,  380 => 131,  377 => 130,  375 => 129,  371 => 128,  365 => 127,  353 => 124,  349 => 122,  345 => 121,  338 => 116,  332 => 115,  324 => 113,  316 => 111,  313 => 110,  309 => 109,  304 => 107,  297 => 102,  291 => 101,  283 => 99,  275 => 97,  272 => 96,  268 => 95,  263 => 93,  254 => 89,  251 => 88,  248 => 81,  246 => 80,  242 => 79,  227 => 67,  221 => 66,  213 => 61,  207 => 60,  198 => 54,  192 => 50,  186 => 49,  180 => 48,  174 => 47,  166 => 45,  158 => 43,  155 => 42,  150 => 41,  142 => 39,  134 => 37,  131 => 36,  126 => 35,  118 => 33,  110 => 31,  107 => 30,  103 => 29,  99 => 28,  93 => 25,  87 => 24,  80 => 20,  72 => 15,  68 => 14,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0b859ef067d46e3332cf80eff710a8bcad100f4f0ba3dd6b7b0a87371fc90e76", "");
    }
}
