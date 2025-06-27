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

/* __string_template__3a1359d9d827e0d953a7041f3334408b28e7a6a12b5311d425ba966f14256d04 */
class __TwigTemplate_0ee45d78f0fad265b254c3ccbd1f9ad052b3a1653e4005ec4e8be489fe107933 extends Template
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
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"pull-right\">
    ";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            // line 4
            echo "    <i class=\"fa fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            echo "    <i class=\"fa fa-caret-down\"></i>
    ";
        }
        // line 8
        echo "    ";
        echo ($context["percentage"] ?? null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-shopping-cart\"></i>
    <h2 class=\"pull-right\">";
        // line 10
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"></div>
</div>

<script type=\"text/javascript\">
  \$('#toggle-order-order').on('click',function(){
    
    \$('a[href=\"#tab-order\"]').trigger('click');
  })
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3a1359d9d827e0d953a7041f3334408b28e7a6a12b5311d425ba966f14256d04";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3a1359d9d827e0d953a7041f3334408b28e7a6a12b5311d425ba966f14256d04", "");
    }
}
