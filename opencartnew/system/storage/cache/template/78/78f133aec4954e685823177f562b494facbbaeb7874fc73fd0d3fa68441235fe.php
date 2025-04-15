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
class __TwigTemplate_0cdcd6f56d79dee69b7ac7342ad37503b246e4597d3d5ea99fecfcbcde4bbbdf extends \Twig\Template
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
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 57
        if (true) {
            // line 58
            echo "              ";
            $context["dummy_coupons"] = [0 => ["name" => "New Year Special", "code" => "NEWYEAR2024", "description" => "Get 25% off on all products. Valid for all customers.", "discount" => "25% Off", "date_start" => "2024-01-01", "date_end" => "2024-01-31", "image" => "catalog/demo/coupon1.jpg"], 1 => ["name" => "First Purchase Bonus", "code" => "WELCOME50", "description" => "Save \$50 on your first purchase above \$200.", "discount" => "\$50 Off", "date_start" => "2024-01-01", "date_end" => "2024-12-31", "image" => "catalog/demo/coupon2.jpg"], 2 => ["name" => "Free Shipping", "code" => "FREESHIP", "description" => "Free shipping on orders above \$100. Limited time offer!", "discount" => "Free Shipping", "date_start" => "2024-01-15", "date_end" => "2024-02-15", "image" => "catalog/demo/coupon3.jpg"]];
            // line 87
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dummy_coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 88
                echo "                <div class=\"col-sm-6 col-md-4 mb-3\">
                  <div class=\"coupon-card h-100\">
                    <div class=\"card product-layout\">
                      <div class=\"image\">
                        <a href=\"javascript:void(0)\" onclick=\"redeemCoupon('";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 92);
                echo "')\">
                          <img src=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "image", [], "any", false, false, false, 93);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 93);
                echo "\" class=\"img-responsive\" />
                        </a>
                      </div>
                      ";
                // line 96
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 96))) {
                    // line 97
                    echo "                        <div class=\"coupon-ribbon\"><span>OUT OF STOCK</span></div>
                      ";
                }
                // line 99
                echo "                      ";
                if ((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 99), "U") - twig_date_format_filter($this->env, "now", "U")) / 86400) < 7)) {
                    // line 100
                    echo "                        <div class=\"coupon-badge\"><span>NEW</span></div>
                      ";
                }
                // line 102
                echo "                      <div class=\"card-body product-details\">
                        <div class=\"caption\">
                          <h4 class=\"product-name\"><a href=\"javascript:void(0)\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 104);
                echo "</a></h4>
                          <div class=\"coupon-code mb-2\">
                            <span class=\"badge bg-primary\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 106);
                echo "</span>
                          </div>
                          <p class=\"price\">
                            <span class=\"price-new\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 109);
                echo "</span>
                          </p>
                          <div class=\"description\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 111);
                echo "</div>
                          <div class=\"coupon-details\">
                            ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                              <div class=\"mb-1\"><strong>";
                    echo ($context["text_date_start"] ?? null);
                    echo ":</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 114);
                    echo "</div>
                            ";
                }
                // line 116
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "                              <div class=\"mb-1\"><strong>";
                    echo ($context["text_date_end"] ?? null);
                    echo ":</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 117);
                    echo "</div>
                            ";
                }
                // line 119
                echo "                          </div>
                        </div>
                        <div class=\"button-group\">
                          <button type=\"button\" class=\"btn btn-redeem\" onclick=\"redeemCoupon('";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 122);
                echo "')\" ";
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 122))) {
                    echo "disabled";
                }
                echo ">
                            <span class=\"btn-text\">";
                // line 123
                echo ($context["button_redeem"] ?? null);
                echo "</span>
                          </button>
                          <button type=\"button\" class=\"btn btn-quickview\" onclick=\"quickView('";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 125);
                echo "')\">
                            <span class=\"btn-text\">";
                // line 126
                echo ($context["button_quickview"] ?? null);
                echo "</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "            ";
        } else {
            // line 135
            echo "              <div class=\"col-12\">
                <p>";
            // line 136
            echo ($context["text_empty"] ?? null);
            echo "</p>
              </div>
            ";
        }
        // line 139
        echo "          </div>
        </div>
      </div>

      
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 146
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 149
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 154
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 155
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 159
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 161
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 164
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
        return array (  347 => 164,  341 => 161,  336 => 159,  329 => 155,  325 => 154,  317 => 149,  311 => 146,  302 => 139,  296 => 136,  293 => 135,  290 => 134,  276 => 126,  272 => 125,  267 => 123,  259 => 122,  254 => 119,  246 => 117,  243 => 116,  235 => 114,  233 => 113,  228 => 111,  223 => 109,  217 => 106,  212 => 104,  208 => 102,  204 => 100,  201 => 99,  197 => 97,  195 => 96,  187 => 93,  183 => 92,  177 => 88,  172 => 87,  169 => 58,  167 => 57,  160 => 53,  155 => 50,  148 => 46,  144 => 44,  141 => 43,  134 => 39,  130 => 37,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
