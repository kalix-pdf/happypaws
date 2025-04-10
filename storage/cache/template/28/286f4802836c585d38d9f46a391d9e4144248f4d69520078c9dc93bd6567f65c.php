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

/* __string_template__65ca093d6269ec9efdcb498d733235bff190d513de8119980d8e97d80264e98d */
class __TwigTemplate_0992acb8d4540a4cf5668301a31701e78a78e9dd3049d2c1d7d6a4d4091394f6 extends Template
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
        echo "<div class=\"container\">
        <h2>Webhook Request Data</h2>
        <pre>";
        // line 3
        echo ($context["webhook_data"] ?? null);
        echo "</pre>
    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__65ca093d6269ec9efdcb498d733235bff190d513de8119980d8e97d80264e98d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__65ca093d6269ec9efdcb498d733235bff190d513de8119980d8e97d80264e98d", "");
    }
}
