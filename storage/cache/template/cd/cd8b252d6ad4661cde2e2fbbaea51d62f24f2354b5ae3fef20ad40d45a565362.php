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

/* __string_template__7f7209751fe450eec5e062ad45cbb91b2850a1525e0e74bc8358608269de951d */
class __TwigTemplate_c1527e31a5e7007985bd1ed85f550136be261341bd476c094cbcd924490a673d extends Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
        
        <div>
      <a href=\"";
        // line 10
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 11
        echo ($context["text_greeting"] ?? null);
        echo "</p>
  ";
        // line 12
        if (($context["customer_id"] ?? null)) {
            // line 13
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_link"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 14
            echo ($context["link"] ?? null);
            echo "\">";
            echo ($context["link"] ?? null);
            echo "</a></p>
  ";
        }
        // line 16
        echo "  ";
        if (($context["download"] ?? null)) {
            // line 17
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_download"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 18
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["download"] ?? null);
            echo "</a></p>
  ";
        }
        // line 20
        echo "        
        ";
        // line 21
        if (($context["seller_info_status"] ?? null)) {
            // line 22
            echo "            <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_seller_invoice"] ?? null);
            echo "</p>
        ";
        }
        // line 24
        echo "        ";
        echo ($context["seller_block"] ?? null);
        echo "
      
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 29
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 34
        echo ($context["text_order_id"] ?? null);
        echo "</b> ";
        echo ($context["order_id"] ?? null);
        echo "<br/>
          <b>";
        // line 35
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "<br/>
          <b>";
        // line 36
        echo ($context["text_payment_method"] ?? null);
        echo "</b> ";
        echo ($context["payment_method"] ?? null);
        echo "<br/>
          ";
        // line 37
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
          ";
        }
        // line 38
        echo "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 39
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo ($context["email"] ?? null);
        echo "<br/>
          <b>";
        // line 40
        echo ($context["text_telephone"] ?? null);
        echo "</b> ";
        echo ($context["telephone"] ?? null);
        echo "<br/>
          <b>";
        // line 41
        echo ($context["text_ip"] ?? null);
        echo "</b> ";
        echo ($context["ip"] ?? null);
        echo "<br/>
          <b>";
        // line 42
        echo ($context["text_order_status"] ?? null);
        echo "</b> ";
        echo ($context["order_status"] ?? null);
        echo "<br/></td>
      </tr>
    </tbody>
  </table>
  ";
        // line 46
        if (($context["comment"] ?? null)) {
            // line 47
            echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 50
            echo ($context["text_instruction"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 55
            echo ($context["comment"] ?? null);
            echo "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 60
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 63
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
        ";
        // line 64
        if (($context["shipping_address"] ?? null)) {
            // line 65
            echo "        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 66
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 70
        echo ($context["payment_address"] ?? null);
        echo "</td>
        ";
        // line 71
        if (($context["shipping_address"] ?? null)) {
            // line 72
            echo "        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 73
        echo " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 79
        echo ($context["text_product"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 80
        echo ($context["text_model"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 81
        echo ($context["text_quantity"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 82
        echo ($context["text_price"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 83
        echo ($context["text_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 89
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            echo "
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br/>
        &nbsp;<small> - ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 92);
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 93);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 94);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 96);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 100
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 101);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 104);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 105);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 113
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"4\"><b>";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 114);
            echo ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 115);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "      </tfoot>
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 121
        echo ($context["text_footer"] ?? null);
        echo "</p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "__string_template__7f7209751fe450eec5e062ad45cbb91b2850a1525e0e74bc8358608269de951d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 121,  371 => 118,  362 => 115,  358 => 114,  355 => 113,  351 => 112,  345 => 108,  336 => 105,  332 => 104,  326 => 101,  323 => 100,  318 => 99,  309 => 96,  305 => 95,  301 => 94,  297 => 93,  286 => 92,  280 => 91,  276 => 90,  273 => 89,  269 => 88,  261 => 83,  257 => 82,  253 => 81,  249 => 80,  245 => 79,  237 => 73,  231 => 72,  229 => 71,  225 => 70,  219 => 66,  213 => 65,  211 => 64,  207 => 63,  202 => 60,  194 => 55,  186 => 50,  181 => 47,  179 => 46,  170 => 42,  164 => 41,  158 => 40,  152 => 39,  149 => 38,  140 => 37,  134 => 36,  128 => 35,  122 => 34,  114 => 29,  105 => 24,  99 => 22,  97 => 21,  94 => 20,  87 => 18,  82 => 17,  79 => 16,  72 => 14,  67 => 13,  65 => 12,  61 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7f7209751fe450eec5e062ad45cbb91b2850a1525e0e74bc8358608269de951d", "");
    }
}
