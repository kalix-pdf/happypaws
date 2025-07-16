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

/* common/filemanager.twig */
class __TwigTemplate_7ad6c92c61c11b4a94204d699bfcd3e4fe8d783e8d16ccf7f22c20521e61c628 extends Template
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
\t.fa-5x {
\t\tfont-size: 5em;
\t}
</style>
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 14
        echo ($context["parent"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_parent"] ?? null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 15
        echo ($context["button_upload"] ?? null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 16
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 17
        echo ($context["button_delete"] ?? null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_search"] ?? null);
        echo "\" class=\"form-control\">
            <span class=\"input-group-btn\">
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 23
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </span></div>
        </div>
      </div>
      <hr />
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["images"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "      <div class=\"row\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 31
                echo "        <div class=\"col-sm-3 text-center\">
          ";
                // line 32
                if (((($__internal_compile_0 = $context["image"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "directory")) {
                    // line 33
                    echo "          <div class=\"text-center\"><a href=\"";
                    echo (($__internal_compile_1 = $context["image"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["href"] ?? null) : null);
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 35
                    echo (($__internal_compile_2 = $context["image"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["path"] ?? null) : null);
                    echo "\" />
            ";
                    // line 36
                    echo (($__internal_compile_3 = $context["image"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null);
                    echo "</label>
          ";
                }
                // line 38
                echo "          ";
                if (((($__internal_compile_4 = $context["image"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null) == "image")) {
                    // line 39
                    echo "          <a href=\"";
                    echo (($__internal_compile_5 = $context["image"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["href"] ?? null) : null);
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo (($__internal_compile_6 = $context["image"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_compile_7 = $context["image"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_compile_8 = $context["image"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null);
                    echo "\" /></a>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 41
                    echo (($__internal_compile_9 = $context["image"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["path"] ?? null) : null);
                    echo "\" />
            ";
                    // line 42
                    echo (($__internal_compile_10 = $context["image"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                    echo "</label>
          ";
                }
                // line 44
                echo "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      </div>
      <br />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 50
        echo ($context["pagination"] ?? null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 54
        if (($context["target"] ?? null)) {
            // line 55
            echo "\tvar target = '";
            echo ($context["target"] ?? null);
            echo "';
\tvar thumb = '";
            // line 56
            echo ($context["thumb"] ?? null);
            echo "';
\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();
\tif (thumb){
\t    \$('#'+thumb+'').attr('src', \$(this).find('img').attr('src'));
\t}

\t\$('#'+target+'').attr('value', \$(this).parent().find('input').attr('value'));

\t\$('#modal-image').modal('hide');
});

";
        } else {
            // line 69
            echo "// Get the current selection
var range = window.getSelection().getRangeAt(0);
var node = range.startContainer;
var startOffset = range.startOffset;  // where the range starts
var endOffset = range.endOffset;      // where the range ends

\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();

\t

    // Create a new range from the orginal selection
    var range = document.createRange();
    range.setStart(node, startOffset);
    range.setEnd(node, endOffset);

    var img = document.createElement('img');
\timg.src = \$(this).attr('href');

\trange.insertNode(img);

\t\$('#modal-image').modal('hide');
});
";
        }
        // line 93
        echo "
\$('a.directory').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('.pagination a').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-parent').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-refresh').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('input[name=\\'search\\']').on('keydown', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#button-search').on('click', function(e) {
\tvar url = 'index.php?route=common/filemanager&directory=";
        // line 125
        echo ($context["directory"] ?? null);
        echo "';

\tvar filter_name = \$(this).parent().parent().find('input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\t";
        // line 133
        if (($context["thumb"] ?? null)) {
            // line 134
            echo "\turl += '&thumb=' + '";
            echo ($context["thumb"] ?? null);
            echo "';
\t";
        }
        // line 136
        echo "
\t";
        // line 137
        if (($context["target"] ?? null)) {
            // line 138
            echo "\turl += '&target=' + '";
            echo ($context["target"] ?? null);
            echo "';
\t";
        }
        // line 140
        echo "
\t\$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--

\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/filemanager/upload&directory=";
        // line 162
        echo ($context["directory"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#button-folder').popover({
\thtml: true,
\tsanitize: false,
\tplacement: 'bottom',
\ttrigger: 'click',
\ttitle: '";
        // line 201
        echo ($context["entry_folder"] ?? null);
        echo "',
\tcontent: function() {
\t\thtml  = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 204
        echo ($context["entry_folder"] ?? null);
        echo "\" class=\"form-control\">';
\t\thtml += '  <span class=\"input-group-btn\"><a type=\"button\" title=\"";
        // line 205
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a></span>';
\t\thtml += '</div>';

\t\treturn html;
\t}
\t
});

\$('#button-folder').on('shown.bs.popover', function() {
\t\$('#button-create').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/folder&directory=";
        // line 216
        echo ($context["directory"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-create').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-create').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#modal-image #button-delete').on('click', function(e) {
\tif (confirm('";
        // line 245
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 245,  378 => 216,  364 => 205,  360 => 204,  354 => 201,  312 => 162,  288 => 140,  282 => 138,  280 => 137,  277 => 136,  271 => 134,  269 => 133,  258 => 125,  224 => 93,  198 => 69,  182 => 56,  177 => 55,  175 => 54,  168 => 50,  165 => 49,  157 => 46,  150 => 44,  145 => 42,  141 => 41,  129 => 39,  126 => 38,  121 => 36,  117 => 35,  111 => 33,  109 => 32,  106 => 31,  102 => 30,  99 => 29,  95 => 28,  87 => 23,  80 => 21,  73 => 17,  69 => 16,  65 => 15,  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/filemanager.twig", "");
    }
}
