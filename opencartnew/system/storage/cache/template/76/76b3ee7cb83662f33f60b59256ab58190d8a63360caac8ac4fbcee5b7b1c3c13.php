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
class __TwigTemplate_98501422627304271094df0beb6be771dfc01103f7868fd4751270dd912b1bdc extends \Twig\Template
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
            $context["dummy_coupons"] = [0 => ["name" => "New Year Special", "code" => "NEWYEAR2024", "description" => "Get 25% off on all products. Valid for all customers.", "discount" => "25% Off", "date_start" => "2024-01-01", "date_end" => "2024-01-31"], 1 => ["name" => "First Purchase Bonus", "code" => "WELCOME50", "description" => "Save \$50 on your first purchase above \$200.", "discount" => "\$50 Off", "date_start" => "2024-01-01", "date_end" => "2024-12-31"], 2 => ["name" => "Free Shipping", "code" => "FREESHIP", "description" => "Free shipping on orders above \$100. Limited time offer!", "discount" => "Free Shipping", "date_start" => "2024-01-15", "date_end" => "2024-02-15"]];
            // line 84
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dummy_coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 85
                echo "                <div class=\"col-sm-6 col-md-4 mb-3\">
                  <div class=\"coupon-card h-100\">
                    <div class=\"card\">
                      ";
                // line 88
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 88))) {
                    // line 89
                    echo "                        <div class=\"coupon-ribbon\">OUT OF STOCK</div>
                      ";
                }
                // line 91
                echo "                      ";
                if ((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 91), "U") - twig_date_format_filter($this->env, "now", "U")) / 86400) < 7)) {
                    // line 92
                    echo "                        <div class=\"coupon-badge\">NEW</div>
                      ";
                }
                // line 94
                echo "                      <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 95);
                echo "</h5>
                        <div class=\"coupon-code mb-2\">
                          <span class=\"badge bg-primary\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 97);
                echo "</span>
                        </div>
                        <p class=\"card-text\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 99);
                echo "</p>
                        <div class=\"coupon-details\">
                          <div class=\"mb-1\"><strong>";
                // line 101
                echo ($context["text_discount"] ?? null);
                echo ":</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 101);
                echo "</div>
                          ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                            <div class=\"mb-1\"><strong>";
                    echo ($context["text_date_start"] ?? null);
                    echo ":</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 103);
                    echo "</div>
                          ";
                }
                // line 105
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 105)) {
                    // line 106
                    echo "                            <div class=\"mb-1\"><strong>";
                    echo ($context["text_date_end"] ?? null);
                    echo ":</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 106);
                    echo "</div>
                          ";
                }
                // line 108
                echo "                        </div>
                      </div>
                      <div class=\"card-footer\">
                        <button type=\"button\" class=\"btn btn-redeem w-100\" onclick=\"redeemCoupon('";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 111);
                echo "')\" ";
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 111))) {
                    echo "disabled";
                }
                echo ">";
                echo ($context["button_redeem"] ?? null);
                echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            ";
        } else {
            // line 118
            echo "              <div class=\"col-12\">
                <p>";
            // line 119
            echo ($context["text_empty"] ?? null);
            echo "</p>
              </div>
            ";
        }
        // line 122
        echo "          </div>
        </div>
      </div>
      
      
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 129
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 132
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 137
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 138
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 142
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 144
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 147
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
        return array (  320 => 147,  314 => 144,  309 => 142,  302 => 138,  298 => 137,  290 => 132,  284 => 129,  275 => 122,  269 => 119,  266 => 118,  263 => 117,  245 => 111,  240 => 108,  232 => 106,  229 => 105,  221 => 103,  219 => 102,  213 => 101,  208 => 99,  203 => 97,  198 => 95,  195 => 94,  191 => 92,  188 => 91,  184 => 89,  182 => 88,  177 => 85,  172 => 84,  169 => 58,  167 => 57,  160 => 53,  155 => 50,  148 => 46,  144 => 44,  141 => 43,  134 => 39,  130 => 37,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
