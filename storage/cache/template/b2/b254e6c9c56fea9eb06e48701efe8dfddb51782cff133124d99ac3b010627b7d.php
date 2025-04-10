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

/* __string_template__6fa80469fd03c7f4b858109adf7dc8e7df1af601b4db7f8b04cf15ba84b84b31 */
class __TwigTemplate_72e813af4d5f53c2542ded54140634d03a3fb2a0c074a5d6bfca26ce363bfaaa extends Template
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
<!DOCTYPE html>
<html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 7
        echo ($context["base"] ?? null);
        echo "\" />
  <!--<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script> -->
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\" />
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
</head>
<body>
";
        // line 16
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 17
            echo "  <div class=\"container-fluid\" id=\"content\" style=\"margin-left: 18%\">
";
        } else {
            // line 19
            echo "  <div class=\"container\">
";
        }
        // line 21
        echo "
  <div style=\"page-break-after: always;\">
    <h1>
      ";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["text_order"] ?? null);
        echo " # ";
        echo ($context["order_id"] ?? null);
        echo "
      <div class=\"pull-right\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tooltip-hover\" title=\"";
        // line 26
        echo ($context["text_print_invoice"] ?? null);
        echo "\" onclick=\"printinvoice();\"><i class=\"fa fa-print\"></i></button>
      </div>
    </h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
        // line 32
        echo ($context["text_order_info"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"width: 50%;\"><div>
            <strong>";
        // line 38
        echo (($__internal_compile_0 = ($context["order"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["store_name"] ?? null) : null);
        echo "</strong><br />
            ";
        // line 39
        echo (($__internal_compile_1 = ($context["order"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["store_address"] ?? null) : null);
        echo "
            </div>
            <b>";
        // line 41
        echo ($context["text_telephone"] ?? null);
        echo "</b>
            ";
        // line 42
        echo (($__internal_compile_2 = ($context["order"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["store_telephone"] ?? null) : null);
        echo "
            <br />

            ";
        // line 45
        if ((($__internal_compile_3 = ($context["order"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["store_fax"] ?? null) : null)) {
            // line 46
            echo "              <b>";
            echo ($context["text_fax"] ?? null);
            echo "</b> ";
            echo (($__internal_compile_4 = ($context["order"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["store_fax"] ?? null) : null);
            echo "<br />
            ";
        }
        // line 48
        echo "            <b>";
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo (($__internal_compile_5 = ($context["order"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["store_email"] ?? null) : null);
        echo "<br />
            <b>";
        // line 49
        echo ($context["text_website"] ?? null);
        echo "</b> <a href=\"";
        echo (($__internal_compile_6 = ($context["order"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["store_url"] ?? null) : null);
        echo "\">";
        echo (($__internal_compile_7 = ($context["order"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["store_url"] ?? null) : null);
        echo "</a></td>

          <td style=\"width: 50%;\">
            <b>";
        // line 52
        echo ($context["text_order_date"] ?? null);
        echo "</b> ";
        echo (($__internal_compile_8 = ($context["order"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_added"] ?? null) : null);
        echo "<br />
            ";
        // line 53
        if (($context["invoice_no"] ?? null)) {
            // line 54
            echo "            <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br />
            ";
        }
        // line 56
        echo "            <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> ";
        echo ($context["order_id"] ?? null);
        echo "<br />
            <b>";
        // line 57
        echo ($context["text_payment_method"] ?? null);
        echo "</b> ";
        echo ($context["payment_method"] ?? null);
        echo "<br />
            ";
        // line 58
        if (($context["shipping_method"] ?? null)) {
            // line 59
            echo "              <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "<br />
            ";
        }
        // line 60
        echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
        // line 67
        echo ($context["text_billing_address"] ?? null);
        echo "</b></td>
          <td style=\"width: 50%;\"><b>";
        // line 68
        echo ($context["text_shipping_address"] ?? null);
        echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
        // line 74
        echo ($context["payment_address"] ?? null);
        echo "
            <br/>";
        // line 75
        echo ($context["email"] ?? null);
        echo "
            </address></td>
          <td><address>
            ";
        // line 78
        echo ($context["shipping_address"] ?? null);
        echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
        // line 86
        echo ($context["text_product"] ?? null);
        echo "</b></td>
          <td><b>";
        // line 87
        echo ($context["entry_model"] ?? null);
        echo "</b></td>
          <td class=\"text-right\"><b>";
        // line 88
        echo ($context["text_qty"] ?? null);
        echo "</b></td>
          <td class=\"text-right\"><b>";
        // line 89
        echo ($context["text_price"] ?? null);
        echo "</b></td>
          <td class=\"text-right\"><b>";
        // line 90
        echo ($context["text_total_row"] ?? null);
        echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 95
            echo "        <tr>
          <td>";
            // line 96
            echo (($__internal_compile_9 = $context["product"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
            echo "
            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_10 = $context["product"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["option"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 98
                echo "            <br />
            &nbsp;<small> - ";
                // line 99
                echo (($__internal_compile_11 = $context["option"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null);
                echo ": ";
                echo (($__internal_compile_12 = $context["option"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["value"] ?? null) : null);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "          </td>
          <td>";
            // line 102
            echo (($__internal_compile_13 = $context["product"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["model"] ?? null) : null);
            echo "</td>
          <td class=\"text-right\">";
            // line 103
            echo (($__internal_compile_14 = $context["product"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["quantity"] ?? null) : null);
            echo "</td>
          <td class=\"text-right\">";
            // line 104
            echo (($__internal_compile_15 = $context["product"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["price"] ?? null) : null);
            echo "</td>
          <td class=\"text-right\">";
            // line 105
            echo (($__internal_compile_16 = $context["product"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["total"] ?? null) : null);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 109
            echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
            // line 110
            echo (($__internal_compile_17 = $context["total"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["title"] ?? null) : null);
            echo "</b></td>
          <td class=\"text-right\">";
            // line 111
            echo (($__internal_compile_18 = $context["total"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["text"] ?? null) : null);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "      </tbody>
    </table>
    ";
        // line 116
        if (array_key_exists("comment", $context)) {
            // line 117
            echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 120
            echo ($context["column_comment"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
            // line 125
            echo (($__internal_compile_19 = ($context["order"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["comment"] ?? null) : null);
            echo "</td>
        </tr>
      </tbody>
    </table>
    ";
        }
        // line 130
        echo "  </div>

</div>
</body>
</html>
<script>
function printinvoice(){
  window.print();
}
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__6fa80469fd03c7f4b858109adf7dc8e7df1af601b4db7f8b04cf15ba84b84b31";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 130,  350 => 125,  342 => 120,  337 => 117,  335 => 116,  331 => 114,  322 => 111,  318 => 110,  315 => 109,  310 => 108,  301 => 105,  297 => 104,  293 => 103,  289 => 102,  286 => 101,  276 => 99,  273 => 98,  269 => 97,  265 => 96,  262 => 95,  258 => 94,  251 => 90,  247 => 89,  243 => 88,  239 => 87,  235 => 86,  224 => 78,  218 => 75,  214 => 74,  205 => 68,  201 => 67,  192 => 60,  184 => 59,  182 => 58,  176 => 57,  169 => 56,  161 => 54,  159 => 53,  153 => 52,  143 => 49,  136 => 48,  128 => 46,  126 => 45,  120 => 42,  116 => 41,  111 => 39,  107 => 38,  98 => 32,  89 => 26,  80 => 24,  75 => 21,  71 => 19,  67 => 17,  65 => 16,  53 => 7,  49 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6fa80469fd03c7f4b858109adf7dc8e7df1af601b4db7f8b04cf15ba84b84b31", "");
    }
}
