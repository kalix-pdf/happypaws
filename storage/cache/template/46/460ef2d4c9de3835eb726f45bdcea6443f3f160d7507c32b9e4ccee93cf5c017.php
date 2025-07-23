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

/* account/customerpartner/become_partner.twig */
class __TwigTemplate_72978bf70b1d9e2d46e757af56bd25dfaaf2ffe9dc7d5494ea8f3024cf0f7776 extends Template
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
<link href=\"catalog/view/theme/hp/stylesheet/become_partner.css\" rel=\"stylesheet\" type=\"text/css\" />

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">

";
        // line 6
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 7
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 9
            echo "  <div class=\"container\" id=\"content\">
";
        }
        // line 11
        echo "
    <ul class=\"breadcrumb\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>

    ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 24
        echo "
    <div class=\"row\">
      <div class=\"";
        // line 26
        echo ($context["class"] ?? null);
        echo "\">
        ";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "

        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <h1>Be a MeowChant</h1>
          ";
        // line 31
        if (($context["customer_id"] ?? null)) {
            // line 32
            echo "            <p class=\"mb-4\">Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>
          ";
        }
        // line 34
        echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
            <div class=\"col-sm-12\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" name=\"shoppartner\" value=\"";
        // line 40
        echo ($context["shoppartner"] ?? null);
        echo "\" id=\"input-shoppartner\" class=\"form-control\" />
              </div>
              ";
        // line 42
        if (($context["error_shoppartner"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_shoppartner"] ?? null);
            echo "</div>";
        }
        // line 43
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
            <div class=\"col-sm-12\">
              <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
        // line 49
        echo ($context["description"] ?? null);
        echo "</textarea>
              ";
        // line 50
        if (($context["error_description"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 51
        echo "            </div>
          </div>

          <h3 class=\"mt-5 mb-4\">Upload your Documents:</h3>

          <div class=\"document-upload-section\">
            ";
        // line 57
        $context["uploads"] = [0 => ["id" => "dtifile", "label" => "DTI/SEC Certificate", "error" =>         // line 58
($context["error_dtifile"] ?? null)], 1 => ["id" => "birfile", "label" => "BIR 2303/TIN", "error" =>         // line 59
($context["error_birfile"] ?? null)], 2 => ["id" => "mayorfile", "label" => "Mayor's Permit", "error" =>         // line 60
($context["error_mayorfile"] ?? null)], 3 => ["id" => "validid", "label" => "Government Valid ID", "error" =>         // line 61
($context["error_validid"] ?? null)]];
        // line 63
        echo "
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uploads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 65
            echo "            <div class=\"form-group required\">
              <label class=\"control-label\" for=\"";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 66);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "label", [], "any", false, false, false, 66);
            echo ":</label>
              <div class=\"custom-file-upload\">
                <input type=\"file\" name=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 68);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 68);
            echo "\">
                <label for=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 69);
            echo "\" class=\"file-upload-button\">Choose File</label>
                <span class=\"file-name\">No file chosen</span>
              </div>
              ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 72)) {
                echo "<div class=\"text-danger w-100 mt-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 72);
                echo "</div>";
            }
            // line 73
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "          </div>

          <div class=\"text-center mt-5 mb-3\">
            <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
          </div>
        </form>

        ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
    </div>
  </div>
</div>

<script>
\$(document).ready(function() {
    // Display selected filename
    \$('.custom-file-upload input[type=\"file\"]').on('change', function() {
        const fileName = \$(this).val().split('\\\\').pop();
        const \$fileNameSpan = \$(this).siblings('.file-name');
        \$fileNameSpan.text(fileName || 'No file chosen');
    });

    // Shop name availability check
    \$('#input-shoppartner').on('change', function() {
        var \$this = \$(this);
        var shop = \$this.val();

        if (shop) {
            var \$addon = \$this.closest('.input-group').find('.input-group-addon');
            \$addon.html('<i class=\"fa fa-spinner fa-spin\"></i>');

            \$.ajax({
                type: 'POST',
                url: 'index.php?route=customerpartner/sell/wkmpregistation',
                data: { shop: shop },
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        \$addon.html('<span data-toggle=\"tooltip\" class=\"text-success\" title=\"";
        // line 113
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                    } else {
                        \$addon.html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 115
        echo ($context["text_no_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-down\"></i></span>');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    \$addon.html('<i class=\"fa fa-search\"></i>');
                }
            });
        }
    });
});
</script>

";
        // line 128
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "account/customerpartner/become_partner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 128,  262 => 115,  257 => 113,  223 => 82,  214 => 75,  207 => 73,  201 => 72,  195 => 69,  189 => 68,  182 => 66,  179 => 65,  175 => 64,  172 => 63,  170 => 61,  169 => 60,  168 => 59,  167 => 58,  166 => 57,  158 => 51,  152 => 50,  148 => 49,  140 => 43,  134 => 42,  129 => 40,  121 => 34,  115 => 32,  113 => 31,  108 => 29,  103 => 27,  99 => 26,  95 => 24,  89 => 22,  86 => 21,  80 => 19,  78 => 18,  74 => 16,  63 => 14,  59 => 13,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
