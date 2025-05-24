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

/* __string_template__c629f5f9565aabda89cd3c2d7ab5d5565efb5289506bd570468d6353b17105c7 */
class __TwigTemplate_f42ac8b0bd778ee91032c179a94be88557203e5f813920c587d8d23b3f143046 extends Template
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

      ";
            // line 11
            echo "  <button type=\"button\" class=\"btn btn-close ms-auto mb-2 d-lg-none\" aria-label=\"Close\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"></button>


      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        
        <ul class=\"navbar-nav\">
          ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "
            </a>
            <ul class=\"dropdown-menu\">
              ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 24), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 25
                        echo "              <li>
                <ul class=\"list-unstyled\">
                  ";
                        // line 27
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 28
                            echo "                  <li><a class=\"dropdown-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 28);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 28);
                            echo "</a></li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        echo "                </ul>
              </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item see-all\" href=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    echo "\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    echo "</a></li>
            </ul>
          </li>
          ";
                } else {
                    // line 38
                    echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                    echo "</a>
          </li>
          ";
                }
                // line 42
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
        }
        // line 49
        echo "
<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const navbar = document.getElementById('navbarNav');

    // Only target actual links that should close the menu (not dropdown toggles)
    const menuLinks = document.querySelectorAll('#menu .dropdown-item, #menu .nav-link:not(.dropdown-toggle)');

    menuLinks.forEach((link) => {
      link.addEventListener('click', () => {
        const isShown = navbar.classList.contains('show');
        if (window.innerWidth < 992 && isShown) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbar);
          if (bsCollapse) {
            bsCollapse.hide();
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
        return "__string_template__c629f5f9565aabda89cd3c2d7ab5d5565efb5289506bd570468d6353b17105c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  142 => 43,  136 => 42,  128 => 39,  125 => 38,  114 => 34,  111 => 33,  103 => 30,  92 => 28,  88 => 27,  84 => 25,  80 => 24,  74 => 21,  70 => 20,  67 => 19,  64 => 18,  60 => 17,  52 => 11,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c629f5f9565aabda89cd3c2d7ab5d5565efb5289506bd570468d6353b17105c7", "");
    }
}
