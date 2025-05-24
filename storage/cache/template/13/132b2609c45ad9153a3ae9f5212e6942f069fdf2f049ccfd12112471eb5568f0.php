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

/* __string_template__9ac85f66f3c99fe5e0d5df2cff8749bec861c88d8b015ec07c752944d5e2c6d6 */
class __TwigTemplate_f81eb26b9d50ac67519a629f79d68cb009d0f7d2c111c92be4cec93ae0c9dcd4 extends Template
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
        <ul class=\"navbar-nav\">
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo "
            </a>
            <ul class=\"dropdown-menu\">
              ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 21), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 22
                        echo "              <li>
                <ul class=\"list-unstyled\">
                  ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 25
                            echo "                  <li><a class=\"dropdown-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 25);
                            echo "</a></li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                </ul>
              </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item see-all\" href=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                    echo "\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a></li>
            </ul>
          </li>
          ";
                } else {
                    // line 35
                    echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    echo "</a>
          </li>
          ";
                }
                // line 39
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
        }
        // line 46
        echo "
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        // Don't close if the clicked link is a dropdown toggle
        if (link.classList.contains('dropdown-toggler')) return;

        // Close the navbar if it's open
        if (navbarCollapse.classList.contains('show')) {
          new bootstrap.Collapse(navbarCollapse).toggle();
        }
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9ac85f66f3c99fe5e0d5df2cff8749bec861c88d8b015ec07c752944d5e2c6d6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  140 => 40,  134 => 39,  126 => 36,  123 => 35,  112 => 31,  109 => 30,  101 => 27,  90 => 25,  86 => 24,  82 => 22,  78 => 21,  72 => 18,  68 => 17,  65 => 16,  62 => 15,  58 => 14,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9ac85f66f3c99fe5e0d5df2cff8749bec861c88d8b015ec07c752944d5e2c6d6", "");
    }
}
