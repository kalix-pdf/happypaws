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

/* __string_template__7667ae6f3fe53afcb835767a1b212f44820c6b59e83b7761f9dc724738f4487a */
class __TwigTemplate_3d21e3c47ff641594665d93ba6d55c543fdb520272376b579817cdbd81a79205 extends Template
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
        echo ($context["customheader"] ?? null);
        echo "

<div class=\"text-center row\">
    <h1>Store Name: ";
        // line 4
        echo ($context["companyname"] ?? null);
        echo "</h1>

    ";
        // line 6
        if ( !twig_test_empty(($context["files"] ?? null))) {
            // line 7
            echo "        <h1>Customer ID: ";
            echo ($context["customer_id"] ?? null);
            echo "</h1>
        <h2>Uploaded documents</h2>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 10
                echo "            <div class=\"col-md-4\">
                <div class=\"uploaded-file card shadow-lg border rounded p-4 m-5\">
                    <p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["file"], "type", [], "any", false, false, false, 12);
                echo "</p> <br>
                    <a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["file"], "image_path", [], "any", false, false, false, 13);
                echo "\" target=\"_blank\">
                        <img src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["file"], "image_path", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["file"], "type", [], "any", false, false, false, 14);
                echo "\"
                        class=\"img-fluid d-block mx-auto\" style=\"width: 300px;\">
                    </a> <br> <br> 
                    ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["file"], "sbsType", [], "any", true, true, false, 17)) {
                    // line 18
                    echo "                    <h2>Subscription Type:</h2>
                    ";
                    // line 19
                    if ((twig_get_attribute($this->env, $this->source, $context["file"], "sbsType", [], "any", false, false, false, 19) == 1)) {
                        // line 20
                        echo "                        <h2>PISO PER DAY PER PRODUCT</h2>
                    ";
                    }
                    // line 22
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["file"], "sbsType", [], "any", false, false, false, 22) == 2)) {
                        // line 23
                        echo "                        <h2>PISO PER MONTH PER PRODUCT</h2>
                    ";
                    }
                    // line 25
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["file"], "sbsType", [], "any", false, false, false, 25) == 3)) {
                        // line 26
                        echo "                        <h2>COMMISSION TYPE</h2>
                    ";
                    }
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "                </div>
                
            </div>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        } else {
            echo "  
        <p>No files uploaded yet.</p>
        
    ";
        }
        // line 38
        echo "</div>
<br>
";
        // line 40
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__7667ae6f3fe53afcb835767a1b212f44820c6b59e83b7761f9dc724738f4487a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  126 => 38,  118 => 34,  108 => 29,  105 => 28,  101 => 26,  98 => 25,  94 => 23,  91 => 22,  87 => 20,  85 => 19,  82 => 18,  80 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 10,  56 => 9,  50 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7667ae6f3fe53afcb835767a1b212f44820c6b59e83b7761f9dc724738f4487a", "");
    }
}
