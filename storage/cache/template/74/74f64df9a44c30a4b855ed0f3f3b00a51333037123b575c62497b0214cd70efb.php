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

/* __string_template__33945460ba6d438e6385a0abc3d79a10121f0c81f46b5843a624833bd647752b */
class __TwigTemplate_18a5aa156db03f1037ddcf11ac0fa52c8b47f9a85d357167dffa97e979a82a5e extends Template
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
        echo "\" id=\"input-search\" class=\"form-control border-bottom border-black\" />
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
            <div class=\"d-flex flex-wrap gap-4 my-4\">
              <div>
                <label class=\"checkbox-inline\">
                  ";
        // line 53
        if (($context["sub_category"] ?? null)) {
            // line 54
            echo "                  <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
                  ";
        } else {
            // line 56
            echo "                  <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
                  ";
        }
        // line 58
        echo "                  ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
                </div>
                <div>
                  <p class=\"checkbox-prod-description\">
                    <label class=\"checkbox-inline\">
                    ";
        // line 63
        if (($context["description"] ?? null)) {
            // line 64
            echo "                    <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
                    ";
        } else {
            // line 66
            echo "                    <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
                    ";
        }
        // line 68
        echo "                    ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  </p>
                </div>
            </div>
          <div>
            <input type=\"button\" value=\"";
        // line 73
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn\" />
          </div>  
      </div>
      </form>
    </div>
  </div>
        
      <h2>";
        // line 80
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 81
        if (($context["products"] ?? null)) {
            // line 82
            echo "      <div class=\"row product-row-menu gy-2 mb-4\">
        ";
            // line 89
            echo "        <div class=\"col-md-3 col-sm-6\">
          <a href=\"";
            // line 90
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"text-black text-decoration-none btn btn-link  \">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
        </div>
        <div class=\"col-md-4 col-xs-6 sorting\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 94
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 97
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 97) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 98
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 98);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 98);
                    echo "</option>
              ";
                } else {
                    // line 100
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 100);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 100);
                    echo "</option>
              ";
                }
                // line 102
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6 showing\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 108
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 111
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 111) == ($context["limit"] ?? null))) {
                    // line 112
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 112);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 112);
                    echo "</option>
              ";
                } else {
                    // line 114
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 114);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 114);
                    echo "</option>
              ";
                }
                // line 116
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row product-row\">
        ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 123
                echo "        <div class=\"product-layout col-lg-3 col-md-6 col-sm-12 mb-4\">
          <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
            <div class=\"image\"><a href=\"";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 125);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 125);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"product-infos-list-group\">
              <div class=\"caption\">
                <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 128);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                echo "</a></h4>
                <p>";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 129);
                echo "</p>
                ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130)) {
                    // line 131
                    echo "                <p class=\"price\">
                  ";
                    // line 132
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132)) {
                        // line 133
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 133);
                        echo "
                  ";
                    } else {
                        // line 135
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 135);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
                        echo "</span>
                  ";
                    }
                    // line 137
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 137)) {
                        // line 138
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 138);
                        echo "</span>
                  ";
                    }
                    // line 140
                    echo "                </p>
                ";
                }
                // line 142
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                <div class=\"rating\">
                  ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 145
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 145) < $context["i"])) {
                            // line 146
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 148
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 150
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                </div>
                ";
                }
                // line 153
                echo "              </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 155);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 156
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 157
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
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
            // line 163
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 165
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 166
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 169
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 171
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 172
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
        // line 221
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__33945460ba6d438e6385a0abc3d79a10121f0c81f46b5843a624833bd647752b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 221,  496 => 172,  491 => 171,  485 => 169,  479 => 166,  475 => 165,  471 => 163,  457 => 157,  451 => 156,  443 => 155,  439 => 153,  435 => 151,  429 => 150,  425 => 148,  421 => 146,  418 => 145,  414 => 144,  411 => 143,  408 => 142,  404 => 140,  396 => 138,  393 => 137,  385 => 135,  379 => 133,  377 => 132,  374 => 131,  372 => 130,  368 => 129,  362 => 128,  350 => 125,  346 => 123,  342 => 122,  335 => 117,  329 => 116,  321 => 114,  313 => 112,  310 => 111,  306 => 110,  301 => 108,  294 => 103,  288 => 102,  280 => 100,  272 => 98,  269 => 97,  265 => 96,  260 => 94,  251 => 90,  248 => 89,  245 => 82,  243 => 81,  239 => 80,  229 => 73,  220 => 68,  216 => 66,  212 => 64,  210 => 63,  201 => 58,  197 => 56,  193 => 54,  191 => 53,  183 => 47,  177 => 46,  171 => 45,  165 => 44,  157 => 42,  149 => 40,  146 => 39,  141 => 38,  133 => 36,  125 => 34,  122 => 33,  117 => 32,  109 => 30,  101 => 28,  98 => 27,  94 => 26,  90 => 25,  85 => 23,  79 => 22,  73 => 19,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__33945460ba6d438e6385a0abc3d79a10121f0c81f46b5843a624833bd647752b", "");
    }
}
