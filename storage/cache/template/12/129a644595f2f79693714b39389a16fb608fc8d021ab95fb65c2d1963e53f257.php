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

/* __string_template__cf4775f18da8550430b1aebad846cbf0ee660eb6f1ca7f02b5124bcc85e271ab */
class __TwigTemplate_1fc716dbfc7f3be15f3a9a37d448989cf74221d4b268ea6479a4858e70a3afdf extends Template
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
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">

<style>
  .custom-dropdown {
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.8s ease;
  }

  .custom-dropdown.show {
    max-height: 300px;
  }

  .dropdown-content {
    border-radius: 0.375rem;
    background-color: white;
    padding: 0.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  }

  .dropdown-item {
    padding: 0.5rem;
    display: block;
    color: #000;
    text-decoration: none;
  }

  .dropdown-item:hover {
    background-color: #f8f9fa;
  }

    .rotate-icon {
      transition: transform 0.3s ease;
    }
    .rotate-icon.rotate {
      transform: rotate(180deg);
      
    }
</style>

<div class=\"list-group\">
  ";
        // line 42
        if ( !($context["logged"] ?? null)) {
            // line 43
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
        // line 45
        echo "  
  ";
        // line 46
        if (($context["logged"] ?? null)) {
            // line 47
            echo "  <div class=\"mb-2\">
    <button id=\"dropdownBtn\" class=\"btn btn-info\">My Account
    <i id=\"dropdownIcon\" class=\"bi bi-chevron-down rotate-icon\"></i>
    </button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"";
            // line 53
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 54
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 55
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
      </div>
    </div>
  </div>
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["logged"] ?? null)) {
            // line 62
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
";
        }
        // line 64
        echo "  ";
        // line 70
        echo "  ";
        // line 71
        echo "  ";
        // line 72
        echo "  ";
        // line 73
        echo "</div>

<script>
    const btn = document.getElementById('dropdownBtn');
    const dropdown = document.getElementById('customDropdown');
    const icon = document.getElementById('dropdownIcon');

    btn.addEventListener('click', () => {
      dropdown.classList.toggle('show');
      icon.classList.toggle('rotate');
    });

    document.addEventListener('click', (e) => {
      if (!btn.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
        icon.classList.remove('rotate');
      }
    });
  </script>";
    }

    public function getTemplateName()
    {
        return "__string_template__cf4775f18da8550430b1aebad846cbf0ee660eb6f1ca7f02b5124bcc85e271ab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 73,  150 => 72,  148 => 71,  146 => 70,  144 => 64,  136 => 62,  134 => 61,  131 => 60,  121 => 55,  115 => 54,  109 => 53,  101 => 47,  99 => 46,  96 => 45,  82 => 43,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cf4775f18da8550430b1aebad846cbf0ee660eb6f1ca7f02b5124bcc85e271ab", "");
    }
}
