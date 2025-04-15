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
class __TwigTemplate_c06d922728fce01c8dcbff790cbd0896a788c343265f8d7c64ba6b43cd4437d8 extends \Twig\Template
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
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 62);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 62);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</ul>
";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "get", [0 => "pageTitlePosition"], "method", false, false, false, 65) == "top")) {
            // line 66
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 68);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 70
        if (($context["success"] ?? null)) {
            // line 71
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 73
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 74
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 75
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 76
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 77
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 80
            echo "    ";
        }
        // line 81
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 82), "get", [0 => "pageTitlePosition"], "method", false, false, false, 82) == "default")) {
            // line 83
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 85
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">";
        // line 87
        echo ($context["text_my_account"] ?? null);
        echo "</h2>

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">
\t\t\t\t\t\t\t\t\tMEMBERSHIP
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t\t\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 100);
        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 107));
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 108));
        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 111
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 111)), 0, ".", ",");
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">
\t\t\t\t\t\t\t\t\t\t\tPoints
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 124
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 125
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 126
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 127
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 130
        if (($context["credit_cards"] ?? null)) {
            // line 131
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 132
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 135
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 135);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 135);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "          </ul>
        </div>
      ";
        }
        // line 140
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 141
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 143
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 144
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 145
        if (($context["reward"] ?? null)) {
            // line 146
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 148
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 149
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 152
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 153
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 157
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 158
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-redeem\">
\t\t\t\t<a\thref=\"";
        // line 162
        echo ($context["redeem"] ?? null);
        echo "\">
\t\t\t\t";
        // line 163
        echo ($context["text_redeem_voucher"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\"><a href=\"";
        // line 167
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 171
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 173
        if ( !($context["tracking"] ?? null)) {
            // line 174
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 176
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 177
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 179
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 182
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 184
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 187
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 188
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 190
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
        return array (  437 => 190,  432 => 188,  428 => 187,  420 => 184,  415 => 182,  410 => 179,  403 => 177,  396 => 176,  388 => 174,  386 => 173,  381 => 171,  372 => 167,  365 => 163,  361 => 162,  354 => 158,  350 => 157,  343 => 153,  339 => 152,  331 => 149,  324 => 148,  316 => 146,  314 => 145,  308 => 144,  302 => 143,  297 => 141,  294 => 140,  289 => 137,  278 => 135,  274 => 134,  269 => 132,  266 => 131,  264 => 130,  256 => 127,  250 => 126,  244 => 125,  238 => 124,  222 => 111,  216 => 108,  212 => 107,  202 => 100,  197 => 98,  183 => 87,  177 => 85,  171 => 83,  169 => 82,  164 => 81,  161 => 80,  158 => 79,  155 => 78,  152 => 77,  149 => 76,  146 => 75,  144 => 74,  139 => 73,  133 => 71,  131 => 70,  126 => 68,  120 => 66,  118 => 65,  115 => 64,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
