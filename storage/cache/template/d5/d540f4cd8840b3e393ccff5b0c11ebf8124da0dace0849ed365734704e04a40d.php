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

/* __string_template__a9818d77087252ba029e3849a6d178b4b915f1c9a10f8b5150a5fad19b2ebb64 */
class __TwigTemplate_3f5fb53d214f1821a7ab078abee4ae0e3d67d42bcbe773efa98c35c2eca087e5 extends Template
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
</head>


";
        // line 10
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\" class=\"container\">
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
  <div class=\"row-contact\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"contact\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"custom-panel\">
      <h3>";
        // line 28
        echo ($context["text_location"] ?? null);
        echo "</h3>
        <div class=\"custom-panel-body\">
          <div class=\"custom-row-contact\">
            ";
        // line 31
        if (($context["image"] ?? null)) {
            // line 32
            echo "            <div class=\"custom-col\">
              <img src=\"";
            // line 33
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"custom-img-thumbnail\" />
            </div>
            ";
        }
        // line 36
        echo "            <div class=\"custom-col\">
              <strong>";
        // line 37
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
                ";
        // line 39
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 41
        if (($context["geocode"] ?? null)) {
            // line 42
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"custom-btn custom-btn-info\">
                <i class=\"fa fa-map-marker\"></i> ";
            // line 43
            echo ($context["button_map"] ?? null);
            echo "
              </a>
              ";
        }
        // line 46
        echo "            </div>
            <div class=\"custom-col\">
              <strong>";
        // line 48
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 49
        echo ($context["telephone"] ?? null);
        echo "<br /><br />
              ";
        // line 50
        if (($context["fax"] ?? null)) {
            // line 51
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 52
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 54
        echo "            </div>
            <div class=\"custom-col\">
              ";
        // line 56
        if (($context["open"] ?? null)) {
            // line 57
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 58
            echo ($context["open"] ?? null);
            echo "<br /><br />
              ";
        }
        // line 60
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 61
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 62
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 64
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 68
        if (($context["locations"] ?? null)) {
            // line 69
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"accordion\">
  ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 72
                echo "  <div class=\"accordion-item\">
    <input type=\"checkbox\" id=\"accordion-location";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 73);
                echo "\" hidden>
    <label class=\"accordion-header\" for=\"accordion-location";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 74);
                echo "\">
      ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 75);
                echo " <i class=\"fa fa-caret-down\"></i>
    </label>
    <div class=\"accordion-content\">
      <div class=\"row\">
        ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "        <div class=\"col\">
          <img src=\"";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 81);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 81);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 81);
                    echo "\" class=\"thumbnail\">
        </div>
        ";
                }
                // line 84
                echo "        <div class=\"col\">
          <strong>";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 85);
                echo "</strong><br>
          <address>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 86);
                echo "</address>
          ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "          <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 88));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn\">
            <i class=\"fa fa-map-marker\"></i> ";
                    // line 89
                    echo ($context["button_map"] ?? null);
                    echo "
          </a>
          ";
                }
                // line 92
                echo "        </div>
        <div class=\"col\">
          <strong>";
                // line 94
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
          ";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 95);
                echo "<br><br>
          ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "          <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
          ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 98);
                    echo "
          ";
                }
                // line 100
                echo "        </div>
        <div class=\"col\">
          ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "          <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br>
          ";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 104);
                    echo "<br><br>
          ";
                }
                // line 106
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "          <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br>
          ";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 108);
                    echo "
          ";
                }
                // line 110
                echo "        </div>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "</div>
      ";
        }
        // line 117
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"contact-form\">
  <fieldset>
    <legend>";
        // line 119
        echo ($context["text_contact"] ?? null);
        echo "</legend>

    <div class=\"form-group required\">
      <label for=\"input-name\">";
        // line 122
        echo ($context["entry_name"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <input type=\"text\" name=\"name\" value=\"";
        // line 124
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\">
        ";
        // line 125
        if (($context["error_name"] ?? null)) {
            // line 126
            echo "        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
        ";
        }
        // line 128
        echo "      </div>
    </div>

    <div class=\"form-group required\">
      <label for=\"input-email\">";
        // line 132
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <input type=\"text\" name=\"email\" value=\"";
        // line 134
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\">
        ";
        // line 135
        if (($context["error_email"] ?? null)) {
            // line 136
            echo "        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
        ";
        }
        // line 138
        echo "      </div>
    </div>

    <div class=\"form-group required\">
      <label for=\"input-enquiry\">";
        // line 142
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
      <div class=\"form-input\">
        <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\">";
        // line 144
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
        ";
        // line 145
        if (($context["error_enquiry"] ?? null)) {
            // line 146
            echo "        <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
        ";
        }
        // line 148
        echo "      </div>
    </div>

    ";
        // line 151
        echo ($context["captcha"] ?? null);
        echo "
  </fieldset>

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
        return "__string_template__a9818d77087252ba029e3849a6d178b4b915f1c9a10f8b5150a5fad19b2ebb64";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 161,  452 => 159,  448 => 158,  442 => 155,  435 => 151,  430 => 148,  424 => 146,  422 => 145,  418 => 144,  413 => 142,  407 => 138,  401 => 136,  399 => 135,  395 => 134,  390 => 132,  384 => 128,  378 => 126,  376 => 125,  372 => 124,  367 => 122,  361 => 119,  355 => 117,  351 => 115,  341 => 110,  336 => 108,  331 => 107,  328 => 106,  323 => 104,  318 => 103,  316 => 102,  312 => 100,  307 => 98,  302 => 97,  300 => 96,  296 => 95,  292 => 94,  288 => 92,  282 => 89,  275 => 88,  273 => 87,  269 => 86,  265 => 85,  262 => 84,  252 => 81,  249 => 80,  247 => 79,  240 => 75,  236 => 74,  232 => 73,  229 => 72,  225 => 71,  219 => 69,  217 => 68,  211 => 64,  206 => 62,  201 => 61,  198 => 60,  193 => 58,  188 => 57,  186 => 56,  182 => 54,  177 => 52,  172 => 51,  170 => 50,  166 => 49,  162 => 48,  158 => 46,  152 => 43,  145 => 42,  143 => 41,  138 => 39,  133 => 37,  130 => 36,  120 => 33,  117 => 32,  115 => 31,  109 => 28,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a9818d77087252ba029e3849a6d178b4b915f1c9a10f8b5150a5fad19b2ebb64", "");
    }
}
