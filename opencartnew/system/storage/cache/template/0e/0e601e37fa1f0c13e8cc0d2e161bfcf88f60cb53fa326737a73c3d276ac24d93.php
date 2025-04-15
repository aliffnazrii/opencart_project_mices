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
class __TwigTemplate_34983a4107b33f26928bee113be2ba2f113a13a27036a2b8f2c2a0c7086bf797 extends \Twig\Template
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
            echo "        <div class=\"row coupon-grid\">
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 29
                echo "            <div class=\"product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <div class=\"coupon-thumb\">
                ";
                // line 32
                echo "                ";
                // line 39
                echo "                ";
                // line 40
                echo "                ";
                // line 45
                echo "                ";
                // line 46
                echo "                <div class=\"caption\">
                  <h4>
                    <a href=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 48);
                echo "\">
                      ";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 49);
                echo "
                    </a>
                  </h4>
                  ";
                // line 53
                echo "                  <div class=\"coupon-code-group\">
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\">
                        <i class=\"fa fa-tag\"></i>
                      </span>
                      <input type=\"text\" class=\"form-control coupon-code\" value=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 58);
                echo "\" readonly>
                        <span class=\"input-group-btn\">
                          <button class=\"btn btn-primary btn-copy\" type=\"button\" data-clipboard-text=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 60);
                echo "\" title=\"";
                echo ($context["button_copy"] ?? null);
                echo "\">
                            <i class=\"fa fa-copy\"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    ";
                // line 67
                echo "                    <div class=\"coupon-price\">
                      ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 68) == "P")) {
                    // line 69
                    echo "                        <span class=\"price-new\">
                          ";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 70);
                    echo "
                          %
                          ";
                    // line 72
                    echo ($context["text_discount"] ?? null);
                    echo "
                        </span>
                      ";
                } else {
                    // line 75
                    echo "                        <span class=\"price-new\">
                          ";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 76);
                    echo "
                          ";
                    // line 77
                    echo ($context["text_discount"] ?? null);
                    echo "
                        </span>
                      ";
                }
                // line 80
                echo "                    </div>
                    ";
                // line 82
                echo "                    <div class=\"coupon-validity\">
                      <div class=\"validity-text\">
                        ";
                // line 84
                echo ($context["text_validity"] ?? null);
                echo "
                      </div>
                      <div class=\"validity-dates\">
                        <span class=\"date-start\">
                          ";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 88);
                echo "
                        </span>
                        -
                        <span class=\"date-end\">
                          ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 92);
                echo "
                        </span>
                      </div>
                    </div>
                  </div>
                  ";
                // line 98
                echo "                  <div class=\"button-group\">
                    <a href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 99);
                echo "\" class=\"btn btn-primary btn-block\">
                      ";
                // line 100
                echo ($context["button_details"] ?? null);
                echo "
                    </a>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "          </div>
        ";
        } else {
            // line 108
            echo "          <div class=\"alert alert-info\">
            ";
            // line 109
            echo ($context["text_empty"] ?? null);
            echo "
          </div>
        ";
        }
        // line 112
        echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <a href=\"";
        // line 114
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
              ";
        // line 115
        echo ($context["button_continue"] ?? null);
        echo "
            </a>
          </div>
        </div>
        ";
        // line 119
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 121
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize clipboard.js
  new ClipboardJS('.btn-copy').on('success', function() {
    alert('";
        // line 128
        echo twig_escape_filter($this->env, ($context["text_code_copied"] ?? null), "js");
        echo "');
  });

  // Journal3 style adjustments
  \$('.coupon-grid').css('opacity', 0).animate({'opacity': 1}, 200);
});
</script>
  <style>
.coupon-thumb {
  border: 1px solid #eee;
  padding: 15px;
  margin-bottom: 30px;
  transition: all 0.3s;
  background: #fff;
  border-radius: 4px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.coupon-thumb:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.coupon-code-group {
  margin: 15px 0;
}

.coupon-code-group .input-group-addon {
  background: #f8f8f8;
}

.coupon-code {
  background: #fff;
  cursor: default;
  font-weight: bold;
  color: #e83e8c;
}

.coupon-price .price-new {
  font-size: 24px;
  font-weight: bold;
  color: #28a745;
  display: block;
  text-align: center;
  margin: 10px 0;
}

.coupon-validity {
  margin: 15px 0;
  padding: 10px;
  background: #f9f9f9;
  border-radius: 4px;
  font-size: 12px;
}

.validity-text {
  font-weight: bold;
  margin-bottom: 5px;
}

.validity-dates {
  display: flex;
  justify-content: space-between;
}
</style>
  ";
        // line 193
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
        return array (  356 => 193,  288 => 128,  278 => 121,  273 => 119,  266 => 115,  262 => 114,  258 => 112,  252 => 109,  249 => 108,  245 => 106,  233 => 100,  229 => 99,  226 => 98,  218 => 92,  211 => 88,  204 => 84,  200 => 82,  197 => 80,  191 => 77,  187 => 76,  184 => 75,  178 => 72,  173 => 70,  170 => 69,  168 => 68,  165 => 67,  154 => 60,  149 => 58,  142 => 53,  136 => 49,  132 => 48,  128 => 46,  126 => 45,  124 => 40,  122 => 39,  120 => 32,  116 => 29,  112 => 28,  109 => 27,  107 => 26,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
