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
class __TwigTemplate_16457d14c5b2bdaa428099565ca88f2cc8469a3c6da6d6aba48ff20166807fe6 extends \Twig\Template
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
      <!-- Voucher Modal -->
      <div id=\"voucherModal\" class=\"voucher-modal\">
        <div class=\"voucher-modal-content\">
          <div class=\"modal-header\">
            <h2 class=\"modal-title\">Voucher Details</h2>
            <span class=\"close-modal\" onclick=\"closeVoucherModal()\">&times;</span>
          </div>
          <div class=\"modal-body\">
            <div class=\"voucher-detail-card\">
              <div class=\"voucher-detail-left\">
                <div class=\"detail-amount\"></div>
                <div class=\"detail-code\"></div>
              </div>
              <div class=\"voucher-detail-right\">
                <div class=\"detail-name\"></div>
                <div class=\"detail-validity\"></div>
              </div>
            </div>
            <div class=\"voucher-description-section\">
              <h3>Terms & Conditions</h3>
              <div class=\"detail-description\"></div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button onclick=\"closeVoucherModal()\" class=\"modal-close-btn\">Close</button>
          </div>
        </div>
      </div>

      <style>
        .voucher-modal {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          z-index: 1000;
        }

        .voucher-modal-content {
          background: #fff;
          width: 100%;
          height: 100%;
          overflow-y: auto;
          animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
          from { transform: translateY(100%); }
          to { transform: translateY(0); }
        }

        .modal-header {
          padding: 20px;
          border-bottom: 1px solid #eee;
          display: flex;
          justify-content: space-between;
          align-items: center;
          position: sticky;
          top: 0;
          background: #fff;
          z-index: 1;
        }

        .modal-title {
          margin: 0;
          font-size: 1.5rem;
        }

        .close-modal {
          font-size: 28px;
          font-weight: bold;
          cursor: pointer;
        }

        .modal-body {
          padding: 20px;
        }

        .voucher-detail-card {
          display: flex;
          background: #fff;
          border: 1px solid #eee;
          border-radius: 12px;
          margin-bottom: 20px;
          overflow: hidden;
        }

        .voucher-detail-left {
          background: rgb(247, 207, 85);
          padding: 30px;
          width: 40%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          position: relative;
        }

        .voucher-detail-left::after {
          content: '';
          position: absolute;
          right: 0;
          top: 0;
          bottom: 0;
          width: 15px;
          background: radial-gradient(circle at 0 50%, transparent 15px, #fff 15px) repeat-y;
          background-size: 15px 30px;
        }

        .detail-amount {
          font-size: 32px;
          font-weight: bold;
          color: #fff;
          margin-bottom: 10px;
        }

        .detail-code {
          font-size: 18px;
          color: #fff;
        }

        .voucher-detail-right {
          padding: 30px;
          flex-grow: 1;
        }

        .detail-name {
          font-size: 24px;
          font-weight: bold;
          margin-bottom: 15px;
        }

        .detail-validity {
          font-size: 14px;
          color: #666;
        }

        .voucher-description-section {
          background: #fff;
          padding: 20px;
          border-radius: 12px;
          border: 1px solid #eee;
        }

        .voucher-description-section h3 {
          margin-top: 0;
          margin-bottom: 15px;
          color: #333;
        }

        .detail-description {
          font-size: 14px;
          line-height: 1.6;
          color: #666;
        }

        .modal-footer {
          padding: 20px;
          border-top: 1px solid #eee;
          text-align: right;
          position: sticky;
          bottom: 0;
          background: #fff;
        }

        .modal-close-btn {
          background: rgb(247, 207, 85);
          color: #fff;
          border: none;
          padding: 12px 24px;
          border-radius: 6px;
          cursor: pointer;
          font-size: 16px;
          transition: background 0.3s;
        }

        .modal-close-btn:hover {
          background: rgb(215, 185, 17);
        }

        @media (max-width: 768px) {
          .voucher-detail-card {
            flex-direction: column;
          }

          .voucher-detail-left {
            width: 100%;
            padding: 20px;
          }

          .voucher-detail-left::after {
            display: none;
          }
        }
      </style>

      <script>
        function openVoucherModal(button) {
          const modal = document.getElementById('voucherModal');
          const amount = button.getAttribute('data-voucher-amount');
          const code = button.getAttribute('data-voucher-code');
          const name = button.getAttribute('data-voucher-name');
          const validity = button.getAttribute('data-voucher-validity');
          const description = button.getAttribute('data-voucher-description');

          modal.querySelector('.detail-amount').textContent = amount;
          modal.querySelector('.detail-code').textContent = code;
          modal.querySelector('.detail-name').textContent = name;
          modal.querySelector('.detail-validity').textContent = 'Valid until: ' + validity;
          modal.querySelector('.detail-description').textContent = description;

          modal.style.display = 'block';
          document.body.style.overflow = 'hidden';
        }

        function closeVoucherModal() {
          const modal = document.getElementById('voucherModal');
          modal.style.display = 'none';
          document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
          const modal = document.getElementById('voucherModal');
          if (event.target == modal) {
            closeVoucherModal();
          }
        }
      </script>

      <div class=\"voucher-container\">
        <div class=\"voucher-grid\">
          ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 433
            echo "            <div class=\"voucher-card\">
              <div class=\"voucher-left\">
                <div class=\"discount-amount\">
                  ";
            // line 436
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 436);
            echo "
                </div>
                <div class=\"discount-type\">
                  ";
            // line 439
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "code", [], "any", false, false, false, 439);
            echo "
                </div>
              </div>
              <div class=\"voucher-right\">
                <div>
                  <div class=\"voucher-title\">
                    ";
            // line 445
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 445);
            echo "
                  </div>
                  <div class=\"voucher-validity\">
                    ";
            // line 448
            echo ($context["text_validity"] ?? null);
            echo "
                    :
                    ";
            // line 450
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "date_end", [], "any", false, false, false, 450);
            echo "
                  </div>
                  <div class=\"voucher-terms\">
                    ";
            // line 453
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 453);
            echo "
                  </div>
                </div>
                <button onclick=\"openVoucherModal(this)\" data-voucher-name=\"";
            // line 456
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 456);
            echo "\" data-voucher-code=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "code", [], "any", false, false, false, 456);
            echo "\" data-voucher-amount=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 456);
            echo "\" data-voucher-validity=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "date_end", [], "any", false, false, false, 456);
            echo "\" data-voucher-description=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 456);
            echo "\" class=\"claim-button";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 456) == 0)) {
                echo " claimed";
            }
            echo "\">
                  ";
            // line 457
            if ((twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 457) == 1)) {
                // line 458
                echo "                    ";
                echo ($context["button_use"] ?? null);
                echo "
                  ";
            } else {
                // line 460
                echo "                    Claimed
                  ";
            }
            // line 462
            echo "                </button>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "        </div>
      </div>
      ";
        // line 468
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 470
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 473
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
        return array (  611 => 473,  605 => 470,  600 => 468,  596 => 466,  587 => 462,  583 => 460,  577 => 458,  575 => 457,  559 => 456,  553 => 453,  547 => 450,  542 => 448,  536 => 445,  527 => 439,  521 => 436,  516 => 433,  512 => 432,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
