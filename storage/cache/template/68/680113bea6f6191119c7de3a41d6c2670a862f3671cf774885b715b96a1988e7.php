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

/* __string_template__2857c40ef78c2b1168c3945c4786363c49361a9c2c0b3dc5554bb1dce697028a */
class __TwigTemplate_858d2eb3e1264988e5fc4d7b535f0b3049173bba2dd7efed2b847f65007c690c extends Template
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
<link href=\"catalog/view/theme/hp/stylesheet/menu.css\" rel=\"stylesheet\">

";
        // line 4
        if (($context["categories"] ?? null)) {
            // line 5
            echo "<div class=\"container\">
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary gap-5\" id=\"menu\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header d-lg-none\">
        <span id=\"category\" class=\"visible\">";
            // line 9
            echo ($context["text_category"] ?? null);
            echo "</span>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          ";
            // line 17
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
                // line 18
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "              <li class=\"nav-item dropdown\">
                <a href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20);
                    echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23);
                    echo "\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 25), twig_round((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 25)) / twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 25)), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["children_batch"]) {
                        // line 26
                        echo "                      <ul class=\"list-unstyled\">
                        ";
                        // line 27
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children_batch"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 28
                            echo "                          <li><a class=\"dropdown-item\" href=\"";
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
                        echo "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_batch'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "                  </div>
                  <li><hr class=\"dropdown-divider\"></li>
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
                    echo "              <li class=\"nav-item\">
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


";
    }

    public function getTemplateName()
    {
        return "__string_template__2857c40ef78c2b1168c3945c4786363c49361a9c2c0b3dc5554bb1dce697028a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  169 => 43,  155 => 42,  147 => 39,  144 => 38,  133 => 34,  129 => 32,  122 => 30,  111 => 28,  107 => 27,  104 => 26,  100 => 25,  95 => 23,  90 => 21,  84 => 20,  81 => 19,  78 => 18,  61 => 17,  50 => 9,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2857c40ef78c2b1168c3945c4786363c49361a9c2c0b3dc5554bb1dce697028a", "");
    }
}
