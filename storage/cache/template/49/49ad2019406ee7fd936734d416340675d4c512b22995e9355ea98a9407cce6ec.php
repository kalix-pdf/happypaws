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

/* account/login.twig */
class __TwigTemplate_e59ea81ae70c13aae810cc06bb4bfc0a09540b5ba1de663cf3ae9cff4d64313c extends Template
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

<link rel=\"stylesheet\" href=\"catalog/view/theme/hp/stylesheet/login.css\">
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
";
        // line 30
        echo "<link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">

<link href=\"catalog/view/theme/hp/stylesheet/style.css\" rel=\"stylesheet\">


</head>
<body style=\"background: url(";
        // line 36
        echo ($context["bg"] ?? null);
        echo ");\">
<div id=\"account-login\">
  
  ";
        // line 39
        if (($context["success"] ?? null)) {
            // line 40
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 42
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 43
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 45
        echo "  <div class=\"mb-5\">
    <div id=\"content\" class=\"main\">
      
        <div><h1 style=\"color: #162F65; font-weight: 600;\">Welcome back!</h1>
          <img class=\"img-fluid\" src=\"";
        // line 49
        echo ($context["momdad"] ?? null);
        echo "\" alt=\"\" width=\"600px\">
                
        </div>
        <div class=\"col-sm-4 login-container mb-5\">
          <div class=\"well\">
            <div class=\"d-flex justify-content-center\">
              <img src=\"";
        // line 55
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" width=\"200px\"></div>
            <form action=\"";
        // line 56
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"px-5\">
              <div class=\"form-group\">
                ";
        // line 59
        echo "                <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                ";
        // line 63
        echo "                <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              <div class=\"d-flex gap-4 flex-wrap justify-content-center\">
                <input type=\"submit\" value=\"";
        // line 65
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn px-4\"/ style=\"background-color: #162F65; color: #f6c96d;\">
                <a href=\"";
        // line 66
        echo ($context["register"] ?? null);
        echo "\" class=\"btn px-4\" style=\"background-color: #f6c96d; color: #162F65;\"/>Register</a>
              </div>
              ";
        // line 68
        if (($context["redirect"] ?? null)) {
            // line 69
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 71
        echo "              <div class=\"d-flex justify-content-center my-3\">
                <a href=\"";
        // line 72
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"text-align-center text-black\">Forgot Password</a></div>
              </div>
            </form>
          </div>
        </div>
      
    </div>
  </div>
</div>
</body>
";
        // line 82
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  194 => 72,  191 => 71,  185 => 69,  183 => 68,  178 => 66,  174 => 65,  166 => 63,  157 => 59,  152 => 56,  148 => 55,  139 => 49,  133 => 45,  127 => 43,  124 => 42,  118 => 40,  116 => 39,  110 => 36,  100 => 30,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/login.twig", "");
    }
}
