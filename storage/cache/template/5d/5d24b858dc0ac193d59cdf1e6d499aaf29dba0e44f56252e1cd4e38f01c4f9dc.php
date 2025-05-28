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

/* __string_template__9b6ae3f1f7de61a49a65c77395c27cdbbbefc2f86259d43d9b3a885ba2f4f268 */
class __TwigTemplate_4ea994ad2eee225db7ab9539348ec60f7c10085f58beee0724baecc8aaee0ea7 extends Template
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

</style>

<div class=\"list-group\">
  ";
        // line 35
        if ( !($context["logged"] ?? null)) {
            // line 36
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
        // line 38
        echo "  
  ";
        // line 39
        if (($context["logged"] ?? null)) {
            // line 40
            echo "  <div class=\"mb-2\">
    <button id=\"dropdownBtn\" class=\"btn btn-info\">My Account
    </button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"";
            // line 45
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 46
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 47
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
      </div>
    </div>
  </div>
";
        }
        // line 52
        echo "
";
        // line 53
        if (($context["logged"] ?? null)) {
            // line 54
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
";
        }
        // line 56
        echo "  ";
        // line 62
        echo "  ";
        // line 63
        echo "  ";
        // line 64
        echo "  ";
        // line 65
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
        return "__string_template__9b6ae3f1f7de61a49a65c77395c27cdbbbefc2f86259d43d9b3a885ba2f4f268";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 65,  142 => 64,  140 => 63,  138 => 62,  136 => 56,  128 => 54,  126 => 53,  123 => 52,  113 => 47,  107 => 46,  101 => 45,  94 => 40,  92 => 39,  89 => 38,  75 => 36,  73 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9b6ae3f1f7de61a49a65c77395c27cdbbbefc2f86259d43d9b3a885ba2f4f268", "");
    }
}
