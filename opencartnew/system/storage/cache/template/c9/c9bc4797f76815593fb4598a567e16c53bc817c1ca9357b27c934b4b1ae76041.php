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
class __TwigTemplate_2c61cf30192fcf7846cb9e5ba4d5692923322d6ea8d6499b56c5036de398bdee extends \Twig\Template
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
            echo "      <li><a href=\"";
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
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 100
        echo "      ";
        if (($context["coupons"] ?? null)) {
            // line 101
            echo "        <div class=\"coupon-grid\">
          ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 103
                echo "            <div class=\"coupon-card\">
              <div class=\"coupon-code\">
                <h4>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 105);
                echo "</h4>
              </div>
              <div class=\"coupon-details\">
                ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 108) == "P")) {
                    // line 109
                    echo "                  <div class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 109);
                    echo "% ";
                    echo ($context["text_discount"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 111
                    echo "                  <div class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 111);
                    echo " ";
                    echo ($context["text_fixed"] ?? null);
                    echo "</div>
                ";
                }
                // line 113
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                  <div class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 114);
                    echo "</div>
                ";
                }
                // line 116
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 116) || twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 116))) {
                    // line 117
                    echo "                  <div class=\"validity\">
                    ";
                    // line 118
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 118)) {
                        // line 119
                        echo "                      <span class=\"date-start\">";
                        echo ($context["text_valid_from"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 119);
                        echo "</span>
                    ";
                    }
                    // line 121
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "                      <span class=\"date-end\">";
                        echo ($context["text_valid_to"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 122);
                        echo "</span>
                    ";
                    }
                    // line 124
                    echo "                  </div>
                ";
                }
                // line 126
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "                  <div class=\"status status-active\">";
                    echo ($context["text_active"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 129
                    echo "                  <div class=\"status status-inactive\">";
                    echo ($context["text_inactive"] ?? null);
                    echo "</div>
                ";
                }
                // line 131
                echo "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        </div>
      ";
        } else {
            // line 136
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 138
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 139
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 141
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 143
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 146
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
        return array (  230 => 146,  224 => 143,  219 => 141,  212 => 139,  209 => 138,  203 => 136,  199 => 134,  191 => 131,  185 => 129,  179 => 127,  176 => 126,  172 => 124,  164 => 122,  161 => 121,  153 => 119,  151 => 118,  148 => 117,  145 => 116,  139 => 114,  136 => 113,  128 => 111,  120 => 109,  118 => 108,  112 => 105,  108 => 103,  104 => 102,  101 => 101,  98 => 100,  94 => 18,  90 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
