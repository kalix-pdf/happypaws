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

/* __string_template__576f6d46bca0ef01dcb4ee5eba48dffcf0cd569858832860de7e6e466602c76f */
class __TwigTemplate_d9e7355fcb4b405553a2a12036d92b368fd08d61441f2602a785da6898929199 extends Template
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
        if ((($context["module_marketplace_status"] ?? null) && ($context["marketplace_becomepartnerregistration"] ?? null))) {
            // line 2
            echo "
<fieldset>
  <legend>";
            // line 4
            echo ($context["text_register_becomePartner"] ?? null);
            echo "</legend>
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">Be a MeowChant!</label>
    <div class=\"col-sm-10\">
      ";
            // line 8
            if (($context["tobecomepartner"] ?? null)) {
                // line 9
                echo "      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"1\" checked=\"checked\" />
        ";
                // line 11
                echo ($context["text_yes"] ?? null);
                echo "</label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"0\" />
        ";
                // line 14
                echo ($context["text_no"] ?? null);
                echo "</label>
      ";
            } else {
                // line 16
                echo "      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"1\" />
        ";
                // line 18
                echo ($context["text_yes"] ?? null);
                echo "</label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"0\" checked=\"checked\" />
        ";
                // line 21
                echo ($context["text_no"] ?? null);
                echo "</label>
      ";
            }
            // line 23
            echo "    </div>
  </div>

  <div class=\"form-group required hide\" id=\"fg-shoppartner\">
    <label class=\"col-sm-2 control-label\" for=\"input-shop\">";
            // line 27
            echo ($context["text_shop_name"] ?? null);
            echo "</label>
    <div class=\"col-sm-10\">
      <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
        <input type=\"text\" name=\"shoppartner\" value=\"";
            // line 31
            echo ($context["shoppartner"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_shop_name"] ?? null);
            echo "\" id=\"input-shop\" class=\"form-control\" />
        
      </div>
      
      <!--<li style=\"line-height: 2\"><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdKV53yIaBZAuyvwEmYHPWGxx7OFKkg0Z92MprbO7CUJ_SCIw/viewform\" target=\"_blank\">UPLOAD YOUR DOCUMENTS HERE</a>
      </li>-->
      ";
            // line 37
            if (($context["error_shoppartner"] ?? null)) {
                // line 38
                echo "        <div class=\"text-danger\">";
                echo ($context["error_shoppartner"] ?? null);
                echo "</div>
      ";
            }
            // line 40
            echo "      ";
            if (($context["error_shoppartner"] ?? null)) {
                // line 41
                echo "      <div class=\"text-danger\">";
                echo ($context["error_shoppartner"] ?? null);
                echo "</div>
      ";
            }
            // line 43
            echo "    </div><br> <br>
    <legend class=\"fs-5 mt-4\">Upload your documents here:</legend> 
    <label class=\"col-sm-2 control-label\">BIR 2303/TIN:</label>
    <div class=\"col-sm-10 mt-3\">
        <div class=\"input-group\">
          <input type=\"file\" name=\"birfile\" value=\"birfile\" id=\"birfile\" class=\"form-control mt-3\">
        </div>
    </div>
    
    <label class=\"col-sm-2 control-label\">DTI: </label>
    <div class=\"col-sm-10 mt-3\">
        <div class=\"input-group\">
          <input type=\"file\" name=\"dtifile\" value=\"dtifile\" id=\"dtifile\" class=\"form-control\">
        </div>
    </div>
    <label class=\"col-sm-2 control-label\">Mayor's Permit: </label>
    <div class=\"col-sm-10 mt-3\">
        <div class=\"input-group mt-3\">
          <input type=\"file\" name=\"mayorfile\" value=\"mayorfile\" id=\"mayorfile\" class=\"form-control\">
        </div>
    </div>
    <label class=\"col-sm-2 control-label\">Valid Government Issued I.D: </label>
    <div class=\"col-sm-10 mt-3\">
        <div class=\"input-group mt-3\">
          <input type=\"file\" name=\"validid\" value=\"validid\" id=\"validid\" class=\"form-control\">
        </div>
    </div>
    ";
            // line 73
            echo "    
  </div>

</fieldset>

<script>

  ";
            // line 80
            if (($context["tobecomepartner"] ?? null)) {
                // line 81
                echo "    \$('#fg-shoppartner').removeClass('hide');
  ";
            }
            // line 83
            echo "
  \$('input[name=\\'tobecomepartner\\']').on('change', function() {
    if (\$(this).val() == 1) {
      \$('#fg-shoppartner').removeClass('hide');
    } else {
      \$('#fg-shoppartner').addClass('hide');
    }
  });

    \$( \"#input-shop\" ).change(function() {
      thisshop = this;
      shop = \$(thisshop).val();

      if(shop){

        jQuery(thisshop).prev().html('<i class=\"fa fa-spinner fa-spin\"></i>');

        \$.ajax({
               type: 'POST',
               data: ({shop: shop}),
               dataType: 'json',
               url: 'index.php?route=customerpartner/sell/wkmpregistation',
               success: function(data){

                  if(data['success']){
                    jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-success\" title=\"";
            // line 108
            echo ($context["text_avaiable"] ?? null);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                  }else if(data['error']){
                    jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
            // line 110
            echo ($context["text_no_avaiable"] ?? null);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></span>');
                  }

                }
            });
      }
    });
    

    //handle file upload
  \$('#birfile, #dtifile, #mayorfile, #validid').change(function () {
    var formData = new FormData();
    var birFile = \$('#birfile')[0].files[0];
    var dtiFile = \$('#dtifile')[0].files[0];
    var mayorFile = \$('#mayorfile')[0].files[0];
    var validIdFile = \$('#validid')[0].files[0];

    if (!birFile || !dtiFile) {
        alert(\"BIR, DTI, Mayor's Permit, and Valid ID files are required.\");
        return;
    }

    formData.append('birfile', birFile);
    formData.append('dtifile', dtiFile);
    formData.append('mayorfile', mayorFile);
    formData.append('validid', validIdFile);

    \$.ajax({
        type: 'POST',
        url: 'index.php?route=customerpartner/sell/wkmpregistration1',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function () {
            \$('.file-upload-feedback').html('<i class=\"fa fa-spinner fa-spin\"></i> Uploading...');
        },
        success: function (response) {
            \$('.file-upload-feedback').html(''); // Clear all messages

            if (response.success) {
                \$.each(response.success, function (key, message) {
                    \$('#' + key).prev().append(
                        '<span class=\"text-success\"><i class=\"fa fa-thumbs-up\"></i> ' + message + '</span><br>'
                    );
                });
            }

            if (response.error) {
                \$.each(response.error, function (key, message) {
                    \$('#' + key).prev().append(
                        '<span class=\"text-danger\"><i class=\"fa fa-exclamation-triangle\"></i> ' + message + '</span><br>'
                    );
                });

                if (response.error.files) {
                    alert(response.error.files);
                }
            }
        }
    });
});


    ";
            // line 201
            echo "
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__576f6d46bca0ef01dcb4ee5eba48dffcf0cd569858832860de7e6e466602c76f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 201,  199 => 110,  194 => 108,  167 => 83,  163 => 81,  161 => 80,  152 => 73,  123 => 43,  117 => 41,  114 => 40,  108 => 38,  106 => 37,  95 => 31,  88 => 27,  82 => 23,  77 => 21,  71 => 18,  67 => 16,  62 => 14,  56 => 11,  52 => 9,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__576f6d46bca0ef01dcb4ee5eba48dffcf0cd569858832860de7e6e466602c76f", "");
    }
}
