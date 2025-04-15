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
class __TwigTemplate_7caa4ee728360f30a3f1e4bf37d2ba9368feb9358ed1cf1aaa88430d1d3c3045 extends \Twig\Template
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
            // line 43
            echo ($context["column_left"] ?? null);
            echo "
      <div id=\"content\" class=\"";
            // line 44
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 46
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "isPopup", [0 => "options"], "method", false, false, false, 47)) {
            // line 48
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "pageTitlePosition"], "method", false, false, false, 48) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "isPopup", [0 => "quickview"], "method", false, false, false, 48))) {
                // line 49
                echo "          <h1 class=\"title page-title\">
            ";
                // line 50
                echo ($context["heading_title"] ?? null);
                echo "
          </h1>
        ";
            }
            // line 53
            echo "      ";
        }
        // line 54
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 55
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 56
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 57
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 58
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 54) . " ") .         // line 59
($context["product_exclude_classes"] ?? null));
        // line 60
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 61
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 61), "isPopup", [0 => "options"], "method", false, false, false, 61)) {
            // line 62
            echo "          <div class=\"product-left\">
            <div class=\"product-image direction-";
            // line 63
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 63);
            echo "\">
              <div class=\"swiper main-image\" data-options='";
            // line 64
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 64), "getJs", [], "method", false, false, false, 64), 1 => (($context["stylePrefix"] ?? null) . " ImageCarouselStyle")], "method", false, false, false, 64), twig_constant(" JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 64)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo " style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 64);
                echo "px)\" ";
            }
            echo ">
                <div class=\"swiper-container\" ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 65)) {
                echo " dir=\"rtl\" ";
            }
            echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            // line 67
            $context["gallery"] = [];
            // line 68
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
                // line 69
                echo "                      ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 69), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 69), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 70
                echo "                      <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 70), "isPopup", [], "method", false, false, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 70))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70);
                    echo "\" ";
                }
                echo ">
                        <img src=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 71);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 71)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 71);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 71);
                    echo " 2x\" ";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 71);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 71);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 71);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 71)) {
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
            // line 74
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
            // line 83
            if (($context["product_labels"] ?? null)) {
                // line 84
                echo "                  <div class=\"product-labels\">
                    ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 86
                    echo "                      <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 86);
                    echo "\">
                        <b>
                          ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 88);
                    echo "
                        </b>
                      </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                  </div>
                ";
            }
            // line 94
            echo "              </div>
              ";
            // line 95
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 95), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 95))) {
                // line 96
                echo "                ";
                if (($context["carousel"] ?? null)) {
                    // line 97
                    echo "                  <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo " style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 97), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 97);
                        echo "px\" ";
                    }
                    echo ">
                    <div class=\"swiper-container\" ";
                    // line 98
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 98)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
                      <div class=\"swiper-wrapper\">
                        ";
                    // line 100
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
                        // line 101
                        echo "                          <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101);
                        echo "\">
                            <img src=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 102);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 102)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 102);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 102);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 102);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 102);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) {
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
                    // line 105
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
                    // line 114
                    echo "                  <div class=\"additional-images\">
                    ";
                    // line 115
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
                        // line 116
                        echo "                      <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116);
                        echo "\">
                        <img src=\"";
                        // line 117
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 117);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 117);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 117);
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
                    // line 120
                    echo "                  </div>
                ";
                }
                // line 122
                echo "              ";
            }
            // line 123
            echo "            </div>
            ";
            // line 124
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 124), "isPopup", [], "method", false, false, false, 124) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 124))) {
                // line 125
                echo "              <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
                echo "'></div>
            ";
            }
            // line 127
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 127), "isPopup", [0 => "options"], "method", false, false, false, 127)) {
                // line 128
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "                <div class=\"product-blocks blocks-image\">
                  ";
                    // line 130
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 130));
                    echo "
                </div>
              ";
                }
                // line 133
                echo "            ";
            }
            // line 134
            echo "            ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 134), "isPopup", [0 => "quickview"], "method", false, false, false, 134)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 134), "get", [0 => "quickviewDescription"], "method", false, false, false, 134)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 134), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 134) == "image"))) {
                // line 135
                echo "              <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">
                    ";
                // line 138
                echo ($context["description"] ?? null);
                echo "
                  </div>
                  ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 140), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 140)) {
                    // line 141
                    echo "                    <div class=\"block-expand-overlay\">
                      <a class=\"block-expand btn\"></a>
                    </div>
                  ";
                }
                // line 145
                echo "                </div>
              </div>
            ";
            }
            // line 148
            echo "            ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 148), "isPopup", [], "method", false, false, false, 148)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 148), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 148) == "image"))) {
                // line 149
                echo "              <div class=\"tags\">
                <span class=\"tags-title\">
                  ";
                // line 151
                echo ($context["text_tags"] ?? null);
                echo "
                </span>
                ";
                // line 153
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
                    // line 154
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 154);
                    echo "\">
                    ";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 155);
                    echo "
                  </a>
                  ";
                    // line 157
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "                    <b>
                      ,
                    </b>
                  ";
                    }
                    // line 162
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
                // line 163
                echo "              </div>
            ";
            }
            // line 165
            echo "          </div>
        ";
        }
        // line 167
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
            ";
        // line 169
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 169), "isPopup", [0 => "options"], "method", false, false, false, 169)) {
            // line 170
            echo "              <div class=\"title page-title\">
                ";
            // line 171
            echo ($context["heading_title"] ?? null);
            echo "
              </div>
              ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 173)) {
                // line 174
                echo "                <div class=\"product-blocks blocks-top\">
                  ";
                // line 175
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 175));
                echo "
                </div>
              ";
            }
            // line 178
            echo "            ";
        }
        // line 179
        echo "            ";
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 179), "isPopup", [0 => "quickview"], "method", false, false, false, 179)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 179), "get", [0 => "quickviewDescription"], "method", false, false, false, 179)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 179), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 179) == "top"))) {
            // line 180
            echo "              <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">
                    ";
            // line 183
            echo ($context["description"] ?? null);
            echo "
                  </div>
                  ";
            // line 185
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 185)) {
                // line 186
                echo "                    <div class=\"block-expand-overlay\">
                      <a class=\"block-expand btn\"></a>
                    </div>
                  ";
            }
            // line 190
            echo "                </div>
              </div>
            ";
        }
        // line 193
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 193), "isPopup", [0 => "options"], "method", false, false, false, 193) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 193)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 193) == "default"))) {
            // line 194
            echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
            // line 196
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 196), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 196)) {
                // line 197
                echo "                    <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\">
                      <b>
                        ";
                // line 199
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 199);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 203
                echo ($context["stock"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 207
            echo "                  ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 207), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 207)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 207), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 207) == "list"))) {
                // line 208
                echo "                    <li class=\"product-manufacturer\">
                      <b>
                        ";
                // line 210
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 210), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 210);
                echo "
                        :
                      </b>
                      <a href=\"";
                // line 213
                echo ($context["manufacturers"] ?? null);
                echo "\">
                        ";
                // line 214
                echo ($context["manufacturer"] ?? null);
                echo "
                      </a>
                    </li>
                  ";
            }
            // line 218
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 218), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 218) && ($context["reward"] ?? null))) {
                // line 219
                echo "                    <li class=\"product-reward\">
                      <b>
                        ";
                // line 221
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 221), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 221);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 225
                echo ($context["reward"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 229
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 229), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 229) && ($context["model"] ?? null))) {
                // line 230
                echo "                    <li class=\"product-model\">
                      <b>
                        ";
                // line 232
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 232), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 232);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 236
                echo ($context["model"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 240
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 240), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 240) && ($context["product_weight"] ?? null))) {
                // line 241
                echo "                    <li class=\"product-weight\">
                      <b>
                        ";
                // line 243
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 243), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 243);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 247
                echo ($context["product_weight"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 251
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 251), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 251) && ($context["product_dimension"] ?? null))) {
                // line 252
                echo "                    <li class=\"product-dimension\">
                      <b>
                        ";
                // line 254
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 254), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 254);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 258
                echo ($context["product_length"] ?? null);
                echo "
                        x
                        ";
                // line 260
                echo ($context["product_width"] ?? null);
                echo "
                        x
                        ";
                // line 262
                echo ($context["product_height"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 266
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 266), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 266) && ($context["product_sku"] ?? null))) {
                // line 267
                echo "                    <li class=\"product-sku\">
                      <b>
                        ";
                // line 269
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 269), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 269);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 273
                echo ($context["product_sku"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 277
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 277), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 277) && ($context["product_upc"] ?? null))) {
                // line 278
                echo "                    <li class=\"product-upc\">
                      <b>
                        ";
                // line 280
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 280), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 280);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 284
                echo ($context["product_upc"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 288
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 288), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 288) && ($context["product_ean"] ?? null))) {
                // line 289
                echo "                    <li class=\"product-ean\">
                      <b>
                        ";
                // line 291
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 291), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 291);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 295
                echo ($context["product_ean"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 299
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 299), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 299) && ($context["product_jan"] ?? null))) {
                // line 300
                echo "                    <li class=\"product-jan\">
                      <b>
                        ";
                // line 302
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 302), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 302);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 306
                echo ($context["product_jan"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 310
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 310), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 310) && ($context["product_isbn"] ?? null))) {
                // line 311
                echo "                    <li class=\"product-isbn\">
                      <b>
                        ";
                // line 313
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 313), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 313);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 317
                echo ($context["product_isbn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 321
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 321), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 321) && ($context["product_mpn"] ?? null))) {
                // line 322
                echo "                    <li class=\"product-mpn\">
                      <b>
                        ";
                // line 324
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 324), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 324);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 328
                echo ($context["product_mpn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 332
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 332), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 332) && ($context["product_location"] ?? null))) {
                // line 333
                echo "                    <li class=\"product-location\">
                      <b>
                        ";
                // line 335
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 335), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 335);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 339
                echo ($context["product_location"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 343
            echo "                </ul>
                ";
            // line 344
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 344), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 344)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 344), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 344) == "image"))) {
                // line 345
                echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                // line 346
                echo ($context["manufacturers"] ?? null);
                echo "\">
                      ";
                // line 347
                if (($context["manufacturer_image"] ?? null)) {
                    // line 348
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
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 348), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 348);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 348), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 348);
                    echo "\" />
                      ";
                }
                // line 350
                echo "                      <span>
                        ";
                // line 351
                echo ($context["manufacturer"] ?? null);
                echo "
                      </span>
                    </a>
                  </div>
                ";
            }
            // line 356
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 356), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 356)) {
                // line 357
                echo "                  <div class=\"custom-stats\">
                    ";
                // line 358
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 358), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 358)) {
                    // line 359
                    echo "                      <div class=\"product-sold\">
                        <b>
                          ";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 361), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 361);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 365
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 365), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 365)) {
                    // line 366
                    echo "                      <div class=\"product-views\">
                        <b>
                          ";
                    // line 368
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 368), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 368);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 372
                echo "                  </div>
                ";
            }
            // line 374
            echo "              </div>
            ";
        }
        // line 376
        echo "            ";
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 376), "isPopup", [], "method", false, false, false, 376))) {
            // line 377
            echo "              <div class=\"rating rating-page\">
                <div class=\"rating-stars\">
                  ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 380
                echo "                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 381
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                } else {
                    // line 385
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-1x\"></i>
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                }
                // line 390
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 391
            echo "                </div>
                <div class=\"review-links\">
                  <a>
                    ";
            // line 394
            echo ($context["reviews"] ?? null);
            echo "
                  </a>
                  <b>
                    ";
            // line 397
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 397), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 397);
            echo "
                  </b>
                  <a>
                    ";
            // line 400
            echo ($context["text_write"] ?? null);
            echo "
                  </a>
                </div>
              </div>
            ";
        }
        // line 405
        echo "            ";
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 405), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 405), "isPopup", [], "method", false, false, false, 405)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 405))) {
            // line 406
            echo "              <div class=\"countdown-wrapper\">
                ";
            // line 407
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 407), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 407)) {
                // line 408
                echo "                  <h5 class=\"countdown-title title\">
                    ";
                // line 409
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 409), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 409);
                echo "
                  </h5>
                ";
            }
            // line 412
            echo "                <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 416
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 416), "get", [0 => "countdownDay"], "method", false, false, false, 416);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 422
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 422), "get", [0 => "countdownHour"], "method", false, false, false, 422);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 428
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 428), "get", [0 => "countdownMin"], "method", false, false, false, 428);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 434
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 434), "get", [0 => "countdownSec"], "method", false, false, false, 434);
            echo "
                    </span>
                  </div>
                </div>
              </div>
            ";
        }
        // line 440
        echo "            ";
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 440), "isPopup", [0 => "options"], "method", false, false, false, 440))) {
            // line 441
            echo "              <div class=\"product-price-group\">
                <div class=\"price-wrapper\">
                  <div class=\"price-group\">
                    ";
            // line 444
            if ( !($context["special"] ?? null)) {
                // line 445
                echo "                      <div class=\"product-price\">
                        ";
                // line 446
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            } else {
                // line 449
                echo "                      <div class=\"product-price-new\">
                        ";
                // line 450
                echo ($context["special"] ?? null);
                echo "
                      </div>
                      <div class=\"product-price-old\">
                        ";
                // line 453
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            }
            // line 456
            echo "                  </div>
                  ";
            // line 457
            if (($context["tax"] ?? null)) {
                // line 458
                echo "                    <div class=\"product-tax\">
                      ";
                // line 459
                echo ($context["text_tax"] ?? null);
                echo "
                      ";
                // line 460
                echo ($context["tax"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 463
            echo "                  ";
            if (($context["points"] ?? null)) {
                // line 464
                echo "                    <div class=\"product-points\">
                      ";
                // line 465
                echo ($context["text_points"] ?? null);
                echo "
                      ";
                // line 466
                echo ($context["points"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 469
            echo "                  ";
            if (($context["discounts"] ?? null)) {
                // line 470
                echo "                    <div class=\"discounts\">
                      ";
                // line 471
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 472
                    echo "                        <div class=\"product-discount\">
                          ";
                    // line 473
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 473);
                    echo "
                          ";
                    // line 474
                    echo ($context["text_discount"] ?? null);
                    echo "
                          ";
                    // line 475
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 475);
                    echo "
                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                echo "                    </div>
                  ";
            }
            // line 480
            echo "                </div>
                ";
            // line 481
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 481), "isPopup", [0 => "options"], "method", false, false, false, 481) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 481), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 481)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 481), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 481) == "price"))) {
                // line 482
                echo "                  <div class=\"product-stats\">
                    <ul class=\"list-unstyled\">
                      ";
                // line 484
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 484), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 484)) {
                    // line 485
                    echo "                        <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\">
                          <b>
                            ";
                    // line 487
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 487), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 487);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 491
                    echo ($context["stock"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 495
                echo "                      ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 495), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 495)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 495), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 495) == "list"))) {
                    // line 496
                    echo "                        <li class=\"product-manufacturer\">
                          <b>
                            ";
                    // line 498
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 498), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 498);
                    echo "
                            :
                          </b>
                          <a href=\"";
                    // line 501
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                            ";
                    // line 502
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </a>
                        </li>
                      ";
                }
                // line 506
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 506), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 506) && ($context["reward"] ?? null))) {
                    // line 507
                    echo "                        <li class=\"product-reward\">
                          <b>
                            ";
                    // line 509
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 509), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 509);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 513
                    echo ($context["reward"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 517
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 517), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 517) && ($context["model"] ?? null))) {
                    // line 518
                    echo "                        <li class=\"product-model\">
                          <b>
                            ";
                    // line 520
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 520);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 524
                    echo ($context["model"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 528
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 528), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 528) && ($context["product_weight"] ?? null))) {
                    // line 529
                    echo "                        <li class=\"product-weight\">
                          <b>
                            ";
                    // line 531
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 531), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 531);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 535
                    echo ($context["product_weight"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 539
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 539), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 539) && ($context["product_dimension"] ?? null))) {
                    // line 540
                    echo "                        <li class=\"product-dimension\">
                          <b>
                            ";
                    // line 542
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 542), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 542);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 546
                    echo ($context["product_length"] ?? null);
                    echo "
                            x
                            ";
                    // line 548
                    echo ($context["product_width"] ?? null);
                    echo "
                            x
                            ";
                    // line 550
                    echo ($context["product_height"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 554
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 554), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 554) && ($context["product_sku"] ?? null))) {
                    // line 555
                    echo "                        <li class=\"product-sku\">
                          <b>
                            ";
                    // line 557
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 557), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 557);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 561
                    echo ($context["product_sku"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 565
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 565), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 565) && ($context["product_upc"] ?? null))) {
                    // line 566
                    echo "                        <li class=\"product-upc\">
                          <b>
                            ";
                    // line 568
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 568), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 568);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 572
                    echo ($context["product_upc"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 576
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 576), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 576) && ($context["product_ean"] ?? null))) {
                    // line 577
                    echo "                        <li class=\"product-ean\">
                          <b>
                            ";
                    // line 579
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 579), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 579);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 583
                    echo ($context["product_ean"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 587
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 587), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 587) && ($context["product_jan"] ?? null))) {
                    // line 588
                    echo "                        <li class=\"product-jan\">
                          <b>
                            ";
                    // line 590
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 590), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 590);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 594
                    echo ($context["product_jan"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 598
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 598), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 598) && ($context["product_isbn"] ?? null))) {
                    // line 599
                    echo "                        <li class=\"product-isbn\">
                          <b>
                            ";
                    // line 601
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 601), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 601);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 605
                    echo ($context["product_isbn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 609
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 609), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 609) && ($context["product_mpn"] ?? null))) {
                    // line 610
                    echo "                        <li class=\"product-mpn\">
                          <b>
                            ";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 612), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 612);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 616
                    echo ($context["product_mpn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 620
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 620), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 620) && ($context["product_location"] ?? null))) {
                    // line 621
                    echo "                        <li class=\"product-location\">
                          <b>
                            ";
                    // line 623
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 623), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 623);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 627
                    echo ($context["product_location"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 631
                echo "                    </ul>
                    ";
                // line 632
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 632), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 632)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 632), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 632) == "image"))) {
                    // line 633
                    echo "                      <div class=\"brand-image product-manufacturer\">
                        <a href=\"";
                    // line 634
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                          ";
                    // line 635
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 636
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
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 636), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 636);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 636), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 636);
                        echo "\" />
                          ";
                    }
                    // line 638
                    echo "                          <span>
                            ";
                    // line 639
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                // line 644
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 644), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 644)) {
                    // line 645
                    echo "                      <div class=\"custom-stats\">
                        ";
                    // line 646
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 646), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 646)) {
                        // line 647
                        echo "                          <div class=\"product-sold\">
                            <b>
                              ";
                        // line 649
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 649), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 649);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 653
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 653), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 653)) {
                        // line 654
                        echo "                          <div class=\"product-views\">
                            <b>
                              ";
                        // line 656
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 656), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 656);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 660
                    echo "                      </div>
                    ";
                }
                // line 662
                echo "                  </div>
                ";
            }
            // line 664
            echo "              </div>
            ";
        }
        // line 666
        echo "            ";
        if (($context["options"] ?? null)) {
            // line 667
            echo "              <div class=\"product-options\">
                <h3 class=\"options-title title\">
                  ";
            // line 669
            echo ($context["text_option"] ?? null);
            echo "
                </h3>
                ";
            // line 671
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 672
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 672) == "select")) {
                    // line 673
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 673)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 673);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 673), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 673)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 674
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 674);
                    echo "\">
                        ";
                    // line 675
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 675);
                    echo "
                      </label>
                      <select name=\"option[";
                    // line 677
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 677);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 677);
                    echo "\" class=\"form-control\">
                        <option value=\"\">
                          ";
                    // line 679
                    echo ($context["text_select"] ?? null);
                    echo "
                        </option>
                        ";
                    // line 681
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 681));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 682
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 682);
                        echo "\">
                            ";
                        // line 683
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 683);
                        echo "
                            ";
                        // line 684
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 684) && ($context["optionPrice"] ?? null))) {
                            // line 685
                            echo "                              (
                              ";
                            // line 686
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 686);
                            echo "
                              ";
                            // line 687
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 687);
                            echo "
                              )
                            ";
                        }
                        // line 690
                        echo "                          </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 692
                    echo "                      </select>
                    </div>
                  ";
                }
                // line 695
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 695) == "radio")) {
                    // line 696
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 696)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 696);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 696), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 696)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 698
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 698);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 700
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 700);
                    echo "\">
                        ";
                    // line 701
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 701));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 702
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 704
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 704);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 704);
                        echo "\" />
                              ";
                        // line 705
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 705)) {
                            // line 706
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 706), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 706);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 706), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 706);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 706);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 706);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 706) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 706);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 706);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 706), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 706);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 706);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 706) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 706);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 706);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 708
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 709
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 709);
                        echo "
                                ";
                        // line 710
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 710) && ($context["optionPrice"] ?? null))) {
                            // line 711
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 713
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 713);
                            echo "
                                    ";
                            // line 714
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 714);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 718
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 722
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 725
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 725) == "checkbox")) {
                    // line 726
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 726)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 726);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 726), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 726)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 728
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 728);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 730
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 730);
                    echo "\">
                        ";
                    // line 731
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 731));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 732
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 734
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 734);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 734);
                        echo "\" />
                              ";
                        // line 735
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 735)) {
                            // line 736
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 736), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 736);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 736), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 736);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 736);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 736);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 736) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 736);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 736);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 736), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 736);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 736);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 736) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 736);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 736);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 738
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 739
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 739);
                        echo "
                                ";
                        // line 740
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 740) && ($context["optionPrice"] ?? null))) {
                            // line 741
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 743
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 743);
                            echo "
                                    ";
                            // line 744
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 744);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 748
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 752
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 755
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 755) == "text")) {
                    // line 756
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 756)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 756);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 757
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 757);
                    echo "\">
                        ";
                    // line 758
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 758);
                    echo "
                      </label>
                      <input type=\"text\" name=\"option[";
                    // line 760
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 760);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 760);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 760);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 760);
                    echo "\" class=\"form-control\" />
                    </div>
                  ";
                }
                // line 763
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 763) == "textarea")) {
                    // line 764
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 764)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 764);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 765
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 765);
                    echo "\">
                        ";
                    // line 766
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 766);
                    echo "
                      </label>
                      <textarea name=\"option[";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 768);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 768);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 768);
                    echo "\" class=\"form-control\">
                        ";
                    // line 769
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 769);
                    echo "
                      </textarea>
                    </div>
                  ";
                }
                // line 773
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 773) == "file")) {
                    // line 774
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 774)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 774);
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 776
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 776);
                    echo "
                      </label>
                      <button type=\"button\" id=\"button-upload";
                    // line 778
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 778);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                        <i class=\"fa fa-upload\"></i>
                        ";
                    // line 780
                    echo ($context["button_upload"] ?? null);
                    echo "
                      </button>
                      <input type=\"hidden\" name=\"option[";
                    // line 782
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 782);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 782);
                    echo "\" />
                    </div>
                  ";
                }
                // line 785
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 785) == "date")) {
                    // line 786
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 786)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 786);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 787
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 787);
                    echo "\">
                        ";
                    // line 788
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 788);
                    echo "
                      </label>
                      <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 791
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 791);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 791);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 791);
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
                // line 800
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 800) == "datetime")) {
                    // line 801
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 801)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 801);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 802
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 802);
                    echo "\">
                        ";
                    // line 803
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 803);
                    echo "
                      </label>
                      <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 806
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 806);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 806);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 806);
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
                // line 815
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 815) == "time")) {
                    // line 816
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 816)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 816);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 817
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 817);
                    echo "\">
                        ";
                    // line 818
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 818);
                    echo "
                      </label>
                      <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 821
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 821);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 821);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 821);
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
                // line 830
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 831
            echo "              </div>
            ";
        }
        // line 833
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 834
            echo "              <h3 class=\"title recurring-title\">
                ";
            // line 835
            echo ($context["text_payment_recurring"] ?? null);
            echo "
              </h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">
                    ";
            // line 840
            echo ($context["text_select"] ?? null);
            echo "
                  </option>
                  ";
            // line 842
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 843
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 843);
                echo "\">
                      ";
                // line 844
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 844);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 847
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 851
        echo "            ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 851), "get", [0 => "catalogCartStatus"], "method", false, false, false, 851) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 851), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 851)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 851), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 851)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 851), "isPopup", [], "method", false, false, false, 851)))) {
            // line 852
            echo "              <div class=\"button-group-page\">
                <div class=\"buttons-wrapper\">
                  <div class=\"stepper-group cart-group\">
                    ";
            // line 855
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 855), "get", [0 => "catalogCartStatus"], "method", false, false, false, 855)) {
                // line 856
                echo "                      <div class=\"stepper\">
                        <label class=\"control-label\" for=\"product-quantity\">
                          ";
                // line 858
                echo ($context["entry_qty"] ?? null);
                echo "
                        </label>
                        <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 860
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\" />
                        <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 861
                echo ($context["product_id"] ?? null);
                echo "\" />
                        <span>
                          <i class=\"fa fa-angle-up\"></i>
                          <i class=\"fa fa-angle-down\"></i>
                        </span>
                      </div>
                      <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 867
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 867), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 867) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 867), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 867))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 867), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 867);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo ">
                        <span class=\"btn-text\">
                          ";
                // line 869
                echo ($context["button_cart"] ?? null);
                echo "
                        </span>
                      </a>
                    ";
            }
            // line 873
            echo "                    ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 873), "isPopup", [], "method", false, false, false, 873))) {
                // line 874
                echo "                      <div class=\"extra-group\">
                        ";
                // line 875
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
                    // line 876
                    echo "                          <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 876);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 876), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 876)) . "ButtonDisplay")], "method", false, false, false, 876) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 876), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 876))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 876), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 876);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 876);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 876) == "quickbuy")) {
                        echo " data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 876) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 876), "href", [], "any", false, false, false, 876))) {
                        echo " href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 876), "href", [], "any", false, false, false, 876);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 876)], "method", false, false, false, 876);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\" ";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 876);
                    echo "</span>\">
                            <span class=\"btn-text\">
                              ";
                    // line 878
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 878);
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
                // line 882
                echo "                      </div>
                    ";
            }
            // line 884
            echo "                  </div>
                  ";
            // line 885
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 885), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 885) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 885), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 885)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 885), "isPopup", [0 => "quickview"], "method", false, false, false, 885))) {
                // line 886
                echo "                    <div class=\"wishlist-compare\">
                      ";
                // line 887
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 887), "isPopup", [0 => "options"], "method", false, false, false, 887)) {
                    // line 888
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 888), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 888)) {
                        // line 889
                        echo "                          <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 889) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 889))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 889);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 891
                        echo ($context["button_wishlist"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 895
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 895), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 895)) {
                        // line 896
                        echo "                          <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 896), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 896) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 896), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 896))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 896), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 896);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 898
                        echo ($context["button_compare"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 902
                    echo "                      ";
                }
                // line 903
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 903), "isPopup", [0 => "quickview"], "method", false, false, false, 903)) {
                    // line 904
                    echo "                        <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 904), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 904) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 904), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 904))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 904), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 904);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 904), "get", [0 => "quickviewExtraText"], "method", false, false, false, 904);
                        echo "\" ";
                    }
                    echo ">
                          <span class=\"btn-text\">
                            ";
                    // line 906
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 906), "get", [0 => "quickviewExtraText"], "method", false, false, false, 906);
                    echo "
                          </span>
                        </a>
                      ";
                }
                // line 910
                echo "                    </div>
                  ";
            }
            // line 912
            echo "                </div>
              </div>
            ";
        }
        // line 915
        echo "            ";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 916
            echo "              <div class=\"minimum alert alert-info\">
                <i class=\"fa fa-info-circle\"></i>
                ";
            // line 918
            echo ($context["text_minimum"] ?? null);
            echo "
              </div>
            ";
        }
        // line 921
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 921), "isPopup", [0 => "options"], "method", false, false, false, 921)) {
            // line 922
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 922)) {
                // line 923
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 923));
                echo "
              ";
            }
            // line 925
            echo "            ";
        }
        // line 926
        echo "          </div>
          ";
        // line 927
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 927), "isPopup", [0 => "options"], "method", false, false, false, 927)) {
            // line 928
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 928)) {
                // line 929
                echo "              <div class=\"product-blocks blocks-bottom\">
                ";
                // line 930
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 930));
                echo "
              </div>
            ";
            }
            // line 933
            echo "          ";
        }
        // line 934
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 934), "isPopup", [], "method", false, false, false, 934)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 934), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 934) == "details"))) {
            // line 935
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">
                ";
            // line 937
            echo ($context["text_tags"] ?? null);
            echo "
              </span>
              ";
            // line 939
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
                // line 940
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 940);
                echo "\">
                  ";
                // line 941
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 941);
                echo "
                </a>
                ";
                // line 943
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 943)) {
                    // line 944
                    echo "                  <b>
                    ,
                  </b>
                ";
                }
                // line 948
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
            // line 949
            echo "            </div>
          ";
        }
        // line 951
        echo "        </div>
      </div>
      ";
        // line 953
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 953), "isPopup", [0 => "quickview"], "method", false, false, false, 953)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 953), "get", [0 => "quickviewDescription"], "method", false, false, false, 953)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 953), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 953) == "default"))) {
            // line 954
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 957
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 959
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 959), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 959)) {
                // line 960
                echo "              <div class=\"block-expand-overlay\">
                <a class=\"block-expand btn\"></a>
              </div>
            ";
            }
            // line 964
            echo "          </div>
        </div>
      ";
        }
        // line 967
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 967), "isPopup", [0 => "options"], "method", false, false, false, 967)) {
            // line 968
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 968)) {
                // line 969
                echo "          <div class=\"product-blocks blocks-default\">
            ";
                // line 970
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 970));
                echo "
          </div>
        ";
            }
            // line 973
            echo "      ";
        }
        // line 974
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 974), "isPopup", [], "method", false, false, false, 974)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 974), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 974) == "default"))) {
            // line 975
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">
            ";
            // line 977
            echo ($context["text_tags"] ?? null);
            echo "
          </span>
          ";
            // line 979
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
                // line 980
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 980);
                echo "\">
              ";
                // line 981
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 981);
                echo "
            </a>
            ";
                // line 983
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 983)) {
                    // line 984
                    echo "              <b>
                ,
              </b>
            ";
                }
                // line 988
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
            // line 989
            echo "        </div>
      ";
        }
        // line 991
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 991), "isPopup", [], "method", false, false, false, 991)) {
            // line 992
            echo "        ";
            echo ($context["content_bottom"] ?? null);
            echo "
      </div>
      ";
            // line 994
            echo ($context["column_right"] ?? null);
            echo "
    </div>
  </div>
";
        }
        // line 998
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
        // line 1117
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1122
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1128
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
        // line 1196
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 1200
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
        // line 1255
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1255), "isPopup", [], "method", false, false, false, 1255)) {
            // line 1256
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 1256);
            echo "
";
        }
        // line 1258
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
        return array (  2973 => 1258,  2967 => 1256,  2965 => 1255,  2907 => 1200,  2900 => 1196,  2829 => 1128,  2820 => 1122,  2812 => 1117,  2691 => 998,  2684 => 994,  2678 => 992,  2675 => 991,  2671 => 989,  2657 => 988,  2651 => 984,  2649 => 983,  2644 => 981,  2639 => 980,  2622 => 979,  2617 => 977,  2613 => 975,  2610 => 974,  2607 => 973,  2601 => 970,  2598 => 969,  2595 => 968,  2592 => 967,  2587 => 964,  2581 => 960,  2579 => 959,  2574 => 957,  2567 => 954,  2565 => 953,  2561 => 951,  2557 => 949,  2543 => 948,  2537 => 944,  2535 => 943,  2530 => 941,  2525 => 940,  2508 => 939,  2503 => 937,  2499 => 935,  2496 => 934,  2493 => 933,  2487 => 930,  2484 => 929,  2481 => 928,  2479 => 927,  2476 => 926,  2473 => 925,  2467 => 923,  2464 => 922,  2461 => 921,  2455 => 918,  2451 => 916,  2448 => 915,  2443 => 912,  2439 => 910,  2432 => 906,  2418 => 904,  2415 => 903,  2412 => 902,  2405 => 898,  2391 => 896,  2388 => 895,  2381 => 891,  2367 => 889,  2364 => 888,  2362 => 887,  2359 => 886,  2357 => 885,  2354 => 884,  2350 => 882,  2332 => 878,  2300 => 876,  2283 => 875,  2280 => 874,  2277 => 873,  2270 => 869,  2257 => 867,  2248 => 861,  2242 => 860,  2237 => 858,  2233 => 856,  2231 => 855,  2226 => 852,  2223 => 851,  2217 => 847,  2208 => 844,  2203 => 843,  2199 => 842,  2194 => 840,  2186 => 835,  2183 => 834,  2180 => 833,  2176 => 831,  2170 => 830,  2154 => 821,  2148 => 818,  2144 => 817,  2135 => 816,  2132 => 815,  2116 => 806,  2110 => 803,  2106 => 802,  2097 => 801,  2094 => 800,  2078 => 791,  2072 => 788,  2068 => 787,  2059 => 786,  2056 => 785,  2048 => 782,  2043 => 780,  2036 => 778,  2031 => 776,  2021 => 774,  2018 => 773,  2011 => 769,  2003 => 768,  1998 => 766,  1994 => 765,  1985 => 764,  1982 => 763,  1970 => 760,  1965 => 758,  1961 => 757,  1952 => 756,  1949 => 755,  1944 => 752,  1935 => 748,  1928 => 744,  1924 => 743,  1920 => 741,  1918 => 740,  1914 => 739,  1911 => 738,  1880 => 736,  1878 => 735,  1872 => 734,  1868 => 732,  1864 => 731,  1860 => 730,  1855 => 728,  1841 => 726,  1838 => 725,  1833 => 722,  1824 => 718,  1817 => 714,  1813 => 713,  1809 => 711,  1807 => 710,  1803 => 709,  1800 => 708,  1769 => 706,  1767 => 705,  1761 => 704,  1757 => 702,  1753 => 701,  1749 => 700,  1744 => 698,  1730 => 696,  1727 => 695,  1722 => 692,  1715 => 690,  1709 => 687,  1705 => 686,  1702 => 685,  1700 => 684,  1696 => 683,  1691 => 682,  1687 => 681,  1682 => 679,  1675 => 677,  1670 => 675,  1666 => 674,  1653 => 673,  1650 => 672,  1646 => 671,  1641 => 669,  1637 => 667,  1634 => 666,  1630 => 664,  1626 => 662,  1622 => 660,  1615 => 656,  1611 => 654,  1608 => 653,  1601 => 649,  1597 => 647,  1595 => 646,  1592 => 645,  1589 => 644,  1581 => 639,  1578 => 638,  1558 => 636,  1556 => 635,  1552 => 634,  1549 => 633,  1547 => 632,  1544 => 631,  1537 => 627,  1530 => 623,  1526 => 621,  1523 => 620,  1516 => 616,  1509 => 612,  1505 => 610,  1502 => 609,  1495 => 605,  1488 => 601,  1484 => 599,  1481 => 598,  1474 => 594,  1467 => 590,  1463 => 588,  1460 => 587,  1453 => 583,  1446 => 579,  1442 => 577,  1439 => 576,  1432 => 572,  1425 => 568,  1421 => 566,  1418 => 565,  1411 => 561,  1404 => 557,  1400 => 555,  1397 => 554,  1390 => 550,  1385 => 548,  1380 => 546,  1373 => 542,  1369 => 540,  1366 => 539,  1359 => 535,  1352 => 531,  1348 => 529,  1345 => 528,  1338 => 524,  1331 => 520,  1327 => 518,  1324 => 517,  1317 => 513,  1310 => 509,  1306 => 507,  1303 => 506,  1296 => 502,  1292 => 501,  1286 => 498,  1282 => 496,  1279 => 495,  1272 => 491,  1265 => 487,  1255 => 485,  1253 => 484,  1249 => 482,  1247 => 481,  1244 => 480,  1240 => 478,  1231 => 475,  1227 => 474,  1223 => 473,  1220 => 472,  1216 => 471,  1213 => 470,  1210 => 469,  1204 => 466,  1200 => 465,  1197 => 464,  1194 => 463,  1188 => 460,  1184 => 459,  1181 => 458,  1179 => 457,  1176 => 456,  1170 => 453,  1164 => 450,  1161 => 449,  1155 => 446,  1152 => 445,  1150 => 444,  1145 => 441,  1142 => 440,  1133 => 434,  1124 => 428,  1115 => 422,  1106 => 416,  1098 => 412,  1092 => 409,  1089 => 408,  1087 => 407,  1084 => 406,  1081 => 405,  1073 => 400,  1067 => 397,  1061 => 394,  1056 => 391,  1050 => 390,  1043 => 385,  1037 => 381,  1034 => 380,  1030 => 379,  1026 => 377,  1023 => 376,  1019 => 374,  1015 => 372,  1008 => 368,  1004 => 366,  1001 => 365,  994 => 361,  990 => 359,  988 => 358,  985 => 357,  982 => 356,  974 => 351,  971 => 350,  951 => 348,  949 => 347,  945 => 346,  942 => 345,  940 => 344,  937 => 343,  930 => 339,  923 => 335,  919 => 333,  916 => 332,  909 => 328,  902 => 324,  898 => 322,  895 => 321,  888 => 317,  881 => 313,  877 => 311,  874 => 310,  867 => 306,  860 => 302,  856 => 300,  853 => 299,  846 => 295,  839 => 291,  835 => 289,  832 => 288,  825 => 284,  818 => 280,  814 => 278,  811 => 277,  804 => 273,  797 => 269,  793 => 267,  790 => 266,  783 => 262,  778 => 260,  773 => 258,  766 => 254,  762 => 252,  759 => 251,  752 => 247,  745 => 243,  741 => 241,  738 => 240,  731 => 236,  724 => 232,  720 => 230,  717 => 229,  710 => 225,  703 => 221,  699 => 219,  696 => 218,  689 => 214,  685 => 213,  679 => 210,  675 => 208,  672 => 207,  665 => 203,  658 => 199,  648 => 197,  646 => 196,  642 => 194,  639 => 193,  634 => 190,  628 => 186,  626 => 185,  621 => 183,  614 => 180,  611 => 179,  608 => 178,  602 => 175,  599 => 174,  597 => 173,  592 => 171,  589 => 170,  587 => 169,  583 => 167,  579 => 165,  575 => 163,  561 => 162,  555 => 158,  553 => 157,  548 => 155,  543 => 154,  526 => 153,  521 => 151,  517 => 149,  514 => 148,  509 => 145,  503 => 141,  501 => 140,  496 => 138,  489 => 135,  486 => 134,  483 => 133,  477 => 130,  474 => 129,  471 => 128,  468 => 127,  460 => 125,  458 => 124,  455 => 123,  452 => 122,  448 => 120,  423 => 117,  418 => 116,  401 => 115,  398 => 114,  387 => 105,  350 => 102,  345 => 101,  328 => 100,  321 => 98,  310 => 97,  307 => 96,  305 => 95,  302 => 94,  298 => 92,  288 => 88,  280 => 86,  276 => 85,  273 => 84,  271 => 83,  260 => 74,  221 => 71,  212 => 70,  209 => 69,  191 => 68,  189 => 67,  182 => 65,  172 => 64,  166 => 63,  163 => 62,  161 => 61,  156 => 60,  154 => 59,  153 => 58,  152 => 57,  151 => 56,  150 => 55,  148 => 54,  145 => 53,  139 => 50,  136 => 49,  133 => 48,  131 => 47,  126 => 46,  121 => 44,  117 => 43,  110 => 40,  103 => 36,  99 => 34,  97 => 33,  94 => 32,  84 => 28,  80 => 27,  77 => 26,  73 => 25,  70 => 24,  68 => 23,  64 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
