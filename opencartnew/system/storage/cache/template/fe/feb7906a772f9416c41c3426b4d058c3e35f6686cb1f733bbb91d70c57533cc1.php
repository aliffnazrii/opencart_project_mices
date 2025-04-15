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
class __TwigTemplate_21dec19dfc153f36d2f2267365f277294f7a5800b27ba1cc70bb2b886a872ec4 extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">
        ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "pageTitlePosition"], "method", false, false, false, 11) == "top")) {
            // line 12
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 14
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 18);
        echo "
<div id=\"account-coupon\" class=\"container\">
  <div class=\"row justify-content-center\">
    ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "        <h1 class=\"title page-title\">
          ";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 28
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <style>
.voucher-container {
  padding: 0;
  width: 100%;
  max-width: 100%;
}

.voucher-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  width: 100%;
  max-width: 100%;
  margin: 0;
  padding: 0;
}

.voucher-search {
  margin-bottom: 20px;
}

.voucher-search input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.voucher-container {
  padding: 20px;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

.voucher-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  width: 100%;
  margin: 0;
  padding: 0;
}

@media (min-width: 769px) {
  .voucher-grid {
    grid-template-columns: repeat(3, 1fr);
  }
  
  .voucher-card {
    margin: 0;
  }
}
.voucher-card {
  min-width: 280px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  background: #fff;
  display: flex;
}

.voucher-left {
  background: rgb(247, 207, 85);
  color: #fff;
  padding: 15px;
  width: 35%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
}

.voucher-left::after {
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  width: 10px;
  background: radial-gradient(circle at 0 50%, transparent 10px, #fff 10px) repeat-y;
  background-size: 10px 20px;
}

.discount-amount {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 5px;
}

.discount-type {
  font-size: 14px;
}

.voucher-right {
  padding: 15px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.voucher-title {
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.voucher-validity {
  font-size: 12px;
  color: #666;
  margin-bottom: 10px;
}

.voucher-terms {
  font-size: 12px;
  color: #999;
  margin-bottom: 10px;
}

.claim-button {
  background: rgb(247, 207, 85);
    color: #fff;
  border: none;
  padding: 8px 15px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  transition: background 0.3s;
}

.claim-button:hover {
  background:rgb(215, 185, 17);
}

.claimed {
  background: #ccc;
  cursor: not-allowed;
}

.claimed:hover {
  background: #ccc;
}

@media (min-width: 769px) {
  .voucher-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  #account-coupon .container {
    padding: 0;
  }
  
  .voucher-grid {
    grid-template-columns: 1fr;
    padding: 0;
  }
  
  .voucher-card {
    margin: 0 auto;
    max-width: 100%;
    width: 100%;
  }
}
</style>
      <div class=\"voucher-container\">
        <div class=\"voucher-grid\">
          ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 200
            echo "            <div class=\"voucher-card\">
              <div class=\"voucher-left\">
                <div class=\"discount-amount\">
                  ";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 203);
            echo "
                </div>
                <div class=\"discount-type\">
                  ";
            // line 206
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "code", [], "any", false, false, false, 206);
            echo "
                </div>
              </div>
              <div class=\"voucher-right\">
                <div>
                  <div class=\"voucher-title\">
                    ";
            // line 212
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 212);
            echo "
                  </div>
                  <div class=\"voucher-validity\">
                    ";
            // line 215
            echo ($context["text_validity"] ?? null);
            echo "
                    :
                    ";
            // line 217
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "date_end", [], "any", false, false, false, 217);
            echo "
                  </div>
                  <div class=\"voucher-terms\">
                    ";
            // line 220
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 220);
            echo "
                  </div>
                </div>
                <button class=\"claim-button";
            // line 223
            if ((twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 223) == 0)) {
                echo " claimed";
            }
            echo "\">
                  ";
            // line 224
            if ((twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 224) == 1)) {
                // line 225
                echo "                    ";
                echo ($context["button_use"] ?? null);
                echo "
                  ";
            } else {
                // line 227
                echo "                    Claimed
                  ";
            }
            // line 229
            echo "                </button>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "        </div>
      </div>
      ";
        // line 235
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 237
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 240
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
        return array (  368 => 240,  362 => 237,  357 => 235,  353 => 233,  344 => 229,  340 => 227,  334 => 225,  332 => 224,  326 => 223,  320 => 220,  314 => 217,  309 => 215,  303 => 212,  294 => 206,  288 => 203,  283 => 200,  279 => 199,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
