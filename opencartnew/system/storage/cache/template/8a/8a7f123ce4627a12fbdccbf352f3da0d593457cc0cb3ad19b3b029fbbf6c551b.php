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

/* journal3/template/account/account.twig */
class __TwigTemplate_269a8b3f4af6fab305bfff14a19f6e060e40415b4727318e720a59ded42e1c6a extends \Twig\Template
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

\t\t\t\t<style>
\t\t\t\t.banner-style {
\t\t\t\tbackground: linear-gradient(90deg, #F9D342 0%, #FFE066 50%, #F9D342 70%, #E6B800 100%);
\t\t\t\tmargin-left: 10px;
\t\t\t\tmargin-right: 10px;
\t\t\t\tpadding: 10px;
\t\t\t\tpadding-bottom: 20px;
\t\t\t\tpadding-top: 20px;
\t\t\t\tcolor: #ffffff;
\t\t\t\tmargin: 15px;
\t\t\t\tposition: relative;
\t\t\t\tborder: 1px solid #ffffff;
\t\t\t\tborder-radius: 20px;
\t\t\t\toverflow: hidden;
\t\t\t\t}
\t\t\t\t
\t\t\t\t.banner-style span {
\t\t\t\tline-height: 1.2 !important;
\t\t\t\t}

\t\t\t\t.desktop .banner-style {
\t\t\t\t
\t\t\t\tline-height: 2 !important;
\t\t\t\twidth:70%

\t\t\t\t}
\t\t\t\t
\t\t\t\t@media (min-width: 992px) {
\t\t\t\t.text-md-center {
\t\t\t\ttext-align: left !important;
\t\t\t\t}
\t\t\t\t.no-gutters {
\t\t\t\tmargin-left: 20px;
\t\t\t\t}
\t\t\t\t.barcode {
\t\t\t\tpadding: 0;
\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t@media (max-width: 991px) {
\t\t\t\t.text-md-center {
\t\t\t\ttext-align: center !important;
\t\t\t\t}
\t\t\t\t.barcode {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\t
\t\t\t\t}
\t\t\t\t.hutz-points {
\t\t\t\tdisplay: block;
\t\t\t\twidth: 100%;
\t\t\t\ttext-align: center;
\t\t\t\tmargin-top: 0.5rem;
\t\t\t\t}
\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
<ul class=\"breadcrumb\">
  ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 62
            echo "    <li>
      <a href=\"";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 63);
            echo "\">
        ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 64);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</ul>
";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "pageTitlePosition"], "method", false, false, false, 69) == "top")) {
            // line 70
            echo "
\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t<img src=\"";
            // line 78
            echo ($context["barcode"] ?? null);
            echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 79);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">";
            // line 84
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 84));
            echo " ";
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 84));
            echo "</span>
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
            // line 85
            echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 85)), 0, ".", ",");
            echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 90
            if (($context["tier_info"] ?? null)) {
                // line 91
                echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
                // line 93
                if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 97);
                    echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 97), "d/m/Y");
                    echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 97);
                    echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 105);
                    echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 105), "d/m/Y");
                    echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 105);
                    echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
 <h2 class=\"title\">";
            // line 116
            echo ($context["text_my_account"] ?? null);
            echo "</h2>
";
        }
        // line 118
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 118);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 120
        if (($context["success"] ?? null)) {
            // line 121
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 123
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 126
        echo "  <div class=\"row\">
    ";
        // line 127
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 128
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 129
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 130
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 131
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 132
            echo "    ";
        } else {
            // line 133
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 134
            echo "    ";
        }
        // line 135
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 136), "get", [0 => "pageTitlePosition"], "method", false, false, false, 136) == "default")) {
            // line 137
            echo "        <h1 class=\"title page-title\">
          ";
            // line 138
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 141
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 144
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 148
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 149
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 153
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 154
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 158
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 159
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 162
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 164
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 165
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 169
        if (($context["credit_cards"] ?? null)) {
            // line 170
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 172
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 176
                echo "              <li>
                <a href=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 177);
                echo "\">
                  ";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 178);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "          </ul>
        </div>
      ";
        }
        // line 185
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 187
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 191
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 192
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 196
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 197
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 200
        if (($context["reward"] ?? null)) {
            // line 201
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 202
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 203
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 207
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 208
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 209
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 213
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 214
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 219
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 220
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 224
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 225
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 230
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 231
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 240
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 243
        if ( !($context["tracking"] ?? null)) {
            // line 244
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 245
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 246
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 250
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 251
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 252
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 256
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 257
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 261
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 265
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 269
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 270
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 275
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 277
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 280
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 280,  577 => 277,  572 => 275,  564 => 270,  560 => 269,  553 => 265,  547 => 261,  540 => 257,  536 => 256,  529 => 252,  525 => 251,  522 => 250,  515 => 246,  511 => 245,  508 => 244,  506 => 243,  500 => 240,  488 => 231,  484 => 230,  476 => 225,  472 => 224,  465 => 220,  461 => 219,  453 => 214,  449 => 213,  442 => 209,  438 => 208,  435 => 207,  428 => 203,  424 => 202,  421 => 201,  419 => 200,  413 => 197,  409 => 196,  402 => 192,  398 => 191,  391 => 187,  387 => 185,  382 => 182,  372 => 178,  368 => 177,  365 => 176,  361 => 175,  355 => 172,  351 => 170,  349 => 169,  340 => 165,  334 => 164,  327 => 162,  321 => 159,  317 => 158,  310 => 154,  306 => 153,  299 => 149,  295 => 148,  288 => 144,  281 => 141,  275 => 138,  272 => 137,  270 => 136,  265 => 135,  262 => 134,  259 => 133,  256 => 132,  253 => 131,  250 => 130,  247 => 129,  245 => 128,  241 => 127,  238 => 126,  232 => 123,  228 => 121,  226 => 120,  221 => 118,  216 => 116,  210 => 112,  205 => 109,  194 => 105,  189 => 102,  186 => 101,  175 => 97,  170 => 94,  168 => 93,  164 => 91,  162 => 90,  154 => 85,  148 => 84,  140 => 79,  136 => 78,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
