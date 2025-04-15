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
class __TwigTemplate_0203d51673e3ff0c60b3c2b7932d7505c543db0bb435ce1f3a868fa4ec5fa847 extends \Twig\Template
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
        // line 147
        echo "

";
        // line 193
        $macros["self"] = $this->macros["self"] = $this;
        // line 194
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 194);
        echo "\">
  ";
        // line 195
        if (($context["title"] ?? null)) {
            // line 196
            echo "    <h3 class=\"title module-title\">
      ";
            // line 197
            echo ($context["title"] ?? null);
            echo "
    </h3>
  ";
        }
        // line 200
        echo "  <div class=\"module-body\">
    ";
        // line 201
        if (($context["carousel"] ?? null)) {
            // line 202
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant(" JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null));
            echo "'>
        <div class=\"swiper-container\" ";
            // line 203
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 203)) {
                echo " dir=\"rtl\" ";
            }
            echo ">
          <div class=\"swiper-wrapper\">
            ";
            // line 205
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 205, $context, $this->getSourceContext());
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
            // line 215
            echo "      ";
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 215, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 217
        echo "  </div>
</div>


";
    }

    // line 149
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
            // line 150
            echo "  ";
            $macros["self"] = $this;
            // line 151
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 152
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 152)], "method", false, false, false, 152);
                echo "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 154);
                echo "\" class=\"catalog-title\">
          ";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 155);
                echo "
        </a>
        <div class=\"item-assets image-left\">
          ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 159);
                    echo "\" class=\"catalog-image\">
              ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 160)) {
                        // line 161
                        echo "                <img
              src=\"";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 162);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 162);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 162);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 162)) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 162);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 162);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 162);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 162), "width", [], "any", false, false, false, 162);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 162), "height", [], "any", false, false, false, 162);
                        echo "\" class=\"lazyload\" />
                ";
                    } else {
                        // line 164
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 164);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 164);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 164)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 164);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 164);
                            echo " 2x\" data-image2x=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 164);
                            echo "\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 164);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 164), "width", [], "any", false, false, false, 164);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 164), "height", [], "any", false, false, false, 164);
                        echo "\" />
              ";
                    }
                    // line 166
                    echo "            </a>
          ";
                }
                // line 168
                echo "          <div class=\"subitems\">
            ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 169));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 170
                    echo "              <div class=\"subitem\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 170);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 170)) {
                        echo " data-image2x=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 170);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 170);
                        echo " 2x\" ";
                    }
                    echo ">
                <a href=\"";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 171);
                    echo "\">
                  <span>
                    ";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 173);
                    echo "
                  </span>
                </a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 178) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 178)))) {
                    // line 179
                    echo "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 180);
                    echo "\">
                  <span>
                    ";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 182);
                    echo "
                  </span>
                </a>
              </div>
            ";
                }
                // line 187
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
        return array (  261 => 187,  253 => 182,  248 => 180,  245 => 179,  242 => 178,  231 => 173,  226 => 171,  213 => 170,  209 => 169,  206 => 168,  202 => 166,  178 => 164,  155 => 162,  152 => 161,  150 => 160,  145 => 159,  143 => 158,  137 => 155,  133 => 154,  127 => 152,  122 => 151,  119 => 150,  105 => 149,  97 => 217,  91 => 215,  78 => 205,  71 => 203,  64 => 202,  62 => 201,  59 => 200,  53 => 197,  50 => 196,  48 => 195,  43 => 194,  41 => 193,  37 => 147,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
