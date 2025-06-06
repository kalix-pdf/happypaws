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

/* __string_template__91ffef56a49c9a5324ddc9f6f7fec77bb2bdd2e6ae756ab1075342e0b66bb790 */
class __TwigTemplate_b7a3651b671c0669d3aeb812233e5a709e2e4e2c7c5ad938bd5fc8afd623be57 extends Template
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
        if ((array_key_exists("showSellerInfo", $context) && ($context["showSellerInfo"] ?? null))) {
            // line 2
            echo "<style>
  #wk_seller_info_container{
    width: 100%;
    margin: 10px 0;
    /*padding: 20px;*/
    /*background-color: #eee;*/
  }

  #wk_seller_info_profpic{
    margin-right: 20px;
    display: inline-block;
    width: 80px;
    height: 80px;
  }

  #wk_seller_info_box{
    display: inline-block;
  }

  #wk_seller_info_rating{
    position: relative;
    cursor: pointer;
  }

  #wk_seller_info_rating > .fa{
    font-size: 10px;
  }

  #wk_seller_info_rating > .fa > .fa-stack-1x {
      color:#3B9911;
  }

  #wk_seller_info_rating_details{
    position: absolute;
    min-width: 250px;
    height: auto;
    background: #FFFFFF;
    top: 23px;
    padding: 20px;
    box-shadow: 0 2px 8px 2px #868282;
    display: none;
    z-index: 100000;
  }

  .wk_rating_details_box > .wk_rating_details > .fa{
    font-size: 10px;
  }

  .wk_rating_details_box > .wk_rating_details > .fa > .fa-stack-1x {
      color:#3B9911;
  }

  .wk_rating_details{
    padding-left: 5px;
  }

  @media only screen and (max-width: 700px) {

      #wk_seller_info_rating_details{

          min-width: 200px;
          /*height: 100px;*/
      }
  }

</style>

<div id=\"wk_seller_info_container bg-info\">
  <div style=\"padding: 10px;background-color: #EFEFEF;border-left: 8px solid;\">
    <div id=\"wk_seller_info_profpic\">
      <img src=\"";
            // line 72
            echo ($context["info_image"] ?? null);
            echo "\" width=\"100%\" height=\"100%\" style=\"vertical-align:baseline;\">
    </div>
    <div id=\"wk_seller_info_box\">
      <h4 style=\"margin-bottom: 20px;margin-top: 0px;font-size: 13px;\"><b>";
            // line 75
            echo ($context["info_heading_text"] ?? null);
            echo "</b></h4>
      <a href=\"";
            // line 76
            echo ($context["loadProfile"] ?? null);
            echo "\"><p style=\"margin:0; line-height: 15px;\">";
            echo ($context["info_name"] ?? null);
            echo "</p></a>

      ";
            // line 78
            if ((array_key_exists("informations", $context) && ($context["informations"] ?? null))) {
                // line 79
                echo "        <h4 style=\"margin-bottom: 0px;margin-top: 5px;font-size: 13px;\"><b>";
                echo ($context["text_seller_information"] ?? null);
                echo "</b></h4>
        ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 81
                    echo "          <div class=\"text-container\">
            <a href=\"";
                    // line 82
                    echo (($__internal_compile_0 = $context["information"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_compile_1 = $context["information"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null);
                    echo "</a>
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "      ";
            }
            // line 86
            echo "
      <div id=\"wk_seller_info_rating\">
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "        ";
                if ((($context["info_feedback_total"] ?? null) < $context["i"])) {
                    // line 90
                    echo "        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
        ";
                } else {
                    // line 92
                    echo "        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
        ";
                }
                // line 94
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
        ";
            // line 96
            if ((array_key_exists("review_fields", $context) && ($context["review_fields"] ?? null))) {
                // line 97
                echo "        <div id=\"wk_seller_info_rating_details\">
          <i class=\"fa fa-caret-up\" aria-hidden=\"true\" style=\"color: #FFFFFF;position: absolute;top: -14px;font-size: 25px;\"></i>
            ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["review_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                    // line 100
                    echo "              <div class=\"wk_rating_details_box\">
                <div style=\"display: inline-block;width: 25%;\">";
                    // line 101
                    echo (($__internal_compile_2 = $context["review_field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_name"] ?? null) : null);
                    echo "</div>
                <div class=\"wk_rating_details\" style=\"display: inline-block;font-size: 10px;\">
                  ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "                  ";
                        if (((($__internal_compile_3 = $context["review_field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["field_value"] ?? null) : null) < $context["i"])) {
                            // line 105
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                  ";
                        } else {
                            // line 107
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                  ";
                        }
                        // line 109
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                  <span>(";
                    echo ((((($__internal_compile_4 = $context["review_field"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_value"] ?? null) : null)) ? ((($__internal_compile_5 = $context["review_field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field_value"] ?? null) : null)) : (0)) . "/5");
                    echo ")</span>
                </div>
              </div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "              </div>
              ";
            }
            // line 116
            echo "      </div>
      <p style=\"margin:0;line-height: 15px;\">";
            // line 117
            echo ($context["info_product_text"] ?? null);
            echo "<span>";
            echo ($context["info_total_products"] ?? null);
            echo "</span></p>
    </div>
  </div>
</div>

<script>
  \$(\"#wk_seller_info_rating, #wk_seller_info_rating_details\").on('mouseover', function(){
      \$(\"#wk_seller_info_rating_details\").show();
  });

  \$(\"#wk_seller_info_rating, #wk_seller_info_rating_details\").on('mouseout', function(){
      \$(\"#wk_seller_info_rating_details\").hide();
  });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__91ffef56a49c9a5324ddc9f6f7fec77bb2bdd2e6ae756ab1075342e0b66bb790";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 117,  238 => 116,  234 => 114,  223 => 110,  217 => 109,  213 => 107,  209 => 105,  206 => 104,  202 => 103,  197 => 101,  194 => 100,  190 => 99,  186 => 97,  184 => 96,  181 => 95,  175 => 94,  171 => 92,  167 => 90,  164 => 89,  160 => 88,  156 => 86,  153 => 85,  142 => 82,  139 => 81,  135 => 80,  130 => 79,  128 => 78,  121 => 76,  117 => 75,  111 => 72,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__91ffef56a49c9a5324ddc9f6f7fec77bb2bdd2e6ae756ab1075342e0b66bb790", "");
    }
}
