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

/* __string_template__7ec478905e6e5d219e4ca835c08101bf6760ffb49e07ac761c61f89cc84e7bfe */
class __TwigTemplate_66be49c438271411d0551373b21c227698b70b510d9a1336c0ce568a057ec141 extends Template
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
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 68
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 70);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 70);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 72);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 76);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 78
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 78);
                echo "</strong><br/>
                  <address>
                  ";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 80);
                echo "
                  </address>
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 83));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 85
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 86
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 87);
                echo "<br/>
                  <br/>
                  ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 91);
                    echo "
                  ";
                }
                // line 93
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 95
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 97);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 100
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 102);
                    echo "
                  ";
                }
                // line 104
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "      </div>
      ";
        }
        // line 112
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 114
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 116
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 118
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 119
        if (($context["error_name"] ?? null)) {
            // line 120
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 122
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 125
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 127
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 128
        if (($context["error_email"] ?? null)) {
            // line 129
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 131
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 134
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 136
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 137
        if (($context["error_enquiry"] ?? null)) {
            // line 138
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 140
        echo "            </div>
          </div>
          ";
        // line 142
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 146
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 150
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 151
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7ec478905e6e5d219e4ca835c08101bf6760ffb49e07ac761c61f89cc84e7bfe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 153,  437 => 151,  433 => 150,  426 => 146,  419 => 142,  415 => 140,  409 => 138,  407 => 137,  403 => 136,  398 => 134,  393 => 131,  387 => 129,  385 => 128,  381 => 127,  376 => 125,  371 => 122,  365 => 120,  363 => 119,  359 => 118,  354 => 116,  349 => 114,  343 => 112,  339 => 110,  328 => 104,  323 => 102,  318 => 101,  315 => 100,  309 => 97,  304 => 96,  302 => 95,  298 => 93,  293 => 91,  288 => 90,  286 => 89,  281 => 87,  277 => 86,  274 => 85,  264 => 83,  262 => 82,  257 => 80,  251 => 78,  241 => 76,  239 => 75,  233 => 72,  226 => 70,  222 => 68,  218 => 67,  212 => 65,  210 => 64,  204 => 60,  199 => 58,  194 => 57,  191 => 56,  185 => 53,  180 => 52,  178 => 51,  174 => 49,  169 => 47,  164 => 46,  162 => 45,  157 => 43,  153 => 42,  150 => 41,  140 => 39,  138 => 38,  133 => 36,  127 => 34,  117 => 32,  115 => 31,  108 => 27,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  61 => 14,  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7ec478905e6e5d219e4ca835c08101bf6760ffb49e07ac761c61f89cc84e7bfe", "");
    }
}
