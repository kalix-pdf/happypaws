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

/* __string_template__436af838a887a79e0de014b7609dcb853baa146e5072d42f52c8a8aa5ea40042 */
class __TwigTemplate_4ae23a504573e00fbd1e09fff4c1188ae7c0d9d7247b5adbdeb60bdbe94382ed extends Template
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
      <div class=\"login-container\">
      <!-- Left side content if needed -->
        <div class=\"login-left\"></div>

        <!-- Login form -->
        <div class=\"login-right\">
          <div class=\"login-box\">
            <h2>";
        // line 39
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 40
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 41
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label for=\"input-email\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" />
              </div>
              <div class=\"form-group\">
                <label for=\"input-password\">";
        // line 47
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 48
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" />
                <a class=\"forgot-link\" href=\"";
        // line 49
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
              </div>
              <input type=\"submit\" value=\"";
        // line 51
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn-submit\" />
              ";
        // line 52
        if (($context["redirect"] ?? null)) {
            // line 53
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 55
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 60
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 62
        echo ($context["footer"] ?? null);
        echo "

<script>
  // Simple JS validation
  document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let email = document.getElementById('input-email').value.trim();
    let password = document.getElementById('input-password').value.trim();
    let emailError = document.getElementById('email-error');
    let passwordError = document.getElementById('password-error');

    // Clear previous errors
    emailError.textContent = '';
    passwordError.textContent = '';

    let valid = true;

    if (!email) {
      emailError.textContent = 'Email is required.';
      valid = false;
    } else if (!/\\S+@\\S+\\.\\S+/.test(email)) {
      emailError.textContent = 'Enter a valid email address.';
      valid = false;
    }

    if (!password) {
      passwordError.textContent = 'Password is required.';
      valid = false;
    }

    if (valid) {
      alert('Form submitted successfully!');
      // You can submit with AJAX here, or do:
      // this.submit();
    }
  });
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__436af838a887a79e0de014b7609dcb853baa146e5072d42f52c8a8aa5ea40042";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  195 => 60,  191 => 59,  185 => 55,  179 => 53,  177 => 52,  173 => 51,  166 => 49,  160 => 48,  156 => 47,  148 => 44,  144 => 43,  139 => 41,  135 => 40,  131 => 39,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  97 => 24,  92 => 23,  86 => 21,  83 => 20,  77 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__436af838a887a79e0de014b7609dcb853baa146e5072d42f52c8a8aa5ea40042", "");
    }
}
