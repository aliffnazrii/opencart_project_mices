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
class __TwigTemplate_9068ad237c6b671a79ab597aa7181fd701329cec68195213f4e83d1de77cdebe extends \Twig\Template
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
  ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 3), "isPopup", [], "method", false, false, false, 3)) {
            // line 4
            echo "    <ul class=\"breadcrumb\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 6
                echo "        <li>
          <a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">
            ";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
    ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 13), "get", [0 => "pageTitlePosition"], "method", false, false, false, 13) == "top")) {
                // line 14
                echo "      <h1 class=\"title page-title\">
        <span>
          ";
                // line 16
                echo ($context["heading_title"] ?? null);
                echo "
        </span>
      </h1>
    ";
            }
            // line 20
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 20);
            echo "
  ";
        }
        // line 22
        echo "  <div class=\"row\">
    ";
        // line 23
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 32
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 33
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "pageTitlePosition"], "method", false, false, false, 33) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 33), "isPopup", [0 => "quickview"], "method", false, false, false, 33))) {
            // line 34
            echo "        <h1 class=\"title page-title\">
          ";
            // line 35
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 38
        echo "      ";
        if (($context["coupons"] ?? null)) {
            // line 39
            echo "        <div class=\"coupon-list\">
          <div class=\"row\">
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 42
                echo "              <div class=\"coupon-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"coupon-thumb\">
                  <div class=\"coupon-image\">
                    ";
                // line 46
                echo "                    <img src=\"image/placeholder.png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 46);
                echo "\" class=\"img-responsive\" />
                    ";
                // line 48
                echo "                    <div class=\"coupon-label\">
                      <span class=\"label label-";
                // line 49
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 49) == "Active")) ? ("success") : ("danger"));
                echo "\">
                        ";
                // line 50
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 50) == "Active")) ? (($context["text_active"] ?? null)) : (($context["text_inactive"] ?? null)));
                echo "
                      </span>
                    </div>
                  </div>
                  <div class=\"coupon-details\">
                    <h4 class=\"coupon-title\">
                      <a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 56);
                echo "\">
                        ";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 57);
                echo "
                      </a>
                    </h4>
                    <div class=\"coupon-code\">
                      <strong>
                        ";
                // line 62
                echo ($context["text_code"] ?? null);
                echo "
                        :
                      </strong>
                      <span class=\"code\">
                        ";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 66);
                echo "
                      </span>
                      <button class=\"btn-copy\" data-clipboard-text=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 68);
                echo "\">
                        <i class=\"fa fa-copy\"></i>
                      </button>
                    </div>
                    <div class=\"coupon-discount\">
                      <strong>
                        ";
                // line 74
                echo ($context["text_discount"] ?? null);
                echo "
                        :
                      </strong>
                      ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 77) == "P")) {
                    // line 78
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 78);
                    echo "
                        %
                      ";
                } else {
                    // line 81
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 81);
                    echo "
                      ";
                }
                // line 83
                echo "                    </div>
                    ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                      <div class=\"coupon-products\">
                        <strong>
                          ";
                    // line 87
                    echo ($context["text_applicable_products"] ?? null);
                    echo "
                          :
                        </strong>
                        ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 90);
                    echo "
                      </div>
                    ";
                }
                // line 93
                echo "                    <div class=\"coupon-dates\">
                      <div>
                        <strong>
                          ";
                // line 96
                echo ($context["text_validity"] ?? null);
                echo "
                          :
                        </strong>
                      </div>
                      <div>
                        ";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 101);
                echo "
                        -
                        ";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 103);
                echo "
                      </div>
                    </div>
                    <div class=\"coupon-actions\">
                      <a href=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 107);
                echo "\" class=\"btn btn-primary\">
                        ";
                // line 108
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
            // line 115
            echo "          </div>
        </div>
      ";
        } else {
            // line 118
            echo "        <div class=\"alert alert-info\">
          ";
            // line 119
            echo ($context["text_empty"] ?? null);
            echo "
        </div>
      ";
        }
        // line 122
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 124
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 125
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 129
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 131
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script>
// Clipboard copy functionality
\$(document).ready(function() {
  new ClipboardJS('.btn-copy', {
    text: function(trigger) {
      return \$(trigger).data('clipboard-text');
    }
  }).on('success', function(e) {
    alert('";
        // line 142
        echo ($context["text_code_copied"] ?? null);
        echo "');
  });
});
</script>
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
        return array (  346 => 146,  339 => 142,  325 => 131,  320 => 129,  313 => 125,  309 => 124,  305 => 122,  299 => 119,  296 => 118,  291 => 115,  278 => 108,  274 => 107,  267 => 103,  262 => 101,  254 => 96,  249 => 93,  243 => 90,  237 => 87,  233 => 85,  231 => 84,  228 => 83,  222 => 81,  215 => 78,  213 => 77,  207 => 74,  198 => 68,  193 => 66,  186 => 62,  178 => 57,  174 => 56,  165 => 50,  161 => 49,  158 => 48,  153 => 46,  148 => 42,  144 => 41,  140 => 39,  137 => 38,  131 => 35,  128 => 34,  126 => 33,  122 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  97 => 24,  93 => 23,  90 => 22,  84 => 20,  77 => 16,  73 => 14,  71 => 13,  68 => 12,  58 => 8,  54 => 7,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
