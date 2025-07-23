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
class __TwigTemplate_0031cb13e48b0e94b5f2bde1b29b4768381f436979a8942a450733ee2d961359 extends Template
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
<nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ol>
  </nav>
";
        // line 14
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 15
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 17
            echo "  <div class=\"container d-flex gap-5\" id=\"content\">
";
        }
        // line 19
        echo "
  ";
        // line 20
        echo ($context["column_right"] ?? null);
        echo "
    ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 27
        echo "
    <div class=\"row col-sm-6 \">
      <div class=\"d-flex justify-content-center\">

        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <h1>Be a MeowChant</h1>
          ";
        // line 33
        if (($context["customer_id"] ?? null)) {
            // line 34
            echo "            <p class=\"mb-4\">Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>
          ";
        }
        // line 36
        echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
            <div class=\"col-sm-12\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" name=\"shoppartner\" value=\"";
        // line 42
        echo ($context["shoppartner"] ?? null);
        echo "\" id=\"input-shoppartner\" class=\"form-control\" />
              </div>
              ";
        // line 44
        if (($context["error_shoppartner"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_shoppartner"] ?? null);
            echo "</div>";
        }
        // line 45
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
            <div class=\"col-sm-12\">
              <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
        // line 51
        echo ($context["description"] ?? null);
        echo "</textarea>
              ";
        // line 52
        if (($context["error_description"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 53
        echo "            </div>
          </div>

          <h3 class=\"mt-5 mb-4\">Upload your Documents:</h3>

          <div class=\"document-upload-section\">
            ";
        // line 59
        $context["uploads"] = [0 => ["id" => "dtifile", "label" => "DTI/SEC Certificate", "error" =>         // line 60
($context["error_dtifile"] ?? null)], 1 => ["id" => "birfile", "label" => "BIR 2303/TIN", "error" =>         // line 61
($context["error_birfile"] ?? null)], 2 => ["id" => "mayorfile", "label" => "Mayor's Permit", "error" =>         // line 62
($context["error_mayorfile"] ?? null)], 3 => ["id" => "validid", "label" => "Government Valid ID", "error" =>         // line 63
($context["error_validid"] ?? null)]];
        // line 65
        echo "
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uploads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 67
            echo "            <div class=\"form-group required\">
              <label class=\"control-label\" for=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 68);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "label", [], "any", false, false, false, 68);
            echo ":</label>
              <div class=\"custom-file-upload\">
                <input type=\"file\" name=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 70);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 70);
            echo "\">
                <label for=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 71);
            echo "\" class=\"file-upload-button\">Choose File</label>
                <span class=\"file-name\">No file chosen</span>
              </div>
              ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 74)) {
                echo "<div class=\"text-danger w-100 mt-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 74);
                echo "</div>";
            }
            // line 75
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "          </div>

          <div class=\"text-center mt-5 mb-3\">
            <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
          </div>
        </form>

        ";
        // line 84
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
        // line 115
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                    } else {
                        \$addon.html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 117
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
        // line 130
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
        return array (  278 => 130,  262 => 117,  257 => 115,  223 => 84,  214 => 77,  207 => 75,  201 => 74,  195 => 71,  189 => 70,  182 => 68,  179 => 67,  175 => 66,  172 => 65,  170 => 63,  169 => 62,  168 => 61,  167 => 60,  166 => 59,  158 => 53,  152 => 52,  148 => 51,  140 => 45,  134 => 44,  129 => 42,  121 => 36,  115 => 34,  113 => 33,  108 => 31,  102 => 27,  96 => 25,  93 => 24,  87 => 22,  85 => 21,  81 => 20,  78 => 19,  74 => 17,  70 => 15,  68 => 14,  64 => 12,  53 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
