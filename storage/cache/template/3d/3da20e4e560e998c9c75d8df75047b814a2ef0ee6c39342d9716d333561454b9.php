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

/* __string_template__c8bd867f9ca9b3b57862c47ac3cc12721fc1270bd82880ccab8c7d70f7ae3854 */
class __TwigTemplate_9f259137d2843eaff84fe93e1bd1931bde1df71e866fbedddc3684952a9e6292 extends Template
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
    .custom-dropdown {
      display: none;
      position: absolute;
      top: 100%; 
      left: 0;
      z-index: 1000;
      min-width: 100%;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 0.375rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    }
    .custom-dropdown.show {
      display: block;
    }
</style>

<div class=\"list-group\">
  ";
        // line 20
        if ( !($context["logged"] ?? null)) {
            // line 21
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
        // line 23
        echo "  
  ";
        // line 24
        if (($context["logged"] ?? null)) {
            // line 25
            echo "  <div class=\"position-relative d-inline-block\">
    <button id=\"dropdownBtn\" class=\"btn btn-primary\">My Account</button>
    <div id=\"customDropdown\" class=\"custom-dropdown p-2\">
      <li><a class=\"dropdown-item\" href=\"";
            // line 28
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 29
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 30
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 31
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
    </ul>
  </div>

  ";
            // line 41
            echo "  ";
            // line 42
            echo "  ";
            // line 43
            echo "  ";
            // line 44
            echo "  
  ";
        }
        // line 46
        echo "  ";
        // line 49
        echo "</div>


<script>
    const btn = document.getElementById('dropdownBtn');
    const dropdown = document.getElementById('customDropdown');

    btn.addEventListener('click', () => {
      dropdown.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
      if (!btn.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
      }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__c8bd867f9ca9b3b57862c47ac3cc12721fc1270bd82880ccab8c7d70f7ae3854";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  121 => 46,  117 => 44,  115 => 43,  113 => 42,  111 => 41,  102 => 31,  96 => 30,  90 => 29,  84 => 28,  79 => 25,  77 => 24,  74 => 23,  60 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c8bd867f9ca9b3b57862c47ac3cc12721fc1270bd82880ccab8c7d70f7ae3854", "");
    }
}
