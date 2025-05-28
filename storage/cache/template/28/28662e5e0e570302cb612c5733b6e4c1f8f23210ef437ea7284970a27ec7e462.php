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

/* __string_template__98f020cbc918941c32c96be2eb938399f9c736595b253123f5f6f3eae6a8e3b0 */
class __TwigTemplate_a46a64b4d734756618590fcdc3e07a6efd688dcedc71e8d358e659a8aa69cfee extends Template
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
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      min-width: 100%;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 0.375rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
      opacity: 0;
      transform: translateY(-10px);
      pointer-events: none;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .custom-dropdown.show {
      opacity: 1;
      transform: translateY(0);
      pointer-events: auto;
    }
</style>

<div class=\"list-group\">
  ";
        // line 26
        if ( !($context["logged"] ?? null)) {
            // line 27
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
        // line 29
        echo "  
  ";
        // line 30
        if (($context["logged"] ?? null)) {
            // line 31
            echo "  <div class=\"position-relative d-inline-block\">
    <button id=\"dropdownBtn\" class=\"btn btn-primary\">My Account</button>
    <div id=\"customDropdown\" class=\"custom-dropdown p-2\">
      <li><a class=\"dropdown-item\" href=\"";
            // line 34
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 35
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 36
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 37
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
    </ul>
  </div>

  ";
            // line 47
            echo "  ";
            // line 48
            echo "  ";
            // line 49
            echo "  ";
            // line 50
            echo "  
  ";
        }
        // line 52
        echo "  ";
        // line 55
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
        return "__string_template__98f020cbc918941c32c96be2eb938399f9c736595b253123f5f6f3eae6a8e3b0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  127 => 52,  123 => 50,  121 => 49,  119 => 48,  117 => 47,  108 => 37,  102 => 36,  96 => 35,  90 => 34,  85 => 31,  83 => 30,  80 => 29,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__98f020cbc918941c32c96be2eb938399f9c736595b253123f5f6f3eae6a8e3b0", "");
    }
}
