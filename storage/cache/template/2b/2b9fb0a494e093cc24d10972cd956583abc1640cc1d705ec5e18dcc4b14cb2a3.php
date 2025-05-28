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

/* __string_template__bdc9cded82c79b56ed79e61a46fdd369a7d0ed20aea672e2ff076aa33f160059 */
class __TwigTemplate_d3c8d38874a1ef22b8c42877441359c721cbe61997366d2c1245f711e3a6c67e extends Template
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
        // line 32
        if ( !($context["logged"] ?? null)) {
            // line 33
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
        // line 35
        echo "  
  ";
        // line 36
        if (($context["logged"] ?? null)) {
            // line 37
            echo "  <div class=\"mb-2\">
    <button id=\"dropdownBtn\" class=\"btn btn-info\">My Account</button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"";
            // line 41
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 42
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 43
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
      </div>
    </div>
  </div>
";
        }
        // line 48
        echo "
";
        // line 49
        if (($context["logged"] ?? null)) {
            // line 50
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
";
        }
        // line 52
        echo "  ";
        // line 58
        echo "  ";
        // line 59
        echo "  ";
        // line 60
        echo "  ";
        // line 61
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
        return "__string_template__bdc9cded82c79b56ed79e61a46fdd369a7d0ed20aea672e2ff076aa33f160059";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  138 => 60,  136 => 59,  134 => 58,  132 => 52,  124 => 50,  122 => 49,  119 => 48,  109 => 43,  103 => 42,  97 => 41,  91 => 37,  89 => 36,  86 => 35,  72 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bdc9cded82c79b56ed79e61a46fdd369a7d0ed20aea672e2ff076aa33f160059", "");
    }
}
