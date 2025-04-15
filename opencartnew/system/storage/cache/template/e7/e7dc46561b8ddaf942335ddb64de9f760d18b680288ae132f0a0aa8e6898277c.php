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
class __TwigTemplate_5f2a308f37aa900a46d35a9c4a685085795d9e2378ce8154db091f7b6362560d extends \Twig\Template
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
        <h2 class=\"title\">
          ";
        // line 137
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <h2 class=\"title\">
          ";
        // line 140
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <h2 class=\"title\">
          ";
        // line 143
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 147
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 148
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 152
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 153
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 157
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 158
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 161
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 163
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 164
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 168
        if (($context["credit_cards"] ?? null)) {
            // line 169
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 171
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 175
                echo "              <li>
                <a href=\"";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 176);
                echo "\">
                  ";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 177);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "          </ul>
        </div>
      ";
        }
        // line 184
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 186
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 190
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 191
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 195
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 196
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 199
        if (($context["reward"] ?? null)) {
            // line 200
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 201
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 202
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 206
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 207
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 208
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 212
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 213
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 218
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 219
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 223
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 224
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 229
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 230
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 239
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 242
        if ( !($context["tracking"] ?? null)) {
            // line 243
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 244
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 245
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 249
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 250
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 251
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 255
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 256
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 260
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 264
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 268
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 269
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 274
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 276
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 279
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
        return array (  563 => 279,  557 => 276,  552 => 274,  544 => 269,  540 => 268,  533 => 264,  527 => 260,  520 => 256,  516 => 255,  509 => 251,  505 => 250,  502 => 249,  495 => 245,  491 => 244,  488 => 243,  486 => 242,  480 => 239,  468 => 230,  464 => 229,  456 => 224,  452 => 223,  445 => 219,  441 => 218,  433 => 213,  429 => 212,  422 => 208,  418 => 207,  415 => 206,  408 => 202,  404 => 201,  401 => 200,  399 => 199,  393 => 196,  389 => 195,  382 => 191,  378 => 190,  371 => 186,  367 => 184,  362 => 181,  352 => 177,  348 => 176,  345 => 175,  341 => 174,  335 => 171,  331 => 169,  329 => 168,  320 => 164,  314 => 163,  307 => 161,  301 => 158,  297 => 157,  290 => 153,  286 => 152,  279 => 148,  275 => 147,  268 => 143,  262 => 140,  256 => 137,  250 => 134,  243 => 131,  237 => 128,  234 => 127,  232 => 126,  227 => 125,  224 => 124,  221 => 123,  218 => 122,  215 => 121,  212 => 120,  209 => 119,  207 => 118,  203 => 117,  200 => 116,  194 => 113,  190 => 111,  188 => 110,  183 => 108,  166 => 94,  160 => 91,  156 => 90,  146 => 83,  141 => 81,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
