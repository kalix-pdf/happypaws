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
class __TwigTemplate_b81ffac60de8ef0fd7a7226a8a86ec86ef87236d32305dc64212841a6284b6c8 extends Template
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
            echo "  <div class=\"container d-flex\" id=\"content\">
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
    <div class=\"row col-sm-8\">
      <div class=\"d-flex justify-content-center\">
        ";
        // line 30
        if (($context["isMember"] ?? null)) {
            // line 31
            echo "          ";
            if ( !($context["in_process"] ?? null)) {
                // line 32
                echo "        <form action=\"";
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <h1>Be a MeowChant</h1>
          ";
                // line 34
                if (($context["customer_id"] ?? null)) {
                    // line 35
                    echo "            <p class=\"mb-4\">Customer ID: ";
                    echo ($context["customer_id"] ?? null);
                    echo "</p>
          ";
                }
                // line 37
                echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
            <div class=\"col-sm-12\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" name=\"shoppartner\" value=\"";
                // line 43
                echo ($context["shoppartner"] ?? null);
                echo "\" id=\"input-shoppartner\" class=\"form-control\" />
              </div>
              ";
                // line 45
                if (($context["error_shoppartner"] ?? null)) {
                    echo "<div class=\"text-danger\">";
                    echo ($context["error_shoppartner"] ?? null);
                    echo "</div>";
                }
                // line 46
                echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
            <div class=\"col-sm-12\">
              <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
                // line 52
                echo ($context["description"] ?? null);
                echo "</textarea>
              ";
                // line 53
                if (($context["error_description"] ?? null)) {
                    echo "<div class=\"text-danger\">";
                    echo ($context["error_description"] ?? null);
                    echo "</div>";
                }
                // line 54
                echo "            </div>
          </div>

          <h3 class=\"mt-5 mb-4\">Upload your Documents:</h3>

          <div class=\"document-upload-section\">
            ";
                // line 60
                $context["uploads"] = [0 => ["id" => "dtifile", "label" => "DTI/SEC Certificate", "error" =>                 // line 61
($context["error_dtifile"] ?? null)], 1 => ["id" => "birfile", "label" => "BIR 2303/TIN", "error" =>                 // line 62
($context["error_birfile"] ?? null)], 2 => ["id" => "mayorfile", "label" => "Mayor's Permit", "error" =>                 // line 63
($context["error_mayorfile"] ?? null)], 3 => ["id" => "validid", "label" => "Government Valid ID", "error" =>                 // line 64
($context["error_validid"] ?? null)]];
                // line 66
                echo "
            ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["uploads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 68
                    echo "            <div class=\"form-group required\">
              <label class=\"control-label\" for=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["doc"], "label", [], "any", false, false, false, 69);
                    echo ":</label>
              <div class=\"custom-file-upload\">
                <input type=\"file\" name=\"";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 71);
                    echo "\" id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 71);
                    echo "\">
                <label for=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 72);
                    echo "\" class=\"file-upload-button\">Choose File</label>
                <span class=\"file-name\">No file chosen</span>
              </div>
              ";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 75)) {
                        echo "<div class=\"text-danger w-100 mt-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 75);
                        echo "</div>";
                    }
                    // line 76
                    echo "            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "          </div>

          <div class=\"text-center mt-5 mb-3\">
            <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
          </div>
        </form>
        ";
            } else {
                // line 85
                echo "          <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["text_delay"] ?? null);
                echo "</div>
        ";
            }
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "        <div class=\"text-danger\">
          ";
            // line 89
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
        </div>
      ";
        }
        // line 92
        echo "      </div>
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
        // line 122
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                    } else {
                        \$addon.html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 124
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
        // line 137
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
        return array (  299 => 137,  283 => 124,  278 => 122,  246 => 92,  240 => 89,  237 => 88,  234 => 87,  228 => 85,  219 => 78,  212 => 76,  206 => 75,  200 => 72,  194 => 71,  187 => 69,  184 => 68,  180 => 67,  177 => 66,  175 => 64,  174 => 63,  173 => 62,  172 => 61,  171 => 60,  163 => 54,  157 => 53,  153 => 52,  145 => 46,  139 => 45,  134 => 43,  126 => 37,  120 => 35,  118 => 34,  112 => 32,  109 => 31,  107 => 30,  102 => 27,  96 => 25,  93 => 24,  87 => 22,  85 => 21,  81 => 20,  78 => 19,  74 => 17,  70 => 15,  68 => 14,  64 => 12,  53 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
