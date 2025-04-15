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
class __TwigTemplate_c211d94e30765634e169e4b4b2ef4b133486c7821aa7d3a5764fbfe84739dcb4 extends \Twig\Template
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

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:20px;\">
\t\t\t\t<img src=\"";
        // line 95
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 96);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\" style = \"margin-top: 50px;\">
\t\t\t\t<span class=\"text-center\" style=\"font-weight:700; font-size:20px; color:#5A0F14;\">";
        // line 101
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 101));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 101));
        echo "</span>
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 102
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 102)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 107
        if (($context["tier_info"] ?? null)) {
            // line 108
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 110)) {
                // line 111
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 114);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 114), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 114);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 118)) {
                // line 119
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 122);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 122), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 122);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
        <h2 class=\"title\">";
        // line 133
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 135
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 136
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 137
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 138
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 141
        if (($context["credit_cards"] ?? null)) {
            // line 142
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 143
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 146
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 146);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 146);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "          </ul>
        </div>
      ";
        }
        // line 151
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 152
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 154
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 155
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 156
        if (($context["reward"] ?? null)) {
            // line 157
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 159
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 160
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 161
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 163
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 164
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>
<li class=\"edit-points\">
  <a href=\"";
        // line 168
        echo ($context["vouchers"] ?? null);
        echo "\">
";
        // line 169
        echo ($context["text_vouchers"] ?? null);
        echo "


  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 179
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 181
        if ( !($context["tracking"] ?? null)) {
            // line 182
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 184
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 185
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 187
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 190
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 192
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 195
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 196
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 198
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
        return array (  466 => 198,  461 => 196,  457 => 195,  449 => 192,  444 => 190,  439 => 187,  432 => 185,  425 => 184,  417 => 182,  415 => 181,  410 => 179,  397 => 169,  393 => 168,  386 => 164,  382 => 163,  375 => 161,  369 => 160,  362 => 159,  354 => 157,  352 => 156,  346 => 155,  340 => 154,  335 => 152,  332 => 151,  327 => 148,  316 => 146,  312 => 145,  307 => 143,  304 => 142,  302 => 141,  294 => 138,  288 => 137,  282 => 136,  276 => 135,  271 => 133,  265 => 129,  260 => 126,  249 => 122,  244 => 119,  241 => 118,  230 => 114,  225 => 111,  223 => 110,  219 => 108,  217 => 107,  209 => 102,  203 => 101,  195 => 96,  191 => 95,  177 => 85,  171 => 83,  169 => 82,  164 => 81,  161 => 80,  158 => 79,  155 => 78,  152 => 77,  149 => 76,  146 => 75,  144 => 74,  139 => 73,  133 => 71,  131 => 70,  126 => 68,  120 => 66,  118 => 65,  115 => 64,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
