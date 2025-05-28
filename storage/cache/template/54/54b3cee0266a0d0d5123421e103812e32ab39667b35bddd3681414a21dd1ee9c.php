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

/* __string_template__0f94aaa232a2a95ff8ceac4aef7907f6ca46bedad0ea166c1958315e7fab0df1 */
class __TwigTemplate_0f2f6414197918680c4c8b024e7b8fb81ca44977a9c5350e8bbdcf06acf1a215 extends Template
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
<div id=\"account-account\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>
  </nav>
  ";
        // line 15
        echo "  
  <div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 25
        if ((array_key_exists("orders", $context) && (twig_length_filter($this->env, ($context["orders"] ?? null)) > 0))) {
            // line 26
            echo "      <h2>My Purchase</h2>
        <ul class=\"nav nav-pills nav-fill\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#tab-to-pay\" data-bs-toggle=\"tab\">To Pay</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#tab-to-ship\" data-bs-toggle=\"tab\">To Ship</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#tab-to-receive\" data-bs-toggle=\"tab\">To Receive</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#tab-to-rate\" data-bs-toggle=\"tab\">To Rate</a>
          </li>
        </ul>
      
      <div class=\"tab-content mt-3\">
        <div class=\"tab-pane fade show active\" id=\"tab-to-pay\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 45
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45) == "Pending") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45)) > 0))) {
                    // line 46
                    echo "              <div class=\"card mb-3\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                  <div>
                    ";
                    // line 49
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 49), [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 49)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 49)] ?? null) : null)) : ([]));
                    // line 50
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 51
                        echo "                      <strong><h5 class=\"card-title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 51);
                        echo "</h5></strong>
                      <h4 class=\"card-title\">";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 52);
                        echo "</h4>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                  </div>
                  <div>
                    ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 57
                        echo "                      <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 57);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 57);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                  </div>
                </div>
              </div>
            ";
                }
                // line 63
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>



          ";
            // line 109
            echo "
      <div class=\"tab-pane fade\" id=\"tab-to-ship\">
        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 112
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 112) == "Processing") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 112)) > 0))) {
                    // line 113
                    echo "        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> Seller is preparing to ship your parcel</div>
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Tracking Number</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
                <td class=\"text-left\">Store</td>
              </thead>
              <tbody>
                ";
                    // line 126
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 126), [], "array", true, true, false, 126) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 126)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 126)] ?? null) : null)) : ([]));
                    // line 127
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
                        // line 128
                        echo "                <tr>
                  ";
                        // line 129
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) {
                            // line 130
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130);
                            echo "</td>
                  ";
                        }
                        // line 132
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 132);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 133);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 134);
                        echo "</td>
                  ";
                        // line 135
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 135)) {
                            // line 136
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 136);
                            echo "</td>
                  ";
                        }
                        // line 138
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 138)) {
                            // line 139
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 139);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 139);
                            echo "</a></td>
                  ";
                        }
                        // line 141
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
                    // line 143
                    echo "              <td class=\"text-right\">   
                <button  data-tracking=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 144);
                    echo "\"
                  data-order-id=\"";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145);
                    echo "\" 
                 class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 152
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 153
                echo "        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> No orders for today</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-receive\">
        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 160
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 160) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 160) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 160) == "Delivered"))) {
                    // line 161
                    echo "          <div class=\"table-responsive\">
          ";
                    // line 162
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 162) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 162)) > 0))) {
                        // line 163
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel has been picked-up by our logistics partner</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 165
$context["order"], "status", [], "any", false, false, false, 165) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 165)) > 0))) {
                        // line 166
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel is on the way!</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 168
$context["order"], "status", [], "any", false, false, false, 168) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 168)) > 0))) {
                        // line 169
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Click the order received button to confirm delivery</i></div>
          ";
                    } else {
                        // line 172
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             No Orders for todays </i></div>
          ";
                    }
                    // line 175
                    echo "            <table class=\"table table-bordered table-hover\">
              <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Tracking Number</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
                <td class=\"text-left\">Store</td>
              </thead>
              <tbody>
                ";
                    // line 185
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 185), [], "array", true, true, false, 185) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 185)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 185)] ?? null) : null)) : ([]));
                    // line 186
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
                        // line 187
                        echo "                <tr>
                  ";
                        // line 188
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 188)) {
                            // line 189
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 189);
                            echo "</td>
                  ";
                        }
                        // line 191
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 191);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 192);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 193);
                        echo "</td>
                  ";
                        // line 194
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 194)) {
                            // line 195
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 195);
                            echo "</td>
                  ";
                        }
                        // line 197
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 197)) {
                            // line 198
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 198);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 198);
                            echo "</a></td>
                  ";
                        }
                        // line 200
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
                    // line 202
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 202) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 202) == "In Transit"))) {
                        // line 203
                        echo "                  <td class=\"text-right\">   
                    <a href=\"index.php?route=account/order/info&order_id=";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 204);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                  </td>
                ";
                    }
                    // line 207
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 207) == "Delivered")) {
                        // line 208
                        echo "                <td class=\"text-right\">
                    <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 209);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                </td>
                <td class=\"text-right\">
                    <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 212);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                </td>
              ";
                    }
                    // line 215
                    echo "              </tbody>
            </table>
          </div>
        ";
                }
                // line 219
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "      </div>
      
      <div class=\"tab-pane\" id=\"tab-to-rate\">
        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> Your Parcel has been Delivered</div>
        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 226
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 226) == "To Rate")) {
                    // line 227
                    echo "        
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Tracking Number</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
                <td class=\"text-left\">Store</td>
              </thead>
              <tbody>
                ";
                    // line 239
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 239), [], "array", true, true, false, 239) &&  !(null === (($__internal_compile_6 = ($context["product_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 239)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["product_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 239)] ?? null) : null)) : ([]));
                    // line 240
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
                        // line 241
                        echo "                <tr>
                  ";
                        // line 242
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 242)) {
                            // line 243
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 243);
                            echo "</td>
                  ";
                        }
                        // line 245
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 245);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 246
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 246);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 247);
                        echo "</td>
                  ";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 248)) {
                            // line 249
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 249);
                            echo "</td>
                  ";
                        }
                        // line 251
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 251)) {
                            // line 252
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 252);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 252);
                            echo "</a></td>
                  ";
                        }
                        // line 254
                        echo "                </tr>
              <td class=\"text-right\">   
                <a href=\"index.php?route=product/product&product_id=";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "product_id", [], "any", false, false, false, 256);
                        echo "\" class=\"btn btn-primary text-right\">Rate</a>
              </td>
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
                    // line 259
                    echo "              <td class=\"text-right\">   
                <a href=\"index.php?route=account/order/info&order_id=";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 260);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 266
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 271
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 271) == "Canceled")) {
                    // line 272
                    echo "        <div class=\"table-responsive\">
          <div class=\"table table-bordered table-hover\">
          <table class=\"table table-bordered table-hover\">
            <thead>
                <td class=\"text-left\">Order ID</td>
                <td class=\"text-left\">Product Name</td>
                <td class=\"text-left\">Quantity</td>
                <td class=\"text-left\">Status</td>
                <td class=\"text-left\">Store</td>
            </thead>
              <tbody>
                ";
                    // line 283
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 283), [], "array", true, true, false, 283) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 283)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 283)] ?? null) : null)) : ([]));
                    // line 284
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
                        // line 285
                        echo "                <tr>
                  ";
                        // line 286
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 286)) {
                            // line 287
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 287);
                            echo "</td>
                  ";
                        }
                        // line 289
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 289);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 290
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 290);
                        echo "</td>
                  ";
                        // line 291
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 291)) {
                            // line 292
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 292);
                            echo "</td>
                  ";
                        }
                        // line 294
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 294)) {
                            // line 295
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 295);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 295);
                            echo "</a></td>
                  ";
                        }
                        // line 296
                        echo "</tr>
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
                    // line 298
                    echo "              </tbody>
            </table>
          </div>
        </div>
        ";
                }
                // line 303
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "      </div>
    </div>
";
        }
        // line 307
        echo "

      ";
        // line 328
        echo "        ";
        // line 348
        echo "      ";
        // line 349
        echo "      </div>
    ";
        // line 351
        echo "    </div>
</div>
</div>
";
        // line 354
        echo ($context["footer"] ?? null);
        echo "


<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$(\".cancelOrderBtn\").on(\"click\", function() {
        var button = \$(this);
        var trackingNumber = button.data(\"tracking\");
        var orderId = button.data(\"order-id\");

        console.log(\"Tracking:\", trackingNumber, \"Order ID:\", orderId); // For debugging

        \$.ajax({
            url: \"index.php?route=extension/flashexpress_api/cancelOrder\",
            type: \"POST\",
            data: {
                parcel_number: trackingNumber,
                order_id: orderId
            },
            beforeSend: function() {
                button.prop(\"disabled\", true).text(\"Cancelling...\");
            },
            success: function(response) {
                alert(\"Success!\");
                location.reload();
            },
            error: function(xhr) {
                alert(\"Error: \" + xhr.responseText);
            },
            complete: function() {
                button.prop(\"disabled\", false).text(\"Cancel Order\");
            }
        });
    });
});

\$(document).ready(function() {
    \$(\"#cancelOrderBtnFromPending\").on(\"click\", function() {
        var button = \$(this);
        var orderID = button.data(\"tracking\");

        \$.ajax({
            url: \"index.php?route=extension/flashexpress_api/cancelOrderFromPending\",
            type: \"POST\",
            data: { order_ID: orderID },
            beforeSend: function() {
                button.prop(\"disabled\", true).text(\"Cancelling...\");
            },
            success: function(response) {
                alert(\"Success!\");
                location.reload();
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
  

";
        // line 461
        echo "
\$(document).ready(function() {
    \$(\"#RcvdOrderBtn\").on(\"click\", function() {
        var button = \$(this);
        var orderID = button.data(\"tracking\");

        \$.ajax({
            url: \"index.php?route=extension/flashexpress_api/toRate\",
            type: \"POST\",
            data: { order_ID: orderID },
            beforeSend: function() {
                button.prop(\"disabled\", true).text(\"Received\");
            },
            success: function(response) {
                alert(\"Success!\");
                location.reload();
            },
            error: function() {
                alert(\"Failed to received the order. Please try again.\");
            },
            complete: function() {
                button.prop(\"disabled\", true).text(\"Failed to Received\");
            }
        });
    });
});

</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__0f94aaa232a2a95ff8ceac4aef7907f6ca46bedad0ea166c1958315e7fab0df1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  843 => 461,  776 => 354,  771 => 351,  768 => 349,  766 => 348,  764 => 328,  760 => 307,  755 => 304,  749 => 303,  742 => 298,  727 => 296,  719 => 295,  716 => 294,  708 => 292,  706 => 291,  702 => 290,  697 => 289,  689 => 287,  687 => 286,  684 => 285,  666 => 284,  664 => 283,  651 => 272,  648 => 271,  644 => 270,  639 => 267,  633 => 266,  624 => 260,  621 => 259,  604 => 256,  600 => 254,  592 => 252,  589 => 251,  581 => 249,  579 => 248,  575 => 247,  571 => 246,  566 => 245,  558 => 243,  556 => 242,  553 => 241,  535 => 240,  533 => 239,  519 => 227,  516 => 226,  512 => 225,  505 => 220,  499 => 219,  493 => 215,  487 => 212,  481 => 209,  478 => 208,  475 => 207,  469 => 204,  466 => 203,  463 => 202,  448 => 200,  440 => 198,  437 => 197,  429 => 195,  427 => 194,  423 => 193,  419 => 192,  414 => 191,  406 => 189,  404 => 188,  401 => 187,  383 => 186,  381 => 185,  369 => 175,  364 => 172,  359 => 169,  357 => 168,  353 => 166,  351 => 165,  347 => 163,  345 => 162,  342 => 161,  339 => 160,  335 => 159,  330 => 156,  322 => 153,  317 => 152,  307 => 145,  303 => 144,  300 => 143,  285 => 141,  277 => 139,  274 => 138,  266 => 136,  264 => 135,  260 => 134,  256 => 133,  251 => 132,  243 => 130,  241 => 129,  238 => 128,  220 => 127,  218 => 126,  203 => 113,  200 => 112,  195 => 111,  191 => 109,  185 => 64,  179 => 63,  173 => 59,  162 => 57,  158 => 56,  154 => 54,  146 => 52,  141 => 51,  136 => 50,  134 => 49,  129 => 46,  126 => 45,  122 => 44,  102 => 26,  100 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f94aaa232a2a95ff8ceac4aef7907f6ca46bedad0ea166c1958315e7fab0df1", "");
    }
}
