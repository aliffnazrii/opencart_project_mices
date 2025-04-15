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
class __TwigTemplate_fa0c1b1096f87b29ecc4b038fc22134dcdd3792bfcf9708295c14e4bc8b9a033 extends \Twig\Template
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
                echo "                <div class=\"product-labels\">
                  <span class=\"product-label product-label-";
                // line 33
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 33) == ($context["text_active"] ?? null))) ? ("in-stock") : ("out-of-stock"));
                echo "\">
                    <b>
                      ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 35);
                echo "
                    </b>
                  </span>
                </div>
                ";
                // line 40
                echo "                <div class=\"image\">
                  <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 41);
                echo "\">
                    <img src=\"image/catalog/demo/coupon-placeholder.jpg\" alt=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 42);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 42);
                echo "\" class=\"img-responsive\" />
                  </a>
                </div>
                ";
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
        return array (  378 => 193,  310 => 128,  300 => 121,  295 => 119,  288 => 115,  284 => 114,  280 => 112,  274 => 109,  271 => 108,  267 => 106,  255 => 100,  251 => 99,  248 => 98,  240 => 92,  233 => 88,  226 => 84,  222 => 82,  219 => 80,  213 => 77,  209 => 76,  206 => 75,  200 => 72,  195 => 70,  192 => 69,  190 => 68,  187 => 67,  176 => 60,  171 => 58,  164 => 53,  158 => 49,  154 => 48,  150 => 46,  142 => 42,  138 => 41,  135 => 40,  128 => 35,  123 => 33,  120 => 32,  116 => 29,  112 => 28,  109 => 27,  107 => 26,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
