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

/* journal3/template/account/redeem.twig */
class __TwigTemplate_aea979376b847f0d36f6450ffbfdfe3f042e3c5653105c8d844b5b2759987837 extends \Twig\Template
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
<div id=\"account-redeem\" class=\"container\">
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">
    ";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 28
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 30)) {
            // line 31
            echo "  ";
            if (($context["categories"] ?? null)) {
                // line 32
                echo "    <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 32);
                echo "\">
      ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "refineTitle"], "method", false, false, false, 33)) {
                    // line 34
                    echo "        <h3 class=\"refine-title title\">
          ";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "refineTitleText"], "method", false, false, false, 35);
                    echo "
        </h3>
      ";
                }
                // line 38
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 38) == "carousel")) {
                    // line 39
                    echo "        <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 39), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "getJs", [], "method", false, false, false, 39), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 39), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
          <div class=\"swiper-container\" ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 40)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
            <div
            class=\"swiper-wrapper\">
              ";
                } else {
                    // line 44
                    echo "              <div class=\"refine-items\">
              ";
                }
                // line 46
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 47
                    echo "                <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 47) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                  <a href=\"";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 48);
                    echo "\">
                    ";
                    // line 49
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 49) != "links")) {
                        // line 50
                        echo "                      <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 50);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 50)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 50);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 50);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 50);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 50);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 50);
                        echo "\" />
                    ";
                    }
                    // line 52
                    echo "                    <span class=\"refine-name\">
                      ";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                    echo "
                    </span>
                  </a>
                </div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 58), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 58) != "carousel")) {
                    // line 59
                    echo "              </div>
          ";
                } else {
                    // line 61
                    echo "            </div>
          </div>
          <div class=\"swiper-buttons\">
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      ";
                }
                // line 70
                echo "    </div>
  ";
            }
        }
        // line 73
        echo "<div class=\"main-products-wrapper\">
  ";
        // line 74
        if (($context["products"] ?? null)) {
            // line 75
            echo "    ";
            // line 124
            echo "    <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "get", [0 => "globalProductView"], "method", false, false, false, 124);
            echo "\">
      ";
            // line 125
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 125), "get", [0 => "globalProductView"], "method", false, false, false, 125);
            // line 126
            echo "      ";
            $this->loadTemplate("journal3/template/journal3/voucher_card.twig", "journal3/template/account/redeem.twig", 126)->display($context);
            // line 127
            echo "    </div>
    <div class=\"row pagination-results\">
      <div class=\"col-sm-6 text-left\">
        ";
            // line 130
            echo ($context["pagination"] ?? null);
            echo "
      </div>
      <div class=\"col-sm-6 text-right\">
        ";
            // line 133
            echo ($context["results"] ?? null);
            echo "
      </div>
    </div>
  ";
        }
        // line 137
        echo "  ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 138
            echo "    <p>
      ";
            // line 139
            echo ($context["text_empty"] ?? null);
            echo "
    </p>
    <div class=\"buttons\">
      <div class=\"pull-right\">
        <a href=\"";
            // line 143
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
          ";
            // line 144
            echo ($context["button_continue"] ?? null);
            echo "
        </a>
      </div>
    </div>
  ";
        }
        // line 149
        echo "</div>


      ";
        // line 152
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>

    
    ";
        // line 156
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 159
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
\$('form').on('submit', function(e) {
  e.preventDefault();
  
  \$.ajax({
    url: '";
        // line 165
        echo ($context["action"] ?? null);
        echo "',
    type: 'post',
    data: \$(this).serialize(),
    dataType: 'json',
    beforeSend: function() {
      \$('input[type=\\'submit\\']').button('loading');
    },
    complete: function() {
      \$('input[type=\\'submit\\']').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();
      
      if (json['redirect']) {
        location = json['redirect'];
      }
      
      if (json['error']) {
        \$('#account-redeem').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
      }
      
      if (json['success']) {
        \$('#account-redeem').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        
        \$('input[name=\\'code\\']').val('');
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/redeem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 165,  319 => 159,  313 => 156,  306 => 152,  301 => 149,  293 => 144,  289 => 143,  282 => 139,  279 => 138,  276 => 137,  269 => 133,  263 => 130,  258 => 127,  255 => 126,  253 => 125,  248 => 124,  246 => 75,  244 => 74,  241 => 73,  236 => 70,  225 => 61,  221 => 59,  218 => 58,  207 => 53,  204 => 52,  184 => 50,  182 => 49,  178 => 48,  171 => 47,  166 => 46,  162 => 44,  153 => 40,  146 => 39,  143 => 38,  137 => 35,  134 => 34,  132 => 33,  127 => 32,  124 => 31,  122 => 30,  118 => 29,  114 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/redeem.twig", "");
    }
}
