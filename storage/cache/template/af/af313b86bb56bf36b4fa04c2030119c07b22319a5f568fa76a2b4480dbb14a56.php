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

/* __string_template__0fdbd99d6598004fba0ecd63f7cbf476b1e13ae4ab0c53db8df01a6238851b9f */
class __TwigTemplate_5761bbfbd98567aaa7601f9c4ba1f8115298f1736d76be1933acad63faff045a extends Template
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
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 27
        if (($context["keywords"] ?? null)) {
            // line 28
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 30
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>

    ";
        // line 32
        if ((array_key_exists("direction", $context) && (($context["direction"] ?? null) == "rtl"))) {
            // line 33
            echo "            <link 
  rel=\"stylesheet\"
  href=\"https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css\"
  integrity=\"sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj\"
  crossorigin=\"anonymous\">
<!-- compiled and minified theme CSS -->
<link
  rel=\"stylesheet\"
  href=\"https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
  integrity=\"sha384-YNPmfeOM29goUYCxqyaDVPToebWWQrHk0e3QYEs7Ovg6r5hSRKr73uQ69DkzT1LH\"
  crossorigin=\"anonymous\">

<!-- compiled and minified JavaScript -->
<script
  src=\"https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js\"
  integrity=\"sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv\"
  crossorigin=\"anonymous\"></script>

            ";
        } else {
            // line 52
            echo "    
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>

    ";
        }
        // line 57
        echo "    
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 62
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 62);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 62);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 62);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 65
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 69
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 69);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 69);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 72
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
      
</head>
<body>

            <!-- Mobikul code -->
            ";
        // line 81
        if ((array_key_exists("playstore_link", $context) || array_key_exists("appstore_link", $context))) {
            // line 82
            echo "            <div class=\"app-link text-center\">
            ";
            // line 83
            echo ($context["front_text"] ?? null);
            echo "
            ";
            // line 84
            if (($context["playstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["playstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["playstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 85
            echo "            ";
            if (($context["appstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["appstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["appstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 86
            echo "            </div>
            ";
        }
        // line 88
        echo "            

          ";
        // line 90
        if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
            echo " ";
            echo ($context["notification"] ?? null);
            echo " ";
        }
        // line 91
        echo "      
<nav id=\"top\">
  <div class=\"container\">";
        // line 93
        echo ($context["currency"] ?? null);
        echo "
    ";
        // line 94
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 97
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>

        ";
        // line 99
        echo ($context["sellmenu"] ?? null);
        echo "
      
        <li class=\"dropdown\"><a href=\"";
        // line 101
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 103
        if (($context["logged"] ?? null)) {
            // line 104
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 105
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 106
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 107
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 108
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 110
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 111
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 113
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 115
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 116
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 117
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
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 126
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 127
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 128
        echo "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 130
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 131
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 135
        echo ($context["menu"] ?? null);
        echo "

      <div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                <span aria-hidden=\"true\">&times;</span>
                <span class=\"sr-only\">";
        // line 143
        echo ($context["text_close"] ?? null);
        echo "</span>
              </button>
              <h3 class=\"modal-title\">";
        // line 145
        echo ($context["text_ask_question"] ?? null);
        echo "</h3>
            </div>
            <form id=\"seller-mail-form\">
              <div class=\"modal-body\">
                <div class=\"form-group required\">
                  <label class=\"control-label\" for=\"input-subject\">";
        // line 150
        echo ($context["text_subject"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"subject\" id=\"input-subject\" class=\"form-control\"/>
                  ";
        // line 152
        if (array_key_exists("partner", $context)) {
            // line 153
            echo "                    <input type=\"hidden\" name=\"seller\" value=\"";
            echo ($context["seller_id"] ?? null);
            echo "\"/>
                  ";
        }
        // line 155
        echo "                </div>
                <div class=\"form-group required\">
                  <label class=\"control-label\" for=\"input-message\">";
        // line 157
        echo ($context["text_ask"] ?? null);
        echo "</label>
                  <textarea class=\"form-control\" name=\"message\" rows=\"3\" id=\"input-message\"></textarea>
                </div>
                <div class=\"error text-center text-danger\"></div>
              </div>
            </form>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 164
        echo ($context["text_close"] ?? null);
        echo "</button>
              <button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
        // line 165
        echo ($context["text_send"] ?? null);
        echo "</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    
";
    }

    public function getTemplateName()
    {
        return "__string_template__0fdbd99d6598004fba0ecd63f7cbf476b1e13ae4ab0c53db8df01a6238851b9f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 165,  458 => 164,  448 => 157,  444 => 155,  438 => 153,  436 => 152,  431 => 150,  423 => 145,  418 => 143,  407 => 135,  400 => 131,  396 => 130,  392 => 128,  384 => 127,  372 => 126,  356 => 117,  348 => 116,  340 => 115,  336 => 113,  329 => 111,  322 => 110,  315 => 108,  309 => 107,  303 => 106,  297 => 105,  290 => 104,  288 => 103,  279 => 101,  274 => 99,  267 => 97,  261 => 94,  257 => 93,  253 => 91,  247 => 90,  243 => 88,  239 => 86,  230 => 85,  222 => 84,  218 => 83,  215 => 82,  213 => 81,  204 => 74,  196 => 72,  192 => 71,  181 => 69,  177 => 68,  174 => 67,  165 => 65,  161 => 64,  148 => 62,  144 => 61,  138 => 57,  131 => 52,  110 => 33,  108 => 32,  104 => 30,  98 => 28,  96 => 27,  90 => 25,  88 => 24,  84 => 23,  80 => 22,  74 => 18,  65 => 11,  63 => 10,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0fdbd99d6598004fba0ecd63f7cbf476b1e13ae4ab0c53db8df01a6238851b9f", "");
    }
}
