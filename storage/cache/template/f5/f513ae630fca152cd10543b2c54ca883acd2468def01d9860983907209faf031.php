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

/* __string_template__6e0cab82deedf25bcf93b7b0097e4be0e1003020d39bbe1de7e275b9170dffeb */
class __TwigTemplate_b364eb9298ffac3c6fbf0f5633c7a571136d9f94090d7a143c7fd3931bcb2992 extends Template
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
        echo "<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\category.css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 6
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
</head>

";
        // line 9
        echo ($context["header"] ?? null);
        echo "


<div id=\"information-information\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  <div class=\"row-about\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"about-us\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <div class=\"info-description\">";
        // line 28
        echo ($context["description"] ?? null);
        echo "</div>
";
        // line 29
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 30
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 32
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__6e0cab82deedf25bcf93b7b0097e4be0e1003020d39bbe1de7e275b9170dffeb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  82 => 20,  80 => 19,  76 => 18,  73 => 17,  62 => 15,  58 => 14,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6e0cab82deedf25bcf93b7b0097e4be0e1003020d39bbe1de7e275b9170dffeb", "");
    }
}
