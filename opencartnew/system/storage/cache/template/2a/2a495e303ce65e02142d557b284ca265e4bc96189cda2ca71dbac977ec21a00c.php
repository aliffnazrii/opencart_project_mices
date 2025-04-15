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
class __TwigTemplate_8729e1d00857640e736ffe6cf51cf22298f446deaec0f814c1f85aa5b09cbd96 extends \Twig\Template
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
      <style>
        .coupon-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
          gap: 20px;
          padding: 20px 0;
        }
        .coupon-card {
          border: 1px solid #e5e5e5;
          border-radius: 8px;
          padding: 20px;
          background: #fff;
          transition: all 0.3s ease;
          position: relative;
          overflow: hidden;
        }
        .coupon-card:hover {
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
          transform: translateY(-2px);
        }
        .coupon-card::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 4px;
          background: linear-gradient(90deg, #3498db, #2ecc71);
        }
        .coupon-code {
          text-align: center;
          margin-bottom: 15px;
          padding: 10px;
          background: #f8f9fa;
          border-radius: 4px;
        }
        .coupon-code h4 {
          margin: 0;
          font-size: 24px;
          color: #2c3e50;
          font-weight: bold;
        }
        .coupon-details {
          color: #666;
        }
        .discount {
          font-size: 20px;
          color: #e74c3c;
          margin-bottom: 10px;
          text-align: center;
        }
        .description {
          margin: 10px 0;
          font-size: 14px;
          line-height: 1.4;
        }
        .validity {
          font-size: 13px;
          margin: 10px 0;
          color: #7f8c8d;
        }
        .validity span {
          display: block;
          margin: 3px 0;
        }
        .status {
          text-align: center;
          padding: 5px;
          border-radius: 4px;
          margin-top: 10px;
          font-weight: 500;
        }
        .status-active {
          background: #e8f5e9;
          color: #2ecc71;
        }
        .status-inactive {
          background: #ffebee;
          color: #e74c3c;
        }
      </style>
      ";
        // line 100
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
                    echo "                  <div class=\"discount\">sdfgd% ";
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
        return array (  308 => 146,  302 => 143,  297 => 141,  290 => 139,  287 => 138,  281 => 136,  277 => 134,  269 => 131,  263 => 129,  257 => 127,  254 => 126,  250 => 124,  242 => 122,  239 => 121,  231 => 119,  229 => 118,  226 => 117,  223 => 116,  217 => 114,  214 => 113,  206 => 111,  200 => 109,  198 => 108,  192 => 105,  188 => 103,  184 => 102,  181 => 101,  179 => 100,  94 => 18,  90 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
