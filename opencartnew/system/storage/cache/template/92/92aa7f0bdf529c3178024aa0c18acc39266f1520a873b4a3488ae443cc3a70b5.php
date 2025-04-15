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
class __TwigTemplate_45d4f9816c98708d98d3d0b9f49930d524d6fa974550d1908bdf951b4e86aa26 extends \Twig\Template
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
            echo "        <h1 class=\"title page-title\">
          ";
            // line 95
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 98
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 101
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 105
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 106
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 110
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 111
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 115
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 116
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 119
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"";
        // line 121
        echo ($context["coupon"] ?? null);
        echo "\">";
        echo ($context["text_my_coupon"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 122
        echo ($context["coupon_history"] ?? null);
        echo "\">";
        echo ($context["text_coupon_history"] ?? null);
        echo "</a></li>
\t\t\t\t
        </ul>
      </div>
      ";
        // line 126
        if (($context["credit_cards"] ?? null)) {
            // line 127
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 129
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 133
                echo "              <li>
                <a href=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 134);
                echo "\">
                  ";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 135);
                echo "
                </a>
              </li>
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
        <h2 class=\"title\">
          ";
        // line 144
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 148
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 149
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 153
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 154
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 157
        if (($context["reward"] ?? null)) {
            // line 158
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 159
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 160
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 164
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 165
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 166
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 170
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 171
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 176
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 177
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 181
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 182
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 187
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 188
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 197
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 200
        if ( !($context["tracking"] ?? null)) {
            // line 201
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 202
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 203
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 207
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 208
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 209
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 213
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 214
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 218
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 222
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 226
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 227
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 232
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 234
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 237
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
        return array (  497 => 237,  491 => 234,  486 => 232,  478 => 227,  474 => 226,  467 => 222,  461 => 218,  454 => 214,  450 => 213,  443 => 209,  439 => 208,  436 => 207,  429 => 203,  425 => 202,  422 => 201,  420 => 200,  414 => 197,  402 => 188,  398 => 187,  390 => 182,  386 => 181,  379 => 177,  375 => 176,  367 => 171,  363 => 170,  356 => 166,  352 => 165,  349 => 164,  342 => 160,  338 => 159,  335 => 158,  333 => 157,  327 => 154,  323 => 153,  316 => 149,  312 => 148,  305 => 144,  301 => 142,  296 => 139,  286 => 135,  282 => 134,  279 => 133,  275 => 132,  269 => 129,  265 => 127,  263 => 126,  254 => 122,  248 => 121,  241 => 119,  235 => 116,  231 => 115,  224 => 111,  220 => 110,  213 => 106,  209 => 105,  202 => 101,  195 => 98,  189 => 95,  186 => 94,  184 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  167 => 88,  164 => 87,  161 => 86,  159 => 85,  155 => 84,  152 => 83,  146 => 80,  142 => 78,  140 => 77,  135 => 75,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
