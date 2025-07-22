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
class __TwigTemplate_5cc7706a1885749a1f69eadf6798b0e3d4bb34edcb48f4be1cf5a4ba73ba3728 extends Template
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
";
        // line 3
        echo "
<style>
 .radio-card {
    cursor: pointer;
    border: 1px solid black;
    transition: 0.3s;
    border-radius: 12px;
    width: 50%;
    box-shadow: 5px 5px 8px;
  }
  .radio-card input {
    display: none;
  }
  .card {
    padding: 20px;
    
  }
  .radio-card input:checked + .card {
    background-color: rgba(0, 217, 255, 0.23);
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
  }
</style>

";
        // line 26
        if ((array_key_exists("separate_view", $context) && ($context["separate_view"] ?? null))) {
            // line 27
            echo "  <div class=\"container-fluid\" id=\"content\">
";
        } else {
            // line 29
            echo "  <div class=\"container\">
";
        }
        // line 31
        echo "  <ul class=\"breadcrumb\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 33
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 33);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 33);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ul>

  ";
        // line 37
        if (($context["success"] ?? null)) {
            // line 38
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 40
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 41
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 43
        echo "
  <div class=\"row\">";
        // line 44
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 45
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 46
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 47
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 48
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 49
            echo "    ";
        } else {
            // line 50
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    <div id=\"content\" class=\"";
        // line 53
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 54
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 56
        echo ($context["heading_title_become_partner"] ?? null);
        echo "
        <div class=\"pull-right\">
          <a href=\"";
        // line 58
        echo ($context["back"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </h1>

      <fieldset>
        <legend><i class=\"fa fa-list\"></i> ";
        // line 63
        echo ($context["heading_title_become_partner"] ?? null);
        echo "</legend>
        ";
        // line 64
        if (($context["customer_id"] ?? null)) {
            // line 65
            echo "        <p>Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</p>
        ";
        } else {
            // line 67
            echo "            <p>Error: Customer ID not found!</p>
        ";
        }
        // line 69
        echo "      ";
        if (($context["isMember"] ?? null)) {
            // line 70
            echo "        ";
            if ( !($context["in_process"] ?? null)) {
                // line 71
                echo "        <form action=\"";
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\"  class=\"form-horizontal\">

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-shoppartner\"><span data-toggle=\"tooltip\" title=\"";
                // line 74
                echo ($context["text_shop_name_info"] ?? null);
                echo "\">";
                echo ($context["text_shop_name"] ?? null);
                echo "</span></label>
            <div class=\"col-sm-10\">

              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" name=\"shoppartner\" value=\"";
                // line 79
                echo ($context["shoppartner"] ?? null);
                echo "\" id=\"input-shoppartner\" class=\"form-control\" />
                
              </div>

              ";
                // line 83
                if (($context["error_shoppartner"] ?? null)) {
                    // line 84
                    echo "              <div class=\"text-danger\">";
                    echo ($context["error_shoppartner"] ?? null);
                    echo "</div>
              ";
                }
                // line 86
                echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-entry\"><span data-toggle=\"tooltip\" title=\"";
                // line 90
                echo ($context["text_say_info"] ?? null);
                echo "\">";
                echo ($context["text_say"] ?? null);
                echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea id=\"input-entry\" name=\"description\" class=\"form-control\" rows=\"3\">Store Desciption</textarea>
              ";
                // line 93
                if (($context["error_description"] ?? null)) {
                    // line 94
                    echo "              <div class=\"text-danger\">";
                    echo ($context["error_description"] ?? null);
                    echo "</div>
              ";
                }
                // line 96
                echo "            </div>
          </div>
";
                // line 100
                echo "          <legend>Upload your Documents: </legend>        
            <div class=\"form-group required\">  
              <label class=\"col-sm-2 control-label\" for=\"input-dtifile\"><span data-toggle=\"tooltip\" title=\"";
                // line 102
                echo ($context["text_dti"] ?? null);
                echo "\">DTI: </span> </label>
              <div class=\"col-sm-10 mt-3\">
                  <div class=\"input-group\">
                    <input type=\"file\" name=\"dtifile\" value=\"dtifile\" id=\"dtifile\" class=\"form-control\">
                    ";
                // line 106
                if (($context["error_dtifile"] ?? null)) {
                    // line 107
                    echo "                    <div class=\"text-danger\">";
                    echo ($context["error_dtifile"] ?? null);
                    echo "</div>
                    ";
                }
                // line 109
                echo "                  </div>  
              </div>

              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 112
                echo ($context["text_bir"] ?? null);
                echo "\">BIR 2303/TIN: </label>
              <div class=\"col-sm-10 mt-3\">
                  <div class=\"input-group\">
                    <input type=\"file\" name=\"birfile\" value=\"birfile\" id=\"birfile\" class=\"form-control mt-3\">
                  </div>
                  ";
                // line 117
                if (($context["error_birfile"] ?? null)) {
                    // line 118
                    echo "                  <div class=\"text-danger\">";
                    echo ($context["error_birfile"] ?? null);
                    echo "</div>
                  ";
                }
                // line 120
                echo "              </div>

              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 122
                echo ($context["text_mayor"] ?? null);
                echo "\">Mayor's Permit:</span></label>
              <div class=\"col-sm-10 mt-3\">
                  <div class=\"input-group\">
                    <input type=\"file\" name=\"mayorfile\" value=\"mayorfile\" id=\"mayorfile\" class=\"form-control mt-3\">
                  </div>
                  ";
                // line 127
                if (($context["error_mayorfile"] ?? null)) {
                    // line 128
                    echo "                  <div class=\"text-danger\">";
                    echo ($context["error_mayorfile"] ?? null);
                    echo "</div>
                  ";
                }
                // line 130
                echo "              </div>

              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 132
                echo ($context["text_validid"] ?? null);
                echo "\">Government Valid ID: </span></label>
              <div class=\"col-sm-10 mt-3\">
                  <div class=\"input-group\">
                    <input type=\"file\" name=\"validid\" value=\"validid\" id=\"validid\" class=\"form-control mt-3\">
                  </div>
                  ";
                // line 137
                if (($context["error_validid"] ?? null)) {
                    // line 138
                    echo "                  <div class=\"text-danger\">";
                    echo ($context["error_validid"] ?? null);
                    echo "</div>
                  ";
                }
                // line 140
                echo "              </div>
            </div>

          <div class=\"text-center\">
            <input type=\"submit\" value=\"";
                // line 144
                echo ($context["button_continue"] ?? null);
                echo "\" class=\"btn btn-primary\"/>
          </div>

        </form>

        ";
            } else {
                // line 150
                echo "          <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["text_delay"] ?? null);
                echo "</div>
        ";
            }
            // line 152
            echo "      ";
        } else {
            // line 153
            echo "        <div class=\"text-danger\">
          ";
            // line 154
            echo ($context["error_warning_authenticate"] ?? null);
            echo "
        </div>
      ";
        }
        // line 157
        echo "    </fieldset>
  </div>
";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 162
        if ( !($context["in_process"] ?? null)) {
            // line 163
            echo "<script>
\$( \"#input-shoppartner\" ).change(function() {
  thisshop = this;
  shop = \$(thisshop).val();
  if(shop){
    jQuery(thisshop).prev().html('<i class=\"fa fa-spinner fa-spin\"></i>');
    \$.ajax({
           type: 'POST',
           data: ({shop: shop}),
           dataType: 'json',
           url: 'index.php?route=customerpartner/sell/wkmpregistation',
           success: function(data){
             console.log(data);
              jQuery('fa-spinner').remove();
              if(data['success']){
                jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-success\" title=\"";
            // line 178
            echo ($context["text_avaiable"] ?? null);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
              }else if(data['error']){
                jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
            // line 180
            echo ($context["text_no_avaiable"] ?? null);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></span>');
              }

            }
        });
  }
});
</script>
";
        }
        // line 189
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
        return array (  408 => 189,  396 => 180,  391 => 178,  374 => 163,  372 => 162,  366 => 159,  362 => 157,  356 => 154,  353 => 153,  350 => 152,  344 => 150,  335 => 144,  329 => 140,  323 => 138,  321 => 137,  313 => 132,  309 => 130,  303 => 128,  301 => 127,  293 => 122,  289 => 120,  283 => 118,  281 => 117,  273 => 112,  268 => 109,  262 => 107,  260 => 106,  253 => 102,  249 => 100,  245 => 96,  239 => 94,  237 => 93,  229 => 90,  223 => 86,  217 => 84,  215 => 83,  208 => 79,  198 => 74,  191 => 71,  188 => 70,  185 => 69,  181 => 67,  175 => 65,  173 => 64,  169 => 63,  159 => 58,  154 => 56,  149 => 54,  145 => 53,  142 => 52,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  127 => 47,  124 => 46,  122 => 45,  118 => 44,  115 => 43,  109 => 41,  106 => 40,  100 => 38,  98 => 37,  94 => 35,  83 => 33,  79 => 32,  76 => 31,  72 => 29,  68 => 27,  66 => 26,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/customerpartner/become_partner.twig", "");
    }
}
