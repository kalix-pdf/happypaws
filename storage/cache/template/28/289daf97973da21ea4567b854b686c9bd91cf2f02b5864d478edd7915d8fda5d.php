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

/* __string_template__dc2921b4cffcb58187b64df69c6f112896414399ccbb04c95ba0219a9fcdb8fe */
class __TwigTemplate_5f65415ac74a4485e2f9dc6e860e302189ed3525f17582017f51bd87b19fcc1c extends Template
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

<div class=\"container\">
  <ul class=\"list-group\">
  ";
        // line 36
        if ( !($context["logged"] ?? null)) {
            // line 37
            echo "  <li class=\"list-group-item\">
    <a href=\"";
            // line 38
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
  </li>
  ";
        }
        // line 41
        echo "  
  ";
        // line 42
        if (($context["logged"] ?? null)) {
            // line 43
            echo "  <li class=\"list-group-item\">
      <button id=\"dropdownBtn\" class=\"btn\">My Account
      </button>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 48
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 49
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 50
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
  </li>
";
        }
        // line 55
        echo "<li class=\"list-group-item\">
    <a href=\"\" class=\"\">My Purchase</a>
</li>
";
        // line 58
        if (($context["logged"] ?? null)) {
            // line 59
            echo "  <li class=\"list-group-item\">
    <a href=\"";
            // line 60
            echo ($context["logout"] ?? null);
            echo "\" class=\"text-decoration-none\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  </li>
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
  </script>";
    }

    public function getTemplateName()
    {
        return "__string_template__dc2921b4cffcb58187b64df69c6f112896414399ccbb04c95ba0219a9fcdb8fe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 72,  151 => 71,  149 => 70,  147 => 69,  145 => 63,  137 => 60,  134 => 59,  132 => 58,  127 => 55,  117 => 50,  111 => 49,  105 => 48,  98 => 43,  96 => 42,  93 => 41,  79 => 38,  76 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dc2921b4cffcb58187b64df69c6f112896414399ccbb04c95ba0219a9fcdb8fe", "");
    }
}
