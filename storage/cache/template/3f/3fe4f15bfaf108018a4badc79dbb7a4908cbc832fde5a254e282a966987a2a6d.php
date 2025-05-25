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

/* __string_template__8a69f6b528bdceab530db1c0ad4e042d00d3d4918c8d5c33dd0980e951481eca */
class __TwigTemplate_e9b3a58a5bf05f798ad37bd160312de5685bbecebcfcaa90434041c56baa6553 extends Template
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
        echo "<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  ";
        // line 6
        echo "</head>

<footer>
  <div class=\"container-footer\">
    <div class=\"row-footer\">
      <div class=\"bold-align\">
        <img src=\"image\\catalog\\Happypaws.png\" alt=\"Happy Paws\" class=\"img-responsive\" />
        <h2 class=\"bolder-footer\">Let's Get Connected</h2>
      </div>
      ";
        // line 15
        if (($context["informations"] ?? null)) {
            // line 16
            echo "      <div class=\"align-footer\">
        <h5>";
            // line 17
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 20
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 20);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>
      </div>
      ";
        }
        // line 25
        echo "      <div class=\"align-footer\">
        <h5>";
        // line 26
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 28
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a>
          </li>
          <li><a href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
          <!--<li><a href=\"";
        // line 32
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 33
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>-->
        </ul>
      </div>

      <div class=\"align-footer\">
        <h5>";
        // line 38
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 40
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 42
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          ";
        // line 44
        echo "        </ul>
      </div>
    </div>
    <hr>
    <p class=\"copyright\">";
        // line 48
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 52
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 52);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 52);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 52);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 55
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__8a69f6b528bdceab530db1c0ad4e042d00d3d4918c8d5c33dd0980e951481eca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 57,  173 => 55,  169 => 54,  156 => 52,  152 => 51,  146 => 48,  140 => 44,  134 => 42,  128 => 41,  122 => 40,  117 => 38,  107 => 33,  101 => 32,  92 => 28,  87 => 26,  84 => 25,  79 => 22,  68 => 20,  64 => 19,  59 => 17,  56 => 16,  54 => 15,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8a69f6b528bdceab530db1c0ad4e042d00d3d4918c8d5c33dd0980e951481eca", "");
    }
}
