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
class __TwigTemplate_3d9256d1540dc90195d6570a0ef152c2d09a7bf3a5a6dce7905e2116729e0e1f extends \Twig\Template
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

\t\t\t\t
\t\t\t\t
";
        }
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 75);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 77
        if (($context["success"] ?? null)) {
            // line 78
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 80
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  <div class=\"row\">
    ";
        // line 84
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 85
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 86
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 87
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 88
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 89
            echo "    ";
        } else {
            // line 90
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 91
            echo "    ";
        }
        // line 92
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 93), "get", [0 => "pageTitlePosition"], "method", false, false, false, 93) == "default")) {
            // line 94
            echo "        
      ";
        }
        // line 96
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 99
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 103
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 104
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 108
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 109
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 113
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 114
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 117
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 119
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 120
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 124
        if (($context["credit_cards"] ?? null)) {
            // line 125
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 127
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 131
                echo "              <li>
                <a href=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 132);
                echo "\">
                  ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 133);
                echo "
                </a>
              </li>
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
        <h2 class=\"title\">
          ";
        // line 142
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 146
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 147
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 151
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 152
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 155
        if (($context["reward"] ?? null)) {
            // line 156
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 157
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 158
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 162
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 163
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 164
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 168
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 169
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 174
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 175
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 179
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 180
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 185
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 186
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 195
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 198
        if ( !($context["tracking"] ?? null)) {
            // line 199
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 200
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 201
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 205
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 206
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 207
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 211
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 212
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 216
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 220
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 224
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 225
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 230
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 232
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 235
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
        return array (  492 => 235,  486 => 232,  481 => 230,  473 => 225,  469 => 224,  462 => 220,  456 => 216,  449 => 212,  445 => 211,  438 => 207,  434 => 206,  431 => 205,  424 => 201,  420 => 200,  417 => 199,  415 => 198,  409 => 195,  397 => 186,  393 => 185,  385 => 180,  381 => 179,  374 => 175,  370 => 174,  362 => 169,  358 => 168,  351 => 164,  347 => 163,  344 => 162,  337 => 158,  333 => 157,  330 => 156,  328 => 155,  322 => 152,  318 => 151,  311 => 147,  307 => 146,  300 => 142,  296 => 140,  291 => 137,  281 => 133,  277 => 132,  274 => 131,  270 => 130,  264 => 127,  260 => 125,  258 => 124,  249 => 120,  243 => 119,  236 => 117,  230 => 114,  226 => 113,  219 => 109,  215 => 108,  208 => 104,  204 => 103,  197 => 99,  190 => 96,  186 => 94,  184 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  167 => 88,  164 => 87,  161 => 86,  159 => 85,  155 => 84,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
