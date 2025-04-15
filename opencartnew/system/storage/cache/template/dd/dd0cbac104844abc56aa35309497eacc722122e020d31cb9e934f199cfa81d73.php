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
class __TwigTemplate_0ccd20e46881bc35762e41ba2eff784ad48b9c34fa1c7f4cb66cb3de5d6f943a extends \Twig\Template
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
\t\t\t\tbackground: linear-gradient(90deg, #F9D342 0%, rgb(239, 219, 210) 50%, rgb(245, 231, 224) 70%, rgb(223, 183, 164) 100%);
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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 55
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 55);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 55);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</ul>
";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 58), "get", [0 => "pageTitlePosition"], "method", false, false, false, 58) == "top")) {
            // line 59
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 61);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 63
        if (($context["success"] ?? null)) {
            // line 64
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 66
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 67
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 68
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 69
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 70
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 71
            echo "    ";
        } else {
            // line 72
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 73
            echo "    ";
        }
        // line 74
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 75), "get", [0 => "pageTitlePosition"], "method", false, false, false, 75) == "default")) {
            // line 76
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 78
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">MEMBERSHIP</p>
\t\t\t\t<span class=\"text-center\" style=\"font-weight:500; font-size:30px; margin-bottom:20px; color:#5A0F14;\">";
        // line 86
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 86));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 86));
        echo "</span>
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 60%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t<img src=\"";
        // line 89
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 90);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 95
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 95)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 100
        if (($context["tier_info"] ?? null)) {
            // line 101
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 103)) {
                // line 104
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 107);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 107), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 107);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 111)) {
                // line 112
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 115);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 115), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 115);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
        <h2 class=\"title\">";
        // line 126
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 128
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 129
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 130
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 131
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 134
        if (($context["credit_cards"] ?? null)) {
            // line 135
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 136
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 139
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 139);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "          </ul>
        </div>
      ";
        }
        // line 144
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 145
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 147
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 148
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 149
        if (($context["reward"] ?? null)) {
            // line 150
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 152
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 153
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 154
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 156
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 157
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 165
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 167
        if ( !($context["tracking"] ?? null)) {
            // line 168
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 170
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 171
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 173
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 176
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 178
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 181
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 182
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 184
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
        return array (  446 => 184,  441 => 182,  437 => 181,  429 => 178,  424 => 176,  419 => 173,  412 => 171,  405 => 170,  397 => 168,  395 => 167,  390 => 165,  379 => 157,  375 => 156,  368 => 154,  362 => 153,  355 => 152,  347 => 150,  345 => 149,  339 => 148,  333 => 147,  328 => 145,  325 => 144,  320 => 141,  309 => 139,  305 => 138,  300 => 136,  297 => 135,  295 => 134,  287 => 131,  281 => 130,  275 => 129,  269 => 128,  264 => 126,  258 => 122,  253 => 119,  242 => 115,  237 => 112,  234 => 111,  223 => 107,  218 => 104,  216 => 103,  212 => 101,  210 => 100,  202 => 95,  194 => 90,  190 => 89,  182 => 86,  170 => 78,  164 => 76,  162 => 75,  157 => 74,  154 => 73,  151 => 72,  148 => 71,  145 => 70,  142 => 69,  139 => 68,  137 => 67,  132 => 66,  126 => 64,  124 => 63,  119 => 61,  113 => 59,  111 => 58,  108 => 57,  97 => 55,  93 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
