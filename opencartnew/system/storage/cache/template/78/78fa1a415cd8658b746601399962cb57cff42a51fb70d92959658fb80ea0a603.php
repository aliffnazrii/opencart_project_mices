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

/* journal3/template/journal3/voucher_card.twig */
class __TwigTemplate_fb0a258ee01efa47a814c09d0403a3a216776fe57672a2080dc9e9b919d0d72b extends \Twig\Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "    ";
            $context["classes"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 4
$context["product"], "quantity", [], "any", false, false, false, 4) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 5
$context["product"], "date_end", [], "any", false, false, false, 5), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 6
$context["product"], "price_value", [], "any", false, false, false, 6), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 7
$context["product"], "extra_buttons", [], "any", false, false, false, 7)]], "method", false, false, false, 3);
            // line 9
            echo "    <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
        <div class=\"product-thumb\">
            ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 11) == "image")) {
                // line 12
                echo "                <div class=\"name\">
                    <a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                echo "\">
                        ";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                echo "
                    </a>
                </div>
            ";
            }
            // line 18
            echo "            <div class=\"image\">
                ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "quickviewStatus"], "method", false, false, false, 19)) {
                // line 20
                echo "                    <div class=\"quickview-button\">
                        <a class=\"btn btn-quickview\" ";
                // line 21
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 21) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 21))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "quickviewText"], "method", false, false, false, 21);
                    echo "\" ";
                }
                echo " onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 21);
                echo "')\">
                            <span class=\"btn-text\">
                                ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "quickviewText"], "method", false, false, false, 23);
                echo "
                            </span>
                        </a>
                    </div>
                ";
            }
            // line 28
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
            echo "\" class=\"product-img ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 28)) {
                echo "has-second-image";
            }
            echo "\">
                    ";
            // line 30
            echo "                    <a href=\"javascript:void(0);\" onclick=\"quickview('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 30);
            echo "')\" class=\"product-img ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 30)) {
                echo "has-second-image";
            }
            echo "\">
                        <div>
                            ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 32)) {
                // line 33
                echo "                                <img
                            src=\"";
                // line 34
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 34)) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 34);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "\" class=\"img-responsive img-first lazyload\" />
                                ";
            } else {
                // line 36
                echo "                                <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 36)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 36);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" class=\"img-responsive img-first\" />
                            ";
            }
            // line 38
            echo "                        </div>
                    </a>
                    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 40)) {
                // line 41
                echo "                        <div class=\"product-labels\">
                            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 43
                    echo "                                <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 43);
                    echo "\">
                                    <b>
                                        ";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 45);
                    echo "
                                    </b>
                                </span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                        </div>
                    ";
            }
            // line 51
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "countdownStatus"], "method", false, false, false, 51) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 51))) {
                // line 52
                echo "                        <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 52);
                echo "\"></div>
                    ";
            }
            // line 54
            echo "                </a>
            </div>
            <div class=\"caption\">
                ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 57))) {
                // line 58
                echo "                    <div class=\"stats\">
                        ";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "                            <span class=\"stat-1\">
                                <span class=\"stats-label\">
                                    ";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 62), "label", [], "any", false, false, false, 62);
                    echo "
                                    :
                                </span>
                                <span>
                                    ";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 66), "text", [], "any", false, false, false, 66);
                    echo "
                                </span>
                            </span>
                        ";
                }
                // line 70
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                            <span class=\"stat-2\">
                                <span class=\"stats-label\">
                                    ";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 73), "label", [], "any", false, false, false, 73);
                    echo "
                                    :
                                </span>
                                <span>
                                    ";
                    // line 78
                    echo "                                    ";
                    // line 79
                    echo "                                Voucher
                            </span>
                        </span>
                    ";
                }
                // line 83
                echo "                </div>
                ";
            }
            // line 85
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 85) == "default")) {
                // line 86
                echo "                        <div class=\"name\"> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\">
                            ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "
                        </a>
                    </div>
                ";
            }
            // line 91
            echo "                <div class=\"description\">
                    ";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 92);
            echo "
                </div>
                ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94)) {
                // line 95
                echo "                    <div class=\"price\">
                        <div>
                            ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                                <span class=\"price-new\">
                                    ";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99);
                    echo "
                                </span>
                                <span class=\"price-old\">
                                    ";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                    echo "
                                </span>
                            ";
                } else {
                    // line 105
                    echo "                                <span class=\"price-normal\">
                                    ";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 106);
                    echo "
                                </span>
                            ";
                }
                // line 109
                echo "                        </div>
                        ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                            <span class=\"price-tax\">
                                ";
                    // line 112
                    echo ($context["text_tax"] ?? null);
                    echo "
                                ";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 113);
                    echo "
                            </span>
                        ";
                }
                // line 116
                echo "                    </div>
                ";
            }
            // line 118
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118)) {
                // line 119
                echo "                    <div class=\"rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 119), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 119) == " hover")) {
                    echo "rating-hover";
                }
                echo "\">
                        <div class=\"rating-stars\">
                            ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 122
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 122) < $context["i"])) {
                        // line 123
                        echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
                    } else {
                        // line 127
                        echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star fa-stack-2x\"></i>
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
                    }
                    // line 132
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                        </div>
                    </div>
                ";
            } else {
                // line 136
                echo "                    <div class=\"rating no-rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 136), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 136) == " hover")) {
                    echo "rating-hover";
                }
                echo "\">
                        <div class=\"rating-stars\">
                            ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 139
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 139) < $context["i"])) {
                        // line 140
                        echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
                    } else {
                        // line 144
                        echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star fa-stack-2x\"></i>
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
                    }
                    // line 149
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                        </div>
                    </div>
                ";
            }
            // line 153
            echo "                    <div class=\"buttons-wrapper\" style=\"display: block\">
                        <div class=\"button-group\">
                                <div class=\"cart-group\">
                                    <button type=\"button\" class=\"btn btn-modal\" data-toggle=\"modal\" data-target=\"#voucherModal";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
            echo "\">
                                        View
                                    </button>
                                    &nbsp
                                    <form action=\"";
            // line 160
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" style=\"display: inline-block; margin-right: 10px; width: 100%\">
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
            echo "\">
                                        <button type=\"submit\" class=\"btn\" style=\"width: 100%\">
                                            ";
            // line 163
            echo ($context["button_claim"] ?? null);
            echo "
                                        </button>
                                    </form>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/voucher_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 163,  448 => 161,  444 => 160,  437 => 156,  432 => 153,  427 => 150,  421 => 149,  414 => 144,  408 => 140,  405 => 139,  401 => 138,  393 => 136,  388 => 133,  382 => 132,  375 => 127,  369 => 123,  366 => 122,  362 => 121,  354 => 119,  351 => 118,  347 => 116,  341 => 113,  337 => 112,  334 => 111,  332 => 110,  329 => 109,  323 => 106,  320 => 105,  314 => 102,  308 => 99,  305 => 98,  303 => 97,  299 => 95,  297 => 94,  292 => 92,  289 => 91,  282 => 87,  277 => 86,  274 => 85,  270 => 83,  264 => 79,  262 => 78,  255 => 73,  251 => 71,  248 => 70,  241 => 66,  234 => 62,  230 => 60,  228 => 59,  225 => 58,  223 => 57,  218 => 54,  212 => 52,  209 => 51,  205 => 49,  195 => 45,  187 => 43,  183 => 42,  180 => 41,  178 => 40,  174 => 38,  152 => 36,  129 => 34,  126 => 33,  124 => 32,  114 => 30,  105 => 28,  97 => 23,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  67 => 14,  63 => 13,  60 => 12,  58 => 11,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/voucher_card.twig", "C:\\Users\\pc\\Documents\\GitHub\\opencartnew\\catalog\\view\\theme\\journal3\\template\\journal3\\voucher_card.twig");
    }
}
