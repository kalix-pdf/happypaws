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

/* __string_template__cfe24a72ded7d28376e77b3fb92fe14d807ff0dda978373d61f03144c8b6a473 */
class __TwigTemplate_bb3116179978dea0ffc95b050cc41e63ed9f144798011abe9f6ec527861662bc extends Template
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
  <link href=\"catalog\\view\\theme\\default\\stylesheet\\hp\\home\\home.css\" rel=\"stylesheet\" />
</head>
<footer>
  <div class=\"container-footer\">
    <div class=\"row-footer\">
      <div class=\"bold\">
        <h2>Let's Get Connected</h2>
      </div>
      ";
        // line 13
        if (($context["informations"] ?? null)) {
            // line 14
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 15
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 18
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 18);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
      </div>
      ";
        }
        // line 23
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 24
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 26
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"https://www.facebook.com/profile.php?id=61566451568161\" target=\"_blank\">Official Facebook</a>
          </li>
          <li><a href=\"mailto:inquire@happypaws.ph, hapipaws.ph@gmail.com\" target=\"_blank\">inquire@happypaws.ph</a></li>
          <!--<li><a href=\"";
        // line 30
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 31
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>-->
        </ul>
      </div>

      <div class=\"col-sm-3\">
        <h5>";
        // line 36
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 38
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 39
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 40
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p class=\"copyright\">";
        // line 46
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>

            <!-- Mobikul code -->
            ";
        // line 51
        if ((array_key_exists("playstore_link", $context) || array_key_exists("appstore_link", $context))) {
            // line 52
            echo "            <div class=\"app-link text-center\">
            ";
            // line 53
            echo ($context["front_text"] ?? null);
            echo "
            ";
            // line 54
            if (($context["playstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["playstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["playstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 55
            echo "            ";
            if (($context["appstore_link"] ?? null)) {
                echo "<a href=\"";
                echo ($context["appstore_link"] ?? null);
                echo "\"><img src=\"";
                echo ($context["appstore_icon"] ?? null);
                echo "\"></a>";
            }
            // line 56
            echo "            </div>
            ";
        }
        // line 58
        echo "            
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 60
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 60);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 60);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 60);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 63
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__cfe24a72ded7d28376e77b3fb92fe14d807ff0dda978373d61f03144c8b6a473";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 65,  209 => 63,  205 => 62,  192 => 60,  188 => 59,  185 => 58,  181 => 56,  172 => 55,  164 => 54,  160 => 53,  157 => 52,  155 => 51,  147 => 46,  137 => 41,  131 => 40,  125 => 39,  119 => 38,  114 => 36,  104 => 31,  98 => 30,  89 => 26,  84 => 24,  81 => 23,  76 => 20,  65 => 18,  61 => 17,  56 => 15,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cfe24a72ded7d28376e77b3fb92fe14d807ff0dda978373d61f03144c8b6a473", "");
    }
}
