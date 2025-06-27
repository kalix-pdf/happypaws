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

/* __string_template__a98bc5d4abcfea06f5b63e18eead60114259f4003c618026ef9eef013e89a603 */
class __TwigTemplate_207127f203333fab3f6f74a765e83c8f63fcd8e89ced1116d945e03a72f97ff6 extends Template
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
        echo "

<div id=\"product-category\" class=\"container mb-4\">
  <nav class=\"mb-4 mt-4\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb flex-wrap\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-dark\" href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
  </nav>
  <div class=\"row\">
    ";
        // line 14
        if (($context["column_left"] ?? null)) {
            // line 15
            echo "      <aside class=\"col-lg-3 col-md-4 col-12-mb-4\">";
            echo ($context["column_left"] ?? null);
            echo "</aside>
    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        if (($context["column_left"] ?? null)) {
            echo "col-lg-9 col-md-8 col-12";
        } else {
            echo "col-12";
        }
        echo "\">
      <h2>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 19
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 20
            echo "      <div class=\"row row-header-category\"> ";
            if (($context["thumb"] ?? null)) {
                // line 21
                echo "        ";
                // line 22
                echo "        ";
            }
            // line 23
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 24
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 26
            echo "        <div class=\"refine-search-group\">
         ";
            // line 27
            if (($context["categories"] ?? null)) {
                // line 28
                echo "          ";
                if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                    echo "  
      ";
                } else {
                    // line 30
                    echo "      <div class=\"row\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 31
                        echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["category"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 34
                            echo "            <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "          </ul>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "</div>
      <br/>
      ";
                }
                // line 41
                echo "      ";
            }
            // line 42
            echo "        </div>
        </div>
      <hr>
      ";
        }
        // line 46
        echo "      ";
        // line 71
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 72
            echo "      <div class=\"row product-row-menu flex-wrap gy-2 mb-4\">
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 74
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"text-black text-decoration-none btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6 sorting\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 78
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"mx-3 form-control\" onchange=\"location = this.value;\">
              ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 81
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 81) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 82
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 82);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 82);
                    echo "</option>
              ";
                } else {
                    // line 84
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
              ";
                }
                // line 86
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6 showing\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 92
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control mx-3\" onchange=\"location = this.value;\">
              ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 95
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 95) == ($context["limit"] ?? null))) {
                    // line 96
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 96);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 96);
                    echo "</option>
              ";
                } else {
                    // line 98
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                    echo "</option>
              ";
                }
                // line 100
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row product-row\"> ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 106
                echo "        <div class=\"product-layout col-lg-4 col-md-6 col-sm-12 mb-4\">
          <div class=\"product-thumb rounded-4 p-3 d-flex flex-column justify-content-between transition w-100\">
            <div class=\"image\"><a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 108);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 108);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" class=\"img-fluid mx-auto d-block\" /></a></div>
              <div class=\"caption\">
                <h4><a class=\"text-decoration-none fs-5 text-black\" href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                echo "</a></h4>
                <p class=\"product-description\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 111);
                echo "</p>
                ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114);
                        echo "
                  ";
                    } else {
                        // line 115
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 115);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo "</span> ";
                    }
                    // line 116
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 118
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                  <div class=\"rating d-flex gap-3 fs-4\">
                    ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 121
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 121) < $context["i"])) {
                            // line 122
                            echo "                    <i class=\"fa fa-paw text-muted\"></i>
                    ";
                        } else {
                            // line 124
                            echo "                    <i class=\"fa fa-paw stars\"></i>
                    ";
                        }
                        // line 126
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                  </div>
                  ";
                }
                // line 129
                echo "                </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 131);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 132
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 133
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 140
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 141
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 144
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 145
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 147
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 150
        echo "     </div>
    </div>
</div>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo " 

<script type=\"text/javascript\">
\t\$('.mp-list-group-item a').on('click', function() {
\t\tvar src = \$(this).find('img').attr('src');
\t\tif (src.substring(0, src.indexOf('-'))) {
\t\t\tsrc = src.substring(0, src.indexOf('-'));
\t\t} else {
\t\t\tsrc = src.substring(0, src.indexOf('.'));
\t\t}
\t\tsrc = src + '-active.png';

\t\t\$(this).find('img').attr('src', src)

\t\t\$(\$(this).parent().siblings().find('img')).each(function(index, value) {
\t\t\tvar sibling_src = \$(this).attr('src');

\t\t\tif (sibling_src.substring(0, sibling_src.indexOf('-'))) {
\t\t\t\tsibling_src = sibling_src.substring(0, sibling_src.indexOf('-'));
\t\t\t} else {
\t\t\t\tsibling_src = sibling_src.substring(0, sibling_src.indexOf('.'));
\t\t\t}
\t\t\tsibling_src = sibling_src + '.png';

\t\t\t\$(this).attr('src', sibling_src)
\t\t});
\t});

\tcollectionUrl = '";
        // line 181
        echo ($context["collection"] ?? null);
        echo "';
\t// alert(collectionUrl);
\tfunction loadCollection(showMenu) {
\t\t\$.ajax({
\t\t\turl: collectionUrl,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tcategoryMenu = \$(response).find('#column-left').html();
\t\t\t\t\$('#category-menu').remove();
\t\t\t\t\$('.left-panel').append(categoryMenu);

\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 192
        echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-collection').html(html);
\t\t\t\tif (showMenu) {
\t\t\t\t\t\$('#category-menu').show();
\t\t\t\t}
\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t} else {
\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t}

\t\t\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\t\t\t\$('.hide-child').css('display', 'none');
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t\t\t} else {
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t})
\t}
\tfunction loadCollectionProduct(showMenu,data = 0){
  \$.ajax({
    url : collectionUrl,
    type:'POST',
    data:data,
    dataType: 'html',
    success: function(response) {
      categoryMenu = \$(response).find('#column-left').html();
      \$('#category-menu').remove();
      \$('.left-panel').append(categoryMenu);
      \$('#tab-collection').html(response);
      if(showMenu) {
        \$('#category-menu').show();
      }
      if (localStorage.getItem('display') == 'list') {
        \$('#list-view').trigger('click');
      } else {
        \$('#grid-view').trigger('click');
      }

      if (\$('#category-menu li').hasClass('hide-child')) {
        if (localStorage.getItem(\"hide-child\") == 1) {
          \$('.hide-child').addClass('hide');
          localStorage.setItem('hide-child', 0);
        } else{
          localStorage.setItem('hide-child', 1);
        }
      }
    }
  })
}
\t(function(\$) {
\t\t\$('#main-tab li').on('click', function() {
\t\t\ttab = \$(this).children('a').data('tab');
\t\t\t\$('.mp-list-group li').removeClass('mp-active');
\t\t\t\$(this).addClass('mp-active');
\t\t\t\$('.mp-tab-content').removeClass('mp-tab-active');
\t\t\t\$(tab).addClass('mp-tab-active');
\t\t\tif (tab == '#tab-collection') {
\t\t\t\t\$('#category-menu').show();
\t\t\t} else {
\t\t\t\t\$('#category-menu').hide();
\t\t\t}
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 261
        echo ($context["feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\t\$('#prev-reviews').html(response);
\t\t\t}
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 269
        echo ($context["product_feedback"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 272
        echo (((($context["text_product_reviews"] ?? null) . " (") . ((($context["product_feedback_total"] ?? null)) ? (($context["product_feedback_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-product-reviews').html(html);
\t\t\t}
\t\t});

\t\tloadCollection(false);

\t})(jQuery)

\t
\t";
        // line 283
        if (($context["showCollection"] ?? null)) {
            // line 284
            echo "\t\t\$('a[href=\"#tab-collection\"]').trigger('click');
\t";
        }
        // line 286
        echo "
\t
\t";
        // line 295
        echo "
\t";
        // line 296
        if (($context["logged"] ?? null)) {
            // line 297
            echo "\t\$('#send-mail').on('click', function() {
\t\tf = 0;
\t\t\$('#myModal-seller-mail input[type=\\'text\\'],#myModal-seller-mail textarea').each(function() {
\t\t\tif (\$(this).val() == '') {
\t\t\t\t\$(this).parent().addClass('has-error');
\t\t\t\tf++;
\t\t\t} else {
\t\t\t\t\$(this).parent().removeClass('has-error');
\t\t\t}
\t\t});

\t\tif (f > 0) {
\t\t\t\$('#myModal-seller-mail .error').addClass('text-danger');
\t\t\t\$('#myModal-seller-mail .error').text('";
            // line 310
            echo ($context["text_error_mail"] ?? null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t\t} else {
\t\t\t\$('#send-mail').addClass('disabled');
\t\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\t\$('.alert-success').remove();
\t\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 315
            echo ($context["text_success_mail"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 317
            echo ($context["send_mail"] ?? null);
            echo "',
\t\t\t\tdata: \$('#seller-mail-form').serialize() + '";
            // line 318
            echo ($context["mail_for"] ?? null);
            echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#send-mail').removeClass('disabled');
\t\t\t\t\t\$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(
\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\tif (this.type != 'hidden') {
\t\t\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t\t\t\t\$(this).text('');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t";
        }
        // line 335
        echo "</script>
<script type=\"text/javascript\">
\t\$.ajax({
\t\turl: '";
        // line 338
        echo ($context["loadLocation"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tsuccess: function(response) {
\t\t\t\$('#tab-location').html(response);
\t\t}
\t});

\tlocalocation = false;
\t\$('#main-tab li').on('click', function() {
\t\t\tif (!localocation) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 349
        echo ($context["loadLocation"] ?? null);
        echo "',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\$('#tab-location').html(response);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tlocalocation = true;
\t\t\t}
\t\t})

\t\t/**
   \t\t* [To store feedback]
\t\t* @return {none} [It will not return anything just reflect the form if unsuccessful and empty the form if successful]
\t\t*/
\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: '";
        // line 365
        echo ($context["writeFeedback"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#seller_review_form input[type=\\'text\\'],input[type=\\'radio\\']:checked,textarea'),

\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-feedback').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-feedback').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review-modal').before(
\t\t\t\t\t\t'<div class=\"alert alert-danger warning\" style=\"width:95%;\"><i class=\"fa fa-exclamation-circle\"></i> ' +
\t\t\t\t\t\tjson['error'] +
\t\t\t\t\t\t'<button class=\"close\" type=\"button\" data-dismiss=\"alert\" >&times;</button></div>'
\t\t\t\t\t\t);
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\t\$('#review-modal').prepend(
\t\t\t\t\t\t'<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i> ' +
\t\t\t\t\t\tjson['success'] + '</div>');
\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'price_rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('input[name=\\'quality_rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('input[name=\\'value_rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
<script>
\t// Product List
\t\$('body').on('click', '#list-view', function() {
\t\t\$('#content .product-layout > .clearfix').remove();

\t\t\$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');

\t\tlocalStorage.setItem('display', 'list');
\t});

\t// Product Grid
\t\$('body').on('click', '#grid-view', function() {
\t\t\$('#content .product-layout > .clearfix').remove();

\t\t// What a shame bootstrap does not take into account dynamically loaded columns
\t\tcols = \$('#column-right, #column-left').length;

\t\tif (cols == 2) {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(2)').after('<div class=\"clearfix visible-md visible-sm\"></div>');
\t\t} else if (cols == 1) {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(3)').after('<div class=\"clearfix visible-lg\"></div>');
\t\t} else {
\t\t\t\$('#content .product-layout').attr('class',
\t\t\t\t'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');

\t\t\t// \$('#content .product-layout:nth-child(3)').after('<div class=\"clearfix\"></div>');
\t\t}

\t\tlocalStorage.setItem('display', 'grid');
\t});

\tif (localStorage.getItem('display') == 'list') {
\t\t\$('#list-view').trigger('click');
\t} else {
\t\t\$('#grid-view').trigger('click');
\t}


\$('body').on('change', '#seller-collection select',function() {
  collectionUrl = this.value;
  loadCollection(true);
  // \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
  // \$('#tab-collection').load(thisvalue,function(){
  //     \$('.remove-me').remove();
  //   });
});

//   Module Update Code Start;

var waitTimer = 2000;
\$('body').on('keyup', '#seller-collection input',function() {
   let el_val = this.value;
   console.log(el_val);
   setTimeout(function () {
      loadCollectionProduct(true,'product_name= '+el_val);
    }, waitTimer);
});

//   Module Update Code Ends;

\$('body').on('click','#seller-collection a',function(e){
  if(!\$(this).hasClass('default-work'))
    e.preventDefault();
  else
    return;

  thisvalue = this.href;
  \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
  \$('#tab-collection').load(thisvalue,function(){
      \$('.remove-me').remove();
      if (localStorage.getItem('display') == 'list') {
        \$('#list-view').trigger('click');
      } else {
        \$('#grid-view').trigger('click');
      }
    });
});

\t";
        // line 488
        echo "
\t/*\$('body').on('click', '#seller-collection .pagination a', function(e) {
\t    if (!\$(this).hasClass('default-work'))
\t       e.preventDefault();
\t     else
\t       return;

\t     thisvalue = this.href;
\t    \$('a[href=\\'#tab-collection\\']').append(' <i class=\"fa fa-spinner fa-spin remove-me\"></i>');
\t    \$('#tab-collection').load(thisvalue, function() {
\t       \$('.remove-me').remove();
\t       if (localStorage.getItem('display') == 'list') {
\t       \$('#list-view').trigger('click');
\t       } else {
\t         \$('#grid-view').trigger('click');
\t       }
\t     });
\t   });*/
\tfunction loadCollection_collection(showMenu, collectionUrl) {


\t\t\$.ajax({
\t\t\turl: collectionUrl,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(response) {
\t\t\t\tcategoryMenu = \$(response).find('#column-left').html();
\t\t\t\t\$('#category-menu').remove();
\t\t\t\t\$('.left-panel').append(categoryMenu);
\t\t\t\t
\t\t\t\tlet html = '<p class=\"wk-mp-tab-content-text\">";
        // line 517
        echo (((($context["text_collection"] ?? null) . " (") . ((($context["collection_total"] ?? null)) ? (($context["collection_total"] ?? null)) : ("0"))) . ")");
        echo "</p>' + response;

\t\t\t\t\$('#tab-collection').html(html);
\t\t\t\tif (showMenu) {
\t\t\t\t\t\$('#category-menu').show();
\t\t\t\t}
\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t} else {
\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t}

\t\t\t\tif (\$('#category-menu li').hasClass('hide-child')) {
\t\t\t\t\tif (localStorage.getItem(\"hide-child\") == 1) {
\t\t\t\t\t\t\$('.hide-child').css('display', 'none');
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 0);
\t\t\t\t\t} else {
\t\t\t\t\t\tlocalStorage.setItem('hide-child', 1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t})
\t}
\t\$('body').on('click', 'div.stepper .fa-angle-up', function(e) {
\t\tvar val_input = parseInt(parseInt(\$(this).parent().parent().find('input[name=\"quantity\"]').val()) + 1);
\t\t\$(this).parent().parent().find('input[name=\"quantity\"]').val(val_input);

\t});
\t\$('body').on('click', 'div.stepper .fa-angle-down', function(e) {
\t\tif (\$(this).parent().parent().find('input[name=\"quantity\"]').val() > 1) {
\t\t\tvar val_input = \$(this).parent().parent().find('input[name=\"quantity\"]').val() - 1;
\t\t\t\$(this).parent().parent().find('input[name=\"quantity\"]').val(val_input);
\t\t}
\t});

\t

  // Grid / List toggle
\t\$(document).on('click', '.grid-list .view-btn', function () {
\t\tconst \$this = \$(this);
\t\tconst \$products = \$('.main-products');
\t\tconst view = \$this.data('view');
\t\tconst current = \$products.hasClass('product-grid') ? 'grid' : 'list';

\t\t\$this.tooltip('hide');

\t\tif (view !== current) {
\t\t\t\$products.addClass('no-transitions').removeClass('product-' + current).addClass('product-' + view);

\t\t\tsetTimeout(function () {
\t\t\t\t\$products.removeClass('no-transitions');
\t\t\t}, 1);

\t\t\tconst d = new Date;
\t\t\td.setTime(d.getTime() + 24 * 60 * 60 * 1000 * 365);

\t\t\tif (view === 'list') {
\t\t\t\tdocument.cookie = 'view=list;path=/;expires=' + d.toGMTString();
\t\t\t} else {
\t\t\t\tdocument.cookie = 'view=grid;path=/;expires=' + d.toGMTString();
\t\t\t}
\t\t}

\t\t\$('.grid-list .view-btn').removeClass('active');
\t\t\$this.addClass('active');
\t});

</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__a98bc5d4abcfea06f5b63e18eead60114259f4003c618026ef9eef013e89a603";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 517,  798 => 488,  675 => 365,  656 => 349,  642 => 338,  637 => 335,  617 => 318,  613 => 317,  608 => 315,  600 => 310,  585 => 297,  583 => 296,  580 => 295,  576 => 286,  572 => 284,  570 => 283,  556 => 272,  550 => 269,  539 => 261,  467 => 192,  453 => 181,  422 => 153,  417 => 150,  409 => 147,  403 => 145,  400 => 144,  394 => 141,  390 => 140,  386 => 138,  372 => 133,  366 => 132,  358 => 131,  354 => 129,  350 => 127,  344 => 126,  340 => 124,  336 => 122,  333 => 121,  329 => 120,  326 => 119,  323 => 118,  311 => 116,  304 => 115,  298 => 114,  295 => 113,  293 => 112,  289 => 111,  283 => 110,  272 => 108,  268 => 106,  264 => 105,  258 => 101,  252 => 100,  244 => 98,  236 => 96,  233 => 95,  229 => 94,  224 => 92,  217 => 87,  211 => 86,  203 => 84,  195 => 82,  192 => 81,  188 => 80,  183 => 78,  174 => 74,  170 => 72,  167 => 71,  165 => 46,  159 => 42,  156 => 41,  151 => 38,  143 => 36,  132 => 34,  128 => 33,  124 => 31,  119 => 30,  113 => 28,  111 => 27,  108 => 26,  102 => 24,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  89 => 19,  85 => 18,  76 => 17,  70 => 15,  68 => 14,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a98bc5d4abcfea06f5b63e18eead60114259f4003c618026ef9eef013e89a603", "");
    }
}
