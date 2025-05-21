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

/* __string_template__48d9e8557df986d82e822ea5b185cc55a1457ddfc8922b3ce48577f53b731b58 */
class __TwigTemplate_6dda4d2d63f67101635e62cb1456dd5c92b669fc7bf8ec1d273300e054393feb extends Template
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
<div id=\"cart\" >
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 3
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 5
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 6
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "        <tr>
          <td class=\"text-center\">";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          
                            ";
                // line 12
                if ((((((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null)) && ($context["marketplace_seller_name_cart_status"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["product"], "seller_name", [], "array", true, true, false, 12)) && (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["seller_name"] ?? null) : null)) &&  !($context["marketplace_seller_info_hide"] ?? null))) {
                    // line 13
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "</a> ";
                    echo ($context["text_bySeller"] ?? null);
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "seller_href", [], "any", false, false, false, 13);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                    echo "</a>
                            ";
                } else {
                    // line 15
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "</a>
                            ";
                }
                // line 17
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 19
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 19);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 19);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 21)) {
                    echo " <br />
            - <small>";
                    // line 22
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 23);
                echo "</td>
          <td class=\"text-right\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 24);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 25);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 29
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 31);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 33);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 34);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 43
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 44);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 45);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 49
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\" style=\"color: #fffff\"></i> ";
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
            // line 53
            echo "    <li>
      <p class=\"text-center\">";
            // line 54
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 57
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__48d9e8557df986d82e822ea5b185cc55a1457ddfc8922b3ce48577f53b731b58";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 57,  229 => 54,  226 => 53,  213 => 49,  210 => 48,  201 => 45,  197 => 44,  194 => 43,  190 => 42,  183 => 37,  172 => 34,  168 => 33,  163 => 31,  159 => 29,  154 => 28,  143 => 25,  139 => 24,  135 => 23,  127 => 22,  122 => 21,  119 => 20,  110 => 19,  103 => 18,  100 => 17,  92 => 15,  78 => 13,  76 => 12,  61 => 10,  58 => 9,  54 => 8,  50 => 6,  48 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__48d9e8557df986d82e822ea5b185cc55a1457ddfc8922b3ce48577f53b731b58", "");
    }
}
