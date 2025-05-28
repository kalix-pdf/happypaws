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

/* __string_template__5f9c4d805d51850c59cbed82eed4b730558c341f2caa1b2203ebc397d827e1b0 */
class __TwigTemplate_07b9539ee084697f9fe1c39dcab35160bb9c6a7f237ae7c7e1b7681a66ea98a2 extends Template
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

  .transition {
    transition: transform 0.3s ease;
  }
  .rotate {
    transform: rotate(180deg);
  }
</style>

<div class=\"list-group\">
  ";
        // line 41
        if ( !($context["logged"] ?? null)) {
            // line 42
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
        // line 44
        echo "  
  ";
        // line 45
        if (($context["logged"] ?? null)) {
            // line 46
            echo "  <div class=\"mb-2\">
    <button id=\"dropdownBtn\" class=\"btn btn-info\">My Account
    <i id=\"dropdownIcon\" class=\"bi bi-chevron-down transition\"></i>
    </button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"";
            // line 52
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 53
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 54
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
      </div>
    </div>
  </div>
";
        }
        // line 59
        echo "
";
        // line 60
        if (($context["logged"] ?? null)) {
            // line 61
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
";
        }
        // line 63
        echo "  ";
        // line 69
        echo "  ";
        // line 70
        echo "  ";
        // line 71
        echo "  ";
        // line 72
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
        return "__string_template__5f9c4d805d51850c59cbed82eed4b730558c341f2caa1b2203ebc397d827e1b0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 72,  149 => 71,  147 => 70,  145 => 69,  143 => 63,  135 => 61,  133 => 60,  130 => 59,  120 => 54,  114 => 53,  108 => 52,  100 => 46,  98 => 45,  95 => 44,  81 => 42,  79 => 41,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5f9c4d805d51850c59cbed82eed4b730558c341f2caa1b2203ebc397d827e1b0", "");
    }
}
