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
class __TwigTemplate_75656b7c7deb996848ad815101a11cc1d2de4612501a3651c92547d38033e9bd extends \Twig\Template
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
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 72
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 76);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 78
        if (($context["success"] ?? null)) {
            // line 79
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 81
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  <div class=\"row\">
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
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 94), "get", [0 => "pageTitlePosition"], "method", false, false, false, 94) == "default")) {
            // line 95
            echo "        <h1 class=\"title page-title\">
          ";
            // line 96
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 99
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 102
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 106
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 107
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 111
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 112
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 116
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 117
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-wishlist\">
            <a href=\"";
        // line 121
        echo ($context["wishlist"] ?? null);
        echo "\">
              ";
        // line 122
        echo ($context["text_wishlist"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 127
        if (($context["credit_cards"] ?? null)) {
            // line 128
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 130
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 134
                echo "              <li>
                <a href=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 135);
                echo "\">
                  ";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 136);
                echo "
                </a>
              </li>
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
        <h2 class=\"title\">
          ";
        // line 145
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 149
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 150
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 154
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 155
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 158
        if (($context["reward"] ?? null)) {
            // line 159
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 160
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 161
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 165
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 166
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 167
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 171
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 172
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 176
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 177
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 186
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 189
        if ( !($context["tracking"] ?? null)) {
            // line 190
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 191
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 192
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 196
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 197
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 198
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 202
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 203
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 207
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 211
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 215
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 216
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 221
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 223
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 226
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
        return array (  466 => 226,  460 => 223,  455 => 221,  447 => 216,  443 => 215,  436 => 211,  430 => 207,  423 => 203,  419 => 202,  412 => 198,  408 => 197,  405 => 196,  398 => 192,  394 => 191,  391 => 190,  389 => 189,  383 => 186,  371 => 177,  367 => 176,  360 => 172,  356 => 171,  349 => 167,  345 => 166,  342 => 165,  335 => 161,  331 => 160,  328 => 159,  326 => 158,  320 => 155,  316 => 154,  309 => 150,  305 => 149,  298 => 145,  294 => 143,  289 => 140,  279 => 136,  275 => 135,  272 => 134,  268 => 133,  262 => 130,  258 => 128,  256 => 127,  248 => 122,  244 => 121,  237 => 117,  233 => 116,  226 => 112,  222 => 111,  215 => 107,  211 => 106,  204 => 102,  197 => 99,  191 => 96,  188 => 95,  186 => 94,  181 => 93,  178 => 92,  175 => 91,  172 => 90,  169 => 89,  166 => 88,  163 => 87,  161 => 86,  157 => 85,  154 => 84,  148 => 81,  144 => 79,  142 => 78,  137 => 76,  130 => 72,  126 => 70,  124 => 69,  121 => 68,  111 => 64,  107 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
