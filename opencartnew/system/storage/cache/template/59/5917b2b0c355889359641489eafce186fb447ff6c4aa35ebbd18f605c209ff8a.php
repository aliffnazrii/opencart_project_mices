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
class __TwigTemplate_c6b41ed06c2730787ac8996bfab78eb6bdeafd0fc36b1f40bdc8c705c48f81ee extends \Twig\Template
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
<div id=\"account-coupon\" class=\"container\">
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
              <th>
                ";
        // line 74
        echo ($context["column_name"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 77
        echo ($context["column_code"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 80
        echo ($context["column_available"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 83
        echo ($context["column_product"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 86
        echo ($context["column_category"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 89
        echo ($context["text_discount"] ?? null);
        echo "
              </th>
              <th>
                ";
        // line 92
        echo ($context["text_total"] ?? null);
        echo "
              </th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 97
        if (($context["coupons"] ?? null)) {
            // line 98
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 99
                echo "                <tr>
                  <td>
                    ";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 101);
                echo "
                  </td>
                  <td>
                    ";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 104);
                echo "
                  </td>
                  <td>
                    ";
                // line 107
                echo ((twig_get_attribute($this->env, $this->source, $context["coupon"], "available", [], "any", false, false, false, 107)) ? ("Yes") : ("No"));
                echo "
                  </td>
                  <td>
                    ";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "product", [], "any", false, false, false, 110);
                echo "
                  </td>
                  <td>
                    ";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "category", [], "any", false, false, false, 113);
                echo "
                  </td>
                  <td>
                    ";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 116);
                echo "
                  </td>
                  <td>
                    ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "total", [], "any", false, false, false, 119);
                echo "
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "            ";
        } else {
            // line 124
            echo "              <tr>
                <td class=\"text-center\" colspan=\"7\">
                  ";
            // line 126
            echo ($context["text_empty"] ?? null);
            echo "
                </td>
              </tr>
            ";
        }
        // line 130
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-start\">
          ";
        // line 135
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-end\">
          ";
        // line 138
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"float-end\">
          <a href=\"";
        // line 143
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 144
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 148
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 150
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 153
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
        return array (  347 => 153,  341 => 150,  336 => 148,  329 => 144,  325 => 143,  317 => 138,  311 => 135,  304 => 130,  297 => 126,  293 => 124,  290 => 123,  280 => 119,  274 => 116,  268 => 113,  262 => 110,  256 => 107,  250 => 104,  244 => 101,  240 => 99,  235 => 98,  233 => 97,  225 => 92,  219 => 89,  213 => 86,  207 => 83,  201 => 80,  195 => 77,  189 => 74,  174 => 62,  166 => 57,  160 => 54,  154 => 51,  147 => 47,  136 => 39,  131 => 37,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
