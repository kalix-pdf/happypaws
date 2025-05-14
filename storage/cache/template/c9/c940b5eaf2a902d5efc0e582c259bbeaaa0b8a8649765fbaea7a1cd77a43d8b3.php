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

/* __string_template__2416cb5d9d5e5faa48248f23f1e2ecf4cda77911f84638e3a5560bb8bc2d697f */
class __TwigTemplate_5a63632c05d86ac78f6e4b7b5700f2ff7484f63266c3a34546f0f463962d2917 extends Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 28
        echo ($context["text_option"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 32);
            echo "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["option_description"] ?? null), "name", [], "any", false, false, false, 33);
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 35
            if ((($__internal_compile_0 = ($context["error_name"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null)) {
                // line 36
                echo "                <div class=\"text-danger\">";
                echo (($__internal_compile_1 = ($context["error_name"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null);
                echo "</div>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
            </div>
            
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 42
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 44
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 49
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 53
        echo ($context["entry_option_value"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 54
        echo ($context["entry_image"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 61
        $context["option_value_row"] = 0;
        // line 62
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 63
            echo "              <tr id=\"option-value-row";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 64
            echo ($context["option_value_row"] ?? null);
            echo "][option_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 64);
            echo "\" />
                  ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 66
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 66);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 66);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 66);
                echo "\" /></span>
                    <input type=\"text\" name=\"option_value[";
                // line 67
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 67);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\" />
                  </div>
                  ";
                // line 69
                if ((($__internal_compile_2 = (($__internal_compile_3 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) {
                    // line 70
                    echo "                  <div class=\"text-danger\">";
                    echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 72
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 73
            echo ($context["option_value_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 73);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                  <input type=\"hidden\" name=\"option_value[";
            // line 74
            echo ($context["option_value_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 74);
            echo "\" id=\"input-image";
            echo ($context["option_value_row"] ?? null);
            echo "\" /></td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 75
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 76
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 78
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 79
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 85
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row = ";
        // line 105
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 111
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 112);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 112);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 112);
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_value"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\thtml += '  </td>';
    html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 116
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 117
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 118
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script></div>
";
        // line 126
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__2416cb5d9d5e5faa48248f23f1e2ecf4cda77911f84638e3a5560bb8bc2d697f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 126,  365 => 118,  361 => 117,  355 => 116,  352 => 115,  335 => 112,  332 => 111,  328 => 110,  320 => 105,  297 => 85,  290 => 80,  284 => 79,  282 => 78,  275 => 76,  269 => 75,  261 => 74,  253 => 73,  245 => 72,  239 => 70,  237 => 69,  226 => 67,  217 => 66,  213 => 65,  207 => 64,  202 => 63,  197 => 62,  195 => 61,  186 => 55,  182 => 54,  178 => 53,  171 => 49,  161 => 44,  156 => 42,  145 => 38,  139 => 36,  137 => 35,  128 => 33,  119 => 32,  115 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2416cb5d9d5e5faa48248f23f1e2ecf4cda77911f84638e3a5560bb8bc2d697f", "");
    }
}
