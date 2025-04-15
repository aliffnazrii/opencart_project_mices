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
class __TwigTemplate_72272cda8e8989beabab6eff42b8ea9798afed55ebba365272f88878c6771b80 extends \Twig\Template
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
        // line 45
        $macros["self"] = $this->macros["self"] = $this;
        // line 46
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 46);
        echo "\">
  ";
        // line 47
        if (($context["title"] ?? null)) {
            // line 48
            echo "    <h3 class=\"title module-title\">
      ";
            // line 49
            echo ($context["title"] ?? null);
            echo "
    </h3>
  ";
        }
        // line 52
        echo "  <div class=\"module-body\">
    ";
        // line 53
        if (($context["carousel"] ?? null)) {
            // line 54
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null));
            echo "'>
        <div class=\"swiper-container\" ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 55)) {
                echo " dir=\"rtl\" ";
            }
            echo ">
          <div class=\"swiper-wrapper\">
            ";
            // line 57
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 57, $context, $this->getSourceContext());
            echo "
          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    ";
        } else {
            // line 67
            echo "      ";
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 67, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 69
        echo "  </div>
</div>

";
    }

    // line 1
    public function macro_renderCatalog($__j3__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "j3" => $__j3__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            $macros["self"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 6);
                echo "\" class=\"catalog-title\">
          ";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 7);
                echo "
        </a>
        <div class=\"item-assets image-left\">
          ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 11);
                    echo "\" class=\"catalog-image\">
              ";
                    // line 12
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 12)) {
                        // line 13
                        echo "                <img
              src=\"";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 14);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 14)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 14);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 14), "width", [], "any", false, false, false, 14);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 14), "height", [], "any", false, false, false, 14);
                        echo "\" class=\"lazyload\" />
                ";
                    } else {
                        // line 16
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 16)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 16);
                            echo " 2x\" data-image2x=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 16);
                            echo "\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 16);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 16), "width", [], "any", false, false, false, 16);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16);
                        echo "\" />
              ";
                    }
                    // line 18
                    echo "            </a>
          ";
                }
                // line 20
                echo "          <div class=\"subitems\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 22
                    echo "              <div class=\"subitem\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 22);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 22)) {
                        echo " data-image2x=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 22);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 22);
                        echo " 2x\" ";
                    }
                    echo ">
                <a href=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 23);
                    echo "\">
                  <span>
                    ";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 25);
                    echo "
                  </span>
                </a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 30) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 30)))) {
                    // line 31
                    echo "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 32);
                    echo "\">
                  <span>
                    ";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 34);
                    echo "
                  </span>
                </a>
              </div>
            ";
                }
                // line 39
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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
        return array (  256 => 39,  248 => 34,  243 => 32,  240 => 31,  237 => 30,  226 => 25,  221 => 23,  208 => 22,  204 => 21,  201 => 20,  197 => 18,  173 => 16,  150 => 14,  147 => 13,  145 => 12,  140 => 11,  138 => 10,  132 => 7,  128 => 6,  122 => 4,  117 => 3,  114 => 2,  100 => 1,  93 => 69,  87 => 67,  74 => 57,  67 => 55,  60 => 54,  58 => 53,  55 => 52,  49 => 49,  46 => 48,  44 => 47,  39 => 46,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
