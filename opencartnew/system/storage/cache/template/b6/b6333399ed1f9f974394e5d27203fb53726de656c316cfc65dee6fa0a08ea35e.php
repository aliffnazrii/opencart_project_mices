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

/* journal3/template/product/product.twig */
class __TwigTemplate_ddfcca1479053a3d3f3217ae308e6638257f196cfe6358983a920215c33df12e extends \Twig\Template
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
        $context["stylePrefix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [0 => "quickview"], "method", false, false, false, 1)) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["optionPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionPrice")], "method", false, false, false, 2);
        // line 3
        $context["direction"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "right"))) ? ("vertical") : ("horizontal"));
        // line 4
        $context["carousel"] = ((($context["direction"] ?? null) == "vertical") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesCarousel")], "method", false, false, false, 4));
        // line 5
        $context["carouselOptions"] = ["slidesPerView" => "auto", "spaceBetween" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", false, false, false, 7), 0)) : (0)), "direction" =>         // line 8
($context["direction"] ?? null)];
        // line 10
        $context["galleryOptions"] = ["thumbWidth" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "image_dimensions_popup_thumb.width"], "method", false, false, false, 11), "thumbConHeight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "image_dimensions_popup_thumb.height"], "method", false, false, false, 12), "addClass" => "lg-product-images", "mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryMode")], "method", false, false, false, 14), "download" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryDownload")], "method", false, false, false, 15), "fullScreen" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryFullScreen")], "method", false, false, false, 16)];
        // line 18
        $context["quickviewExpand"] = ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 18) || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18) > 0) && ($context["description"] ?? null)) && (twig_length_filter($this->env, ($context["description"] ?? null)) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18))))) ? ("no-expand") : (""));
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isDescriptionEmpty", [0 => ($context["description"] ?? null)], "method", false, false, false, 19)) {
            // line 20
            echo "  ";
            $context["description"] = "";
        }
        // line 22
        echo ($context["header"] ?? null);
        echo "
";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 23), "isPopup", [], "method", false, false, false, 23)) {
            // line 24
            echo "  <ul class=\"breadcrumb\">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 26
                echo "      <li>
        <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
                echo "\">
          ";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
                echo "
        </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  </ul>
  ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "pageTitlePosition"], "method", false, false, false, 33) == "top")) {
                // line 34
                echo "    <h1 class=\"title page-title\">
      <span>
        ";
                // line 36
                echo ($context["heading_title"] ?? null);
                echo "
      </span>
    </h1>
  ";
            }
            // line 40
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 40);
            echo "

  <div id=\"product-product\" class=\"container\">
    <div class=\"row\">
      ";
            // line 44
            echo ($context["column_left"] ?? null);
            echo "
      <div id=\"content\" class=\"";
            // line 45
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 47
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 48
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "isPopup", [0 => "options"], "method", false, false, false, 48)) {
            // line 49
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "pageTitlePosition"], "method", false, false, false, 49) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 49), "isPopup", [0 => "quickview"], "method", false, false, false, 49))) {
                // line 50
                echo "          <h1 class=\"title page-title\">
            ";
                // line 51
                echo ($context["heading_title"] ?? null);
                echo "
          </h1>
        ";
            }
            // line 54
            echo "      ";
        }
        // line 55
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 56
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 57
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 58
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 59
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 55) . " ") .         // line 60
($context["product_exclude_classes"] ?? null));
        // line 61
        echo "
      ";
        // line 63
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 64
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 64), "isPopup", [0 => "options"], "method", false, false, false, 64)) {
            // line 65
            echo "          <div class=\"product-left\">
            <div class=\"product-image direction-";
            // line 66
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 66), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 66);
            echo "\">
              <div class=\"swiper main-image\" data-options='";
            // line 67
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 67), "getJs", [], "method", false, false, false, 67), 1 => (($context["stylePrefix"] ?? null) . " ImageCarouselStyle")], "method", false, false, false, 67), twig_constant(" JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 67)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo " style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 67);
                echo "px)\" ";
            }
            echo ">
                <div class=\"swiper-container\" ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 68)) {
                echo " dir=\"rtl\" ";
            }
            echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            // line 70
            $context["gallery"] = [];
            // line 71
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 72
                echo "                      ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 72), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 72), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 73
                echo "                      <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 73), "isPopup", [], "method", false, false, false, 73) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 73))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73);
                    echo "\" ";
                }
                echo ">
                        <img src=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 74);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 74)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 74);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 74);
                    echo " 2x\" ";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 74);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 74);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 74);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                    echo " loading=\"lazy\" ";
                }
                echo " />
                      </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                  </div>
                </div>
                <div class=\"swiper-controls\">
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
                ";
            // line 86
            if (($context["product_labels"] ?? null)) {
                // line 87
                echo "                  <div class=\"product-labels\">
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 89
                    echo "                      <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 89);
                    echo "\">
                        <b>
                          ";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 91);
                    echo "
                        </b>
                      </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                  </div>
                ";
            }
            // line 97
            echo "              </div>
              ";
            // line 98
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 98), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 98))) {
                // line 99
                echo "                ";
                if (($context["carousel"] ?? null)) {
                    // line 100
                    echo "                  <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo " style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 100), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 100);
                        echo "px\" ";
                    }
                    echo ">
                    <div class=\"swiper-container\" ";
                    // line 101
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 101)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                      <div class=\"swiper-wrapper\">
                        ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 104
                        echo "                          <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 104);
                        echo "\">
                            <img src=\"";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 105);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 105)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 105);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 105);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 105);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 105);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105)) {
                            echo " loading=\"lazy\" ";
                        }
                        echo " />
                          </div>
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                      </div>
                    </div>
                    <div class=\"swiper-buttons\">
                      <div class=\"swiper-button-prev\"></div>
                      <div class=\"swiper-button-next\"></div>
                    </div>
                    <div class=\"swiper-pagination\"></div>
                  </div>
                ";
                } else {
                    // line 117
                    echo "                  <div class=\"additional-images\">
                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 119
                        echo "                      <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 119);
                        echo "\">
                        <img src=\"";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 120);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 120);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 120);
                        echo "\" />
                      </div>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                  </div>
                ";
                }
                // line 125
                echo "              ";
            }
            // line 126
            echo "            </div>
            ";
            // line 127
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 127), "isPopup", [], "method", false, false, false, 127) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 127), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 127))) {
                // line 128
                echo "              <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
                echo "'></div>
            ";
            }
            // line 130
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 130), "isPopup", [0 => "options"], "method", false, false, false, 130)) {
                // line 131
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 131)) {
                    // line 132
                    echo "                <div class=\"product-blocks blocks-image\">
                  ";
                    // line 133
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 133));
                    echo "
                </div>
              ";
                }
                // line 136
                echo "            ";
            }
            // line 137
            echo "            ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 137), "isPopup", [0 => "quickview"], "method", false, false, false, 137)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "quickviewDescription"], "method", false, false, false, 137)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 137) == "image"))) {
                // line 138
                echo "              <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">
                    ";
                // line 141
                echo ($context["description"] ?? null);
                echo "
                  </div>
                  ";
                // line 143
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 143), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 143)) {
                    // line 144
                    echo "                    <div class=\"block-expand-overlay\">
                      <a class=\"block-expand btn\"></a>
                    </div>
                  ";
                }
                // line 148
                echo "                </div>
              </div>
            ";
            }
            // line 151
            echo "            ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 151), "isPopup", [], "method", false, false, false, 151)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 151), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 151) == "image"))) {
                // line 152
                echo "              <div class=\"tags\">
                <span class=\"tags-title\">
                  ";
                // line 154
                echo ($context["text_tags"] ?? null);
                echo "
                </span>
                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 157
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 157);
                    echo "\">
                    ";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 158);
                    echo "
                  </a>
                  ";
                    // line 160
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                    <b>
                      ,
                    </b>
                  ";
                    }
                    // line 165
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "              </div>
            ";
            }
            // line 168
            echo "          </div>
        ";
        }
        // line 170
        echo "
        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
            ";
        // line 173
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 173), "isPopup", [0 => "options"], "method", false, false, false, 173)) {
            // line 174
            echo "              <div class=\"title page-title\">
                ";
            // line 175
            echo ($context["heading_title"] ?? null);
            echo "
              </div>
              ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 177)) {
                // line 178
                echo "                <div class=\"product-blocks blocks-top\">
                  ";
                // line 179
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 179));
                echo "
                </div>
              ";
            }
            // line 182
            echo "            ";
        }
        // line 183
        echo "
            ";
        // line 198
        echo "
            ";
        // line 199
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 199), "isPopup", [0 => "options"], "method", false, false, false, 199) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 199)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 199) == "default"))) {
            // line 200
            echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
            // line 202
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 202), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 202)) {
                // line 203
                echo "                    <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\">
                      <b>
                        ";
                // line 205
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 205);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 209
                echo ($context["stock"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 213
            echo "                  ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 213), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 213)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 213), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 213) == "list"))) {
                // line 214
                echo "                    <li class=\"product-manufacturer\">
                      <b>
                        ";
                // line 216
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 216), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 216);
                echo "
                        :
                      </b>
                      <a href=\"";
                // line 219
                echo ($context["manufacturers"] ?? null);
                echo "\">
                        ";
                // line 220
                echo ($context["manufacturer"] ?? null);
                echo "
                      </a>
                    </li>
                  ";
            }
            // line 224
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 224), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 224) && ($context["reward"] ?? null))) {
                // line 225
                echo "                    <li class=\"product-reward\">
                      <b>
                        ";
                // line 227
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 227), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 227);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 231
                echo ($context["reward"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 235
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 235), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 235) && ($context["model"] ?? null))) {
                // line 236
                echo "                    <li class=\"product-model\">
                      <b>
                        ";
                // line 238
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 238), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 238);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 242
                echo ($context["model"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 246
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 246), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 246) && ($context["product_weight"] ?? null))) {
                // line 247
                echo "                    <li class=\"product-weight\">
                      <b>
                        ";
                // line 249
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 249), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 249);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 253
                echo ($context["product_weight"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 257
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 257), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 257) && ($context["product_dimension"] ?? null))) {
                // line 258
                echo "                    <li class=\"product-dimension\">
                      <b>
                        ";
                // line 260
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 260), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 260);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 264
                echo ($context["product_length"] ?? null);
                echo "
                        x
                        ";
                // line 266
                echo ($context["product_width"] ?? null);
                echo "
                        x
                        ";
                // line 268
                echo ($context["product_height"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 272
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 272), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 272) && ($context["product_sku"] ?? null))) {
                // line 273
                echo "                    <li class=\"product-sku\">
                      <b>
                        ";
                // line 275
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 275), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 275);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 279
                echo ($context["product_sku"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 283
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 283), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 283) && ($context["product_upc"] ?? null))) {
                // line 284
                echo "                    <li class=\"product-upc\">
                      <b>
                        ";
                // line 286
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 286), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 286);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 290
                echo ($context["product_upc"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 294
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 294), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 294) && ($context["product_ean"] ?? null))) {
                // line 295
                echo "                    <li class=\"product-ean\">
                      <b>
                        ";
                // line 297
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 297), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 297);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 301
                echo ($context["product_ean"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 305
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 305), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 305) && ($context["product_jan"] ?? null))) {
                // line 306
                echo "                    <li class=\"product-jan\">
                      <b>
                        ";
                // line 308
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 308), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 308);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 312
                echo ($context["product_jan"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 316
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 316) && ($context["product_isbn"] ?? null))) {
                // line 317
                echo "                    <li class=\"product-isbn\">
                      <b>
                        ";
                // line 319
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 319), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 319);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 323
                echo ($context["product_isbn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 327
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 327), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 327) && ($context["product_mpn"] ?? null))) {
                // line 328
                echo "                    <li class=\"product-mpn\">
                      <b>
                        ";
                // line 330
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 330), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 330);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 334
                echo ($context["product_mpn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 338
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 338), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 338) && ($context["product_location"] ?? null))) {
                // line 339
                echo "                    <li class=\"product-location\">
                      <b>
                        ";
                // line 341
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 341), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 341);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 345
                echo ($context["product_location"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 349
            echo "                </ul>
                ";
            // line 350
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 350)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 350) == "image"))) {
                // line 351
                echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                // line 352
                echo ($context["manufacturers"] ?? null);
                echo "\">
                      ";
                // line 353
                if (($context["manufacturer_image"] ?? null)) {
                    // line 354
                    echo "                        <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo " srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 354), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 354);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 354), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 354);
                    echo "\" />
                      ";
                }
                // line 356
                echo "                      <span>
                        ";
                // line 357
                echo ($context["manufacturer"] ?? null);
                echo "
                      </span>
                    </a>
                  </div>
                ";
            }
            // line 362
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 362), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 362)) {
                // line 363
                echo "                  <div class=\"custom-stats\">
                    ";
                // line 364
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 364), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 364)) {
                    // line 365
                    echo "                      <div class=\"product-sold\">
                        <b>
                          ";
                    // line 367
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 367), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 367);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 371
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 371), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 371)) {
                    // line 372
                    echo "                      <div class=\"product-views\">
                        <b>
                          ";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 374), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 374);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 378
                echo "                  </div>
                ";
            }
            // line 380
            echo "              </div>
            ";
        }
        // line 382
        echo "
            ";
        // line 383
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 383), "isPopup", [], "method", false, false, false, 383))) {
            // line 384
            echo "              <div class=\"rating rating-page\">
                <div class=\"rating-stars\">
                  ";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 387
                echo "                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 388
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                } else {
                    // line 392
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-1x\"></i>
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                }
                // line 397
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 398
            echo "                </div>
                <div class=\"review-links\">
                  <a>
                    ";
            // line 401
            echo ($context["reviews"] ?? null);
            echo "
                  </a>
                  <b>
                    ";
            // line 404
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 404), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 404);
            echo "
                  </b>
                  <a>
                    ";
            // line 407
            echo ($context["text_write"] ?? null);
            echo "
                  </a>
                </div>
              </div>
            ";
        }
        // line 412
        echo "
            ";
        // line 413
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 413), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 413), "isPopup", [], "method", false, false, false, 413)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 413))) {
            // line 414
            echo "              <div class=\"countdown-wrapper\">
                ";
            // line 415
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 415)) {
                // line 416
                echo "                  <h5 class=\"countdown-title title\">
                    ";
                // line 417
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 417), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 417);
                echo "
                  </h5>
                ";
            }
            // line 420
            echo "                <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 424
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 424), "get", [0 => "countdownDay"], "method", false, false, false, 424);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 430
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 430), "get", [0 => "countdownHour"], "method", false, false, false, 430);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 436
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 436), "get", [0 => "countdownMin"], "method", false, false, false, 436);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 442
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 442), "get", [0 => "countdownSec"], "method", false, false, false, 442);
            echo "
                    </span>
                  </div>
                </div>
              </div>
            ";
        }
        // line 448
        echo "
            ";
        // line 449
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 449), "isPopup", [0 => "options"], "method", false, false, false, 449))) {
            // line 450
            echo "              <div class=\"product-price-group\">
                <div class=\"price-wrapper\">
                  <div class=\"price-group\">
                    ";
            // line 453
            if ( !($context["special"] ?? null)) {
                // line 454
                echo "                      <div class=\"product-price\">
                        ";
                // line 455
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            } else {
                // line 458
                echo "                      <div class=\"product-price-new\">
                        ";
                // line 459
                echo ($context["special"] ?? null);
                echo "
                      </div>
                      <div class=\"product-price-old\">
                        ";
                // line 462
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            }
            // line 465
            echo "                  </div>
                  ";
            // line 466
            if (($context["tax"] ?? null)) {
                // line 467
                echo "                    <div class=\"product-tax\">
                      ";
                // line 468
                echo ($context["text_tax"] ?? null);
                echo "
                      ";
                // line 469
                echo ($context["tax"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 472
            echo "                  ";
            if (($context["points"] ?? null)) {
                // line 473
                echo "                    <div class=\"product-points\">
                      ";
                // line 474
                echo ($context["text_points"] ?? null);
                echo "
                      ";
                // line 475
                echo ($context["points"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 478
            echo "
                  ";
            // line 479
            if (($context["discounts"] ?? null)) {
                // line 480
                echo "                    <div class=\"discounts\">
                      ";
                // line 481
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 482
                    echo "                        <div class=\"product-discount\">
                          ";
                    // line 483
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 483);
                    echo "
                          ";
                    // line 484
                    echo ($context["text_discount"] ?? null);
                    echo "
                          ";
                    // line 485
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 485);
                    echo "
                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 488
                echo "                    </div>
                  ";
            }
            // line 490
            echo "                </div>
                ";
            // line 491
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 491), "isPopup", [0 => "options"], "method", false, false, false, 491) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 491), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 491)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 491), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 491) == "price"))) {
                // line 492
                echo "                  <div class=\"product-stats\">
                    <ul class=\"list-unstyled\">
                      ";
                // line 494
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 494), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 494)) {
                    // line 495
                    echo "                        <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\">
                          <b>
                            ";
                    // line 497
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 497), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 497);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 501
                    echo ($context["stock"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 505
                echo "                      ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 505), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 505)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 505), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 505) == "list"))) {
                    // line 506
                    echo "                        <li class=\"product-manufacturer\">
                          <b>
                            ";
                    // line 508
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 508), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 508);
                    echo "
                            :
                          </b>
                          <a href=\"";
                    // line 511
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                            ";
                    // line 512
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </a>
                        </li>
                      ";
                }
                // line 516
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 516), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 516) && ($context["reward"] ?? null))) {
                    // line 517
                    echo "                        <li class=\"product-reward\">
                          <b>
                            ";
                    // line 519
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 519), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 519);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 523
                    echo ($context["reward"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 527
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 527), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 527) && ($context["model"] ?? null))) {
                    // line 528
                    echo "                        <li class=\"product-model\">
                          <b>
                            ";
                    // line 530
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 530);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 534
                    echo ($context["model"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 538
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 538), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 538) && ($context["product_weight"] ?? null))) {
                    // line 539
                    echo "                        <li class=\"product-weight\">
                          <b>
                            ";
                    // line 541
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 541), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 541);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 545
                    echo ($context["product_weight"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 549
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 549), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 549) && ($context["product_dimension"] ?? null))) {
                    // line 550
                    echo "                        <li class=\"product-dimension\">
                          <b>
                            ";
                    // line 552
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 552);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 556
                    echo ($context["product_length"] ?? null);
                    echo "
                            x
                            ";
                    // line 558
                    echo ($context["product_width"] ?? null);
                    echo "
                            x
                            ";
                    // line 560
                    echo ($context["product_height"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 564
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 564), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 564) && ($context["product_sku"] ?? null))) {
                    // line 565
                    echo "                        <li class=\"product-sku\">
                          <b>
                            ";
                    // line 567
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 567), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 567);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 571
                    echo ($context["product_sku"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 575
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 575), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 575) && ($context["product_upc"] ?? null))) {
                    // line 576
                    echo "                        <li class=\"product-upc\">
                          <b>
                            ";
                    // line 578
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 578), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 578);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 582
                    echo ($context["product_upc"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 586
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 586), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 586) && ($context["product_ean"] ?? null))) {
                    // line 587
                    echo "                        <li class=\"product-ean\">
                          <b>
                            ";
                    // line 589
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 589), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 589);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 593
                    echo ($context["product_ean"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 597
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 597), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 597) && ($context["product_jan"] ?? null))) {
                    // line 598
                    echo "                        <li class=\"product-jan\">
                          <b>
                            ";
                    // line 600
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 600), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 600);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 604
                    echo ($context["product_jan"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 608
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 608), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 608) && ($context["product_isbn"] ?? null))) {
                    // line 609
                    echo "                        <li class=\"product-isbn\">
                          <b>
                            ";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 611), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 611);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 615
                    echo ($context["product_isbn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 619
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 619), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 619) && ($context["product_mpn"] ?? null))) {
                    // line 620
                    echo "                        <li class=\"product-mpn\">
                          <b>
                            ";
                    // line 622
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 622), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 622);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 626
                    echo ($context["product_mpn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 630
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 630), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 630) && ($context["product_location"] ?? null))) {
                    // line 631
                    echo "                        <li class=\"product-location\">
                          <b>
                            ";
                    // line 633
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 633), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 633);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 637
                    echo ($context["product_location"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 641
                echo "                    </ul>
                    ";
                // line 642
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 642), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 642)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 642), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 642) == "image"))) {
                    // line 643
                    echo "                      <div class=\"brand-image product-manufacturer\">
                        <a href=\"";
                    // line 644
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                          ";
                    // line 645
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 646
                        echo "                            <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo " srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 646), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 646);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 646), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 646);
                        echo "\" />
                          ";
                    }
                    // line 648
                    echo "                          <span>
                            ";
                    // line 649
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                // line 654
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 654), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 654)) {
                    // line 655
                    echo "                      <div class=\"custom-stats\">
                        ";
                    // line 656
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 656), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 656)) {
                        // line 657
                        echo "                          <div class=\"product-sold\">
                            <b>
                              ";
                        // line 659
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 659), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 659);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 663
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 663), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 663)) {
                        // line 664
                        echo "                          <div class=\"product-views\">
                            <b>
                              ";
                        // line 666
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 666), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 666);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 670
                    echo "                      </div>
                    ";
                }
                // line 672
                echo "                  </div>
                ";
            }
            // line 674
            echo "              </div>
            ";
        }
        // line 676
        echo "
            ";
        // line 677
        if (($context["options"] ?? null)) {
            // line 678
            echo "              <div class=\"product-options\">
                <h3 class=\"options-title title\">
                  ";
            // line 680
            echo ($context["text_option"] ?? null);
            echo "
                </h3>
                ";
            // line 682
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 683
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 683) == "select")) {
                    // line 684
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 684)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 684);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 684), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 684)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 685
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 685);
                    echo "\">
                        ";
                    // line 686
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 686);
                    echo "
                      </label>
                      <select name=\"option[";
                    // line 688
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 688);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 688);
                    echo "\" class=\"form-control\">
                        <option value=\"\">
                          ";
                    // line 690
                    echo ($context["text_select"] ?? null);
                    echo "
                        </option>
                        ";
                    // line 692
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 692));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 693
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 693);
                        echo "\">
                            ";
                        // line 694
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 694);
                        echo "
                            ";
                        // line 695
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 695) && ($context["optionPrice"] ?? null))) {
                            // line 696
                            echo "                              (
                              ";
                            // line 697
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 697);
                            echo "
                              ";
                            // line 698
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 698);
                            echo "
                              )
                            ";
                        }
                        // line 701
                        echo "                          </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 703
                    echo "                      </select>
                    </div>
                  ";
                }
                // line 706
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 706) == "radio")) {
                    // line 707
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 707)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 707);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 707), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 707)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 709
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 709);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 711
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 711);
                    echo "\">
                        ";
                    // line 712
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 712));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 713
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 715
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 715);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 715);
                        echo "\" />
                              ";
                        // line 716
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 716)) {
                            // line 717
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 717), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 717);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 717), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 717);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 717);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 717);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 717) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 717);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 717);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 717), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 717);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 717);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 717) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 717);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 717);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 719
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 720
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 720);
                        echo "
                                ";
                        // line 721
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 721) && ($context["optionPrice"] ?? null))) {
                            // line 722
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 724
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 724);
                            echo "
                                    ";
                            // line 725
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 725);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 729
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 733
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 736
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 736) == "checkbox")) {
                    // line 737
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 737)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 737);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 737), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 737)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 739
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 739);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 741
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 741);
                    echo "\">
                        ";
                    // line 742
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 742));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 743
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 745
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 745);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 745);
                        echo "\" />
                              ";
                        // line 746
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 746)) {
                            // line 747
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 747), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 747);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 747), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 747);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 747);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 747);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 747) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 747);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 747);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 747), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 747);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 747);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 747) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 747);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 747);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 749
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 750
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 750);
                        echo "
                                ";
                        // line 751
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 751) && ($context["optionPrice"] ?? null))) {
                            // line 752
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 754
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 754);
                            echo "
                                    ";
                            // line 755
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 755);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 759
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 763
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 766
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 766) == "text")) {
                    // line 767
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 767)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 767);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 768);
                    echo "\">
                        ";
                    // line 769
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 769);
                    echo "
                      </label>
                      <input type=\"text\" name=\"option[";
                    // line 771
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 771);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 771);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 771);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 771);
                    echo "\" class=\"form-control\" />
                    </div>
                  ";
                }
                // line 774
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 774) == "textarea")) {
                    // line 775
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 775)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 775);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 776
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 776);
                    echo "\">
                        ";
                    // line 777
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 777);
                    echo "
                      </label>
                      <textarea name=\"option[";
                    // line 779
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 779);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 779);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 779);
                    echo "\" class=\"form-control\">
                        ";
                    // line 780
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 780);
                    echo "
                      </textarea>
                    </div>
                  ";
                }
                // line 784
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 784) == "file")) {
                    // line 785
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 785)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 785);
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 787
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 787);
                    echo "
                      </label>
                      <button type=\"button\" id=\"button-upload";
                    // line 789
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 789);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                        <i class=\"fa fa-upload\"></i>
                        ";
                    // line 791
                    echo ($context["button_upload"] ?? null);
                    echo "
                      </button>
                      <input type=\"hidden\" name=\"option[";
                    // line 793
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 793);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 793);
                    echo "\" />
                    </div>
                  ";
                }
                // line 796
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 796) == "date")) {
                    // line 797
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 797)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 797);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 798
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 798);
                    echo "\">
                        ";
                    // line 799
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 799);
                    echo "
                      </label>
                      <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 802
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 802);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 802);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 802);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                          <button class=\"btn btn-default\" type=\"button\">
                            <i class=\"fa fa-calendar\"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  ";
                }
                // line 811
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 811) == "datetime")) {
                    // line 812
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 812)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 812);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 813
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 813);
                    echo "\">
                        ";
                    // line 814
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 814);
                    echo "
                      </label>
                      <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 817
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 817);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 817);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 817);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\">
                            <i class=\"fa fa-calendar\"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  ";
                }
                // line 826
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 826) == "time")) {
                    // line 827
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 827)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 827);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 828
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 828);
                    echo "\">
                        ";
                    // line 829
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 829);
                    echo "
                      </label>
                      <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 832
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 832);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 832);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 832);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\">
                            <i class=\"fa fa-calendar\"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  ";
                }
                // line 841
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 842
            echo "              </div>
            ";
        }
        // line 844
        echo "
            ";
        // line 845
        if (($context["recurrings"] ?? null)) {
            // line 846
            echo "              <h3 class=\"title recurring-title\">
                ";
            // line 847
            echo ($context["text_payment_recurring"] ?? null);
            echo "
              </h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">
                    ";
            // line 852
            echo ($context["text_select"] ?? null);
            echo "
                  </option>
                  ";
            // line 854
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 855
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 855);
                echo "\">
                      ";
                // line 856
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 856);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 859
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 863
        echo "
            ";
        // line 864
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 864), "get", [0 => "catalogCartStatus"], "method", false, false, false, 864) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 864), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 864)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 864), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 864)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 864), "isPopup", [], "method", false, false, false, 864)))) {
            // line 865
            echo "              <div class=\"button-group-page\">
                <div class=\"buttons-wrapper\">
                  <div class=\"stepper-group cart-group\">
                    ";
            // line 868
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 868), "get", [0 => "catalogCartStatus"], "method", false, false, false, 868)) {
                // line 869
                echo "                      <div class=\"stepper\">
                        <label class=\"control-label\" for=\"product-quantity\">
                          ";
                // line 871
                echo ($context["entry_qty"] ?? null);
                echo "
                        </label>
                        <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 873
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\" />
                        <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 874
                echo ($context["product_id"] ?? null);
                echo "\" />
                        <span>
                          <i class=\"fa fa-angle-up\"></i>
                          <i class=\"fa fa-angle-down\"></i>
                        </span>
                      </div>
                      <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 880
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 880), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 880) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 880), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 880))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 880), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 880);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo ">
                        <span class=\"btn-text\">
                          ";
                // line 882
                echo ($context["button_cart"] ?? null);
                echo "
                        </span>
                      </a>
                    ";
            }
            // line 886
            echo "                    ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 886), "isPopup", [], "method", false, false, false, 886))) {
                // line 887
                echo "                      <div class=\"extra-group\">
                        ";
                // line 888
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_extra_buttons"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 889
                    echo "                          <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 889);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 889)) . "ButtonDisplay")], "method", false, false, false, 889) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 889))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 889);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 889);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 889) == "quickbuy")) {
                        echo " data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 889) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 889), "href", [], "any", false, false, false, 889))) {
                        echo " href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 889), "href", [], "any", false, false, false, 889);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 889)], "method", false, false, false, 889);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\" ";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 889);
                    echo "</span>\">
                            <span class=\"btn-text\">
                              ";
                    // line 891
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 891);
                    echo "
                            </span>
                          </a>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 895
                echo "                      </div>
                    ";
            }
            // line 897
            echo "                  </div>

                  ";
            // line 899
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 899), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 899) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 899), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 899)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 899), "isPopup", [0 => "quickview"], "method", false, false, false, 899))) {
                // line 900
                echo "                    <div class=\"wishlist-compare\">
                      ";
                // line 901
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 901), "isPopup", [0 => "options"], "method", false, false, false, 901)) {
                    // line 902
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 902)) {
                        // line 903
                        echo "                          <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 903), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 903) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 903), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 903))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 903), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 903);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 905
                        echo ($context["button_wishlist"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 909
                    echo "
                        ";
                    // line 910
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 910), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 910)) {
                        // line 911
                        echo "                          <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 911), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 911) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 911), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 911))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 911), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 911);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 913
                        echo ($context["button_compare"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 917
                    echo "                      ";
                }
                // line 918
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 918), "isPopup", [0 => "quickview"], "method", false, false, false, 918)) {
                    // line 919
                    echo "                        <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 919), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 919) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 919), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 919))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 919), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 919);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 919), "get", [0 => "quickviewExtraText"], "method", false, false, false, 919);
                        echo "\" ";
                    }
                    echo ">
                          <span class=\"btn-text\">
                            ";
                    // line 921
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 921), "get", [0 => "quickviewExtraText"], "method", false, false, false, 921);
                    echo "
                          </span>
                        </a>
                      ";
                }
                // line 925
                echo "                    </div>
                  ";
            }
            // line 927
            echo "                </div>
              </div>
            ";
        }
        // line 930
        echo "
            ";
        // line 931
        if ((($context["minimum"] ?? null) > 1)) {
            // line 932
            echo "              <div class=\"minimum alert alert-info\">
                <i class=\"fa fa-info-circle\"></i>
                ";
            // line 934
            echo ($context["text_minimum"] ?? null);
            echo "
              </div>
            ";
        }
        // line 937
        echo "
            ";
        // line 938
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 938), "isPopup", [0 => "options"], "method", false, false, false, 938)) {
            // line 939
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 939)) {
                // line 940
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 940));
                echo "
              ";
            }
            // line 942
            echo "            ";
        }
        // line 943
        echo "          </div>
          ";
        // line 944
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 944), "isPopup", [0 => "options"], "method", false, false, false, 944)) {
            // line 945
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 945)) {
                // line 946
                echo "              <div class=\"product-blocks blocks-bottom\">
                ";
                // line 947
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 947));
                echo "
              </div>
            ";
            }
            // line 950
            echo "          ";
        }
        // line 951
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 951), "isPopup", [], "method", false, false, false, 951)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 951), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 951) == "details"))) {
            // line 952
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">
                ";
            // line 954
            echo ($context["text_tags"] ?? null);
            echo "
              </span>
              ";
            // line 956
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 957
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 957);
                echo "\">
                  ";
                // line 958
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 958);
                echo "
                </a>
                ";
                // line 960
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 960)) {
                    // line 961
                    echo "                  <b>
                    ,
                  </b>
                ";
                }
                // line 965
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 966
            echo "            </div>
          ";
        }
        // line 968
        echo "        </div>
      </div>

      ";
        // line 972
        echo "      ";
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 972), "isPopup", [0 => "quickview"], "method", false, false, false, 972)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 972), "get", [0 => "quickviewDescription"], "method", false, false, false, 972)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 972), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 972) == "default"))) {
            // line 973
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 976
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 978
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 978), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 978)) {
                // line 979
                echo "              <div class=\"block-expand-overlay\">
                <a class=\"block-expand btn\"></a>
              </div>
            ";
            }
            // line 983
            echo "          </div>
        </div>
      ";
        }
        // line 986
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 986), "isPopup", [0 => "options"], "method", false, false, false, 986)) {
            // line 987
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 987)) {
                // line 988
                echo "          <div class=\"product-blocks blocks-default\">
            ";
                // line 989
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 989));
                echo "
          </div>
        ";
            }
            // line 992
            echo "      ";
        }
        // line 993
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 993), "isPopup", [], "method", false, false, false, 993)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 993), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 993) == "default"))) {
            // line 994
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">
            ";
            // line 996
            echo ($context["text_tags"] ?? null);
            echo "
          </span>
          ";
            // line 998
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 999
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 999);
                echo "\">
              ";
                // line 1000
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 1000);
                echo "
            </a>
            ";
                // line 1002
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1002)) {
                    // line 1003
                    echo "              <b>
                ,
              </b>
            ";
                }
                // line 1007
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1008
            echo "        </div>
      ";
        }
        // line 1010
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1010), "isPopup", [], "method", false, false, false, 1010)) {
            // line 1011
            echo "        ";
            echo ($context["content_bottom"] ?? null);
            echo "
      </div>
      ";
            // line 1013
            echo ($context["column_right"] ?? null);
            echo "
    </div>
  </div>
";
        }
        // line 1017
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - \$('header').height() - 20 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items,.cart-badge').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items,.cart-badge').removeClass('count-zero');
        } else {
          parent.\$('#cart-items,.cart-badge').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }

        if (json['redirect']) {
          parent.location.href = json['redirect'];
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 1136
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1141
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1147
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 1215
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 1219
        echo ($context["product_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$review.closest('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - \$('header').height() - 20
      }, 200);
    }
  });
});
//--></script>
";
        // line 1274
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1274), "isPopup", [], "method", false, false, false, 1274)) {
            // line 1275
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 1275);
            echo "
";
        }
        // line 1277
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2978 => 1277,  2972 => 1275,  2970 => 1274,  2912 => 1219,  2905 => 1215,  2834 => 1147,  2825 => 1141,  2817 => 1136,  2696 => 1017,  2689 => 1013,  2683 => 1011,  2680 => 1010,  2676 => 1008,  2662 => 1007,  2656 => 1003,  2654 => 1002,  2649 => 1000,  2644 => 999,  2627 => 998,  2622 => 996,  2618 => 994,  2615 => 993,  2612 => 992,  2606 => 989,  2603 => 988,  2600 => 987,  2597 => 986,  2592 => 983,  2586 => 979,  2584 => 978,  2579 => 976,  2572 => 973,  2569 => 972,  2564 => 968,  2560 => 966,  2546 => 965,  2540 => 961,  2538 => 960,  2533 => 958,  2528 => 957,  2511 => 956,  2506 => 954,  2502 => 952,  2499 => 951,  2496 => 950,  2490 => 947,  2487 => 946,  2484 => 945,  2482 => 944,  2479 => 943,  2476 => 942,  2470 => 940,  2467 => 939,  2465 => 938,  2462 => 937,  2456 => 934,  2452 => 932,  2450 => 931,  2447 => 930,  2442 => 927,  2438 => 925,  2431 => 921,  2417 => 919,  2414 => 918,  2411 => 917,  2404 => 913,  2390 => 911,  2388 => 910,  2385 => 909,  2378 => 905,  2364 => 903,  2361 => 902,  2359 => 901,  2356 => 900,  2354 => 899,  2350 => 897,  2346 => 895,  2328 => 891,  2296 => 889,  2279 => 888,  2276 => 887,  2273 => 886,  2266 => 882,  2253 => 880,  2244 => 874,  2238 => 873,  2233 => 871,  2229 => 869,  2227 => 868,  2222 => 865,  2220 => 864,  2217 => 863,  2211 => 859,  2202 => 856,  2197 => 855,  2193 => 854,  2188 => 852,  2180 => 847,  2177 => 846,  2175 => 845,  2172 => 844,  2168 => 842,  2162 => 841,  2146 => 832,  2140 => 829,  2136 => 828,  2127 => 827,  2124 => 826,  2108 => 817,  2102 => 814,  2098 => 813,  2089 => 812,  2086 => 811,  2070 => 802,  2064 => 799,  2060 => 798,  2051 => 797,  2048 => 796,  2040 => 793,  2035 => 791,  2028 => 789,  2023 => 787,  2013 => 785,  2010 => 784,  2003 => 780,  1995 => 779,  1990 => 777,  1986 => 776,  1977 => 775,  1974 => 774,  1962 => 771,  1957 => 769,  1953 => 768,  1944 => 767,  1941 => 766,  1936 => 763,  1927 => 759,  1920 => 755,  1916 => 754,  1912 => 752,  1910 => 751,  1906 => 750,  1903 => 749,  1872 => 747,  1870 => 746,  1864 => 745,  1860 => 743,  1856 => 742,  1852 => 741,  1847 => 739,  1833 => 737,  1830 => 736,  1825 => 733,  1816 => 729,  1809 => 725,  1805 => 724,  1801 => 722,  1799 => 721,  1795 => 720,  1792 => 719,  1761 => 717,  1759 => 716,  1753 => 715,  1749 => 713,  1745 => 712,  1741 => 711,  1736 => 709,  1722 => 707,  1719 => 706,  1714 => 703,  1707 => 701,  1701 => 698,  1697 => 697,  1694 => 696,  1692 => 695,  1688 => 694,  1683 => 693,  1679 => 692,  1674 => 690,  1667 => 688,  1662 => 686,  1658 => 685,  1645 => 684,  1642 => 683,  1638 => 682,  1633 => 680,  1629 => 678,  1627 => 677,  1624 => 676,  1620 => 674,  1616 => 672,  1612 => 670,  1605 => 666,  1601 => 664,  1598 => 663,  1591 => 659,  1587 => 657,  1585 => 656,  1582 => 655,  1579 => 654,  1571 => 649,  1568 => 648,  1548 => 646,  1546 => 645,  1542 => 644,  1539 => 643,  1537 => 642,  1534 => 641,  1527 => 637,  1520 => 633,  1516 => 631,  1513 => 630,  1506 => 626,  1499 => 622,  1495 => 620,  1492 => 619,  1485 => 615,  1478 => 611,  1474 => 609,  1471 => 608,  1464 => 604,  1457 => 600,  1453 => 598,  1450 => 597,  1443 => 593,  1436 => 589,  1432 => 587,  1429 => 586,  1422 => 582,  1415 => 578,  1411 => 576,  1408 => 575,  1401 => 571,  1394 => 567,  1390 => 565,  1387 => 564,  1380 => 560,  1375 => 558,  1370 => 556,  1363 => 552,  1359 => 550,  1356 => 549,  1349 => 545,  1342 => 541,  1338 => 539,  1335 => 538,  1328 => 534,  1321 => 530,  1317 => 528,  1314 => 527,  1307 => 523,  1300 => 519,  1296 => 517,  1293 => 516,  1286 => 512,  1282 => 511,  1276 => 508,  1272 => 506,  1269 => 505,  1262 => 501,  1255 => 497,  1245 => 495,  1243 => 494,  1239 => 492,  1237 => 491,  1234 => 490,  1230 => 488,  1221 => 485,  1217 => 484,  1213 => 483,  1210 => 482,  1206 => 481,  1203 => 480,  1201 => 479,  1198 => 478,  1192 => 475,  1188 => 474,  1185 => 473,  1182 => 472,  1176 => 469,  1172 => 468,  1169 => 467,  1167 => 466,  1164 => 465,  1158 => 462,  1152 => 459,  1149 => 458,  1143 => 455,  1140 => 454,  1138 => 453,  1133 => 450,  1131 => 449,  1128 => 448,  1119 => 442,  1110 => 436,  1101 => 430,  1092 => 424,  1084 => 420,  1078 => 417,  1075 => 416,  1073 => 415,  1070 => 414,  1068 => 413,  1065 => 412,  1057 => 407,  1051 => 404,  1045 => 401,  1040 => 398,  1034 => 397,  1027 => 392,  1021 => 388,  1018 => 387,  1014 => 386,  1010 => 384,  1008 => 383,  1005 => 382,  1001 => 380,  997 => 378,  990 => 374,  986 => 372,  983 => 371,  976 => 367,  972 => 365,  970 => 364,  967 => 363,  964 => 362,  956 => 357,  953 => 356,  933 => 354,  931 => 353,  927 => 352,  924 => 351,  922 => 350,  919 => 349,  912 => 345,  905 => 341,  901 => 339,  898 => 338,  891 => 334,  884 => 330,  880 => 328,  877 => 327,  870 => 323,  863 => 319,  859 => 317,  856 => 316,  849 => 312,  842 => 308,  838 => 306,  835 => 305,  828 => 301,  821 => 297,  817 => 295,  814 => 294,  807 => 290,  800 => 286,  796 => 284,  793 => 283,  786 => 279,  779 => 275,  775 => 273,  772 => 272,  765 => 268,  760 => 266,  755 => 264,  748 => 260,  744 => 258,  741 => 257,  734 => 253,  727 => 249,  723 => 247,  720 => 246,  713 => 242,  706 => 238,  702 => 236,  699 => 235,  692 => 231,  685 => 227,  681 => 225,  678 => 224,  671 => 220,  667 => 219,  661 => 216,  657 => 214,  654 => 213,  647 => 209,  640 => 205,  630 => 203,  628 => 202,  624 => 200,  622 => 199,  619 => 198,  616 => 183,  613 => 182,  607 => 179,  604 => 178,  602 => 177,  597 => 175,  594 => 174,  592 => 173,  587 => 170,  583 => 168,  579 => 166,  565 => 165,  559 => 161,  557 => 160,  552 => 158,  547 => 157,  530 => 156,  525 => 154,  521 => 152,  518 => 151,  513 => 148,  507 => 144,  505 => 143,  500 => 141,  493 => 138,  490 => 137,  487 => 136,  481 => 133,  478 => 132,  475 => 131,  472 => 130,  464 => 128,  462 => 127,  459 => 126,  456 => 125,  452 => 123,  427 => 120,  422 => 119,  405 => 118,  402 => 117,  391 => 108,  354 => 105,  349 => 104,  332 => 103,  325 => 101,  314 => 100,  311 => 99,  309 => 98,  306 => 97,  302 => 95,  292 => 91,  284 => 89,  280 => 88,  277 => 87,  275 => 86,  264 => 77,  225 => 74,  216 => 73,  213 => 72,  195 => 71,  193 => 70,  186 => 68,  176 => 67,  170 => 66,  167 => 65,  165 => 64,  160 => 63,  157 => 61,  155 => 60,  154 => 59,  153 => 58,  152 => 57,  151 => 56,  149 => 55,  146 => 54,  140 => 51,  137 => 50,  134 => 49,  132 => 48,  127 => 47,  122 => 45,  118 => 44,  110 => 40,  103 => 36,  99 => 34,  97 => 33,  94 => 32,  84 => 28,  80 => 27,  77 => 26,  73 => 25,  70 => 24,  68 => 23,  64 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
