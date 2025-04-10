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

/* __string_template__d492480a38cc5b9761d9ceefb9e94ab62b67e17399af7849545aa71e0f956f75 */
class __TwigTemplate_8a51202cef431b877504ed2324fa76398a323fc5586b73e30fa54c9a4ea00e26 extends Template
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
        if (($context["superbar_status"] ?? null)) {
            // line 2
            echo "  <div class=\"superbar\">
  <div id=\"user_opener\">
    <span class=\"opener\">
      <i class=\"fa fa-users\"></i>
    </span>
  </div>
    ";
            // line 8
            if (($context["upsell_status"] ?? null)) {
                // line 9
                echo "    <button type=\"button\" data-keyboard=\"true\" class=\"superbar-button\" data-toggle=\"modal\" id=\"wkup\" data-target=\"#wkModal\" title=\"";
                echo ($context["superbar_upsell_tooltip"] ?? null);
                echo "\"></button>
    ";
            }
            // line 11
            echo "    ";
            if (($context["crosssell_status"] ?? null)) {
                // line 12
                echo "    <button type=\"button\" data-keyboard=\"true\" class=\"superbar-button\" data-toggle=\"modal\" id=\"wkcross\" data-target=\"#wkModal\" title=\"";
                echo ($context["superbar_crosssell_tooltip"] ?? null);
                echo "\"></button>
    ";
            }
            // line 14
            echo "    ";
            if (($context["gift_status"] ?? null)) {
                // line 15
                echo "    <button type=\"button\" data-keyboard=\"true\" class=\"superbar-button\" data-toggle=\"modal\" id=\"wkgift\" data-target=\"#wkModal\" title=\"";
                echo ($context["superbar_gift_tooltip"] ?? null);
                echo "\"></button>
    ";
            }
            // line 17
            echo "    ";
            if (($context["custom_status"] ?? null)) {
                // line 18
                echo "    <button type=\"button\" class=\"superbar-button\" data-toggle=\"modal\" id=\"wkcustom\" data-target=\"#wkModal\" title=\"";
                echo ($context["superbar_custom_tooltip"] ?? null);
                echo "\"></button>
    ";
            }
            // line 20
            echo "  </div>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"wkModal\" role=\"dialog\" tabindex='-1'>
    <div class=\"modal-dialog modal-lg\">

      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <p class=\"modal-title\" id=\"wkmodalheader\">OFFERS</p>
          <p class=\"modal-title\" id=\"wkmodalheader2\">OFFERS</p>
        </div>
        <div class=\"modal-body\" id=\"wkPromomodalbody\">
          <i class=\"fa fa-spinner fa-6 fa-spin\"></i>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>

<style type=\"text/css\">
  .superbar{
    height: auto;
    background-color: ";
            // line 46
            echo ($context["superbar_color"] ?? null);
            echo ";
    background-image: url(\"";
            // line 47
            echo ($context["superbar_design_layout_icon"] ?? null);
            echo "\");
    border: 2px ";
            // line 48
            echo ((($context["superbar_border_style"] ?? null) . " ") . ($context["superbar_border_color"] ?? null));
            echo ";
    text-align: center;
    position: fixed;
    ";
            // line 51
            echo ($context["hposition"] ?? null);
            echo ": ";
            echo ($context["hper"] ?? null);
            echo "%;
    ";
            // line 52
            echo ($context["vposition"] ?? null);
            echo ": ";
            echo ($context["vper"] ?? null);
            echo "%;
    width: ";
            // line 53
            echo ($context["superbar_width"] ?? null);
            echo "px;
    z-index: 1000;
    cursor: move;
    display: none;
  }
  .superbar button{
    margin: 1% 2%;
    background-repeat: no-repeat;
    width: ";
            // line 61
            echo ($context["bwidth"] ?? null);
            echo "px;
    height: ";
            // line 62
            echo ($context["bheight"] ?? null);
            echo "px;
    background-color: ";
            // line 63
            echo ($context["superbar_button_color"] ?? null);
            echo ";
    border: none;
  }

  .opener {
    display: block;
    height: 100%;
    padding: 6px;
    width: 100%;
  }
  #user_opener {
      background: #fefefe none repeat scroll 0 0;
      border: 3px solid;
      border-bottom-left-radius: 20px;
      border-top-left-radius: 20px;
      cursor: pointer;
      height: 38px;
      left: -18%;
      overflow: hidden;
      position: absolute;
      text-align: center;
      top: 22%;
      width: 50px;
      z-index: 1000;
      display: none;
  }

  #wkup {
    background-image: url(\"";
            // line 91
            echo ($context["superbar_upsell_icon"] ?? null);
            echo "\");
  }
  #wkcross {
    background-image: url(\"";
            // line 94
            echo ($context["superbar_crosssell_icon"] ?? null);
            echo "\");
  }
  #wkgift {
    background-image: url(\"";
            // line 97
            echo ($context["superbar_gift_icon"] ?? null);
            echo "\");
  }
  #wkcustom {
    background-image: url(\"";
            // line 100
            echo ($context["superbar_custom_icon"] ?? null);
            echo "\");
  }
  #wkPromomodalbody {
    text-align: center;
  }
  #wkPromomodalbody > .fa {
    font-size: 40px;
  }
  @media (max-width: 767px) {
    .superbar{
      right: -";
            // line 110
            echo ($context["superbar_width"] ?? null);
            echo "px;
    }
    #user_opener {
      display: block;
    }
  }
</style>
<script type=\"text/javascript\">

  var timeout = ";
            // line 119
            echo ($context["superbar_time"] ?? null);
            echo " * 1000;
  var click = false;
  var up_inter = [], cross_inter = [], gift_inter = [];

    \$( document ).ready(function() {
      setTimeout(function(){ \$(\".superbar\").fadeIn(2000); }, timeout);
    });

  \$(\".superbar\").draggable();

  \$('#user_opener').click(function(){
    if(\$('.superbar').css('right') != '0px'){
      \$('.superbar').animate({right:\"0px\"});
    } else {
      \$('.superbar').animate({right:\"-";
            // line 133
            echo ($context["superbar_width"] ?? null);
            echo "px\"});
    }
  })

  var product_id = \$('input[name=\\'product_id\\']').val();

  var click_id = 0;

  \$(document).on('click',\".superbar-button\",function () {
    click = true;
    if (\$(this).attr('id').trim() == 'wkup') {
      click_id = 1;

      \$(document).find(\"#wkModal #wkmodalheader\").html('";
            // line 146
            echo ($context["upsell_title"] ?? null);
            echo "');
        \$(document).find(\"#wkModal #wkmodalheader2\").html('";
            // line 147
            echo ($context["uheader1"] ?? null);
            echo "');
      \$(document).find(\"#wkPromomodalbody\").html('<i class=\"fa fa-spinner fa-6 fa-spin\"></i>');
      \$(document).find(\"#wkPromomodalbody\").load(\"index.php?route=account/customerpartner/upsell/info&type=1&product_id=\" + product_id);

    } else if (\$(this).attr('id') == 'wkcross') {
      click_id = 2;
      \$(document).find(\"#wkModal #wkmodalheader\").html('";
            // line 153
            echo ($context["crosssell_title"] ?? null);
            echo "');
        \$(document).find(\"#wkModal #wkmodalheader2\").html('";
            // line 154
            echo ($context["cheader1"] ?? null);
            echo "');
      \$(\"#wkPromomodalbody\").html('<i class=\"fa fa-spinner fa-6 fa-spin\"></i>');
      \$(\"#wkPromomodalbody\").load(\"index.php?route=account/customerpartner/crosssell/info&type=2&product_id=\" + product_id);

    } else if (\$(this).attr('id') == 'wkcustom') {
      \$(document).find(\"#wkmodalheader\").html(\"Custom Products\");
      \$(document).find(\"#wkPromomodalbody\").html('<i class=\"fa fa-spinner fa-6 fa-spin\"></i>');
      \$(document).find(\"#wkPromomodalbody\").load(\"index.php?route=account/customerpartner/customsell/info&type=4&product_id=\" + product_id);
    };

  })

  var refresh_time = ";
            // line 166
            echo ($context["refresh_time"] ?? null);
            echo " * 1000;
  var struck_time = ";
            // line 167
            echo ($context["struck_time"] ?? null);
            echo " * 1000;

  var refreshBar = setInterval('autoRefresh()', refresh_time);
  var fadeBar = setInterval('fadeoutSuperbar()', struck_time);

  function fadeoutSuperbar () {
    if (!click) {
      \$(\".superbar\").fadeOut(2000);
      clearInterval(fadeBar);
      clearInterval(refreshBar);
    };
  }

  function autoRefresh () {
    if (click_id) {
      if (click_id == '1') {
        \$(\"#wkmodalheader\").html('";
            // line 183
            echo ($context["uheader1"] ?? null);
            echo "');
        \$(\"#wkmodalheader2\").html('";
            // line 184
            echo ($context["uheader2"] ?? null);
            echo "');
        \$(\"#wkPromomodalbody\").html('<i class=\"fa fa-spinner fa-6 fa-spin\"></i>');
        for (var i = 0; i < up_inter.length; i++) {
          var temp = eval(up_inter[i]);
          clearInterval(temp);
        }
        up_inter = [];
        \$(\"#wkPromomodalbody\").load(\"index.php?route=account/customerpartner/upsell/info&type=1&product_id=\" + product_id);
      } else if (click_id == '2') {
        \$(\"#wkmodalheader\").html('";
            // line 193
            echo ($context["cheader1"] ?? null);
            echo "');
        \$(\"#wkmodalheader2\").html('";
            // line 194
            echo ($context["cheader2"] ?? null);
            echo "');
        \$(\"#wkPromomodalbody\").html('<i class=\"fa fa-spinner fa-6 fa-spin\"></i>');
        for (var i = 0; i < up_inter.length; i++) {
          var temp = eval(up_inter[i]);
          clearInterval(temp);
        }
        cross_inter = [];
        \$(\"#wkPromomodalbody\").load(\"index.php?route=account/customerpartner/crosssell/info&type=2&product_id=\" + product_id);
      }
    };
    \$.ajax({
      url: 'index.php?route=extension/module/superbar/ajax&product_id=' + product_id,
      dataType: 'json',
      success: function(json) {
        if (!json['upsell_status']) {
          \$('#wkup').remove();
        };
        if (!json['crosssell_status']) {
          \$('#wkcross').remove();
        };
        if (!json['gift_status']) {
          \$('#wkgift').remove();
        };
        if (!json['superbar_status']) {
          \$('.superbar').remove();

        };
      }
    });
  }
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__d492480a38cc5b9761d9ceefb9e94ab62b67e17399af7849545aa71e0f956f75";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 194,  333 => 193,  321 => 184,  317 => 183,  298 => 167,  294 => 166,  279 => 154,  275 => 153,  266 => 147,  262 => 146,  246 => 133,  229 => 119,  217 => 110,  204 => 100,  198 => 97,  192 => 94,  186 => 91,  155 => 63,  151 => 62,  147 => 61,  136 => 53,  130 => 52,  124 => 51,  118 => 48,  114 => 47,  110 => 46,  82 => 20,  76 => 18,  73 => 17,  67 => 15,  64 => 14,  58 => 12,  55 => 11,  49 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d492480a38cc5b9761d9ceefb9e94ab62b67e17399af7849545aa71e0f956f75", "");
    }
}
