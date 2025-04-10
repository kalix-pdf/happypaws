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

/* __string_template__e415f590fae2e14a009e116bb61adab0f66117ca82da0c77e8b83f05a3184bba */
class __TwigTemplate_84422dce20a26c7fe402c53b2935d328cd45f8f35d09f51109225c18c5495888 extends Template
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
        <h4><strong>Waiting for Seller to approve your order</strong></h4>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 57
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 57) == "Pending")) {
                // line 58
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
                // line 69
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 69), [], "array", true, true, false, 69) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 69)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 69)] ?? null) : null)) : ([]));
                // line 70
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
                    // line 71
                    echo "                <tr>
                  ";
                    // line 72
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 72)) {
                        // line 73
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 73);
                        echo "</td>
                  ";
                    }
                    // line 75
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 75);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 76);
                    echo "</td>
                  ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 78);
                        echo "</td>
                  ";
                    }
                    // line 80
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
                // line 82
                echo "                <td class=\"text-right\">
                  <a class=\"btn btn-danger text-right\">Cancel Order</a>
                </td>
              </tbody>
            </table>
          </div>
        ";
            }
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-ship\">
        <h4><strong>Seller is preparing to ship your parcel</strong></h4>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 95
            echo "      
        ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 96) == "Processing")) {
                // line 97
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
                // line 107
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 107), [], "array", true, true, false, 107) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 107)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 107)] ?? null) : null)) : ([]));
                // line 108
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
                    // line 109
                    echo "                <tr>
                  ";
                    // line 110
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 110)) {
                        // line 111
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 111);
                        echo "</td>
                  ";
                    }
                    // line 113
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 113);
                    echo "</td>
                    <td class=\"text-left\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 114);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 115);
                    echo "</td>
                  ";
                    // line 116
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 117);
                        echo "</td>
                  ";
                    }
                    // line 119
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
                // line 121
                echo "              <td class=\"text-right\">   
                <button id=\"cancelOrderBtn\" data-tracking=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 122);
                echo "\" class=\"btn btn-danger text-right\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
            }
            // line 128
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 133
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 133) == "Canceled")) {
                // line 134
                echo "        <div class=\"table-responsive\">
          <div class=\"table table-bordered table-hover\">
          <table>
            <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
            </thead>
              <tbody>
                ";
                // line 144
                $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 144), [], "array", true, true, false, 144) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 144)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 144)] ?? null) : null)) : ([]));
                // line 145
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
                    // line 146
                    echo "                <tr>
                  ";
                    // line 147
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 147)) {
                        // line 148
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 148);
                        echo "</td>
                  ";
                    }
                    // line 150
                    echo "                    <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 150);
                    echo "</td>
                    <td class=\"text-center\">";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 151);
                    echo "</td>
                  ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                    <td class=\"text-left\" rowspan=\"";
                        echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 153);
                        echo "</td>
                  ";
                    }
                    // line 155
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
                // line 157
                echo "              </tbody>
            </table>
          </div>
        </div>
        ";
            }
            // line 162
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "      </div>
    </div>
  

      <h2>";
        // line 167
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 169
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 170
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 171
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 172
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 174
        if (($context["credit_cards"] ?? null)) {
            // line 175
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 178
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 178);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 178);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "      </ul>
      ";
        }
        // line 182
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 184
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        ";
        // line 186
        echo "        ";
        if (($context["reward"] ?? null)) {
            // line 187
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 189
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 190
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 191
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 193
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 195
        if ( !($context["tracking"] ?? null)) {
            // line 196
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 198
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 199
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 201
        echo "      </ul>
      <h2>";
        // line 202
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 204
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 206
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 207
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

                    <script type=\"text/javascript\">
                      \$('input[name=\\'marketplace_seller_mode\\']').on('change',function() {
                        \$(\"#form-mode\").submit();
                      });
                    </script>
                
";
        // line 216
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
        return "__string_template__e415f590fae2e14a009e116bb61adab0f66117ca82da0c77e8b83f05a3184bba";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 216,  636 => 207,  632 => 206,  625 => 204,  620 => 202,  617 => 201,  610 => 199,  603 => 198,  595 => 196,  593 => 195,  588 => 193,  581 => 191,  575 => 190,  568 => 189,  560 => 187,  557 => 186,  551 => 184,  545 => 182,  541 => 180,  530 => 178,  526 => 177,  520 => 175,  518 => 174,  511 => 172,  505 => 171,  499 => 170,  493 => 169,  488 => 167,  482 => 163,  476 => 162,  469 => 157,  454 => 155,  446 => 153,  444 => 152,  440 => 151,  435 => 150,  427 => 148,  425 => 147,  422 => 146,  404 => 145,  402 => 144,  390 => 134,  387 => 133,  383 => 132,  378 => 129,  372 => 128,  363 => 122,  360 => 121,  345 => 119,  337 => 117,  335 => 116,  331 => 115,  327 => 114,  322 => 113,  314 => 111,  312 => 110,  309 => 109,  291 => 108,  289 => 107,  277 => 97,  275 => 96,  272 => 95,  268 => 94,  262 => 90,  256 => 89,  247 => 82,  232 => 80,  224 => 78,  222 => 77,  218 => 76,  213 => 75,  205 => 73,  203 => 72,  200 => 71,  182 => 70,  180 => 69,  167 => 58,  164 => 57,  160 => 56,  144 => 42,  138 => 38,  130 => 36,  122 => 34,  120 => 33,  114 => 31,  112 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  80 => 20,  76 => 18,  70 => 16,  68 => 15,  65 => 14,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e415f590fae2e14a009e116bb61adab0f66117ca82da0c77e8b83f05a3184bba", "");
    }
}
