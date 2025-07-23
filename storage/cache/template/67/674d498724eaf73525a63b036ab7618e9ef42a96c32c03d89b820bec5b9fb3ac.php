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
class __TwigTemplate_1a749b38d047d52922750aded206d1c64491d0d6a141569f3cc5016ecdb73ba5 extends Template
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

      <nav class=\"mb-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a class=\"text-decoration-none text-black\" href=\"http://localhost/hp/index.php?route=common/home\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\">
            <a class=\"text-decoration-none text-black\" href=\"http://localhost/hp/index.php?route=account/account\">Account</a>
          </li>
          <li class=\"breadcrumb-item active text-black\" aria-current=\"page\">
            Be a MeowChant
          </li>
        </ol>
      </nav>

      <form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <h1>Be a MeowChant</h1>
        ";
        // line 44
        if (($context["customer_id"] ?? null)) {
            echo "<p class=\"mb-4\">Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>";
        }
        // line 45
        echo "
        <div class=\"form-group required\">
          <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
          <div class=\"col-sm-12\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
              <input type=\"text\" name=\"shoppartner\" value=\"";
        // line 51
        echo ($context["shoppartner"] ?? null);
        echo "\" id=\"input-shoppartner\" class=\"form-control\" />
            </div>
            ";
        // line 53
        if (($context["error_shoppartner"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_shoppartner"] ?? null);
            echo "</div>";
        }
        // line 54
        echo "          </div>
        </div>

        <div class=\"form-group required\">
          <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
          <div class=\"col-sm-12\">
            <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
        // line 60
        echo ($context["description"] ?? null);
        echo "</textarea>
            ";
        // line 61
        if (($context["error_description"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 62
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
        // line 76
        if (($context["error_dtifile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_dtifile"] ?? null);
            echo "</div>";
        }
        // line 77
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"birfile\">BIR 2303/TIN:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"birfile\" id=\"birfile\">
              <label for=\"birfile\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 85
        if (($context["error_birfile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_birfile"] ?? null);
            echo "</div>";
        }
        // line 86
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"mayorfile\">Mayor's Permit:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"mayorfile\" id=\"mayorfile\">
              <label for=\"mayorfile\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 94
        if (($context["error_mayorfile"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_mayorfile"] ?? null);
            echo "</div>";
        }
        // line 95
        echo "          </div>
          <div class=\"form-group required\">
            <label class=\"control-label\" for=\"validid\">Government Valid ID:</label>
            <div class=\"custom-file-upload\">
              <input type=\"file\" name=\"validid\" id=\"validid\">
              <label for=\"validid\" class=\"file-upload-button\">Choose File</label>
              <span class=\"file-name\">No file chosen</span>
            </div>
            ";
        // line 103
        if (($context["error_validid"] ?? null)) {
            echo "<div class=\"text-danger w-100 mt-2\">";
            echo ($context["error_validid"] ?? null);
            echo "</div>";
        }
        // line 104
        echo "          </div>
        </div>

        <div class=\"text-center\" style=\"margin-top:40px; margin-bottom: 5px;\">
          <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
        </div>

      </form>
      ";
        // line 112
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
        // line 148
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
              } else if(data['error']){
                \$(thisshop).parent().find('.input-group-addon').html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 150
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
        // line 163
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
        return array (  309 => 163,  293 => 150,  288 => 148,  249 => 112,  239 => 104,  233 => 103,  223 => 95,  217 => 94,  207 => 86,  201 => 85,  191 => 77,  185 => 76,  169 => 62,  163 => 61,  159 => 60,  151 => 54,  145 => 53,  140 => 51,  132 => 45,  126 => 44,  121 => 42,  102 => 26,  98 => 25,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  77 => 17,  73 => 15,  62 => 13,  58 => 12,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
