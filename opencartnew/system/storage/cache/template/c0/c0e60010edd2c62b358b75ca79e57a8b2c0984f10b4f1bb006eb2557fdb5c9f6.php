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

/* journal3/template/account/coupon.twig */
class __TwigTemplate_f6c9b8bd23d47233c6ca2ad2ec7f8aef6926249041feb6346c877b5c4e4b068b extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">
        ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "pageTitlePosition"], "method", false, false, false, 11) == "top")) {
            // line 12
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 14
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 18);
        echo "
<div id=\"account-transaction\" class=\"container\">
  <div class=\"row\">
    ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 24
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "pageTitlePosition"], "method", false, false, false, 30) == "default")) {
            // line 31
            echo "        <h1 class=\"title page-title\">
          ";
            // line 32
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 35
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 36
            echo "        <div class=\"alert alert-success alert-dismissible\">
          <i class=\"fa fa-check-circle\"></i>
          ";
            // line 38
            echo ($context["text_success_redeem"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 42
        echo "      ";
        if (($context["error"] ?? null)) {
            // line 43
            echo "        <div class=\"alert alert-danger alert-dismissible\">
          <i class=\"fa fa-exclamation-circle\"></i>
          ";
            // line 45
            echo ($context["error_coupon"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 49
        echo "      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>
            ";
        // line 53
        echo ($context["text_coupon"] ?? null);
        echo "
          </h4>
        </div>
        <div class=\"main-products product-grid\">
          <div class=\"product-layout  out-of-stock has-extra-button\">
            <div class=\"product-thumb\">
              <div class=\"image\">
                <div class=\"quickview-button\">
                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('42')\" data-original-title=\"Quickview\">
                    <span class=\"btn-text\">
                      Quickview
                    </span>
                  </a>
                </div>
                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=42\" class=\"product-img has-second-image\">
                  <div>
                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive img-first\">
                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive img-second\"></div>
                    </a>
                    <div class=\"product-labels\">
                      <span class=\"product-label product-label-29 product-label-default\">
                        <b>
                          New
                        </b>
                      </span>
                      <span class=\"product-label product-label-28 product-label-default\">
                        <b>
                          -98 %
                        </b>
                      </span>
                      <span class=\"product-label product-label-30 product-label-diagonal\">
                        <b>
                          Out Of Stock
                        </b>
                      </span>
                    </div>
                  </div>
                  <div class=\"caption\">
                    <div class=\"stats\">
                      <span class=\"stat-1\">
                        <span class=\"stats-label\">
                          Brand:
                        </span>
                        <span>
                          <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=8\">
                            Apple
                          </a>
                        </span>
                      </span>
                      <span class=\"stat-2\">
                        <span class=\"stats-label\">
                          Model:
                        </span>
                        <span>
                          SAM-WD11TP34DSX
                        </span>
                      </span>
                    </div>
                    <div class=\"name\">
                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=42\">
                        Apple Cinema 30\"
                      </a>
                    </div>
                    <div class=\"description\">
                      The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac ..
                    </div>
                    <div class=\"price\">
                      <div>
                        <span class=\"price-new\">
                          \$110.00
                        </span>
                        <span class=\"price-old\">
                          \$4,416.80
                        </span>
                      </div>
                      <span class=\"price-tax\">
                        Ex Tax:\$90.00
                      </span>
                    </div>
                    <div class=\"rating no-rating \">
                      <div class=\"rating-stars\">
                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                      </div>
                    </div>
                    <div class=\"buttons-wrapper\">
                      <div class=\"button-group\">
                        <div class=\"cart-group\">
                          <div class=\"stepper\">
                            <input type=\"text\" name=\"quantity\" value=\"2\" data-minimum=\"2\" class=\"form-control\">
                              <input type=\"hidden\" name=\"product_id\" value=\"42\">
                                <span>
                                  <i class=\"fa fa-angle-up\"></i>
                                  <i class=\"fa fa-angle-down\"></i>
                                </span>
                              </div>
                              <a class=\"btn btn-cart\" onclick=\"cart.add('42', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                <span class=\"btn-text\">
                                  Add to Cart
                                </span>
                              </a>
                            </div>
                            <div class=\"wish-group\">
                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('42')\" data-original-title=\"Add to Wish List\">
                                <span class=\"btn-text\">
                                  Add to Wish List
                                </span>
                              </a>
                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('42')\" data-original-title=\"Compare this Product\">
                                <span class=\"btn-text\">
                                  Compare this Product
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class=\"extra-group\">
                          <div>
                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('42', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                              <span class=\"btn-text\">
                                Buy Now
                              </span>
                            </a>
                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"42\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=42\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                              <span class=\"btn-text\">
                                Question
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row pagination-results\">
                  <div class=\"col-sm-6 text-left\">
                    ";
        // line 202
        echo ($context["pagination"] ?? null);
        echo "
                  </div>
                  <div class=\"col-sm-6 text-right\">
                    ";
        // line 205
        echo ($context["results"] ?? null);
        echo "
                  </div>
                </div>
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <a href=\"";
        // line 210
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
                      ";
        // line 211
        echo ($context["button_continue"] ?? null);
        echo "
                    </a>
                  </div>
                </div>
                ";
        // line 215
        echo ($context["content_bottom"] ?? null);
        echo "
              </div>
              ";
        // line 217
        echo ($context["column_right"] ?? null);
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 225
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 225,  341 => 217,  336 => 215,  329 => 211,  325 => 210,  317 => 205,  311 => 202,  159 => 53,  153 => 49,  146 => 45,  142 => 43,  139 => 42,  132 => 38,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
