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

/* __string_template__32f26f844acc2602d22a976b14fc96571f005121d8a4e3505c460cee47a0245f */
class __TwigTemplate_6bd1b7cb245f5a2fc35a79e965fe19ec5a9b9fa87898bf3ad518af48dcaaa99f extends Template
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
            echo "  <li class=\"list-group-item list-group-item-primary\">
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
            echo "  <li class=\"list-group-item list-group-item-primary\">
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
        // line 56
        echo "
";
        // line 57
        if (($context["logged"] ?? null)) {
            // line 58
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
";
        }
        // line 60
        echo "  ";
        // line 66
        echo "  ";
        // line 67
        echo "  ";
        // line 68
        echo "  ";
        // line 69
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
        return "__string_template__32f26f844acc2602d22a976b14fc96571f005121d8a4e3505c460cee47a0245f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 69,  147 => 68,  145 => 67,  143 => 66,  141 => 60,  133 => 58,  131 => 57,  128 => 56,  117 => 50,  111 => 49,  105 => 48,  98 => 43,  96 => 42,  93 => 41,  79 => 38,  76 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__32f26f844acc2602d22a976b14fc96571f005121d8a4e3505c460cee47a0245f", "");
    }
}
