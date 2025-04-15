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
class __TwigTemplate_f518de7848f49f400416085934c29e3a3044627f32f5abf220a11347ed80e816 extends \Twig\Template
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
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
    ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "pageTitlePosition"], "method", false, false, false, 9) == "top")) {
                // line 10
                echo "      <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
    ";
            }
            // line 12
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 12);
            echo "
  ";
        }
        // line 14
        echo "
  <div class=\"row\">
    ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    
    <div id=\"content\" class=\"";
        // line 25
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
      
      ";
        // line 28
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "pageTitlePosition"], "method", false, false, false, 28) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 28), "isPopup", [0 => "quickview"], "method", false, false, false, 28))) {
            // line 29
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 31
        echo "      
      ";
        // line 32
        if (($context["coupons"] ?? null)) {
            // line 33
            echo "        <div class=\"coupon-list\">
          <div class=\"row\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 36
                echo "              <div class=\"coupon-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"coupon-thumb\">
                  <div class=\"coupon-image\">
                    ";
                // line 40
                echo "                    <img src=\"image/placeholder.png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 40);
                echo "\" class=\"img-responsive\" />
                    
                    ";
                // line 43
                echo "                    <div class=\"coupon-label\">
                      <span class=\"label label-";
                // line 44
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 44) == "Active")) ? ("success") : ("danger"));
                echo "\">
                        ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 45);
                echo "
                      </span>
                    </div>
                  </div>
                  
                  <div class=\"coupon-details\">
                    <h4 class=\"coupon-title\">
                      <a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 52);
                echo "</a>
                    </h4>
                    
                    <div class=\"coupon-code\">
                      <strong>";
                // line 56
                echo ($context["text_code"] ?? null);
                echo ":</strong> 
                      <span class=\"code\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 57);
                echo "</span>
                      <button class=\"btn-copy\" data-clipboard-text=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 58);
                echo "\">
                        <i class=\"fa fa-copy\"></i>
                      </button>
                    </div>
                    
                    <div class=\"coupon-discount\">
                      <strong>";
                // line 64
                echo ($context["text_discount"] ?? null);
                echo ":</strong> 
                      ";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 65) == "P")) {
                    // line 66
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 66);
                    echo "%
                      ";
                } else {
                    // line 68
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 68);
                    echo "
                      ";
                }
                // line 70
                echo "                    </div>
                    
                    ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                      <div class=\"coupon-products\">
                        <strong>";
                    // line 74
                    echo ($context["text_applicable_products"] ?? null);
                    echo ":</strong> 
                        ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 75);
                    echo "
                      </div>
                    ";
                }
                // line 78
                echo "                    
                    <div class=\"coupon-dates\">
                      <div><strong>";
                // line 80
                echo ($context["text_validity"] ?? null);
                echo ":</strong></div>
                      <div>";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 81);
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 81);
                echo "</div>
                    </div>
                    
                    <div class=\"coupon-actions\">
                      <a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 85);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_details"] ?? null);
                echo "</a>
                    </div>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "          </div>
        </div>
      ";
        } else {
            // line 94
            echo "        <div class=\"alert alert-info\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
      ";
        }
        // line 96
        echo "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 99
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
        </div>
      </div>
      
      ";
        // line 103
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 105
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
        // line 117
        echo ($context["text_code_copied"] ?? null);
        echo "');
  });
});
</script>

";
        // line 122
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
        return array (  315 => 122,  307 => 117,  292 => 105,  287 => 103,  278 => 99,  273 => 96,  267 => 94,  262 => 91,  248 => 85,  239 => 81,  235 => 80,  231 => 78,  225 => 75,  221 => 74,  218 => 73,  216 => 72,  212 => 70,  206 => 68,  200 => 66,  198 => 65,  194 => 64,  185 => 58,  181 => 57,  177 => 56,  168 => 52,  158 => 45,  154 => 44,  151 => 43,  145 => 40,  140 => 36,  136 => 35,  132 => 33,  130 => 32,  127 => 31,  121 => 29,  119 => 28,  114 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  87 => 17,  83 => 16,  79 => 14,  73 => 12,  67 => 10,  65 => 9,  62 => 8,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
