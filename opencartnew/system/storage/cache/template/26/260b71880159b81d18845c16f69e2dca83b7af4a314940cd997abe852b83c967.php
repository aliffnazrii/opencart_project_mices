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
class __TwigTemplate_997471e849dfd32dcb9cb4949fe73e66ecc9dabb4792d533522d83dafa973d32 extends \Twig\Template
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
        <div class=\"card-body\">
          <form action=\"";
        // line 57
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
              <label for=\"input-coupon\" class=\"control-label\">";
        // line 59
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"coupon\" value=\"";
        // line 60
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
            </div>
            <div class=\"buttons clearfix\">
              <div class=\"pull-right\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 64
        echo ($context["button_continue"] ?? null);
        echo "</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <div class=\"main-products product-grid\">
        <div class=\"row\">
          ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "          <div class=\"col-sm-6 col-md-4 col-lg-3\">
            <div class=\"product-layout\">
              <div class=\"product-thumb\">
                <div class=\"image\">
                  ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78)) {
                // line 79
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                echo "\" class=\"product-img\">
                    <img src=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" class=\"img-responsive\" />
                  </a>
                  ";
            }
            // line 83
            echo "                </div>
                <div class=\"caption\">
                  <div class=\"name\"><a href=\"";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
            echo "</a></div>
                  ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86)) {
                // line 87
                echo "                  <div class=\"price\">
                    ";
                // line 88
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                    <span class=\"price-normal\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                    echo "</span>
                    ";
                } else {
                    // line 91
                    echo "                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91);
                    echo "</span>
                    <span class=\"price-old\">";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                    echo "</span>
                    ";
                }
                // line 94
                echo "                  </div>
                  ";
            }
            // line 96
            echo "                  <div class=\"buttons-wrapper\">
                    <div class=\"button-group\">
                      <button type=\"button\" class=\"btn btn-cart\" onclick=\"cart.add('";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 98);
            echo "')\">
                        <span class=\"btn-text\">";
            // line 99
            echo ($context["button_cart"] ?? null);
            echo "</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </div>
      </div>
      
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
        // line 112
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 113
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 117
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 118
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 124
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 127
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
        return array (  322 => 127,  316 => 124,  311 => 122,  304 => 118,  300 => 117,  293 => 113,  289 => 112,  283 => 108,  268 => 99,  264 => 98,  260 => 96,  256 => 94,  251 => 92,  246 => 91,  240 => 89,  238 => 88,  235 => 87,  233 => 86,  227 => 85,  223 => 83,  213 => 80,  208 => 79,  206 => 78,  200 => 74,  196 => 73,  184 => 64,  175 => 60,  171 => 59,  166 => 57,  159 => 53,  153 => 49,  146 => 45,  142 => 43,  139 => 42,  132 => 38,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
