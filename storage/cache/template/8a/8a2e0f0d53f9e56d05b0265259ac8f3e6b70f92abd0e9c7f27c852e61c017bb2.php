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

/* __string_template__f0dbc5a19dfd29883cc01f063aab91bcf7123291c44b116b673d966d29af6590 */
class __TwigTemplate_8cbcd2196d4c3a86878bffb40f11d4d25727190ed20a4379dc88c2560478d28a extends Template
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
        ";
        // line 3
        if (($context["webhook_data"] ?? null)) {
            // line 4
            echo "            <pre>";
            echo json_encode(($context["webhook_data"] ?? null), twig_constant("JSON_PRETTY_PRINT"));
            echo "</pre>
        ";
        } else {
            // line 6
            echo "            <p>No webhook data received yet.</p>
        ";
        }
        // line 8
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f0dbc5a19dfd29883cc01f063aab91bcf7123291c44b116b673d966d29af6590";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f0dbc5a19dfd29883cc01f063aab91bcf7123291c44b116b673d966d29af6590", "");
    }
}
