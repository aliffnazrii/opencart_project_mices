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
class __TwigTemplate_6da79078a6e85622736770ddc72dd9e7a80fad2b050e1d0106770da1318e87be extends \Twig\Template
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
\t\t\t\tbackground: linear-gradient(90deg, rgb(223, 183, 164) 0%, rgb(239, 219, 210) 50%, rgb(245, 231, 224) 70%, rgb(223, 183, 164) 100%);
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
\t\t\t\tmargin:auto;
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 54
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 54);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 54);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</ul>
";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "pageTitlePosition"], "method", false, false, false, 57) == "top")) {
            // line 58
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 60);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 62
        if (($context["success"] ?? null)) {
            // line 63
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 65
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 66
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 67
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 68
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 69
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 70
            echo "    ";
        } else {
            // line 71
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 72
            echo "    ";
        }
        // line 73
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "pageTitlePosition"], "method", false, false, false, 74) == "default")) {
            // line 75
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 77
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">";
        // line 83
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 83));
        echo "</p>
\t\t\t\t<span class=\"text-center\" style=\"font-weight:500; font-size:18px; color:#5A0F14;\">";
        // line 84
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 84));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 84));
        echo "</span>
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 80%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t<img src=\"";
        // line 88
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 80%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 89
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 89);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 94
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 94)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 99
        if (($context["tier_info"] ?? null)) {
            // line 100
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 102)) {
                // line 103
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 106);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 106), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 106);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 110)) {
                // line 111
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 114);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 114), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 114);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
        <h2 class=\"title\">";
        // line 125
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 127
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 128
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 129
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 130
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 133
        if (($context["credit_cards"] ?? null)) {
            // line 134
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 135
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 138
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 138);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 138);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "          </ul>
        </div>
      ";
        }
        // line 143
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 144
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 146
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 147
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 148
        if (($context["reward"] ?? null)) {
            // line 149
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 151
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 152
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 153
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 155
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 156
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 164
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 166
        if ( !($context["tracking"] ?? null)) {
            // line 167
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 169
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 170
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 172
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 175
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 177
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 180
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 181
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 183
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
        return array (  448 => 183,  443 => 181,  439 => 180,  431 => 177,  426 => 175,  421 => 172,  414 => 170,  407 => 169,  399 => 167,  397 => 166,  392 => 164,  381 => 156,  377 => 155,  370 => 153,  364 => 152,  357 => 151,  349 => 149,  347 => 148,  341 => 147,  335 => 146,  330 => 144,  327 => 143,  322 => 140,  311 => 138,  307 => 137,  302 => 135,  299 => 134,  297 => 133,  289 => 130,  283 => 129,  277 => 128,  271 => 127,  266 => 125,  260 => 121,  255 => 118,  244 => 114,  239 => 111,  236 => 110,  225 => 106,  220 => 103,  218 => 102,  214 => 100,  212 => 99,  204 => 94,  196 => 89,  192 => 88,  183 => 84,  179 => 83,  169 => 77,  163 => 75,  161 => 74,  156 => 73,  153 => 72,  150 => 71,  147 => 70,  144 => 69,  141 => 68,  138 => 67,  136 => 66,  131 => 65,  125 => 63,  123 => 62,  118 => 60,  112 => 58,  110 => 57,  107 => 56,  96 => 54,  92 => 53,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
