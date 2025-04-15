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
class __TwigTemplate_5efbfb9464312c3736424c61d202412e4f6c872a44d766c69eef1375a44165a4 extends \Twig\Template
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
        echo "    ";
        // line 47
        echo "<div id=\"content\">
  ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "pageTitlePosition"], "method", false, false, false, 48) == "default")) {
            // line 49
            echo "    <h1 class=\"title page-title\">
      ";
            // line 50
            echo ($context["heading_title"] ?? null);
            echo "
    </h1>
  ";
        }
        // line 53
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 53)) {
            // line 54
            echo "    ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 55
                echo "      <div class=\"category-description\">
        ";
                // line 56
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 56))) {
                    // line 57
                    echo "          <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo " srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "image_dimensions_category.width"], "method", false, false, false, 57);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "image_dimensions_category.height"], "method", false, false, false, 57);
                    echo "\" />
        ";
                }
                // line 59
                echo "        ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 59))) {
                    // line 60
                    echo "          <div class=\"category-text\">
            ";
                    // line 61
                    echo ($context["description"] ?? null);
                    echo "
          </div>
        ";
                }
                // line 64
                echo "      </div>
    ";
            }
            // line 66
            echo "  ";
        }
        // line 67
        echo "  ";
        echo ($context["content_top"] ?? null);
        echo "
  ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 68)) {
            // line 69
            echo "    ";
            if (($context["categories"] ?? null)) {
                // line 70
                echo "      <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 70);
                echo "\">
        ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "refineTitle"], "method", false, false, false, 71)) {
                    // line 72
                    echo "          <h3 class=\"refine-title title\">
            ";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "refineTitleText"], "method", false, false, false, 73);
                    echo "
          </h3>
        ";
                }
                // line 76
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 76) == "carousel")) {
                    // line 77
                    echo "          <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 77), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 77), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 77), "getJs", [], "method", false, false, false, 77), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 77), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
            <div class=\"swiper-container\" ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 78)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
              <div
              class=\"swiper-wrapper\">
                ";
                } else {
                    // line 82
                    echo "                <div class=\"refine-items\">
                ";
                }
                // line 84
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 85
                    echo "                  <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 85) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                    <a href=\"";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 86);
                    echo "\">
                      ";
                    // line 87
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 87) != "links")) {
                        // line 88
                        echo "                        <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 88);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 88)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 88);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 88);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 88);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 88);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 88);
                        echo "\" />
                      ";
                    }
                    // line 90
                    echo "                      <span class=\"refine-name\">
                        ";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91);
                    echo "
                      </span>
                    </a>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 96), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 96) != "carousel")) {
                    // line 97
                    echo "                </div>
            ";
                } else {
                    // line 99
                    echo "              </div>
            </div>
            <div class=\"swiper-buttons\">
              <div class=\"swiper-button-prev\"></div>
              <div class=\"swiper-button-next\"></div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        ";
                }
                // line 108
                echo "      </div>
    ";
            }
            // line 110
            echo "  ";
        }
        // line 111
        echo "  <div class=\"main-products-wrapper\">
    ";
        // line 112
        if (($context["products"] ?? null)) {
            // line 113
            echo "      ";
            // line 162
            echo "      <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 162), "get", [0 => "globalProductView"], "method", false, false, false, 162);
            echo "\">
        ";
            // line 163
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 163), "get", [0 => "globalProductView"], "method", false, false, false, 163);
            // line 164
            echo "        ";
            $this->loadTemplate("journal3/template/journal3/voucher_card.twig", "journal3/template/account/redeem.twig", 164)->display($context);
            // line 165
            echo "      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
            // line 168
            echo ($context["pagination"] ?? null);
            echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
            // line 171
            echo ($context["results"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 175
        echo "    ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 176
            echo "      <p>
        ";
            // line 177
            echo ($context["text_empty"] ?? null);
            echo "
      </p>
      <div class=\"buttons\">
        <div class=\"pull-right\">
          <a href=\"";
            // line 181
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
            ";
            // line 182
            echo ($context["button_continue"] ?? null);
            echo "
          </a>
        </div>
      </div>
    ";
        }
        // line 187
        echo "  </div>
  ";
        // line 188
        echo ($context["content_bottom"] ?? null);
        echo "
</div>


    ";
        // line 192
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 195
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
\$('form').on('submit', function(e) {
  e.preventDefault();
  
  \$.ajax({
    url: '";
        // line 201
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
        return array (  388 => 201,  379 => 195,  373 => 192,  366 => 188,  363 => 187,  355 => 182,  351 => 181,  344 => 177,  341 => 176,  338 => 175,  331 => 171,  325 => 168,  320 => 165,  317 => 164,  315 => 163,  310 => 162,  308 => 113,  306 => 112,  303 => 111,  300 => 110,  296 => 108,  285 => 99,  281 => 97,  278 => 96,  267 => 91,  264 => 90,  244 => 88,  242 => 87,  238 => 86,  231 => 85,  226 => 84,  222 => 82,  213 => 78,  206 => 77,  203 => 76,  197 => 73,  194 => 72,  192 => 71,  187 => 70,  184 => 69,  182 => 68,  177 => 67,  174 => 66,  170 => 64,  164 => 61,  161 => 60,  158 => 59,  136 => 57,  134 => 56,  131 => 55,  128 => 54,  125 => 53,  119 => 50,  116 => 49,  114 => 48,  111 => 47,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/redeem.twig", "");
    }
}
