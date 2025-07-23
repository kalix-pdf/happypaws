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
class __TwigTemplate_3c5cbc3f9a1eeab7376ed73c30105516a9fe2937e3eae00edf81e1d7f724ae6f extends Template
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

<body style=\"display: flex; flex-direction: column; min-height: 100vh;\">

";
        // line 6
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 7
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 9
            echo "  <div class=\"container\">
";
        }
        // line 11
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>

  ";
        // line 17
        if (($context["success"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 20
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 23
        echo "
  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 25
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 26
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
            echo "<p class=\"mb-4\">Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>";
        }
        // line 32
        echo "
        <div class=\"form-group required\">
          <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
          <div class=\"col-sm-12\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
              <input type=\"text\" name=\"shoppartner\" value=\"";
        // line 38
        echo ($context["shoppartner"] ?? null);
        echo "\" id=\"input-shoppartner\" class=\"form-control\" />
            </div>
            ";
        // line 40
        if (($context["error_shoppartner"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_shoppartner"] ?? null);
            echo "</div>";
        }
        // line 41
        echo "          </div>
        </div>

        <div class=\"form-group required\">
          <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
          <div class=\"col-sm-12\">
            <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
        // line 47
        echo ($context["description"] ?? null);
        echo "</textarea>
            ";
        // line 48
        if (($context["error_description"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 49
        echo "          </div>
        </div>

        <h3 class=\"mt-5 mb-4\">Upload your Documents:</h3>

        <!-- UPDATED DOCUMENT UPLOAD SECTION -->
        <div class=\"document-upload-section\">
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"dtifile\">DTI/SEC Certificate:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"dtifile\" id=\"dtifile\">
              <label for=\"dtifile\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 63
        if (($context["error_dtifile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_dtifile"] ?? null);
            echo "</div>";
        }
        // line 64
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"birfile\">BIR 2303/TIN:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"birfile\" id=\"birfile\">
              <label for=\"birfile\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 72
        if (($context["error_birfile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_birfile"] ?? null);
            echo "</div>";
        }
        // line 73
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"mayorfile\">Mayor's Permit:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"mayorfile\" id=\"mayorfile\">
              <label for=\"mayorfile\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 81
        if (($context["error_mayorfile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_mayorfile"] ?? null);
            echo "</div>";
        }
        // line 82
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"validid\">Government Valid ID:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"validid\" id=\"validid\">
              <label for=\"validid\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 90
        if (($context["error_validid"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_validid"] ?? null);
            echo "</div>";
        }
        // line 91
        echo "          </div>
        </div>

        <div class=\"text-center\" style=\"margin-top:40px; margin-bottom: 5px;\">
          <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
        </div>

      </form>
      ";
        // line 99
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
  </div>
</div>

<script>
\$(document).ready(function() {
    // --- SCRIPT FOR CUSTOM FILE UPLOAD (Added) ---
    \$('.custom-file-upload input[type=\"file\"]').on('change', function() {
        const fileName = \$(this).val().split('\\\\').pop();
        const \$fileNameSpan = \$(this).closest('.custom-file-upload').find('.file-name');

        if (fileName) {
            \$fileNameSpan.text(fileName);
        } else {
            \$fileNameSpan.text('No file chosen');
        }
    });

    // Script for shoppartner check
    \$( \"#input-shoppartner\" ).on('change', function() {
      var thisshop = this;
      var shop = \$(thisshop).val();

      if(shop){
        \$(thisshop).parent().find('.input-group-addon').html('<i class=\"fa fa-spinner fa-spin\"></i>');

        \$.ajax({
            type: 'POST',
            data: ({shop: shop}),
            dataType: 'json',
            url: 'index.php?route=customerpartner/sell/wkmpregistation',
            success: function(data){
              \$(thisshop).parent().find('.fa-spinner').parent().html('<i class=\"fa fa-search\"></i>');

              if(data['success']){
                \$(thisshop).parent().find('.input-group-addon').html('<span data-toggle=\"tooltip\" class=\"text-success\" title=\"";
        // line 135
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
              } else if(data['error']){
                \$(thisshop).parent().find('.input-group-addon').html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 137
        echo ($context["text_no_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-down\"></i></span>');
              }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                \$(thisshop).parent().find('.fa-spinner').parent().html('<i class=\"fa fa-search\"></i>');
            }
        });
      }
    });
});
</script>

";
        // line 150
        echo ($context["footer"] ?? null);
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
        return array (  296 => 150,  280 => 137,  275 => 135,  236 => 99,  226 => 91,  220 => 90,  210 => 82,  204 => 81,  194 => 73,  188 => 72,  178 => 64,  172 => 63,  156 => 49,  150 => 48,  146 => 47,  138 => 41,  132 => 40,  127 => 38,  119 => 32,  113 => 31,  108 => 29,  102 => 26,  98 => 25,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  77 => 17,  73 => 15,  62 => 13,  58 => 12,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
