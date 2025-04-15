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
class __TwigTemplate_708ea3239fc5c344840ba13542893ceeb3ecc304428c98716f2097c690362788 extends \Twig\Template
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
        // line 170
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
            ";
        // line 172
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 172), "isPopup", [0 => "options"], "method", false, false, false, 172)) {
            // line 173
            echo "              <div class=\"title page-title\">
                ";
            // line 174
            echo ($context["heading_title"] ?? null);
            echo "
              </div>
              ";
            // line 176
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 176)) {
                // line 177
                echo "                <div class=\"product-blocks blocks-top\">
                  ";
                // line 178
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 178));
                echo "
                </div>
              ";
            }
            // line 181
            echo "            ";
        }
        // line 182
        echo "
            ";
        // line 183
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 183), "isPopup", [0 => "quickview"], "method", false, false, false, 183)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "get", [0 => "quickviewDescription"], "method", false, false, false, 183)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 183) == "top"))) {
            // line 184
            echo "              <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">
                    ";
            // line 187
            echo ($context["description"] ?? null);
            echo "
                  </div>
                  ";
            // line 189
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 189), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 189)) {
                // line 190
                echo "                    <div class=\"block-expand-overlay\">
                      <a class=\"block-expand btn\"></a>
                    </div>
                  ";
            }
            // line 194
            echo "                </div>
              </div>
            ";
        }
        // line 197
        echo "
            ";
        // line 198
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 198), "isPopup", [0 => "options"], "method", false, false, false, 198) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 198), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 198)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 198), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 198) == "default"))) {
            // line 199
            echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
            // line 201
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 201)) {
                // line 202
                echo "                    <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\">
                      <b>
                        ";
                // line 204
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 204), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 204);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 208
                echo ($context["stock"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 212
            echo "                  ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 212)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 212) == "list"))) {
                // line 213
                echo "                    <li class=\"product-manufacturer\">
                      <b>
                        ";
                // line 215
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 215), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 215);
                echo "
                        :
                      </b>
                      <a href=\"";
                // line 218
                echo ($context["manufacturers"] ?? null);
                echo "\">
                        ";
                // line 219
                echo ($context["manufacturer"] ?? null);
                echo "
                      </a>
                    </li>
                  ";
            }
            // line 223
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 223), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 223) && ($context["reward"] ?? null))) {
                // line 224
                echo "                    <li class=\"product-reward\">
                      <b>
                        ";
                // line 226
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 226), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 226);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 230
                echo ($context["reward"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 234
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 234), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 234) && ($context["model"] ?? null))) {
                // line 235
                echo "                    <li class=\"product-model\">
                      <b>
                        ";
                // line 237
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 237), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 237);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 241
                echo ($context["model"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 245
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 245), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 245) && ($context["product_weight"] ?? null))) {
                // line 246
                echo "                    <li class=\"product-weight\">
                      <b>
                        ";
                // line 248
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 248), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 248);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 252
                echo ($context["product_weight"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 256
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 256), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 256) && ($context["product_dimension"] ?? null))) {
                // line 257
                echo "                    <li class=\"product-dimension\">
                      <b>
                        ";
                // line 259
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 259), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 259);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 263
                echo ($context["product_length"] ?? null);
                echo "
                        x
                        ";
                // line 265
                echo ($context["product_width"] ?? null);
                echo "
                        x
                        ";
                // line 267
                echo ($context["product_height"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 271
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 271), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 271) && ($context["product_sku"] ?? null))) {
                // line 272
                echo "                    <li class=\"product-sku\">
                      <b>
                        ";
                // line 274
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 274), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 274);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 278
                echo ($context["product_sku"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 282
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 282), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 282) && ($context["product_upc"] ?? null))) {
                // line 283
                echo "                    <li class=\"product-upc\">
                      <b>
                        ";
                // line 285
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 285), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 285);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 289
                echo ($context["product_upc"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 293
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 293), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 293) && ($context["product_ean"] ?? null))) {
                // line 294
                echo "                    <li class=\"product-ean\">
                      <b>
                        ";
                // line 296
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 296), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 296);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 300
                echo ($context["product_ean"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 304
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 304), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 304) && ($context["product_jan"] ?? null))) {
                // line 305
                echo "                    <li class=\"product-jan\">
                      <b>
                        ";
                // line 307
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 307), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 307);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 311
                echo ($context["product_jan"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 315
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 315), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 315) && ($context["product_isbn"] ?? null))) {
                // line 316
                echo "                    <li class=\"product-isbn\">
                      <b>
                        ";
                // line 318
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 318), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 318);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 322
                echo ($context["product_isbn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 326
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 326) && ($context["product_mpn"] ?? null))) {
                // line 327
                echo "                    <li class=\"product-mpn\">
                      <b>
                        ";
                // line 329
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 329), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 329);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 333
                echo ($context["product_mpn"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 337
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 337), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 337) && ($context["product_location"] ?? null))) {
                // line 338
                echo "                    <li class=\"product-location\">
                      <b>
                        ";
                // line 340
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 340), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 340);
                echo "
                        :
                      </b>
                      <span>
                        ";
                // line 344
                echo ($context["product_location"] ?? null);
                echo "
                      </span>
                    </li>
                  ";
            }
            // line 348
            echo "                </ul>
                ";
            // line 349
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 349), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 349)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 349), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 349) == "image"))) {
                // line 350
                echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                // line 351
                echo ($context["manufacturers"] ?? null);
                echo "\">
                      ";
                // line 352
                if (($context["manufacturer_image"] ?? null)) {
                    // line 353
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
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 353), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 353);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 353), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 353);
                    echo "\" />
                      ";
                }
                // line 355
                echo "                      <span>
                        ";
                // line 356
                echo ($context["manufacturer"] ?? null);
                echo "
                      </span>
                    </a>
                  </div>
                ";
            }
            // line 361
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 361), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 361)) {
                // line 362
                echo "                  <div class=\"custom-stats\">
                    ";
                // line 363
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 363), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 363)) {
                    // line 364
                    echo "                      <div class=\"product-sold\">
                        <b>
                          ";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 366), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 366);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 370
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 370), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 370)) {
                    // line 371
                    echo "                      <div class=\"product-views\">
                        <b>
                          ";
                    // line 373
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 373), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 373);
                    echo "
                        </b>
                      </div>
                    ";
                }
                // line 377
                echo "                  </div>
                ";
            }
            // line 379
            echo "              </div>
            ";
        }
        // line 381
        echo "
            ";
        // line 382
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 382), "isPopup", [], "method", false, false, false, 382))) {
            // line 383
            echo "              <div class=\"rating rating-page\">
                <div class=\"rating-stars\">
                  ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 386
                echo "                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 387
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                } else {
                    // line 391
                    echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-1x\"></i>
                        <i class=\"fa fa-star-o fa-stack-1x\"></i>
                      </span>
                    ";
                }
                // line 396
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            echo "                </div>
                <div class=\"review-links\">
                  <a>
                    ";
            // line 400
            echo ($context["reviews"] ?? null);
            echo "
                  </a>
                  <b>
                    ";
            // line 403
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 403), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 403);
            echo "
                  </b>
                  <a>
                    ";
            // line 406
            echo ($context["text_write"] ?? null);
            echo "
                  </a>
                </div>
              </div>
            ";
        }
        // line 411
        echo "
            ";
        // line 412
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 412), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 412), "isPopup", [], "method", false, false, false, 412)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 412))) {
            // line 413
            echo "              <div class=\"countdown-wrapper\">
                ";
            // line 414
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 414), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 414)) {
                // line 415
                echo "                  <h5 class=\"countdown-title title\">
                    ";
                // line 416
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 416), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 416);
                echo "
                  </h5>
                ";
            }
            // line 419
            echo "                <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 423
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 423), "get", [0 => "countdownDay"], "method", false, false, false, 423);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 429
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 429), "get", [0 => "countdownHour"], "method", false, false, false, 429);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 435
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 435), "get", [0 => "countdownMin"], "method", false, false, false, 435);
            echo "
                    </span>
                  </div>
                  <div>
                    <i class=\"fa fa-spinner fa-spin\"></i>
                    <span>
                      ";
            // line 441
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 441), "get", [0 => "countdownSec"], "method", false, false, false, 441);
            echo "
                    </span>
                  </div>
                </div>
              </div>
            ";
        }
        // line 447
        echo "
            ";
        // line 448
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 448), "isPopup", [0 => "options"], "method", false, false, false, 448))) {
            // line 449
            echo "              <div class=\"product-price-group\">
                <div class=\"price-wrapper\">
                  <div class=\"price-group\">
                    ";
            // line 452
            if ( !($context["special"] ?? null)) {
                // line 453
                echo "                      <div class=\"product-price\">
                        ";
                // line 454
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            } else {
                // line 457
                echo "                      <div class=\"product-price-new\">
                        ";
                // line 458
                echo ($context["special"] ?? null);
                echo "
                      </div>
                      <div class=\"product-price-old\">
                        ";
                // line 461
                echo ($context["price"] ?? null);
                echo "
                      </div>
                    ";
            }
            // line 464
            echo "                  </div>
                  ";
            // line 465
            if (($context["tax"] ?? null)) {
                // line 466
                echo "                    <div class=\"product-tax\">
                      ";
                // line 467
                echo ($context["text_tax"] ?? null);
                echo "
                      ";
                // line 468
                echo ($context["tax"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 471
            echo "                  ";
            if (($context["points"] ?? null)) {
                // line 472
                echo "                    <div class=\"product-points\">
                      ";
                // line 473
                echo ($context["text_points"] ?? null);
                echo "
                      ";
                // line 474
                echo ($context["points"] ?? null);
                echo "
                    </div>
                  ";
            }
            // line 477
            echo "
                  ";
            // line 478
            if (($context["discounts"] ?? null)) {
                // line 479
                echo "                    <div class=\"discounts\">
                      ";
                // line 480
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 481
                    echo "                        <div class=\"product-discount\">
                          ";
                    // line 482
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 482);
                    echo "
                          ";
                    // line 483
                    echo ($context["text_discount"] ?? null);
                    echo "
                          ";
                    // line 484
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 484);
                    echo "
                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                echo "                    </div>
                  ";
            }
            // line 489
            echo "                </div>
                ";
            // line 490
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 490), "isPopup", [0 => "options"], "method", false, false, false, 490) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 490), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 490)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 490), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 490) == "price"))) {
                // line 491
                echo "                  <div class=\"product-stats\">
                    <ul class=\"list-unstyled\">
                      ";
                // line 493
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 493), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 493)) {
                    // line 494
                    echo "                        <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\">
                          <b>
                            ";
                    // line 496
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 496), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 496);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 500
                    echo ($context["stock"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 504
                echo "                      ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 504), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 504)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 504), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 504) == "list"))) {
                    // line 505
                    echo "                        <li class=\"product-manufacturer\">
                          <b>
                            ";
                    // line 507
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 507);
                    echo "
                            :
                          </b>
                          <a href=\"";
                    // line 510
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                            ";
                    // line 511
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </a>
                        </li>
                      ";
                }
                // line 515
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 515), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 515) && ($context["reward"] ?? null))) {
                    // line 516
                    echo "                        <li class=\"product-reward\">
                          <b>
                            ";
                    // line 518
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 518), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 518);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 522
                    echo ($context["reward"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 526
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 526), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 526) && ($context["model"] ?? null))) {
                    // line 527
                    echo "                        <li class=\"product-model\">
                          <b>
                            ";
                    // line 529
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 529), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 529);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 533
                    echo ($context["model"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 537
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 537), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 537) && ($context["product_weight"] ?? null))) {
                    // line 538
                    echo "                        <li class=\"product-weight\">
                          <b>
                            ";
                    // line 540
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 540);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 544
                    echo ($context["product_weight"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 548
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 548), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 548) && ($context["product_dimension"] ?? null))) {
                    // line 549
                    echo "                        <li class=\"product-dimension\">
                          <b>
                            ";
                    // line 551
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 551), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 551);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 555
                    echo ($context["product_length"] ?? null);
                    echo "
                            x
                            ";
                    // line 557
                    echo ($context["product_width"] ?? null);
                    echo "
                            x
                            ";
                    // line 559
                    echo ($context["product_height"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 563
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 563), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 563) && ($context["product_sku"] ?? null))) {
                    // line 564
                    echo "                        <li class=\"product-sku\">
                          <b>
                            ";
                    // line 566
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 566), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 566);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 570
                    echo ($context["product_sku"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 574
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 574), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 574) && ($context["product_upc"] ?? null))) {
                    // line 575
                    echo "                        <li class=\"product-upc\">
                          <b>
                            ";
                    // line 577
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 577), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 577);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 581
                    echo ($context["product_upc"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 585
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 585), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 585) && ($context["product_ean"] ?? null))) {
                    // line 586
                    echo "                        <li class=\"product-ean\">
                          <b>
                            ";
                    // line 588
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 588), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 588);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 592
                    echo ($context["product_ean"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 596
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 596), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 596) && ($context["product_jan"] ?? null))) {
                    // line 597
                    echo "                        <li class=\"product-jan\">
                          <b>
                            ";
                    // line 599
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 599), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 599);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 603
                    echo ($context["product_jan"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 607
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 607), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 607) && ($context["product_isbn"] ?? null))) {
                    // line 608
                    echo "                        <li class=\"product-isbn\">
                          <b>
                            ";
                    // line 610
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 610), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 610);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 614
                    echo ($context["product_isbn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 618
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 618), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 618) && ($context["product_mpn"] ?? null))) {
                    // line 619
                    echo "                        <li class=\"product-mpn\">
                          <b>
                            ";
                    // line 621
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 621), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 621);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 625
                    echo ($context["product_mpn"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 629
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 629), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 629) && ($context["product_location"] ?? null))) {
                    // line 630
                    echo "                        <li class=\"product-location\">
                          <b>
                            ";
                    // line 632
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 632), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 632);
                    echo "
                            :
                          </b>
                          <span>
                            ";
                    // line 636
                    echo ($context["product_location"] ?? null);
                    echo "
                          </span>
                        </li>
                      ";
                }
                // line 640
                echo "                    </ul>
                    ";
                // line 641
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 641), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 641)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 641), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 641) == "image"))) {
                    // line 642
                    echo "                      <div class=\"brand-image product-manufacturer\">
                        <a href=\"";
                    // line 643
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                          ";
                    // line 644
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 645
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
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 645), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 645);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 645), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 645);
                        echo "\" />
                          ";
                    }
                    // line 647
                    echo "                          <span>
                            ";
                    // line 648
                    echo ($context["manufacturer"] ?? null);
                    echo "
                          </span>
                        </a>
                      </div>
                    ";
                }
                // line 653
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 653), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 653)) {
                    // line 654
                    echo "                      <div class=\"custom-stats\">
                        ";
                    // line 655
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 655), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 655)) {
                        // line 656
                        echo "                          <div class=\"product-sold\">
                            <b>
                              ";
                        // line 658
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 658), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 658);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 662
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 662), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 662)) {
                        // line 663
                        echo "                          <div class=\"product-views\">
                            <b>
                              ";
                        // line 665
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 665), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 665);
                        echo "
                            </b>
                          </div>
                        ";
                    }
                    // line 669
                    echo "                      </div>
                    ";
                }
                // line 671
                echo "                  </div>
                ";
            }
            // line 673
            echo "              </div>
            ";
        }
        // line 675
        echo "
            ";
        // line 676
        if (($context["options"] ?? null)) {
            // line 677
            echo "              <div class=\"product-options\">
                <h3 class=\"options-title title\">
                  ";
            // line 679
            echo ($context["text_option"] ?? null);
            echo "
                </h3>
                ";
            // line 681
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 682
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 682) == "select")) {
                    // line 683
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 683)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 683);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 683), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 683)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 684
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 684);
                    echo "\">
                        ";
                    // line 685
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 685);
                    echo "
                      </label>
                      <select name=\"option[";
                    // line 687
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 687);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 687);
                    echo "\" class=\"form-control\">
                        <option value=\"\">
                          ";
                    // line 689
                    echo ($context["text_select"] ?? null);
                    echo "
                        </option>
                        ";
                    // line 691
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 691));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 692
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 692);
                        echo "\">
                            ";
                        // line 693
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 693);
                        echo "
                            ";
                        // line 694
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 694) && ($context["optionPrice"] ?? null))) {
                            // line 695
                            echo "                              (
                              ";
                            // line 696
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 696);
                            echo "
                              ";
                            // line 697
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 697);
                            echo "
                              )
                            ";
                        }
                        // line 700
                        echo "                          </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 702
                    echo "                      </select>
                    </div>
                  ";
                }
                // line 705
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 705) == "radio")) {
                    // line 706
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 706)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 706);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 706), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 706)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 708
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 708);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 710
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 710);
                    echo "\">
                        ";
                    // line 711
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 711));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 712
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 714
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 714);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 714);
                        echo "\" />
                              ";
                        // line 715
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 715)) {
                            // line 716
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 716), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 716);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 716), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 716);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 716);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 716);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 716) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 716);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 716);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 716), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 716);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 716);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 716) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 716);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 716);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 718
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 719
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 719);
                        echo "
                                ";
                        // line 720
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 720) && ($context["optionPrice"] ?? null))) {
                            // line 721
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 723
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 723);
                            echo "
                                    ";
                            // line 724
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 724);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 728
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 732
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 735
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 735) == "checkbox")) {
                    // line 736
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 736)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 736);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 736), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 736)) {
                        echo "push-option";
                    }
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 738
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 738);
                    echo "
                      </label>
                      <div id=\"input-option";
                    // line 740
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 740);
                    echo "\">
                        ";
                    // line 741
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 741));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 742
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 744
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 744);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 744);
                        echo "\" />
                              ";
                        // line 745
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 745)) {
                            // line 746
                            echo "                                <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 746), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 746);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 746), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 746);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 746);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 746);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 746) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 746);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 746);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 746), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 746);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 746);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 746) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 746);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 746);
                                echo ") ";
                            }
                            echo "\" />
                              ";
                        }
                        // line 748
                        echo "                              <span class=\"option-value\">
                                ";
                        // line 749
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 749);
                        echo "
                                ";
                        // line 750
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 750) && ($context["optionPrice"] ?? null))) {
                            // line 751
                            echo "                                  <span class=\"option-price\">
                                    (
                                    ";
                            // line 753
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 753);
                            echo "
                                    ";
                            // line 754
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 754);
                            echo "
                                    )
                                  </span>
                                ";
                        }
                        // line 758
                        echo "                              </span>
                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 762
                    echo "                      </div>
                    </div>
                  ";
                }
                // line 765
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 765) == "text")) {
                    // line 766
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 766)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 766);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 767
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 767);
                    echo "\">
                        ";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 768);
                    echo "
                      </label>
                      <input type=\"text\" name=\"option[";
                    // line 770
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 770);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 770);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 770);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 770);
                    echo "\" class=\"form-control\" />
                    </div>
                  ";
                }
                // line 773
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 773) == "textarea")) {
                    // line 774
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 774)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 774);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 775
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 775);
                    echo "\">
                        ";
                    // line 776
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 776);
                    echo "
                      </label>
                      <textarea name=\"option[";
                    // line 778
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 778);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 778);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 778);
                    echo "\" class=\"form-control\">
                        ";
                    // line 779
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 779);
                    echo "
                      </textarea>
                    </div>
                  ";
                }
                // line 783
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 783) == "file")) {
                    // line 784
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 784)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 784);
                    echo "\">
                      <label class=\"control-label\">
                        ";
                    // line 786
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 786);
                    echo "
                      </label>
                      <button type=\"button\" id=\"button-upload";
                    // line 788
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 788);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                        <i class=\"fa fa-upload\"></i>
                        ";
                    // line 790
                    echo ($context["button_upload"] ?? null);
                    echo "
                      </button>
                      <input type=\"hidden\" name=\"option[";
                    // line 792
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 792);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 792);
                    echo "\" />
                    </div>
                  ";
                }
                // line 795
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 795) == "date")) {
                    // line 796
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 796)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 796);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 797
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 797);
                    echo "\">
                        ";
                    // line 798
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 798);
                    echo "
                      </label>
                      <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 801
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 801);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 801);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 801);
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
                // line 810
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 810) == "datetime")) {
                    // line 811
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 811)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 811);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 812
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 812);
                    echo "\">
                        ";
                    // line 813
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 813);
                    echo "
                      </label>
                      <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 816
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 816);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 816);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 816);
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
                // line 825
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 825) == "time")) {
                    // line 826
                    echo "                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 826)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 826);
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 827
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 827);
                    echo "\">
                        ";
                    // line 828
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 828);
                    echo "
                      </label>
                      <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                        <input type=\"text\" name=\"option[";
                    // line 831
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 831);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 831);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 831);
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
                // line 840
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 841
            echo "              </div>
            ";
        }
        // line 843
        echo "
            ";
        // line 844
        if (($context["recurrings"] ?? null)) {
            // line 845
            echo "              <h3 class=\"title recurring-title\">
                ";
            // line 846
            echo ($context["text_payment_recurring"] ?? null);
            echo "
              </h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">
                    ";
            // line 851
            echo ($context["text_select"] ?? null);
            echo "
                  </option>
                  ";
            // line 853
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 854
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 854);
                echo "\">
                      ";
                // line 855
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 855);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 858
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 862
        echo "
            ";
        // line 863
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 863), "get", [0 => "catalogCartStatus"], "method", false, false, false, 863) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 863), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 863)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 863), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 863)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 863), "isPopup", [], "method", false, false, false, 863)))) {
            // line 864
            echo "              <div class=\"button-group-page\">
                <div class=\"buttons-wrapper\">
                  <div class=\"stepper-group cart-group\">
                    ";
            // line 867
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 867), "get", [0 => "catalogCartStatus"], "method", false, false, false, 867)) {
                // line 868
                echo "                      <div class=\"stepper\">
                        <label class=\"control-label\" for=\"product-quantity\">
                          ";
                // line 870
                echo ($context["entry_qty"] ?? null);
                echo "
                        </label>
                        <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 872
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\" />
                        <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 873
                echo ($context["product_id"] ?? null);
                echo "\" />
                        <span>
                          <i class=\"fa fa-angle-up\"></i>
                          <i class=\"fa fa-angle-down\"></i>
                        </span>
                      </div>
                      <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 879
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 879), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 879) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 879), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 879))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 879), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 879);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo ">
                        <span class=\"btn-text\">
                          ";
                // line 881
                echo ($context["button_cart"] ?? null);
                echo "
                        </span>
                      </a>
                    ";
            }
            // line 885
            echo "                    ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 885), "isPopup", [], "method", false, false, false, 885))) {
                // line 886
                echo "                      <div class=\"extra-group\">
                        ";
                // line 887
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
                    // line 888
                    echo "                          <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 888);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 888), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 888)) . "ButtonDisplay")], "method", false, false, false, 888) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 888), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 888))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 888), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 888);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 888);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 888) == "quickbuy")) {
                        echo " data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 888) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 888), "href", [], "any", false, false, false, 888))) {
                        echo " href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 888), "href", [], "any", false, false, false, 888);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 888)], "method", false, false, false, 888);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\" ";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 888);
                    echo "</span>\">
                            <span class=\"btn-text\">
                              ";
                    // line 890
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 890);
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
                // line 894
                echo "                      </div>
                    ";
            }
            // line 896
            echo "                  </div>

                  ";
            // line 898
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 898), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 898) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 898), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 898)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 898), "isPopup", [0 => "quickview"], "method", false, false, false, 898))) {
                // line 899
                echo "                    <div class=\"wishlist-compare\">
                      ";
                // line 900
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 900), "isPopup", [0 => "options"], "method", false, false, false, 900)) {
                    // line 901
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 901), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 901)) {
                        // line 902
                        echo "                          <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 902) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 902))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 902), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 902);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 904
                        echo ($context["button_wishlist"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 908
                    echo "
                        ";
                    // line 909
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 909), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 909)) {
                        // line 910
                        echo "                          <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 910), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 910) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 910), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 910))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 910), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 910);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\">
                            <span class=\"btn-text\">
                              ";
                        // line 912
                        echo ($context["button_compare"] ?? null);
                        echo "
                            </span>
                          </a>
                        ";
                    }
                    // line 916
                    echo "                      ";
                }
                // line 917
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 917), "isPopup", [0 => "quickview"], "method", false, false, false, 917)) {
                    // line 918
                    echo "                        <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 918), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 918) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 918), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 918))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 918), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 918);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 918), "get", [0 => "quickviewExtraText"], "method", false, false, false, 918);
                        echo "\" ";
                    }
                    echo ">
                          <span class=\"btn-text\">
                            ";
                    // line 920
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 920), "get", [0 => "quickviewExtraText"], "method", false, false, false, 920);
                    echo "
                          </span>
                        </a>
                      ";
                }
                // line 924
                echo "                    </div>
                  ";
            }
            // line 926
            echo "                </div>
              </div>
            ";
        }
        // line 929
        echo "
            ";
        // line 930
        if ((($context["minimum"] ?? null) > 1)) {
            // line 931
            echo "              <div class=\"minimum alert alert-info\">
                <i class=\"fa fa-info-circle\"></i>
                ";
            // line 933
            echo ($context["text_minimum"] ?? null);
            echo "
              </div>
            ";
        }
        // line 936
        echo "
            ";
        // line 937
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 937), "isPopup", [0 => "options"], "method", false, false, false, 937)) {
            // line 938
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 938)) {
                // line 939
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 939));
                echo "
              ";
            }
            // line 941
            echo "            ";
        }
        // line 942
        echo "          </div>
          ";
        // line 943
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 943), "isPopup", [0 => "options"], "method", false, false, false, 943)) {
            // line 944
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 944)) {
                // line 945
                echo "              <div class=\"product-blocks blocks-bottom\">
                ";
                // line 946
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 946));
                echo "
              </div>
            ";
            }
            // line 949
            echo "          ";
        }
        // line 950
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 950), "isPopup", [], "method", false, false, false, 950)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 950), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 950) == "details"))) {
            // line 951
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">
                ";
            // line 953
            echo ($context["text_tags"] ?? null);
            echo "
              </span>
              ";
            // line 955
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
                // line 956
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 956);
                echo "\">
                  ";
                // line 957
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 957);
                echo "
                </a>
                ";
                // line 959
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 959)) {
                    // line 960
                    echo "                  <b>
                    ,
                  </b>
                ";
                }
                // line 964
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
            // line 965
            echo "            </div>
          ";
        }
        // line 967
        echo "        </div>
      </div>

      ";
        // line 971
        echo "      ";
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 971), "isPopup", [0 => "quickview"], "method", false, false, false, 971)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 971), "get", [0 => "quickviewDescription"], "method", false, false, false, 971)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 971), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 971) == "default"))) {
            // line 972
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 975
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 977
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 977), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 977)) {
                // line 978
                echo "              <div class=\"block-expand-overlay\">
                <a class=\"block-expand btn\"></a>
              </div>
            ";
            }
            // line 982
            echo "          </div>
        </div>
      ";
        }
        // line 985
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 985), "isPopup", [0 => "options"], "method", false, false, false, 985)) {
            // line 986
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 986)) {
                // line 987
                echo "          <div class=\"product-blocks blocks-default\">
            ";
                // line 988
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 988));
                echo "
          </div>
        ";
            }
            // line 991
            echo "      ";
        }
        // line 992
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 992), "isPopup", [], "method", false, false, false, 992)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 992), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 992) == "default"))) {
            // line 993
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">
            ";
            // line 995
            echo ($context["text_tags"] ?? null);
            echo "
          </span>
          ";
            // line 997
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
                // line 998
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 998);
                echo "\">
              ";
                // line 999
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 999);
                echo "
            </a>
            ";
                // line 1001
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1001)) {
                    // line 1002
                    echo "              <b>
                ,
              </b>
            ";
                }
                // line 1006
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
            // line 1007
            echo "        </div>
      ";
        }
        // line 1009
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1009), "isPopup", [], "method", false, false, false, 1009)) {
            // line 1010
            echo "        ";
            echo ($context["content_bottom"] ?? null);
            echo "
      </div>
      ";
            // line 1012
            echo ($context["column_right"] ?? null);
            echo "
    </div>
  </div>
";
        }
        // line 1016
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
        // line 1135
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1140
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1146
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
        // line 1214
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 1218
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
        // line 1273
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1273), "isPopup", [], "method", false, false, false, 1273)) {
            // line 1274
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 1274);
            echo "
";
        }
        // line 1276
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
        return array (  2582 => 1276,  2576 => 1274,  2574 => 1273,  2516 => 1218,  2509 => 1214,  2438 => 1146,  2429 => 1140,  2421 => 1135,  2300 => 1016,  2293 => 1012,  2287 => 1010,  2284 => 1009,  2280 => 1007,  2266 => 1006,  2260 => 1002,  2258 => 1001,  2253 => 999,  2248 => 998,  2231 => 997,  2226 => 995,  2222 => 993,  2219 => 992,  2216 => 991,  2210 => 988,  2207 => 987,  2204 => 986,  2201 => 985,  2196 => 982,  2190 => 978,  2188 => 977,  2183 => 975,  2176 => 972,  2173 => 971,  2168 => 967,  2164 => 965,  2150 => 964,  2144 => 960,  2142 => 959,  2137 => 957,  2132 => 956,  2115 => 955,  2110 => 953,  2106 => 951,  2103 => 950,  2100 => 949,  2094 => 946,  2091 => 945,  2088 => 944,  2086 => 943,  2083 => 942,  2080 => 941,  2074 => 939,  2071 => 938,  2069 => 937,  2066 => 936,  2060 => 933,  2056 => 931,  2054 => 930,  2051 => 929,  2046 => 926,  2042 => 924,  2035 => 920,  2021 => 918,  2018 => 917,  2015 => 916,  2008 => 912,  1994 => 910,  1992 => 909,  1989 => 908,  1982 => 904,  1968 => 902,  1965 => 901,  1963 => 900,  1960 => 899,  1958 => 898,  1954 => 896,  1950 => 894,  1932 => 890,  1900 => 888,  1883 => 887,  1880 => 886,  1877 => 885,  1870 => 881,  1857 => 879,  1848 => 873,  1842 => 872,  1837 => 870,  1833 => 868,  1831 => 867,  1826 => 864,  1824 => 863,  1821 => 862,  1815 => 858,  1806 => 855,  1801 => 854,  1797 => 853,  1792 => 851,  1784 => 846,  1781 => 845,  1779 => 844,  1776 => 843,  1772 => 841,  1766 => 840,  1750 => 831,  1744 => 828,  1740 => 827,  1731 => 826,  1728 => 825,  1712 => 816,  1706 => 813,  1702 => 812,  1693 => 811,  1690 => 810,  1674 => 801,  1668 => 798,  1664 => 797,  1655 => 796,  1652 => 795,  1644 => 792,  1639 => 790,  1632 => 788,  1627 => 786,  1617 => 784,  1614 => 783,  1607 => 779,  1599 => 778,  1594 => 776,  1590 => 775,  1581 => 774,  1578 => 773,  1566 => 770,  1561 => 768,  1557 => 767,  1548 => 766,  1545 => 765,  1540 => 762,  1531 => 758,  1524 => 754,  1520 => 753,  1516 => 751,  1514 => 750,  1510 => 749,  1507 => 748,  1476 => 746,  1474 => 745,  1468 => 744,  1464 => 742,  1460 => 741,  1456 => 740,  1451 => 738,  1437 => 736,  1434 => 735,  1429 => 732,  1420 => 728,  1413 => 724,  1409 => 723,  1405 => 721,  1403 => 720,  1399 => 719,  1396 => 718,  1365 => 716,  1363 => 715,  1357 => 714,  1353 => 712,  1349 => 711,  1345 => 710,  1340 => 708,  1326 => 706,  1323 => 705,  1318 => 702,  1311 => 700,  1305 => 697,  1301 => 696,  1298 => 695,  1296 => 694,  1292 => 693,  1287 => 692,  1283 => 691,  1278 => 689,  1271 => 687,  1266 => 685,  1262 => 684,  1249 => 683,  1246 => 682,  1242 => 681,  1237 => 679,  1233 => 677,  1231 => 676,  1228 => 675,  1224 => 673,  1220 => 671,  1216 => 669,  1209 => 665,  1205 => 663,  1202 => 662,  1195 => 658,  1191 => 656,  1189 => 655,  1186 => 654,  1183 => 653,  1175 => 648,  1172 => 647,  1152 => 645,  1150 => 644,  1146 => 643,  1143 => 642,  1141 => 641,  1138 => 640,  1131 => 636,  1124 => 632,  1120 => 630,  1117 => 629,  1110 => 625,  1103 => 621,  1099 => 619,  1096 => 618,  1089 => 614,  1082 => 610,  1078 => 608,  1075 => 607,  1068 => 603,  1061 => 599,  1057 => 597,  1054 => 596,  1047 => 592,  1040 => 588,  1036 => 586,  1033 => 585,  1026 => 581,  1019 => 577,  1015 => 575,  1012 => 574,  1005 => 570,  998 => 566,  994 => 564,  991 => 563,  984 => 559,  979 => 557,  974 => 555,  967 => 551,  963 => 549,  960 => 548,  953 => 544,  946 => 540,  942 => 538,  939 => 537,  932 => 533,  925 => 529,  921 => 527,  918 => 526,  911 => 522,  904 => 518,  900 => 516,  897 => 515,  890 => 511,  886 => 510,  880 => 507,  876 => 505,  873 => 504,  866 => 500,  859 => 496,  849 => 494,  847 => 493,  843 => 491,  841 => 490,  838 => 489,  834 => 487,  825 => 484,  821 => 483,  817 => 482,  814 => 481,  810 => 480,  807 => 479,  805 => 478,  802 => 477,  796 => 474,  792 => 473,  789 => 472,  786 => 471,  780 => 468,  776 => 467,  773 => 466,  771 => 465,  768 => 464,  762 => 461,  756 => 458,  753 => 457,  747 => 454,  744 => 453,  742 => 452,  737 => 449,  735 => 448,  732 => 447,  723 => 441,  714 => 435,  705 => 429,  696 => 423,  688 => 419,  682 => 416,  679 => 415,  677 => 414,  674 => 413,  672 => 412,  669 => 411,  661 => 406,  655 => 403,  649 => 400,  644 => 397,  638 => 396,  631 => 391,  625 => 387,  622 => 386,  618 => 385,  614 => 383,  612 => 382,  609 => 381,  605 => 379,  601 => 377,  594 => 373,  590 => 371,  587 => 370,  580 => 366,  576 => 364,  574 => 363,  571 => 362,  568 => 361,  560 => 356,  557 => 355,  537 => 353,  535 => 352,  531 => 351,  528 => 350,  526 => 349,  523 => 348,  516 => 344,  509 => 340,  505 => 338,  502 => 337,  495 => 333,  488 => 329,  484 => 327,  481 => 326,  474 => 322,  467 => 318,  463 => 316,  460 => 315,  453 => 311,  446 => 307,  442 => 305,  439 => 304,  432 => 300,  425 => 296,  421 => 294,  418 => 293,  411 => 289,  404 => 285,  400 => 283,  397 => 282,  390 => 278,  383 => 274,  379 => 272,  376 => 271,  369 => 267,  364 => 265,  359 => 263,  352 => 259,  348 => 257,  345 => 256,  338 => 252,  331 => 248,  327 => 246,  324 => 245,  317 => 241,  310 => 237,  306 => 235,  303 => 234,  296 => 230,  289 => 226,  285 => 224,  282 => 223,  275 => 219,  271 => 218,  265 => 215,  261 => 213,  258 => 212,  251 => 208,  244 => 204,  234 => 202,  232 => 201,  228 => 199,  226 => 198,  223 => 197,  218 => 194,  212 => 190,  210 => 189,  205 => 187,  198 => 184,  196 => 183,  193 => 182,  190 => 181,  184 => 178,  181 => 177,  179 => 176,  174 => 174,  171 => 173,  169 => 172,  165 => 170,  160 => 63,  157 => 61,  155 => 60,  154 => 59,  153 => 58,  152 => 57,  151 => 56,  149 => 55,  146 => 54,  140 => 51,  137 => 50,  134 => 49,  132 => 48,  127 => 47,  122 => 45,  118 => 44,  110 => 40,  103 => 36,  99 => 34,  97 => 33,  94 => 32,  84 => 28,  80 => 27,  77 => 26,  73 => 25,  70 => 24,  68 => 23,  64 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
