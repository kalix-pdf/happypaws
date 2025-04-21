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

/* __string_template__e4868207056fed0e358c3774e65844ead14d8cd7a48330f4cafdad19f6bae18b */
class __TwigTemplate_52054376b3ded5b9a7ed569f0aa2fede46e5f67eed902d8ddda857d814fd8c6b extends Template
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
        echo "<nav id=\"column-left\" style=\"overflow-x:hidden\">
  ";
        // line 2
        if ((($context["version"] ?? null) >= "3.0.2.0")) {
            // line 3
            echo "    <div id=\"navigation\" style=\"display:inline-flex;width:100%;\">
      <div style=\"margin: 0px 5px;\">
        ";
            // line 5
            if (($context["image"] ?? null)) {
                // line 6
                echo "        <img src=\"";
                echo ($context["image"] ?? null);
                echo "\" alt=\"";
                echo ($context["firstname"] ?? null);
                echo " ";
                echo ($context["lastname"] ?? null);
                echo "\" title=\"";
                echo ($context["firstname"] ?? null);
                echo "\" class=\"img-circle\" />
        ";
            } else {
                // line 8
                echo "        <i class=\"fa fa-opencart\"></i>
        ";
            }
            // line 10
            echo "      </div>
      <div style=\"overflow-x:hidden;overflow-wrap: break-word;\">
        <h4>";
            // line 12
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</h4>
        <small>";
            // line 13
            echo ($context["screenname"] ?? null);
            echo "</small>
      </div>
    </div>
    <ul id=\"menu\">
      ";
            // line 17
            $context["i"] = 0;
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 19
                echo "      <li id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 19);
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 19)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 19);
                    echo "\"><i class=\"fa ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 19);
                    echo " fw\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 19);
                    echo "</a>";
                } else {
                    echo "<a href=\"#collapse";
                    echo ($context["i"] ?? null);
                    echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 19);
                    echo " fw\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 19);
                    echo "</a>";
                }
                // line 20
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "        <ul id=\"collapse";
                    echo ($context["i"] ?? null);
                    echo "\" class=\"collapse\">
          ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                        // line 23
                        echo "            <li>";
                        if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 23)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 23);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 23);
                            echo "</a>";
                        } else {
                            echo "<a href=\"#collapse";
                            echo ($context["i"] ?? null);
                            echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 23);
                            echo "</a>";
                        }
                        // line 24
                        echo "            </li>
            ";
                        // line 25
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 26
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "        </ul>
        ";
                }
                // line 28
                echo "</li>
      ";
                // line 29
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 30
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </ul>
  ";
        } else {
            // line 33
            echo "    <div id=\"navigation\">
      <div style=\"margin: 5px;\">
        ";
            // line 35
            if (($context["image"] ?? null)) {
                // line 36
                echo "        <img src=\"";
                echo ($context["image"] ?? null);
                echo "\" alt=\"";
                echo ($context["firstname"] ?? null);
                echo " ";
                echo ($context["lastname"] ?? null);
                echo "\" title=\"";
                echo ($context["firstname"] ?? null);
                echo "\" class=\"img-circle\" />
        ";
            } else {
                // line 38
                echo "        <i class=\"fa fa-opencart\"></i>
        ";
            }
            // line 40
            echo "      </div>
      <div>
        <h4>";
            // line 42
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</h4>
        <small>";
            // line 43
            echo ($context["screenname"] ?? null);
            echo "</small>
      </div>
    </div>
    <ul id=\"menu\">
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 48
                echo "      <li id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 48);
                echo "\"> ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 48)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 48);
                    echo "\"><i class=\"fa ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 48);
                    echo " fw\"></i> <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 48);
                    echo "</span></a> ";
                } else {
                    echo " <a class=\"parent\"><i class=\"fa ";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 48);
                    echo " fw\"></i> <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 48);
                    echo "</span></a> ";
                }
                // line 49
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "        <ul>
          ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                        // line 52
                        echo "          <li> ";
                        if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 52)) {
                            echo " <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 52);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 52);
                            echo "</a> ";
                        } else {
                            echo " <a class=\"parent\">";
                            echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 52);
                            echo "</a> ";
                        }
                        // line 53
                        echo "          </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "        </ul>
        ";
                }
                // line 56
                echo " </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </ul>
  ";
        }
        // line 60
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e4868207056fed0e358c3774e65844ead14d8cd7a48330f4cafdad19f6bae18b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 60,  269 => 58,  262 => 56,  258 => 55,  251 => 53,  238 => 52,  234 => 51,  231 => 50,  228 => 49,  209 => 48,  205 => 47,  198 => 43,  192 => 42,  188 => 40,  184 => 38,  172 => 36,  170 => 35,  166 => 33,  162 => 31,  156 => 30,  154 => 29,  151 => 28,  147 => 27,  141 => 26,  139 => 25,  136 => 24,  121 => 23,  117 => 22,  112 => 21,  109 => 20,  88 => 19,  83 => 18,  81 => 17,  74 => 13,  68 => 12,  64 => 10,  60 => 8,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e4868207056fed0e358c3774e65844ead14d8cd7a48330f4cafdad19f6bae18b", "");
    }
}
