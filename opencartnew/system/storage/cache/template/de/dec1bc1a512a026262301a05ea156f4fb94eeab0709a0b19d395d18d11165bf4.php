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
class __TwigTemplate_31da75b83aec4d74fbc57b597e2633f98b4e62df125e30dfe23cf0c875a66b85 extends \Twig\Template
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
        // line 147
        echo "


";
        // line 150
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 153
            echo "    <li>
      <a href=\"";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 154);
            echo "\">
        ";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 155);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "</ul>
";
        // line 160
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "pageTitlePosition"], "method", false, false, false, 160) == "top")) {
            // line 161
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 163
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 167
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 167);
        echo "
<div class=\"container\">
  <div class=\"row\">
    ";
        // line 170
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 172
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => "pageTitlePosition"], "method", false, false, false, 172) == "default")) {
            // line 173
            echo "        <h1 class=\"title page-title\">
          ";
            // line 174
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 177
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 177), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 177)) {
            // line 178
            echo "        ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 179
                echo "          <div class=\"category-description\">
            ";
                // line 180
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 180))) {
                    // line 181
                    echo "              <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo " srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => "image_dimensions_category.width"], "method", false, false, false, 181);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => "image_dimensions_category.height"], "method", false, false, false, 181);
                    echo "\" />
            ";
                }
                // line 183
                echo "            ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 183))) {
                    // line 184
                    echo "              <div class=\"category-text\">
                ";
                    // line 185
                    echo ($context["description"] ?? null);
                    echo "
              </div>
            ";
                }
                // line 188
                echo "          </div>
        ";
            }
            // line 190
            echo "      ";
        }
        // line 191
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 192), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 192)) {
            // line 193
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 194
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 194), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 194);
                echo "\">
            ";
                // line 195
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => "refineTitle"], "method", false, false, false, 195)) {
                    // line 196
                    echo "              <h3 class=\"refine-title title\">
                ";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 197), "get", [0 => "refineTitleText"], "method", false, false, false, 197);
                    echo "
              </h3>
            ";
                }
                // line 200
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 200) == "carousel")) {
                    // line 201
                    echo "              <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 201), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 201), "getJs", [], "method", false, false, false, 201), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 201), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
                <div class=\"swiper-container\" ";
                    // line 202
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 202)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                  <div
                  class=\"swiper-wrapper\">
                    ";
                } else {
                    // line 206
                    echo "                    <div class=\"refine-items\">
                    ";
                }
                // line 208
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 209
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 209), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 209) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 210);
                    echo "\">
                          ";
                    // line 211
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 211), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 211) != "links")) {
                        // line 212
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 212);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 212)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 212);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 212);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 212);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 212);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 212);
                        echo "\" />
                          ";
                    }
                    // line 214
                    echo "                          <span class=\"refine-name\">
                            ";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 215);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 220), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 220) != "carousel")) {
                    // line 221
                    echo "                    </div>
                ";
                } else {
                    // line 223
                    echo "                  </div>
                </div>
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
            ";
                }
                // line 232
                echo "          </div>
        ";
            }
            // line 234
            echo "      ";
        }
        // line 235
        echo "      <div class=\"main-products-wrapper\">
        ";
        // line 236
        if (($context["products"] ?? null)) {
            // line 237
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 237), "get", [0 => "sortBarStatus"], "method", false, false, false, 237)) {
                // line 238
                echo "            <div class=\"products-filter\">
              <div class=\"grid-list\">
                <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 240
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 240), "get", [0 => "globalProductView"], "method", false, false, false, 240) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
                <button id=\"btn-list-view\" class=\"view-btn ";
                // line 241
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 241), "get", [0 => "globalProductView"], "method", false, false, false, 241) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
                <a href=\"";
                // line 242
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">
                  ";
                // line 243
                echo ($context["text_compare"] ?? null);
                echo "
                </a>
              </div>
              <div class=\"select-group\">
                <div class=\"input-group input-group-sm sort-by\">
                  <label class=\"input-group-addon\" for=\"input-sort\">
                    ";
                // line 249
                echo ($context["text_sort"] ?? null);
                echo "
                  </label>
                  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                    ";
                // line 252
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 253
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 253) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 254
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 254);
                        echo "\" selected=\"selected\">
                          ";
                        // line 255
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 255);
                        echo "
                        </option>
                      ";
                    } else {
                        // line 258
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 258);
                        echo "\">
                          ";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 259);
                        echo "
                        </option>
                      ";
                    }
                    // line 262
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "                  </select>
                </div>
                <div class=\"input-group input-group-sm per-page\">
                  <label class=\"input-group-addon\" for=\"input-limit\">
                    ";
                // line 267
                echo ($context["text_limit"] ?? null);
                echo "
                  </label>
                  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                    ";
                // line 270
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 271
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 271) == ($context["limit"] ?? null))) {
                        // line 272
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 272);
                        echo "\" selected=\"selected\">
                          ";
                        // line 273
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 273);
                        echo "
                        </option>
                      ";
                    } else {
                        // line 276
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 276);
                        echo "\">
                          ";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 277);
                        echo "
                        </option>
                      ";
                    }
                    // line 280
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                echo "                  </select>
                </div>
              </div>
            </div>
          ";
            }
            // line 286
            echo "          <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 286), "get", [0 => "globalProductView"], "method", false, false, false, 286);
            echo "\">
            ";
            // line 287
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 287), "get", [0 => "globalProductView"], "method", false, false, false, 287);
            // line 288
            echo "            ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/account/coupon.twig", 288)->display($context);
            // line 289
            echo "          </div>
          <div class=\"row pagination-results\">
            <div class=\"col-sm-6 text-left\">
              ";
            // line 292
            echo ($context["pagination"] ?? null);
            echo "
            </div>
            <div class=\"col-sm-6 text-right\">
              ";
            // line 295
            echo ($context["results"] ?? null);
            echo "
            </div>
          </div>
        ";
        }
        // line 299
        echo "        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 300
            echo "          <p>
            ";
            // line 301
            echo ($context["text_empty"] ?? null);
            echo "
          </p>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <a href=\"";
            // line 305
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 306
            echo ($context["button_continue"] ?? null);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 311
        echo "      </div>
      ";
        // line 312
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 314
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 317
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 317);
        echo "
";
        // line 318
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
        return array (  491 => 318,  487 => 317,  481 => 314,  476 => 312,  473 => 311,  465 => 306,  461 => 305,  454 => 301,  451 => 300,  448 => 299,  441 => 295,  435 => 292,  430 => 289,  427 => 288,  425 => 287,  420 => 286,  413 => 281,  407 => 280,  401 => 277,  396 => 276,  390 => 273,  385 => 272,  382 => 271,  378 => 270,  372 => 267,  366 => 263,  360 => 262,  354 => 259,  349 => 258,  343 => 255,  338 => 254,  335 => 253,  331 => 252,  325 => 249,  316 => 243,  312 => 242,  304 => 241,  296 => 240,  292 => 238,  289 => 237,  287 => 236,  284 => 235,  281 => 234,  277 => 232,  266 => 223,  262 => 221,  259 => 220,  248 => 215,  245 => 214,  225 => 212,  223 => 211,  219 => 210,  212 => 209,  207 => 208,  203 => 206,  194 => 202,  187 => 201,  184 => 200,  178 => 197,  175 => 196,  173 => 195,  168 => 194,  165 => 193,  163 => 192,  158 => 191,  155 => 190,  151 => 188,  145 => 185,  142 => 184,  139 => 183,  117 => 181,  115 => 180,  112 => 179,  109 => 178,  106 => 177,  100 => 174,  97 => 173,  95 => 172,  90 => 170,  84 => 167,  77 => 163,  73 => 161,  71 => 160,  68 => 159,  58 => 155,  54 => 154,  51 => 153,  47 => 152,  42 => 150,  37 => 147,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
