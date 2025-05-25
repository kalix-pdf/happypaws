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

/* __string_template__5452d7945678457921559dfff65df3507374965e5cb0d6ef1bd79f2b38a49f9e */
class __TwigTemplate_48a94ba81da875a6aece2ce0787afd82168541dd9400e1347006df7d4a57296b extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div class=\"container\">
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary\" id=\"menu\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header d-lg-none\">
        <span id=\"category\" class=\"visible\">";
            // line 6
            echo ($context["text_category"] ?? null);
            echo "</span>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          ";
            // line 14
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
                // line 15
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "              <li class=\"nav-item dropdown\">
                <a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20);
                    echo "\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22), twig_round((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) / twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 22)), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["children_batch"]) {
                        // line 23
                        echo "                      <ul class=\"list-unstyled\">
                        ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children_batch"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 25
                            echo "                          <li><a class=\"dropdown-item\" href=\"";
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
                        echo "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_batch'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                  </div>
                  <li><hr class=\"dropdown-divider\"></li>
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
                    echo "              <li class=\"nav-item\">
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


";
    }

    public function getTemplateName()
    {
        return "__string_template__5452d7945678457921559dfff65df3507374965e5cb0d6ef1bd79f2b38a49f9e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  164 => 40,  150 => 39,  142 => 36,  139 => 35,  128 => 31,  124 => 29,  117 => 27,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  90 => 20,  85 => 18,  79 => 17,  76 => 16,  73 => 15,  56 => 14,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5452d7945678457921559dfff65df3507374965e5cb0d6ef1bd79f2b38a49f9e", "");
    }
}
