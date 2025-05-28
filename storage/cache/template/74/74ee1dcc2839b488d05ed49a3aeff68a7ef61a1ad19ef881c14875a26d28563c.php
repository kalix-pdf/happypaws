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

/* __string_template__b10bf782532d955eb8839a01c932e4931a3c2c2fcc3855feaac74e5944ef0520 */
class __TwigTemplate_14eb14c9bf9f8956ef947c9f3a43c939bcdb95211067437710569e5a44ef0e0d extends Template
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
      transition: max-height 0.4s ease;
    }

    .custom-dropdown.show {
      max-height: 500px; /* set based on content height */
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
            echo "  <div class=\"d-inline-block\">
    <button id=\"dropdownBtn\" class=\"btn btn-primary\">Toggle Dropdown</button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else</a>
      </div>
    </div>
  </div>

";
        }
        // line 49
        echo "

  ";
        // line 57
        echo "  ";
        // line 58
        echo "  ";
        // line 59
        echo "  ";
        // line 60
        echo "
  ";
        // line 64
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
        return "__string_template__b10bf782532d955eb8839a01c932e4931a3c2c2fcc3855feaac74e5944ef0520";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  115 => 60,  113 => 59,  111 => 58,  109 => 57,  105 => 49,  91 => 37,  89 => 36,  86 => 35,  72 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b10bf782532d955eb8839a01c932e4931a3c2c2fcc3855feaac74e5944ef0520", "");
    }
}
