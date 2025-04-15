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
class __TwigTemplate_2efc20d1335508d8b7bfae2db6d7887dec88e2bef3aeb13fdf885ca280478dbb extends \Twig\Template
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
            $context["description"] = "";
        }
        // line 22
        echo ($context["header"] ?? null);
        echo "
";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 23), "isPopup", [], "method", false, false, false, 23)) {
            // line 24
            echo "<ul class=\"breadcrumb\">
  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 26
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</ul>
";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "pageTitlePosition"], "method", false, false, false, 29) == "top")) {
                // line 30
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 32);
            echo "

<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 35
            echo ($context["column_left"] ?? null);
            echo "
    <div id=\"content\" class=\"";
            // line 36
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 38
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "isPopup", [0 => "options"], "method", false, false, false, 39)) {
            // line 40
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "pageTitlePosition"], "method", false, false, false, 40) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 40), "isPopup", [0 => "quickview"], "method", false, false, false, 40))) {
                // line 41
                echo "          <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
        ";
            }
            // line 43
            echo "      ";
        }
        // line 44
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 45
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 46
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 47
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 48
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 44) . " ") .         // line 49
($context["product_exclude_classes"] ?? null));
        // line 50
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 51
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 51), "isPopup", [0 => "options"], "method", false, false, false, 51)) {
            // line 52
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 53
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 53);
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 54
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 54), "getJs", [], "method", false, false, false, 54), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 54), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 54), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 54)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 54), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 54);
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 55)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 57
            $context["gallery"] = [];
            // line 58
            echo "                  ";
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
                // line 59
                echo "                    ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 59), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 59), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 60
                echo "                    <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 60), "isPopup", [], "method", false, false, false, 60) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 60))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60);
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 61);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 61)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 61);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 61);
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 61);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 61);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 61);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 61)) {
                    echo "loading=\"lazy\"";
                }
                echo "/>
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
            // line 64
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 73
            if (($context["product_labels"] ?? null)) {
                // line 74
                echo "                <div class=\"product-labels\">
                  ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 76
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 76);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 76);
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                </div>
              ";
            }
            // line 80
            echo "            </div>
            ";
            // line 81
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 81), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 81))) {
                // line 82
                echo "              ";
                if (($context["carousel"] ?? null)) {
                    // line 83
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo "style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 83), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 83);
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 84)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 86
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
                        // line 87
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87);
                        echo "\">
                          <img src=\"";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 88);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 88)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 88);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 88);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 88);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 88);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 88)) {
                            echo "loading=\"lazy\"";
                        }
                        echo "/>
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
                    // line 91
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 100
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 101
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
                        // line 102
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 102);
                        echo "\">
                      <img src=\"";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 103);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 103);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 103);
                        echo "\"/>
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
                    // line 106
                    echo "                </div>
              ";
                }
                // line 108
                echo "            ";
            }
            // line 109
            echo "          </div>
          ";
            // line 110
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 110), "isPopup", [], "method", false, false, false, 110) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 110))) {
                // line 111
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 113
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 113), "isPopup", [0 => "options"], "method", false, false, false, 113)) {
                // line 114
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 116
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 116));
                    echo "
            </div>
            ";
                }
                // line 119
                echo "          ";
            }
            // line 120
            echo "          ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 120), "isPopup", [0 => "quickview"], "method", false, false, false, 120)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "quickviewDescription"], "method", false, false, false, 120)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 120) == "image"))) {
                // line 121
                echo "            <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 124
                echo ($context["description"] ?? null);
                echo "
                </div>
                ";
                // line 126
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 126), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 126)) {
                    // line 127
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 129
                echo "              </div>
            </div>
          ";
            }
            // line 132
            echo "          ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 132), "isPopup", [], "method", false, false, false, 132)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 132), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 132) == "image"))) {
                // line 133
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 134
                echo ($context["text_tags"] ?? null);
                echo "</span>
              ";
                // line 135
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
                    // line 136
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 136);
                    echo "</a>
                ";
                    // line 137
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 137)) {
                        echo "<b>,</b>";
                    }
                    // line 138
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
                // line 139
                echo "            </div>
          ";
            }
            // line 141
            echo "        </div>
        ";
        }
        // line 143
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 145
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 145), "isPopup", [0 => "options"], "method", false, false, false, 145)) {
            // line 146
            echo "          <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
          ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 147)) {
                // line 148
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 149
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 149));
                echo "
          </div>
          ";
            }
            // line 152
            echo "          ";
        }
        // line 153
        echo "
          ";
        // line 154
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 154), "isPopup", [0 => "quickview"], "method", false, false, false, 154)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "quickviewDescription"], "method", false, false, false, 154)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 154) == "top"))) {
            // line 155
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 158
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 160
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 160)) {
                // line 161
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 163
            echo "              </div>
            </div>
          ";
        }
        // line 166
        echo "
          ";
        // line 167
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 167), "isPopup", [0 => "options"], "method", false, false, false, 167) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 167), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 167)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 167), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 167) == "default"))) {
            // line 168
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 170
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 170), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 170)) {
                // line 171
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 171), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 171);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 173
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 173), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 173)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 173), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 173) == "list"))) {
                // line 174
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 174), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 174);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 176
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 176), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 176) && ($context["reward"] ?? null))) {
                // line 177
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 177), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 177);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 179
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 179), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 179) && ($context["model"] ?? null))) {
                // line 180
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 180);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 182
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 182), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 182) && ($context["product_weight"] ?? null))) {
                // line 183
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 183);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 185
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 185) && ($context["product_dimension"] ?? null))) {
                // line 186
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 186), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 186);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 188
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 188) && ($context["product_sku"] ?? null))) {
                // line 189
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 189), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 189);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 191
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 191), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 191) && ($context["product_upc"] ?? null))) {
                // line 192
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 192), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 192);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 194
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 194), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 194) && ($context["product_ean"] ?? null))) {
                // line 195
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 195);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 197
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 197), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 197) && ($context["product_jan"] ?? null))) {
                // line 198
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 198), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 198);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 200
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 200) && ($context["product_isbn"] ?? null))) {
                // line 201
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 201);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 203
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 203), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 203) && ($context["product_mpn"] ?? null))) {
                // line 204
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 204), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 204);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 206
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 206), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 206) && ($context["product_location"] ?? null))) {
                // line 207
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 207), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 207);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 209
            echo "              </ul>
              ";
            // line 210
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 210), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 210)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 210), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 210) == "image"))) {
                // line 211
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 212
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 213
                if (($context["manufacturer_image"] ?? null)) {
                    // line 214
                    echo "                      <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 214), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 214);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 214), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 214);
                    echo "\"/>
                    ";
                }
                // line 216
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 220
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 220), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 220)) {
                // line 221
                echo "                <div class=\"custom-stats\">
                  ";
                // line 222
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 222), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 222)) {
                    // line 223
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 223), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 223);
                    echo "</b></div>
                  ";
                }
                // line 225
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 225), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 225)) {
                    // line 226
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 226), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 226);
                    echo "</b></div>
                  ";
                }
                // line 228
                echo "                </div>
              ";
            }
            // line 230
            echo "            </div>
          ";
        }
        // line 232
        echo "
          ";
        // line 233
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 233), "isPopup", [], "method", false, false, false, 233))) {
            // line 234
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 237
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 238
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 241
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 246
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 249
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 250
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 250), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 250);
            echo "</b>
                <a>";
            // line 251
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 255
        echo "
          ";
        // line 256
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 256), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 256), "isPopup", [], "method", false, false, false, 256)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 256))) {
            // line 257
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 258
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 258), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 258)) {
                // line 259
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 259), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 259);
                echo "</h5>
              ";
            }
            // line 261
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 262
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 262), "get", [0 => "countdownDay"], "method", false, false, false, 262);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 263
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 263), "get", [0 => "countdownHour"], "method", false, false, false, 263);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 264
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 264), "get", [0 => "countdownMin"], "method", false, false, false, 264);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 265
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 265), "get", [0 => "countdownSec"], "method", false, false, false, 265);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 269
        echo "
          ";
        // line 270
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 270), "isPopup", [0 => "options"], "method", false, false, false, 270))) {
            // line 271
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 274
            if ( !($context["special"] ?? null)) {
                // line 275
                echo "                 <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            } else {
                // line 277
                echo "                 <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 278
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            }
            // line 280
            echo "             </div>
             ";
            // line 281
            if (($context["tax"] ?? null)) {
                // line 282
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 284
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 285
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 287
            echo "
             ";
            // line 288
            if (($context["discounts"] ?? null)) {
                // line 289
                echo "               <div class=\"discounts\">
                 ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 291
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 291);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 291);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "               </div>
             ";
            }
            // line 295
            echo "           </div>
            ";
            // line 296
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 296), "isPopup", [0 => "options"], "method", false, false, false, 296) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 296), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 296)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 296), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 296) == "price"))) {
                // line 297
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 299
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 299), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 299)) {
                    // line 300
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 300), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 300);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 302
                echo "                  ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 302), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 302)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 302), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 302) == "list"))) {
                    // line 303
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 303), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 303);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 305
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 305), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 305) && ($context["reward"] ?? null))) {
                    // line 306
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 306), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 306);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 308
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 308), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 308) && ($context["model"] ?? null))) {
                    // line 309
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 309), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 309);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 311
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 311), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 311) && ($context["product_weight"] ?? null))) {
                    // line 312
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 312), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 312);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 314
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 314), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 314) && ($context["product_dimension"] ?? null))) {
                    // line 315
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 315), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 315);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 317
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 317), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 317) && ($context["product_sku"] ?? null))) {
                    // line 318
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 318), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 318);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 320
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 320), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 320) && ($context["product_upc"] ?? null))) {
                    // line 321
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 321), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 321);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 323
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 323), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 323) && ($context["product_ean"] ?? null))) {
                    // line 324
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 324), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 324);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 326
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 326) && ($context["product_jan"] ?? null))) {
                    // line 327
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 327), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 327);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 329
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 329), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 329) && ($context["product_isbn"] ?? null))) {
                    // line 330
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 330), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 330);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 332
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 332), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 332) && ($context["product_mpn"] ?? null))) {
                    // line 333
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 333), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 333);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 335
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 335), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 335) && ($context["product_location"] ?? null))) {
                    // line 336
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 336), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 336);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 338
                echo "                </ul>
                ";
                // line 339
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 339)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 339) == "image"))) {
                    // line 340
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 341
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                      ";
                    // line 342
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 343
                        echo "                        <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 343), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 343);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 343), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 343);
                        echo "\"/>
                      ";
                    }
                    // line 345
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 349
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 349), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 349)) {
                    // line 350
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 351
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 351), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 351)) {
                        // line 352
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 352), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 352);
                        echo "</b></div>
                    ";
                    }
                    // line 354
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 354), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 354)) {
                        // line 355
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 355), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 355);
                        echo "</b></div>
                    ";
                    }
                    // line 357
                    echo "                  </div>
                ";
                }
                // line 359
                echo "              </div>
            ";
            }
            // line 361
            echo "          </div>
          ";
        }
        // line 363
        echo "
          ";
        // line 364
        if (($context["options"] ?? null)) {
            // line 365
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 366
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 367
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 368
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 368) == "select")) {
                    // line 369
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 369)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 369);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 369), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 369)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 370
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 370);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 370);
                    echo "</label>
              <select name=\"option[";
                    // line 371
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 371);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 371);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 372
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 373
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 373));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 374
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 374);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 374);
                        echo "
                ";
                        // line 375
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 375) && ($context["optionPrice"] ?? null))) {
                            // line 376
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 376);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 376);
                            echo ")
                ";
                        }
                        // line 377
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    echo "              </select>
            </div>
            ";
                }
                // line 382
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 382) == "radio")) {
                    // line 383
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 383)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 383);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 383), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 383)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 384
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 384);
                    echo "</label>
              <div id=\"input-option";
                    // line 385
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 385);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 385));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 386
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 388
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 388);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 388);
                        echo "\" />
                    ";
                        // line 389
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 389)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 389), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 389);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 389), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 389);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 389);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 389);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 389);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 389), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 389);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 389);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 389);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 390
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 391
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 391);
                        echo "
                      ";
                        // line 392
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 392) && ($context["optionPrice"] ?? null))) {
                            // line 393
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 394
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 394);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394);
                            echo ")
                        </span>
                      ";
                        }
                        // line 397
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 400
                    echo " </div>
            </div>
            ";
                }
                // line 403
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 403) == "checkbox")) {
                    // line 404
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 404)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 404);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 404), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 404)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 405
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 405);
                    echo "</label>
              <div id=\"input-option";
                    // line 406
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 406);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 406));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 407
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 409
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 409);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 409);
                        echo "\" />
                    ";
                        // line 410
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 410)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 410), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 410);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 410), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 410);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 410);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 410);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 410) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 410);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 410);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 410), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 410);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 410);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 410) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 410);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 410);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 411
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 412
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 412);
                        echo "
                      ";
                        // line 413
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 413) && ($context["optionPrice"] ?? null))) {
                            // line 414
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 414);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 414);
                            echo ")</span>
                      ";
                        }
                        // line 416
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 419
                    echo " </div>
            </div>
            ";
                }
                // line 422
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 422) == "text")) {
                    // line 423
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 423)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 423);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 424);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 424);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 425);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 425);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 425);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 425);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 428
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 428) == "textarea")) {
                    // line 429
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 429)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 429);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 430);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 430);
                    echo "</label>
              <textarea name=\"option[";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 431);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 431);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 431);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 431);
                    echo "</textarea>
            </div>
            ";
                }
                // line 434
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 434) == "file")) {
                    // line 435
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 435)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 435);
                    echo "\">
              <label class=\"control-label\">";
                    // line 436
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 436);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 437
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 437);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 438
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 438);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 438);
                    echo "\" />
            </div>
            ";
                }
                // line 441
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 441) == "date")) {
                    // line 442
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 442)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 442);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 443);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 445
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 445);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 445);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 445);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 451
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 451) == "datetime")) {
                    // line 452
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 452)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 452);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 453
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 453);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 453);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 455
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 455);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 455);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 455);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 461
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 461) == "time")) {
                    // line 462
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 462)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 462);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 463
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 463);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 463);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 465
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 465);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 465);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 465);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 471
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "          </div>
          ";
        }
        // line 474
        echo "
          ";
        // line 475
        if (($context["recurrings"] ?? null)) {
            // line 476
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 479
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 480
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 481
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 481);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 481);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 483
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 487
        echo "
          ";
        // line 488
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 488), "get", [0 => "catalogCartStatus"], "method", false, false, false, 488) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 488), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 488)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 488), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 488)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 488), "isPopup", [], "method", false, false, false, 488)))) {
            // line 489
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 492
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 492), "get", [0 => "catalogCartStatus"], "method", false, false, false, 492)) {
                // line 493
                echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                // line 494
                echo ($context["entry_qty"] ?? null);
                echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 495
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 496
                echo ($context["product_id"] ?? null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 502
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 502) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 502))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 502);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></a>
                ";
            }
            // line 504
            echo "                ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 504), "isPopup", [], "method", false, false, false, 504))) {
                // line 505
                echo "                  <div class=\"extra-group\">
                    ";
                // line 506
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
                    // line 507
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 507);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 507)) . "ButtonDisplay")], "method", false, false, false, 507) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 507))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 507);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 507);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 507) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 507) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 507), "href", [], "any", false, false, false, 507))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 507), "href", [], "any", false, false, false, 507);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 507)], "method", false, false, false, 507);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 507);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 507);
                    echo "</span></a>
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
                // line 509
                echo "                  </div>
                ";
            }
            // line 511
            echo "              </div>

              ";
            // line 513
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 513), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 513) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 513), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 513)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 513), "isPopup", [0 => "quickview"], "method", false, false, false, 513))) {
                // line 514
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 515
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 515), "isPopup", [0 => "options"], "method", false, false, false, 515)) {
                    // line 516
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 516), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 516)) {
                        // line 517
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 517), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 517) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 517), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 517))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 517), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 517);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 519
                    echo "
                  ";
                    // line 520
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 520)) {
                        // line 521
                        echo "                  <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 521), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 521) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 521), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 521))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 521), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 521);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 523
                    echo "                ";
                }
                // line 524
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 524), "isPopup", [0 => "quickview"], "method", false, false, false, 524)) {
                    // line 525
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 525) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 525))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 525);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => "quickviewExtraText"], "method", false, false, false, 525);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => "quickviewExtraText"], "method", false, false, false, 525);
                    echo "</span></a>
                ";
                }
                // line 527
                echo "              </div>
              ";
            }
            // line 529
            echo "            </div>
          </div>
          ";
        }
        // line 532
        echo "
          ";
        // line 533
        if ((($context["minimum"] ?? null) > 1)) {
            // line 534
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 536
        echo "
          ";
        // line 537
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 537), "isPopup", [0 => "options"], "method", false, false, false, 537)) {
            // line 538
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 538)) {
                // line 539
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 539));
                echo "
            ";
            }
            // line 541
            echo "          ";
        }
        // line 542
        echo "          </div>
          ";
        // line 543
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 543), "isPopup", [0 => "options"], "method", false, false, false, 543)) {
            // line 544
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 544)) {
                // line 545
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 546
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 546));
                echo "
          </div>
          ";
            }
            // line 549
            echo "          ";
        }
        // line 550
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 550), "isPopup", [], "method", false, false, false, 550)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 550), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 550) == "details"))) {
            // line 551
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 552
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 553
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
                // line 554
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 554);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 554);
                echo "</a>
                ";
                // line 555
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 555)) {
                    echo "<b>,</b>";
                }
                // line 556
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
            // line 557
            echo "            </div>
          ";
        }
        // line 559
        echo "        </div>
      </div>
      ";
        // line 561
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 561), "isPopup", [0 => "quickview"], "method", false, false, false, 561)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 561), "get", [0 => "quickviewDescription"], "method", false, false, false, 561)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 561), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 561) == "default"))) {
            // line 562
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 565
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 567
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 567), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 567)) {
                // line 568
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 570
            echo "          </div>
        </div>
      ";
        }
        // line 573
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 573), "isPopup", [0 => "options"], "method", false, false, false, 573)) {
            // line 574
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 574)) {
                // line 575
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 576
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 576));
                echo "
        </div>
        ";
            }
            // line 579
            echo "      ";
        }
        // line 580
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 580), "isPopup", [], "method", false, false, false, 580)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 580), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 580) == "default"))) {
            // line 581
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 582
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 583
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
                // line 584
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 584);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 584);
                echo "</a>
            ";
                // line 585
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 585)) {
                    echo "<b>,</b>";
                }
                // line 586
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
            // line 587
            echo "        </div>
      ";
        }
        // line 589
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 589), "isPopup", [], "method", false, false, false, 589)) {
            // line 590
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 591
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 594
            echo ($context["column_left"] ?? null);
            echo "
    <div id=\"content\" class=\"";
            // line 595
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 597
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 598
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 598), "isPopup", [0 => "options"], "method", false, false, false, 598)) {
            // line 599
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 599), "get", [0 => "pageTitlePosition"], "method", false, false, false, 599) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 599), "isPopup", [0 => "quickview"], "method", false, false, false, 599))) {
                // line 600
                echo "          <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
        ";
            }
            // line 602
            echo "      ";
        }
        // line 603
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 604
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 605
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 606
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 607
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 603) . " ") .         // line 608
($context["product_exclude_classes"] ?? null));
        // line 609
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 610
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 610), "isPopup", [0 => "options"], "method", false, false, false, 610)) {
            // line 611
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 612
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 612), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 612);
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 613
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 613), "getJs", [], "method", false, false, false, 613), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 613), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 613), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 613)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 613), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 613);
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 614
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 614)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 616
            $context["gallery"] = [];
            // line 617
            echo "                  ";
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
                // line 618
                echo "                    ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 618), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 618), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 619
                echo "                    <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 619), "isPopup", [], "method", false, false, false, 619) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 619), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 619))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 619);
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 620
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 620);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 620)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 620);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 620);
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 620);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 620), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 620);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 620), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 620);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 620)) {
                    echo "loading=\"lazy\"";
                }
                echo "/>
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
            // line 623
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 632
            if (($context["product_labels"] ?? null)) {
                // line 633
                echo "                <div class=\"product-labels\">
                  ";
                // line 634
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 635
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 635);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 635);
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 637
                echo "                </div>
              ";
            }
            // line 639
            echo "            </div>
            ";
            // line 640
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 640), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 640))) {
                // line 641
                echo "              ";
                if (($context["carousel"] ?? null)) {
                    // line 642
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo "style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 642), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 642);
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 643
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 643)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 645
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
                        // line 646
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 646);
                        echo "\">
                          <img src=\"";
                        // line 647
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 647);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 647)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 647);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 647);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 647), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 647);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 647), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 647);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 647)) {
                            echo "loading=\"lazy\"";
                        }
                        echo "/>
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
                    // line 650
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 659
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 660
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
                        // line 661
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 661);
                        echo "\">
                      <img src=\"";
                        // line 662
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 662);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 662), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 662);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 662), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 662);
                        echo "\"/>
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
                    // line 665
                    echo "                </div>
              ";
                }
                // line 667
                echo "            ";
            }
            // line 668
            echo "          </div>
          ";
            // line 669
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 669), "isPopup", [], "method", false, false, false, 669) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 669), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 669))) {
                // line 670
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 672
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 672), "isPopup", [0 => "options"], "method", false, false, false, 672)) {
                // line 673
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 673)) {
                    // line 674
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 675
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 675));
                    echo "
            </div>
            ";
                }
                // line 678
                echo "          ";
            }
            // line 679
            echo "          ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 679), "isPopup", [0 => "quickview"], "method", false, false, false, 679)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 679), "get", [0 => "quickviewDescription"], "method", false, false, false, 679)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 679), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 679) == "image"))) {
                // line 680
                echo "            <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 683
                echo ($context["description"] ?? null);
                echo "
                </div>
                ";
                // line 685
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 685), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 685)) {
                    // line 686
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 688
                echo "              </div>
            </div>
          ";
            }
            // line 691
            echo "          ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 691), "isPopup", [], "method", false, false, false, 691)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 691), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 691) == "image"))) {
                // line 692
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 693
                echo ($context["text_tags"] ?? null);
                echo "</span>
              ";
                // line 694
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
                    // line 695
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 695);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 695);
                    echo "</a>
                ";
                    // line 696
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 696)) {
                        echo "<b>,</b>";
                    }
                    // line 697
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
                // line 698
                echo "            </div>
          ";
            }
            // line 700
            echo "        </div>
        ";
        }
        // line 702
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 704
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 704), "isPopup", [0 => "options"], "method", false, false, false, 704)) {
            // line 705
            echo "          <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
          ";
            // line 706
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 706)) {
                // line 707
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 708
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 708));
                echo "
          </div>
          ";
            }
            // line 711
            echo "          ";
        }
        // line 712
        echo "
          ";
        // line 713
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 713), "isPopup", [0 => "quickview"], "method", false, false, false, 713)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 713), "get", [0 => "quickviewDescription"], "method", false, false, false, 713)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 713), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 713) == "top"))) {
            // line 714
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 717
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 719
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 719), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 719)) {
                // line 720
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 722
            echo "              </div>
            </div>
          ";
        }
        // line 725
        echo "
          ";
        // line 726
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 726), "isPopup", [0 => "options"], "method", false, false, false, 726) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 726), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 726)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 726), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 726) == "default"))) {
            // line 727
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 729
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 729), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 729)) {
                // line 730
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 730), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 730);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 732
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 732), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 732)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 732), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 732) == "list"))) {
                // line 733
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 733), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 733);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 735
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 735), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 735) && ($context["reward"] ?? null))) {
                // line 736
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 736), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 736);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 738
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 738), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 738) && ($context["model"] ?? null))) {
                // line 739
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 739), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 739);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 741
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 741), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 741) && ($context["product_weight"] ?? null))) {
                // line 742
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 742), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 742);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 744
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 744), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 744) && ($context["product_dimension"] ?? null))) {
                // line 745
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 745), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 745);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 747
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 747), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 747) && ($context["product_sku"] ?? null))) {
                // line 748
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 748), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 748);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 750
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 750), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 750) && ($context["product_upc"] ?? null))) {
                // line 751
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 751), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 751);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 753
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 753), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 753) && ($context["product_ean"] ?? null))) {
                // line 754
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 754), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 754);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 756
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 756), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 756) && ($context["product_jan"] ?? null))) {
                // line 757
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 757), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 757);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 759
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 759), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 759) && ($context["product_isbn"] ?? null))) {
                // line 760
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 760), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 760);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 762
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 762), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 762) && ($context["product_mpn"] ?? null))) {
                // line 763
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 763), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 763);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 765
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 765), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 765) && ($context["product_location"] ?? null))) {
                // line 766
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 766), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 766);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 768
            echo "              </ul>
              ";
            // line 769
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 769), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 769)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 769), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 769) == "image"))) {
                // line 770
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 771
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 772
                if (($context["manufacturer_image"] ?? null)) {
                    // line 773
                    echo "                      <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 773), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 773);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 773), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 773);
                    echo "\"/>
                    ";
                }
                // line 775
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 779
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 779), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 779)) {
                // line 780
                echo "                <div class=\"custom-stats\">
                  ";
                // line 781
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 781), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 781)) {
                    // line 782
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 782), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 782);
                    echo "</b></div>
                  ";
                }
                // line 784
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 784), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 784)) {
                    // line 785
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 785), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 785);
                    echo "</b></div>
                  ";
                }
                // line 787
                echo "                </div>
              ";
            }
            // line 789
            echo "            </div>
          ";
        }
        // line 791
        echo "
          ";
        // line 792
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 792), "isPopup", [], "method", false, false, false, 792))) {
            // line 793
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 795
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 796
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 797
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 800
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 805
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 806
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 808
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 809
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 809), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 809);
            echo "</b>
                <a>";
            // line 810
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 814
        echo "
          ";
        // line 815
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 815), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 815), "isPopup", [], "method", false, false, false, 815)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 815))) {
            // line 816
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 817
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 817), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 817)) {
                // line 818
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 818), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 818);
                echo "</h5>
              ";
            }
            // line 820
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 821
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 821), "get", [0 => "countdownDay"], "method", false, false, false, 821);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 822
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 822), "get", [0 => "countdownHour"], "method", false, false, false, 822);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 823
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 823), "get", [0 => "countdownMin"], "method", false, false, false, 823);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 824
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 824), "get", [0 => "countdownSec"], "method", false, false, false, 824);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 828
        echo "
          ";
        // line 829
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 829), "isPopup", [0 => "options"], "method", false, false, false, 829))) {
            // line 830
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 833
            if ( !($context["special"] ?? null)) {
                // line 834
                echo "                 <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            } else {
                // line 836
                echo "                 <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 837
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            }
            // line 839
            echo "             </div>
             ";
            // line 840
            if (($context["tax"] ?? null)) {
                // line 841
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 843
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 844
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 846
            echo "
             ";
            // line 847
            if (($context["discounts"] ?? null)) {
                // line 848
                echo "               <div class=\"discounts\">
                 ";
                // line 849
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 850
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 850);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 850);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 852
                echo "               </div>
             ";
            }
            // line 854
            echo "           </div>
            ";
            // line 855
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 855), "isPopup", [0 => "options"], "method", false, false, false, 855) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 855), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 855)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 855), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 855) == "price"))) {
                // line 856
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 858
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 858), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 858)) {
                    // line 859
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 859), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 859);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 861
                echo "                  ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 861), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 861)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 861), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 861) == "list"))) {
                    // line 862
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 862), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 862);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 864
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 864), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 864) && ($context["reward"] ?? null))) {
                    // line 865
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 865), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 865);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 867
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 867), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 867) && ($context["model"] ?? null))) {
                    // line 868
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 868), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 868);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 870
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 870), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 870) && ($context["product_weight"] ?? null))) {
                    // line 871
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 871), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 871);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 873
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 873), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 873) && ($context["product_dimension"] ?? null))) {
                    // line 874
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 874), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 874);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 876
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 876), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 876) && ($context["product_sku"] ?? null))) {
                    // line 877
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 877), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 877);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 879
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 879), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 879) && ($context["product_upc"] ?? null))) {
                    // line 880
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 880), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 880);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 882
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 882), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 882) && ($context["product_ean"] ?? null))) {
                    // line 883
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 883), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 883);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 885
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 885), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 885) && ($context["product_jan"] ?? null))) {
                    // line 886
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 886), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 886);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 888
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 888), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 888) && ($context["product_isbn"] ?? null))) {
                    // line 889
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 889), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 889);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 891
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 891), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 891) && ($context["product_mpn"] ?? null))) {
                    // line 892
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 892), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 892);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 894
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 894), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 894) && ($context["product_location"] ?? null))) {
                    // line 895
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 895), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 895);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 897
                echo "                </ul>
                ";
                // line 898
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 898), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 898)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 898), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 898) == "image"))) {
                    // line 899
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 900
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                      ";
                    // line 901
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 902
                        echo "                        <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 902);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 902);
                        echo "\"/>
                      ";
                    }
                    // line 904
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 908
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 908), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 908)) {
                    // line 909
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 910
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 910), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 910)) {
                        // line 911
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 911), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 911);
                        echo "</b></div>
                    ";
                    }
                    // line 913
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 913), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 913)) {
                        // line 914
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 914), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 914);
                        echo "</b></div>
                    ";
                    }
                    // line 916
                    echo "                  </div>
                ";
                }
                // line 918
                echo "              </div>
            ";
            }
            // line 920
            echo "          </div>
          ";
        }
        // line 922
        echo "
          ";
        // line 923
        if (($context["options"] ?? null)) {
            // line 924
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 925
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 926
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 927
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 927) == "select")) {
                    // line 928
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 928)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 928);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 928), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 928)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 929
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 929);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 929);
                    echo "</label>
              <select name=\"option[";
                    // line 930
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 930);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 930);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 931
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 932
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 932));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 933
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 933);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 933);
                        echo "
                ";
                        // line 934
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 934) && ($context["optionPrice"] ?? null))) {
                            // line 935
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 935);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 935);
                            echo ")
                ";
                        }
                        // line 936
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 938
                    echo "              </select>
            </div>
            ";
                }
                // line 941
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 941) == "radio")) {
                    // line 942
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 942)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 942);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 942), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 942)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 943
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 943);
                    echo "</label>
              <div id=\"input-option";
                    // line 944
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 944);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 944));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 945
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 947
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 947);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 947);
                        echo "\" />
                    ";
                        // line 948
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 948)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 948), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 948);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 948), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 948);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 948);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 948);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 948) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 948);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 948);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 948), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 948);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 948);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 948) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 948);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 948);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 949
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 950
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 950);
                        echo "
                      ";
                        // line 951
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 951) && ($context["optionPrice"] ?? null))) {
                            // line 952
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 953
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 953);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 953);
                            echo ")
                        </span>
                      ";
                        }
                        // line 956
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 959
                    echo " </div>
            </div>
            ";
                }
                // line 962
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 962) == "checkbox")) {
                    // line 963
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 963)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 963);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 963), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 963)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 964
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 964);
                    echo "</label>
              <div id=\"input-option";
                    // line 965
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 965));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 966
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 968
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 968);
                        echo "\" />
                    ";
                        // line 969
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 969)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 969), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 969);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 969), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 969);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 969);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 969);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 969);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 969), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 969);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 969);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 969);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 970
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 971
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 971);
                        echo "
                      ";
                        // line 972
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 972) && ($context["optionPrice"] ?? null))) {
                            // line 973
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 973);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 973);
                            echo ")</span>
                      ";
                        }
                        // line 975
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 978
                    echo " </div>
            </div>
            ";
                }
                // line 981
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 981) == "text")) {
                    // line 982
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 982)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 982);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 983
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 983);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 983);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 984
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 984);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 984);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 984);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 984);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 987
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 987) == "textarea")) {
                    // line 988
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 988)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 988);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 989
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 989);
                    echo "</label>
              <textarea name=\"option[";
                    // line 990
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 990);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 990);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 990);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 990);
                    echo "</textarea>
            </div>
            ";
                }
                // line 993
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 993) == "file")) {
                    // line 994
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 994)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 994);
                    echo "\">
              <label class=\"control-label\">";
                    // line 995
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 995);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 996
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 996);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 997
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "\" />
            </div>
            ";
                }
                // line 1000
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1000) == "date")) {
                    // line 1001
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1001)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1001);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 1002
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1002);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 1004
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1004);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1004);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1004);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 1010
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1010) == "datetime")) {
                    // line 1011
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1011)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1011);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 1012
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1012);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 1014
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1014);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 1020
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1020) == "time")) {
                    // line 1021
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1021)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1021);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 1022
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1022);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 1024
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1024);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1024);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1024);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 1030
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1031
            echo "          </div>
          ";
        }
        // line 1033
        echo "
          ";
        // line 1034
        if (($context["recurrings"] ?? null)) {
            // line 1035
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 1038
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 1039
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1040
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1040);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1040);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1042
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 1046
        echo "
          ";
        // line 1047
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1047), "get", [0 => "catalogCartStatus"], "method", false, false, false, 1047) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1047), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 1047)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1047), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 1047)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1047), "isPopup", [], "method", false, false, false, 1047)))) {
            // line 1048
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 1051
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1051), "get", [0 => "catalogCartStatus"], "method", false, false, false, 1051)) {
                // line 1052
                echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                // line 1053
                echo ($context["entry_qty"] ?? null);
                echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 1054
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 1055
                echo ($context["product_id"] ?? null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 1061
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1061), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 1061) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1061), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 1061))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1061), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 1061);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></a>
                ";
            }
            // line 1063
            echo "                ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1063), "isPopup", [], "method", false, false, false, 1063))) {
                // line 1064
                echo "                  <div class=\"extra-group\">
                    ";
                // line 1065
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
                    // line 1066
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1066);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1066), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1066)) . "ButtonDisplay")], "method", false, false, false, 1066) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1066), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 1066))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1066), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 1066);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 1066);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 1066) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 1066) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 1066), "href", [], "any", false, false, false, 1066))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 1066), "href", [], "any", false, false, false, 1066);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 1066)], "method", false, false, false, 1066);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 1066);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 1066);
                    echo "</span></a>
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
                // line 1068
                echo "                  </div>
                ";
            }
            // line 1070
            echo "              </div>

              ";
            // line 1072
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1072), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 1072) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1072), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 1072)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1072), "isPopup", [0 => "quickview"], "method", false, false, false, 1072))) {
                // line 1073
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 1074
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1074), "isPopup", [0 => "options"], "method", false, false, false, 1074)) {
                    // line 1075
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1075), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 1075)) {
                        // line 1076
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1076), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 1076) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1076), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 1076))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1076), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 1076);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 1078
                    echo "
                  ";
                    // line 1079
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1079), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 1079)) {
                        // line 1080
                        echo "                  <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1080), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 1080) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1080), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 1080))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1080), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 1080);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 1082
                    echo "                ";
                }
                // line 1083
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1083), "isPopup", [0 => "quickview"], "method", false, false, false, 1083)) {
                    // line 1084
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1084), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 1084) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1084), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 1084))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1084), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 1084);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1084), "get", [0 => "quickviewExtraText"], "method", false, false, false, 1084);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1084), "get", [0 => "quickviewExtraText"], "method", false, false, false, 1084);
                    echo "</span></a>
                ";
                }
                // line 1086
                echo "              </div>
              ";
            }
            // line 1088
            echo "            </div>
          </div>
          ";
        }
        // line 1091
        echo "
          ";
        // line 1092
        if ((($context["minimum"] ?? null) > 1)) {
            // line 1093
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 1095
        echo "
          ";
        // line 1096
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1096), "isPopup", [0 => "options"], "method", false, false, false, 1096)) {
            // line 1097
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 1097)) {
                // line 1098
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 1098));
                echo "
            ";
            }
            // line 1100
            echo "          ";
        }
        // line 1101
        echo "          </div>
          ";
        // line 1102
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1102), "isPopup", [0 => "options"], "method", false, false, false, 1102)) {
            // line 1103
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 1103)) {
                // line 1104
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 1105
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 1105));
                echo "
          </div>
          ";
            }
            // line 1108
            echo "          ";
        }
        // line 1109
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1109), "isPopup", [], "method", false, false, false, 1109)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1109), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 1109) == "details"))) {
            // line 1110
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 1111
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 1112
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
                // line 1113
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 1113);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 1113);
                echo "</a>
                ";
                // line 1114
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1114)) {
                    echo "<b>,</b>";
                }
                // line 1115
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
            // line 1116
            echo "            </div>
          ";
        }
        // line 1118
        echo "        </div>
      </div>
      ";
        // line 1120
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1120), "isPopup", [0 => "quickview"], "method", false, false, false, 1120)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1120), "get", [0 => "quickviewDescription"], "method", false, false, false, 1120)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1120), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 1120) == "default"))) {
            // line 1121
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 1124
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 1126
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1126), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 1126)) {
                // line 1127
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 1129
            echo "          </div>
        </div>
      ";
        }
        // line 1132
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1132), "isPopup", [0 => "options"], "method", false, false, false, 1132)) {
            // line 1133
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 1133)) {
                // line 1134
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 1135
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 1135));
                echo "
        </div>
        ";
            }
            // line 1138
            echo "      ";
        }
        // line 1139
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1139), "isPopup", [], "method", false, false, false, 1139)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1139), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 1139) == "default"))) {
            // line 1140
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 1141
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 1142
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
                // line 1143
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 1143);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 1143);
                echo "</a>
            ";
                // line 1144
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1144)) {
                    echo "<b>,</b>";
                }
                // line 1145
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
            // line 1146
            echo "        </div>
      ";
        }
        // line 1148
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1148), "isPopup", [], "method", false, false, false, 1148)) {
            // line 1149
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 1150
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 1153
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
        // line 1272
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1277
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1283
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
        // line 1351
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 1355
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
        // line 1410
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1410), "isPopup", [], "method", false, false, false, 1410)) {
            // line 1411
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 1411);
            echo "
";
        }
        // line 1413
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
        return array (  4553 => 1413,  4548 => 1411,  4546 => 1410,  4488 => 1355,  4481 => 1351,  4410 => 1283,  4401 => 1277,  4393 => 1272,  4272 => 1153,  4266 => 1150,  4261 => 1149,  4258 => 1148,  4254 => 1146,  4240 => 1145,  4236 => 1144,  4229 => 1143,  4212 => 1142,  4208 => 1141,  4205 => 1140,  4202 => 1139,  4199 => 1138,  4193 => 1135,  4190 => 1134,  4187 => 1133,  4184 => 1132,  4179 => 1129,  4175 => 1127,  4173 => 1126,  4168 => 1124,  4161 => 1121,  4159 => 1120,  4155 => 1118,  4151 => 1116,  4137 => 1115,  4133 => 1114,  4126 => 1113,  4109 => 1112,  4105 => 1111,  4102 => 1110,  4099 => 1109,  4096 => 1108,  4090 => 1105,  4087 => 1104,  4084 => 1103,  4082 => 1102,  4079 => 1101,  4076 => 1100,  4070 => 1098,  4067 => 1097,  4065 => 1096,  4062 => 1095,  4056 => 1093,  4054 => 1092,  4051 => 1091,  4046 => 1088,  4042 => 1086,  4026 => 1084,  4023 => 1083,  4020 => 1082,  4004 => 1080,  4002 => 1079,  3999 => 1078,  3983 => 1076,  3980 => 1075,  3978 => 1074,  3975 => 1073,  3973 => 1072,  3969 => 1070,  3965 => 1068,  3920 => 1066,  3903 => 1065,  3900 => 1064,  3897 => 1063,  3882 => 1061,  3873 => 1055,  3867 => 1054,  3863 => 1053,  3860 => 1052,  3858 => 1051,  3853 => 1048,  3851 => 1047,  3848 => 1046,  3842 => 1042,  3831 => 1040,  3827 => 1039,  3823 => 1038,  3816 => 1035,  3814 => 1034,  3811 => 1033,  3807 => 1031,  3801 => 1030,  3788 => 1024,  3781 => 1022,  3772 => 1021,  3769 => 1020,  3756 => 1014,  3749 => 1012,  3740 => 1011,  3737 => 1010,  3724 => 1004,  3717 => 1002,  3708 => 1001,  3705 => 1000,  3697 => 997,  3689 => 996,  3685 => 995,  3676 => 994,  3673 => 993,  3661 => 990,  3655 => 989,  3646 => 988,  3643 => 987,  3631 => 984,  3625 => 983,  3616 => 982,  3613 => 981,  3608 => 978,  3599 => 975,  3592 => 973,  3590 => 972,  3586 => 971,  3583 => 970,  3552 => 969,  3546 => 968,  3542 => 966,  3536 => 965,  3532 => 964,  3519 => 963,  3516 => 962,  3511 => 959,  3502 => 956,  3495 => 953,  3492 => 952,  3490 => 951,  3486 => 950,  3483 => 949,  3452 => 948,  3446 => 947,  3442 => 945,  3436 => 944,  3432 => 943,  3419 => 942,  3416 => 941,  3411 => 938,  3404 => 936,  3397 => 935,  3395 => 934,  3388 => 933,  3384 => 932,  3380 => 931,  3374 => 930,  3368 => 929,  3355 => 928,  3352 => 927,  3348 => 926,  3344 => 925,  3341 => 924,  3339 => 923,  3336 => 922,  3332 => 920,  3328 => 918,  3324 => 916,  3318 => 914,  3315 => 913,  3309 => 911,  3307 => 910,  3304 => 909,  3301 => 908,  3293 => 904,  3273 => 902,  3271 => 901,  3267 => 900,  3264 => 899,  3262 => 898,  3259 => 897,  3251 => 895,  3248 => 894,  3240 => 892,  3237 => 891,  3229 => 889,  3226 => 888,  3218 => 886,  3215 => 885,  3207 => 883,  3204 => 882,  3196 => 880,  3193 => 879,  3185 => 877,  3182 => 876,  3170 => 874,  3167 => 873,  3159 => 871,  3156 => 870,  3148 => 868,  3145 => 867,  3137 => 865,  3134 => 864,  3124 => 862,  3121 => 861,  3107 => 859,  3105 => 858,  3101 => 856,  3099 => 855,  3096 => 854,  3092 => 852,  3081 => 850,  3077 => 849,  3074 => 848,  3072 => 847,  3069 => 846,  3061 => 844,  3058 => 843,  3050 => 841,  3048 => 840,  3045 => 839,  3040 => 837,  3035 => 836,  3029 => 834,  3027 => 833,  3022 => 830,  3020 => 829,  3017 => 828,  3010 => 824,  3006 => 823,  3002 => 822,  2998 => 821,  2993 => 820,  2987 => 818,  2985 => 817,  2982 => 816,  2980 => 815,  2977 => 814,  2970 => 810,  2966 => 809,  2962 => 808,  2958 => 806,  2952 => 805,  2945 => 800,  2940 => 797,  2937 => 796,  2933 => 795,  2929 => 793,  2927 => 792,  2924 => 791,  2920 => 789,  2916 => 787,  2910 => 785,  2907 => 784,  2901 => 782,  2899 => 781,  2896 => 780,  2893 => 779,  2885 => 775,  2865 => 773,  2863 => 772,  2859 => 771,  2856 => 770,  2854 => 769,  2851 => 768,  2843 => 766,  2840 => 765,  2832 => 763,  2829 => 762,  2821 => 760,  2818 => 759,  2810 => 757,  2807 => 756,  2799 => 754,  2796 => 753,  2788 => 751,  2785 => 750,  2777 => 748,  2774 => 747,  2762 => 745,  2759 => 744,  2751 => 742,  2748 => 741,  2740 => 739,  2737 => 738,  2729 => 736,  2726 => 735,  2716 => 733,  2713 => 732,  2699 => 730,  2697 => 729,  2693 => 727,  2691 => 726,  2688 => 725,  2683 => 722,  2679 => 720,  2677 => 719,  2672 => 717,  2665 => 714,  2663 => 713,  2660 => 712,  2657 => 711,  2651 => 708,  2648 => 707,  2646 => 706,  2641 => 705,  2639 => 704,  2635 => 702,  2631 => 700,  2627 => 698,  2613 => 697,  2609 => 696,  2602 => 695,  2585 => 694,  2581 => 693,  2578 => 692,  2575 => 691,  2570 => 688,  2566 => 686,  2564 => 685,  2559 => 683,  2552 => 680,  2549 => 679,  2546 => 678,  2540 => 675,  2537 => 674,  2534 => 673,  2531 => 672,  2523 => 670,  2521 => 669,  2518 => 668,  2515 => 667,  2511 => 665,  2486 => 662,  2481 => 661,  2464 => 660,  2461 => 659,  2450 => 650,  2413 => 647,  2408 => 646,  2391 => 645,  2384 => 643,  2373 => 642,  2370 => 641,  2368 => 640,  2365 => 639,  2361 => 637,  2348 => 635,  2344 => 634,  2341 => 633,  2339 => 632,  2328 => 623,  2289 => 620,  2280 => 619,  2277 => 618,  2259 => 617,  2257 => 616,  2250 => 614,  2240 => 613,  2234 => 612,  2231 => 611,  2229 => 610,  2224 => 609,  2222 => 608,  2221 => 607,  2220 => 606,  2219 => 605,  2218 => 604,  2216 => 603,  2213 => 602,  2207 => 600,  2204 => 599,  2202 => 598,  2197 => 597,  2192 => 595,  2188 => 594,  2182 => 591,  2177 => 590,  2174 => 589,  2170 => 587,  2156 => 586,  2152 => 585,  2145 => 584,  2128 => 583,  2124 => 582,  2121 => 581,  2118 => 580,  2115 => 579,  2109 => 576,  2106 => 575,  2103 => 574,  2100 => 573,  2095 => 570,  2091 => 568,  2089 => 567,  2084 => 565,  2077 => 562,  2075 => 561,  2071 => 559,  2067 => 557,  2053 => 556,  2049 => 555,  2042 => 554,  2025 => 553,  2021 => 552,  2018 => 551,  2015 => 550,  2012 => 549,  2006 => 546,  2003 => 545,  2000 => 544,  1998 => 543,  1995 => 542,  1992 => 541,  1986 => 539,  1983 => 538,  1981 => 537,  1978 => 536,  1972 => 534,  1970 => 533,  1967 => 532,  1962 => 529,  1958 => 527,  1942 => 525,  1939 => 524,  1936 => 523,  1920 => 521,  1918 => 520,  1915 => 519,  1899 => 517,  1896 => 516,  1894 => 515,  1891 => 514,  1889 => 513,  1885 => 511,  1881 => 509,  1836 => 507,  1819 => 506,  1816 => 505,  1813 => 504,  1798 => 502,  1789 => 496,  1783 => 495,  1779 => 494,  1776 => 493,  1774 => 492,  1769 => 489,  1767 => 488,  1764 => 487,  1758 => 483,  1747 => 481,  1743 => 480,  1739 => 479,  1732 => 476,  1730 => 475,  1727 => 474,  1723 => 472,  1717 => 471,  1704 => 465,  1697 => 463,  1688 => 462,  1685 => 461,  1672 => 455,  1665 => 453,  1656 => 452,  1653 => 451,  1640 => 445,  1633 => 443,  1624 => 442,  1621 => 441,  1613 => 438,  1605 => 437,  1601 => 436,  1592 => 435,  1589 => 434,  1577 => 431,  1571 => 430,  1562 => 429,  1559 => 428,  1547 => 425,  1541 => 424,  1532 => 423,  1529 => 422,  1524 => 419,  1515 => 416,  1508 => 414,  1506 => 413,  1502 => 412,  1499 => 411,  1468 => 410,  1462 => 409,  1458 => 407,  1452 => 406,  1448 => 405,  1435 => 404,  1432 => 403,  1427 => 400,  1418 => 397,  1411 => 394,  1408 => 393,  1406 => 392,  1402 => 391,  1399 => 390,  1368 => 389,  1362 => 388,  1358 => 386,  1352 => 385,  1348 => 384,  1335 => 383,  1332 => 382,  1327 => 379,  1320 => 377,  1313 => 376,  1311 => 375,  1304 => 374,  1300 => 373,  1296 => 372,  1290 => 371,  1284 => 370,  1271 => 369,  1268 => 368,  1264 => 367,  1260 => 366,  1257 => 365,  1255 => 364,  1252 => 363,  1248 => 361,  1244 => 359,  1240 => 357,  1234 => 355,  1231 => 354,  1225 => 352,  1223 => 351,  1220 => 350,  1217 => 349,  1209 => 345,  1189 => 343,  1187 => 342,  1183 => 341,  1180 => 340,  1178 => 339,  1175 => 338,  1167 => 336,  1164 => 335,  1156 => 333,  1153 => 332,  1145 => 330,  1142 => 329,  1134 => 327,  1131 => 326,  1123 => 324,  1120 => 323,  1112 => 321,  1109 => 320,  1101 => 318,  1098 => 317,  1086 => 315,  1083 => 314,  1075 => 312,  1072 => 311,  1064 => 309,  1061 => 308,  1053 => 306,  1050 => 305,  1040 => 303,  1037 => 302,  1023 => 300,  1021 => 299,  1017 => 297,  1015 => 296,  1012 => 295,  1008 => 293,  997 => 291,  993 => 290,  990 => 289,  988 => 288,  985 => 287,  977 => 285,  974 => 284,  966 => 282,  964 => 281,  961 => 280,  956 => 278,  951 => 277,  945 => 275,  943 => 274,  938 => 271,  936 => 270,  933 => 269,  926 => 265,  922 => 264,  918 => 263,  914 => 262,  909 => 261,  903 => 259,  901 => 258,  898 => 257,  896 => 256,  893 => 255,  886 => 251,  882 => 250,  878 => 249,  874 => 247,  868 => 246,  861 => 241,  856 => 238,  853 => 237,  849 => 236,  845 => 234,  843 => 233,  840 => 232,  836 => 230,  832 => 228,  826 => 226,  823 => 225,  817 => 223,  815 => 222,  812 => 221,  809 => 220,  801 => 216,  781 => 214,  779 => 213,  775 => 212,  772 => 211,  770 => 210,  767 => 209,  759 => 207,  756 => 206,  748 => 204,  745 => 203,  737 => 201,  734 => 200,  726 => 198,  723 => 197,  715 => 195,  712 => 194,  704 => 192,  701 => 191,  693 => 189,  690 => 188,  678 => 186,  675 => 185,  667 => 183,  664 => 182,  656 => 180,  653 => 179,  645 => 177,  642 => 176,  632 => 174,  629 => 173,  615 => 171,  613 => 170,  609 => 168,  607 => 167,  604 => 166,  599 => 163,  595 => 161,  593 => 160,  588 => 158,  581 => 155,  579 => 154,  576 => 153,  573 => 152,  567 => 149,  564 => 148,  562 => 147,  557 => 146,  555 => 145,  551 => 143,  547 => 141,  543 => 139,  529 => 138,  525 => 137,  518 => 136,  501 => 135,  497 => 134,  494 => 133,  491 => 132,  486 => 129,  482 => 127,  480 => 126,  475 => 124,  468 => 121,  465 => 120,  462 => 119,  456 => 116,  453 => 115,  450 => 114,  447 => 113,  439 => 111,  437 => 110,  434 => 109,  431 => 108,  427 => 106,  402 => 103,  397 => 102,  380 => 101,  377 => 100,  366 => 91,  329 => 88,  324 => 87,  307 => 86,  300 => 84,  289 => 83,  286 => 82,  284 => 81,  281 => 80,  277 => 78,  264 => 76,  260 => 75,  257 => 74,  255 => 73,  244 => 64,  205 => 61,  196 => 60,  193 => 59,  175 => 58,  173 => 57,  166 => 55,  156 => 54,  150 => 53,  147 => 52,  145 => 51,  140 => 50,  138 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  132 => 44,  129 => 43,  123 => 41,  120 => 40,  118 => 39,  113 => 38,  108 => 36,  104 => 35,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  76 => 26,  72 => 25,  69 => 24,  67 => 23,  63 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
