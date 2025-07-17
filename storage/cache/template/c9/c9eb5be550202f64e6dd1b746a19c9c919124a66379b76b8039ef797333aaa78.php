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

/* account/account.twig */
class __TwigTemplate_8d729d5e93441ee7b1349a3c3ef9df9a3891ae67d4bab7d061981d58b1422ce5 extends Template
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
      
      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-ship\">
          ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 172
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 172) == "Processing")) {
                    // line 173
                    echo "              ";
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 173), [], "array", true, true, false, 173) &&  !(null === (($__internal_compile_4 = ($context["product_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 173)] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["product_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 173)] ?? null) : null)) : ([]));
                    // line 174
                    echo "              ";
                    $context["grouped"] = [];
                    // line 175
                    echo "
              ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 177
                        echo "                ";
                        $context["seller"] = twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 177);
                        // line 178
                        echo "                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["grouped"] ?? null), ($context["seller"] ?? null), [], "array", true, true, false, 178)) {
                            // line 179
                            echo "                  ";
                            $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => []]);
                            // line 180
                            echo "                ";
                        }
                        // line 181
                        echo "                ";
                        $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => twig_array_merge((($__internal_compile_6 = ($context["grouped"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["seller"] ?? null)] ?? null) : null), [0 => $context["prod"]])]);
                        // line 182
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "
              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i> Seller has approved your order. Seller is preparing to ship your parcel.
                  </div>
                </div>

                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
                    foreach ($context['_seq'] as $context["seller"] => $context["products"]) {
                        // line 192
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
                        // line 203
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["products"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                            // line 204
                            echo "                          <tr>
                            <td style=\"width: 250px;\" class=\"text-center align-center\">
                              <img src=\"";
                            // line 206
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 206);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 206);
                            echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                            </td>
                            <td class=\"text-left\">
                              ";
                            // line 209
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 209);
                            echo "
                              ";
                            // line 210
                            if (twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 210)) {
                                // line 211
                                echo "                                <ul class=\"mt-2 mb-0\">
                                  ";
                                // line 212
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 212));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 213
                                    echo "                                    <li><strong>";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                                    echo ":</strong> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 213);
                                    echo "</li>
                                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 215
                                echo "                                </ul>
                              ";
                            }
                            // line 217
                            echo "                            </td>
                            <td class=\"text-center\">";
                            // line 218
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 218);
                            echo "</td>
                            <td class=\"text-left\">";
                            // line 219
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 219);
                            echo "</td>
                          </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 222
                        echo "
                        <tr>
                          <td class=\"text-left\"><strong>Payment Method:</strong></td>
                          <td colspan=\"3\">
                            ";
                        // line 226
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 226) == "hitpay")) {
                            // line 227
                            echo "                              Online Payment
                            ";
                        } else {
                            // line 229
                            echo "                              ";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 229);
                            echo "
                            ";
                        }
                        // line 230
                        echo " | Total: ";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 230);
                        echo "
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Payment Status:</strong></td>
                          <td colspan=\"3\">";
                        // line 235
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 235);
                        echo "</td>
                        </tr>
                        ";
                        // line 237
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 237)) {
                            // line 238
                            echo "                          <tr class=\"table-danger\">
                            <td><strong>Payment Link:</strong></td>
                            <td colspan=\"3\">
                              <a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 241
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 241);
                            echo "\">Pay Order</a>
                            </td>
                          </tr>
                        ";
                        }
                        // line 245
                        echo "                        <tr>
                          <td><strong>Store Owner:</strong></td>
                          <td colspan=\"3\">
                            <a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["products"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "seller_id", [], "any", false, false, false, 248);
                        echo "\">
                              ";
                        // line 249
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
                    // line 257
                    echo "
                <div class=\"d-flex justify-content-end\">
                  <button data-tracking=\"";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 259);
                    echo "\" class=\"btn btn-danger text-right cancelOrderBtn\">Cancel Order</button>
                </div>
              </div>
            ";
                }
                // line 263
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "        </div>

      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-receive\">
          ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 269
                echo "            ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "Delivered"))) {
                    // line 270
                    echo "              ";
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 270), [], "array", true, true, false, 270) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 270)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 270)] ?? null) : null)) : ([]));
                    // line 271
                    echo "              ";
                    $context["grouped"] = [];
                    // line 272
                    echo "
              ";
                    // line 273
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 274
                        echo "                ";
                        $context["seller"] = twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 274);
                        // line 275
                        echo "                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["grouped"] ?? null), ($context["seller"] ?? null), [], "array", true, true, false, 275)) {
                            // line 276
                            echo "                  ";
                            $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => []]);
                            // line 277
                            echo "                ";
                        }
                        // line 278
                        echo "                ";
                        $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => twig_array_merge((($__internal_compile_10 = ($context["grouped"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["seller"] ?? null)] ?? null) : null), [0 => $context["prod"]])]);
                        // line 279
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "
              <div class=\"card my-4\">
                <div class=\"card-header\">
                 ";
                    // line 283
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 283) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 283)) > 0))) {
                        // line 284
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel has been picked-up by our logistics partner</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 286
$context["order"], "status", [], "any", false, false, false, 286) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 286)) > 0))) {
                        // line 287
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel is on the way!</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 289
$context["order"], "status", [], "any", false, false, false, 289) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 289)) > 0))) {
                        // line 290
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Click the order received button to confirm delivery</i></div>
                  ";
                    } else {
                        // line 293
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    No Orders for todays </i></div>
                ";
                    }
                    // line 296
                    echo "                </div>

                ";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
                    foreach ($context['_seq'] as $context["seller"] => $context["products"]) {
                        // line 299
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
                        // line 310
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["products"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                            // line 311
                            echo "                          <tr>
                            <td style=\"width: 250px;\" class=\"text-center align-center\">
                              <img src=\"";
                            // line 313
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 313);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 313);
                            echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                            </td>
                            <td class=\"text-left\">
                              ";
                            // line 316
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 316);
                            echo "
                              ";
                            // line 317
                            if (twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 317)) {
                                // line 318
                                echo "                                <ul class=\"mt-2 mb-0\">
                                  ";
                                // line 319
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 319));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 320
                                    echo "                                    <li><strong>";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 320);
                                    echo ":</strong> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 320);
                                    echo "</li>
                                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 322
                                echo "                                </ul>
                              ";
                            }
                            // line 324
                            echo "                            </td>
                            <td class=\"text-center\">";
                            // line 325
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 325);
                            echo "</td>
                            <td class=\"text-left\">";
                            // line 326
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 326);
                            echo "</td>
                          </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 329
                        echo "
                        <tr>
                          <td class=\"text-left\"><strong>Payment Method:</strong></td>
                          <td colspan=\"3\">
                            ";
                        // line 333
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 333) == "hitpay")) {
                            // line 334
                            echo "                              Online Payment
                            ";
                        } else {
                            // line 336
                            echo "                              ";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 336);
                            echo "
                            ";
                        }
                        // line 338
                        echo "                          </td>
                        </tr>
                        <tr>
                          <td><strong>Payment Status:</strong></td>
                          <td colspan=\"3\">";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 342);
                        echo "</td>
                        </tr>
                        ";
                        // line 344
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 344)) {
                            // line 345
                            echo "                          <tr class=\"table-danger\">
                            <td><strong>Payment Link:</strong></td>
                            <td colspan=\"3\">
                              <a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 348
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 348);
                            echo "\">Pay Order</a>
                            </td>
                          </tr>
                        ";
                        }
                        // line 352
                        echo "                        <tr>
                          <td><strong>Store Owner:</strong></td>
                          <td colspan=\"3\">
                            <a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 355
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = $context["products"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "seller_id", [], "any", false, false, false, 355);
                        echo "\">
                              ";
                        // line 356
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
                    // line 364
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 364) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 364) == "In Transit"))) {
                        // line 365
                        echo "                  <div class=\"d-flex justify-content-end\">   
                    <a href=\"index.php?route=account/order/info&order_id=";
                        // line 366
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 366);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                  </div>
                ";
                    }
                    // line 369
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 369) == "Delivered")) {
                        // line 370
                        echo "                  <div class=\"d-flex justify-content-end gap-3\">
                    <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 371
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 371);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                    <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 372
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 372);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                  </div>
                ";
                    }
                    // line 375
                    echo "            ";
                }
                // line 376
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "        </div>
      </div>
      </div>
      
      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-rate\">
          ";
            // line 383
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 384
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 384) == "To Rate")) {
                    // line 385
                    echo "              ";
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 385), [], "array", true, true, false, 385) &&  !(null === (($__internal_compile_12 = ($context["product_info"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 385)] ?? null) : null)))) ? ((($__internal_compile_13 = ($context["product_info"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 385)] ?? null) : null)) : ([]));
                    // line 386
                    echo "              ";
                    $context["grouped"] = [];
                    // line 387
                    echo "
              ";
                    // line 388
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 389
                        echo "                ";
                        $context["seller"] = twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 389);
                        // line 390
                        echo "                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["grouped"] ?? null), ($context["seller"] ?? null), [], "array", true, true, false, 390)) {
                            // line 391
                            echo "                  ";
                            $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => []]);
                            // line 392
                            echo "                ";
                        }
                        // line 393
                        echo "                ";
                        $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => twig_array_merge((($__internal_compile_14 = ($context["grouped"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["seller"] ?? null)] ?? null) : null), [0 => $context["prod"]])]);
                        // line 394
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    echo "
              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i>Your Parcel has been Delivered
                  </div>
                </div>

                ";
                    // line 403
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
                    foreach ($context['_seq'] as $context["seller"] => $context["products"]) {
                        // line 404
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
                        // line 415
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["products"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                            // line 416
                            echo "                          <tr>
                            <td style=\"width: 250px;\" class=\"text-center align-center\">
                              <img src=\"";
                            // line 418
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 418);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 418);
                            echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                            </td>
                            <td class=\"text-left\">
                              ";
                            // line 421
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 421);
                            echo "
                              ";
                            // line 422
                            if (twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 422)) {
                                // line 423
                                echo "                                <ul class=\"mt-2 mb-0\">
                                  ";
                                // line 424
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 424));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 425
                                    echo "                                    <li><strong>";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 425);
                                    echo ":</strong> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 425);
                                    echo "</li>
                                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 427
                                echo "                                </ul>
                              ";
                            }
                            // line 429
                            echo "                            </td>
                            <td class=\"text-center\">";
                            // line 430
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 430);
                            echo "</td>
                            <td class=\"text-left\">";
                            // line 431
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 431);
                            echo "</td>
                          </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 434
                        echo "
                        <tr>
                          <td class=\"text-left\"><strong>Payment Method:</strong></td>
                          <td colspan=\"3\">
                            ";
                        // line 438
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 438) == "hitpay")) {
                            // line 439
                            echo "                              Online Payment
                            ";
                        } else {
                            // line 441
                            echo "                              ";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 441);
                            echo "
                            ";
                        }
                        // line 443
                        echo "                          </td>
                        </tr>
                        <tr>
                          <td><strong>Payment Status:</strong></td>
                          <td colspan=\"3\">";
                        // line 447
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 447);
                        echo "</td>
                        </tr>
                        ";
                        // line 449
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 449)) {
                            // line 450
                            echo "                          <tr class=\"table-danger\">
                            <td><strong>Payment Link:</strong></td>
                            <td colspan=\"3\">
                              <a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 453
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 453);
                            echo "\">Pay Order</a>
                            </td>
                          </tr>
                        ";
                        }
                        // line 457
                        echo "                        <tr>
                          <td><strong>Store Owner:</strong></td>
                          <td colspan=\"3\">
                            <a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 460
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = $context["products"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), "seller_id", [], "any", false, false, false, 460);
                        echo "\">
                              ";
                        // line 461
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
                    // line 469
                    echo "                <div class=\"d-flex justify-content-end gap-3\">   
                  <a href=\"index.php?route=product/product&product_id=";
                    // line 470
                    echo twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "product_id", [], "any", false, false, false, 470);
                    echo "\" class=\"btn btn-primary text-right\">Rate</a>
                  <a href=\"index.php?route=account/order/info&order_id=";
                    // line 471
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 471);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
                </div>
            ";
                }
                // line 474
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "        </div>
      </div>

      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-cancel\">
          ";
            // line 480
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 481
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 481) == "Canceled")) {
                    // line 482
                    echo "              ";
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 482), [], "array", true, true, false, 482) &&  !(null === (($__internal_compile_16 = ($context["product_info"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 482)] ?? null) : null)))) ? ((($__internal_compile_17 = ($context["product_info"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 482)] ?? null) : null)) : ([]));
                    // line 483
                    echo "              ";
                    $context["grouped"] = [];
                    // line 484
                    echo "
              ";
                    // line 485
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 486
                        echo "                ";
                        $context["seller"] = twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 486);
                        // line 487
                        echo "                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["grouped"] ?? null), ($context["seller"] ?? null), [], "array", true, true, false, 487)) {
                            // line 488
                            echo "                  ";
                            $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => []]);
                            // line 489
                            echo "                ";
                        }
                        // line 490
                        echo "                ";
                        $context["grouped"] = twig_array_merge(($context["grouped"] ?? null), [($context["seller"] ?? null) => twig_array_merge((($__internal_compile_18 = ($context["grouped"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["seller"] ?? null)] ?? null) : null), [0 => $context["prod"]])]);
                        // line 491
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 492
                    echo "
              <div class=\"card my-4\">
                <div class=\"card-header\">
                  <div class=\"alert alert-info alert-dismissible\">
                    <i class=\"fa fa-exclamation-circle\"></i>Your Parcel has been Delivered
                  </div>
                </div>

                ";
                    // line 500
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
                    foreach ($context['_seq'] as $context["seller"] => $context["products"]) {
                        // line 501
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
                        // line 512
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["products"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                            // line 513
                            echo "                          <tr>
                            <td style=\"width: 250px;\" class=\"text-center align-center\">
                              <img src=\"";
                            // line 515
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 515);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 515);
                            echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                            </td>
                            <td class=\"text-left\">
                              ";
                            // line 518
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 518);
                            echo "
                              ";
                            // line 519
                            if (twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 519)) {
                                // line 520
                                echo "                                <ul class=\"mt-2 mb-0\">
                                  ";
                                // line 521
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prod"], "options", [], "any", false, false, false, 521));
                                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                    // line 522
                                    echo "                                    <li><strong>";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 522);
                                    echo ":</strong> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 522);
                                    echo "</li>
                                  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 524
                                echo "                                </ul>
                              ";
                            }
                            // line 526
                            echo "                            </td>
                            <td class=\"text-center\">";
                            // line 527
                            echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 527);
                            echo "</td>
                            <td class=\"text-left\">";
                            // line 528
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 528);
                            echo "</td>
                          </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 531
                        echo "
                        <tr>
                          <td class=\"text-left\"><strong>Payment Method:</strong></td>
                          <td colspan=\"3\">
                            ";
                        // line 535
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 535) == "hitpay")) {
                            // line 536
                            echo "                              Online Payment
                            ";
                        } else {
                            // line 538
                            echo "                              ";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 538);
                            echo "
                            ";
                        }
                        // line 539
                        echo " Total: ";
                        echo ($context["Total"] ?? null);
                        echo "
                          </td>
                        </tr> 
                        <tr>
                          <td><strong>Payment Status:</strong></td>
                          <td colspan=\"3\">";
                        // line 544
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 544);
                        echo "</td>
                        </tr>
                        ";
                        // line 546
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 546)) {
                            // line 547
                            echo "                          <tr class=\"table-danger\">
                            <td><strong>Payment Link:</strong></td>
                            <td colspan=\"3\">
                              <a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 550
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 550);
                            echo "\">Pay Order</a>
                            </td>
                          </tr>
                        ";
                        }
                        // line 554
                        echo "                        <tr>
                          <td><strong>Store Owner:</strong></td>
                          <td colspan=\"3\">
                            <a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 557
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = $context["products"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null), "seller_id", [], "any", false, false, false, 557);
                        echo "\">
                              ";
                        // line 558
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
                    // line 566
                    echo "            ";
                }
                // line 567
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "        </div>
      </div>

    </div>
    ";
        } else {
            // line 573
            echo "    <p>You have no product purchase history. Order now!</p>
    ";
        }
        // line 575
        echo "    </div>
  </div>
  ";
        // line 577
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 580
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
        // line 687
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
        return "account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1358 => 687,  1291 => 580,  1285 => 577,  1281 => 575,  1277 => 573,  1270 => 568,  1264 => 567,  1261 => 566,  1247 => 558,  1243 => 557,  1238 => 554,  1231 => 550,  1226 => 547,  1224 => 546,  1219 => 544,  1210 => 539,  1204 => 538,  1200 => 536,  1198 => 535,  1192 => 531,  1183 => 528,  1179 => 527,  1176 => 526,  1172 => 524,  1161 => 522,  1157 => 521,  1154 => 520,  1152 => 519,  1148 => 518,  1140 => 515,  1136 => 513,  1132 => 512,  1119 => 501,  1115 => 500,  1105 => 492,  1099 => 491,  1096 => 490,  1093 => 489,  1090 => 488,  1087 => 487,  1084 => 486,  1080 => 485,  1077 => 484,  1074 => 483,  1071 => 482,  1068 => 481,  1064 => 480,  1057 => 475,  1051 => 474,  1045 => 471,  1041 => 470,  1038 => 469,  1024 => 461,  1020 => 460,  1015 => 457,  1008 => 453,  1003 => 450,  1001 => 449,  996 => 447,  990 => 443,  984 => 441,  980 => 439,  978 => 438,  972 => 434,  963 => 431,  959 => 430,  956 => 429,  952 => 427,  941 => 425,  937 => 424,  934 => 423,  932 => 422,  928 => 421,  920 => 418,  916 => 416,  912 => 415,  899 => 404,  895 => 403,  885 => 395,  879 => 394,  876 => 393,  873 => 392,  870 => 391,  867 => 390,  864 => 389,  860 => 388,  857 => 387,  854 => 386,  851 => 385,  848 => 384,  844 => 383,  836 => 377,  830 => 376,  827 => 375,  821 => 372,  817 => 371,  814 => 370,  811 => 369,  805 => 366,  802 => 365,  799 => 364,  785 => 356,  781 => 355,  776 => 352,  769 => 348,  764 => 345,  762 => 344,  757 => 342,  751 => 338,  745 => 336,  741 => 334,  739 => 333,  733 => 329,  724 => 326,  720 => 325,  717 => 324,  713 => 322,  702 => 320,  698 => 319,  695 => 318,  693 => 317,  689 => 316,  681 => 313,  677 => 311,  673 => 310,  660 => 299,  656 => 298,  652 => 296,  647 => 293,  642 => 290,  640 => 289,  636 => 287,  634 => 286,  630 => 284,  628 => 283,  623 => 280,  617 => 279,  614 => 278,  611 => 277,  608 => 276,  605 => 275,  602 => 274,  598 => 273,  595 => 272,  592 => 271,  589 => 270,  586 => 269,  582 => 268,  576 => 264,  570 => 263,  563 => 259,  559 => 257,  545 => 249,  541 => 248,  536 => 245,  529 => 241,  524 => 238,  522 => 237,  517 => 235,  508 => 230,  502 => 229,  498 => 227,  496 => 226,  490 => 222,  481 => 219,  477 => 218,  474 => 217,  470 => 215,  459 => 213,  455 => 212,  452 => 211,  450 => 210,  446 => 209,  438 => 206,  434 => 204,  430 => 203,  417 => 192,  413 => 191,  403 => 183,  397 => 182,  394 => 181,  391 => 180,  388 => 179,  385 => 178,  382 => 177,  378 => 176,  375 => 175,  372 => 174,  369 => 173,  366 => 172,  362 => 171,  356 => 167,  350 => 166,  343 => 162,  339 => 160,  325 => 152,  321 => 151,  316 => 148,  309 => 144,  304 => 141,  302 => 140,  297 => 138,  291 => 134,  285 => 132,  281 => 130,  279 => 129,  273 => 125,  264 => 122,  260 => 121,  257 => 120,  253 => 118,  242 => 116,  238 => 115,  235 => 114,  233 => 113,  229 => 112,  221 => 109,  217 => 107,  213 => 106,  200 => 95,  196 => 94,  186 => 86,  180 => 85,  177 => 84,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  161 => 79,  158 => 78,  155 => 77,  152 => 76,  149 => 75,  145 => 74,  121 => 52,  119 => 51,  111 => 49,  108 => 48,  105 => 47,  102 => 46,  99 => 45,  97 => 44,  93 => 42,  89 => 37,  78 => 34,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/account.twig", "");
    }
}
