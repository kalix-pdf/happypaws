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

/* __string_template__adad623a761f4d2b654228d739185316ad09b1b551f2d229f689f960e8125d08 */
class __TwigTemplate_f8566b3346a4b58d70d95da3631183cbe0f96765de6531d9969a171ff101cc54 extends Template
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
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-brcle\"></i> ";
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
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-brcle\"></i> ";
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
               <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 44
        echo ($context["column_id_from"] ?? null);
        echo "</label>    
                <div>
                </div>           
                <input type=\"text\" name=\"filter_id_from\" value=\"";
        // line 47
        echo ((($context["filter_id_from"] ?? null)) ? (($context["filter_id_from"] ?? null)) : (""));
        echo "\" placeholder=\"";
        echo ($context["column_id_from"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\">
              </div>



           <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-type\">";
        // line 53
        echo ($context["entry_type"] ?? null);
        echo "</label>
                <select name=\"filter_type\" id=\"input-type\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 56
        if ((($context["filter_type"] ?? null) == "1")) {
            // line 57
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["column_product"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 59
            echo "                  <option value=\"1\">";
            echo ($context["column_product"] ?? null);
            echo "</option>
                  ";
        }
        // line 61
        echo "                  ";
        if ((($context["filter_type"] ?? null) == "2")) {
            // line 62
            echo "                  <option value=\"2\" selected=\"selected\">";
            echo ($context["column_catagory"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 64
            echo "                  <option value=\"2\">";
            echo ($context["column_catagory"] ?? null);
            echo "</option>
                  ";
        }
        // line 66
        echo "                
                </select>
              </div>


            

            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 76
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 79
        if ((array_key_exists("filter_status", $context) && ($context["filter_status"] ?? null))) {
            // line 80
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 82
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 84
        echo "                  ";
        if (((array_key_exists("filter_status", $context) && (($context["filter_status"] ?? null) == 0)) &&  !(null === ($context["filter_status"] ?? null)))) {
            // line 85
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 87
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 89
        echo "                </select>
              </div>

              
              <div class=\"form-group\">
                 <label class=\"control-label\" for=\"input-title\">";
        // line 94
        echo ($context["column_id_to"] ?? null);
        echo "</label>          
                <input type=\"text\" name=\"filter_id_to\" value=\"";
        // line 95
        echo ((($context["filter_id_to"] ?? null)) ? (($context["filter_id_to"] ?? null)) : (""));
        echo "\" placeholder=\"";
        echo ($context["column_id_to"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\">
              </div>

              
           
            

              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 102
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 107
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-carousel\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                 <td class=\"text-left\">";
        // line 113
        if ((($context["sort"] ?? null) == "b.id")) {
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
                  
                  <td class=\"text-left\">
                    ";
        // line 116
        if ((($context["sort"] ?? null) == "bd.title")) {
            // line 117
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 119
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 120
        echo "</td>


                    <td class=\"text-left\"> ";
        // line 123
        echo ($context["column_image"] ?? null);
        echo "  </td>


                     <td class=\"text-left\">
                    ";
        // line 127
        if ((($context["sort"] ?? null) == "b.type")) {
            // line 128
            echo "                    <a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 130
            echo "                    <a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        }
        // line 131
        echo "</td>

                                   
                  <td class=\"text-left\">
                    ";
        // line 135
        if ((($context["sort"] ?? null) == "b.status")) {
            // line 136
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 138
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 139
        echo "</td>

                         <td class=\"text-left\">
                    ";
        // line 142
        if ((($context["sort"] ?? null) == "b.sort_order")) {
            // line 143
            echo "                    <a href=\"";
            echo ($context["sort_sortorder"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 145
            echo "                    <a href=\"";
            echo ($context["sort_sortorder"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 146
        echo "</td>
            
                  <td class=\"text-right\">";
        // line 148
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 152
        if ((array_key_exists("banners", $context) && ($context["banners"] ?? null))) {
            // line 153
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 154
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 155
                if (twig_in_filter((($__internal_compile_0 = $context["banner"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo "                   
                      <input type=\"checkbox\" name=\"selected[]\" class = \"input-selected\" value=\"";
                    // line 156
                    echo (($__internal_compile_1 = $context["banner"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />                   
                    ";
                } else {
                    // line 157
                    echo "                    
                        <input type=\"checkbox\" name=\"selected[]\" class = \"input-selected\" value=\"";
                    // line 158
                    echo (($__internal_compile_2 = $context["banner"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null);
                    echo "\" />                    
                    ";
                }
                // line 159
                echo "</td>
                    
                  <td class=\"text-left \" >";
                // line 161
                echo (($__internal_compile_3 = $context["banner"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 162
                echo (($__internal_compile_4 = $context["banner"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["title"] ?? null) : null);
                echo "</td>
                
                  <td class=\"text-left\">";
                // line 164
                if ((($__internal_compile_5 = $context["banner"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["image"] ?? null) : null)) {
                    // line 165
                    echo "                    <img src=\"";
                    echo (($__internal_compile_6 = $context["banner"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["image"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_compile_7 = $context["banner"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["image"] ?? null) : null);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                } else {
                    // line 167
                    echo "                  <img src=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" alt=\"";
                    echo (($__internal_compile_8 = $context["banner"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["image"] ?? null) : null);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                }
                // line 168
                echo "</td>
                  <td class=\"text-left\">
                  ";
                // line 170
                if (((($__internal_compile_9 = $context["banner"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null) == 1)) {
                    // line 171
                    echo "                  ";
                    echo ($context["column_product"] ?? null);
                    echo " ";
                } else {
                    echo " ";
                    echo ($context["column_catagory"] ?? null);
                    echo "  ";
                }
                echo " </td>
                                    
                  <td class=\"text-left\"> ";
                // line 173
                if (((($__internal_compile_10 = $context["banner"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["status"] ?? null) : null) == "1")) {
                    echo " ";
                    echo ($context["text_enabled"] ?? null);
                    echo " ";
                } else {
                    echo " ";
                    echo ($context["text_disabled"] ?? null);
                    echo " ";
                }
                echo "</td>
                   <td class=\"text-left\">";
                // line 174
                echo (($__internal_compile_11 = $context["banner"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["sort_order"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 175
                echo (($__internal_compile_12 = $context["banner"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  
                    <button type=\"button\" id=\"";
                // line 177
                echo (($__internal_compile_13 = $context["banner"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger single-delete\" ><i class=\"fa fa-trash-o\"></i></button>
                  </td>
                
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                ";
        } else {
            // line 183
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 184
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 187
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 192
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 193
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  <script type=\"text/javascript\"><!-- 
\$('#button-filter').on('click', function() {
  url = 'index.php?route=mobikul/banner&user_token=";
        // line 199
        echo ($context["user_token"] ?? null);
        echo "';

  var filter_title = \$('input[name=\\'filter_title\\']').val();

  if (filter_title) {
    url += '&filter_title=' + encodeURIComponent(filter_title);
  }

  var filter_type = \$('select[name=\\'filter_type\\']').val();

  if (filter_type) {
    url += '&filter_type=' + encodeURIComponent(filter_type);
  }

  var filter_id_from = \$('input[name=\\'filter_id_from\\']').val();

  if (filter_id_from) {
    url += '&filter_id_from=' + encodeURIComponent(filter_id_from);
  }

  var filter_id_to = \$('input[name=\\'filter_id_to\\']').val();

  if (filter_id_to) {
    url += '&filter_id_to=' + encodeURIComponent(filter_id_to);
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
        // line 244
        echo ($context["text_confirm"] ?? null);
        echo "')) {
      \$.ajax({
        url: 'index.php?route=mobikul/banner/delete&user_token=";
        // line 246
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
        // line 273
        echo ($context["text_confirm"] ?? null);
        echo "')) {
      \$.ajax({
        url: 'index.php?route=mobikul/banner/delete&user_token=";
        // line 275
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
        // line 291
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__adad623a761f4d2b654228d739185316ad09b1b551f2d229f689f960e8125d08";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 291,  638 => 275,  633 => 273,  603 => 246,  598 => 244,  550 => 199,  541 => 193,  537 => 192,  530 => 187,  524 => 184,  521 => 183,  518 => 182,  505 => 177,  498 => 175,  494 => 174,  482 => 173,  470 => 171,  468 => 170,  464 => 168,  456 => 167,  448 => 165,  446 => 164,  441 => 162,  437 => 161,  433 => 159,  428 => 158,  425 => 157,  420 => 156,  416 => 155,  413 => 154,  408 => 153,  406 => 152,  399 => 148,  395 => 146,  387 => 145,  377 => 143,  375 => 142,  370 => 139,  362 => 138,  352 => 136,  350 => 135,  344 => 131,  336 => 130,  326 => 128,  324 => 127,  317 => 123,  312 => 120,  304 => 119,  294 => 117,  292 => 116,  272 => 113,  263 => 107,  255 => 102,  243 => 95,  239 => 94,  232 => 89,  226 => 87,  220 => 85,  217 => 84,  211 => 82,  205 => 80,  203 => 79,  197 => 76,  185 => 66,  179 => 64,  173 => 62,  170 => 61,  164 => 59,  158 => 57,  156 => 56,  150 => 53,  139 => 47,  133 => 44,  125 => 41,  121 => 40,  110 => 32,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__adad623a761f4d2b654228d739185316ad09b1b551f2d229f689f960e8125d08", "");
    }
}
