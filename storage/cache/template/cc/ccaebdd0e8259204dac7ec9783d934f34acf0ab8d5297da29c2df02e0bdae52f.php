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

/* __string_template__43278aaa23db8f6443b56a8aa824e81be256a673dd8298353473eb3187c5db4e */
class __TwigTemplate_bdcf745d5fcad4061fd08cbb9b5f0ce7387cad707a5283a43de8d796ec3da2a4 extends Template
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

<style>
  .card {
    box-shadow: 0 2px 4px black;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  .card-header {
    background-color: #f8f9fa;
    font-weight: bold;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
  }
  .card-body {
    padding: 15px;
  }
</style>

<div id=\"account-account\" class=\"container\">
  <nav id=\"checkout-checkout\" class=\"container mb-4 mt-4\" style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ol>
  </nav>
  ";
        // line 33
        echo "  
  <div class=\"row\">";
        // line 34
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 41
            echo "    ";
        }
        // line 42
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 43
        if ((array_key_exists("orders", $context) && (twig_length_filter($this->env, ($context["orders"] ?? null)) > 0))) {
            // line 44
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
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#tab-to-rate\" data-bs-toggle=\"tab\">Canceled</a>
          </li>
        </ul>
      

        <div class=\"tab-pane fade show active\" id=\"tab-to-pay\">
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 66
                echo "              ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 66) == "Pending") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 66)) > 0))) {
                    // line 67
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i> Waiting for Seller to approve your order
                  </div>
                </div>
                <div class=\"table-responsive container mb-4\">
                  <table class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">Image</td>
                        <td class=\"text-left\">Product Name</td>
                        <td class=\"text-left\">Quantity</td>
                        <td class=\"text-left\">Status</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                    // line 84
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 84), [], "array", true, true, false, 84) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 84)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 84)] ?? null) : null)) : ([]));
                    // line 85
                    echo "                      ";
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
                        // line 86
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 88);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 88);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 90
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 90);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 91
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 91);
                        echo "</td>
                          ";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 92)) {
                            // line 93
                            echo "                            <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 93);
                            echo "</td>
                          ";
                        }
                        // line 95
                        echo "                        </tr>
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
                    // line 97
                    echo "                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        <td colspan=\"3\">";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 99);
                    echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 103);
                    echo "</td>
                      </tr>
                      ";
                    // line 105
                    if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 105)) {
                        // line 106
                        echo "                      <tr>
                        <td class=\"text-left\"><strong>Payment Link:</strong></td>
                        <td colspan=\"3\">";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 108);
                        echo "</td>
                      </tr>
                      ";
                    }
                    // line 111
                    echo "                    </tbody>
                  </table>
                </div>
              </div>
              ";
                }
                // line 116
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "        </div>


      <div class=\"tab-pane fade\" id=\"tab-to-ship\">
        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 122
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 122) == "Processing") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 122)) > 0))) {
                    // line 123
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
                    // line 136
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136), [], "array", true, true, false, 136) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136)] ?? null) : null)) : ([]));
                    // line 137
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
                        // line 138
                        echo "                <tr>
                  ";
                        // line 139
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 139)) {
                            // line 140
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 140);
                            echo "</td>
                  ";
                        }
                        // line 142
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 142);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 143);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 144);
                        echo "</td>
                  ";
                        // line 145
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 145)) {
                            // line 146
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 146);
                            echo "</td>
                  ";
                        }
                        // line 148
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 148)) {
                            // line 149
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 149);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 149);
                            echo "</a></td>
                  ";
                        }
                        // line 151
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
                    // line 153
                    echo "              <td class=\"text-right\">   
                <button  data-tracking=\"";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 154);
                    echo "\"
                  data-order-id=\"";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 155);
                    echo "\" 
                 class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 162
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 163
                echo "        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> No orders for today</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-receive\">
        ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 170
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 170) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 170) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 170) == "Delivered"))) {
                    // line 171
                    echo "          <div class=\"table-responsive\">
          ";
                    // line 172
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 172) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 172)) > 0))) {
                        // line 173
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel has been picked-up by our logistics partner</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 175
$context["order"], "status", [], "any", false, false, false, 175) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 175)) > 0))) {
                        // line 176
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel is on the way!</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 178
$context["order"], "status", [], "any", false, false, false, 178) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 178)) > 0))) {
                        // line 179
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Click the order received button to confirm delivery</i></div>
          ";
                    } else {
                        // line 182
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             No Orders for todays </i></div>
          ";
                    }
                    // line 185
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
                    // line 195
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 195), [], "array", true, true, false, 195) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 195)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 195)] ?? null) : null)) : ([]));
                    // line 196
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
                        // line 197
                        echo "                <tr>
                  ";
                        // line 198
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 199);
                            echo "</td>
                  ";
                        }
                        // line 201
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 201);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 202);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 203);
                        echo "</td>
                  ";
                        // line 204
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 204)) {
                            // line 205
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 205);
                            echo "</td>
                  ";
                        }
                        // line 207
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 207)) {
                            // line 208
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 208);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 208);
                            echo "</a></td>
                  ";
                        }
                        // line 210
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
                    // line 212
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 212) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 212) == "In Transit"))) {
                        // line 213
                        echo "                  <td class=\"text-right\">   
                    <a href=\"index.php?route=account/order/info&order_id=";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 214);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                  </td>
                ";
                    }
                    // line 217
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 217) == "Delivered")) {
                        // line 218
                        echo "                <td class=\"text-right\">
                    <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 219);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                </td>
                <td class=\"text-right\">
                    <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 222);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                </td>
              ";
                    }
                    // line 225
                    echo "              </tbody>
            </table>
          </div>
        ";
                }
                // line 229
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "      </div>
      
      <div class=\"tab-pane\" id=\"tab-to-rate\">
        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> Your Parcel has been Delivered</div>
        ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 236
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 236) == "To Rate")) {
                    // line 237
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
                    // line 249
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 249), [], "array", true, true, false, 249) &&  !(null === (($__internal_compile_6 = ($context["product_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 249)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["product_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 249)] ?? null) : null)) : ([]));
                    // line 250
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
                        // line 251
                        echo "                <tr>
                  ";
                        // line 252
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 252)) {
                            // line 253
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 253);
                            echo "</td>
                  ";
                        }
                        // line 255
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 255);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 256);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 257);
                        echo "</td>
                  ";
                        // line 258
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 258)) {
                            // line 259
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 259);
                            echo "</td>
                  ";
                        }
                        // line 261
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 261)) {
                            // line 262
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 262);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 262);
                            echo "</a></td>
                  ";
                        }
                        // line 264
                        echo "                </tr>
              <td class=\"text-right\">   
                <a href=\"index.php?route=product/product&product_id=";
                        // line 266
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "product_id", [], "any", false, false, false, 266);
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
                    // line 269
                    echo "              <td class=\"text-right\">   
                <a href=\"index.php?route=account/order/info&order_id=";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 270);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 276
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 281
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 281) == "Canceled")) {
                    // line 282
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
                    // line 293
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 293), [], "array", true, true, false, 293) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 293)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 293)] ?? null) : null)) : ([]));
                    // line 294
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
                        // line 295
                        echo "                <tr>
                  ";
                        // line 296
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 297);
                            echo "</td>
                  ";
                        }
                        // line 299
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 299);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 300
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 300);
                        echo "</td>
                  ";
                        // line 301
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 301)) {
                            // line 302
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 302);
                            echo "</td>
                  ";
                        }
                        // line 304
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 304)) {
                            // line 305
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 305);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 305);
                            echo "</a></td>
                  ";
                        }
                        // line 306
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
                    // line 308
                    echo "              </tbody>
            </table>
          </div>
        </div>
        ";
                }
                // line 313
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "      </div>
    </div>
";
        }
        // line 317
        echo "

      ";
        // line 338
        echo "        ";
        // line 358
        echo "      ";
        // line 359
        echo "      </div>
    ";
        // line 361
        echo "    </div>
</div>
</div>
";
        // line 364
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
        // line 471
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
        return "__string_template__43278aaa23db8f6443b56a8aa824e81be256a673dd8298353473eb3187c5db4e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  928 => 471,  861 => 364,  856 => 361,  853 => 359,  851 => 358,  849 => 338,  845 => 317,  840 => 314,  834 => 313,  827 => 308,  812 => 306,  804 => 305,  801 => 304,  793 => 302,  791 => 301,  787 => 300,  782 => 299,  774 => 297,  772 => 296,  769 => 295,  751 => 294,  749 => 293,  736 => 282,  733 => 281,  729 => 280,  724 => 277,  718 => 276,  709 => 270,  706 => 269,  689 => 266,  685 => 264,  677 => 262,  674 => 261,  666 => 259,  664 => 258,  660 => 257,  656 => 256,  651 => 255,  643 => 253,  641 => 252,  638 => 251,  620 => 250,  618 => 249,  604 => 237,  601 => 236,  597 => 235,  590 => 230,  584 => 229,  578 => 225,  572 => 222,  566 => 219,  563 => 218,  560 => 217,  554 => 214,  551 => 213,  548 => 212,  533 => 210,  525 => 208,  522 => 207,  514 => 205,  512 => 204,  508 => 203,  504 => 202,  499 => 201,  491 => 199,  489 => 198,  486 => 197,  468 => 196,  466 => 195,  454 => 185,  449 => 182,  444 => 179,  442 => 178,  438 => 176,  436 => 175,  432 => 173,  430 => 172,  427 => 171,  424 => 170,  420 => 169,  415 => 166,  407 => 163,  402 => 162,  392 => 155,  388 => 154,  385 => 153,  370 => 151,  362 => 149,  359 => 148,  351 => 146,  349 => 145,  345 => 144,  341 => 143,  336 => 142,  328 => 140,  326 => 139,  323 => 138,  305 => 137,  303 => 136,  288 => 123,  285 => 122,  280 => 121,  274 => 117,  268 => 116,  261 => 111,  255 => 108,  251 => 106,  249 => 105,  244 => 103,  237 => 99,  233 => 97,  218 => 95,  210 => 93,  208 => 92,  204 => 91,  200 => 90,  193 => 88,  189 => 86,  171 => 85,  169 => 84,  150 => 67,  147 => 66,  143 => 65,  120 => 44,  118 => 43,  111 => 42,  108 => 41,  105 => 40,  102 => 39,  99 => 38,  96 => 37,  93 => 36,  91 => 35,  87 => 34,  84 => 33,  80 => 28,  69 => 25,  66 => 24,  62 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__43278aaa23db8f6443b56a8aa824e81be256a673dd8298353473eb3187c5db4e", "");
    }
}
