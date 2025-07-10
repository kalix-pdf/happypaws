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

/* __string_template__db6f853b4108ddc311d31d1a8ff55eb6d7d29069ae52a7d831c8c4e4d39350f1 */
class __TwigTemplate_5a07d6309399c1e5e4f1deaf12163e1941af94d1569607bbca393de1bf785371 extends Template
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
  
  <div class=\"d-flex justify-content-center\">
    <div id=\"content\" class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
          <form class=\"d-flex flex-column gap-4 align-items-center\">
            <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"d-flex flex-wrap justify-content-center gap-3 w-100\">
              <div class=\"input-group \">
                <input type=\"text\" name=\"search\" value=\"";
        // line 22
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control border-bottom border-black text-align-center\" />
                <label class=\"control-label\" for=\"input-search\">";
        // line 23
        echo ($context["entry_search"] ?? null);
        echo "</label>
                <select name=\"category_id\" class=\"form-control mx-4\" id=\"category-select\">
                  <option value=\"0\">";
        // line 25
        echo ($context["text_category"] ?? null);
        echo "</option>
                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                // line 28
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                echo "</option>
                  ";
            } else {
                // line 30
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
                  ";
            }
            // line 32
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
                  ";
                } else {
                    // line 36
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
                  ";
                }
                // line 38
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                        // line 40
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        echo "</option>
                  ";
                    } else {
                        // line 42
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
                  ";
                    }
                    // line 44
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
              </div>
            </div>
            <div>
              <input type=\"button\" value=\"";
        // line 51
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn\" />
            </div>  
            <div class=\"d-flex flex-wrap gap-4 my-4\">
              <div>
                <label class=\"checkbox-inline\">
                  ";
        // line 56
        if (($context["sub_category"] ?? null)) {
            // line 57
            echo "                  <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
                  ";
        } else {
            // line 59
            echo "                  <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
                  ";
        }
        // line 61
        echo "                  ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
                </div>
                <div>
                  <p class=\"checkbox-prod-description\">
                    <label class=\"checkbox-inline\">
                    ";
        // line 66
        if (($context["description"] ?? null)) {
            // line 67
            echo "                    <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
                    ";
        } else {
            // line 69
            echo "                    <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
                    ";
        }
        // line 71
        echo "                    ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  </p>
                </div>
            </div>      
      </form>
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
            <select id=\"input-sort\" class=\"form-control mx-4\" onchange=\"location = this.value;\">
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
            <select id=\"input-limit\" class=\"form-control mx-4\" onchange=\"location = this.value;\">
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
                    echo "                <div class=\"rating d-flex gap-3 fs-4\">
                  ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 144) < $context["i"])) {
                            // line 145
                            echo "                    <i class=\"fa fa-paw text-muted\"></i>
                      ";
                        } else {
                            // line 147
                            echo "                    <i class=\"fa fa-paw stars\"></i>
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
        return "__string_template__db6f853b4108ddc311d31d1a8ff55eb6d7d29069ae52a7d831c8c4e4d39350f1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 220,  495 => 171,  490 => 170,  484 => 168,  478 => 165,  474 => 164,  470 => 162,  456 => 156,  450 => 155,  442 => 154,  438 => 152,  434 => 150,  428 => 149,  424 => 147,  420 => 145,  417 => 144,  413 => 143,  410 => 142,  407 => 141,  403 => 139,  395 => 137,  392 => 136,  384 => 134,  378 => 132,  376 => 131,  373 => 130,  371 => 129,  367 => 128,  361 => 127,  349 => 124,  345 => 122,  341 => 121,  334 => 116,  328 => 115,  320 => 113,  312 => 111,  309 => 110,  305 => 109,  300 => 107,  293 => 102,  287 => 101,  279 => 99,  271 => 97,  268 => 96,  264 => 95,  259 => 93,  250 => 89,  247 => 88,  244 => 81,  242 => 80,  238 => 79,  226 => 71,  222 => 69,  218 => 67,  216 => 66,  207 => 61,  203 => 59,  199 => 57,  197 => 56,  189 => 51,  183 => 47,  177 => 46,  171 => 45,  165 => 44,  157 => 42,  149 => 40,  146 => 39,  141 => 38,  133 => 36,  125 => 34,  122 => 33,  117 => 32,  109 => 30,  101 => 28,  98 => 27,  94 => 26,  90 => 25,  85 => 23,  79 => 22,  73 => 19,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__db6f853b4108ddc311d31d1a8ff55eb6d7d29069ae52a7d831c8c4e4d39350f1", "");
    }
}
