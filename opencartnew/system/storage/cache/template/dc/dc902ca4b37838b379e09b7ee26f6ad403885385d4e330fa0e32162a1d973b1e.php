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
class __TwigTemplate_72fb98ddc27636006dea2d81b55e25bf4514882218e086b2f516d4fd7d8185aa extends \Twig\Template
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
            echo "        <div class=\"coupon-list\">
          <div class=\"row\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 30
                echo "              <div class=\"product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"coupon-thumb\">
                  ";
                // line 33
                echo "                  <div class=\"product-labels\">
                    <span class=\"product-label product-label-";
                // line 34
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 34) == "Active")) ? ("in-stock") : ("out-of-stock"));
                echo "\">
                      <b>
                        ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 36);
                echo "
                      </b>
                    </span>
                  </div>
                  ";
                // line 41
                echo "                  <div class=\"image\">
                    <a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 42);
                echo "\" class=\"coupon-image\">
                      <img src=\"image/placeholder.png\" alt=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 43);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 43);
                echo "\" class=\"img-responsive\" />
                    </a>
                  </div>
                  ";
                // line 47
                echo "                  <div class=\"product-details\">
                    <div class=\"caption\">
                      <h4 class=\"product-title\">
                        <a href=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 50);
                echo "\">
                          ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 51);
                echo "
                        </a>
                      </h4>
                      ";
                // line 55
                echo "                      <div class=\"coupon-code-group\">
                        <div class=\"code-wrapper\">
                          <span class=\"code-value\">
                            ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 58);
                echo "
                          </span>
                          <button class=\"btn-copy\" data-clipboard-text=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 60);
                echo "\">
                            <i class=\"fa fa-copy\"></i>
                          </button>
                        </div>
                      </div>
                      ";
                // line 66
                echo "                      <div class=\"product-price-group\">
                        <div class=\"price-wrapper\">
                          ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 68) == "P")) {
                    // line 69
                    echo "                            <div class=\"product-price\">
                              ";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 70);
                    echo "
                              %
                            </div>
                          ";
                } else {
                    // line 74
                    echo "                            <div class=\"product-price\">
                              ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 75);
                    echo "
                            </div>
                          ";
                }
                // line 78
                echo "                        </div>
                      </div>
                      ";
                // line 81
                echo "                      <div class=\"coupon-validity\">
                        <div class=\"validity-dates\">
                          <span class=\"date-start\">
                            ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 84);
                echo "
                          </span>
                          -
                          <span class=\"date-end\">
                            ";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 88);
                echo "
                          </span>
                        </div>
                      </div>
                      ";
                // line 93
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "                        <div class=\"applicable-products\">
                          <div class=\"product-stats\">
                            <ul class=\"list-unstyled\">
                              <li>
                                <b>
                                  ";
                    // line 99
                    echo ($context["text_applicable_products"] ?? null);
                    echo "
                                  :
                                </b>
                                <span>
                                  ";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 103);
                    echo "
                                </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      ";
                }
                // line 110
                echo "                    </div>
                    ";
                // line 112
                echo "                    <div class=\"button-group\">
                      <a href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 113);
                echo "\" class=\"btn btn-primary\">
                        ";
                // line 114
                echo ($context["button_details"] ?? null);
                echo "
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "          </div>
        </div>
      ";
        } else {
            // line 124
            echo "        <p>
          ";
            // line 125
            echo ($context["text_empty"] ?? null);
            echo "
        </p>
      ";
        }
        // line 128
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 130
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 131
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 135
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 137
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script>
// Clipboard copy functionality
document.addEventListener('DOMContentLoaded', function() {
  new ClipboardJS('.btn-copy', {
    text: function(trigger) {
      return trigger.getAttribute('data-clipboard-text');
    }
  }).on('success', function(e) {
    alert('";
        // line 148
        echo twig_escape_filter($this->env, ($context["text_code_copied"] ?? null), "js");
        echo "');
  });
});
</script>
";
        // line 152
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
        return array (  337 => 152,  330 => 148,  316 => 137,  311 => 135,  304 => 131,  300 => 130,  296 => 128,  290 => 125,  287 => 124,  282 => 121,  269 => 114,  265 => 113,  262 => 112,  259 => 110,  249 => 103,  242 => 99,  235 => 94,  232 => 93,  225 => 88,  218 => 84,  213 => 81,  209 => 78,  203 => 75,  200 => 74,  193 => 70,  190 => 69,  188 => 68,  184 => 66,  176 => 60,  171 => 58,  166 => 55,  160 => 51,  156 => 50,  151 => 47,  143 => 43,  139 => 42,  136 => 41,  129 => 36,  124 => 34,  121 => 33,  117 => 30,  113 => 29,  109 => 27,  107 => 26,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
