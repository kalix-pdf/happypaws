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

/* __string_template__bcb52cf1d61509eb0c7a3335c3cc4f27644fa554f4f3939867c8799e376da1b3 */
class __TwigTemplate_6f8a49e03f0233a8aa1fac2c8a50935592706d209aae0b2a617d21aab9f55f53 extends Template
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
  
      <div class=\"custom-panel\">
        <div class=\"custom-panel-body\">
          <div class=\"custom-row-contact\">
           <h1>";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 31
        echo ($context["text_location"] ?? null);
        echo "</h3>
            ";
        // line 32
        if (($context["image"] ?? null)) {
            // line 33
            echo "            <div class=\"custom-col\">
              <img src=\"";
            // line 34
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"custom-img-thumbnail\" />
            </div>
            ";
        }
        // line 37
        echo "            <div class=\"custom-col\">
              <strong>";
        // line 38
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
                ";
        // line 40
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 42
        if (($context["geocode"] ?? null)) {
            // line 43
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"custom-btn custom-btn-info\">
                <i class=\"fa fa-map-marker\"></i> ";
            // line 44
            echo ($context["button_map"] ?? null);
            echo "
              </a>
              ";
        }
        // line 47
        echo "            </div>
            <div class=\"custom-col\">
              <strong>";
        // line 49
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 50
        echo ($context["telephone"] ?? null);
        echo "<br /><br />
              ";
        // line 51
        if (($context["fax"] ?? null)) {
            // line 52
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 53
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 55
        echo "            </div>
            <div class=\"custom-col\">
              ";
        // line 57
        if (($context["open"] ?? null)) {
            // line 58
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 59
            echo ($context["open"] ?? null);
            echo "<br /><br />
              ";
        }
        // line 61
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 62
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 63
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 65
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 69
        if (($context["locations"] ?? null)) {
            // line 70
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"accordion\">
  ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 73
                echo "  <div class=\"accordion-item\">
    <input type=\"checkbox\" id=\"accordion-location";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 74);
                echo "\" hidden>
    <label class=\"accordion-header\" for=\"accordion-location";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 75);
                echo "\">
      ";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                echo " <i class=\"fa fa-caret-down\"></i>
    </label>
    <div class=\"accordion-content\">
      <div class=\"row\">
        ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "        <div class=\"col\">
          <img src=\"";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 82);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    echo "\" class=\"thumbnail\">
        </div>
        ";
                }
                // line 85
                echo "        <div class=\"col\">
          <strong>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 86);
                echo "</strong><br>
          <address>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 87);
                echo "</address>
          ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "          <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 89));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn\">
            <i class=\"fa fa-map-marker\"></i> ";
                    // line 90
                    echo ($context["button_map"] ?? null);
                    echo "
          </a>
          ";
                }
                // line 93
                echo "        </div>
        <div class=\"col\">
          <strong>";
                // line 95
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
          ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 96);
                echo "<br><br>
          ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "          <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
          ";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 99);
                    echo "
          ";
                }
                // line 101
                echo "        </div>
        <div class=\"col\">
          ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "          <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br>
          ";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 105);
                    echo "<br><br>
          ";
                }
                // line 107
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "          <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br>
          ";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 109);
                    echo "
          ";
                }
                // line 111
                echo "        </div>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "</div>
      ";
        }
        // line 118
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"contact-form\">
  <fieldset>
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
  </fieldset>

  <div class=\"form-actions\">
    <input class=\"btn-primary\" type=\"submit\" value=\"";
        // line 156
        echo ($context["button_submit"] ?? null);
        echo "\">
  </div>
</form>
      ";
        // line 159
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 160
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 162
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__bcb52cf1d61509eb0c7a3335c3cc4f27644fa554f4f3939867c8799e376da1b3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 162,  453 => 160,  449 => 159,  443 => 156,  436 => 152,  431 => 149,  425 => 147,  423 => 146,  419 => 145,  414 => 143,  408 => 139,  402 => 137,  400 => 136,  396 => 135,  391 => 133,  385 => 129,  379 => 127,  377 => 126,  373 => 125,  368 => 123,  362 => 120,  356 => 118,  352 => 116,  342 => 111,  337 => 109,  332 => 108,  329 => 107,  324 => 105,  319 => 104,  317 => 103,  313 => 101,  308 => 99,  303 => 98,  301 => 97,  297 => 96,  293 => 95,  289 => 93,  283 => 90,  276 => 89,  274 => 88,  270 => 87,  266 => 86,  263 => 85,  253 => 82,  250 => 81,  248 => 80,  241 => 76,  237 => 75,  233 => 74,  230 => 73,  226 => 72,  220 => 70,  218 => 69,  212 => 65,  207 => 63,  202 => 62,  199 => 61,  194 => 59,  189 => 58,  187 => 57,  183 => 55,  178 => 53,  173 => 52,  171 => 51,  167 => 50,  163 => 49,  159 => 47,  153 => 44,  146 => 43,  144 => 42,  139 => 40,  134 => 38,  131 => 37,  121 => 34,  118 => 33,  116 => 32,  112 => 31,  108 => 30,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bcb52cf1d61509eb0c7a3335c3cc4f27644fa554f4f3939867c8799e376da1b3", "");
    }
}
