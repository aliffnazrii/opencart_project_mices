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
class __TwigTemplate_417a4ced44a9af73e61b629403c4748768cd49e66f9058e88708290ae644a968 extends \Twig\Template
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
<div id=\"account-return\" class=\"container\">
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
      ";
        // line 36
        if (($context["returns"] ?? null)) {
            // line 37
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">
                  ";
            // line 42
            echo ($context["column_return_id"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 45
            echo ($context["column_status"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 48
            echo ($context["column_date_added"] ?? null);
            echo "
                </td>
                <td class=\"text-right\">
                  ";
            // line 51
            echo ($context["column_order_id"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 54
            echo ($context["column_customer"] ?? null);
            echo "
                </td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 61
                echo "                <tr>
                  <td class=\"text-right\">
                    #
                    ";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 64);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 67);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 70);
                echo "
                  </td>
                  <td class=\"text-right\">
                    ";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 73);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["return"], "name", [], "any", false, false, false, 76);
                echo "
                  </td>
                  <td class=\"text-right\">
                    <a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["return"], "href", [], "any", false, false, false, 79);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\">
                      <i class=\"fa fa-eye\"></i>
                    </a>
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">
            ";
            // line 90
            echo ($context["pagination"] ?? null);
            echo "
          </div>
          <div class=\"col-sm-6 text-right\">
            ";
            // line 93
            echo ($context["results"] ?? null);
            echo "
          </div>
        </div>
      ";
        } else {
            // line 97
            echo "        <p>
          ";
            // line 98
            echo ($context["text_empty"] ?? null);
            echo "
        </p>
      ";
        }
        // line 101
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 103
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 104
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 108
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 110
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 113
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
        return array (  280 => 113,  274 => 110,  269 => 108,  262 => 104,  258 => 103,  254 => 101,  248 => 98,  245 => 97,  238 => 93,  232 => 90,  225 => 85,  211 => 79,  205 => 76,  199 => 73,  193 => 70,  187 => 67,  181 => 64,  176 => 61,  172 => 60,  163 => 54,  157 => 51,  151 => 48,  145 => 45,  139 => 42,  132 => 37,  130 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
