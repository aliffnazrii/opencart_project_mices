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
class __TwigTemplate_5d62d98cc239196170e544b007bf5f02d39d3c2c90aaaa21b697cb0677a82fbd extends \Twig\Template
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
        echo ($context["content_top"] ?? null);
        echo "
      <p>
        ";
        // line 37
        echo ($context["text_total"] ?? null);
        echo "
        <b>
          ";
        // line 39
        echo ($context["total"] ?? null);
        echo "
        </b>
        .
      </p>
      ";
        // line 43
        if (($context["success"] ?? null)) {
            // line 44
            echo "<div class=\"alert alert-success alert-dismissible\">
  <i class=\"fa fa-check-circle\"></i>
  ";
            // line 46
            echo ($context["text_success_redeem"] ?? null);
            echo "
  
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
      ";
        }
        // line 51
        echo "      ";
        if (($context["error"] ?? null)) {
            // line 52
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_coupon"] ?? null);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
      ";
        }
        // line 56
        echo "      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>
            ";
        // line 60
        echo ($context["text_coupon"] ?? null);
        echo "
          </h4>
        </div>
        <div class=\"card-body\">
          <form id=\"form-coupon\" action=\"";
        // line 64
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
            <div class=\"row mb-3\">
              <label for=\"input-code\" class=\"col-md-3 col-form-label\">
                ";
        // line 67
        echo ($context["text_code"] ?? null);
        echo "
              </label>
              <div class=\"col-md-9\">
                <input type=\"text\" name=\"code\" value=\"\" placeholder=\"";
        // line 70
        echo ($context["text_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 75
        echo ($context["button_submit"] ?? null);
        echo "
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- Coupons Table -->
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
          <td class=\"text-left\">";
        // line 86
        echo ($context["column_voucher_id"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 87
        echo ($context["column_voucher_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 88
        echo ($context["column_voucher_serial"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 89
        echo ($context["column_customer_code"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 90
        echo ($context["column_disc_value"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 91
        echo ($context["column_from_date"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 92
        echo ($context["column_to_date"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 96
        if (($context["coupons"] ?? null)) {
            // line 97
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 98
                echo "                <tr>
                  <td class=\"text-left\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "voucher_id", [], "any", false, false, false, 99);
                echo "</td>
                <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "voucher_name", [], "any", false, false, false, 100);
                echo "</td>
                  <td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "serial_no", [], "any", false, false, false, 101);
                echo "</td>
                  <td class=\"text-left\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "customer_code", [], "any", false, false, false, 102);
                echo "</td>
                  <td class=\"text-right\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "disc_value", [], "any", false, false, false, 103);
                echo "</td>
                  <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "from_date", [], "any", false, false, false, 104);
                echo "</td>
                  <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "to_date", [], "any", false, false, false, 105);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "            ";
        } else {
            // line 109
            echo "              <tr>
                <td class=\"text-center\" colspan=\"8\">
                  ";
            // line 111
            echo ($context["text_empty"] ?? null);
            echo "
                </td>
              </tr>
            ";
        }
        // line 115
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 120
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 123
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 128
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 129
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 133
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 135
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 138
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
        return array (  346 => 138,  340 => 135,  335 => 133,  328 => 129,  324 => 128,  316 => 123,  310 => 120,  303 => 115,  296 => 111,  292 => 109,  289 => 108,  280 => 105,  276 => 104,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  256 => 99,  253 => 98,  248 => 97,  246 => 96,  239 => 92,  235 => 91,  231 => 90,  227 => 89,  223 => 88,  219 => 87,  215 => 86,  201 => 75,  193 => 70,  187 => 67,  181 => 64,  174 => 60,  168 => 56,  160 => 52,  157 => 51,  149 => 46,  145 => 44,  143 => 43,  136 => 39,  131 => 37,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
