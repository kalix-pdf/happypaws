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

/* account/customerpartner/dashboards/recent.twig */
class __TwigTemplate_ee8a535978c076ba3fe39040e35a36606905a8f526a70217cbdca8901fecfd1a extends Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table table-responsive table-bordered\">
      <thead>
        <tr>
          <td class=\"text-center\">";
        // line 9
        echo ($context["column_order_id"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 10
        echo ($context["column_customer"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 11
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 12
        echo ($context["column_date_added"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 13
        echo ($context["column_total"] ?? null);
        echo "</td>
          <td class=\"text-center\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if (($context["orders"] ?? null)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                echo "        <tr>
          <td class=\"text-center\">";
                // line 21
                echo (($__internal_compile_0 = $context["order"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["order_id"] ?? null) : null);
                echo "</td>
          <td class=\"text-center\">";
                // line 22
                echo (($__internal_compile_1 = $context["order"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["customer"] ?? null) : null);
                echo "</td>
          <td class=\"text-center\">";
                // line 23
                echo (($__internal_compile_2 = $context["order"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null);
                echo "</td>
          <td class=\"text-center\">";
                // line 24
                echo (($__internal_compile_3 = $context["order"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date_added"] ?? null) : null);
                echo "</td>
          <td class=\"text-center\">";
                // line 25
                echo (($__internal_compile_4 = $context["order"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["total"] ?? null) : null);
                echo "</td>
          <td class=\"text-center\"><a href=\"";
                // line 26
                echo (($__internal_compile_5 = $context["order"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["view"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"wk-btn btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
        ";
        }
        // line 34
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/dashboards/recent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  124 => 31,  121 => 30,  118 => 29,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  84 => 20,  79 => 19,  77 => 18,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/dashboards/recent.twig", "");
    }
}
