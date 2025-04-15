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
class __TwigTemplate_617c691eb23714a0c7c8e1314fd2f3c24573324bb5f1c1c7f2991fd401021cf7 extends \Twig\Template
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
        echo "  <div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t<img src=\"";
        // line 90
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 91);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">";
        // line 96
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 96));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 96));
        echo "</span>
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 97
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 97)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 102
        if (($context["tier_info"] ?? null)) {
            // line 103
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 105)) {
                // line 106
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 109);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 109), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 109);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 113)) {
                // line 114
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 117
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 117);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 117), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 117);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
  <div class=\"row\">
    ";
        // line 128
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 129
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 130
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 131
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 132
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 133
            echo "    ";
        } else {
            // line 134
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 135
            echo "    ";
        }
        // line 136
        echo "    
    <div id=\"content\" class=\"account-page ";
        // line 137
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 138), "get", [0 => "pageTitlePosition"], "method", false, false, false, 138) == "default")) {
            // line 139
            echo "        <h1 class=\"title page-title\">
          ";
            // line 140
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 143
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 146
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 150
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 151
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 155
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 156
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 160
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 161
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 164
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 166
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 167
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 171
        if (($context["credit_cards"] ?? null)) {
            // line 172
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 174
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 178
                echo "              <li>
                <a href=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 179);
                echo "\">
                  ";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 180);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "          </ul>
        </div>
      ";
        }
        // line 187
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 189
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 193
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 194
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 198
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 199
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 202
        if (($context["reward"] ?? null)) {
            // line 203
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 204
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 205
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 209
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 210
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 211
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 215
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 216
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 221
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 222
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 226
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 227
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 232
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 233
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 242
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 245
        if ( !($context["tracking"] ?? null)) {
            // line 246
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 247
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 248
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 252
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 253
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 254
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 258
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 259
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 263
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 267
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 271
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 272
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 277
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 279
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 282
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
        return array (  585 => 282,  579 => 279,  574 => 277,  566 => 272,  562 => 271,  555 => 267,  549 => 263,  542 => 259,  538 => 258,  531 => 254,  527 => 253,  524 => 252,  517 => 248,  513 => 247,  510 => 246,  508 => 245,  502 => 242,  490 => 233,  486 => 232,  478 => 227,  474 => 226,  467 => 222,  463 => 221,  455 => 216,  451 => 215,  444 => 211,  440 => 210,  437 => 209,  430 => 205,  426 => 204,  423 => 203,  421 => 202,  415 => 199,  411 => 198,  404 => 194,  400 => 193,  393 => 189,  389 => 187,  384 => 184,  374 => 180,  370 => 179,  367 => 178,  363 => 177,  357 => 174,  353 => 172,  351 => 171,  342 => 167,  336 => 166,  329 => 164,  323 => 161,  319 => 160,  312 => 156,  308 => 155,  301 => 151,  297 => 150,  290 => 146,  283 => 143,  277 => 140,  274 => 139,  272 => 138,  268 => 137,  265 => 136,  262 => 135,  259 => 134,  256 => 133,  253 => 132,  250 => 131,  247 => 130,  245 => 129,  241 => 128,  235 => 124,  230 => 121,  219 => 117,  214 => 114,  211 => 113,  200 => 109,  195 => 106,  193 => 105,  189 => 103,  187 => 102,  179 => 97,  173 => 96,  165 => 91,  161 => 90,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
