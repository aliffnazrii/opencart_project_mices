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

/* journal3/template/account/redeem.twig */
class __TwigTemplate_b2b04a3c0f1f6af62d6a3cfa8807ba74fc6152b8f01eb5b712f0692724a74e3d extends \Twig\Template
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
<div id=\"account-redeem\" class=\"container\">
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
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 15
            echo ($context["text_success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        &times;
      </button>
    </div>
  ";
        }
        // line 21
        echo "  ";
        if (($context["error"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i>
      ";
            // line 24
            echo ($context["error"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        &times;
      </button>
    </div>
  ";
        }
        // line 30
        echo "  <div class=\"row\">
    ";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 32
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 33
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 34
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 35
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 40
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 44)) {
            // line 45
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 46
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 46);
                echo "\">
            ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "refineTitle"], "method", false, false, false, 47)) {
                    // line 48
                    echo "              <h3 class=\"refine-title title\">
                ";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "refineTitleText"], "method", false, false, false, 49);
                    echo "
              </h3>
            ";
                }
                // line 52
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 52), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 52) == "carousel")) {
                    // line 53
                    echo "              <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 53), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "getJs", [], "method", false, false, false, 53), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 53), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
                <div class=\"swiper-container\" ";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 54)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                  <div
                  class=\"swiper-wrapper\">
                    ";
                } else {
                    // line 58
                    echo "                    <div class=\"refine-items\">
                    ";
                }
                // line 60
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 61
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 61) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 62);
                    echo "\">
                          ";
                    // line 63
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 63) != "links")) {
                        // line 64
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 64);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 64)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 64);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 64);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 64);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 64);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 64);
                        echo "\" />
                          ";
                    }
                    // line 66
                    echo "                          <span class=\"refine-name\">
                            ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 72) != "carousel")) {
                    // line 73
                    echo "                    </div>
                ";
                } else {
                    // line 75
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
                // line 84
                echo "          </div>
        ";
            }
            // line 86
            echo "      ";
        }
        // line 87
        echo "      <div class=\"main-products-wrapper\">
        ";
        // line 88
        if (($context["products"] ?? null)) {
            // line 89
            echo "          <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 89), "get", [0 => "globalProductView"], "method", false, false, false, 89);
            echo "\">
            ";
            // line 90
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "globalProductView"], "method", false, false, false, 90);
            // line 91
            echo "            ";
            $this->loadTemplate("journal3/template/journal3/voucher_card.twig", "journal3/template/account/redeem.twig", 91)->display($context);
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "              <div id=\"voucherModal";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 93);
                echo "\" class=\"modal fade\" role=\"dialog\" style=\"display: none;\">
                <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: none; width: calc(100% - 40px); height: calc(100vh - 40px); margin: 20px; position: fixed; top: 0; left: 0; right: 0; bottom: 0; border-radius: 25px;\">
                  <div class=\"modal-content\" style=\"height: 100%; border-radius: 8px; display: flex; flex-direction: column;\">
                    <div class=\"modal-header\" style=\"flex: 0 0 auto; padding: 15px; border-bottom: 1px solid #e5e5e5;\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" style=\"font-size: 24px;\">&times;</button>
                      <h4 class=\"modal-title\">Voucher Details</h4>
                    </div>
                    <div class=\"modal-body\" style=\"flex: 1 1 auto; overflow-y: auto; padding: 20px;\">
                      <div class=\"table-responsive\" style=\"margin-bottom: 30px; overflow-x: hidden; border-radius: 5px;\">
                        <table class=\"table table-bordered table-striped\" style=\"border-radius: 8px; overflow: hidden;\">
                          <tbody>
                            <tr>
                              <td class=\"text-right\" style=\"width: 30%;\">
                                <strong>
                                  Discount:
                                </strong>
                              </td>
                              <td class=\"text-left\">
                                ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                echo "
                              </td>
                            </tr>
                            <tr>
                              <td class=\"text-right\">
                                <strong>
                                  Code:
                                </strong>
                              </td>
                              <td class=\"text-left\">
                                ";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "voucher_id", [], "any", false, false, false, 121);
                echo "
                              </td>
                            </tr>
                            <tr>
                              <td class=\"text-right\">
                                <strong>
                                  Name:
                                </strong>
                              </td>
                              <td class=\"text-left\">
                                ";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
                echo "
                              </td>
                            </tr>
                            <tr>
                              <td class=\"text-right\">
                                <strong>
                                  Point Redeem:
                                </strong>
                              </td>
                              <td class=\"text-left\">
                                ";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["product"], "pointRedeem", [], "any", false, false, false, 141);
                echo "
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class=\"terms-section mt-4\">
                        <h5 class=\"terms-title mb-3\" style=\"font-weight: 600; color: #333;\">
                          Terms & Conditions
                        </h5>
                        <div class=\"card card-body\" style=\"background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); max-height: none; overflow: visible;\">
                          ";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 152);
                echo "
                        </div>
                      </div>
                    </div>
                    <div class=\"modal-footer\" style=\"flex: 0 0 auto; padding: 15px; border-top: 1px solid #e5e5e5;\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "          </div>
          <div class=\"row pagination-results\">
            <div class=\"col-sm-6 text-left\">
              ";
            // line 168
            echo ($context["pagination"] ?? null);
            echo "
            </div>
            <div class=\"col-sm-6 text-right\">
              ";
            // line 171
            echo ($context["results"] ?? null);
            echo "
            </div>
          </div>
        ";
        }
        // line 175
        echo "        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 176
            echo "          <p>
            ";
            // line 177
            echo ($context["text_empty"] ?? null);
            echo "
          </p>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <a href=\"";
            // line 181
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 182
            echo ($context["button_continue"] ?? null);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 187
        echo "      </div>
      ";
        // line 188
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 190
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 193
        echo ($context["footer"] ?? null);
        echo "
<link rel=\"stylesheet\" href=\"catalog/view/theme/journal3/stylesheet/modal-animation.css\">";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/redeem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 193,  426 => 190,  421 => 188,  418 => 187,  410 => 182,  406 => 181,  399 => 177,  396 => 176,  393 => 175,  386 => 171,  380 => 168,  375 => 165,  356 => 152,  342 => 141,  329 => 131,  316 => 121,  303 => 111,  281 => 93,  276 => 92,  273 => 91,  271 => 90,  266 => 89,  264 => 88,  261 => 87,  258 => 86,  254 => 84,  243 => 75,  239 => 73,  236 => 72,  225 => 67,  222 => 66,  202 => 64,  200 => 63,  196 => 62,  189 => 61,  184 => 60,  180 => 58,  171 => 54,  164 => 53,  161 => 52,  155 => 49,  152 => 48,  150 => 47,  145 => 46,  142 => 45,  140 => 44,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  105 => 32,  101 => 31,  98 => 30,  89 => 24,  85 => 22,  82 => 21,  73 => 15,  69 => 13,  67 => 12,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/redeem.twig", "");
    }
}
