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
class __TwigTemplate_6436d1d990f2dfac83ba4f7fe7d8d967c184c30a47438bf7c57d2a33f69b228d extends Template
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
        echo "<div id=\"account-login\">
  
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 6
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 9
        echo "  <div class=\"mb-5\">
    <div id=\"content\" class=\"d-flex px-5 gap-4 flex-wrap justify-content-center align-items-center my-5\">
      
        <div><h1 style=\"color: #162F65;\">Welcome back!</h1>
          <img class=\"img-fluid\" src=\"";
        // line 13
        echo ($context["momdad"] ?? null);
        echo "\" alt=\"\" width=\"600px\">
                
        </div>
        <div class=\"col-sm-4 login-container mb-5\">
          <div class=\"well\">
            <div class=\"d-flex justify-content-center\">
              <img src=\"";
        // line 19
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" width=\"200px\"></div>
            <form action=\"";
        // line 20
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"px-5\">
              <div class=\"form-group\">
                ";
        // line 23
        echo "                <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                ";
        // line 27
        echo "                <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              <div class=\"d-flex gap-4 flex-wrap justify-content-center\">
                <input type=\"submit\" value=\"";
        // line 29
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn px-4\"/ style=\"background-color: #162F65; color: #f6c96d;\">
                <a href=\"";
        // line 30
        echo ($context["register"] ?? null);
        echo "\" class=\"btn px-4\" style=\"background-color: #f6c96d; color: #162F65;\"/>Register</a>
              </div>
              ";
        // line 32
        if (($context["redirect"] ?? null)) {
            // line 33
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 35
        echo "              <div class=\"d-flex justify-content-center my-3\">
                <a href=\"";
        // line 36
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"text-align-center text-black\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              </div>
            </form>
          </div>
        </div>
      
    </div>
  </div>
</div>
";
        // line 45
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
        return array (  133 => 45,  119 => 36,  116 => 35,  110 => 33,  108 => 32,  103 => 30,  99 => 29,  91 => 27,  82 => 23,  77 => 20,  73 => 19,  64 => 13,  58 => 9,  52 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/login.twig", "");
    }
}
