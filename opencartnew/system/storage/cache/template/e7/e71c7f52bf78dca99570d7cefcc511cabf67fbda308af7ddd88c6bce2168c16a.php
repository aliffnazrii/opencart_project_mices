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
class __TwigTemplate_f7ef3fd2c155a9901d6146a28a230e6bac27568ddfdb4fe1d2c7188266d8b2df extends \Twig\Template
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
        // line 231
        echo "


";
        // line 234
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 237
            echo "    <li>
      <a href=\"";
            // line 238
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 238);
            echo "\">
        ";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 239);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "</ul>
";
        // line 244
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 244), "get", [0 => "pageTitlePosition"], "method", false, false, false, 244) == "top")) {
            // line 245
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 247
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 251
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 251);
        echo "
<div class=\"container\">
  <div class=\"row\">
    ";
        // line 254
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 256
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 256), "get", [0 => "pageTitlePosition"], "method", false, false, false, 256) == "default")) {
            // line 257
            echo "        <h1 class=\"title page-title\">
          ";
            // line 258
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 261
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
        // line 390
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 391
        if (($context["coupons"] ?? null)) {
            // line 392
            echo "        <div class=\"coupon-grid\">
          ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 394
                echo "            <div class=\"coupon-card\">
              <div class=\"coupon-code\">
                <h4>";
                // line 396
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 396);
                echo "</h4>
              </div>
              <div class=\"coupon-details\">
                ";
                // line 399
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 399) == "P")) {
                    // line 400
                    echo "                  <div class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 400);
                    echo "% ";
                    echo ($context["text_discount"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 402
                    echo "                  <div class=\"discount\">\$";
                    echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 402), 2, ".", ",");
                    echo "</div>
                ";
                }
                // line 404
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 404)) {
                    // line 405
                    echo "                  <div class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 405);
                    echo "</div>
                ";
                }
                // line 407
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 407) || twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 407))) {
                    // line 408
                    echo "                  <div class=\"validity\">
                    ";
                    // line 409
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 409)) {
                        // line 410
                        echo "                      <span class=\"date-start\">";
                        echo ($context["text_valid_from"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 410);
                        echo "</span>
                    ";
                    }
                    // line 412
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 412)) {
                        // line 413
                        echo "                      <span class=\"date-end\">";
                        echo ($context["text_valid_to"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 413);
                        echo "</span>
                    ";
                    }
                    // line 415
                    echo "                  </div>
                ";
                }
                // line 417
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 417)) {
                    // line 418
                    echo "                  <div class=\"status status-active\">";
                    echo ($context["text_active"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 420
                    echo "                  <div class=\"status status-inactive\">";
                    echo ($context["text_inactive"] ?? null);
                    echo "</div>
                ";
                }
                // line 422
                echo "                <button class=\"qr-button\" onclick=\"showQRCode('";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 422);
                echo "')\">Show QR Code</button>
              </div>
            </div>
            <div id=\"qrModal-";
                // line 425
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 425);
                echo "\" class=\"qr-modal\">
              <div class=\"qr-modal-content\">
                <span class=\"qr-close\" onclick=\"hideQRCode('";
                // line 427
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 427);
                echo "')\">×</span>
                <h3>Scan QR Code</h3>
                <div class=\"qr-code-container\" id=\"qrcode-";
                // line 429
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 429);
                echo "\"></div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            echo "        </div>
      ";
        } else {
            // line 435
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 437
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 438
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      </div>
      ";
        // line 441
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 443
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 446
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 446);
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
        // line 475
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
        return array (  422 => 475,  390 => 446,  384 => 443,  379 => 441,  371 => 438,  368 => 437,  362 => 435,  358 => 433,  348 => 429,  343 => 427,  338 => 425,  331 => 422,  325 => 420,  319 => 418,  316 => 417,  312 => 415,  304 => 413,  301 => 412,  293 => 410,  291 => 409,  288 => 408,  285 => 407,  279 => 405,  276 => 404,  270 => 402,  262 => 400,  260 => 399,  254 => 396,  250 => 394,  246 => 393,  243 => 392,  241 => 391,  237 => 390,  106 => 261,  100 => 258,  97 => 257,  95 => 256,  90 => 254,  84 => 251,  77 => 247,  73 => 245,  71 => 244,  68 => 243,  58 => 239,  54 => 238,  51 => 237,  47 => 236,  42 => 234,  37 => 231,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
