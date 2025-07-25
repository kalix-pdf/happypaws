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

/* common/header.twig */
class __TwigTemplate_c829ae7a4a861aadd135726343a14c4e68c3e3923f3ed993c29d8150c8b9e7d9 extends Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
";
        // line 30
        echo "<link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
";
        // line 35
        echo "<link href=\"catalog/view/theme/hp/stylesheet/style.css\" rel=\"stylesheet\">

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 45
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 45);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 45);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 48
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  
</head>
<body>

<nav class=\"navbar navbar-expand-lg py-3\" id=\"header\">
  <div class=\"container\">
    <div class=\"navbar-brand\" style=\"width: 180px; height: auto;\">
      ";
        // line 56
        if (($context["logo"] ?? null)) {
            // line 57
            echo "        <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\" /></a>
      ";
        } else {
            // line 59
            echo "        <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
      ";
        }
        // line 61
        echo "      </div>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 69
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i>
          <span class=\"hide-on-mobile\"> Contact Us </span></a>
        </li>
        ";
        // line 73
        echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 74
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" 
          role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <span class=\"hide-on-mobile\">";
        // line 76
        echo ($context["name"] ?? null);
        echo "</span>
            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            ";
        // line 80
        if (($context["logged"] ?? null)) {
            // line 81
            echo "            <li><a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 82
            echo ($context["edit"] ?? null);
            echo "\">Edit Profile</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 83
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 85
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 87
            echo "            <li><a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 88
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 90
        echo "          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 93
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
            <i class=\"fa fa-shopping-cart\"></i>
            <span class=\"hide-on-mobile\">";
        // line 95
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
          </a>
        </li>
        
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 100
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
            <i class=\"fa fa-share\"></i>
            <span class=\"hide-on-mobile\">";
        // line 102
        echo ($context["text_checkout"] ?? null);
        echo "</span>
          </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

";
        // line 171
        echo "
";
        // line 173
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 173,  313 => 171,  301 => 102,  294 => 100,  286 => 95,  279 => 93,  274 => 90,  267 => 88,  260 => 87,  253 => 85,  246 => 83,  242 => 82,  235 => 81,  233 => 80,  226 => 76,  219 => 74,  216 => 73,  210 => 69,  200 => 61,  192 => 59,  180 => 57,  178 => 56,  169 => 49,  161 => 48,  157 => 47,  146 => 45,  142 => 44,  139 => 43,  130 => 41,  126 => 40,  113 => 38,  109 => 37,  105 => 35,  100 => 30,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
