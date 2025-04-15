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
class __TwigTemplate_ca81de194124775dbf846551dcb78df0194f81961a05019c5a9a9d3729d2112a extends \Twig\Template
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
  <div class=\"row\">
    ";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      ";
        // line 26
        if (($context["coupons"] ?? null)) {
            // line 27
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">
                  ";
            // line 32
            echo ($context["column_name"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 35
            echo ($context["column_code"] ?? null);
            echo "
                </td>
                <td class=\"text-right\">
                  ";
            // line 38
            echo ($context["column_discount"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 41
            echo ($context["column_products"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 44
            echo ($context["column_date_start"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 47
            echo ($context["column_date_end"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 50
            echo ($context["column_status"] ?? null);
            echo "
                </td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 56
                echo "                <tr>
                  <td class=\"text-left\">
                    ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 58);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 61);
                echo "
                  </td>
                  <td class=\"text-right\">
                    ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 64) == "P")) {
                    // line 65
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 65);
                    echo "
                      %
                    ";
                } else {
                    // line 68
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 68);
                    echo "
                    ";
                }
                // line 70
                echo "                  </td>
                  <td class=\"text-left\">
                    ";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 72);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 75);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 78);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 81
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 81) == 1)) ? (($context["text_active"] ?? null)) : (($context["text_inactive"] ?? null)));
                echo "
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </tbody>
          </table>
        </div>
      ";
        } else {
            // line 89
            echo "        <p>
          ";
            // line 90
            echo ($context["text_empty"] ?? null);
            echo "
        </p>
      ";
        }
        // line 93
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 95
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 96
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 100
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 102
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 105
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
        return array (  268 => 105,  262 => 102,  257 => 100,  250 => 96,  246 => 95,  242 => 93,  236 => 90,  233 => 89,  227 => 85,  217 => 81,  211 => 78,  205 => 75,  199 => 72,  195 => 70,  189 => 68,  182 => 65,  180 => 64,  174 => 61,  168 => 58,  164 => 56,  160 => 55,  152 => 50,  146 => 47,  140 => 44,  134 => 41,  128 => 38,  122 => 35,  116 => 32,  109 => 27,  107 => 26,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
