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

/* __string_template__9cfb8b3e51996393e71492535539d4ddac5093137af9ea661af2913e2c15fb1e */
class __TwigTemplate_fed2f1455960e76481b6e49f5abc17dad602f460cc9d747eb396e3cc3611acaf extends Template
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
  .nav li a:hover {
    background: #ffc766;
  }

  .n {
    padding-bottom: 10px;
    border-bottom: 1px solid black;
  }

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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 33
            echo "        <li class=\"breadcrumb-item\">
          <a class=\"text-decoration-none text-black\" href=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 34);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 34);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ol>
  </nav>
  ";
        // line 42
        echo "  
  <div class=\"row\">";
        // line 43
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 44
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 45
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 46
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 47
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 48
            echo "    ";
        } else {
            // line 49
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 50
            echo "    ";
        }
        // line 51
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 52
        if ((array_key_exists("orders", $context) && (twig_length_filter($this->env, ($context["orders"] ?? null)) > 0))) {
            // line 53
            echo "      <h2>My Purchase</h2>
       <div class=\"overflow-auto n\">
        <ul class=\"nav nav-pills nav-fill flex-nowrap\" role=\"tablist\" style=\"min-width: 600px;\">
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
            <a class=\"nav-link\" href=\"#tab-canceled\" data-bs-toggle=\"tab\">Canceled</a>
          </li>
        </ul>
      </div>
    
        <div class=\"tab-pane fade show active\" id=\"tab-to-pay\">
            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 76
                echo "              ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 76) == "Pending") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 76)) > 0))) {
                    // line 77
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i> Waiting for Seller to approve your order
                  </div>
                </div>
                <div class=\"table-responsive container mb-4\">
                  <table class=\"table table-bordered table-light\">
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
                    // line 94
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 94), [], "array", true, true, false, 94) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 94)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 94)] ?? null) : null)) : ([]));
                    // line 95
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
                        // line 96
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 98);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 98);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 100);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 101);
                        echo "</td>
                          ";
                        // line 102
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) {
                            // line 103
                            echo "                            <td class=\"text-left\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 103);
                            echo "</td>
                          ";
                        }
                        // line 105
                        echo "                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 108
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 108) == "hitpay")) {
                            // line 109
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 111
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 111);
                            echo "</td>
                        ";
                        }
                        // line 113
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 116);
                        echo "</td>
                      </tr>
                      ";
                        // line 118
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 118)) {
                            // line 119
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 121
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 121);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 124
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 126);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 126);
                        echo "</a></td>
                      </tr>
                    </tbody>
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
                    // line 130
                    echo "                  </table>
                </div>
              </div>
              ";
                }
                // line 134
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "        </div>


      <div class=\"tab-pane fade\" id=\"tab-to-ship\">
        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 140
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 140) == "Processing") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 140)) > 0))) {
                    // line 141
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
                    // line 154
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 154), [], "array", true, true, false, 154) &&  !(null === (($__internal_compile_2 = ($context["product_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 154)] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["product_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 154)] ?? null) : null)) : ([]));
                    // line 155
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
                        // line 156
                        echo "                <tr>
                  ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 157)) {
                            // line 158
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 158);
                            echo "</td>
                  ";
                        }
                        // line 160
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 160);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 161);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 162);
                        echo "</td>
                  ";
                        // line 163
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 163)) {
                            // line 164
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 164);
                            echo "</td>
                  ";
                        }
                        // line 166
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 166)) {
                            // line 167
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 167);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 167);
                            echo "</a></td>
                  ";
                        }
                        // line 169
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
                    // line 171
                    echo "              <td class=\"text-right\">   
                <button  data-tracking=\"";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 172);
                    echo "\"
                  data-order-id=\"";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 173);
                    echo "\" 
                 class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 180
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 181
                echo "        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> No orders for today</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-receive\">
        ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 188
                echo "        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 188) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 188) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 188) == "Delivered"))) {
                    // line 189
                    echo "          <div class=\"table-responsive\">
          ";
                    // line 190
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 190) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 190)) > 0))) {
                        // line 191
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel has been picked-up by our logistics partner</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 193
$context["order"], "status", [], "any", false, false, false, 193) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 193)) > 0))) {
                        // line 194
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Your parcel is on the way!</i></div>
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 196
$context["order"], "status", [], "any", false, false, false, 196) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 196)) > 0))) {
                        // line 197
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             Click the order received button to confirm delivery</i></div>
          ";
                    } else {
                        // line 200
                        echo "            <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
             No Orders for todays </i></div>
          ";
                    }
                    // line 203
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
                    // line 213
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 213), [], "array", true, true, false, 213) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 213)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 213)] ?? null) : null)) : ([]));
                    // line 214
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
                        // line 215
                        echo "                <tr>
                  ";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 216)) {
                            // line 217
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 217);
                            echo "</td>
                  ";
                        }
                        // line 219
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 219);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 220);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 221);
                        echo "</td>
                  ";
                        // line 222
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 222)) {
                            // line 223
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 223);
                            echo "</td>
                  ";
                        }
                        // line 225
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 225)) {
                            // line 226
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 226);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 226);
                            echo "</a></td>
                  ";
                        }
                        // line 228
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
                    // line 230
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 230) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 230) == "In Transit"))) {
                        // line 231
                        echo "                  <td class=\"text-right\">   
                    <a href=\"index.php?route=account/order/info&order_id=";
                        // line 232
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 232);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                  </td>
                ";
                    }
                    // line 235
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 235) == "Delivered")) {
                        // line 236
                        echo "                <td class=\"text-right\">
                    <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 237
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 237);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                </td>
                <td class=\"text-right\">
                    <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 240);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                </td>
              ";
                    }
                    // line 243
                    echo "              </tbody>
            </table>
          </div>
        ";
                }
                // line 247
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "      </div>
      
      <div class=\"tab-pane\" id=\"tab-to-rate\">
        <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
        </i> Your Parcel has been Delivered</div>
        ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 254
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 254) == "To Rate")) {
                    // line 255
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
                    // line 267
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 267), [], "array", true, true, false, 267) &&  !(null === (($__internal_compile_6 = ($context["product_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 267)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["product_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 267)] ?? null) : null)) : ([]));
                    // line 268
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
                        // line 269
                        echo "                <tr>
                  ";
                        // line 270
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 270)) {
                            // line 271
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 271);
                            echo "</td>
                  ";
                        }
                        // line 273
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 273);
                        echo "</td>
                    <td class=\"text-left\">";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 274);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 275
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 275);
                        echo "</td>
                  ";
                        // line 276
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 276)) {
                            // line 277
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 277);
                            echo "</td>
                  ";
                        }
                        // line 279
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 279)) {
                            // line 280
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 280);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 280);
                            echo "</a></td>
                  ";
                        }
                        // line 282
                        echo "                </tr>
              <td class=\"text-right\">   
                <a href=\"index.php?route=product/product&product_id=";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "product_id", [], "any", false, false, false, 284);
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
                    // line 287
                    echo "              <td class=\"text-right\">   
                <a href=\"index.php?route=account/order/info&order_id=";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 288);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
              </td>
              </tbody>
            </table>
          </div>
        ";
                }
                // line 294
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "      </div>

      <div class=\"tab-pane\" id=\"tab-to-cancel\">
      ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 299
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 299) == "Canceled")) {
                    // line 300
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
                    // line 311
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 311), [], "array", true, true, false, 311) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 311)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 311)] ?? null) : null)) : ([]));
                    // line 312
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
                        // line 313
                        echo "                <tr>
                  ";
                        // line 314
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 314)) {
                            // line 315
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 315);
                            echo "</td>
                  ";
                        }
                        // line 317
                        echo "                    <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 317);
                        echo "</td>
                    <td class=\"text-center\">";
                        // line 318
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 318);
                        echo "</td>
                  ";
                        // line 319
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 319)) {
                            // line 320
                            echo "                    <td class=\"text-left\" rowspan=\"";
                            echo twig_length_filter($this->env, ($context["product_list"] ?? null));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 320);
                            echo "</td>
                  ";
                        }
                        // line 322
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 322)) {
                            // line 323
                            echo "                    <td class=\"text-left\"><a href=\"index.php?route=customerpartner/profile&seller_id=";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 323);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 323);
                            echo "</a></td>
                  ";
                        }
                        // line 324
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
                    // line 326
                    echo "              </tbody>
            </table>
          </div>
        </div>
        ";
                }
                // line 331
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "      </div>
    </div>
";
        }
        // line 335
        echo "

      ";
        // line 356
        echo "        ";
        // line 376
        echo "      ";
        // line 377
        echo "      </div>
    ";
        // line 379
        echo "    </div>
</div>
</div>
";
        // line 382
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
        // line 489
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
        return "__string_template__9cfb8b3e51996393e71492535539d4ddac5093137af9ea661af2913e2c15fb1e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 489,  888 => 382,  883 => 379,  880 => 377,  878 => 376,  876 => 356,  872 => 335,  867 => 332,  861 => 331,  854 => 326,  839 => 324,  831 => 323,  828 => 322,  820 => 320,  818 => 319,  814 => 318,  809 => 317,  801 => 315,  799 => 314,  796 => 313,  778 => 312,  776 => 311,  763 => 300,  760 => 299,  756 => 298,  751 => 295,  745 => 294,  736 => 288,  733 => 287,  716 => 284,  712 => 282,  704 => 280,  701 => 279,  693 => 277,  691 => 276,  687 => 275,  683 => 274,  678 => 273,  670 => 271,  668 => 270,  665 => 269,  647 => 268,  645 => 267,  631 => 255,  628 => 254,  624 => 253,  617 => 248,  611 => 247,  605 => 243,  599 => 240,  593 => 237,  590 => 236,  587 => 235,  581 => 232,  578 => 231,  575 => 230,  560 => 228,  552 => 226,  549 => 225,  541 => 223,  539 => 222,  535 => 221,  531 => 220,  526 => 219,  518 => 217,  516 => 216,  513 => 215,  495 => 214,  493 => 213,  481 => 203,  476 => 200,  471 => 197,  469 => 196,  465 => 194,  463 => 193,  459 => 191,  457 => 190,  454 => 189,  451 => 188,  447 => 187,  442 => 184,  434 => 181,  429 => 180,  419 => 173,  415 => 172,  412 => 171,  397 => 169,  389 => 167,  386 => 166,  378 => 164,  376 => 163,  372 => 162,  368 => 161,  363 => 160,  355 => 158,  353 => 157,  350 => 156,  332 => 155,  330 => 154,  315 => 141,  312 => 140,  307 => 139,  301 => 135,  295 => 134,  289 => 130,  269 => 126,  265 => 124,  259 => 121,  255 => 119,  253 => 118,  248 => 116,  243 => 113,  237 => 111,  233 => 109,  231 => 108,  226 => 105,  220 => 103,  218 => 102,  214 => 101,  210 => 100,  203 => 98,  199 => 96,  181 => 95,  179 => 94,  160 => 77,  157 => 76,  153 => 75,  129 => 53,  127 => 52,  120 => 51,  117 => 50,  114 => 49,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  100 => 44,  96 => 43,  93 => 42,  89 => 37,  78 => 34,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9cfb8b3e51996393e71492535539d4ddac5093137af9ea661af2913e2c15fb1e", "");
    }
}
