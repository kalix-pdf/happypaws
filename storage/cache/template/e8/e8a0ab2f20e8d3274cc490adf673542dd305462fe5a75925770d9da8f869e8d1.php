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

/* common/success.twig */
class __TwigTemplate_13305a101c8da64cce9e53d1f99805ebf69793dd9e31a3f7ebc8f04f2b5903c4 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
  <link href=\"catalog/view/theme/hp/stylesheet/contact-success.css\" rel=\"stylesheet\">
</head>
<body>

  ";
        // line 11
        echo ($context["header"] ?? null);
        echo "

  <hr class=\"contact-hr\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ol>
  </nav>

<div id=\"common-success\" class=\"container\">
  <div class=\"success-content\">

    <div id=\"content\" class=\"text-center container\">
      <h1>Enquiry Sent Successfully!</h1>
      <p>Our team has received your message and will get back to you as soon as possible</p>
    </div>

    <div class=\"button-group\">
      <div class=\"view-order\"><i class=\"fa fa-exclamation-circle\">
        </i><strong> You can track your orders at <a href=\"index.php?route=account/account\">View Orders</a></strong></div>
      <div class=\"container px-4\">
      <div class=\"buttons\">
        <div class=\"mb-5\"><a href=\"";
        // line 37
        echo ($context["continue"] ?? null);
        echo "\" class=\"back-btn\">Back Home</a></div>
      </div>
      </div>
    </div>

    </div>
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "

</body>
</html>




";
    }

    public function getTemplateName()
    {
        return "common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  93 => 37,  75 => 21,  64 => 18,  61 => 17,  57 => 16,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/success.twig", "");
    }
}
