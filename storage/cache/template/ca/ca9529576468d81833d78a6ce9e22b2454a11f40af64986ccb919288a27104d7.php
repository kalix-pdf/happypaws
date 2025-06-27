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

/* __string_template__761568805b1baa31b392024e84f5c6d4c758017259fcf2fb01126b65a51a4871 */
class __TwigTemplate_f3ea2351bf64fd717d5181dc71a4d96abef6de694d343cae924a97a3e509048e extends Template
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
  .list-group-item.active {
    background-color: #162F65;
  }
</style>

<div class=\"container my-5\">
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
            echo "    <li class=\"list-group-item list-group-item-action btn ";
            if ((((($context["route"] ?? null) == "account/edit") || (            // line 72
($context["route"] ?? null) == "account/password")) || (($context["route"] ?? null) == "account/address"))) {
                echo "active";
            }
            echo "\">
      <a id=\"dropdownBtn\" class=\"btn drop-tog\">
        My Account
        <span id=\"dropdownIcon\" class=\"arrow\">▼</span>
      </a>
      <div id=\"customDropdown\" class=\"custom-dropdown mt-2\">
        <div class=\"dropdown-content\">
          <a class=\"dropdown-item\" href=\"";
            // line 79
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 80
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 81
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
        </div>
      </div>
    </li>
    ";
        }
        // line 86
        echo "
    <li class=\"list-group-item list-group-item-action ";
        // line 87
        if ((($context["route"] ?? null) == "account/account")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 88
        echo ($context["account"] ?? null);
        echo "\">
        My Purchase
      </a>
    </li>
    ";
        // line 92
        if (($context["sellmenu"] ?? null)) {
            // line 93
            echo "      <li class=\"list-group-item list-group-item-action \">
        ";
            // line 94
            echo ($context["sellmenu"] ?? null);
            echo "
      </li>
    ";
        }
        // line 97
        echo "    <li class=\"list-group-item list-group-item-action ";
        if ((($context["route"] ?? null) == "account/wishlist")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 98
        echo ($context["wishlist"] ?? null);
        echo "\">
        ";
        // line 99
        echo ($context["text_wishlist"] ?? null);
        echo "
      </a>
    </li>
     <li class=\"list-group-item list-group-item-action ";
        // line 102
        if (((($context["route"] ?? null) == "account/order") || (($context["route"] ?? null) == "account/order/info"))) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 103
        echo ($context["order"] ?? null);
        echo "\">
        ";
        // line 104
        echo ($context["text_order"] ?? null);
        echo "
      </a>
    </li>
    <li class=\"list-group-item list-group-item-action ";
        // line 107
        if ((($context["route"] ?? null) == "account/transaction")) {
            echo "active text-white";
        }
        echo "\">
      <a class=\"btn\" href=\"";
        // line 108
        echo ($context["transaction"] ?? null);
        echo "\">
        ";
        // line 109
        echo ($context["text_transaction"] ?? null);
        echo "
      </a>
    </li>

    ";
        // line 113
        if (($context["logged"] ?? null)) {
            // line 114
            echo "    <li class=\"list-group-item list-group-item-action\">
      <a href=\"";
            // line 115
            echo ($context["logout"] ?? null);
            echo "\" class=\"btn\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    </li>
    ";
        }
        // line 118
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
        return "__string_template__761568805b1baa31b392024e84f5c6d4c758017259fcf2fb01126b65a51a4871";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 118,  246 => 115,  243 => 114,  241 => 113,  234 => 109,  230 => 108,  224 => 107,  218 => 104,  214 => 103,  208 => 102,  202 => 99,  198 => 98,  191 => 97,  185 => 94,  182 => 93,  180 => 92,  173 => 88,  167 => 87,  164 => 86,  154 => 81,  148 => 80,  142 => 79,  130 => 72,  128 => 71,  126 => 70,  123 => 69,  117 => 66,  111 => 65,  105 => 64,  102 => 63,  100 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__761568805b1baa31b392024e84f5c6d4c758017259fcf2fb01126b65a51a4871", "");
    }
}
