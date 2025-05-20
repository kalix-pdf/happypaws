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

/* __string_template__e6d0a0a39e77c142ad89b5dd9dad6eb1a07903da791d7d3e92c304fc0277dc3d */
class __TwigTemplate_c831718fe98c31ba7b6d5e5ea33c37cc5f7c076dcca7f770100ec986a8fc5031 extends Template
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
<html>
<head>

      ";
        // line 5
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 6
            echo "      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject'] = r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      </script>
      ";
        }
        // line 13
        echo "      
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 18
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 19
        if (($context["description"] ?? null)) {
            // line 20
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 22
        if (($context["keywords"] ?? null)) {
            // line 23
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
";
        // line 46
        echo "<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />


        <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
      
</head>
</html>

          ";
        // line 54
        if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
            echo " ";
            echo ($context["notification"] ?? null);
            echo " ";
        }
        // line 55
        echo "      ";
    }

    public function getTemplateName()
    {
        return "__string_template__e6d0a0a39e77c142ad89b5dd9dad6eb1a07903da791d7d3e92c304fc0277dc3d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  98 => 54,  88 => 46,  84 => 31,  78 => 23,  76 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  54 => 13,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e6d0a0a39e77c142ad89b5dd9dad6eb1a07903da791d7d3e92c304fc0277dc3d", "");
    }
}
