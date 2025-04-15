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
class __TwigTemplate_9c7fc8078d896e617cb7dd0ba26b229217b8162d5e21c427600771d2e95abd2d extends \Twig\Template
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
        // line 92
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
            <span style=\"color:#000; font-weight:900; font-size:18px\">
              ";
        // line 94
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 94);
        echo "
            </span>
          </div>
        </div>
        <div class=\"col-md-6 text-center\">
          <div class=\"col-12 row\">
            <span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">
              ";
        // line 101
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 101));
        echo "
              ";
        // line 102
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 102));
        echo "
            </span>
            <div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">
              ";
        // line 105
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 105)), 0, ".", ",");
        echo "
            </div>
            <span style=\"color: #141300; font-weight:900; font-size:18px\">
              Points
            </span>
          </div>
        </div>
      </div>
      ";
        // line 113
        if (($context["tier_info"] ?? null)) {
            // line 114
            echo "        <div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
          <table style=\"width: 100%;\">
            ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 116)) {
                // line 117
                echo "              <tr>
                <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">
                  *
                </td>
                <td>
                  Shop up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 124
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 124);
                echo "
                  </span>
                  more by
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 128
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 128), "d/m/Y");
                echo "
                  </span>
                  to remain in
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 132
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 132);
                echo "
                  </span>
                  .
                </td>
              </tr>
            ";
            }
            // line 138
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 138)) {
                // line 139
                echo "              <tr>
                <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">
                  *
                </td>
                <td>
                  Shop up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 146
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 146);
                echo "
                  </span>
                  more by
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 150
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 150), "d/m/Y");
                echo "
                  </span>
                  to tier up to
                  <span style=\"color:#79432A; font-weight:600;\">
                    ";
                // line 154
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 154);
                echo "
                  </span>
                  .
                </td>
              </tr>
            ";
            }
            // line 160
            echo "          </table>
        </div>
      ";
        }
        // line 163
        echo "    </div>
  </div>
</div>

  <div class=\"row\">
    ";
        // line 168
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 169
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 170
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 171
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 172
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 173
            echo "    ";
        } else {
            // line 174
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 175
            echo "    ";
        }
        // line 176
        echo "    
    <div id=\"content\" class=\"account-page ";
        // line 177
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 178
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => "pageTitlePosition"], "method", false, false, false, 178) == "default")) {
            // line 179
            echo "        <h1 class=\"title page-title\">
          ";
            // line 180
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 183
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 186
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 190
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 191
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 195
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 196
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 200
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 201
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 204
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 206
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 207
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 211
        if (($context["credit_cards"] ?? null)) {
            // line 212
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 214
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 218
                echo "              <li>
                <a href=\"";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 219);
                echo "\">
                  ";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 220);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "          </ul>
        </div>
      ";
        }
        // line 227
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 229
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 233
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 234
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 238
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 239
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 242
        if (($context["reward"] ?? null)) {
            // line 243
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 244
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 245
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 249
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 250
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 251
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 255
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 256
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 261
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 262
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 266
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 267
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 272
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 273
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 282
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 285
        if ( !($context["tracking"] ?? null)) {
            // line 286
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 287
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 288
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 292
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 293
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 294
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 298
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 299
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 303
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 307
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 311
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 312
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 317
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 319
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 322
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
        return array (  630 => 322,  624 => 319,  619 => 317,  611 => 312,  607 => 311,  600 => 307,  594 => 303,  587 => 299,  583 => 298,  576 => 294,  572 => 293,  569 => 292,  562 => 288,  558 => 287,  555 => 286,  553 => 285,  547 => 282,  535 => 273,  531 => 272,  523 => 267,  519 => 266,  512 => 262,  508 => 261,  500 => 256,  496 => 255,  489 => 251,  485 => 250,  482 => 249,  475 => 245,  471 => 244,  468 => 243,  466 => 242,  460 => 239,  456 => 238,  449 => 234,  445 => 233,  438 => 229,  434 => 227,  429 => 224,  419 => 220,  415 => 219,  412 => 218,  408 => 217,  402 => 214,  398 => 212,  396 => 211,  387 => 207,  381 => 206,  374 => 204,  368 => 201,  364 => 200,  357 => 196,  353 => 195,  346 => 191,  342 => 190,  335 => 186,  328 => 183,  322 => 180,  319 => 179,  317 => 178,  313 => 177,  310 => 176,  307 => 175,  304 => 174,  301 => 173,  298 => 172,  295 => 171,  292 => 170,  290 => 169,  286 => 168,  279 => 163,  274 => 160,  265 => 154,  258 => 150,  251 => 146,  242 => 139,  239 => 138,  230 => 132,  223 => 128,  216 => 124,  207 => 117,  205 => 116,  201 => 114,  199 => 113,  188 => 105,  182 => 102,  178 => 101,  168 => 94,  163 => 92,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
