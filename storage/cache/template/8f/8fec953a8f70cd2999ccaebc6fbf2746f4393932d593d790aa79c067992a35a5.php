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

/* __string_template__b40b800382d57e0f9d1f5f655ee0121e7dc9fb8d7dc8beb3a8e097f8794f67d9 */
class __TwigTemplate_be32e9d2f010c5a5155b6dd7ad6b5308bde28f5c7bfec9dbb58048a5262f9c50 extends Template
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
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.5s ease;
  }

  .custom-dropdown.show {
    max-height: 500px; /* enough to show all content */
  }

  .dropdown-content {
    border-radius: 0.375rem;
    background-color: white;
    padding: 0.5rem 0;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  }

  .dropdown-item {
    padding: 0.5rem 1rem;
    display: block;
    color: #000;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .dropdown-item:hover {
    background-color: #f8f9fa;
  }

  .dropdown-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    width: 100%;
    background: none;
    border: none;
    font-weight: 600;
    padding: 0.5rem 1rem;
  }

  .arrow {
    transition: transform 0.3s ease;
  }

  .arrow.rotate {
    transform: rotate(180deg);
  }
</style>

<div class=\"container\">
  <ul class=\"list-group\">
    ";
        // line 54
        if ( !($context["logged"] ?? null)) {
            // line 55
            echo "    <li class=\"list-group-item\">
      <a href=\"";
            // line 56
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
      <a href=\"";
            // line 57
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
      <a href=\"";
            // line 58
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">Forgot Password</a>
    </li>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (($context["logged"] ?? null)) {
            // line 63
            echo "    <li class=\"list-group-item\">
      <button id=\"dropdownBtn\" class=\"dropdown-toggle\">
        My Account
        <span id=\"dropdownIcon\" class=\"arrow\">▼</span>
      </button>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 70
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 71
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 72
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
    </li>
    ";
        }
        // line 77
        echo "
    <li class=\"list-group-item\">
      <a href=\"\" class=\"\">My Purchase</a>
    </li>

    ";
        // line 82
        if (($context["logged"] ?? null)) {
            // line 83
            echo "    <li class=\"list-group-item\">
      <a href=\"";
            // line 84
            echo ($context["logout"] ?? null);
            echo "\" class=\"text-decoration-none\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    </li>
    ";
        }
        // line 87
        echo "  </ul>
</div>

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
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b40b800382d57e0f9d1f5f655ee0121e7dc9fb8d7dc8beb3a8e097f8794f67d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  163 => 84,  160 => 83,  158 => 82,  151 => 77,  141 => 72,  135 => 71,  129 => 70,  120 => 63,  118 => 62,  115 => 61,  109 => 58,  103 => 57,  97 => 56,  94 => 55,  92 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b40b800382d57e0f9d1f5f655ee0121e7dc9fb8d7dc8beb3a8e097f8794f67d9", "");
    }
}
