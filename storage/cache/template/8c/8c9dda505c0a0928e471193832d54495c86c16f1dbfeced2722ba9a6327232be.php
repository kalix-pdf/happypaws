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

/* __string_template__0342dd97b3b0c8140ef43d9032793a1e7f3144974f6ee9e6cbae6f38c6605cd8 */
class __TwigTemplate_2f0b54b2a8a9562728d46bc4394823168e01c760bdbf3c496a91e5a7b80ccf3a extends Template
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
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  }

  .dropdown-item {
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
        // line 34
        if ( !($context["logged"] ?? null)) {
            // line 35
            echo "  <li class=\"list-group-item\">
    <a href=\"";
            // line 36
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
        // line 39
        echo "  
  ";
        // line 40
        if (($context["logged"] ?? null)) {
            // line 41
            echo "  <li class=\"list-group-item\">
      <button id=\"dropdownBtn\" class=\"btn\">My Account
      </button>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 46
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 47
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 48
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
  </li>
";
        }
        // line 53
        echo "<li class=\"list-group-item\">
    <a href=\"\" class=\"\">My Purchase</a>
</li>
";
        // line 56
        if (($context["logged"] ?? null)) {
            // line 57
            echo "  <li class=\"list-group-item\">
    <a href=\"";
            // line 58
            echo ($context["logout"] ?? null);
            echo "\" class=\"text-decoration-none\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  </li>
";
        }
        // line 61
        echo "  ";
        // line 67
        echo "  ";
        // line 68
        echo "  ";
        // line 69
        echo "  ";
        // line 70
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
        return "__string_template__0342dd97b3b0c8140ef43d9032793a1e7f3144974f6ee9e6cbae6f38c6605cd8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 70,  149 => 69,  147 => 68,  145 => 67,  143 => 61,  135 => 58,  132 => 57,  130 => 56,  125 => 53,  115 => 48,  109 => 47,  103 => 46,  96 => 41,  94 => 40,  91 => 39,  77 => 36,  74 => 35,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0342dd97b3b0c8140ef43d9032793a1e7f3144974f6ee9e6cbae6f38c6605cd8", "");
    }
}
