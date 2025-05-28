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

/* __string_template__39b5ec8de8399dba3a0fad62f473cb30d8263f29677360e56b076c7ada5b73f3 */
class __TwigTemplate_7f7a2c8819743368998b3ebd69f1f051fcfeb9f8ab0c59b50478a20ef8902159 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
     ";
        // line 4
        echo ($context["header"] ?? null);
        echo "
</head>
<body>
    ";
        // line 7
        echo ($context["menu"] ?? null);
        echo "  
    
    <header class=\"py-3\">
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-end\">
          <div class=\"col-12 col-md-6 col-lg-4 search-bar\">
            <div class=\"search-cart d-flex justify-content-end align-items-center\">
              <div class=\"search flex-grow me-2\">";
        // line 14
        echo ($context["search"] ?? null);
        echo "</div>
              <div class=\"carts\">";
        // line 15
        echo ($context["cart"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id=\"common-home\" class=\"container-main\">
      <div class=\"row-home\">
        ";
        // line 24
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 25
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 26
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 27
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 28
            echo "          ";
            $context["class"] = "col-sm-9";
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "          ";
            $context["class"] = "col-sm-12";
            // line 31
            echo "        ";
        }
        // line 32
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          ";
        // line 33
        echo ($context["content_top"] ?? null);
        echo " 
          ";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "
        </div>
        ";
        // line 36
        echo ($context["column_right"] ?? null);
        echo "
      </div>
    </div>
    
    ";
        // line 40
        echo ($context["footer"] ?? null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__39b5ec8de8399dba3a0fad62f473cb30d8263f29677360e56b076c7ada5b73f3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 36,  107 => 34,  103 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  78 => 25,  74 => 24,  62 => 15,  58 => 14,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__39b5ec8de8399dba3a0fad62f473cb30d8263f29677360e56b076c7ada5b73f3", "");
    }
}
