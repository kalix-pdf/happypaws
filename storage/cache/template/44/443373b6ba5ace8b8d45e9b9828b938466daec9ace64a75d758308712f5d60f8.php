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

/* __string_template__e61d0cc1882462977a5655bddcfd202a777204a270b33ccec2bd290a61bb97cd */
class __TwigTemplate_b7496bf7666711c706febe815d529f7ee5810cdb5300168814afdac94cb08cdd extends Template
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

  .transition {
    transition: transform 0.3s ease;
  }
  .rotate {
    transform: rotate(180deg);
  }
</style>

<div class=\"list-group\">
  ";
        // line 39
        if ( !($context["logged"] ?? null)) {
            // line 40
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
        // line 42
        echo "  
  ";
        // line 43
        if (($context["logged"] ?? null)) {
            // line 44
            echo "  <div class=\"mb-2\">
    <button id=\"dropdownBtn\" class=\"btn btn-info\">My Account
    <i id=\"dropdownIcon\" class=\"bi bi-chevron-down transition\"></i>
    </button>
    <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
      <div class=\"dropdown-content\">
        <a class=\"dropdown-item\" href=\"";
            // line 50
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 51
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
        <a class=\"dropdown-item\" href=\"";
            // line 52
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
      </div>
    </div>
  </div>
";
        }
        // line 57
        echo "
";
        // line 58
        if (($context["logged"] ?? null)) {
            // line 59
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
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
        return "__string_template__e61d0cc1882462977a5655bddcfd202a777204a270b33ccec2bd290a61bb97cd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 70,  147 => 69,  145 => 68,  143 => 67,  141 => 61,  133 => 59,  131 => 58,  128 => 57,  118 => 52,  112 => 51,  106 => 50,  98 => 44,  96 => 43,  93 => 42,  79 => 40,  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e61d0cc1882462977a5655bddcfd202a777204a270b33ccec2bd290a61bb97cd", "");
    }
}
