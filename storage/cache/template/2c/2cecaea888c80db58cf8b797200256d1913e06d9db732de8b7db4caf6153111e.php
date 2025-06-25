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

/* __string_template__1e8a66447edab95490f3fb09be9e29b91588234be6f8e23b1733e8a0fd346af5 */
class __TwigTemplate_e052e8582f9d017952fe391a78c6536883f83783de74507a0791205a6fedb6cb extends Template
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
  <div class=\"row\">
    ";
        // line 44
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 45
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 48
            echo "    ";
        }
        // line 49
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>My Purchase</h2>
      ";
        // line 51
        if ((array_key_exists("orders", $context) && (twig_length_filter($this->env, ($context["orders"] ?? null)) > 0))) {
            // line 52
            echo "       <div class=\"overflow-auto n\">
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
            <a class=\"nav-link\" href=\"#tab-to-cancel\" data-bs-toggle=\"tab\">Canceled</a>
          </li>
        </ul>
      </div>
    
      <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-to-pay\">
          ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 75
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 75) == "Pending") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 75)) > 0))) {
                    // line 76
                    echo "              ";
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 76), [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_0 = ($context["product_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 76)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["product_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 76)] ?? null) : null)) : ([]));
                    // line 77
                    echo "              ";
                    $context["grouped"] = [];
                    // line 78
                    echo "
              ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 80
                        echo "                ";
                        $context["seller"] = twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 80);
                        // line 81
                        echo "                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["grouped"] ?? null), ($context["seller"] ?? null), [], "array", true, true, false, 81)) {
                            // line 82
                            echo "                  ";
                            $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => []]);
                            // line 83
                            echo "                ";
                        }
                        // line 84
                        echo "                ";
                        $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => twig_array_merge((($__internal_compile_2 = ($context["grouped"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["seller"] ?? null)] ?? null) : null), [0 => $context["prod"]])]);
                        // line 85
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "
              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i> Waiting for Seller to approve your order
                  </div>
                </div>

                ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
                    foreach ($context['_seq'] as $context["seller"] => $context["products"]) {
                        // line 95
                        echo "                  <div class=\"table-responsive container mb-4\">
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
                        // line 106
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["products"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                            // line 107
                            echo "                          <tr>
                            <td style=\"width: 250px;\" class=\"text-center align-center\">
                              <img src=\"";
                            // line 109
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 109);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 109);
                            echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                            </td>
                            <td class=\"text-left\">
                              ";
                            // line 112
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 112);
                            echo "
                              ";
                            // line 113
                            if (twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 113)) {
                                // line 114
                                echo "                                <ul class=\"mt-2 mb-0\">
                                  ";
                                // line 115
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 115));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 116
                                    echo "                                    <li><strong>";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 116);
                                    echo ":</strong> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 116);
                                    echo "</li>
                                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 118
                                echo "                                </ul>
                              ";
                            }
                            // line 120
                            echo "                            </td>
                            <td class=\"text-center\">";
                            // line 121
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 121);
                            echo "</td>
                            <td class=\"text-left\">";
                            // line 122
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 122);
                            echo "</td>
                          </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        echo "
                        <tr>
                          <td class=\"text-left\"><strong>Payment Method:</strong></td>
                          <td colspan=\"3\">
                            ";
                        // line 129
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 129) == "hitpay")) {
                            // line 130
                            echo "                              Online Payment
                            ";
                        } else {
                            // line 132
                            echo "                              ";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 132);
                            echo "
                            ";
                        }
                        // line 134
                        echo "                          </td>
                        </tr>
                        <tr>
                          <td><strong>Payment Status:</strong></td>
                          <td colspan=\"3\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 138);
                        echo "</td>
                        </tr>
                        ";
                        // line 140
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 140)) {
                            // line 141
                            echo "                          <tr class=\"table-danger\">
                            <td><strong>Payment Link:</strong></td>
                            <td colspan=\"3\">
                              <a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 144
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 144);
                            echo "\">Pay Order</a>
                            </td>
                          </tr>
                        ";
                        }
                        // line 148
                        echo "                        <tr>
                          <td><strong>Store Owner:</strong></td>
                          <td colspan=\"3\">
                            <a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["products"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "seller_id", [], "any", false, false, false, 151);
                        echo "\">
                              ";
                        // line 152
                        echo $context["seller"];
                        echo " Shop
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['seller'], $context['products'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "
                <div class=\"d-flex justify-content-end px-3 pb-3\">
                  <button id=\"cancelOrderBtnFromPending\" data-tracking=\"";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 162);
                    echo "\" class=\"btn btn-danger\">Cancel Order</button>
                </div>
              </div>
            ";
                }
                // line 166
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "        </div>
      </div>

      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-ship\">
            ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 173
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 173) == "Processing")) {
                    // line 174
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i> Seller has approved your order. Seller is preparing to ship your parcel.
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
                    // line 191
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 191), [], "array", true, true, false, 191) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 191)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 191)] ?? null) : null)) : ([]));
                    // line 192
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 193
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 195);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 195);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 197);
                        echo "<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "option_value", [], "any", false, false, false, 197);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 198
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 198);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 199
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 199);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\">
                          <strong>Total: </strong></td>
                        <td class=\"text-left\">
                          ";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 205);
                        echo "
                        </td>
                      </tr>
                      <tr>
                        <td class=\"text-left\">
                          <strong>Tracking Number: </strong></td>
                        <td class=\"text-left\">
                          ";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 212);
                        echo "
                        </td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 217
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 217) == "hitpay")) {
                            // line 218
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 220
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 220);
                            echo "</td>
                        ";
                        }
                        // line 222
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 225);
                        echo "</td>
                      </tr>
                      ";
                        // line 227
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 227)) {
                            // line 228
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 230
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 230);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 233
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 235
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 235);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 235);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 239
                    echo "                  </table>
                  <div class=\"d-flex justify-content-end\">
                    <button data-tracking=\"";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 241);
                    echo "\" class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
                  </div>
                </div>
              </div>
              ";
                }
                // line 246
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "      </div>

      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-receive\">
            ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 252
                echo "              ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 252) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 252) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 252) == "Delivered"))) {
                    // line 253
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                 ";
                    // line 255
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 255) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 255)) > 0))) {
                        // line 256
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel has been picked-up by our logistics partner</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 258
$context["order"], "status", [], "any", false, false, false, 258) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 258)) > 0))) {
                        // line 259
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel is on the way!</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 261
$context["order"], "status", [], "any", false, false, false, 261) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 261)) > 0))) {
                        // line 262
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Click the order received button to confirm delivery</i></div>
                  ";
                    } else {
                        // line 265
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    No Orders for todays </i></div>
                ";
                    }
                    // line 268
                    echo "                </div>
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
                    // line 280
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 280), [], "array", true, true, false, 280) &&  !(null === (($__internal_compile_6 = ($context["product_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 280)] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["product_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 280)] ?? null) : null)) : ([]));
                    // line 281
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 282
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 284);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 284);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 286
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 286);
                        echo "<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "option_value", [], "any", false, false, false, 286);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 287
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 287);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 288);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Total: </strong></td>
                        <td colspan=\"3\">";
                        // line 292
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 292);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Tracking Number: </strong></td>
                        <td colspan=\"3\">";
                        // line 296
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 296);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 300
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 300) == "hitpay")) {
                            // line 301
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 303
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 303);
                            echo "</td>
                        ";
                        }
                        // line 305
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 308
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 308);
                        echo "</td>
                      </tr>
                      ";
                        // line 310
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 310)) {
                            // line 311
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 313
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 313);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 316
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 318
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 318);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 318);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 322
                    echo "                  </table>
                  ";
                    // line 323
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 323) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 323) == "In Transit"))) {
                        // line 324
                        echo "                      <div class=\"d-flex justify-content-end\">   
                        <a href=\"index.php?route=account/order/info&order_id=";
                        // line 325
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 325);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                      </div>
                    ";
                    }
                    // line 328
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 328) == "Delivered")) {
                        // line 329
                        echo "                    <div class=\"d-flex justify-content-end gap-3\">
                        <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 330
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 330);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                        <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 331
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 331);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                    </div>
                  ";
                    }
                    // line 334
                    echo "                </div>
              </div>
              ";
                }
                // line 337
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "        </div>
      </div>
      
      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-rate\">
            ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 344
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 344) == "To Rate")) {
                    // line 345
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i>Your Parcel has been Delivered
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
                    // line 362
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 362), [], "array", true, true, false, 362) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 362)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 362)] ?? null) : null)) : ([]));
                    // line 363
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 364
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 366
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 366);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 366);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 368
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 368);
                        echo "<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "option_value", [], "any", false, false, false, 368);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 369
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 369);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 370
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 370);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Total: </strong></td>
                        <td colspan=\"3\">";
                        // line 374
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 374);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Tracking Number: </strong></td>
                        <td colspan=\"3\">";
                        // line 378
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 378);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 382
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 382) == "hitpay")) {
                            // line 383
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 385
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 385);
                            echo "</td>
                        ";
                        }
                        // line 387
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 390
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 390);
                        echo "</td>
                      </tr>
                      ";
                        // line 392
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 392)) {
                            // line 393
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 395
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 395);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 398
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 400
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 400);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 400);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 404
                    echo "                  </table>
                  <div class=\"d-flex justify-content-end gap-3\">   
                    <a href=\"index.php?route=product/product&product_id=";
                    // line 406
                    echo twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "product_id", [], "any", false, false, false, 406);
                    echo "\" class=\"btn btn-primary text-right\">Rate</a>
                
                    <a href=\"index.php?route=account/order/info&order_id=";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 408);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
                  </div>
                </div>
              </div>
              ";
                }
                // line 413
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "          </div>
      </div>

      ";
            // line 463
            echo "
        <div class=\"tab-pane fade show\" id=\"tab-to-cancel\">
            ";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 466
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 466) == "Canceled")) {
                    // line 467
                    echo "              <div class=\"card my-4\">
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
                    // line 479
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 479), [], "array", true, true, false, 479) &&  !(null === (($__internal_compile_10 = ($context["product_info"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 479)] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["product_info"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 479)] ?? null) : null)) : ([]));
                    // line 480
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 481
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 483
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 483);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 483);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 485
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 485);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 486
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 486);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 487
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 487);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 491
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 491) == "hitpay")) {
                            // line 492
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 494
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 494);
                            echo "</td>
                        ";
                        }
                        // line 496
                        echo "                      </tr>
                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 499
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 499);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 499);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 503
                    echo "                  </table>
                </div>
              </div>
              ";
                }
                // line 507
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "        </div>
    </div>
    ";
        } else {
            // line 511
            echo "    <p>You have no product purchase history. Order now!</p>
    ";
        }
        // line 513
        echo "    </div>
  </div>
  ";
        // line 515
        echo ($context["column_right"] ?? null);
        echo "
</div>

";
        // line 518
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
        // line 625
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
        return "__string_template__1e8a66447edab95490f3fb09be9e29b91588234be6f8e23b1733e8a0fd346af5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 625,  985 => 518,  979 => 515,  975 => 513,  971 => 511,  966 => 508,  960 => 507,  954 => 503,  942 => 499,  937 => 496,  931 => 494,  927 => 492,  925 => 491,  918 => 487,  914 => 486,  910 => 485,  903 => 483,  899 => 481,  894 => 480,  892 => 479,  878 => 467,  875 => 466,  871 => 465,  867 => 463,  862 => 414,  856 => 413,  848 => 408,  843 => 406,  839 => 404,  827 => 400,  823 => 398,  817 => 395,  813 => 393,  811 => 392,  806 => 390,  801 => 387,  795 => 385,  791 => 383,  789 => 382,  782 => 378,  775 => 374,  768 => 370,  764 => 369,  758 => 368,  751 => 366,  747 => 364,  742 => 363,  740 => 362,  721 => 345,  718 => 344,  714 => 343,  707 => 338,  701 => 337,  696 => 334,  690 => 331,  686 => 330,  683 => 329,  680 => 328,  674 => 325,  671 => 324,  669 => 323,  666 => 322,  654 => 318,  650 => 316,  644 => 313,  640 => 311,  638 => 310,  633 => 308,  628 => 305,  622 => 303,  618 => 301,  616 => 300,  609 => 296,  602 => 292,  595 => 288,  591 => 287,  585 => 286,  578 => 284,  574 => 282,  569 => 281,  567 => 280,  553 => 268,  548 => 265,  543 => 262,  541 => 261,  537 => 259,  535 => 258,  531 => 256,  529 => 255,  525 => 253,  522 => 252,  518 => 251,  512 => 247,  506 => 246,  498 => 241,  494 => 239,  482 => 235,  478 => 233,  472 => 230,  468 => 228,  466 => 227,  461 => 225,  456 => 222,  450 => 220,  446 => 218,  444 => 217,  436 => 212,  426 => 205,  417 => 199,  413 => 198,  407 => 197,  400 => 195,  396 => 193,  391 => 192,  389 => 191,  370 => 174,  367 => 173,  363 => 172,  356 => 167,  350 => 166,  343 => 162,  339 => 160,  325 => 152,  321 => 151,  316 => 148,  309 => 144,  304 => 141,  302 => 140,  297 => 138,  291 => 134,  285 => 132,  281 => 130,  279 => 129,  273 => 125,  264 => 122,  260 => 121,  257 => 120,  253 => 118,  242 => 116,  238 => 115,  235 => 114,  233 => 113,  229 => 112,  221 => 109,  217 => 107,  213 => 106,  200 => 95,  196 => 94,  186 => 86,  180 => 85,  177 => 84,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  161 => 79,  158 => 78,  155 => 77,  152 => 76,  149 => 75,  145 => 74,  121 => 52,  119 => 51,  111 => 49,  108 => 48,  105 => 47,  102 => 46,  99 => 45,  97 => 44,  93 => 42,  89 => 37,  78 => 34,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1e8a66447edab95490f3fb09be9e29b91588234be6f8e23b1733e8a0fd346af5", "");
    }
}
