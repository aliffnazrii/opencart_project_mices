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
class __TwigTemplate_301664eaa3f13587821821821337d0739479ae25bd2dc41fb4037ca3715b1ae1 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      ";
        // line 19
        if (($context["coupons"] ?? null)) {
            // line 20
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 24
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo ($context["column_code"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 26
            echo ($context["column_discount"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 27
            echo ($context["column_products"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 28
            echo ($context["column_date_start"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 29
            echo ($context["column_date_end"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 30
            echo ($context["column_status"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 35
                echo "            <tr>
              <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 36);
                echo "</td>
              <td class=\"text-left\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 37);
                echo "</td>
              <td class=\"text-right\">
                ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 39) == "P")) {
                    // line 40
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 40);
                    echo "%
                ";
                } else {
                    // line 42
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 42);
                    echo "
                ";
                }
                // line 44
                echo "              </td>
              <td class=\"text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 45);
                echo "</td>
              <td class=\"text-left\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 46);
                echo "</td>
              <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 47);
                echo "</td>
              <td class=\"text-left\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 48);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </tbody>
        </table>
      </div>
      ";
        } else {
            // line 55
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 57
        echo "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 59
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 61
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 64
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
        return array (  222 => 64,  217 => 62,  213 => 61,  206 => 59,  202 => 57,  196 => 55,  190 => 51,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  166 => 44,  160 => 42,  154 => 40,  152 => 39,  147 => 37,  143 => 36,  140 => 35,  136 => 34,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  99 => 20,  97 => 19,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
