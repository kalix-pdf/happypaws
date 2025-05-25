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

/* __string_template__fba4ad58e495192b4fe933c4aac2447b54155f5bacafbbc9dc2687dc0cb92b37 */
class __TwigTemplate_58e5428c3577a5b641033b4b7bc64b4772071a18b923f839cd0c854e99c8d62e extends Template
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
        echo "<footer>
  <div class=\"footer-wrapper\">
    <!-- Logo and Slogan -->
    <div class=\"footer-column\">
      <img src=\"image/catalog/Happypaws.png\" alt=\"Happy Paws\" class=\"footer-logo img-fluid\" />
      <h5 class=\"text-white\">Let's Get Connected</h5>
    </div>

    <!-- Information Links -->
    ";
        // line 10
        if (($context["informations"] ?? null)) {
            // line 11
            echo "    <div class=\"footer-column\">
      <h5>";
            // line 12
            echo ($context["text_information"] ?? null);
            echo "</h5>
      <ul>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 15
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 15);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
    ";
        }
        // line 20
        echo "
    <!-- Service Links -->
    <div class=\"footer-column\">
      <h5>";
        // line 23
        echo ($context["text_service"] ?? null);
        echo "</h5>
      <ul>
        <li><a href=\"";
        // line 25
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        <li><a href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a></li>
        <li><a href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
      </ul>
    </div>

    <!-- Account Links -->
    <div class=\"footer-column\">
      <h5>";
        // line 33
        echo ($context["text_account"] ?? null);
        echo "</h5>
      <ul>
        <li><a href=\"";
        // line 35
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 36
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 37
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
    </div>
  </div>

  <div class=\"footer-bottom\">
    ";
        // line 43
        echo ($context["powered"] ?? null);
        echo "
  </div>

  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 47
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 47);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 47);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "__string_template__fba4ad58e495192b4fe933c4aac2447b54155f5bacafbbc9dc2687dc0cb92b37";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  157 => 50,  152 => 49,  139 => 47,  135 => 46,  129 => 43,  118 => 37,  112 => 36,  106 => 35,  101 => 33,  88 => 25,  83 => 23,  78 => 20,  73 => 17,  62 => 15,  58 => 14,  53 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fba4ad58e495192b4fe933c4aac2447b54155f5bacafbbc9dc2687dc0cb92b37", "");
    }
}
