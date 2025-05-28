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

/* __string_template__6de595bdac6735004625a803cbd2a051f9bd6ebcc56dd6e16305030a896f521a */
class __TwigTemplate_885f9f0073bbd0410a0f3677175880ffc9b138a22fafb61f8fbf63bb5ca3524f extends Template
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

  .drop-tog {
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

  .list-group-item.active a {
    color: #ffc766;
    font-weight: bold;
  }
  .list-group-item .active {
    background-color: #162F65;
  }
</style>

<div class=\"container\">
  <ul class=\"list-group\">
    ";
        // line 62
        if ( !($context["logged"] ?? null)) {
            // line 63
            echo "    <li class=\"list-group-item\">
      <a href=\"";
            // line 64
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
      <a href=\"";
            // line 65
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
      <a href=\"";
            // line 66
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">Forgot Password</a>
    </li>
    ";
        }
        // line 69
        echo "
    ";
        // line 70
        if (($context["logged"] ?? null)) {
            // line 71
            echo "    <li class=\"list-group-item list-group-item-action\">
      <button id=\"dropdownBtn\" class=\"btn drop-tog\">
        My Account
        <span id=\"dropdownIcon\" class=\"arrow\">▼</span>
      </button>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 78
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 79
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 80
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
    </li>
    ";
        }
        // line 85
        echo "
    <li class=\"list-group-item list-group-item-action ";
        // line 86
        if ((($context["route"] ?? null) == "account/account")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 87
        echo ($context["account"] ?? null);
        echo "\">
        My Purchase
      </a>
    </li>
    <li class=\"list-group-item list-group-item-action ";
        // line 91
        if ((($context["route"] ?? null) == "account/transaction")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 92
        echo ($context["transaction"] ?? null);
        echo "\">
        ";
        // line 93
        echo ($context["text_transaction"] ?? null);
        echo "
      </a>
    </li>

    ";
        // line 97
        if (($context["logged"] ?? null)) {
            // line 98
            echo "    <li class=\"list-group-item list-group-item-action\">
      <a href=\"";
            // line 99
            echo ($context["logout"] ?? null);
            echo "\" class=\"btn\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    </li>
    ";
        }
        // line 102
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
        return "__string_template__6de595bdac6735004625a803cbd2a051f9bd6ebcc56dd6e16305030a896f521a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 102,  197 => 99,  194 => 98,  192 => 97,  185 => 93,  181 => 92,  175 => 91,  168 => 87,  162 => 86,  159 => 85,  149 => 80,  143 => 79,  137 => 78,  128 => 71,  126 => 70,  123 => 69,  117 => 66,  111 => 65,  105 => 64,  102 => 63,  100 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6de595bdac6735004625a803cbd2a051f9bd6ebcc56dd6e16305030a896f521a", "");
    }
}
