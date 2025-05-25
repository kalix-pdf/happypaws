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

/* __string_template__eb3c087be368318feabcbc6961ba883274c67c30966b0e27c4661af27cfffbab */
class __TwigTemplate_3363ce2b2ba6cf8e0f0f63e358059c7bd253235a27ffc1619bea8d1d0476b3c5 extends Template
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
  <div class=\"container-fluid py-3\">
    <div class=\"row text-center text-md-start\">
      <div class=\"cold-md-3 mb-4\">
        <img src=\"image\\catalog\\Happypaws.png\" alt=\"Happy Paws\" class=\"img-fluid mb-2\" style=\"height:100px;\"/>
        <h2 class=\"fw-bold\">Let's Get Connected</h2>
      </div>
      ";
        // line 9
        if (($context["informations"] ?? null)) {
            // line 10
            echo "      <div class=\"col-md-3 mb-4\">
        <h5 class=\"fw-bold\">";
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
                echo "\" class=\"text-decoration-none text-white\">";
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
        echo "      <div class=\"col-md-3 mb-4\">
        <h5 class=\"fw-bold\">";
        // line 20
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a class=\"text-decoration-none text-white\" href=\"";
        // line 22
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a class=\"text-decoration-none text-white\" href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a>
          </li>
          <li><a class=\"text-decoration-none text-white\" href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
         
        </ul>
      </div>

      <div class=\"col-md-4 mb-4\">
        <h5 class=\"fw-bold\">";
        // line 31
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a class=\"text-decoration-none text-white\" href=\"";
        // line 33
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a class=\"text-decoration-none text-white\" href=\"";
        // line 34
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a class=\"text-decoration-none text-white\" href=\"";
        // line 35
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
         
        </ul>
      </div>
    </div>
    <hr>
    <div class=\"text-center\">
      <p class=\"mb-0 text-muted small\">";
        // line 42
        echo ($context["powered"] ?? null);
        echo "</p>
    </div>
  </div>
</footer>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 47
            echo "<link href=\"";
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__eb3c087be368318feabcbc6961ba883274c67c30966b0e27c4661af27cfffbab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 52,  156 => 50,  152 => 49,  139 => 47,  135 => 46,  128 => 42,  116 => 35,  110 => 34,  104 => 33,  99 => 31,  85 => 22,  80 => 20,  77 => 19,  72 => 16,  61 => 14,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__eb3c087be368318feabcbc6961ba883274c67c30966b0e27c4661af27cfffbab", "");
    }
}
