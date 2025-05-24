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

/* __string_template__ff94de893a5d1b58cd52ba05d419211a33af0ed3d95f3d1f5694aa2be7950f86 */
class __TwigTemplate_9173f530e09c15c6a9c29358d3e9466a1d282cd59b53ec217f349ae869d41536 extends Template
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
        return "__string_template__ff94de893a5d1b58cd52ba05d419211a33af0ed3d95f3d1f5694aa2be7950f86";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 62,  153 => 60,  149 => 59,  143 => 55,  137 => 53,  135 => 52,  131 => 51,  124 => 49,  118 => 48,  114 => 47,  106 => 44,  102 => 43,  97 => 41,  93 => 40,  89 => 39,  75 => 31,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ff94de893a5d1b58cd52ba05d419211a33af0ed3d95f3d1f5694aa2be7950f86", "");
    }
}
