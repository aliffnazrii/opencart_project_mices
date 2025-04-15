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
class __TwigTemplate_e281295cbf4fe488dd9aeac034d06de6aa0ea3fcc565fd8d82645ef7c50c4b84 extends \Twig\Template
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
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 15
            echo ($context["text_success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        &times;
      </button>
    </div>
  ";
        }
        // line 21
        echo "  ";
        if (($context["error"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i>
      ";
            // line 24
            echo ($context["error"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        &times;
      </button>
    </div>
  ";
        }
        // line 30
        echo "  <div class=\"row\">
    ";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 32
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 33
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 34
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 35
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 40
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 44)) {
            // line 45
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 46
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 46);
                echo "\">
            ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "refineTitle"], "method", false, false, false, 47)) {
                    // line 48
                    echo "              <h3 class=\"refine-title title\">
                ";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "refineTitleText"], "method", false, false, false, 49);
                    echo "
              </h3>
            ";
                }
                // line 52
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 52), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 52) == "carousel")) {
                    // line 53
                    echo "              <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => " subcategoriesItemsPerRow"], "method", false, false, false, 53), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "getJs", [], "method", false, false, false, 53), 1 => " subcategoriesCarouselStyle"], "method", false, false, false, 53), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "'>
                <div class=\"swiper-container\" ";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 54)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                  <div
                  class=\"swiper-wrapper\">
                    ";
                } else {
                    // line 58
                    echo "                    <div class=\"refine-items\">
                    ";
                }
                // line 60
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 61
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 61) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 62);
                    echo "\">
                          ";
                    // line 63
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 63) != "links")) {
                        // line 64
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 64);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 64)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 64);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 64);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 64);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 64);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 64);
                        echo "\" />
                          ";
                    }
                    // line 66
                    echo "                          <span class=\"refine-name\">
                            ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 72) != "carousel")) {
                    // line 73
                    echo "                    </div>
                ";
                } else {
                    // line 75
                    echo "                  </div>
                </div>
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
            ";
                }
                // line 84
                echo "          </div>
        ";
            }
            // line 86
            echo "      ";
        }
        // line 87
        echo "      <div class=\"main-products-wrapper\">
        ";
        // line 88
        if (($context["products"] ?? null)) {
            // line 89
            echo "          <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 89), "get", [0 => "globalProductView"], "method", false, false, false, 89);
            echo "\">
            ";
            // line 90
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "globalProductView"], "method", false, false, false, 90);
            // line 91
            echo "            ";
            $this->loadTemplate("journal3/template/journal3/voucher_card.twig", "journal3/template/account/redeem.twig", 91)->display($context);
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "              <div id=\"voucherModal";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "code", [], "any", false, false, false, 93);
                echo "\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                        &times;
                      </button>
                      <h4 class=\"modal-title\">
                        Voucher Details
                      </h4>
                    </div>
          <style>
              .voucher-modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1050;
              }

              .voucher-modal-content {
                background: #fff;
                width: 90%;
                max-width: 800px;
                height: auto;
                max-height: 90vh;
                margin: 5vh auto;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                animation: slideUp 0.3s ease-out;
              }

              @keyframes slideUp {
                from { transform: translateY(20px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
              }

              .modal-header {
                padding: 15px 20px;
                border-bottom: 1px solid #eee;
                background: #f8f8f8;
                display: flex;
                justify-content: space-between;
                align-items: center;
              }

              .modal-title {
                margin: 0;
                font-size: 1.25rem;
                font-weight: 600;
                color: #333;
              }

              .close {
                font-size: 1.5rem;
                font-weight: bold;
                color: #000;
                opacity: 0.5;
                cursor: pointer;
                transition: all 0.2s;
              }

              .close:hover {
                opacity: 1;
              }

              .modal-body {
                padding: 20px;
                overflow-y: auto;
              }

              .voucher-detail-card {
                display: flex;
                flex-direction: column;
                background: #fff;
                border: 1px solid #eee;
                border-radius: 8px;
                margin-bottom: 20px;
                overflow: hidden;
              }

              @media (min-width: 768px) {
                .voucher-detail-card {
                  flex-direction: row;
                }
              }

              .voucher-detail-left {
                background: #f7cf55;
                padding: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
              }

              @media (min-width: 768px) {
                .voucher-detail-left {
                  width: 40%;
                }
              }

              .detail-amount {
                font-size: 2rem;
                font-weight: bold;
                color: #fff;
                margin-bottom: 10px;
              }

              .detail-code {
                font-size: 1rem;
                color: #fff;
                background: rgba(255,255,255,0.2);
                padding: 5px 10px;
                border-radius: 4px;
              }

              .voucher-detail-right {
                padding: 20px;
              }

              .detail-name {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 10px;
                color: #333;
              }

              .detail-validity {
                font-size: 0.875rem;
                color: #666;
                margin-bottom: 15px;
              }

              .modal-footer {
                padding: 15px 20px;
                border-top: 1px solid #eee;
                background: #f8f8f8;
                text-align: right;
              }

              .btn {
                display: inline-block;
                padding: 8px 16px;
                font-size: 0.875rem;
                border-radius: 4px;
                cursor: pointer;
                transition: all 0.2s;
              }

              .btn-default {
                background: #f7cf55;
                color: #fff;
                border: none;
              }

              .btn-default:hover {
                background: #d7b911;
              }


      </style>
                    <div class=\"modal-body\">
                      <div class=\"voucher-container\">
                        <div class=\"voucher-grid\">
                          <div class=\"voucher-card\">
                            <div class=\"voucher-left\">
                              <div class=\"discount-amount\">
                                ";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 266);
                echo "
                              </div>
                              <div class=\"discount-type\">
                                ";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["product"], "discount_type", [], "any", false, false, false, 269);
                echo "
                              </div>
                            </div>
                            <div class=\"voucher-right\">
                              <div class=\"voucher-title\">
                                ";
                // line 274
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 274);
                echo "
                              </div>
                              <div class=\"voucher-validity\">
                                Valid until:
                                ";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 278);
                echo "
                              </div>
                              <div class=\"voucher-terms\">
                                ";
                // line 281
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 281);
                echo "
                              </div>
                              <button class=\"claim-button\">
                                Claim Voucher
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "          </div>
          <div class=\"row pagination-results\">
            <div class=\"col-sm-6 text-left\">
              ";
            // line 303
            echo ($context["pagination"] ?? null);
            echo "
            </div>
            <div class=\"col-sm-6 text-right\">
              ";
            // line 306
            echo ($context["results"] ?? null);
            echo "
            </div>
          </div>
        ";
        }
        // line 310
        echo "        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 311
            echo "          <p>
            ";
            // line 312
            echo ($context["text_empty"] ?? null);
            echo "
          </p>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <a href=\"";
            // line 316
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 317
            echo ($context["button_continue"] ?? null);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 322
        echo "      </div>
      ";
        // line 323
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 325
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 328
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
\$('form').on('submit', function(e) {
  e.preventDefault();
  
  \$.ajax({
    url: '";
        // line 334
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
//--></script>
";
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
        return array (  576 => 334,  567 => 328,  561 => 325,  556 => 323,  553 => 322,  545 => 317,  541 => 316,  534 => 312,  531 => 311,  528 => 310,  521 => 306,  515 => 303,  510 => 300,  485 => 281,  479 => 278,  472 => 274,  464 => 269,  458 => 266,  281 => 93,  276 => 92,  273 => 91,  271 => 90,  266 => 89,  264 => 88,  261 => 87,  258 => 86,  254 => 84,  243 => 75,  239 => 73,  236 => 72,  225 => 67,  222 => 66,  202 => 64,  200 => 63,  196 => 62,  189 => 61,  184 => 60,  180 => 58,  171 => 54,  164 => 53,  161 => 52,  155 => 49,  152 => 48,  150 => 47,  145 => 46,  142 => 45,  140 => 44,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  105 => 32,  101 => 31,  98 => 30,  89 => 24,  85 => 22,  82 => 21,  73 => 15,  69 => 13,  67 => 12,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/redeem.twig", "");
    }
}
