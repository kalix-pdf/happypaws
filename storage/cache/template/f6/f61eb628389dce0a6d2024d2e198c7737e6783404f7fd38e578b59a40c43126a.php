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

/* information/information.twig */
class __TwigTemplate_85488c749a4766bab2921138f9abd84967026095e05f7018ae7a476e9e3d73e2 extends Template
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
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\category.css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 6
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"catalog\\view\\theme\\hp\\stylesheet\\about-us.css\">
  <link href=\"";
        // line 8
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
</head>

";
        // line 11
        echo ($context["header"] ?? null);
        echo "

<div class=\"upper-section\">
  <div class=\"left-pannel\">
    <div class=\"text-container\">
     <h1>ABOUT</h1>
    </div>
    <div class=\"text-container\">
     <h1>HAPPYPAWS</h1>
    </div>
    <div class=\"text-container\">
      <h6>Welcome to HappyPaws - The Philippines' First One-Stop Shop for your pets!</h6>
    </div>
  </div>

  <div class=\"right-pannel\">
    <img src=\"catalog/view/theme/hp/image/aboutus1.png\" alt=\"\">
  </div>
</div>

<div class=\"bottom-section\">
  <div class=\"content-container\">
    <img src=\"catalog/view/theme/hp/image/as-element1.png\" alt=\"\">
    <h1> What We Are </h1>
    <p>
      HappyPaws is an e-commerce dropshipping business made exclusively for pets. We’re the first one-stop shop in the Philippines focused entirely on pet goods and services — all in one platform.
    </p>
  </div>
  <div class=\"content-container\">
    <img src=\"catalog/view/theme/hp/image/as-element2.png\" alt=\"\">
    <h1> What We Offer </h1>
    <p>
      We provide a wide selection of high-quality, vet-approved pet products and services. From food and grooming supplies to online vet bookings, everything your pet needs is just a few clicks away — delivered straight to your door.
    </p>
  </div>
  <div class=\"content-container\">
    <img src=\"catalog/view/theme/hp/image/as-element3.png\" alt=\"\">
    <h1> Why Choose Us </h1>
    <p>
      We're 100% focused on pets. Our model ensures fresh, readily available products without the need for big storage. As a proudly Filipino-owned brand, we understand the needs of local pet parents and are committed to offering only the best — with care, convenience, and trust.
    </p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "information/information.twig", "");
    }
}
