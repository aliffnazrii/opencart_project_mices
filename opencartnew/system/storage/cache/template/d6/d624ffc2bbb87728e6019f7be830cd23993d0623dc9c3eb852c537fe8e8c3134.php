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
class __TwigTemplate_073b2ed96bdbdf21dba50a5c2c4d65cbe39a4153ce696bc2ad4c4b2bdf9a4d6b extends \Twig\Template
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
        echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 82));
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
                  <span style=\"color: #141300; font-weight:900; font-size:18px\">Points</span>
                </div>
              </div>
            </div>
\t\t\t";
        // line 97
        if (($context["tier_info"] ?? null)) {
            // line 98
            echo "            <div class=\"text-left\" style=\"margin-top: 30px; border-radius: 4px; padding: 10px; width: 100%; height: auto; color: #141300;\">
              <table style=\"width: 100%;\">
                ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 100)) {
                // line 101
                echo "                  <tr>
                    <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
                    <td>
                      Shop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "renewal_min_purchase_left", [], "any", false, false, false, 104);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "tier_renewal_date", [], "any", false, false, false, 104), "d/m/Y");
                echo "</span> to remain in <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "name", [], "any", false, false, false, 104);
                echo "</span>.
                    </td>
                  </tr>
                ";
            }
            // line 108
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 108)) {
                // line 109
                echo "                  <tr>
                    <td style=\"width: 1%; vertical-align: top; color: #79432A; font-weight: 600;\">*</td>
                    <td>
                      Shop up to <span style=\"color:#79432A; font-weight:600;\">";
                // line 112
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "amount_left_to_upgrade", [], "any", false, false, false, 112);
                echo "</span> more by <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "purchase_to_upgrade_by", [], "any", false, false, false, 112), "d/m/Y");
                echo "</span> to tier up to <span style=\"color:#79432A; font-weight:600;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["tier_info"] ?? null), "next_tier_name", [], "any", false, false, false, 112);
                echo "</span>.
                    </td>
                  </tr>
                ";
            }
            // line 116
            echo "              </table>
            </div>
\t\t\t";
        }
        // line 119
        echo "          </div>
        </div>
      </div>
\t  
        <h2 class=\"title\">";
        // line 123
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 125
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 126
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 127
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 128
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 131
        if (($context["credit_cards"] ?? null)) {
            // line 132
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 133
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 136
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 136);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 136);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "          </ul>
        </div>
      ";
        }
        // line 141
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 142
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 144
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 145
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 146
        if (($context["reward"] ?? null)) {
            // line 147
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 149
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 150
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 151
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 153
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 154
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 162
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 164
        if ( !($context["tracking"] ?? null)) {
            // line 165
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 167
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 168
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 170
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 173
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 175
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 178
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 179
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 181
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
        return array (  446 => 181,  441 => 179,  437 => 178,  429 => 175,  424 => 173,  419 => 170,  412 => 168,  405 => 167,  397 => 165,  395 => 164,  390 => 162,  379 => 154,  375 => 153,  368 => 151,  362 => 150,  355 => 149,  347 => 147,  345 => 146,  339 => 145,  333 => 144,  328 => 142,  325 => 141,  320 => 138,  309 => 136,  305 => 135,  300 => 133,  297 => 132,  295 => 131,  287 => 128,  281 => 127,  275 => 126,  269 => 125,  264 => 123,  258 => 119,  253 => 116,  242 => 112,  237 => 109,  234 => 108,  223 => 104,  218 => 101,  216 => 100,  212 => 98,  210 => 97,  202 => 92,  194 => 87,  190 => 86,  183 => 82,  177 => 81,  168 => 76,  162 => 74,  160 => 73,  155 => 72,  152 => 71,  149 => 70,  146 => 69,  143 => 68,  140 => 67,  137 => 66,  135 => 65,  130 => 64,  124 => 62,  122 => 61,  117 => 59,  111 => 57,  109 => 56,  106 => 55,  95 => 53,  91 => 52,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
