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
class __TwigTemplate_5b1791ad9a6956b093e676caf8dbbffa30b166cf4570338b20fffa9ca3ed4ad4 extends \Twig\Template
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
      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>
            ";
        // line 47
        echo ($context["text_coupon"] ?? null);
        echo "
          </h4>
        </div>
        <div class=\"card-body\">
          <form id=\"form-coupon\" action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
            <div class=\"row mb-3\">
              <label for=\"input-code\" class=\"col-md-3 col-form-label\">
                ";
        // line 54
        echo ($context["text_code"] ?? null);
        echo "
              </label>
              <div class=\"col-md-9\">
                <input type=\"text\" name=\"code\" value=\"\" placeholder=\"";
        // line 57
        echo ($context["text_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 62
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
        // line 73
        echo ($context["column_voucher_id"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 74
        echo ($context["column_voucher_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 75
        echo ($context["column_voucher_serial"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 76
        echo ($context["column_customer_code"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 77
        echo ($context["column_disc_value"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 78
        echo ($context["column_from_date"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 79
        echo ($context["column_to_date"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 83
        if (($context["coupons"] ?? null)) {
            // line 84
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 85
                echo "                <tr>
                  <td class=\"text-left\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "voucher_id", [], "any", false, false, false, 86);
                echo "</td>
                <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "voucher_name", [], "any", false, false, false, 87);
                echo "</td>
                  <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "serial_no", [], "any", false, false, false, 88);
                echo "</td>
                  <td class=\"text-left\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "customer_code", [], "any", false, false, false, 89);
                echo "</td>
                  <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "disc_value", [], "any", false, false, false, 90);
                echo "</td>
                  <td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "from_date", [], "any", false, false, false, 91);
                echo "</td>
                  <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "to_date", [], "any", false, false, false, 92);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            ";
        } else {
            // line 96
            echo "              <tr>
                <td class=\"text-center\" colspan=\"8\">
                  ";
            // line 98
            echo ($context["text_empty"] ?? null);
            echo "
                </td>
              </tr>
            ";
        }
        // line 102
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 107
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 110
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 115
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 116
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 120
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 122
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 125
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
        return array (  319 => 125,  313 => 122,  308 => 120,  301 => 116,  297 => 115,  289 => 110,  283 => 107,  276 => 102,  269 => 98,  265 => 96,  262 => 95,  253 => 92,  249 => 91,  245 => 90,  241 => 89,  237 => 88,  233 => 87,  229 => 86,  226 => 85,  221 => 84,  219 => 83,  212 => 79,  208 => 78,  204 => 77,  200 => 76,  196 => 75,  192 => 74,  188 => 73,  174 => 62,  166 => 57,  160 => 54,  154 => 51,  147 => 47,  136 => 39,  131 => 37,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
