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

/* account/customerpartner/total_sales.twig */
class __TwigTemplate_0d8271d3ffa54a4b37d335ff5a0293d7083b7c3dbeb8100ad0db2d30b4bd9891 extends Template
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
        echo ($context["separate_column_left"] ?? null);
        echo "

";
        // line 3
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 4
            echo "<div class=\"container-fluid\" id=\"content\">

  ";
        } else {
            // line 7
            echo "  <div class=\"container\">
    ";
        }
        // line 9
        echo "

    <ul class=\"breadcrumb\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

    <div class=\"row\">";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
      ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "      ";
        } else {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "      ";
        }
        // line 27
        echo "
      <div id=\"content\" class=\"";
        // line 28
        echo ($context["class"] ?? null);
        echo "\">
        ";
        // line 29
        echo ($context["content_top"] ?? null);
        echo "
        <h1 style=\"margin-top:10px;\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "
            
        </h1>
        <fieldset>
          <legend>            
          </legend>
          ";
        // line 36
        if (($context["isMember"] ?? null)) {
            // line 37
            echo "
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                
                ";
            // line 41
            if (($context["sales"] ?? null)) {
                echo "                  
                <tbody>
                  <tr>
                    <td style=\"color:#000; font-weight:bold;\" class=\"text-center\"><a href=\"";
                // line 44
                echo ($context["sale"] ?? null);
                echo "\">";
                echo ($context["entry_total"] ?? null);
                echo "</a></td>
                    <td style=\"color:#69b572; font-weight:bold;\" class=\"text-center\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, ($context["sales"] ?? null), "total", [], "any", false, false, false, 45);
                echo "</td>
                   </tr>
                   <tr>
                    <td style=\"color:#000; font-weight:bold;\" class=\"text-center\"><a href=\"";
                // line 48
                echo ($context["sale"] ?? null);
                echo "\">";
                echo ($context["entry_seller"] ?? null);
                echo "</a></td>
                    <td style=\"color:#22ade2; font-weight:bold;\" class=\"text-center\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, ($context["sales"] ?? null), "seller", [], "any", false, false, false, 49);
                echo "</td>
                    </tr>
                    <tr>
                    <td style=\"color:#000; font-weight:bold;\" class=\"text-center\"><a href=\"";
                // line 52
                echo ($context["sale"] ?? null);
                echo "\">";
                echo ($context["entry_admin"] ?? null);
                echo "</a></td>
                    <td style=\"color:#f37587;\" class=\"text-center\">";
                // line 53
                echo ("- " . twig_get_attribute($this->env, $this->source, ($context["sales"] ?? null), "admin", [], "any", false, false, false, 53));
                echo "</td>
                    </tr>
                    <tr>
                    <td style=\"color:#000; font-weight:bold;\" class=\"text-center\"><a href=\"";
                // line 56
                echo ($context["paid_link"] ?? null);
                echo "\">";
                echo ($context["entry_paid"] ?? null);
                echo "</a></td>
                    <td style=\"color:#9C27B0;\" class=\"text-center\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, ($context["sales"] ?? null), "paid", [], "any", false, false, false, 57);
                echo "</td>
                    </tr>

                    <tr>
                    <td style=\"color:#000; font-weight:bold;\" class=\"text-center\">";
                // line 61
                echo ($context["entry_unpaid"] ?? null);
                echo "</td>
                    <td style=\"color:#FF9800;font-weight:bold;\" class=\"text-center\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, ($context["sales"] ?? null), "unpaid", [], "any", false, false, false, 62);
                echo "</td>
                    </tr>
                    
                  </tr>  
                </tbody>  
                ";
            } else {
                // line 67
                echo "               
                <tfoot>
                  <tr>
                    <td class=\"text-center\" colspan=\"2\">";
                // line 70
                echo ($context["text_no_records"] ?? null);
                echo "</td>
                  </tr>
                </tfoot>
                ";
            }
            // line 73
            echo "                
              </table>
            </div>
          
          ";
        } else {
            // line 78
            echo "          <div class=\"text-danger\">
            ";
            // line 79
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
          </div>
          ";
        }
        // line 82
        echo "        </fieldset>
        ";
        // line 83
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 85
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
    ";
        // line 88
        echo ($context["footer"] ?? null);
        echo "

  <script>
    var secondtag = document.querySelectorAll('.module-title')[2];
    secondtag.setAttribute(\"style\", \"position: relative; right: 40px;\");
</script>";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/total_sales.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 88,  237 => 85,  232 => 83,  229 => 82,  223 => 79,  220 => 78,  213 => 73,  206 => 70,  201 => 67,  192 => 62,  188 => 61,  181 => 57,  175 => 56,  169 => 53,  163 => 52,  157 => 49,  151 => 48,  145 => 45,  139 => 44,  133 => 41,  127 => 37,  125 => 36,  116 => 30,  112 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  77 => 17,  66 => 14,  63 => 13,  59 => 12,  54 => 9,  50 => 7,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/total_sales.twig", "");
    }
}
