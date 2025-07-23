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
class __TwigTemplate_95b1e44e9a8e1cc8d3690d757fd8af886ba776c71d72ed962202346d98055af6 extends Template
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
        echo "  ";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 15
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 18
        echo "
    <div class=\"row\">
      <div class=\"";
        // line 20
        echo ($context["class"] ?? null);
        echo "\">
        ";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "

        <nav class=\"mb-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
              <a class=\"text-decoration-none text-black\" href=\"index.php?route=common/home\"><i class=\"fa fa-home\"></i></a>
            </li>
            <li class=\"breadcrumb-item\">
              <a class=\"text-decoration-none text-black\" href=\"index.php?route=account/account\">Account</a>
            </li>
            <li class=\"breadcrumb-item active text-black\" aria-current=\"page\">
              Be a MeowChant
            </li>
          </ol>
        </nav>

        <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <h1>Be a MeowChant</h1>
          ";
        // line 39
        if (($context["customer_id"] ?? null)) {
            // line 40
            echo "            <p class=\"mb-4\">Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>
          ";
        }
        // line 42
        echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-shoppartner\">Shop name</label>
            <div class=\"col-sm-12\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" name=\"shoppartner\" value=\"";
        // line 48
        echo ($context["shoppartner"] ?? null);
        echo "\" id=\"input-shoppartner\" class=\"form-control\" />
              </div>
              ";
        // line 50
        if (($context["error_shoppartner"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_shoppartner"] ?? null);
            echo "</div>";
        }
        // line 51
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-12\" for=\"input-entry\">Store Description</label>
            <div class=\"col-sm-12\">
              <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">";
        // line 57
        echo ($context["description"] ?? null);
        echo "</textarea>
              ";
        // line 58
        if (($context["error_description"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 59
        echo "            </div>
          </div>

          <h3 class=\"mt-5 mb-4\">Upload your Documents:</h3>

          <div class=\"document-upload-section\">
            ";
        // line 65
        $context["uploads"] = [0 => ["id" => "dtifile", "label" => "DTI/SEC Certificate", "error" =>         // line 66
($context["error_dtifile"] ?? null)], 1 => ["id" => "birfile", "label" => "BIR 2303/TIN", "error" =>         // line 67
($context["error_birfile"] ?? null)], 2 => ["id" => "mayorfile", "label" => "Mayor's Permit", "error" =>         // line 68
($context["error_mayorfile"] ?? null)], 3 => ["id" => "validid", "label" => "Government Valid ID", "error" =>         // line 69
($context["error_validid"] ?? null)]];
        // line 71
        echo "
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uploads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 73
            echo "            <div class=\"form-group required\">
              <label class=\"control-label\" for=\"";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 74);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "label", [], "any", false, false, false, 74);
            echo ":</label>
              <div class=\"custom-file-upload\">
                <input type=\"file\" name=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 76);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 76);
            echo "\">
                <label for=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["doc"], "id", [], "any", false, false, false, 77);
            echo "\" class=\"file-upload-button\">Choose File</label>
                <span class=\"file-name\">No file chosen</span>
              </div>
              ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 80)) {
                echo "<div class=\"text-danger w-100 mt-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["doc"], "error", [], "any", false, false, false, 80);
                echo "</div>";
            }
            // line 81
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "          </div>

          <div class=\"text-center mt-5 mb-3\">
            <input type=\"submit\" value=\"Continue\" class=\"btn btn-primary btn-lg\" style=\"background-color: #162F65; border-color: #162F65; border-radius: 25px; padding: 10px 40px;\"/>
          </div>
        </form>

        ";
        // line 90
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
        // line 121
        echo ($context["text_avaiable"] ?? null);
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                    } else {
                        \$addon.html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
        // line 123
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
        // line 136
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
        return array (  274 => 136,  258 => 123,  253 => 121,  219 => 90,  210 => 83,  203 => 81,  197 => 80,  191 => 77,  185 => 76,  178 => 74,  175 => 73,  171 => 72,  168 => 71,  166 => 69,  165 => 68,  164 => 67,  163 => 66,  162 => 65,  154 => 59,  148 => 58,  144 => 57,  136 => 51,  130 => 50,  125 => 48,  117 => 42,  111 => 40,  109 => 39,  104 => 37,  85 => 21,  81 => 20,  77 => 18,  71 => 16,  68 => 15,  62 => 13,  60 => 12,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
