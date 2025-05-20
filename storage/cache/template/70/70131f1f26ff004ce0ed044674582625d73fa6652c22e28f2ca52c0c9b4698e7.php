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

/* __string_template__c7405edcb89fde52732d05c8012c858a59b5ba1517a10573730c06e669a353f2 */
class __TwigTemplate_8fc0f353daec29e74831b0984f532f39bb915fad7eba3fdd5f1b2dd3bb65bbdb extends Template
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
        // line 56
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
";
        // line 71
        echo "<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />


        <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
      
</head>
<body>

            <!-- Mobikul code -->
            ";
        // line 80
        if ((array_key_exists("playstore_link", $context) || array_key_exists("appstore_link", $context))) {
            // line 81
            echo "            <div class=\"app-link text-center\">
            ";
            // line 82
            echo ($context["front_text"] ?? null);
            echo "
            ";
            // line 83
            if (($context["playstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["playstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["playstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 84
            echo "            ";
            if (($context["appstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["appstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["appstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 85
            echo "            </div>
            ";
        }
        // line 87
        echo "            

          ";
        // line 89
        if ((array_key_exists("notification", $context) && ($context["notification"] ?? null))) {
            echo " ";
            echo ($context["notification"] ?? null);
            echo " ";
        }
        // line 90
        echo "      
<nav id=\"top\">
  <div class=\"container\">";
        // line 92
        echo ($context["currency"] ?? null);
        echo "
    ";
        // line 93
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 96
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>

        ";
        // line 98
        echo ($context["sellmenu"] ?? null);
        echo "
      
        <li class=\"dropdown\"><a href=\"";
        // line 100
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 102
        if (($context["logged"] ?? null)) {
            // line 103
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 104
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 105
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 106
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 107
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 109
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 110
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 112
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 114
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 115
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 116
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
        // line 125
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
            // line 126
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 127
        echo "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 129
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 130
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 134
        echo ($context["menu"] ?? null);
        echo "

      <div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                <span aria-hidden=\"true\">&times;</span>
                <span class=\"sr-only\">";
        // line 142
        echo ($context["text_close"] ?? null);
        echo "</span>
              </button>
              <h3 class=\"modal-title\">";
        // line 144
        echo ($context["text_ask_question"] ?? null);
        echo "</h3>
            </div>
            <form id=\"seller-mail-form\">
              <div class=\"modal-body\">
                <div class=\"form-group required\">
                  <label class=\"control-label\" for=\"input-subject\">";
        // line 149
        echo ($context["text_subject"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"subject\" id=\"input-subject\" class=\"form-control\"/>
                  ";
        // line 151
        if (array_key_exists("partner", $context)) {
            // line 152
            echo "                    <input type=\"hidden\" name=\"seller\" value=\"";
            echo ($context["seller_id"] ?? null);
            echo "\"/>
                  ";
        }
        // line 154
        echo "                </div>
                <div class=\"form-group required\">
                  <label class=\"control-label\" for=\"input-message\">";
        // line 156
        echo ($context["text_ask"] ?? null);
        echo "</label>
                  <textarea class=\"form-control\" name=\"message\" rows=\"3\" id=\"input-message\"></textarea>
                </div>
                <div class=\"error text-center text-danger\"></div>
              </div>
            </form>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"wk-btn btn btn-default\" data-dismiss=\"modal\">";
        // line 163
        echo ($context["text_close"] ?? null);
        echo "</button>
              <button type=\"button\" class=\"wk-btn btn btn-primary\" id=\"send-mail\">";
        // line 164
        echo ($context["text_send"] ?? null);
        echo "</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__c7405edcb89fde52732d05c8012c858a59b5ba1517a10573730c06e669a353f2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 164,  344 => 163,  334 => 156,  330 => 154,  324 => 152,  322 => 151,  317 => 149,  309 => 144,  304 => 142,  293 => 134,  286 => 130,  282 => 129,  278 => 127,  270 => 126,  258 => 125,  242 => 116,  234 => 115,  226 => 114,  222 => 112,  215 => 110,  208 => 109,  201 => 107,  195 => 106,  189 => 105,  183 => 104,  176 => 103,  174 => 102,  165 => 100,  160 => 98,  153 => 96,  147 => 93,  143 => 92,  139 => 90,  133 => 89,  129 => 87,  125 => 85,  116 => 84,  108 => 83,  104 => 82,  101 => 81,  99 => 80,  88 => 71,  84 => 56,  78 => 23,  76 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  54 => 13,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c7405edcb89fde52732d05c8012c858a59b5ba1517a10573730c06e669a353f2", "");
    }
}
