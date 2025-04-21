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

/* __string_template__c86a743171ab1b277b98d8afec2e486b38617b7f6378b65e40290d3bb3a6eb20 */
class __TwigTemplate_61e1b50ace37b63fa9c33d7a00c1103c3886231cb22c8296e0ed0a5077ee1f34 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger delete\" ><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "
    
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
             
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-title\">";
        // line 40
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_title\" value=\"";
        // line 41
        echo ((($context["filter_title"] ?? null)) ? (($context["filter_title"] ?? null)) : (""));
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
              </div>
              
              
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 51
        if ((array_key_exists("filter_status", $context) && ($context["filter_status"] ?? null))) {
            // line 52
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 54
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 56
        echo "                  ";
        if (((array_key_exists("filter_status", $context) && (($context["filter_status"] ?? null) == 0)) &&  !(null === ($context["filter_status"] ?? null)))) {
            // line 57
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 59
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 61
        echo "                </select>
              </div>

            

              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 66
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 71
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-carousel\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                 <td class=\"text-left\">";
        // line 77
        if ((($context["sort"] ?? null) == "w.id")) {
            echo " <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_id"] ?? null);
            echo "\">";
            echo ($context["column_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  
                  <td class=\"text-left\"> ";
        // line 79
        echo ($context["column_image"] ?? null);
        echo "   </td>
               
                  <td class=\"text-left\">
                    ";
        // line 82
        if ((($context["sort"] ?? null) == "w.title")) {
            // line 83
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 85
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 86
        echo "</td>

                   <td class=\"text-left\"> ";
        // line 88
        echo ($context["column_description"] ?? null);
        echo "   </td>
                                  
                  <td class=\"text-left\">
                    ";
        // line 91
        if ((($context["sort"] ?? null) == "w.status")) {
            // line 92
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 94
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 95
        echo "</td>
                                   
                  <td class=\"text-right\">";
        // line 97
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 101
        if ((array_key_exists("walkthroughs", $context) && ($context["walkthroughs"] ?? null))) {
            // line 102
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["walkthroughs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["walkthrough"]) {
                // line 103
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 104
                if (twig_in_filter((($__internal_compile_0 = $context["walkthrough"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo "                   
                      <input type=\"checkbox\" name=\"selected[]\" class = \"input-selected\" value=\"";
                    // line 105
                    echo (($__internal_compile_1 = $context["walkthrough"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />                   
                    ";
                } else {
                    // line 106
                    echo "                    
                        <input type=\"checkbox\" name=\"selected[]\" class = \"input-selected\" value=\"";
                    // line 107
                    echo (($__internal_compile_2 = $context["walkthrough"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />                    
                    ";
                }
                // line 108
                echo "</td>
                    
                  <td class=\"text-left \" >";
                // line 110
                echo (((($__internal_compile_3 = $context["walkthrough"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)) ? ((($__internal_compile_4 = $context["walkthrough"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null)) : (""));
                echo "</td>
                 
                
                  <td class=\"text-left\">";
                // line 113
                if ((($__internal_compile_5 = $context["walkthrough"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["image"] ?? null) : null)) {
                    // line 114
                    echo "                    <img src=\"";
                    echo (($__internal_compile_6 = $context["walkthrough"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                } else {
                    // line 116
                    echo "                  <img src=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                }
                // line 117
                echo "</td>

                     <td class=\"text-left\">";
                // line 119
                echo (((($__internal_compile_7 = $context["walkthrough"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["title"] ?? null) : null)) ? ((($__internal_compile_8 = $context["walkthrough"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["title"] ?? null) : null)) : (""));
                echo "</td>

                      <td class=\"text-left\">";
                // line 121
                echo (((($__internal_compile_9 = $context["walkthrough"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["description"] ?? null) : null)) ? ((($__internal_compile_10 = $context["walkthrough"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["description"] ?? null) : null)) : (""));
                echo "</td>

               
                                    
                  <td class=\"text-left\"> ";
                // line 125
                if (((($__internal_compile_11 = $context["walkthrough"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["status"] ?? null) : null) == "1")) {
                    echo " ";
                    echo ($context["text_enabled"] ?? null);
                    echo " ";
                } else {
                    echo " ";
                    echo ($context["text_disabled"] ?? null);
                    echo " ";
                }
                echo "</td>
                 
                  <td class=\"text-right\"><a href=\"";
                // line 127
                echo (($__internal_compile_12 = $context["walkthrough"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  
                    <button type=\"button\" id=\"";
                // line 129
                echo (($__internal_compile_13 = $context["walkthrough"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger single-delete\" ><i class=\"fa fa-trash-o\"></i></button>
                  </td>
                
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['walkthrough'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                ";
        } else {
            // line 135
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 136
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 139
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 144
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 145
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  <script type=\"text/javascript\"><!-- 
\$('#button-filter').on('click', function() {
  url = 'index.php?route=mobikul/walkthrough&user_token=";
        // line 151
        echo ($context["user_token"] ?? null);
        echo "';

  var filter_title = \$('input[name=\\'filter_title\\']').val();

  if (filter_title) {
    url += '&filter_title=' + encodeURIComponent(filter_title);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status) {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }
    

  location = url;
});
//--></script>

<script type=\"text/javascript\"><!-- 
\$('.delete').on('click', function() {
   deleteCarousel();
 
});
\$('.single-delete').on('click', function() { 
   var post_arr = [];          
   post_arr.push(this.id);  
   if (confirm('";
        // line 178
        echo ($context["text_confirm"] ?? null);
        echo "')) {
      \$.ajax({
        url: 'index.php?route=mobikul/walkthrough/delete&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "',
        data : {post_id : post_arr },
        method: 'POST',
        dataType: 'json',
        success: function (json) {
          window.location.reload();
        },
        error : function(error){
          console.log(error);
        },
        async: false
      });
    } 
 
});
function deleteCarousel(){
  var post_arr = [];

    // Get checked checkboxes
    \$('.input-selected').each(function() {
      if (jQuery(this).is(\":checked\")) {      
        var id = this.value;           
        post_arr.push(id);
        
      }
    });
  
    if (confirm('";
        // line 207
        echo ($context["text_confirm"] ?? null);
        echo "')) {
      \$.ajax({
        url: 'index.php?route=mobikul/walkthrough/delete&user_token=";
        // line 209
        echo ($context["user_token"] ?? null);
        echo "',
        data : {post_id : post_arr },
        method: 'POST',
        dataType: 'json',
        success: function (json) {
          window.location.reload();
        },
        error : function(error){
          console.log(error);
        },
        async: false
      });
    }   
}
//--></script>

";
        // line 225
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__c86a743171ab1b277b98d8afec2e486b38617b7f6378b65e40290d3bb3a6eb20";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 225,  488 => 209,  483 => 207,  453 => 180,  448 => 178,  418 => 151,  409 => 145,  405 => 144,  398 => 139,  392 => 136,  389 => 135,  386 => 134,  373 => 129,  366 => 127,  353 => 125,  346 => 121,  341 => 119,  337 => 117,  329 => 116,  321 => 114,  319 => 113,  313 => 110,  309 => 108,  304 => 107,  301 => 106,  296 => 105,  292 => 104,  289 => 103,  284 => 102,  282 => 101,  275 => 97,  271 => 95,  263 => 94,  253 => 92,  251 => 91,  245 => 88,  241 => 86,  233 => 85,  223 => 83,  221 => 82,  215 => 79,  196 => 77,  187 => 71,  179 => 66,  172 => 61,  166 => 59,  160 => 57,  157 => 56,  151 => 54,  145 => 52,  143 => 51,  137 => 48,  125 => 41,  121 => 40,  110 => 32,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c86a743171ab1b277b98d8afec2e486b38617b7f6378b65e40290d3bb3a6eb20", "");
    }
}
