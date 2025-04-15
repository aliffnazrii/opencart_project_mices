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
class __TwigTemplate_f653cb722564dbadf73a6f3f8ce6352d939379e6db8311d4bd391f57962b5a48 extends \Twig\Template
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
        echo "


";
        // line 4
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">
        ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => "pageTitlePosition"], "method", false, false, false, 14) == "top")) {
            // line 15
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 17
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 21);
        echo "
<div class=\"container\">
  <div class=\"row\">
    ";
        // line 24
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "pageTitlePosition"], "method", false, false, false, 26) == "default")) {
            // line 27
            echo "        <h1 class=\"title page-title\">
          ";
            // line 28
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 31
        echo "      <style>
        /* QR Code Modal Styles */
        .qr-modal {
          display: none;
          position: fixed;
          z-index: 1000;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.5);
        }
        .qr-modal-content {
          background-color: #fff;
          margin: 15% auto;
          padding: 20px;
          border-radius: 8px;
          width: 300px;
          position: relative;
          text-align: center;
        }
        .qr-close {
          position: absolute;
          right: 10px;
          top: 5px;
          font-size: 24px;
          cursor: pointer;
          color: #666;
        }
        .qr-close:hover {
          color: #000;
        }
        .qr-code-container {
          padding: 15px;
        }
        .qr-button {
          background: #3498db;
          color: white;
          border: none;
          padding: 8px 15px;
          border-radius: 4px;
          cursor: pointer;
          transition: background 0.3s;
          margin-top: 10px;
        }
        .qr-button:hover {
          background: #2980b9;
        }

        .coupon-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
          gap: 20px;
          padding: 20px 0;
        }
        .coupon-card {
          border: 1px solid #e5e5e5;
          border-radius: 8px;
          padding: 20px;
          background: #fff;
          transition: all 0.3s ease;
          position: relative;
          overflow: hidden;
        }
        .coupon-card:hover {
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
          transform: translateY(-2px);
        }
        .coupon-card::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 4px;
          background: linear-gradient(90deg, #3498db, #2ecc71);
        }
        .coupon-code {
          text-align: center;
          margin-bottom: 15px;
          padding: 10px;
          background: #f8f9fa;
          border-radius: 4px;
        }
        .coupon-code h4 {
          margin: 0;
          font-size: 24px;
          color: #2c3e50;
          font-weight: bold;
        }
        .coupon-details {
          color: #666;
        }
        .discount {
          font-size: 20px;
          color: #e74c3c;
          margin-bottom: 10px;
          text-align: center;
        }
        .description {
          margin: 10px 0;
          font-size: 14px;
          line-height: 1.4;
        }
        .validity {
          font-size: 13px;
          margin: 10px 0;
          color: #7f8c8d;
        }
        .validity span {
          display: block;
          margin: 3px 0;
        }
        .status {
          text-align: center;
          padding: 5px;
          border-radius: 4px;
          margin-top: 10px;
          font-weight: 500;
        }
        .status-active {
          background: #e8f5e9;
          color: #2ecc71;
        }
        .status-inactive {
          background: #ffebee;
          color: #e74c3c;
        }
      </style>
            ";
        // line 160
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 161
        if (($context["coupons"] ?? null)) {
            // line 162
            echo "        <div class=\"coupon-grid\">
          ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 164
                echo "            <div class=\"coupon-card\">
              <div class=\"coupon-code\">
                <h4>";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 166);
                echo "</h4>
              </div>
              <div class=\"coupon-details\">
                ";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 169) == "P")) {
                    // line 170
                    echo "                  <div class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 170);
                    echo "% ";
                    echo ($context["text_discount"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 172
                    echo "                  <div class=\"discount\">\$";
                    echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 172), 2, ".", ",");
                    echo "</div>
                ";
                }
                // line 174
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 174)) {
                    // line 175
                    echo "                  <div class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 175);
                    echo "</div>
                ";
                }
                // line 177
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 177) || twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 177))) {
                    // line 178
                    echo "                  <div class=\"validity\">
                    ";
                    // line 179
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 179)) {
                        // line 180
                        echo "                      <span class=\"date-start\">";
                        echo ($context["text_valid_from"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 180);
                        echo "</span>
                    ";
                    }
                    // line 182
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 182)) {
                        // line 183
                        echo "                      <span class=\"date-end\">";
                        echo ($context["text_valid_to"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 183);
                        echo "</span>
                    ";
                    }
                    // line 185
                    echo "                  </div>
                ";
                }
                // line 187
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "                  <div class=\"status status-active\">";
                    echo ($context["text_active"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 190
                    echo "                  <div class=\"status status-inactive\">";
                    echo ($context["text_inactive"] ?? null);
                    echo "</div>
                ";
                }
                // line 192
                echo "                <button class=\"qr-button\" onclick=\"showQRCode('";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 192);
                echo "')\">Show QR Code</button>
              </div>
            </div>
            <div id=\"qrModal-";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 195);
                echo "\" class=\"qr-modal\">
              <div class=\"qr-modal-content\">
                <span class=\"qr-close\" onclick=\"hideQRCode('";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 197);
                echo "')\">×</span>
                <h3>Scan QR Code</h3>
                <div class=\"qr-code-container\" id=\"qrcode-";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 199);
                echo "\"></div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "        </div>
      ";
        } else {
            // line 205
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 207
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 208
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      </div>
      ";
        // line 211
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 213
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 216
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 216);
        echo "
<script src=\"https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js\"></script>
<script>
function showQRCode(code) {
  const modal = document.getElementById(`qrModal-\${code}`);
  const container = document.getElementById(`qrcode-\${code}`);
  container.innerHTML = '';
  
  new QRCode(container, {
    text: code,
    width: 200,
    height: 200
  });
  
  modal.style.display = 'block';
}

function hideQRCode(code) {
  const modal = document.getElementById(`qrModal-\${code}`);
  modal.style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
  if (event.target.classList.contains('qr-modal')) {
    event.target.style.display = 'none';
  }
}
</script>
";
        // line 245
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
        return array (  422 => 245,  390 => 216,  384 => 213,  379 => 211,  371 => 208,  368 => 207,  362 => 205,  358 => 203,  348 => 199,  343 => 197,  338 => 195,  331 => 192,  325 => 190,  319 => 188,  316 => 187,  312 => 185,  304 => 183,  301 => 182,  293 => 180,  291 => 179,  288 => 178,  285 => 177,  279 => 175,  276 => 174,  270 => 172,  262 => 170,  260 => 169,  254 => 166,  250 => 164,  246 => 163,  243 => 162,  241 => 161,  237 => 160,  106 => 31,  100 => 28,  97 => 27,  95 => 26,  90 => 24,  84 => 21,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  58 => 9,  54 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
