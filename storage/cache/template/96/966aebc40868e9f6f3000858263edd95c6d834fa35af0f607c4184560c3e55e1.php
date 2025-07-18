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

/* product/category.twig */
class __TwigTemplate_ee84a30fb4e47bf291aff78678e87a38367a393da99fdae3338edc7b65ba5c80 extends Template
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

<div id=\"product-category\" class=\"container mb-4\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb flex-wrap\">
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
  <div class=\"row\">
    ";
        // line 14
        if (($context["column_left"] ?? null)) {
            // line 15
            echo "      <aside class=\"col-lg-3 col-md-4 col-12-mb-4\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        if (($context["column_left"] ?? null)) {
            echo "col-lg-9 col-md-8 col-12";
        } else {
            echo "col-12";
        }
        echo "\">
      <h2>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 19
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 20
            echo "      <div class=\"row row-header-category\"> ";
            if (($context["thumb"] ?? null)) {
                // line 21
                echo "        ";
                // line 22
                echo "        ";
            }
            // line 23
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 24
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 26
            echo "        <div class=\"refine-search-group\">
         ";
            // line 27
            if (($context["categories"] ?? null)) {
                // line 28
                echo "          ";
                if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                    echo "  
      ";
                } else {
                    // line 30
                    echo "      <div class=\"row\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 31
                        echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["category"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 34
                            echo "            <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "          </ul>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "</div>
      <br/>
      ";
                }
                // line 41
                echo "      ";
            }
            // line 42
            echo "        </div>
        </div>
      <hr>
      ";
        }
        // line 46
        echo "      ";
        // line 71
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 72
            echo "      <div class=\"row product-row-menu flex-wrap gy-2 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 74
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"text-black text-decoration-none btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6 sorting\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 78
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"mx-3 form-control\" onchange=\"location = this.value;\">
              ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 81
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 81) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 82
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 82);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 82);
                    echo "</option>
              ";
                } else {
                    // line 84
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
              ";
                }
                // line 86
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6 showing\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 92
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control mx-3\" onchange=\"location = this.value;\">
              ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 95
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 95) == ($context["limit"] ?? null))) {
                    // line 96
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 96);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 96);
                    echo "</option>
              ";
                } else {
                    // line 98
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                    echo "</option>
              ";
                }
                // line 100
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row product-row\"> ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 106
                echo "        <div class=\"product-layout col-lg-4 col-md-6 col-sm-12 mb-4\">
          <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
            <div class=\"image\"><a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 108);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 108);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" class=\"img-fluid mx-auto d-block\" /></a></div>
              <div class=\"caption\">
                <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                echo "</a></h4>
                <p class=\"product-description\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 111);
                echo "</p>
                ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114);
                        echo "
                  ";
                    } else {
                        // line 115
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 115);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo "</span> ";
                    }
                    // line 116
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 118
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                  <div class=\"rating d-flex gap-3 fs-4\">
                    ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 121
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 121) < $context["i"])) {
                            // line 122
                            echo "                    <i class=\"fa fa-paw text-muted\"></i>
                    ";
                        } else {
                            // line 124
                            echo "                    <i class=\"fa fa-paw stars\"></i>
                    ";
                        }
                        // line 126
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                  </div>
                  ";
                }
                // line 129
                echo "                </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 131);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 132
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 133
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 140
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 141
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 144
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 145
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 147
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 150
        echo "     </div>
    </div>
</div>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 153,  417 => 150,  409 => 147,  403 => 145,  400 => 144,  394 => 141,  390 => 140,  386 => 138,  372 => 133,  366 => 132,  358 => 131,  354 => 129,  350 => 127,  344 => 126,  340 => 124,  336 => 122,  333 => 121,  329 => 120,  326 => 119,  323 => 118,  311 => 116,  304 => 115,  298 => 114,  295 => 113,  293 => 112,  289 => 111,  283 => 110,  272 => 108,  268 => 106,  264 => 105,  258 => 101,  252 => 100,  244 => 98,  236 => 96,  233 => 95,  229 => 94,  224 => 92,  217 => 87,  211 => 86,  203 => 84,  195 => 82,  192 => 81,  188 => 80,  183 => 78,  174 => 74,  170 => 72,  167 => 71,  165 => 46,  159 => 42,  156 => 41,  151 => 38,  143 => 36,  132 => 34,  128 => 33,  124 => 31,  119 => 30,  113 => 28,  111 => 27,  108 => 26,  102 => 24,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  89 => 19,  85 => 18,  76 => 17,  70 => 15,  68 => 14,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/category.twig", "");
    }
}
