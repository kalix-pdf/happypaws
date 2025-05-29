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

/* __string_template__00f85579618958ea2da966a795242a433edfac721815817d8c0d0e014b881d97 */
class __TwigTemplate_f96909fb73ff6743edd53a453d11233be603799c690f042bea0635fb92e25062 extends Template
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
        if ((array_key_exists("module_marketplace_status", $context) && ($context["module_marketplace_status"] ?? null))) {
        }
        // line 98
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__00f85579618958ea2da966a795242a433edfac721815817d8c0d0e014b881d97";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 98,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__00f85579618958ea2da966a795242a433edfac721815817d8c0d0e014b881d97", "");
    }
}
