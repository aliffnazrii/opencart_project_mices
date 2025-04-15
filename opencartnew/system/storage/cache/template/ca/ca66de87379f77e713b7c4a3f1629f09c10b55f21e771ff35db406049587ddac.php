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
class __TwigTemplate_b55e4851d80093ac5efb6605f6de25858d1a453c1cb34e0b29d90315187a59e4 extends \Twig\Template
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
<div class=\"container\">
  <div class=\"row\">
    ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "        <h1 class=\"title page-title\">
          ";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 28
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 28)) {
            // line 29
            echo "        ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 30
                echo "          <div class=\"category-description\">
            ";
                // line 31
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 31))) {
                    // line 32
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
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "image_dimensions_category.width"], "method", false, false, false, 32);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "image_dimensions_category.height"], "method", false, false, false, 32);
                    echo "\" />
            ";
                }
                // line 34
                echo "            ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 34))) {
                    // line 35
                    echo "              <div class=\"category-text\">
                ";
                    // line 36
                    echo ($context["description"] ?? null);
                    echo "
              </div>
            ";
                }
                // line 39
                echo "          </div>
        ";
            }
            // line 41
            echo "      ";
        }
        // line 42
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 43)) {
            // line 44
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 45
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 45);
                echo "\">
            ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "refineTitle"], "method", false, false, false, 46)) {
                    // line 47
                    echo "              <h3 class=\"refine-title title\">
                ";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "refineTitleText"], "method", false, false, false, 48);
                    echo "
              </h3>
            ";
                }
                // line 51
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 51) == "carousel")) {
                    // line 52
                    echo "              <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 52), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 52), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 52), "getJs", [], "method", false, false, false, 52), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 52), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
                <div class=\"swiper-container\" ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 53)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                  <div
                  class=\"swiper-wrapper\">
                    ";
                } else {
                    // line 57
                    echo "                    <div class=\"refine-items\">
                    ";
                }
                // line 59
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 60
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 60) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 61);
                    echo "\">
                          ";
                    // line 62
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 62), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 62) != "links")) {
                        // line 63
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 63);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 63)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 63);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 63);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 63);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 63);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 63);
                        echo "\" />
                          ";
                    }
                    // line 65
                    echo "                          <span class=\"refine-name\">
                            ";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 66);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 71) != "carousel")) {
                    // line 72
                    echo "                    </div>
                ";
                } else {
                    // line 74
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
                // line 83
                echo "          </div>
        ";
            }
            // line 85
            echo "      ";
        }
        // line 86
        echo "      <div class=\"main-products-wrapper\">
        ";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "sortBarStatus"], "method", false, false, false, 88)) {
                // line 89
                echo "            <div class=\"products-filter\">
              <div class=\"grid-list\">
                <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 91), "get", [0 => "globalProductView"], "method", false, false, false, 91) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
                <button id=\"btn-list-view\" class=\"view-btn ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 92), "get", [0 => "globalProductView"], "method", false, false, false, 92) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
                <a href=\"";
                // line 93
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">
                  ";
                // line 94
                echo ($context["text_compare"] ?? null);
                echo "
                </a>
              </div>
              <div class=\"select-group\">
                <div class=\"input-group input-group-sm sort-by\">
                  <label class=\"input-group-addon\" for=\"input-sort\">
                    ";
                // line 100
                echo ($context["text_sort"] ?? null);
                echo "
                  </label>
                  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                    ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 104
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 104) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 105
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 105);
                        echo "\" selected=\"selected\">
                          ";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 106);
                        echo "
                        </option>
                      ";
                    } else {
                        // line 109
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 109);
                        echo "\">
                          ";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 110);
                        echo "
                        </option>
                      ";
                    }
                    // line 113
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                  </select>
                </div>
                <div class=\"input-group input-group-sm per-page\">
                  <label class=\"input-group-addon\" for=\"input-limit\">
                    ";
                // line 118
                echo ($context["text_limit"] ?? null);
                echo "
                  </label>
                  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                    ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 122
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 122) == ($context["limit"] ?? null))) {
                        // line 123
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 123);
                        echo "\" selected=\"selected\">
                          ";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 124);
                        echo "
                        </option>
                      ";
                    } else {
                        // line 127
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 127);
                        echo "\">
                          ";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 128);
                        echo "
                        </option>
                      ";
                    }
                    // line 131
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                  </select>
                </div>
              </div>
            </div>
          ";
            }
            // line 137
            echo "          <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "globalProductView"], "method", false, false, false, 137);
            echo "\">
            ";
            // line 138
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 138), "get", [0 => "globalProductView"], "method", false, false, false, 138);
            // line 139
            echo "            ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/account/coupon.twig", 139)->display($context);
            // line 140
            echo "          </div>
          <div class=\"row pagination-results\">
            <div class=\"col-sm-6 text-left\">
              ";
            // line 143
            echo ($context["pagination"] ?? null);
            echo "
            </div>
            <div class=\"col-sm-6 text-right\">
              ";
            // line 146
            echo ($context["results"] ?? null);
            echo "
            </div>
          </div>
        ";
        }
        // line 150
        echo "        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 151
            echo "          <p>
            ";
            // line 152
            echo ($context["text_empty"] ?? null);
            echo "
          </p>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <a href=\"";
            // line 156
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 157
            echo ($context["button_continue"] ?? null);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 162
        echo "      </div>
      ";
        // line 163
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 168
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 168);
        echo "
";
        // line 169
        echo ($context["footer"] ?? null);
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
        return array (  486 => 169,  482 => 168,  476 => 165,  471 => 163,  468 => 162,  460 => 157,  456 => 156,  449 => 152,  446 => 151,  443 => 150,  436 => 146,  430 => 143,  425 => 140,  422 => 139,  420 => 138,  415 => 137,  408 => 132,  402 => 131,  396 => 128,  391 => 127,  385 => 124,  380 => 123,  377 => 122,  373 => 121,  367 => 118,  361 => 114,  355 => 113,  349 => 110,  344 => 109,  338 => 106,  333 => 105,  330 => 104,  326 => 103,  320 => 100,  311 => 94,  307 => 93,  299 => 92,  291 => 91,  287 => 89,  284 => 88,  282 => 87,  279 => 86,  276 => 85,  272 => 83,  261 => 74,  257 => 72,  254 => 71,  243 => 66,  240 => 65,  220 => 63,  218 => 62,  214 => 61,  207 => 60,  202 => 59,  198 => 57,  189 => 53,  182 => 52,  179 => 51,  173 => 48,  170 => 47,  168 => 46,  163 => 45,  160 => 44,  158 => 43,  153 => 42,  150 => 41,  146 => 39,  140 => 36,  137 => 35,  134 => 34,  112 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  95 => 25,  92 => 24,  90 => 23,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
