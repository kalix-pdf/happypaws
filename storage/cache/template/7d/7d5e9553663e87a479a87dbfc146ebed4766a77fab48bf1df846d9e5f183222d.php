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

/* __string_template__debac7534ff23b1ad18dcc2ac914da3a50d417dc36b627975e456bec9f96cee9 */
class __TwigTemplate_9f7cd803b9dfad44be8603b8cebe00aefedc43dd49bc6dd430e1687b9d94b42f extends Template
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

    ";
        // line 9
        if (($context["informations"] ?? null)) {
            // line 10
            echo "    <div class=\"footer-column\">
      <h5 class=\"text-white\">";
            // line 11
            echo ($context["text_information"] ?? null);
            echo "</h5>
      <ul>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 14);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      </ul>
    </div>
    ";
        }
        // line 19
        echo "
    <div class=\"footer-column\">
      <h5 class=\"text-white\">";
        // line 21
        echo ($context["text_service"] ?? null);
        echo "</h5>
      <ul>
        <li><a href=\"";
        // line 23
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        <li><a href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a></li>
        <li><a href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
      </ul>
    </div>
    <div class=\"footer-column\">
      <h5 class=\"text-white\">";
        // line 29
        echo ($context["text_account"] ?? null);
        echo "</h5>
      <ul>
        <li><a href=\"";
        // line 31
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 32
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 33
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
    </div>
  </div>

  <div class=\"footer-bottom\">
    ";
        // line 39
        echo ($context["powered"] ?? null);
        echo "
  </div>

  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 43
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 43);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 43);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 43);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "__string_template__debac7534ff23b1ad18dcc2ac914da3a50d417dc36b627975e456bec9f96cee9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  153 => 46,  148 => 45,  135 => 43,  131 => 42,  125 => 39,  114 => 33,  108 => 32,  102 => 31,  97 => 29,  86 => 23,  81 => 21,  77 => 19,  72 => 16,  61 => 14,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__debac7534ff23b1ad18dcc2ac914da3a50d417dc36b627975e456bec9f96cee9", "");
    }
}
