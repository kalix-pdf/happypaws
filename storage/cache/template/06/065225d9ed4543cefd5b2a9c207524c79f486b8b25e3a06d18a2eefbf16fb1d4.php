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

/* __string_template__d2ff56d5e47118a4f0d534032759236038b58820a83b6a253f626aaa0a688cc0 */
class __TwigTemplate_463341ac04783b403084d3088ac7afa5071152014fbbef1d780807451d27f26d extends Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\" style=\"color: 162f65\"></i> <span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr>
          <td class=\"text-center\">";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          
                            ";
                // line 11
                if ((((((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null)) && ($context["marketplace_seller_name_cart_status"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["product"], "seller_name", [], "array", true, true, false, 11)) && (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["seller_name"] ?? null) : null)) &&  !($context["marketplace_seller_info_hide"] ?? null))) {
                    // line 12
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo (($__internal_compile_1 = $context["product"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
                    echo "</a> ";
                    echo ($context["text_bySeller"] ?? null);
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "seller_href", [], "any", false, false, false, 12);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_3 = $context["product"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                    echo "</a>
                            ";
                } else {
                    // line 14
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    echo "</a>
                            ";
                }
                // line 16
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 18);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 18);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 20)) {
                    echo " <br />
            - <small>";
                    // line 21
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 21);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22);
                echo "</td>
          <td class=\"text-right\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 23);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 24);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 28
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 30);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 33);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 42
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 43);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 44);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 48
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
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
            // line 52
            echo "    <li>
      <p class=\"text-center\">";
            // line 53
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 56
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d2ff56d5e47118a4f0d534032759236038b58820a83b6a253f626aaa0a688cc0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 56,  228 => 53,  225 => 52,  212 => 48,  209 => 47,  200 => 44,  196 => 43,  193 => 42,  189 => 41,  182 => 36,  171 => 33,  167 => 32,  162 => 30,  158 => 28,  153 => 27,  142 => 24,  138 => 23,  134 => 22,  126 => 21,  121 => 20,  118 => 19,  109 => 18,  102 => 17,  99 => 16,  91 => 14,  77 => 12,  75 => 11,  60 => 9,  57 => 8,  53 => 7,  49 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d2ff56d5e47118a4f0d534032759236038b58820a83b6a253f626aaa0a688cc0", "");
    }
}
