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

/* __string_template__2582c06aa6e6de596f5dc7085cdbaf7cf15fb4e477cc4a37d211921ee068447e */
class __TwigTemplate_8527e23fc5ca24b436c239d4c309ea80e097c783218fd41ff7c4c397116197e7 extends Template
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
            // line 2
            if ((((($context["logged"] ?? null) && ($context["chkIsPartner"] ?? null)) && array_key_exists("marketplace_seller_mode", $context)) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 3
                echo "    <a href=\"";
                echo ($context["mp_profile"] ?? null);
                echo "\"></a></li>
";
            }
        }
        // line 101
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__2582c06aa6e6de596f5dc7085cdbaf7cf15fb4e477cc4a37d211921ee068447e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 101,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2582c06aa6e6de596f5dc7085cdbaf7cf15fb4e477cc4a37d211921ee068447e", "");
    }
}
