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

/* __string_template__a267c63667926dc0323c491c9ab35ba796dab4912171292ce161f2b25a7ac3d1 */
class __TwigTemplate_022d2dcb753348884029a17ddc03fd1367377c0df520dd1f7bc92a6f728792d4 extends Template
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
    .animated-menu {
  display: block;
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  transform: translateY(-10px);
  transition: all 0.3s ease;
  visibility: hidden;
}

.animated-menu.show {
  max-height: 500px;
  opacity: 1;
  transform: translateY(0);
  visibility: visible;
}

</style>

<div class=\"list-group\">
  ";
        // line 22
        if ( !($context["logged"] ?? null)) {
            // line 23
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
        // line 25
        echo "  
  ";
        // line 26
        if (($context["logged"] ?? null)) {
            // line 27
            echo "  <div class=\"dropdown dropdown-animated\">
    <button class=\"btn btn-info dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" id=\"dropdownAnimatedBtn\">
      My Account
    </button>
    <ul class=\"dropdown-menu animated-menu\" aria-labelledby=\"dropdownAnimatedBtn\">
      <li><a class=\"dropdown-item\" href=\"";
            // line 32
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 33
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 34
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a class=\"dropdown-item\" href=\"";
            // line 35
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
    </ul>
  </div>
";
        }
        // line 39
        echo "

  ";
        // line 47
        echo "  ";
        // line 48
        echo "  ";
        // line 49
        echo "  ";
        // line 50
        echo "
  ";
        // line 54
        echo "</div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('dropdownAnimatedBtn');
    const menu = button.nextElementSibling;

    button.addEventListener('click', function (e) {
      e.preventDefault();
      menu.classList.toggle('show');
    });

    // Optional: click outside to close
    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.remove('show');
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a267c63667926dc0323c491c9ab35ba796dab4912171292ce161f2b25a7ac3d1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 54,  125 => 50,  123 => 49,  121 => 48,  119 => 47,  115 => 39,  106 => 35,  100 => 34,  94 => 33,  88 => 32,  81 => 27,  79 => 26,  76 => 25,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a267c63667926dc0323c491c9ab35ba796dab4912171292ce161f2b25a7ac3d1", "");
    }
}
