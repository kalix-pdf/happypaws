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

/* __string_template__9c1d5f4f015102becede8437cab41f8cefb99c7411edd42bdf8dd7facd0b79f2 */
class __TwigTemplate_8f25d406690327747058292749ed1b5ffc14412cb7add5359f636fedbbeacfee extends Template
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
        echo "<div style=\"page-break-after: always;\">
</div>
<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
\t<thead>
\t\t<tr>
\t\t\t<td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 6
        echo ($context["text_seller_detail"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px; vertical-align: top;\">
\t\t\t\t<strong>";
        // line 12
        echo ($context["store_name"] ?? null);
        echo "</strong><br/>
\t\t\t\t";
        // line 13
        echo ($context["seller_address"] ?? null);
        echo "
\t\t\t\t<br/>

\t\t\t\t<b>";
        // line 16
        echo ($context["text_seller_telephone"] ?? null);
        echo "</b>
\t\t\t\t";
        // line 17
        echo ($context["seller_telephone"] ?? null);
        echo "
\t\t\t\t<br/>

\t\t\t\t<b>";
        // line 20
        echo ($context["text_seller_email"] ?? null);
        echo "</b>
\t\t\t\t";
        // line 21
        echo ($context["seller_email"] ?? null);
        echo "
\t\t\t\t<br/>

\t\t\t\t<b>";
        // line 24
        echo ($context["text_seller_profile_link"] ?? null);
        echo "</b>
\t\t\t\t<a href=\"";
        // line 25
        echo ($context["seller_profile_link"] ?? null);
        echo "\">";
        echo ($context["seller_profile_link"] ?? null);
        echo "</a>
\t\t\t\t<br/>
\t\t\t</td>
\t\t\t<td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px; vertical-align: top;\">
\t\t\t\t<b>";
        // line 29
        echo ($context["text_order_date"] ?? null);
        echo "</b>
\t\t\t\t";
        // line 30
        echo ($context["date_added"] ?? null);
        echo "<br/>
\t\t\t\t";
        // line 31
        if (($context["invoice_no"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t<b>";
            echo ($context["text_seller_invoice_no"] ?? null);
            echo "</b>
\t\t\t\t\t";
            // line 33
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t<b>";
        echo ($context["text_seller_order_id"] ?? null);
        echo "</b>
\t\t\t\t";
        // line 36
        echo ($context["order_id"] ?? null);
        echo "<br/>
\t\t\t\t<b>";
        // line 37
        echo ($context["text_seller_payment_method"] ?? null);
        echo "</b>
\t\t\t\t";
        // line 38
        echo ($context["payment_method"] ?? null);
        echo "<br/>
\t\t\t\t";
        // line 39
        if (($context["shipping_method"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t<b>";
            echo ($context["text_seller_shipping_method"] ?? null);
            echo "</b>
\t\t\t\t\t";
            // line 41
            echo ($context["shipping_method"] ?? null);
            echo "<br/>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</td>
\t\t</tr>
\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9c1d5f4f015102becede8437cab41f8cefb99c7411edd42bdf8dd7facd0b79f2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  140 => 41,  135 => 40,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  116 => 35,  111 => 33,  106 => 32,  104 => 31,  100 => 30,  96 => 29,  87 => 25,  83 => 24,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  57 => 13,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9c1d5f4f015102becede8437cab41f8cefb99c7411edd42bdf8dd7facd0b79f2", "");
    }
}
