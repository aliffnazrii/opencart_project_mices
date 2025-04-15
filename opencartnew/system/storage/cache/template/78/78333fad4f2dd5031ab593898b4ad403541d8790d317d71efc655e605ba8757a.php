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
class __TwigTemplate_58aba0b5fb48232301729b92635b6c387d6e3c603e202e7fa6392983cd958bf4 extends \Twig\Template
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
        echo "<style>
.page-header {
  margin-bottom: 30px;
  padding: 20px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.page-header h1 {
  margin: 0 0 20px;
  color: #333;
  font-size: 24px;
}

.voucher-search input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 14px;
  transition: border-color 0.3s;
}

.voucher-search input:focus {
  border-color: rgb(247, 207, 85);
  outline: none;
}
</style>
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

.voucher-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
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
  .voucher-grid {
    grid-template-columns: 1fr;
    padding: 0 10px;
  }
  
  .voucher-card {
    margin: 0 auto;
    max-width: 100%;
  }
}
</style>
<div class=\"page-header\">
  <h1>Available Coupons</h1>
  <div class=\"voucher-search\">
    <input type=\"text\" placeholder=\"Search coupons...\" id=\"couponSearch\">
  </div>
</div>
<div class=\"voucher-container\">
  <div class=\"voucher-grid\">
    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 185
            echo "      <div class=\"voucher-card\">
        <div class=\"voucher-left\">
          <div class=\"discount-amount\">
            ";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 188);
            echo "
          </div>
          <div class=\"discount-type\">
            ";
            // line 191
            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 191);
            echo "
          </div>
        </div>
        <div class=\"voucher-right\">
          <div>
            <div class=\"voucher-title\">
              ";
            // line 197
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
            echo "
            </div>
            <div class=\"voucher-validity\">
              Valid until:
              ";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 201);
            echo "
            </div>
            <div class=\"voucher-terms\">
              ";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 204);
            echo "
            </div>
          </div>
          <button class=\"claim-button\">
            Claim Now
          </button>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "  </div>
</div>

<script src=\"catalog/view/theme/journal3/template/account/coupon.js\"></script>

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
        return array (  274 => 213,  259 => 204,  253 => 201,  246 => 197,  237 => 191,  231 => 188,  226 => 185,  222 => 184,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
