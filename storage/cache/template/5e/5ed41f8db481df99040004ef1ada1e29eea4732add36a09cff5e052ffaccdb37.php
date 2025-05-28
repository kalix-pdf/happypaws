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

/* __string_template__e943542047ad234bb33c9ac7e85f965059aa7d122740bb81fc2b9c3e5f4e5b0f */
class __TwigTemplate_c65dd70297dec5cd92172246951586496a8b18042556b3725fbb5857dcf7f32a extends Template
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
                echo "          ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45) == "Pending") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45)) > 0))) {
                    // line 46
                    echo "            <div class=\"card\">
              <div class=\"card-body\">
                ";
                    // line 48
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 48), [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 48)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 48)] ?? null) : null)) : ([]));
                    // line 49
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 50
                        echo "                  <h5 class=\"card-title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 50);
                        echo "</h5>
                  <h4 class=\"card-title\">";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 51);
                        echo "</h4>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "              </div>
            </div>
          ";
                }
                // line 56
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "

          ";
            // line 100
            echo "
      <div class=\"tab-pane fade\" id=\"tab-to-ship\">
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 103
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 103) == "Processing") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 103)) > 0))) {
                    // line 104
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
                    // line 117
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 117), [], "array", true, true, false, 117) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 117)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 117)] ?? null) : null)) : ([]));
                    // line 118
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
                        // line 119
                        echo "                <tr>
                  ";
                        // line 120
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 120)) {
                            // line 121
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 121);
                            echo "</td>
                  ";
                        }
                        // line 123
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 123);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 124);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 125);
                        echo "</td>
                  ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 127);
                            echo "</td>
                  ";
                        }
                        // line 129
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) {
                            // line 130
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 130);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 130);
                            echo "</a></td>
                  ";
                        }
                        // line 132
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
                    // line 134
                    echo "              <td class=\"text-right\">   
                <button  data-tracking=\"";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 135);
                    echo "\"
                  data-order-id=\"";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136);
                    echo "\" 
                 class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 143
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 144
                echo "        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> No orders for today</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-receive\">
        ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 151
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 151) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 151) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 151) == "Delivered"))) {
                    // line 152
                    echo "          <div class=\"table-responsive\">
          ";
                    // line 153
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 153) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 153)) > 0))) {
                        // line 154
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel has been picked-up by our logistics partner</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 156
$context["order"], "status", [], "any", false, false, false, 156) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 156)) > 0))) {
                        // line 157
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel is on the way!</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 159
$context["order"], "status", [], "any", false, false, false, 159) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159)) > 0))) {
                        // line 160
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Click the order received button to confirm delivery</i></div>
          ";
                    } else {
                        // line 163
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             No Orders for todays </i></div>
          ";
                    }
                    // line 166
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
                    // line 176
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 176), [], "array", true, true, false, 176) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 176)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 176)] ?? null) : null)) : ([]));
                    // line 177
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
                        // line 178
                        echo "                <tr>
                  ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 180);
                            echo "</td>
                  ";
                        }
                        // line 182
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 182);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 183);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 184);
                        echo "</td>
                  ";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 185)) {
                            // line 186
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 186);
                            echo "</td>
                  ";
                        }
                        // line 188
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 188)) {
                            // line 189
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 189);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 189);
                            echo "</a></td>
                  ";
                        }
                        // line 191
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
                    // line 193
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 193) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 193) == "In Transit"))) {
                        // line 194
                        echo "                  <td class=\"text-right\">   
                    <a href=\"index.php?route=account/order/info&order_id=";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 195);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                  </td>
                ";
                    }
                    // line 198
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 198) == "Delivered")) {
                        // line 199
                        echo "                <td class=\"text-right\">
                    <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 200
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 200);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                </td>
                <td class=\"text-right\">
                    <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 203);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                </td>
              ";
                    }
                    // line 206
                    echo "              </tbody>
            </table>
          </div>
        ";
                }
                // line 210
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "      </div>
      
      <div class=\"tab-pane\" id=\"tab-to-rate\">
        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> Your Parcel has been Delivered</div>
        ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 217
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 217) == "To Rate")) {
                    // line 218
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
                    // line 230
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 230), [], "array", true, true, false, 230) &&  !(null === (($__internal_compile_6 = ($context["product_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 230)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["product_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 230)] ?? null) : null)) : ([]));
                    // line 231
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
                        // line 232
                        echo "                <tr>
                  ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 233)) {
                            // line 234
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 234);
                            echo "</td>
                  ";
                        }
                        // line 236
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 236);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 237
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 237);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 238
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 238);
                        echo "</td>
                  ";
                        // line 239
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 239)) {
                            // line 240
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 240);
                            echo "</td>
                  ";
                        }
                        // line 242
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 242)) {
                            // line 243
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 243);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 243);
                            echo "</a></td>
                  ";
                        }
                        // line 245
                        echo "                </tr>
              <td class=\"text-right\">   
                <a href=\"index.php?route=product/product&product_id=";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "product_id", [], "any", false, false, false, 247);
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
                    // line 250
                    echo "              <td class=\"text-right\">   
                <a href=\"index.php?route=account/order/info&order_id=";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 251);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 257
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 262
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 262) == "Canceled")) {
                    // line 263
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
                    // line 274
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 274), [], "array", true, true, false, 274) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 274)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 274)] ?? null) : null)) : ([]));
                    // line 275
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
                        // line 276
                        echo "                <tr>
                  ";
                        // line 277
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 277)) {
                            // line 278
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 278);
                            echo "</td>
                  ";
                        }
                        // line 280
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 280);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 281);
                        echo "</td>
                  ";
                        // line 282
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 282)) {
                            // line 283
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 283);
                            echo "</td>
                  ";
                        }
                        // line 285
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 285)) {
                            // line 286
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 286);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 286);
                            echo "</a></td>
                  ";
                        }
                        // line 287
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
                    // line 289
                    echo "              </tbody>
            </table>
          </div>
        </div>
        ";
                }
                // line 294
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "      </div>
    </div>
";
        }
        // line 298
        echo "

      ";
        // line 319
        echo "        ";
        // line 339
        echo "      ";
        // line 340
        echo "      </div>
    ";
        // line 342
        echo "    </div>
</div>
</div>
";
        // line 345
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
        // line 452
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
        return "__string_template__e943542047ad234bb33c9ac7e85f965059aa7d122740bb81fc2b9c3e5f4e5b0f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 452,  753 => 345,  748 => 342,  745 => 340,  743 => 339,  741 => 319,  737 => 298,  732 => 295,  726 => 294,  719 => 289,  704 => 287,  696 => 286,  693 => 285,  685 => 283,  683 => 282,  679 => 281,  674 => 280,  666 => 278,  664 => 277,  661 => 276,  643 => 275,  641 => 274,  628 => 263,  625 => 262,  621 => 261,  616 => 258,  610 => 257,  601 => 251,  598 => 250,  581 => 247,  577 => 245,  569 => 243,  566 => 242,  558 => 240,  556 => 239,  552 => 238,  548 => 237,  543 => 236,  535 => 234,  533 => 233,  530 => 232,  512 => 231,  510 => 230,  496 => 218,  493 => 217,  489 => 216,  482 => 211,  476 => 210,  470 => 206,  464 => 203,  458 => 200,  455 => 199,  452 => 198,  446 => 195,  443 => 194,  440 => 193,  425 => 191,  417 => 189,  414 => 188,  406 => 186,  404 => 185,  400 => 184,  396 => 183,  391 => 182,  383 => 180,  381 => 179,  378 => 178,  360 => 177,  358 => 176,  346 => 166,  341 => 163,  336 => 160,  334 => 159,  330 => 157,  328 => 156,  324 => 154,  322 => 153,  319 => 152,  316 => 151,  312 => 150,  307 => 147,  299 => 144,  294 => 143,  284 => 136,  280 => 135,  277 => 134,  262 => 132,  254 => 130,  251 => 129,  243 => 127,  241 => 126,  237 => 125,  233 => 124,  228 => 123,  220 => 121,  218 => 120,  215 => 119,  197 => 118,  195 => 117,  180 => 104,  177 => 103,  172 => 102,  168 => 100,  164 => 57,  158 => 56,  153 => 53,  145 => 51,  140 => 50,  135 => 49,  133 => 48,  129 => 46,  126 => 45,  122 => 44,  102 => 26,  100 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 10,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e943542047ad234bb33c9ac7e85f965059aa7d122740bb81fc2b9c3e5f4e5b0f", "");
    }
}
