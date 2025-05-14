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

/* __string_template__5a0a1057b5ebe5ce4d88e01517aa60c15f1a10c6b34d57d9bb3323bf79950040 */
class __TwigTemplate_a55cb1c5327f53a829e645d6352ab01ac55769fd1de2f4bedc5366bcb69d6cb4 extends Template
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
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"></span>
                  <input type=\"text\" name=\"option_description[name]\" value=\"";
            // line 33
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
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"></span>
                    <input type=\"text\" name=\"option_value[";
                // line 67
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][name]\" value=\"";
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
                 <td class=\"text-left\">
                  <input type=\"file\" name=\"option_value[";
            // line 74
            echo ($context["option_value_row"] ?? null);
            echo "][image_file]\" class=\"image-upload\" data-preview=\"preview-";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                  <img id=\"preview-";
            // line 75
            echo ($context["option_value_row"] ?? null);
            echo "\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 75);
            echo "\" alt=\"Image Preview\" style=\"max-height: 100px; display:block; margin-top:10px;\" />
                  <input type=\"hidden\" name=\"option_value[";
            // line 76
            echo ($context["option_value_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 76);
            echo "\" />
                </td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 78
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 78);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 79
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 81
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 82
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 88
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
        // line 108
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';

\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][name]\" value=\"\" placeholder=\"";
        // line 115
        echo ($context["entry_option_value"] ?? null);
        echo "\" class=\"form-control\" />';
    html += '    </div>';

\thtml += '  </td>';
    html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 119
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 120
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 121
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script></div>


<script>
  document.querySelectorAll('.image-upload').forEach(input => {
    input.addEventListener('change', function(event) {
      const previewId = this.getAttribute('data-preview');
      const file = this.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById(previewId).src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  });

</script>

";
        // line 148
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__5a0a1057b5ebe5ce4d88e01517aa60c15f1a10c6b34d57d9bb3323bf79950040";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 148,  335 => 121,  331 => 120,  325 => 119,  318 => 115,  308 => 108,  285 => 88,  278 => 83,  272 => 82,  270 => 81,  263 => 79,  257 => 78,  250 => 76,  244 => 75,  238 => 74,  229 => 72,  223 => 70,  221 => 69,  212 => 67,  209 => 66,  205 => 65,  199 => 64,  194 => 63,  189 => 62,  187 => 61,  178 => 55,  174 => 54,  170 => 53,  163 => 49,  153 => 44,  148 => 42,  137 => 38,  131 => 36,  129 => 35,  122 => 33,  119 => 32,  115 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5a0a1057b5ebe5ce4d88e01517aa60c15f1a10c6b34d57d9bb3323bf79950040", "");
    }
}
