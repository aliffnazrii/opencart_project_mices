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
class __TwigTemplate_91ddd9d151cf59a0d499806c8a441291d7b399e541b485c17db98a48970a1b55 extends \Twig\Template
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
        echo "  
  <div class=\"row\">
    ";
        // line 85
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 86
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 87
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 88
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 89
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 90
            echo "    ";
        } else {
            // line 91
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 92
            echo "    ";
        }
        // line 93
        echo "    
    <div id=\"content\" class=\"account-page ";
        // line 94
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 95), "get", [0 => "pageTitlePosition"], "method", false, false, false, 95) == "default")) {
            // line 96
            echo "        <h1 class=\"title page-title\">
          ";
            // line 97
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 100
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 103
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 107
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 108
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 112
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 113
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 117
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 118
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 121
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 123
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 124
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 128
        if (($context["credit_cards"] ?? null)) {
            // line 129
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 131
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 135
                echo "              <li>
                <a href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 136);
                echo "\">
                  ";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 137);
                echo "
                </a>
              </li>
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
        <h2 class=\"title\">
          ";
        // line 146
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 150
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 151
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 155
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 156
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 159
        if (($context["reward"] ?? null)) {
            // line 160
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 161
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 162
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 166
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 167
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 168
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 172
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 173
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 178
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 179
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 183
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 184
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 189
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 190
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 199
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 202
        if ( !($context["tracking"] ?? null)) {
            // line 203
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 204
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 205
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 209
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 210
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 211
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 215
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 216
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 220
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 224
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 228
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 229
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 234
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 236
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 239
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
        return array (  500 => 239,  494 => 236,  489 => 234,  481 => 229,  477 => 228,  470 => 224,  464 => 220,  457 => 216,  453 => 215,  446 => 211,  442 => 210,  439 => 209,  432 => 205,  428 => 204,  425 => 203,  423 => 202,  417 => 199,  405 => 190,  401 => 189,  393 => 184,  389 => 183,  382 => 179,  378 => 178,  370 => 173,  366 => 172,  359 => 168,  355 => 167,  352 => 166,  345 => 162,  341 => 161,  338 => 160,  336 => 159,  330 => 156,  326 => 155,  319 => 151,  315 => 150,  308 => 146,  304 => 144,  299 => 141,  289 => 137,  285 => 136,  282 => 135,  278 => 134,  272 => 131,  268 => 129,  266 => 128,  257 => 124,  251 => 123,  244 => 121,  238 => 118,  234 => 117,  227 => 113,  223 => 112,  216 => 108,  212 => 107,  205 => 103,  198 => 100,  192 => 97,  189 => 96,  187 => 95,  183 => 94,  180 => 93,  177 => 92,  174 => 91,  171 => 90,  168 => 89,  165 => 88,  162 => 87,  160 => 86,  156 => 85,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
