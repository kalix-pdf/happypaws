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

/* __string_template__0de6e9d822ffa66d447b39f1088489e09d9a2ed1cf633533868ec4eb2638d5f1 */
class __TwigTemplate_93980aeb01aab45fa6767130280450156fea68693025f4a7996b7ff3c340b4b6 extends Template
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
  <link href=\"catalog\\view\\theme\\hp\\stylesheet\\enhanced-hp\\home\\footer-source.css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 7
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
</head>

";
        // line 10
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
  ";
        // line 17
        if (($context["success"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 20
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
         <div class=\"col-sm-6\">
            
         </div>
        <!--
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 39
        echo "</h2>
            <p><strong>";
        // line 40
        echo "</strong></p>
            <p>";
        // line 41
        echo "</p>
            <a href=\"";
        // line 42
        echo "\" class=\"btn btn-primary\">";
        echo "</a></div>
        </div>
        -->
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 47
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 48
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 49
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 51
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 52
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 55
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 56
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 57
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 58
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 59
        if (($context["redirect"] ?? null)) {
            // line 60
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 62
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 66
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 67
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__0de6e9d822ffa66d447b39f1088489e09d9a2ed1cf633533868ec4eb2638d5f1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 69,  211 => 67,  207 => 66,  201 => 62,  195 => 60,  193 => 59,  189 => 58,  183 => 57,  177 => 56,  173 => 55,  165 => 52,  161 => 51,  156 => 49,  152 => 48,  148 => 47,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  97 => 24,  92 => 23,  86 => 21,  83 => 20,  77 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0de6e9d822ffa66d447b39f1088489e09d9a2ed1cf633533868ec4eb2638d5f1", "");
    }
}
