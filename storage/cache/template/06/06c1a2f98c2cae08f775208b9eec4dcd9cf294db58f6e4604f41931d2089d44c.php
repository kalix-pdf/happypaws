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

/* __string_template__07f1dfe3705841ca5188d1e78fda5622173618c243b10e9742203bd40628df86 */
class __TwigTemplate_c722b16195169935e0762b244a4afd48ef8e654cf36f8bea592649ef630eb9a2 extends Template
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

<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
";
        // line 27
        echo "<link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
";
        // line 33
        echo "
";
        // line 36
        echo "  
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

<nav class=\"navbar navbar-expand-lg\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Dropdown
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<nav id=\"top\" class=\"navbar navbar-expand-lg\">
  <div class=\"container\">
      <div class=\"navbar-logo\">
      ";
        // line 90
        if (($context["logo"] ?? null)) {
            // line 91
            echo "        <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
      ";
        } else {
            // line 93
            echo "        <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
      ";
        }
        // line 95
        echo "      </div>
       <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
    <div id=\"navbarNavDropdown\" class=\"collapse navbar-collapse\">
    <ul class=\"navbar-nav\" id=\"menu-content\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 102
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a>
        <span class=\"hide-on-mobile\">";
        // line 103
        echo ($context["telephone"] ?? null);
        echo "</span>
      </li><li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">";
        // line 104
        echo ($context["sellmenu"] ?? null);
        echo "</a></li>

      <li class=\"nav-item dropdown\">
        <a href=\"";
        // line 107
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"nav-link dropdown-toggle\" 
        role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i>
          <span class=\"hide-on-mobile\">";
        // line 109
        echo ($context["text_account"] ?? null);
        echo "</span>
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
          ";
        // line 113
        if (($context["logged"] ?? null)) {
            // line 114
            echo "          <li><a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a class=\"dropdown-item\" href=\"";
            // line 115
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
          <li><a class=\"dropdown-item\" href=\"";
            // line 116
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
          <li><a class=\"dropdown-item\" href=\"";
            // line 117
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
          <li><a class=\"dropdown-item\" href=\"";
            // line 118
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 120
            echo "          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 121
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
          ";
        }
        // line 123
        echo "        </ul>
      </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 126
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
        <i class=\"fa fa-heart\"></i>
        <span class=\"hide-on-mobile\">";
        // line 128
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 132
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
        <i class=\"fa fa-shopping-cart\"></i>
        <span class=\"hide-on-mobile\">";
        // line 134
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 138
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
        <i class=\"fa fa-share\"></i>
        <span class=\"hide-on-mobile\">";
        // line 140
        echo ($context["text_checkout"] ?? null);
        echo "</span>
      </a>
    </li>
  </ul>
  </div>
  </div>
</nav>

<header>
  <div class=\"container-1\">
    <div class=\"row\">
      ";
        // line 155
        echo "      ";
        // line 156
        echo "      ";
        // line 158
        echo "            <div class=\"search-cart\">
        <div class=\"search\">";
        // line 159
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"cart\">
            <div class=\"carts\">";
        // line 161
        echo ($context["cart"] ?? null);
        echo "</div>
          </div>
    </div>
  </div>
</header>
";
        // line 166
        echo ($context["menu"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "__string_template__07f1dfe3705841ca5188d1e78fda5622173618c243b10e9742203bd40628df86";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 166,  384 => 161,  379 => 159,  376 => 158,  374 => 156,  372 => 155,  358 => 140,  351 => 138,  344 => 134,  337 => 132,  330 => 128,  323 => 126,  318 => 123,  311 => 121,  304 => 120,  297 => 118,  291 => 117,  285 => 116,  279 => 115,  272 => 114,  270 => 113,  263 => 109,  256 => 107,  250 => 104,  246 => 103,  242 => 102,  233 => 95,  225 => 93,  213 => 91,  211 => 90,  168 => 49,  160 => 48,  156 => 47,  145 => 45,  141 => 44,  138 => 43,  129 => 41,  125 => 40,  112 => 38,  108 => 37,  105 => 36,  102 => 33,  97 => 27,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__07f1dfe3705841ca5188d1e78fda5622173618c243b10e9742203bd40628df86", "");
    }
}
