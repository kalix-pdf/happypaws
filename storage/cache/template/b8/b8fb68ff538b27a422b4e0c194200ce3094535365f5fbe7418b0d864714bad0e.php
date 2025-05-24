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

/* __string_template__0a4b59ba96728e8d1a2c406c362ef1f03c33c58178ce0952f81e100ddbe2b21d */
class __TwigTemplate_86fd7396606b1219402644d57553d8ae5b1220cf36abc261c2a5bf4281caf51d extends Template
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
        echo "
";
        // line 2
        if (($context["categories"] ?? null)) {
            // line 3
            echo "<div class=\"container-menu\">
  <nav id=\"menu\" class=\"navbar navbar-expand-lg bg-body\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand d-lg-none\" href=\"#\">";
            // line 6
            echo ($context["text_category"] ?? null);
            echo "</a>

      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <button type=\"button\" class=\"btn btn-close ms-auto mb-2 d-lg-none\" aria-label=\"Close\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"></button>

        <ul class=\"navbar-nav\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                    echo "
            </a>
            <ul class=\"dropdown-menu\">
              ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 23), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 24
                        echo "              <li>
                <ul class=\"list-unstyled\">
                  ";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 27
                            echo "                  <li><a class=\"dropdown-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 27);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 27);
                            echo "</a></li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "                </ul>
              </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item see-all\" href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</a></li>
            </ul>
          </li>
          ";
                } else {
                    // line 37
                    echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                    echo "</a>
          </li>
          ";
                }
                // line 41
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
        }
        // line 48
        echo "
<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const navbar = document.getElementById('navbarNav');
    if (!navbar) {
      console.error(\"Navbar element #navbarNav not found\");
      return;
    }

    const menuLinks = document.querySelectorAll('#menu .dropdown-item, #menu .nav-link:not(.dropdown-toggle)');
    if (menuLinks.length === 0) {
      console.warn(\"No menu links found to attach click events\");
    }

    menuLinks.forEach((link) => {
      link.addEventListener('click', () => {
        console.log(\"Menu link clicked:\", link.href);
        const isShown = navbar.classList.contains('show');
        console.log(\"Navbar shown:\", isShown);

        if (window.innerWidth < 992 && isShown) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbar);
          console.log(\"Bootstrap Collapse instance:\", bsCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          } else {
            console.warn(\"No Bootstrap collapse instance found\");
          }
        }
      });
    });
  });
</script>


";
    }

    public function getTemplateName()
    {
        return "__string_template__0a4b59ba96728e8d1a2c406c362ef1f03c33c58178ce0952f81e100ddbe2b21d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  142 => 42,  136 => 41,  128 => 38,  125 => 37,  114 => 33,  111 => 32,  103 => 29,  92 => 27,  88 => 26,  84 => 24,  80 => 23,  74 => 20,  70 => 19,  67 => 18,  64 => 17,  60 => 16,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0a4b59ba96728e8d1a2c406c362ef1f03c33c58178ce0952f81e100ddbe2b21d", "");
    }
}
