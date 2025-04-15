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
class __TwigTemplate_141649f03417b905bd57d6e1e012e572e7c6e4f0430d027342f42f35e9b1bea5 extends \Twig\Template
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 53
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 53);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 53);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</ul>
";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "pageTitlePosition"], "method", false, false, false, 56) == "top")) {
            // line 57
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 59);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 61
        if (($context["success"] ?? null)) {
            // line 62
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 64
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 65
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 66
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 67
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 68
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 69
            echo "    ";
        } else {
            // line 70
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 71
            echo "    ";
        }
        // line 72
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "pageTitlePosition"], "method", false, false, false, 73) == "default")) {
            // line 74
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 76
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">

\t\t\t\t<div id=\"reward-points-banner-block\">
\t\t\t\t<div id=\"reward-points-banner\">
\t\t\t\t<div class=\"banner-style text-center\">
\t\t\t\t<p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">";
        // line 82
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 82));
        echo "</p>
\t\t\t\t<span class=\"text-center\" style=\"font-weight:500; font-size:18px; color:#5A0F14;\">";
        // line 83
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 83));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 83));
        echo "</span>
\t\t\t\t<div class=\"row no-gutters\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-md-6 text-center barcode\">
\t\t\t\t<div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 80%; height: auto; display: flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t<img src=\"";
        // line 87
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 80%; height: auto; margin-bottom:0.5rem;\" />
\t\t\t\t<span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 88
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 88);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<div class=\"col-12 row\">
\t\t\t\t<div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 93
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 93)), 0, ".", ",");
        echo "</div>
\t\t\t\t<span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 98
        if (($context["tier_info"] ?? null)) {
            // line 99
            echo "\t\t\t\t<div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 101)) {
                // line 102
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 105);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 105), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 105);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 109)) {
                // line 110
                echo "\t\t\t\t<tr>
\t\t\t\t<td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
\t\t\t\t<td>
\t\t\t\tShop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 113
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 113);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 113), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 113);
                echo "</span>.
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
        <h2 class=\"title\">";
        // line 124
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 126
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 127
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 128
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 129
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 132
        if (($context["credit_cards"] ?? null)) {
            // line 133
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 134
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 137
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 137);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "          </ul>
        </div>
      ";
        }
        // line 142
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 143
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 145
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 146
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 147
        if (($context["reward"] ?? null)) {
            // line 148
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 150
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 151
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 152
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 154
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 155
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 163
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 165
        if ( !($context["tracking"] ?? null)) {
            // line 166
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 168
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 169
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 171
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 174
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 176
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 179
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 180
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 182
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
        return array (  447 => 182,  442 => 180,  438 => 179,  430 => 176,  425 => 174,  420 => 171,  413 => 169,  406 => 168,  398 => 166,  396 => 165,  391 => 163,  380 => 155,  376 => 154,  369 => 152,  363 => 151,  356 => 150,  348 => 148,  346 => 147,  340 => 146,  334 => 145,  329 => 143,  326 => 142,  321 => 139,  310 => 137,  306 => 136,  301 => 134,  298 => 133,  296 => 132,  288 => 129,  282 => 128,  276 => 127,  270 => 126,  265 => 124,  259 => 120,  254 => 117,  243 => 113,  238 => 110,  235 => 109,  224 => 105,  219 => 102,  217 => 101,  213 => 99,  211 => 98,  203 => 93,  195 => 88,  191 => 87,  182 => 83,  178 => 82,  168 => 76,  162 => 74,  160 => 73,  155 => 72,  152 => 71,  149 => 70,  146 => 69,  143 => 68,  140 => 67,  137 => 66,  135 => 65,  130 => 64,  124 => 62,  122 => 61,  117 => 59,  111 => 57,  109 => 56,  106 => 55,  95 => 53,  91 => 52,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
