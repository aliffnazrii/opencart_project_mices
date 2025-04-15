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
class __TwigTemplate_69b9fa0adbb546fd433b51f1ccb614e44c0c8d3edb5a34dd81eb6dac3d4275ad extends \Twig\Template
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
<style>
  .banner-style {
    background: linear-gradient(90deg, rgb(223, 183, 164) 0%, rgb(239, 219, 210) 50%, rgb(245, 231, 224) 70%, rgb(223, 183, 164) 100%);
    margin-left: 10px;
    margin-right: 10px;
    padding: 10px;
    padding-bottom: 20px;
    padding-top: 20px;
    color: #ffffff;
    margin: 15px;
    position: relative;
    border: 1px solid #ffffff;
    border-radius: 20px;
    overflow: hidden;
  }
  
  .banner-style span {
    line-height: 1.2 !important;
  }
  
  @media (min-width: 992px) {
    .text-md-center {
      text-align: left !important;
    }
    .no-gutters {
      margin-left: 20px;
    }
    .barcode {
      padding: 0;
    }
  }
  
  @media (max-width: 991px) {
    .text-md-center {
      text-align: center !important;
    }
    .barcode {
      padding-left: 20px;
      padding-right: 20px;
    }
    .hutz-points {
      display: block;
      width: 100%;
      text-align: center;
      margin-top: 0.5rem;
    }
  }
</style>

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
      <div id=\"reward-points-banner-block\">
        <div id=\"reward-points-banner\">
          <div class=\"banner-style text-center\">
            <span class=\"text-center\" style=\"font-weight:500; font-size:18px; color:#5A0F14;\">";
        // line 81
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 81));
        echo " ";
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 81));
        echo "</span>
            <p class=\"text-center\" style=\"font-weight:900; font-size:30px; color:#5A0F14;\">";
        // line 82
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 82));
        echo "</p>
            <div class=\"row no-gutters\" style=\"margin-top: 20px;\">
              <div class=\"col-md-6 text-center barcode\">
                <div style=\"background-color: #ffffff; border-radius: 4px; padding: 10px; width: 100%; height: auto;\">
                  <img src=\"";
        // line 86
        echo ($context["barcode"] ?? null);
        echo "\" alt=\"Barcode Image\" style=\"width: 100%; height: auto; margin-bottom:0.5rem;\" />
                  <span style=\"color:#000; font-weight:900; font-size:18px\">";
        // line 87
        echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 87);
        echo "</span>
                </div>
              </div>
              <div class=\"col-md-6 text-center\">
                <div class=\"col-12 row\">
                  <div id=\"reward-points-value\" style=\"color:#6A3B25; font-size:40px; font-weight:600\">";
        // line 92
        echo twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "points", [], "any", false, false, false, 92)), 0, ".", ",");
        echo "</div>
                  <span style=\"color: #141300; font-weight:900; font-size:18px\">HUTZ Points</span>
                  <br /><span class=\"\" style=\"color: #141300; font-weight:400;\">Expired : ";
        // line 94
        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "point_expiry", [], "any", false, false, false, 94), "d/m/Y");
        echo "</span>
                </div>
              </div>
            </div>
\t\t\t";
        // line 98
        if (($context["tier_info"] ?? null)) {
            // line 99
            echo "            <div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
              <table style=\"width: 100%;\">
                ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 101)) {
                // line 102
                echo "                  <tr>
                    <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
                    <td>
                      Shop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 105);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 105), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 105);
                echo "</span>.
                    </td>
                  </tr>
                ";
            }
            // line 109
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 109)) {
                // line 110
                echo "                  <tr>
                    <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
                    <td>
                      Shop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 113
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 113);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 113), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 113);
                echo "</span>.
                    </td>
                  </tr>
                ";
            }
            // line 117
            echo "              </table>
            </div>
\t\t\t";
        }
        // line 120
        echo "          </div>
        </div>
      </div>
\t  
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
        return array (  450 => 182,  445 => 180,  441 => 179,  433 => 176,  428 => 174,  423 => 171,  416 => 169,  409 => 168,  401 => 166,  399 => 165,  394 => 163,  383 => 155,  379 => 154,  372 => 152,  366 => 151,  359 => 150,  351 => 148,  349 => 147,  343 => 146,  337 => 145,  332 => 143,  329 => 142,  324 => 139,  313 => 137,  309 => 136,  304 => 134,  301 => 133,  299 => 132,  291 => 129,  285 => 128,  279 => 127,  273 => 126,  268 => 124,  262 => 120,  257 => 117,  246 => 113,  241 => 110,  238 => 109,  227 => 105,  222 => 102,  220 => 101,  216 => 99,  214 => 98,  207 => 94,  202 => 92,  194 => 87,  190 => 86,  183 => 82,  177 => 81,  168 => 76,  162 => 74,  160 => 73,  155 => 72,  152 => 71,  149 => 70,  146 => 69,  143 => 68,  140 => 67,  137 => 66,  135 => 65,  130 => 64,  124 => 62,  122 => 61,  117 => 59,  111 => 57,  109 => 56,  106 => 55,  95 => 53,  91 => 52,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
