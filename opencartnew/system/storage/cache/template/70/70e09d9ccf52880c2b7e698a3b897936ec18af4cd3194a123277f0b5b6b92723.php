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
class __TwigTemplate_d5f6dbed5d713992086c81c5ddbaf17c4bc3d552da912e2b5f1904accc2f8f9b extends \Twig\Template
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
        echo "     
      ";
        // line 36
        if (($context["success"] ?? null)) {
            // line 37
            echo "        <div class=\"alert alert-success alert-dismissible\">
          <i class=\"fa fa-check-circle\"></i>
          ";
            // line 39
            echo ($context["text_success_redeem"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 43
        echo "      ";
        if (($context["error"] ?? null)) {
            // line 44
            echo "        <div class=\"alert alert-danger alert-dismissible\">
          <i class=\"fa fa-exclamation-circle\"></i>
          ";
            // line 46
            echo ($context["error_coupon"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 50
        echo "      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>";
        // line 53
        echo ($context["text_coupon"] ?? null);
        echo "</h4>
        </div>
<div class=\"main-products product-grid\">
  <div class=\"product-layout has-extra-button\">
    <div class=\"product-thumb\">
      <div class=\"image\">
        <div class=\"quickview-button\">
          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('42')\" data-original-title=\"Quickview\">
            <span class=\"btn-text\">Quickview</span>
          </a>
        </div>
        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=42\" class=\"product-img has-second-image\">
          <div>
            <img src=\"http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/apple_cinema_30-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive img-first\">
            <img src=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive img-second\">
          </div>
        </a>
        <div class=\"product-labels\">
          <span class=\"product-label product-label-29 product-label-default\"><b>New</b></span>
          <span class=\"product-label product-label-28 product-label-default\"><b>-98 %</b></span>
        </div>
      </div>
      <div class=\"caption\">
        <div class=\"name\">
          <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=42\">Apple Cinema 30\"</a>
        </div>
        <div class=\"price\">
          <div>
            <span class=\"price-new\">\$110.00</span>
            <span class=\"price-old\">\$4,416.80</span>
          </div>
          <span class=\"price-tax\">Ex Tax:\$90.00</span>
        </div>
        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">
            <div class=\"cart-group\">
              <div class=\"stepper\">
                <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                <input type=\"hidden\" name=\"product_id\" value=\"42\">
                <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
              </div>
              <a class=\"btn btn-cart\" onclick=\"cart.add('42', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                <span class=\"btn-text\">Add to Cart</span>
              </a>
            </div>
            <div class=\"wish-group\">
              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('42')\" data-original-title=\"Add to Wish List\">
                <span class=\"btn-text\">Add to Wish List</span>
              </a>
              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('42')\" data-original-title=\"Compare this Product\">
                <span class=\"btn-text\">Compare this Product</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
          <div class=\"product-layout  out-of-stock has-extra-button\">
            <div class=\"product-thumb\">
              <div class=\"image\">
                <div class=\"quickview-button\">
                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('30')\" data-original-title=\"Quickview\">
                    <span class=\"btn-text\">
                      Quickview
                    </span>
                  </a>
                </div>
                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=30\" class=\"product-img has-second-image\">
                  <div>
                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive img-first\">
                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/canon_eos_5d_2-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive img-second\"></div>
                    </a>
                    <div class=\"product-labels\">
                      <span class=\"product-label product-label-29 product-label-default\">
                        <b>
                          New
                        </b>
                      </span>
                      <span class=\"product-label product-label-28 product-label-default\">
                        <b>
                          --332 %
                        </b>
                      </span>
                      <span class=\"product-label product-label-30 product-label-diagonal\">
                        <b>
                          2-3 Days
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
                          <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=9\">
                            Canon
                          </a>
                        </span>
                      </span>
                      <span class=\"stat-2\">
                        <span class=\"stats-label\">
                          Model:
                        </span>
                        <span>
                          Product
                        </span>
                      </span>
                    </div>
                    <div class=\"name\">
                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=30\">
                        Canon EOS 5D
                      </a>
                    </div>
                    <div class=\"description\">
                      Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high r..
                    </div>
                    <div class=\"price\">
                      <div>
                        <span class=\"price-new\">
                          \$98.00
                        </span>
                        <span class=\"price-old\">
                          \$24.20
                        </span>
                      </div>
                      <span class=\"price-tax\">
                        Ex Tax:\$80.00
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
                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                              <input type=\"hidden\" name=\"product_id\" value=\"30\">
                                <span>
                                  <i class=\"fa fa-angle-up\"></i>
                                  <i class=\"fa fa-angle-down\"></i>
                                </span>
                              </div>
                              <a class=\"btn btn-cart\" onclick=\"cart.add('30', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                <span class=\"btn-text\">
                                  Add to Cart
                                </span>
                              </a>
                            </div>
                            <div class=\"wish-group\">
                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('30')\" data-original-title=\"Add to Wish List\">
                                <span class=\"btn-text\">
                                  Add to Wish List
                                </span>
                              </a>
                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('30')\" data-original-title=\"Compare this Product\">
                                <span class=\"btn-text\">
                                  Compare this Product
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class=\"extra-group\">
                          <div>
                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('30', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                              <span class=\"btn-text\">
                                Buy Now
                              </span>
                            </a>
                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"30\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=30\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                              <span class=\"btn-text\">
                                Question
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"product-layout  has-extra-button\">
                    <div class=\"product-thumb\">
                      <div class=\"image\">
                        <div class=\"quickview-button\">
                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('47')\" data-original-title=\"Quickview\">
                            <span class=\"btn-text\">
                              Quickview
                            </span>
                          </a>
                        </div>
                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=47\" class=\"product-img has-second-image\">
                          <div>
                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/hp_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/hp_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/hp_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive img-first\">
                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/hp_3-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/hp_3-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/hp_3-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive img-second\"></div>
                            </a>
                            <div class=\"product-labels\">
                              <span class=\"product-label product-label-29 product-label-default\">
                                <b>
                                  New
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
                                  <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=7\">
                                    Hewlett-Packard
                                  </a>
                                </span>
                              </span>
                              <span class=\"stat-2\">
                                <span class=\"stats-label\">
                                  Model:
                                </span>
                                <span>
                                  Product 21
                                </span>
                              </span>
                            </div>
                            <div class=\"name\">
                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=47\">
                                HP LP3065
                              </a>
                            </div>
                            <div class=\"description\">
                              Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you'..
                            </div>
                            <div class=\"price\">
                              <div>
                                <span class=\"price-normal\">
                                  \$122.00
                                </span>
                              </div>
                              <span class=\"price-tax\">
                                Ex Tax:\$100.00
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
                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                      <input type=\"hidden\" name=\"product_id\" value=\"47\">
                                        <span>
                                          <i class=\"fa fa-angle-up\"></i>
                                          <i class=\"fa fa-angle-down\"></i>
                                        </span>
                                      </div>
                                      <a class=\"btn btn-cart\" onclick=\"cart.add('47', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                        <span class=\"btn-text\">
                                          Add to Cart
                                        </span>
                                      </a>
                                    </div>
                                    <div class=\"wish-group\">
                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('47')\" data-original-title=\"Add to Wish List\">
                                        <span class=\"btn-text\">
                                          Add to Wish List
                                        </span>
                                      </a>
                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('47')\" data-original-title=\"Compare this Product\">
                                        <span class=\"btn-text\">
                                          Compare this Product
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"extra-group\">
                                  <div>
                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('47', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                      <span class=\"btn-text\">
                                        Buy Now
                                      </span>
                                    </a>
                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"47\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=47\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                      <span class=\"btn-text\">
                                        Question
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class=\"product-layout  has-extra-button\">
                            <div class=\"product-thumb\">
                              <div class=\"image\">
                                <div class=\"quickview-button\">
                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('28')\" data-original-title=\"Quickview\">
                                    <span class=\"btn-text\">
                                      Quickview
                                    </span>
                                  </a>
                                </div>
                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=28\" class=\"product-img has-second-image\">
                                  <div>
                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_1-250x250.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_1-250x250.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_1-500x500.jpg 2x\" width=\"250\" height=\"250\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive img-first\">
                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_3-250x250.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_3-250x250.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/htc_touch_hd_3-500x500.jpg 2x\" width=\"250\" height=\"250\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive img-second\"></div>
                                    </a>
                                    <div class=\"product-labels\">
                                      <span class=\"product-label product-label-29 product-label-default\">
                                        <b>
                                          New
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
                                          <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">
                                            HTC
                                          </a>
                                        </span>
                                      </span>
                                      <span class=\"stat-2\">
                                        <span class=\"stats-label\">
                                          Model:
                                        </span>
                                        <span>
                                          Product 1
                                        </span>
                                      </span>
                                    </div>
                                    <div class=\"name\">
                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=28\">
                                        HTC Touch HD
                                      </a>
                                    </div>
                                    <div class=\"description\">
                                      HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with..
                                    </div>
                                    <div class=\"price\">
                                      <div>
                                        <span class=\"price-normal\">
                                          \$122.00
                                        </span>
                                      </div>
                                      <span class=\"price-tax\">
                                        Ex Tax:\$100.00
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
                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                              <input type=\"hidden\" name=\"product_id\" value=\"28\">
                                                <span>
                                                  <i class=\"fa fa-angle-up\"></i>
                                                  <i class=\"fa fa-angle-down\"></i>
                                                </span>
                                              </div>
                                              <a class=\"btn btn-cart\" onclick=\"cart.add('28', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                <span class=\"btn-text\">
                                                  Add to Cart
                                                </span>
                                              </a>
                                            </div>
                                            <div class=\"wish-group\">
                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('28')\" data-original-title=\"Add to Wish List\">
                                                <span class=\"btn-text\">
                                                  Add to Wish List
                                                </span>
                                              </a>
                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('28')\" data-original-title=\"Compare this Product\">
                                                <span class=\"btn-text\">
                                                  Compare this Product
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class=\"extra-group\">
                                          <div>
                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('28', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                              <span class=\"btn-text\">
                                                Buy Now
                                              </span>
                                            </a>
                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"28\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=28\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                              <span class=\"btn-text\">
                                                Question
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class=\"product-layout  has-extra-button\">
                                    <div class=\"product-thumb\">
                                      <div class=\"image\">
                                        <div class=\"quickview-button\">
                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('41')\" data-original-title=\"Quickview\">
                                            <span class=\"btn-text\">
                                              Quickview
                                            </span>
                                          </a>
                                        </div>
                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=41\" class=\"product-img has-second-image\">
                                          <div>
                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/imac_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/imac_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/imac_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive img-first\">
                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/imac_2-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/imac_2-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/imac_2-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive img-second\"></div>
                                            </a>
                                            <div class=\"product-labels\">
                                              <span class=\"product-label product-label-29 product-label-default\">
                                                <b>
                                                  New
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
                                                  Product 14
                                                </span>
                                              </span>
                                            </div>
                                            <div class=\"name\">
                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=41\">
                                                iMac
                                              </a>
                                            </div>
                                            <div class=\"description\">
                                              Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space...
                                            </div>
                                            <div class=\"price\">
                                              <div>
                                                <span class=\"price-normal\">
                                                  \$122.00
                                                </span>
                                              </div>
                                              <span class=\"price-tax\">
                                                Ex Tax:\$100.00
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
                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                      <input type=\"hidden\" name=\"product_id\" value=\"41\">
                                                        <span>
                                                          <i class=\"fa fa-angle-up\"></i>
                                                          <i class=\"fa fa-angle-down\"></i>
                                                        </span>
                                                      </div>
                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('41', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                        <span class=\"btn-text\">
                                                          Add to Cart
                                                        </span>
                                                      </a>
                                                    </div>
                                                    <div class=\"wish-group\">
                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('41')\" data-original-title=\"Add to Wish List\">
                                                        <span class=\"btn-text\">
                                                          Add to Wish List
                                                        </span>
                                                      </a>
                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('41')\" data-original-title=\"Compare this Product\">
                                                        <span class=\"btn-text\">
                                                          Compare this Product
                                                        </span>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class=\"extra-group\">
                                                  <div>
                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('41', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                      <span class=\"btn-text\">
                                                        Buy Now
                                                      </span>
                                                    </a>
                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"41\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=41\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                      <span class=\"btn-text\">
                                                        Question
                                                      </span>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class=\"product-layout  has-extra-button\">
                                            <div class=\"product-thumb\">
                                              <div class=\"image\">
                                                <div class=\"quickview-button\">
                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('40')\" data-original-title=\"Quickview\">
                                                    <span class=\"btn-text\">
                                                      Quickview
                                                    </span>
                                                  </a>
                                                </div>
                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=40\" class=\"product-img has-second-image\">
                                                  <div>
                                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/iphone_1-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/iphone_1-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/iphone_1-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive img-first\">
                                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/iphone_6-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/iphone_6-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/iphone_6-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive img-second\"></div>
                                                    </a>
                                                    <div class=\"product-labels\">
                                                      <span class=\"product-label product-label-29 product-label-default\">
                                                        <b>
                                                          New
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
                                                          product 11
                                                        </span>
                                                      </span>
                                                    </div>
                                                    <div class=\"name\">
                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=40\">
                                                        iPhone
                                                      </a>
                                                    </div>
                                                    <div class=\"description\">
                                                      iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messag..
                                                    </div>
                                                    <div class=\"price\">
                                                      <div>
                                                        <span class=\"price-normal\">
                                                          \$123.20
                                                        </span>
                                                      </div>
                                                      <span class=\"price-tax\">
                                                        Ex Tax:\$101.00
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
                                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                              <input type=\"hidden\" name=\"product_id\" value=\"40\">
                                                                <span>
                                                                  <i class=\"fa fa-angle-up\"></i>
                                                                  <i class=\"fa fa-angle-down\"></i>
                                                                </span>
                                                              </div>
                                                              <a class=\"btn btn-cart\" onclick=\"cart.add('40', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                <span class=\"btn-text\">
                                                                  Add to Cart
                                                                </span>
                                                              </a>
                                                            </div>
                                                            <div class=\"wish-group\">
                                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('40')\" data-original-title=\"Add to Wish List\">
                                                                <span class=\"btn-text\">
                                                                  Add to Wish List
                                                                </span>
                                                              </a>
                                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('40')\" data-original-title=\"Compare this Product\">
                                                                <span class=\"btn-text\">
                                                                  Compare this Product
                                                                </span>
                                                              </a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class=\"extra-group\">
                                                          <div>
                                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('40', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                              <span class=\"btn-text\">
                                                                Buy Now
                                                              </span>
                                                            </a>
                                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"40\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=40\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                              <span class=\"btn-text\">
                                                                Question
                                                              </span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class=\"product-layout  has-extra-button\">
                                                    <div class=\"product-thumb\">
                                                      <div class=\"image\">
                                                        <div class=\"quickview-button\">
                                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('48')\" data-original-title=\"Quickview\">
                                                            <span class=\"btn-text\">
                                                              Quickview
                                                            </span>
                                                          </a>
                                                        </div>
                                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=48\" class=\"product-img has-second-image\">
                                                          <div>
                                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_classic_1-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_classic_1-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_classic_1-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive img-first\">
                                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_classic_4-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_classic_4-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_classic_4-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive img-second\"></div>
                                                            </a>
                                                            <div class=\"product-labels\">
                                                              <span class=\"product-label product-label-29 product-label-default\">
                                                                <b>
                                                                  New
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
                                                                  product 20
                                                                </span>
                                                              </span>
                                                            </div>
                                                            <div class=\"name\">
                                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=48\">
                                                                iPod Classic
                                                              </a>
                                                            </div>
                                                            <div class=\"description\">
                                                              More room to move.
                                                                
                                                                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.
                                                                
                                                                Cover Flow.
                                                                
                                                              Browse through your music collection by flipping through alb..
                                                            </div>
                                                            <div class=\"price\">
                                                              <div>
                                                                <span class=\"price-normal\">
                                                                  \$122.00
                                                                </span>
                                                              </div>
                                                              <span class=\"price-tax\">
                                                                Ex Tax:\$100.00
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
                                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                      <input type=\"hidden\" name=\"product_id\" value=\"48\">
                                                                        <span>
                                                                          <i class=\"fa fa-angle-up\"></i>
                                                                          <i class=\"fa fa-angle-down\"></i>
                                                                        </span>
                                                                      </div>
                                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('48', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                        <span class=\"btn-text\">
                                                                          Add to Cart
                                                                        </span>
                                                                      </a>
                                                                    </div>
                                                                    <div class=\"wish-group\">
                                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('48')\" data-original-title=\"Add to Wish List\">
                                                                        <span class=\"btn-text\">
                                                                          Add to Wish List
                                                                        </span>
                                                                      </a>
                                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('48')\" data-original-title=\"Compare this Product\">
                                                                        <span class=\"btn-text\">
                                                                          Compare this Product
                                                                        </span>
                                                                      </a>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class=\"extra-group\">
                                                                  <div>
                                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('48', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                      <span class=\"btn-text\">
                                                                        Buy Now
                                                                      </span>
                                                                    </a>
                                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"48\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=48\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                      <span class=\"btn-text\">
                                                                        Question
                                                                      </span>
                                                                    </a>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class=\"product-layout  has-extra-button\">
                                                            <div class=\"product-thumb\">
                                                              <div class=\"image\">
                                                                <div class=\"quickview-button\">
                                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('36')\" data-original-title=\"Quickview\">
                                                                    <span class=\"btn-text\">
                                                                      Quickview
                                                                    </span>
                                                                  </a>
                                                                </div>
                                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=36\" class=\"product-img has-second-image\">
                                                                  <div>
                                                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_nano_1-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_nano_1-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_nano_1-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Nano\" title=\"iPod Nano\" class=\"img-responsive img-first\">
                                                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_nano_5-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_nano_5-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_nano_5-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Nano\" title=\"iPod Nano\" class=\"img-responsive img-second\"></div>
                                                                    </a>
                                                                    <div class=\"product-labels\">
                                                                      <span class=\"product-label product-label-29 product-label-default\">
                                                                        <b>
                                                                          New
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
                                                                          Product 9
                                                                        </span>
                                                                      </span>
                                                                    </div>
                                                                    <div class=\"name\">
                                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=36\">
                                                                        iPod Nano
                                                                      </a>
                                                                    </div>
                                                                    <div class=\"description\">
                                                                      Video in your pocket.
                                                                        
                                                                        Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
                                                                        
                                                                        Cover Flow.
                                                                        
                                                                      Browse through your music collection by flipping through albu..
                                                                    </div>
                                                                    <div class=\"price\">
                                                                      <div>
                                                                        <span class=\"price-normal\">
                                                                          \$122.00
                                                                        </span>
                                                                      </div>
                                                                      <span class=\"price-tax\">
                                                                        Ex Tax:\$100.00
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
                                                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                              <input type=\"hidden\" name=\"product_id\" value=\"36\">
                                                                                <span>
                                                                                  <i class=\"fa fa-angle-up\"></i>
                                                                                  <i class=\"fa fa-angle-down\"></i>
                                                                                </span>
                                                                              </div>
                                                                              <a class=\"btn btn-cart\" onclick=\"cart.add('36', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                <span class=\"btn-text\">
                                                                                  Add to Cart
                                                                                </span>
                                                                              </a>
                                                                            </div>
                                                                            <div class=\"wish-group\">
                                                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('36')\" data-original-title=\"Add to Wish List\">
                                                                                <span class=\"btn-text\">
                                                                                  Add to Wish List
                                                                                </span>
                                                                              </a>
                                                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('36')\" data-original-title=\"Compare this Product\">
                                                                                <span class=\"btn-text\">
                                                                                  Compare this Product
                                                                                </span>
                                                                              </a>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <div class=\"extra-group\">
                                                                          <div>
                                                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('36', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                              <span class=\"btn-text\">
                                                                                Buy Now
                                                                              </span>
                                                                            </a>
                                                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"36\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=36\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                              <span class=\"btn-text\">
                                                                                Question
                                                                              </span>
                                                                            </a>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class=\"product-layout  has-extra-button\">
                                                                    <div class=\"product-thumb\">
                                                                      <div class=\"image\">
                                                                        <div class=\"quickview-button\">
                                                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('34')\" data-original-title=\"Quickview\">
                                                                            <span class=\"btn-text\">
                                                                              Quickview
                                                                            </span>
                                                                          </a>
                                                                        </div>
                                                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=34\" class=\"product-img has-second-image\">
                                                                          <div>
                                                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_1-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_1-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_1-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Shuffle\" title=\"iPod Shuffle\" class=\"img-responsive img-first\">
                                                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_5-250x250h.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_5-250x250h.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_shuffle_5-500x500h.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Shuffle\" title=\"iPod Shuffle\" class=\"img-responsive img-second\"></div>
                                                                            </a>
                                                                            <div class=\"product-labels\">
                                                                              <span class=\"product-label product-label-29 product-label-default\">
                                                                                <b>
                                                                                  New
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
                                                                                  Product 7
                                                                                </span>
                                                                              </span>
                                                                            </div>
                                                                            <div class=\"name\">
                                                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=34\">
                                                                                iPod Shuffle
                                                                              </a>
                                                                            </div>
                                                                            <div class=\"description\">
                                                                              Born to be worn.
                                                                                
                                                                                Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement.
                                                                                
                                                                                Random meets rhythm.
                                                                                
                                                                              With iTunes autofill, iPod shuffle can deliver a new musical exper..
                                                                            </div>
                                                                            <div class=\"price\">
                                                                              <div>
                                                                                <span class=\"price-normal\">
                                                                                  \$122.00
                                                                                </span>
                                                                              </div>
                                                                              <span class=\"price-tax\">
                                                                                Ex Tax:\$100.00
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
                                                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                      <input type=\"hidden\" name=\"product_id\" value=\"34\">
                                                                                        <span>
                                                                                          <i class=\"fa fa-angle-up\"></i>
                                                                                          <i class=\"fa fa-angle-down\"></i>
                                                                                        </span>
                                                                                      </div>
                                                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('34', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                        <span class=\"btn-text\">
                                                                                          Add to Cart
                                                                                        </span>
                                                                                      </a>
                                                                                    </div>
                                                                                    <div class=\"wish-group\">
                                                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('34')\" data-original-title=\"Add to Wish List\">
                                                                                        <span class=\"btn-text\">
                                                                                          Add to Wish List
                                                                                        </span>
                                                                                      </a>
                                                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('34')\" data-original-title=\"Compare this Product\">
                                                                                        <span class=\"btn-text\">
                                                                                          Compare this Product
                                                                                        </span>
                                                                                      </a>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class=\"extra-group\">
                                                                                  <div>
                                                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('34', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                      <span class=\"btn-text\">
                                                                                        Buy Now
                                                                                      </span>
                                                                                    </a>
                                                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"34\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=34\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                      <span class=\"btn-text\">
                                                                                        Question
                                                                                      </span>
                                                                                    </a>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                          <div class=\"product-layout  has-extra-button\">
                                                                            <div class=\"product-thumb\">
                                                                              <div class=\"image\">
                                                                                <div class=\"quickview-button\">
                                                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('32')\" data-original-title=\"Quickview\">
                                                                                    <span class=\"btn-text\">
                                                                                      Quickview
                                                                                    </span>
                                                                                  </a>
                                                                                </div>
                                                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=32\" class=\"product-img has-second-image\">
                                                                                  <div>
                                                                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_touch_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_touch_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_touch_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Touch\" title=\"iPod Touch\" class=\"img-responsive img-first\">
                                                                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/ipod_touch_7-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/ipod_touch_7-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/ipod_touch_7-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"iPod Touch\" title=\"iPod Touch\" class=\"img-responsive img-second\"></div>
                                                                                    </a>
                                                                                    <div class=\"product-labels\">
                                                                                      <span class=\"product-label product-label-29 product-label-default\">
                                                                                        <b>
                                                                                          New
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
                                                                                          Product 5
                                                                                        </span>
                                                                                      </span>
                                                                                    </div>
                                                                                    <div class=\"name\">
                                                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=32\">
                                                                                        iPod Touch
                                                                                      </a>
                                                                                    </div>
                                                                                    <div class=\"description\">
                                                                                      Revolutionary multi-touch interface.
                                                                                        iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow.
                                                                                        
                                                                                        Gorgeous 3.5-inch widescreen display.
                                                                                      Watch y..
                                                                                    </div>
                                                                                    <div class=\"price\">
                                                                                      <div>
                                                                                        <span class=\"price-normal\">
                                                                                          \$122.00
                                                                                        </span>
                                                                                      </div>
                                                                                      <span class=\"price-tax\">
                                                                                        Ex Tax:\$100.00
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
                                                                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                              <input type=\"hidden\" name=\"product_id\" value=\"32\">
                                                                                                <span>
                                                                                                  <i class=\"fa fa-angle-up\"></i>
                                                                                                  <i class=\"fa fa-angle-down\"></i>
                                                                                                </span>
                                                                                              </div>
                                                                                              <a class=\"btn btn-cart\" onclick=\"cart.add('32', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                <span class=\"btn-text\">
                                                                                                  Add to Cart
                                                                                                </span>
                                                                                              </a>
                                                                                            </div>
                                                                                            <div class=\"wish-group\">
                                                                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('32')\" data-original-title=\"Add to Wish List\">
                                                                                                <span class=\"btn-text\">
                                                                                                  Add to Wish List
                                                                                                </span>
                                                                                              </a>
                                                                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('32')\" data-original-title=\"Compare this Product\">
                                                                                                <span class=\"btn-text\">
                                                                                                  Compare this Product
                                                                                                </span>
                                                                                              </a>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>
                                                                                        <div class=\"extra-group\">
                                                                                          <div>
                                                                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('32', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                              <span class=\"btn-text\">
                                                                                                Buy Now
                                                                                              </span>
                                                                                            </a>
                                                                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"32\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=32\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                              <span class=\"btn-text\">
                                                                                                Question
                                                                                              </span>
                                                                                            </a>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class=\"product-layout  has-extra-button\">
                                                                                    <div class=\"product-thumb\">
                                                                                      <div class=\"image\">
                                                                                        <div class=\"quickview-button\">
                                                                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('43')\" data-original-title=\"Quickview\">
                                                                                            <span class=\"btn-text\">
                                                                                              Quickview
                                                                                            </span>
                                                                                          </a>
                                                                                        </div>
                                                                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=43\" class=\"product-img has-second-image\">
                                                                                          <div>
                                                                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive img-first\">
                                                                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_5-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_5-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_5-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive img-second\"></div>
                                                                                            </a>
                                                                                            <div class=\"product-labels\">
                                                                                              <span class=\"product-label product-label-29 product-label-default\">
                                                                                                <b>
                                                                                                  New
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
                                                                                                  Product 16
                                                                                                </span>
                                                                                              </span>
                                                                                            </div>
                                                                                            <div class=\"name\">
                                                                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=43\">
                                                                                                MacBook
                                                                                              </a>
                                                                                            </div>
                                                                                            <div class=\"description\">
                                                                                              Intel Core 2 Duo processor
                                                                                                
                                                                                                Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.
                                                                                                
                                                                                                1GB memory, larger hard drives
                                                                                                
                                                                                              The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more..
                                                                                            </div>
                                                                                            <div class=\"price\">
                                                                                              <div>
                                                                                                <span class=\"price-normal\">
                                                                                                  \$602.00
                                                                                                </span>
                                                                                              </div>
                                                                                              <span class=\"price-tax\">
                                                                                                Ex Tax:\$500.00
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
                                                                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                      <input type=\"hidden\" name=\"product_id\" value=\"43\">
                                                                                                        <span>
                                                                                                          <i class=\"fa fa-angle-up\"></i>
                                                                                                          <i class=\"fa fa-angle-down\"></i>
                                                                                                        </span>
                                                                                                      </div>
                                                                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('43', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                        <span class=\"btn-text\">
                                                                                                          Add to Cart
                                                                                                        </span>
                                                                                                      </a>
                                                                                                    </div>
                                                                                                    <div class=\"wish-group\">
                                                                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('43')\" data-original-title=\"Add to Wish List\">
                                                                                                        <span class=\"btn-text\">
                                                                                                          Add to Wish List
                                                                                                        </span>
                                                                                                      </a>
                                                                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('43')\" data-original-title=\"Compare this Product\">
                                                                                                        <span class=\"btn-text\">
                                                                                                          Compare this Product
                                                                                                        </span>
                                                                                                      </a>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                                <div class=\"extra-group\">
                                                                                                  <div>
                                                                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('43', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                      <span class=\"btn-text\">
                                                                                                        Buy Now
                                                                                                      </span>
                                                                                                    </a>
                                                                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"43\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=43\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                      <span class=\"btn-text\">
                                                                                                        Question
                                                                                                      </span>
                                                                                                    </a>
                                                                                                  </div>
                                                                                                </div>
                                                                                              </div>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class=\"product-layout  has-extra-button\">
                                                                                            <div class=\"product-thumb\">
                                                                                              <div class=\"image\">
                                                                                                <div class=\"quickview-button\">
                                                                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('44')\" data-original-title=\"Quickview\">
                                                                                                    <span class=\"btn-text\">
                                                                                                      Quickview
                                                                                                    </span>
                                                                                                  </a>
                                                                                                </div>
                                                                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=44\" class=\"product-img has-second-image\">
                                                                                                  <div>
                                                                                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_air_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_air_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_air_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive img-first\">
                                                                                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_air_4-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_air_4-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_air_4-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive img-second\"></div>
                                                                                                    </a>
                                                                                                    <div class=\"product-labels\">
                                                                                                      <span class=\"product-label product-label-29 product-label-default\">
                                                                                                        <b>
                                                                                                          New
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
                                                                                                          Product 17
                                                                                                        </span>
                                                                                                      </span>
                                                                                                    </div>
                                                                                                    <div class=\"name\">
                                                                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=44\">
                                                                                                        MacBook Air
                                                                                                      </a>
                                                                                                    </div>
                                                                                                    <div class=\"description\">
                                                                                                      MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inches and pounds overnight. It’s the result of rethinking conventions. Of multiple wireless innovations. And of breakthrough design. With MacBook Air, mobile computing suddenly has a new standard..
                                                                                                    </div>
                                                                                                    <div class=\"price\">
                                                                                                      <div>
                                                                                                        <span class=\"price-normal\">
                                                                                                          \$1,202.00
                                                                                                        </span>
                                                                                                      </div>
                                                                                                      <span class=\"price-tax\">
                                                                                                        Ex Tax:\$1,000.00
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
                                                                                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                              <input type=\"hidden\" name=\"product_id\" value=\"44\">
                                                                                                                <span>
                                                                                                                  <i class=\"fa fa-angle-up\"></i>
                                                                                                                  <i class=\"fa fa-angle-down\"></i>
                                                                                                                </span>
                                                                                                              </div>
                                                                                                              <a class=\"btn btn-cart\" onclick=\"cart.add('44', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                <span class=\"btn-text\">
                                                                                                                  Add to Cart
                                                                                                                </span>
                                                                                                              </a>
                                                                                                            </div>
                                                                                                            <div class=\"wish-group\">
                                                                                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('44')\" data-original-title=\"Add to Wish List\">
                                                                                                                <span class=\"btn-text\">
                                                                                                                  Add to Wish List
                                                                                                                </span>
                                                                                                              </a>
                                                                                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('44')\" data-original-title=\"Compare this Product\">
                                                                                                                <span class=\"btn-text\">
                                                                                                                  Compare this Product
                                                                                                                </span>
                                                                                                              </a>
                                                                                                            </div>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                        <div class=\"extra-group\">
                                                                                                          <div>
                                                                                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('44', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                              <span class=\"btn-text\">
                                                                                                                Buy Now
                                                                                                              </span>
                                                                                                            </a>
                                                                                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"44\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=44\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                              <span class=\"btn-text\">
                                                                                                                Question
                                                                                                              </span>
                                                                                                            </a>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                  <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                    <div class=\"product-thumb\">
                                                                                                      <div class=\"image\">
                                                                                                        <div class=\"quickview-button\">
                                                                                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('45')\" data-original-title=\"Quickview\">
                                                                                                            <span class=\"btn-text\">
                                                                                                              Quickview
                                                                                                            </span>
                                                                                                          </a>
                                                                                                        </div>
                                                                                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=45\" class=\"product-img has-second-image\">
                                                                                                          <div>
                                                                                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_pro_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_pro_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_pro_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive img-first\">
                                                                                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/macbook_pro_2-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/macbook_pro_2-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/macbook_pro_2-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive img-second\"></div>
                                                                                                            </a>
                                                                                                            <div class=\"product-labels\">
                                                                                                              <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                <b>
                                                                                                                  New
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
                                                                                                                  Product 18
                                                                                                                </span>
                                                                                                              </span>
                                                                                                            </div>
                                                                                                            <div class=\"name\">
                                                                                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=45\">
                                                                                                                MacBook Pro
                                                                                                              </a>
                                                                                                            </div>
                                                                                                            <div class=\"description\">
                                                                                                              Latest Intel mobile architecture
                                                                                                                
                                                                                                                Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Duo MacBook Pro and now supports up to 4GB of RAM.
                                                                                                                
                                                                                                                Leading-edge graphics
                                                                                                                
                                                                                                              The NVIDIA GeForce 8600M GT delivers e..
                                                                                                            </div>
                                                                                                            <div class=\"price\">
                                                                                                              <div>
                                                                                                                <span class=\"price-normal\">
                                                                                                                  \$2,000.00
                                                                                                                </span>
                                                                                                              </div>
                                                                                                              <span class=\"price-tax\">
                                                                                                                Ex Tax:\$2,000.00
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
                                                                                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                      <input type=\"hidden\" name=\"product_id\" value=\"45\">
                                                                                                                        <span>
                                                                                                                          <i class=\"fa fa-angle-up\"></i>
                                                                                                                          <i class=\"fa fa-angle-down\"></i>
                                                                                                                        </span>
                                                                                                                      </div>
                                                                                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('45', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                        <span class=\"btn-text\">
                                                                                                                          Add to Cart
                                                                                                                        </span>
                                                                                                                      </a>
                                                                                                                    </div>
                                                                                                                    <div class=\"wish-group\">
                                                                                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('45')\" data-original-title=\"Add to Wish List\">
                                                                                                                        <span class=\"btn-text\">
                                                                                                                          Add to Wish List
                                                                                                                        </span>
                                                                                                                      </a>
                                                                                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('45')\" data-original-title=\"Compare this Product\">
                                                                                                                        <span class=\"btn-text\">
                                                                                                                          Compare this Product
                                                                                                                        </span>
                                                                                                                      </a>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                </div>
                                                                                                                <div class=\"extra-group\">
                                                                                                                  <div>
                                                                                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('45', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                      <span class=\"btn-text\">
                                                                                                                        Buy Now
                                                                                                                      </span>
                                                                                                                    </a>
                                                                                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"45\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=45\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                      <span class=\"btn-text\">
                                                                                                                        Question
                                                                                                                      </span>
                                                                                                                    </a>
                                                                                                                  </div>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                            </div>
                                                                                                          </div>
                                                                                                          <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                            <div class=\"product-thumb\">
                                                                                                              <div class=\"image\">
                                                                                                                <div class=\"quickview-button\">
                                                                                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('31')\" data-original-title=\"Quickview\">
                                                                                                                    <span class=\"btn-text\">
                                                                                                                      Quickview
                                                                                                                    </span>
                                                                                                                  </a>
                                                                                                                </div>
                                                                                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=31\" class=\"product-img has-second-image\">
                                                                                                                  <div>
                                                                                                                    <img src=\"http://opencartnew.test/image/cache/catalog/demo/nikon_d300_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/nikon_d300_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/nikon_d300_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive img-first\">
                                                                                                                      <img src=\"http://opencartnew.test/image/cache/catalog/demo/nikon_d300_3-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/nikon_d300_3-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/nikon_d300_3-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive img-second\"></div>
                                                                                                                    </a>
                                                                                                                    <div class=\"product-labels\">
                                                                                                                      <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                        <b>
                                                                                                                          New
                                                                                                                        </b>
                                                                                                                      </span>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"caption\">
                                                                                                                    <div class=\"stats\">
                                                                                                                      <span class=\"stat-2\">
                                                                                                                        <span class=\"stats-label\">
                                                                                                                          Model:
                                                                                                                        </span>
                                                                                                                        <span>
                                                                                                                          Product 4
                                                                                                                        </span>
                                                                                                                      </span>
                                                                                                                    </div>
                                                                                                                    <div class=\"name\">
                                                                                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=31\">
                                                                                                                        Nikon D300
                                                                                                                      </a>
                                                                                                                    </div>
                                                                                                                    <div class=\"description\">
                                                                                                                      Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon's newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.
                                                                                                                        
                                                                                                                      ..
                                                                                                                    </div>
                                                                                                                    <div class=\"price\">
                                                                                                                      <div>
                                                                                                                        <span class=\"price-normal\">
                                                                                                                          \$98.00
                                                                                                                        </span>
                                                                                                                      </div>
                                                                                                                      <span class=\"price-tax\">
                                                                                                                        Ex Tax:\$80.00
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
                                                                                                                            <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                              <input type=\"hidden\" name=\"product_id\" value=\"31\">
                                                                                                                                <span>
                                                                                                                                  <i class=\"fa fa-angle-up\"></i>
                                                                                                                                  <i class=\"fa fa-angle-down\"></i>
                                                                                                                                </span>
                                                                                                                              </div>
                                                                                                                              <a class=\"btn btn-cart\" onclick=\"cart.add('31', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                <span class=\"btn-text\">
                                                                                                                                  Add to Cart
                                                                                                                                </span>
                                                                                                                              </a>
                                                                                                                            </div>
                                                                                                                            <div class=\"wish-group\">
                                                                                                                              <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('31')\" data-original-title=\"Add to Wish List\">
                                                                                                                                <span class=\"btn-text\">
                                                                                                                                  Add to Wish List
                                                                                                                                </span>
                                                                                                                              </a>
                                                                                                                              <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('31')\" data-original-title=\"Compare this Product\">
                                                                                                                                <span class=\"btn-text\">
                                                                                                                                  Compare this Product
                                                                                                                                </span>
                                                                                                                              </a>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                        <div class=\"extra-group\">
                                                                                                                          <div>
                                                                                                                            <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('31', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                              <span class=\"btn-text\">
                                                                                                                                Buy Now
                                                                                                                              </span>
                                                                                                                            </a>
                                                                                                                            <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"31\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=31\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                              <span class=\"btn-text\">
                                                                                                                                Question
                                                                                                                              </span>
                                                                                                                            </a>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                                    <div class=\"product-thumb\">
                                                                                                                      <div class=\"image\">
                                                                                                                        <div class=\"quickview-button\">
                                                                                                                          <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('29')\" data-original-title=\"Quickview\">
                                                                                                                            <span class=\"btn-text\">
                                                                                                                              Quickview
                                                                                                                            </span>
                                                                                                                          </a>
                                                                                                                        </div>
                                                                                                                        <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=29\" class=\"product-img has-second-image\">
                                                                                                                          <div>
                                                                                                                            <img src=\"http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_1-250x250.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_1-250x250.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_1-500x500.jpg 2x\" width=\"250\" height=\"250\" alt=\"Palm Treo Pro\" title=\"Palm Treo Pro\" class=\"img-responsive img-first\">
                                                                                                                              <img src=\"http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_3-250x250.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_3-250x250.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/palm_treo_pro_3-500x500.jpg 2x\" width=\"250\" height=\"250\" alt=\"Palm Treo Pro\" title=\"Palm Treo Pro\" class=\"img-responsive img-second\"></div>
                                                                                                                            </a>
                                                                                                                            <div class=\"product-labels\">
                                                                                                                              <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                                <b>
                                                                                                                                  New
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
                                                                                                                                  <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=6\">
                                                                                                                                    Palm
                                                                                                                                  </a>
                                                                                                                                </span>
                                                                                                                              </span>
                                                                                                                              <span class=\"stat-2\">
                                                                                                                                <span class=\"stats-label\">
                                                                                                                                  Model:
                                                                                                                                </span>
                                                                                                                                <span>
                                                                                                                                  Product 2
                                                                                                                                </span>
                                                                                                                              </span>
                                                                                                                            </div>
                                                                                                                            <div class=\"name\">
                                                                                                                              <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=29\">
                                                                                                                                Palm Treo Pro
                                                                                                                              </a>
                                                                                                                            </div>
                                                                                                                            <div class=\"description\">
                                                                                                                              Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use Wi-Fi or GPS when you’re out and about. Then watch a video on YouTube, catch up with news and sports on the web, or lis..
                                                                                                                            </div>
                                                                                                                            <div class=\"price\">
                                                                                                                              <div>
                                                                                                                                <span class=\"price-normal\">
                                                                                                                                  \$337.99
                                                                                                                                </span>
                                                                                                                              </div>
                                                                                                                              <span class=\"price-tax\">
                                                                                                                                Ex Tax:\$279.99
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
                                                                                                                                    <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                                      <input type=\"hidden\" name=\"product_id\" value=\"29\">
                                                                                                                                        <span>
                                                                                                                                          <i class=\"fa fa-angle-up\"></i>
                                                                                                                                          <i class=\"fa fa-angle-down\"></i>
                                                                                                                                        </span>
                                                                                                                                      </div>
                                                                                                                                      <a class=\"btn btn-cart\" onclick=\"cart.add('29', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                        <span class=\"btn-text\">
                                                                                                                                          Add to Cart
                                                                                                                                        </span>
                                                                                                                                      </a>
                                                                                                                                    </div>
                                                                                                                                    <div class=\"wish-group\">
                                                                                                                                      <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('29')\" data-original-title=\"Add to Wish List\">
                                                                                                                                        <span class=\"btn-text\">
                                                                                                                                          Add to Wish List
                                                                                                                                        </span>
                                                                                                                                      </a>
                                                                                                                                      <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('29')\" data-original-title=\"Compare this Product\">
                                                                                                                                        <span class=\"btn-text\">
                                                                                                                                          Compare this Product
                                                                                                                                        </span>
                                                                                                                                      </a>
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                                <div class=\"extra-group\">
                                                                                                                                  <div>
                                                                                                                                    <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('29', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                                      <span class=\"btn-text\">
                                                                                                                                        Buy Now
                                                                                                                                      </span>
                                                                                                                                    </a>
                                                                                                                                    <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"29\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=29\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                                      <span class=\"btn-text\">
                                                                                                                                        Question
                                                                                                                                      </span>
                                                                                                                                    </a>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                          <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                                            <div class=\"product-thumb\">
                                                                                                                              <div class=\"image\">
                                                                                                                                <div class=\"quickview-button\">
                                                                                                                                  <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('35')\" data-original-title=\"Quickview\">
                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                      Quickview
                                                                                                                                    </span>
                                                                                                                                  </a>
                                                                                                                                </div>
                                                                                                                                <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=35\" class=\"product-img \">
                                                                                                                                  <div>
                                                                                                                                    <img src=\"http://opencartnew.test/image/cache/placeholder-250x250.png\" srcset=\"http://opencartnew.test/image/cache/placeholder-250x250.png 1x, http://opencartnew.test/image/cache/placeholder-500x500.png 2x\" width=\"250\" height=\"250\" alt=\"Product 8\" title=\"Product 8\" class=\"img-responsive img-first\"></div>
                                                                                                                                  </a>
                                                                                                                                  <div class=\"product-labels\">
                                                                                                                                    <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                                      <b>
                                                                                                                                        New
                                                                                                                                      </b>
                                                                                                                                    </span>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                                <div class=\"caption\">
                                                                                                                                  <div class=\"stats\">
                                                                                                                                    <span class=\"stat-2\">
                                                                                                                                      <span class=\"stats-label\">
                                                                                                                                        Model:
                                                                                                                                      </span>
                                                                                                                                      <span>
                                                                                                                                        Product 8
                                                                                                                                      </span>
                                                                                                                                    </span>
                                                                                                                                  </div>
                                                                                                                                  <div class=\"name\">
                                                                                                                                    <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=35\">
                                                                                                                                      Product 8
                                                                                                                                    </a>
                                                                                                                                  </div>
                                                                                                                                  <div class=\"description\">
                                                                                                                                    Product 8..
                                                                                                                                  </div>
                                                                                                                                  <div class=\"price\">
                                                                                                                                    <div>
                                                                                                                                      <span class=\"price-normal\">
                                                                                                                                        \$122.00
                                                                                                                                      </span>
                                                                                                                                    </div>
                                                                                                                                    <span class=\"price-tax\">
                                                                                                                                      Ex Tax:\$100.00
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
                                                                                                                                          <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                                            <input type=\"hidden\" name=\"product_id\" value=\"35\">
                                                                                                                                              <span>
                                                                                                                                                <i class=\"fa fa-angle-up\"></i>
                                                                                                                                                <i class=\"fa fa-angle-down\"></i>
                                                                                                                                              </span>
                                                                                                                                            </div>
                                                                                                                                            <a class=\"btn btn-cart\" onclick=\"cart.add('35', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                              <span class=\"btn-text\">
                                                                                                                                                Add to Cart
                                                                                                                                              </span>
                                                                                                                                            </a>
                                                                                                                                          </div>
                                                                                                                                          <div class=\"wish-group\">
                                                                                                                                            <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('35')\" data-original-title=\"Add to Wish List\">
                                                                                                                                              <span class=\"btn-text\">
                                                                                                                                                Add to Wish List
                                                                                                                                              </span>
                                                                                                                                            </a>
                                                                                                                                            <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('35')\" data-original-title=\"Compare this Product\">
                                                                                                                                              <span class=\"btn-text\">
                                                                                                                                                Compare this Product
                                                                                                                                              </span>
                                                                                                                                            </a>
                                                                                                                                          </div>
                                                                                                                                        </div>
                                                                                                                                      </div>
                                                                                                                                      <div class=\"extra-group\">
                                                                                                                                        <div>
                                                                                                                                          <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('35', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                                            <span class=\"btn-text\">
                                                                                                                                              Buy Now
                                                                                                                                            </span>
                                                                                                                                          </a>
                                                                                                                                          <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"35\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=35\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                                            <span class=\"btn-text\">
                                                                                                                                              Question
                                                                                                                                            </span>
                                                                                                                                          </a>
                                                                                                                                        </div>
                                                                                                                                      </div>
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                                <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                                                  <div class=\"product-thumb\">
                                                                                                                                    <div class=\"image\">
                                                                                                                                      <div class=\"quickview-button\">
                                                                                                                                        <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('33')\" data-original-title=\"Quickview\">
                                                                                                                                          <span class=\"btn-text\">
                                                                                                                                            Quickview
                                                                                                                                          </span>
                                                                                                                                        </a>
                                                                                                                                      </div>
                                                                                                                                      <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=33\" class=\"product-img \">
                                                                                                                                        <div>
                                                                                                                                          <img src=\"http://opencartnew.test/image/cache/catalog/demo/samsung_syncmaster_941bw-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/samsung_syncmaster_941bw-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/samsung_syncmaster_941bw-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Samsung SyncMaster 941BW\" title=\"Samsung SyncMaster 941BW\" class=\"img-responsive img-first\"></div>
                                                                                                                                        </a>
                                                                                                                                        <div class=\"product-labels\">
                                                                                                                                          <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                                            <b>
                                                                                                                                              New
                                                                                                                                            </b>
                                                                                                                                          </span>
                                                                                                                                        </div>
                                                                                                                                      </div>
                                                                                                                                      <div class=\"caption\">
                                                                                                                                        <div class=\"stats\">
                                                                                                                                          <span class=\"stat-2\">
                                                                                                                                            <span class=\"stats-label\">
                                                                                                                                              Model:
                                                                                                                                            </span>
                                                                                                                                            <span>
                                                                                                                                              Product 6
                                                                                                                                            </span>
                                                                                                                                          </span>
                                                                                                                                        </div>
                                                                                                                                        <div class=\"name\">
                                                                                                                                          <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=33\">
                                                                                                                                            Samsung SyncMaster 941BW
                                                                                                                                          </a>
                                                                                                                                        </div>
                                                                                                                                        <div class=\"description\">
                                                                                                                                          Imagine the advantages of going big without slowing down. The big 19\" 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger images, more room to work and crisp motion. In addition, the exclusive MagicBright 2, MagicColor and MagicTune technologies help deliver the i..
                                                                                                                                        </div>
                                                                                                                                        <div class=\"price\">
                                                                                                                                          <div>
                                                                                                                                            <span class=\"price-normal\">
                                                                                                                                              \$242.00
                                                                                                                                            </span>
                                                                                                                                          </div>
                                                                                                                                          <span class=\"price-tax\">
                                                                                                                                            Ex Tax:\$200.00
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
                                                                                                                                                <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                                                  <input type=\"hidden\" name=\"product_id\" value=\"33\">
                                                                                                                                                    <span>
                                                                                                                                                      <i class=\"fa fa-angle-up\"></i>
                                                                                                                                                      <i class=\"fa fa-angle-down\"></i>
                                                                                                                                                    </span>
                                                                                                                                                  </div>
                                                                                                                                                  <a class=\"btn btn-cart\" onclick=\"cart.add('33', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                      Add to Cart
                                                                                                                                                    </span>
                                                                                                                                                  </a>
                                                                                                                                                </div>
                                                                                                                                                <div class=\"wish-group\">
                                                                                                                                                  <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('33')\" data-original-title=\"Add to Wish List\">
                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                      Add to Wish List
                                                                                                                                                    </span>
                                                                                                                                                  </a>
                                                                                                                                                  <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('33')\" data-original-title=\"Compare this Product\">
                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                      Compare this Product
                                                                                                                                                    </span>
                                                                                                                                                  </a>
                                                                                                                                                </div>
                                                                                                                                              </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"extra-group\">
                                                                                                                                              <div>
                                                                                                                                                <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('33', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                                                  <span class=\"btn-text\">
                                                                                                                                                    Buy Now
                                                                                                                                                  </span>
                                                                                                                                                </a>
                                                                                                                                                <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"33\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=33\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                                                  <span class=\"btn-text\">
                                                                                                                                                    Question
                                                                                                                                                  </span>
                                                                                                                                                </a>
                                                                                                                                              </div>
                                                                                                                                            </div>
                                                                                                                                          </div>
                                                                                                                                        </div>
                                                                                                                                      </div>
                                                                                                                                      <div class=\"product-layout  has-extra-button\" style=\"\">
                                                                                                                                        <div class=\"product-thumb\">
                                                                                                                                          <div class=\"image\">
                                                                                                                                            <div class=\"quickview-button\">
                                                                                                                                              <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('46')\" data-original-title=\"Quickview\">
                                                                                                                                                <span class=\"btn-text\">
                                                                                                                                                  Quickview
                                                                                                                                                </span>
                                                                                                                                              </a>
                                                                                                                                            </div>
                                                                                                                                            <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=46\" class=\"product-img has-second-image\">
                                                                                                                                              <div>
                                                                                                                                                <img src=\"http://opencartnew.test/image/cache/catalog/demo/sony_vaio_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/sony_vaio_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/sony_vaio_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Sony VAIO\" title=\"Sony VAIO\" class=\"img-responsive img-first\">
                                                                                                                                                  <img src=\"http://opencartnew.test/image/cache/catalog/demo/sony_vaio_5-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/sony_vaio_5-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/sony_vaio_5-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Sony VAIO\" title=\"Sony VAIO\" class=\"img-responsive img-second\"></div>
                                                                                                                                                </a>
                                                                                                                                                <div class=\"product-labels\">
                                                                                                                                                  <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                                                    <b>
                                                                                                                                                      New
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
                                                                                                                                                      <a href=\"http://opencartnew.test/index.php?route=product/manufacturer/info&amp;manufacturer_id=10\">
                                                                                                                                                        Sony
                                                                                                                                                      </a>
                                                                                                                                                    </span>
                                                                                                                                                  </span>
                                                                                                                                                  <span class=\"stat-2\">
                                                                                                                                                    <span class=\"stats-label\">
                                                                                                                                                      Model:
                                                                                                                                                    </span>
                                                                                                                                                    <span>
                                                                                                                                                      Product 19
                                                                                                                                                    </span>
                                                                                                                                                  </span>
                                                                                                                                                </div>
                                                                                                                                                <div class=\"name\">
                                                                                                                                                  <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=46\">
                                                                                                                                                    Sony VAIO
                                                                                                                                                  </a>
                                                                                                                                                </div>
                                                                                                                                                <div class=\"description\">
                                                                                                                                                  Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powerful innovation yet: Intel® Centrino® 2 processor technology. Boasting incredible speed, expanded wireless connectivity, enhanced multimedia s..
                                                                                                                                                </div>
                                                                                                                                                <div class=\"price\">
                                                                                                                                                  <div>
                                                                                                                                                    <span class=\"price-normal\">
                                                                                                                                                      \$1,202.00
                                                                                                                                                    </span>
                                                                                                                                                  </div>
                                                                                                                                                  <span class=\"price-tax\">
                                                                                                                                                    Ex Tax:\$1,000.00
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
                                                                                                                                                        <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                                                          <input type=\"hidden\" name=\"product_id\" value=\"46\">
                                                                                                                                                            <span>
                                                                                                                                                              <i class=\"fa fa-angle-up\"></i>
                                                                                                                                                              <i class=\"fa fa-angle-down\"></i>
                                                                                                                                                            </span>
                                                                                                                                                          </div>
                                                                                                                                                          <a class=\"btn btn-cart\" onclick=\"cart.add('46', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                                            <span class=\"btn-text\">
                                                                                                                                                              Add to Cart
                                                                                                                                                            </span>
                                                                                                                                                          </a>
                                                                                                                                                        </div>
                                                                                                                                                        <div class=\"wish-group\">
                                                                                                                                                          <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('46')\" data-original-title=\"Add to Wish List\">
                                                                                                                                                            <span class=\"btn-text\">
                                                                                                                                                              Add to Wish List
                                                                                                                                                            </span>
                                                                                                                                                          </a>
                                                                                                                                                          <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('46')\" data-original-title=\"Compare this Product\">
                                                                                                                                                            <span class=\"btn-text\">
                                                                                                                                                              Compare this Product
                                                                                                                                                            </span>
                                                                                                                                                          </a>
                                                                                                                                                        </div>
                                                                                                                                                      </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class=\"extra-group\">
                                                                                                                                                      <div>
                                                                                                                                                        <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('46', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                                                          <span class=\"btn-text\">
                                                                                                                                                            Buy Now
                                                                                                                                                          </span>
                                                                                                                                                        </a>
                                                                                                                                                        <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"46\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=46\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                                                          <span class=\"btn-text\">
                                                                                                                                                            Question
                                                                                                                                                          </span>
                                                                                                                                                        </a>
                                                                                                                                                      </div>
                                                                                                                                                    </div>
                                                                                                                                                  </div>
                                                                                                                                                </div>
                                                                                                                                              </div>
                                                                                                                                              <div class=\"product-layout  out-of-stock has-extra-button\" style=\"\">
                                                                                                                                                <div class=\"product-thumb\">
                                                                                                                                                  <div class=\"image\">
                                                                                                                                                    <div class=\"quickview-button\">
                                                                                                                                                      <a class=\"btn btn-quickview\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid quickview-tooltip\" data-placement=\"top\" title=\"\" onclick=\"quickview('49')\" data-original-title=\"Quickview\">
                                                                                                                                                        <span class=\"btn-text\">
                                                                                                                                                          Quickview
                                                                                                                                                        </span>
                                                                                                                                                      </a>
                                                                                                                                                    </div>
                                                                                                                                                    <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=49\" class=\"product-img has-second-image\">
                                                                                                                                                      <div>
                                                                                                                                                        <img src=\"http://opencartnew.test/image/cache/catalog/demo/samsung_tab_1-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/samsung_tab_1-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/samsung_tab_1-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Samsung Galaxy Tab 10.1\" title=\"Samsung Galaxy Tab 10.1\" class=\"img-responsive img-first\">
                                                                                                                                                          <img src=\"http://opencartnew.test/image/cache/catalog/demo/samsung_tab_7-250x250w.jpg\" srcset=\"http://opencartnew.test/image/cache/catalog/demo/samsung_tab_7-250x250w.jpg 1x, http://opencartnew.test/image/cache/catalog/demo/samsung_tab_7-500x500w.jpg 2x\" width=\"250\" height=\"250\" alt=\"Samsung Galaxy Tab 10.1\" title=\"Samsung Galaxy Tab 10.1\" class=\"img-responsive img-second\"></div>
                                                                                                                                                        </a>
                                                                                                                                                        <div class=\"product-labels\">
                                                                                                                                                          <span class=\"product-label product-label-29 product-label-default\">
                                                                                                                                                            <b>
                                                                                                                                                              New
                                                                                                                                                            </b>
                                                                                                                                                          </span>
                                                                                                                                                          <span class=\"product-label product-label-30 product-label-diagonal\">
                                                                                                                                                            <b>
                                                                                                                                                              Pre-Order
                                                                                                                                                            </b>
                                                                                                                                                          </span>
                                                                                                                                                        </div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class=\"caption\">
                                                                                                                                                        <div class=\"stats\">
                                                                                                                                                          <span class=\"stat-2\">
                                                                                                                                                            <span class=\"stats-label\">
                                                                                                                                                              Model:
                                                                                                                                                            </span>
                                                                                                                                                            <span>
                                                                                                                                                              SAM1
                                                                                                                                                            </span>
                                                                                                                                                          </span>
                                                                                                                                                        </div>
                                                                                                                                                        <div class=\"name\">
                                                                                                                                                          <a href=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=49\">
                                                                                                                                                            Samsung Galaxy Tab 10.1
                                                                                                                                                          </a>
                                                                                                                                                        </div>
                                                                                                                                                        <div class=\"description\">
                                                                                                                                                          Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9.
                                                                                                                                                            
                                                                                                                                                          Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new..
                                                                                                                                                        </div>
                                                                                                                                                        <div class=\"price\">
                                                                                                                                                          <div>
                                                                                                                                                            <span class=\"price-normal\">
                                                                                                                                                              \$241.99
                                                                                                                                                            </span>
                                                                                                                                                          </div>
                                                                                                                                                          <span class=\"price-tax\">
                                                                                                                                                            Ex Tax:\$199.99
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
                                                                                                                                                                <input type=\"text\" name=\"quantity\" value=\"1\" data-minimum=\"1\" class=\"form-control\">
                                                                                                                                                                  <input type=\"hidden\" name=\"product_id\" value=\"49\">
                                                                                                                                                                    <span>
                                                                                                                                                                      <i class=\"fa fa-angle-up\"></i>
                                                                                                                                                                      <i class=\"fa fa-angle-down\"></i>
                                                                                                                                                                    </span>
                                                                                                                                                                  </div>
                                                                                                                                                                  <a class=\"btn btn-cart\" onclick=\"cart.add('49', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>Add to Cart</span>\">
                                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                                      Add to Cart
                                                                                                                                                                    </span>
                                                                                                                                                                  </a>
                                                                                                                                                                </div>
                                                                                                                                                                <div class=\"wish-group\">
                                                                                                                                                                  <a class=\"btn btn-wishlist\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid wishlist-tooltip\" data-placement=\"top\" title=\"\" onclick=\"wishlist.add('49')\" data-original-title=\"Add to Wish List\">
                                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                                      Add to Wish List
                                                                                                                                                                    </span>
                                                                                                                                                                  </a>
                                                                                                                                                                  <a class=\"btn btn-compare\" data-toggle=\"tooltip\" data-tooltip-class=\"product-grid compare-tooltip\" data-placement=\"top\" title=\"\" onclick=\"compare.add('49')\" data-original-title=\"Compare this Product\">
                                                                                                                                                                    <span class=\"btn-text\">
                                                                                                                                                                      Compare this Product
                                                                                                                                                                    </span>
                                                                                                                                                                  </a>
                                                                                                                                                                </div>
                                                                                                                                                              </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class=\"extra-group\">
                                                                                                                                                              <div>
                                                                                                                                                                <a class=\"btn btn-extra btn-extra-46\" onclick=\"cart.add('49', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\" data-loading-text=\"<span class='btn-text'>Buy Now</span>\">
                                                                                                                                                                  <span class=\"btn-text\">
                                                                                                                                                                    Buy Now
                                                                                                                                                                  </span>
                                                                                                                                                                </a>
                                                                                                                                                                <a class=\"btn btn-extra btn-extra-93\" href=\"javascript:open_popup(22)\" data-product_id=\"49\" data-product_url=\"http://opencartnew.test/index.php?route=product/product&amp;product_id=49\" data-loading-text=\"<span class='btn-text'>Question</span>\">
                                                                                                                                                                  <span class=\"btn-text\">
                                                                                                                                                                    Question
                                                                                                                                                                  </span>
                                                                                                                                                                </a>
                                                                                                                                                              </div>
                                                                                                                                                            </div>
                                                                                                                                                          </div>
                                                                                                                                                        </div>
                                                                                                                                                      </div>
                                                                                                                                                      <div class=\"ias-noneleft\" style=\"text-align: center;\" id=\"ias_noneleft_1742973860712\">
                                                                                                                                                        You have reached the end of the list.
                                                                                                                                                      </div>
                                                                                                                                                    </div>
                                                                                                                                                    
      </div>

      
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 2461
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 2464
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 2469
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 2470
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 2474
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 2476
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 2479
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
        return array (  2607 => 2479,  2601 => 2476,  2596 => 2474,  2589 => 2470,  2585 => 2469,  2577 => 2464,  2571 => 2461,  160 => 53,  155 => 50,  148 => 46,  144 => 44,  141 => 43,  134 => 39,  130 => 37,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
