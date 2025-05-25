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

/* __string_template__46c3c265fa16a111f96327ce6bceab156586d2396e253f3be7a4d8ea52cd3368 */
class __TwigTemplate_8e1e48453d9713e5379d2615039e31f5233f04abdfa24b680429a0d976765a9d extends Template
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
        // line 38
        echo ($context["powered"] ?? null);
        echo "
  </div>

  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 42);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 42);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 42);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "__string_template__46c3c265fa16a111f96327ce6bceab156586d2396e253f3be7a4d8ea52cd3368";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  152 => 45,  147 => 44,  134 => 42,  130 => 41,  124 => 38,  114 => 33,  108 => 32,  102 => 31,  97 => 29,  86 => 23,  81 => 21,  77 => 19,  72 => 16,  61 => 14,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__46c3c265fa16a111f96327ce6bceab156586d2396e253f3be7a4d8ea52cd3368", "");
    }
}
