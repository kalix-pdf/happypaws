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

/* __string_template__0919f41df5638c751dda2c220000528f764914b3aaa86faa372c913b5601a08a */
class __TwigTemplate_261c26bd111f3ee79d2fd87f2e51c55e35dff4a0eb062c543c23693f0e6e7f71 extends Template
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
        <div class=\"tab-pane fade show active\" id=\"tab-to-pay\">
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
                        // line 231
                        echo "                          </td>
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
                echo "              ";
                if ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "In Transit")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 269) == "Delivered"))) {
                    // line 270
                    echo "              <div class=\"card my-4\">
                <div class=\"card-header\">
                 ";
                    // line 272
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 272) == "Picked-up") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 272)) > 0))) {
                        // line 273
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel has been picked-up by our logistics partner</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 275
$context["order"], "status", [], "any", false, false, false, 275) == "In Transit") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 275)) > 0))) {
                        // line 276
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Your parcel is on the way!</i></div>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 278
$context["order"], "status", [], "any", false, false, false, 278) == "Delivered") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 278)) > 0))) {
                        // line 279
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    Click the order received button to confirm delivery</i></div>
                  ";
                    } else {
                        // line 282
                        echo "                    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-exclamation-circle\">
                    No Orders for todays </i></div>
                ";
                    }
                    // line 285
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
                    // line 297
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 297), [], "array", true, true, false, 297) &&  !(null === (($__internal_compile_8 = ($context["product_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 297)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["product_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 297)] ?? null) : null)) : ([]));
                    // line 298
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 299
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 301
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 301);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 301);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 303
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 303);
                        echo "<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "option_value", [], "any", false, false, false, 303);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 304
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 304);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 305
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 305);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Total: </strong></td>
                        <td colspan=\"3\">";
                        // line 309
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 309);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Tracking Number: </strong></td>
                        <td colspan=\"3\">";
                        // line 313
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 313);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 317
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 317) == "hitpay")) {
                            // line 318
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 320
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 320);
                            echo "</td>
                        ";
                        }
                        // line 322
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 325
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 325);
                        echo "</td>
                      </tr>
                      ";
                        // line 327
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 327)) {
                            // line 328
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 330
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 330);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 333
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 335
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 335);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 335);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 339
                    echo "                  </table>
                  ";
                    // line 340
                    if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 340) == "Picked-up") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 340) == "In Transit"))) {
                        // line 341
                        echo "                      <div class=\"d-flex justify-content-end\">   
                        <a href=\"index.php?route=account/order/info&order_id=";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 342);
                        echo "\" class=\"btn btn-primary text-right\">Track Location</a>
                      </div>
                    ";
                    }
                    // line 345
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 345) == "Delivered")) {
                        // line 346
                        echo "                    <div class=\"d-flex justify-content-end gap-3\">
                        <button id=\"RcvdOrderBtn\" data-tracking=\"";
                        // line 347
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 347);
                        echo "\" class=\"btn btn-primary text-right\">Order Received</button>
                        <button id=\"ReFundBtn\" data-tracking=\"";
                        // line 348
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 348);
                        echo "\" class=\"btn btn-danger text-right\">Refund/Return</button>
                    </div>
                  ";
                    }
                    // line 351
                    echo "                </div>
              </div>
              ";
                }
                // line 354
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "        </div>
      </div>
      
      <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-to-rate\">
            ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 361
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 361) == "To Rate")) {
                    // line 362
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
                    // line 379
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 379), [], "array", true, true, false, 379) &&  !(null === (($__internal_compile_10 = ($context["product_info"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 379)] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["product_info"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 379)] ?? null) : null)) : ([]));
                    // line 380
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 381
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 383);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 383);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 385
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 385);
                        echo "<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "option_value", [], "any", false, false, false, 385);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 386
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 386);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 387
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 387);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Total: </strong></td>
                        <td colspan=\"3\">";
                        // line 391
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 391);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Tracking Number: </strong></td>
                        <td colspan=\"3\">";
                        // line 395
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking", [], "any", false, false, false, 395);
                        echo "</td>
                      </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 399
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 399) == "hitpay")) {
                            // line 400
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 402
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 402);
                            echo "</td>
                        ";
                        }
                        // line 404
                        echo "                      </tr>
                      <tr>
                        <td><strong>Payment Status:</strong></td>
                        <td colspan=\"3\">";
                        // line 407
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_status", [], "any", false, false, false, 407);
                        echo "</td>
                      </tr>
                      ";
                        // line 409
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 409)) {
                            // line 410
                            echo "                      <tr class=\"table-danger\">
                        <td><strong>Payment Link:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none btn btn-primary\" href=\"";
                            // line 412
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_url", [], "any", false, false, false, 412);
                            echo "\">Pay Order<a></td>
                      </tr>
                      ";
                        }
                        // line 415
                        echo "                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 417
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 417);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 417);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 421
                    echo "                  </table>
                  <div class=\"d-flex justify-content-end gap-3\">   
                    <a href=\"index.php?route=product/product&product_id=";
                    // line 423
                    echo twig_get_attribute($this->env, $this->source, ($context["prod"] ?? null), "product_id", [], "any", false, false, false, 423);
                    echo "\" class=\"btn btn-primary text-right\">Rate</a>
                
                    <a href=\"index.php?route=account/order/info&order_id=";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 425);
                    echo "\" class=\"btn btn-primary text-right\">View order</a>
                  </div>
                </div>
              </div>
              ";
                }
                // line 430
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "          </div>
      </div>

      ";
            // line 480
            echo "
        <div class=\"tab-pane fade show\" id=\"tab-to-cancel\">
            ";
            // line 482
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 483
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 483) == "Canceled")) {
                    // line 484
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
                    // line 496
                    $context["product_list"] = (((twig_get_attribute($this->env, $this->source, ($context["product_info"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 496), [], "array", true, true, false, 496) &&  !(null === (($__internal_compile_12 = ($context["product_info"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 496)] ?? null) : null)))) ? ((($__internal_compile_13 = ($context["product_info"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 496)] ?? null) : null)) : ([]));
                    // line 497
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                        // line 498
                        echo "                        <tr>
                          <td style=\"width: 250px;\" class=\"text-center align-center\">
                            <img src=\"";
                        // line 500
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 500);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 500);
                        echo "\" style=\"max-width: 120px; height: auto;\" class=\"img-fluid rounded\">
                          </td>
                          <td class=\"text-left\">";
                        // line 502
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 502);
                        echo "</td>
                          <td class=\"text-center\">";
                        // line 503
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 503);
                        echo "</td>
                          <td class=\"text-left\">";
                        // line 504
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 504);
                        echo "</td>
                        </tr>
                      <tr>
                        <td class=\"text-left\"><strong>Payment Method:</strong></td>
                        ";
                        // line 508
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 508) == "hitpay")) {
                            // line 509
                            echo "                          <td colspan=\"3\">Online Payment</td>
                        ";
                        } else {
                            // line 511
                            echo "                          <td colspan=\"3\">";
                            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 511);
                            echo "</td>
                        ";
                        }
                        // line 513
                        echo "                      </tr>
                      <tr>
                        <td><strong>Store Owner:</strong></td>
                        <td colspan=\"3\"><a class=\"text-decoration-none\" href=\"index.php?route=customerpartner/profile&seller_id=";
                        // line 516
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "seller_id", [], "any", false, false, false, 516);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["prod"], "store", [], "any", false, false, false, 516);
                        echo " Shop</a></td>
                      </tr>
                    </tbody>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 520
                    echo "                  </table>
                </div>
              </div>
              ";
                }
                // line 524
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 525
            echo "        </div>
    </div>
    ";
        } else {
            // line 528
            echo "    <p>You have no product purchase history. Order now!</p>
    ";
        }
        // line 530
        echo "    </div>
  </div>
  ";
        // line 532
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 535
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
        // line 642
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
        return "__string_template__0919f41df5638c751dda2c220000528f764914b3aaa86faa372c913b5601a08a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1113 => 642,  1046 => 535,  1040 => 532,  1036 => 530,  1032 => 528,  1027 => 525,  1021 => 524,  1015 => 520,  1003 => 516,  998 => 513,  992 => 511,  988 => 509,  986 => 508,  979 => 504,  975 => 503,  971 => 502,  964 => 500,  960 => 498,  955 => 497,  953 => 496,  939 => 484,  936 => 483,  932 => 482,  928 => 480,  923 => 431,  917 => 430,  909 => 425,  904 => 423,  900 => 421,  888 => 417,  884 => 415,  878 => 412,  874 => 410,  872 => 409,  867 => 407,  862 => 404,  856 => 402,  852 => 400,  850 => 399,  843 => 395,  836 => 391,  829 => 387,  825 => 386,  819 => 385,  812 => 383,  808 => 381,  803 => 380,  801 => 379,  782 => 362,  779 => 361,  775 => 360,  768 => 355,  762 => 354,  757 => 351,  751 => 348,  747 => 347,  744 => 346,  741 => 345,  735 => 342,  732 => 341,  730 => 340,  727 => 339,  715 => 335,  711 => 333,  705 => 330,  701 => 328,  699 => 327,  694 => 325,  689 => 322,  683 => 320,  679 => 318,  677 => 317,  670 => 313,  663 => 309,  656 => 305,  652 => 304,  646 => 303,  639 => 301,  635 => 299,  630 => 298,  628 => 297,  614 => 285,  609 => 282,  604 => 279,  602 => 278,  598 => 276,  596 => 275,  592 => 273,  590 => 272,  586 => 270,  583 => 269,  579 => 268,  573 => 264,  567 => 263,  560 => 259,  556 => 257,  542 => 249,  538 => 248,  533 => 245,  526 => 241,  521 => 238,  519 => 237,  514 => 235,  508 => 231,  502 => 229,  498 => 227,  496 => 226,  490 => 222,  481 => 219,  477 => 218,  474 => 217,  470 => 215,  459 => 213,  455 => 212,  452 => 211,  450 => 210,  446 => 209,  438 => 206,  434 => 204,  430 => 203,  417 => 192,  413 => 191,  403 => 183,  397 => 182,  394 => 181,  391 => 180,  388 => 179,  385 => 178,  382 => 177,  378 => 176,  375 => 175,  372 => 174,  369 => 173,  366 => 172,  362 => 171,  356 => 167,  350 => 166,  343 => 162,  339 => 160,  325 => 152,  321 => 151,  316 => 148,  309 => 144,  304 => 141,  302 => 140,  297 => 138,  291 => 134,  285 => 132,  281 => 130,  279 => 129,  273 => 125,  264 => 122,  260 => 121,  257 => 120,  253 => 118,  242 => 116,  238 => 115,  235 => 114,  233 => 113,  229 => 112,  221 => 109,  217 => 107,  213 => 106,  200 => 95,  196 => 94,  186 => 86,  180 => 85,  177 => 84,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  161 => 79,  158 => 78,  155 => 77,  152 => 76,  149 => 75,  145 => 74,  121 => 52,  119 => 51,  111 => 49,  108 => 48,  105 => 47,  102 => 46,  99 => 45,  97 => 44,  93 => 42,  89 => 37,  78 => 34,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0919f41df5638c751dda2c220000528f764914b3aaa86faa372c913b5601a08a", "");
    }
}
