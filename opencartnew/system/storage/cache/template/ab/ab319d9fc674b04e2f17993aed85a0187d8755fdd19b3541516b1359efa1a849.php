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
class __TwigTemplate_097b3d4e0036db93ef3869fb7f37eba06ad458e330049e6f8999523e715bc968 extends \Twig\Template
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
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 72
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 76);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 78
        if (($context["success"] ?? null)) {
            // line 79
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 81
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  <div class=\"row\">
    ";
        // line 85
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 86
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 87
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 88
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 89
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 90
            echo "    ";
        } else {
            // line 91
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 92
            echo "    ";
        }
        // line 93
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 94), "get", [0 => "pageTitlePosition"], "method", false, false, false, 94) == "default")) {
            // line 95
            echo "        <h1 class=\"title page-title\">
          ";
            // line 96
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 99
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t<img src=\"";
        // line 110
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 111
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 111);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">";
        // line 116
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 116));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 116));
        echo "</span>
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 117
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 117)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 122
        if (($context["tier_info"] ?? null)) {
            // line 123
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 125)) {
                // line 126
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 129);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 129), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 129);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 133)) {
                // line 134
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 137);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 137), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 137);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
          ";
        // line 148
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 152
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 153
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 157
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 158
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 162
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 163
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-wishlist\">
            <a href=\"";
        // line 167
        echo ($context["wishlist"] ?? null);
        echo "\">
              ";
        // line 168
        echo ($context["text_wishlist"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 173
        if (($context["credit_cards"] ?? null)) {
            // line 174
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 176
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 180
                echo "              <li>
                <a href=\"";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 181);
                echo "\">
                  ";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 182);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "          </ul>
        </div>
      ";
        }
        // line 189
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 191
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 195
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 196
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 200
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 201
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 204
        if (($context["reward"] ?? null)) {
            // line 205
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 206
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 207
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 211
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 212
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 213
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 217
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 218
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 223
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 224
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 228
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 229
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 234
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 235
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 244
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 247
        if ( !($context["tracking"] ?? null)) {
            // line 248
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 249
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 250
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 254
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 255
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 256
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 260
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 261
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 265
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 269
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 273
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 274
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 279
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 281
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 284
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
        return array (  578 => 284,  572 => 281,  567 => 279,  559 => 274,  555 => 273,  548 => 269,  542 => 265,  535 => 261,  531 => 260,  524 => 256,  520 => 255,  517 => 254,  510 => 250,  506 => 249,  503 => 248,  501 => 247,  495 => 244,  483 => 235,  479 => 234,  471 => 229,  467 => 228,  460 => 224,  456 => 223,  448 => 218,  444 => 217,  437 => 213,  433 => 212,  430 => 211,  423 => 207,  419 => 206,  416 => 205,  414 => 204,  408 => 201,  404 => 200,  397 => 196,  393 => 195,  386 => 191,  382 => 189,  377 => 186,  367 => 182,  363 => 181,  360 => 180,  356 => 179,  350 => 176,  346 => 174,  344 => 173,  336 => 168,  332 => 167,  325 => 163,  321 => 162,  314 => 158,  310 => 157,  303 => 153,  299 => 152,  292 => 148,  286 => 144,  281 => 141,  270 => 137,  265 => 134,  262 => 133,  251 => 129,  246 => 126,  244 => 125,  240 => 123,  238 => 122,  230 => 117,  224 => 116,  216 => 111,  212 => 110,  197 => 99,  191 => 96,  188 => 95,  186 => 94,  181 => 93,  178 => 92,  175 => 91,  172 => 90,  169 => 89,  166 => 88,  163 => 87,  161 => 86,  157 => 85,  154 => 84,  148 => 81,  144 => 79,  142 => 78,  137 => 76,  130 => 72,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
