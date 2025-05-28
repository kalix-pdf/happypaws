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

/* __string_template__c1149af13f43f2f82ce5210ad544b1d0a905ab6ae1c99e78d05796b6138b0fd8 */
class __TwigTemplate_e9cd8d2a3aae7510aecf37b50d5e70b0754080907b583c37a241e0818bb3aadc extends Template
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
        echo "<style>
  .dropdown-menu {
    min-width: 100% !important; 
  }
</style>

<div class=\"list-group\">
  ";
        // line 8
        if ( !($context["logged"] ?? null)) {
            // line 9
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">Forgot Password</a>
  ";
        }
        // line 11
        echo "  
  ";
        // line 12
        if (($context["logged"] ?? null)) {
            // line 13
            echo "  <div class=\"dropdown w-100\">
    <button type=\"button\" class=\"btn btn-info dropdown-toggle w-100 text-start\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
      My Account
    </button>
    <ul class=\"dropdown-menu w-100\">
      <li><a class=\"dropdown-item\" href=\"";
            // line 18
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 19
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 20
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 21
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
    </ul>
  </div>

  ";
            // line 31
            echo "  ";
            // line 32
            echo "  ";
            // line 33
            echo "  ";
            // line 34
            echo "  
  ";
        }
        // line 36
        echo "  ";
        if (($context["logged"] ?? null)) {
            // line 37
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c1149af13f43f2f82ce5210ad544b1d0a905ab6ae1c99e78d05796b6138b0fd8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  114 => 37,  111 => 36,  107 => 34,  105 => 33,  103 => 32,  101 => 31,  92 => 21,  86 => 20,  80 => 19,  74 => 18,  67 => 13,  65 => 12,  62 => 11,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c1149af13f43f2f82ce5210ad544b1d0a905ab6ae1c99e78d05796b6138b0fd8", "");
    }
}
