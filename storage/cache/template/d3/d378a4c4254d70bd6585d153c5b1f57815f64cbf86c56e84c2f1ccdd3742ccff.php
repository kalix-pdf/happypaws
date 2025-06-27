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

/* __string_template__9d43dd6453344b7e5805e2a8ff6c274bbd93fbd47987934dd514ba4297bb156f */
class __TwigTemplate_bb76d6093bdbaaa7894d9d1808d010ef1778f433aaaa35aeb6c56ee6fc1e15ae extends Template
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
        echo "<style>
.close {
  margin-right: 1%;
}
</style>

<div id=\"seller-collection\">
  <div class=\"col-sm-3\">
    <!-- Category sidebar temporarily disabled -->
    ";
        // line 34
        echo "  </div>

  <div class=\"col-sm-9\">
    <div class=\"row mb-3\">

      <!-- List/Grid View Buttons -->
      <div class=\"col-md-3 col-sm-6 mb-2\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 42
        echo ($context["button_list"] ?? null);
        echo "\">
            <i class=\"fa fa-th-list\"></i>
          </button>
          <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 45
        echo ($context["button_grid"] ?? null);
        echo "\">
            <i class=\"fa fa-th\"></i>
          </button>
        </div>
      </div>

      <!-- Search input temporarily disabled -->
      ";
        // line 60
        echo "
      <!-- Sort Dropdown -->
      <div class=\"col-md-4 col-xs-6\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 64
        echo ($context["text_sort"] ?? null);
        echo "</label>
          <select id=\"input-sort\" class=\"form-control\">
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 67
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 67);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 67) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 67);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "          </select>
        </div>
      </div>

      <!-- Limit Dropdown -->
      <div class=\"col-md-4 col-xs-6\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 76
        echo ($context["text_limit"] ?? null);
        echo "</label>
          <select id=\"input-limit\" class=\"form-control\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 79
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 79);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 79) == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 79);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </select>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    ";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "      <div id=\"mp-products\">
       <div class=\"row product-page\">
 ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "  <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex\">
    <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
      <div class=\"image\"><a href=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 93);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                echo "\" class=\"img-fluid mx-auto d-block\"/></a></div>
      <div class=\"caption\">
        <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "</a></h4>
        <p >";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 96);
                echo "</p>
        ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "        <div class=\"rating d-flex gap-3 fs-4\">
          ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 100
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100) < $context["i"])) {
                            // line 101
                            echo "          <i class=\"fa fa-paw text-muted\"></i>
          ";
                        } else {
                            // line 103
                            echo "          <i class=\"fa fa-paw stars\"></i>
          ";
                        }
                        // line 105
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "        </div>
        ";
                }
                // line 108
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "        <p class=\"price\">
          ";
                    // line 110
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 110)) {
                        // line 111
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                        echo "
          ";
                    } else {
                        // line 113
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113);
                        echo "</span>
          ";
                    }
                    // line 115
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 115)) {
                        // line 116
                        echo "          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116);
                        echo "</span>
          ";
                    }
                    // line 118
                    echo "        </p>
        ";
                }
                // line 120
                echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 123
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "
        <div class=\"row mt-4\">
          <div class=\"col-sm-6 text-left\">";
            // line 131
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 132
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      </div>
    ";
        } else {
            // line 136
            echo "      ";
            if ( !($context["categories"] ?? null)) {
                // line 137
                echo "        <p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
      ";
            }
            // line 139
            echo "    ";
        }
        // line 140
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9d43dd6453344b7e5805e2a8ff6c274bbd93fbd47987934dd514ba4297bb156f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 140,  296 => 139,  290 => 137,  287 => 136,  280 => 132,  276 => 131,  272 => 129,  259 => 124,  253 => 123,  247 => 122,  243 => 120,  239 => 118,  231 => 116,  228 => 115,  220 => 113,  214 => 111,  212 => 110,  209 => 109,  206 => 108,  202 => 106,  196 => 105,  192 => 103,  188 => 101,  185 => 100,  181 => 99,  178 => 98,  176 => 97,  172 => 96,  166 => 95,  155 => 93,  151 => 91,  147 => 90,  143 => 88,  141 => 87,  133 => 81,  120 => 79,  116 => 78,  111 => 76,  102 => 69,  89 => 67,  85 => 66,  80 => 64,  74 => 60,  64 => 45,  58 => 42,  48 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9d43dd6453344b7e5805e2a8ff6c274bbd93fbd47987934dd514ba4297bb156f", "");
    }
}
