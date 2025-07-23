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

/* customerpartner/income.twig */
class __TwigTemplate_3de1dbbd23dd5e2197e12a93bfbd7b2da3231283c5ddedda56b96f317e5d43f6 extends Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 8
        echo ($context["remove_url"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-original-title=\"";
        echo ($context["button_reset_filter"] ?? null);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t</a>

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo ($context["button_mass_payout"] ?? null);
        echo "</button>
\t\t\t\t<!-- <span class=\"label bg-primary\">";
        // line 13
        echo ($context["grand_total_paid"] ?? null);
        echo "</span>
\t\t\t\t<span class=\"label bg-primary\">";
        // line 14
        echo ($context["grand_total_admin"] ?? null);
        echo "</span>
\t\t\t\t<span class=\"label bg-primary\">";
        // line 15
        echo ($context["grand_total_rem"] ?? null);
        echo "</span> -->
\t\t\t</div>
\t\t\t<h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">

\t\t";
        // line 27
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "\t    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 32
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 33
            echo "\t    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 37
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
        \t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 40
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 47
        echo ($context["text_seller_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 48
        echo ($context["text_seller_name"] ?? null);
        echo "\" name=\"filter_seller_name\" value=\"";
        echo ($context["seller_name"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 51
        echo ($context["text_seller_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo ($context["text_from"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 56
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_seller_amount_from\" value=\"";
        echo ($context["seller_amount_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo ($context["text_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 60
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_seller_amount_to\" value=\"";
        echo ($context["seller_amount_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 67
        echo ($context["text_commission"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo ($context["text_from"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 72
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_commission_from\" value=\"";
        echo ($context["commission_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 74
        echo ($context["text_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 76
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_commission_to\" value=\"";
        echo ($context["commission_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 81
        echo ($context["text_admin_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 84
        echo ($context["text_from"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 86
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_admin_amount_from\" value=\"";
        echo ($context["admin_amount_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo ($context["text_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 90
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_admin_amount_to\" value=\"";
        echo ($context["admin_amount_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t";
        // line 95
        echo ($context["text_paid_to_seller"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo ($context["text_from"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 101
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_paid_to_seller_from\" value=\"";
        echo ($context["paid_to_seller_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 103
        echo ($context["text_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 105
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_paid_to_seller_to\" value=\"";
        echo ($context["paid_to_seller_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 111
        echo ($context["text_total_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo ($context["text_from"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 116
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_total_amount_from\" value=\"";
        echo ($context["total_amount_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo ($context["text_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 120
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_total_amount_to\" value=\"";
        echo ($context["total_amount_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t";
        // line 125
        echo ($context["text_date_added"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon \">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datetimefrom\" placeholder=\"";
        // line 131
        echo ($context["text_from"] ?? null);
        echo "\" name=\"filter_date_added_from\" value=\"";
        echo ($context["date_added_from"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon \">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datetimeto\" placeholder=\"";
        // line 135
        echo ($context["text_to"] ?? null);
        echo "\" name=\"filter_date_added_to\" value=\"";
        echo ($context["date_added_to"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        echo ($context["text_seller_name"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 142
        echo ($context["text_commission"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t<button class=\"btn btn-primary pull-right\" type=\"button\" onclick=\"Filter()\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t\t";
        // line 146
        echo ($context["button_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 151
        echo ($context["masspayout"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-income\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t";
        // line 153
        if (($context["income_details"] ?? null)) {
            // line 154
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["income_details"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["income_detail"]) {
                // line 155
                echo "\t\t\t\t\t\t\t";
                $context["subs"] = twig_get_attribute($this->env, $this->source, $context["income_detail"], "subscriptions", [], "any", false, false, false, 155);
                // line 156
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["subs"] ?? null), "subs_type", [], "any", false, false, false, 156) == 3)) {
                    echo " <legend>Commission Type</legend>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 162
                    echo ($context["seller_name_url"] ?? null);
                    echo "\" class=\"";
                    if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "c.firstname"))) {
                        echo ($context["sort"] ?? null);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 163
                    echo ($context["text_seller_name"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<!-- <th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 167
                    echo ($context["seller_commission_url"] ?? null);
                    echo "\" class=\"";
                    if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "c.commission"))) {
                        echo ($context["sort"] ?? null);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 168
                    echo ($context["text_commission"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</th> -->
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 172
                    echo ($context["total_url"] ?? null);
                    echo "\" class=\"";
                    if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "total"))) {
                        echo ($context["sort"] ?? null);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    echo ($context["text_total_amount"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 177
                    echo ($context["customer_url"] ?? null);
                    echo "\" class=\"";
                    if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "customer"))) {
                        echo ($context["sort"] ?? null);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 178
                    echo ($context["text_seller_amount"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Platform Fee</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Commission Fee</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Subscription Type</td>

\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 187
                    echo ($context["admin_url"] ?? null);
                    echo "\" class=\"";
                    if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "admin"))) {
                        echo ($context["sort"] ?? null);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 188
                    echo ($context["text_admin_amount"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <a > -->
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 193
                    echo ($context["text_paid_to_seller"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <a > -->
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 198
                    echo ($context["text_rem_amount"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 202
                    echo ($context["text_action"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 209
                    echo (($__internal_compile_0 = $context["income_detail"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["seller_id"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 213
                    echo (($__internal_compile_1 = $context["income_detail"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["dashborad_url"] ?? null) : null);
                    echo "\" target=\"_blank\" data-toggle=\"tooltip\" data-original-title=\"";
                    echo ((($__internal_compile_2 = $context["income_detail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["firstname"] ?? null) : null) . ($context["text_dashboard"] ?? null));
                    echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 214
                    echo (($__internal_compile_3 = $context["income_detail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["seller_name"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<!-- <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 218
                    echo (($__internal_compile_4 = $context["income_detail"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["commission"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td> -->
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 221
                    echo (($__internal_compile_5 = $context["income_detail"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["total"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 224
                    echo (($__internal_compile_6 = $context["income_detail"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["seller_total"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                    // line 227
                    echo (($__internal_compile_7 = $context["income_detail"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["commission"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Commission Type</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 232
                    echo (($__internal_compile_8 = $context["income_detail"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["admin_total"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 235
                    echo (($__internal_compile_9 = $context["income_detail"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["paid_total"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 238
                    echo (($__internal_compile_10 = $context["income_detail"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["amount_to_pay"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 241
                    echo (($__internal_compile_11 = $context["income_detail"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["pay_link"] ?? null) : null);
                    echo "\" class=\"btn btn-primary\" ";
                    if ((($__internal_compile_12 = $context["income_detail"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["button_status"] ?? null) : null)) {
                        echo "disabled";
                    }
                    echo " >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 242
                    echo (($__internal_compile_13 = $context["income_detail"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["pay"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<b>";
                    // line 248
                    echo ($context["text_grand_total"] ?? null);
                    echo "</b>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 251
                    echo ($context["grand_total"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 254
                    echo ($context["grand_total_seller"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                    // line 257
                    echo (($__internal_compile_14 = $context["income_detail"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["commission"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 263
                    echo ($context["grand_total_admin"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 266
                    echo ($context["grand_total_paid"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 269
                    echo ($context["grand_total_rem"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 274
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\" class=\"text-center\">";
                    // line 275
                    echo ($context["no_records"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
                }
                // line 279
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['income_detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "\t\t\t\t\t";
        }
        // line 281
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 289
        echo ($context["seller_name_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "c.firstname"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 290
        echo ($context["text_seller_name"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<!-- <th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 294
        echo ($context["seller_commission_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "c.commission"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 295
        echo ($context["text_commission"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</th> -->
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 299
        echo ($context["total_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "total"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 300
        echo ($context["text_total_amount"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 304
        echo ($context["customer_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "customer"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 305
        echo ($context["text_seller_amount"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">Platform Fee</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 312
        echo ($context["admin_url"] ?? null);
        echo "\" class=\"";
        if ((array_key_exists("order", $context) && (($context["order"] ?? null) == "admin"))) {
            echo ($context["sort"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 313
        echo ($context["text_admin_amount"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<!-- <a > -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 318
        echo ($context["text_paid_to_seller"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<!-- <a > -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 323
        echo ($context["text_rem_amount"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 327
        echo ($context["text_action"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t";
        // line 331
        if (($context["income_details"] ?? null)) {
            // line 332
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["income_details"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["income_detail"]) {
                // line 333
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\">
\t\t\t\t                    \t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 335
                echo (($__internal_compile_15 = $context["income_detail"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["seller_id"] ?? null) : null);
                echo "\" />
\t\t\t\t                    </td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 339
                echo (($__internal_compile_16 = $context["income_detail"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["dashborad_url"] ?? null) : null);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\" data-original-title=\"";
                echo ((($__internal_compile_17 = $context["income_detail"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["firstname"] ?? null) : null) . ($context["text_dashboard"] ?? null));
                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 340
                echo (($__internal_compile_18 = $context["income_detail"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["seller_name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<!-- <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 344
                echo (($__internal_compile_19 = $context["income_detail"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["commission"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td> -->
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 347
                echo (($__internal_compile_20 = $context["income_detail"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["total"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 350
                echo (($__internal_compile_21 = $context["income_detail"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["seller_total"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 353
                echo (($__internal_compile_22 = $context["income_detail"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["commission"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 356
                $context["subs"] = twig_get_attribute($this->env, $this->source, $context["income_detail"], "subscriptions", [], "any", false, false, false, 356);
                // line 357
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["subs"] ?? null), "subs_type", [], "any", false, false, false, 357) == 3)) {
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\tCommission Type
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 359
($context["subs"] ?? null), "subs_type", [], "any", false, false, false, 359) == 2)) {
                    // line 360
                    echo "\t\t\t\t\t\t\t\t\t\t\tPiso Per Month
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 361
($context["subs"] ?? null), "subs_type", [], "any", false, false, false, 361) == 1)) {
                    // line 362
                    echo "\t\t\t\t\t\t\t\t\t\t\tPiso Per Day
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 364
                echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 367
                echo (($__internal_compile_23 = $context["income_detail"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["admin_total"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 370
                echo (($__internal_compile_24 = $context["income_detail"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["paid_total"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 373
                echo (($__internal_compile_25 = $context["income_detail"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["amount_to_pay"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 376
                echo (($__internal_compile_26 = $context["income_detail"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["pay_link"] ?? null) : null);
                echo "\" class=\"btn btn-primary\" ";
                if ((($__internal_compile_27 = $context["income_detail"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["button_status"] ?? null) : null)) {
                    echo "disabled";
                }
                echo " >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 377
                echo (($__internal_compile_28 = $context["income_detail"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["pay"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['income_detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t<b>";
            // line 384
            echo ($context["text_grand_total"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 387
            echo ($context["grand_total"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 390
            echo ($context["grand_total_seller"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 393
            echo (($__internal_compile_29 = ($context["income_detail"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["commission"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 399
            echo ($context["grand_total_admin"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 402
            echo ($context["grand_total_paid"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 405
            echo ($context["grand_total_rem"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        } else {
            // line 410
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"9\" class=\"text-center\">";
            // line 411
            echo ($context["no_records"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 414
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 418
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 419
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">

\t\$('.datetimefrom').datetimepicker({
\t\tpickDate: true,
\t\tpickTime: true,
\t\tformat: 'YYYY-MM-DD HH:MM:SS'
\t});
\t\$('.datetimeto').datetimepicker({
\t\tpickDate: true,
\t\tpickTime: true,
\t\tformat: 'YYYY-MM-DD HH:MM:SS'
\t});

\tfunction Filter(){
\t\turl = \"index.php?route=customerpartner/income&user_token=";
        // line 440
        echo ($context["user_token"] ?? null);
        echo "\";
\t\tseller_name = \$('input[name=\"filter_seller_name\"]').val();
\t\tif(seller_name) {
\t\t\turl += '&seller_name='+seller_name;
\t\t}
\t\tcommission_from = \$('input[name=\"filter_commission_from\"]').val();
\t\tif(commission_from) {
\t\t\turl += '&commission_from='+commission_from;
\t\t}
\t\tcommission_to = \$('input[name=\"filter_commission_to\"]').val();
\t\tif(commission_to) {
\t\t\turl += '&commission_to='+commission_to;
\t\t}
\t\ttotal_amount_from = \$('input[name=\"filter_total_amount_from\"]').val();
\t\tif(total_amount_from) {
\t\t\turl += '&total_amount_from='+total_amount_from;
\t\t}
\t\ttotal_amount_to = \$('input[name=\"filter_total_amount_to\"]').val();
\t\tif(total_amount_to) {
\t\t\turl += '&total_amount_to='+total_amount_to;
\t\t}
\t\tseller_amount_from = \$('input[name=\"filter_seller_amount_from\"]').val();
\t\tif(seller_amount_from) {
\t\t\turl += '&seller_amount_from='+seller_amount_from;
\t\t}
\t\tseller_amount_to = \$('input[name=\"filter_seller_amount_to\"]').val();
\t\tif(seller_amount_to) {
\t\t\turl += '&seller_amount_to='+seller_amount_to;
\t\t}
\t\tadmin_amount_from = \$('input[name=\"filter_admin_amount_from\"]').val();
\t\tif(admin_amount_from) {
\t\t\turl += '&admin_amount_from='+admin_amount_from;
\t\t}
\t\tadmin_amount_to = \$('input[name=\"filter_admin_amount_to\"]').val();
\t\tif(admin_amount_to) {
\t\t\turl += '&admin_amount_to='+admin_amount_to;
\t\t}
\t\tpaid_to_seller_from = \$('input[name=\"filter_paid_to_seller_from\"]').val();
\t\tif(paid_to_seller_from) {
\t\t\turl += '&paid_to_seller_from='+paid_to_seller_from;
\t\t}
\t\tpaid_to_seller_to = \$('input[name=\"filter_paid_to_seller_to\"]').val();
\t\tif(paid_to_seller_to) {
\t\t\turl += '&paid_to_seller_to='+paid_to_seller_to;
\t\t}
\t\t// rem_amount_from = \$('input[name=\"filter_rem_amount_from\"]').val();
\t\t// if(rem_amount_from) {
\t\t// \turl += '&rem_amount_from='+rem_amount_from;
\t\t// }
\t\t// rem_amount_to = \$('input[name=\"filter_rem_amount_to\"]').val();
\t\t// if(rem_amount_to) {
\t\t// \turl += '&rem_amount_to='+rem_amount_to;
\t\t// }
\t\tdate_added_from = \$('input[name=\"filter_date_added_from\"]').val();
\t\tif(date_added_from) {
\t\t\turl += '&date_added_from='+date_added_from;
\t\t}
\t\tdate_added_to = \$('input[name=\"filter_date_added_to\"]').val();
\t\tif(date_added_to) {
\t\t\turl += '&date_added_to='+date_added_to;
\t\t}

\t\tlocation = url;
\t}

\t\$('input[name=\\'filter_seller_name\\']').autocomplete({
\t  delay: 0,
\t  source: function(request, response) {
\t    \$.ajax({
\t      url: 'index.php?route=customerpartner/partner/autocomplete&user_token=";
        // line 509
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request)+'&filter_view=' +  jQuery('#view_all').val(),
\t      dataType: 'json',
\t      success: function(json) {
\t        response(\$.map(json, function(item) {
\t          return {
\t            label: item.name,
\t            value: item.id
\t          }
\t        }));
\t      }
\t    });
\t  },
\t  'select': function(item) {
\t    \$('input[name=\\'filter_seller_name\\']').val(item['label']);
\t  }

\t});
</script>

";
        // line 528
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/income.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1061 => 528,  1039 => 509,  967 => 440,  943 => 419,  939 => 418,  933 => 414,  927 => 411,  924 => 410,  916 => 405,  910 => 402,  904 => 399,  895 => 393,  889 => 390,  883 => 387,  877 => 384,  873 => 382,  862 => 377,  854 => 376,  848 => 373,  842 => 370,  836 => 367,  831 => 364,  827 => 362,  825 => 361,  822 => 360,  820 => 359,  817 => 358,  814 => 357,  812 => 356,  806 => 353,  800 => 350,  794 => 347,  788 => 344,  781 => 340,  775 => 339,  768 => 335,  764 => 333,  759 => 332,  757 => 331,  750 => 327,  743 => 323,  735 => 318,  727 => 313,  719 => 312,  709 => 305,  701 => 304,  694 => 300,  686 => 299,  679 => 295,  671 => 294,  664 => 290,  656 => 289,  646 => 281,  643 => 280,  637 => 279,  630 => 275,  627 => 274,  619 => 269,  613 => 266,  607 => 263,  598 => 257,  592 => 254,  586 => 251,  580 => 248,  571 => 242,  563 => 241,  557 => 238,  551 => 235,  545 => 232,  537 => 227,  531 => 224,  525 => 221,  519 => 218,  512 => 214,  506 => 213,  499 => 209,  489 => 202,  482 => 198,  474 => 193,  466 => 188,  458 => 187,  446 => 178,  438 => 177,  431 => 173,  423 => 172,  416 => 168,  408 => 167,  401 => 163,  393 => 162,  383 => 156,  380 => 155,  375 => 154,  373 => 153,  368 => 151,  360 => 146,  353 => 142,  348 => 140,  338 => 135,  329 => 131,  320 => 125,  310 => 120,  305 => 118,  298 => 116,  293 => 114,  287 => 111,  276 => 105,  271 => 103,  264 => 101,  259 => 99,  252 => 95,  242 => 90,  237 => 88,  230 => 86,  225 => 84,  219 => 81,  209 => 76,  204 => 74,  197 => 72,  192 => 70,  186 => 67,  174 => 60,  169 => 58,  162 => 56,  157 => 54,  151 => 51,  143 => 48,  139 => 47,  129 => 40,  124 => 37,  116 => 33,  113 => 32,  105 => 28,  103 => 27,  96 => 22,  85 => 20,  81 => 19,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customerpartner/income.twig", "");
    }
}
