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
class __TwigTemplate_02d8259f570980671b8b7705ef2a6025231df4347e683e2653643a4d6b7f71c7 extends \Twig\Template
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
        <h2 class=\"title\">";
        // line 78
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 80
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 81
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 82
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 83
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 86
        if (($context["credit_cards"] ?? null)) {
            // line 87
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 88
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 91
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 91);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 91);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "          </ul>
        </div>
      ";
        }
        // line 96
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 97
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 99
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 100
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
          ";
        // line 101
        if (($context["reward"] ?? null)) {
            // line 102
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
          ";
        }
        // line 104
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 105
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 106
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
<li class=\"edit-points\">
  <a href=\"";
        // line 108
        echo ($context["point"] ?? null);
        echo "\">
    ";
        // line 109
        echo ($context["text_points"] ?? null);
        echo "
  </a>
</li>

      
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 117
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 119
        if ( !($context["tracking"] ?? null)) {
            // line 120
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 122
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 123
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
          ";
        }
        // line 125
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 128
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 130
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 133
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 134
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 136
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
        return array (  356 => 136,  351 => 134,  347 => 133,  339 => 130,  334 => 128,  329 => 125,  322 => 123,  315 => 122,  307 => 120,  305 => 119,  300 => 117,  289 => 109,  285 => 108,  278 => 106,  272 => 105,  265 => 104,  257 => 102,  255 => 101,  249 => 100,  243 => 99,  238 => 97,  235 => 96,  230 => 93,  219 => 91,  215 => 90,  210 => 88,  207 => 87,  205 => 86,  197 => 83,  191 => 82,  185 => 81,  179 => 80,  174 => 78,  168 => 76,  162 => 74,  160 => 73,  155 => 72,  152 => 71,  149 => 70,  146 => 69,  143 => 68,  140 => 67,  137 => 66,  135 => 65,  130 => 64,  124 => 62,  122 => 61,  117 => 59,  111 => 57,  109 => 56,  106 => 55,  95 => 53,  91 => 52,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
