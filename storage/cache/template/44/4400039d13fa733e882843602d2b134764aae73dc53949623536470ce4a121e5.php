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

/* __string_template__168c056a2ff140f6c36fdbb5afa5372786625f8d3673a1edb1d80da440b25ae4 */
class __TwigTemplate_9243a73acc8d66480d83270f6e0816c4184a7d4e45adace2ff634cfd63c2316f extends Template
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
    color: white;
    font-weight: bold;
}
</style>

<div class=\"container\">
  <ul class=\"list-group\">
    ";
        // line 59
        if ( !($context["logged"] ?? null)) {
            // line 60
            echo "    <li class=\"list-group-item\">
      <a href=\"";
            // line 61
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
      <a href=\"";
            // line 62
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
      <a href=\"";
            // line 63
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">Forgot Password</a>
    </li>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($context["logged"] ?? null)) {
            // line 68
            echo "    <li class=\"list-group-item list-group-item-action\">
      <button id=\"dropdownBtn\" class=\"btn drop-tog\">
        My Account
        <span id=\"dropdownIcon\" class=\"arrow\">▼</span>
      </button>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 75
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 76
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 77
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
    </li>
    ";
        }
        // line 82
        echo "
    <li class=\"list-group-item list-group-item-action ";
        // line 83
        if ((($context["route"] ?? null) == "account/account")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 84
        echo ($context["account"] ?? null);
        echo "\">
        My Purchase
      </a>
    </li>
    <li class=\"list-group-item list-group-item-action ";
        // line 88
        if ((($context["route"] ?? null) == "account/transaction")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 89
        echo ($context["transaction"] ?? null);
        echo "\">
        ";
        // line 90
        echo ($context["text_transaction"] ?? null);
        echo "
      </a>
    </li>

    ";
        // line 94
        if (($context["logged"] ?? null)) {
            // line 95
            echo "    <li class=\"list-group-item list-group-item-action\">
      <a href=\"";
            // line 96
            echo ($context["logout"] ?? null);
            echo "\" class=\"btn\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    </li>
    ";
        }
        // line 99
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
        return "__string_template__168c056a2ff140f6c36fdbb5afa5372786625f8d3673a1edb1d80da440b25ae4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 99,  194 => 96,  191 => 95,  189 => 94,  182 => 90,  178 => 89,  172 => 88,  165 => 84,  159 => 83,  156 => 82,  146 => 77,  140 => 76,  134 => 75,  125 => 68,  123 => 67,  120 => 66,  114 => 63,  108 => 62,  102 => 61,  99 => 60,  97 => 59,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__168c056a2ff140f6c36fdbb5afa5372786625f8d3673a1edb1d80da440b25ae4", "");
    }
}
