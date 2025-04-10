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

/* __string_template__5d065938d08904f113badfecc876b8231de3a49788013f50557b5d69b8ff0f81 */
class __TwigTemplate_57778026a29795f6e27f3e8017093788176834ce65e20bb4a7f26ff0d82a6e1f extends Template
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

                    <style type=\"text/css\">
                      .btn-success{
                        background-image: linear-gradient(to bottom, #62c462, #51a351);
                      }
                    </style>
                
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "    <li><a href=\"";
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
        echo "  </ul>
  ";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <h1>ORDERS</h1>
  
  <div class=\"row\">";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "

                    ";
        // line 30
        if ((array_key_exists("is_seller", $context) && ($context["is_seller"] ?? null))) {
            // line 31
            echo "                        <form class=\"form-horizontal\" action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" id=\"form-mode\">
                            <div>
                              ";
            // line 33
            if ((array_key_exists("marketplace_seller_mode", $context) && ($context["marketplace_seller_mode"] ?? null))) {
                // line 34
                echo "                               <input value=\"1\" name=\"marketplace_seller_mode\" data-toggle=\"toggle\" data-on=\"";
                echo ($context["text_mode_seller"] ?? null);
                echo "\" data-off=\"";
                echo ($context["text_mode_customer"] ?? null);
                echo "\" data-onstyle=\"success\" data-offstyle=\"danger\" type=\"checkbox\" class=\"form-control hide\" checked>
                              ";
            } else {
                // line 36
                echo "                               <input value=\"1\" name=\"marketplace_seller_mode\" data-toggle=\"toggle\" data-on=\"";
                echo ($context["text_mode_seller"] ?? null);
                echo "\" data-off=\"";
                echo ($context["text_mode_customer"] ?? null);
                echo "\" data-onstyle=\"success\" data-offstyle=\"danger\" type=\"checkbox\" class=\"form-control hide\">
                              ";
            }
            // line 38
            echo "                            </div>
                        </form>
                        <br/>
                    ";
        }
        // line 42
        echo "                

    <div class=\"row\">
      <ul class=\"nav nav-tabs\" id=\"nav_tabs\">
        <li class=\"active\"><a href=\"#tab-to-pay\" data-toggle=\"tab\">To Pay</a></li>
        <li><a href=\"#tab-to-ship\" data-toggle=\"tab\">To Ship</a></li>
        <li><a href=\"#tab-to-receive\" data-toggle=\"tab\">To Receive</a></li>
        <li><a href=\"#tab-to-rate\" data-toggle=\"tab\">To Rate</a></li>
        <li><a href=\"#tab-to-cancel\" data-toggle=\"tab\">Canceled</a></li>
      </ul>
    </div>
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"tab-to-pay\">
        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i>Waiting for Seller to approve your order</div>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 58
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 58) == "Pending")) {
                // line 59
                echo "          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
              <tr>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
              </tr>
              </thead>
              <tbody>
                ";
                // line 70
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 70), [], "array", true, true, false, 70) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 70)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 70)] ?? null) : null)) : ([]));
                // line 71
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 72
                    echo "                <tr>
                  ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 73)) {
                        // line 74
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 74);
                        echo "</td>
                  ";
                    }
                    // line 76
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 76);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 77);
                    echo "</td>
                  ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 79);
                        echo "</td>
                  ";
                    }
                    // line 81
                    echo "                </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                <td class=\"text-right\">
                  <a class=\"btn btn-danger text-right\">Cancel Order</a>
                </td>
              </tbody>
            </table>
          </div>
        ";
            }
            // line 90
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-ship\">
        <div class=\"alert alert-info alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\">Seller is preparing to ship your parcel</i></div>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 97
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 97) == "Processing")) {
                // line 98
                echo "          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Tracking Number</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
              </thead>
              <tbody>
                ";
                // line 108
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 108), [], "array", true, true, false, 108) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 108)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 108)] ?? null) : null)) : ([]));
                // line 109
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 110
                    echo "                <tr>
                  ";
                    // line 111
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 111)) {
                        // line 112
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 112);
                        echo "</td>
                  ";
                    }
                    // line 114
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 114);
                    echo "</td>
                    <td class=\"text-left\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 115);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 116);
                    echo "</td>
                  ";
                    // line 117
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 117)) {
                        // line 118
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 118);
                        echo "</td>
                  ";
                    }
                    // line 120
                    echo "                </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "              <td class=\"text-right\">   
                <button id=\"cancelOrderBtn\" data-tracking=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 123);
                echo "\" class=\"btn btn-danger text-right\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
            }
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 134
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 134) == "Canceled")) {
                // line 135
                echo "        <div class=\"table-responsive\">
          <div class=\"table table-bordered table-hover\">
          <table class=\"table table-bordered table-hover\">
            <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
            </thead>
              <tbody>
                ";
                // line 145
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145), [], "array", true, true, false, 145) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145)] ?? null) : null)) : ([]));
                // line 146
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 147
                    echo "                <tr>
                  ";
                    // line 148
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 149);
                        echo "</td>
                  ";
                    }
                    // line 151
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 151);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 152);
                    echo "</td>
                  ";
                    // line 153
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 153)) {
                        // line 154
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 154);
                        echo "</td>
                  ";
                    }
                    // line 156
                    echo "                </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "              </tbody>
            </table>
          </div>
        </div>
        ";
            }
            // line 163
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "      </div>
    </div>
  

      <h2>";
        // line 168
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 170
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 171
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 172
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 173
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 175
        if (($context["credit_cards"] ?? null)) {
            // line 176
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 179
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 179);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 179);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "      </ul>
      ";
        }
        // line 183
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 185
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        ";
        // line 187
        echo "        ";
        if (($context["reward"] ?? null)) {
            // line 188
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 190
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 191
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 192
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 194
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 196
        if ( !($context["tracking"] ?? null)) {
            // line 197
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 199
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 200
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 202
        echo "      </ul>
      <h2>";
        // line 203
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 205
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 207
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 208
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

                    <script type=\"text/javascript\">
                      \$('input[name=\\'marketplace_seller_mode\\']').on('change',function() {
                        \$(\"#form-mode\").submit();
                      });
                    </script>
                
";
        // line 217
        echo ($context["footer"] ?? null);
        echo "


<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$(\"#cancelOrderBtn\").on(\"click\", function() {
        var button = \$(this);
        var trackingNumber = button.data(\"tracking\");

        \$.ajax({
            url: \"index.php?route=extension/flashexpress_api/cancelOrder\",
            type: \"POST\",
            data: { parcel_number: trackingNumber },
            beforeSend: function() {
                button.prop(\"disabled\", true).text(\"Cancelling...\");
            },
            success: function(response) {
                alert(\"Success!\");
            },
            error: function() {
                alert(\"Failed to cancel the order. Please try again.\");
            },
            complete: function() {
                button.prop(\"disabled\", true).text(\"Cancel Order\");
            }
        });
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__5d065938d08904f113badfecc876b8231de3a49788013f50557b5d69b8ff0f81";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 217,  636 => 208,  632 => 207,  625 => 205,  620 => 203,  617 => 202,  610 => 200,  603 => 199,  595 => 197,  593 => 196,  588 => 194,  581 => 192,  575 => 191,  568 => 190,  560 => 188,  557 => 187,  551 => 185,  545 => 183,  541 => 181,  530 => 179,  526 => 178,  520 => 176,  518 => 175,  511 => 173,  505 => 172,  499 => 171,  493 => 170,  488 => 168,  482 => 164,  476 => 163,  469 => 158,  454 => 156,  446 => 154,  444 => 153,  440 => 152,  435 => 151,  427 => 149,  425 => 148,  422 => 147,  404 => 146,  402 => 145,  390 => 135,  387 => 134,  383 => 133,  378 => 130,  372 => 129,  363 => 123,  360 => 122,  345 => 120,  337 => 118,  335 => 117,  331 => 116,  327 => 115,  322 => 114,  314 => 112,  312 => 111,  309 => 110,  291 => 109,  289 => 108,  277 => 98,  274 => 97,  270 => 96,  263 => 91,  257 => 90,  248 => 83,  233 => 81,  225 => 79,  223 => 78,  219 => 77,  214 => 76,  206 => 74,  204 => 73,  201 => 72,  183 => 71,  181 => 70,  168 => 59,  165 => 58,  161 => 57,  144 => 42,  138 => 38,  130 => 36,  122 => 34,  120 => 33,  114 => 31,  112 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  80 => 20,  76 => 18,  70 => 16,  68 => 15,  65 => 14,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5d065938d08904f113badfecc876b8231de3a49788013f50557b5d69b8ff0f81", "");
    }
}
