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

/* __string_template__a683775bab20d0ad77fe26e4299a8a909f958233ead01eaa4b932bcf7e1bf45a */
class __TwigTemplate_5c367192ba9803b57864e924dde087398f778675d40b5b7ab1f13a8321484015 extends Template
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
            echo "<div class=\"container\">
  <nav class=\"navbar navbar-expand-lg rounded-3 px-2\" id=\"menu\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header d-lg-none text-white d-flex w-100 align-items-center justify-content-between\">
        <span id=\"category\" class=\"visible\">";
            // line 7
            echo ($context["text_category"] ?? null);
            echo "</span>
        <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "              <li class=\"nav-item dropdown\">
                <a href=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                    echo "\" class=\"nav-link dropdown-toggle text-white px-4 rounded-2\" id=\"navbarDropdown";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                    echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21);
                    echo "\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23), twig_round((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 23)) / twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 23)), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["children_batch"]) {
                        // line 24
                        echo "                      <ul class=\"list-unstyled\">
                        ";
                        // line 25
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children_batch"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 26
                            echo "                          <li><a class=\"dropdown-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 26);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                            echo "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_batch'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                  </div>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item see-all\" href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                    echo "\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                    echo "</a></li>
                </ul>
              </li>
            ";
                } else {
                    // line 36
                    echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-white px-4 rounded-2\" href=\"";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    echo "</a>
              </li>
            ";
                }
                // line 40
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
        }
        // line 47
        echo "


";
    }

    public function getTemplateName()
    {
        return "__string_template__a683775bab20d0ad77fe26e4299a8a909f958233ead01eaa4b932bcf7e1bf45a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 47,  167 => 41,  153 => 40,  145 => 37,  142 => 36,  131 => 32,  127 => 30,  120 => 28,  109 => 26,  105 => 25,  102 => 24,  98 => 23,  93 => 21,  88 => 19,  82 => 18,  79 => 17,  76 => 16,  59 => 15,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a683775bab20d0ad77fe26e4299a8a909f958233ead01eaa4b932bcf7e1bf45a", "");
    }
}
