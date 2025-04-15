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
class __TwigTemplate_5d1229ba734aa5997ef38c998a43d17777979fb37d3574de73eecd4a56e6e736 extends \Twig\Template
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
            echo " <h2 class=\"title page-title\">";
            echo ($context["text_my_account"] ?? null);
            echo "</h2>\t
";
        }
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 72);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 74
        if (($context["success"] ?? null)) {
            // line 75
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 77
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 80
        echo "  <div class=\"row\">
    ";
        // line 81
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 82
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 83
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 84
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 85
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 86
            echo "    ";
        } else {
            // line 87
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 88
            echo "    ";
        }
        // line 89
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "pageTitlePosition"], "method", false, false, false, 90) == "default")) {
            // line 91
            echo "        <h1 class=\"title page-title\">
          ";
            // line 92
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 95
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
lalallaa
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 102
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 103
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 107
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 108
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 112
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 113
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 116
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 118
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 119
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 123
        if (($context["credit_cards"] ?? null)) {
            // line 124
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 126
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 130
                echo "              <li>
                <a href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 131);
                echo "\">
                  ";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 132);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "          </ul>
        </div>
      ";
        }
        // line 139
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 141
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 145
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 146
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 150
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 151
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 154
        if (($context["reward"] ?? null)) {
            // line 155
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 156
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 157
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 161
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 162
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 163
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 167
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 168
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 173
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 174
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 178
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 179
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 184
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 185
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 194
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 197
        if ( !($context["tracking"] ?? null)) {
            // line 198
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 199
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 200
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 204
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 205
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 206
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 210
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 211
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 215
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 219
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 223
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 224
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 229
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 231
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 234
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
        return array (  491 => 234,  485 => 231,  480 => 229,  472 => 224,  468 => 223,  461 => 219,  455 => 215,  448 => 211,  444 => 210,  437 => 206,  433 => 205,  430 => 204,  423 => 200,  419 => 199,  416 => 198,  414 => 197,  408 => 194,  396 => 185,  392 => 184,  384 => 179,  380 => 178,  373 => 174,  369 => 173,  361 => 168,  357 => 167,  350 => 163,  346 => 162,  343 => 161,  336 => 157,  332 => 156,  329 => 155,  327 => 154,  321 => 151,  317 => 150,  310 => 146,  306 => 145,  299 => 141,  295 => 139,  290 => 136,  280 => 132,  276 => 131,  273 => 130,  269 => 129,  263 => 126,  259 => 124,  257 => 123,  248 => 119,  242 => 118,  235 => 116,  229 => 113,  225 => 112,  218 => 108,  214 => 107,  207 => 103,  203 => 102,  192 => 95,  186 => 92,  183 => 91,  181 => 90,  176 => 89,  173 => 88,  170 => 87,  167 => 86,  164 => 85,  161 => 84,  158 => 83,  156 => 82,  152 => 81,  149 => 80,  143 => 77,  139 => 75,  137 => 74,  132 => 72,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
