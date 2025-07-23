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

/* information/contact.twig */
class __TwigTemplate_1a8a3ef7dd8afd0b3cf94cbf2ba7e76f8f2a8a0380e5b5cd107d19bf24854274 extends Template
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
        // line 11
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  <div class=\"row-contact\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"contact\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 29
        echo "      <div class=\"custom-panel\">
        <div class=\"custom-panel-body\">
          <h3 class=\"letter-head\">";
        // line 31
        echo ($context["text_location"] ?? null);
        echo "</h3>
          <div class=\"custom-row-contact\">
            ";
        // line 33
        if (($context["image"] ?? null)) {
            // line 34
            echo "            <div class=\"custom-col-1\">
              <img src=\"";
            // line 35
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"custom-img-thumbnail\" />
            </div>
            ";
        }
        // line 38
        echo "            <div class=\"custom-col\">
              <strong>";
        // line 39
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
                ";
        // line 41
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 43
        if (($context["geocode"] ?? null)) {
            // line 44
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"custom-btn custom-btn-info\">
                <i class=\"fa fa-map-marker\"></i> ";
            // line 45
            echo ($context["button_map"] ?? null);
            echo "
              </a>
              ";
        }
        // line 48
        echo "            </div>
            <div class=\"custom-col\">
              <strong>";
        // line 50
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 51
        echo ($context["telephone"] ?? null);
        echo "<br /><br />
              ";
        // line 52
        if (($context["fax"] ?? null)) {
            // line 53
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 54
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 56
        echo "            </div>
            <div class=\"custom-col\">
              ";
        // line 58
        if (($context["open"] ?? null)) {
            // line 59
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 60
            echo ($context["open"] ?? null);
            echo "<br /><br />
              ";
        }
        // line 62
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 63
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 64
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 66
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 70
        if (($context["locations"] ?? null)) {
            // line 71
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"accordion\">
  ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 74
                echo "  <div class=\"accordion-item\">
    <input type=\"checkbox\" id=\"accordion-location";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 75);
                echo "\" hidden>
    <label class=\"accordion-header\" for=\"accordion-location";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 76);
                echo "\">
      ";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                echo " <i class=\"fa fa-caret-down\"></i>
    </label>
    <div class=\"accordion-content\">
      <div class=\"row\">
        ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "        <div class=\"col\">
          <img src=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 83);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 83);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 83);
                    echo "\" class=\"thumbnail\">
        </div>
        ";
                }
                // line 86
                echo "        <div class=\"col\">
          <strong>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 87);
                echo "</strong><br>
          <address>";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 88);
                echo "</address>
          ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "          <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 90));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn\">
            <i class=\"fa fa-map-marker\"></i> ";
                    // line 91
                    echo ($context["button_map"] ?? null);
                    echo "
          </a>
          ";
                }
                // line 94
                echo "        </div>
        <div class=\"col\">
          <strong>";
                // line 96
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
          ";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 97);
                echo "<br><br>
          ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "          <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
          ";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 100);
                    echo "
          ";
                }
                // line 102
                echo "        </div>
        <div class=\"col\">
          ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "          <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br>
          ";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 106);
                    echo "<br><br>
          ";
                }
                // line 108
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "          <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br>
          ";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 110);
                    echo "
          ";
                }
                // line 112
                echo "        </div>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>
      ";
        }
        // line 119
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"contact-form\">
    <legend>";
        // line 120
        echo ($context["text_contact"] ?? null);
        echo "</legend>

    <div class=\"form-group required\">
      <label for=\"input-name\">";
        // line 123
        echo ($context["entry_name"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <input type=\"text\" name=\"name\" value=\"";
        // line 125
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\">
        ";
        // line 126
        if (($context["error_name"] ?? null)) {
            // line 127
            echo "        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
        ";
        }
        // line 129
        echo "      </div>
    </div>

    <div class=\"form-group required\">
      <label for=\"input-email\">";
        // line 133
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <input type=\"text\" name=\"email\" value=\"";
        // line 135
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\">
        ";
        // line 136
        if (($context["error_email"] ?? null)) {
            // line 137
            echo "        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
        ";
        }
        // line 139
        echo "      </div>
    </div>

    <div class=\"form-group required\">
      <label for=\"input-enquiry\">";
        // line 143
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\">";
        // line 145
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
        ";
        // line 146
        if (($context["error_enquiry"] ?? null)) {
            // line 147
            echo "        <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
        ";
        }
        // line 149
        echo "      </div>
    </div>

    ";
        // line 152
        echo ($context["captcha"] ?? null);
        echo "

  <div class=\"form-actions\">
    <input class=\"btn-primary\" type=\"submit\" value=\"";
        // line 155
        echo ($context["button_submit"] ?? null);
        echo "\">
  </div>
</form>
      ";
        // line 158
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 161
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 161,  453 => 159,  449 => 158,  443 => 155,  437 => 152,  432 => 149,  426 => 147,  424 => 146,  420 => 145,  415 => 143,  409 => 139,  403 => 137,  401 => 136,  397 => 135,  392 => 133,  386 => 129,  380 => 127,  378 => 126,  374 => 125,  369 => 123,  363 => 120,  358 => 119,  354 => 117,  344 => 112,  339 => 110,  334 => 109,  331 => 108,  326 => 106,  321 => 105,  319 => 104,  315 => 102,  310 => 100,  305 => 99,  303 => 98,  299 => 97,  295 => 96,  291 => 94,  285 => 91,  278 => 90,  276 => 89,  272 => 88,  268 => 87,  265 => 86,  255 => 83,  252 => 82,  250 => 81,  243 => 77,  239 => 76,  235 => 75,  232 => 74,  228 => 73,  222 => 71,  220 => 70,  214 => 66,  209 => 64,  204 => 63,  201 => 62,  196 => 60,  191 => 59,  189 => 58,  185 => 56,  180 => 54,  175 => 53,  173 => 52,  169 => 51,  165 => 50,  161 => 48,  155 => 45,  148 => 44,  146 => 43,  141 => 41,  136 => 39,  133 => 38,  123 => 35,  120 => 34,  118 => 33,  113 => 31,  109 => 29,  105 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  82 => 20,  80 => 19,  76 => 18,  73 => 17,  62 => 15,  58 => 14,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "information/contact.twig", "");
    }
}
