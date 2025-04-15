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
class __TwigTemplate_09e4dd2773df7d3fa3d2a0fdac0dab45cf78e4c54b4c7e0b548a52af9fc5541d extends \Twig\Template
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
                echo " </h1>
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
        echo "
";
        // line 52
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 145
        echo "


        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 150
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 150), "isPopup", [0 => "options"], "method", false, false, false, 150)) {
            // line 151
            echo "          ";
            // line 152
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 152)) {
                // line 153
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 154
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 154));
                echo "
          </div>
          ";
            }
            // line 157
            echo "          ";
        }
        // line 158
        echo "
          ";
        // line 159
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 159), "isPopup", [0 => "quickview"], "method", false, false, false, 159)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "get", [0 => "quickviewDescription"], "method", false, false, false, 159)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 159) == "top"))) {
            // line 160
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 163
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 165)) {
                // line 166
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 168
            echo "              </div>
            </div>
          ";
        }
        // line 171
        echo "
          ";
        // line 172
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 172), "isPopup", [0 => "options"], "method", false, false, false, 172) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 172)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 172) == "default"))) {
            // line 173
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 175)) {
                // line 176
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 176), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 176);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 178
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 178)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 178) == "list"))) {
                // line 179
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 179), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 179);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 181
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 181) && ($context["reward"] ?? null))) {
                // line 182
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 182), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 182);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 184
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 184), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 184) && ($context["model"] ?? null))) {
                // line 185
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 185);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 187
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 187), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 187) && ($context["product_weight"] ?? null))) {
                // line 188
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 188);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 190
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 190), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 190) && ($context["product_dimension"] ?? null))) {
                // line 191
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 191), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 191);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 193
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 193) && ($context["product_sku"] ?? null))) {
                // line 194
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 194), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 194);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 196
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 196), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 196) && ($context["product_upc"] ?? null))) {
                // line 197
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 197), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 197);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 199
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 199) && ($context["product_ean"] ?? null))) {
                // line 200
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 200);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 202
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 202), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 202) && ($context["product_jan"] ?? null))) {
                // line 203
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 203), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 203);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 205
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 205) && ($context["product_isbn"] ?? null))) {
                // line 206
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 206), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 206);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 208
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 208), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 208) && ($context["product_mpn"] ?? null))) {
                // line 209
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 209), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 209);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 211
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 211), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 211) && ($context["product_location"] ?? null))) {
                // line 212
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 212);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 214
            echo "              </ul>
              ";
            // line 215
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 215), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 215)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 215), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 215) == "image"))) {
                // line 216
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 217
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 218
                if (($context["manufacturer_image"] ?? null)) {
                    // line 219
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
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 219), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 219);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 219), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 219);
                    echo "\"/>
                    ";
                }
                // line 221
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 225
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 225), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 225)) {
                // line 226
                echo "                <div class=\"custom-stats\">
                  ";
                // line 227
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 227), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 227)) {
                    // line 228
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 228), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 228);
                    echo "</b></div>
                  ";
                }
                // line 230
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 230), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 230)) {
                    // line 231
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 231), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 231);
                    echo "</b></div>
                  ";
                }
                // line 233
                echo "                </div>
              ";
            }
            // line 235
            echo "            </div>
          ";
        }
        // line 237
        echo "
          ";
        // line 238
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 238), "isPopup", [], "method", false, false, false, 238))) {
            // line 239
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 242
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 243
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 246
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 251
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 254
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 255
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 255), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 255);
            echo "</b>
                <a>";
            // line 256
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 260
        echo "
          ";
        // line 261
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 261), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 261), "isPopup", [], "method", false, false, false, 261)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 261))) {
            // line 262
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 263
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 263), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 263)) {
                // line 264
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 264), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 264);
                echo "</h5>
              ";
            }
            // line 266
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 267
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 267), "get", [0 => "countdownDay"], "method", false, false, false, 267);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 268
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 268), "get", [0 => "countdownHour"], "method", false, false, false, 268);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 269
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 269), "get", [0 => "countdownMin"], "method", false, false, false, 269);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 270
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 270), "get", [0 => "countdownSec"], "method", false, false, false, 270);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 274
        echo "
          ";
        // line 275
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 275), "isPopup", [0 => "options"], "method", false, false, false, 275))) {
            // line 276
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 279
            if ( !($context["special"] ?? null)) {
                // line 280
                echo "                 <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            } else {
                // line 282
                echo "                 <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 283
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            }
            // line 285
            echo "             </div>
             ";
            // line 286
            if (($context["tax"] ?? null)) {
                // line 287
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 289
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 290
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 292
            echo "
             ";
            // line 293
            if (($context["discounts"] ?? null)) {
                // line 294
                echo "               <div class=\"discounts\">
                 ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 296
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 296);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 296);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "               </div>
             ";
            }
            // line 300
            echo "           </div>
            ";
            // line 301
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 301), "isPopup", [0 => "options"], "method", false, false, false, 301) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 301), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 301)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 301), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 301) == "price"))) {
                // line 302
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 304
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 304), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 304)) {
                    // line 305
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 305), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 305);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 307
                echo "                  ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 307), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 307)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 307), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 307) == "list"))) {
                    // line 308
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 308), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 308);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 310
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 310), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 310) && ($context["reward"] ?? null))) {
                    // line 311
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 311), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 311);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 313
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 313), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 313) && ($context["model"] ?? null))) {
                    // line 314
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 314), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 314);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 316
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 316) && ($context["product_weight"] ?? null))) {
                    // line 317
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 317), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 317);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 319
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 319), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 319) && ($context["product_dimension"] ?? null))) {
                    // line 320
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 320), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 320);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 322
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 322), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 322) && ($context["product_sku"] ?? null))) {
                    // line 323
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 323), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 323);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 325
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 325), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 325) && ($context["product_upc"] ?? null))) {
                    // line 326
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 326);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 328
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 328), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 328) && ($context["product_ean"] ?? null))) {
                    // line 329
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 329), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 329);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 331
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 331), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 331) && ($context["product_jan"] ?? null))) {
                    // line 332
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 332), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 332);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 334
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 334), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 334) && ($context["product_isbn"] ?? null))) {
                    // line 335
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 335), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 335);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 337
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 337), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 337) && ($context["product_mpn"] ?? null))) {
                    // line 338
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 338), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 338);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 340
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 340), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 340) && ($context["product_location"] ?? null))) {
                    // line 341
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 341), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 341);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
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
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 348), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 348);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 348), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 348);
                        echo "\"/>
                      ";
                    }
                    // line 350
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 354
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 354), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 354)) {
                    // line 355
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 356
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 356), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 356)) {
                        // line 357
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 357), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 357);
                        echo "</b></div>
                    ";
                    }
                    // line 359
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 359)) {
                        // line 360
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 360), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 360);
                        echo "</b></div>
                    ";
                    }
                    // line 362
                    echo "                  </div>
                ";
                }
                // line 364
                echo "              </div>
            ";
            }
            // line 366
            echo "          </div>
          ";
        }
        // line 368
        echo "
          ";
        // line 369
        if (($context["options"] ?? null)) {
            // line 370
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 371
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 373
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 373) == "select")) {
                    // line 374
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 374)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 374);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 374), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 374)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 375);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 375);
                    echo "</label>
              <select name=\"option[";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 376);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 376);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 377
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 378
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 378));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 379
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 379);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 379);
                        echo "
                ";
                        // line 380
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 380) && ($context["optionPrice"] ?? null))) {
                            // line 381
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 381);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 381);
                            echo ")
                ";
                        }
                        // line 382
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 384
                    echo "              </select>
            </div>
            ";
                }
                // line 387
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 387) == "radio")) {
                    // line 388
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 388)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 388);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 388), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 388)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 389);
                    echo "</label>
              <div id=\"input-option";
                    // line 390
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 390);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 390));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 391
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 393
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 393);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 393);
                        echo "\" />
                    ";
                        // line 394
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 394)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 394), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 394);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 394), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 394);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 394);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 394);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 394);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 394), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 394);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 394);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 394);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 395
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 396
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 396);
                        echo "
                      ";
                        // line 397
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 397) && ($context["optionPrice"] ?? null))) {
                            // line 398
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 399
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 399);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 399);
                            echo ")
                        </span>
                      ";
                        }
                        // line 402
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 405
                    echo " </div>
            </div>
            ";
                }
                // line 408
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 408) == "checkbox")) {
                    // line 409
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 409)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 409);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 409), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 409)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 410
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 410);
                    echo "</label>
              <div id=\"input-option";
                    // line 411
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 411);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 411));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 412
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 414
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 414);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 414);
                        echo "\" />
                    ";
                        // line 415
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 415)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 415);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 415);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 415);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 415);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 415);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 415);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 415);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 415);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 416
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 417
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 417);
                        echo "
                      ";
                        // line 418
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 418) && ($context["optionPrice"] ?? null))) {
                            // line 419
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 419);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 419);
                            echo ")</span>
                      ";
                        }
                        // line 421
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 424
                    echo " </div>
            </div>
            ";
                }
                // line 427
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 427) == "text")) {
                    // line 428
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 428)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 428);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 429
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 429);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 429);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 430);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 430);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 430);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 430);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 433
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 433) == "textarea")) {
                    // line 434
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 434)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 434);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 435
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 435);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 435);
                    echo "</label>
              <textarea name=\"option[";
                    // line 436
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 436);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 436);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 436);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 436);
                    echo "</textarea>
            </div>
            ";
                }
                // line 439
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 439) == "file")) {
                    // line 440
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 440)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 440);
                    echo "\">
              <label class=\"control-label\">";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 441);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 442
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 442);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                    echo "\" />
            </div>
            ";
                }
                // line 446
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 446) == "date")) {
                    // line 447
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 447)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 447);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 448
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 448);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 448);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 450
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 450);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 456
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 456) == "datetime")) {
                    // line 457
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 457)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 457);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 458
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 458);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 458);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 460
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 460);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 466
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 466) == "time")) {
                    // line 467
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 467)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 467);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 468
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 468);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 468);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 470
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 470);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 470);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 470);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 476
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 477
            echo "          </div>
          ";
        }
        // line 479
        echo "
          ";
        // line 480
        if (($context["recurrings"] ?? null)) {
            // line 481
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 484
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 486
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 486);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 486);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 492
        echo "
          ";
        // line 493
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 493), "get", [0 => "catalogCartStatus"], "method", false, false, false, 493) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 493), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 493)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 493), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 493)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 493), "isPopup", [], "method", false, false, false, 493)))) {
            // line 494
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 497
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 497), "get", [0 => "catalogCartStatus"], "method", false, false, false, 497)) {
                // line 498
                echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                // line 499
                echo ($context["entry_qty"] ?? null);
                echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 500
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 501
                echo ($context["product_id"] ?? null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 507
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 507) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 507))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 507), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 507);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></a>
                ";
            }
            // line 509
            echo "                ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 509), "isPopup", [], "method", false, false, false, 509))) {
                // line 510
                echo "                  <div class=\"extra-group\">
                    ";
                // line 511
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
                    // line 512
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 512);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 512)) . "ButtonDisplay")], "method", false, false, false, 512) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 512))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 512);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 512);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 512) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 512) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 512), "href", [], "any", false, false, false, 512))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 512), "href", [], "any", false, false, false, 512);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 512)], "method", false, false, false, 512);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 512);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 512);
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
                // line 514
                echo "                  </div>
                ";
            }
            // line 516
            echo "              </div>

              ";
            // line 518
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 518), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 518) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 518), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 518)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 518), "isPopup", [0 => "quickview"], "method", false, false, false, 518))) {
                // line 519
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 520
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 520), "isPopup", [0 => "options"], "method", false, false, false, 520)) {
                    // line 521
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 521), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 521)) {
                        // line 522
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 522), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 522) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 522), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 522))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 522), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 522);
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
                    // line 524
                    echo "
                  ";
                    // line 525
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 525)) {
                        // line 526
                        echo "                  <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 526), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 526) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 526), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 526))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 526), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 526);
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
                    // line 528
                    echo "                ";
                }
                // line 529
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 529), "isPopup", [0 => "quickview"], "method", false, false, false, 529)) {
                    // line 530
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 530) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 530))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 530);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => "quickviewExtraText"], "method", false, false, false, 530);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 530), "get", [0 => "quickviewExtraText"], "method", false, false, false, 530);
                    echo "</span></a>
                ";
                }
                // line 532
                echo "              </div>
              ";
            }
            // line 534
            echo "            </div>
          </div>
          ";
        }
        // line 537
        echo "
          ";
        // line 538
        if ((($context["minimum"] ?? null) > 1)) {
            // line 539
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 541
        echo "
          ";
        // line 542
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 542), "isPopup", [0 => "options"], "method", false, false, false, 542)) {
            // line 543
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 543)) {
                // line 544
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 544));
                echo "
            ";
            }
            // line 546
            echo "          ";
        }
        // line 547
        echo "          </div>
          ";
        // line 548
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 548), "isPopup", [0 => "options"], "method", false, false, false, 548)) {
            // line 549
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 549)) {
                // line 550
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 551
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 551));
                echo "
          </div>
          ";
            }
            // line 554
            echo "          ";
        }
        // line 555
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 555), "isPopup", [], "method", false, false, false, 555)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 555), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 555) == "details"))) {
            // line 556
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 557
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 558
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
                // line 559
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 559);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 559);
                echo "</a>
                ";
                // line 560
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 560)) {
                    echo "<b>,</b>";
                }
                // line 561
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
            // line 562
            echo "            </div>
          ";
        }
        // line 564
        echo "        </div>
      </div>

      ";
        // line 568
        echo "      ";
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 568), "isPopup", [0 => "quickview"], "method", false, false, false, 568)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 568), "get", [0 => "quickviewDescription"], "method", false, false, false, 568)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 568), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 568) == "default"))) {
            // line 569
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 572
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 574
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 574), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 574)) {
                // line 575
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 577
            echo "          </div>
        </div>
      ";
        }
        // line 580
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 580), "isPopup", [0 => "options"], "method", false, false, false, 580)) {
            // line 581
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 581)) {
                // line 582
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 583
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 583));
                echo "
        </div>
        ";
            }
            // line 586
            echo "      ";
        }
        // line 587
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 587), "isPopup", [], "method", false, false, false, 587)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 587), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 587) == "default"))) {
            // line 588
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 589
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 590
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
                // line 591
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 591);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 591);
                echo "</a>
            ";
                // line 592
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 592)) {
                    echo "<b>,</b>";
                }
                // line 593
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
            // line 594
            echo "        </div>
      ";
        }
        // line 596
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 596), "isPopup", [], "method", false, false, false, 596)) {
            // line 597
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 598
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 601
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
        // line 720
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 725
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 731
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
        // line 799
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 803
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
        // line 858
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 858), "isPopup", [], "method", false, false, false, 858)) {
            // line 859
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 859);
            echo "
";
        }
        // line 861
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
        return array (  2069 => 861,  2064 => 859,  2062 => 858,  2004 => 803,  1997 => 799,  1926 => 731,  1917 => 725,  1909 => 720,  1788 => 601,  1782 => 598,  1777 => 597,  1774 => 596,  1770 => 594,  1756 => 593,  1752 => 592,  1745 => 591,  1728 => 590,  1724 => 589,  1721 => 588,  1718 => 587,  1715 => 586,  1709 => 583,  1706 => 582,  1703 => 581,  1700 => 580,  1695 => 577,  1691 => 575,  1689 => 574,  1684 => 572,  1677 => 569,  1674 => 568,  1669 => 564,  1665 => 562,  1651 => 561,  1647 => 560,  1640 => 559,  1623 => 558,  1619 => 557,  1616 => 556,  1613 => 555,  1610 => 554,  1604 => 551,  1601 => 550,  1598 => 549,  1596 => 548,  1593 => 547,  1590 => 546,  1584 => 544,  1581 => 543,  1579 => 542,  1576 => 541,  1570 => 539,  1568 => 538,  1565 => 537,  1560 => 534,  1556 => 532,  1540 => 530,  1537 => 529,  1534 => 528,  1518 => 526,  1516 => 525,  1513 => 524,  1497 => 522,  1494 => 521,  1492 => 520,  1489 => 519,  1487 => 518,  1483 => 516,  1479 => 514,  1434 => 512,  1417 => 511,  1414 => 510,  1411 => 509,  1396 => 507,  1387 => 501,  1381 => 500,  1377 => 499,  1374 => 498,  1372 => 497,  1367 => 494,  1365 => 493,  1362 => 492,  1356 => 488,  1345 => 486,  1341 => 485,  1337 => 484,  1330 => 481,  1328 => 480,  1325 => 479,  1321 => 477,  1315 => 476,  1302 => 470,  1295 => 468,  1286 => 467,  1283 => 466,  1270 => 460,  1263 => 458,  1254 => 457,  1251 => 456,  1238 => 450,  1231 => 448,  1222 => 447,  1219 => 446,  1211 => 443,  1203 => 442,  1199 => 441,  1190 => 440,  1187 => 439,  1175 => 436,  1169 => 435,  1160 => 434,  1157 => 433,  1145 => 430,  1139 => 429,  1130 => 428,  1127 => 427,  1122 => 424,  1113 => 421,  1106 => 419,  1104 => 418,  1100 => 417,  1097 => 416,  1066 => 415,  1060 => 414,  1056 => 412,  1050 => 411,  1046 => 410,  1033 => 409,  1030 => 408,  1025 => 405,  1016 => 402,  1009 => 399,  1006 => 398,  1004 => 397,  1000 => 396,  997 => 395,  966 => 394,  960 => 393,  956 => 391,  950 => 390,  946 => 389,  933 => 388,  930 => 387,  925 => 384,  918 => 382,  911 => 381,  909 => 380,  902 => 379,  898 => 378,  894 => 377,  888 => 376,  882 => 375,  869 => 374,  866 => 373,  862 => 372,  858 => 371,  855 => 370,  853 => 369,  850 => 368,  846 => 366,  842 => 364,  838 => 362,  832 => 360,  829 => 359,  823 => 357,  821 => 356,  818 => 355,  815 => 354,  807 => 350,  787 => 348,  785 => 347,  781 => 346,  778 => 345,  776 => 344,  773 => 343,  765 => 341,  762 => 340,  754 => 338,  751 => 337,  743 => 335,  740 => 334,  732 => 332,  729 => 331,  721 => 329,  718 => 328,  710 => 326,  707 => 325,  699 => 323,  696 => 322,  684 => 320,  681 => 319,  673 => 317,  670 => 316,  662 => 314,  659 => 313,  651 => 311,  648 => 310,  638 => 308,  635 => 307,  621 => 305,  619 => 304,  615 => 302,  613 => 301,  610 => 300,  606 => 298,  595 => 296,  591 => 295,  588 => 294,  586 => 293,  583 => 292,  575 => 290,  572 => 289,  564 => 287,  562 => 286,  559 => 285,  554 => 283,  549 => 282,  543 => 280,  541 => 279,  536 => 276,  534 => 275,  531 => 274,  524 => 270,  520 => 269,  516 => 268,  512 => 267,  507 => 266,  501 => 264,  499 => 263,  496 => 262,  494 => 261,  491 => 260,  484 => 256,  480 => 255,  476 => 254,  472 => 252,  466 => 251,  459 => 246,  454 => 243,  451 => 242,  447 => 241,  443 => 239,  441 => 238,  438 => 237,  434 => 235,  430 => 233,  424 => 231,  421 => 230,  415 => 228,  413 => 227,  410 => 226,  407 => 225,  399 => 221,  379 => 219,  377 => 218,  373 => 217,  370 => 216,  368 => 215,  365 => 214,  357 => 212,  354 => 211,  346 => 209,  343 => 208,  335 => 206,  332 => 205,  324 => 203,  321 => 202,  313 => 200,  310 => 199,  302 => 197,  299 => 196,  291 => 194,  288 => 193,  276 => 191,  273 => 190,  265 => 188,  262 => 187,  254 => 185,  251 => 184,  243 => 182,  240 => 181,  230 => 179,  227 => 178,  213 => 176,  211 => 175,  207 => 173,  205 => 172,  202 => 171,  197 => 168,  193 => 166,  191 => 165,  186 => 163,  179 => 160,  177 => 159,  174 => 158,  171 => 157,  165 => 154,  162 => 153,  159 => 152,  157 => 151,  155 => 150,  148 => 145,  143 => 52,  140 => 50,  138 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  132 => 44,  129 => 43,  123 => 41,  120 => 40,  118 => 39,  113 => 38,  108 => 36,  104 => 35,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  76 => 26,  72 => 25,  69 => 24,  67 => 23,  63 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
