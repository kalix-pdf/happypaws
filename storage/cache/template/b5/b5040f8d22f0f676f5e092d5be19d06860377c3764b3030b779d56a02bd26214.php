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

/* __string_template__0f0539d8fe5cd48925843035448c111409b7072ca0c06f29ca51205da219f8c7 */
class __TwigTemplate_ad5a09456a8ccfa73d21fbfaa097e48c4328200b56536598dbeecac7a3d99abc extends Template
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
        echo "<style>
\t.wk_order_status_box {
\t\tfont-size: 16px;
\t\tpadding: 0;\t\t
\t\tdisplay: flex;
\t\tjustify-content: space-evenly;
\t\tpadding: 0 0 0 0;
\t\tmin-height: 51px;
    \theight: 51px;
\t}

\t.color_complete {
\t\tmargin: 0 0 5px 0;
\t\tborder-radius: 0px;
\t\tcolor: #0C5120;
\t\tbackground-color: #69b572
\t}

\t.color_process {
\t\tmargin: 0 0 5px 0;
\t\tborder-radius: 0px;
\t\tcolor: #004f78;
\t\tbackground-color: #22ade2
\t}

\t.color_cancel {
\t\tmargin: 0 0 5px 0;
\t\tborder-radius: 0px;
\t\tcolor: #b34356;
\t\tbackground-color: #f37587
\t}
  .c100.small {
    font-size: 50px;
    margin-bottom: 24px;
  }
  .margin_top{
    margin-top: 14px;
  }

  @media (max-width: 900px) {
    .wk_order_status_box {
      width: auto;
      margin: 0 0 9px 0;
    }
  }
</style>

<link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/MP/progress_bar.css\">

<div class=\"tile\" style=\"background-color: white;\">
\t<div class=\"tile-body\" style=\"background-color: white;padding: 0;\">
\t\t<div id=\"wk_order_status_container\" style=\"line-height: 5px;\">
\t\t\t
\t\t\t\t<div class=\"col-md-12 col-sm-12 color_complete\">
\t\t\t\t\t<div class=\"wk_order_status_box\">

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"margin_top\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo ($context["complete_order_link"] ?? null);
        echo "\" style=\"color: black;vertical-align: -webkit-baseline-middle;line-height:1;\">";
        echo ($context["text_order_complete"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"c100 p";
        // line 66
        echo ($context["totalCompletePercent"] ?? null);
        echo " small green\">
\t\t\t\t\t\t\t\t<span>";
        // line 67
        echo ($context["totalComplete"] ?? null);
        echo "/";
        echo ($context["totalSellerOrder"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t<div class=\"slice\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"fill\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-12 col-sm-12 color_process\">
\t\t\t\t\t<div class=\"wk_order_status_box\">

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"margin_top\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 84
        echo ($context["processing_order_link"] ?? null);
        echo "\" style=\"color: black;vertical-align: -webkit-baseline-middle;line-height:1;\">";
        echo ($context["text_order_processing"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"c100 p";
        // line 90
        echo ($context["totalProcessingPercent"] ?? null);
        echo " small blue\">
\t\t\t\t\t\t\t\t<span>";
        // line 91
        echo ($context["totalProcessing"] ?? null);
        echo "/";
        echo ($context["totalSellerOrder"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t<div class=\"slice\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"fill\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-12 col-sm-12 color_cancel\">
\t\t\t\t\t<div class=\"wk_order_status_box\">

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"margin_top\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo ($context["cancel_order_link"] ?? null);
        echo "\" style=\"color: black;vertical-align: -webkit-baseline-middle;line-height:1;\">";
        echo ($context["text_order_cancel"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"c100 p";
        // line 114
        echo ($context["totalCanceledPercent"] ?? null);
        echo " small pink\">
\t\t\t\t\t\t\t\t<span>";
        // line 115
        echo ($context["totalCancel"] ?? null);
        echo "/";
        echo ($context["totalSellerOrder"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t<div class=\"slice\">
\t\t\t\t\t\t\t\t\t<div class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"fill\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t</div>
\t</div>
\t<div class=\"tile-footer\" style=\"background-color: #eef4f7\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0f0539d8fe5cd48925843035448c111409b7072ca0c06f29ca51205da219f8c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 115,  183 => 114,  172 => 108,  150 => 91,  146 => 90,  135 => 84,  113 => 67,  109 => 66,  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f0539d8fe5cd48925843035448c111409b7072ca0c06f29ca51205da219f8c7", "");
    }
}
