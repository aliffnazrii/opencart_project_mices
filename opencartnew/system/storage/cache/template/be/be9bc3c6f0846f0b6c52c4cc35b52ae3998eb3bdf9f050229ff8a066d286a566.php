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
class __TwigTemplate_62d1a161631e8d743bad541b1520d6b42441e47a915e6ffc0bc1b8499852d526 extends \Twig\Template
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
            // line 15
            echo "    </span>
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
        return array (  355 => 169,  351 => 168,  345 => 165,  340 => 163,  337 => 162,  329 => 157,  325 => 156,  318 => 152,  315 => 151,  312 => 150,  305 => 146,  299 => 143,  294 => 140,  291 => 139,  289 => 138,  284 => 137,  282 => 88,  280 => 87,  277 => 86,  274 => 85,  270 => 83,  259 => 74,  255 => 72,  252 => 71,  241 => 66,  238 => 65,  218 => 63,  216 => 62,  212 => 61,  205 => 60,  200 => 59,  196 => 57,  187 => 53,  180 => 52,  177 => 51,  171 => 48,  168 => 47,  166 => 46,  161 => 45,  158 => 44,  156 => 43,  151 => 42,  148 => 41,  144 => 39,  138 => 36,  135 => 35,  132 => 34,  110 => 32,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  93 => 25,  90 => 24,  88 => 23,  83 => 21,  77 => 18,  72 => 15,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
