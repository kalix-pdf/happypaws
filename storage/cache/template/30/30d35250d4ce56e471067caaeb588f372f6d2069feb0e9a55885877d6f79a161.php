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

/* __string_template__0723eb40b7b9c36ce3db20fd2273352b7360396077709979b4d4b7aa6a11027e */
class __TwigTemplate_7489493277f50c5eb5d24010cfd6c3a40493aae7d361e33af1b13c1e10e48432 extends Template
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
        echo "<table class=\"table table-bordered table-hover\">
  <thead>
    <tr>
      <td class=\"center\">";
        // line 4
        echo ($context["text_added_date"] ?? null);
        echo "</td>
      <td class=\"center\">";
        // line 5
        echo ($context["text_orderstatus"] ?? null);
        echo "</td>
      <td class=\"center\">";
        // line 6
        echo ($context["text_comment"] ?? null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
    ";
        // line 10
        if (($context["orders"] ?? null)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 12
                echo "    <tr>
    <td class=\"text-left\" >";
                // line 13
                echo (($__internal_compile_0 = $context["value"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["date_added"] ?? null) : null);
                echo "</td>
    ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                    // line 15
                    echo "      ";
                    if (((($__internal_compile_1 = $context["order_status"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["order_status_id"] ?? null) : null) == (($__internal_compile_2 = $context["value"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order_status_id"] ?? null) : null))) {
                        // line 16
                        echo "        <td class=\"text-left\" >";
                        echo (($__internal_compile_3 = $context["order_status"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null);
                        echo "</td>
      ";
                    }
                    // line 18
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    <td class=\"text-left\" >";
                echo (($__internal_compile_4 = $context["value"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment"] ?? null) : null);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    <tr>
      <td class=\"text-center\" colspan=\"10\">";
            // line 24
            echo ($context["text_no_results"] ?? null);
            echo "</td>
    </tr>
    ";
        }
        // line 27
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0723eb40b7b9c36ce3db20fd2273352b7360396077709979b4d4b7aa6a11027e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  106 => 24,  103 => 23,  100 => 22,  90 => 19,  84 => 18,  78 => 16,  75 => 15,  71 => 14,  67 => 13,  64 => 12,  59 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0723eb40b7b9c36ce3db20fd2273352b7360396077709979b4d4b7aa6a11027e", "");
    }
}
