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

/* __string_template__0f681210f744a2ca93fd9e7f370d15b1c788eb164da5b98824a65755553c998e */
class __TwigTemplate_ae359b3f3296d11b18a69ab3d4293e10fdc9108aab46130b90086c93344a754e extends Template
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
        echo "
<div id=\"account-order\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>
  </nav>
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 22
        if (($context["orders"] ?? null)) {
            // line 23
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 27
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 28
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 29
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 30
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 31
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 32
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 38
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 39);
                echo "</td>
              <td class=\"text-left\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 40);
                echo "</td>
              <td class=\"text-right\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 42);
                echo "</td>
              <td class=\"text-right\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 43);
                echo "</td>
              <td class=\"text-left\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 44);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 45);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 52
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 53
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 56
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 58
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 59
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 61
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0f681210f744a2ca93fd9e7f370d15b1c788eb164da5b98824a65755553c998e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 64,  215 => 62,  211 => 61,  204 => 59,  201 => 58,  195 => 56,  189 => 53,  185 => 52,  179 => 48,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  141 => 38,  137 => 37,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  103 => 23,  101 => 22,  97 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  70 => 13,  66 => 12,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f681210f744a2ca93fd9e7f370d15b1c788eb164da5b98824a65755553c998e", "");
    }
}
