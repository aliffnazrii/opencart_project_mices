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
class __TwigTemplate_d39150d64492860261b60f872471bdda337078edde245ccfb2d2fd5885da461e extends \Twig\Template
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

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">
\t\t\t\t\t\t\tMEMBERSHIP
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 81
            echo ($context["barcode"] ?? null);
            echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">
\t\t\t\t\t\t\t\t";
            // line 83
            echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 83);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">
\t\t\t\t\t\t\t\t";
            // line 90
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 90));
            echo "
\t\t\t\t\t\t\t\t";
            // line 91
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 91));
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">
\t\t\t\t\t\t\t\t";
            // line 94
            echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 94)), 0, ".", ",");
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">
\t\t\t\t\t\t\t\tPoints
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
";
        }
        // line 108
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 108);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 110
        if (($context["success"] ?? null)) {
            // line 111
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 113
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 116
        echo "  <div class=\"row\">
    ";
        // line 117
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 118
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 119
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 120
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 121
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 122
            echo "    ";
        } else {
            // line 123
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 124
            echo "    ";
        }
        // line 125
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 126), "get", [0 => "pageTitlePosition"], "method", false, false, false, 126) == "default")) {
            // line 127
            echo "        <h1 class=\"title page-title\">
          ";
            // line 128
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 131
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 134
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 138
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 139
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 143
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 144
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 148
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 149
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 152
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 154
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 155
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 159
        if (($context["credit_cards"] ?? null)) {
            // line 160
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 162
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 166
                echo "              <li>
                <a href=\"";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 167);
                echo "\">
                  ";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 168);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "          </ul>
        </div>
      ";
        }
        // line 175
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 177
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 181
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 182
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 186
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 187
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 190
        if (($context["reward"] ?? null)) {
            // line 191
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 192
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 193
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 197
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 198
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 199
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 203
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 204
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 209
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 210
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 214
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 215
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 220
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 221
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 230
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 233
        if ( !($context["tracking"] ?? null)) {
            // line 234
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 235
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 236
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 240
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 241
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 242
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 246
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 247
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 251
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 255
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 259
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 260
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 265
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 267
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 270
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
        return array (  545 => 270,  539 => 267,  534 => 265,  526 => 260,  522 => 259,  515 => 255,  509 => 251,  502 => 247,  498 => 246,  491 => 242,  487 => 241,  484 => 240,  477 => 236,  473 => 235,  470 => 234,  468 => 233,  462 => 230,  450 => 221,  446 => 220,  438 => 215,  434 => 214,  427 => 210,  423 => 209,  415 => 204,  411 => 203,  404 => 199,  400 => 198,  397 => 197,  390 => 193,  386 => 192,  383 => 191,  381 => 190,  375 => 187,  371 => 186,  364 => 182,  360 => 181,  353 => 177,  349 => 175,  344 => 172,  334 => 168,  330 => 167,  327 => 166,  323 => 165,  317 => 162,  313 => 160,  311 => 159,  302 => 155,  296 => 154,  289 => 152,  283 => 149,  279 => 148,  272 => 144,  268 => 143,  261 => 139,  257 => 138,  250 => 134,  243 => 131,  237 => 128,  234 => 127,  232 => 126,  227 => 125,  224 => 124,  221 => 123,  218 => 122,  215 => 121,  212 => 120,  209 => 119,  207 => 118,  203 => 117,  200 => 116,  194 => 113,  190 => 111,  188 => 110,  183 => 108,  166 => 94,  160 => 91,  156 => 90,  146 => 83,  141 => 81,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
