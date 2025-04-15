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
class __TwigTemplate_2d0b25496f3ef6cc01d0dc5c80853168e4492b551f3f029fd80d2edd483baa07 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li>
        <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">
          ";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
  <div class=\"row\">
    ";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      ";
        // line 27
        echo "      ";
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 28
            echo "        <div class=\"category-info\">
          ";
            // line 29
            if (($context["thumb"] ?? null)) {
                // line 30
                echo "            <div class=\"image\">
              <img src=\"";
                // line 31
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
            </div>
          ";
            }
            // line 34
            echo "          ";
            if (($context["description"] ?? null)) {
                // line 35
                echo "            <div class=\"description\">
              ";
                // line 36
                echo ($context["description"] ?? null);
                echo "
            </div>
          ";
            }
            // line 39
            echo "        </div>
      ";
        }
        // line 41
        echo "      ";
        // line 42
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 43
            echo "        <div class=\"refine-categories\">
          <h3>
            ";
            // line 45
            echo ($context["text_refine"] ?? null);
            echo "
          </h3>
          <div class=\"row\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 49
                echo "              <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
                <div class=\"category-thumb\">
                  <a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 51);
                echo "\">
                    <img src=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 52);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                echo "\" class=\"img-responsive\" />
                    <div class=\"caption\">
                      <h4>
                        ";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55);
                echo "
                      </h4>
                    </div>
                  </a>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "          </div>
        </div>
      ";
        }
        // line 65
        echo "      ";
        // line 66
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "categoryProductFilterStatus"], "method", false, false, false, 66)) {
            // line 67
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "filter", [], "any", false, false, false, 67);
            echo "
      ";
        }
        // line 69
        echo "      ";
        // line 70
        echo "      <div class=\"product-view\" data-view=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "defaultView"], "method", false, false, false, 70);
        echo "\">
        ";
        // line 72
        echo "        <div class=\"view-mode\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["button_grid"] ?? null);
        echo "\">
              <i class=\"fa fa-th\"></i>
            </button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 77
        echo ($context["button_list"] ?? null);
        echo "\">
              <i class=\"fa fa-th-list\"></i>
            </button>
          </div>
        </div>
        ";
        // line 83
        echo "        <div class=\"product-compare\">
          <a href=\"";
        // line 84
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\">
            ";
        // line 85
        echo ($context["text_compare"] ?? null);
        echo "
          </a>
        </div>
        <div class=\"product-sort\">
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 91
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 91);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 91) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                ";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 92);
            echo "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "          </select>
        </div>
        ";
        // line 98
        echo "        <div class=\"product-grid\">
          <div class=\"row\">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 101
            echo "              <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 102
$context["product"], "quantity", [], "any", false, false, false, 102) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 103
$context["product"], "date_end", [], "any", false, false, false, 103), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 104
$context["product"], "price_value", [], "any", false, false, false, 104), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 105
$context["product"], "extra_buttons", [], "any", false, false, false, 105)]], "method", false, false, false, 101);
            // line 106
            echo "\">
                <div class=\"product-thumb\">
                  <div class=\"image\">
                    <a href=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
            echo "\">
                      ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 110)) {
                // line 111
                echo "                        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 111);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                echo "\" class=\"img-responsive\" />
                      ";
            }
            // line 113
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 113)) {
                // line 114
                echo "                        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 114);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" class=\"img-responsive hover-image\" />
                      ";
            }
            // line 116
            echo "                    </a>
                    ";
            // line 118
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 118)) {
                // line 119
                echo "                      <div class=\"product-labels\">
                        ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 121
                    echo "                          <span class=\"product-label product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label_id", [], "any", false, false, false, 121);
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "position", [], "any", false, false, false, 121);
                    echo "\">
                            <b>
                              ";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 123);
                    echo "
                            </b>
                          </span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                      </div>
                    ";
            }
            // line 129
            echo "                    ";
            // line 130
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "quickviewStatus"], "method", false, false, false, 130)) {
                // line 131
                echo "                      <div class=\"quickview-button\">
                        <button class=\"btn btn-quickview\" type=\"button\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i>\" onclick=\"quickview('";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo "')\">
                          <i class=\"fa fa-search-plus\"></i>
                          <span class=\"btn-text\">
                            ";
                // line 135
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "quickviewText"], "method", false, false, false, 135);
                echo "
                          </span>
                        </button>
                      </div>
                    ";
            }
            // line 140
            echo "                  </div>
                  <div class=\"caption\">
                    ";
            // line 143
            echo "                    <h4>
                      <a href=\"";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
            echo "\">
                        ";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
            echo "
                      </a>
                    </h4>
                    ";
            // line 149
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "productDescriptionStatus"], "method", false, false, false, 149)) {
                // line 150
                echo "                      <div class=\"description\">
                        ";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 151);
                echo "
                      </div>
                    ";
            }
            // line 154
            echo "                    ";
            // line 155
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155)) {
                // line 156
                echo "                      <div class=\"price\">
                        ";
                // line 157
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                          <span class=\"price-new\">
                            ";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159);
                    echo "
                          </span>
                        ";
                } else {
                    // line 162
                    echo "                          <span class=\"price-new\">
                            ";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                    echo "
                          </span>
                          <span class=\"price-old\">
                            ";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
                    echo "
                          </span>
                        ";
                }
                // line 169
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "                          <span class=\"price-tax\">
                            ";
                    // line 171
                    echo ($context["text_tax"] ?? null);
                    echo "
                            ";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 172);
                    echo "
                          </span>
                        ";
                }
                // line 175
                echo "                      </div>
                    ";
            }
            // line 177
            echo "                    ";
            // line 178
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 178)) {
                // line 179
                echo "                      <div class=\"rating\">
                        ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 181
                    echo "                          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 181) < $context["i"])) {
                        // line 182
                        echo "                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                          ";
                    } else {
                        // line 186
                        echo "                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star fa-stack-2x\"></i>
                              <i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    // line 191
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                      </div>
                    ";
            }
            // line 194
            echo "                  </div>
                  ";
            // line 196
            echo "                  <div class=\"button-group\">
                    ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "catalogCartStatus"], "method", false, false, false, 197)) {
                // line 198
                echo "                      <button type=\"button\" class=\"btn btn-cart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 198);
                echo "');\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <span class=\"btn-text\">
                          ";
                // line 201
                echo ($context["button_cart"] ?? null);
                echo "
                        </span>
                      </button>
                    ";
            }
            // line 205
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 205)) {
                // line 206
                echo "                      <button type=\"button\" class=\"btn btn-wishlist\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                echo "');\">
                        <i class=\"fa fa-heart\"></i>
                        <span class=\"btn-text\">
                          ";
                // line 209
                echo ($context["button_wishlist"] ?? null);
                echo "
                        </span>
                      </button>
                    ";
            }
            // line 213
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 213)) {
                // line 214
                echo "                      <button type=\"button\" class=\"btn btn-compare\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 214);
                echo "');\">
                        <i class=\"fa fa-exchange\"></i>
                        <span class=\"btn-text\">
                          ";
                // line 217
                echo ($context["button_compare"] ?? null);
                echo "
                        </span>
                      </button>
                    ";
            }
            // line 221
            echo "                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "          </div>
        </div>
      </div>
      ";
        // line 229
        echo "      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 231
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 234
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      ";
        // line 237
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 239
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 242
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
        return array (  600 => 242,  594 => 239,  589 => 237,  583 => 234,  577 => 231,  573 => 229,  568 => 225,  559 => 221,  552 => 217,  545 => 214,  542 => 213,  535 => 209,  528 => 206,  525 => 205,  518 => 201,  511 => 198,  509 => 197,  506 => 196,  503 => 194,  499 => 192,  493 => 191,  486 => 186,  480 => 182,  477 => 181,  473 => 180,  470 => 179,  467 => 178,  465 => 177,  461 => 175,  455 => 172,  451 => 171,  448 => 170,  445 => 169,  439 => 166,  433 => 163,  430 => 162,  424 => 159,  421 => 158,  419 => 157,  416 => 156,  413 => 155,  411 => 154,  405 => 151,  402 => 150,  399 => 149,  393 => 145,  389 => 144,  386 => 143,  382 => 140,  374 => 135,  368 => 132,  365 => 131,  362 => 130,  360 => 129,  356 => 127,  346 => 123,  338 => 121,  334 => 120,  331 => 119,  328 => 118,  325 => 116,  315 => 114,  312 => 113,  302 => 111,  300 => 110,  296 => 109,  291 => 106,  289 => 105,  288 => 104,  287 => 103,  286 => 102,  284 => 101,  280 => 100,  276 => 98,  272 => 95,  263 => 92,  254 => 91,  250 => 90,  242 => 85,  238 => 84,  235 => 83,  227 => 77,  221 => 74,  217 => 72,  212 => 70,  210 => 69,  204 => 67,  201 => 66,  199 => 65,  194 => 62,  181 => 55,  171 => 52,  167 => 51,  163 => 49,  159 => 48,  153 => 45,  149 => 43,  146 => 42,  144 => 41,  140 => 39,  134 => 36,  131 => 35,  128 => 34,  118 => 31,  115 => 30,  113 => 29,  110 => 28,  107 => 27,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
