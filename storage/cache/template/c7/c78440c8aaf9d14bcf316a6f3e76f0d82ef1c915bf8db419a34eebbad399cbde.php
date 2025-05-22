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

/* __string_template__cefe24212a0730917b5cc7fd1d2636e92b529e44965a06f73c6bb904e25527f7 */
class __TwigTemplate_ec84491c212b6db73d617922307da445783b52ba3bba5e006ba10a30c726d29a extends Template
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

      ";
        // line 10
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
            // line 11
            echo "      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject'] = r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      </script>
      ";
        }
        // line 18
        echo "      
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 22
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 23
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 24
        if (($context["description"] ?? null)) {
            // line 25
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 27
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 28
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 30
        echo "  <link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\"  rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
        echo "\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT\" crossorigin=\"anonymous\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO\" crossorigin=\"anonymous\"></script>
  <link href=\"catalog/view/theme/default/stylesheet/hp/navbar.css\" rel=\"stylesheet\">
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 43
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 43);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 43);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 46
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "<body>

            <!-- Mobikul code -->
            ";
        // line 51
        if ((array_key_exists("playstore_link", $context) || array_key_exists("appstore_link", $context))) {
            // line 52
            echo "            <div class=\"app-link text-center\">
            ";
            // line 53
            echo ($context["front_text"] ?? null);
            echo "
            ";
            // line 54
            if (($context["playstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["playstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["playstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 55
            echo "            ";
            if (($context["appstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["appstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["appstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 56
            echo "            </div>
            ";
        }
        // line 58
        echo "            
<nav id=\"top\">
   <div class=\"container d-flex align-items-center\">
    <div class=\"navbar-logo\">
      ";
        // line 62
        if (($context["logo"] ?? null)) {
            // line 63
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
            // line 65
            echo "        <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
      ";
        }
        // line 67
        echo "    </div>
    ";
        // line 68
        echo ($context["currency"] ?? null);
        echo "
    ";
        // line 69
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 72
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 73
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 75
        if (($context["logged"] ?? null)) {
            // line 76
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 77
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 78
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 79
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 80
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 82
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 83
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 85
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 87
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 88
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 89
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 102
        echo "      <div class=\"search-cart\">
        <div class=\"search\">";
        // line 103
        echo ($context["search"] ?? null);
        echo "</div>
          <div class=\"cart\">
            <div class=\"carts\">";
        // line 105
        echo ($context["cart"] ?? null);
        echo "</div>
          </div>
      </div>
    </div>
  </div>
</header>
";
        // line 111
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__cefe24212a0730917b5cc7fd1d2636e92b529e44965a06f73c6bb904e25527f7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 111,  362 => 105,  357 => 103,  354 => 102,  339 => 89,  331 => 88,  323 => 87,  319 => 85,  312 => 83,  305 => 82,  298 => 80,  292 => 79,  286 => 78,  280 => 77,  273 => 76,  271 => 75,  262 => 73,  256 => 72,  250 => 69,  246 => 68,  243 => 67,  235 => 65,  223 => 63,  221 => 62,  215 => 58,  211 => 56,  202 => 55,  194 => 54,  190 => 53,  187 => 52,  185 => 51,  180 => 48,  171 => 46,  166 => 45,  155 => 43,  151 => 42,  148 => 41,  139 => 39,  134 => 38,  121 => 36,  117 => 35,  110 => 31,  105 => 30,  99 => 28,  96 => 27,  90 => 25,  88 => 24,  84 => 23,  80 => 22,  74 => 18,  65 => 11,  63 => 10,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cefe24212a0730917b5cc7fd1d2636e92b529e44965a06f73c6bb904e25527f7", "");
    }
}
