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

/* __string_template__b443388eedc0b55452473dcae33b24fd9e42c68ee733a8bdb3aba0b7aeba89ac */
class __TwigTemplate_13c5a02998687af7dafdfb244c7e7c2416f0fdc1ad6da35d05ba4e52727850f2 extends Template
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
<link href=\"catalog/view/theme/hp/stylesheet/enhanced-hp/navbar.css\" rel=\"stylesheet\">
";
        // line 32
        echo "<link href=\"catalog/view/theme/hp/stylesheet/style.css\" rel=\"stylesheet\">
";
        // line 34
        echo "
";
        // line 37
        echo "  
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 39);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 39);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 46);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  
</head>
<body>
<nav id=\"top\" class=\"navbar-hp\">
  <div class=\"container\">
      <div class=\"navbar-logo\">
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
            echo "\" class=\"img-responsive\" /></a>
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
       <button class=\"navbar-toggle\" id=\"menu-toggle\">
        <i class=\"fa fa-bars\"></i>
      </button>
  ";
        // line 65
        echo ($context["currency"] ?? null);
        echo "
    ";
        // line 66
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"top-links-list-wrapper\">
    <ul class=\"top-links-list\" id=\"menu-content\">
      <li>
        <a href=\"";
        // line 70
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a>
        <span class=\"hide-on-mobile\">";
        // line 71
        echo ($context["telephone"] ?? null);
        echo "</span>
      </li>
      <li><a>";
        // line 73
        echo ($context["sellmenu"] ?? null);
        echo "</a></li>
      <li class=\"dropdown-container\">
        <a href=\"";
        // line 75
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-link\"><i class=\"fa fa-user\"></i>
          <span class=\"hide-on-mobile\">";
        // line 76
        echo ($context["text_account"] ?? null);
        echo "</span>
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-content\" style=\"display: none;\">
          ";
        // line 80
        if (($context["logged"] ?? null)) {
            // line 81
            echo "          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 82
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 83
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 84
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 85
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 87
            echo "          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 88
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
          ";
        }
        // line 90
        echo "        </ul>
      </li>
    <li>
      <a href=\"";
        // line 93
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
        <i class=\"fa fa-heart\"></i>
        <span class=\"hide-on-mobile\">";
        // line 95
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
      </a>
    </li>
    <li>
      <a href=\"";
        // line 99
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
        <i class=\"fa fa-shopping-cart\"></i>
        <span class=\"hide-on-mobile\">";
        // line 101
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
      </a>
    </li>
    <li>
      <a href=\"";
        // line 105
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
        <i class=\"fa fa-share\"></i>
        <span class=\"hide-on-mobile\">";
        // line 107
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
        // line 122
        echo "      ";
        // line 123
        echo "      ";
        // line 125
        echo "            <div class=\"search-cart\">
        <div class=\"search\">";
        // line 126
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"cart\">
            <div class=\"carts\">";
        // line 128
        echo ($context["cart"] ?? null);
        echo "</div>
          </div>
    </div>
  </div>
</header>
";
        // line 133
        echo ($context["menu"] ?? null);
        echo "

<script>
        document.addEventListener('DOMContentLoaded', function() {
          var dropdownLink = document.querySelector('.dropdown-link');
          var dropdownContent = document.querySelector('.dropdown-content');
          if(dropdownLink && dropdownContent) {
        dropdownLink.addEventListener('click', function(e) {
          e.preventDefault();
          dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });
        document.addEventListener('click', function(e) {
          if (!dropdownLink.contains(e.target) && !dropdownContent.contains(e.target)) {
            dropdownContent.style.display = 'none';
          }
        });
          }
        });


  document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('menu-toggle');
  const menuWrapper = document.querySelector('.top-links-list-wrapper');
  const menuContent = document.querySelector('#menu-content');

  toggleBtn.addEventListener('click', function () {
    menuWrapper.classList.toggle('open');
    menuContent.classList.toggle('show');
  });
});

</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__b443388eedc0b55452473dcae33b24fd9e42c68ee733a8bdb3aba0b7aeba89ac";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 133,  360 => 128,  355 => 126,  352 => 125,  350 => 123,  348 => 122,  334 => 107,  327 => 105,  320 => 101,  313 => 99,  306 => 95,  299 => 93,  294 => 90,  287 => 88,  280 => 87,  273 => 85,  267 => 84,  261 => 83,  255 => 82,  248 => 81,  246 => 80,  239 => 76,  233 => 75,  228 => 73,  223 => 71,  219 => 70,  212 => 66,  208 => 65,  202 => 61,  194 => 59,  182 => 57,  180 => 56,  172 => 50,  164 => 49,  160 => 48,  149 => 46,  145 => 45,  142 => 44,  133 => 42,  129 => 41,  116 => 39,  112 => 38,  109 => 37,  106 => 34,  103 => 32,  97 => 27,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b443388eedc0b55452473dcae33b24fd9e42c68ee733a8bdb3aba0b7aeba89ac", "");
    }
}
