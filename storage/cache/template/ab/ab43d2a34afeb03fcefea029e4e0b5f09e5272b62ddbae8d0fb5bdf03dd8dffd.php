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

/* __string_template__5044bcbbbe384045fc2631402bdb6b01172c6664ec18ce2ae52ad9821b99cfb4 */
class __TwigTemplate_b997a7ffea25eaeb3dbf4bcf34d544bf9c80cab65129da55320a8e147c0ef786 extends Template
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
<footer>
  <div class=\"container-fluid bg-tertiary\">
    <div class=\"bg-secondary d-flex justify-content-center container-fluid\">
      <div class=\"bold-align\">
        <img src=\"image\\catalog\\Happypaws.png\" alt=\"Happy Paws\" class=\"img-responsive\" style=\"height:100px;\"/>
        <h2 class=\"bolder-footer\">Let's Get Connected</h2>
      </div>
      ";
        // line 9
        if (($context["informations"] ?? null)) {
            // line 10
            echo "      <div class=\"align-footer\">
        <h5>";
            // line 11
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "          <li><a href=\"";
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
            echo "        </ul>
      </div>
      ";
        }
        // line 19
        echo "      <div class=\"align-footer\">
        <h5>";
        // line 20
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 22
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a>
          </li>
          <li><a href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
          <!--<li><a href=\"";
        // line 26
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>-->
        </ul>
      </div>

      <div class=\"align-footer\">
        <h5>";
        // line 32
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          ";
        // line 38
        echo "        </ul>
      </div>
    </div>
    <hr>
    <p class=\"copyright\">";
        // line 42
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 46);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 46);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__5044bcbbbe384045fc2631402bdb6b01172c6664ec18ce2ae52ad9821b99cfb4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  166 => 49,  162 => 48,  149 => 46,  145 => 45,  139 => 42,  133 => 38,  127 => 36,  121 => 35,  115 => 34,  110 => 32,  100 => 27,  94 => 26,  85 => 22,  80 => 20,  77 => 19,  72 => 16,  61 => 14,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5044bcbbbe384045fc2631402bdb6b01172c6664ec18ce2ae52ad9821b99cfb4", "");
    }
}
