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
class __TwigTemplate_d463bbe246fcf125b0e32201e23239b0c64732733f775971e501c3909997b7b3 extends \Twig\Template
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
\t\t\t\tpadding: 2rem;
\t\t\t\tcolor: #ffffff;
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 56
            echo "    <li>
      <a href=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 57);
            echo "\">
        ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 58);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</ul>
";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "pageTitlePosition"], "method", false, false, false, 63) == "top")) {
            // line 64
            echo " <h2 class=\"title\">";
            echo ($context["text_my_account"] ?? null);
            echo "</h2>

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t<img src=\"";
            // line 73
            echo ($context["barcode"] ?? null);
            echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 74);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">";
            // line 79
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 79));
            echo " ";
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 79));
            echo "</span>
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
            // line 80
            echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 80)), 0, ".", ",");
            echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 85
            if (($context["tier_info"] ?? null)) {
                // line 86
                echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
                // line 88
                if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 92);
                    echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 92), "d/m/Y");
                    echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 92);
                    echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 100);
                    echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 100), "d/m/Y");
                    echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 100);
                    echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
";
        }
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 112);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 114
        if (($context["success"] ?? null)) {
            // line 115
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 117
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 120
        echo "  <div class=\"row\">
    ";
        // line 121
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 122
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 123
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 124
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 125
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 126
            echo "    ";
        } else {
            // line 127
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 128
            echo "    ";
        }
        // line 129
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 130), "get", [0 => "pageTitlePosition"], "method", false, false, false, 130) == "default")) {
            // line 131
            echo "        <h1 class=\"title page-title\">
          ";
            // line 132
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 135
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 138
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 142
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 143
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 147
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 148
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 152
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 153
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 156
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 158
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 159
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 163
        if (($context["credit_cards"] ?? null)) {
            // line 164
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 166
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 170
                echo "              <li>
                <a href=\"";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 171);
                echo "\">
                  ";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 172);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "          </ul>
        </div>
      ";
        }
        // line 179
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 181
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 185
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 186
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 190
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 191
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 194
        if (($context["reward"] ?? null)) {
            // line 195
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 196
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 197
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 201
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 202
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 203
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 207
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 208
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 213
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 214
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 218
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 219
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 224
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 225
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 234
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 237
        if ( !($context["tracking"] ?? null)) {
            // line 238
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 239
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 240
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 244
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 245
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 246
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 250
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 251
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 255
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 259
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 263
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 264
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 269
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 271
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 274
        echo ($context["footer"] ?? null);
        echo "

<style>
/* Base styles for banner */
.banner-style {
  background: linear-gradient(90deg, #F9D342 0%, #FFE066 50%, #F9D342 70%, #E6B800 100%);
  padding: 2rem;
  color: #ffffff;
  border: 1px solid #ffffff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  margin: 2rem auto;
  max-width: 1200px;
}

/* Desktop specific styles */
@media (min-width: 992px) {
  .banner-style {
    width: 80%;
    margin: 2rem auto;
  }

  .banner-style .row {
    display: flex;
    align-items: center;
    margin: 0;
  }

  .text-md-center {
    text-align: left !important;
  }

  .barcode {
    padding: 0 2rem;
    display: flex;
    justify-content: flex-start;
  }

  .barcode > div {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 1.5rem;
    width: 100%;
    max-width: 300px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  }

  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-12.row {
    margin: 0;
    padding: 1rem;
  }
}

/* Typography and spacing */
.banner-style span {
  line-height: 1.4;
  display: block;
  margin-bottom: 0.5rem;
}

#reward-points-value {
  font-size: 2.5rem;
  font-weight: 600;
  margin: 1rem 0;
}

/* Table styles */
.banner-style table {
  margin-top: 2rem;
  width: 100%;
}

.banner-style td {
  padding: 0.5rem;
  vertical-align: top;
}
</style>
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
        return array (  576 => 274,  570 => 271,  565 => 269,  557 => 264,  553 => 263,  546 => 259,  540 => 255,  533 => 251,  529 => 250,  522 => 246,  518 => 245,  515 => 244,  508 => 240,  504 => 239,  501 => 238,  499 => 237,  493 => 234,  481 => 225,  477 => 224,  469 => 219,  465 => 218,  458 => 214,  454 => 213,  446 => 208,  442 => 207,  435 => 203,  431 => 202,  428 => 201,  421 => 197,  417 => 196,  414 => 195,  412 => 194,  406 => 191,  402 => 190,  395 => 186,  391 => 185,  384 => 181,  380 => 179,  375 => 176,  365 => 172,  361 => 171,  358 => 170,  354 => 169,  348 => 166,  344 => 164,  342 => 163,  333 => 159,  327 => 158,  320 => 156,  314 => 153,  310 => 152,  303 => 148,  299 => 147,  292 => 143,  288 => 142,  281 => 138,  274 => 135,  268 => 132,  265 => 131,  263 => 130,  258 => 129,  255 => 128,  252 => 127,  249 => 126,  246 => 125,  243 => 124,  240 => 123,  238 => 122,  234 => 121,  231 => 120,  225 => 117,  221 => 115,  219 => 114,  214 => 112,  207 => 107,  202 => 104,  191 => 100,  186 => 97,  183 => 96,  172 => 92,  167 => 89,  165 => 88,  161 => 86,  159 => 85,  151 => 80,  145 => 79,  137 => 74,  133 => 73,  120 => 64,  118 => 63,  115 => 62,  105 => 58,  101 => 57,  98 => 56,  94 => 55,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
