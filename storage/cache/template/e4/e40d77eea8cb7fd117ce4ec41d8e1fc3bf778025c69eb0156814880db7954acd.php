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
class __TwigTemplate_c156ed60d1dcddd56eb1ddf3c8c6e06a8f715d900bdc8511593d1fce562dab56 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\">
  
  ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 7
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 8
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 10
        echo "  <div class=\"mb-5\">
    <div id=\"content\" class=\"d-flex px-5 gap-4 flex-wrap justify-content-center align-items-center my-5\">
      
        <div><h1 style=\"color: #162F65;\">Welcome back!</h1>
          <img class=\"img-fluid\" src=\"";
        // line 14
        echo ($context["momdad"] ?? null);
        echo "\" alt=\"\" width=\"600px\">
                
        </div>
        <div class=\"col-sm-4 login-container mb-5\">
          <div class=\"well\">
            <div class=\"d-flex justify-content-center\">
              <img src=\"";
        // line 20
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" width=\"200px\"></div>
            <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"px-5\">
              <div class=\"form-group\">
                ";
        // line 24
        echo "                <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                ";
        // line 28
        echo "                <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              <div class=\"d-flex gap-4 flex-wrap justify-content-center\">
                <input type=\"submit\" value=\"";
        // line 30
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn px-4\"/ style=\"background-color: #162F65; color: #f6c96d;\">
                <a href=\"";
        // line 31
        echo ($context["register"] ?? null);
        echo "\" class=\"btn px-4\" style=\"background-color: #f6c96d; color: #162F65;\"/>Register</a>
              </div>
              ";
        // line 33
        if (($context["redirect"] ?? null)) {
            // line 34
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 36
        echo "              <div class=\"d-flex justify-content-center my-3\">
                <a href=\"";
        // line 37
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
        // line 46
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
        return array (  135 => 46,  121 => 37,  118 => 36,  112 => 34,  110 => 33,  105 => 31,  101 => 30,  93 => 28,  84 => 24,  79 => 21,  75 => 20,  66 => 14,  60 => 10,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/login.twig", "");
    }
}
