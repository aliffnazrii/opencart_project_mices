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
class __TwigTemplate_1008d791489c58c32a75b140f0a25ce1ca3afe87a402c03d67dfa1e8317deac6 extends \Twig\Template
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
        .qr-code-container {
          padding: 15px;
          text-align: center;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 250px;
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
          display: block;
          width: fit-content;
          margin-left: auto;
          margin-right: auto;
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
        // line 138
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 139
        if (($context["coupons"] ?? null)) {
            // line 140
            echo "        <div class=\"coupon-grid\">
          ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 142
                echo "            <div class=\"coupon-card\">
              <div class=\"coupon-code\">
                <h4>";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 144);
                echo "</h4>
              </div>
              <div class=\"coupon-details\">
                ";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 147) == "P")) {
                    // line 148
                    echo "                  <div class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 148);
                    echo "% ";
                    echo ($context["text_discount"] ?? null);
                    echo "</div>
                ";
                } else {
                    // line 150
                    echo "                  <div class=\"discount\">\$";
                    echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 150), 2, ".", ",");
                    echo "</div>
                ";
                }
                // line 152
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 152)) {
                    // line 153
                    echo "                  <div class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 153);
                    echo "</div>
                ";
                }
                // line 155
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 155) || twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 155))) {
                    // line 156
                    echo "                  <div class=\"validity\">
                    ";
                    // line 157
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "                      <span class=\"date-start\">";
                        echo ($context["text_valid_from"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 158);
                        echo "</span>
                    ";
                    }
                    // line 160
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                      <span class=\"date-end\">";
                        echo ($context["text_valid_to"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 161);
                        echo "</span>
                    ";
                    }
                    // line 163
                    echo "                  </div>
                ";
                }
                // line 165
                echo "                <button class=\"qr-button btn btn-primary\" onclick=\"showQRCode('";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 165);
                echo "', '";
                echo (((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 165) == "P")) ? ((twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 165) . "%")) : (("\$" . twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 165), 2, ".", ","))));
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 165);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 165);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 165);
                echo "')\">Show QR Code</button>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "        </div>
      ";
        } else {
            // line 171
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 173
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 174
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      </div>
      ";
        // line 177
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 179
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 182
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 182);
        echo "
<script src=\"https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js\"></script>
<div id=\"qr-modal\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\">Coupon Details</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"coupon-details-modal\">
          <h3 id=\"modal-coupon-code\" class=\"text-center\"></h3>
          <div id=\"modal-discount\" class=\"discount text-center\"></div>
          <p id=\"modal-description\" class=\"description\"></p>
          <div class=\"validity text-center\">
            <span id=\"modal-date-start\"></span>
            <span id=\"modal-date-end\"></span>
          </div>
          <div class=\"qr-code-container\" id=\"qrcode-modal\"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function showQRCode(code, discount, description, dateStart, dateEnd) {
  document.getElementById('modal-coupon-code').textContent = code;
  document.getElementById('modal-discount').textContent = discount;
  document.getElementById('modal-description').textContent = description;
  document.getElementById('modal-date-start').textContent = dateStart ? 'Valid from: ' + dateStart : '';
  document.getElementById('modal-date-end').textContent = dateEnd ? 'Valid to: ' + dateEnd : '';
  
  const qrcodeContainer = document.getElementById('qrcode-modal');
  qrcodeContainer.innerHTML = '';
  
  new QRCode(qrcodeContainer, {
    text: JSON.stringify({
      code: code,
      discount: discount,
      description: description,
      dateStart: dateStart,
      dateEnd: dateEnd
    }),
    width: 256,
    height: 256,
    colorDark: '#000000',
    colorLight: '#ffffff',
    correctLevel: QRCode.CorrectLevel.H
  });
  
  \$('#qr-modal').modal('show');
}
</script>
";
        // line 236
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
        return array (  402 => 236,  345 => 182,  339 => 179,  334 => 177,  326 => 174,  323 => 173,  317 => 171,  313 => 169,  294 => 165,  290 => 163,  282 => 161,  279 => 160,  271 => 158,  269 => 157,  266 => 156,  263 => 155,  257 => 153,  254 => 152,  248 => 150,  240 => 148,  238 => 147,  232 => 144,  228 => 142,  224 => 141,  221 => 140,  219 => 139,  215 => 138,  106 => 31,  100 => 28,  97 => 27,  95 => 26,  90 => 24,  84 => 21,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  58 => 9,  54 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
