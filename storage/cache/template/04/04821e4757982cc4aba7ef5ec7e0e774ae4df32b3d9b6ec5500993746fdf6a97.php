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

/* __string_template__0f3816c5e49fa91ffca5586bc87a8185157c1a672605d8ff36a2d8788ea9da27 */
class __TwigTemplate_2484c59df073410f2d9cce8463ba033aff2e59094977386c4a4c673ac9708451 extends Template
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
            echo "    <li class=\"list-group-item list-group-item-action\">
      <button id=\"dropdownBtn\" class=\"btn drop-tog\">
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
    <li class=\"list-group-item list-group-item-action\">
      <a class=\"btn text-white\" href=\"";
        // line 79
        echo ($context["account"] ?? null);
        echo "\">
        My Purchase
      </a>
    </li>
    <li class=\"list-group-item list-group-item-action\">
      <a class=\"btn\" href=\"";
        // line 84
        echo ($context["transaction"] ?? null);
        echo "\">
        ";
        // line 85
        echo ($context["text_transaction"] ?? null);
        echo "
      </a>
    </li>

    ";
        // line 89
        if (($context["logged"] ?? null)) {
            // line 90
            echo "    <li class=\"list-group-item list-group-item-action\">
      <a href=\"";
            // line 91
            echo ($context["logout"] ?? null);
            echo "\" class=\"btn\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    </li>
    ";
        }
        // line 94
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

  const listItems = document.querySelectorAll('.list-group-item.list-group-item-action');

  listItems.forEach(item => {
    item.addEventListener('click', function () {
      listItems.forEach(el => el.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0f3816c5e49fa91ffca5586bc87a8185157c1a672605d8ff36a2d8788ea9da27";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 94,  179 => 91,  176 => 90,  174 => 89,  167 => 85,  163 => 84,  155 => 79,  151 => 77,  141 => 72,  135 => 71,  129 => 70,  120 => 63,  118 => 62,  115 => 61,  109 => 58,  103 => 57,  97 => 56,  94 => 55,  92 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f3816c5e49fa91ffca5586bc87a8185157c1a672605d8ff36a2d8788ea9da27", "");
    }
}
