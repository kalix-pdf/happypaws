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

/* __string_template__e6332d082242cd3b44c27b71afc862678bd587b785418689ab59684df4247a5e */
class __TwigTemplate_77928a62b388de0cfb84522cda1dbbe154621b1dc1501c5bae731121bec6b879 extends Template
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
      border: 1px solid #ccc;
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
        // line 33
        if ( !($context["logged"] ?? null)) {
            // line 34
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
        // line 36
        echo "  
  ";
        // line 37
        if (($context["logged"] ?? null)) {
            // line 38
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
        // line 50
        echo "

  ";
        // line 58
        echo "  ";
        // line 59
        echo "  ";
        // line 60
        echo "  ";
        // line 61
        echo "
  ";
        // line 65
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
        return "__string_template__e6332d082242cd3b44c27b71afc862678bd587b785418689ab59684df4247a5e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 65,  116 => 61,  114 => 60,  112 => 59,  110 => 58,  106 => 50,  92 => 38,  90 => 37,  87 => 36,  73 => 34,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e6332d082242cd3b44c27b71afc862678bd587b785418689ab59684df4247a5e", "");
    }
}
