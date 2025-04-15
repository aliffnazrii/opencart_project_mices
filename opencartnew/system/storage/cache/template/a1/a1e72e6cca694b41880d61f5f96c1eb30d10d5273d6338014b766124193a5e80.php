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
class __TwigTemplate_ca3a774a8855edb759d6d9209f4cdeadb58516beaf718ed6ec764e71f427b2e2 extends \Twig\Template
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
            echo " <h2 class=\"title\">";
            echo ($context["text_my_account"] ?? null);
            echo "</h2>

\t\t\t\t
\t\t\t\t
";
        }
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 75);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 77
        if (($context["success"] ?? null)) {
            // line 78
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 80
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  <div class=\"row\">
    ";
        // line 84
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 85
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 86
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 87
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 88
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 89
            echo "    ";
        } else {
            // line 90
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 91
            echo "    ";
        }
        // line 92
        echo "<div id=\"reward-points-banner-block\">
  <div id=\"reward-points-banner\">
    <div class=\"banner-style text-center\">
      <div class=\"row no-gutters\" style=\"margin-top: 20px;\">
        <p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">
          MEMBERSHIP
        </p>
        <div class=\"col-md-6 text-center barcode\">
          <div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
            <img src=\"";
        // line 101
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
            <span style=\"color:#000; font-weight:900; font-size:18px\">
              ";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 103);
        echo "
            </span>
          </div>
        </div>
        <div class=\"col-md-6 text-center\">
          <div class=\"col-12 row\">
            <span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">
              ";
        // line 110
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 110));
        echo "
              ";
        // line 111
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 111));
        echo "
            </span>
            <div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">
              ";
        // line 114
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 114)), 0, ".", ",");
        echo "
            </div>
            <span style=\"color: #141300; font-weight:900; font-size:18px\">
              Points
            </span>
          </div>
        </div>
      </div>
      ";
        // line 122
        if (($context["tier_info"] ?? null)) {
            // line 123
            echo "        <div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
          <table style=\"width: 100%;\">
            ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 125)) {
                // line 126
                echo "              <tr>
                <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">
                  *
                </td>
                <td>
                  Shop up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 133);
                echo "
                  </span>
                  more by
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 137
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 137), "d/m/Y");
                echo "
                  </span>
                  to remain in
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 141
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 141);
                echo "
                  </span>
                  .
                </td>
              </tr>
            ";
            }
            // line 147
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 147)) {
                // line 148
                echo "              <tr>
                <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">
                  *
                </td>
                <td>
                  Shop up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 155
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 155);
                echo "
                  </span>
                  more by
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 159
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 159), "d/m/Y");
                echo "
                  </span>
                  to tier up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 163);
                echo "
                  </span>
                  .
                </td>
              </tr>
            ";
            }
            // line 169
            echo "          </table>
        </div>
      ";
        }
        // line 172
        echo "    </div>
  </div>
</div>

    <div id=\"content\" class=\"account-page ";
        // line 176
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 177), "get", [0 => "pageTitlePosition"], "method", false, false, false, 177) == "default")) {
            // line 178
            echo "        <h1 class=\"title page-title\">
          ";
            // line 179
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 182
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 185
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 189
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 190
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 194
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 195
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 199
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 200
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 203
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 205
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 206
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 210
        if (($context["credit_cards"] ?? null)) {
            // line 211
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 213
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 217
                echo "              <li>
                <a href=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 218);
                echo "\">
                  ";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 219);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "          </ul>
        </div>
      ";
        }
        // line 226
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 228
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 232
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 233
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 237
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 238
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 241
        if (($context["reward"] ?? null)) {
            // line 242
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 243
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 244
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 248
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 249
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 250
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 254
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 255
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 260
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 261
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 265
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 266
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 271
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 272
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 281
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 284
        if ( !($context["tracking"] ?? null)) {
            // line 285
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 286
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 287
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 291
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 292
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 293
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 297
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 298
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 302
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 306
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 310
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 311
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 316
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 318
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 321
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
        return array (  629 => 321,  623 => 318,  618 => 316,  610 => 311,  606 => 310,  599 => 306,  593 => 302,  586 => 298,  582 => 297,  575 => 293,  571 => 292,  568 => 291,  561 => 287,  557 => 286,  554 => 285,  552 => 284,  546 => 281,  534 => 272,  530 => 271,  522 => 266,  518 => 265,  511 => 261,  507 => 260,  499 => 255,  495 => 254,  488 => 250,  484 => 249,  481 => 248,  474 => 244,  470 => 243,  467 => 242,  465 => 241,  459 => 238,  455 => 237,  448 => 233,  444 => 232,  437 => 228,  433 => 226,  428 => 223,  418 => 219,  414 => 218,  411 => 217,  407 => 216,  401 => 213,  397 => 211,  395 => 210,  386 => 206,  380 => 205,  373 => 203,  367 => 200,  363 => 199,  356 => 195,  352 => 194,  345 => 190,  341 => 189,  334 => 185,  327 => 182,  321 => 179,  318 => 178,  316 => 177,  312 => 176,  306 => 172,  301 => 169,  292 => 163,  285 => 159,  278 => 155,  269 => 148,  266 => 147,  257 => 141,  250 => 137,  243 => 133,  234 => 126,  232 => 125,  228 => 123,  226 => 122,  215 => 114,  209 => 111,  205 => 110,  195 => 103,  190 => 101,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  167 => 88,  164 => 87,  161 => 86,  159 => 85,  155 => 84,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
