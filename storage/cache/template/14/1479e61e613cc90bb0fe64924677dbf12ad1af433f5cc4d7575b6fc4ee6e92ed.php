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

/* account/customerpartner/upsell.twig */
class __TwigTemplate_3a04a82b2b0c0e7393db049f0540d8d4223deeb2286e7a5e7629371be20980a8 extends Template
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
        // line 2
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 3
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 5
            echo "  <div class=\"container\">
";
        }
        // line 7
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "    <li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 15
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "
        <div class=\"pull-right btn-group\">
          ";
        // line 26
        if (($context["wkIsMember"] ?? null)) {
            // line 27
            echo "          <a data-toggle=\"tooltip\" title=\"";
            echo ($context["button_delete"] ?? null);
            echo "\" onclick=\"confirm('";
            echo ($context["text_confirm_delete"] ?? null);
            echo "') ? \$('#form-upsell').submit() : false;\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
          <a href=\"";
            // line 28
            echo ($context["add"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_insert"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          ";
        }
        // line 30
        echo "        </div>
      </h1>
      ";
        // line 32
        if (($context["wkIsMember"] ?? null)) {
            // line 33
            echo "      <form action=\"";
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-upsell\" class=\"form-horizontal\">
        <fieldset>
          <legend><i class=\"fa fa-list\"></i> ";
            // line 35
            echo ($context["heading_title"] ?? null);
            echo "</legend>
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
            // line 41
            echo ($context["entry_parent_product"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 42
            echo ($context["entry_child_product"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 43
            echo ($context["entry_countdown"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 44
            echo ($context["entry_units_available"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 45
            echo ($context["entry_units_status"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 46
            echo ($context["entry_from_date"] ?? null);
            echo "</td>
                  <td class=\"text-left\">";
            // line 47
            echo ($context["entry_to_date"] ?? null);
            echo "</td>
                  <!-- <td class=\"text-right\">";
            // line 48
            echo ($context["entry_action"] ?? null);
            echo "</td> -->
                </tr>
              </thead>
              ";
            // line 51
            if ((array_key_exists("upsells", $context) && ($context["upsells"] ?? null))) {
                // line 52
                echo "              <tbody>
                ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["upsells"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["upsell"]) {
                    // line 54
                    echo "                <tr>
                  <td class=\"text-center\">
                    ";
                    // line 56
                    if (twig_in_filter((($__internal_compile_2 = $context["upsell"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["upsell_id"] ?? null) : null), ($context["selected"] ?? null))) {
                        // line 57
                        echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_3 = $context["upsell"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["upsell_id"] ?? null) : null);
                        echo "\" checked=\"checked\" />
                    ";
                    } else {
                        // line 59
                        echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo (($__internal_compile_4 = $context["upsell"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["upsell_id"] ?? null) : null);
                        echo "\" />
                    ";
                    }
                    // line 61
                    echo "                  </td>
                  <td class=\"text-left\">";
                    // line 62
                    echo (($__internal_compile_5 = $context["upsell"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["parent_products"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 63
                    echo (($__internal_compile_6 = $context["upsell"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["child_products"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 64
                    echo (($__internal_compile_7 = $context["upsell"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["countdown_status"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 65
                    echo (($__internal_compile_8 = $context["upsell"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["quantity"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 66
                    echo (($__internal_compile_9 = $context["upsell"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["quantity_status"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 67
                    echo (($__internal_compile_10 = $context["upsell"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_start"] ?? null) : null);
                    echo "</td>
                  <td class=\"text-left\">";
                    // line 68
                    echo (($__internal_compile_11 = $context["upsell"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["date_end"] ?? null) : null);
                    echo "</td>
                  <!-- <td class=\"text-right\"><a href=\"";
                    // line 69
                    echo ($context["delete"] ?? null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td> -->
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upsell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "              </tbody>
              ";
            } else {
                // line 74
                echo "              <tfoot>
                <tr>
                  <td colspan=\"10\" class=\"text-center alert-danger\">";
                // line 76
                echo ($context["text_no_records"] ?? null);
                echo "</td>
                </tr>
              </tfoot>
              ";
            }
            // line 80
            echo "
            </table>
          </div>
        </fieldset>
      </form>
      ";
        } else {
            // line 86
            echo "        <div class=\"text-danger\">";
            echo ($context["error_membership_access"] ?? null);
            echo "</div>
      ";
        }
        // line 88
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 89
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 91
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/upsell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 91,  292 => 89,  287 => 88,  281 => 86,  273 => 80,  266 => 76,  262 => 74,  258 => 72,  247 => 69,  243 => 68,  239 => 67,  235 => 66,  231 => 65,  227 => 64,  223 => 63,  219 => 62,  216 => 61,  210 => 59,  204 => 57,  202 => 56,  198 => 54,  194 => 53,  191 => 52,  189 => 51,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  146 => 35,  140 => 33,  138 => 32,  134 => 30,  127 => 28,  120 => 27,  118 => 26,  113 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  86 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  59 => 9,  55 => 8,  52 => 7,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/upsell.twig", "");
    }
}
