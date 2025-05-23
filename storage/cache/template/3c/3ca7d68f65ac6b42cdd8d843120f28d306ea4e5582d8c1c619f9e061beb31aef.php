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

/* __string_template__01b3fe0bdbf7b8581f349ce88a00dec131335b085be1880680e474adacb910ef */
class __TwigTemplate_2f8e0b790599f15715e46e1caf03d22685cb76211ae149b4e7653c94dcca69e9 extends Template
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
      ";
        // line 28
        echo "      <div class=\"custom-panel\">
      <h3 class=\"letter-head\">";
        // line 29
        echo ($context["text_location"] ?? null);
        echo "</h3>
        <div class=\"custom-panel-body\">
          <div class=\"custom-row-contact\">
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
        return "__string_template__01b3fe0bdbf7b8581f349ce88a00dec131335b085be1880680e474adacb910ef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 162,  454 => 160,  450 => 159,  444 => 156,  437 => 152,  432 => 149,  426 => 147,  424 => 146,  420 => 145,  415 => 143,  409 => 139,  403 => 137,  401 => 136,  397 => 135,  392 => 133,  386 => 129,  380 => 127,  378 => 126,  374 => 125,  369 => 123,  363 => 120,  357 => 118,  353 => 116,  343 => 111,  338 => 109,  333 => 108,  330 => 107,  325 => 105,  320 => 104,  318 => 103,  314 => 101,  309 => 99,  304 => 98,  302 => 97,  298 => 96,  294 => 95,  290 => 93,  284 => 90,  277 => 89,  275 => 88,  271 => 87,  267 => 86,  264 => 85,  254 => 82,  251 => 81,  249 => 80,  242 => 76,  238 => 75,  234 => 74,  231 => 73,  227 => 72,  221 => 70,  219 => 69,  213 => 65,  208 => 63,  203 => 62,  200 => 61,  195 => 59,  190 => 58,  188 => 57,  184 => 55,  179 => 53,  174 => 52,  172 => 51,  168 => 50,  164 => 49,  160 => 47,  154 => 44,  147 => 43,  145 => 42,  140 => 40,  135 => 38,  132 => 37,  122 => 34,  119 => 33,  117 => 32,  111 => 29,  108 => 28,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__01b3fe0bdbf7b8581f349ce88a00dec131335b085be1880680e474adacb910ef", "");
    }
}
