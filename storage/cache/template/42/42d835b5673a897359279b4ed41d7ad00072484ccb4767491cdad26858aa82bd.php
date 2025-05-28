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

/* __string_template__b0b572fd741819bf674779820ed60ea425866d8bbbade585cf1ce0fa51abec00 */
class __TwigTemplate_3fbf5a0ca033ba567b4f8799a6820fd1d1a463b307a3cf119b5d433d6eaac36a extends Template
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
   .custom-dropdown-menu {
  display: block;
  opacity: 0;
  transform: translateY(-10px);
  max-height: 0;
  overflow: hidden;
  transition: opacity 0.3s ease, transform 0.3s ease, max-height 0.3s ease;
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  background: white;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  padding: 0.5rem 0;
  width: 200px;
}

.custom-dropdown-menu.show {
  opacity: 1;
  transform: translateY(0);
  max-height: 500px;
  visibility: visible;
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
            echo "  <div class=\"dropdown position-relative\">
  <button class=\"btn btn-info dropdown-toggle\" type=\"button\" id=\"customDropdownBtn\">
    My Account
  </button>
  <ul class=\"dropdown-menu custom-dropdown-menu\" id=\"customDropdownMenu\">
    <li><a class=\"dropdown-item\" href=\"";
            // line 42
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
    <li><a class=\"dropdown-item\" href=\"";
            // line 43
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
    <li><a class=\"dropdown-item\" href=\"";
            // line 44
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
    <li><a class=\"dropdown-item\" href=\"";
            // line 45
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
  </ul>
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
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('customDropdownBtn');
    const menu = document.getElementById('customDropdownMenu');

    btn.addEventListener('click', function (e) {
      e.preventDefault();
      menu.classList.toggle('show');
    });

    // Optional: click outside to close dropdown
    document.addEventListener('click', function (event) {
      if (!btn.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.remove('show');
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b0b572fd741819bf674779820ed60ea425866d8bbbade585cf1ce0fa51abec00";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 65,  136 => 61,  134 => 60,  132 => 59,  130 => 58,  126 => 50,  116 => 45,  110 => 44,  104 => 43,  98 => 42,  91 => 37,  89 => 36,  86 => 35,  72 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b0b572fd741819bf674779820ed60ea425866d8bbbade585cf1ce0fa51abec00", "");
    }
}
