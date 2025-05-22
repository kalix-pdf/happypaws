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

/* __string_template__f836a9c11bde09c5ad20111a502810d4d306442e23d5b19cb55d69f263de8ec1 */
class __TwigTemplate_4adbdb28427afa8e0480b670c0a2c401800be1539421e186b7d7501396802134 extends Template
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
        echo "header


<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 5
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 7
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 8
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "        <tr>
          <td class=\"text-center\">";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          
                            ";
                // line 14
                if ((((((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null)) && ($context["marketplace_seller_name_cart_status"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["product"], "seller_name", [], "array", true, true, false, 14)) && (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["seller_name"] ?? null) : null)) &&  !($context["marketplace_seller_info_hide"] ?? null))) {
                    // line 15
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "</a> ";
                    echo ($context["text_bySeller"] ?? null);
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "seller_href", [], "any", false, false, false, 15);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                    echo "</a>
                            ";
                } else {
                    // line 17
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "</a>
                            ";
                }
                // line 19
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 23)) {
                    echo " <br />
            - <small>";
                    // line 24
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-right\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 26);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 31
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 33);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 36);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 45
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 46);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 47);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 51
            echo ($context["cart"] ?? null);
            echo "\"><strong>";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 55
            echo "    <li>
      <p class=\"text-center\">";
            // line 56
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 59
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f836a9c11bde09c5ad20111a502810d4d306442e23d5b19cb55d69f263de8ec1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 59,  231 => 56,  228 => 55,  215 => 51,  212 => 50,  203 => 47,  199 => 46,  196 => 45,  192 => 44,  185 => 39,  174 => 36,  170 => 35,  165 => 33,  161 => 31,  156 => 30,  145 => 27,  141 => 26,  137 => 25,  129 => 24,  124 => 23,  121 => 22,  112 => 21,  105 => 20,  102 => 19,  94 => 17,  80 => 15,  78 => 14,  63 => 12,  60 => 11,  56 => 10,  52 => 8,  50 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f836a9c11bde09c5ad20111a502810d4d306442e23d5b19cb55d69f263de8ec1", "");
    }
}
