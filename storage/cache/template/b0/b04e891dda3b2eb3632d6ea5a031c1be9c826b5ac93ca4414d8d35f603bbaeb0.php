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

/* __string_template__0ff7a652910bf8a01649f7d87de478edddf4ec3825c93af118d5d27e7148696b */
class __TwigTemplate_f9df55446f24a126953fb7dd3aa80b8713357705a24d29a30ef11cce189c92ed extends Template
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
  .li_padding{
    padding: 4px;
    //font-family: monospace;
  }
  .span_height{
    height: 15px;
    margin: 5px;
  }
</style>
<a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-danger pull-left\" style=\"top:10px;left:18px;position: absolute;\">";
        // line 11
        if ((array_key_exists("alerts", $context) && ($context["alerts"] ?? null))) {
            echo ($context["alerts"] ?? null);
        }
        echo "</span> <img src=\"view/image/notify.png\" title=\"Notifications\"></a>
  <ul class=\"dropdown-menu dropdown-menu-right\" style=\"min-width:470px;\">
    ";
        // line 13
        if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
            // line 14
            echo "      <li class=\"li_padding\">
        <ul style=\"display:inline-flex;margin-left:-8%;\">
          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            // line 16
            echo ($context["text_order"] ?? null);
            echo "</b></li>
          <a href=\"";
            // line 17
            echo ($context["view_all"] ?? null);
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-warning span_height\">";
            echo ($context["processing_status_total"] ?? null);
            echo "</span>";
            echo ($context["text_processing_status"] ?? null);
            echo "</a>
          <a href=\"";
            // line 18
            echo ($context["view_all"] ?? null);
            echo "\" style=\"margin:5px 5px;\"><span class=\"label label-success span_height\" style=\"margin-left:2%;\">";
            echo ($context["complete_status_total"] ?? null);
            echo "</span>";
            echo ($context["text_complete_status"] ?? null);
            echo "</a>
          <a href=\"";
            // line 19
            echo ($context["view_all"] ?? null);
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-danger span_height\" style=\"margin-left:2%;\">";
            echo ($context["return_total"] ?? null);
            echo "</span>";
            echo ($context["text_return"] ?? null);
            echo "</a>
        </ul>
        ";
            // line 21
            if ((array_key_exists("seller_notifications", $context) && ($context["seller_notifications"] ?? null))) {
                // line 22
                echo "          <ul>
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 24
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_notification"];
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo ($context["view_all"] ?? null);
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
          </ul>
        ";
            }
            // line 29
            echo "      </li>
      ";
            // line 30
            if (((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null)) || (array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null)))) {
                // line 31
                echo "        <li class=\"divider li_padding\"></li>
      ";
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
            // line 35
            echo "      <li class=\"li_padding\">
        ";
            // line 36
            if (($context["journal_page"] ?? null)) {
                // line 37
                echo "          <ul style=\"display:inline-flex\">
          ";
            } else {
                // line 39
                echo "          <ul style=\"display:inline-flex;margin-left:-8%;\">
        ";
            }
            // line 41
            echo "          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            echo ($context["text_product"] ?? null);
            echo "</b></li>
          <a href=\"";
            // line 42
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-warning span_height\">";
            echo ($context["product_stock_total"] ?? null);
            echo "</span>";
            echo ($context["text_stock"] ?? null);
            echo "</a>
          <a href=\"";
            // line 43
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\" style=\"margin:5px 5px;\"><span class=\"label label-success span_height\" style=\"margin-left:2%;\">";
            echo ($context["review_total"] ?? null);
            echo "</span>";
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
          <a href=\"";
            // line 44
            echo (($context["view_all"] ?? null) . "&tab=product");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-danger span_height\" style=\"margin-left:2%;\">";
            echo ($context["approval_total"] ?? null);
            echo "</span>";
            echo ($context["text_approval"] ?? null);
            echo "</a>
        </ul>
        ";
            // line 46
            if ((array_key_exists("seller_product_reviews", $context) && ($context["seller_product_reviews"] ?? null))) {
                // line 47
                echo "          <ul>
            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_product_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 49
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_product_review"];
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo (($context["view_all"] ?? null) . "&tab=product");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
          </ul>
        ";
            }
            // line 54
            echo "      </li>
      ";
            // line 55
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 56
                echo "        <li class=\"divider li_padding\"></li>
      ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "    ";
        if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
            // line 60
            echo "      <li class=\"li_padding\">
        ";
            // line 61
            if (($context["journal_page"] ?? null)) {
                // line 62
                echo "          <ul style=\"display:inline-flex\">
          ";
            } else {
                // line 64
                echo "          <ul style=\"display:inline-flex;margin-left:-8%;\">
        ";
            }
            // line 66
            echo "          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            echo ($context["text_entry_seller"] ?? null);
            echo "</b></li>
          <a href=\"";
            // line 67
            echo (($context["view_all"] ?? null) . "&tab=seller");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-success span_height\">";
            echo ($context["seller_review_total"] ?? null);
            echo "</span>";
            echo ($context["text_entry_review"] ?? null);
            echo "</a>
        </ul>
        ";
            // line 69
            if ((array_key_exists("seller_reviews", $context) && ($context["seller_reviews"] ?? null))) {
                // line 70
                echo "          <ul>
            ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seller_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 72
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_review"];
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo (($context["view_all"] ?? null) . "&tab=seller");
                echo "\">";
                echo ($context["text_view_all"] ?? null);
                echo "</a></li>
          </ul>
        ";
            }
            // line 77
            echo "      </li>
    ";
        }
        // line 79
        echo "    ";
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !($context["seller_notifications"] ?? null) &&  !($context["seller_product_reviews"] ?? null)) &&  !($context["seller_reviews"] ?? null)))) {
            // line 80
            echo "      <center><h4>";
            echo ($context["text_no_notification"] ?? null);
            echo "</h4></center>
    ";
        }
        // line 82
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0ff7a652910bf8a01649f7d87de478edddf4ec3825c93af118d5d27e7148696b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 82,  279 => 80,  276 => 79,  272 => 77,  263 => 74,  254 => 72,  250 => 71,  247 => 70,  245 => 69,  236 => 67,  231 => 66,  227 => 64,  223 => 62,  221 => 61,  218 => 60,  215 => 59,  212 => 58,  208 => 56,  206 => 55,  203 => 54,  194 => 51,  185 => 49,  181 => 48,  178 => 47,  176 => 46,  167 => 44,  159 => 43,  151 => 42,  146 => 41,  142 => 39,  138 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  123 => 31,  121 => 30,  118 => 29,  109 => 26,  100 => 24,  96 => 23,  93 => 22,  91 => 21,  82 => 19,  74 => 18,  66 => 17,  62 => 16,  58 => 14,  56 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0ff7a652910bf8a01649f7d87de478edddf4ec3825c93af118d5d27e7148696b", "");
    }
}
