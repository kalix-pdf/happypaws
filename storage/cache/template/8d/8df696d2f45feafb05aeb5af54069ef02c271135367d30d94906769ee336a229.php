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

/* __string_template__b59635bc107d5d779e3f6aa7a8b7f9d67bea85b2d6eaf13c4fd85f379335c7c9 */
class __TwigTemplate_5a16c60e8394ddfabb1bdafdd264b4b07fd8cbabfae02f9a7b6cf0cc78592e67 extends Template
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

<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 4
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 6
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 7
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "        <tr>
          <td class=\"text-center\">";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          
                            ";
                // line 13
                if ((((((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null)) && ($context["marketplace_seller_name_cart_status"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["product"], "seller_name", [], "array", true, true, false, 13)) && (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["seller_name"] ?? null) : null)) &&  !($context["marketplace_seller_info_hide"] ?? null))) {
                    // line 14
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "</a> ";
                    echo ($context["text_bySeller"] ?? null);
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "seller_href", [], "any", false, false, false, 14);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                    echo "</a>
                            ";
                } else {
                    // line 16
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "</a>
                            ";
                }
                // line 18
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22)) {
                    echo " <br />
            - <small>";
                    // line 23
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 23);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
                echo "</td>
          <td class=\"text-right\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 26);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 34);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 35);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 44
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 46);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 50
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-cart-shopping\" style=\"color: #ffffff;\"></i> ";
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
            // line 54
            echo "    <li>
      <p class=\"text-center\">";
            // line 55
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 58
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b59635bc107d5d779e3f6aa7a8b7f9d67bea85b2d6eaf13c4fd85f379335c7c9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 58,  230 => 55,  227 => 54,  214 => 50,  211 => 49,  202 => 46,  198 => 45,  195 => 44,  191 => 43,  184 => 38,  173 => 35,  169 => 34,  164 => 32,  160 => 30,  155 => 29,  144 => 26,  140 => 25,  136 => 24,  128 => 23,  123 => 22,  120 => 21,  111 => 20,  104 => 19,  101 => 18,  93 => 16,  79 => 14,  77 => 13,  62 => 11,  59 => 10,  55 => 9,  51 => 7,  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b59635bc107d5d779e3f6aa7a8b7f9d67bea85b2d6eaf13c4fd85f379335c7c9", "");
    }
}
