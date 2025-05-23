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

/* __string_template__d42c56624ca075a41c864c51d74108dc9e38bfeed51a331a2af7be88a93bb911 */
class __TwigTemplate_01c0c360025bd4d51794952b1a426c01f02a6e4870a98d57b5e836edafcf1e0f extends Template
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
      <h3>";
        // line 27
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 31
        if (($context["image"] ?? null)) {
            // line 32
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 34
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 36
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 38
        if (($context["geocode"] ?? null)) {
            // line 39
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 41
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 42
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 43
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 45
        if (($context["fax"] ?? null)) {
            // line 46
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 47
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 49
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 51
        if (($context["open"] ?? null)) {
            // line 52
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 53
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 56
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 57
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 58
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 60
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 64
        if (($context["locations"] ?? null)) {
            // line 65
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"accordion\">
  ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 68
                echo "  <div class=\"accordion-item\">
    <input type=\"checkbox\" id=\"accordion-location";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 69);
                echo "\" hidden>
    <label class=\"accordion-header\" for=\"accordion-location";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 70);
                echo "\">
      ";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 71);
                echo " <i class=\"fa fa-caret-down\"></i>
    </label>
    <div class=\"accordion-content\">
      <div class=\"row\">
        ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "        <div class=\"col\">
          <img src=\"";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 77);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                    echo "\" class=\"thumbnail\">
        </div>
        ";
                }
                // line 80
                echo "        <div class=\"col\">
          <strong>";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 81);
                echo "</strong><br>
          <address>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 82);
                echo "</address>
          ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "          <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 84));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn\">
            <i class=\"fa fa-map-marker\"></i> ";
                    // line 85
                    echo ($context["button_map"] ?? null);
                    echo "
          </a>
          ";
                }
                // line 88
                echo "        </div>
        <div class=\"col\">
          <strong>";
                // line 90
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
          ";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 91);
                echo "<br><br>
          ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "          <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
          ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 94);
                    echo "
          ";
                }
                // line 96
                echo "        </div>
        <div class=\"col\">
          ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "          <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br>
          ";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 100);
                    echo "<br><br>
          ";
                }
                // line 102
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "          <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br>
          ";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 104);
                    echo "
          ";
                }
                // line 106
                echo "        </div>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>
      ";
        }
        // line 113
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 115
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 117
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 119
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 120
        if (($context["error_name"] ?? null)) {
            // line 121
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 123
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 126
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 128
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 129
        if (($context["error_email"] ?? null)) {
            // line 130
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 132
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 135
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 137
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 138
        if (($context["error_enquiry"] ?? null)) {
            // line 139
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 141
        echo "            </div>
          </div>
          ";
        // line 143
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 147
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 151
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 152
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 154
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d42c56624ca075a41c864c51d74108dc9e38bfeed51a331a2af7be88a93bb911";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 154,  442 => 152,  438 => 151,  431 => 147,  424 => 143,  420 => 141,  414 => 139,  412 => 138,  408 => 137,  403 => 135,  398 => 132,  392 => 130,  390 => 129,  386 => 128,  381 => 126,  376 => 123,  370 => 121,  368 => 120,  364 => 119,  359 => 117,  354 => 115,  348 => 113,  344 => 111,  334 => 106,  329 => 104,  324 => 103,  321 => 102,  316 => 100,  311 => 99,  309 => 98,  305 => 96,  300 => 94,  295 => 93,  293 => 92,  289 => 91,  285 => 90,  281 => 88,  275 => 85,  268 => 84,  266 => 83,  262 => 82,  258 => 81,  255 => 80,  245 => 77,  242 => 76,  240 => 75,  233 => 71,  229 => 70,  225 => 69,  222 => 68,  218 => 67,  212 => 65,  210 => 64,  204 => 60,  199 => 58,  194 => 57,  191 => 56,  185 => 53,  180 => 52,  178 => 51,  174 => 49,  169 => 47,  164 => 46,  162 => 45,  157 => 43,  153 => 42,  150 => 41,  140 => 39,  138 => 38,  133 => 36,  127 => 34,  117 => 32,  115 => 31,  108 => 27,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d42c56624ca075a41c864c51d74108dc9e38bfeed51a331a2af7be88a93bb911", "");
    }
}
